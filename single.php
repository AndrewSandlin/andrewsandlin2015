<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
											
					    <section class="entry-content" itemprop="articleBody">

							<header class="article-header">	
								<h1 class="entry-title single-title" itemprop="headline">Project</h1>
						    </header> <!-- end article header -->										

							<div class="portfolio-navigation clearfix">
								<?php
									$prev_post = get_previous_post();
									if($prev_post) {
									   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
									   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="previous button float-left"></a>' . "\n"; }
									
									$next_post = get_next_post();
									if($next_post) {
									   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
									   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="next button float-right"></a>' . "\n"; }
								?>
							</div>
														
							<div class="portfolio-content">

								<div class="row">
									
									<div class="large-12 medium-12 small-12 columns">
										
										<h2><?php the_title(); ?></h2>
	
									</div>
	
								</div>
								
								<div class="row">

									<div class="large-5 medium-4 small-12 columns">
											<?php if (get_field ( 'project_duties' )): ?>
											<h3><?php the_field ( 'project_duties' ); ?></h3>
											<?php endif; ?>							
											<?php if (get_field ( 'project_url' )): ?><a class="button" href="<?php the_field ( 'project_url' ); ?>" target="_blank" >Visit Site</a><?php endif; ?>								
									</div>
									<div class="large-7 medium-8 small-12 columns">
											<?php if (get_field ( 'project_descrpition' )): ?>
											<p><?php the_field ( 'project_descrpition' ); ?></p>
									</div>
								
								</div>
							
							</div>
								
							<div class="row">

								<div class="large-12 medium-12 small-12 column">
									<?php 
									
									$images = get_field('project_gallery');
									
									if( $images ): ?>
									    <ul class="bxslider">
									        <?php foreach( $images as $image ): ?>
									            <li>
								                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
									            </li>
									        <?php endforeach; ?>
									    </ul>
									    <div id="bx-pager" class="bx-pager ">
									        <h4>More Views</h4>
									        <div class="row small-up-2 medium-up-4 large-up-5">
									        <?php $thumb = -1; ?>
									        <?php foreach( $images as $image ): ?>
								                <?php $thumb++; ?>
												<div class="column">
								                <a href="" data-slide-index="<?php echo $thumb; ?>">
								                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
								                </a>
												</div>
									        <?php endforeach; ?>
									        </div>
									    </div>
									<?php endif; ?>
			
									<script type="text/javascript">
										jQuery(function ($){
											$('.bxslider').bxSlider({
											  pagerCustom: '#bx-pager',
											  mode: 'fade',
											  autoHover: true,
											  speed: 500,
											  pause: 3000					   
											});
										});
									</script>
								
								</div>

							</div>

							<?php endif; ?>							
							
						</section> <!-- end article section -->
																												
					</article> <!-- end article -->

		    <?php endwhile; else : ?>
		
		    <?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>