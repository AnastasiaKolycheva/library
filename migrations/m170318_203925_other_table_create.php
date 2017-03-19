<?php

use yii\db\Migration;

class m170318_203925_other_table_create extends Migration
{
    public function up()
    {
      $this->batchInsert('{{%career}}',['career_type'],[

        ['автор'],
        ['переводчик'],
       ]);

      $this->addColumn('personality', 'biography', $this->text());

      
    }
 

    public function down()
    {
        echo "m170318_203925_other_table_create cannot be reverted.\n";

        return false;
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
