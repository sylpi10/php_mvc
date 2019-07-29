<?php
require_once 'model/backend.php';

function login() {
    $user = getUser($_POST['email']);
    $pwdConnect = $_POST['pwd'];
    if($user){
        if (password_verify($pwdConnect, $user['pwd'])) {
            $_SESSION['email'] = $_POST['email'];
            displayAddTravel();
        }else{
            echo 'mvs mdp';
        }
    }else {
        displayLogin();
    }
}

function displayAddTravel() {
    require_once 'view/displayAddTravel.php';
 }

