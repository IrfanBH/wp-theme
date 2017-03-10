<?php get_header(); ?>
<a href="<?php echo home_url();?>#services" class="back-to-arrow"><i class="fa fa-chevron-left"> </i> Back to Services</span></a>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="jumbotron">
	<h2><?php the_title(); ?></h2>		
	</div>
	<div class="our-services">	
		<div class="container">
			<div class="row">				
				<div class="col-md-12">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<div class="">											
							<div class="icons">
								
							</div>
							<?php the_content();?>
							<pre>
							<?php print_r(get_post_meta(get_the_ID(),'wpcf-gallery-image'));?>
							</pre>
							<?php $galleryImages = get_post_meta(get_the_ID(),'wpcf-gallery-image');
							foreach ($galleryImages as $key => $value) {
								echo "<img src=$value><br/>";
							}
							?>

							<br/>
							<?php echo get_post_meta(get_the_ID(),'wpcf-gallery-image');?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php endwhile; ?>

	<?php else: ?>
		<h1><?php _e( 'Sorry, nothing to display.', 'vadion' ); ?></h1>
	<?php endif; ?>
    
	<div class="jumbotron" >
		<?php dynamic_sidebar('get-started');?>
	</div>
	<?php get_footer(); ?>
