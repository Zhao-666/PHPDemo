<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/4
 * Time: 11:34
 */

function myFunc()
{
    static $a;
    echo $a++;
}

myFunc();
myFunc();
myFunc();
