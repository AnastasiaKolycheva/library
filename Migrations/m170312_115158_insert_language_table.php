<?php

use yii\db\Migration;

class m170312_115158_insert_language_table extends Migration
{
    public function up()
    {
      $this->batchInsert('{{%language}}',['language_type'],[

        ['азербайджанский'],
        ['английский'],
        ['арабский'],
        ['армянский'],
        ['болгарский'],
        ['греческий'],
        ['грузинский'],
        ['датский'],
        ['иврит'],
        ['ирландский'],
        ['испанский'],
        ['итальянский'],
        ['казахский'],
        ['киргизский'],
        ['китайский'],
        ['корейский'],
        ['латинский'],
        ['латышский'],
        ['литовский'],
        ['монгольский'],
        ['немецкий'],
        ['норвежский'],
        ['польский'],
        ['португальский'],
        ['румынский'],
        ['русский'],
        ['сербский'],
        ['турецкий'],
        ['узбекский'],
        ['украинский'],
        ['финский'],
        ['французский'],
        ['хинди'],
        ['чешский'],
        ['шведский'],   
        ['эстонский'],
        ['японский']
        ]);
    }

    public function down()
    {
        echo "m170312_115158_insert_language_table cannot be reverted.\n";

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
