<?php get_header(); ?>

  <hgroup class="home-hero">
  </hgroup>

  <section class="home-tiles inner">
    <ul class="tiles">
    <?php
    $posts = get_posts('posts_per_page=2');
    foreach($posts as $post) {
      setup_postdata( $post );
      ?>
      <li class="tile">
        <a href="<?php echo the_permalink(); ?>">
          <span><?php the_title(); ?></span>
        </a>
      </li>
      <?php
    }
    ?>
      <li class="tile">
        <a href="http://alistapart.com/article/ux-for-the-enterprise" target="_blank">
          <span>UX for the Enterprise</span>
        </a>
      </li>

      <?php
      $rss = fetch_feed( 'http://theindustry.cc/author/jordan/feed/' );
      if( ! is_wp_error( $rss ) ) :
        $maxitems = $rss->get_item_quantity(1); 
        $rss_items = $rss->get_items( 0, $maxitems );
        if( $rss_items ) :
          $item = $rss_items[0];
          ?>
          <li class="tile">
            <a href="<?php echo esc_url( $item->get_permalink() ); ?>" target="_blank">
              <span><?php echo $item->get_title(); ?></span>
            </a>
          </li>
          <?php
        endif;
      endif;
      ?>
    </ul>
  </section>

<?php get_footer(); ?>