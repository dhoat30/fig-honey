<?php
get_header(); 
?>
            <section class="row-container blog-cards row-margin">
            <div class="column res-width ">
            <h1 class="ft-pg-title center-align">Blogs</h1>
            <div class="underline underline-center"></div>

            
      
            
        </div>

    <?php 
        while(have_posts()){ 
            the_post();
           
            ?>
                    <div class="column res-width card">
                    <a href="<?php the_permalink();?>" class="ft-column-subheading">
                        <?php  the_post_thumbnail( 'medium');?>
                        <?php the_title();?></a>

                        
                    </div>

                    
                    
                
            <?php
        }
        ?>
        </section>



    


<?php
get_footer(); 
?>