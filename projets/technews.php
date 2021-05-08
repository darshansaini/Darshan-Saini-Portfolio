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

    <section id="accueilTechNews" class="accueilProjet projet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">TechNews</h2>
    </section>

    <main class="transitionMode unprojet">
        <section class="presentaionProjet">
            <a href="index.php#projets" class="boutonRetour btnTransiDown">Retour aux projets</a>
            <h2>TechNews</h2>
            <ul class="tags">
                <li data-lien="index.php?theme=graphisme" class="boutonTag">Graphisme</li>
                <li>2020</li>
                <li>IUT</li>
                <li>Mise-en-page</li>
                <li>PAO</li>
                <li>Adobe InDesign</li>
            </ul>
            <p>Dans le cadre d'un cours d'infographie et pour apprendre à utiliser Adobe InDesign nous avons dû réaliser une mise en page d'un article écrit en cours de communication. Cette mise en page sous forme de brochure devait comprendre une couverture et une page de publicité. </p>
            <p> Mon article traitant de la sécurité des iPhone, j’ai choisi de créer un magazine sur le thème de la technologie. Pour la couverture j’ai choisi de quelque chose de simple avec le nom du magazine : "TECH NEWS", une photo d’un iPhone, le titre : "Apple : La sécurité des iPhone compromise ?" et quelques éléments graphique. Pour les deux pages intérieurs j’ai travaillé la mise en forme en jouant avec la typographie et les couleurs du texte et du fond. J’ai ajouté deux images d’un iPhone et d’un câble pour ajouter du dynamisme. Enfin pour la quatrième de couverture, j’ai créé une publicité Nikon en s’approchant au maximum de la charte graphique de la marque. </p>
            <div class="presentaionProjetLien">
                <a href="https://drive.google.com/file/d/17tRHezoVL5nM0fHCsI48HsjgL0je6W51/view?usp=sharing" target="_blank">Voir la brochure</a>
            </div>
        </section>

        <section class="galerie">
            <img src="projets/graphisme-technews/Magazine-Apple-page-2-3.jpg" alt="image d'illustration" title="Pages 2 et 3">
            <div class="grilleImg grilleImg2x1">
                <img src="projets/graphisme-technews/Magazine-Apple-page-1.jpg" title="Page 1">
                <img src="projets/graphisme-technews/Magazine-Apple-page-4.jpg" title="Page 4">
            </div>
            <img src="projets/graphisme-technews/Magazine-Apple-Mockup.jpg">
        </section>
    </main>

    <?php require "../require/footer.html"; ?>

</body>

</html>
