<?php ob_start(); ?>
<?php include_once('view/website/inc/error.view.php'); ?>

<form action="" method="POST">
    <ul>
        <li><label for="username">Pseudonyme* :</label><input type="text" id="username" name="username" required /></li>
        <li><label for="password">Mot de passe* :</label><input type="password" id="password" name="password" required /></li>
        <li><button type="submit">Connexion</button></li>
    </ul>
</form>

<?php $content = ob_get_clean();
$title = "Connexion";
require_once('view/template.view.php');
