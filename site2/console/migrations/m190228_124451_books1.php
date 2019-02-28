<?php

use yii\db\Migration;

/**
 * Class m190228_124451_books1
 */
class m190228_124451_books1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books1',[

            'id'=> $this->primaryKey(),
            'name'=>$this->string(50),
            'id_author1'=>$this->smallinteger(8)
        ]);
        $this->alterColumn('books1', 'id', $this->smallInteger(8).'NOT NULL AUTO_INCREMENT');

        $this->addForeignKey(
            'books1_to_author1',
            'books1',
            'id_author1',
            'author1',
            'id',
            'CASCADE'

        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190228_124451_books1 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190228_124451_books1 cannot be reverted.\n";

        return false;
    }
    */
}
