<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

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

    public static function getDataState()
    {
        $array = Store::find()->orderBy('state')->asArray()->all();
        return ArrayHelper::map($array, 'state', 'state');
    }

    public static function getLocations($models = null)
    {
        $results = [];
        $query = $models ? $models : Store::find()->all();
        foreach ($query as $model) {
            $results[] = [
                'location' => [
                    'address' => $model->address,
                    'country' => 'Indonesia',
                ],
                'htmlContent' => '<h4>'.$model->name.'</h4><p>'.$model->address.'</p>'
            ];
        }
        return $results;
    }

    public static function findGroupAll($query = null)
    {
        $results = [];
        $query = ($query ? $query : Store::find())->orderBy('state')->all();
        foreach ($query as $model) {
            $results[$model->state][] = $model;
        }
        return $results;
    }
}
