<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php if ( $current_page === 'home' ) : ?>
        <title>Electric Agenda | <?php echo $page_title; ?></title>
    <?php else: ?>
        <title><?php echo $page_title; ?> | Electric Agenda</title>
    <?php endif; ?>
    <meta name="description" content="Electronic Music News & Festival Information" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $page_title; ?>" />
    <meta property="og:description" content="<?php if( $current_page === "article" ) { echo $articles[$current_id]["subtitle"]; } else { echo 'Electronic Music News & Festival Information' ;} ?>" />
    <meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
    <meta property="og:site_name" content="Electric Agenda" />
    <?php if( $current_page === "article") {
        echo '<meta property="og:image" content="'.$root.'img/articles/'. stringy($artist_name).'-th.jpg">';
    } else if( $current_page === "festival") {
        echo '<meta property="og:image" content="'.$root.'img/thumbs/'. stringy($page_title).'.jpg">';
    } else {
        echo '<meta property="og:image" content="'.$root.'img/ea-f.jpg">';
    } ?>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $root; ?>style.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- <link rel="canonical" href="http://electricagenda.com/<?php //if ( $current_page != 'home' ) { echo $cleanUrl; } ?>"> -->

    <link rel="canonical" href="http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />

    <script src="<?php echo $root; ?>bower_components/modernizr/modernizr.js"></script>

    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">

    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
    <script src="http://html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <script src="js/ie/rem.js" type="text/javascript"></script>
    <link rel="stylesheet" href="stylesheets/ie8-grid.css" />
  <![endif]-->

    <meta name="google-site-verification" content="h9O-Uaim8isA9m0zu__BHD0kfWvL5mocgoFHtqDW_Ao" />

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63186624-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<?php // removed $str from class ?>
<body class="antialiased <?php echo $current_page; ?>" <?php if( $current_page === "festival"): ?>data-fest="<?php echo $str; ?>"<?php endif; ?>>

<header class="main-header" id="main-header" role="header">
    <section class="row">
        <div class="large-3 columns site-title">
            <h1 title="Electric Agenda"><a href="<?php echo $root; ?>"><?php include($path.'inc/text-logo.svg'); ?></a></h1>
        </div>
        <nav class="large-6 columns">
            <ul class="inline-list social">
                <?php include('main-nav.php'); ?>
            </ul>

        </nav>
        <div class="large-3 columns">
            <ul class="inline-list social is-icons">
            <?php include('sharing.php'); ?>
            </ul>
        </div>
    </section>
</header>
