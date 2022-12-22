<?php
/**
 * @file lost.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 18.11.2022
 */
$title = "you're lost";

ob_start();// stocke dans une variable tampon
?>
<div>
    <h2>
        error 404 ou pas
    </h2>
    <p>
        you got lost my brother
    </p>

</div>
<?php

$content = ob_get_clean();
require 'gabarit.php';

?>