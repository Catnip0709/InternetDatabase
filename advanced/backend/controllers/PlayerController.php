<?php
/*
Team:猫和老鼠
Coding by 潘巧巧1613415
*/

namespace backend\controllers;

use Yii;
use common\models\Player;
use common\models\PlayerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PlayerController implements the CRUD actions for Player model.
 */
class PlayerController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Player models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlayerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Player model.
     * @param string $player_Team
     * @param integer $player_Number
     * @return mixed
     */
    public function actionView($player_Team, $player_Number)
    {
        return $this->render('view', [
            'model' => $this->findModel($player_Team, $player_Number),
        ]);
    }

    /**
     * Creates a new Player model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Player();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'player_Team' => $model->player_Team, 'player_Number' => $model->player_Number]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Player model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $player_Team
     * @param integer $player_Number
     * @return mixed
     */
    public function actionUpdate($player_Team, $player_Number)
    {
        $model = $this->findModel($player_Team, $player_Number);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'player_Team' => $model->player_Team, 'player_Number' => $model->player_Number]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Player model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $player_Team
     * @param integer $player_Number
     * @return mixed
     */
    public function actionDelete($player_Team, $player_Number)
    {
        $this->findModel($player_Team, $player_Number)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Player model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $player_Team
     * @param integer $player_Number
     * @return Player the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($player_Team, $player_Number)
    {
        if (($model = Player::findOne(['player_Team' => $player_Team, 'player_Number' => $player_Number])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
