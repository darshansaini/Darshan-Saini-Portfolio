<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Darshan Saini | Portfolio</title>

    <?php require "require/head.html"; ?>
</head>

<body index>
    <header>
        <div class="enteteSite transitionMode">
            <a href="index.php#" title="Revenir à l'accueil">
                <h1 class="titreEnteteSite">Darshan Saini</h1>
            </a>
            <div class="burgerMenu transitionMode" title="Menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div id="fondMenu"> </div>
        </div>

        <?php require "require/header-menu.html"; ?>
    </header>

    <?php //require "require/popup.php"; ?>

    <section id="accueilSite" class="accueil">
        <p><strong id="titreAccueil" class="text-shadow-pop-right">Darshan Saini</strong></p>
        <a href="index.php#projets">
            <svg width="30px" height="20px" class="scrollme">
                <path stroke="#ffffff" fill="none" stroke-width="2px" d="M2.000,5.000 L15.000,18.000 L28.000,5.000 " />
            </svg>
        </a>
    </section>

    <main class="transitionMode mainIndex">

        <div id="iframe_content_up"></div>

        <section id="projets">
            <h2>My Projects</h2>

            <div id="projetFiltre">
                <ul>
                    <li class="theme active" data-theme="tout">All</li>
                    <li class="theme" data-theme="photo">Photography</li>
                    <li class="theme" data-theme="web">Web Developement</li>
                    <li class="theme" data-theme="graphisme">Graphics</li>
                    <li class="theme" data-theme="audiovisuel">Audiovisual</li>
                </ul>

                <!-- SCRIPT DE FILTRAGE VIA URL -->
                <!--
                <script>
                    // FORMAT : ..../index.php?theme=photo
                    document.addEventListener("DOMContentLoaded", function() {
                        var parameters2 = window.location.search.split("=");
                        console.log("param filtre url: " + parameters2[1]);
                        if (parameters2[1] != undefined) {
                            let liste = document.getElementsByClassName("theme");
                            for (let elem of liste) {
                                if (elem.dataset.theme == parameters2[1])
                                    elem.click();

                                setTimeout(function() {
                                    document.getElementById("projets").scrollIntoView(true);
                                }, 350);
                            }
                        }
                    });
                </script>
