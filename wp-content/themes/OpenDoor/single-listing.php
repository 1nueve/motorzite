<?php
 get_header(); 
?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php 
	$agent = "";
	$agent2 = "";
	include get_template_directory() . '/includes/variables.php' ?>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$("input[name='your-subject']").val('<?php stripslashes(the_title()) ?>');
		});
	</script>
	
	<div class="sixteen columns outercontainer bigheading">
	<div class="four columns alpha">
	&nbsp;
	</div>
	<div class="eight columns">
	
		<h2 id="title">
			<?php if (get_option('wp_site') == "Real Estate") {	?>
				<?php echo $address; ?>
			<?php } ?>
			<?php if (get_option('wp_site') == "Car Sales") {
				the_title();
				} ?>
		</h2>
	</div>
	<div class="four columns omega">
		<h2 id="pricebig"><?php include get_template_directory() . '/includes/price.php'; ?></h2>
	</div>
	</div>	

	<div class="sixteen columns outercontainer" id="content">
	<div class="four columns alpha" id="leftsidebar">
		<?php get_sidebar() ?>
	</div>
	
	<div class="twelve columns omega">	
		<?php if(get_option('wp_site') == "Real Estate") { ?>
			<h3 class="detailpagesubheading">
				<?php echo $citystatezip; ?>
				<?php if (get_option('wp_showmls') == "show" && $mls ) {
					echo " (" . get_option('wp_mls_text') . " # " . $mls . ")";
				} ?>
			</h3>	
		<?php } ?>
			<?php 
				$arr_sliderimages = get_gallery_images();
			?>	
				<?php if (count($arr_sliderimages) > 0) { ?>
					<div id="sliderimage">
						<?php if(count($arr_sliderimages) > 1) { ?>
							<div class="imagehover"></div>
						<?php } ?>
						
						<?php
							$count = 1;
							$hide = "";
							foreach ($arr_sliderimages as $image) { 
							if($count != 1) {
									$hide = "style='display: none;'";
								}
								$resized = aq_resize($image, 700, 400,true);
								$resizedthumb = aq_resize($image, 62, 62,true);
							?>
							
							<div class="image" <?php echo $hide; ?>>
								<img class="detailpagebigimage" alt="" rel="<?php echo $resizedthumb ?>" src="<?php echo $resized ?>" />
							</div>
							
						<?php
						$count = $count + 1;
						} ?>
					</div><!-- end sliderimage -->
				<?php } ?>
			
			
		<div style="clear: both;"></div>	
		<!-- Videos section.  Will only show up if there are entries in the Video section of a post  -->
		<?php

		$videoimages = explode("\n", get_post_meta($post->ID, 'video_thumbnail_value', true));		
		$videourl = explode("\n", get_post_meta($post->ID, 'video_url_value', true));

		$count1 = count($videoimages);
		$count2 = count($videourl);
		?>

		<?php 

		if ($count1 >= 1 && get_post_meta($post->ID, 'video_thumbnail_value', true) != "" && $count1 == $count2) { ?>
		<div id="videos">


		<h3 class="bar"><?php echo get_option('wp_heading_videos');  ?></h3>

		<?php for ($i=0; $i<count($videoimages); $i++)
			{ 
			$resized = $videoimages[$i];
			?>
				<a href="<?php echo $videourl[$i]; ?>" rel="prettyPhoto" title="">
				<img class="videothumbnail" alt="" width="62" height="62" src="<?php echo $resized; ?>" />
				</a>
			<?php } ?>
			

		</div><!-- end videos -->
		<?php } ?>
		<div style="clear: both;"></div>

		
		
		<?php include get_template_directory() . '/includes/details.php'; ?>

			
		<div id="listingcontent">
			<?php the_content(); ?>
		</div>

		<?php if(get_option('wp_showsociallinks2') == "show") {
			include get_template_directory() . '/includes/sociallinks.php';
			}
		?>	

	


		<?php if (get_option('wp_site') == "Real Estate") { ?>
			<div id="maps">
				<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<?php $manualaddress = get_post_meta($post->ID, "google_location_value", $single = true) ?>
				<?php if ($manualaddress) {
				$mapaddress = $manualaddress;
				} else {
				$mapaddress = $address . " " . $citystatezip;
				} ?>

				<?php include get_template_directory() . '/includes/googlemaps.php'; ?>

				<?php if(get_option('wp_show_sv') == 'show' && $streetview == 'Yes') { ?>
					<div id="streetview"></div>
				<?php } ?>

				<div id="map"></div>
			</div><!-- end maps -->	
		<?php } ?>
		
		
		
<?php 

$theagent = $agent; 
$theagent2 = $agent2; ?>
<?php include get_template_directory() . '/includes/related.php'; ?>

