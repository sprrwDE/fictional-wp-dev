<?php

while (have_posts()) {
    the_post(); ?>
    <h1>This is a Page not a Post</h1>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
<?php }

?>