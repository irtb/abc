<?php
// 定义根目录
define('RUNTIME_PATH', dirname(__FILE__));
require_once(RUNTIME_PATH . '/core/core.php');


// dump($smarty);exit;

$smarty->display('index.html');
