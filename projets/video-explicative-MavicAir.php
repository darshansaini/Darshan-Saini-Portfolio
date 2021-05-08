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

    <section id="accueilVideoExpliMavicAir" class="accueilProjet projet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">Vidéo explicative</h2>
    </section>

    <main class="transitionMode unprojet" style=" /* padding-top:80px; */ ">
        <section class="presentaionProjet">
            <a href="index.php#projets" class="boutonRetour btnTransiDown">Retour aux projets</a>
            <h2>Vidéo explicative - Mavic Air</h2>
            <ul class="tags">
                <li data-lien="index.php?theme=audiovisuel" class="boutonTag">Audiovisuel </li>
                <li>2020</li>
                <li>IUT</li>
                <li>Vidéo</li>
                <li>Adobe Premiere Pro</li>
            </ul>
            <p> Au deuxième semestre de mon DUT MMI, dans le cadre du cours d'audiovisuel, j'ai réalisé une vidéo au format carré (pour Instagram) expliquant simplement le fonctionnement d'un objet de mon choix. J’ai donc choisi de présenter mon drone, un DJI Mavic Air. Dans un premier temps j’ai établi une liste de plans que je souhaitais faire ainsi que leur ordre d’enchainement. J’avais initialement prévu de tourner une partie des plans en intérieur. Mais finalement le jour du tournage, j’ai choisi de tout filmer en extérieur pour profiter d’une lumière naturelle et limiter les faux raccords. </p>
            <p> Lors du montage, voulant créer une vidéo dynamique j’ai massivement utilisé la technique du jump-cut notamment sur les plans de dépliage du drone. Pour la suite du montage les transitions entre les plans sont majoritairement des cuts dont certains sont rythmés par la musique. La vidéo se termine par des plans drone que j’ai tournés au cours de l’année passée. </p>
            <div class="presentaionProjetLien">
                <a href="https://youtu.be/2WThzPxGlsY" target="_blank">Voir la vidéo sur YouTube</a>
            </div>

        </section>

        <section class="galerie">
            <!-- <img src="projets/">-->
            <div class="itegrationYoutube">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2WThzPxGlsY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
    </main>

    <?php require "../require/footer.html"; ?>

</body>

</html>
