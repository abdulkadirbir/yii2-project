<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210121_170515_mahalle
 */
class m210121_170515_mahalle extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('mahalle', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'isim' => Schema::TYPE_STRING,
            
            'soyisim' => Schema::TYPE_STRING,
           
            'memleket' => Schema::TYPE_STRING,
            
            
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('mahalle');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210121_170515_mahalle cannot be reverted.\n";

        return false;
    }
    */
}
