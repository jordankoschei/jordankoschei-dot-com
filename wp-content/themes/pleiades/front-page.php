<?php get_header(); ?>

  <div class="hero home-hero">
    <div class="inner">
      <h1 class="hero-title home-title">Designer, developer, and&nbsp;writer.</h1>
      <a href="<?php echo site_url(); ?>/about" class="home-cta">
        <span>Learn more</span>
      </a>
    </div>
  </div>

  <div class="container home-container">

    <article class="home-container-block">
      <span class="home-block-heading">Recent Writing</span>
      <?php
      $post = get_posts('posts_per_page=1');
      $post = $post[0];
      setup_postdata($post);
      ?>
      <h2 class="home-block-title"><a href="<?php the_permalink(); ?>" class="no-border"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="home-block-link no-border">Continue reading &rarr;</a>
    </article>

    <article class="home-container-block">
      <span class="home-block-heading">Elsewhere &bull; <em>A List Apart</em></span>
      <h2 class="home-block-title"><a href="" class="no-border">UX for the Enterprise</a></h2>
      <p>Enterprise UX often involves navigating cumbersome processes, ancient technology, and clients skeptical of design’s value. Yet Fortune 500 companies are often the ones most in need of well-designed internal tools. This article talks about common problems lurking in global organizations, and how we can improve people’s lives by giving internal tools the same attention as consumer interfaces.</p>
      <a href="http://alistapart.com/article/ux-for-the-enterprise" class="home-block-link no-border">Continue reading &rarr;</a>
    </article>
    
  </div>

<?php get_footer(); ?>