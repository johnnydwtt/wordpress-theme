<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'site' ); ?>>

  <header class="site__header">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-12 bg">
          <a href="<?php echo home_url( '/' ); ?>">
            <img class="rounded logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
          </a>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center change bg-light shadow">
          <?php wp_nav_menu( 
              array( 
                  'theme_location' => 'main', 
                  'container' => 'ul', // afin d'éviter d'avoir une div autour 
                  'menu_class' => 'site__header__menu', // ma classe personnalisée 
              ) 
          ); ?>
        </div>
        <div class="col-6 bg-light shadow">
          <form action="<?php echo home_url( '/' ); ?>" method="get">
              <label for="search">Rechercher :</label>
              <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
              <span class="fs-4"> &#x1F50E;</span>
          </form>
        </div>
      </div>
      <div class="row size">
        <div>
          <a class="text-end" href="/index.php">&#x1F3E0;</a>
        </div>
          
      </div>
    </div>
  </header>