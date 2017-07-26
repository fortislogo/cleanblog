<?php
/**
 * The template for displaying the header
 * 
 */
?><!DOCTYPE html>
<html lang="en">

<head>    

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php wp_nav_menu( array(
                    'theme_location' => 'top',
                    'menu_id'        => 'top-menu',
                    'menu_class' => 'nav navbar-nav navbar-right'
                ) ); ?>
            </div>

            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <header class="intro-header" style="background-image: url('<?php the_post_thumbnail_url( 'full' ) ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <?php if (get_post_type() == 'post') { ?>

                    <div class="post-heading">
                        <h1><?php the_title(); ?></h1>
                        <h2 class="subheading"><?php echo get_field('subtitle'); ?></h2>
                        <span class="meta">Posted by <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><?php echo get_the_author() ?></a> on <?php echo get_the_date(); ?></span>
                    </div>
                    <?php } else { ?>
                    <div class="site-heading">
                        <h1><?php the_title(); ?></h1>
                        <hr class="small">
                        <?php 

                            $subtitle = get_field('subtitle');

                        ?>
                        <span class="subheading"><?php echo $subtitle; ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>