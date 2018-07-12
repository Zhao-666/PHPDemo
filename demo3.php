<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/3
 * Time: 17:05
 */

// zval变量容器
$a = range(0,3);

xdebug_debug_zval('a');

$b = $a;
xdebug_debug_zval('a');

//进行COW操作
$a = range(0,3);
xdebug_debug_zval('a');

echo time()+3600;