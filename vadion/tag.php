<?php get_header(); ?>
<div class="jumbotron">
	<h2><?php _e( 'Tag Archive: ', 'vadion' ); echo single_tag_title('', false); ?></h2>		
	</div>

	<div class="our-services">	
		<div class="container">
			<div class="row">				
				<div class="col-md-8">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<div class="">											
							<div class="icons">
								
							</div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
</div>
					</div>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>

