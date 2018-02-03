<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/3
 * Time: 23:10
 */

//对象本身是引用传递，但是对象里的属性会执行COW机制
class Person
{
    public $name ="zhangsan";
}

$p1 = new Person();
xdebug_debug_zval('p1');

$p2 = clone $p1;
xdebug_debug_zval('p1');
xdebug_debug_zval('p2');

$p2->name = 'qweqwe';
xdebug_debug_zval('p1');
xdebug_debug_zval('p2');
