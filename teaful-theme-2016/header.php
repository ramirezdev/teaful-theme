<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
					<div class="utility-bar-wrapper">
						<div class="utility-bar wrap cf">
							
							<div class="header-message">GET 10% OFF YOUR FIRST MONTLY SUBSCRIPTION! <a href="#mailing-list-wrapper">JOIN NEWSLETTER</a></div> 
							<div class="meta-wrapper"> <div class="profile-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><g><path d="M50.4,5c-24.9,0-45,20.1-45,45c0,1.6,0.1,3.1,0.2,4.6C6.7,65.9,12.1,76,20.1,83.3c0.5,0.4,0.9,0.8,1.4,1.2   c2.6-2.1,5.5-3.7,8.8-4.6l7.7-2.3c2.6-0.8,4-3.6,3.1-6.1c-0.2-0.5-0.5-1-0.8-1.4L35,64.2c-3.8-4.3-5.5-10.1-4.6-15.8l1.2-7.9   c0.8-5.3,3.8-10,8.2-13h0c6.4-4.3,14.7-4.4,21.2-0.3l0.1,0c4.9,3.1,8.1,8.2,8.7,14l0.9,7.5c0.6,5.5-1.1,10.9-4.7,15.1L60.5,70   c-0.4,0.4-0.6,0.9-0.8,1.4c-0.9,2.6,0.5,5.4,3.1,6.1l7.7,2.3c3.2,1,6.2,2.6,8.8,4.6c0.5-0.4,1-0.8,1.4-1.2   c8-7.3,13.4-17.4,14.5-28.7c0.2-1.5,0.2-3,0.2-4.6C95.4,25.1,75.2,5,50.4,5z"></path></g></svg></div>
								<?php
									if ( is_user_logged_in() ) {
									   echo '<a href="' . wp_logout_url( home_url() ) . '" title="Logout">Logout</a>';
									} else {
									    echo '<a href="account" title="Login">Login</a> <span class="or">or</span> <a href="account" title="Login">Register</a>';
									}
								?>

							</div> <div class="cart"><div class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve"><title>Png 48px Solid - 70 Basic Icons</title><g><ellipse cx="19.5" cy="43.5" rx="4" ry="4"></ellipse><ellipse cx="34.6" cy="43.5" rx="4" ry="4"></ellipse><path d="M41.3,29.3c0.5,0,0.9-0.3,1-0.7L48,8.4c0.2-0.5-0.1-1.1-0.7-1.2c-0.1,0-0.2,0-0.3,0H11c0-0.1,0-0.2-0.1-0.2L9,1.8   C8.8,1.1,8.2,0.7,7.6,0.5l0,0H1.9C0.8,0.6,0,1.5,0,2.5c0,1.1,0.8,1.9,1.9,2h4l1,2.5l6,21.5c0,0.2,0.1,0.3,0.2,0.4l-2.4,5.8   c-0.4,0.9,0.1,2,1,2.4c0,0,0,0,0,0h0.1c0.2,0.1,0.5,0.2,0.8,0.2h28c1.1,0,2-0.9,2-2s-0.9-2-2-2H15.3l1.7-4L41.3,29.3L41.3,29.3z"></path></g></svg></div><?php echo do_shortcode( "[cart_button icon='shopping-cart' empty_cart_text='0' items_in_cart_text='Cart' custom_css='custom']" ) ?></div>
						</div>
					</div>

				<div id="inner-header" class="wrap cf">

					<div id="logo">
						<a href="<?php echo get_home_url(); ?>"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 165.659 38.923" enable-background="new 0 0 165.659 38.923" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M20.967,37.721L20.967,37.721c-4.879-0.002-9.464-1.899-12.911-5.35C0.936,25.252,0.934,13.667,8.054,6.55
				c3.448-3.448,8.033-5.348,12.91-5.348c4.876,0,9.462,1.899,12.91,5.35c3.449,3.447,5.348,8.032,5.348,12.91
				c0,4.878-1.898,9.462-5.348,12.909C30.427,35.82,25.844,37.721,20.967,37.721z M20.964,4.774c-3.924,0-7.611,1.528-10.385,4.301
				c-5.728,5.727-5.726,15.045,0.001,20.772c2.773,2.774,6.463,4.303,10.387,4.303l0,0c3.921,0,7.608-1.528,10.383-4.304
				c2.774-2.774,4.301-6.461,4.301-10.384c0-3.923-1.526-7.612-4.301-10.386C28.575,6.302,24.888,4.774,20.964,4.774z"/>
		</g>
		<g>
			<g>
				<path d="M21.83,17.815c-0.035-0.102-0.072-0.207-0.101-0.291c-0.074-0.211-0.142-0.403-0.16-0.472
					c-0.954-3.112-3.14-5.624-6.058-7.003c-1.899,2.755-2.517,6.244-1.646,9.498c0.744,2.778,2.515,5.159,4.898,6.694
					c-0.194-2.515,0.489-5.054,1.979-7.138C21.073,18.641,21.437,18.21,21.83,17.815z"/>
			</g>
		</g>
		<g>
			<g>
				<g>
					<path d="M21.303,26.711L21.303,26.711c-0.229,0-0.459-0.008-0.688-0.025l-1.074-0.077l-0.031-1.077
						c-0.072-2.701,1.004-5.317,2.953-7.179c1.953-1.864,4.607-2.825,7.309-2.622l1.075,0.08l0.028,1.076
						c0.071,2.699-1.007,5.315-2.958,7.178C26.138,25.77,23.788,26.711,21.303,26.711z M28.429,18.117
						c-1.609,0.148-3.156,0.844-4.322,1.957c-1.182,1.128-1.935,2.623-2.153,4.225c1.609-0.149,3.157-0.842,4.319-1.955
						C27.454,21.214,28.21,19.719,28.429,18.117z"/>
				</g>
			</g>
		</g>
	</g>
	<g>
		<path d="M43.855,2.202h16.553V7.07h-5.6v29.212h-5.355V7.07h-5.598V2.202z"/>
		<path d="M70.535,16.565h7.351v4.869h-7.351v9.98h9.249v4.869H65.18V2.202h14.605V7.07h-9.249V16.565z"/>
		<path d="M102.864,36.282H97.46l-0.926-6.183h-6.573l-0.926,6.183H84.12l5.452-34.08h7.839L102.864,36.282z M90.643,25.474h5.16
			l-2.58-17.235L90.643,25.474z"/>
		<path d="M113.138,17.344h6.913v4.869h-6.913v14.07h-5.355V2.202h14.167V7.07h-8.812V17.344z"/>
		<path d="M132.076,2.202v26.29c0,2.434,1.071,3.311,2.775,3.311c1.704,0,2.775-0.877,2.775-3.311V2.202h5.064v25.95
			c0,5.453-2.726,8.569-7.985,8.569c-5.259,0-7.985-3.116-7.985-8.569V2.202H132.076z"/>
		<path d="M148.777,2.202h5.356v29.211h8.812v4.869h-14.167V2.202z"/>
	</g>
</g>
</svg></a>
					</div>


					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

					<a href="#" class="header-subscribe-bttn">SUBSCRIBE</a>

				</div>

			</header>
