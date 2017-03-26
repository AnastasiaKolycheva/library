<?php

namespace app\models;

use Yii;

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
{
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublishingHouseHasBooks()
    {
        return $this->hasMany(PublishingHouseHasBook::className(), ['publishing_house_id_publishing_house' => 'id_publishing_house']);
    }
}
