<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `personality_has_career`.
 */
class m170305_163832_create_personality_has_career_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%personality_has_career}}', [
            'personality_id_personality' => Schema::TYPE_INTEGER . ' NOT NULL',
            'career_id_career' => Schema::TYPE_INTEGER . ' NOT NULL'
                        
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
       if ($this->db->schema->getTableSchema('{{%personality_has_career}}', true) !== null) {
          $this->dropTable('{{%personality_has_career}}');
         }
         return true;
    }
}