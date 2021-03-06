<?php
include('../../config.php');
// Variables to set-up the individual festival page.
$current_page   = 'festival';
$page_title     = 'Lightning In A Bottle';
$withSchedule   = false;

include($path.'data/festival/festival-array.php');
include($path.'data/festival/setup.php');
?>

<?php 
    // Start off with Days and Stages
    $days = array(
        "Saturday","Sunday","Monday"
    );

    $stages = array(
        "Alpha", "Beta", "Gamma", "Zeta"
    );
?>

<?php include($path.'inc/header.php'); // Begin page Layout ?>

    <?php include($path.'data/festival/header.php'); ?>

<?php if( $withSchedule === true): // Main Template Conditional ?>

    <?php include($path.'data/festival/scheduled.php'); ?>

<?php else: // Main Template Conditional Else ?>

    <?php include($path.'data/festival/not-scheduled.php'); ?>

<?php endif; // Main Template Conditional End ?>


<?php include($path.'inc/popup.php'); ?>
<?php include($path.'inc/footer.php'); ?>

<script>

    // Define spreadsheet URL.
    var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/1sCTR29wSpHePl5OukB2aVT3_IUvqJe2upil4pE-6RK4/edit#gid=0';

    <?php include($path.'data/festival/sheetrock.php'); ?>
    
</script>

</body>
</html>
