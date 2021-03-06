
<?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $messages=$_POST['messages'];

    $to="contactus@trofiteam.com";
    $subject="Form Website Visitors";
    $message="
    <!DOCTYPE html>
<html>
	<head>
	<style>
	    table{
	        width: 100%;
	        padding: 10px;
	        box-shadow: 1px 2px 10px gray;
	    }
	    table thead{
	        padding: 10px;
	        background: #ECF0F1;
	        border: 1px;
	        font-weight: bold;
	    }
	    table tr{
	        padding: 10px;
	        background: #ECF0F1;
	        border: 1px;
	    }
	    table td{
	        text-align: center;
	        padding: 10px;
	        border: 1px;
	        color: black;
	    }
	</style>
	</head>
	<body>
		<div>
			<div style='text-align: center;'>
				<h1 style='margin:0; padding:0; margin-bottom: 50px;'>
				Website Visitor Messages</h1>
			</div>
			<table>
				<thead>
					<td>Name</td>
					<td>Email</td>
					<td>Phone</td>
					<td>Messages</td>
				</thead>
				<tr>
					<td>$name</td>
					<td>$email</td>
					<td>$phone</td>
					<td>$messages</td>
				</tr>
			</table>
		</div>
	</body>
</html>
    ";
    
    $headers="From: ".$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion()."MIME-Version: 1.0\r\n"."Content-Type: text/html; charset=ISO-8859-1\r\n";

    if(mail($to, $subject, $message, $headers)){
      $msg = "Sent Successfully! Thank you"."<br>".$name;
    }
    else{
      $msg = "not sent";
    }
  }
?>

