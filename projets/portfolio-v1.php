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

    <section id="accueilPortfolioV1" class="accueilProjet projet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">Portfolio version 1</h2>
    </section>

    <main class="transitionMode unprojet">
        <section class="presentaionProjet">
            <a href="index.php#projets" class="boutonRetour btnTransiDown">Retour aux projets</a>
            <h2>Portfolio version 1</h2>
            <ul class="tags">
                <li data-lien="index.php?theme=web" class="boutonTag">Web</li>
                <li>2019</li>
                <li>IUT</li>
                <li>Maquettage</li>
                <li>Intégration</li>
            </ul>
            <p>Ce premier portfolio est aussi le premier site internet que j'ai réalisé. Je l'ai créé dans le cadre du cours d'HTML/CSS de mon DUT MMI. Ce projet avait pour but de nous faire réinvestir toutes les connaissances vues au premier semestre dans un même projet. Nous étions libres de choisir le design et le contenu mais nous avions cinq sections imposées : une présentation, nos compétences, un portrait chinois, une galerie de nos réalisations et un formulaire de contact. Ce formulaire n'est pas fonctionnel car nous n'avions pas encore étudié comment en faire un qui fonctionne réellement.</p>
            <div class="presentaionProjetLien">
                <a href="https://drive.google.com/file/d/1CHzfaQdo1bRDCvR4uIuTQACTVMp84CRl/view?usp=sharing" target="_blank">Voir la maquette</a>
                <a href="http://perso.univ-lemans.fr/~i191251/portfolio_v1/" target="_blank">Voir le site</a>
            </div>

        </section>

        <section class="galerie">
            <img src="projets/web-portfolio-v1/apercu-portfolio-v1.jpg" alt="image d'illustration">
            <img src="projets/web-portfolio-v1/maquette_portfolio-mac.jpg">
            <!-- <img src="projets/web-portfolio-v1/maquette_Portfolio_Rendu-couverture.jpg">-->
        </section>
    </main>

    <?php require "../require/footer.html"; ?>

</body>

</html>
