<?php
/**
 * Created by Treschelet.
 * Date: 10.07.14
 */

namespace treschelet\news;


class Module extends \yii\base\Module
{
    public $controllerNamespace = 'treschelet\news\controllers';

    public function init()
    {
        parent::init();

        $this->setAliases([
            '@news' => __DIR__
        ]);
    }

} 