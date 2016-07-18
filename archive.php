<? get_header() ?>

<? if ( have_posts() ) : ?>

  <? if ( is_category() ) : ?>

    <? $title = _e( 'Entradas de la categoría', 'theme' ) . ' ' . single_cat_title(); ?>

  <? elseif ( is_tag() ) : ?>

    <? $title = _e( 'Entradas de la etiqueta', 'theme' ) . ' ' . single_tag_title() ?>

  <? else : ?>

    <? $title = _e( 'Entradas del archivo', 'theme' ) . ' ' .  the_time('F Y') ?>

  <? endif; ?>

  <h1 class='category-title'><?= $title ?></h1>

  <section id="blog_list" class="clearfix">

    <? while (have_posts()) : the_post(); ?>

      <a href="<? the_permalink() ?>" class="post">

        <article>
          <? if ( has_post_thumbnail() ) the_post_thumbnail( 'medium' ); ?>
          <h2><? the_title() ?></h2>
        </article>

      </a>

    <? endwhile; ?>

  </section>

<? endif; ?>

<div class="navigation clearfix">
    <div class="left"><? previous_posts_link('&laquo; Entradas más nuevas') ?></div>
    <div class="right"><? next_posts_link( 'Entradas anteriores &raquo;','') ?></div>
</div>

</section>

<? get_footer() ?>
