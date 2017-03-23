<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_center".
 *
 * @property integer $id
 * @property string $state
 * @property string $address
 */
class ServiceCenter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_center';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'state', 'address'], 'required'],
            [['id'], 'integer'],
            [['address'], 'string'],
            [['state'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state' => 'State',
            'address' => 'Address',
        ];
    }
}
