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

    <section id="accueilPortfolioV2" class="accueilProjet projet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">Portfolio version 2</h2>
    </section>

    <main class="transitionMode unprojet">
        <section class="presentaionProjet">
            <a href="index.php#projets" class="boutonRetour btnTransiDown">Retour aux projets</a>
            <h2>Portfolio version 2</h2>
            <ul class="tags">
                <li data-lien="index.php?theme=web" class="boutonTag">Web</li>
                <li>2020</li>
                <li>IUT</li>
                <li>Intégration</li>
            </ul>
            <p> Au cours du deuxième semestre de mon DUT MMI, j'ai été amené à réaliser une version améliorée de mon portfolio. Bien que les consignes aient été très simples, j'ai décidé de voir plus loin et de créer un site qui me servirait au cours des mois à venir pour chercher une alternance et présenter mon travail. Pour construire ce projet, j'ai réalisé quelques croquis afin d’imaginer la mise en page, puis je me suis lancé dans la programmation du site. Tout le code a été réalisé à la main en utilisant HTML, CSS et JavaScript avec la bibliothèque jQuery. </p>
            <p> Avec cette nouvelle version de mon portfolio, je voulais créer quelque chose de simple, épuré et qui me ressemble. J’ai donc choisi un design très sobre en noir et blanc agrémenté d’images pour amener de la couleur. Souhaitant me démarquer des autres portfolios, j’ai décidé d’intégrer un mode nuit (ou thème sombre) à mon site. Le fait d’avoir un fond noir est également plus adapté pour profiter pleinement des images qui sont au cœur de mon portfolio. </p>
            <div class="presentaionProjetLien">
                <a href="http://perso.univ-lemans.fr/~i191251/portfolio_v2.3/" target="_blank">Voir le site </a>
            </div>

        </section>

        <section class="galerie">
            <img src="projets/web-portfolio-v2/portfolio-v2_Mockup-1.jpg" alt="image d'illustration">
            <img src="projets/web-portfolio-v2/portfolio-v2_Mockup-2-2.jpg">
            <img src="projets/web-portfolio-v2/portfolio-v2_Mockup-4.jpg">
            <img src="projets/web-portfolio-v2/portfolio-v2_Mockup-4-2.jpg">
            <div class="grilleImg grilleImg2x1">
                <img src="projets/web-portfolio-v2/portfolio_v2_page1.jpg" title="Croquis page 1">
                <img src="projets/web-portfolio-v2/portfolio_v2_page2.jpg" title="Croquis page 2">
            </div>
        </section>
    </main>

    <?php require "../require/footer.html"; ?>

</body>

</html>
