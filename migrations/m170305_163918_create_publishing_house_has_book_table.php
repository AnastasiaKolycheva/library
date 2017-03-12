<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `publishing_house_has_book`.
 */
class m170305_163918_create_publishing_house_has_book_table extends Migration
{
     public function up()
    {
        $this->createTable('{{%publishing_house_has_book}}', [
            'publishing_house_id_publishing_house' => Schema::TYPE_INTEGER . ' NOT NULL',
            'book_book_id' => Schema::TYPE_INTEGER . ' NOT NULL'
                        
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
       if ($this->db->schema->getTableSchema('{{%publishing_house_has_book}}', true) !== null) {
          $this->dropTable('{{%publishing_house_has_book}}');
         }
         return true;
    }
}
