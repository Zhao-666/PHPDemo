<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/3
 * Time: 16:36
 */

$a = range(0,1000);
var_dump(memory_get_usage());
//COW机制 Copy On Write
$b = $a;
var_dump(memory_get_usage());

$a = range(0,1000);
var_dump(memory_get_usage());

$a =  '1qwe' == 1;
var_dump($a);