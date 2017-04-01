<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * SearchStoreForm is the model behind the contact form.
 */
class SearchStoreForm extends Model
{
    public $search;

    public $state;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['search', 'state'], 'safe'],
        ];
    }
}
