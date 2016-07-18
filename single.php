<? get_header() ?>

  <? if ( have_posts() ) : the_post() ?>

    <article class="article" itemscope="" itemtype="http://schema.org/BlogPosting" role="article">

      <h1 class="article-title" itemprop="name"><? the_title(); ?></h1>

      <header class="article-meta">
        <time datetime="<? the_date() ?>" itemprop="datePublished">
          <? date_post() ?>
        </time>
        <span itemprop="article-section"><? the_tags( '', ' · ', '' ) ?></span>
      </header>

      <section class="article-content" itemprop="description">
      	<? the_content(); ?>
      </section>

    </article>

  <? endif ?>

<? get_sidebar() ?>
<? get_footer() ?>
