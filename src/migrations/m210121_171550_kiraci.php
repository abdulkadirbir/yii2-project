<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210121_171550_kiraci
 */
class m210121_171550_kiraci extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('kiraci', [
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
        return $this->dropTable('kiraci');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210121_171550_kiraci cannot be reverted.\n";

        return false;
    }
    */
}
