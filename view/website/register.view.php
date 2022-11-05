<?php ob_start(); ?>

<?php if (!empty($registrationComplete)) : ?>
    <div class="success"><?= $registrationComplete ?></div>
<?php endif ?>
<?php if (!empty($registrationError)) : ?>
    <div class="error"><?= $registrationError ?></div>
<?php endif ?>
<?php include_once('view/website/inc/error.view.php'); ?>
<form action="" method="POST">
    <ul>
        <li><label for="username">Pseudonyme* :</label><input type="text" id="username" name="username" required value="<?= $_POST['username'] ?? '' ?>" /></li>
        <li><label for="firstname">Prénom :</label><input type="text" id="firstname" name="firstname" value="<?= $_POST['firstname'] ?? '' ?>"/></li>
        <li><label for="lastname">Nom :</label><input type="text" id="lastname" name="lastname" value="<?= $_POST['lastname'] ?? '' ?>"/></li>
        <li><label for="password">Mot de passe* :</label><input type="password" id="password" name="password" required autocomplete="false" /></li>
        <li><label for="confirmpwd">Confirmer le mot de passe* :</label><input type="password" id="confirmpwd" name="confirmpwd" required autocomplete="false" /></li>
        <li><button type="submit">S'enregistrer</button></li>
    </ul>
</form>

<?php $content = ob_get_clean();
$title = "Inscription";
require_once('view/template.view.php');
