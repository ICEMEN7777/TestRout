<?php

use yii\db\Migration;

/**
 * Class m190226_182400_author
 */
class m190226_182400_author extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('author', [

            'id'=>$this->primaryKey(),
            'title'=>$this->string(200),
            'text'=>$this->string(),
            'author_id'=>$this->integer(),
            'date'=>$this->date("Y-m-d H:i:s"),

        ]);



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190226_182400_author cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190226_182400_author cannot be reverted.\n";

        return false;
    }
    */
}
