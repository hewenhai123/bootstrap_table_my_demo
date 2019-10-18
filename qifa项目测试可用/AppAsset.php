<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package backend\assets
 * @author jianyan74 <751393839@qq.com>
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web/resources';

    public $css = [

        //'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
        'plugins/sweetalert/sweetalert.css', // 弹出框提示
        'plugins/fancybox/jquery.fancybox.min.css', // 图片查看
        'plugins/toastr/toastr.min.css', // 状态通知
        'dist/css/AdminLTE.css',
        'dist/css/rageframe.css',
        'dist/css/plugins.min.css',//登录页面
        'dist/css/login.min.css',//登录页面
        'dist/css/default-blue-white.css',//锁屏页面
        'dist/css/try.css',
    ];

    public $js = [
        //'bower_components/bootstrap/dist/js/bootstrap.min.js',
        'bower_components/fastclick/lib/fastclick.js',
        'plugins/layer/layer.js',
        'plugins/sweetalert/sweetalert.min.js',
        'plugins/fancybox/jquery.fancybox.min.js',
        'dist/js/adminlte.js',
        'dist/js/demo.js',
        'dist/js/template.js',
        'dist/js/rageframe.js',
        'dist/js/ueditor.all.min.js',
        'dist/js/raphael-min.js',//锁屏页面
        'dist/js/dev-clock.js',//锁屏页面
        'dist/js/validate.min.js',//登录页面
        'dist/js/jquery.form.js',//登录页面
        'dist/js/jquery.cookie.js',//登录页面
        'dist/js/login.js',//登录页面
        'dist/js/try.js',
    ];

    public $depends = [
        //包含jquery.js、bootstrap.css、bootstrap.js
        'yii\bootstrap\BootstrapPluginAsset',
        'backend\assets\CompatibilityIEAsset',
        'backend\assets\HeadJsAsset',
    ];

}
