<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="?action=articles_list">Historique des articles</a></li>
                    <li><a href="#">Article</a></li>
                    <li><a href="?action=register">Inscription</a></li>
                    <?php if (empty($_SESSION)) : ?>
                        <li><a href="?action=connection">Connexion</a></li>
                    <?php else : ?>
                        <li><a href="?action=disconnect">Déconnexion</a></li>
                    <?php endif ?>
                </ul>
            </nav>
            <?php var_dump($_SESSION); ?>
        </header>
        <main>
            <h1><?= $title ?></h1>
            <?= $content ?>
        </main>
        <footer>&copy; <?= date('Y') ?> Tenreiro Benjamin</footer>
    </div>
</body>

</html>