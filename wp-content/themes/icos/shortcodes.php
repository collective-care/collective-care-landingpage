<?php 


// Button
add_shortcode('button', 'button_func');
function button_func($atts, $content = null){
    extract(shortcode_atts(array(
        'btn_text'  =>  '',
        'btn_link'  =>  '',
        'style'     =>  '',
        'size'      =>  '',
        'color'     =>  '',
        'hcolor'    =>  '',
        'bg_color'  =>  '',
        'hbg_color' =>  '',
        'align'     =>  'inline',
        'el_class'  =>  '',
    ), $atts));
        $rand      = '';
        if($hcolor || $hbg_color){
        $rand      = 'btn'.rand(10,1000);
        }
        $class     = 'btn '.esc_attr($size).' '. esc_attr($style).' '. esc_attr($rand).' '.esc_attr($el_class);
        $color1    = (!empty($color) ? 'color:'.$color.';' : '');
        $bg_color1 = (!empty($bg_color) ? 'background:'.$bg_color.';' : '');
    ob_start(); ?>

    <div class="btn-element <?php echo esc_attr($align); ?>">
        <a class="<?php echo esc_attr($class); ?>" style="<?php echo esc_attr($bg_color1);echo esc_attr($color1); ?>" href="<?php echo esc_url($btn_link); ?>"><?php echo htmlspecialchars_decode($btn_text); ?></a>
        <?php if($hcolor || $hbg_color){ ?>
        <style type="text/css">
        <?php if($hbg_color) { ?>
         .<?php echo esc_attr($rand); ?>:before{ background: none; }
         .<?php echo esc_attr($rand); ?>:hover{ background: <?php echo esc_attr($hbg_color); ?>!important; }
        <?php }if($hcolor) { ?>
         .<?php echo esc_attr($rand); ?>:hover{ color: <?php echo esc_attr($hcolor); ?>!important; }
        <?php } ?>
        </style>
        <?php } ?>
    </div>

<?php
    return ob_get_clean();
}

// Section Heading
add_shortcode('hsection', 'hsection_func');
function hsection_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'     =>  '',
        'sub'       =>  '',
        'line'      =>  '',
        'style'     =>  's1',
    ), $atts));
    ob_start(); ?>

    <?php if($style == 's6') { ?>
        <div class="section-head-s6">
            <h6 class="heading-sm-s2 animated" data-animate="fadeInUp" data-delay=".1"><?php echo wp_specialchars_decode($sub); ?></h6>
            <h2 class="section-title-s6 animated" data-animate="fadeInUp" data-delay=".2"><?php echo wp_specialchars_decode($title); ?></h2>
        </div>
    <?php }elseif($style == 's5') { ?>
        <div class="section-head-s5 text-center animated" data-animate="fadeInUp" data-delay=".1">
            <h2 class="section-title"><?php echo wp_specialchars_decode($title); ?></h2>
        </div>
    <?php }elseif($style == 's3') { ?>
        <div class="section-head-s3 text-center animated" data-animate="fadeInUp" data-delay=".1">
            <h2 class="section-title"><?php echo wp_specialchars_decode($title); ?></h2>
        </div>
    <?php }elseif($style == 's2') { ?>
    <div class="section-head-s2 text-center">
        <h6 class="heading-xs animated" data-animate="fadeInUp" data-delay=".0"><?php echo wp_specialchars_decode($sub); ?></h6>
        <h2 class="section-title animated" data-animate="fadeInUp" data-delay=".1"><?php echo wp_specialchars_decode($title); ?></h2>
    </div>
    <?php }else{ ?>
    <div class="section-head text-center">
        <?php if($line) { ?>
        <div class="heading-animation">
            <span class="line-1"></span><span class="line-2"></span>
            <span class="line-3"></span><span class="line-4"></span>
            <span class="line-5"></span><span class="line-6"></span>
            <span class="line-7"></span><span class="line-8"></span>
        </div>
        <?php } ?>
        <h2 class="section-title animated" data-animate="fadeInUp" data-delay=".1">
            <?php echo wp_specialchars_decode($title); ?>
            <?php if($sub) { ?><span><?php echo wp_specialchars_decode($sub); ?></span><?php } ?>
        </h2>
    </div>
    <?php } ?>

<?php
    return ob_get_clean();
}


// Socials
add_shortcode('isocials', 'isocials_func');
function isocials_func($atts, $content = null){
    extract(shortcode_atts(array(
        'social'      =>  '',
        'iclass'      =>  '',
    ), $atts));
    $socials = (array) vc_param_group_parse_atts( $social );
    ob_start(); ?>

    <ul class="social <?php echo esc_attr($iclass) ?>">
        <?php foreach ( $socials as $soc ) : if($soc) : 
            $soc['link'] = isset($soc['link']) ? $soc['link'] : '';
            $soc['icon'] = isset($soc['icon']) ? $soc['icon'] : '';
        ?>
        <li><a href="<?php echo esc_url($soc['link']); ?>"><em class="<?php echo esc_attr($soc['icon']); ?>"></em></a></li>
        <?php endif; endforeach; ?>
    </ul>

<?php
    return ob_get_clean();
}

// Video Popup
add_shortcode('vpopup', 'vpopup_func');
function vpopup_func($atts, $content = null){
    extract(shortcode_atts(array(
        'photo'     =>  '',
        'link'      =>  '',
        'text1'     =>  '',
        'text2'     =>  '',
        'style'     =>  's1',
    ), $atts));
    $img     = wp_get_attachment_image_src($photo,'full');
    $img     = $img[0];
    ob_start(); ?>

    <?php if($style == 's2') { ?>
    <a href="<?php echo esc_url($link); ?>" class="play-btn-alt video-play">
        <em class="fa fa-play"></em>
        <?php if($text1) { ?><span><?php echo esc_html($text1); ?></span><?php } ?>
    </a>
    <?php }elseif($style == 's3') { ?>
    <div class="video-box-s2">
        <img src="<?php echo esc_url($img); ?>" alt="cover">
        <a href="<?php echo esc_url($link); ?>" class="play-btn-s2 video-play">
            <em class="play-icon"><span></span></em>
        </a>
    </div>
    <?php }else{ ?>
    <a href="<?php echo esc_url($link); ?>" class="play-btn video-play">
        <em class="play"><span></span></em>
        <?php if($text1) { ?><span><?php echo esc_html($text1); ?></span><?php } ?>
        <?php if($text2) { ?><span><?php echo esc_html($text2); ?></span><?php } ?>
    </a>
    <?php } ?>

<?php
    return ob_get_clean();
}


