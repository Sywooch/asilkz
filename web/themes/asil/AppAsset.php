<?php
namespace app\web\themes\asil;

use \yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/asil';
    public $baseUrl = '@web/themes/asil';

    public $css = [
        'css/reset.css',
        'css/style.css',
        'css/fonts.css',
        'css/Slider2.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
    ];

    public $js = [
        'js/mobilyslider.js',
        'js/owl.carousel.js',
        'js/app.js',
		'js/jquery.fancybox.pack'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
