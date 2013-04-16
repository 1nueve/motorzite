<!-- internal javascript, so it can mix javascript with PHP -->
<script type="text/javascript">
/* <![CDATA[ */  
$(document).ready(function() {


$('#slider').unoslider({
	preset: '<?php echo get_option('wp_slideshowtransition') ?>',
	slideshow: {speed: <?php echo get_option('wp_seconds') ?>}
}); 


$('.dsidx-search-button input[type=submit]').val('<?php echo get_option('wp_searchbutton_text') ?>');

 //cycle plugin for property detail page
$('#sliderimage').after('<div class="detailpagethumbnails"><div class="items">').cycle({
	fx: 'fade',
	timeout: 0,
	slideExpr: "div.image",
	pager: ".items",
	// callback fn that creates a thumbnail to use as pager anchor 
    pagerAnchorBuilder: function(idx, slide) { 
	
		var src = $('img', slide).attr('rel');
				
        return '<div class="thumb"><img src="' + src + '" /></div>';
    } 
	});
 
 <?php if (is_home() && get_option('wp_demo') == "on") { ?>

$('#demo').hide();
$('#picker').farbtastic('#color');

<?php } ?> 


$('#colorschemechanger .btn').click(function() {
	var colorscheme = $('#color').val();
	$.cookie("color", colorscheme);
	<?php if (get_option('wp_site') == "Real Estate") { ?>
		window.location.href="http://www.informatik.com/themeforest/opendoor_realestate/index.php";
	<?php } else { ?>
		window.location.href="http://www.informatik.com/themeforest/opendoor_carsales/index.php";
	<?php } ?>
});

$('#resetcolorscheme').click(function() {
	$.cookie("color", null);
	<?php if (get_option('wp_site') == "Real Estate") { ?>
		window.location.href="http://www.informatik.com/themeforest/opendoor_realestate/index.php";
	<?php } else { ?>
		window.location.href="http://www.informatik.com/themeforest/opendoor_carsales/index.php";
	<?php } ?>
});
});

/* ]]> */
</script>