<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\Query;

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

    public static function getDataState()
    {
        $array = ServiceCenter::find()->orderBy('state')->asArray()->all();
        return ArrayHelper::map($array, 'state', 'state');
    }

    public static function getLocations($state = null)
    {
        $results = [];
        $query = $state ? ServiceCenter::find()->where(['state' => $state])->all() : ServiceCenter::find()->all();
        foreach ($query as $model) {
            $results[] = [
                'location' => [
                    'address' => $model->address,
                    'country' => 'Indonesia',
                ],
                'htmlContent' => '<p>'.$model->address.'</p>'
            ];
        }
        return $results;
    }
}
