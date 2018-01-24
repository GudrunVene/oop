<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 24.01.2018
 * Time: 9:15
 */

class linkobject extends http
{
    // klassi muutujad/väljad
    var $baseLink = false; // põhilink
    var $protocol = 'http://'; // HTTP protokoll
    var $eq = '='; // =
    var $delim = '&amp;'; // &

    /**
     * linkobject constructor.
     */
    public function __construct(){
        // kõigepealt defineerime vajalikud eelandmed
        parent::__construct();
        $this->baseLink = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }

    // moodustame paarid kujul nimi=väärtus
    // ja ühendame paarid omavahel kujul:
    // nimi1=vaartus1&nimi2=vaartus2 jne
    function addToLink(&$link, $name, $value){
        if($link != ''){
            $link = $link.$this->delim;
        }
        $link = $link.fixUrl($name).$this->eq.fixUrl($value);
    }
}