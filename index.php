<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clémentine Rainbow Flow</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" title="default">
    <!-- Icone à rajouter dans le lien ci-dessous, donc à créer dans le dossier images-->
    <link rel="stylesheet" type="text/css" href="./css/rainbow_style.css" disabled>
    <link rel="icon" href="./images/favicon.ico">
</head>
<body>
    <header class="header">

        <h1 class="header__title">Bienvenue sur mon site clementinerainbowflow</h1>
        <div class="menu__color-switcher">
        <button id="theme-dark" class="theme-button" type="button" aria-label="Changer la couleur du thème"></button>
        <button id="theme-rainbow" class="theme-button" type="button" aria-label="Changer la couleur du thème"></button>
        </div>
        <h2 class="header__subtitle">Il y a des fleurs partout pour qui veut bien les voir</h2>
        <h3>Nous sommes tous des artistes</h3>
        <p class="header__paragraph">~ Site internet en construction ~</p>
        <p class="header__paragraph">Dans ce site tu trouveras :</p>
        <ul class="header__ul">
            <li>Des créations artistiques </li>
            <li>Des écrits</li>
        </ul>
            <nav class="menu">
                <ul class="menu__navigation">
                    <li><a href="crea_graphiques.html" title="Créations graphiques" alt="Créations graphiques">Créations graphiques</a>
                        <ul class="menu__navigation__sousMenu">
                            <li><a href="illustrations.html" title="Les illustrations" alt="Les illustrations">Les illustrations</a></li>
                                <ul class="menu__navigation__dernierMenu">
                                    <li><a href="oracles.html" title="Les oracles" alt="Les oracles">Les oracles</a></li>
                                    <li><a href="logos.html" title="Les logos" alt="Les logos">Les logos</a></li>
                                    <li><a href="livres.html" title="Les livres" alt="Les livres">Les livres</a></li>
                                </ul>
                            <li><a href="peintures.html" title="Les peintures" alt="Les peintures">Les peintures</a></li>
                            <li><a href="mix_medium.html" title="Les mediums" alt="Les mediums">Les mediums</a></li>
                        </ul>
                    </li>
                    <li><a href="ecritures.html" title="Écritures" alt="Écritures">Écritures</a>
                        <ul class="menu__navigation__sousMenu">
                            <li><a href="poemes.html" title="Les poèmes" alt="Les poèmes">Les poèmes</a></li>
                            <li><a href="contes.html" title="Les contes" alt="Les contes">Les contes</a></li>
                            <li><a href="reflexions.html" title="Les réflexions" alt="Les réflexions">Les réflexions</a></li>
                        </ul>
                    </li>
                    <li><a href="sculptures.html" title="Les sculptures" alt="Les sculptures">Les sculptures</a>
                        <ul class="menu__navigation__sousMenu">
                            <li><a href="interieur.html" title="Les intérieurs" alt="Les intérieurs">Les intérieurs</a></li>
                            <li><a href="exterieur.html" title="Les extérieurs" alt="Les extérieurs">Les extérieurs</a></li>
                        </ul>
                    </li>
                    <li><a href="et_sinon.html" title="Et sinon" alt="Et sinon">Et sinon</a>
                        <ul class="menu__navigation__sousMenu">
                            <li><a href="presta_et_tarifs.html" title="Mes prestations et mes tarifs" alt="Mes prestations et mes tarifs">Mes prestations et mes tarifs</a></li>
                            <li><a href="me contacter.html" title="Me contacter" alt="Me contacter">Me contacter</a></li>
                            <li><a href="qui_suis_je.html" title="Qui suis-je ?" alt="Qui suis-je ?">Qui suis-je ?</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
    </header>
    <section>
    </section>
    <section>
    </section>
    <footer class="footer">
        <div class="footer__container">
            <ul>
                <li><a href="https://www.facebook.com/clementine.rainbow.90" title="Rejoignez-moi sur facebook" target="_blank" alt="Rejoignez-moi sur facebook">Facebook</a></li>
                <li><a href="http://instagram.com" title="Rejoignez-moi sur Instagram" target="_blank" alt="Rejoignez-moi sur Instagram">Instagram</a></li>
                <li><a href="https://www.linkedin.com/in/cl%C3%A9mentine-degaine-4a9157260/" title="Rejoignez-moi sur Linkedin" target="_blank" alt="Rejoignez-moi sur Linkedin">Linkedin</a></li>
            </ul>
            <ul>
                <li><a href="cgv.html" title="CGV" target="_blank" alt="CGV">Les conditions générales de vente</a></li>
                <li><a href="me contacter.html" title="Me contacter" target="_blank" alt="Me contacter">Me contacter</a></li>
            </ul>
        </div>
        <?php
        include "./php/includes/templates/footer.tpl.php";
        ?>