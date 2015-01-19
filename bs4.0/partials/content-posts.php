<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.fluidbox/fluidbox.css" type="text/css" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.fluidbox/jquery.fluidbox.min.js"></script>

<section class="post-container clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post-entry">

			<div class="meta-info">

				<p>
					<?php the_date('d/M/Y', '<span>', '</span>'); ?> 
					
					<?php
						$categories = get_the_category();
						$separator = ' / ';
						$output = '';
						if($categories){
							foreach($categories as $category) {
								$output .= '<a class="category-link" href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
							}
						echo trim($output, $separator);
						}
					?>	
				</p>
			
			</div>

			<h1><?php the_title(); ?></h1>
			<hr />
			
			<article >
				
				<?php the_content(); ?>
				
			</article>

			<script>
				$(function () {
				    $('.post-entry > article a').fluidbox();
				});		
			</script>				
			
			<div class="comments-section">
				<?php comments_template(); ?>							
			</div>
		</div>

		<div class="post-entry post-entry-sidebar">

			<h3>Share this</h3>	

			<div class="share-this">

				<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button"></div>

				<a href="https://twitter.com/share" class="twitter-share-button"
				  data-dnt="true"
				  data-count="none"
				  data-via="bohemestudio">
				Tweet
				</a>

			</div>

			<h3>Recent posts</h3>			
			<ul>
			<?php
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
					setup_postdata($post);
			?>

			        <li class="clearfix">
			        	<a class="recent-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			        	<a class="recent-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        		<p>
							<?php echo ds_get_excerpt('100'); ?>
						</p>
			        </li>
			    
			<?php }
			wp_reset_postdata(); ?>
			</ul>   

			<h3>Recent activity</h3>			

			<ul>
			<?php
				$args = array( 'numberposts' => '10');
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a> </li> ';
				}
			?>
			</ul>

		</div>

	<?php endwhile; else: ?>

		<h3>Sorry, no posts matched your criteria.</h3>
	<?php endif; ?>   

</section>


