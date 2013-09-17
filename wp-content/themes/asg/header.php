<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo get_the_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       <!-- <script src="../js/vendor/modernizr-2.6.1.min.js"></script>-->
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.slides.min.js"></script>
		
		<?php include('/functions.php'); ?>
		<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Header area ================== -->
        <header id="header">
            <div class="container">


                   <!--<nav id="mainmenu" class="menu">
                        <ul>
                            <li><a href="../index-2.html">Home</a></li>
                            <li><a href="#">Stem Classes</a>
                                <ul>
                                    <li><a href="computer-tech.html">Computer Technology</a></li>
									<li><a href="biotech.html">Biotechnology</a></li>
									<li class="current-menu-item"><a href="engineering.html">Pre-engineering</a></li>
                                </ul>
                            </li>
                            <li><a href="#">TSA Chapter</a>
                                <ul>
                                    <li><a href="../tsa/about.html">About Us</a></li>
                                </ul>
                            </li>
							<li><a href="#">Design Brief</a>
                                <ul>
                                    <li><a href="../brief/brief.html">The Brief</a></li>
									<li><a href="../brief/timeline.html">Timeline of News Media</a></li>
									<li><a href="../brief/habits.html">Readers' Changing Habits</a></li>
									<li><a href="../brief/suggestions.html">News Media Corporations</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>-->
					<a href="/"><h1 style="font-family: 'Roboto Slab', serif; color: #1d8cc2;"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></h1></a>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					
					

            </div><!-- /container -->
        </header><!-- /header -->
