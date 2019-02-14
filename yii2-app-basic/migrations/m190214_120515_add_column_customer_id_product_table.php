<?php

use yii\db\Migration;

/**
 * Class m190214_120515_add_column_customer_id_product_table
 */
class m190214_120515_add_column_customer_id_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'customer_id', 'int(11)');
        $this->addForeignKey('fk_customer_product', 'product', 'customer_id', 'customer', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190214_120515_add_column_customer_id_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190214_120515_add_column_customer_id_product_table cannot be reverted.\n";

        return false;
    }
    */
}
