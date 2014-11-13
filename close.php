<?php
/*
Template Name:空白
*/
?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <div class="entry-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
          </div><!-- .entry-content -->

          <footer class="entry-meta">
          </footer><!-- .entry-meta -->
        </article><!-- #post -->

      <?php endwhile; ?>

    </div><!-- #content -->
  </div><!-- #primary -->
<?php
?>