<div id="listings">

	<?php if (get_option('wp_filtersold') == 'Yes') {
		$filteroutsold = '&meta_key=sold_value&meta_value=No';
		} else {
		$filteroutsold = '';
		}
	?>
	<?php $recent = new WP_Query('post_type=listing&post_status=publish&posts_per_page='.get_option('wp_recentlistingsnumber_home').$filteroutsold); ?>


	<h2 class="bar">
		<?php echo get_option('wp_heading_latestlistings') ?>
	</h2>

	<?php if ($recent->have_posts()) : while ($recent->have_posts()) : $recent->the_post(); ?>
	<?php include get_template_directory() . '/includes/variables.php' ?>

	<?php if (get_option('wp_listinglayout') == "One per row") {
			include get_template_directory() . '/includes/listings_row.php';
		} else {
			include get_template_directory() . '/includes/listings_grid.php';
		} ?>

	<?php endwhile; else: ?>
	<?php endif; 
	wp_reset_query(); ?> 
</div>