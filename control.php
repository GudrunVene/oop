<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 31.01.2018
 * Time: 10:49
 */
$control = $hhtp->get('control'); // kontrolleri faili nimi
$fail = CONTROL_DIR.$control.'.php'; // kontrolleri faili tee
if(file_exists($file) and is_file($file) and is_readable($file)){
    require_once $file;
} else {
    // kui ei ole veel faili või ei ole veel midagi valitud
    $file = CONTROL_DIR.DEFAULT_CONTROL.'php';
    require_once $file;
}
