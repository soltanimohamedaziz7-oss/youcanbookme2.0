
<!DOCTYPE html>
<html>
    <head>
        <title>Mon site</title>
    </head>
    <body>

        <nav>
        <a href="<?=URL?>/?action=home">Accueil</a> |
        <a href="<?=URL?>/?action=login">Se connecter</a> |
        <a href="<?=URL?>/?action=signin">Créer un compte</a> |
        </nav>
        <h1>Mon site</h1>

        <?php require_once $current_view ?>

    </body>
    <footer>
        Footer du site

    </footer>

</html>
