<?php 
/* Template Name: Demo Head */ ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups</title>

    <!-- Favicon -->    
    <link rel="shortcut icon" type="image/jpg" href="<?= get_template_directory_uri();?>/assets/images/favicon.png"> 

    <!-- css links -->
    <link href="<?= get_template_directory_uri();?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri();?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri();?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?= get_template_directory_uri();?>/assets/css/font.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">

    <style>

 .elementor-container {
    display: flex;
    margin-right: auto;
    margin-left: auto;
    position: relative;
}
.elementor *, .elementor :after, .elementor :before {
    box-sizing: border-box;
}
.elementor-widget-theme-site-logo{margin-top:11px!important;}
.elementor-element.elementor-element-dd77387 {
    width: 18%;
    margin-top: 25px;
    font-size: 14px;
    text-align: left;
}
.elementor-column {
    position: relative;
    min-height: 1px;
    display: flex;
}
.elementor-column-gap-default>.elementor-column>.elementor-element-populated {
    padding: 0px 0px 0px 0px;
}
.elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
    display: flex;
}
.elementor-widget-wrap {
    position: relative;
    width: 100%;
    flex-wrap: wrap;
    align-content: flex-start;
}
.elementor-widget-wrap>.elementor-element {
    width: 100%;
}
.elementor-element.elementor-element-dd77387 > .elementor-widget-container {
    margin: -3px 0px 0px 0px;
}
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
.elementor-widget-image a {
    display: inline-block;
    box-shadow: none;
    text-decoration: none;
}
.elementor img {
    height: auto;
    max-width: 100%;
    border: none;
    border-radius: 0;
    box-shadow: none;
    vertical-align: middle;
    display: inline-block;
}
.elementor-element.elementor-element-512dc29 {
    width: 66%!important;
}
.elementor-column {
    position: relative;
    min-height: 1px;
    display: flex;
}
.elementor-column-gap-default>.elementor-column>.elementor-element-populated {
    margin:0px 0px 0px 0px;
}
body:not(.rtl) .elementor-element.elementor-element-3f25bd0 {
    left: 1px;
}
.elementor-element.elementor-element-3f25bd0 {
    --e-nav-menu-horizontal-menu-item-margin: calc( 1px / 2 );
    top: 0px;
}
.elementor-element.elementor-element-3f25bd0 > .elementor-widget-container {
    margin: 30px -2px 0px 0px !important;
}
.elementor-nav-menu--layout-horizontal {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.elementor-nav-menu__align-center .elementor-nav-menu, .elementor-nav-menu__align-center .elementor-nav-menu--layout-vertical>ul>li>a {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.elementor-nav-menu--layout-horizontal .elementor-nav-menu>li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    float:left;
}
.elementor-nav-menu li {
    border-width: 0;
    position: relative;
}
.elementor-element.elementor-element-3f25bd0 .elementor-nav-menu .elementor-item {
    font-family: "Roboto", Sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #FFFFFF;
    fill: #FFFFFF;
    padding-left: 0px;
    padding-right: 20px;
    margin-top: 15px;
}
.elementor-element.elementor-element-3f25bd0 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
    background-color: #FFFFFF;
    opacity: 0;
}
.elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:first-child)>ul {
    left: var(--e-nav-menu-horizontal-menu-item-margin)!important;
}
layout-horizontal .elementor-nav-menu>li ul {
    top: 100%!important;
}
.elementor-nav-menu--main .elementor-nav-menu ul {
    position: absolute;
    width: 12em;
    border-width: 0;
    border-style: solid;
    padding: 0;
}
.elementor-nav-menu--dropdown-tablet .elementor-nav-menu--dropdown {
    display: none;
}
.elementor-nav-menu li, .elementor-nav-menu ul {
    display: block;
    list-style: none;
    margin: 0;
    padding: 0;
    line-height: normal;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
.elementor-nav-menu--main .elementor-nav-menu a, .elementor-nav-menu--main .elementor-nav-menu a.highlighted, .elementor-nav-menu--main .elementor-nav-menu a:focus, .elementor-nav-menu--main .elementor-nav-menu a:hover {
    padding: 13px 20px;
}
.elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:first-child)>a {
    -webkit-margin-start: var(--e-nav-menu-horizontal-menu-item-margin);
    margin-inline-start: var(--e-nav-menu-horizontal-menu-item-margin);
}
.elementor-nav-menu--main .elementor-nav-menu a {
    -webkit-transition: .4s;
    -o-transition: .4s;
    transition: .4s;
}
.Main_standalone_header {min-height:678px; background-color:#000000DE; background-image:url("<?= wp_upload_dir();?>/2022/12/jason-goodman-Oalh2MojUuk-unsplash.png");
	background-position:28% center;}
