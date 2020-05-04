<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Web_Droyd
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPoppins:400,500,600" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108597912-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108597912-1');
</script>
	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '208169397147644');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=208169397147644&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
	<?php wp_head(); ?>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<a href="#" class="btn-wd-top"><i class="fa fa-angle-up"></i></a>
	
	<div id="main-wrapper">

		<header class="header-section fixed-header">

			<div class="header-section-container">

				<div class="header-menu">

					<div class="header-menu-container">

						<nav class="navbar">

							<div class="container">

								<div class="row">

									<div class="col-md-12">

										<div class="navbar-header">
											<a href="<?php echo esc_url(home_url('/'))?>" class="navbar-brand" title="WebDroyd">
												<img class="lazyload" src="<?php echo get_template_directory_uri();?>/assets/images/wdlogo.png" data-src="<?php echo get_template_directory_uri();?>/assets/images/wdlogo.png" alt="WebDroyd Logo" />
											</a>
										</div>

										<ul class="header-btns">

											<li class="header-search-btn">
												<a href="#" class="form-open-btn">
													<i class="fa fa-search"></i>
												</a>
											</li>
										</ul>

										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="menu-wd">Menu</span>
											<span class="lines-wrapper"><i class="lines"></i></span>
										</button>

										<div class="navbar-collapse collapse">
											<?php  wp_nav_menu( array(
												'menu'   => 'Header Menu',
												'menu_class' => 'nav navbar-nav',
												'container' => '',
											) ); ?>
											
										</div>
									</div>
								</div>
							</div>
						</nav>

						<div class="form-block header-search-form-block">
							<div class="form-block-container">
								<form method="get" class="searchform" id="searchform" action="<?php echo esc_url(home_url('/'))?>">
									<div class="col-md-12">
										<div class="form-group">
											<a href="#" class="form-close-btn">&times;</a>
											<input type="text" class="form-control" id="s" placeholder="Type then hit enter to search..." name="s" autocomplete="off">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>