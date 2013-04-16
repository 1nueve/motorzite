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
} ?>



<?php if($pricecustom) { ?>

	<?php echo $pricecustom; ?>
	
<?php } else { ?>

	<?php echo $before . $price . $after ?>
	<?php if (get_option('wp_site') == 'Real Estate') { ?>
		<?php if ($bor == "Rent") { echo stripslashes(get_option('wp_permonthtext'));} ?>
	<?php } ?>
<?php } ?>