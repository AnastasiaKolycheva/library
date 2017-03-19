<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $book_id
 * @property string $ISBN
 * @property string $book_name
 * @property integer $publishing_year
 * @property string $book_discription
 * @property integer $language_id_language
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ISBN', 'book_name', 'publishing_year', 'book_discription', 'language_id_language'], 'required'],
            [['publishing_year', 'language_id_language'], 'integer'],
            [['book_discription'], 'string'],
            [['ISBN', 'book_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'book_id' => 'Book ID',
            'ISBN' => 'Isbn',
            'book_name' => 'Book Name',
            'publishing_year' => 'Publishing Year',
            'book_discription' => 'Book Discription',
            'language_id_language' => 'Language Id Language',
        ];
    }
     
}