// Features Box
add_shortcode('iconbox', 'iconbox_func');
function iconbox_func($atts, $content = null){
    extract(shortcode_atts(array(
        'photo'      =>  '',
        'title'      =>  '',
        'sub'        =>  '',
        'link'       =>  '',
        'conect'     =>  '',
        'iclass'     =>  '',
        'style'      =>  '',
    ), $atts));
    $img     = wp_get_attachment_image_src($photo,'full');
    $img     = $img[0];
    ob_start(); ?>


    <?php if( $style == 's6' ){ ?>
    <div class="service-item">
        <div class="service-icon mx-auto mx-lg-0">
            <img src="<?php echo esc_url($img) ?>" alt="icon">
        </div>
        <h5 class="service-title"><?php echo wp_specialchars_decode($title); ?></h5>
        <p><?php echo wp_specialchars_decode($content); ?></p>
    </div>
    <?php }elseif( $style == 's5' ){ ?>
    <div class="features-box-s4 <?php echo esc_attr($iclass); ?>">
        <div class="features-icon-s4">
            <img src="<?php echo esc_url($img) ?>" alt="icon">
        </div>
        <h5 class="features-title-s4"><?php echo wp_specialchars_decode($title); ?></h5>
        <span class="features-subtitle-s4"><?php echo wp_specialchars_decode($sub); ?></span>
        <p><?php echo wp_specialchars_decode($content); ?></p>
        <?php if($link){ ?><a href="<?php echo esc_url($link); ?>" class="features-action"><em class="ti ti-arrow-right"></em></a><?php } ?>
   </div>
    <?php }elseif( $style == 's4' ){ ?>
    <div class="features-box-s3 <?php echo esc_attr($iclass); ?>">
        <div class="features-icon-s3">
            <img src="<?php echo esc_url($img) ?>" alt="icon">
        </div>
        <h5 class="features-title-s3"><?php echo wp_specialchars_decode($title); ?></h5>
        <span class="features-subtitle-s3"><?php echo wp_specialchars_decode($sub); ?></span>
        <p><?php echo wp_specialchars_decode($content); ?></p>
        <?php if($link){ ?><a href="<?php echo esc_url($link); ?>" class="features-action"><em class="ti ti-arrow-right"></em></a><?php } ?>
   </div>
    <?php }elseif( $style == 's3' ){ ?>
    <div class="features-item-s2 d-flex <?php echo esc_attr($iclass); if($conect) echo ' line'; ?>">
        <div class="features-icon-s2">
            <img src="<?php echo esc_url($img) ?>" alt="icon">
        </div>
        <div class="features-texts-s2">
            <h5 class="features-title-s2"><?php echo wp_specialchars_decode($title); ?></h5>
            <p><?php echo wp_specialchars_decode($content); ?></p>
        </div>
    </div>
    <?php }else{ ?>
    <div class="<?php echo esc_attr($iclass); if( $style == 's2' ) echo ' reason-item'; else echo ' features-box';?> text-center">
        <?php if($link) echo '<a href="'.esc_url($link).'">'; ?>
        <img src="<?php echo esc_url($img) ?>" alt="features">
        <?php if($link) echo '</a>'; ?>
        <h5><?php echo wp_specialchars_decode($title); ?></h5>
        <p><?php echo wp_specialchars_decode($content); ?></p>
    </div>
    <?php } ?>

<?php
    return ob_get_clean();
}

// Icon Box
add_shortcode('iconbox2', 'iconbox2_func');
function iconbox2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  '',
        'title'      =>  '',
        'style'      =>  'left',
    ), $atts));
    ob_start(); ?>


    <div class="features-item <?php if( $style == 'right' ) echo 'left'; ?>">
        <em class="ti <?php echo esc_attr($icon); ?>"></em>
        <h5><?php echo wp_specialchars_decode($title); ?></h5>
        <p><?php echo wp_specialchars_decode($content); ?></p>
    </div>

<?php
    return ob_get_clean();
}

// Rating Box
add_shortcode('ratebox', 'ratebox_func');
function ratebox_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'      =>  '',
        'rate'       =>  '',
        'max'        =>  '',
        'iclass'     =>  '',
    ), $atts));
    ob_start(); ?>

    <div class="rating-item <?php echo esc_attr($iclass); ?>">
        <div class="rating-info">
            <?php echo esc_html($rate); ?>
            <span><?php echo esc_html($max); ?></span>
        </div>
        <div class="rating-title"><?php echo wp_specialchars_decode($title); ?></div>
    </div>

<?php
    return ob_get_clean();
}

// Document Box
add_shortcode('docbox', 'docbox_func');
function docbox_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'      =>  '',
        'lang'       =>  '',
        'photo'      =>  '',
        'link'       =>  '',
        'style'      =>  '',
        'iclass'     =>  '',
    ), $atts));
    $img     = wp_get_attachment_image_src($photo,'full');
    $img     = $img[0];
    $langs   = (array) vc_param_group_parse_atts( $lang );
    ob_start(); ?>

    <?php if( $style == 's2' ) { ?>
    <div class="document-item-s2 <?php echo esc_attr($iclass); ?>">
        <div class="document-img-s2">
            <img src="<?php echo esc_url($img) ?>" alt="doc">
        </div>
        <div class="document-text">
            <span class="document-info"><?php echo wp_specialchars_decode($title); ?></span>
            <div class="document-dropdown">
                <a target="_blank" href="<?php echo esc_url($link); ?>" dropdown class="document-link"><em class="ti ti-import"></em></a>
            </div>
        </div>
    </div>
    <?php }else{ ?>
    <div class="document-item <?php echo esc_attr($iclass); if(!$photo) echo 'none-img'; ?>">
        <?php if($photo) { ?>
        <div class="document-img">
            <img src="<?php echo esc_url($img) ?>" alt="doc">
        </div>
        <?php } ?>
       <h6 class="document-title"><?php echo wp_specialchars_decode($title); ?></h6>
       <ul class="document-links">
            <?php foreach ( $langs as $lan ) : if($lan) : 
                $lan['name']   = isset($lan['name']) ? $lan['name'] : '';
                $lan['link']   = isset($lan['link']) ? $lan['link'] : '';            
            ?>
            <li><a target="_blank" href="<?php echo esc_url($lan['link']); ?>"><?php echo esc_html($lan['name']); ?></a></li>
            <?php endif; endforeach; ?>
       </ul>
   </div>
   <?php } ?>

<?php
    return ob_get_clean();
}

// Problem Box
add_shortcode('problembox', 'problembox_func');
function problembox_func($atts, $content = null){
    extract(shortcode_atts(array(
        'photo'      =>  '',
        'title'      =>  '',
    ), $atts));
    $img     = wp_get_attachment_image_src($photo,'full');
    $img     = $img[0];
    ob_start(); ?>


    <div class="problem-item d-sm-flex d-block">
        <div class="problem-icon">
            <img src="<?php echo esc_url($img) ?>" alt="icon">
        </div>
        <div class="problem-info">
            <h5 class="problem-title"><?php echo wp_specialchars_decode($title); ?></h5>
            <?php echo wp_specialchars_decode($content); ?>
        </div>
    </div>

<?php
    return ob_get_clean();
}

