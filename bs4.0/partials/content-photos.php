
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.fluidbox/fluidbox.css" type="text/css" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.fluidbox/jquery.fluidbox.min.js"></script>

<section class="post-container clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post-entry post-entry-photo">

			<div class="meta-info">

				<p>
					<?php the_date('d/M/Y', '<span>', '</span>'); ?> 
					<a class="category-link" href="http://bohemestudio.com/photo" >photography</a> / 
					<?php
						$categories = get_the_category();
						$separator = ' / ';
						$output = '';
						if($categories){
							foreach($categories as $category) {
								if( $category->name != 'photography'){
										$output .= '<a class="category-link" href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
									}
							}
						echo trim($output, $separator);
						}
					?>	
				</p>
			
			</div>

			<h1><?php the_title(); ?></h1>
			
			<article >

				<div class="post-photo">

					<?php 
						$image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id,'big', true);
					?>

					<a href="<?php echo $image_url[0]; ?>" data-fluidbox>
						<img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					</a>
					
					<span>&copy; All rights reserved bohemestudio &amp; MiguelARG.</span>

					<nav>
						<div class="nav-photo-left"><?php next_post_link('%link', '&nbsp;', TRUE); ?></div>
						<div class="nav-photo-right"><?php previous_post_link('%link', '&nbsp;', TRUE); ?></div>
					</nav>					
				</div>

				<script>
					$(function () {
					    $('.post-photo a').fluidbox();
					});		
				</script>				
				
			</article>
			
			<div class="comments-section">
				<?php comments_template(); ?>							
			</div>

		</div>

	<?php endwhile; else: ?>

		<h3>Sorry, no posts matched your criteria.</h3>
	<?php endif; ?>   

</section>


