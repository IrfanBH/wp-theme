<?php get_header(); ?>
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
