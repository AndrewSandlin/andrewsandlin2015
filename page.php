<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-8 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
											
						<header class="article-header">
							<h1 class="entry-title single-title"><?php the_title(); ?></h1>
						</header> <!-- end article header -->
										
					    <section class="entry-content" itemprop="articleBody">
						    <?php the_content(); ?>
						</section> <!-- end article section -->
																					
					</article> <!-- end article -->
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>