<?php 

get_header();

while(have_posts()) {

    the_post(); ?>

<main>

    <section class="page-template">

    <div class="container">

        <h1> <?php the_title(); ?></h1>
        
        <form method="get" action="<?php echo esc_url(site_url('/'));?>">

            <input type="search" name="s" placeholder="Buscar en el sitio">
            <input type="submit" value="search">


        </form>

    

    </div> 
    
   </section>
</main>
    
    
<?php }

get_footer();
?>

