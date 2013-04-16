<?php include 'variables.php' ?>

<li class="four columns">
		<?php include get_template_directory() . '/includes/price.php'; ?>
</li>

<!-- 
*************************** HOUSES SITE *************************
***************************************************************
-->

<?php if (get_option('wp_site') == "Real Estate") { ?>

	<?php if($mls) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_mls_text'))?>:
		<?php echo $mls ?>
		</li>
	<?php } ?>	
	
	<?php if($propertytype) { ?>
		<li class="four columns">
			<?php echo $propertytype ?>
			<?php if($propertytype2) {
				echo ", " . $propertytype2;
			} ?>
		</li>
	<?php } ?>
	
	
	<?php if ($cr == "Residential") { ?>
		<?php if($beds) { ?>
			<li class="four columns">
				<?php echo trim(get_option('wp_bedrooms_text'))?>:
			<?php echo $beds ?>
			</li>
		<?php } ?>	
		
		<?php if($baths) { ?>
			<li class="four columns">
				<?php echo trim(get_option('wp_bathrooms_text'))?>:
			<?php echo $baths ?>
			</li>
		<?php } ?>	
	<?php } ?>

	<?php if($size) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_size_text'))?>:
		<?php echo number_format((float)$size, 0, '.', get_option('wp_thousandseparator')) ?> <?php echo get_option('wp_sizesuffix_text') ?>
		</li>
	<?php } ?>
	
	<?php if($lotsize) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_lotsize_text'))?>:
		<?php echo number_format((float)$lotsize, 0, '.', get_option('wp_thousandseparator')) ?> <?php echo get_option('wp_sizesuffix_text') ?>
		</li>
	<?php } ?>	

	<?php if($garage !=0) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_garage_text'))?>:
		<?php echo $garage ?>
		</li>
	<?php } ?>	
	
	<?php if($date) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_dateavailable_text'))?>:
		<?php echo $date ?>
		</li>
	<?php } ?>	
	
	<?php if($year) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_year_text'))?>:
		<?php echo $year ?>
		</li>
	<?php } ?>
	
	<?php if($cr) { ?>
		<li class="four columns">
		<?php echo $cr ?>
		</li>
	<?php } ?>		
	
	
	<?php if($school) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_schooldistrict_text'))?>:
		<?php echo $school ?>
		</li>
	<?php } ?>

<?php } ?>




<!-- 
*************************** CARS SITE *************************
***************************************************************
-->

<?php if (get_option('wp_site') == "Car Sales") { ?>

	<?php if($body_type) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_bodytype_text'))?>:
		<?php echo trim($body_type) ?>
		
		<?php if($body_type2) {
			echo ", " . trim($body_type2); } ?>
		<?php if($body_type3) {
			echo ", " . trim($body_type3); } ?>
		</li>
	<?php } ?>
	
	
	<?php if($dealerlocations) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_dealerlocation_text'))?>:
		<?php echo $dealerlocations ?>
		</li>
	<?php } ?>	

	<?php if($regno) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_regnumber_text'))?>:
		<?php echo $regno ?>
		</li>
	<?php } ?>

	<?php if($mileage) { ?>
		<li class="four columns">
		<?php echo number_format((float)$mileage, 0, '.', get_option('wp_thousandseparator')) . " " . get_option('wp_mileage_suffix') ?>
		</li>
	<?php } ?>

	<?php if($regdate) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_regdate_text'))?>:
		<?php echo $regdate ?>
		</li>
	<?php } ?>

	<?php if($year) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_year_text'))?>:
		<?php echo $year ?>
		</li>
	<?php } ?>

	<?php if($enginesize) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_enginesize_text'))?>: <?php echo $enginesize ?><?php echo get_option('wp_enginesizesuffix_text') ?>
		</li>
	<?php } ?>

	<?php if($trans) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_trans_text'))?>:
		<?php echo $trans ?>
		</li>
	<?php } ?>

	<?php if($fueltype) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_fueltype_text'))?>:
		<?php echo $fueltype ?>
		</li>
	<?php } ?>

	<?php if($owners) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_owners_text'))?>:
		<?php echo $owners ?>
		</li>
	<?php } ?>

	<?php if($extcolor) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_extcolor_text'))?>:
		<?php echo $extcolor ?>
		</li>
	<?php } ?>

	<?php if($intcolor) { ?>
		<li class="four columns">
			<?php echo trim(get_option('wp_intcolor_text'))?>:
			<?php echo $intcolor ?>
		</li>
	<?php } ?>
<?php } ?>