// Problem Slider
add_shortcode('problemslide', 'problemslide_func');
function problemslide_func($atts, $content = null){
    extract(shortcode_atts(array(
        'problem'      =>  '',
        'iclass'       =>  '',
    ), $atts));
    $problems  = (array) vc_param_group_parse_atts( $problem );
    ob_start(); ?>


    <div class="prblmsltn-list <?php echo esc_attr($iclass); ?>">
        <?php foreach ( $problems as $prb ) : if($prb) : 
            $prb['ptext']  = isset($prb['ptext']) ? $prb['ptext'] : '';
            $prb['ptitle'] = isset($prb['ptitle']) ? $prb['ptitle'] : '';
            $prb['pdes']   = isset($prb['pdes']) ? $prb['pdes'] : ''; 
            $prb['stext']  = isset($prb['stext']) ? $prb['stext'] : '';
            $prb['stitle'] = isset($prb['stitle']) ? $prb['stitle'] : '';
            $prb['sdes']   = isset($prb['sdes']) ? $prb['sdes'] : '';            
        ?>
        <div class="prblmsltn-item">
            <div class="row">
                <div class="col-md-6 col-sm-12 animate-left delay-5ms">
                    <div class="prblm-item">
                        <h2 class="prblm-title"><?php echo wp_specialchars_decode($prb['ptext']); ?></h2>
                        <h5 class="prblm-subtitle"><?php echo wp_specialchars_decode($prb['ptitle']); ?></h5>
                        <div class="prblm-points">
                            <?php echo wp_specialchars_decode($prb['pdes']); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 animate-right delay-7ms">
                    <div class="sltn-item">
                        <h2 class="sltn-title"><?php echo wp_specialchars_decode($prb['stext']); ?></h2>
                        <h5 class="sltn-subtitle"><?php echo wp_specialchars_decode($prb['stitle']); ?></h5>
                        <div class="sltn-points">
                            <?php echo wp_specialchars_decode($prb['sdes']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; endforeach; ?>
    </div>

<?php
    return ob_get_clean();
}

// Sale Info
add_shortcode('isale', 'isale_func');
function isale_func($atts, $content = null){
    extract(shortcode_atts(array(
        'info'     =>  '',
        'cols'     =>  '',
    ), $atts));
    $infos = (array) vc_param_group_parse_atts( $info );
    ob_start(); ?>

    <div class="row">
        <?php foreach ( $infos as $inf ) : if($inf) : 
            $inf['title'] = isset($inf['title']) ? $inf['title'] : '';
            $inf['des']   = isset($inf['des']) ? $inf['des'] : '';            
        ?>
        <div class="col-sm-<?php if($cols) echo '6'; else echo '12'; ?>">
            <div class="event-single-info animated" data-animate="fadeInUp" data-delay="0">
                <h6><?php echo wp_specialchars_decode($inf['title']); ?></h6>
                <p><?php echo wp_specialchars_decode($inf['des']); ?></p>
            </div>
        </div>
        <?php endif; endforeach; ?>
    </div>

<?php
    return ob_get_clean();
}

// Sale Info 2
add_shortcode('isale2', 'isale2_func');
function isale2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'info'     =>  '',
        'title'    =>  '',
        'bg'       =>  '',
    ), $atts));
    ob_start(); ?>

    <div class="token-sale-box" <?php if($bg) echo 'style="background:'.esc_attr($bg).'"'; ?>>
        <span class="token-sale-info"><?php echo wp_specialchars_decode($info); ?></span>
        <span class="token-sale-title"><?php echo wp_specialchars_decode($title); ?></span>
    </div>

<?php
    return ob_get_clean();
}



// Token Details
add_shortcode('dtoken', 'dtoken_func');
function dtoken_func($atts, $content = null){
    extract(shortcode_atts(array(
        'info'     =>  '',
        'iclass'   =>  '',
    ), $atts));
    $infos = (array) vc_param_group_parse_atts( $info );
    ob_start(); ?>

    <ul class="token-details-list <?php echo esc_attr($iclass); ?>">
        <?php foreach ( $infos as $inf ) : if($inf) : 
            $inf['title'] = isset($inf['title']) ? $inf['title'] : '';
            $inf['des']   = isset($inf['des']) ? $inf['des'] : '';            
        ?>
        <li>
            <span class="token-details-title"><?php echo wp_specialchars_decode($inf['title']); ?></span>
            <span class="token-details-info"><?php echo wp_specialchars_decode($inf['des']); ?></span>
        </li>
        <?php endif; endforeach; ?>
    </ul>

<?php
    return ob_get_clean();
}


// Token Sale Stage
add_shortcode('tokenstage', 'tokenstage_func');
function tokenstage_func($atts, $content = null){
    extract(shortcode_atts(array(
        'info'    =>  '',
        'iclass'   =>  '',
    ), $atts));
    $stages = (array) vc_param_group_parse_atts( $info );
    ob_start(); ?>

    <div class="toktmln-list <?php echo esc_attr($iclass); ?>">
        <div class="container">
            <div class="row">
                <?php foreach ( $stages as $stg ) : if($stg) : 
                    $stg['title']   = isset($stg['title']) ? $stg['title'] : '';
                    $stg['date']    = isset($stg['date']) ? $stg['date'] : '';
                    $stg['bonus']   = isset($stg['bonus']) ? $stg['bonus'] : '';
                    $stg['price']   = isset($stg['price']) ? $stg['price'] : '';
                ?>
                <div class="col-lg">
                    <div class="toktmln-item">
                        <div>
                            <span><?php echo wp_specialchars_decode($stg['title']); ?></span>
                            <span><?php echo wp_specialchars_decode($stg['date']); ?></span>
                        </div>
                        <div>
                            <span><?php echo wp_specialchars_decode($stg['bonus']); ?></span>
                            <span><?php echo wp_specialchars_decode($stg['price']); ?></span>
                        </div>
                    </div>
                </div>
                <?php endif; endforeach; ?>
            </div>
        </div>
    </div>

<?php
    return ob_get_clean();
}

// Token Allocation
add_shortcode('tokenall', 'tokenall_func');
function tokenall_func($atts, $content = null){
    extract(shortcode_atts(array(
        'info'     =>  '',
        'iclass'   =>  '',
    ), $atts));
    $infos = (array) vc_param_group_parse_atts( $info );
    ob_start(); ?>

    <div class="token-bar-chart <?php echo esc_attr($iclass); ?>">
        <?php foreach ( $infos as $inf ) : if($inf) : 
            $inf['title'] = isset($inf['title']) ? $inf['title'] : '';
            $inf['des']   = isset($inf['des']) ? $inf['des'] : '';            
        ?>
        <div class="token-bar-item tbic1" style="width:<?php echo esc_attr($inf['per']); ?>; background:<?php echo esc_attr($inf['color']); ?>;">
            <div class="token-bar-txt">
                <span style="color:<?php echo esc_attr($inf['color']); ?>"><?php echo esc_html($inf['per']); ?></span>
                <span><?php echo esc_html($inf['title']); ?></span>
            </div>
            <span style="background:<?php echo esc_attr($inf['color']); ?>"></span>
        </div>
        <?php endif; endforeach; ?>
    </div>

<?php
    return ob_get_clean();
}

// Token Allocation 2
add_shortcode('tokenall2', 'tokenall2_func');
function tokenall2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'info'     =>  '',
        'title'    =>  '',
        'photo'    =>  '',
        'iclass'   =>  '',
    ), $atts));
    $infos   = (array) vc_param_group_parse_atts( $info );
    $img     = wp_get_attachment_image_src($photo,'full');
    $img     = $img[0];
    ob_start(); ?>

    <div class="token-alocate-item <?php echo esc_attr($iclass); ?>">
        <div class="token-alocate-graph">
            <img src="<?php echo esc_url($img); ?>" alt="chart">
            <span><?php echo wp_specialchars_decode($title); ?></span>
        </div>
        <ul class="token-alocate-list">
            <?php foreach ( $infos as $inf ) : if($inf) : 
                $inf['title'] = isset($inf['title']) ? $inf['title'] : '';
                $inf['per']   = isset($inf['per']) ? $inf['per'] : '';            
                $inf['color'] = isset($inf['color']) ? $inf['color'] : '';            
            ?>
            <li>
                <span class="token-alocate-color" <?php echo 'style="background:'.esc_attr($inf['color']).'"'; ?>></span>
                <span class="token-alocate-title"><?php echo wp_specialchars_decode($inf['title']); ?></span>
                <span class="token-alocate-percent"><?php echo wp_specialchars_decode($inf['per']); ?></span>
            </li>
            <?php endif; endforeach; ?>
        </ul>
    </div>

<?php
    return ob_get_clean();
}


