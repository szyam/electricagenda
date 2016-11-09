<?php if( $withSchedule === true ): // Main Template Conditional ?>

    <?php foreach ( $days as $day) { ?>
        <?php foreach ( $stages as $stage) { ?>

        var HRTemplate = Handlebars.compile($('#hr-template-<?php echo stringy($stage); ?>-<?php echo $day; ?>').html());

        // Load top five HR leaders.
        $('#<?php echo $day; ?>-<?php echo stringy($stage); ?>').sheetrock({
          url: mySpreadsheet,
          query: "select A,B,C,D,E,F,G,H,I,J where B = '<?php echo $day; ?>' and C = '<?php echo $stage; ?>' <?php if( isset($withTime) && ( $withTime !== false )) { echo "order by D asc"; } ?>",
          rowHandler: HRTemplate,
          callback: myCallback
        });

        <?php } ?>
    <?php } ?>

    <?php else: ?>

    var HRTemplate = Handlebars.compile($('#hr-template-ns').html());

    $('#notScheduled').sheetrock({
      url: mySpreadsheet,
      query: "select A,H,I order by A asc",
      rowHandler: HRTemplate,
      callback: hideLoader
    });

<?php endif; ?>