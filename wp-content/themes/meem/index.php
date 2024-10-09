<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    
    <header id="header_area" class="<?php echo get_theme_mod('menu_position'); ?>">
        <div class="container">
            <div class="header-left">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/img.png" alt=""></a>
            </div>
            <div class="header-right">
                <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' =>'nav')); ?>
            </div>
        </div>
    </header>


    <section id="body_area">
        <div class="container">
            <?php the_content(); ?>
        </div>


        <div class="">
          <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
          ?>
          <div class="blog_area">
              <div class="post_thumb">
                <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
              </div>
              <div class="post_details">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
              </div>
          </div>
            <?php
              endwhile;
              else :
                _e('No post found');
              endif;
            ?>

          
        </div>

    </section>

    <footer id="footer_area">

<section id="copyright_area">
  <div class="container">
        <p><?php echo get_theme_mod('copyright_section'); ?></p>
  </div>
</section>
</footer>



<?php wp_footer(); ?>
</body>
</html>
