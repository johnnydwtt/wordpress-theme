<?php get_header(); ?>
<main>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>
	<img class="banner" src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="banner present">
</main>
<?php get_footer(); ?>