// Token Allocation 3
add_shortcode('tokenall3', 'tokenall3_func');
function tokenall3_func($atts, $content = null){
    extract(shortcode_atts(array(
        'info'     =>  '',
        'minfo'    =>  '',
        'title'    =>  '',
        'mtitle'   =>  '',
        'photo'    =>  '',
        'mphoto'   =>  '',
        'tab'      =>  '',
        'iclass'   =>  '',
    ), $atts));
    $infos   = (array) vc_param_group_parse_atts( $info );
    $minfos  = (array) vc_param_group_parse_atts( $minfo );
    $img     = wp_get_attachment_image_src($photo,'full');
    $img     = $img[0];
    $imgx    = wp_get_attachment_image_src($mphoto,'full');
    $imgx    = $imgx[0];
    ob_start(); ?>

    <div class="tab-s4 <?php echo esc_attr($iclass); ?>">
        <?php if($tab) { ?>
        <ul class="nav nav-tabs text-center">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-dist"><?php echo esc_html($title); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-fund"><?php echo esc_html($mtitle); ?></a>
            </li>
        </ul>
        <?php } ?>
        <div class="gaps size-2x"></div>
        <div class="gaps size-3x d-none d-xl-block"></div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane animate <?php if(!$tab) echo 'active show'; ?>" id="tab-dist">
                <div class="tkn-crt">
                    <div class="tkn-crt-img">
                        <img src="<?php echo esc_url($img); ?>" alt="chart">
                    </div>
                    <ul class="tkn-crt-lst">
                        <?php foreach ( $infos as $inf ) : if($inf) : 
                            $inf['title'] = isset($inf['title']) ? $inf['title'] : '';
                            $inf['per']   = isset($inf['per']) ? $inf['per'] : '';            
                            $inf['color'] = isset($inf['color']) ? $inf['color'] : '';            
                        ?>
                        <li class="tkn-crt-itm">
                            <span class="tkn-crt-prcnt" style="background:<?php echo esc_attr($inf['color']); ?>"><span><?php echo esc_html($inf['per']); ?></span></span><span class="tkn-crt-ttl"><?php echo esc_html($inf['title']); ?></span>
                        </li>
                        <?php endif; endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php if($tab) { ?>
            <div class="tab-pane animate active show" id="tab-fund">
                <div class="tkn-crt">
                    <div class="tkn-crt-img">
                        <img src="<?php echo esc_url($imgx); ?>" alt="chart">
                    </div>
                    <ul class="tkn-crt-lst">
                        <?php foreach ( $minfos as $minf ) : if($minf) : 
                            $minf['title'] = isset($minf['title']) ? $minf['title'] : '';
                            $minf['per']   = isset($minf['per']) ? $minf['per'] : '';            
                            $minf['color'] = isset($minf['color']) ? $minf['color'] : '';            
                        ?>
                        <li class="tkn-crt-itm">
                            <span class="tkn-crt-prcnt" style="background:<?php echo esc_attr($minf['color']); ?>"><span><?php echo esc_html($minf['per']); ?></span></span><span class="tkn-crt-ttl"><?php echo esc_html($minf['title']); ?></span>
                        </li>
                        <?php endif; endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div><!-- .tab-content -->
    </div>

<?php
    return ob_get_clean();
}


// Process
add_shortcode('icoprocess', 'icoprocess_func');
function icoprocess_func($atts, $content = null){
    extract(shortcode_atts(array(
        'process'  =>  '',
        'style'    =>  '',
    ), $atts));
    $proces = (array) vc_param_group_parse_atts( $process );
    ob_start(); ?>

    <?php if( $style == '2row' ) { ?>
    <div class="slider-dot">
        <?php foreach ( $proces as $proc ) : if($proc) : 
            $proc['icon']  = isset($proc['icon']) ? $proc['icon'] : '';         
        ?>
        <div class="slider-dot-item owl-dots"><em class="<?php echo esc_attr($proc['icon']); ?>"></em></div>
        <?php endif; endforeach; ?>
    </div>
    <div class="gaps size-2x"></div>
    <div class="slider-pane">
        <?php foreach ( $proces as $proc ) : if($proc) : 
            $proc['title'] = isset($proc['title']) ? $proc['title'] : '';
            $proc['des']   = isset($proc['des']) ? $proc['des'] : '';            
        ?>
        <div class="slider-pane-item pane-item-1">
            <h5 class="animate-up delay-5ms"><?php echo wp_specialchars_decode($proc['title']); ?></h5>
            <p class="animate-up delay-6ms"><?php echo wp_specialchars_decode($proc['des']); ?></p>
        </div>
        <?php endif; endforeach; ?>
    </div>
    <?php }else{ ?>
    <div class="row align-items-center">
        <div class="col-lg-7">
            <div class="slider-nav">
                <?php $i = 2; foreach ( $proces as $proc ) : if($proc) : 
                    $proc['icon']  = isset($proc['icon']) ? $proc['icon'] : '';         
                ?>
                <div class="slider-nav-item owl-dots animated" data-animate="fadeInUp" data-delay=".<?php echo esc_attr($i); ?>"><em class="<?php echo esc_attr($proc['icon']); ?>"></em></div>
                <?php endif; $i++; endforeach; ?>
            </div>
        </div><!-- .col  -->
        <div class="col-lg-5">
            <div class="slider-pane">
                <?php foreach ( $proces as $proc ) : if($proc) : 
                    $proc['title'] = isset($proc['title']) ? $proc['title'] : '';
                    $proc['des']   = isset($proc['des']) ? $proc['des'] : '';            
                ?>
                <div class="slider-pane-item">
                    <h5 class="animate-up delay-5ms"><?php echo wp_specialchars_decode($proc['title']); ?></h5>
                    <p class="animate-up delay-6ms"><?php echo wp_specialchars_decode($proc['des']); ?></p>
                </div>
                <?php endif; endforeach; ?>
            </div>
        </div>
    </div>
    <?php } ?>

<?php
    return ob_get_clean();
}


// CountDown
add_shortcode('cdown', 'cdown_func');
function cdown_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'     =>  '',
        'date'      =>  '2019/02/02',
        'btn'       =>  '',
        'icon'      =>  '',
        'line'      =>  '',
        'current'   =>  '',
        'prog'      =>  '',
        'circle'    =>  '',
        'bg'        =>  '',
        'iclass'    =>  '',
        'day'       =>  'Day',
        'hour'      =>  'Hour',
        'minx'      =>  'Minute',
        'secx'      =>  'Second',
        'days'      =>  'Days',
        'hours'     =>  'Hours',
        'min'       =>  'Minutes',
        'sec'       =>  'Seconds',
    ), $atts));
    $icons = (array) vc_param_group_parse_atts( $icon );
    $progs = (array) vc_param_group_parse_atts( $prog );
    $url   = vc_build_link( $btn );
    ob_start(); ?>

    <div class="countdown-box text-center <?php echo esc_attr($iclass); if($line) echo ' countdown-header'; ?>" <?php if($bg) echo 'style="background-color: '.esc_attr($bg).';"'; ?>>
        <?php if($circle) { ?>
        <div class="circle-animation">
           <div class="circle-animation-l1 ca">
               <span class="circle-animation-l1-d1 ca-dot ca-color-1"></span>
               <span class="circle-animation-l1-d2 ca-dot ca-color-2"></span>
               <span class="circle-animation-l1-d3 ca-dot ca-color-3"></span>
               <span class="circle-animation-l1-d4 ca-dot ca-color-1"></span>
               <span class="circle-animation-l1-d5 ca-dot ca-color-2"></span>
               <span class="circle-animation-l1-d6 ca-dot ca-color-3"></span>
           </div>
           <div class="circle-animation-l2 ca">
               <span class="circle-animation-l2-d1 ca-dot ca-color-1"></span>
               <span class="circle-animation-l2-d2 ca-dot ca-color-3"></span>
               <span class="circle-animation-l2-d3 ca-dot ca-color-2"></span>
               <span class="circle-animation-l2-d4 ca-dot ca-color-1"></span>
               <span class="circle-animation-l2-d5 ca-dot ca-color-2"></span>
           </div>
           <div class="circle-animation-l3 ca">
               <span class="circle-animation-l3-d1 ca-dot ca-color-1"></span>
               <span class="circle-animation-l3-d2 ca-dot ca-color-3"></span>
               <span class="circle-animation-l3-d3 ca-dot ca-color-2"></span>
               <span class="circle-animation-l3-d4 ca-dot ca-color-1"></span>
               <span class="circle-animation-l3-d5 ca-dot ca-color-2"></span>
           </div>
        </div>
        <?php }if($line) echo '<span class="extra-line"></span>';?>
        <?php if($title) echo '<h6>'.esc_html($title).'</h6>'; ?>
        <?php if($circle) { ?><div class="row justify-content-center"><div class="col-md-7"><?php } ?>
                <ul class="token-countdown d-flex align-content-stretch" data-zone="<?php echo get_option('gmt_offset'); ?>" data-date="<?php echo esc_attr($date); ?>" data-days="<?php echo esc_attr($days); ?>" data-hours="<?php echo esc_attr($hours); ?>" data-mins="<?php echo esc_attr($min); ?>" data-secs="<?php echo esc_attr($sec); ?>" data-day="<?php echo esc_attr($days); ?>" data-hour="<?php echo esc_attr($hours); ?>" data-min="<?php echo esc_attr($minx); ?>" data-sec="<?php echo esc_attr($secx); ?>">
                    <li class="col">
                        <span class="countdown-time days">00</span>
                        <span class="countdown-text days_text">Days</span>
                    </li>
                    <li class="col">
                        <span class="countdown-time hours">00</span>
                        <span class="countdown-text hours_text">Hours</span>
                    </li>
                    <li class="col">
                        <span class="countdown-time minutes">00</span>
                        <span class="countdown-text minutes_text">Minutes</span>
                    </li>
                    <li class="col">
                        <span class="countdown-time seconds countdown-time-last">00</span>
                        <span class="countdown-text seconds_text">Seconds</span>
                    </li>
                </ul>
        <?php if($circle) { ?></div></div><?php } ?>

        <?php if($prog) { ?>
        <div class="token-status-bar">
            <div class="token-status-percent" style="width:<?php echo esc_attr($current); ?>;"></div>
            <?php foreach ( $progs as $pro ) : if($pro) : 
                $pro['pstep'] = isset($pro['pstep']) ? $pro['pstep'] : '';
                $pro['step']  = isset($pro['step']) ? $pro['step'] : '';
            ?>
            <span class="token-status-point" style="left:<?php echo esc_attr($pro['pstep']); ?>;"><?php echo esc_html($pro['step']); ?></span>
            <?php endif; endforeach; ?>
        </div>
        <?php }if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
            echo '<a class="btn btn-alt btn-sm" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) .'</a>';
        } ?>
        <?php if($icons) { ?>
        <ul class="icon-list">
            <?php foreach ( $icons as $ic ) : if($ic) : 
                $ic['name'] = isset($ic['name']) ? $ic['name'] : ''; 
            ?>
            <li>
                <?php if($ic['name']) { ?>
                <em class="<?php echo esc_attr($ic['name']); ?>"></em>
                <?php }else{ ?>
                <em class="<?php echo esc_attr($ic['nname']); ?>"></em>
                <?php } ?>
            </li>
            <?php endif; endforeach; ?>
        </ul>
        <?php } ?>
    </div>

