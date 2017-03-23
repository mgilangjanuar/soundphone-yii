<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property integer $id
 * @property string $region
 * @property string $state
 * @property string $name
 * @property string $address
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region', 'state', 'name', 'address'], 'required'],
            [['address'], 'string'],
            [['region', 'state', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region' => 'Region',
            'state' => 'State',
            'name' => 'Name',
            'address' => 'Address',
        ];
    }
}
