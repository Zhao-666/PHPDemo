<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/5
 * Time: 23:16
 */

$file = fopen('hello.txt','r');
$str = fread($file,filesize('hello.txt'));
$str = 'HelloWorld!!!'.$str;
fclose($file);
$file = fopen('hello.txt','w');
fwrite($file,$str);