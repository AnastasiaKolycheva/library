<?php

namespace app\models;

use Yii;

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
{
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShopHasBooks()
    {
        return $this->hasMany(ShopHasBook::className(), ['shop_id_shop' => 'id_shop']);
    }
}
