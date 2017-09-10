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
        'css/bootstrap.min.css',
        'css/flexslider.css',
        'css/jquery.fancybox.css',
        'css/main.css',
        'css/responsive.css',
        'css/animate.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
        'js/bootstrap.min.js',
        'js/jquery.flexslider-min.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.waypoints.min.js',
        'js/retina.min.js',
        'js/modernizr.js',
        'js/main.js',
        'js/media.js',
        'js/modal.js',
        'js/animate.js',
        'js/send.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}





