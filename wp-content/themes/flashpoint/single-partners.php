<?php get_header('partners'); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							<div class="span12 breadcrumbs">
								<ul>
									<li><a href="<?php get_home_url(); ?>/partners">Partners</a></li>
									<li><span><?php the_title(); ?></span></li>
								</ul>
							</div>							
						</header> <!-- end article header -->
						
						<aside class="span3">
							<div><?php the_post_thumbnail( 'profile-thumb' ); ?></div>
							<h1><?php the_title(); ?></h1>
							<p><?php print_custom_field('company'); ?></p>
							<p><?php print_custom_field('location'); ?></p>
							<p class="twitter"><a href="https://twitter.com/<?php print_custom_field('twitter'); ?>" target="_blank" /><?php print_custom_field('twitter'); ?></a></p>
						</aside>
						
						<section class="post_content clearfix span8" itemprop="articleBody">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
    
			</div> <!-- end #content -->

<?php get_footer(); ?>