.demohead { padding:0% 3% 0% 3%}

    .elementor-element.elementor-element-3f25bd0 .elementor-menu-toggle {
    margin: 0 auto;
}
.elementor-nav-menu--dropdown-tablet .elementor-menu-toggle, .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--dropdown {
    display: none;
}
.elementor-menu-toggle {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 22px;
    padding: 0.25em;
    cursor: pointer;
    border: 0 solid;
    border-radius: 3px;
    background-color: rgba(0,0,0,.05);
    color: #494c4f;
}
[class*=" eicon-"], [class^=eicon] {
    display: inline-block;
    font-family: eicons;
    font-size: inherit;
    font-weight: 400;
    font-style: normal;
    font-variant: normal;
    line-height: 1;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.elementor-screen-only, .screen-reader-text, .screen-reader-text span, .ui-helper-hidden-accessible {
    position: absolute;
    top: -10000em;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0,0,0,0);
    border: 0;
}
.elementor-element.elementor-element-3f25bd0 .elementor-nav-menu--main .elementor-item:hover, .elementor-element.elementor-element-3f25bd0 .elementor-nav-menu--main .elementor-item.elementor-item-active, .elementor-element.elementor-element-3f25bd0 .elementor-nav-menu--main .elementor-item.highlighted, .elementor-element.elementor-element-3f25bd0 .elementor-nav-menu--main .elementor-item:focus {
    color: #FFFFFF;
    fill: #FFFFFF;
}
:focus {
    outline: 0;
}
.elementor-nav-menu .sub-arrow {
    line-height: 1;
    padding: 10px 0 10px 10px;
    margin-top: -10px;
    margin-bottom: -10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-inline-box;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.elementor-nav-menu .sub-arrow i {
    pointer-events: none;
}
.fa-solid, .fas {
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
}
.fa, .fab, .fad, .fal, .far, .fas {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
}
.fa-caret-down:before {
    content: "\f0d7";
}
.elementor-element.elementor-element-3f25bd0 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before, .elementor-element.elementor-element-3f25bd0 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
    background-color: #FFFFFF;
}
.elementor-element.elementor-element-3f25bd0 .elementor-nav-menu--main .elementor-item {
    color: #FFFFFF;
    fill: #FFFFFF;
    padding-left: 0px;
    padding-right: 13px;
    margin-top: 15px;
}

    .elementor-nav-menu__align-center .elementor-nav-menu {
    margin-left: auto;
    margin-right: auto;
    padding: 0px;
}
.elementor-element.elementor-element-9562f59 {
    width: 15%;
}
.elementor-element.elementor-element-9562f59 > .elementor-element-populated {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
}
.elementor-column-gap-default>.elementor-column>.elementor-element-populated {
    padding: 10px 10px 10px 10px;
}
.elementor-widget-wrap>.elementor-element {
    width: 100%;
    margin-top:18px;
    padding:0px;
}
.elementor-column.elementor-col-50, .elementor-column[data-col="50"] {
    width: 50%;
}
.elementor-element-populated {
    margin: 20px 0px 0px 0px;
    --e-column-margin-right: 0px;
    --e-column-margin-left: 0px;
    padding: 0px 0px 0px 0px;
}
.elementor-element.elementor-element-7b6c5cc .elementor-button {
    border-radius: 10px;
    font-size: 12px;
}
.elementor-element.elementor-element-7b6c5cc .elementor-button {
    font-family: "Poppins", Sans-serif;
    font-weight: 500;
    fill: #134793;
    color: #134793;
    background-color: #FFFFFF;
    width: 100px;
}
.elementor-button-content-wrapper {
    display: flex;
    justify-content: center;
}
.elementor-button {
    display: inline-block;
    line-height: 1;
    background-color: #818a91;
    font-size: 15px;
    padding: 12px 24px;
    border-radius: 3px;
    color: #fff;
    fill: #fff;
    text-align: center;
    transition: all .3s;
}
.elementor-element.elementor-element-f5f5f7a > .elementor-element-populated {
    margin: 10px 0px 0px 10px;
    --e-column-margin-right: 0px;
    --e-column-margin-left: 10px;
    padding: 0px 0px 0px 0px;
}
.elementor-element.elementor-element-eb3f1ec .elementor-button {
    font-family: "Roboto", Sans-serif;
    font-weight: 500;
    fill: #FFFFFF;
    color: #FFFFFF;
    background-color: #F96703;
    width: 100px;
    margin-left: 30px;
    border-radius: 10px;
    font-size: 12px;
}
.header_contant_main{ max-width:1120px;text-align: center; display: contents;}
.elementor-element.elementor-element-44db777 .elementor-heading-title {
    color: #FFFFFF;
    font-family: "Poppins", Sans-serif;
    font-size: 30px;
    font-weight: 600;
}
.elementor-element.elementor-element-3b2b746 {
    text-align: center;
    color: #FFFFFF;
    font-family: "Poppins", Sans-serif;
    font-weight: 200;
    line-height: 7px;
}
.elementor-element.elementor-element-3b2b746 > .elementor-widget-container {
    margin: 50px 0px 0px 0px;
}
.elementor-widget-container p {
    margin-bottom: 1.6em; color: #FFFFFF;
    font-family: "Poppins", Sans-serif;
}
.header_contant_main .has_eae_slider{ top:130px;}
    </style>