-->

            </div>

            <div class="contenuSectionReal">
                <!------------------------------------------------------->

                <article class="sectionProjet photo" style="background-image: url(images/mockup_insta.png)">
                    <div class="contenuSectionProjet">
                        <h3>My Instagram photography</h3>
                        <ul class="tags">
                            <li>Photography</li>
                        </ul>
                        <a href="https://instagram.com/artdarshan.ig?igshid=1v17i7nwx3wzu" target="_blank" class="boutonDecouvir">
                            <p>Discover the account</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet web" style="background-image: url(projets/web-portfolio-v1/maquette_portfolio-mac.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>Portfolio version 1</h3>
                        <ul class="tags">
                            <li>Web</li>
                            <li>2019</li>
                            <li>IUT</li>
                            <li>Mock-up</li>
                            <li>Intégration</li>
                        </ul>
                        <a href="projets/portfolio-v1.php" class="boutonDecouvir btnTransiUp">
                            <p>Discover</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet graphisme" style="background-image: url(projets/graphisme-mmi-isometrique/mmi-isometrique.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>MMI isométrique</h3>
                        <ul class="tags">
                            <li>Graphisme</li>
                            <li>2019</li>
                            <li>IUT</li>
                            <li>Vectoriel</li>
                            <li>Affinity Designer</li>
                        </ul>
                        <a href="projets/mmi-isometrique.php" class="boutonDecouvir btnTransiUp">
                            <p>Discover</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet graphisme" style="background-image: url(projets/graphisme-biosse/biosse_mockup_1.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>BiOSSE</h3>
                        <ul class="tags">
                            <li>Graphisme</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Charte-graphique</li>
                        </ul>
                        <a href="projets/biosse.php" class="boutonDecouvir btnTransiUp">
                            <p>Discover</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet web" style="background-image: url(projets/web-portfolio-v2/portfolio-v2_Mockup-4.jpg);  background-position: 50% 90%; ">
                    <div class="contenuSectionProjet">
                        <h3 title="Vous êtes dessus !!">Portfolio version 2</h3>
                        <ul class="tags">
                            <li>Web</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Intégration</li>
                        </ul>
                        <a href="projets/portfolio-v2.php" class="boutonDecouvir btnTransiUp">
                            <p>Discover</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet graphisme" style="background-image: url(projets/graphisme-technews/Magazine-Apple-Mockup.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>TechNews</h3>
                        <ul class="tags">
                            <li>Graphisme</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Mise-en-page</li>
                            <li>PAO</li>
                            <li>Adobe InDesign</li>
                        </ul>
                        <a href="projets/technews.php" class="boutonDecouvir btnTransiUp">
                            <p>Discover</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet audiovisuel" style="background-image: url(projets/audiovisuel-video-explicative-Mavic-Air/video-explicative_Mavic-Air.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>Vidéo explicative</h3>
                        <ul class="tags">
                            <li>Audiovisual</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Vidéo</li>
                            <li>Adobe Premiere Pro</li>
                        </ul>
                        <a href="projets/video-explicative-MavicAir.php" class="boutonDecouvir btnTransiUp">
                            <p>Discover</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet web graphisme" style="background-image: url(projets/web-themis/mockup-themis.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>Themis</h3>
                        <ul class="tags">
                            <li>Web</li>
                            <li>Graphisme</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li><abbr title="Projet tutoré">PTUT</abbr></li>
                            <li>Maquettage</li>
                            <li>Prototypage</li>
                            <li>Intégration</li>
                        </ul>
                        <a href="projets/themis.php" class="boutonDecouvir btnTransiUp">
                            <p>Discover</p>
                        </a>
                    </div>
                </article>

                <!------------------------------------------------------->
                <!-- Rendons à césar ce qui est à césar, cette galerie est fortement inspirée de celle de maellemoisis.fr -->
            </div>
        </section>

        <section id="a-propos" class="transitionMode">
            <h2>About me</h2>
            <div class="contenuSectionApropos">
                <div>
                    <img id="photoProfil" src="images/photo_profil.jpg" alt="photo de Darshan Saini">
                </div>
                <div>
                    <p>My Name is <strong>Darshan Saini</strong>, I am 23 years old and I am currently in the first year of <strong>MCA <abbr class="infobulle" title="Métiers du Multimédia et de l'Internet">in International School Of Informatics and Management, Jaipur</abbr></strong> . I obtained my bachelors degree (with 8.9 CGPA) at Dr. K.N. Modi University. I am <strong>passionate about new Technology</strong> and singing. I love the guitar and classical music. Lovers of beautiful landscapes, I like to travel with my favorite camera.</p>
                    <p> After having explored many fields during my bachelor and masters, I wish to continue my studies by orienting myself towards the software engineering and web design professions.</p>
                    <div class="div-a-propos-lien">
                        <a href="cv.php" class="a-propos-bouton btnTransiUp">
                            <p>View CV</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <form method="post" action="index-form-mail.php">
                <fieldset>
                    <div>
                        <div>
                            <label for="prenom">First Name</label>
                            <input type="text" id="prenom" name="prenom" required>
                        </div>
                        <div>
                            <label for="nom">Last Name</label>
                            <input type="text" id="nom" name="nom" required>
                        </div>
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="objet">Object</label>
                        <input type="text" id="objet" name="objet" required>
                    </div>
                    <div>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="8" cols="40" required placeholder="Your Message Here"></textarea>
                    </div>
                    <div class="formLigne">
                        <input type="checkbox" id="recevoirCopie" name="recevoirCopie">
                        <label for="recevoirCopie">To receive a copy of the email</label>
                    </div>
                </fieldset>
                <div id="divBoutonEnvoyer">
                    <button type="submit" class="transitionMode">Send</button>
                </div>
            </form>

            <?php
                if(isset($_SESSION['message'])){
            ?>
            <p class="retourMail"> <?php echo($_SESSION['message']) ?> </p>
            <?php
                    unset($_SESSION['message']);
                }
            ?>
        </section>

    </main>

    <?php require "require/footer.html"; ?>

</body>

</html>
