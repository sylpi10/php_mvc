<?php
require_once 'dbConfig.php';
function getTravels() {
    $db = connect();
    $response = $db->query('SELECT * FROM travels');

    // pdo to array
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

function getLogin() {
    return;
}

// function getAddTravel() {
//     return;
// }