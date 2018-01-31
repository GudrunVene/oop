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

// loome üks menüü element nimega esimene
// määrame menüüs väljastava elemendi nime
$itemTmpl->set('name', 'avaleht');
// määrata menüüs väljastava elemendiga seotud link
// http://anna.ikt.khk.ee/oop_vs17_2/index.php?control=esimene
$link = $http->getLink(array('control'=>'avaleht'));
$itemTmpl->set('link', $link);
// lisame antud element menüüsse
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd


// loome üks menüü element nimega esimene
// määrame menüüs väljastava elemendi nime
$itemTmpl->set('name', 'esimene');
// määrata menüüs väljastava elemendiga seotud link
// http://anna.ikt.khk.ee/oop_vs17_2/index.php?control=esimene
$link = $http->getLink(array('control'=>'esimene'));
$itemTmpl->set('link', $link);
// lisame antud element menüüsse
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd olemas paar 'menu_items'=>'<li>...</li>

// loome veel üks menüü element nimega teine
$itemTmpl->set('name', 'teine');
// määrata menüüs väljastava elemendiga seotud link
// http://anna.ikt.khk.ee/oop_vs17_2/index.php?control=esimene
$link = $http->getLink(array('control'=>'teine'));
$itemTmpl->set('link', $link);
// lisame antud element menüüsse
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd olemas paar 'menu_items'=>'<li>...</li>

// ehitame valmis menüü
$menu = $menuTmpl->parse();

// lisame valmis menüü lehele
$mainTmpl->set('menu', $menu);