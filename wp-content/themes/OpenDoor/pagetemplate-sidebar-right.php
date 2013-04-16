<?php
/*
Template Name: Right Sidebar
*/
?>

<?php
 get_header(); 
?>

<div class="sixteen columns outercontainer bigheading">
	<h2 id="title"><?php the_title(); ?></h2>
</div>	


<div class="sixteen columns outercontainer" id="content">

	<div class="twelve columns alpha">	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			 <div <?php post_class() ?>    id="post-<?php echo the_ID(); ?>">
				<?php the_content(); ?>
			</div>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		<?php endwhile; else: ?>
	<?php endif; ?>
	</div>

	<div class="four columns omega">
		<?php include get_template_directory() . '/sidebar-right.php' ?>
	</div>

</div>

<?php get_footer(); ?>