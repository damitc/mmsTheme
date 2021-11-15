<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class() ?>>

  <!-- Nav with Popout mobile nav menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/mtMovingLogoHighRezv2.svg" alt="Montana Moving Solutions" width="107px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>
                <form class="d-flex" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search for..', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    
    