<?php
require_once 'config.php';
function connect() {
    global $access, $login,$pwd;
    try{
        $db = new PDO($access,$login,$pwd);
        return $db;
    }catch(Exception $e){
        die('Error :' .$e->getMessage());
    }
}