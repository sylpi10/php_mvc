<?php
require_once 'dbConfig.php';

function getUser($login) {
    $db = connect();
    
        $emailConnect = $_POST['email'];

        $request = $db->prepare('SELECT email,firstName,pwd FROM users WHERE email=:email');
        $request->execute([
            // ':email' => filter_var($emailConnect,FILTER_VALIDATE_EMAIL)
            ':email' => htmlentities(strip_tags($login))
        ]);

        $user = $request->fetch();
        
        return $user;
}