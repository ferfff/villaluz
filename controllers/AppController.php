<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\User;
use app\models\ChangePasswordForm;
use app\models\Pacientes;
use app\models\UsersPacientes;
use Exception;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AppController implements the CRUD actions for Users model.
 */
class AppController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['update','delete','view','asignar','desasignar','show','changepassword','create','changeuserpass'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isUserAdmin(Yii::$app->user->identity->id);
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'asignar' => ['POST'],
                    'desasignar' => ['POST'],
                ],
                
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        //Aplicar layout
        $this->layout='app';
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        //Seteamos nivel en session
        $user = $this->findModel(Yii::$app->user->identity->id);
        $session = Yii::$app->session;
        $session['nivel'] = $user->nivel;

        $pacientes = Pacientes::find()
            ->innerJoin('users_pacientes','`users_pacientes`.`pacientes_id` = `pacientes`.`id`')
            ->andWhere(['users_pacientes.users_id' => Yii::$app->user->identity->id])
            ->all();

        return $this->render('index', [
            'pacientes' => $pacientes
        ]);
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionShow()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        $dataProvider->setPagination(['pageSize' => 5]);

        return $this->render('show', [
            'dataProvider' => $dataProvider,
        ], false,true);
    }

    /**
     * Displays relation between patient and employee
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $assigned = UsersPacientes::findAll([
            'users_id' => $id,
        ]);

        $pacientesQuery = (new \yii\db\Query())->select('id')->from('pacientes')
            ->innerJoin('users_pacientes','`users_pacientes`.`pacientes_id` = `pacientes`.`id`')
            ->where(['users_pacientes.users_id' => $id]);

        $notAssigned = Pacientes::find()
            ->where(['NOT IN','id',$pacientesQuery])
            ->all();

        $user = $this->findModel($id);

        return $this->render('view', [
            'assigned'=>$assigned,
            'notAssigned'=>$notAssigned,
            'user'=>$user,
        ]);
    }

    /**
     * Asigna pacientes a un usuario
     * @return json
     */
    public function actionAsignar()
    {
        $data = Yii::$app->request->post();

        
        if (Yii::$app->request->isAjax) {
            $model = new UsersPacientes();
            $model->users_id = $data['userid'];
            $model->pacientes_id = $data['pacienteid'];

            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            try {
                $model->save();
                Yii::$app->response->statusCode = 200;
                
            } catch (\Exception $e) {
                throw new \yii\web\HttpException(405, $e);
                Yii::$app->response->statusCode = 405;
            }
        }
    }

    /**
     * Desasigna pacientes a un usuario
     * @return json
     */
    public function actionDesasignar()
    {
        $data = Yii::$app->request->post();
        
        if (Yii::$app->request->isAjax) {
            $model = UsersPacientes::findOne(['users_id' => $data['userid'], 'pacientes_id' => $data['pacienteid']]);

            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            try {
                $model->delete();
                Yii::$app->response->statusCode = 200;
                
            } catch (\Exception $e) {
                throw new \yii\web\HttpException(405, $e);
                Yii::$app->response->statusCode = 405;
                return ['data' => $e];
            }
        }
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())){
            $str=rand(); 
            $passwordnormal = uniqid();
            $model->authKey = $str.trim($model->id);
            $model->activo = 1;
            $model->password = Yii::$app->getSecurity()->generatePasswordHash($passwordnormal);
            
            if ($model->save()) {
                try {
                    Yii::$app->mailer->compose(['html' => '@app/mail/newuser'], ['password' => $passwordnormal, 'id' => $model->id, ])
                        ->setFrom('contacto@villaluz.com.mx')
                        ->setTo($model->email)
                        ->setSubject('Nuevo usuario creado en Villaluz')
                        ->send();
                } catch (\ErrorException $e) {
                    Yii::$app->session->setFlash('error', 'Usuario Creado pero el email no fue enviado'. $e->getMessage());
                }
                return $this->redirect(['show']);
            }
        }  

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelPass = new ChangePasswordForm($id);

        if ($model->load(Yii::$app->request->post())){

            $model->nacimiento=Yii::$app->formatter->asDate($model->nacimiento, "yyyy-MM-dd");
            if($model->save()){
                //\Yii::$app->session->setFlash('success', 'Usuario modificado correctamente');
                return $this->redirect(['show']);
            }
        }
        
        return $this->render('update', [
            'model' => $model,
            'modelPass' => $modelPass,
            'id' => $id,
        ]);
    }

    /**
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $connection = Yii::$app->db;
        $transaction = $connection->beginTransaction();
        try {
            $connection->createCommand()
            ->delete('users_pacientes', ['users_id' => $id])
            ->execute();
            $connection->createCommand()
            ->delete('users', ['id' => $id])
            ->execute();
            $transaction->commit();
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            throw $e;
        }
        return $this->redirect(['show']);
    }

    public function actionChangeuserpass()
    {
        $id = Yii::$app->request->post('id');

        try {
            $model = new ChangePasswordForm($id);
        } catch (Exception $e) {
            throw new \yii\web\BadRequestHttpException($e->getMessage());
        }
     
        if ($model->load(\Yii::$app->request->post())) {
            if($model->validate() && $model->changePassword()){
                //\Yii::$app->session->setFlash('success', 'Password cambiado!');
                return $this->redirect(['show']);
            }
        }
        \Yii::$app->session->setFlash('error', 'Algo falló, por favor intente más tarde!');
        return $this->redirect(['show']);
    }

    public function actionChangepassword(){
        $id = \Yii::$app->user->identity->id;

        try {
            $model = new ChangePasswordForm($id);
        } catch (Exception $e) {
            throw new \yii\web\BadRequestHttpException($e->getMessage());
        }
     
        if ($model->load(\Yii::$app->request->post())) {
            if($model->validate() && $model->changePassword()){
                //\Yii::$app->session->setFlash('success', 'Password cambiado!');
                return $this->redirect(['show']);
            }else{
                //\Yii::$app->session->setFlash('error', 'Algo falló, intente as tarde!');
            }
        }
            
        return $this->render('changepassword', [
            'model' => $model,
        ]);
    }

    /*public function actionPdf(){
        Yii::$app->response->format = 'pdf';
        
        $query = User::find();
        $users = $query->orderBy('id')->all();

		// Rotate the page
		Yii::$container->set(Yii::$app->response->formatters['pdf']['class'], [
			'format' => [216, 356], // Legal page size in mm
			'orientation' => 'Landscape', // This value will be used when 'format' is an array only. Skipped when 'format' is empty or is a string
			'beforeRender' => function($mpdf, $data) {},
			]);
		
		$this->layout = 'pdflayout';
		return $this->render('pdf', [
            'users' => $users,
        ]);
	}*/

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
