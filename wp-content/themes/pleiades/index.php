<?php get_header(); ?>

  <?php
  if( is_category() ) {
    $cat = get_category( get_query_var('cat') );
    $cat = $cat->slug;
  }
  ?>

  <div class="hero <?php if( is_category() ) { echo 'hero--' . $cat; } ?>">
    <div class="inner">
      <h1 class="hero-title">Writing</h1>
    </div>
  </div>

  <div class="container">
    <div class="content">
      
      <h2 class="content-heading">
      <?php
      if( is_category() ) {
        echo 'Posts in &ldquo;' . single_cat_title('', false) . '&rdquo;';
      } else {
        echo 'Recent Posts';
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
        <h1 class="post-title"><a href="<?php the_permalink(); ?>" class="link--bordered link--background"><?php the_title(); ?></a></h1>
        <div class="post-excerpt">
        <?php
        if( has_excerpt() ) {
          the_excerpt();
          echo '<a href="'.get_the_permalink().'" class="post-more link--bordered link--background">Read more&hellip;</a>';
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

    <aside class="sidebar">
      <h2 class="sidebar-heading">Categories</h2>
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
    </aside>

    <nav class="pagination">
      <span class="pagination-prev"><?php echo get_previous_posts_link('&larr; Newer Posts'); ?></span>
      <span class="pagination-next"><?php echo get_next_posts_link('Older Posts &rarr;'); ?></span>
    </nav>
  </div>

<?php get_footer(); ?>