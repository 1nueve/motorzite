<?php
get_header(); 

$catid = get_query_var('cat');
$cat = &get_category($catid);
$parent = $cat->category_parent;
?>

<div class="sixteen columns outercontainer bigheading">
	<div class="four columns alpha">
		&nbsp;
	</div>
	<div class="twelve columns omega">
		<h2 id="title"><?php echo get_cat_name($catid) ?></h2>
	</div>
</div>	


<div class="sixteen columns outercontainer" id="content">
	<div class="four columns alpha" id="leftsidebar">
		<?php get_sidebar() ?>
	</div>
	
	<div class="twelve columns omega">	
		<?php $blog = new WP_Query('post_type=post&post_status=publish'); ?>
		<?php if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post(); ?>

			<div <?php post_class('four columns blogpageblogitem') ?> id="post-<?php the_ID(); ?>">
				<?php
				if ( has_post_thumbnail() ) {
					$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
					$resize = aq_resize($url, 220,220,true)	;
				}
				?>
				<img alt="" src="<?php echo $resize ?>" />
				
				<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
				
				<?php include get_template_directory() . '/includes/postmeta.php'; ?>
				<?php the_excerpt(); ?>

				<a class="btn btn-lightgray" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_option('wp_readmore_text') ?></a>

			</div>
			


			<?php endwhile ?>
			
				<div id="posts_navigation">
				<span id="nextlink"><?php next_posts_link('&laquo; ' . get_option('wp_olderentries')) ?></span>
				<span id="previouslink"><?php previous_posts_link(get_option('wp_newerentries') . ' &raquo;') ?></span>
				</div>
			
			<?php else : ?>

		<?php endif ?>
	</div>
</div>

<?php get_footer(); ?>


















