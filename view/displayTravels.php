<?php
ob_start();

 foreach($travels as $travel){
    echo '<h2>' .$travel['title'] .'</h2><br><p id="text">'. $travel['content'] .'<br>';
    if ($travel['img'] != null) {
       echo '<img src='. $travel['img'].'></img><br></p>';
    }
 }
                                                            

 $content = ob_get_clean();

require_once 'template.php';
