<?php // template 4 day
include($path.'../../config.php');
$current_page   = 'festival';
$year           = '2015';
$page_title     = 'Electric&nbsp;Forest Festival Schedule and Line-Up';
$sub_title      =  'June 25th - 28th - Rothbury, Michigan';
$festival       =  "electricforest";
$str            =  "electricforest";
?>

<?php include($path.'inc/header.php'); ?>

<section class="festival">
    <div class="fest-background">
        <div class="row">
            <div class="small-12 columns">
                <h1 class="text-center"><span id="fest-year"><?php echo $year; ?></span> <?php echo $page_title; ?></h1>
                <p class="text-center"><strong><?php echo $sub_title; ?></strong></p>
            </div>
        </div>
    </div>
</section>

<section class="row show-for-small">
    <div data-magellan-expedition="fixed">
        <dl class="sub-nav">
            <dd data-magellan-arrival="thursday"><a href="#thursday">Thurs</a></dd>
            <dd data-magellan-arrival="friday"><a href="#friday">Fri</a></dd>
            <dd data-magellan-arrival="saturday"><a href="#saturday">Sat</a></dd>
            <dd data-magellan-arrival="sunday"><a href="#sunday">Sun</a></dd>
        </dl>
    </div>
</section>

<?php include($path.'data/legacy/electricforest-artist-array.php'); ?>

<div class="row">

    <div class="medium-6 columns day thursday">
        <header>
            <a name="thursday"></a>
            <h2 data-magellan-destination="thursday">Thursday</h2>
        </header>

        <div class="stage">
            <h3>Ranch Arena</h3>

            <ul>
                <?php foreach ( $artists as $ind => $artist ) {
                    if ( $artist["stage"] == 'Ranch Arena' && $artist["day"] == 'thursday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sherwood Court</h3>

            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Sherwood Court' && $artist["day"] == 'thursday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Tripolee</h3>
            <h5>Bassrush<br><small>Curated Event 1:30pm - 3:15am</small></h5>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Tripolee' && $artist["day"] == 'thursday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>The Hangar</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'The Hangar' && $artist["day"] == 'thursday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Jubilee</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Jubilee' && $artist["day"] == 'thursday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Forest Stage</h3>
            <h5>Crew Love<br><small>Curated Event 5pm - 2:45am</small></h5>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Forest Stage' && $artist["day"] == 'thursday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>The Observatory</h3>
            <h5>Communion<br><small>Curated Event 1:45pm - 11:30pm</small></h5>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'The Observatory' && $artist["day"] == 'thursday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->



    </div> <!-- end thurs -->




    <div class="medium-6 columns day friday">
        <header>
            <a name="friday"></a>
            <h2 data-magellan-destination="friday">Friday</h2>
        </header>

        <div class="stage">
            <h3>Ranch Arena</h3>
            <h5>Future Classic<br><small>Curated Event 5:15pm - 2am</small></h5>
            <ul>
                <?php foreach ( $artists as $ind => $artist ) {
                    if ( $artist["stage"] == 'Ranch Arena' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sherwood Court</h3>

            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Sherwood Court' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Tripolee</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Tripolee' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>The Hangar</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'The Hangar' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Jubilee</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Jubilee' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Forest Stage</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Forest Stage' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>The Observatory</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'The Observatory' && $artist["day"] == 'friday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end sunday -->





    <div class="medium-6 columns day saturday">
        <header>
            <a name="saturday"></a>
            <h2 data-magellan-destination="saturday">Saturday</h2>
        </header>

        <div class="stage">
            <h3>Ranch Arena</h3>

            <ul>
                <?php foreach ( $artists as $ind => $artist ) {
                    if ( $artist["stage"] == 'Ranch Arena' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sherwood Court</h3>

            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Sherwood Court' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Tripolee</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Tripolee' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>The Hangar</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'The Hangar' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Jubilee</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Jubilee' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Forest Stage</h3>
            <h5>Feat Impromtu Performances by The Image Nation</h5>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Forest Stage' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>The Observatory</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'The Observatory' && $artist["day"] == 'saturday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end saturday -->

    <div class="medium-6 columns day sunday">
        <header>
            <a name="sunday"></a>
            <h2 data-magellan-destination="sunday">Sunday</h2>
        </header>

        <div class="stage">
            <h3>Ranch Arena</h3>

            <ul>
                <?php foreach ( $artists as $ind => $artist ) {
                    if ( $artist["stage"] == 'Ranch Arena' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sherwood Court</h3>

            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Sherwood Court' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Tripolee</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Tripolee' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>The Hangar</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'The Hangar' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Jubilee</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Jubilee' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Forest Stage</h3>
            <h5>Feat Impromtu Performances by The Image Nation</h5>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'Forest Stage' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>The Observatory</h3>
            <ul>
                <?php foreach ( $artists as $artist ) {
                    if ( $artist["stage"] == 'The Observatory' && $artist["day"] == 'sunday') { ?>

                    <?php include($path.'data/legacy/artist_list.php'); ?>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end sunday -->

</div> <!-- end row -->

<?php include($path.'inc/popup.php'); ?>

<?php include($path.'inc/footer.php'); ?>
</body>
</html>
