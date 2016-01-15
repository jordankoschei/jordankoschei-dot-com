<?php get_header(); ?>

  <?php $has_image = has_post_thumbnail(); ?>
  <div class="hero <?php if($has_image) { echo 'has-image'; } ?>">
    <?php the_post_thumbnail(); ?>
  </div>
  <?php if( get_post_thumbnail_caption() ) : ?>
  <div class="inner mobile-only"><span class="img-caption hero-caption"><?php echo get_post_thumbnail_caption(); ?></span></div>
  <?php endif; ?>

  <main class="container">

    <article class="content post">
      <span class="post-date"><?php echo get_the_date(); ?></span>
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-excerpt"><?php the_content(); ?></div>
    </article>

    <aside class="sidebar">
      <span class="img-caption hero-caption-desktop desktop-only"><?php echo get_post_thumbnail_caption(); ?></span>

      <a href="<?php echo site_url(); ?>/writing" class="sidebar-link link--bordered link--background">Back to All Posts</a>
      
      <h2 class="sidebar-heading">Categories</h2>
      <ul class="categories">
        <?php
        $categories = get_the_category();
        foreach($categories as $category) {
          $menu .= '<li class="cat-item cat-item-' . $category->slug . '"><a href="'.get_category_link($category->term_id).'">' . $category->name . '</a></li>';
        }
        echo $menu;
        ?>
      </ul>
    </aside>

    <nav class="pagination">
      <span class="pagination-prev"><?php next_post_link( '%link', '&larr; <span class="gt-lg">%title</span><span class="lt-lg">Newer Post</span>' ); ?></span>
      <span class="pagination-next"><?php previous_post_link( '%link', '<span class="gt-lg">%title</span><span class="lt-lg">Older Post</span> &rarr;' ); ?></span>
    </nav>

  </main>

  <script>
  (function(f){if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=f()}else if(typeof define==="function"&&define.amd){define([],f)}else{var g;if(typeof window!=="undefined"){g=window}else if(typeof global!=="undefined"){g=global}else if(typeof self!=="undefined"){g=self}else{g=this}g.fitvids=f()}})(function(){var define,module,exports;return function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s}({1:[function(require,module,exports){"use strict";var selectors=['iframe[src*="player.vimeo.com"]','iframe[src*="youtube.com"]','iframe[src*="youtube-nocookie.com"]','iframe[src*="kickstarter.com"][src*="video.html"]',"object"];var css=".fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}";module.exports=function(selector,opts){opts=opts||{};selector=selector||"body";if(isObject(selector)){opts=selector;selector="body"}var containers=queryAll(selector);if(containers.length<1)return;if(!document.getElementById("fit-vids-style")){var head=document.head||document.getElementsByTagName("head")[0];head.appendChild(styles())}var customSelector=toSelector(opts.players);var videoSelector=toSelector(selectors);if(customSelector.length){videoSelector=videoSelector+","+customSelector}containers.forEach(function(container){queryAll(container,videoSelector).forEach(wrap)})};function queryAll(el,selector){if(typeof el==="string"){selector=el;el=document}return Array.prototype.slice.call(el.querySelectorAll(selector))}function wrap(el){if(/fluid-width-video-wrapper/.test(el.parentNode.className))return;var widthAttr=parseInt(el.getAttribute("width"),10);var heightAttr=parseInt(el.getAttribute("height"),10);var width=!isNaN(widthAttr)?widthAttr:el.clientWidth;var height=!isNaN(heightAttr)?heightAttr:el.clientHeight;var aspect=height/width;el.removeAttribute("width");el.removeAttribute("height");var wrapper=document.createElement("div");el.parentNode.insertBefore(wrapper,el);wrapper.className="fluid-width-video-wrapper";wrapper.style.paddingTop=aspect*100+"%";wrapper.appendChild(el)}function toSelector(input){if(typeof input==="undefined")return"";return Array.isArray(input)?input.join():input}function styles(){var div=document.createElement("div");div.innerHTML='<p>x</p><style id="fit-vids-style">'+css+"</style>";return div.childNodes[1]}function isObject(input){return Object.prototype.toString.call(input)==="[object Object]"}},{}]},{},[1])(1)});
  fitvids();
  </script>

<?php get_footer(); ?>