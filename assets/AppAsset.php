<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'libs/flickity-master/dist/flickity.min.css',
    ];
    public $js = [
        'js/scripts.js',
        'libs/flickity-master/dist/flickity.pkgd.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',
    ];

    public function init() {
        $this->jsOptions['position'] = \yii\web\View::POS_END;
        parent::init();
    }
}
