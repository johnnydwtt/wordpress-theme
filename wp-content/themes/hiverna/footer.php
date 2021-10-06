
        <footer class="container-fluid bg site__footer">
                <div class="row justify-content-center align-items-center">
                    <div class="change2 col">
                        <?php wp_nav_menu( 
                                array( 
                                    'theme_location' => 'footer', 
                                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                                    'menu_class' => 'site__header__menu', // ma classe personnalisée 
                                ) 
                        ); ?>
                    </div>
                    <div class="col">
                        <img class="rounded logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                    </div>
                </div>
        </footer>


  <?php wp_footer(); ?>
</body>
</html>