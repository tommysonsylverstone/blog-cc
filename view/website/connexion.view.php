<?php ob_start(); ?>

<form action="" method="POST">
    <ul>
        <li><label for="username">Pseudonyme* :</label><input type="text" id="username" name="username" /></li>
        <li><label for="password">Mot de passe* :</label><input type="text" id="password" name="password" /></li>
        <li><button type="submit">Connexion</button></li>
    </ul>
</form>

<?php $content = ob_get_clean();
$title = "Connexion";
require_once('view/template.view.php');
?>