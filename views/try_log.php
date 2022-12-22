<?php
/**
 * @file try_log.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 25.11.2022
 */

$title = "log or not to log ";


ob_start();// stocke dans une variable tampon
?>
    <div>
        <h2>
            <?php




            ?>
        </h2>
        <p>
            you got lost my brother
        </p>

    </div>
<?php

$content = ob_get_clean();
require 'gabarit.php';