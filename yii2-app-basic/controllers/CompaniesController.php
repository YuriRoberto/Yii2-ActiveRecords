<?php 

namespace app\controllers;

use app\models\Company;
use yii\helpers\VarDumper;
use yii\web\Controller;

class CompaniesController extends Controller{

    public function actionIndex(){

        $companies = Company::find()->all();

        foreach ($companies as $company){

            echo $company->id . " -- " . $company->name . "<br>";

        }

    }

}

