<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

    </div><!-- #main -->
    <footer id="colophon" class="site-footer" role="contentinfo">
      <?php get_sidebar( 'main' ); ?>

      <div class="site-info" style="text-align: center;">
        <?php do_action( 'twentythirteen_credits' ); ?>
        <a href="http://www.miitbeian.gov.cn/" title="京ICP备14044446号" target="_blank">京ICP备14044446号</a>
      </div><!-- .site-info -->
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>
</body>
</html>