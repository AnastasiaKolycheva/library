<?php

namespace app\models;

use Yii;
use app\models\Book;
use yii\web\UploadedFile;
/**
 * This is the model class for table "publishing_house".
 *
 * @property integer $id_publishing_house
 * @property string $publishing_house_name
 * @property string $publishing_house_website
 *
 * @property PublishingHouseHasBook[] $publishingHouseHasBooks
 */
class PublishingHouse extends \yii\db\ActiveRecord
{    public $photoFile = null;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publishing_house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['publishing_house_name', 'publishing_house_website'], 'required'],
            [['photo'], 'string'],
            [['publishing_house_name', 'publishing_house_website'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_publishing_house' => 'Id Publishing House',
            'publishing_house_name' => 'Название',
            'publishing_house_website' => 'Вебсайт',
            'photo' => 'Логотип'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['book_id' => 'book_book_id'])
        ->viaTable('publishing_house_has_book', ['publishing_house_id_publishing_house'=>'id_publishing_house']);
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
