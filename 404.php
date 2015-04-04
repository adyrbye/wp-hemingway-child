<?php get_header(); ?>

<div class="wrapper section-inner">

	<div class="content left">

		<div class="posts">
	
			<div class="post">
			
				<div class="content-inner">
		                
					<div class="post-header">
					        
			        	<h2 class="post-title"><?php _e('Error 404', 'hemingway'); ?></h2>
			        	
			        </div>
				                                                	            
			        <div class="post-content">
			        
			        	<article id="notfound">
							<aside class="nfimage">
								<img src="http://dyrbye.ca/wp-content/uploads/2015/04/guybrush_lost.gif" />
							</aside>
							<aside class="nftext">
								<header class="page-header">
									<h1 class="page-title">Uh oh.</h1>
								</header>
								<div class="page-content">
									<p><?php _e("The page you're looking for seems to have gone adrift, fallen fowl of a bad link, or been washed out to a new location.", 'hemingway') ?></p>
									<p>Never fear, you needn't share this guy's brush with bad luck. Head back to the <a href="http://dyrbye.ca/blog/">blog</a>, check out some of my <a href="http://dyrbye.ca/portfolio/">work</a>, or try a search below.</p>
									<?php get_search_form(); ?>
								</div>	
							</aside>
						</article>

			        </div> <!-- /post-content -->
		        
		        </div> <!-- /content-inner -->
		            	                        	
			</div> <!-- /post -->
		
		</div> <!-- /posts -->
	
	</div> <!-- /content -->
	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>

</div> <!-- /wrapper -->

<?php get_footer(); ?>


