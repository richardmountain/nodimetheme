<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php the_title(); ?> | <?php print get_bloginfo(); ?> - <?php print get_bloginfo('description'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <?php wp_head(); ?>
    </head>
    <body>

        <!-- Header -->
        <header class="site-header">

            <div class="container">

                <div class="row">

                    <div class="col-md-5  col-md-offset-1">
                        <div class="page-title">
                            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php print get_bloginfo(); ?></a></h1>
                            <p><?php print get_bloginfo('description'); ?></p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'primary',
                                        'theme_location'    => 'primary',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav  navbar-right',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
                            </div>

                        </nav>

                    </div>

                </div>

            </div>

        </header>