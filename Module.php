<?php
/**
 * Created by Treschelet.
 * Date: 10.07.14
 */

namespace treschelet\news;

use yii\base\BootstrapInterface;

class Module extends \yii\base\Module implements BootstrapInterface
{
    public $controllerNamespace = 'treschelet\news\controllers';

    public function init()
    {
        parent::init();

        $this->setAliases([
            '@news' => __DIR__
        ]);
    }

    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            $this->id => $this->id . '/default/index',
            $this->id . '/<id:\w+>' => $this->id . '/default/view',
            $this->id . '/<controller:\w+>/<action:\w+>' => $this->id . '/<controller>/<action>',
        ], false);
    }

} 