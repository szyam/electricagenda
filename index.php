<?php
include($path.'config.php');
$current_page   = 'home';
$page_title     = 'Electronic Music News & Festival Information';
include('inc/header.php'); ?>

<?php include('data/article/article-array.php'); ?>

<?php 
    $rev = array_reverse($articles);
    $name = preg_replace("/[^a-zA-Z]/", "", $rev[0]["artist_name"]);
    $str  = strtolower($name);
?>


<header class="feat-article" id="imgFocus">
    <section class="feat-article-container">

        <section class="row">
            <div class="medium-12 columns text-left">

                <div class="feat-copy animated slideInLeft left">
                    <h1><?php echo $rev[0]['title']; ?></h1>
                    <p><?php echo $rev[0]['subtitle']; ?></p>
                    <a href="articles/<?php echo linky($rev[0]['title']); ?>" class="button">Full Article</a>
                </div>

            </div>
        </section>
        <div class="bg-img" data-bg="img/articles/<?php echo $str; ?>" style="background:url('img/articles/<?php echo $str; ?>-blur.jpg')"></div>
        
    </section>
</header>


<section class="article-archive">

    <div class="row">
        <div class="small-12 columns">
           <ul class="articles-loop">

        <?php
        $latest = array_reverse($articles);
        $my_loop = (array_slice($latest, 1, 4)); ?>

        <?php foreach ($my_loop as $loop) { ?>

            <?php $date = DateTime::createFromFormat('Y-m-d', $loop['post_date']);

            $titleUrl   = $loop['title'];
            $name     = preg_replace("/[^a-zA-Z]/", "", $loop['artist_name'] );
            $str      = strtolower($name);
            ?>

                <li class="post animated fadeIn">

                   <aside class='feat-img'>
                        <a href="articles/<?php echo linky($titleUrl); ?>">
                            <img class='animated fadeIn' src="<?php echo $root; ?>img/articles/<?php echo $str; ?>-th.jpg">
                            <div class="post-overlay"></div>
                        </a>
                    </aside>

                    <div class="excerpt">
                        <h2 class="title"><a href="articles/<?php echo linky($titleUrl); ?>"><?php echo $loop['title']; ?></a></h2>
                        <!-- <h4 class="date"><?php
                            echo htmlspecialchars($date->format('n/j/y'), ENT_QUOTES, "UTF-8"); ?>
                        </h4> -->
                        <p><?php echo $loop['subtitle']; ?></p>
                        <a class="btn alt" href="articles/<?php echo linky($titleUrl); ?>">Read More</a>
                    </div>
                </li>

        <?php } ?>

            </ul>
        </div>
    </div>

    <footer class="row text-center footer-button">
        <a href="<?php echo $root; ?>articles/" class="button">Full List</a>
    </footer>
</section>

<!-- Start Festivals -->

<section class="banner">
    <div class="row">
        <div class="small-12 columns text-center">
            <h1>Electronic Music Festivals</h1>
            <!-- <h3>Artist Schedules, Music & Information</h3> -->
        </div>
    </div>
</section>

<section class="home-main-content">
    <div class="row">
        <div class="small-12 columns"><!--
            <ul class="inline-list filter-controls">
                <li><h5>Filter By:</h5></li>
                <li><h5 class="filter" data-filter="all">All</h5></li>
                <li><h5 class="filter" data-filter=".US">US</h5></li>
                <li><h5 class="filter" data-filter=".Europe">European</h5></li>
            </ul> -->

            <ul class="inline-list sort-controls">
                <li><h5>Sort By:</h5></li>
                <li><h5 class="sort" data-sort="name:asc">Name</h5></li>
                <li><h5 class="sort" data-sort="date:asc">Date</h5></li>
            </ul>

            <?php include('data/festival/festival-array.php'); ?>

            <ul id="festival-container" class="festival-grid">

                <?php foreach ( $festivals as $festival ) { ?>
                <?php
                    $name    = preg_replace("/[^a-zA-Z]/", "", $festival['name']);
                    $str     = strtolower($name);
                ?>

                <?php if ( strtotime($festival['end_date']) >= time() ) { ?>
                    <li class="mix <?php echo $festival['origin']; ?>" data-name="<?php echo $festival['name']; ?>" data-date="<?php echo $festival['start_date']; ?>">
                        <a href="festivals/<?php echo yearly($festival['start_date']); ?>/<?php echo $str; ?>" <?php if ( !$festival["live"] ) {  echo 'class="false"'; } ?>>
                            <h2 class="title"><?php echo $festival["name"]; ?></h2>
                            <h4 class="date"><?php echo datey($festival['start_date']); ?></h4>
                            <!-- <img src="<?php echo $festival['img']; ?>" /> -->
                        </a>
                        <div class="img-cont" style="background:url('img/thumbs/<?php echo $str; ?>.jpg')"></div>
                    </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>

        <div class="small-12 columns expired">
            <h5>Previous Festivals</h5>
            <ul class="inline-list">

                <?php foreach ( $festivals as $festival ) { ?>
                <?php
                    $name    = preg_replace("/[^a-zA-Z]/", "", $festival['name']);
                    $str     = strtolower($name);
                ?>

                <?php if ( strtotime($festival['end_date']) < time() ) { ?>
                    <li class="<?php echo $festival['origin']; ?>" data-name="<?php echo $festival['name']; ?>" data-date="<?php echo $festival['start_date']; ?>">
                        <a href="festivals/<?php echo yearly($festival['start_date']); ?>/<?php echo $str; ?>">
                            <h4 class="title"><?php echo $festival["name"]; ?>
                                <span class="date"><?php echo datey($festival['start_date']); ?></span>
                            </h4>
                        </a>
                    </li>
                    <?php } ?>
                <?php } ?>

            </ul>
        </div>
    </div>
</section>


<?php include('inc/footer.php'); ?>
</body>
</html>
