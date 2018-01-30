<?php

/*
=============================================================================
CUSTOM SETTINGS FOR THE THEME OPTIONS PANEL
=============================================================================

Add new settings to the theme options panel here.
Every array item is a new setting.

Available values for "type" setting: checkbox,select,text,textarea,color,image_upload
Available values for "label" setting: main,layout,menu,footer,lists,titles,customizations,social

$HC_CUSTOM_PANEL
name : Theme's name
version : Theme's version
colors : Theme's panel colors

Documentation: wordpress.framework-y.com/advanced-api-documentation/#custom-theme

*/
global $HC_CUSTOM_THEME_OPTIONS;
global $HC_CUSTOM_PANEL;

$HC_CUSTOM_THEME_OPTIONS = array(
array(
	'id'    => 'menu-cta-text',
	'name' => 'Menu Call to Action Button Text',
	'description'  => 'Add a button to the right side. Available only for Classic Menu.',
        'type'  => 'text',
        'label' => 'menu',
        'value' =>''
),
array(
	'id'    => 'menu-cta-link',
	'name' => 'Menu Call to Action Button Link',
	'description'  => 'Set the link for the call to action button. Opens in a new tab.',
        'type'  => 'text',
        'label' => 'menu',
        'value' =>''
));

$HC_CUSTOM_PANEL = array(
'name' => 'LandKit',
'version' => '1.5',
'colors' => array("#F97794","#623AA2"),
'demos' => array(array('id' => 'saas','name' => 'SaaS'),
				 array('id' => 'lead-generation','name' => 'Lead Generation'),
				 array('id' => 'product-showcase','name' => 'Product Showcase'),
				 array('id' => 'app-showcase','name' => 'App Showcase'),
				 array('id' => 'crowdfunding','name' => 'Crowdfunding'),
				 array('id' => 'ebook','name' => 'eBook'),
				 array('id' => 'computer-software','name' => 'Computer Software'),
				 array('id' => 'online-service','name' => 'Online Service'),
				 array('id' => 'product-launch','name' => 'Product Launch'),
				 array('id' => 'consultant','name' => 'Consultant'),
				 array('id' => 'webinar','name' => 'Webinar'),
				 array('id' => 'digital-product','name' => 'Digital Product'),
				 array('id' => 'shop-demo','name' => 'Shop Demo')),
'demos_url' => 'https://socanny.com/landkit/demo-data/'
);


$HC_CUSTOM_FONT = "Rubik:300,300i,400,400i,500,500i,700,700i,900,900i";

$HC_SITE_FONTS = 'body, .adv-img p, .caption-bottom p, .adv-circle .caption p, .advs-box p, .list-blog p {
    font-family: [FONT-1] !important;
}
body, .adv-img p, .caption-bottom p, .adv-circle .caption p, .advs-box p, .list-blog p {
    font-family: [FONT-2] !important;
}';

