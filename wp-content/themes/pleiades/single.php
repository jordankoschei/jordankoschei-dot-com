<?php get_header(); ?>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/speaking.jpg" class="hero">
  <div class="inner">
    <span class="hero-attr">Picture taken by Daniel Fitzgerald at CatskillsConf.</span>
  </div>

  <div class="container" id="container">

    <div class="container-secondary">
<!--       <span class="post-date"><?php echo get_the_date(); ?></span>
      <?php the_category(); ?> -->
    </div>

    <article class="post container-primary">
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-excerpt"><?php the_content(); ?></div>
    </article>

<!--     <div class="post-social-container inner" id="social">
      <ul class="post-social">
        <li class="post-social-twitter"><a href="#">Twitter</a></li>
        <li class="post-social-hn"><a href="#">Hacker News</a></li>
        <li class="post-social-dn"><a href="#">Designer News</a></li>
      </ul>
    </div> -->

  </div>

<?php get_footer(); ?>