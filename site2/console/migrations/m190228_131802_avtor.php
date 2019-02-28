<?php

use yii\db\Migration;

/**
 * Class m190228_131802_avtor
 */
class m190228_131802_avtor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('avtor',[

            'id'=> $this->primaryKey(),
            'name'=>$this->string(50),
            'creation date'=>$this->timestamp(),
            'date of change'=>$this->timestamp()
        ]);
        $this->alterColumn('avtor', 'id', $this->smallInteger(8).'NOT NULL AUTO_INCREMENT');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190228_131802_avtor cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190228_131802_avtor cannot be reverted.\n";

        return false;
    }
    */
}
