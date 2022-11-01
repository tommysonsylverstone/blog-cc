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
                    <li><a href="#">Les articles</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1><?= $title ?></h1>
            <?= $content ?>
        </main>
        <footer>&copy; <?= date('Y') ?> Tenreiro Benjamin</footer>
    </div>
</body>

</html>