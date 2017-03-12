<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `language`.
 */
class m170305_171024_create_language_table extends Migration
{
    /**
     * @inheritdoc
     */
     public function up()
    {
        $this->createTable('{{%language}}', [
            'id_language' => Schema::TYPE_PK,
            'language_type' => Schema::TYPE_STRING . ' NOT NULL'
                                     
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
       if ($this->db->schema->getTableSchema('{{%language}}', true) !== null) {
          $this->dropTable('{{%language}}');
         }
         return true;
    }
}

 