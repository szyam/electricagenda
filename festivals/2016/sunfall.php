<?php
include('../../config.php');
// Variables to set-up the individual festival page.
$current_page   = 'festival';
$page_title     = 'Sunfall';
$withSchedule   = true;
$withTime       = false;

include($path . 'data/festival/festival-array.php');
include($path . 'data/festival/setup.php');
?>

<?php 
    // Start off with Days and Stages
    $days = array(
        "Day", "Night"
    );

    $stages = array(
        "Brockwell Park", "Night Sessions"
    );
?>

<?php include($path . 'inc/header.php'); // Begin page Layout ?>

<style type="text/css">
/* sloppy cleanip */
    .Day .stage:last-of-type {
        display:none;
    }
    .Night .stage:first-of-type {
        display:none;
    }
</style>

    <?php include($path . 'data/festival/header.php'); ?>

<?php if( $withSchedule === true): // Main Template Conditional ?>

    <?php include($path . 'data/festival/scheduled.php'); ?>

<?php else: // Main Template Conditional Else ?>

    <?php include($path . 'data/festival/not-scheduled.php'); ?>

<?php endif; // Main Template Conditional End ?>


<?php include($path . 'inc/popup.php'); ?>
<?php include($path . 'inc/footer.php'); ?>

<script>
    // Define spreadsheet URL.
    var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/1PEiNC56lLEOZXgDz0KXS-y2VFcMOv7i9cAboEwrckI8/edit#gid=0';

    <?php include($path . 'data/festival/sheetrock.php'); ?>
    
</script>

</body>
</html>
