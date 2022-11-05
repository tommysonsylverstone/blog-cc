<?php ob_start(); ?>
<nav><a href="?action=admin">Administration</a> > Ajout d'un article</nav>

<?php
$content = ob_get_clean();
$title = "Ajout d'un article";
require_once('view/template.view.php');
