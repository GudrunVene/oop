<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 12.02.2018
 * Time: 12:20
 */

class session
{
    // sessiooni klassi muutujad
    var $sid = false; // sessiooni id
    var $vars = array(); //sessiooni ajal tekkinud andmed
    var $http = false; // tuleb link(ehk otseühendus) http objektile
    var $db = false; // otseühendus db objektiga

    /**
     * session constructor.
     * @param bool $http
     * @param bool $db
     */
    public function __construct(&$http, &$db)
    {
        $this->http = &$http;
        $this->db = &$db;
    }

    // sessiooni loomine
    function createSession($user = false){
        // kui kasutaja on anonüümne
        if($user == false){
            // loome anonüümse casutaja andmed
    $user = array(
        'user_id' => 0,
         'role_id' => 0,
        'username' => 'Anonüümne'
         );
    }
// loome sessiooni id
$sid =md5(uniqid(time().nt_rand(1, 1000), true));
// päring sessiooni andmete sisestamiseks andmebaasi
$sql = 'INSERT INTO session SET '.'sid='.fixDB($sid).'user_id='.fixDB($user['user_id']).',','user_data='.fixDB(serialize($user)).','.'login_ip='.fixDB(REMOTE_ADDR).','.'created=NOW()';
// saadame päringu anmebaasi
$this->db->query($sql);
// määrame sessioonile loodud id
$this->sid = $sid;
// paneme antud väärtuse ka veebi andmete sisse
$this->http->set('sid', $sid);
}
}