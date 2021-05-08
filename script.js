"use strict";
(function () {
    document.addEventListener("DOMContentLoaded", initialiser);

    /*********************************************************/
    /*                 DECLATATION VARIABLES                 */
    /*********************************************************/
    let leTitre;
    let blocMain;

    /*********************************************************/
    /*                   FONCTION PRINCIPALE                 */
    /*********************************************************/
    function initialiser(evt) {

        $("#fondMenu").hide();
        $(".goEnHaut").hide();

        /********** CLIC DANS LE MENU **********/
        $(".burgerMenu").click(burgerclick);
        $(".lienMenu").click(clickpage);
        $(".titre").click(clickpage);

        /********** AFFICHAGE DU TITRE DU SITE **********/
        $(window).scroll(gestionTitre);
        leTitre = $(".titreEnteteSite");
        leTitre.css("display", "none");

        leTitre.on("transitionend", function (evt) {
            if (evt.originalEvent.propertyName == "opacity") {
                if (leTitre.css("opacity") == 0) {
                    leTitre.css("display", "none");
                }
            }
        });

        /********** THEME **********/
        document.getElementById("themeCheck").addEventListener("input", theme);

        blocMain = $("main");

        const date = new Date();

        if (localStorage.getItem('theme') == null) {
            if (blocMain.hasClass("themeSombre") == true)
                localStorage.setItem('theme', 'nuit');
            else
                localStorage.setItem('theme', 'jour');
        }

        if (localStorage.getItem('theme') == "jour") {
            document.getElementById("themeCheck").checked = false;
            setThemeClair();
        } else if (localStorage.getItem('theme') == "nuit") {
            document.getElementById("themeCheck").checked = true;
            setThemeSombre();
        }

        /********** Fonction de transition couleur background **********/
        setTimeout(function () {
            $(".transitionMode").css("transition", "color 500ms ease 0s, background 500ms ease 0s");
        }, 1);

        /********** BLOQUE LE CLIC DROIT **********/
        document.addEventListener("contextmenu", function (evt) {
            evt.preventDefault();
        });

        /********** REMONTER EN HAUT DE LA PAGE **********/
        $(".goEnHaut").click(function (evt) {
            $(window).scrollTop(0);
        });


        /********** Fait apparaitre le text du hover automatiquement sur mobile **********/
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $(window).scroll(function () {
                $('.sectionProjet').each(function () {
                    let elem = $(this)
                    if (isScrolledIntoView(elem)) {
                        elem.children(".contenuSectionProjet").css("left", "0");
                    } else
                        elem.children(".contenuSectionProjet").css("left", "-100%");
                });
            });
        }

        gestionFiltres();
        initTransition();

    } // FIN FONCTION PRINCIPALE 

    /*********************************************************/
    /*                    GESTION DU MENU                    */
    /*********************************************************/
    function burgerclick(evt) {
        $(this).toggleClass("change");
        $("body").toggleClass("translateMenu");
        remouvEventMenuClick();
    }

    function clickpage(evt) {
        $(".burgerMenu").removeClass("change");
        $("body").removeClass("translateMenu");
        remouvEventMenuClick();
    }

    function remouvEventMenuClick() {
        if ($("body").hasClass("translateMenu") == false) {
            $("main").off("click");
            $("#fondMenu").fadeOut(500);
            $("#fondMenu").off("click");
        } else {
            $("main").click(clickpage);
            $("#fondMenu").fadeIn(500);
            $("#fondMenu").click(clickpage);
        }
    }

    /*********************************************************/
    /*                      MODE SOMBRE                      */
    /*********************************************************/
    function theme(evt) {
        if (localStorage.getItem('theme') == "jour") {
            setThemeSombre();
        } else if (localStorage.getItem('theme') == "nuit") {
            setThemeClair();
        }
    }

    function setThemeSombre() {
        blocMain.addClass("themeSombre");
        $(".enteteSite").addClass("themeSombre");
        $(".burgerMenu").addClass("themeSombre");
        $("#a-propos").addClass("themeSombre");
        $("#contact button").addClass("themeSombre");
        $(".goEnHaut").addClass("themeSombre");
        $("#projetFiltre").addClass("themeSombre");
        localStorage.setItem('theme', 'nuit');
    }

    function setThemeClair() {
        blocMain.removeClass("themeSombre");
        $(".enteteSite").removeClass("themeSombre");
        $(".burgerMenu").removeClass("themeSombre");
        $("#a-propos").removeClass("themeSombre");
        $("#contact button").removeClass("themeSombre");
        $(".goEnHaut").removeClass("themeSombre");
        $("#projetFiltre").removeClass("themeSombre");
        localStorage.setItem('theme', 'jour');
    }


    /*********************************************************/
    /*        VISIBILITE TITRE EN-TETE ET GO-TOP             */
    /*********************************************************/
    function gestionTitre() {
        if (document.body.hasAttribute("index")) {
            if (isScrolledIntoView($('#titreAccueil'))) {
                leTitre.removeClass("titreSiteVisible");
            } else {
                leTitre.css("display", "block");
                setTimeout(function () {
                    leTitre.addClass("titreSiteVisible");
                }, 1);
            }
        }

        var $window = $(window);
        let goTopBouton = $(".goEnHaut");
        if ($window.scrollTop() > $window.height() * 0.6) {
            goTopBouton.fadeIn(200);
        } else
            goTopBouton.fadeOut(200);
    }

    function isScrolledIntoView(elem) {
        var $elem = $(elem);
        var $window = $(window);

        var docViewTop = $window.scrollTop();
        var docViewBottom = docViewTop + $window.height();

        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }


    /*********************************************************/
    /*                GESTION FILTRE PROJET                  */
    /*********************************************************/

    function gestionFiltres() {
        let $filtre = $(".theme");
        let $lesProjets = $(".sectionProjet");

        $filtre.click(function () {
            $filtre.removeClass("active");
            $(this).addClass("active");

            let theme = $(this).data("theme");

            $lesProjets.show();
            $lesProjets.each(function () {
                if (theme == "tout")
                    $(this).show();
                else if (!$(this).hasClass(theme)) {
                    $(this).hide();
                }
            });
        });
    }

    /*********************************************************/
    /*                    TRANSITION PAGE                    */
    /*********************************************************/

    function initTransition() {
        /********** TRANSITION UP **********/
        $(".btnTransiUp").click(function (e) {
            e.preventDefault();
            let lien = $(this).attr('href');

            let divIframeUp = $("#iframe_content_up");
            divIframeUp.html('<iframe src="" id="iframeTrans"></iframe>');
            divIframeUp.css("top", "0");
            divIframeUp.children().attr('src', lien);
            setTimeout(function () {
                window.location.href = lien;
            }, 500);
        });

        //    /********** TRANSITION DOWN **********/
        //    $(".boutonTag, .boutonRetour").click(function (e) {
        //        e.preventDefault();
        //        let lienTag = $(this).attr('data-lien');
        //
        //        document.getElementsByTagName("main")[0].insertAdjacentHTML("afterbegin", '<div id="iframe_content_down"></div>');
        //
        //        let divIframe2 = $("#iframe_content_down");
        //        divIframe2.html('<iframe src="" id="iframeTrans"></iframe>');
        //        divIframe2.css("top", "0");
        //        divIframe2.children().attr('src', lienTag);
        //        setTimeout(function () {
        //            window.location.href = lienTag;
        //        }, 460);
        //    });

        /********** TRANSITION DOWN **********/
        $(".btnTransiDown").click(function (e) {
            // comme ça bug sur firefox je désactive la transition sur ce navigateur ↓
            if (!(navigator.userAgent.toLowerCase().indexOf('firefox') > -1)) {
                e.preventDefault();
                let lienTag = $(this).attr('href');

                document.getElementsByTagName("main")[0].insertAdjacentHTML("afterbegin", '<div id="iframe_content_down"></div>');

                let divIframe2 = $("#iframe_content_down");
                divIframe2.html('<iframe src="" id="iframeTrans"></iframe>');
                divIframe2.css("top", "0");
                divIframe2.children().attr('src', "index.php");
                setTimeout(function () {
                    window.location.href = lienTag;
                }, 430);
            }
        });
    }

    /*********************************************************/
    /*                     FIN DU CODE                       */
    /*********************************************************/

}());
