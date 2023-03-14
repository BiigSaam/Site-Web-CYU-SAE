<nav class="navigation-principale" role="navigation">
    <ul class="lien">
        <li> <a class="lien-entete <?php if ( $pageCourante == "index" ) {echo "active-accueil";} ?>" href="index.php"> ACCUEIL </a> </li>
        <li> <a class="lien-entete <?php if ( $pageCourante == "aPropos" ) {echo "active-apropos";}?>" href="aPropos.php"> A PROPOS</a> </li>
        <li> <a class="lien-entete <?php if ( $pageCourante == "contact" ) {echo "active-contact";}?>" href="contact.php"> CONTACT</a> </li>
        <li> <a class="lien-entete <?php if ( $pageCourante == "surLesMedias" ) {echo "active-medias";}?>" href="surLesMedias.php" aria-label=""> SUR LES MEDIAS</a> </li>
		<li> <a class="lien-entete <?php if ( $pageCourante == "formation" ) {echo "active-formation";}?>" href="formation.php"> FORMATION</a></li>
    </ul>
</nav>

<header class="bulle" role="banner">
    <article class="titre">
        <h1 class="txt-grand">
            <span>Bachelor</span>
            <span>Universitaire de</span>
            <span>Technologie</span>
        </h1>
        <h2 class="txt-petit">
            <span>Métiers du Multimédia et de</span>
            <span>l'Internet</span>
        </h2>
    </article>

    <article class="bulle-icone <?php echo $couleur_bulle_classe; ?>"></article>
    <article class="bulle-icone-bordure <?php echo $couleur_bulle_classe; ?>"></article>
</header>