<html>

    <head>
        <title><?php echo wp_title() ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Link CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/_css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/_css/style.css">

        <!-- Link JS -->
        <script src="<?php echo get_template_directory_uri() ?>/assets/_js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/_js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/_js/scripts.js"></script>


        <?php wp_head() ?>
    </head>
    <body class='<?php echo body_class() ?>'>
    <header id="header">
            <nav class="navbar navbar-default" role="navigation">
            	<div class="container">
            		<div class="navbar-header">
            			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            				<span class="sr-only">Toggle navigation</span>
                    		<span class="icon-bar"></span>
                    		<span class="icon-bar"></span>
                    		<span class="icon-bar"></span>
            			</button>
                        <a class="" href="<?php echo home_url(); ?>">
                            <img src="<?php the_field('logo', 'option') ?>" alt="" class='logo' style='width: 200px;'>
            				
                    	</a>
            		</div>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                    ?>
                </div>
            </nav>
        </header>