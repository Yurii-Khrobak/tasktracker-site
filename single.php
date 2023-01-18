<?php
/*
 * Template Name: single
 */
?>
<?php get_header();?>
	<div class="text-container">
		<h1 class="text_title">
			<?php the_title(); ?>
		</h1>
			<img class="text_img" src="<?php echo the_post_thumbnail_url(); ?>" />
		<p class="text_content">
			<?php the_content(); ?>
		</p>
	</div>
<?php get_footer();?>
