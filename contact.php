<?php
	$couleur_bulle_classe = "jaune";
	$pageCourante = "contact";

	if (isset($_POST["submit"])) {
		if (!empty($_POST["mail"]) AND !empty($_POST["message"]) AND !empty($_POST["nom"]) AND !empty($_POST["prenom"])) {
			echo "<div class='message-ok'>Message envoyé !</div>";
		}
		else {
			echo "<div class='message-erreur'>Merci de remplir tous les champs du formulaire.</div>";
		}
	}
	
	
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>

	<link rel="stylesheet" href="ressources/css/reset.css">
	<link rel="stylesheet" href="ressources/css/global.css">
	<link rel="stylesheet" href="ressources/css/header.css">
	<link rel="stylesheet" href="ressources/css/accueil.css">
	<link rel="stylesheet" href="ressources/css/contact.css">
    <link rel="apple-touch-icon" sizes="180x180" href="ressources/images/Favicons/contact/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="ressources/images/Favicons/contact/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="ressources/images/Favicons/contact/favicon-16x16.png" />
    <link rel="manifest" href="ressources/images/Favicons/contact/site.webmanifest" />	
</head>

<body>
	<section class="conteneur-1280" id="haut">
		<?php require_once('./ressources/includes/header.php'); ?>

		<main role="main">
			<h1 class="titre">Plus d'infos sur la formation ?</h1>
			<h1 class="titre">Contactez-nous !</h1>


			<p class="paragraphe">
				<span style="font-weight: bold;">La formation s'ouvre à tous les bacheliers</span>, pour rappel. Avoir des connaissances en programmation,
				design ou encore audiovisuel n'est pas obligatoire mais reste un bon atout,
				car il faut aimer la curiosité dans cette formation pluridisciplinaire.
				<span style="font-weight: bold;">Il est également possible de faire la formation après une reprise d'études ou une réorientation. </span>
			</p>


			<h2 class="titre" style="margin-bottom: 1rem;margin-top:4rem;">Nous contacter en ligne</h2>
			<p class="champ-requis">(*) Champ requis

			<form action="contact.php" class="formulaire" method="post">
				<section class="champ-espacement">
				<label class="champ-intitule" for="prenom">Prénom*</label>
				<input type="text" name="prenom" id="prenom">
				</section>
				<section class="champ-espacement">
				<label class="champ-intitule" for="nom">Nom de famille*</label>
				<input type="text" name="nom" id="nom">
				</section>
				<section class="champ-espacement">
				<label class="champ-intitule" for="mail">Adresse e-mail*</label>
				<input type="email" name="mail" id="mail">
				</section>
				<section class="champ-espacement">
				<label class="champ-intitule" for="message">Message*</label>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
				</section>
				<p style="font-weight: bold; font-size: 1.125rem;">Je suis*</p>
				<div class="je-suis">
					<input type="radio" name="choix" id="aucune-precision" value="aucune précision">
					<label for="aucune-precision">Je ne souhaite pas le préciser</label>
					<input type="radio" name="choix" checked id="etudiant-etudiante" value="etudiant-etudiante">
					<label for="etudiant-etudiante">Etudiant / Etudiante</label>
					<input type="radio" name="choix" id="parent" value="parent">
					<label for="parent">Parent</label>
					<input type="radio" name="choix" id="autre" value="autre">
					<label for="autre">Autre</label>
				</div>
				<input type="submit" name="submit" value="Envoyer" class="bouton-envoi">
			</form>

			
			<div class="contact">
				<h2 class="titre" style="margin-bottom:1rem;">Nous contacter par courrier</h2>
				<div class="paragraphe-contact">
					IUT de Cergy-Pontoise, <br>
					Département Métiers du Multimédia et de l’Internet (MMI) <br>
					34 Bis Boulevard Henri Bergson <br>
					95200 Sarcelles <br>
				</div>
			</div>

		</main>
		<?php require_once('./ressources/includes/footer.php'); ?>
	</section>
</body>

</html>