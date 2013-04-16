<div id="sidebar-left">
<div class="inner">

	<?php include get_template_directory() . '/includes/search.php'; ?>

	<div id="agentcontainer"></div>

	<?php if (get_option('wp_loancalculator2') == "show") { 
		include get_template_directory() . '/includes/loancalculator.php';
	} ?>

	<div id="leftsidebarwidgets">
	<?php dynamic_sidebar('Left Sidebar (not homepage)') ?>
	</div>

</div><!-- end inner -->
</div><!-- end sidebar -->



