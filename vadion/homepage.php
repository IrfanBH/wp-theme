<?php /* Template Name: Home Page Template */ get_header(); ?>

<div id="services" class="jumbotron" style="padding-bottom: 110px; padding-top: 47px;">
		<h2>Services</h2>		
</div>	
<?php
$services_posts = get_posts( array(
    'posts_per_page' => 4,
    'post_type' => 'services',
    'post_status' => 'publish'
) );?>
    
	<div class="container">
		<div class="row technologies-services">	
		<?php
		$count = 1;
		foreach ( $services_posts as $post ) :
	        setup_postdata( $post ); ?>
	    	<div class="col-md-3">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="<?php echo $count*0.4;?>s">
					<div class="align-center">
						<h4><?php the_title();?></h4>					
						<div class="icon">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'full' );?>
						</div>
							<div class="services-text">
							<p>
							 <?php the_excerpt();?>...
							 </p>
							</div>
						<div class="ficon">
							<a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
	    <?php
	    $count++;
	    endforeach; 
	    wp_reset_postdata();?>	
		</div>
	</div>
	

<div id="tech" class="jumbotron" style="margin: 60px 0px;">
		<h2>Technologies</h2>		
</div>	
    <?php
$tech_posts = get_posts( array(
    'posts_per_page' => 4,
    'post_type' => 'technologies',
    'post_status' => 'publish'
) );?>
	<div class="container">
		<div class="row technologies-services">	
		<?php
		$count = 1;
		foreach ( $tech_posts as $post ) :
	        setup_postdata( $post ); ?>			
			<div class="col-md-3">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="<?php echo $count*0.4;?>s">
					<div class="align-center">
						<h4><?php the_title();?></h4>					
						<div class="icon">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'full' );?>
						</div>
							<div class="services-text">
							<p>
							 <?php the_excerpt();?>...
							 </p>
							</div>
						<div class="ficon">
							<a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
	    <?php
	    $count++;
	    endforeach; 
	    wp_reset_postdata();?>	
		</div>
	</div>	
	
	
   <p><br></p>  
	<div class="jumbotron" style="padding-top: 80px;">
		<h2 id="portfolio">Portfolio</h2>		
	</div>

    <?php
	$port_posts = get_posts( array(
	    'posts_per_page' => 2,
	    'post_type' => 'portfolio',
	    'post_status' => 'publish'
	) );?>
	<!-- section works -->
		<section id="section-works" class="section appear clearfix">
			<div class="container">	
			<?php
			$count = 1;
			foreach ( $port_posts as $post ) :
		        setup_postdata( $post ); ?>	
		<div class="col-md-6 estab-startup">
		<h3><?php the_title();?></h3>
		<?php echo get_the_post_thumbnail( get_the_ID(), 'full',array( 'class' => 'main-icon-img' ) );?>

			<p><?php the_excerpt();?>...</p>
			<div class="ficon">
				<a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Read more</a>
			</div>
		</div>
	    <?php
	    $count++;
	    endforeach; 
	    wp_reset_postdata();?>				
				<div class="row">
					<nav  class="col-md-12 text-center">
						<ul>						  
						</ul>
					</nav>
					<div style="clear:both;"></div>
					<h2 id="customers" style="text-align:center; color:#cf2a33; padding-top:15px;">Customers</h2>
					<P><br></p>
					<P><br></p>
					 <?php
						$customer_posts = get_posts( array(
						    'posts_per_page' => -1,
						    'post_type' => 'customers',
						    'post_status' => 'publish'
						) );?>
					<div class="col-md-12">
						<div class="row">
							<div class="portfolio-items ">
							<?php
							$count = 1;
							foreach ( $customer_posts as $post ) :
						        setup_postdata( $post ); ?>	
								<article class="col-md-3 isotopeItem customer-<?php echo get_the_ID();?>">
									<div class="portfolio-item">
										<div class="wow rotateInUpLeft">
											<?php echo get_the_post_thumbnail( get_the_ID(), 'full');?>
										</div>	
										<div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
												<a href="<?php the_permalink(); ?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
											 </div>										   
										</div>
									</div>
								</article>
							    <?php
							    $count++;
							    endforeach; 
							    wp_reset_postdata();?>	
								
								<P><br></p>
								<P><br></p>
							</div>                                       
						</div>                                     
					</div>
				</div>				
			</div>
		</section>   
<div class="jumbotron" style="padding-top: 18px;">
		<h2 id="team">Our Team</h2>		
	</div>
	 <?php
	$team_posts = get_posts( array(
	    'posts_per_page' => -1,
	    'post_type' => 'team',
	    'post_status' => 'publish'
	) );?>
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                    <?php
						$count = 1;
						foreach ( $team_posts as $post ) :
					        setup_postdata( $post ); ?>	
                        <!-- Quote 1 -->
                        <div class="item <?php echo($count==1)?'active':''?>">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <?php the_content();?>
                                        <strong><?php the_title();?></strong>
										<small><?php echo get_post_meta( get_the_ID(), 'wpcf-designation', true ); ?></small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
					    <?php
					    $count++;
					    endforeach; 
					    wp_reset_postdata();?>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                    <?php
						$count = 0;
						foreach ( $team_posts as $post ) :
					        setup_postdata( $post ); ?>	
                        <li data-target="#quote-carousel" data-slide-to="<?php echo $count;?>" <?php echo ($count==0)?'class="active"':'';?>>
                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full',array( 'class' => 'img-responsive' ) );?>
                        </li>
                        <?php
					    $count++;
					    endforeach; 
					    wp_reset_postdata();?>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class="jumbotron" style="background: rgb(249, 249, 249) none repeat scroll 0% 0%;">
    	<?php dynamic_sidebar('get-started');?>
    </div>

    <div class="jumbotron">
		<h2 id="contact">Contact Us</h2>		
	</div>	
    <div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<?php dynamic_sidebar('contact-us');?>		
                    
				</div>		
			</div>
		</div>
	</div>


<?php get_footer(); ?>
