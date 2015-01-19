<?php get_header(); ?>	

<div class="content content-post clearfix">


	<section class="post-container clearfix">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post-entry">
				<h1><?php the_title(); ?></h1>
				
				<article >

					<?php the_content(); ?>
					
				</article>
				
				<div class="comments-section">
					<?php comments_template(); ?>							
				</div>
			</div>

		<?php endwhile; else: ?>

			<h3>Sorry, no posts matched your criteria.</h3>
		<?php endif; ?>   

	</section>


</div><!--//content-->

<?php get_footer(); ?> 		