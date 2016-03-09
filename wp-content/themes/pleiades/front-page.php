<?php get_header(); ?>

  <div class="hero home-hero">
    <div class="inner">
      <h1 class="hero-title home-title">Creating digital experiences through <span>design, writing, and&nbsp;code.</span></h1>
      <a href="<?php echo site_url(); ?>/about" class="home-cta">
        <span>Learn more</span>
      </a>
    </div>
  </div>

  <?php
  $recentPosts = get_posts('posts_per_page=6');
  ?>
  <main class="container home-container">
    <?php
    foreach( $recentPosts as $post ) :
    setup_postdata($post);

    $category = get_the_category();
    $category = $category[0]->slug;

    $source = get_post_meta(get_the_id(), 'source', true) ? get_post_meta(get_the_id(), 'source', true) : 'default';
    if( $source != 'default' ) {
      $sourceNice = get_post_meta(get_the_id(), 'sourceNice', true) ? ' &bull; ' . get_post_meta(get_the_id(), 'sourceNice', true) : ' &bull; ' . ucfirst(get_post_meta(get_the_id(), 'source', true));
    } else { $sourceNice = ''; }
    $url = get_post_meta(get_the_id(), 'url', true);
    ?>
    
    <article class="home-container-block home-category-<?php echo $category; ?> post-source-<?php echo $source; ?>">
      <div class="home-block-content">
        <span class="home-block-heading"><?php echo get_the_date(); ?><?php echo $sourceNice; ?></span>
        <?php if( ! get_post_meta(get_the_id(), 'url', true) ) : ?>
        <h1 class="home-block-title"><a href="<?php the_permalink(); ?>" class="link--bordered link--background"><?php the_title(); ?></a></h1>
        <?php else: ?>
        <h1 class="home-block-title"><a href="<?php echo $url; ?>" class="link--bordered link--background" target="_blank"><?php the_title(); ?> <i>&rarr;</i></a></h1>
        <?php endif; ?>

        <?php the_excerpt(); ?>
      </div>

      <?php if( ! get_post_meta(get_the_id(), 'url', true) ) : ?>
      <a href="<?php echo get_the_permalink(); ?>" class="post-more link--bordered link--background home-block-link">Read more&hellip;</a>
      <?php else: ?>
      <a href="<?php echo $url; ?>" target="_blank" class="post-more link--bordered link--background home-block-link">Read the article&rarr;</a>
      <?php endif; ?>
    </article>

    <?php endforeach; ?>
  </main>

<?php get_footer(); ?>