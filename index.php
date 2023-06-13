<?php
include 'includes/header.php';
require_once 'array.php'; 
?>
    <main>
        <div id="liste-oeuvres">
            <?php foreach ($artworks as $artwork): ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $artwork['id']; ?>">
                        <img src="<?php echo $artwork['image']; ?>" alt="<?php echo $artwork['name']; ?>">
                        <h2><?php echo $artwork['name']; ?></h2>
                        <p class="description"><?php echo $artwork['artist']; ?></p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
    <!-- footer -->
    <?php
    include 'includes/footer.php';
    ?>