<?php

namespace app\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      'admin/vendors/custom/fullcalendar/fullcalendar.bundle.css',
      'admin/vendors/base/vendors.bundle.css',
      'admin/default/base/style.bundle.css',
      'css/site.css',
    ];
    public $js = [
      'js/jquery/jquery.js',
      'js/jquery/jquery.mousewheel.min.js',
      'admin/vendors/base/vendors.bundle.js',
      'admin/default/base/scripts.bundle.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
