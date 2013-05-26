<?php

class AgentController extends Controller {

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
     * Displays a particular agent.
     * @param integer $id the ID of the agent to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'agent' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new agent.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $agent = new Agent;
        $company = new Company;


        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($agent);

        if (isset($_POST['Agent'], $_POST['Company'])) {
            $company->attributes = $_POST['Company'];                       
            if ($company->save()) {
                $agent->attributes = $_POST['Agent'];
                $agent->company_id = $company->id;
                if ($agent->save())
                    $this->redirect(array('view', 'id' => $agent->id));
            }
        }

        $this->render('create', array(
            'agent' => $agent,
            'company' => $company,
        ));
    }

    /**
     * Updates a particular agent.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the agent to be updated
     */
    public function actionUpdate($id) {
        $agent = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($agent);

        if (isset($_POST['Agent'])) {
            $agent->attributes = $_POST['Agent'];
            if ($agent->save()) {
                $agent->company->attributes = $_POST['Company'];
                $agent->company->save();
                $this->redirect(array('view', 'id' => $agent->id));
            }
        }

        $this->render('update', array(
            'agent' => $agent,
        ));
    }

    /**
     * Deletes a particular agent.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the agent to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->company->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all agents.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Agent');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all agents.
     */
    public function actionAdmin() {
        $agent = new Agent('search');
        $agent->unsetAttributes();  // clear any default values
        if (isset($_GET['Agent']))
            $agent->attributes = $_GET['Agent'];

        $this->render('admin', array(
            'agent' => $agent,
        ));
    }

    /**
     * Returns the data agent based on the primary key given in the GET variable.
     * If the data agent is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the agent to be loaded
     * @return Agent the loaded agent
     * @throws CHttpException
     */
    public function loadModel($id) {
        $agent = Agent::model()->with('company')->findByPk((int) $id);
        if ($agent === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $agent;
    }

    /**
     * Performs the AJAX validation.
     * @param Agent $agent the agent to be validated
     */
    protected function performAjaxValidation($agent) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'agent-form') {
            echo CActiveForm::validate($agent);
            Yii::app()->end();
        }
    }

}
