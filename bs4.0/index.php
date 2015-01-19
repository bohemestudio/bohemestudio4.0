<?php get_header(); ?>	
<?php $shortname = "unit_theme"; ?>


<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.swiper/idangerous.swiper.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.swiper/idangerous.swiper.min.js"></script>

<div class="content">

	<!-- HERO -->
	<section class="hero">
		<div class="snow"></div>
		<div class="stars"></div>

		<a href="<?php bloginfo('url'); ?>/about" class="logo">
			
			<p>
				<span>Hi there ! </span>
				you're on <strong>Miguel Rodriguez's</strong> portfolio. <br />
				I'm a <strong>UX/Web</strong> designer and <strong>front-end developer</strong> <br />
				that &#9829; photography, traveling, food...and tidy websites!
			</p>

		</a>

		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero/banner-front-v2.png" />
	</section>

	<!-- FEATURED -->
	<section class="preview-section featured clearfix">
		<h2><span>Featured Posts</span></h2>
		<hr />

		<div class="slider clearfix">

			<a class="arrow-left" href="#"></a> 
		    <a class="arrow-right" href="#"></a>

		    <div class="swiper-container">
		      <div class="swiper-wrapper">
		        
				<?php
					$slider_arr = array();
					$x = 0;
					$args = array(
						 //+'category_name' => 'blog',
						 'post_type' => 'post',
						 'meta_key' => 'ex_show_in_slideshow',
						 'meta_value' => 'Yes',
						 'posts_per_page' => 99
						 );
					query_posts($args);
					while (have_posts()) : the_post(); 
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
						$img_url = $thumb['0']; 
					?>		
						<div class="swiper-slide" href='<?php the_permalink(); ?>' > 
							<a href='<?php the_permalink(); ?>'>
								<div class="featured-content">
									<h3><?php the_title() ?></h3>
									<p>
										<?php echo ds_get_excerpt('100'); ?>
									</p>
								</div>

								<img src="<?php echo $img_url; ?>" /> 
							</a>
						</div>	
					<?php array_push($slider_arr,get_the_ID()); ?>
					<?php $x++; ?>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>      	        

		      </div>
		    </div>
		    <div class="pagination"></div>

		</div>

		<script>
			var mySwiper = new Swiper('.swiper-container',{
					pagination: '.pagination',
					autoplay: 6000,
					speed:500,
					loop:true,
					grabCursor: true,
					paginationClickable: true,
					onSlideChangeEnd: function (swiper) {
	                    mySwiper.params.autoplay = 6000;
	                    mySwiper.params.speed = 500;
			    		mySwiper.startAutoplay();
	                }
				});

			function slideTouched(){

				console.log("touched!");
			    mySwiper.stopAutoplay();
			    mySwiper.params.autoplay = 3000;
			    mySwiper.startAutoplay();
			}

			$('.arrow-left').on('click', function(e){
				e.preventDefault()
				mySwiper.swipePrev()
			});

			$('.arrow-right').on('click', function(e){
				e.preventDefault()
				mySwiper.swipeNext()
			});
		</script>
	</section>


	<!-- PHOTOGRAPHY -->
	<section class="preview-section preview-photo clear">
		<h2><span>Recent Photos</span></h2>
		<hr />

		<ul>
			<?php
			$category_ID = get_category_id('photography');
			$args = array(
				 'post_type' => 'post',
				 'posts_per_page' => 8,
				 'post__not_in' => $slider_arr,
				 'cat' => $category_ID
				 );
			query_posts($args);
			$x = 0;
			while (have_posts()) : the_post(); ?>  	
			
				<li>
					<article>
						<a class="post-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('big'); ?></a>
						<footer class="clearfix">
							<p>
								
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

			<?php $x++; ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>		

		</ul>
	</section>
	
	<!-- PROJECTS -->
	<section class="preview-section preview-posts clear">
		<h2><span>Recent Projects</span></h2>
		<hr />

		<ul>
			<?php
			//$category_ID = get_category_id('projects');
			$args = array(
				 'post_type' => 'post',
				 'posts_per_page' => 3,
				 //'post__not_in' => $slider_arr,
				 'orderby' => 'post_date',
				 'order' => 'DESC',
				 'category_name' => 'projects'
				 );
			query_posts($args);
			$x = 0;
			while (have_posts()) : the_post(); ?>  	
			
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

			<?php $x++; ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>		

		</ul>
	</section>
	
	<!-- BLOG -->
	<section class="preview-section preview-posts clear">
		<h2><span>Recent Posts</span></h2>
		<hr />

		<ul>
			<?php
			$category_ID = get_category_id('blog');
			$args = array(
				 'post_type' => 'post',
				 'posts_per_page' => 3,
				 'post__not_in' => $slider_arr,
				 'cat' => $category_ID
				 );
			query_posts($args);
			$x = 0;
			while (have_posts()) : the_post(); ?>  	
			
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

			<?php $x++; ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>		

		</ul>
	</section>
	<!-- BLOG -->

	
</div> <!-- //content -->
<?php get_footer(); ?> 		