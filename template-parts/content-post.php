<div class="flex-child-blog-item">
                <!-- <article class="blog-item"> -->
                    
                    <div class="feature-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('index-post-thumbnail'); ?></a></div>
                    <h2 class="blog-item-h2"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                    <p class="blog-author-info">Publicado por: <?php the_author_posts_link(); ?> Fecha: <?php the_time('n-j-Y'); ?> Categoria(s): <?php echo get_the_category_list(', '); ?></p>
                    <p class="excerpt"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                    <p class="read-more"><a class="cta" href="<?php the_permalink(); ?>">Leer mas &raquo;</a></p>
                <!-- </article> -->

</div> <!-- flex-child-blog-item ends here -->