<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `publishing_house`.
 */
class m170305_145827_create_publishing_house_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%publishing_house}}', [
            'id_publishing_house' => Schema::TYPE_PK,
            'publishing_house_name' => Schema::TYPE_STRING . ' NOT NULL',
            'publishing_house_website' => Schema::TYPE_STRING . ' NOT NULL'
             
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
       if ($this->db->schema->getTableSchema('{{%publishing_house}}', true) !== null) {
          $this->dropTable('{{%publishing_house}}');
         }
         return true;
    }
}
