<? get_header() ?>

<? if (have_posts()) : ?>

  <? while (have_posts()) : the_post() ?>
    <article>
      <h2><a href="<? the_permalink() ?>"><? the_title() ?></a></h2>
      <? the_excerpt() ?>
    </article>
  <? endwhile ?>

<? endif ?>

<? posts_nav_link() ?>
<? get_sidebar() ?>
<? get_footer() ?>
