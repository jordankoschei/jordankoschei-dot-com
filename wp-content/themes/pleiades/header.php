<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

  <title><?php wp_title('-'); ?></title>

  <?php wp_head(); ?>

  <script src="https://use.typekit.net/ciy2pci.js"></script>
  <script>try{Typekit.load({ async: false });}catch(e){}</script>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://www.jordankoschei.com/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.jordankoschei.com/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.jordankoschei.com/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.jordankoschei.com/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="http://www.jordankoschei.com/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://www.jordankoschei.com/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://www.jordankoschei.com/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://www.jordankoschei.com/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="http://www.jordankoschei.com/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="http://www.jordankoschei.com/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="http://www.jordankoschei.com/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="http://www.jordankoschei.com/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="http://www.jordankoschei.com/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="Jordan Koschei"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="http://www.jordankoschei.com/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="http://www.jordankoschei.com/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="http://www.jordankoschei.com/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="http://www.jordankoschei.com/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="http://www.jordankoschei.com/mstile-310x310.png" />

</head>
<body <?php body_class(); ?>>

  <header class="header">
    <div class="header-logo-container">
      <a href="<?php echo site_url(); ?>" class="header-logo">Jordan <dfn title="[kō-shī]"><span>Koschei</span></dfn></a>
    </div>

    <nav class="header-menu">
      <ul class="header-menu-items">
        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s')); ?>
      </ul>
      <ul class="header-social">
        <li class="header-social-item twitter"><a href="https://twitter.com/jordankoschei">@jordankoschei</a></li>
        <li class="header-social-item mail"><a href='ma&#105;lto&#58;j&#111;&#114;%64&#37;61n&#64;jor%&#54;4&#97;n&#107;&#37;&#54;F%73%63hei&#46;co&#37;6&#68;'>jord&#97;n&#64;jordan&#107;o&#115;c&#104;&#101;i&#46;&#99;o&#109;</a></li>
      </ul>
    </nav>
  </header>