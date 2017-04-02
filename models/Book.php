<?php

namespace app\models;

use Yii;
use app\models\Personality;
use app\models\PublishingHouse;
use app\models\Shop;
use yii\web\UploadedFile;


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
{   public $photoFile = null;
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
            'book_name' => 'Название',
            'publishing_year' => 'Год издания',
            'book_discription' => 'Аннотация',
            'language_id_language' => 'Язык издания',
        ];
    }
    public function getLanguage ()
    {
        return $this->hasOne(Language::className(), ['id_language' => 'language_id_language']);
    }
    public function getPersonality ()
    {
        return $this->hasMany(Personality::className(),['id_personality'=>'personality_id_personality'])
        ->viaTable('book_has_personality',['book_book_id' =>'book_id']);
    }
    public function getPublishingHouse ()
    {
        return $this->hasMany(PublishingHouse::className(), ['id_publishing_house' => 'publishing_house_id_publishing_house'])
        ->viaTable('publishing_house_has_book', ['book_book_id' => 'book_id']);
    }
     public function getShop ()
    {
        return $this->hasMany(Shop::className(), ['id_shop' => 'shop_id_shop'])
        ->viaTable('shop_has_book', ['book_book_id' => 'book_id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            
            $this->upload();
            return true;
        }
        else {
            return false;
        }
    }
    public function upload()
    {   $this->photoFile = UploadedFile::getInstance($this, 'photoFile');
    if (is_null($this->photoFile)) return true;
       if ($this->validate()) {
        $fileName = 'uploads/' . $this->photoFile->baseName . '.' . $this->photoFile->extension;
         $this->photoFile->saveAs($fileName);
         $this->photo = $fileName;
         return true;
       }
       else {
           return false;
       }
    } 
}
