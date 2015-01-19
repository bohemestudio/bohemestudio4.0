<?php get_header(); ?>	

<div class="content content-post clearfix">

	<?php

	if ( has_category( array('projects','blog') )) {
	?>
	 
		<!-- THE POST -->
		<?php get_template_part( 'partials/content', 'posts' ); ?>
		<?php get_template_part( 'partials/related', 'posts' ); ?>

	<?php	
	} elseif ( has_category( array('photography') ) ) {
	?>
		<!-- THE PHOTOS -->
		<?php get_template_part( 'partials/content', 'photos' ); ?>
		<?php get_template_part( 'partials/related', 'photos' ); ?>

	<?php	
	} else {
	?>

	<?php		
	}
	?>

</div>

<?php get_footer(); ?> 		