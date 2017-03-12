<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `personality`.
 */
class m170305_124226_create_personality_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%personality}}', [
            'id_personality' => Schema::TYPE_PK,
            'pers_name' => Schema::TYPE_STRING . ' NOT NULL',
            'pers_secondname' => Schema::TYPE_STRING,
            'pers_lastname' => Schema::TYPE_STRING . ' NOT NULL' 
                         
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
       if ($this->db->schema->getTableSchema('{{%personality}}', true) !== null) {
          $this->dropTable('{{%personality}}');
         }
         return true;
    }
}
