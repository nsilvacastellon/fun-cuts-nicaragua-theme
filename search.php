<?php
get_header();
?>

<section class="generic-blog">
    <div class="container">

        <?php get_search_form();  ?>

        <h1 class="generic-blog-h1">Resultado de la búsqueda:</h1>
        <p class="generic-blog-p"><?php echo 'Estás buscando el término &ldquo;' . esc_html(get_search_query(false)) . '&rdquo;'; ?></p>
        <div class="flex-parent-blog-item">
          <?php
          
          while(have_posts()) {
            the_post(); 
            get_template_part('template-parts/content', get_post_type());
            ?>
            
              
            
          <?php } ?>

        </div> <!-- flex-parent-blog-item ends here -->

            <div>
             
            <span class="pagination"> <?php echo paginate_links(); ?></span>
          
            </div>
    </div> <!-- .container ends here -->
</section>

<?php 
get_footer();
?>