<?php
    $couleur_bulle_classe = "rouge";
	$pageCourante = "surLesMedias";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sur les médias</title>

    <link rel="stylesheet" href="ressources/css/reset.css">
    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/header.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
	<link rel="stylesheet" href="ressources/css/medias.css">
    <link rel="apple-touch-icon" sizes="180x180" href="ressources/images/Favicons/medias/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="ressources/images/Favicons/medias/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="ressources/images/Favicons/medias/favicon-16x16.png" />
    <link rel="manifest" href="ressources/images/Favicons/medias/site.webmanifest" />
</head>
<body>
    <div class="conteneur-1280" id="haut">
        <?php require_once('./ressources/includes/header.php'); ?>
        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main>

        <h1 class="titre-page"> Les actualités et les évènements important du BUT et de l'IUT CY Paris Université dans les médias. </h1>

        <div class="video">
            <div>
                <h4 class="titre-video"> Le nouvelle réforme : le BUT MMI</h4>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oiEbQF7qfBU" title="Le nouvelle réforme: le BUT MMI"> </iframe>
            </div>
		
		    <div>
                <h4 class="titre-video"> Pourquoi étudier à l'IUT CYU ? </h4>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/SyjF4h2Zb7Q" title="Pourquoi étudier à l'IUT CYU ?"> </iframe>
            </div>
		
		    <div>
                <h4 class="titre-video espacement"> Job interview en anglais</h4>
				<h4 class="titre-video-suite espacement">au département MMI </h4>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/t72pdxpNjyc" title="Job interview en anglais au département MMI"> </iframe> 
            </div>
		
		    <div>
                <h4 class="titre-video espacement"> L'importance de l'IUT dans</h4>
				<h4 class="titre-video-suite espacement">les études supérieures </h4>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xD4wshE0hEg" title="L'importance de l'IUT dans les études supérieures"> </iframe> 
            </div>
        </div>

		</main>
		<!-- le footer est identique sur chaque page du site d'où l'inclusion de fichier php --> 
		<?php require_once('./ressources/includes/footer.php'); ?>
    </div>
</body>

</html>