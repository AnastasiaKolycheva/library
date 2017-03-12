<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require('/home/missfury/books/vendor/autoload.php');
require('/home/missfury/books/vendor/yiisoft/yii2/Yii.php');

$config = require('/home/missfury/books/config/web.php');

(new yii\web\Application($config))->run();
