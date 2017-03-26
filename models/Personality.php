<?php

namespace app\models;

use Yii;

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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookHasPersonalities()
    {
        return $this->hasMany(BookHasPersonality::className(), ['personality_id_personality' => 'id_personality']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalityHasCareers()
    {
        return $this->hasMany(PersonalityHasCareer::className(), ['personality_id_personality' => 'id_personality']);
    }
}
