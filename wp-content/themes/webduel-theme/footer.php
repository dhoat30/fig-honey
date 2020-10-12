<div class="footer row-container">
    
        <div class="image-column">
            <a href=" <?php echo get_site_url(); ?>"><img src="<?php echo get_theme_file_uri('img/logo.png') ?>" alt="Logo"></a>
        </div>  

        <div class="footer-menu">
            <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'fig_footer_menu', 
                            'container_class' => "footer-menu"
                            )); 
                    ?>
        </div>

        <div class="contact">
           
            <div>
                <a href="tel:022 657 09 07"><img src="<?php echo get_theme_file_uri('icons/material-call.png') ?>" alt="Call Icon">022 657 09 07</a>
                <a href="mailto:<?php echo get_bloginfo('admin_email');?>"><img src="<?php echo get_theme_file_uri('icons/zocial-email.png') ?>" alt="Call Icon"><?php ?>info@figandhoneygrazing.co.nz</a>
            </div>

            <div>
                <h5 class="ft-paragraph">Follow Us</h5>
                <a href="https://www.facebook.com/figandhoneygrazing"><img src="<?php echo get_theme_file_uri('icons/awesome-facebook-f.png') ?>" alt="Facebook"></a>
                <a href="http://www.instagram.com/_figandhoneygrazing/"><img src="<?php echo get_theme_file_uri('icons/feather-instagram.png') ?>" alt="Instagram"></a>
            </div>
        </div>
    
    
</div>
<div class="copyright">
    <div>
    Copyright © Fig & Honey Grazing 2020 |
    <a href="https://webduel.co.nz" rel="nofollow">Built By Web<span>DUEL</span></a>
    </div>
</div>



</div>
<?php
wp_footer();
?>
</body>
</html>
<?php

?>