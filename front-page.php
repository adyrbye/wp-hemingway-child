<?php
/**
* Homepage template for Hemingway child theme
*
* @package WordPress
* @subpackage Hemingway
* @since Hemingway 1.47
*/
?>

<div id="landing">

<?php get_header(); ?>

<div class="wrapper section-inner">						

	<div class="content left">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="posts">
	
			<div class="post">
			   				        			        		                
				<div class="post-content">
				
		    	<!-- LANDING PAGE -->
		    	<section class="landing-page landing-bg">
					<div class="container">
						<div class="author-intro">
		    	
		    				<?php the_content(); ?>
		    				
		    			</div>
		    			
		    			<div class="author-buttons">
							<div class="intro-btns">
								<a href="http://dyrbye.ca/about/" class="btn" id="about-btn">About</a>
								<a href="http://dyrbye.ca/blog/" class="btn" id="blog-btn">Blog</a>
								<a href="http://dyrbye.ca/portfolio/" class="btn" id="portfolio-btn">Portfolio</a>
							</div>
							
							<div class="social-btns">
								<a href="http://twitter.com/ajdyrbye" class="soc-icon tw"></a>
								<a href="https://plus.google.com/+AJDyrbye/" class="soc-icon gp"></a>
								<a href="http://ca.linkedin.com/in/ajdyrbye/" class="soc-icon ln"></a>
								<a href="https://github.com/adyrbye" class="soc-icon git"></a>
							</div>
						</div>
					</div>
				</section>
			<!-- END LANDING PAGE -->
                        
				</div> <!-- /post-content -->
								
			</div> <!-- /post -->

		</div> <!-- /posts -->
		
		<?php endwhile; ?>
	
		<?php endif; ?>

		<div class="clear"></div>
		
	</div> <!-- /content left -->
	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>

</div> <!-- /wrapper -->
								
<?php get_footer(); ?>
</div> <!-- /landing -->