<?php 
    get_header(); 
    


        while(have_posts()){ 
            the_post(); 

            ?>

            <section class="index-page row-margin">
                <h1 class="page-title ft-pg-title center-align">
                <?php the_title();?>

                </h1> 
                <div class="underline underline-center"></div>
                <?php             the_content();  
?>
            </section>
            <?php
        }
    

get_footer(); ?>
