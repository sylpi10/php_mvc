<?php
require_once 'model/frontend.php';
function displayTravels() {
    $travels = getTravels();

    require 'view/displayTravels.php';
}