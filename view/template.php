<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Voyages</title>
</head>
<body>

    <header>
        <ul>
            <li> <strong> Voyages</strong></li>
            <li> <a href="index.php?page=voyages"> Parcourir</a></li>
            <?php 
            if (isset($_SESSION['email'])){
                echo '<li> <a href="">Ajouter</a></li>';
                echo '<li> <a href="controller/disconnect.php">Déconnexion</a></li>';
            }
            else {
                echo
                //  '<form action="session.php" method="post">
                //      <li><button type="submit" name="connect">Se connecter</button></li>
                //  </form>';
                '<li> <a href="index.php?page=loginForm">Connexion</a></li>';
            }
            ?>
        </ul>
    </header>
    <body>
     <!-- //affichage contenu page displayTravels -->
        <?= $content; ?>
    </body>
    </html>