<?php ob_start(); ?>

<article>
    <h2>Présentation du blog</h2>
    <p>Ce blog est un site en PHP procédural réalisé par Tenreiro Benjamin, promo 6 2021/2023 chez Cloud Campus. <br>
        Il s'agit d'un blog en PHP classique codé avec une structure MVC.</p>
    <h2>Les auteurs</h2>
    <!-- <ul></ul> -->
    <!-- Ici, présenter les auteurs (5 max) sous forme de liste, devra obtenir 5 personnes au hasard parmis les utiliseurs avec le statut "éditeur -->
    <h2>Les derniers articles</h2>
    <!-- Ici, les 6 derniers articles dans la BDD listés ici -->
    <h2>Les articles les plus likés</h2>
    <!-- Ici, les 6 articles qui ont le plus de like -->
</article>

<?php $content = ob_get_clean();
$title = "Accueil";
require_once('view/template.view.php');
