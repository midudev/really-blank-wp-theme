<? get_header(); ?>

<? if (have_posts()) : ?>
  
<? while (have_posts()) : the_post(); ?>

	<article>

    <h1><? the_title(); ?></h1>
      
    <? the_content(); ?>

		</article>

<? endwhile; ?>

<? endif; ?>

<p><? the_tags(); ?></p>
 
<? get_sidebar(); ?>

<? get_footer(); ?>