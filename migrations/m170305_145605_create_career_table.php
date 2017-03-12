<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `career`.
 */
class m170305_145605_create_career_table extends Migration
{
     public function up()
    {
        $this->createTable('{{%career}}', [
            'id_career' => Schema::TYPE_PK,
            'career_type' => Schema::TYPE_STRING . ' NOT NULL'
         ]);
    }

    public function down()
    {
        if ($this->db->schema->getTableSchema('{{%career}}', true) !== null) {
            $this->dropTable('{{%career}}');
        }
        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
