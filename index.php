<?php
    $couleur_bulle_classe = "rose";
	$pageCourante = "index";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>

    <link rel="stylesheet" href="ressources/css/reset.css" />
    <link rel="stylesheet" href="ressources/css/global.css" />
    <link rel="stylesheet" href="ressources/css/header.css" />
	<link rel="stylesheet" href="ressources/css/accueil.css" />
	<link rel="stylesheet" href="ressources/css/index.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="ressources/images/Favicons/Accueil/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="ressources/images/Favicons/Accueil/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="ressources/images/Favicons/Accueil/favicon-16x16.png" />
    <link rel="manifest" href="ressources/images/Favicons/Accueil/site.webmanifest" />
</head>

<body>
    <section class="conteneur-1280" id="haut">

        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal" role="main">
            <h1 class="titre-page">Articles sur le BUT MMI</h1>
            
            <section class="colonne-principale"> 
			
				<a class="jpo-banniere" href="https://www.cyu.fr/salons-journee-portes-ouvertes" aria-label="">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="image de l'entrée de l'IUT">

                    <section class="textes">
                        <p class="txt-petit">Journée portes <br /> ouvertes</p>
                        <p class="txt-grand">
                            12/02/2022, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>

                    </section>
                </a>
			
               <section class="colonne">
                <img class="image" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu"> Développement Web </h2>
                <p class="contenu"> Initier les étudiants aux bases de la programmation de pages HTML. On y apprend les langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, le cours enseigne également les normes d'accessibilités comme le contraste des couleurs ou encore la taille des polices d'écriture.</p>
               </section>

               <section class="colonne">
                <img class="image" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu"> Développement Web </h2>
                <p class="contenu"> Initier les étudiants aux bases de la programmation de pages HTML. On y apprend les langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, le cours enseigne également les normes d'accessibilités comme le contraste des couleurs ou encore la taille des polices d'écriture.</p>
               </section>

               <section class="colonne">
                <img class="image" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu"> Développement Web </h2>
                <p class="contenu"> Initier les étudiants aux bases de la programmation de pages HTML. On y apprend les langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, le cours enseigne également les normes d'accessibilités comme le contraste des couleurs ou encore la taille des polices d'écriture.</p>
               </section>
            </section>
        </main>
		
    <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>

</html>