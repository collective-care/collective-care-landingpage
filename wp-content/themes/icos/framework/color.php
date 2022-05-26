<?php 

//Custom Style Frontend
if(!function_exists('icos_color_scheme')){
    function icos_color_scheme(){
        $color_scheme = '';

        //Main Color
        if(icos_get_option('main_color') != '#46bdf4' || icos_get_option('second_color') != '#7a0fff' || icos_get_option('third_color') != '#2b56f5'){
            $color_scheme = 
            '
			h1.color-secondary, h2.color-secondary, h3.color-secondary, h4.color-secondary, h5.color-secondary, h6.color-secondary, .h1.color-secondary, .h2.color-secondary, .h3.color-secondary, .h4.color-secondary, .h5.color-secondary, .h6.color-secondary { color: '.icos_get_option('second_color').'; }
			h1.color-primary, h2.color-primary, h3.color-primary, h4.color-primary, h5.color-primary, h6.color-primary, .h1.color-primary, .h2.color-primary, .h3.color-primary, .h4.color-primary, .h5.color-primary, .h6.color-primary { color: '.icos_get_option('main_color').'; }

			.theme-light h1.color-secondary, .theme-light h2.color-secondary, .theme-light h3.color-secondary, .theme-light h4.color-secondary, .theme-light h5.color-secondary, .theme-light h6.color-secondary, .theme-light .h1.color-secondary, .theme-light .h2.color-secondary, .theme-light .h3.color-secondary, .theme-light .h4.color-secondary, .theme-light .h5.color-secondary, .theme-light .h6.color-secondary { color: '.icos_get_option('second_color').'; }
			.theme-light h1.color-primary, .theme-light h2.color-primary, .theme-light h3.color-primary, .theme-light h4.color-primary, .theme-light h5.color-primary, .theme-light h6.color-primary, .theme-light .h1.color-primary, .theme-light .h2.color-primary, .theme-light .h3.color-primary, .theme-light .h4.color-primary, .theme-light .h5.color-primary, .theme-light .h6.color-primary { color: '.icos_get_option('main_color').'; }

			h1.color-secondary, h2.color-secondary, h3.color-secondary, h4.color-secondary, h5.color-secondary, h6.color-secondary, .h1.color-secondary, .h2.color-secondary, .h3.color-secondary, .h4.color-secondary, .h5.color-secondary, .h6.color-secondary, p.color-secondary { color: '.icos_get_option('second_color').'; }
			h1.color-primary, h2.color-primary, h3.color-primary, h4.color-primary, h5.color-primary, h6.color-primary, .h1.color-primary, .h2.color-primary, .h3.color-primary, .h4.color-primary, .h5.color-primary, .h6.color-primary, p.color-primary { color: '.icos_get_option('main_color').'; }
			h1.color-alt-primary, h2.color-alt-primary, h3.color-alt-primary, h4.color-alt-primary, h5.color-alt-primary, h6.color-alt-primary, .h1.color-alt-primary, .h2.color-alt-primary, .h3.color-alt-primary, .h4.color-alt-primary, .h5.color-alt-primary, .h6.color-alt-primary, p.color-alt-primary { color: '.icos_get_option('third_color').'; }

			h1 span, h2 span, h3 span, h4 span, h5 span, h6 span, p span,
			.navbar .menu-top > li:hover > a, .navbar .navbar-nav .sub-menu li:hover > a,
			.widget-area .sidebar-widget ul li a:hover, .widget-area .sidebar-widget.widget_tag_cloud ul li a:hover, .post-content .blog-tags li a:hover,
			.blog-meta li a:hover, .theme-light .blog-meta li a:hover, .blog-texts .blog-title a:hover, .btn.btn-more { color: '.icos_get_option('main_color').'; }

			a { color: '.icos_get_option('main_color').'; }
			a:hover, a:focus, a:active { color: '.icos_get_option('second_color').'; }

			.theme-dark h1.color-secondary, .theme-dark h2.color-secondary, .theme-dark h3.color-secondary, .theme-dark h4.color-secondary, .theme-dark h5.color-secondary, .theme-dark h6.color-secondary, .theme-dark blockquote.color-secondary, .light h1.color-secondary, .light h2.color-secondary, .light h3.color-secondary, .light h4.color-secondary, .light h5.color-secondary, .light h6.color-secondary, .light blockquote.color-secondary { color: '.icos_get_option('second_color').'; }
			.theme-dark h1.color-primary, .theme-dark h2.color-primary, .theme-dark h3.color-primary, .theme-dark h4.color-primary, .theme-dark h5.color-primary, .theme-dark h6.color-primary, .theme-dark blockquote.color-primary, .light h1.color-primary, .light h2.color-primary, .light h3.color-primary, .light h4.color-primary, .light h5.color-primary, .light h6.color-primary, .light blockquote.color-primary { color: '.icos_get_option('main_color').'; }
			.theme-dark h1.color-alt-primary, .theme-dark h2.color-alt-primary, .theme-dark h3.color-alt-primary, .theme-dark h4.color-alt-primary, .theme-dark h5.color-alt-primary, .theme-dark h6.color-alt-primary, .theme-dark blockquote.color-alt-primary, .light h1.color-alt-primary, .light h2.color-alt-primary, .light h3.color-alt-primary, .light h4.color-alt-primary, .light h5.color-alt-primary, .light h6.color-alt-primary, .light blockquote.color-alt-primary { color: '.icos_get_option('third_color').'; }

			.color-primary { color: '.icos_get_option('main_color').'; }

			.color-secondary { color: '.icos_get_option('second_color').'; }

			.bg-primary { background: '.icos_get_option('main_color').'; }

			.bg-secondary { background: '.icos_get_option('second_color').'; }

			.bg-light-primary, 
			.search-form button { background-color: rgba(170, 170, 170, 0.1); }
			.search-form button:hover{ background-color: rgba(170, 170, 170, 0.3); }
			.search-form input[type="text"]{ border-color: rgba(170, 170, 170, 0.1); }

			.select2-container--default .select2-selection--single { background-color: rgba(170, 170, 170, 0.1); }
			.select2-container--default .select2-results__option--highlighted[aria-selected]{ background-color: rgba(170, 170, 170, 0.2); }
			.select2-container--default .select2-results__option[aria-selected=true]{ background-color: rgba(170, 170, 170, 0.3); }
			.theme-light .select2-dropdown{ background: #eee; }

			.theme-light .select2-container--default .select2-selection--single { background-color: rgba(170, 170, 170, 0.1); }
			.theme-light .select2-container--default .select2-results__option--highlighted[aria-selected]{ background-color: rgba(170, 170, 170, 0.2); }
			.theme-light .select2-container--default .select2-results__option[aria-selected=true]{ background-color: rgba(170, 170, 170, 0.3); }

			.bg-light-secondary { background-color: rgba(122, 15, 255, 0.1); }

			.tab-custom .nav-tabs li > a:hover { color: '.icos_get_option('main_color').'; }
			.tab-custom .nav-tabs li > a.active, 
			.tab-custom .nav-tabs li > a.active:hover, 
			.tab-custom .nav-tabs li > a.active:focus, 
			.tab-custom .nav-tabs li > a.active:hover, 
			.tab-custom .nav-tabs li > a.active:focus,
			.wpb-js-composer div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top .vc_tta-tab.vc_active>a,
			.wpb-js-composer div.vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a { border-bottom-color: '.icos_get_option('main_color').'; }

			.theme-dark .tab-custom .nav-tabs li > a:hover,
			.vc_toggle_size_md.vc_toggle_arrow .vc_toggle_icon,
			.wpb-js-composer div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top .vc_tta-tab:not(.vc_active)>a:hover { color: '.icos_get_option('main_color').'; }

			.theme-light .tab-custom .nav-tabs li > a:hover, .comment-time, 
			.theme-light .ml-auto a:hover, p.logged-in-as { color: '.icos_get_option('main_color').'; }

			.pagination li.active a { background: '.icos_get_option('main_color').'; border-color: '.icos_get_option('main_color').'; }
			.pagination li a { color: '.icos_get_option('main_color').'; }
			.pagination li a:hover, .pagination li a:focus { color: #fff; background: '.icos_get_option('main_color').'; border-color: '.icos_get_option('main_color').'; }

			.navbar .navbar-nav > li > a.nav-link.active { color: '.icos_get_option('main_color').'; }
			.navbar .navbar-nav .dropdown-menu .dropdown-item:hover, .navbar .navbar-nav .dropdown-menu .dropdown-item:focus, .navbar .navbar-nav .dropdown-menu .dropdown-item.active { color: '.icos_get_option('main_color').'; }
			.navbar .navbar-nav .dropdown-menu li:hover > a { color: '.icos_get_option('main_color').'; }
			.navbar .navbar-nav .dropdown-menu li:hover.has-children:after { border-left-color: '.icos_get_option('main_color').'; }
			.navbar .navbar-nav .dropdown-menu.active > a, .navbar .navbar-nav .dropdown-menu li > a:hover, .navbar .navbar-nav .dropdown-menu li > a:focus { color: '.icos_get_option('main_color').'; }
			.navbar .navbar-nav .dropdown-menu > .active > a, .navbar .navbar-nav .dropdown-menu > .active > a:focus, .navbar .navbar-nav .dropdown-menu > .active > a:hover { color: '.icos_get_option('main_color').'; }

			.theme-dark .navbar .navbar-nav .dropdown-menu .dropdown-item:hover, .theme-dark .navbar .navbar-nav .dropdown-menu .dropdown-item:focus, .theme-dark .navbar .navbar-nav .dropdown-menu .dropdown-item.active { color: '.icos_get_option('main_color').'; }

			.theme-light .navbar .navbar-nav .dropdown-menu .dropdown-item:hover, .theme-light .navbar .navbar-nav .dropdown-menu .dropdown-item:focus, .theme-light .navbar .navbar-nav .dropdown-menu .dropdown-item.active { color: '.icos_get_option('main_color').'; }

			> li .theme-dark .site-header .navbar-nav:hover a { color: '.icos_get_option('main_color').'; }

			.theme-light .navbar-nav > li:hover > a { color: '.icos_get_option('main_color').'; }

			.navbar .navbar-toggler { background: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.navbar .navbar-toggler:hover,
			.navbar .navbar-toggler:focus { background: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('third_color').' 100%); }

			.btn { background-image: -webkit-linear-gradient(left, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.btn:before { background-image: -webkit-linear-gradient(left, '.icos_get_option('main_color').' 0%, '.icos_get_option('third_color').' 100%); background-image: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('third_color').' 100%); }
			.btn.btn-alt, .io-azure .countdown-box .btn.btn-alt, .io-azure .banner-tokensale .countdown-box .btn.btn-alt { background-image: -webkit-linear-gradient(left, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%); background-image: linear-gradient(to right, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.btn.btn-alt:before, .io-azure .countdown-box .btn.btn-alt:before, .io-azure .banner-tokensale .countdown-box .btn.btn-alt:before{ background-image: -webkit-linear-gradient(left, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); background-image: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); }
			.btn.btn-plane { background: '.icos_get_option('second_color').'; }

			.play-btn .play { background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.play-btn .play > span { background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.play-btn > span:last-of-type { color: '.icos_get_option('second_color').'; }

			.play-btn-alt .fa { background: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }

			.text-block ul:not(.btns) li:before { background: '.icos_get_option('main_color').'; }

			.section-head .section-title span, .section-head .section-title:before { color: '.icos_get_option('second_color').'; opacity: 0.06; }

			.heading-animation { border-top-color: '.icos_get_option('third_color').'; border-left-color: '.icos_get_option('third_color').'; }
			.heading-animation:before { border-top-color: '.icos_get_option('third_color').'; border-lef-colort: '.icos_get_option('third_color').'; }
			.heading-animation:after { border-top-color: '.icos_get_option('third_color').'; border-left-color: '.icos_get_option('third_color').'; }
			.heading-animation span:first-of-type { border-top-color: '.icos_get_option('third_color').'; border-left-color: '.icos_get_option('third_color').'; }
			.heading-animation span:first-of-type:before { border-top-color: '.icos_get_option('third_color').'; border-left-color: '.icos_get_option('third_color').'; }
			.heading-animation span:first-of-type:after { border-top-color: '.icos_get_option('third_color').'; border-left-color: '.icos_get_option('third_color').'; }
			.heading-animation span:last-of-type { border-top-color: '.icos_get_option('third_color').'; border-left-color: '.icos_get_option('third_color').'; }
			.heading-animation span:last-of-type:before { border-top-color: '.icos_get_option('third_color').'; border-left-color: '.icos_get_option('third_color').'; }
			.heading-animation span:last-of-type:after { border-top-color: '.icos_get_option('third_color').'; border-left-color: '.icos_get_option('third_color').'; }

			.section-connect:before { background: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }

			.event-info:before, .event-info .event-single-info:before { background: '.icos_get_option('main_color').'; }

			.countdown-box .token-countdown .countdown-text { color: '.icos_get_option('main_color').'; }
			.countdown-box.countdown-header:after,
			.countdown-box.countdown-header:before,
			.countdown-box.countdown-header .extra-line,
			.countdown-box.countdown-header .extra-line:after { border-color: '.icos_get_option('second_color').'; }
			.countdown-box.countdown-header:after,
			.countdown-box.countdown-header:before,
			.countdown-box.countdown-header .extra-line{ opacity: 0.4; }

			.theme-light .countdown-box.countdown-header:after,
			.theme-light .countdown-box.countdown-header:before,
			.theme-light .countdown-box.countdown-header .extra-line,
			.section-light .countdown-box.countdown-header:after,
			.section-light .countdown-box.countdown-header:before,
			.section-light .countdown-box.countdown-header .extra-line{ opacity: 0.1; }

			.roadmap-list:after { background: '.icos_get_option('second_color').'; }

			.roadmap-list .single-roadmap:before { background-image: -webkit-linear-gradient(top, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); background-image: linear-gradient(top, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); }
			.roadmap-list .single-roadmap:after { background: '.icos_get_option('main_color').'; }
			.roadmap-list .single-roadmap.roadmap-done:after{ border-color: '.icos_get_option('main_color').'; }
			.roadmap-list .single-roadmap.roadmap-down:before { background-image: -webkit-linear-gradient(top, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%); background-image: linear-gradient(top, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%); }

			.single-roadmap-alt:before { background-image: linear-gradient(to right, transparent 0%, '.icos_get_option('second_color').' 50%, '.icos_get_option('second_color').' 100%); }
			.single-roadmap-alt:after { border: 1px solid '.icos_get_option('second_color').'; }
			.single-roadmap-alt.sec-pri:before { background-image: linear-gradient(to right, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.single-roadmap-alt.sec-pri:after { border-color: '.icos_get_option('main_color').'; }
			.single-roadmap-alt.sec-pri h5:before, .single-roadmap-alt.sec-pri h6:before { background: '.icos_get_option('main_color').'; }
			.single-roadmap-alt.pri-sec:before { background-image: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); }
			.single-roadmap-alt.pri-sec:after { border-color: '.icos_get_option('second_color').'; }
			.single-roadmap-alt.pri-sec h5:before, .single-roadmap-alt.pri-sec h6:before { background: '.icos_get_option('second_color').'; }
			.single-roadmap-alt.sec-prialt:before { background-image: linear-gradient(to right, '.icos_get_option('second_color').' 0%, '.icos_get_option('third_color').' 100%); }
			.single-roadmap-alt.sec-prialt:after { border-color: '.icos_get_option('third_color').'; }
			.single-roadmap-alt.sec-prialt h5:before, .single-roadmap-alt.sec-prialt h6:before { background: '.icos_get_option('third_color').'; }
			.single-roadmap-alt.prialt-pri:before { background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.single-roadmap-alt.prialt-pri:after { border-color: '.icos_get_option('main_color').'; }
			.single-roadmap-alt.prialt-pri h5:before, .single-roadmap-alt.prialt-pri h6:before { background: '.icos_get_option('main_color').'; }
			.single-roadmap-alt.pri-last:before { background-image: linear-gradient(to left, transparent 0%, '.icos_get_option('main_color').' 50%, '.icos_get_option('main_color').' 100%); }
			.single-roadmap-alt h5:before, .single-roadmap-alt h6:before { background: '.icos_get_option('second_color').'; }

			.team-member .team-photo:after { background-image: -webkit- linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.team-member .team-title { color: '.icos_get_option('main_color').'; }
			.team-member .team-social li a { color: '.icos_get_option('second_color').'; }

			.team-hex .team-info:before { background-image: -webkit- linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.team-hex .team-title { color: '.icos_get_option('second_color').'; }

			.team-described .team-title:after { background-image: -webkit- linear-gradient(to right, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%); background-image: linear-gradient(to right, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.team-described .team-social li a { color: '.icos_get_option('second_color').'; }
			.team-described .team-discription li:before, .sidebar-widget.widget_categories ul li:before { background: '.icos_get_option('main_color').'; }

			.team-circle .team-photo:before { background-image: linear-gradient(to top, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.team-circle .team-title, .theme-light .blog-meta li a, .theme-light .blog-meta li { color: '.icos_get_option('second_color').'; }

			.skill-bar-percent { background-image: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); }

			.bg-team-exp.mfp-bg { background-image: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); }

			.contact-info li .fa { background-image: -webkit- linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }

			.form-message .input-field .input-line, .comment-form .input-field .input-line { border-bottom-color: '.icos_get_option('main_color').'; }

			.social li a:hover, .page-pagination li a:hover:after, .page-pagination li span:after,
			.wpb-js-composer .vc_tta.vc_general.vc_tta-tabs-position-top .vc_tta-tabs-list:after,
			.theme-light .blog-meta li:after { background: '.icos_get_option('second_color').'; }
			.theme-light .blog-meta li:after{ opacity: 0.3; }
			.theme-light .search-form input[type="text"]{ border-color: rgba(40,56,76,0.6); }
			.theme-light .search-form button{ background-color: rgba(40,56,76,0.8); }
			.theme-light .search-form button:hover{ background-color: rgba(40,56,76,1); }

			.theme-lavendar .blog-meta li:after{ opacity: 0.3; }
			.theme-lavendar .search-form input[type="text"]{ border-color: rgba(40,56,76,0.6); }
			.theme-lavendar .search-form button{ background-color: rgba(40,56,76,0.8); }
			.theme-lavendar .search-form button:hover{ background-color: rgba(40,56,76,1); }

			.theme-muscari .blog-meta li:after{ opacity: 0.3; }
			.theme-muscari .search-form input[type="text"]{ border-color: rgba(40,56,76,0.6); }
			.theme-muscari .search-form button{ background-color: rgba(40,56,76,0.8); }
			.theme-muscari .search-form button:hover{ background-color: rgba(40,56,76,1); }

			.sidebar-widget.widget_tag_cloud ul li a, .blog-tags li a{ border-color: rgba(255,255,255,0.4); }
			.theme-light .sidebar-widget.widget_tag_cloud ul li a, 
			.theme-light .blog-tags li a, 
			.theme-lavendar .sidebar-widget.widget_tag_cloud ul li a, 
			.theme-lavendar .blog-tags li a,
			.theme-muscari .sidebar-widget.widget_tag_cloud ul li a, 
			.theme-muscari .blog-tags li a{ border-color: rgba(40,56,76,0.4); }
			.sidebar-widget.widget_tag_cloud ul li a:hover, 
			.post-content .blog-tags li a:hover{ border-color: '.icos_get_option('main_color').'; }
			.blog-photo a:after{ background: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%) }

			#loader{ border-top-color: '.icos_get_option('main_color').'; }
			#loader:after{ border-top-color: '.icos_get_option('third_color').'; }
			#loader:before{ border-top-color: '.icos_get_option('second_color').'; }

			.io-azure .blog-meta li, .io-azure .blog-meta li a, 
			.io-azure .page-pagination li a,
			.switcher-top .wpml-ls-legacy-dropdown a:hover,
			.slanguage .sub-menu li a:hover,
			.io-azure .copyright-text a:hover,
			.btn.btn-simple .fa, .btn.btn-simple .ti,
			.section-pro .roadmap-list-alt .owl-prev .ti, 
			.section-pro .roadmap-list-alt .owl-next .ti, 
			.section-pro-alt .roadmap-list-alt .owl-prev .ti, 
			.section-pro-alt .roadmap-list-alt .owl-next .ti,
			.section-pro .contact-info-alt li .fa{ color: '.icos_get_option('main_color').'; }

			.io-lungwort #back-to-top, #back-to-top, .footer-widget .btn.btn-plane{ background: '.icos_get_option('main_color').'; color: #fff; }
			.io-lungwort #back-to-top:hover, #back-to-top:hover{ background: '.icos_get_option('second_color').'; }

			.single-roadmap-alt.gradiant-ctob:before{background-image:linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('second_color').' 100%);}
			.single-roadmap-alt.gradiant-ctob:after{border-color:'.icos_get_option('second_color').';}
			.single-roadmap-alt.gradiant-ctob h5:before, .single-roadmap-alt.gradiant-ctob h6:before{background:'.icos_get_option('second_color').';}
			.single-roadmap-alt.gradiant-btoa:before{background-image:linear-gradient(to right, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%);}
			.single-roadmap-alt.gradiant-btoa:after{border-color:'.icos_get_option('main_color').';}
			.single-roadmap-alt.gradiant-btoa h5:before, .single-roadmap-alt.gradiant-btoa h6:before{background:'.icos_get_option('main_color').';}
			.single-roadmap-alt.gradiant-atob:before{background-image:linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%);}
			.single-roadmap-alt.gradiant-atob:after{border-color:'.icos_get_option('second_color').';}
			.single-roadmap-alt.gradiant-atob h5:before, .single-roadmap-alt.gradiant-atob h6:before{background:'.icos_get_option('second_color').';}
			.single-roadmap-alt.gradiant-btoc:before{background-image:linear-gradient(to right, '.icos_get_option('second_color').' 0%, '.icos_get_option('third_color').' 100%);}
			.single-roadmap-alt.gradiant-btoc:after{border-color:'.icos_get_option('third_color').';}
			.single-roadmap-alt.gradiant-btoc h5:before, .single-roadmap-alt.gradiant-btoc h6:before{background:'.icos_get_option('third_color').';}
			.single-roadmap-alt.gradiant-ctoa:before{background-image:linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%);}
			.single-roadmap-alt.gradiant-ctoa:after{border-color:'.icos_get_option('main_color').';}
			.single-roadmap-alt.gradiant-ctoa h5:before, .single-roadmap-alt.gradiant-ctoa h6:before{background:'.icos_get_option('main_color').';}
			.single-roadmap-alt.gradiant-atoc:before{background-image:linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('third_color').' 100%);}
			.single-roadmap-alt.gradiant-atoc:after{border-color:'.icos_get_option('third_color').';}
			.single-roadmap-alt.gradiant-atoc h5:before, .single-roadmap-alt.gradiant-atoc h6:before{background:'.icos_get_option('third_color').';}
			.single-roadmap-alt h5:before, .single-roadmap-alt h6:before{ background:'.icos_get_option('second_color').'; }

			.contact-info-alt li .fa{ background: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%) }
			.token-status-percent, .io-azure .banner-tokensale .token-status-percent{ background: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('third_color').' 100%) }
			.io-azure .token-status-percent{ background: '.icos_get_option('third_color').'; }

			/*Lavendar*/
			.token-bar{ background: #f5f5f5; }
			.about-info{ background: rgba(0, 0, 0, 0.2); }
			.roadmap-carousel:before, .roadmap-carousel:after{ background: #bfbfcf!important; }
			.roadmap-carousel-container:before{ opacity: 0.4; background: #8484a4!important; }
			.theme-light .mc4wp-form .input-round,
			.theme-lavendar .mc4wp-form .input-round{ background: rgba(255, 255, 255, 0.4); border: none; color: #28384c; }

			.section-head-s3 .section-title:before,
			.banner-rounded-bg,
			.footer-lavendar,
			.section-bg-lavendar,
			.about-section-innr:after,
			.about-section-innr:before,
			.token-percent,
			.theme-lavendar .btn, 
			.theme-lavendar .btn.btn-alt,
			.theme-lavendar .site-header.has-fixed .btn,
			.theme-lavendar .btn.btn-plane:hover,
			.theme-lavendar .page-banner,
			.roadmap-item h6:after, .roadmap-item h6:before,
			.owl-carousel .owl-dot.active,
			.owl-carousel .owl-dot{ background: '.icos_get_option('main_color').'; }

			.token-box .token-countdown .countdown-time,
			.token-box .token-countdown .countdown-time:after,
			.theme-lavendar .btn.btn-simple .fa,
			.theme-lavendar .navbar-btns .btn,
			.token-box .icon-list li .fa, 
			.token-box .icon-list li .fab,
			.section-bg-light .accordion .plus-minus .ti,
			.social-bar li a,
			.blog-section .blog-meta li a:hover,
			.theme-lavendar .mc4wp-form .btn.btn-plane:hover,
			.text-light .small-heading, [class*=section-bg-light] .small-heading,
			.wpb-js-composer.theme-lavendar div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s2 .vc_tta-tab.vc_active>a{ color: '.icos_get_option('main_color').'; }

			.wpb-js-composer.theme-muscari div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s2 .vc_tta-tab.vc_active>a{ border-color: '.icos_get_option('main_color').'; }

			.warnning-badge,
			.theme-lavendar .btn-alt:hover,
			.theme-lavendar .site-header.has-fixed .btn:hover,
			.theme-lavendar .navbar-btns .btn:hover,
			.features-item > em,
			.sidebar .cta-widget,
			.roadmap-done h6:after, .roadmap-done h6:before,
			.theme-lavendar .team-member .team-photo:after,
			.theme-lavendar .mc4wp-form .btn.btn-plane:hover{ background: '.icos_get_option('second_color').'; }

			.cta-widget .btn.btn-plane,
			.team-described .team-title,
			.about-info .ti, .about-info .fa,
			.theme-lavendar .blog-meta li a, 
			.theme-lavendar .blog-meta li,
			.theme-muscari .blog-meta li a, 
			.theme-muscari .blog-meta li{ color: '.icos_get_option('second_color').'; }

			/*Muscari*/

			.roadmap-carousel-withnav:before, 
			.roadmap-carousel-withnav:after{ background: #bfbfcf!important; }
			.theme-muscari .btn.btn-outline:hover,
			.theme-muscari .footer-widget .btn.btn-plane:hover{ color: #fff; }
			.theme-muscari .mc4wp-form .input-round{ background: rgba(255, 255, 255, 0.4); }
			.theme-muscari .banner-content .countdown-box{ background: rgba(0,0,0,0.8); }

			.theme-muscari .btn.btn-simple .fa,
			.theme-muscari .text-box h6,
			.theme-muscari .btns .fa{ color: '.icos_get_option('second_color').'; } 

			.theme-muscari .btn.btn-outline{ border-color: '.icos_get_option('second_color').'; }

			.theme-muscari .btn.btn-alt,
			.theme-muscari .countdown-box .btn.btn-alt:hover,
			.theme-muscari .btn.btn-outline:hover,
			.theme-muscari .roadmap-item h6:before,
			.theme-muscari .roadmap-item h6:after,
			.theme-muscari .token-status-percent,
			.section-bg-muscari .section-head-s5 .section-title:after,
			.theme-muscari .team-member .team-photo:after,
			.theme-muscari .btn:hover{ background: '.icos_get_option('second_color').'; }


			.theme-muscari .site-header.has-fixed .navbar .btn.btn-outline,
			.roadmap-carousel-withnav .owl-prev, 
			.roadmap-carousel-withnav .owl-next,
			.contact-info-alt li .fa,
			.theme-muscari .footer-widget .btn.btn-plane,
			.wpb-js-composer.theme-muscari div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s2 .vc_tta-tab.vc_active>a{ color: '.icos_get_option('main_color').'; }
			
			.theme-muscari .site-header.has-fixed .navbar .btn.btn-outline,
			.wpb-js-composer.theme-muscari div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s2 .vc_tta-tab.vc_active>a{ border-color: '.icos_get_option('main_color').'; }

			.banner .section-bg-angle,
			.section-bg-muscari .section-bg-angle,
			.theme-muscari .section-muscari,
			.theme-muscari .footer-section,
			.theme-muscari .site-header.has-fixed .navbar .btn.btn-outline:hover,
			.theme-muscari .btn.btn-alt:hover,
			.theme-muscari .countdown-box,
			.section-head-s5 .section-title:after,
			.theme-muscari .roadmap-done h6:before,
			.theme-muscari .roadmap-done h6:after,
			.contact-info-alt li .fa,
			.theme-muscari .btn{ background: '.icos_get_option('main_color').'; }
			
			.io-azure .page-error:before { background-image: linear-gradient(-225deg, '.icos_get_option('main_color').' 0%, rgba(9, 109, 223, 0) 100%); }
			.io-mascari .footer-small .copyright-text a{ color: '.icos_get_option('main_color').'; }

			/*Lobelia*/
			.problem-item ul li:before,
			.timeline-content:before{ background: '.icos_get_option('main_color').'; }

			.play-btn-s2,
			.play-icon,
			.features-icon-s2 { background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			.timeline-list:before{ background: linear-gradient(to bottom, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); }

			.text-block ol li:before,
			.timeline-content h6,
			.team-circle-social li a,
			.io-lobelia .sub-heading{ color: '.icos_get_option('main_color').'; }

			.timeline-content:before{ border-color: '.icos_get_option('main_color').'; }

			/*Jasmine*/
			.io-jasmine .btn,
			.io-lungwort .btn,
			.io-lungwort button.btn.btn-plane,
			.io-jasmine .countdown-box .btn,
			.io-lungwort .countdown-box .btn,
			.io-jasmine .btn.btn-plane:before,
			.io-jasmine .text-block ul:not(.btns) li:before,
			.io-lungwort .text-block ul:not(.btns) li:before,
			.subscribe-box{ background-image: linear-gradient(to right, '.icos_get_option('third_color').' 0%, '.icos_get_option('main_color').' 100%); }
			
			.btn-icon-s2 .ti,
			.io-lungwort .btn-icon-s2 .ti,
			.rating-title,
			.heading-sm-s2:before,
			.io-lungwort .heading-sm-s2:before,
			.features-subtitle-s3:after,
			.features-action,
			.io-jasmine .btn-outline:hover,
			.token-stage-title,
			.timeline-item:before, 
			.timeline-item:after,
			.io-lungwort .timeline-item:before, 
			.io-lungwort .timeline-item:after,
			.io-lungwort .timeline-date:after,
			.io-lungwort .timeline-date:before,
			.footer-jasmine .social li a,
			.footer-lungwort .social li a,
			.io-lungwort .page-pagination li a:after,
			.io-jasmine .site-header .navbar-btns > li > a:hover,
			.io-jasmine .site-header .navbar-btns > li > a.active{ background: '.icos_get_option('main_color').'; }
			.token-stage-pre{ opacity: 0.8; }

			.btn-icon-s2,
			.io-lungwort .btn-icon-s2,
			.io-jasmine .heading-sm-s2,
			.io-lungwort .heading-sm-s2,
			.token-stage-bonus,
			.token-details-info,
			.io-lungwort .token-stage-bonus,
			.io-lungwort .token-details-info,
			.team-circle-des span,
			.io-lungwort .team-circle-des span,
			.io-lungwort .team-circle-social li a,
			.accordion-s2 .card-header a,
			.accordion-s2 .plus-minus .ti,
			.accordion-s2 .card-header a:hover,
			.io-lungwort .accordion-s2 .card-header a,
			.io-lungwort .accordion-s2 .plus-minus .ti,
			.io-lungwort .accordion-s2 .card-header a:hover,
			.io-lungwort .accordion-s2 .collapsed .plus-minus .ti,
			.io-jasmine .contact-info-alt li .fa,
			.banner-lungwort .countdown-box .token-countdown .countdown-text,
			.io-lungwort .timeline-date,
			.wpb-js-composer div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s3 .vc_tta-tab.vc_active>a{ color: '.icos_get_option('main_color').'; }

			.io-jasmine .btn:before,
			.io-jasmine .countdown-box .btn:before,
			.io-lungwort .btn:before,
			.io-lungwort .countdown-box .btn:before{ background-image: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('third_color').' 100%); }
			
			.io-jasmine .btn-outline,
			.io-jasmine .contact-info-alt li .fa,
			.io-lungwort .contact-info-alt li .fa,
			.timeline-row-done:after,
			.io-lungwort .timeline-row-done:after,
			.io-lungwort .timeline-title:before,
			.io-lungwort .timeline-row:after,
			.io-lungwort .timeline-row:before{ border-color: '.icos_get_option('main_color').'; }

			/*Salvia*/
			.theme-salvia .navbar .navbar-toggler,
			.theme-salvia .navbar-btns li .btn,
			.theme-salvia .search-form button,
			.theme-salvia .search-form button:hover,
			.theme-salvia .btn,
			.theme-salvia .btn.btn-outline:hover,
			.social-link-exp li a:hover [class*=fa-],
			.document-link, .team-sprofile li a,
			.theme-salvia .contact-info-alt li .fa{ background: '.icos_get_option('main_color').'; }
			.theme-salvia .contact-info-alt li .fa{ box-shadow: none; }

			.theme-salvia .navbar-btns li .btn,
			.theme-salvia .sidebar-widget.widget_tag_cloud ul li a:hover, 
			.theme-salvia .blog-tags li a:hover,
			.theme-salvia .search-form input[type="text"],
			.theme-salvia .btn.btn-outline:hover,
			.product-box figure{ border-color: '.icos_get_option('main_color').'; }

			.theme-salvia .navbar .menu-top > li:hover > a,
			.theme-salvia .navbar .navbar-nav .sub-menu.active > a, 
			.theme-salvia .navbar .navbar-nav .sub-menu li > a:hover,
			.theme-salvia .sidebar-widget.widget_tag_cloud ul li a:hover, 
			.theme-salvia .blog-tags li a:hover,
			.theme-salvia .ml-auto a,
			.token-sale-info, .token-bonus-title,
			.theme-salvia .product-box h2,
			.footer-salvia .widget-links li a:hover,
			.footer-list li a:hover{ color: '.icos_get_option('main_color').'; }

			.theme-salvia .navbar-btns li .btn:hover,
			.theme-salvia .btn:hover,
			.document-link:hover,
			.theme-salvia .owl-dot,
			.team-sprofile li a:hover{ background: '.icos_get_option('second_color').'; }

			.theme-salvia .navbar-btns li .btn:hover,
			.theme-salvia .btn.btn-outline{ border-color: '.icos_get_option('second_color').'; }

			.theme-salvia .blog-meta li a, .theme-salvia .blog-meta li{ color: '.icos_get_option('second_color').'; }

			/*Zinnia*/
			.io-zinnia .search-form button,
			.io-zinnia .search-form button:hover,
			.io-zinnia .contact-info-alt li .fa,
			.io-zinnia .has-fixed .navbar-btns li .btn:hover,
			.io-zinnia .btn-icon-s3:hover [class*="fa-"],
			.io-zinnia .section-bg-zinnia, .io-zinnia .section-bg-gradient,
			.prblm-points li:before,
			.presale-status,
			.toktmln-item:before,
			.sltn-item{ background: '.icos_get_option('main_color').'; }

			.io-zinnia .btn,
			.io-zinnia .has-fixed .navbar-toggler,
			.io-zinnia .has-fixed .navbar-toggler:hover,
			.io-zinnia .has-fixed .navbar-toggler:focus,
			.banner-zinnia,
			.presale-countdown h5,
			.presale-bar-percent,
			.io-zinnia .play-btn-s2, .io-zinnia .play-icon,
			.tab-s4 .nav-tabs, .io-zinnia .team-circle .team-photo:before,
			.io-zinnia .bg-team-exp.mfp-bg, .io-zinnia .skill-bar-percent,
			.io-zinnia .contact-info li .fa,
			.io-zinnia .footer-section{ background: linear-gradient(to right, '.icos_get_option('main_color').' 0%, '.icos_get_option('second_color').' 100%); }

			.io-zinnia .btn:before{ background: linear-gradient(to right, '.icos_get_option('second_color').' 0%, '.icos_get_option('main_color').' 100%); }

			.presale-countdown h5{ -webkit-background-clip: text; -webkit-text-fill-color: transparent; }

			.io-zinnia .sidebar-widget.widget_tag_cloud ul li a:hover, 
			.io-zinnia .blog-tags li a:hover,
			.io-zinnia .has-fixed .navbar-btns li .btn,
			.io-zinnia .has-fixed .navbar-btns li .btn:hover,
			.io-zinnia .search-form input[type="text"]{ border-color: '.icos_get_option('main_color').'; }

			.io-zinnia .navbar .navbar-nav .sub-menu.active > a, 
			.io-zinnia .navbar .navbar-nav .sub-menu li > a:hover,
			.io-zinnia .site-header.has-fixed .menu-top > li > a:hover, 
			.io-zinnia .site-header.has-fixed .menu-top > li > a.active,
			.io-zinnia .site-header.has-fixed .navbar-nav > li.open > a,
			.io-zinnia .navbar-btns > li:hover > a,
			.io-zinnia .navbar-btns > li > a:hover,
			.io-zinnia .site-header.has-fixed .btn-outline,
			.io-zinnia .sidebar-widget.widget_tag_cloud ul li a:hover, 
			.io-zinnia .blog-tags li a:hover,
			.io-zinnia .btn.btn-icon-s3,
			.io-zinnia .ml-auto a,
			.io-zinnia .navbar-toggler .ti,
			.io-zinnia .section-bg .section-title-s7,
			.io-zinnia .section-bg-alt .section-title-s7,
			.io-zinnia .text-block h2,
			.presale-countdown .countdown-time,
			.presale-countdown .countdown-time:after,
			div.prblm-item .prblm-subtitle,
			.tab-s4 .nav-tabs .nav-link.active,
			.io-zinnia .btn-outline:hover,
			.io-zinnia .btns a:not(.btn),
			.io-zinnia .btns a:not(.btn):hover,
			.io-zinnia .team-circle .team-name,
			.io-zinnia .accordion-s2 .card-header a,
			.io-zinnia .accordion-s2 .card-header a:hover,
			.io-zinnia .accordion-s2 .plus-minus .ti,
			.footer-list li a:hover{ color: '.icos_get_option('main_color').'; }

			.io-zinnia .btn-icon-s3 [class*="fa-"],
			.io-zinnia .site-header:not(.has-fixed) .navbar.enable{ background: '.icos_get_option('second_color').'; }

			.io-zinnia .comment-form .input-field .input-line:focus{ border-color: '.icos_get_option('second_color').'; }

			.io-zinnia a:hover,
			.io-zinnia .blog-meta li a, .io-zinnia .blog-meta li,
			.io-zinnia .subscription-form .btn.btn-plane{ color: '.icos_get_option('second_color').'; }

			.sltn-points li, .io-zinnia .timeline-date,
			.widget-links li a,
			.widget-links li a:hover{ color: #fff; }
			.sltn-points li:before{ background: #fff; }
			.io-zinnia .timeline-row:before,
			.io-zinnia .timeline-row:not(.timeline-row-done):after,
			.subscription-form .input-round{ border-color: rgba(255,255,255, 0.3); }

			/*Third Color*/
			.io-jasmine button.btn.btn-plane,
			.btn-icon-s2:hover .ti, 
			.io-lungwort .btn-icon-s2:hover .ti,
			.io-lungwort .contact-info-alt li .fa,
			.btn-icon-s2:focus .ti,
			.io-lungwort .btn-icon-s2:focus .ti,
			.features-action:hover,
			.timeline-date:after,
			.footer-jasmine .social li a:hover,
			.footer-lungwort .social li a:hover,
			.timeline-date:before,
			.io-jasmine .cta-widget,
			.io-lungwort .cta-widget,
			.io-lungwort .page-pagination li a:hover:after,
			.io-lungwort .page-pagination li span:after{ background: '.icos_get_option('third_color').'; }
			.timeline-done .timeline-date:before,
			.timeline-current .timeline-date:before{ opacity: 0.23; }

			.btn-icon-s2:hover, 
			.btn-icon-s2:focus,
			.io-lungwort .btn-icon-s2:hover, 
			.io-lungwort .btn-icon-s2:focus,
			.io-jasmine .timeline-title,
			.team-circle-social li a:hover,
			.io-lungwort .team-circle-social li a:hover,
			.io-lungwort .countdown-box h6,
			.io-jasmine .cta-widget .btn,
			.io-lungwort .cta-widget .btn{ color: '.icos_get_option('third_color').'; }

			.io-lungwort .contact-info-alt li .fa{ border-color: '.icos_get_option('third_color').'; }

			';
        }

        if(! empty($color_scheme)){
			echo '<style type="text/css">'.$color_scheme.'</style>';
		}
    }
}
add_action('wp_head', 'icos_color_scheme');