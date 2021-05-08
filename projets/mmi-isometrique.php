<!DOCTYPE html>
<html lang="fr">

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

    <section id="accueilMmiIsometrique" class="accueilProjet projet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">MMI isométrique</h2>
    </section>

    <main class="transitionMode unprojet">
        <section class="presentaionProjet">
            <a href="index.php#projets" class="boutonRetour btnTransiDown">Retour aux projets</a>
            <h2>MMI isométrique</h2>
            <ul class="tags">
                <li data-lien="index.php?theme=graphisme" class="boutonTag">Graphisme</li>
                <li>2019</li>
                <li>IUT</li>
                <li>Vectoriel</li>
                <li>Affinity Designer</li>
            </ul>
            <p>Illustration vectorielle réalisée en vue isométrique dans le cadre d'un cours d'infographie. L'objectif de ce travail était de représenter le DUT Métiers du Multimédia et de l'Internet à travers une illustration isométrique. </p>

        </section>

        <section class="galerie">
            <img src="projets/graphisme-mmi-isometrique/mmi-isometrique.jpg" alt="image d'illustration">
        </section>
    </main>

    <?php require "../require/footer.html"; ?>

</body>

</html>
