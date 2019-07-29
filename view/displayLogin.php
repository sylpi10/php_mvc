<?php
ob_start();
?>
<h3>Connectez-vous</h3>
        <form id='session-form' action="index.php?page=loginForm" method='post'>
            <input  type="mail" name ='email' placeholder = 'Mail' >
            <input  type="password" name = 'pwd' placeholder = 'Password'>

            <button type="submit">Connexion</button>
        </form>
                                                            
<?php
 $content = ob_get_clean();

require_once 'template.php';
