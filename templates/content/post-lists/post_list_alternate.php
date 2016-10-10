<?php
/**
 * The template for displaying the alternate article wrapper
 *
 * In WP loop
 *
 * @package Customizr
 */
?>
<?php if ( czr_fn_get( 'is_loop_start' ) ) : ?>
<div class="row grid-container__alternate <?php czr_fn_echo('element_class') ?>"  <?php czr_fn_echo('element_attributes') ?>>
<?php
  do_action( '__alternate_loop_start', czr_fn_get('id') );
endif ?>
  <article <?php czr_fn_echo( 'article_selectors' ) ?> >
    <div class="sections-wrapper <?php czr_fn_echo( 'sections_wrapper_class' ) ?>">
    <?php

      if ( 'content' == czr_fn_get( 'place_1' ) ) {
        if ( czr_fn_has('content') ) {
          czr_fn_render_template('content/post-lists/post_list_content', 'post_list_content',
            array(
              'element_class'           => czr_fn_get( 'content_col' ),
              'has_header_format_icon'  => czr_fn_get( 'has_header_format_icon' )
            )
          );
        }
        if ( czr_fn_has('media') ) {
          czr_fn_render_template('content/post-lists/post_list_media', 'post_list_media',
            array(
             'element_class'            => czr_fn_get( 'media_col' ),
             'inner_wrapper_class'      => czr_fn_get( 'media_inner_wrapper_class' ),
             'is_full_image'            => czr_fn_get( 'is_full_image' ),
             'has_format_icon_media'    => czr_fn_get( 'has_format_icon_media' ),
             'has_post_media'           => czr_fn_get( 'has_post_media' )
            )
          );
        }

      } else {
        if ( czr_fn_has('media') ) {
          czr_fn_render_template('content/post-lists/post_list_media', 'post_list_media',
            array(
             'element_class'            => czr_fn_get( 'media_col' ),
             'inner_wrapper_class'      => czr_fn_get( 'media_inner_wrapper_class' ),
             'is_full_image'            => czr_fn_get( 'is_full_image' ),
             'has_format_icon_media'    => czr_fn_get( 'has_format_icon_media' ),
             'has_post_media'           => czr_fn_get( 'has_post_media' )
            )
          );
        }
        if ( czr_fn_has('content') ) {
          czr_fn_render_template('content/post-lists/post_list_content', 'post_list_content',
            array(
              'element_class'           => czr_fn_get( 'content_col' ),
              'has_header_format_icon'  => czr_fn_get( 'has_header_format_icon' )
            )
          );
        }
      }
    ?>
    </div>
  </article>
<?php if ( czr_fn_get( 'is_loop_end' ) ) :
  do_action( '__alternate_loop_end', czr_fn_get('id') );
?>
</div>
<?php endif ?>