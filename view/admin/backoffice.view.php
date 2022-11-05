<?php ob_start(); ?>
    <ul>
        <li><a href="?action=admin&p=list">Liste des articles</a></li>
        <li><a href="?action=admin&p=add">Ajouter des articles</a></li>
    </ul>
<?php
$content = ob_get_clean();
$title = "Administration";
require_once('view/template.view.php');
