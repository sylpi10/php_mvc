<?php
require_once 'controller/frontend.php';

if (isset($_GET['page'])) {
    displayPage();
}else displayTravels();