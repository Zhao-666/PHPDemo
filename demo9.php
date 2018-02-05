<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/2/5
 * Time: 23:22
 */

$dir = 'test';

function loopDir($dir)
{
    $handle = opendir($dir);
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..') {
            echo $file . "\n";
            if (filetype($dir . '/' . $file) == 'dir') {
                loopDir($dir . '/' . $file);
            }
        }
    }
}

loopDir($dir);