<?php get_header(); ?>

  <?php $has_image = has_post_thumbnail(); ?>
  <div class="hero <?php if($has_image) { echo 'has-image'; } ?>">
    <?php the_post_thumbnail(); ?>
  </div>
  <?php if( get_post_thumbnail_caption() ) : ?>
  <div class="inner mobile-only"><span class="img-caption hero-caption"><?php echo get_post_thumbnail_caption(); ?></span></div>
  <?php endif; ?>

  <div class="container" id="container">

    <article class="post container-primary">
      <span class="post-date"><?php echo get_the_date(); ?></span>
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-excerpt"><?php the_content(); ?></div>
    </article>

    <div class="container-secondary">
    <span class="img-caption hero-caption-desktop desktop-only"><?php echo get_post_thumbnail_caption(); ?></span>

      <a href="<?php echo site_url(); ?>/writing" class="container-secondary-back">Back to All Posts</a>
      
      <h2 class="container-tertiary">Categories</h2>
      <ul class="categories">
        <?php
        $categories = get_the_category();
        foreach($categories as $category) {
          $menu .= '<li class="cat-item cat-item-' . $category->slug . '"><a href="'.get_category_link($category->term_id).'">' . $category->name . '</a></li>';
        }
        echo $menu;
        ?>
      </ul>
    </div>

    <nav class="pagination">
      <span class="pagination-prev"><?php next_post_link( '%link', '&larr; <span class="gt-lg">%title</span><span class="lt-lg">Newer Post</span>' ); ?></span>
      <span class="pagination-next"><?php previous_post_link( '%link', '<span class="gt-lg">%title</span><span class="lt-lg">Older Post</span> &rarr;' ); ?></span>
    </nav>

  </div>

<?php get_footer(); ?>