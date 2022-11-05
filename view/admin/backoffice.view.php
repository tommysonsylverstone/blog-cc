<?php ob_start(); ?>

<?php
$content = ob_get_clean();
$title = "Administration";
require_once('view/template.view.php');
