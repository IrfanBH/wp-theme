
	
	
	<footer id="about">
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 f-about">
					<h3 class="widgetheading"><?php echo ot_get_option( 'heading' );?></h3>
						<?php echo ot_get_option( 'description' );?>
					</div>
					
					<div class="col-md-6 f-contact">
						<h3 class="widgetheading">Stay in touch</h3>
						<a href="mailto:<?php echo ot_get_option( 'email' );?>"><p><i class="fa fa-envelope"></i> <?php echo ot_get_option( 'email' );?></p></a>
						<p><i class="fa fa-phone"></i>  <?php echo ot_get_option( 'phone' );?></p>
						<p><i class="fa fa-home"></i> <?php echo ot_get_option( 'address' );?>
							</p>
					</div>
				</div>
			</div>
		</div>
			
		
			<div class="container">
				
					<div class="col-md-6 ">
						<p style="color: rgb(138, 141, 148) ! important;">© Copyright 2016. Vadion. All rights reserved.</p>
                        
					</div>
					<div class="col-md-6">
						<ul class="social-network">
						<?php if(ot_get_option( 'facebook' )){?>
							<li><a href="<?php echo ot_get_option( 'facebook' );?>" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
						<?php }?>
						<?php if(ot_get_option( 'twitter' )){?>
							<li><a href="<?php echo ot_get_option( 'twitter' );?>" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
						<?php }?>
						<?php if(ot_get_option( 'linkedin' )){?>
							<li><a href="<?php echo ot_get_option( 'linkedin' );?>" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
						<?php }?>
						<?php if(ot_get_option( 'google-plus' )){?>
							<li><a href="<?php echo ot_get_option( 'google-plus' );?>" data-placement="top" title="Facebook"><i class="fa fa-google-plus fa-1x"></i></a></li>
						<?php }?>	
						</ul>
					</div>
					
				
			</div>
			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
			
	</footer>
   
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
	<script>wow = new WOW({}).init();</script>
	 <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrolling-nav.js"></script>
    <script>
	jQuery(document).ready(function() {
 
    // setTimeout(function(){
    //     jQuery('body').addClass('loaded');
    // }, 700);
 
	});
	</script>
	<script>
	$('.carousel').carousel({
    pause: true,
    interval: false
    });
	</script>

	<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
</body>
</html>			