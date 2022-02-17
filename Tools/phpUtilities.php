<?php

    function redirect_if_not_connected() {

        if (!isset($_SESSION['player'])) {
            header('Location: index.php');

        }
    }

    function redirect_if_not_admin() {

        if (!isset($_SESSION['player'])) {
            header('Location: index.php');
        }
        if ((!unserialize($_SESSION['player'])->isAdmin) == 1) {
            header('Location: menu.php');
        }
    }

?>