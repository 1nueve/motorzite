<div class="accordion" id="accordionBrowseBy">

		  <?php if (get_option('wp_includealllistings') == "Yes") { ?>
		  
				<?php	
					include get_template_directory() . '/includes/variables.php';
				
					if (get_option('wp_searchresultspagefix') == "Yes") { 
						$fix = "index.php/";
						} elseif (get_option('wp_searchresultspagefix') == "No") {
						$fix = "";
						} 
						$langcode = "";
						if (function_exists('qtrans_getLanguage')) {
							$langcode = qtrans_getLanguage();
						
							$appendlang = "/&lang=" . $langcode;
							} else {
							$appendlang = "";
							}
					$searchpage = get_post($wp_searchpageid);
					$slugname = $searchpage -> post_name;
					$searchurl = home_url() . "/" . $fix . $slugname . "/?alllistings=true" . $appendlang;
				?>
		  
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle alllistings" data-parent="#accordionBrowseBy" href="<?php echo $searchurl ?>">
					<?php echo get_option('wp_alllistings_text') ?>
			  </a>
			</div>
		  </div>
		  <?php } ?>


		  <?php if (get_option('wp_includefeatures') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse1">
						<?php echo get_option('wp_features_text') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse1" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=features')?>
			  </div>
			</div>
		  </div>
		  <?php } ?>
		  
		  
<?php if (get_option('wp_site') == "Real Estate") { ?>

			<?php if (get_option('wp_includepropertytype') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse2_houses">
						<?php echo get_option('wp_propertytype_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse2_houses" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=property_type')?>
			  </div>
			</div>
		  </div>
		  <?php } ?>
		  
		  
			<?php if (get_option('wp_includelocation') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse3_houses">
					<?php echo get_option('wp_location_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse3_houses" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=property_location')?>
			  </div>
			</div>
		  </div>	
		  <?php } ?>


		  
		  <?php if (get_option('wp_includepricerange') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse4_houses">
						<?php echo get_option('wp_pricerange_text') ?>

			  </a>
			</div>
			<div id="BrowseByCollapse4_houses" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=property_pricerange')?>
			  </div>
			</div>
		  </div>
		  <?php } ?>


		  
		  
		  <?php if (get_option('wp_includerentorbuy') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse5_houses">
					<?php echo get_option('wp_rentorbuy_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse5_houses" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=property_buyorrent')?>
			  </div>
			</div>
		  </div>	
		<?php } ?>
	  
<?php } ?>






<?php if (get_option('wp_site') == "Car Sales") { ?>
			<?php if (get_option('wp_includemanufacturer') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse8_Cars">
					<?php echo get_option('wp_dealerlocation_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse8_Cars" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=dealerlocation')?>
			  </div>
			</div>
		  </div>
		  <?php } ?>
		  
		  <?php if (get_option('wp_includedealerlocation') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse2_Cars">
					<?php echo get_option('wp_bodytype_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse2_Cars" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=bodytype') ?>
			  </div>
			</div>
		  </div>
		  <?php } ?>
		  
		  <?php if (get_option('wp_includebodytype') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse2_Cars">
					<?php echo get_option('wp_bodytype_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse2_Cars" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=bodytype') ?>
			  </div>
			</div>
		  </div>
		  <?php } ?>
		  
		  
		  <?php if (get_option('wp_includeenginesize') == "Yes") { ?>
		   <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse3_Cars">
					<?php echo get_option('wp_enginesize_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse3_Cars" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=enginesize') ?>
			  </div>
			</div>
		  </div> 
		  <?php } ?>
		  
		  
		  <?php if (get_option('wp_includemileage') == "Yes") { ?>
		   <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse4_Cars">
					<?php echo get_option('wp_mileage_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse4_Cars" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=mileage') ?>
			  </div>
			</div>
		  </div>
		  <?php } ?>
		  
		  <?php if (get_option('wp_includemodelyear') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse5_Cars">
						<?php echo get_option('wp_modelyear_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse5_Cars" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=modelyear') ?>
			  </div>
			</div>
		  </div>  
		  <?php } ?>
		  
		  
		  <?php if (get_option('wp_includepricerange') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse6_Cars">
					<?php echo get_option('wp_pricerange_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse6_Cars" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=pricerange') ?>
			  </div>
			</div>
		  </div>  
		  <?php } ?>
		  
		  <?php if (get_option('wp_includetransmission') == "Yes") { ?>
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionBrowseBy" href="#BrowseByCollapse7_Cars">
						<?php echo get_option('wp_transmission_text2') ?>
			  </a>
			</div>
			<div id="BrowseByCollapse7_Cars" class="accordion-body collapse">
			  <div class="accordion-inner">
					<?php wp_tag_cloud('format=list&taxonomy=transmission') ?>
			  </div>
			</div>
		  </div>  
		  <?php } ?>
		
<?php } ?>

</div>


	