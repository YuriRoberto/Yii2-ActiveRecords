<?php 

namespace app\controllers;

use Yii; 
use yii\web\Controller;

class DefaultController extends Controller{

    public function actionIndex(){

        $companies = Yii::$app->db->createCommand("select * from company")->queryAll();
        
        foreach($companies as $company){

            echo $company['id'] . " - " . $company['name'] . "<br>";

        }

    }

}

