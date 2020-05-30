<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    /*public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }*/

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        /*return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];*/
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //Assign role
            /*$auth = \Yii::$app->authManager;
            switch ($model->nivel) {
                case 1:
                    $clienteRole = $auth->getRole('cliente');
                    $auth->assign($clienteRole, $model->getId());
                    break;
                case 2:
                    $empleadoRole = $auth->getRole('empleado');
                    $auth->assign($empleadoRole, $model->getId());
                    break;
                case 3:
                    $adminRole = $auth->getRole('admin');
                    $auth->assign($adminRole, $model->getId());
                    break;
            }*/
            return $this->redirect('../app/index');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays Nosotros page.
     *
     * @return string
     */
    public function actionNosotros()
    {
        return $this->render('nosotros');
    }

    /**
     * Displays Servicio page.
     *
     * @return string
     */
    public function actionServicio()
    {
        return $this->render('servicio');
    }

    /**
     * Displays miservicio page.
     *
     * @return string
     */
    public function actionMiservicio()
    {
        return $this->render('miservicio');
    }

    /**
     * Displays contacto page.
     *
     * @return string
     */
    public function actionContacto()
    {
        return $this->render('contacto');
    }
}
