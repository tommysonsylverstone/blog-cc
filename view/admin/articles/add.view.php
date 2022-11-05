<?php ob_start(); var_dump("zerzer") ?>
  zerzeqr  
<?php
$content = ob_get_clean();
$title = "Ajout d'un article";
require_once('view/template.view.php');