<?php if (get_option('wp_site') == "Real Estate") { ?>
	<?php if (get_option('wp_showcontactform') == "show") { ?>

		<div id="contactagent">
	
			<?php
				global $wpdb;
				$sql = " SELECT *
				FROM $wpdb->posts AS p
				WHERE p.post_type = 'agent' 
				AND p.post_title = '". $theagent ."'";
				$agentarray = $wpdb->get_results($sql);
				
				$sql2 = " SELECT *
				FROM $wpdb->posts AS p
				WHERE p.post_type = 'agent' 
				AND p.post_title = '". $theagent2 ."'";
				$agentarray2 = $wpdb->get_results($sql2);
			?>


			<?php if ($agentarray) { ?>
			<?php foreach ($agentarray as $post) { ?>
				<?php setup_postdata($post); ?>
				<?php include get_template_directory() . '/includes/variables.php' ?>
				
					<h3>
						<?php echo get_option('wp_agentcontactustext');  ?>
					</h3>
					<div class="agentbox">
						<h4 class="bar"><?php the_title() ?></h4>
						<?php
						$arr_sliderimages = get_gallery_images();
						if ($arr_sliderimages) { ?>
							<?php $resized = aq_resize($arr_sliderimages[0], 80, 100, true); ?>
							<img width="80" height="100" alt="" src="<?php echo $resized ?>" />
						<?php } ?>
						
						<p>
						<?php if ($agenttitle) { ?>
							<strong><?php echo $agenttitle ?></strong><br />
						<?php } ?>
						
						<?php if($agentphoneoffice) { ?>
							<?php echo get_option('wp_agentphone1') . ": " . $agentphoneoffice ?><br />
						<?php } ?>
						
						<?php if($agentphonemobile) { ?>
							<?php echo get_option('wp_agentphone2') . ": " . $agentphonemobile ?><br />
						<?php } ?>
						
						<?php if($agentfax) { ?>
							<?php echo get_option('wp_agentfax') . ": " . $agentfax ?><br />
						<?php } ?>
						
						<a href="<?php the_permalink() ?>"><?php echo get_option('wp_otherlistings') ?></a>
						</p>
						<div style="clear: left;"></div>
						<?php if ($agentarray2) { ?>
							<a class="btn btn-block" data-toggle="collapse" data-target="#agent1"><?php echo get_option('wp_contactformbutton_text') ?></a>
							<div id="agent1" class="collapse"><?php echo do_shortcode($agentcontactform); ?></div>

						<?php } else { ?>
							<?php echo do_shortcode($agentcontactform); ?>
						<?php } ?>
					</div>
			<?php } ?>
			
			<?php } else { ?>

					<h3><?php echo get_option('wp_contactustext') ?></h3>
					
					<?php echo do_shortcode(stripslashes(get_option('wp_contactshortcode')));  ?>
			<?php } ?>
		
		
			<?php if ($agentarray2) { ?>
			<?php foreach ($agentarray2 as $post) { ?>
				<?php setup_postdata($post); ?>
				<?php include get_template_directory() . '/includes/variables.php' ?>

					<div class="agentbox">
					<h4 class="bar"><?php the_title() ?></h4>
						<?php
						$arr_sliderimages = get_gallery_images();
						if ($arr_sliderimages) { ?>
							<?php $resized = aq_resize($arr_sliderimages[0], 80, 100, true); ?>
							<img width="80" height="100" alt="" src="<?php echo $resized ?>" />
						<?php } ?>
						
						<p>
						<?php if ($agenttitle) { ?>
							<strong><?php echo $agenttitle ?></strong><br />
						<?php } ?>
						
						<?php if($agentphoneoffice) { ?>
							<?php echo get_option('wp_agentphone1') . ": " . $agentphoneoffice ?><br />
						<?php } ?>
						
						<?php if($agentphonemobile) { ?>
							<?php echo get_option('wp_agentphone2') . ": " . $agentphonemobile ?><br />
						<?php } ?>
						
						<?php if($agentfax) { ?>
							<?php echo get_option('wp_agentfax') . ": " . $agentfax ?><br />
						<?php } ?>
						
						<a href="<?php the_permalink() ?>"><?php echo get_option('wp_otherlistings') ?></a>
						</p>
					<div style="clear: left;"></div>
					<a class="btn btn-block" data-toggle="collapse" data-target="#agent2"><?php echo get_option('wp_contactformbutton_text') ?></a>
					<div id="agent2" class="collapse"><?php echo do_shortcode($agentcontactform); ?></div>
					</div>
			<?php } ?>
			<?php } ?>	
			</div><!-- end contact agent -->
<?php }} ?>




<?php if(get_option('wp_site') == "Car Sales") { ?>
	<?php if (get_option('wp_showcontactform') == "show") { ?>
		<div id="listingcontact">
	<?php } ?>
		<h3 class="bar" id="contact"><?php echo stripslashes(get_option('wp_contactustext')); ?></h3>
		<?php echo do_shortcode(stripslashes(get_option('wp_contactshortcode')));  ?>
		</div><!-- end listing contact -->
	<?php } ?>


	

	<a class='top' href='#top'><i class="icon-chevron-up"></i>
		<?php echo get_option('wp_top');  ?>
	</a>

		
	
</div><!-- end twelve columns -->
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>

