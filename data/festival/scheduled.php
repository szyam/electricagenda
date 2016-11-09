<section class="row show-for-small">
    <div data-magellan-expedition="fixed">
        <dl class="sub-nav">
            <?php foreach ( $days as $day) { ?>
                <dd data-magellan-arrival="<?php echo $day; ?>"><a href="#<?php echo $day; ?>"><?php echo $day; ?></a></dd>
            <?php } ?>
        </dl>
    </div>
</section>

<div class="row <?php echo $daysAmt; ?> is-scheduled <?php if( isset($withTime) && ( $withTime === false ) ) { echo "without-time"; } ?>">

    <!-- lets start day's loop -->
    <?php foreach ( $days as $day) { ?>
        <div class="<?php echo $columnsAmt; ?> columns day <?php echo $day; ?> animated fadeIn">
            <header>
                <a name="<?php echo $day; ?>"></a>
                <h2 data-magellan-destination="<?php echo $day; ?>"><?php echo $day; ?></h2>
            </header>

            <?php foreach ( $stages as $stage) { ?>

                <div class="stage">
                    <h3><?php echo $stage; ?></h3>
                    <ul class="<?php echo stringy($stage); ?>" id="<?php echo $day; ?>-<?php echo stringy($stage); ?>">
                        <script id="hr-template-<?php echo stringy($stage); ?>-<?php echo $day; ?>" type="text/x-handlebars-template">

                        <li {{#if cells.Link}} data-url={{cells.Link}} {{/if}} {{#if cells.Showcase}} data-showcase="{{cells.Showcase}}" {{/if}} data-day={{cells.Day}}>
                            <h4 {{#if cells.Description}} data-desc="{{ cells.Description }}" {{/if}}>{{ cells.Name }}
                            {{#if cells.SetType}}
                                <span class="{{ cells.SetType }}"></span>
                            {{/if}}
                            
                            {{#if cells.Featuring}}
                                <small>feat {{cells.Featuring}}</small>
                            {{/if}}</h4>

                            {{#if cells.Link}}
                                <a class="artistBtn animated slideInRight" href="#"><i class="fa fa-info-circle"></i></a>
                            {{/if}}

                            {{#if cells.Start}}
                            <em class="the-time"><span class="hide">{{cells.Start}}</span> <span class="hide">{{cells.End}}</span></em>
                            {{/if}}
                        </li>

                        </script>

                            <div class="scheduledSpinner">
                                <div class="loadingZone"></div>
                            </div>
                    </ul>
                </div> <!-- end stage -->
            <?php } ?>

        </div> <!-- end Day -->
    <?php } ?> <!-- end day's if -->
</div> <!-- end row -->
