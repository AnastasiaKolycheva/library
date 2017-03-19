<?php

use yii\db\Migration;

class m170318_190426_addForeignKey extends Migration
{
    public function up()
    {
       $this->addForeignKey(
            'fk-book-language_id_language',
            'book',
            'language_id_language',
            'language',
            'id_language',
            'CASCADE'
        );
       $this->addForeignKey(
        'fk-personality_has_career-personality_id',
        'personality_has_career',
        'personality_id_personality',
        'personality',
        'id_personality',
        'CASCADE'
        );
       $this->addForeignKey(
        'fk-personality_has_career-career_id',
        'personality_has_career',
        'career_id_career',
        'career',
        'id_career',
        'CASCADE'
        );
       $this->addForeignKey(
        'fk-book_has_personality-book_id',
        'book_has_personality',
        'book_book_id',
        'book',
        'book_id',
        'CASCADE'
        );
       $this->addForeignKey(
        'fk-book_has_personality-personality_id',
        'book_has_personality',
        'personality_id_personality',
        'personality',
        'id_personality',
        'CASCADE'
        );
       $this->addForeignKey(
        'fk-publishing_house_has_book-book_id',
        'publishing_house_has_book',
        'book_book_id',
        'book',
        'book_id',
        'CASCADE'
        );
       $this->addForeignKey(
        'fk-publishing_house_has_book-publishing_house',
        'publishing_house_has_book',
        'publishing_house_id_publishing_house',
        'publishing_house',
        'id_publishing_house',
        'CASCADE'
        );
       $this->addForeignKey(
        'fk-shop_has_book-book',
        'shop_has_book',
        'book_book_id',
        'book',
        'book_id',
        'CASCADE'
        );
       $this->addForeignKey(
        'fk-shop_has_book-shop',
        'shop_has_book',
        'shop_id_shop',
        'shop',
        'id_shop',
        'CASCADE'
        );


    }

    public function down()
    {
       $this->dropForeignKey(
            'fk-book-language_id_language',
            'book'
        );
       $this->dropForeignKey(
            'fk-personality_has_career-personality_id',
            'personality_has_career'
        );
       $this->dropForeignKey(
            'fk-personality_has_career-career_id',
            'personality_has_career'
        );
       $this->dropForeignKey(
            'fk-book_has_personality-book_id',
            'book_has_personality'
        );
       $this->dropForeignKey(
            'fk-book_has_personality-personality_id',
            'book_has_personality'
        );
       $this->dropForeignKey(
            'fk-publishing_house_has_book-book_id',
            'publishing_house_has_book'
        );
       $this->dropForeignKey(
            'fk-publishing_house_has_book-publishing_house',
            'publishing_house_has_book'
        );
        $this->dropForeignKey(
            'fk-shop_has_book-book',
            'shop_has_book'
        );
        $this->dropForeignKey(
            'fk-shop_has_book-shop',
            'shop_has_book'
        );



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
