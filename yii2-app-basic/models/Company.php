<?php

namespace app\models;

use yii\db\ActiveRecord;

class Company extends ActiveRecord {

    public static function tableName(){
        return 'company';
    }

    public function getProducts(){

        return $this->hasMany(Product::className(), ['company_id' => 'id']);

    }

}



