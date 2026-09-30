<?php


require_once PATH_ROOT.'/models/user.php';


function open_session($user) {
    // Démarrage de la session

    // Stockage des informations utiles en session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    // Redirection vers la page d'accueil
    header('Location:' . URL);
    exit();

}



function loginAction() {


    $username = "";
    $error_msg = "";

    session_start();
    if (isset($_SESSION['user_id'])) {
        // connecté -> redirection vers la page d'accueil

        header('Location:'.URL);
        exit();

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Vérification de la soumission du formulaire
        if (isset($_POST['username']) && isset($_POST['password'])) {

            $username = trim(htmlspecialchars($_POST['username']));
            $password = trim(htmlspecialchars($_POST['password']));

            if (empty($username) || empty($password) ) {
                $error_msg = "Tous les champs sont obligatoires";
            } else {
                $user = get_user_by_username($username);
                if (!$user) {
                    $error_msg =  "Compte inconnu.";
                } else if (! password_verify($password, $user['password'])) {
                    $error_msg =  "Mot de passe incorrect.";
                } else {
                    open_session($user);
                }
            }
        }
    }

    $current_view = PATH_ROOT.'/views/loginView.php';
    require_once PATH_ROOT.'/views/layout.php';

}
