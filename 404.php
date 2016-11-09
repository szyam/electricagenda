<?php 
$current_page   = '404';
$page_title     = 'Wrong Page, make a u turn.'; ?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <base href="http://www.electricagenda.com">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electric Agenda | <?php echo $page_title; ?></title>

    <link rel="canonical" href="http://www.electricagenda.com/" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Electric Agenda | Your Mobile Friendly Electronic Music Festival Schedule" />
    <meta property="og:description" content="Your Mobile Friendly Electronic Music Festival Schedule" />
    <meta property="og:url" content="http://www.electricagenda.com/" />
    <meta property="og:site_name" content="Electric Agenda" />
    <meta property="og:image" content="img/ea.jpg">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $prefix; ?>style.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- <link rel="canonical" href="http://electricagenda.com/<?php echo $page_title; ?>"> -->
    
    <script src="<?php echo $prefix; ?>bower_components/modernizr/modernizr.js"></script>

    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
    <script src="http://html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <script src="js/rem.js" type="text/javascript"></script>
    <link rel="stylesheet" href="stylesheets/ie8-grid.css" />
  <![endif]-->

    <meta name="google-site-verification" content="h9O-Uaim8isA9m0zu__BHD0kfWvL5mocgoFHtqDW_Ao" />
    
</head>

<body class="antialiased <?php echo $current_page .' '.$festival; ?>" data-fest="<?php echo $festival; ?>">
<header class="main-header" id="main-header" role="header">
    <section class="row">
        <div class="medium-6 large-8 columns site-title">
            <h1 title="Electric Agenda"><a href="/"><?php if ( $current_page === 'single' ) { 
			        include('../inc/text-logo.svg');
			    } else {
			        include('inc/text-logo.svg');
			    }
			?></a></h1>
        </div>
        <div class="medium-6 large-4 columns">
            <ul class="inline-list social">
            <?php if ( $current_page === 'home' ) : ?>
                <li><a href="http://www.facebook.com/sharer.php?u=http://www.electricagenda.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://twitter.com/share?url=http://www.electricagenda.com&text=Mobile Friendly Electronic Music Festival Schedules and Artist info&hashtags=electricagenda" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="mailto:?Subject=Mobile Friendly Electronic Music Festival Schedules and Artist info&Body=http://www.electricagenda.com"><i class="fa fa-envelope"></i></a></li>
                <li><a class="share"><i class="fa fa-arrow-left"> Share</i></a></li>
            <?php else: ?>
                <li><a href="http://www.facebook.com/sharer.php?u=http://www.electricagenda.com/<?php echo $year;?>/<?php echo $festival;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://twitter.com/share?url=http://www.electricagenda.com/<?php echo $year;?>/<?php echo $festival;?>&text=<?php echo $page_title; ?>&hashtags=electricagenda" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="mailto:?Subject=<?php echo $page_title; ?>&Body=http://www.electricagenda.com/<?php echo $year;?>/<?php echo $festival;?>"><i class="fa fa-envelope"></i></a></li>
                <li><a class="share"><i class="fa fa-arrow-left"> Share</i></a></li>
            <?php endif; ?>
            </ul>
        </div>
    </section>
</header>

<section class="banner">
    <div class="row">
        <div class="small-12 columns">
            <h1 class="text-center">Hmmm, this is our 404 error page</h1>
        </div>
    </div>
</section>

<section class="row" style="padding:5em 0 15em;">

    <div class="small-12 columns text-center">
        <h2>If you've found this page something funny has occured.</h2>
        <p>However, our site is small right now so just click <a href="/">here</a> to get to the home page, and follow a link from there.</p>  

    </div>

</section>

<footer class="main-footer">
    <div class="row text-center">
        <span class="logo">
            <a href="#main-header">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 185.5 118.3" enable-background="new 0 0 185.528 118.313" xml:space="preserve"><path d="M0 1.3h65.2v117H0v-12.1h51.6V68.5H3.1V56.5h48.5V13.4H0V1.3z"/><polygon fill-rule="evenodd" clip-rule="evenodd" points="85.6 118.3 128 25.6 171.5 118.3 185.5 118.3 128 0 72.2 118.3 "/><polygon fill-rule="evenodd" clip-rule="evenodd" points="113.6 118.3 128.7 84.2 142.6 118.3 154.8 118.3 128.7 52.2 100.7 118.3 "/></svg>
            </a>
        </span>
        <p><a href="#" data-reveal-id="contactModal">Connect</a></p>
        <p><small>Times, events and artists for the <?php echo $year; ?> <?php echo $page_title; ?> are subject to change at any time.</small></p>
        <p>Electric Agenda &copy; <small>All Rights Reserved</small></p>
    </div>
</footer>

<div id="contactModal" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">Connect with us.</h2>

    <div id="contact" class="small-12 columns">

      <form name="contactform" method="post" action="send_form_email.php">
      
        <label for="first_name">First Name</label>
       
        <input  type="text" name="first_name" placeholder="First Name">
       
        <label for="last_name">Last Name</label>
       
        <input  type="text" name="last_name" placeholder="Last Name">
       
        <label for="email">Email Address</label>
       
        <input  type="text" name="email" placeholder="Email">
       
        <label for="comments" id="comments">Comments Here:</label>
       
        <textarea  name="comments" placeholder="Some Words..."></textarea>
          <div id="submit-button">
        <input type="submit" value="& Go!" id="submit" class="button"> 
          </div>
      </form>

    </div>

    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>



    <script src="<?php echo $prefix; ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $prefix; ?>bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php echo $prefix; ?>js/jquery.mixitup.min.js"></script>
    <script src="<?php echo $prefix; ?>js/app.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63186624-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
