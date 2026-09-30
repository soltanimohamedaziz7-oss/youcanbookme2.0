<?php

require_once PATH_ROOT.'/models/user.php';


function signinAction() {

    $username = "";
    $email = "";
    $msg = "";
    $hash = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Vérification de la soumission du formulaire
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

            $username = trim(htmlspecialchars($_POST['username']));
            $email = trim(htmlspecialchars($_POST['email']));

            if (empty($username ) || empty($email) || empty($_POST['password'])) {
                $msg = "Tous les champs sont obligatoires.";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "L'adresse email n'est pas valide.";
            } else {
                // Hachage sécurisé du mot de passe
                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $result = set_user($username, $email, $hash);

                if ($result) {
                    $msg = "Inscription réussie ! <a href='?action=login'>Connectez-vous</a>";
                } else {
                    $msg = "Erreur SQL";
                }
            }
        }
    }

    $current_view = PATH_ROOT.'/views/signinView.php';
    require_once PATH_ROOT.'/views/layout.php';

}




