<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/3
 * Time: 16:36
 */

phpinfo();
$a = range(0,1000);
var_dump(memory_get_usage());
//COW机制 Copy On Write
//var_dump(memory_get_usage());
$b = $a;

var_dump(memory_get_usage());


$file = fopen('hello.txt','w');
$str = phpinfo();
fwrite($file,$str);
fclose($file);