<?php

namespace app\models;

use Yii;
use app\models\Book;
use yii\web\UploadedFile;

/**
 * This is the model class for table "shop".
 *
 * @property integer $id_shop
 * @property string $shop_name
 * @property string $shop_website
 *
 * @property ShopHasBook[] $shopHasBooks
 */
class Shop extends \yii\db\ActiveRecord
{  public $photoFile = null;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_name', 'shop_website'], 'required'],
            [['shop_name', 'shop_website'], 'string', 'max' => 255],
            [['photo'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_shop' => 'Id Shop',
            'shop_name' => 'Название',
            'shop_website' => 'Вебсайт',
            'photo' => 'Логотип'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['book_id' => 'book_book_id'])
        ->viaTable('shop_has_book', ['shop_id_shop' => 'id_shop']);
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
