<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * SearchPostForm is the model behind the contact form.
 */
class SearchPostForm extends Model
{
    public $search;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['search'], 'safe'],
        ];
    }
}
