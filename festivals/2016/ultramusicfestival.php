<?php
include('../../config.php');
// Variables to set-up the individual festival page.
$current_page   = 'festival';
$page_title     = 'Ultra Music Festival';
$withSchedule   = true;

include($path.'data/festival/festival-array.php');
include($path.'data/festival/setup.php');
?>

<?php 
    // Start off with Days and Stages
    $days = array(
        "Friday", "Saturday", "Sunday"
    );

    $stages = array(
        "Ultra Main Stage", "Live Stage", "Carl Cox And Friends", "Resistance Arcadia", "Ultra Worldwide", "UMF Radio"
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
    var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/1jffRIyxvklUer83qc6gNIcOyoG5zsIQp1Ufm42MoYCg/edit#gid=0';

    <?php include($path.'data/festival/sheetrock.php'); ?>
    
</script>


<script type="text/javascript">
    // Exceptions
    $(document).ready( function(){
        $('ul#Sunday-carlcoxandfriends').siblings('h3').text('Im In a State Of Trance');
    });
</script>

</body>
</html>
