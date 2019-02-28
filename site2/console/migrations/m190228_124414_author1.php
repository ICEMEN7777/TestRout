<?php

use yii\db\Migration;

/**
 * Class m190228_124414_author1
 */
class m190228_124414_author1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author1',[

            'id'=> $this->primaryKey(),
            'name'=>$this->string(50)
        ]);
        $this->alterColumn('author1', 'id', $this->smallInteger(8).'NOT NULL AUTO_INCREMENT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190228_124414_author1 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190228_124414_author1 cannot be reverted.\n";

        return false;
    }
    */
}
