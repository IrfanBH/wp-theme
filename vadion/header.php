<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Bootstrap -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/scrolling-nav.css" rel="stylesheet">
	    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/overwrite.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
  
  <div id="loader-wrapper">
<div id="loader">&nbsp;</div>
<div class="loader-section section-left">&nbsp;</div>
<div class="loader-section section-right">&nbsp;</div>
</div>
  
  
	<header>
		<nav div class="navbar navbar-default navbar-static-top" role="navigation">
			
		</nav>
		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand" style="padding: 0px;">
							<a href="<?php echo home_url();?>"><img src="<?php echo ot_get_option( 'logo' );?>"></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
						<?php vadion_nav(); ?>
							
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	<?php if(is_front_page()):?>
	<?php $slides = ot_get_option( 'add_slider',array() );
	if ( ! empty( $slides ) ) {?>
    <div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">
				<?php   foreach( $slides as $slide ) {?>
					<li><img src="<?php echo $slide['slide_image']; ?>" alt="<?php echo $slide['title']; ?>"/></li>
				<?php }?>				
			</ul>
		</div>	
    </div>
    <?php }?>
<?php endif;?>
