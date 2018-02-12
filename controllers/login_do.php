<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 12.02.2018
 * Time: 11:23
 */
// küsime vormi poolt tulnud andmed
$username=$http->get('username');
$password=$http->get('password');
// kontrollime testväljastusega
//echo $username.'<br/>';
//echo $password.'<br/>';
// koostame SQL päringu kasutaja kontrollimiseks
$sql = 'SELECT * FROM user WHERE username='.fixDB($username).' AND password='.fixDB(md5($password));
//echo $sql;
$result = $db->getData($sql);
//echo'<pre>';
//print_r($result);
//echo'</pre>';
if($result != false){
    // logime kasuraja sisse
    // ja avame talle sessiooni
}else{
    // probleem sisse logimisega
    // suuname tagasi sisselogimisvormile
    $link = $http->getLink(array('control'=>'login'));
    $http->redirect($link);
}