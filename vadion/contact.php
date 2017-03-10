<?php /* Template Name: Contact Page Template */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="jumbotron">
	<h2><?php the_title(); ?></h2>		
	</div>
		<?php the_content();?>
	<?php endwhile; ?>

	<?php else: ?>
		<h1><?php _e( 'Sorry, nothing to display.', 'vadion' ); ?></h1>
	<?php endif; ?>
	<div class="jumbotron" >
		<?php dynamic_sidebar('get-started');?>
	</div>
	<?php get_footer(); ?>
