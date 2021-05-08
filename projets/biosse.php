<!DOCTYPE html>
<html lang="En">

<head>
    <meta charset="UTF-8" />
    <title>Darshan Saini | Projet</title>

    <?php require "../require/urlBase.html"; ?>
    <?php require "../require/head.html"; ?>
</head>

<body>
    <header>
        <?php require "../require/header-enteteProjet.html"; ?>
        <?php require "../require/header-menu.html"; ?>
    </header>

    <section id="accueilBiosse" class="accueilProjet projet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">BiOSSE</h2>
    </section>

    <main class="transitionMode unprojet">
        <section class="presentaionProjet">
            <a href="index.php#projets" class="boutonRetour btnTransiDown">Retour aux projets</a>
            <h2>BiOSSE</h2>
            <ul class="tags">
                <li data-lien="index.php?theme=graphisme" class="boutonTag">Graphisme</li>
                <li>2020</li>
                <li>IUT</li>
                <li>Charte graphique</li>
            </ul>
            <p>Dans le cadre du cours d'infographie, il nous a été demandé de réaliser une charte graphique pour le laboratoire de recherche BiOSSE. Nous avions quelques mots clés donnés par le laboratoire pour nous guider dans la création de notre logo. </p>
            <div class="presentaionProjetLien">
                <a href="https://drive.google.com/file/d/1EeJ14jZf2MV0zI3rfDvwXsmzKdhs_oeQ/view?usp=sharing" target="_blank">Voir la charte graphique</a>
            </div>
        </section>

        <section class="galerie">
            <img src="projets/graphisme-biosse/biosse_mockup_3.jpg" alt="image d'illustration">
            <img src="projets/graphisme-biosse/biosse_mockup_1.jpg" title="Tous les éléments visibles sur la carte sont fictifs">
            <img src="projets/graphisme-biosse/biosse_mockup_2.jpg">
            <img src="projets/graphisme-biosse/biosse_mockup_4.jpg">
            <!-- <p>Croquis</p>-->
            <div class="grilleImg grilleImg2x1">
                <img src="projets/graphisme-biosse/croquis-biosse-2.jpg">
                <img src="projets/graphisme-biosse/croquis-biosse-4.jpg">
            </div>
            <img src="projets/graphisme-biosse/croquis-biosse-5-2.jpg">
        </section>
    </main>

    <?php require "../require/footer.html"; ?>

</body>

</html>
