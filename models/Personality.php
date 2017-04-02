<?php

namespace app\models;

use Yii;
use app\models\Book;
use yii\web\UploadedFile;


/**
 * This is the model class for table "personality".
 *
 * @property integer $id_personality
 * @property string $pers_name
 * @property string $pers_secondname
 * @property string $pers_lastname
 * @property string $biography
 *
 * @property BookHasPersonality[] $bookHasPersonalities
 * @property PersonalityHasCareer[] $personalityHasCareers
 */
class Personality extends \yii\db\ActiveRecord
{   
    public $photoFile = null;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pers_name', 'pers_secondname', 'pers_lastname'], 'required'],
            [['biography'], 'string'],
            [['photo'], 'string'],
            [['pers_name', 'pers_secondname', 'pers_lastname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_personality' => 'Id Personality',
            'pers_name' => 'Имя',
            'pers_secondname' => 'Второе имя/отчество',
            'pers_lastname' => 'Фамилия',
            'biography' => 'Биография',
            'photo' => 'Фотография'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['book_id' => 'book_book_id'])
        ->viaTable('book_has_personality', ['personality_id_personality'=>'id_personality']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalityHasCareers()
    {
        return $this->hasMany(PersonalityHasCareer::className(), ['personality_id_personality' => 'id_personality']);
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
