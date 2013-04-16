<?php
 get_header(); 
?>

<div class="sixteen columns outercontainer bigheading">
	<div class="four columns alpha">
		&nbsp;
	</div>
	<div class="twelve columns omega">
		<h2 id="title" class="blogtitle"><?php the_title(); ?></h2>
	</div>
</div>	


<div class="sixteen columns outercontainer" id="content">
	<div class="four columns alpha" id="leftsidebar">
		<?php get_sidebar() ?>
	</div>
	
	<div class="twelve columns omega">	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			 <div <?php post_class() ?>    id="post-<?php echo the_ID(); ?>">
		  
					<?php if (get_option('wp_showblogimage') == 'show') { ?> 
						<?php
						if ( has_post_thumbnail() ) {
							
							the_post_thumbnail('medium');
						}  ?>
					 <?php } ?>
					
<?php include get_template_directory() . '/includes/postmeta.php'; ?>
<?php the_tags() ?>
					<?php the_content(); ?>
						<?php if(get_option('wp_showsociallinks2') == "show") {
							include get_template_directory() . '/includes/sociallinks.php';
							}
						?>
				
					<?php if ($post->comment_status == "open") { ?>
					<?php comments_template('', true); ?>
					<?php } ?>
				
			</div>
		<?php endwhile; else: ?>
		 
		
<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>