<?php 

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord {

    public static function tableName(){
        return "product";
    }

    public function rules() {

        return [
            [['name', 'release_date', 'description', 'company_id'], 'safe']
        ];

    }


}
