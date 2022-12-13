<?php 

get_header();

while(have_posts()) {

    the_post(); ?>

<main>

    <section class="page-template">

    <div class="container">

        <h1> <?php the_title(); ?></h1>
        
        <?php the_content();?>

    

    </div> 
    
   </section>
</main>
    
    
<?php }

get_footer();
?>

