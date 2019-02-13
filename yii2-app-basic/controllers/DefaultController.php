<?php 

namespace app\controllers;

use Yii;
use yii\helpers\VarDumper; 
use yii\web\Controller;

class DefaultController extends Controller{

    public function actionIndex(){

        $companies = Yii::$app->db->createCommand("select * from company")->queryAll();
        
        foreach($companies as $company){

            echo $company['id'] . " - " . $company['name'] . "<br>";

        }

    }

    public function actionCompany(){

        $company = Yii::$app->db->createCommand("select * from company where id = :id". [
            ':id' => $id
        ])->queryOne();

        VarDumper::dump($company, 10, true);

    }

    public function actionJoin(){

        $sql = "select p.nmae as product, p.release_date, c.name from product p
            inner join company c on p.company_id = c.id
        ";

        $products = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($products as $product){
            echo $product['product'] . ", " . $product['release_date'] . ", " . $product['company'] . "<br>";
        }

    }

}

