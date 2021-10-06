<?php get_header(); ?>
<main>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <div class="container mt-5">

      <article class="post row flex-column justify-content-center align-items-center">

        <div class="col-lg-12">
          <?php the_post_thumbnail(); ?>
        <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-lg-2">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
        </div>
        <div class="col-lg-10 d-flex mb-2 justify-content-center text-center post__meta">
          
          <p>
            Publié le <?php the_date(); ?>
            par <?php the_author(); ?>
            Dans la catégorie <?php the_category(); ?>
          </p>
        </div>

        <div class="col-lg-8 text-center bg-light shadow mb-5 mt-3 post__content">
          <?php the_content(); ?>
        </div>

      </article>

    </div>

  <?php endwhile; endif; ?>

  <div class="mb-5">
  <?php get_template_part( 'newsletter' ); ?>.
  </div>
  </main>
<?php get_footer(); ?>