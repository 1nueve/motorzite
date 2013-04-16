<div id="basicsearch">
        <form method="get" id="searchform" action="<?php home_url(); ?>/">
			<fieldset>
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
                <input type="image" src="<?php get_template_directory_uri()?>/images/mag.jpg" id="go" alt="Search" title="Search" />
			</fieldset>
        </form>
</div>