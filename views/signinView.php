

        <h2>Créer un compte</h2>
        <p> <?= $msg ?> </p>

        <form method="POST" action="">

            <label>Pseudo : </label>
            <input type="text" name="username" value="<?= htmlspecialchars($username) ?>"><br><br>

            <label>Email : </label>
            <input type="email" name="email" value="<?= htmlspecialchars($email) ?>"><br><br>

            <label>Mot de passe : </label>
            <input type="password" name="password"><br><br>

            <input type="submit" name="update" value="S'inscrire">
        </form>

