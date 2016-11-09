
    <script src="<?php echo $root; ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $root; ?>bower_components/foundation/js/foundation.min.js"></script>

    <?php if ( $current_page === 'home' || $current_page === 'festivals' || $current_page === 'search' ) : ?>

        <script src="<?php echo $root; ?>js/jquery.mixitup.min.js"></script>

    <?php elseif ($current_page === 'festival') : ?>
        
        <script>
                var loader = '<div class="spinner" id="spinLoad"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>';
                $(loader).appendTo('.loadingZone');
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sheetrock/1.0.0/dist/sheetrock.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.1.2/handlebars.min.js"></script>
    
    <?php elseif ($current_page === 'festival') : ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.1.2/handlebars.min.js"></script>

    <?php endif; ?>

    <script src="<?php echo $root; ?>js/app.js"></script>