<?php get_header(); ?>
<main>
<h1><?php echo $title; ?></h1>

 	<h1 class="mt-5 mb-3">Catégorie selective</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <div class="container bg-light shadow-lg mt-5">
			<article class="row justify-content-center align-items-center post">

				<h2><span>&#x1F514;</span><?= the_title(); ?></h2>
				<span class="change2 d-inline-block">Dans la catégorie <?php the_category(); ?></span>
				
				
				<div class="col-lg-4 col-12 text-center">
					<div class="bg-light shadow-lg">
						<?= the_excerpt(); ?>
					</div>
				</div>

				<div class="col-lg-4 col-12">
					<?= the_post_thumbnail(); ?>
				</div>

				<div class="col-lg-12 col-12 mt-5 mb-5">
					<p>
						<a href="<?= the_permalink(); ?>" class="post__link">	&#x1F4F0; Lire la suite</a>
					</p>
				</div>
			</article>
		</div>
        <?php 
    if ( is_category() ) {
        $title = "Catégorie : " . single_tag_title( '', false );
    }
    elseif ( is_tag() ) {
        $title = "Étiquette : " . single_tag_title( '', false );
    }
    elseif ( is_search() ) {
        $title = "Vous avez recherché : " . get_search_query();
    }
    else {
        $title = 'Le Blog';
    }
?>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>