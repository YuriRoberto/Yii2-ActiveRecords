<?php 

namespace app\controllers;

use app\models\Customer;
use app\models\Product;
use yii\helpers\VarDumper;
use yii\web\Controller;


class ProductsController extends Controller {

    public function actionIndex(){

        $products = Product::find()->select('id, name, release_date')->asArray()->all();

        VarDumper::dump($products, 10, true);exit;

        foreach($products as $product){

            echo $product->name . "<br>";

        }

    }

    public function actionVer(){

        $product = Product::find()->where(['id' => 1])->one();

        VarDumper::dump($product, 10, true);

    }

    public function salvar(){

        $dados = [
            'name' => "Celular",
            'release_date' => '2017-05-29',
            'description' => "Um celular bacana",
            'company_id' => "Motorola"
        ];

        \Yii::$app->request->post();

        $product = new Product();
        $product->setAttributes($dados);
        $company->save();

    }

}

