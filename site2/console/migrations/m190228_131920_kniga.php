<?php

use yii\db\Migration;

/**
 * Class m190228_131920_kniga
 */
class m190228_131920_kniga extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('kniga',[

            'id'=> $this->primaryKey(),
            'name'=>$this->string(50),
            'id_avtor'=>$this->smallinteger(8),
            'creation date'=>$this->timestamp(),
            'date of change'=>$this->timestamp()
        ]);
        $this->alterColumn('kniga', 'id', $this->smallInteger(8).'NOT NULL AUTO_INCREMENT');

        $this->addForeignKey(
            'kniga_to_avtor',
            'kniga',
            'id_avtor',
            'avtor',
            'id',
            'CASCADE'

        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190228_131920_kniga cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190228_131920_kniga cannot be reverted.\n";

        return false;
    }
    */
}
