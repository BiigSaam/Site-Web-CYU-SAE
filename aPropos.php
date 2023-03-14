<?php
    $couleur_bulle_classe = "vert";
	$pageCourante = "aPropos";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>À Propos</title>

    <link rel="stylesheet" href="ressources/css/reset.css" />
    <link rel="stylesheet" href="ressources/css/global.css" />
    <link rel="stylesheet" href="ressources/css/header.css" />
    <link rel="stylesheet" href="ressources/css/accueil.css" /> 
	<link rel="stylesheet" href="ressources/css/propos.css" />
	<link rel="apple-touch-icon" sizes="180x180" href="ressources/images/Favicons/a_propos/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="ressources/images/Favicons/a_propos/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="ressources/images/Favicons/a_propos/favicon-16x16.png" />
    <link rel="manifest" href="ressources/images/Favicons/a_propos/site.webmanifest" />
</head>

<body>
    <section class="conteneur-1280" id="haut">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main >
		<ul class="sommaire">
            <li><a class="lien-sommaire" href="#presentation">Présentation</a></li>
            <li><a class="lien-sommaire" href="#sae">SAÉ</a></li>
            <li><a class="lien-sommaire" href="#exemples">Exemples de la SAÉ</a></li>
		</ul>
	
        <section id="presentation" class="presentation">
			<p class="presentation-texte">Le BUT métiers du multimédia et de l'internet (MMI) remplace le DUT MMI à partir de la
                 rentrée 2021, auparavant appelé DUT SRC (services et réseaux de communication) jusqu'en mai 2013, qui était lancé
                  à la rentrée universitaire 1994 par les IUT de Vélizy, Marne-la-Vallée, Saint-Raphaël et Verdun. Ce BUT offre une 
                  alternative aux anciens diplômes Bac+3, tels que la licence professionnelle en activités et techniques de communication 
                  et la licence professionnelle en systèmes informatiques et logiciels. 
            </p>
			<p class="presentation-texte">
                  Lorsque cette formation était proposée sous la forme 
                  d'un Diplôme Universitaire Technologique (DUT), elle se déroulait sur deux années (1 800 heures). En théorie, elle est accessible 
                  à tous les bacheliers, quelle que soit leur série. En moyenne, il y a de 30 à 35 heures de cours par semaine. Cette formation se 
                  divise en trois grands pôles, auxquels il faut ajouter le projet tutoré (300 heures) et les stages (420 heures). Les trois grands 
                  axes sont les suivants :
            </p>
			
            <ul class="presentation-texte"> 
                <li>La culture contemporaine et langues étrangères (500 heures)</li>
                <li>La culture scientifique et technique (700 heures)</li>
                <li>La culture communicationnelle (600 heures)</li>
            </ul>

            <img class="photo-maison" src="ressources/images/IMG_7106.png" alt="photo d'une maison dans une forêt">
            <p class="presentation-texte quebec">A CY Cergy Paris Université, il est donné la possibilité aux étudiants de 
                passer un semestre au Québec à l'Université du Québec à Chicoutimi (UQAC) dans une formation dont le contenu 
                est proche de celui proposé à l'IUT. Il est également possible d'effectuer ce semestre après avoir été diplômé.
                <span class="gras"> Attention : les cours sont dispensés en langue française.</span></p>
        </section>
		
        <section id="sae" class="sae">
            <h1 class="titre-page">Situation d'Apprentissage et d'Évaluation<h1>
            <p class="sae-texte">Dans l’optique de préparer au mieux les étudiants à leur future vie professionnelle, 
                les étudiants sont regroupés en agences de communication de 3 à 7 personnes dans des projets appelés "SAÉ" 
                ou Situation d'Apprentissage et d'Évaluation. Ces agences ont pour but d’encourager le travail d’équipe dans 
                un cadre reprenant l'environnement du travail en entreprise. 
			</p>
            <p class="sae-texte">    
                La situation d'apprentissage et d'évaluation ou 
                implement SAÉ est la situation didactique que privilégie, au Québec, le Ministère de l'Éducation, Enseignement 
                supérieur et Recherche (MEESR) par le biais du Programme de formation de l'école québécoise (PFEQ). Une SAÉ se 
                définit comme un ensemble constitué d’une ou plusieurs tâches à réaliser par l’élève en vue d’atteindre le but 
                fixé. Elle permet : à l’élève, de développer et d’exercer une ou plusieurs compétences disciplinaires et transversales; 
                à l’enseignant, d’assurer le suivi du développement des compétences dans une perspective d’aide à l’apprentissage. 
                Elle est donc centrée sur l'élève et préconise une approche constructiviste ou socioconstructiviste à l'école. 
            </p>  
            <p class="sae-texte">    
                Les SAÉ sont une nouveauté des diplômes BUT,<span class="gras"> elles visent à remplacer les Devoirs Sur Table et les notes à terme</span>, 
                en proposant une approche plus "ingénieure" de la scolarité avec des étudiants qui apprennent à résoudre des problèmes 
                et non plus apprendre par cœur leurs cours.
			</p>
        </section>
		
        <h1 class="titre-page">Exemples de projets réalisés en SAÉ</h1>
        <section id="exemples" class="exemples">
            <section class="boite">
                <img class="image2" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu">Reportage vidéo</h2>
				<h2 class="titre-contenu espacement">SAE 101</h2>
                <p class="contenu">Apprendre les bases du reportage vidéo sur un sujet libre</p>
               </section>

               <section class="boite">
                <img class="image2" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu">Reportage vidéo</h2>
				<h2 class="titre-contenu espacement">SAE 104</h2>
                <p class="contenu">Apprendre les bases du reportage vidéo sur un sujet libre</p>
               </section>
               
               <section class="boite">
                <img class="image2" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu">Reportage vidéo</h2>
				<h2 class="titre-contenu espacement">SAE 105</h2>
                <p class="contenu">Apprendre les bases du reportage vidéo sur un sujet libre</p>
               </section>

               <section class="boite">
                <img class="image2" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu">Reportage vidéo</h2>
				<h2 class="titre-contenu espacement">SAE 101</h2>
                <p class="contenu">Apprendre les bases du reportage vidéo sur un sujet libre</p>
               </section>

               <section class="boite">
                <img class="image2" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu">Reportage vidéo</h2>
				<h2 class="titre-contenu espacement">SAE 101</h2>
                <p class="contenu">Apprendre les bases du reportage vidéo sur un sujet libre</p>
               </section>

               <section class="boite">
                <img class="image2" src="ressources/images/IMG_6897.png" alt="image de rocher">
                <h2 class="titre-contenu">Reportage vidéo</h2>
				<h2 class="titre-contenu espacement">SAE 101</h2>
                <p class="contenu">Apprendre les bases du reportage vidéo sur un sujet libre</p>
               </section>
        </section>
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>

</html>



