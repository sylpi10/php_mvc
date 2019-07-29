<?php
session_start();
require_once 'controller/frontend.php';


if (isset($_POST['email']) && isset($_POST['pwd'])) {
    require_once 'controller/backend.php';
    login();

}else if (isset($_GET['page'])) {
    displayPage();
}else {
    displayTravels();
}

