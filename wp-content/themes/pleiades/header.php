<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

  <title><?php wp_title('-'); ?></title>

  <?php wp_head(); ?>

  <script src="https://use.typekit.net/ciy2pci.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<body <?php body_class(); ?>>

  <header class="header">
    <a href="<?php echo site_url(); ?>" class="header-logo">Jordan <dfn title="[kō-shī]">Koschei</dfn></a>

    <nav class="header-menu">
      <ul class="header-menu-items">
        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s')); ?>
        <li class="menu-item menu-item-social twitter"><a href="https://twitter.com/jordankoschei">@jordankoschei</a></li>
        <li class="menu-item menu-item-social email"><a href='ma&#105;lto&#58;j&#111;&#114;%64&#37;61n&#64;jor%&#54;4&#97;n&#107;&#37;&#54;F%73%63hei&#46;co&#37;6&#68;'>jord&#97;n&#64;jordan&#107;o&#115;c&#104;&#101;i&#46;&#99;o&#109;</a></li>
      </ul>
    </nav>
  </header>