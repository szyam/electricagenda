<?php
include('../../config.php');
$current_page   = 'single';
$year           = '2015';
$page_title     = '2015 Electric Zoo Festival Schedule and Line-Up';
$festival       = "electriczoo";
$str            = "electriczoo";
?>

<?php include($path.'inc/header.php'); ?>

<section class="festival">
    <div class="fest-background">
        <div class="row">
            <div class="small-12 columns text-center">
                <h1><?php echo $page_title; ?></h1>
                <span>Sept 4/5/6 | RANDALL'S ISLAND PARK NEW YORK CITY</span>
                <p><small>Names in alphbetical orders | More to come | Times TBA</small></p>
            </div>
        </div>
    </div>
</section>

<section class="row show-for-medium-down">
    <div data-magellan-expedition="fixed">
        <dl class="sub-nav">
            <dd data-magellan-arrival="friday"><a href="#friday">Friday</a></dd>
            <dd data-magellan-arrival="saturday"><a href="#saturday">Saturday</a></dd>
            <dd data-magellan-arrival="sunday"><a href="#sunday">Sunday</a></dd>
        </dl>
    </div>
</section>

<?php include($path.'data/legacy/electriczoo-artist-array.php'); ?>

<div class="row">

    <div class="medium-4 columns day friday">
        <header>
            <a name="friday"></a>
            <h2 data-magellan-destination="friday">Friday</h2>
        </header>

        <div class="stage">
            <h3>Main Stage</h3>

            <ul><?php asort($artists); // remove when sort by date ?>
                <?php foreach ( $artists as $ind => $artist ) {
                    if ( $artist["stage"] == 'Main Stage' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Hilltop Arena</h3>

            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Hilltop Arena' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Riverside</h3>
            <!-- <h5>Bassrush<br><small>Curated Event 1:30pm - 3:15am</small></h5> -->
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Riverside' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sunday School</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Sunday School' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end fri -->

    <div class="medium-4 columns day saturday">
        <header>
            <a name="saturday"></a>
            <h2 data-magellan-destination="saturday">Saturday</h2>
        </header>

        <div class="stage">
            <h3>Main Stage</h3>

            <ul>
                <?php foreach ( $artists as $ind => $artist ) {
                    if ( $artist["stage"] == 'Main Stage' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Hilltop Arena</h3>

            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Hilltop Arena' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Riverside</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Riverside' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sunday School</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Sunday School' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end sat -->

    <div class="medium-4 columns day sunday">
        <header>
            <a name="sunday"></a>
            <h2 data-magellan-destination="sunday">Sunday</h2>
        </header>

        <div class="stage">
            <h3>Main Stage</h3>

            <ul>
                <?php foreach ( $artists as $ind => $artist ) {
                    if ( $artist["stage"] == 'Main Stage' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Hilltop Arena</h3>

            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Hilltop Arena' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Riverside</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Riverside' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sunday School</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Sunday School' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end sun -->

</div> <!-- end row -->

<?php include($path.'inc/popup.php'); ?>
<?php include($path.'inc/footer.php'); ?>
</body>
</html>
