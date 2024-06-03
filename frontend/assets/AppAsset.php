<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/css/app.css',
        'template/css/bootstrap.css',
        'template/vendors/chartjs/Chart.min.css',
        'template/vendors/perfect-scrollbar/perfect-scrollbar.css',
        'template/css/app.css',
        'template/images/favicon.svg',

    ];
    public $js = [
        'assets/js/app.js',
        'template/js/app.js',
        'template/js/feather-icons/feather.min.js',
        'template/vendors/perfect-scrollbar/perfect-scrollbar.min.js',
        'template/js/app.js',
        'template/vendors/chartjs/Chart.min.js',
        'template/vendors/apexcharts/apexcharts.min.js',
        'template/js/pages/dashboard.js',
        'template/js/main.js',
        'template/js/vendors.js',
        'https://use.fontawesome.com/b5f27e60b8.js',
        'https://kit.fontawesome.com/652750171c.js',
        'https://kit.fontawesome.com/42d5adcbca.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
