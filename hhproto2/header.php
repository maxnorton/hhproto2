<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
																		
		<title><?php wp_title(''); ?></title>
				
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		 
		<?php wp_head(); ?>
	
		<script class="text/javascript">

		jQuery(document).ready(function() {
			var bigwrapper = jQuery(".big-wrapper");
			var html = jQuery(window);

			jQuery(document).on("scroll", html, function(e) {
			  if (html.scrollTop() > 352) {
			  	bigwrapper.addClass('fix-navigation');
			  } else {
			    bigwrapper.removeClass('fix-navigation');
			  }
			});
		});
		</script>


	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="big-wrapper">
	
			<div class="header-cover section bg-dark-light no-padding">
		
				<div class="header section" style="background-image: url(<?php if (get_header_image() != '') : ?><?php header_image(); ?><?php else : ?><?php echo get_template_directory_uri() . '/images/header.jpg'; ?><?php endif; ?>);">
							
					<div class="header-inner section-inner">

						<?php if ( get_theme_mod( 'hemingway_logo' ) ) : ?>
						
							<div class='blog-logo'>
							
						        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
						        	<img src='<?php echo esc_url( get_theme_mod( 'hemingway_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
						        </a>
						        
						    </div> <!-- /blog-logo -->
					
						<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>
					
							<div class="blog-info">
							
								<div class="face">
									<img src="<?php echo get_stylesheet_directory_uri() . '/images/heidi-new-shot.png' ?>" />
								</div>

								<h1 class="blog-title">
									<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
								</h1>
							
							</div> <!-- /blog-info -->
							
						<?php endif; ?>
									
					</div> <!-- /header-inner -->
								
				</div> <!-- /header -->
			
			</div> <!-- /bg-dark -->
			
			<div class="navigation section no-padding bg-dark">
			
				<div class="navigation-inner section-inner">
				
					<div class="toggle-container hidden">
			
						<div class="nav-toggle toggle">
								
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
							
							<div class="clear"></div>
						
						</div>

						<div class="nav-post-title-wrap">
							<h1 class="nav-post-title"><?php wp_title(''); ?></h1>
						</div>
						
						<div class="search-toggle toggle">
								
							<div class="metal"></div>
							<div class="glass"></div>
							<div class="handle"></div>
						
						</div>
						
						<div class="clear"></div>
					
					</div> <!-- /toggle-container -->
					
					<div class="blog-search hidden">
					
						<?php get_search_form(); ?>
					
					</div>
				
					<ul class="blog-menu">
					
						<?php if ( has_nav_menu( 'primary' ) ) {
																			
							wp_nav_menu( array( 
							
								'container' => '', 
								'items_wrap' => '%3$s',
								'theme_location' => 'primary', 
								'walker' => new hemingway_nav_walker
															
							) ); } else {
						
							wp_list_pages( array(
							
								'container' => '',
								'title_li' => ''
							
							));
							
						} ?>
						
						<div class="clear"></div>
												
					 </ul>
					 
					 <ul class="mobile-menu">
					
						<?php if ( has_nav_menu( 'primary' ) ) {
																			
							wp_nav_menu( array( 
							
								'container' => '', 
								'items_wrap' => '%3$s',
								'theme_location' => 'primary', 
								'walker' => new hemingway_nav_walker
															
							) ); } else {
						
							wp_list_pages( array(
							
								'container' => '',
								'title_li' => ''
							
							));
							
						} ?>

						<div class="widget-title">
							<h2>Recent posts</h3>
						</div>

						<?php the_widget( 'hhproto2_recent_posts' ); ?> 
						
					 </ul>
				 
				</div> <!-- /navigation-inner -->
				
			</div> <!-- /navigation -->