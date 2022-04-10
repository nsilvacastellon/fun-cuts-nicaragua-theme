<?php
get_header();
?>

<section class="generic-blog">
    <div class="container">
        <h1 class="generic-blog-h1"> <?php the_archive_title() ?> </h1>
        <span> <?php the_archive_description();  ?></span>
        <p class="generic-blog-p"> <?php if (is_category()) {
            echo "Aqui encontrarás todas las publicaciones relacionadas a la Categoria: "; echo "<b>"; single_cat_title(); echo "</b>";
        }
            if (is_author()) {
                echo "Aqui encontrarás todas las publicaciones hechas por: "; echo "<b>"; the_author(); echo "</b>";
            }
         ?></p>
        <div class="flex-parent-blog-item">
          <?php
          
          while(have_posts()) {
            the_post(); ?>
            
              <div class="flex-child-blog-item">
                <!-- <article class="blog-item"> -->
                    
                    <div class="feature-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
                    <h2 class="blog-item-h2"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                    <p class="blog-author-info">Publicado por: <?php the_author_posts_link(); ?> Fecha: <?php the_time('n-j-Y'); ?> Categoria(s): <?php echo get_the_category_list(', '); ?></p>
                    <p class="excerpt"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                    <p class="read-more"><a class="cta" href="<?php the_permalink(); ?>">Leer mas &raquo;</a></p>
                <!-- </article> -->

              </div> <!-- flex-child-blog-item ends here -->
            
          <?php } ?>

        </div> <!-- flex-parent-blog-item ends here -->


          


            <div>
             
             <span class="pagination"> <?php echo paginate_links(); ?></span>
           
             </div>
    </div>
</section>

<?php 
get_footer();
?>