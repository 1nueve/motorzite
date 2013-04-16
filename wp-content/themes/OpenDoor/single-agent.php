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
	<?php $agentname = get_the_title(); ?>
    	<h2 id="title"><?php the_title(); ?></h2>
	</div>
	</div>	


<div class="sixteen columns outercontainer" id="content">
	<div class="four columns alpha" id="leftsidebar">
		<?php get_sidebar() ?>
	</div>
	
	<div class="twelve columns omega">	
		<div class="bio">
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
						<?php if ($agenttitle) { ?>
							<strong><?php echo $agenttitle ?></strong><br />
						<?php } ?>
						
						<?php if ($agentemail) { ?>
							<a href="mailto:<?php echo $agentemail ?>"><?php echo get_option('wp_agentemail') ?></a><br />
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
					</p>
				</div>
			</div>
		</div>
		


		
		<div class="twelve columns alpha omega singleagentpage">
		
			<?php $agentlistings = new WP_Query('post_type=listing&posts_per_page=-1'); ?>

			<?php if ($agentlistings->have_posts()) : ?>
			
			<h3 class="bar">
				<?php echo get_option('wp_listings_text'); ?>			
			</h3>
			
			<?php while ($agentlistings->have_posts()) : $agentlistings->the_post(); 
			include get_template_directory() . '/includes/variables.php';		
			?>

			<?php if($agentname == $agent || $agentname == $agent2) { ?>
					<?php if (get_option('wp_listinglayout') == "One per row") {
						include get_template_directory() . '/includes/listings_row.php';
					} else {
						include get_template_directory() . '/includes/listings_grid.php';
					} ?>
			<?php } ?>


			<?php endwhile; else: ?>
			<?php endif; ?>
		</div>

		

	</div>
	<?php endwhile; endif; ?>
		
</div>

<?php get_footer(); ?>