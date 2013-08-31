<? get_header(); ?>

	<? if (have_posts()) : ?>

        	<article>

           		<h1><? the_title(); ?></h1>

            	<? the_content(); ?>

    		</article>

    <? endif; ?>

    <p><? the_tags(); ?></p>

<? get_sidebar(); ?>

<? get_footer(); ?>