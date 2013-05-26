<?php

class ShipperController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular shipper.
     * @param integer $id the ID of the shipper to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'shipper' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new shipper.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $shipper = new Shipper;
        $company = new Company;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($shipper);

        if (isset($_POST['Shipper'], $_POST['Company'])) {
            $company->attributes = $_POST['Company'];
            if ($company->save()) {
                $shipper->attributes = $_POST['Shipper'];
                $shipper->company_id = $company->id;
                if ($shipper->save())
                    $this->redirect(array('view', 'id' => $shipper->id));
            }
        }


        $this->render('create', array(
            'shipper' => $shipper,
            'company' => $company,
        ));
    }

    /**
     * Updates a particular shipper.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the shipper to be updated
     */
    public function actionUpdate($id) {
        $shipper = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($shipper);

        if (isset($_POST['Shipper'])) {
            $shipper->attributes = $_POST['Shipper'];
            if ($shipper->save()){
                $shipper->company->attributes = $_POST['Company'];
                $shipper->company->save();
                $this->redirect(array('view', 'id' => $shipper->id));
            }
        }

        $this->render('update', array(
            'shipper' => $shipper,
        ));
    }

    /**
     * Deletes a particular shipper.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the shipper to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->company->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all shippers.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Shipper');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all shippers.
     */
    public function actionAdmin() {
        $shipper = new Shipper('search');
        $shipper->unsetAttributes();  // clear any default values
        if (isset($_GET['Shipper']))
            $shipper->attributes = $_GET['Shipper'];

        $this->render('admin', array(
            'shipper' => $shipper,
        ));
    }

    /**
     * Returns the data shipper based on the primary key given in the GET variable.
     * If the data shipper is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the shipper to be loaded
     * @return Shipper the loaded shipper
     * @throws CHttpException
     */
    public function loadModel($id) {
        $shipper = Shipper::model()->with('company')->findByPk((int) $id);
        if ($shipper === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $shipper;
    }

    /**
     * Performs the AJAX validation.
     * @param Shipper $shipper the shipper to be validated
     */
    protected function performAjaxValidation($shipper) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'shipper-form') {
            echo CActiveForm::validate($shipper);
            Yii::app()->end();
        }
    }

}
