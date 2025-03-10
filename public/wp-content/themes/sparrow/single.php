<?php
// Holt den Inhalt der header.php (z. B. <html>, <head>, <body> etc.)
get_header();

// WordPress Loop: solange es Beiträge (Posts oder Seiten) gibt …
while (have_posts()) {
    // … bereitet WordPress den nächsten Beitrag zur Ausgabe vor
    the_post(); ?>
    
    <!-- Gibt den Titel des Beitrags oder der Seite aus -->
    <h2><?php the_title(); ?></h2>
    
    <!-- Gibt den eigentlichen Inhalt aus (Text, Bilder, etc.) -->
    <p><?php the_content(); ?></p>

<?php
}

// Holt den Inhalt der footer.php (z. B. </body>, </html>, Scripts, etc.)
get_footer();
?>
