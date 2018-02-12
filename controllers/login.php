<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 12.02.2018
 * Time: 11:08
 */
// võtame kasutusele login.html faili
$loginForm = new template('login');
// kasutaja andmete töötlusfaili link
$link = $http->getLink(array('control'=>'login_do'));
// lisame vajalikud andmed malli
$loginForm->set('link', $link);
$loginForm->set('kasutaja', 'Sisesta kasutajanimi');
$loginForm->set('parool', 'Sisesta parool');
$loginForm->set('nupp', 'Logi sisse!');
// nüüd tuleb see sisu väljastada peamenüü malli sees
$mainTmpl->set('content', $loginForm->parse());
