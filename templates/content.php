<?php
/**
 * The template for displaying the main content
 *
 * @package Customizr
 * @since Customizr 3.5.0
 */
?>
<?php

  /* SLIDERS : standard or slider of posts */
  if ( tc_has('main_slider') ) {
    tc_render_template('modules/slider/slider', 'main_slider');
  }
  if( tc_has( 'main_posts_slider' ) ) {
    tc_render_template('modules/slider/slider', 'main_posts_slider');
  }

?>
<?php do_action('__before_main_wrapper'); ?>
    <?php /* thumbnail in single post */
      if ( tc_has('post_thumbnail') && 'before_title_full' == tc_get( 'thumbnail_position' ) ) { tc_render_template('content/singles/thumbnail_single', 'post_thumbnail'); }
    ?>
    <div id="main-wrapper" class="container" <?php tc_echo('element_attributes') ?>>

      <?php if ( tc_has('breadcrumb') ) { tc_render_template('modules/breadcrumb'); } ?>

      <?php do_action('__before_main_container'); ?>
      <?php

      /* FEATURED PAGES */
      if ( tc_has( 'featured_pages' ) )
        tc_render_template('modules/featured-pages/featured_pages', 'featured_pages');

      ?>
      <div class="container" role="main">
        <div class="<?php tc_echo( 'column_content_class' ) ?>">
          <?php
            if ( tc_has('left_sidebar') ) { tc_render_template('content/sidebars/left_sidebar', 'left_sidebar'); }
          ?>

              <?php do_action('__before_content'); ?>

              <div id="content" class="<?php tc_echo( 'article_wrapper_class' ) ?>">
                <?php
                  /* 404 and search with no results */
                  if ( TC_utils_query::$instance -> tc_is_no_results() || is_404() ) {
                    if ( tc_has('404') ) { tc_render_template('content/singles/404', '404'); }
                    elseif ( tc_has('no_results') ) { tc_render_template('content/singles/no_results', 'no_results'); }
                  }

                  else {
                    if ( tc_has('posts_list_headings') ) { tc_render_template('content/post-lists/post_list_headings', 'posts_list_headings'); }

                    if ( tc_has('main_loop') ) { tc_render_template('content/loop', 'main_loop'); }

                    if ( tc_has('comments') ) { tc_render_template('content/comments/comments'); }

                    if ( is_singular() && tc_has('post_navigation_singular') )
                      tc_render_template('content/singles/post_navigation_singular', 'post_navigation_singular');
                    elseif ( /*is_archive() && DISPLAYED ALSO IN THE BLOG*/ tc_has('post_navigation_posts') )
                      tc_render_template('content/post-lists/post_navigation_posts', 'post_navigation_posts');
                  //do_action( '__content__')
                  }
                ?>
              </div>

              <?php do_action('__after_content'); ?>

            <?php
            if ( tc_has('right_sidebar') ) { tc_render_template('content/sidebars/right_sidebar', 'right_sidebar'); }
            //tc_render_template('content/main_container');
            //do_action( '__main_container__')
          ?>
        </div>
      </div><!-- .container -->

      <?php do_action('__after_main_container'); ?>
      <?php if ( tc_has('footer_push') ) { tc_render_template('footer/footer_push', 'footer_push'); } ?>

    </div><!-- #main-wrapper -->

    <?php do_action('__after_main_wrapper'); ?>
