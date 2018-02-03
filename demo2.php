<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/3
 * Time: 17:05
 */


$data = ['a', 'b', 'c'];

//1、
foreach ($data as $key => $val) {
    $val = &$data[$key]; // 进行引用传值，此时的$val内存地址被赋值为$data[0]
    print_r($data);
}
//2、此时的$val内存地址为$data[0],foreach将$data[1]赋值给$val，所以$data[1]被赋值到了$data[0]
foreach ($data as $key => $val) { // $data =['b','b','c']
    $val = &$data[$key]; // 进行引用传值，此时的$val内存地址被赋值为$data[1]
    print_r($data);
}
//2、此时的$val内存地址为$data[1],foreach将$data[2]赋值给$val，所以$data[2]被赋值到了$data[1]
foreach ($data as $key => $val) { // $data =['b','c','c']
    $val = &$data[$key]; // 进行引用传值，此时的$val内存地址被赋值为$data[2]
    print_r($data);
}