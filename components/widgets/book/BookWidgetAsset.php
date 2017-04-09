<?php
namespace app\components\widgets\book;

use yii\web\AssetBundle;

class BookWidgetAsset extends AssetBundle
{
	public $sourcePath = 
'@app/components/widgets/book/assets';
    public $css = [
		'css/book.scss',
		'//fonts.googleapis.com/css?family=Oswald:400,500&amp;subset=cyrillic',
		'//fonts.googleapis.com/css?family=Bad+Script&amp;subset=cyrillic'
	];
	
	public $js = [
		// 'js/adv-widget.js'
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}