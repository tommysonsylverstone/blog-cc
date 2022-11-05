<?php ob_start(); ?>
    
<?php
$content = ob_get_clean();
$title = "Liste des articles";
require_once('view/template.view.php');
