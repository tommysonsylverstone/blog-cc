<?php ob_start(); ?>
<nav><a href="?action=admin">Administration</a> > Ajout d'un article</nav>
<?php !empty($status) && "<div class='status'>$status</div>" ?>
<form method="POST">
    <ul>
        <li><label for="title">Titre</label><input type="text" id="title" name="title"></li>
        <li><label for="content">Contenu</label><textarea name="content" id="content" cols="30" rows="10"></textarea></li>
        <input type="hidden" value="<?= $_SESSION['user_id'] ?>" name="author">
        <li>
            <div>Publier ?</div>
            <label for="no">Garder comme brouillon</label>
            <input type="radio" name="published" value="0" checked id="no" /><br>
            <label for="yes">Publier</label>
            <input type="radio" name="published" value="1" id="yes"/>
        </li>
        <li><input type="submit" value="Ajouter"></li>
    </ul>
</form>
<?php
$content = ob_get_clean();
$title = "Ajout d'un article";
require_once('view/template.view.php');
