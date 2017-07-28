<?php
/*
Template Name: Front Page 
*/
?>
<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

					<section class="center front-page-content">
						<?php the_content( ); ?>	
					</section>

				</article>
				
		    <?php endwhile; endif; ?>							

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

	<div id="video-background" class="row.expanded hide-for-small-only">
		
		<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_c3n07ozyzn videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
		<script src="//fast.wistia.com/embed/medias/c3n07ozyzn.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script>

	</div>

</div> <!-- end #content -->

<?php get_footer(); ?>