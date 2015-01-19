<?php get_header(); ?>	


<div class="content content-archive clearfix">
	
	<h1>
		<span>
			<?php printf( __( 'Search results for %s', 'twentyten' ), '<span> "' . get_search_query() . '"</span>' ); ?>
		</span>
	</h1>
	<hr />

	<ul>
	<?php
			global $wp_query;
			$args = array_merge( $wp_query->query, array( 'posts_per_page' => 20, 'paged' => $paged ) );
			query_posts( $args );        
			$x = 0;
			while (have_posts()) : the_post(); ?>  


				<li>
					<article class="clearfix">
						<a class="post-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

						<div class="post-archive-preview">
							<div class="article-container clearfix">
								<a class="home-article-title" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
								<p>
									<?php echo ds_get_excerpt('100'); ?>
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
						</div>
					</article>
				</li>			

			<?php $x++; ?>
			<?php endwhile; ?>				
	</ul> 

	<nav>
		<div class="nav-previous alignleft"><?php next_posts_link( '<< Older posts' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts >>' ); ?></div>
	</nav>

	<?php wp_reset_query(); ?>                        
</div>

<?php get_footer(); ?> 	