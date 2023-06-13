<?php
include 'includes/header.php';
require_once 'array.php'; //faire appel au tableau des oeuvres
?>
<?php
    $id = $_GET['id']-1; //récupérer l'identifiant de l'œuvre à partir de la chaîne de requête de l'URL
    $artwork = $artworks[$id]; //accéder aux informations de l'œuvre dans votre tableau $artworks
?>
<main>
    <!-- afficher les informations de l'oeuvre corresopndant à l'id -->
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $artwork['image']; ?>" alt="<?php echo $artwork['name']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $artwork['name']; ?></h1>
            <p class="description"><?php echo $artwork['artist']; ?></p>
            <p class="description-complete"><?php echo $artwork['desc']; ?></p>
        </div>
    </article>
</main>
<!-- footer -->
<?php
include 'includes/footer.php';
?>