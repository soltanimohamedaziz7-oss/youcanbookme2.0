

<h2>Se connecter</h2>

<p> <?= htmlspecialchars($error_msg) ?> </p>

<form method="POST" action="">

    <label>Pseudo : </label>
    <input type="text" name="username"  value="<?= htmlspecialchars($username) ?>"><br><br>

    <label>Mot de passe : </label>
    <input type="password" name="password"><br><br>

    <input type="submit" name="update" value="Se connecter">
</form>


