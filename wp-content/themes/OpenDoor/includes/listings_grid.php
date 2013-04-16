
	<div class="four columns listingblockgrid listingblock">
		<?php 
		$openhousedate = "";
		$mlslisting = "";
		$mls = "";
		
		include get_template_directory() . '/includes/variables.php';	?>
		<?php 
			$arr_sliderimages = get_gallery_images();
			
			if($arr_sliderimages[0]) {
					$resized = aq_resize ($arr_sliderimages[0], 400, 300, true);
					$resized_infowindowimage = aq_resize($arr_sliderimages[0], 50, 50, true);
				} else {
					$resized = aq_resize (get_option('wp_noimage'), 400, 300, true);
					$resized_infowindowimage = aq_resize(get_option('wp_noimage'), 50, 50, true);
				}
		?>	

		<div>
		<div class="vignette">
			<a href="<?php the_permalink(); ?>"><img class="listing_thumbnail" width="350" height="200" alt="" src="<?php echo $resized ?>" /></a>
			<?php include get_template_directory() . '/includes/banner.php'; ?>
		</div>
		</div>
		


		<div class="listingblocksection">
		<p class="price">
		<?php if ($reducedby) { 
				$reducedbytext = get_option('wp_reducedby_text');
				
			 
			if (get_option('wp_currencyposition') == "Before") {
				$before = $currencysymbol;
				} elseif (get_option('wp_currencyposition') == "After") {
				$before = "";
				} 

			if (get_option('wp_currencyposition') == "After") {
				$after = $currencysymbol;
				} elseif (get_option('wp_currencyposition') == "Before") {
				$after = "";
			} ?>
			
		
			<a class="reduced" href="#" title="<?php echo $reducedbytext . " " . $before . $reducedby . $after; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/downarrow.png" alt="" /></a>
			<?php } ?>
		
		<?php include 'price.php';  ?>
		</p>
		<h4 class="address">
			<?php if (get_option('wp_site') == "Real Estate") { ?>
				<?php echo $address . ", " . $citystatezip; ?>
					<?php } else { ?>
				<?php the_title() ?>
			<?php } ?>
		</h4>
		
		<?php //include 'videoandimageicons.php'; ?>
					
		<p class="twofeatures">
			<?php include get_template_directory() . "/includes/twofeatures.php"; ?>
		</p>
		
		<?php if($openhousedate) { 
			$openhousedate2 = strtotime($openhousedate);
			$today = strtotime(Date("F d, Y"));
			if ($today <= $openhousedate2) { ?>
				<p class='openhouse'><i class='icon-calendar'></i>
					 <?php echo get_option('wp_openhouse_text') ?>: <?php echo $openhousedate . ", " . $openhousetime; ?>
				</p>
			<?php }} ?>
			
			        <?php if ($mlslisting == "Yes" && $mls) { ?>
						<a class="btn  btn-lightgray" href="<?php home_url(); ?>/idx/mls-<?php echo $mls ?>-">
						<?php echo get_option('wp_readmore_text'); ?>
						
						</a>
					<?php } else { ?>
						<a class="btn btn-lightgray" href="<?php the_permalink() ?>">
							<?php echo get_option('wp_readmore_text'); ?>
						</a>
					<?php } ?>
			
			<?php if (get_option('wp_compare') == "show") { ?>
				<span class="compare">
					<input type="checkbox" name="<?php echo the_id() ?>" />
					<a class="comparelink" href="#" onclick="return false">
						<?php echo get_option('wp_compare_text'); ?>
					</a>
				</span>
			<?php } ?>
			
		</div>	
	</div>

	
	