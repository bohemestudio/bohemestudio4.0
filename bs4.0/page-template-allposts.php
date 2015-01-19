<?php
/*
Template Name: All Posts
*/
?>

<?php get_header(); ?>

<div class="content content-all-posts clearfix">

	<!-- POSTS -->
	<section class="preview-section preview-posts clear">
		<h1><?php the_title(); ?></h1>

		<ul>
			<?php


			$args = array( 'posts_per_page' => 999, 'post_status' => 'publish', 'category_name' => 'photography' );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li>
					<article>
						<a class="post-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('big'); ?></a>
						<footer class="clearfix">
							<p>
								category: 
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
						</footer>
					</article>
				</li>
			<?php endforeach; 
			wp_reset_postdata();?>

		</ul>
	</section>
</div>

<?php get_footer(); ?>

</div>

<?php get_footer(); ?>