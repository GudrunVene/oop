<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 2.02.2018
 * Time: 9:00
 */

class mysql
{
    // klassi väljas
    var $conn = false; // ühendus db serveriga
    var $host = false; // db server
    var $user = false; // db serveri kasutaja
    var $pass = false; // db serveri kasutaja parool
    var $dbname = false;

    /**
     * mysql constructor.
     * @param bool $host
     * @param bool $user
     * @param bool $pass
     * @param bool $dbname
     */
    public function __construct($host, $user, $pass, $dbname)
    {
        // määrame parameetrite kaudu kõik vajalikud väärtused
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connect(); // tekitame ühenduse andmebaasiga
    } // db nimi, mis on kasutusel

    // andmebaasiga ühenduse loomine
    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->conn){
            echo 'Probleem andmebaasi ühendusega<br />';
            exit;
            //siin ei tagasta mingit infot, sest conn sisu
            // läheb ise dokumentatsiooni
        }
    }
    // päringu saatmise funktsioon
    function query($sql)
    {
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            echo 'Probleem päringuga' . $sql . '<br/>';
            return false;
        }
        return result;
    }
}