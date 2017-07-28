<?php
/*
Template Name: Portfolio Archive
*/
?>
<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns" role="main">

			<section class="entry-content" itemprop="articleBody">
						
				<header class="article-header">	
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			    </header> <!-- end article header -->										

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
																			
				    <?php the_content(); ?>
									
				</article> <!-- end article -->
				    
				<?php endwhile; else : endif; ?>
				
				<div class="portfolio-listing">
					
					<div class="row small-up-2 medium-up-3 large-up-4">
										
						<?php 
							$loop = new WP_Query(array('post_type' => 'feature', 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby'   => 'date',)); 
						?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
							<div class="column">
								<?php $url = get_post_meta($post->ID, "url", true);
									echo '<a href="';
									echo the_permalink( );
									echo '">';
									echo the_post_thumbnail('medium');
									echo '</a>';
								?>
								<div class="caption">
									<h3><?php the_title(); ?></h3>	
								</div>
							</div>
			
						<?php endwhile; ?>
						
						<?php wp_reset_query(); ?>
			
					</div>
					
				</div>

			</section>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>