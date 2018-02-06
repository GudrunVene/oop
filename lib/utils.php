<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 24.01.2018
 * Time: 10:07
 */
function fixUrl($str){
    return urlencode($str);
}
function fixDB($str){
    return '"'.addslashes($str).'"';
}