<!DOCTYPE html>
<html class="no-overflow-y avada-html-layout-wide avada-html-header-position-top avada-is-100-percent-template" lang="en-US">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Trofi &#8211; Mobile App</title>
        <meta name="robots" content="noindex, nofollow" />
        <link rel="dns-prefetch" href="//s.w.org" />
        <link rel="shortcut icon" href="images/Favicon.jpg" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <link rel="stylesheet" id="fusion-dynamic-css-css" href="css/style2.css?ver=3.2.1" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery.min.js?ver=3.5.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="js/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
        
        <script type="text/javascript">
            var doc = document.documentElement;
            doc.setAttribute("data-useragent", navigator.userAgent);
        </script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

   
    </head>

    <body
        class="home page-template page-template-100-width page-template-100-width-php page page-id-581 fusion-image-hovers fusion-pagination-sizing fusion-button_size-xlarge fusion-button_type-3d fusion-button_span-no avada-image-rollover-circle-yes avada-image-rollover-yes avada-image-rollover-direction-left fusion-body ltr fusion-sticky-header no-mobile-sticky-header no-mobile-slidingbar fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow-none layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-left mobile-menu-design-modern fusion-show-pagination-text fusion-header-layout-v1 avada-responsive avada-footer-fx-bg-parallax avada-menu-highlight-style-arrow fusion-search-form-classic fusion-main-menu-search-dropdown fusion-avatar-square avada-sticky-shrinkage avada-blog-layout-large avada-blog-archive-layout-large avada-header-shadow-no avada-menu-icon-position-left avada-has-mainmenu-dropdown-divider avada-has-breadcrumb-mobile-hidden avada-has-page-title-mobile-height-auto avada-has-titlebar-hide avada-has-pagination-padding avada-flyout-menu-direction-fade avada-ec-views-v1"
    >
        
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        <div id="boxed-wrapper">
            <div class="fusion-sides-frame"></div>
            <div id="wrapper" class="fusion-wrapper">
                <div id="home" style="position: relative; top: -1px;"></div>

                <header class="fusion-header-wrapper">
                    <div class="fusion-header-v1 fusion-logo-alignment fusion-logo-left fusion-sticky-menu- fusion-sticky-logo- fusion-mobile-logo- fusion-mobile-menu-design-modern">
                        <div class="fusion-header-sticky-height"></div>
                        <div class="fusion-header">
                            <div class="fusion-row">
                                <div class="fusion-logo" data-margin-top="10px" data-margin-bottom="10px" data-margin-left="0px" data-margin-right="0px">
                                    <a class="fusion-logo-link" href="index.php">
                                        <!-- standard logo -->
                                        <img src="images/Default-logo.jpg" srcset="images/Default-logo.jpg 1x" width="65" height="80" alt="Trofi Logo" data-retina_logo_url="" class="fusion-standard-logo" data-logo-height="80" data-logo-width="65" style="height: 55px;">
                                    </a>
                                </div>
                                <nav class="fusion-main-menu" aria-label="Main Menu">
                                    <ul id="menu-app-main-menu" class="fusion-menu">
                                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-623" data-item-id="623">
                                            <a href="#home" class="fusion-arrow-highlight">
                                                <span class="menu-text">
                                                    HOME
                                                    <span class="fusion-arrow-svg">
                                                        <svg height="12px" width="23px">
                                                            <path d="M0 0 L11.5 12 L23 0 Z" fill="#fe0000" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11" data-item-id="11">
                                            <a href="#intro" class="fusion-arrow-highlight">
                                                <span class="menu-text">
                                                    INTRO
                                                    <span class="fusion-arrow-svg">
                                                        <svg height="12px" width="23px">
                                                            <path d="M0 0 L11.5 12 L23 0 Z" fill="#fe0000" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12" data-item-id="12">
                                            <a href="#features" class="fusion-arrow-highlight">
                                                <span class="menu-text">
                                                    FEATURES
                                                    <span class="fusion-arrow-svg">
                                                        <svg height="12px" width="23px">
                                                            <path d="M0 0 L11.5 12 L23 0 Z" fill="#fe0000" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li id="menu-item-164" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-164" data-item-id="164">
                                            <a href="#who" class="fusion-arrow-highlight">
                                                <span class="menu-text">
                                                    WHO WE ARE
                                                    <span class="fusion-arrow-svg">
                                                        <svg height="12px" width="23px">
                                                            <path d="M0 0 L11.5 12 L23 0 Z" fill="#fe0000" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15" data-item-id="15">
                                            <a href="#contact" class="fusion-arrow-highlight">
                                                <span class="menu-text">
                                                    CONTACT
                                                    <span class="fusion-arrow-svg">
                                                        <svg height="12px" width="23px">
                                                            <path d="M0 0 L11.5 12 L23 0 Z" fill="#fe0000" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="fusion-mobile-menu-icons">
                                    <a href="#" class="fusion-icon fusion-icon-bars" aria-label="Toggle mobile menu" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </div>

                                <nav class="fusion-mobile-nav-holder fusion-mobile-menu-text-align-left" aria-label="Main Menu Mobile"></nav>
                            </div>
                        </div>
                    </div>
                    <div class="fusion-clearfix"></div>
                </header>

                <div id="sliders-container">
                    <div id="fusion-slider-3" data-id="3" class="fusion-slider-container fusion-slider-581" style="height: 800px; max-width: 100%;">
                        <style type="text/css">
                            #fusion-slider-3 .flex-direction-nav a {
                                width: 63px;
                                height: 63px;
                                line-height: 63px;
                                font-size: 25px;
                            }
                        </style>
                        <div class="fusion-slider-loading">Loading...</div>
                        <div
                            class="tfs-slider flexslider main-flex"
                            style="max-width: 100%; --typography_sensitivity: 1;"
                            data-slider_width="100%"
                            data-slider_height="800px"
                            data-full_screen="1"
                            data-parallax="1"
                            data-nav_arrows="0"
                            data-autoplay="1"
                            data-loop="0"
                            data-animation="fade"
                            data-slideshow_speed="7000"
                            data-animation_speed="600"
                            data-slider_content_width=""
                            data-typo_sensitivity="1"
                            data-typo_factor="1.5"
                            data-slider_indicator=""
                            data-orderby="date"
                            data-order="DESC"
                            data-nav_box_width="63px"
                            data-nav_box_height="63px"
                            data-nav_arrow_size="25px"
                            data-slider_indicator_color="#ffffff"
                        >
                            <ul class="slides" style="max-width: 100%;">
                                <li class="slide-id-7" data-mute="yes" data-loop="yes" data-autoplay="yes">
                                    <div class="slide-content-container slide-content-center" style="display: none;">
                                        <div class="slide-content" style="">
                                            <div class="heading">
                                                <div class="fusion-title-sc-wrapper" style="">
                                                    <style type="text/css"></style>
                                                    <div class="fusion-title title fusion-title-1 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two" style="margin-top: 0px; margin-bottom: 0px;">
                                                        <h2 class="title-heading-center" style="margin: 0; color: #fff; font-size: 70px; line-height: 84px;">Trofi App Makes Your Life Easy</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="fusion-title-sc-wrapper" style="">
                                                    <style type="text/css"></style>
                                                    <div class="fusion-title title fusion-title-2 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three" style="margin-top: 0px; margin-bottom: 0px;">
                                                        <h3 class="title-heading-center" style="margin: 0; color: #fff; font-size: 42px; line-height: 50.4px;">Homemade Food Sharing Made Easier Than Ever!</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="background background-image"
                                        style="
                                            background-image: url(images/young-beautiful-woman.jpg);
                                            max-width: 100%;
                                            height: 800px;
                                            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/young-beautiful-woman.jpg', sizingMethod='scale');
                                        "
                                        data-imgwidth="2000"
                                    ></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <main id="main" class="clearfix width-100">
                    <div class="fusion-row" style="max-width: 100%;">
                        <section id="content" class="full-width">
                            <div id="post-581" class="post-581 page type-page status-publish hentry">
                                <div class="post-content">
                                    <div id="intro">
                                        <div
                                            class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                                            style="background-color: #ffffff; background-position: left top; background-repeat: repeat; border-width: 0px 0px 0px 0px; border-color: #eae9e9; border-style: solid;"
                                        >
                                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-stretch fusion-flex-justify-content-center" style="max-width: 1216.8px; margin-left: calc(-4% / 2); margin-right: calc(-4% / 2);">
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_2 1_2 fusion-flex-column">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-center fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <style type="text/css">
                                                            @media only screen and (max-width: 800px) {
                                                                .fusion-title.fusion-title-3 {
                                                                    margin-top: 0px !important;
                                                                    margin-bottom: 20px !important;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fusion-title title fusion-title-3 fusion-title-text fusion-title-size-two" style="font-size: 30px; margin-top: 0px; margin-bottom: 20px;">
                                                            <div class="title-sep-container title-sep-container-left fusion-no-large-visibility fusion-no-medium-visibility fusion-no-small-visibility">
                                                                <div class="title-sep sep-" style="border-color: #e0dede;"></div>
                                                            </div>
                                                            <h2 class="title-heading-left" style="font-family: 'Poppins'; font-weight: 600; margin: 0; font-size: 1em; color: #000000;">All About Trofi App</h2>
                                                            <div class="title-sep-container title-sep-container-right"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                        </div>
                                                        <div
                                                            class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-stretch fusion-flex-justify-content-center"
                                                            style="width: 104% !important; max-width: 104% !important; margin-left: calc(-4% / 2); margin-right: calc(-4% / 2);"
                                                        >
                                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-0 fusion_builder_column_inner_1_1 1_1 fusion-flex-column">
                                                                <div
                                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                                    style="
                                                                        background-position: left top;
                                                                        background-repeat: no-repeat;
                                                                        -webkit-background-size: cover;
                                                                        -moz-background-size: cover;
                                                                        -o-background-size: cover;
                                                                        background-size: cover;
                                                                        border-width: 0 0 0 3px;
                                                                        border-color: #fe0000;
                                                                        border-style: dotted;
                                                                        padding: 20px 0px 0px 30px;
                                                                    "
                                                                >
                                                                    <div class="fusion-text fusion-text-1" style="color: #333333; transform: translate3d(0, 0, 0);">
                                                                        <p>
                                                                            Trofi App is a marketplace for homemade foods that connects hungry foodies like you with local community chefs.<br />
                                                                            It&#8217;s an innovative new way to get healthy, homemade food delivered right to your door from your next-door home chef.<br />
                                                                            Anyone can use Trofi to become a chef entrepreneur, sell their special homemade meals and Meal-Packages, and share their experiences with the rest of the world via
                                                                            social media.<br />
                                                                            Find local home-based cooks in your region, peruse their unique menus, and delegate the cooking to them!
                                                                        </p>
                                                                    </div>
                                                                    <ul class="fusion-checklist fusion-checklist-1" style="font-size: 18px; line-height: 30.6px;">
                                                                        <li class="fusion-li-item">
                                                                            <span style="height: 30.6px; width: 30.6px; margin-right: 12.6px;" class="icon-wrapper circle-no">
                                                                                <i class="fusion-li-icon fa-concierge-bell fas" style="color: #fe0000;" aria-hidden="true"></i>
                                                                            </span>
                                                                            <div class="fusion-li-item-content" style="margin-left: 43.2px;">
                                                                                <span style="color: #333333;">
                                                                                    Trofi&#8217;s mission is to reinvent the meal preparation experience while providing you with peace of mind.<br />
                                                                                    Discover a whole new way to eat by downloading our app today.
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-body .fusion-builder-nested-column-0 {
                                                                    width: 100% !important;
                                                                    margin-top: 0px;
                                                                    margin-bottom: 20px;
                                                                }
                                                                .fusion-builder-nested-column-0 > .fusion-column-wrapper {
                                                                    padding-top: 20px !important;
                                                                    padding-right: 0px !important;
                                                                    margin-right: 1.92%;
                                                                    padding-bottom: 0px !important;
                                                                    padding-left: 30px !important;
                                                                    margin-left: 1.92%;
                                                                }
                                                                @media only screen and (max-width: 800px) {
                                                                    .fusion-body .fusion-builder-nested-column-0 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-0 > .fusion-column-wrapper {
                                                                        margin-right: 1.92%;
                                                                        margin-left: 1.92%;
                                                                    }
                                                                }
                                                                @media only screen and (max-width: 640px) {
                                                                    .fusion-body .fusion-builder-nested-column-0 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-0 > .fusion-column-wrapper {
                                                                        margin-right: 1.92%;
                                                                        margin-left: 1.92%;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                        <div
                                                            class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-stretch fusion-flex-justify-content-center"
                                                            style="width: 104% !important; max-width: 104% !important; margin-left: calc(-4% / 2); margin-right: calc(-4% / 2);"
                                                        >
                                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-1 fusion_builder_column_inner_1_3 1_3 fusion-flex-column">
                                                                <div
                                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                                    style="
                                                                        background-position: left top;
                                                                        background-repeat: no-repeat;
                                                                        -webkit-background-size: cover;
                                                                        -moz-background-size: cover;
                                                                        -o-background-size: cover;
                                                                        background-size: cover;
                                                                        padding: 0px 0px 0px 0px;
                                                                    "
                                                                >
                                                                    <div>
                                                                        <span class="fusion-imageframe imageframe-none imageframe-1 hover-type-none">
                                                                            <a class="fusion-no-lightbox" href="#contact" target="_self" aria-label="Google Store">
                                                                                <img width="200" height="60" src="images/Google-Store.png" class="img-responsive wp-image-688" />
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-body .fusion-builder-nested-column-1 {
                                                                    width: 33.333333333333% !important;
                                                                    margin-top: 0px;
                                                                    margin-bottom: 20px;
                                                                }
                                                                .fusion-builder-nested-column-1 > .fusion-column-wrapper {
                                                                    padding-top: 0px !important;
                                                                    padding-right: 0px !important;
                                                                    margin-right: 5.76%;
                                                                    padding-bottom: 0px !important;
                                                                    padding-left: 0px !important;
                                                                    margin-left: 5.76%;
                                                                }
                                                                @media only screen and (max-width: 800px) {
                                                                    .fusion-body .fusion-builder-nested-column-1 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-1 > .fusion-column-wrapper {
                                                                        margin-right: 1.92%;
                                                                        margin-left: 1.92%;
                                                                    }
                                                                }
                                                                @media only screen and (max-width: 640px) {
                                                                    .fusion-body .fusion-builder-nested-column-1 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-1 > .fusion-column-wrapper {
                                                                        margin-right: 1.92%;
                                                                        margin-left: 1.92%;
                                                                    }
                                                                }
                                                            </style>
                                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-2 fusion_builder_column_inner_1_3 1_3 fusion-flex-column">
                                                                <div
                                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                                    style="
                                                                        background-position: left top;
                                                                        background-repeat: no-repeat;
                                                                        -webkit-background-size: cover;
                                                                        -moz-background-size: cover;
                                                                        -o-background-size: cover;
                                                                        background-size: cover;
                                                                        padding: 0px 0px 0px 0px;
                                                                    "
                                                                >
                                                                    <div>
                                                                        <span class="fusion-imageframe imageframe-none imageframe-2 hover-type-none">
                                                                            <a class="fusion-no-lightbox" href="#contact" target="_self" aria-label="App Store">
                                                                                <img width="200" height="60" src="images/App-Store.png" class="img-responsive wp-image-687" />
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-body .fusion-builder-nested-column-2 {
                                                                    width: 33.333333333333% !important;
                                                                    margin-top: 0px;
                                                                    margin-bottom: 20px;
                                                                }
                                                                .fusion-builder-nested-column-2 > .fusion-column-wrapper {
                                                                    padding-top: 0px !important;
                                                                    padding-right: 0px !important;
                                                                    margin-right: 5.76%;
                                                                    padding-bottom: 0px !important;
                                                                    padding-left: 0px !important;
                                                                    margin-left: 5.76%;
                                                                }
                                                                @media only screen and (max-width: 800px) {
                                                                    .fusion-body .fusion-builder-nested-column-2 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-2 > .fusion-column-wrapper {
                                                                        margin-right: 1.92%;
                                                                        margin-left: 1.92%;
                                                                    }
                                                                }
                                                                @media only screen and (max-width: 640px) {
                                                                    .fusion-body .fusion-builder-nested-column-2 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-2 > .fusion-column-wrapper {
                                                                        margin-right: 1.92%;
                                                                        margin-left: 1.92%;
                                                                    }
                                                                }
                                                            </style>
                                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-3 fusion_builder_column_inner_1_3 1_3 fusion-flex-column">
                                                                <div
                                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                                    style="
                                                                        background-position: left top;
                                                                        background-repeat: no-repeat;
                                                                        -webkit-background-size: cover;
                                                                        -moz-background-size: cover;
                                                                        -o-background-size: cover;
                                                                        background-size: cover;
                                                                        padding: 0px 0px 0px 0px;
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-body .fusion-builder-nested-column-3 {
                                                                    width: 33.333333333333% !important;
                                                                    margin-top: 0px;
                                                                    margin-bottom: 20px;
                                                                }
                                                                .fusion-builder-nested-column-3 > .fusion-column-wrapper {
                                                                    padding-top: 0px !important;
                                                                    padding-right: 0px !important;
                                                                    margin-right: 5.76%;
                                                                    padding-bottom: 0px !important;
                                                                    padding-left: 0px !important;
                                                                    margin-left: 5.76%;
                                                                }
                                                                @media only screen and (max-width: 800px) {
                                                                    .fusion-body .fusion-builder-nested-column-3 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-3 > .fusion-column-wrapper {
                                                                        margin-right: 1.92%;
                                                                        margin-left: 1.92%;
                                                                    }
                                                                }
                                                                @media only screen and (max-width: 640px) {
                                                                    .fusion-body .fusion-builder-nested-column-3 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-3 > .fusion-column-wrapper {
                                                                        margin-right: 1.92%;
                                                                        margin-left: 1.92%;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-0 {
                                                        width: 50% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 20px;
                                                    }
                                                    .fusion-builder-column-0 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 3.84%;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 3.84%;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-0 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-0 > .fusion-column-wrapper {
                                                            margin-right: 1.92%;
                                                            margin-left: 1.92%;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-0 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-0 > .fusion-column-wrapper {
                                                            margin-right: 1.92%;
                                                            margin-left: 1.92%;
                                                        }
                                                    }
                                                </style>
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_1_2 1_2 fusion-flex-column">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-center fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <div>
                                                            <span class="fusion-imageframe imageframe-none imageframe-3 hover-type-none">
                                                                <img
                                                                    width="600"
                                                                    height="438"
                                                                    title="About Trofi"
                                                                    src="images/About-Trofi.png"
                                                                    class="img-responsive wp-image-679"
                                                                    srcset="
                                                                        images/About-Trofi-200x146.png 200w,
                                                                        images/About-Trofi-400x292.png 400w,
                                                                        images/About-Trofi.png         600w
                                                                    "
                                                                    sizes="(max-width: 800px) 100vw, (max-width: 640px) 100vw, 600px"
                                                                />
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-1 {
                                                        width: 50% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 20px;
                                                    }
                                                    .fusion-builder-column-1 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 3.84%;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 3.84%;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-1 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-1 > .fusion-column-wrapper {
                                                            margin-right: 1.92%;
                                                            margin-left: 1.92%;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-1 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-1 > .fusion-column-wrapper {
                                                            margin-right: 1.92%;
                                                            margin-left: 1.92%;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                            <style type="text/css">
                                                .fusion-body .fusion-flex-container.fusion-builder-row-1 {
                                                    padding-top: 50px;
                                                    margin-top: 0px;
                                                    padding-right: 30px;
                                                    padding-bottom: 0px;
                                                    margin-bottom: 0px;
                                                    padding-left: 30px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div id="features">
                                        <div
                                            class="fusion-fullwidth fullwidth-box fusion-builder-row-2 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                                            style="background-color: #ffffff; background-position: left top; background-repeat: repeat; border-width: 0px 0px 0px 0px; border-color: rgba(255, 255, 255, 0.05); border-style: solid;"
                                        >
                                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start" style="max-width: calc(1170px + 0px); margin-left: calc(-0px / 2); margin-right: calc(-0px / 2);">
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_1 1_1 fusion-flex-column fusion-flex-align-self-flex-start fusion-column-no-min-height">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <style type="text/css">
                                                            @media only screen and (max-width: 800px) {
                                                                .fusion-title.fusion-title-4 {
                                                                    margin-top: 0px !important;
                                                                    margin-bottom: 10px !important;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fusion-title title fusion-title-4 fusion-title-center fusion-title-text fusion-title-size-two" style="margin-top: 0px; margin-bottom: 10px;">
                                                            <div class="title-sep-container title-sep-container-left"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                            <h2 class="title-heading-center" style="margin: 0;">WHY SHOULD I USE TROFI?</h2>
                                                            <div class="title-sep-container title-sep-container-right"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                        </div>
                                                        <style type="text/css">
                                                            @media only screen and (max-width: 800px) {
                                                                .fusion-title.fusion-title-5 {
                                                                    margin-top: 0px !important;
                                                                    margin-bottom: 0px !important;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fusion-title title fusion-title-5 fusion-title-center fusion-title-text fusion-title-size-three" style="font-size: 18px; margin-top: 0px; margin-bottom: 0px;">
                                                            <div class="title-sep-container title-sep-container-left"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                            <h3 class="title-heading-center" style="margin: 0; font-size: 1em;">The Reasons You&#8217;ll Love It</h3>
                                                            <div class="title-sep-container title-sep-container-right"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-2 {
                                                        width: 100% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 60px;
                                                    }
                                                    .fusion-builder-column-2 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 0px;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 0px;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-2 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-2 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-2 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-2 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                </style>
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion_builder_column_1_1 1_1 fusion-flex-column fusion-flex-align-self-flex-start fusion-column-no-min-height">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <div class="fusion-separator" style="align-self: center; margin-left: auto; margin-right: auto; margin-top: -5px; margin-bottom: -5px; width: 100%; max-width: 100px;"></div>
                                                        <div
                                                            class="fusion-content-boxes content-boxes columns row fusion-columns-3 fusion-columns-total-3 fusion-content-boxes-1 content-boxes-icon-with-title content-left"
                                                            data-animationOffset="100%"
                                                            style="margin-top: 0px; margin-bottom: 20px;"
                                                        >
                                                            <style type="text/css">
                                                                .fusion-content-boxes-1 .heading .content-box-heading {
                                                                    color: #000000;
                                                                }
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .heading .content-box-heading,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .heading .heading-link .content-box-heading,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .heading .content-box-heading,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .heading .heading-link .content-box-heading,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more::after,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more::before,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .fusion-read-more:hover:after,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .fusion-read-more:hover:before,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .fusion-read-more:hover,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more::after,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more::before,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .icon .circle-no,
                                                                .fusion-content-boxes-1 .heading .heading-link:hover .content-box-heading {
                                                                    color: #e91e63;
                                                                }
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .icon .circle-no {
                                                                    color: #e91e63 !important;
                                                                }
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box.link-area-box-hover .fusion-content-box-button {
                                                                    background: #208dcc;
                                                                    color: #ffffff;
                                                                }
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box.link-area-box-hover .fusion-content-box-button .fusion-button-text {
                                                                    color: #ffffff;
                                                                }
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .heading .icon > span {
                                                                    background-color: transparent !important;
                                                                }
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .heading .icon > span {
                                                                    border-color: #e91e63 !important;
                                                                }
                                                            </style>
                                                            <div class="fusion-column content-box-column content-box-column content-box-column-1 col-lg-4 col-md-4 col-sm-4 fusion-content-box-hover content-box-column-first-in-row">
                                                                <div
                                                                    class="col content-box-wrapper content-wrapper link-area-link-icon icon-hover-animation-none"
                                                                    style="background-color: rgba(255, 255, 255, 0);"
                                                                    data-animationOffset="100%"
                                                                >
                                                                    <div class="heading heading-with-icon icon-left">
                                                                        <div class="icon">
                                                                            <i
                                                                                style="background-color: transparent; border-color: transparent; height: auto; width: 21px; line-height: normal; color: #607d8b; font-size: 21px;"
                                                                                aria-hidden="true"
                                                                                class="fontawesome-icon fa-shipping-fast fas circle-no"
                                                                            ></i>
                                                                        </div>
                                                                        <h2 class="content-box-heading" style="font-size: 18px; line-height: 23px;">Instant shipping feature</h2>
                                                                    </div>
                                                                    <div class="fusion-clearfix"></div>
                                                                    <div class="content-container" style="color: #333333;">
                                                                        Trofi ensures that your delicious meals arrive fast and fresh from your chef&#8217;s kitchen. With our instant shipping feature, we allow our users and chefs to ship
                                                                        their homemade meals and enabling our chefs to solely focus on creating the most delicious meals possible.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fusion-column content-box-column content-box-column content-box-column-2 col-lg-4 col-md-4 col-sm-4 fusion-content-box-hover">
                                                                <div
                                                                    class="col content-box-wrapper content-wrapper link-area-link-icon icon-hover-animation-none"
                                                                    style="background-color: rgba(255, 255, 255, 0);"
                                                                    data-animationOffset="100%"
                                                                >
                                                                    <div class="heading heading-with-icon icon-left">
                                                                        <div class="icon">
                                                                            <i
                                                                                style="background-color: transparent; border-color: transparent; height: auto; width: 21px; line-height: normal; color: #607d8b; font-size: 21px;"
                                                                                aria-hidden="true"
                                                                                class="fontawesome-icon fa-utensils fas circle-no"
                                                                            ></i>
                                                                        </div>
                                                                        <h2 class="content-box-heading" style="font-size: 18px; line-height: 23px;">MealPackage option</h2>
                                                                    </div>
                                                                    <div class="fusion-clearfix"></div>
                                                                    <div class="content-container" style="color: #333333;">
                                                                        <p>
                                                                            We recognize that preparing your meals for the rest of the week is a pain and requires a considerable amount of time and effort on your part. You can order meal
                                                                            packages from your favorite chefs via the Trofi App and have several meals for the rest of the week.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="fusion-column content-box-column content-box-column content-box-column-3 col-lg-4 col-md-4 col-sm-4 fusion-content-box-hover content-box-column-last content-box-column-last-in-row"
                                                            >
                                                                <div
                                                                    class="col content-box-wrapper content-wrapper link-area-link-icon icon-hover-animation-none"
                                                                    style="background-color: rgba(255, 255, 255, 0);"
                                                                    data-animationOffset="100%"
                                                                >
                                                                    <div class="heading heading-with-icon icon-left">
                                                                        <div class="icon">
                                                                            <i
                                                                                style="background-color: transparent; border-color: transparent; height: auto; width: 21px; line-height: normal; color: #607d8b; font-size: 21px;"
                                                                                aria-hidden="true"
                                                                                class="fontawesome-icon fa-share-alt fas circle-no"
                                                                            ></i>
                                                                        </div>
                                                                        <h2 class="content-box-heading" style="font-size: 18px; line-height: 23px;">Social media</h2>
                                                                    </div>
                                                                    <div class="fusion-clearfix"></div>
                                                                    <div class="content-container" style="color: #333333;">
                                                                        By sharing pictures of your food, liking and rating other people&#8217;s experiences, and tagging your favorite chef for everyone to see, you can share your food
                                                                        experience with the world.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .heading-link:hover .icon i.circle-yes,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box:hover .heading-link .icon i.circle-yes,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .heading .icon i.circle-yes,
                                                                .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .heading .icon i.circle-yes {
                                                                    background-color: transparent !important;
                                                                    border-color: #e91e63 !important;
                                                                }
                                                            </style>
                                                            <div class="fusion-clearfix"></div>
                                                        </div>
                                                        <div
                                                            class="fusion-content-boxes content-boxes columns row fusion-columns-2 fusion-columns-total-2 fusion-content-boxes-2 content-boxes-icon-with-title content-left"
                                                            data-animationOffset="100%"
                                                            style="margin-top: 0px; margin-bottom: 60px;"
                                                        >
                                                            <style type="text/css">
                                                                .fusion-content-boxes-2 .heading .content-box-heading {
                                                                    color: #000000;
                                                                }
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-link-icon-hover .heading .content-box-heading,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-link-icon-hover .heading .heading-link .content-box-heading,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box-hover .heading .content-box-heading,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box-hover .heading .heading-link .content-box-heading,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more::after,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more::before,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .fusion-read-more:hover:after,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .fusion-read-more:hover:before,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .fusion-read-more:hover,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more::after,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more::before,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-link-icon-hover .icon .circle-no,
                                                                .fusion-content-boxes-2 .heading .heading-link:hover .content-box-heading {
                                                                    color: #e91e63;
                                                                }
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box-hover .icon .circle-no {
                                                                    color: #e91e63 !important;
                                                                }
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box.link-area-box-hover .fusion-content-box-button {
                                                                    background: #208dcc;
                                                                    color: #ffffff;
                                                                }
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box.link-area-box-hover .fusion-content-box-button .fusion-button-text {
                                                                    color: #ffffff;
                                                                }
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-link-icon-hover .heading .icon > span {
                                                                    background-color: transparent !important;
                                                                }
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box-hover .heading .icon > span {
                                                                    border-color: #e91e63 !important;
                                                                }
                                                            </style>
                                                            <div class="fusion-column content-box-column content-box-column content-box-column-1 col-lg-6 col-md-6 col-sm-6 fusion-content-box-hover content-box-column-first-in-row">
                                                                <div
                                                                    class="col content-box-wrapper content-wrapper link-area-link-icon icon-hover-animation-none"
                                                                    style="background-color: rgba(255, 255, 255, 0);"
                                                                    data-animationOffset="100%"
                                                                >
                                                                    <div class="heading heading-with-icon icon-left">
                                                                        <div class="icon">
                                                                            <i
                                                                                style="background-color: transparent; border-color: transparent; height: auto; width: 21px; line-height: normal; color: #607d8b; font-size: 21px;"
                                                                                aria-hidden="true"
                                                                                class="fontawesome-icon fa-user-check fas circle-no"
                                                                            ></i>
                                                                        </div>
                                                                        <h2 class="content-box-heading" style="font-size: 18px; line-height: 23px;">Chef licensing process</h2>
                                                                    </div>
                                                                    <div class="fusion-clearfix"></div>
                                                                    <div class="content-container" style="color: #333333;">
                                                                        <p>
                                                                            Trofi helps our aspiring chefs in obtaining their lawful &#8220;Chef License&#8221; so that they can start their own business and earn a steady income.<br />
                                                                            We want to promote you to be our star chef and provide you with a long-term source of income.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="fusion-column content-box-column content-box-column content-box-column-2 col-lg-6 col-md-6 col-sm-6 fusion-content-box-hover content-box-column-last content-box-column-last-in-row"
                                                            >
                                                                <div
                                                                    class="col content-box-wrapper content-wrapper link-area-link-icon icon-hover-animation-none"
                                                                    style="background-color: rgba(255, 255, 255, 0);"
                                                                    data-animationOffset="100%"
                                                                >
                                                                    <div class="heading heading-with-icon icon-left">
                                                                        <div class="icon">
                                                                            <i
                                                                                style="background-color: transparent; border-color: transparent; height: auto; width: 21px; line-height: normal; color: #607d8b; font-size: 21px;"
                                                                                aria-hidden="true"
                                                                                class="fontawesome-icon fa-cocktail fas circle-no"
                                                                            ></i>
                                                                        </div>
                                                                        <h2 class="content-box-heading" style="font-size: 18px; line-height: 23px;">Cultural Tags for every food types</h2>
                                                                    </div>
                                                                    <div class="fusion-clearfix"></div>
                                                                    <div class="content-container" style="color: #333333;">
                                                                        Do you prefer a different type of food? No problem.<br />
                                                                        Filter and find the food style you like from many food tags that we have and find the menu you&#8217;re searching for.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .heading-link:hover .icon i.circle-yes,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box:hover .heading-link .icon i.circle-yes,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-link-icon-hover .heading .icon i.circle-yes,
                                                                .fusion-content-boxes-2 .fusion-content-box-hover .link-area-box-hover .heading .icon i.circle-yes {
                                                                    background-color: transparent !important;
                                                                    border-color: #e91e63 !important;
                                                                }
                                                            </style>
                                                            <div class="fusion-clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-3 {
                                                        width: 100% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 0px;
                                                    }
                                                    .fusion-builder-column-3 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 0px;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 0px;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-3 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-3 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-3 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-3 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                </style>
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-4 fusion_builder_column_1_1 1_1 fusion-flex-column">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <div style="text-align: center;">
                                                            <span class="fusion-imageframe imageframe-none imageframe-4 hover-type-none">
                                                                <img
                                                                    width="1088"
                                                                    height="417"
                                                                    title="Features"
                                                                    src="images/Features.png"
                                                                    class="img-responsive wp-image-681"
                                                                    srcset="
                                                                        images/Features.png   200w,
                                                                        images/Features.png  400w,
                                                                        images/Features.png  600w,
                                                                        images/Features.png  800w,
                                                                        images/Features.png         1088w
                                                                    "
                                                                    sizes="(max-width: 800px) 100vw, (max-width: 640px) 100vw, 1088px"
                                                                />
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-4 {
                                                        width: 100% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 0px;
                                                    }
                                                    .fusion-builder-column-4 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 0px;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 0px;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-4 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-4 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-4 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-4 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                            <style type="text/css">
                                                .fusion-body .fusion-flex-container.fusion-builder-row-2 {
                                                    padding-top: 100px;
                                                    margin-top: 0px;
                                                    padding-right: 30px;
                                                    padding-bottom: 0px;
                                                    margin-bottom: 0px;
                                                    padding-left: 30px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div id="who">
                                        <div
                                            class="fusion-fullwidth fullwidth-box fusion-builder-row-3 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                                            style="background-color: #f7f7f7; background-position: left top; background-repeat: repeat; border-width: 0px 0px 0px 0px; border-color: #eae9e9; border-style: solid;"
                                        >
                                            <div class="fusion-builder-row fusion-row fusion-flex-align-items-stretch" style="max-width: 1216.8px; margin-left: calc(-4% / 2); margin-right: calc(-4% / 2);">
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-5 fusion_builder_column_1_1 1_1 fusion-flex-column fusion-flex-align-self-flex-start fusion-column-no-min-height">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <style type="text/css">
                                                            @media only screen and (max-width: 800px) {
                                                                .fusion-title.fusion-title-6 {
                                                                    margin-top: 0px !important;
                                                                    margin-bottom: 30px !important;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fusion-title title fusion-title-6 fusion-title-center fusion-title-text fusion-title-size-one" style="margin-top: 0px; margin-bottom: 30px;">
                                                            <div class="title-sep-container title-sep-container-left"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                            <h1 class="title-heading-center" style="margin: 0;">Who Are We</h1>
                                                            <div class="title-sep-container title-sep-container-right"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-5 {
                                                        width: 100% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 0px;
                                                    }
                                                    .fusion-builder-column-5 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 1.92%;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 1.92%;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-5 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-5 > .fusion-column-wrapper {
                                                            margin-right: 1.92%;
                                                            margin-left: 1.92%;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-5 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-5 > .fusion-column-wrapper {
                                                            margin-right: 1.92%;
                                                            margin-left: 1.92%;
                                                        }
                                                    }
                                                </style>
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-6 fusion_builder_column_1_2 1_2 fusion-flex-column">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <style type="text/css">
                                                            @media only screen and (max-width: 800px) {
                                                                .fusion-title.fusion-title-7 {
                                                                    margin-top: 0px !important;
                                                                    margin-bottom: 0px !important;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fusion-title title fusion-title-7 fusion-title-text fusion-title-size-three" style="font-size: 24px; margin-top: 0px; margin-bottom: 0px;">
                                                            <div class="title-sep-container title-sep-container-left fusion-no-large-visibility fusion-no-medium-visibility fusion-no-small-visibility">
                                                                <div class="title-sep sep-" style="border-color: #e0dede;"></div>
                                                            </div>
                                                            <h3 class="title-heading-left" style="margin: 0; font-size: 1em;">Cooking is not easy</h3>
                                                            <div class="title-sep-container title-sep-container-right"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                        </div>
                                                        <div class="fusion-text fusion-text-2" style="font-size: 15px; transform: translate3d(0, 0, 0);">
                                                            <p>It needs a lot of time to buy ingredients, prepare various meals, and it takes 5-star culinary skills not to burn the kitchen.</p>
                                                            <p>
                                                                <strong>Introducing the Trofi Mobile app:</strong><br />
                                                                Trofi is a mobile app allowing users to order meals and establish meal plans with a Trofi community chef via a social media interface. Users can share their best experiences,
                                                                building a community of foodies through social media interaction, buy and sell their loved homemade foods, and get their food delivered right at their doorstep. At Trofi, users
                                                                can find new exciting food options from other users and friends for every type of food they desire and rate their experiences.
                                                            </p>
                                                            <p>
                                                                We are a pioneer in this new industry and will introduce social media&#8217;s complexity and trust into ordering and sharing homecooked meals and meal packages among everyone.
                                                                At Trofi, we know food is personal, so we&#8217;re bringing communities together to foster the human connection in food, whether they are chefs or hungry foodies trying to get
                                                                lunch on a Tuesday or a busy individual looking for a weekly meal package. We guide our Trofi Chefs on how to acquire their legal chef license so anyone can become a chef
                                                                entrepreneur and establish a reliable source of income for a long time.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-6 {
                                                        width: 50% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 20px;
                                                    }
                                                    .fusion-builder-column-6 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 3.84%;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 3.84%;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-6 {
                                                            width: 50% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-6 > .fusion-column-wrapper {
                                                            margin-right: 3.84%;
                                                            margin-left: 3.84%;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-6 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-6 > .fusion-column-wrapper {
                                                            margin-right: 1.92%;
                                                            margin-left: 1.92%;
                                                        }
                                                    }
                                                </style>
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-7 fusion_builder_column_1_2 1_2 fusion-flex-column">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-image: url(&#039;images/About.jpg&#039;);
                                                            background-position: right center;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                        data-bg-url="images/About.jpg"
                                                    ></div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-7 {
                                                        width: 50% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 20px;
                                                    }
                                                    .fusion-builder-column-7 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 3.84%;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 3.84%;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-7 {
                                                            width: 50% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-7 > .fusion-column-wrapper {
                                                            margin-right: 3.84%;
                                                            margin-left: 3.84%;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-7 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-7 > .fusion-column-wrapper {
                                                            margin-right: 1.92%;
                                                            margin-left: 1.92%;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                            <style type="text/css">
                                                .fusion-body .fusion-flex-container.fusion-builder-row-3 {
                                                    padding-top: 100px;
                                                    margin-top: 0px;
                                                    padding-right: 30px;
                                                    padding-bottom: 0px;
                                                    margin-bottom: 0px;
                                                    padding-left: 30px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div
                                        class="fusion-fullwidth fullwidth-box fusion-builder-row-4 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                                        style="background-color: #ffffff; background-position: left top; background-repeat: no-repeat; border-width: 0px 0px 0px 0px; border-color: #eae9e9; border-style: solid;"
                                    >
                                        <div
                                            class="fusion-builder-row fusion-row fusion-flex-align-items-stretch fusion-flex-justify-content-center"
                                            style="max-width: calc(1170px + 20px); margin-left: calc(-20px / 2); margin-right: calc(-20px / 2);"
                                        >
                                            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-8 fusion_builder_column_2_5 2_5 fusion-flex-column">
                                                <div
                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                    style="
                                                        background-position: left top;
                                                        background-repeat: no-repeat;
                                                        -webkit-background-size: cover;
                                                        -moz-background-size: cover;
                                                        -o-background-size: cover;
                                                        background-size: cover;
                                                        background-color: #f7f7f7;
                                                        padding: 0px 0px 0px 0px;
                                                    "
                                                >
                                                    <div class="fusion-person person fusion-person-left fusion-person-1 fusion-person-icon-top">
                                                        <div class="person-shortcode-image-wrapper">
                                                            <div class="person-image-container hover-type-none" style="border: 0px solid #f6f6f6; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px;">
                                                                <img
                                                                    class="person-img img-responsive wp-image-692"
                                                                    width="600"
                                                                    height="400"
                                                                    src="images/Indivisiual.jpg"
                                                                    alt="Individuals"
                                                                    srcset="
                                                                        images/Indivisiual.jpg 200w,
                                                                        images/Indivisiual.jpg 400w,
                                                                        images/Indivisiual.jpg         600w
                                                                    "
                                                                    sizes="(max-width: 800px) 100vw, (max-width: 640px) 100vw, 600px"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="person-desc" style="background-color: #f7f7f7; padding: 40px; margin-top: 0;">
                                                            <div class="person-author">
                                                                <div class="person-author-wrapper"><span class="person-name">Individuals</span><span class="person-title"></span></div>
                                                            </div>
                                                            <div class="person-content fusion-clearfix">
                                                                If you don&#8217;t have time to cook meals but need delicious, healthy homemade food, use our Trofi marketplace app for iOS and Android.<br />
                                                                We provide you with a range of homemade food choices to choose from, and we deliver them quickly and fresh to your door.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .fusion-body .fusion-builder-column-8 {
                                                    width: 40% !important;
                                                    margin-top: 0px;
                                                    margin-bottom: 20px;
                                                }
                                                .fusion-builder-column-8 > .fusion-column-wrapper {
                                                    padding-top: 0px !important;
                                                    padding-right: 0px !important;
                                                    margin-right: 10px;
                                                    padding-bottom: 0px !important;
                                                    padding-left: 0px !important;
                                                    margin-left: 10px;
                                                }
                                                @media only screen and (max-width: 800px) {
                                                    .fusion-body .fusion-builder-column-8 {
                                                        width: 100% !important;
                                                        order: 0;
                                                    }
                                                    .fusion-builder-column-8 > .fusion-column-wrapper {
                                                        margin-right: 10px;
                                                        margin-left: 10px;
                                                    }
                                                }
                                                @media only screen and (max-width: 640px) {
                                                    .fusion-body .fusion-builder-column-8 {
                                                        width: 100% !important;
                                                        order: 0;
                                                    }
                                                    .fusion-builder-column-8 > .fusion-column-wrapper {
                                                        margin-right: 10px;
                                                        margin-left: 10px;
                                                    }
                                                }
                                            </style>
                                            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-9 fusion_builder_column_2_5 2_5 fusion-flex-column">
                                                <div
                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                    style="
                                                        background-position: left top;
                                                        background-repeat: no-repeat;
                                                        -webkit-background-size: cover;
                                                        -moz-background-size: cover;
                                                        -o-background-size: cover;
                                                        background-size: cover;
                                                        background-color: #f7f7f7;
                                                        padding: 0px 0px 0px 0px;
                                                    "
                                                >
                                                    <div class="fusion-person person fusion-person-left fusion-person-2 fusion-person-icon-top">
                                                        <div class="person-shortcode-image-wrapper">
                                                            <div class="person-image-container hover-type-none" style="border: 0px solid #f6f6f6; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px;">
                                                                <img
                                                                    class="person-img img-responsive wp-image-691"
                                                                    width="600"
                                                                    height="400"
                                                                    src="images/HomeChefs.jpg"
                                                                    alt="HomeChefs"
                                                                    srcset="
                                                                        images/HomeChefs.jpg 200w,
                                                                        images/HomeChefs.jpg 400w,
                                                                        images/HomeChefs.jpg         600w
                                                                    "
                                                                    sizes="(max-width: 800px) 100vw, (max-width: 640px) 100vw, 600px"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="person-desc" style="background-color: #f7f7f7; padding: 40px; margin-top: 0;">
                                                            <div class="person-author">
                                                                <div class="person-author-wrapper"><span class="person-name">HomeChefs</span><span class="person-title"></span></div>
                                                            </div>
                                                            <div class="person-content fusion-clearfix">
                                                                We help you in selling your amazing food and providing a stable source of income. If you want to be a chef entrepreneur, we can also guide you on receiving your chef license.
                                                                <br />
                                                                Manage your orders, monitor shipments, and notify recipients when their package has arrived, all from one centralized dashboard.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .fusion-body .fusion-builder-column-9 {
                                                    width: 40% !important;
                                                    margin-top: 0px;
                                                    margin-bottom: 20px;
                                                }
                                                .fusion-builder-column-9 > .fusion-column-wrapper {
                                                    padding-top: 0px !important;
                                                    padding-right: 0px !important;
                                                    margin-right: 10px;
                                                    padding-bottom: 0px !important;
                                                    padding-left: 0px !important;
                                                    margin-left: 10px;
                                                }
                                                @media only screen and (max-width: 800px) {
                                                    .fusion-body .fusion-builder-column-9 {
                                                        width: 100% !important;
                                                        order: 0;
                                                    }
                                                    .fusion-builder-column-9 > .fusion-column-wrapper {
                                                        margin-right: 10px;
                                                        margin-left: 10px;
                                                    }
                                                }
                                                @media only screen and (max-width: 640px) {
                                                    .fusion-body .fusion-builder-column-9 {
                                                        width: 100% !important;
                                                        order: 0;
                                                    }
                                                    .fusion-builder-column-9 > .fusion-column-wrapper {
                                                        margin-right: 10px;
                                                        margin-left: 10px;
                                                    }
                                                }
                                            </style>
                                        </div>
                                        <style type="text/css">
                                            .fusion-body .fusion-flex-container.fusion-builder-row-4 {
                                                padding-top: 90px;
                                                margin-top: 0px;
                                                padding-right: 30px;
                                                padding-bottom: 95px;
                                                margin-bottom: 0px;
                                                padding-left: 30px;
                                            }
                                        </style>
                                    </div>
                                    <div id="contact">
                                        <div
                                            class="fusion-fullwidth fullwidth-box fusion-builder-row-5 fusion-flex-container fusion-parallax-fixed nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                                            style="
                                                background-color: #1f2326;
                                                background-image: url('images/dark_wood1.jpg');
                                                background-position: left top;
                                                background-repeat: no-repeat;
                                                border-width: 0px 0px 0px 0px;
                                                border-color: #eae9e9;
                                                border-style: solid;
                                                -webkit-background-size: cover;
                                                -moz-background-size: cover;
                                                -o-background-size: cover;
                                                background-size: cover;
                                                background-attachment: fixed;
                                            "
                                        >
                                            <div
                                                class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-justify-content-center"
                                                style="max-width: calc(1170px + 0px); margin-left: calc(-0px / 2); margin-right: calc(-0px / 2);"
                                            >
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-10 fusion_builder_column_1_1 1_1 fusion-flex-column fusion-flex-align-self-flex-start fusion-column-no-min-height">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <div class="fusion-menu-anchor" id="contact"></div>
                                                        <style type="text/css">
                                                            @media only screen and (max-width: 800px) {
                                                                .fusion-title.fusion-title-8 {
                                                                    margin-top: 0px !important;
                                                                    margin-bottom: 0px !important;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fusion-title title fusion-title-8 fusion-title-center fusion-title-text fusion-title-size-one" style="margin-top: 0px; margin-bottom: 0px;">
                                                            <div class="title-sep-container title-sep-container-left"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                            <h1 class="title-heading-center" style="margin: 0; color: #ffffff;">Let&#8217;s keep in touch.</h1>
                                                            <div class="title-sep-container title-sep-container-right"><div class="title-sep sep-" style="border-color: #e0dede;"></div></div>
                                                        </div>
                                                        <div class="fusion-text fusion-text-3" style="text-align: center; color: #ffffff; transform: translate3d(0, 0, 0);">
                                                            <p>
                                                                The Trofi App will be available soon;<br />
                                                                enter your email and phone number to be among the first to hear about it.
                                                            </p>
                                                        </div>
                                                        <div class="fusion-separator" style="align-self: center; margin-left: auto; margin-right: auto; margin-top: 10px; margin-bottom: 55px; width: 100%; max-width: 150px;">
                                                            <div class="fusion-separator-border sep-single sep-solid" style="border-color: rgba(255, 255, 255, 0.7); border-top-width: 1px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-10 {
                                                        width: 100% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 0px;
                                                    }
                                                    .fusion-builder-column-10 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 0px;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 0px;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-10 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-10 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-10 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-10 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                </style>
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-11 fusion_builder_column_2_3 2_3 fusion-flex-column">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <style>
                                                            .fusion-form-650 .fusion-form-tooltip .fusion-form-tooltip-content {
                                                                color: #ffffff !important;
                                                                background-color: #333333 !important;
                                                                border-color: #333333 !important;
                                                            }
                                                        </style>
                                                        <div class="fusion-form fusion-form-builder fusion-form-form-wrapper fusion-form-650" data-form-id="650">
                                                            
                                                            
                                                            
                                                            
<form action="index.php" method="post" class="fusion-form fusion-form-650">
    <div
        class="fusion-fullwidth fullwidth-box fusion-builder-row-5-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
        style="background-color: rgba(255, 255, 255, 0); background-position: center center; background-repeat: no-repeat; border-width: 0px 0px 0px 0px; border-color: #eae9e9; border-style: solid;"
    >
        <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start" style="width: 104% !important; max-width: 104% !important; margin-left: calc(-4% / 2); margin-right: calc(-4% / 2);">
            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-12 fusion_builder_column_1_3 1_3 fusion-flex-column">
                <div
                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                    style="background-position: left top; background-repeat: no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding: 0px 0px 0px 0px;"
                >
                    <div class="fusion-form-field fusion-form-text-field fusion-form-label-above" data-form-id="650">
                        <input type="text" name="name" class="fusion-form-input" required="true" aria-required="true" placeholder="NAME*" data-holds-private-data="false" />
                    </div>
                </div>
            </div>
            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-13 fusion_builder_column_1_3 1_3 fusion-flex-column">
                <div
                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                    style="background-position: left top; background-repeat: no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding: 0px 0px 0px 0px;"
                >
                    <div class="fusion-form-field fusion-form-email-field fusion-form-label-above" data-form-id="650">
                        <input type="email" name="email" value="" class="fusion-form-input" required="true" aria-required="true" placeholder="EMAIL*" data-holds-private-data="false" />
                    </div>
                </div>
            </div>

            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-14 fusion_builder_column_1_3 1_3 fusion-flex-column">
                <div
                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                    style="background-position: left top; background-repeat: no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding: 0px 0px 0px 0px;"
                >
                    <div class="fusion-form-field fusion-form-phone-number-field fusion-form-label-above" data-form-id="650">
                        <input type="phone-number" name="phone" class="fusion-form-input" required="true" aria-required="true" placeholder="Phone No*" pattern="[0-9()#&+*-=.]+"/>
                    </div>
                </div>
            </div>
            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-15 fusion_builder_column_1_1 1_1 fusion-flex-column">
                <div
                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                    style="background-position: left top; background-repeat: no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding: 0px 0px 0px 0px;"
                >
                    <div class="fusion-form-field fusion-form-textarea-field fusion-form-label-above" data-form-id="650">
                        <textarea cols="40" rows="4" tabindex="" id="message" name="messages" class="fusion-form-input" required="true" aria-required="true" placeholder="MESSAGE*" data-holds-private-data="false"></textarea>
                    </div>
                    <div class="form-submission-notices" id="fusion-notices-1">
                        <div
                            class="fusion-alert alert success alert-success fusion-alert-center fusion-form-response fusion-form-response-success fusion-alert-capitalize alert-dismissable"
                            style="background-color: #dff0d8; color: rgba(92, 163, 64, 1); border-color: rgba(92, 163, 64, 1); border-width: 1px;"
                        >
                            <button type="button" class="close toggle-alert" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <div class="fusion-alert-content-wrapper">
                                <span class="alert-icon"><i class="fa-lg fa fa-check-circle" aria-hidden="true"></i></span><span class="fusion-alert-content">Thank you for your message. It has been sent.</span>
                            </div>
                        </div>
                        <div
                            class="fusion-alert alert error alert-danger fusion-alert-center fusion-form-response fusion-form-response-error fusion-alert-capitalize alert-dismissable"
                            style="background-color: #f2dede; color: rgba(166, 66, 66, 1); border-color: rgba(166, 66, 66, 1); border-width: 1px;"
                        >
                            <button type="button" class="close toggle-alert" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <div class="fusion-alert-content-wrapper">
                                <span class="alert-icon"><i class="fa-lg fa fa-exclamation-triangle" aria-hidden="true"></i></span>
                                <span class="fusion-alert-content">There was an error trying to send your message. Please try again later.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fusion-form-field fusion-form-submit-field fusion-form-label-above" data-form-id="650">
                        <div>
                            <button type="submit" name="submit" class="fusion-button button-3d button-xlarge button-default button-1 fusion-button-default-span button-default">
                                <span class="fusion-button-text">Send</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</form>
                                                            
                                                            
                                                            
                                                        </div>
                                                        <script>
                                                            var formCreatorConfig_650 = {
                                                                form_id: "650",
                                                                form_post_id: "650",
                                                                post_id: 581,
                                                                form_type: "database_email",
                                                                confirmation_type: "message",
                                                                redirect_url: "",
                                                                field_labels: { name: "", email_address: "", phone_no: "", message: "" },
                                                            };
                                                        </script>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-11 {
                                                        width: 66.666666666667% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 20px;
                                                    }
                                                    .fusion-builder-column-11 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: calc(0.03 * calc(100% - 0px));
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: calc(0.03 * calc(100% - 0px));
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-11 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-11 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-11 {
                                                            width: 100% !important;
                                                        }
                                                        .fusion-builder-column-11 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                </style>
                                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-16 fusion_builder_column_1_1 1_1 fusion-flex-column">
                                                    <div
                                                        class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                        style="
                                                            background-position: left top;
                                                            background-repeat: no-repeat;
                                                            -webkit-background-size: cover;
                                                            -moz-background-size: cover;
                                                            -o-background-size: cover;
                                                            background-size: cover;
                                                            padding: 0px 0px 0px 0px;
                                                        "
                                                    >
                                                        <div class="fusion-text fusion-text-4" style="text-align: center; color: #ffffff; transform: translate3d(0, 0, 0);">
                                                            <h3><span style="color: #ffffff;">TROFI IS FREE!</span></h3>
                                                            <p><span style="color: #ffffff;">Trofi is compact in size and free to download.</span></p>
                                                        </div>
                                                        <div
                                                            class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-justify-content-center"
                                                            style="width: calc(100% + 0px) !important; max-width: calc(100% + 0px) !important; margin-left: calc(-0px / 2); margin-right: calc(-0px / 2);"
                                                        >
                                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-4 fusion_builder_column_inner_1_4 1_4 fusion-flex-column">
                                                                <div
                                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                                    style="
                                                                        background-position: left top;
                                                                        background-repeat: no-repeat;
                                                                        -webkit-background-size: cover;
                                                                        -moz-background-size: cover;
                                                                        -o-background-size: cover;
                                                                        background-size: cover;
                                                                        padding: 0px 0px 0px 0px;
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-body .fusion-builder-nested-column-4 {
                                                                    width: 25% !important;
                                                                    margin-top: 0px;
                                                                    margin-bottom: 20px;
                                                                }
                                                                .fusion-builder-nested-column-4 > .fusion-column-wrapper {
                                                                    padding-top: 0px !important;
                                                                    padding-right: 0px !important;
                                                                    margin-right: 0px;
                                                                    padding-bottom: 0px !important;
                                                                    padding-left: 0px !important;
                                                                    margin-left: 0px;
                                                                }
                                                                @media only screen and (max-width: 800px) {
                                                                    .fusion-body .fusion-builder-nested-column-4 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-4 > .fusion-column-wrapper {
                                                                        margin-right: 0px;
                                                                        margin-left: 0px;
                                                                    }
                                                                }
                                                                @media only screen and (max-width: 640px) {
                                                                    .fusion-body .fusion-builder-nested-column-4 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-4 > .fusion-column-wrapper {
                                                                        margin-right: 0px;
                                                                        margin-left: 0px;
                                                                    }
                                                                }
                                                            </style>
                                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-5 fusion_builder_column_inner_1_5 1_5 fusion-flex-column">
                                                                <div
                                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                                    style="
                                                                        background-position: left top;
                                                                        background-repeat: no-repeat;
                                                                        -webkit-background-size: cover;
                                                                        -moz-background-size: cover;
                                                                        -o-background-size: cover;
                                                                        background-size: cover;
                                                                        padding: 0px 0px 0px 0px;
                                                                    "
                                                                >
                                                                    <div style="text-align: center;">
                                                                        <span class="fusion-imageframe imageframe-none imageframe-5 hover-type-none">
                                                                            <img
                                                                                width="200"
                                                                                height="60"
                                                                                title="Google Store"
                                                                                src="images/Google-Store.png"
                                                                                class="img-responsive wp-image-688"
                                                                            />
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-body .fusion-builder-nested-column-5 {
                                                                    width: 20% !important;
                                                                    margin-top: 0px;
                                                                    margin-bottom: 20px;
                                                                }
                                                                .fusion-builder-nested-column-5 > .fusion-column-wrapper {
                                                                    padding-top: 0px !important;
                                                                    padding-right: 0px !important;
                                                                    margin-right: 0px;
                                                                    padding-bottom: 0px !important;
                                                                    padding-left: 0px !important;
                                                                    margin-left: 0px;
                                                                }
                                                                @media only screen and (max-width: 800px) {
                                                                    .fusion-body .fusion-builder-nested-column-5 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-5 > .fusion-column-wrapper {
                                                                        margin-right: 0px;
                                                                        margin-left: 0px;
                                                                    }
                                                                }
                                                                @media only screen and (max-width: 640px) {
                                                                    .fusion-body .fusion-builder-nested-column-5 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-5 > .fusion-column-wrapper {
                                                                        margin-right: 0px;
                                                                        margin-left: 0px;
                                                                    }
                                                                }
                                                            </style>
                                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-6 fusion_builder_column_inner_1_5 1_5 fusion-flex-column">
                                                                <div
                                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                                    style="
                                                                        background-position: left top;
                                                                        background-repeat: no-repeat;
                                                                        -webkit-background-size: cover;
                                                                        -moz-background-size: cover;
                                                                        -o-background-size: cover;
                                                                        background-size: cover;
                                                                        padding: 0px 0px 0px 0px;
                                                                    "
                                                                >
                                                                    <div style="text-align: center;">
                                                                        <span class="fusion-imageframe imageframe-none imageframe-6 hover-type-none">
                                                                            <img width="200" height="60" title="App Store" src="images/App-Store.png" class="img-responsive wp-image-687" />
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-body .fusion-builder-nested-column-6 {
                                                                    width: 20% !important;
                                                                    margin-top: 0px;
                                                                    margin-bottom: 20px;
                                                                }
                                                                .fusion-builder-nested-column-6 > .fusion-column-wrapper {
                                                                    padding-top: 0px !important;
                                                                    padding-right: 0px !important;
                                                                    margin-right: 0px;
                                                                    padding-bottom: 0px !important;
                                                                    padding-left: 0px !important;
                                                                    margin-left: 0px;
                                                                }
                                                                @media only screen and (max-width: 800px) {
                                                                    .fusion-body .fusion-builder-nested-column-6 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-6 > .fusion-column-wrapper {
                                                                        margin-right: 0px;
                                                                        margin-left: 0px;
                                                                    }
                                                                }
                                                                @media only screen and (max-width: 640px) {
                                                                    .fusion-body .fusion-builder-nested-column-6 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-6 > .fusion-column-wrapper {
                                                                        margin-right: 0px;
                                                                        margin-left: 0px;
                                                                    }
                                                                }
                                                            </style>
                                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-7 fusion_builder_column_inner_1_4 1_4 fusion-flex-column">
                                                                <div
                                                                    class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column"
                                                                    style="
                                                                        background-position: left top;
                                                                        background-repeat: no-repeat;
                                                                        -webkit-background-size: cover;
                                                                        -moz-background-size: cover;
                                                                        -o-background-size: cover;
                                                                        background-size: cover;
                                                                        padding: 0px 0px 0px 0px;
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <style type="text/css">
                                                                .fusion-body .fusion-builder-nested-column-7 {
                                                                    width: 25% !important;
                                                                    margin-top: 0px;
                                                                    margin-bottom: 20px;
                                                                }
                                                                .fusion-builder-nested-column-7 > .fusion-column-wrapper {
                                                                    padding-top: 0px !important;
                                                                    padding-right: 0px !important;
                                                                    margin-right: 0px;
                                                                    padding-bottom: 0px !important;
                                                                    padding-left: 0px !important;
                                                                    margin-left: 0px;
                                                                }
                                                                @media only screen and (max-width: 800px) {
                                                                    .fusion-body .fusion-builder-nested-column-7 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-7 > .fusion-column-wrapper {
                                                                        margin-right: 0px;
                                                                        margin-left: 0px;
                                                                    }
                                                                }
                                                                @media only screen and (max-width: 640px) {
                                                                    .fusion-body .fusion-builder-nested-column-7 {
                                                                        width: 100% !important;
                                                                        order: 0;
                                                                    }
                                                                    .fusion-builder-nested-column-7 > .fusion-column-wrapper {
                                                                        margin-right: 0px;
                                                                        margin-left: 0px;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .fusion-body .fusion-builder-column-16 {
                                                        width: 100% !important;
                                                        margin-top: 0px;
                                                        margin-bottom: 20px;
                                                    }
                                                    .fusion-builder-column-16 > .fusion-column-wrapper {
                                                        padding-top: 0px !important;
                                                        padding-right: 0px !important;
                                                        margin-right: 0px;
                                                        padding-bottom: 0px !important;
                                                        padding-left: 0px !important;
                                                        margin-left: 0px;
                                                    }
                                                    @media only screen and (max-width: 800px) {
                                                        .fusion-body .fusion-builder-column-16 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-16 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                    @media only screen and (max-width: 640px) {
                                                        .fusion-body .fusion-builder-column-16 {
                                                            width: 100% !important;
                                                            order: 0;
                                                        }
                                                        .fusion-builder-column-16 > .fusion-column-wrapper {
                                                            margin-right: 0px;
                                                            margin-left: 0px;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                            <style type="text/css">
                                                .fusion-body .fusion-flex-container.fusion-builder-row-5 {
                                                    padding-top: 110px;
                                                    margin-top: 0px;
                                                    padding-right: 30px;
                                                    padding-bottom: 30px;
                                                    margin-bottom: 0px;
                                                    padding-left: 30px;
                                                }
                                                @media only screen and (max-width: 640px) {
                                                    .fusion-body .fusion-flex-container.fusion-builder-row-5 {
                                                        padding-top: 82px;
                                                        padding-bottom: 72px;
                                                    }
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- fusion-row -->
                </main>
                <!-- #main -->

                <div class="fusion-footer">
                    <footer id="footer" class="fusion-footer-copyright-area">
                        <div class="fusion-row">
                            <div class="fusion-copyright-content">
                                <div class="fusion-copyright-notice">
                                    <div>
                                        ?? Copyright 2012 -
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        | Trofi | All Rights Reserved
                                    </div>
                                </div>
                                <div class="fusion-social-links-footer">
                                    <div class="fusion-social-networks boxed-icons">
                                        <div class="fusion-social-networks-wrapper">
                                            <a
                                                class="fusion-social-network-icon fusion-tooltip fusion-facebook fusion-icon-facebook"
                                                style="color: #ffffff; background-color: #3b5998; border-color: #3b5998;"
                                                data-placement="top"
                                                data-title="Facebook"
                                                data-toggle="tooltip"
                                                title="Facebook"
                                                href="https://www.facebook.com/trofiApp/"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                            >
                                                <span class="screen-reader-text fab fa-facebook-f">Facebook</span>
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fusion-fusion-copyright-content -->
                        </div>
                        <!-- fusion-row -->
                    </footer>
                    <!-- #footer -->
                </div>
                <!-- fusion-footer -->

                <div class="fusion-sliding-bar-wrapper"></div>
            </div>
            <!-- wrapper -->
        </div>
        <!-- #boxed-wrapper -->
        <div class="fusion-top-frame"></div>
        <div class="fusion-bottom-frame"></div>
        <div class="fusion-boxed-shadow"></div>
        <a class="fusion-one-page-text-link fusion-page-load-link"></a>

        <div class="avada-footer-scripts">
            <script type="text/javascript">
                var fusionNavIsCollapsed = function (e) {
                        var t;
                        window.innerWidth <= e.getAttribute("data-breakpoint")
                            ? (e.classList.add("collapse-enabled"),
                              e.classList.contains("expanded") || (e.setAttribute("aria-expanded", "false"), window.dispatchEvent(new Event("fusion-mobile-menu-collapsed", { bubbles: !0, cancelable: !0 }))))
                            : (null !== e.querySelector(".menu-item-has-children.expanded .fusion-open-nav-submenu-on-click") && e.querySelector(".menu-item-has-children.expanded .fusion-open-nav-submenu-on-click").click(),
                              e.classList.remove("collapse-enabled"),
                              e.setAttribute("aria-expanded", "true"),
                              null !== e.querySelector(".fusion-custom-menu") && e.querySelector(".fusion-custom-menu").removeAttribute("style")),
                            e.classList.add("no-wrapper-transition"),
                            clearTimeout(t),
                            (t = setTimeout(function () {
                                e.classList.remove("no-wrapper-transition");
                            }, 400)),
                            e.classList.remove("loading");
                    },
                    fusionRunNavIsCollapsed = function () {
                        var e,
                            t = document.querySelectorAll(".fusion-menu-element-wrapper");
                        for (e = 0; e < t.length; e++) fusionNavIsCollapsed(t[e]);
                    };
                function avadaGetScrollBarWidth() {
                    var e,
                        t,
                        n,
                        s = document.createElement("p");
                    return (
                        (s.style.width = "100%"),
                        (s.style.height = "200px"),
                        ((e = document.createElement("div")).style.position = "absolute"),
                        (e.style.top = "0px"),
                        (e.style.left = "0px"),
                        (e.style.visibility = "hidden"),
                        (e.style.width = "200px"),
                        (e.style.height = "150px"),
                        (e.style.overflow = "hidden"),
                        e.appendChild(s),
                        document.body.appendChild(e),
                        (t = s.offsetWidth),
                        (e.style.overflow = "scroll"),
                        t == (n = s.offsetWidth) && (n = e.clientWidth),
                        document.body.removeChild(e),
                        t - n
                    );
                }
                fusionRunNavIsCollapsed(), window.addEventListener("fusion-resize-horizontal", fusionRunNavIsCollapsed);
            </script>
            <link rel="stylesheet" id="wp-block-library-css" href="css/style.min.css?ver=5.7" type="text/css" media="all" />
            <link rel="stylesheet" id="wp-block-library-theme-css" href="css/theme.min.css?ver=5.7" type="text/css" media="all" />
            <script type="text/javascript" src="js/comment-reply.min.js?ver=5.7" id="comment-reply-js"></script>
            <script type="text/javascript" src="js/wp-embed.min.js?ver=5.7" id="wp-embed-js"></script>
            <script type="text/javascript" src="js/8ea0d2045efb567a5b5d35491425d3e5.min.js?ver=3.2.1" id="fusion-scripts-js"></script>
            
        </div>

        <div class="to-top-container to-top-right">
            <a href="#" id="toTop" class="fusion-top-top-link">
                <span class="screen-reader-text">Go to Top</span>
                <i class="click-to-top fas fa-chevron-up"></i>
            </a>
        </div>
        
        
        <script type="text/javascript">
            window._wpemojiSettings = {
                baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
                ext: ".png",
                svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
                svgExt: ".svg",
                source: { concatemoji: "http:\/\/trofi.sarwar.website\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7" },
            };
            !(function (e, a, t) {
                var n,
                    r,
                    o,
                    i = a.createElement("canvas"),
                    p = i.getContext && i.getContext("2d");
                function s(e, t) {
                    var a = String.fromCharCode;
                    p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                    e = i.toDataURL();
                    return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL();
                }
                function c(e) {
                    var t = a.createElement("script");
                    (t.src = e), (t.defer = t.type = "text/javascript"), a.getElementsByTagName("head")[0].appendChild(t);
                }
                for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)
                    (t.supports[o[r]] = (function (e) {
                        if (!p || !p.fillText) return !1;
                        switch (((p.textBaseline = "top"), (p.font = "600 32px Arial"), e)) {
                            case "flag":
                                return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039])
                                    ? !1
                                    : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) &&
                                          !s(
                                              [55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447],
                                              [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]
                                          );
                            case "emoji":
                                return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212]);
                        }
                        return !1;
                    })(o[r])),
                        (t.supports.everything = t.supports.everything && t.supports[o[r]]),
                        "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
                (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag),
                    (t.DOMReady = !1),
                    (t.readyCallback = function () {
                        t.DOMReady = !0;
                    }),
                    t.supports.everything ||
                        ((n = function () {
                            t.readyCallback();
                        }),
                        a.addEventListener
                            ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1))
                            : (e.attachEvent("onload", n),
                              a.attachEvent("onreadystatechange", function () {
                                  "complete" === a.readyState && t.readyCallback();
                              })),
                        (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)));
            })(window, document, window._wpemojiSettings);
        </script>
    </body>
</html>
