<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="row">
	
			<main id="main" class="large-8 medium-8 columns first" role="main">
				<header>
					<h1 class="archive-title"><?php _e( 'We found:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
						<header class="article-header">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						</header> <!-- end article header -->
										
						<section class="entry-content" itemprop="articleBody">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
							<?php the_excerpt('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
						</section> <!-- end article section -->
											
					</article> <!-- end article -->				    

				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
				
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
			    <?php endif; ?>
	
		    </main> <!-- end #main -->
		
		    <?php get_sidebar(); ?>
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
