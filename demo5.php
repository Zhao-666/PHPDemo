<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/3
 * Time: 23:06
 */

//unset 只会取消引用，不会销毁空间

$a = 1;

$b = $a;

unset($b);

$a = 0;
$b = 0;

if ($a = 3 > 0 || $b = 3 > 0) {
    $a++;
    $b++;
    echo '$a= '.$a . "\n";
    echo '$b= '.$b;
}