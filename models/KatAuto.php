<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kat_auto".
 *
 * @property integer $autoid
 * @property string $model
 * @property string $color
 * @property string $price
 */
class KatAuto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kat_auto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model', 'color', 'price'], 'required'],
            [['model', 'color', 'price'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'autoid' => 'Autoid',
            'model' => 'Model',
            'color' => 'Color',
            'price' => 'Price',
        ];
    }
}
