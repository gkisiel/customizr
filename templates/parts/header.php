<?php
/**
 * The template for displaying the site header
 *
 * @package Customizr
 * @since Customizr 3.5.0
 */
?>
<?php do_action( '__before_header' ) ?>
<header class="tpnav-header__header tc-header <?php czr_fn_echo('element_class') ?>" role="banner" <?php czr_fn_echo('element_attributes') ?>>
          <?php
            //czr_fn_render_template always check if the model is registered or possible.
            czr_fn_render_template( 'header/topbar_wrapper',
              array(
                'model_args' => array(
                  'element_class' => czr_fn_get_property( 'topbar_nbwrapper_class' ),//for ex : 'hidden-md-down desktop-sticky'
                  'element_inner_class' => czr_fn_get_property( 'topbar_nbwrapper_container_class' ),//for ex: 'container-fluid'
                )
              )
            );
          ?>
          <?php
              czr_fn_render_template( 'header/navbar_wrapper',//<=header/navbar_wrapper
                array(
                  'model_id' => 'navbar_wrapper',
                  'model_args' => array(
                    'element_class' => czr_fn_get_property( 'primary_nbwrapper_class' ),//for ex : 'primary-navbar__wrapper row align-items-center flex-lg-row hidden-md-down'
                    'element_inner_class' => czr_fn_get_property( 'primary_nbwrapper_container_class' )//for ex: 'container-fluid'
                  )
                )
              );
          ?>
          <?php
            czr_fn_render_template( 'header/mobile_navbar_wrapper',
              array(
                'model_args' => array(
                  'element_class' => czr_fn_get_property( 'mobile_nbwrapper_class' ),
                  'element_inner_class' => czr_fn_get_property( 'mobile_nbwrapper_container_class' )//for ex: 'container-fluid'
                )
              )
            )
          ?>
</header>
<?php do_action( '__after_header' ) ?>
