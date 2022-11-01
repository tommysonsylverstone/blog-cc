<?php ob_start(); ?>

<form action="" method="POST">
    <ul>
        <li><label for="username">Pseudonyme* :</label><input type="text" id="username" name="username" /></li>
        <li><label for="firstname">Prénom :</label><input type="text" id="firstname" name="firstname" /></li>
        <li><label for="lastname">Nom :</label><input type="text" id="lastname" name="lastname" /></li>
        <li><label for="password">Mot de passe* :</label><input type="text" id="password" name="password" /></li>
        <li><label for="confirmpwd">Confirmer le mot de passe* :</label><input type="text" id="confirmpwd" name="confirmpwd" /></li>
        <li><button type="submit">S'enregistrer</button></li>
    </ul>
</form>

<?php $content = ob_get_clean();
$title = "Inscription";
require_once('view/template.view.php');
?>