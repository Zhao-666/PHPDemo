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

echo $a;