<?php
    return ob_get_clean();
}

// CountDown 2
add_shortcode('cdown2', 'cdown2_func');
function cdown2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'     =>  '',
        'date'      =>  '2019/02/02',
        'btn'       =>  '',
        'icon'      =>  '',
        'video'     =>  '',
        'paper'     =>  '',
        'pcur'      =>  '',
        'cur'       =>  '',
        'prog'      =>  '',
        'day'       =>  'Day',
        'hour'      =>  'Hour',
        'minx'      =>  'Minute',
        'secx'      =>  'Second',
        'days'      =>  'Days',
        'hours'     =>  'Hours',
        'min'       =>  'Minutes',
        'sec'       =>  'Seconds',
    ), $atts));
    $icons = (array) vc_param_group_parse_atts( $icon );
    $progs = (array) vc_param_group_parse_atts( $prog );
    $url   = vc_build_link( $btn );
    $url2  = vc_build_link( $paper );
    $url3  = vc_build_link( $video );
    ob_start(); ?>

    <div class="token-box shadow text-center animated" data-animate="fadeInUp" data-delay="0.95">
        <?php if($title) echo '<h6 class="small-text">'.esc_html($title).'</h6>'; ?>
        <ul class="token-countdown d-flex align-content-stretch" data-zone="<?php echo get_option('gmt_offset'); ?>" data-date="<?php echo esc_attr($date); ?>" data-days="<?php echo esc_attr($days); ?>" data-hours="<?php echo esc_attr($hours); ?>" data-mins="<?php echo esc_attr($min); ?>" data-secs="<?php echo esc_attr($sec); ?>" data-day="<?php echo esc_attr($days); ?>" data-hour="<?php echo esc_attr($hours); ?>" data-min="<?php echo esc_attr($minx); ?>" data-sec="<?php echo esc_attr($secx); ?>">
            <li class="col">
                <span class="countdown-time days">00</span>
                <span class="countdown-text days_text">Days</span>
            </li>
            <li class="col">
                <span class="countdown-time hours">00</span>
                <span class="countdown-text hours_text">Hours</span>
            </li>
            <li class="col">
                <span class="countdown-time minutes">00</span>
                <span class="countdown-text minutes_text">Minutes</span>
            </li>
            <li class="col">
                <span class="countdown-time seconds countdown-time-last">00</span>
                <span class="countdown-text seconds_text">Seconds</span>
            </li>
        </ul>
        <?php if($content) { ?>
        <div class="token-details">
            <?php echo wp_specialchars_decode($content); ?>
        </div>
        <?php } ?>
        <div class="token-bar">
            <div class="token-percent" style="width:<?php echo esc_attr($pcur); ?>;"><?php echo esc_html($cur); ?></div>
            <?php foreach ( $progs as $pro ) : if($pro) : 
                $pro['pstep'] = isset($pro['pstep']) ? $pro['pstep'] : '';
                $pro['step']  = isset($pro['step']) ? $pro['step'] : '';
            ?>
            <span class="token-point" style="left:<?php echo esc_attr($pro['pstep']); ?>;"><?php echo esc_html($pro['step']); ?></span>
            <?php endif; endforeach; ?>
        </div>
        <ul class="btns">
            <?php if ( strlen( $video ) > 0 && strlen( $url3['url'] ) > 0 ) {
                echo '<li><a class="btn btn-simple video-play" href="' . esc_attr( $url3['url'] ) . '" target="' . ( strlen( $url3['target'] ) > 0 ? esc_attr( $url3['target'] ) : '_self' ) . '"> <em class="fa fa-play"></em> ' . esc_attr( $url3['title'] ) .'</a></li>';
            ?>
            <?php }if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
                echo '<li><a class="btn btn-alt btn-lg" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) .'</a></li>';
            ?>
            <?php }if ( strlen( $paper ) > 0 && strlen( $url2['url'] ) > 0 ) {
                echo '<li><a class="btn btn-simple" href="' . esc_attr( $url2['url'] ) . '" target="' . ( strlen( $url2['target'] ) > 0 ? esc_attr( $url2['target'] ) : '_self' ) . '"> <em class="fa fa-file"></em> ' . esc_attr( $url2['title'] ) .'</a></li>';
            } ?>
        </ul>
        <?php if($icons) { ?>
        <ul class="icon-list">
            <?php foreach ( $icons as $ic ) : if($ic) : 
                $ic['name'] = isset($ic['name']) ? $ic['name'] : ''; 
            ?>
            <li>
                <?php if($ic['name']) { ?>
                <em class="<?php echo esc_attr($ic['name']); ?>"></em>
                <?php }else{ ?>
                <em class="<?php echo esc_attr($ic['nname']); ?>"></em>
                <?php } ?>
            </li>
            <?php endif; endforeach; ?>
        </ul>
        <?php } ?>
    </div>