$HC_SITE_COLORS = '.album-box .caption, header .btn-default, .advs-box-side-img hr, .accordion-list .list-group-item:before,.woocommerce .product span.onsale, .white.btn, .circle-button, .btn.circle-button, .header-bootstrap, .popup-banner .panel-body, .pagination > li > a, .pagination > li > span, .pagination > .disabled > a, .pagination > .disabled > a:focus, .header-title hr, .nav.inner.ms-rounded > li.active > a, .btn-default, .panel-default > .panel-heading, .panel-default .panel-footer, .advs-box-top-icon .icon, .advs-box-top-icon-img .icon, i.circle, .advs-box-multiple div.circle, .advs-box-side-img hr, .call-action-box, .title-base hr, .white .title-base hr, .header-video.white .title-base hr, .header-slider.white .title-base hr, .header-animation.white .title-base hr, .header-title.white .title-base hr, .nav.inner.ms-mini, .bg-color, .title-base .scroll-top, .btn, .title-modern .scroll-top, i.square, .header-base, .popup-banner.full-width-top, .popup-banner.full-width-bottom, .progress-bar, .tagbox span, .btn-border, #mc-embedded-subscribe, .widget #searchsubmit, .adv-img-button-content .caption:hover, input[type="submit"], .woocommerce .price_slider_wrapper .ui-slider .ui-slider-handle, .woocommerce .price_slider_wrapper .ui-slider .ui-slider-range, .cart-buttons .cart-view {
        background-color: [MAIN-COLOR];
    }

    .call-action-box, .social-line .social-group i.circle, .bg-color,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
        background-color: [MAIN-COLOR] !important;
    }

    header .btn-default:hover, .btn-primary:active:hover, .btn-primary.active:hover, .open > .dropdown-toggle.btn-primary:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .dropdown-toggle.btn-primary.focus, .btn-primary:focus, .btn-primary.focus, .btn-primary.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .pagination > li > a:focus, .circle-button:hover, .btn.circle-button:hover, .pagination > .active > a:hover, .pagination > .disabled > a:hover, .pagination > li > a:hover, .btn-default:hover, .minisocial-group.circle i:hover, .pagination > .active > a, .btn-border:hover {
        background-color: [HOVER-COLOR];
        border-color: [HOVER-COLOR];
    }
	
	#mc-embedded-subscribe:hover, .widget #searchsubmit:hover, input[type="submit"]:hover, .btn:hover {
		background-color: [HOVER-COLOR];
	}
	
	::selection {
	background: [MAIN-COLOR];
	}
	
	::-moz-selection {
	background: [MAIN-COLOR];
	}

    .btn-primary:focus, .btn-primary.focus, .slimScrollBar, .white .btn:hover, .white.circle-button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .btn-border:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover {
        background-color: [HOVER-COLOR] !important;
    }

    i.icon, .fullpage-menu .active i, .datepicker-panel > ul > li.picked, .datepicker-panel > ul > li.picked:hover, footer h4, .quote-author, .box-menu-inner .icon-box i,
    .caption-bottom p, div.adv-img .caption-bottom p, .mi-menu li .fa, .fullpage-arrow.arrow-circle .arrow i, .text-color,
    .accordion-list .list-group-item > a i, .mega-menu .fa-ul .fa-li, .adv-circle.adv-circle-center i, .mi-menu a > .fa,
    li.panel-item .fa-li, header .social-group a i, .icon-menu .navbar-collapse ul.nav i, .side-menu i, .side-menu i, .side-menu ul a i, .bs-menu li:hover > a, .bs-menu li.active > a, .img-box.adv-circle i, .advs-box-side .icon, .advs-box-side-icon i, .tag-row i, .tag-row a i.circle, .social-group i.circle, .social-button i.circle,
    .niche-box-testimonails h5, .title-icon i, .fullpage-menu.white li.active a i, ul.list-texts li b, .timeline > li > .timeline-label h4,
    .footer-center .footer-title, .accordion-list .list-group-item > a.active, header .social-group a i.fa, a, .btn-border, .btn-border.btn i, .nav-pills > li > a:hover, header .btn-default, .nav.inner.ms-rounded li a, i {
        color: [MAIN-COLOR];
    }
	
	a:hover, .anima-button.btn-text:hover i, .btn-text:hover, footer a:hover {
		color: [HOVER-COLOR];
	}

    .footer-minimal .footer-title, .advs-box-top-icon.boxed .circle-button,.woocommerce div.product p.price, .woocommerce div.product span.price, .text-color, .boxed .circle-button:hover i, .boxed .btn:hover i, .woocommerce .star-rating, .woocommerce .price_slider_wrapper .price_slider_amount .button, .woocommerce ul.products li.product .price {
        color: [MAIN-COLOR] !important;
    }

    .half-side.left, .mi-menu .side-menu li.active, .tab-box.right .nav-tabs > li.active > a, .bs-menu li:hover > a, .bs-menu li.active > a, .side-menu.ms-minimal li:hover > a, .side-menu.ms-minimal li:hover > span, .adv-circle.adv-circle-center-2 .caption p, .side-menu.ms-simple li.active {
        border-right-color: [MAIN-COLOR] !important;
    }

    .half-side.right, .tab-box.left .nav-tabs > li.active > a, .tab-box.left .nav-tabs > li.active > a:hover, .tab-box.left .nav-tabs > li.active > a:focus, .bs-menu.menu-left li:hover > a, .bs-menu.menu-left li.active > a, .bs-callout {
        border-left-color: [MAIN-COLOR] !important;
    }

    .datepicker-top-left, .datepicker-top-right, .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus, .mi-menu .sidebar-nav {
        border-top-color: [MAIN-COLOR] !important;
    }

    .tab-box.inverse .nav-tabs li.active a, .datepicker-top-left:before, .datepicker-top-right:before, .nav.ms-minimal > li.active > a, .nav.ms-minimal li a:hover, .popover.bottom > .arrow:after, .title-modern h1, .title-modern h2, .title-modern h3, .nav.ms-minimal > li:hover > a, .nav.ms-minimal > li.active > a, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
        border-bottom-color: [MAIN-COLOR] !important;
    }

    .twoside-open hr, header .btn-default, .social-line .social-group i.circle, hr.e, div.call-action-box, .white.btn, .circle-button, .btn.circle-button, .pagination > .active > a:hover, .pagination > li.disabled > a:hover, .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > a, .pagination > li > span, .pagination > li.disabled > a, .nav.inner.ms-rounded li a, .btn-default, .btn, .bs-panel, .tag-row i.circle, .niche-box-team .content-box hr, .call-action-box, .pagination > .active > a, .accordion-list .list-group-item > a.active, .social-group i.circle, .social-button i.circle, .accordion-list .list-group-item > a.active:hover {
        border-color: [MAIN-COLOR];
    }
	.list-texts-justified li b, .list-texts-justified li span {
		background: [COLOR-4] !important;
	}
	
	.gradient-bg, .gradient-text {
		background-image: linear-gradient( 135deg, [MAIN-COLOR] 0%, [HOVER-COLOR] 100%);
	}';

?>
