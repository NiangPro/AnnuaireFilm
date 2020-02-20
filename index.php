<?php

    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'connexion':
                require('view/connexion.php');
                break;
           case 'inscription':
                require('view/inscription.php');
           break;
        }
    }else{
        require('view/accueil.php');
    }


?>