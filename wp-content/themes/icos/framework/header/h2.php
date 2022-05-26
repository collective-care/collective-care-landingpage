<div class="navbar navbar-full navbar-expand-lg is-transparent" id="mainnav">
    <div class="navbar-brand">
        <?php $logo = icos_get_option( 'logo' ); 
              $logo2 = icos_get_option( 'logo2' ) ? icos_get_option( 'logo2' ) : icos_get_option( 'logo' ); ?>
        <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img class="logo" src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo(); ?>">
            <img class="logo-2" src="<?php echo esc_url($logo2); ?>" alt="<?php bloginfo(); ?>">
        </a>
    </div>

    <?php if ( function_exists('icl_object_id') && !function_exists('PLL') && icos_get_option( 'slanguage' ) == 'alogo' ) { ?>
    <div class="slanguage switcher-top">
        <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
    </div>
    <?php } ?>

    <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon">
            <span class="ti ti-align-justify"></span>
        </span>
    </button>

    <div class="collapse navbar-collapse justify-content-between">
        <?php
            $primary = array(
                'theme_location'  => 'primary',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'navbar-nav menu-top',
                'menu_id'         => '',
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'depth'           => 0,
            );
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( $primary );
            }
        ?>
        <?php $btns = icos_get_option( 'btn_nav', array() ); $nbtns = icos_get_option( 'nbtn_nav', array() ); if($btns || $nbtns) { ?> 
        <ul class="navbar-nav navbar-btns">                            
            <?php foreach ( $btns as $btn ) { ?>
                <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="<?php echo esc_url($btn['link']); ?>"><?php echo esc_attr($btn['name']); ?></a></li>
            <?php } ?>
            <?php foreach ( $nbtns as $nbtn ) { ?>
                <li class="nav-item"><a <?php if($nbtn['nwin']) echo 'target="_blank"'; ?> class="nav-link btn btn-sm btn-outline menu-link" href="<?php echo esc_url($nbtn['nlink']); ?>"><?php echo esc_attr($nbtn['nname']); ?></a></li>
            <?php } ?>
        </ul>
        <?php } ?>
        <?php if ( function_exists('icl_object_id') && !function_exists('PLL') && icos_get_option( 'slanguage' ) == 'amenu' ) { ?>
        <div class="slanguage switcher-top has-flag">
            <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
        </div>
        <?php } ?>
    </div>
</div>