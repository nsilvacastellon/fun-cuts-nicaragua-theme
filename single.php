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


<div class="single-author-bio">
    <div class="single-author-avatar">
        <?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?>
        <h3><?php the_author_posts_link(); ?></h3>
    </div>
    <div class="single-author-description">
        
        <p><?php the_author_meta('description'); ?></p>
        <p><?php the_author_meta('user_email'); ?></p>
        <p><?php the_author_meta('user_url'); ?></p> 
    
</p>
    </div>
</div>


<a class="cta" href="<?php echo site_url('/blog') ?>">Volver a Blogs...</a>

</div>


<?php
get_footer();
?>