
<div class="flex-child-blog-item">

<h2 class="blog-item-h2"> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
        
<p class="excerpt"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
<p class="read-more"><a class="cta" href="<?php the_permalink(); ?>">Leer mas &raquo;</a></p>

</div>
