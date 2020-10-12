<?php
get_header(); 
?>

    <?php 
        while(have_posts()){ 
            the_post();
        }
        ?>

       

    <section class="row-container home-page">
        <div class="hero-section-styling" style='background-image: url("<?php echo get_the_post_thumbnail_url(); ?>");'>

        </div>

    </section>

    <section class="row-container info-section row-margin">
        <div class="column res-width ">
            <h1 class="ft-pg-title center-align"><?php the_title();?></h1>
            <div class="underline underline-center"></div>

            
               <div class="ft-paragraph center-align"><?php the_content();?></div> 
      
            
        </div>

        
        
    </section>

    

    <?php
    ?>

<?php
get_footer(); 
?>