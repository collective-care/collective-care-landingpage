<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package icos
 */

wp_head(); 

$title  = icos_get_option( 'title_404' );
$stitle = icos_get_option( 'stitle_404' );
$des    = icos_get_option( 'des_404' );
$btn    = icos_get_option( 'btn_404' );

?>

<?php 
    $bg   = icos_get_option( '404_bg' );
    $img_src  = $bg ? $bg : '';

    $imgl  = icos_get_option( '404_left' ); 
    $left  = $imgl ? $imgl : '';

    $imgr  = icos_get_option( '404_right' ); 
    $right = $imgr ? $imgr : '';
?>

<body <?php body_class(); ?>>
  <div class="page-error d-flex align-items-center" style="background-image: url(<?php echo esc_url($img_src); ?>);">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                  <div class="error-content">
                    <?php if($left) { ?>
                     <div class="error-graphics-one">
                         <img src="<?php echo esc_url($left); ?>" alt="graphic">
                     </div>
                     <?php }if($right) { ?>
                     <div class="error-graphics-two">
                         <img src="<?php echo esc_url($right); ?>" alt="graphic">
                     </div>
                     <?php } ?>
                      <span class="error-text-large"><?php echo wp_specialchars_decode($title); ?></span>
                      <h5><?php echo wp_specialchars_decode($stitle); ?></h5>
                      <p><?php echo wp_specialchars_decode($des); ?></p>
                      <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn"><?php echo esc_html($btn); ?></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="footer-small">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <?php $socials = icos_get_option( 'socials', array() ); if( $socials ) { ?> 
                    <ul class="social">                            
                        <?php foreach ( $socials as $social ) { ?>
                            <li><a<?php if(icos_get_option( 'target' )) echo ' target="_blank"'; ?> href="<?php echo esc_url($social['link']); ?>"><em class="fa <?php echo esc_attr($social['icon']); ?>"></em></a></li>
                        <?php } ?>
                    </ul>
                  <?php }if( icos_get_option( 'copy_right' ) ) { ?>
                    <div class="copyright-text">
                        <?php echo wp_specialchars_decode(icos_get_option( 'copy_right' )); ?>
                    </div>
                  <?php } ?>
              </div>
          </div>
      </div>
  </div>
</body>
<?php wp_footer(); ?>