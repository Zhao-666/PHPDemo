<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/3
 * Time: 17:13
 */


$a =range(0,3);
xdebug_debug_zval('a');

$b = &$a;
xdebug_debug_zval('a');

$a = range(0,3);
xdebug_debug_zval('a');