<?php
    return ob_get_clean();
}


// CountDown 3
add_shortcode('cdown3', 'cdown3_func');
function cdown3_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'     =>  '',
        'date'      =>  '2019/02/02',
        'btn'       =>  '',
        'info'      =>  '',
        'linfo'     =>  '',
        'day'       =>  'Day',
        'hour'      =>  'Hour',
        'minx'      =>  'Minute',
        'secx'      =>  'Second',
        'days'      =>  'Days',
        'hours'     =>  'Hours',
        'min'       =>  'Minutes',
        'sec'       =>  'Seconds',
    ), $atts));
    $infos = (array) vc_param_group_parse_atts( $info );
    $url   = vc_build_link( $btn );
    ob_start(); ?>

    <div class="token-countdown-box">
        <?php if($title) echo '<h4 class="small-text">'.esc_html($title).'</h4>'; ?>
        <ul class="countdown-s2" data-zone="<?php echo get_option('gmt_offset'); ?>" data-date="<?php echo esc_attr($date); ?>" data-days="<?php echo esc_attr($days); ?>" data-hours="<?php echo esc_attr($hours); ?>" data-mins="<?php echo esc_attr($min); ?>" data-secs="<?php echo esc_attr($sec); ?>" data-day="<?php echo esc_attr($days); ?>" data-hour="<?php echo esc_attr($hours); ?>" data-min="<?php echo esc_attr($minx); ?>" data-sec="<?php echo esc_attr($secx); ?>">
            <li class="countdown-s2-item">
                <span class="countdown-s2-time days countdown-time-first">00</span>
                <span class="countdown-s2-text days_text">Days</span>
            </li>
            <li class="countdown-s2-item">
                <span class="countdown-s2-time hours">00</span>
                <span class="countdown-s2-text hours_text">Hours</span>
            </li>
            <li class="countdown-s2-item">
                <span class="countdown-s2-time minutes">00</span>
                <span class="countdown-s2-text minutes_text">Minutes</span>
            </li>
            <li class="countdown-s2-item">
                <span class="countdown-s2-time seconds countdown-time-last">00</span>
                <span class="countdown-s2-text seconds_text">Seconds</span>
            </li>
        </ul>
        <div class="token-info">
            <?php foreach ( $infos as $inf ) : if($inf) : 
                $inf['name']   = isset($inf['name']) ? $inf['name'] : '';
                $inf['value']  = isset($inf['value']) ? $inf['value'] : '';
            ?>
            <div class="token-info-item <?php if($inf['full']) echo 'd-sm-flex align-items-sm-center'; ?>">
                <span><?php echo wp_specialchars_decode($inf['name']); ?></span>
                <h4><?php echo wp_specialchars_decode($inf['value']); ?></h4>
            </div>
            <?php endif; endforeach; ?>
        </div>
        <div class="token-action">
            <?php if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
                echo '<a class="btn btn-cCap" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) .'</a>';
                }
            ?>
            <div class="token-action-info">
                <?php echo wpb_js_remove_wpautop($linfo); ?>
            </div>
        </div>
    </div>

<?php
    return ob_get_clean();
}


// CountDown 4
add_shortcode('cdown4', 'cdown4_func');
function cdown4_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'     =>  '',
        'date'      =>  '2019/02/02',
        'stitle'    =>  '',
        'rtitle'    =>  '',
        'fsold'     =>  '',
        'lsold'     =>  '',
        'day'       =>  'Day',
        'hour'      =>  'Hour',
        'minx'      =>  'Minute',
        'secx'      =>  'Second',
        'days'      =>  'Days',
        'hours'     =>  'Hours',
        'min'       =>  'Minutes',
        'sec'       =>  'Seconds',
    ), $atts));
    ob_start(); ?>

    <div class="row no-gutters justify-content-center">
        <div class="col-xl-4 col-md-5">
            <div class="presale-countdown">
                <h5><?php echo wp_specialchars_decode($title); ?></h5>
                <h6><?php echo wp_specialchars_decode($stitle); ?></h6>
                <ul class="token-countdown" data-zone="<?php echo get_option('gmt_offset'); ?>" data-date="<?php echo esc_attr($date); ?>" data-days="<?php echo esc_attr($days); ?>" data-hours="<?php echo esc_attr($hours); ?>" data-mins="<?php echo esc_attr($min); ?>" data-secs="<?php echo esc_attr($sec); ?>" data-day="<?php echo esc_attr($days); ?>" data-hour="<?php echo esc_attr($hours); ?>" data-min="<?php echo esc_attr($minx); ?>" data-sec="<?php echo esc_attr($secx); ?>">
                    <li class="col">
                        <span class="countdown-time days countdown-time-first">00</span>
                        <span class="countdown-text days_text">Days</span>
                    </li>
                    <li class="col">
                        <span class="countdown-time hours">00</span>
                        <span class="countdown-text hours_text">Hours</span>
                    </li>
                    <li class="col">
                        <span class="countdown-time minutes">00</span>
                        <span class="countdown-text minutes_text">Minutes</span>
                    </li>
                    <li class="col">
                        <span class="countdown-time seconds countdown-time-last">00</span>
                        <span class="countdown-text seconds_text">Seconds</span>
                    </li>
                </ul>
            </div>
        </div><!-- .col  -->
        <div class="col-xl-6 col-md-7">
            <div class="presale-status">
                <h5><?php echo wp_specialchars_decode($rtitle); ?></h5>
                <div class="presale-bar">
                    <div class="presale-bar-percent" style="width:35%"></div>
                </div>
                <div class="presale-points d-flex justify-content-between">
                    <span><?php echo esc_html($fsold); ?></span>
                    <span><?php echo esc_html($lsold); ?></span>
                </div>
            </div>
        </div><!-- .col  -->
    </div>

<?php
    return ob_get_clean();
}


