<?php
namespace backend\assets;

use yii\web\AssetBundle;

class BootTableAsset extends AssetBundle
{
    //public $baseUrl = '@web/static';
      public $basePath = '@webroot';

    public $baseUrl = '@web/resources';

    /* 全局CSS文件 */
    public $css = [
       'bootsratp_table/css/bootstrap-table.css?v=2018100901',
       'bootsratp_table/css/hyscmTable.css?v=2018100901',
    ];
    /* 全局JS文件 */
    public $js = [

  //'bootsratp_table/js/bootstrap-table-editable.min.js?v=2018100901',
   'bootsratp_table/js/bootstrap-table.js?v=2018100901',
    'bootsratp_table/js/bootstrap-table-locale-all.min.js?v=2018100901',
    ];
    public $depends = [
      //'backend\assets\HeadJsAsset',
      'backend\assets\AppAsset',
       //'backend\assets\MainAsset',
    ];
}
