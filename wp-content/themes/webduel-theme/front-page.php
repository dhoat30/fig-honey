<?php
get_header(); 
?>

    <section class="row-container home-page">
        <div class="hero-section-styling" style='background-image: url("<?php echo get_theme_file_uri('img/home-page-hero.jpg'); ?>");'>

        </div>

    </section>

    <section class="row-container info-section row-margin">
        <div class="column res-width ">
            <h1 class="ft-pg-title center-align">Fig & Honey</h1>
            <div class="underline underline-center"></div>

            <p class="ft-paragraph center-align center-paragraph"> 
                <span>
                Welcome to Fig & Honey Grazing, thanks for stopping by. We believe that the best moments in life are often enjoyed with even better food. Our bespoke grazing tables are designed to impress your guests and leave them wanting more. 
                </span> 
                <span>
                Our aim is to curate beautifully rustic designs that are inspired by the mediterranean and its gorgeous cuisine. We are passionate about supporting local and NZ suppliers to source the freshest and most delicious products for your lavish graze. 
                </span>
                <span>
                We graze the Bay of Plenty and beyond. If you're not located in the BOP region, we would still love to be involved. 
                </span>
                <span>
                Graze your heart away, whether your event is a Wedding, Bridal Party, Baby Shower, Corporate Celebration, Birthday or Just Because, we have got you covered xo</p>
                </span>
        </div>

        <div class="btn-container">
            <a href="tel:0226570907" class="btn btn-blue"> <img src="<?php echo get_theme_file_uri('icons/white-phone.png') ?>" alt="phone icon"> CALL US</a>
            <a href="<?php echo get_site_url().'/contact'; ?>" class="btn btn-border-blue">GET A QUOTE </a>
        </div>
        
    </section>

    <section class="row-container usp-container">
        <div class="res-width">
            <div class="fresh">
                <img src="<?php echo get_theme_file_uri('icons/Group1.png'); ?>" alt="Fresh Products">
                <h2 class="ft-column-subheading">Local & Fresh Products</h2>
            </div>
            <div class="cuisine">
                <img src="<?php echo get_theme_file_uri('icons/Group2.png'); ?>" alt="Mediterranean Cuisine">
                <h2 class="ft-column-subheading">Mediterranean Cuisine</h2>
            </div>
            <div class="fresh">
                <img src="<?php echo get_theme_file_uri('icons/Group3.png'); ?>" alt="Bay Of Plenty & Beyond">
                <h2 class="ft-column-subheading">Bay Of Plenty & Beyond</h2>
            </div>

        </div>
    </section>

    <section class="row-container row-margin grazing-service">
        <div class="res-width-custom">
            <div class="content">
                <h3 class="ft-column-title">Grazing Services</h3>
                <div class="underline"></div>
                <p class="ft-paragraph left-paragraph">
                    <span>We cater to the Bay of Plenty and beyond. Fig & Honey Grazing come to your location to set up your lavish graze for you and your guests to enjoy. If you are using any of our styling stands we ask that these are returned clean within 72 hours of the event. </span>
                    <span>We also offer a range of Grazing Boxes, check out our gallery and enquire today. </span>
                </p>
            </div>

            <div class="img-container">
                <div style='background-image: url("<?php echo get_theme_file_uri('img/NewlightPhotography10.jpg');  ?>")'></div>
            </div>
        </div>

    </section>

    <section class="row-container row-margin gallery">
        <div>
            <h3 class="ft-column-title center-align">Gallery</h3>
            <div class="underline-center underline"></div>
            <?php if( function_exists('photo_gallery') ) { photo_gallery(1); } ?>
        </div>
            
    </section>

    <section class="row-container reviews">
        <div class="review-container res-width">
            <h3 class="ft-column-title center-align">Reviews</h3>
            <div class="underline-center underline"></div>
            <section class="price-cards">
            <div class="card">
                <img src="<?php echo get_theme_file_uri('icons/quote.png'); ?>" alt="Quote">
                <p class="center-align ft-paragraph">“Thanks so much for your beautiful grazing table and the birthday cake! Both were beautifully crafted and tasted even better”
 </p>
            </div>
            <div class="card">
                <img src="<?php echo get_theme_file_uri('icons/quote.png'); ?>" alt="Quote">
                <p class="center-align ft-paragraph">“Fathers Day gift box was a great, my partners dad loved it” 
</p>
            </div>
            <div class="card">
                 <img src="<?php echo get_theme_file_uri('icons/quote.png'); ?>" alt="Quote">
                <p class="center-align ft-paragraph">“Everything was spectacular, my sister is a bit of a connoisseur and she was blown away with everything. Lots of comments about how delicious the beetroot hummus was as well. Thank you again, you made my birthday super special” </p>
            </div>
        </section>
        </div>
    </section>

    <section class="row-container contact-form row-margin">
        <div class="res-width">
            <h3 class="ft-column-title center-align">Contact Us</h3>
            <div class="underline underline-center"></div>
            <div class="form">
                <?php echo do_shortcode('[ninja_form id=2]'); ?>
            </div>
        </div>
    </section>

<?php
get_footer(); 
?>