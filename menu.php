<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 23.01.2018
 * Time: 14:13
 */

// loome menüü ehitamiseks vajalikud objektid
$menuTmpl = new template('menu.menu'); // menüü mall
$itemTmpl = new template('menu.item'); // menüü elemendi mall

// koosta menüü ja sisu loomise päringut
$sql = 'SELECT content_id, content, title'.'FROM content WHERE parent_id='.fixDB'AND show_in_menu='.fixDB;
$result = $db->getData($sql); // loeme andmed anmebaasist