<?php get_header(); ?>

  <section id="content">
    <div class="container">
      <div class="row">
        <?php if ( have_posts() ) {
          while ( have_posts() ) : the_post(); ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
          <?php endwhile;
        } else { ?>
            <h1 class="entry-title abstract"><?php _e( 'Not found', 'voidx' ); ?></h1>
            <div class="entry-content">
                <p><?php _e( 'Sorry, but your request could not be completed.', 'voidx' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
