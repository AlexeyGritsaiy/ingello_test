<?php

declare(strict_types=1);

namespace app\modules\shop\models;

use yii\base\Model;

class ProductAddModel extends Model
{
    public $title;
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['title'], 'string', 'min' => 3, 'max' => 100],
            [['description'], 'string', 'min' => 5],
        ];
    }
}
