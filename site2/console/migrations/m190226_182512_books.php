<?php

use yii\db\Migration;

/**
 * Class m190226_182512_books
 */
class m190226_182512_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('books', [

            'id'=>$this->primaryKey(),
            'title'=>$this->string(200),
            'text'=>$this->string(),
            'author_id'=>$this->integer(),
            'date'=>$this->date("Y-m-d H:i:s"),
            'alias'=>$this->string(200),
            'likes'=>$this->integer(),
            'hits'=>$this->integer(),
            'Дата создания'=>$this->timestamp(),


        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190226_182512_books cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190226_182512_books cannot be reverted.\n";

        return false;
    }
    */
}
