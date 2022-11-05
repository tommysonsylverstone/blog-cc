<?php session_start();
ob_start(); ?>

<?php if (!empty($_SESSION)) : ?>

    <ul>
        <li>Pseudo : <?= $_SESSION['username'] ?></li>
        <li>Prénom : <?= $_SESSION['firstname'] ?? '' ?></li>
        <li>Nom : <?= $_SESSION['lastname'] ?? '' ?></li>
    </ul>

<?php endif; ?>
<?php
$content = ob_get_clean();
$title = "Votre profil";
require_once('view/template.view.php');
