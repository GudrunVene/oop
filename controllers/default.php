<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 31.01.2018
 * Time: 11:00
 */
// teisendab täisarvuks (int)
$page_id = (int)$http->get('page_id'); // lehe id
// echo gettype($page_id); tüübi väljastus

// koostame päringu contenti jaoks
$sql = 'SELECT * FROM content WHERE content_id='.fixDB($page_id);

    // kui on selecti päringud siis getData sisu saamiseks


$result = $db->getData($sql);
if($result == false){
    $sql = 'SELECT * FROM content WHERE is_first_page='.fixDB(1);
    $result = $db->getData($sql);
}
if($result != false){
    $page = $result[0];
    $http->set('page_id', $page[content_id]);
    $mainTmpl->set('content', $page['content']);
}