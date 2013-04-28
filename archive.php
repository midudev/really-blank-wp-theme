<?php get_header() ?>

	<h1><?php single_cat_title() ?></h1>
   
	<?php if ( have_posts() ) : ?>
    
        <?php while (have_posts()) : the_post(); ?>  

        	<article>
    
            	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    
            <?php the_excerpt(); ?>

            </article>
    
        <?php endwhile; ?>
    
    <?php endif; ?>
    
    <?php posts_nav_link(); ?>   
 
<?php get_sidebar(); ?>

<?php get_footer(); ?>