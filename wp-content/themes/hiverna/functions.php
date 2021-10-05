<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function hiverna_remove_menu_pages() {
	remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'hiverna_remove_menu_pages' );

function hiverna_register_assets() {
    
    // Déclarer jQuery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery', 
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        false, 
        '3.3.1', 
        true 
    );

        // Déclarer Bootstrap
        wp_enqueue_style( 'bootstrap' ); // On annule l'inscription du jQuery de WP
        wp_enqueue_style( // On déclare une version plus moderne
            'bootstrap', 
            'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"', 
            false, 
            '5.1.1', 
            true 
        );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'hiverna', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'hiverna',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'hiverna', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );

}
add_action( 'wp_enqueue_scripts', 'hiverna_register_assets' );