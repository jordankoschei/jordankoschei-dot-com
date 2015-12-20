<?php get_header(); ?>

  <div class="container">
    <div class="container-secondary">
      Test.
    </div>

    <div class="container-primary">

      <?php
      if( have_posts() ) :
      while( have_posts() ) :
      the_post();

      if( ! get_post_meta(get_the_id(), 'justalink', true) ) :
      ?>
      <article class="post">
        <div class="post-date"><?php echo get_the_date(); ?></div>
        <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="post-excerpt">
        <?php
        if( has_excerpt() ) {
          the_excerpt();
          echo '<a href="'.get_the_permalink().'" class="post-more">Read more&hellip;</a>';
        } else {
          the_content();
        }
        ?>
        </div>
      </article>
      <?php else: ?>
      <article class="post post-justalink">
        <div class="post-date"><?php echo get_the_date(); ?></div>
        <h1 class="post-title"><a href="<?php echo get_post_meta(get_the_id(), 'justalink-link', true); ?>" target="_blank"><?php the_title(); ?> <i>&rarr;</i></a></h1>
        <div class="post-excerpt">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
      endif;
      endwhile;
      endif;
      ?>

    </div>
  </div>

<?php get_footer(); ?>