// RoadMap
add_shortcode('rmap', 'rmap_func');
function rmap_func($atts, $content = null){
    extract(shortcode_atts(array(
        'road'     =>  '',
        'nav'      =>  '',
        'style'    =>  's1',
    ), $atts));
    $roads = (array) vc_param_group_parse_atts( $road );
    ob_start(); ?>

    <?php if($style == 's4') { ?>
    <div class="timeline-list">
        <?php $i = 1; foreach ( $roads as $roa ) : if($roa) : 
            $roa['done'] = isset($roa['done']) ? 'active' : '';
            $roa['date'] = isset($roa['date']) ? $roa['date'] : '';
            $roa['des']  = isset($roa['des'])  ? $roa['des'] : '';
        ?>    
        <div class="row">
            <div class="col-md-4 <?php if( $i%2 == 0 ) echo 'offset-md-2 text-md-right';else echo 'offset-md-6'; ?>">
                <div class="timeline-content  <?php if( $i%2 == 0 ) echo 'timeline-content-left'; ?> <?php echo esc_attr($roa['done']); ?>">
                    <h6><?php echo esc_html($roa['date']); ?></h6>
                    <p><?php echo wp_specialchars_decode($roa['des']); ?></p>
                </div>
            </div>
        </div>
        <?php endif; $i++; endforeach; ?>
    </div>
    <?php }elseif($style == 's3') { ?>
    <div class="roadmap-carousel-container" >
        <div class="roadmap-carousel<?php if($nav) echo '-withnav'; ?>" >
            <?php foreach ( $roads as $roa ) : if($roa) : 
                $roa['done'] = isset($roa['done']) ? 'roadmap-done' : '';
                $roa['active'] = isset($roa['active']) ? ' roadmap-active' : '';
                $roa['date'] = isset($roa['date']) ? $roa['date'] : '';
                $roa['des']  = isset($roa['des'])  ? $roa['des'] : '';
            ?>
            <div class="roadmap-item <?php echo esc_attr($roa['done'].$roa['active']); ?>">
                <h6><?php echo esc_html($roa['date']); ?></h6>
                <p><?php echo wp_specialchars_decode($roa['des']); ?></p>
            </div>
            <?php endif; endforeach; ?>
        </div>
    </div>
    <?php }elseif($style == 's2') { ?>
    <div class="roadmap-list-alt text-center timeline-carousel">
        <?php $i = 1; foreach ( $roads as $roa ) : if($roa) : 
            $roa['done'] = isset($roa['done']) ? 'sra-done' : '';
            $roa['date'] = isset($roa['date']) ? $roa['date'] : '';
            $roa['des']  = isset($roa['des'])  ? $roa['des'] : '';
            $gra = 'ctob';
            if($i == 2 || $i == 8){ $gra  = 'btoa'; }
            if($i == 3 || $i == 9){ $gra  = 'atob'; }
            if($i == 4 || $i == 10){ $gra = 'btoc'; }
            if($i == 5 || $i == 11){ $gra = 'ctoa'; }
            if($i == 6 || $i == 12){ $gra = 'atoc'; }
        ?>
        <div class="single-roadmap-alt <?php echo esc_attr($roa['done']); ?> gradiant-<?php echo $gra;?>">
            <h6><?php echo esc_html($roa['date']); ?></h6>
            <p><?php echo wp_specialchars_decode($roa['des']); ?></p>
        </div>
        <?php endif; $i++; endforeach; ?>
    </div>
    <?php }else{ ?>
    <div class="row roadmap-list align-items-end">
        <?php $i = 1; foreach ( $roads as $roa ) : if($roa) : 
            $roa['high'] = isset($roa['high']) ? $roa['high'] : '';
            $roa['done'] = isset($roa['done']) ? $roa['done'] : '';
            $roa['down'] = isset($roa['down']) ? $roa['down'] : '';
            $roa['date'] = isset($roa['date']) ? $roa['date'] : '';
            $roa['des']  = isset($roa['des']) ? $roa['des'] : '';
        ?>
        <div class="col-lg <?php if( $i % 2 == 0 ) echo 'width-0'; ?>">
            <div class="single-roadmap roadmap-<?php if($roa['high']) echo 'lg';else echo 'sm'; ?> <?php if($roa['done']) echo 'roadmap-done'; if($roa['down']) echo ' roadmap-down'; ?>">
                <h6><?php echo esc_html($roa['date']); ?></h6>
                <p><?php echo wp_specialchars_decode($roa['des']); ?></p>
            </div>
        </div>
        <?php endif; $i++; endforeach; ?>
    </div>
    <?php } ?>

<?php
    return ob_get_clean();
}


// RoadMap 2
add_shortcode('timeline', 'timeline_func');
function timeline_func($atts, $content = null){
    extract(shortcode_atts(array(
        'road'     =>  '',
        'done'     =>  '',
        'last'     =>  '',
        'num'      =>  'odd',
    ), $atts));
    $roads = (array) vc_param_group_parse_atts( $road );
    $done  = $done ? ' timeline-row-done' : '';
    $last  = $last ? ' timeline-row-last' : '';
    ob_start(); ?>

    <div class="timeline-row timeline-row-<?php echo esc_attr($num.$done.$last); ?>">
        <div class="row no-gutters text-left text-lg-center justify-content-center <?php if($num == 'even') echo ' flex-row-reverse'; ?>">
            <?php $i = 1; foreach ( $roads as $roa ) : if($roa) : 
                $roa['curr']  = isset($roa['curr']) ? ' timeline-current' : '';
                $roa['done']  = isset($roa['done']) ? ' timeline-done' : '';
                $roa['title'] = isset($roa['title']) ? $roa['title'] : '';
                $roa['date']  = isset($roa['date']) ? $roa['date'] : '';
                $roa['des']   = isset($roa['des']) ? $roa['des'] : '';
            ?>
            <div class="col-lg">
                <div class="timeline-item<?php echo esc_attr($roa['done'].$roa['curr']); ?>">
                    <span class="timeline-date"><?php echo esc_html($roa['date']); ?></span>
                    <h6 class="timeline-title"><?php echo esc_html($roa['title']); ?></h6>
                    <div class="timeline-info"><?php echo wp_specialchars_decode($roa['des']); ?></div>
                </div>
            </div>
            <?php endif; $i++; endforeach; ?>
        </div>
    </div>

<?php
    return ob_get_clean();
}

// Member Team
add_shortcode('member','member_func');
function member_func($atts, $content = null){
    extract(shortcode_atts(array(
        'photo'     =>  '',
        'name'      =>  '',
        'job'       =>  '',
        'social'    =>  '',
        'idpost'    =>  '',
        'square'    =>  '',
        'style'     =>  '',
    ), $atts));
        $img     = wp_get_attachment_image_src($photo,'full');
        $img     = $img[0];
        $socials = (array) vc_param_group_parse_atts( $social );
    ob_start(); 
?>

    <?php if($style == 's3') { ?>
    <div class="team-item">
        <div class="team-img">
            <img src="<?php echo esc_url($img); ?>" alt="team">
            <?php if($idpost) { ?><span data-mfp-src="<?php echo get_permalink( $idpost ); ?>" class="expand-trigger content-popup"></span><?php } ?>
            <ul class="team-sprofile">
                <?php foreach ( $socials as $soc ) : if($soc) : 
                    $soc['link']  = isset($soc['link']) ? $soc['link'] : '';
                    $soc['icon']  = isset($soc['icon']) ? $soc['icon'] : '';
                ?>
                <li><a target="_blank" href="<?php echo esc_url($soc['link']); ?>"><em class="<?php echo esc_attr($soc['icon']); ?>"></em></a></li>
                <?php endif; endforeach; ?>
            </ul>
        </div>
        <h5 class="team-intro"><?php echo wp_specialchars_decode($name); ?></h5>
        <span class="team-position"><?php echo wp_specialchars_decode($job); ?></span>
    </div>
    <?php }elseif($style == 's2') { ?>
    <div class="team-circle-des">
        <div class="team-circle-img">
            <img src="<?php echo esc_url($img); ?>" alt="team">
            <?php if($idpost) { ?><span data-mfp-src="<?php echo get_permalink( $idpost ); ?>" class="expand-trigger content-popup"></span><?php } ?>
        </div>
        <h5><?php echo wp_specialchars_decode($name); ?></h5>
        <span><?php echo wp_specialchars_decode($job); ?></span>
        <p><?php echo wp_specialchars_decode($content); ?></p>
        <ul class="team-circle-social">
            <?php foreach ( $socials as $soc ) : if($soc) : 
                $soc['link']  = isset($soc['link']) ? $soc['link'] : '';
                $soc['icon']  = isset($soc['icon']) ? $soc['icon'] : '';
            ?>
            <li><a href="<?php echo esc_url($soc['link']); ?>"><em class="<?php echo esc_attr($soc['icon']); ?>"></em></a></li>
            <?php endif; endforeach; ?>
        </ul>
    </div>
    <?php }else{ ?>
    <div class="<?php if($square) echo 'team-member'; else echo 'team-circle text-center';?>">
        <div class="team-photo">
            <img src="<?php echo esc_url($img); ?>" alt="" />
            <?php if($idpost) { ?><span data-mfp-src="<?php echo get_permalink( $idpost ); ?>" class="expand-trigger content-popup"><?php } ?>
        </div>
        <div class="team-info">
            <h5 class="team-name"><?php echo wp_specialchars_decode($name); ?></h5>
            <span class="team-title"><?php echo wp_specialchars_decode($job); ?></span>
            <?php if($socials) { ?>
            <ul class="team-social">
                <?php foreach ( $socials as $soc ) : if($soc) : 
                    $soc['link']  = isset($soc['link']) ? $soc['link'] : '';
                    $soc['icon']  = isset($soc['icon']) ? $soc['icon'] : '';
                ?>
                <li><a target="_blank" href="<?php echo esc_url($soc['link']); ?>"><em class="<?php echo esc_attr($soc['icon']); ?>"></em></a></li>
                <?php endif; endforeach; ?>
            </ul>
            <?php } ?>
        </div>
    </div>
    <?php } ?>

<?php
    return ob_get_clean();
}

