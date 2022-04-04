<?php 

get_header();?>

<div class="container">
<?php
while(have_posts()) {

    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p class="blog-author-info">Publicado por: <?php the_author_posts_link(); ?> Fecha: <?php the_time('n-j-Y'); ?> Categoria(s): <?php echo get_the_category_list(', '); ?></p>
    <?php the_content(); ?>
    
<?php } ?>

</div>


<?php
get_footer();
?>