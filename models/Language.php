<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "language".
 *
 * @property integer $id_language
 * @property string $language_type
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_type'], 'required'],
            [['language_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_language' => 'Id Language',
            'language_type' => 'Язык издания',
        ];
    }
    public function getBook()
{
    return $this->hasMany(Book::className(),['language_id_language' => 'id_language']);
}
}

