<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/normalize.css'?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/main.css'?>">
        <script src="js/vendor/modernizr-2.6.1.min.js"></script>
    </head>
    <body>
		<section class="header">
			<h2 class="blog-title"><?php echo get_bloginfo('name') ?></h2>
			<em><?php echo get_bloginfo('description') ?></em>
		</section>
		<img class="wip-pic" src="<?php echo get_stylesheet_directory_uri().'/img/sism-wip.png' ?>">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <section class="container">
            <h1>Work in Progress</h1>
            <p>Scusateci, il sito è in aggiornamento!</p>
        </section>

		<section class="footer">
			<p>Brought to you by: <a href="www.sism.org" alt="Segretariato Italiano Studenti Medicina" title= ="www.sism.org">SISM - Segretariato Italiano Studenti Medicina</a></p>
		</section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>

