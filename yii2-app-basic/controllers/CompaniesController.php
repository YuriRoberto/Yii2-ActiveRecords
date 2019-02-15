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

    public function actionSalvar(){

        $company = new Company();
        $company->name = "IBM";
        $company->save();
    }

    public  function actionEditar(){

        $company = Company::findOne(['id' => 15]);
        $company->name = "iFood";
        $company->save();

    }

}

