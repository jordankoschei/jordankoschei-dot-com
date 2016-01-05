<?php get_header(); ?>

  <div class="hero">
    <div class="inner">
      <h1 class="hero-title">Writing</h1>
    </div>
  </div>

  <div class="container">
    <div class="container-primary">
      
      <h2 class="container-subtitle">
      <?php
      if( is_category() ) {
        echo 'Posts in &ldquo;' . single_cat_title('', false) . '&rdquo;';
      } else {
        echo 'Recent Writing';
      }
      ?>
      </h2>
      
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

    <div class="container-secondary">
      <h2 class="container-tertiary">Categories</h2>
      <ul class="categories">
        <?php
        $categories = get_categories();
        $current = get_category(get_query_var('cat'))->slug;
        foreach($categories as $category) {
          $cur = '';
          if( $category->slug == $current ) {
            $cur = 'current-cat';
          }
          $menu .= '<li class="cat-item cat-item-' . $category->slug . ' ' . $cur . '"><a href="'.get_category_link($category->term_id).'">' . $category->name . '</a></li>';
        }
        if( is_category() ) {
          $menu .= '<li class="cat-item cat-item-all"><a href="'.site_url().'/writing">All Categories</a></li>';
        } else {
          $menu .= '<li class="cat-item current-cat cat-item-all"><a href="'.site_url().'/writing">All Categories</a></li>';
        }
        echo $menu;
        ?>
      </ul>

      <?php if( ! is_category() ) : ?>
      <!--
      <h2 class="container-tertiary no-border">Selected Writing Elsewhere</h2>
      <a href="http://alistapart.com/article/ux-for-the-enterprise" target="_blank" class="elsewhere">
        <span class="elsewhere-venue">A List Apart</span>
        <span class="elsewhere-title">UX for the Enterprise</span>
        <span class="elsewhere-date">November 18, 2014</span>
      </a>

      <a href="http://theindustry.cc/author/jordan" target="_blank" class="elsewhere">
        <span class="elsewhere-venue">The Industry</span>
        <span class="elsewhere-title">Author Archives</span>
        <span class="elsewhere-date">109 Articles</span>
      </a>
      -->
      <?php endif; ?>
    </div>

    <nav class="pagination">
      <span class="pagination-prev"><?php echo get_previous_posts_link('&larr; Newer Posts'); ?></span>
      <span class="pagination-next"><?php echo get_next_posts_link('Older Posts &rarr;'); ?></span>
    </nav>
  </div>

<?php get_footer(); ?>