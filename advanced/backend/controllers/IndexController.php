<?php
/*
Team:猫和老鼠
Coding by 潘巧巧1613415
*/

namespace app\controllers;
use yii\web\Controllers;
use app\models\commentatorofcctv5;



class IndexController extends Controller
{
    /*—————————————————自己加东西————————————————— */

    public function actionIndex1()
    {
        $test=new Test;
        $test->scenario='scenario1';
        $testData=[
            'data'=>['commentator_name'=>'3','commentator_nativeplace'=>'hello world']
        ];
        $test->load($testData,'data');
        echo $test->commentator_name;
        echo $test->commentator_nativeplace;
    }
}