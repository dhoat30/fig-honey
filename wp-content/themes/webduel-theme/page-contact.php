<?php
get_header(); 
?>

    <section class="row-container home-page">
        <div class="hero-section-styling" style='background-image: url("<?php echo get_theme_file_uri('img/home-page-hero.jpg'); ?>");'>

        </div>

    </section>

    <section class="row-container info-section row-margin">
        <div class="column res-width ">
            <h1 class="ft-pg-title center-align">Contact Us</h1>
            <div class="underline underline-center"></div>

            <p class="ft-paragraph center-align center-paragraph"> 
                <span>            Do you have an upcoming event? We would love to hear from you.
                </span>
                <span>Fig & Honey Grazing specialises in Grazing Tables and Platters, perfect for any occasion. Whether you're having a small sentimental celebration or something more extravagant, we have just the thing for you! <br>
                </span>
                <span>Please complete the form below and we will get back to you as soon as possible. 
</span>
        </div>

        
        
    </section>

    <section class="row-container contact-form row-margin">
        <div class="res-width">
            <div class="form">
                <?php echo do_shortcode('[ninja_form id=2]'); ?>
            </div>
        </div>
    </section>

<?php
get_footer(); 
?>