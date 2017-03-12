<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `shop_has_book`.
 */
class m170305_145914_create_shop_has_book_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%shop_has_book}}', [
            'shop_id_shop' => Schema::TYPE_INTEGER . ' NOT NULL',
            'book_book_id' => Schema::TYPE_INTEGER . ' NOT NULL'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        if ($this->db->schema->getTableSchema('{{%shop_has_book}}', true) !== null) {
            $this->dropTable('{{%shop_has_book}}');
        }
        return true;
    }
}
