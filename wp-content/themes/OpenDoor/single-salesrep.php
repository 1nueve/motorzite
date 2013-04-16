<?php
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); 
	include get_template_directory() . '/includes/variables.php';
?>


	<div class="sixteen columns outercontainer bigheading">
	<div class="four columns alpha">
	&nbsp;
	</div>
	<div class="twelve columns omega">
    	<h2 id="title"><?php the_title(); ?></h2>
	</div>
	</div>	


<div class="sixteen columns outercontainer" id="content">
	<div class="four columns alpha" id="leftsidebar">
		<?php get_sidebar() ?>
	</div>
	
	<div class="twelve columns omega">	

		<div class="eight columns alpha">
				<?php $arr_sliderimages = get_gallery_images();
				if ($arr_sliderimages) { ?>
					<?php $resized = aq_resize($arr_sliderimages[0], 150, 190, true); ?>
					<img class="alignleft" width="150" height="190" alt="" src="<?php echo $resized ?>" />
				<?php } ?>
		
			<?php the_content(); ?>
		</div>
	
	
	
		<div class="four columns omega">
			<div class="detailpagecontactblock">

				
				<p>
					<?php if ($salesreptitle) { ?>
						<strong><?php echo $salesreptitle ?></strong><br />
					<?php } ?>
					
					<?php if ($salesrepemail) { ?>
						<a href="mailto:<?php echo $salesrepemail ?>"><?php echo get_option('wp_email_text') ?></a><br />
					<?php } ?>
					
					<?php if($salesrepphoneoffice) { ?>
						<?php echo get_option('wp_salesrepphone1') . ": " . $salesrepphoneoffice ?><br />
					<?php } ?>
					
					<?php if($salesrepphonemobile) { ?>
						<?php echo get_option('wp_salesrepphone2') . ": " . $salesrepphonemobile ?><br />
					<?php } ?>
					
					<?php if($salesrepfax) { ?>
						<?php echo get_option('wp_salesrepfax') . ": " . $salesrepfax ?><br />
					<?php } ?>
				</p>
			</div>
		</div>


		

	</div>
	<?php endwhile; endif; ?>
		
</div>

<?php get_footer(); ?>