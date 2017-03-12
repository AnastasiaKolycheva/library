<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m170305_145638_create_book_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%book}}', [
            'book_id' => Schema::TYPE_PK,
            'ISBN' => Schema::TYPE_STRING . ' NOT NULL',
            'book_name' => Schema::TYPE_STRING . ' NOT NULL',
            'publishing_year' => Schema::TYPE_INTEGER . ' NOT NULL',
            'book_discription' => Schema::TYPE_TEXT . ' NOT NULL',
            'language_id_language' => Schema::TYPE_INTEGER . ' NOT NULL' 
                         
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
       if ($this->db->schema->getTableSchema('{{%book}}', true) !== null) {
          $this->dropTable('{{%book}}');
         }
         return true;
    }
}
