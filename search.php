<? get_header(); ?>

<section id="content">

	<h1><? the_search_query(); ?></h1>
    
	<? get_search_form(); ?>
   
	<? if (have_posts()) : ?>
    
        <? while (have_posts()) : the_post(); ?>

        	<article>
    
            	<h2><a href="<? the_permalink() ?>"><? the_title(); ?></a></h2>
    
            	<? the_excerpt(); ?>

        	</article>
    
        <? endwhile; ?>
    
    <? endif; ?>
    
    <? posts_nav_link(); ?>  
 
</section>    
 
<? get_sidebar(); ?>

<? get_footer(); ?>