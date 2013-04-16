<div id="details">

		<h3 class="bar">
			<?php echo get_option('wp_details_text'); ?>
		</h3>


	<?php if ($vin && get_option('wp_site') == "Car Sales") {

		include get_template_directory() . '/includes/vin.php';
		
		} else {
		
		if (get_option('wp_demo') == "on..") {
			echo "<p class='alert alert-success'><i class='icon-info-sign'></i> <strong>Note: </strong>The features below are chosen by clicking checkboxes when you create or edit a Listing. You can choose to categorize the features (shown below) or have a 3 column list of uncategorized features. Choose the mode in Theme Options -> General section.
			For this listing, the info here is <strong>NOT pulled in from a VIN number code</strong>. See any other vehicle detail page to see info pulled in from a VIN code.</p>";
		} ?>
		

		
		<?php
		$arr_terms = get_the_terms($post->ID, 'features');
		if ($arr_terms) {

		echo "<div class='tabbable tabs-left'>";
		if ($arr_terms) {
			echo "<ul class='nav nav-tabs'>"; 
			echo "<li class='active'><a href='#tab0' data-toggle='tab'>" . get_option('wp_basicdetails_text') . "</a></li>";
			$count = 1;
			foreach ($arr_terms as $item) {
					if($item->parent == 0) {
					
					$cat_id = $item->term_id;
					
					echo "<li><a href='#tab" . $count . "' data-toggle='tab'>". $item->name . "</a></li>";
					$count = $count + 1;
					}
				}
				echo "</ul>";
			}

		
		
		echo "<div class='tab-content'>";
		if ($arr_terms) {
		echo "<div class='tab-pane active' id='tab0'>";
		echo "<ul class='specslist'>";
			include get_template_directory() . "/includes/features.php";
		echo "</ul>";
		
		echo "</div>";
		$count2 = 1;
		
		foreach ($arr_terms as $item) {
			if($item->parent == 0) {
			$cat_id = $item->term_id;
			echo "<div class='tab-pane'" . "' id='tab" . $count2 . "'>";
			
			echo "<ul class='specslist'>";
			foreach ($arr_terms as $item2) {
			
				if($item2->parent == $cat_id) {
				 echo "<li class='three columns'><a href='". get_term_link($item2, 'features') ."'>". $item2->name . "</a></li>";
				}
			}
			echo "</ul>";
			$count2 = $count2 + 1;
			echo "</div>";
			}
		}
		} 
		echo "</div>";
		echo "</div>";
	} else {
		
		echo "<ul class='specslist fourcolumns'>";
			$columns = 4;
			include get_template_directory() . '/includes/features.php';
		echo "</ul>";
		echo "<div style='clear: both'></div>";
	}
	
	
	
	
	}
	?>
	
</div>