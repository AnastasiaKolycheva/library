<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `book_has_personality`.
 */
class m170305_145726_create_book_has_personality_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%book_has_personality}}', [
            'book_book_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'book_language_id_language' => Schema::TYPE_INTEGER . ' NOT NULL',
            'personality_id_personality' => Schema::TYPE_INTEGER . ' NOT NULL'
                        
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
       if ($this->db->schema->getTableSchema('{{%book_has_personality}}', true) !== null) {
          $this->dropTable('{{%book_has_personality}}');
         }
         return true;
    }
}
