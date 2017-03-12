<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Handles the creation of table `shop`.
 */
class m170305_145846_create_shop_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%shop}}', [
            'id_shop' => Schema::TYPE_PK,
            'shop_name' => Schema::TYPE_STRING . ' NOT NULL',
            'shop_website' => Schema::TYPE_STRING . ' NOT NULL'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
       if ($this->db->schema->getTableSchema('{{%shop}}', true) !== null) {
          $this->dropTable('{{%shop}}');
         }
         return true;
    }
}