// Member Team 2
add_shortcode('member2','member2_func');
function member2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'photo'     =>  '',
        'name'      =>  '',
        'job'       =>  '',
        'social'    =>  '',
    ), $atts));
        $img     = wp_get_attachment_image_src($photo,'full');
        $img     = $img[0];
        $socials = (array) vc_param_group_parse_atts( $social );
    ob_start(); 
?>

    <div class="team-described">
        <div class="d-flex">
            <div class="team-info">
                <h5 class="team-name"><?php echo wp_specialchars_decode($name); ?></h5>
                <span class="team-title"><?php echo wp_specialchars_decode($job); ?></span>
                <ul class="team-social">
                    <?php foreach ( $socials as $soc ) : if($soc) : 
                        $soc['link']  = isset($soc['link']) ? $soc['link'] : '';
                        $soc['icon']  = isset($soc['icon']) ? $soc['icon'] : '';
                    ?>
                    <li><a href="<?php echo esc_url($soc['link']); ?>"><em class="<?php echo esc_attr($soc['icon']); ?>"></em></a></li>
                    <?php endif; endforeach; ?>
                </ul>
            </div>
            <div class="team-photo">
                <img src="<?php echo esc_url($img); ?>" alt="team">
            </div>
        </div>
        <div class="team-discription">
            <?php echo wp_specialchars_decode($content); ?>
        </div>
    </div>

<?php
    return ob_get_clean();
}

// Skill
add_shortcode('skill', 'skill_func');
function skill_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'   =>  '',
        'per'     =>  '',
    ), $atts));
    ob_start(); ?>

    <div class="single-skill-bar">
        <div class="row no-mg">
            <div class="col-8 no-pd"><span class="skill-title"><?php echo esc_html($title); ?></span></div>
            <div class="col-4 text-right no-pd"><span class="skill-percent"><?php echo esc_html($per); ?></span></div>
        </div>
        <div class="skill-bar">
            <div class="skill-bar-percent gradiant-background" style="width:<?php echo esc_attr($per); ?>"></div>
        </div>
    </div>

<?php
    return ob_get_clean();
}


// Testimonial
add_shortcode('testi', 'testi_func');
function testi_func($atts, $content = null){
    extract(shortcode_atts(array(
        'testi'   =>  '',
        'cols'    =>  '',
    ), $atts));
    $testis = (array) vc_param_group_parse_atts( $testi );
    ob_start(); ?>

    <div class="has-carousel testi-carousel animated" data-animate="fadeInUp" data-delay=".2" data-items="3" data-dots="true" data-navs="false">
        <?php foreach ( $testis as $test ) : if($test) : 
            $img = wp_get_attachment_image_src($test['photo'],'full'); $img = $img[0];
            $test['title']  = isset($test['title']) ? $test['title'] : '';
            $test['des']    = isset($test['des']) ? $test['des'] : '';
        ?>
        <div class="media-box">
            <img src="<?php echo esc_url($img); ?>" alt="media">
            <h5 class="media-heading"><?php echo esc_html($test['title']); ?></h5>
            <p><?php echo esc_html($test['des']); ?></p>
        </div>
        <?php endif; endforeach; ?>
    </div>

<?php
    return ob_get_clean();
}


// FAQs
add_shortcode('otfaq', 'otfaq_func');
function otfaq_func($atts, $content = null){
    extract(shortcode_atts(array(
        'faq'     =>  '',
        'style'   =>  's1',
    ), $atts));
    $num = rand(10,1000);
    $faqs = (array) vc_param_group_parse_atts( $faq );
    ob_start(); ?>

    <?php if($style == 's2') { ?>
    <div class="row">
        <?php $i = 2; foreach ( $faqs as $fa ) : if($fa) : ?>
        <div class="col-md-6">
            <div class="single-faq animated" data-animate="fadeInUp" data-delay=".<?php echo esc_attr($i); ?>">
                <h5><?php echo wp_specialchars_decode($fa['title']); ?></h5>
                <p><?php echo wp_specialchars_decode($fa['ans']); ?></p>
            </div>
        </div>
        <?php endif; $i++; endforeach; ?>
    </div>
    <?php }else{ ?>
    <div class="accordion<?php if($style == 's3') echo '-s2'; ?>" id="accordion-<?php echo esc_attr($num); ?>">
        <?php  
            $i = rand(10,1000)+1; foreach ( $faqs as $fa ) : if($fa) : 
            $fa['open'] = isset($fa['open']) ? $fa['open'] : '';
        ?>
        <div class="card">
            <div class="card-header">
                <h5>
                    <a class="<?php if(!$fa['open']) echo 'collapsed';?>" data-toggle="collapse" data-target="#collapse-<?php echo esc_attr($i); ?>">
                        <?php echo wp_specialchars_decode($fa['title']); ?><span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                    </a>
                </h5>
            </div>
            <div id="collapse-<?php echo esc_attr($i); ?>" class="collapse <?php if($fa['open']) echo 'show';?>" data-parent="#accordion-<?php echo esc_attr($num); ?>">
                <div class="card-body">
                    <p><?php echo wp_specialchars_decode($fa['ans']); ?></p>
                </div>
            </div>
        </div>
        <?php endif; $i++; endforeach; ?>
    </div>
    <?php } ?>

<?php
    return ob_get_clean();
}

// Latest Blog
add_shortcode('lblog', 'lblog_func');
function lblog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'   =>  '3',
        'btn'      =>  '',
    ), $atts));

    $url    = vc_build_link( $btn );
    $cols = 'col-lg-4';
    if($number == '2'){
        $cols = 'col-lg-6';
    }elseif ($number == '4') {
        $cols = 'col-lg-3 col-md-6 offset-md-0';
    }

    ob_start(); ?>

    <div class="blog-list">
        <div class="row">
            <?php       
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $number,
                );
                $blogpost = new WP_Query($args);
                if($blogpost->have_posts()) : while($blogpost->have_posts()) : $blogpost->the_post();
            ?>
            <div class="<?php echo esc_attr($cols); ?> offset-lg-0 col-sm-8 offset-sm-2">
                <div class="blog-item">
                    <?php if ( has_post_thumbnail() ) { ?>
                    <div class="blog-photo">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                        </a>
                    </div>
                    <?php } ?>
                    <div class="blog-texts">
                        <ul class="blog-meta">
                            <li><?php the_time( get_option( 'date_format' ) ); ?></li>
                            <?php if(has_category()) { ?><li><?php the_category( ', ' ); ?></li><?php } ?>
                        </ul>
                        <h5 class="blog-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                        <p><?php echo icos_excerpt_length(); ?></p>
                    </div>
                </div>
            </div><!-- .col -->
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12">
            <?php if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
                echo '<a class="btn btn-more" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) .' <em class="ti ti-angle-right"></em></a>';
            } ?>
        </div>
    </div>

<?php
    return ob_get_clean();
}