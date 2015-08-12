<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div id="content">
		<div id="inner-content" class="row">
		    <div id="main" class="medium-12 columns" role="main">

				<?php get_template_part( 'parts/loop', 'page' ); ?>

			</div> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
