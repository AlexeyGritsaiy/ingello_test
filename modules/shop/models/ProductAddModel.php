<?php

declare(strict_types=1);

namespace app\modules\shop\modules;

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
            [['title', 'title'], 'required'],
        ];
    }
}
