<ul id="slider" class="unoslider">


<?php 
if(!empty($_COOKIE['slider'])) $cookieslider = $_COOKIE['slider'];
$cookieslider = "";
$slider = get_option('wp_slideshowsource'); 
if ($cookieslider) {
	$slider = $cookieslider;
	} else {
	$slider = $slider;
	}
?>

<?php if ($slider == "Recent Listings") {
		if (get_option('wp_filtersold') == 'Yes') {
			$posts = new WP_Query(array('post_type' => 'listing', 'posts_per_page' => get_option('wp_slideshownumber'), 'meta_query' => array(array('key'=>'slideshow_value', 'value'=>'Yes'), array('key'=>'sold_value', 'value'=>'No')), 'orderby' => 'rand' ));
		} else {
			$posts = new WP_Query(array('post_type' => 'listing', 'posts_per_page' => get_option('wp_slideshownumber'), 'meta_query' => array(array('key'=>'slideshow_value', 'value'=>'Yes')), 'orderby' => 'rand' ));
		}
		} elseif ($slider == "Listings on Google Map") {
		$posts = new WP_Query('post_type=listing&posts_per_page=-1');
	} else {
		$posts = new WP_Query(array('post_type'=>'photoslideshow', 'posts_per_page' => get_option('wp_slideshownumber'), 'orderby' => 'rand'));
	}
?>


<?php if ($slider == "Listings on Google Map") { ?>
	<div class="slidermap" id="map"></div>
	<?php 	
		$counter = 0; 
	?>
			
    <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>
		<?php
			include get_template_directory() . '/includes/variables.php';
			$arr_sliderimages = get_gallery_images();
			$resized_infowindowimage = aq_resize($arr_sliderimages[0], 50, 50, true);
		?>						

		<?php 
		if (get_option('wp_currencyposition') == "Before") {
			$before = $currencysymbol;
			} elseif (get_option('wp_currencyposition') == "After") {
			$before = "";
			} 
			
		if (get_option('wp_currencyposition') == "After") {
			$after = $currencysymbol;
			} elseif (get_option('wp_currencyposition') == "Before") {
			$after = "";
		} 
		
		if ($pricecustom) {
			$price = $pricecustom;
			} else {
			$price = $before . $price . $after;
			}
		
		
			if ($map) {
			$themap = $map;
			} else {
			$themap = $address . " " . $citystatezip;
			}
			
			if (function_exists('qtrans_getLanguage')) {
				$langcode = qtrans_getLanguage();
			}
			
			$theurl = get_permalink() . "?lang=" . $langcode;
			$array_mapinfo[$counter] = array(0 =>$themap, 1=>$address, 2=>$citystatezip, 3=>$resized_infowindowimage, 4=>$price, 5=>$theurl);
			$counter = $counter + 1;
		?>
	
	<?php endwhile ?>
	<?php else : ?>
	<?php endif; ?>
	<?php include get_template_directory() .'/js/resultsmap.php'; ?>
	

<?php } else { ?>


		<?php 
		
		if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>
		<?php 
			$mlslisting = "";
			$mls = "";
		?>
		<?php include get_template_directory() . '/includes/variables.php' ?>
		<li>
			<?php $arr_sliderimages = get_gallery_images();					
				$resized = aq_resize($arr_sliderimages[0], 960, 400, true);
			?>
				<?php if ($slider == "Recent Listings") { ?>
				<div class="html_content">
					<div class="slidertext">
						<h2>
						<?php if ($slideshowtitle) {
							echo $slideshowtitle;
							} else {
							the_title();
							} ?>
						</h2>
						<p class="twofeatures"><?php include get_template_directory() . '/includes/twofeatures.php'; ?></p>
						<p class="price"><?php include get_template_directory() . '/includes/price.php'; ?></p>
						<?php if ($mlslisting == "Yes" && $mls) { ?>
							<a class="btn btn-small" href="<?php home_url() ?>/idx/mls-<?php echo $mls ?>-"><?php echo get_option('wp_readmore_text') ?></a>
						<?php } else { ?>
							<a class="btn btn-colorscheme btn-large" href="<?php the_permalink() ?>"><?php echo get_option('wp_readmore_text') ?></a>
						<?php } ?>
					</div>
					<?php include get_template_directory() . '/includes/banner.php'; ?>
				</div>
				<?php } ?>
			
		
			<img alt="" src="<?php echo $resized ?>" />
		</li>
				
		<?php endwhile; else: ?>

		<?php endif; 
		wp_reset_query(); ?> 

<?php } ?>

</ul>