<?php
get_header();
?>

<section class="generic-blog">
    <div class="container">

        <?php get_search_form();  ?>

        <h1 class="generic-blog-h1">Resultado de la búsqueda:</h1>
        <h2><?php echo 'Estás buscando el término &ldquo;' . esc_html(get_search_query(false)) . '&rdquo;'; ?></h2>
        <div class="flex-parent-blog-item">
          <?php
          if (have_posts()) {
            while(have_posts()) {
              the_post(); 
              get_template_part('template-parts/content', get_post_type());
              

            } ?>
  
          </div> <!-- flex-parent-blog-item ends here -->
  
              <div>
               
              <span class="pagination"> <?php echo paginate_links(); ?></span>
            
              </div>
          <?php }
          else {
            echo '<h3>La búsqueda tiene 0 resultados, por favor intenta con otra palabra o frase.</h3>';
          } ?>
         
    </div> <!-- .container ends here -->
</section>

<?php 
get_footer();
?>