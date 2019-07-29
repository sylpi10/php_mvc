<?php
ob_start();
?>
<h3>Ajoutez des voyages</h3>
        <form id='session-form' action="" method='post' enctype='multipart/form-data'>
            <input  type="text" name ='Titre' placeholder = 'Titre' >
            <textarea name="text" id="" cols="26" rows="6" placeholder = 'Description'></textarea>
            <input type="file" name="images">
            <button type="submit">Envoyer</button>
        </form>

<?php    

$content = ob_get_clean();
require_once 'template.php';