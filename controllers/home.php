<?php

function homeAction() {
    session_start();

    $greet_msg = "";

    if (!isset($_SESSION['user_id'])) {
        // Pas connecté -> redirection vers la page de connexion
        header('Location: '. URL . '/?action=login');
        exit();

    } else {
        $greet_msg = "Bienvenue, " . $_SESSION['username'] . " !";
    }


    $current_view = PATH_ROOT.'/views/homeView.php';
    require_once PATH_ROOT.'/views/layout.php';


}
