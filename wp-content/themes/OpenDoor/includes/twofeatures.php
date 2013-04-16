<?php 

switch (get_option('wp_firstfeature')) {
	case "Beds":
			echo $beds . " " . get_option('wp_bedrooms_text') . " | ";
			break;
	case "Baths":
			echo $baths . " " . get_option('wp_bathrooms_text') . " | ";
			break;
	case "Size":
			echo number_format((float)$size, 0, '.', get_option('wp_thousandseparator')) . " " . get_option('wp_sizesuffix_text') . " | ";
			break;
	case "Engine Size":
			echo $enginesize.get_option('wp_enginesizesuffix_text'). " | ";
			break;
	case "Transmission":
		echo $trans. " | ";
		break;
	case "Mileage":
			echo number_format((float)$mileage, 0, '.', get_option('wp_thousandseparator')) . " " . get_option('wp_mileage_suffix') . " | ";
			break;
	case "Body Type":
		echo $body_type;
		if ($body_type2) {
			echo ", " . $body_type2;
			}
		if ($body_type3) {
			echo ", " . $body_type3;
			}
		echo " | ";
		break;
	case "Year":
		echo $year. " | ";
		break;
}



switch (get_option('wp_secondfeature')) {
	case "Beds":
			echo $beds . " " . get_option('wp_bedrooms_text') . " | ";
			break;

	case "Baths":
			echo $baths . " " . get_option('wp_bathrooms_text') . " | ";
			break;
			
	case "Size":
			echo number_format((float)$size, 0, '.', get_option('wp_thousandseparator')) . " " . get_option('wp_sizesuffix_text') . " | ";
			break;

	case "Engine Size":
			echo $enginesize.get_option('wp_enginesizesuffix_text'). " | ";
			break;

	case "Transmission":
		echo $trans. " | ";
		break;
	case "Mileage":
				echo number_format((float)$mileage, 0, '.', get_option('wp_thousandseparator')) . " " . get_option('wp_mileage_suffix') . " | ";
				break;
	case "Body Type":
		echo $body_type;
		if ($body_type2) {
			echo ", " . $body_type2;
			}
		if ($body_type3) {
			echo ", " . $body_type3;
			}
		echo " | ";
		break;
	case "Year":
		echo $year. " | ";
		break;
}



switch (get_option('wp_thirdfeature')) {
	case "Beds":
			echo $beds . " " . get_option('wp_bedrooms_text');
			break;
	case "Baths":
			echo $baths . " " . get_option('wp_bathrooms_text');
			break;
	case "Size":
			echo number_format((float)$size, 0, '.', get_option('wp_thousandseparator')) . " " . get_option('wp_sizesuffix_text');
			break;
	case "Engine Size":
			echo $enginesize . get_option('wp_enginesizesuffix_text');
			break;
	case "Transmission":
		echo $trans;
		break;
	case "Mileage":
			echo number_format((float)$mileage, 0, '.', get_option('wp_thousandseparator')) . " " . get_option('wp_mileage_suffix');
			break;
	case "Body Type":
		echo $body_type;
		if ($body_type2) {
			echo ", " . $body_type2;
			}
		if ($body_type3) {
			echo ", " . $body_type3;
			}
		break;
	case "Year":
		echo $year;
		break;
}
?>