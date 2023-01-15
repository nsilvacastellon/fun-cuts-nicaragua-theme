<?php 

get_header();

while(have_posts()) {

    the_post(); ?>

<main>

    <section class="page-template">

    <div class="container">

        <h1> Buscar</h1>
        
        <form class="search-form" method="get" action="<?php echo esc_url(site_url('/'));?>">

            
            <label for="s">Realiza tu busqueda:</label>
            
            
            <input id="s" type="search" name="s" placeholder="Buscar en el sitio" required>
            
            <input class="cta" type="submit" value="Buscar">
            


        </form>

    

    </div> <!-- .container ends here -->
    
   </section>
</main>
    
    
<?php }

get_footer();
?>

