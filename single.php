<?php 

get_header();?>

<div class="container">
<?php
while(have_posts()) {

    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p class="blog-author-info">Publicado por: <?php the_author_posts_link(); ?> Fecha: <?php the_time('n-j-Y'); ?> Categoria(s): <?php echo get_the_category_list(', '); ?></p>
    <div class="single-blog-content">
        <?php the_content(); ?>
    </div>
    
<?php } ?>


<div id="author-bio">
<div id="author-avatar">
<?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?>
</div>
<div id="author-description">
<h3><?php the_author_link(); ?></h3>
<?php the_author_meta('description'); ?>
    </div>
</div>


<a class="cta" href="<?php echo site_url('/blog') ?>">Volver a Blogs...</a>

</div>


<?php
get_footer();
?>