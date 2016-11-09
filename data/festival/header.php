<?php 
    // Controls column-size class in main div below
    if (sizeof($days) === 3) {
        $columnsAmt = "medium-6 large-4";
        $daysAmt    = "threeDays";
    } else if (sizeof($days) === 4) {
        $columnsAmt = "medium-6";
        $daysAmt    = "fourDays";
    } else {
        $columnsAmt = "medium-6";
        $daysAmt    = "oneDay";
    }
?>
<section class="festival" style="background-image: url(<?php echo $root; ?>img/banners/<?php echo $str; ?>.jpg);">
    <div class="fest-background">
        <div class="row">
            <div class="small-12 columns text-center">
                <h1 class="text-center"><span id="fest-year"><?php echo $year; ?></span> <?php echo $page_title; ?></h1>
                <h5><?php if (sizeof($days) > 1) { 
                		echo $startDate .' - '. $endDate .', '. $location;
                	} else {
                		echo $startDate .', '. $location;
                	}
                ?></h5>
                    <p><small><a href="<?php echo $siteUrl; ?>" target="new"><?php echo $siteUrl; ?></a></small></p>
            </div>
        </div>
    </div>
</section>
