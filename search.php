<?php get_header(); ?>

<section id="content">

	<h1><?php the_search_query(); ?></h1>
    
	<?php get_search_form(); ?>
   
	<?php if (have_posts()) : ?>
    
        <?php while (have_posts()) : the_post(); ?>

        	<article>
    
            	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    
            	<?php the_excerpt(); ?>

        	</article>
    
        <?php endwhile; ?>
    
    <?php endif; ?>
    
    <?php posts_nav_link(); ?>  
 
</section>    
 
<?php get_sidebar(); ?>

<?php get_footer(); ?>