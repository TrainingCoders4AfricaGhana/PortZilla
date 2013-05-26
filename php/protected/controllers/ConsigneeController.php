<?php

class ConsigneeController extends Controller {

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
     * Displays a particular consignee.
     * @param integer $id the ID of the consignee to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'consignee' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new consignee.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $consignee = new Consignee;
        $company = new Company;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($consignee);

        if (isset($_POST['Consignee'], $_POST['Company'])) {
            $company->attributes = $_POST['Company'];
            if ($company->save()) {
                $consignee->attributes = $_POST['Consignee'];
                $consignee->company_id = $company->id;
                if ($consignee->save())
                    $this->redirect(array('view', 'id' => $consignee->id));
            }
        }

        $this->render('create', array(
            'consignee' => $consignee,
            'company' => $company,
        ));
    }

    /**
     * Updates a particular consignee.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the consignee to be updated
     */
    public function actionUpdate($id) {
        $consignee = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($consignee);

        if (isset($_POST['Consignee'])) {
            $consignee->attributes = $_POST['Consignee'];
            if ($consignee->save()) {
                $consignee->company->attributes = $_POST['Company'];
                $consignee->company->save();
                $this->redirect(array('view', 'id' => $consignee->id));
            }
        }

        $this->render('update', array(
            'consignee' => $consignee,
        ));
    }

    /**
     * Deletes a particular consignee.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the consignee to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->company->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all consignees.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Consignee');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all consignees.
     */
    public function actionAdmin() {
        $consignee = new Consignee('search');
        $consignee->unsetAttributes();  // clear any default values
        if (isset($_GET['Consignee']))
            $consignee->attributes = $_GET['Consignee'];

        $this->render('admin', array(
            'consignee' => $consignee,
        ));
    }

    /**
     * Returns the data consignee based on the primary key given in the GET variable.
     * If the data consignee is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the consignee to be loaded
     * @return Consignee the loaded consignee
     * @throws CHttpException
     */
    public function loadModel($id) {
        $consignee = Consignee::model()->with('company')->findByPk((int) $id);
        if ($consignee === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $consignee;
    }

    /**
     * Performs the AJAX validation.
     * @param Consignee $consignee the consignee to be validated
     */
    protected function performAjaxValidation($consignee) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'consignee-form') {
            echo CActiveForm::validate($consignee);
            Yii::app()->end();
        }
    }

}
