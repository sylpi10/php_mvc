<?php
require_once 'model/frontend.php';
function displayTravels() {
    $travels = getTravels();

    require 'view/displayTravels.php';
}

function displayLogin() {
    $login = getLogin();

    require 'view/displayLogin.php';
}

function displayPage() {
    switch ($_GET['page']) {
        case 'voyages':
            displayTravels();
            break;
        case 'loginForm':
            displayLogin();    
        default:
            displayTravels();
            break;
    }
}