	<section class="preview-section preview-posts related-posts clear" >
		
		<h2><span>More posts in this category</span></h2>
		<hr />

		<ul>
		<?php
			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
			if( $related ) foreach( $related as $post ) {
				setup_postdata($post);
		?>

		        <li>
					<article>
						<a class="post-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('big'); ?></a>

						<div class="article-container clearfix">
							<a class="home-article-title" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
							<p>
								<?php echo ds_get_excerpt('200'); ?>
							</p>
						</div>							

						<footer class="clearfix">
							<p>
								
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
						</footer>
					</article>
		        </li>
		    
		<?php }
		wp_reset_postdata(); ?>
		</ul>   

	</section>	