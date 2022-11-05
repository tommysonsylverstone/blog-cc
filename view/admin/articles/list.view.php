<?php ob_start(); ?>
<nav><a href="?action=admin">Administration</a> > Liste des articles</nav>
<?php
$content = ob_get_clean();
$title = "Liste des articles";
require_once('view/template.view.php');