</head>

<div class="Main_standalone_header">
<div class="elementor-container elementor-column-gap-default demohead">
			<div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-dd77387" data-id="dd77387" data-element_type="column">
			    <div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-83c333f elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="83c333f" data-element_type="widget" data-widget_type="theme-site-logo.default">
				        <div class="elementor-widget-container">
			                <style>/*! elementor - v3.9.0 - 06-12-2022 */
                            .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block; max-width:100%; height:auto;}</style>													<a href="http://thatappdev.space">
							<img width="520" height="135" src="<?= wp_upload_dir();?>/2023/03/cropped-cropped-wcc-logo.png" class="attachment-full size-full wp-image-6028" alt="" loading="lazy" srcset="<?= wp_upload_dir();?>/2023/03/cropped-cropped-wcc-logo.png 520w, <?= wp_upload_dir();?>/2023/03/cropped-cropped-wcc-logo-300x78.png 300w" sizes="(max-width: 520px) 100vw, 520px">								</a>
						</div>
				    </div>
				</div>
		    </div>
	        <div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-512dc29" data-id="512dc29" data-element_type="column">
		<div class="elementor-widget-wrap elementor-element-populated">
			<div class="elementor-element elementor-element-3f25bd0 elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-absolute elementor-nav-menu__align-center headerMenu_wcc elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="3f25bd0" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;<i class=\&quot;fas fa-caret-down\&quot;><\/i>&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
				<div class="elementor-widget-container">
                    <link rel="stylesheet" href="<?= wp_plugin_dir();?>/elementor-pro_OLD/assets/css/widget-nav-menu.min.css">			<nav migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                    <ul id="menu-1-3f25bd0" class="elementor-nav-menu" data-smartmenus-id="1680335304563758"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-984"><a href="<?= site_url();?>/" class="elementor-item menu-link">HOME</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1448"><a href="<?= site_url();?>/what-we-do/" class="elementor-item menu-link has-submenu" id="sm-1680335304563758-1" aria-haspopup="true" aria-controls="sm-1680335304563758-2" aria-expanded="false">WHAT WE DO<span role="presentation" class="dropdown-menu-toggle"></span><span class="sub-arrow"><i class="fas fa-caret-down"></i></span></a>
                        <ul class="sub-menu elementor-nav-menu--dropdown sm-nowrap" id="sm-1680344063416683-2" role="group" aria-hidden="true" aria-labelledby="sm-1680344063416683-1" aria-expanded="false" style="width: auto;display: none;top: auto;left: 0px;margin-left: 0px;margin-top: 0px;min-width: 10em;max-width: 1000px;">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1215"><a href="<?= site_url();?>/about-ready-responders-network/" class="elementor-sub-item menu-link">About Ready Responders Network</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10419"><a href="<?= site_url();?>/about-disaster-volunteerism-academy/" class="elementor-sub-item menu-link">About Disaster Volunteerism Academy</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985"><a href="<?= site_url();?>/donation-drive/" class="elementor-sub-item menu-link">Donation Drive</a></li>
                        </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-979"><a href="<?= site_url();?>/world-cares-center/" class="elementor-item menu-link">WORLD CARES CENTER</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1518"><a href="<?= site_url();?>/training/" class="elementor-item menu-link has-submenu" id="sm-1680335304563758-3" aria-haspopup="true" aria-controls="sm-1680335304563758-4" aria-expanded="false">TRAINING<span role="presentation" class="dropdown-menu-toggle"></span><span class="sub-arrow"><i class="fas fa-caret-down"></i></span></a>
                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-1680335304563758-4" role="group" aria-hidden="true" aria-labelledby="sm-1680335304563758-3" aria-expanded="false">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1227"><a href="<?= site_url();?>/disaster-volunteer-credentials1/" class="elementor-sub-item menu-link">Disaster Volunteer Credentials</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1226"><a href="<?= site_url();?>/standalone-tranning/" class="elementor-sub-item menu-link">Standalone Training</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1225"><a href="<?= site_url();?>/covid-training/" class="elementor-sub-item menu-link">Covid Training</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1224"><a href="<?= site_url();?>/course/other-languages/" class="elementor-sub-item menu-link">Other Languages</a></li>
                        </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1488"><a href="<?= site_url();?>/cordination/" class="elementor-item menu-link">COORDINATION</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-982"><a href="<?= site_url();?>/blogs/" class="elementor-item menu-link">BLOG</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-983"><a href="<?= site_url();?>/contact-us/" class="elementor-item menu-link">CONTACT US</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-9121"><a href="<?= site_url();?>/donate/" class="elementor-item menu-link has-submenu" id="sm-1680335304563758-5" aria-haspopup="true" aria-controls="sm-1680335304563758-6" aria-expanded="false">DONATE<span role="presentation" class="dropdown-menu-toggle"></span><span class="sub-arrow"><i class="fas fa-caret-down"></i></span></a>
                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-1680335304563758-6" role="group" aria-hidden="true" aria-labelledby="sm-1680335304563758-5" aria-expanded="false">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6713"><a href="<?= site_url();?>/ukraine/" class="elementor-sub-item menu-link">Ukraine</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1236"><a href="<?= site_url();?>/covid-19-response/" class="elementor-sub-item menu-link">Covid-19 Response</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1235"><a href="<?= site_url();?>/disaster/" class="elementor-sub-item menu-link">Disaster</a></li>
                        </ul>
                        </li>
                        </ul>			</nav>
                                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false" style="">
                                    <i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i>			<span class="elementor-screen-only">Menu</span>
                                </div>
                                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true" style="top: 51.8438px; width: 1349px; left: 0px;">
                                        <ul id="menu-2-3f25bd0" class="elementor-nav-menu" data-smartmenus-id="16803353045813582"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-984"><a href="<?= site_url();?>/" class="elementor-item menu-link" tabindex="-1">HOME</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1448"><a href="<?= site_url();?>/what-we-do/" class="elementor-item menu-link has-submenu" tabindex="-1" id="sm-16803353045813582-1" aria-haspopup="true" aria-controls="sm-16803353045813582-2" aria-expanded="false">WHAT WE DO<span role="presentation" class="dropdown-menu-toggle"></span><span class="sub-arrow"><i class="fas fa-caret-down"></i></span></a>
                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16803353045813582-2" role="group" aria-hidden="true" aria-labelledby="sm-16803353045813582-1" aria-expanded="false">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1215"><a href="<?= site_url();?>/about-ready-responders-network/" class="elementor-sub-item menu-link" tabindex="-1">About Ready Responders Network</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10419"><a href="<?= site_url();?>/about-disaster-volunteerism-academy/" class="elementor-sub-item menu-link" tabindex="-1">About Disaster Volunteerism Academy</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985"><a href="<?= site_url();?>/donation-drive/" class="elementor-sub-item menu-link" tabindex="-1">Donation Drive</a></li>
                        </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-979"><a href="<?= site_url();?>/world-cares-center/" class="elementor-item menu-link" tabindex="-1">WORLD CARES CENTER</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1518"><a href="<?= site_url();?>/training/" class="elementor-item menu-link has-submenu" tabindex="-1" id="sm-16803353045813582-3" aria-haspopup="true" aria-controls="sm-16803353045813582-4" aria-expanded="false">TRAINING<span role="presentation" class="dropdown-menu-toggle"></span><span class="sub-arrow"><i class="fas fa-caret-down"></i></span></a>
                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16803353045813582-4" role="group" aria-hidden="true" aria-labelledby="sm-16803353045813582-3" aria-expanded="false">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1227"><a href="<?= site_url();?>/disaster-volunteer-credentials1/" class="elementor-sub-item menu-link" tabindex="-1">Disaster Volunteer Credentials</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1226"><a href="<?= site_url();?>/standalone-tranning/" class="elementor-sub-item menu-link" tabindex="-1">Standalone Training</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1225"><a href="<?= site_url();?>/covid-training/" class="elementor-sub-item menu-link" tabindex="-1">Covid Training</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1224"><a href="<?= site_url();?>/course/other-languages/" class="elementor-sub-item menu-link" tabindex="-1">Other Languages</a></li>
                        </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1488"><a href="<?= site_url();?>/cordination/" class="elementor-item menu-link" tabindex="-1">COORDINATION</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-982"><a href="<?= site_url();?>/blogs/" class="elementor-item menu-link" tabindex="-1">BLOG</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-983"><a href="<?= site_url();?>/contact-us/" class="elementor-item menu-link" tabindex="-1">CONTACT US</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-9121"><a href="<?= site_url();?>/donate/" class="elementor-item menu-link has-submenu" tabindex="-1" id="sm-16803353045813582-5" aria-haspopup="true" aria-controls="sm-16803353045813582-6" aria-expanded="false">DONATE<span role="presentation" class="dropdown-menu-toggle"></span><span class="sub-arrow"><i class="fas fa-caret-down"></i></span></a>
                        <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16803353045813582-6" role="group" aria-hidden="true" aria-labelledby="sm-16803353045813582-5" aria-expanded="false">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6713"><a href="<?= site_url();?>/ukraine/" class="elementor-sub-item menu-link" tabindex="-1">Ukraine</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1236"><a href="<?= site_url();?>/covid-19-response/" class="elementor-sub-item menu-link" tabindex="-1">Covid-19 Response</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1235"><a href="<?= site_url();?>/disaster/" class="elementor-sub-item menu-link" tabindex="-1">Disaster</a></li>
                        </ul>
                        </li>
                        </ul>			</nav>


				</div>
			</div>
		</div>
	        </div>
			<div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9562f59" data-id="9562f59" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-4384a0a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4384a0a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5914c11" data-id="5914c11" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7b6c5cc elementor-widget elementor-widget-button" data-id="7b6c5cc" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			    <a href="<?= site_url();?>/login" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Login</span>
		        </span>
				</a>
		    </div>
			</div>
		</div>
	</div>
		</div>
				<div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f5f5f7a" data-id="f5f5f7a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-eb3f1ec elementor-widget elementor-widget-button" data-id="eb3f1ec" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="<?= site_url();?>/signup/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Signup</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
</div>

<div class="header_contant_main">

<div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4fd6568" data-id="4fd6568" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-44db777 elementor-absolute elementor-widget elementor-widget-heading" data-id="44db777" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.9.0 - 06-12-2022 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Standalone Tranning</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-3b2b746 elementor-widget elementor-widget-text-editor" data-id="3b2b746" data-element_type="widget" data-widget_type="text-editor.default">
		<div class="elementor-widget-container">
			<style>/*! elementor - v3.9.0 - 06-12-2022 */
                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
            </style>				
            <p>We partner with NGOs, leading agencies, and experts in disaster response humanitarian</p>
            <p>&nbsp;aid to make the best one stop disaster training and coordination portal available to you&nbsp;</p>
            <p>anywhere, anytime, for FREE. Select the training you need, get credentialed</p>
        </div>
	</div>
</div>
</div>
</div>
</div>


