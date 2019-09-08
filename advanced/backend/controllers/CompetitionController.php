<?php
/*
Team:猫和老鼠
Coding by 潘巧巧1613415
*/

namespace backend\controllers;

use Yii;
use common\models\Competition;
use common\models\CompetitionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CompetitionController implements the CRUD actions for Competition model.
 */
class CompetitionController extends Controller
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
     * Lists all Competition models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CompetitionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Competition model.
     * @param string $Competition_Time
     * @param string $Competition_TeamA
     * @param string $Competition_TeamB
     * @return mixed
     */
    public function actionView($Competition_Time, $Competition_TeamA, $Competition_TeamB)
    {
        return $this->render('view', [
            'model' => $this->findModel($Competition_Time, $Competition_TeamA, $Competition_TeamB),
        ]);
    }

    /**
     * Creates a new Competition model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Competition();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Competition_Time' => $model->Competition_Time, 'Competition_TeamA' => $model->Competition_TeamA, 'Competition_TeamB' => $model->Competition_TeamB]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Competition model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Competition_Time
     * @param string $Competition_TeamA
     * @param string $Competition_TeamB
     * @return mixed
     */
    public function actionUpdate($Competition_Time, $Competition_TeamA, $Competition_TeamB)
    {
        $model = $this->findModel($Competition_Time, $Competition_TeamA, $Competition_TeamB);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Competition_Time' => $model->Competition_Time, 'Competition_TeamA' => $model->Competition_TeamA, 'Competition_TeamB' => $model->Competition_TeamB]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Competition model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Competition_Time
     * @param string $Competition_TeamA
     * @param string $Competition_TeamB
     * @return mixed
     */
    public function actionDelete($Competition_Time, $Competition_TeamA, $Competition_TeamB)
    {
        $this->findModel($Competition_Time, $Competition_TeamA, $Competition_TeamB)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Competition model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Competition_Time
     * @param string $Competition_TeamA
     * @param string $Competition_TeamB
     * @return Competition the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Competition_Time, $Competition_TeamA, $Competition_TeamB)
    {
        if (($model = Competition::findOne(['Competition_Time' => $Competition_Time, 'Competition_TeamA' => $Competition_TeamA, 'Competition_TeamB' => $Competition_TeamB])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
