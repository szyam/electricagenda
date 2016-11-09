<?php
include('../config.php');
$current_page   = 'festivals';
$page_title     = 'Mobile Friendly Electronic Music Festival Schedules and Artist Information';
include($path.'inc/header.php'); ?>


<!-- Start Festivals -->

<section class="banner">
    <div class="row">
        <div class="small-12 columns text-center">
            <h1>Electronic Music Festivals</h1>
            <h3>Artist Schedules, Music & Information</h3>
        </div>
    </div>
</section>


<section class="row">
    <div class="small-12 columns">
        <ul class="inline-list filter-controls">
            <li><h5>Filter By:</h5></li>
            <li><h5 class="filter" data-filter="all">All</h5></li>
            <li><h5 class="filter" data-filter=".US">US</h5></li>
            <li><h5 class="filter" data-filter=".Europe">European</h5></li>
        </ul> 

        <ul class="inline-list sort-controls">
            <li><h5>Sort By:</h5></li>
            <li><h5 class="sort" data-sort="name:asc">Name</h5></li>
            <li><h5 class="sort" data-sort="date:asc">Date</h5></li>
        </ul>

        <?php include($path.'data/festival/festival-array.php'); ?>

        <ul id="festival-container" class="festival-grid">

            <?php
            // $mycount = count($festivals);
            // print $mycount;
            ?>

            <?php foreach ( $festivals as $festival ) { ?>

            <?php if ( strtotime($festival['end_date']) >= time() ) { ?>
                <li class="mix <?php echo $festival['origin']; ?>" data-name="<?php echo $festival['name']; ?>" data-date="<?php echo $festival['start_date']; ?>">
                    <a href="<?php echo yearly($festival['start_date']); ?>/<?php echo stringy($festival['name']); ?>" <?php if ( !$festival["live"] ) {  echo 'class="false"'; } ?>>
                        <h2 class="title"><?php echo $festival["name"]; ?></h2>
                        <h4 class="date"><?php echo datey($festival['start_date']); ?></h4>
                    </a>
                    <div class="img-cont" style="background:url('../img/thumbs/<?php echo stringy($festival['name']); ?>.jpg')"></div>
                </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>

    <div class="small-12 columns expired">
        <h5>Previous Festivals</h5>
        <ul class="inline-list">

            <?php foreach ( $festivals as $festival ) { ?>

            <?php if ( strtotime($festival['end_date']) < time() ) { ?>
                <li class="<?php echo $festival['origin']; ?>" data-name="<?php echo $festival['name']; ?>" data-date="<?php echo $festival['start_date']; ?>">
                    <a href="<?php echo yearly($festival['start_date']); ?>/<?php echo stringy($festival['name']); ?>">
                        <h4 class="title"><?php echo $festival["name"]; ?>
                            <span class="date"><?php echo datey($festival['start_date']); ?></span>
                        </h4>
                    </a>
                </li>
                <?php } ?>
            <?php } ?>

        </ul>
    </div>

</section>

<section class="row">

</section>

<?php include('../inc/footer.php'); ?>
</body>
</html>
