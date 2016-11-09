<section class="row not-scheduled">
    <div class="small-12 columns stage">

        <div class="text-center">
            <h4>Line-up details for <?php echo $page_title; ?></h4>
            <p>
                Here's a current list of artists in alphabetical order.
            </p>
            <hr>
        </div>

        <ul id="notScheduled">
            <script id="hr-template-ns" type="text/x-handlebars-template">
                <li data-url="{{cells.Link}}">
                    <h4 data-desc="{{cells.Description}}">{{cells.Name}}</h4>
                    {{#if cells.Link}}
                    <a class="artistBtn animated slideInRight" href="#"><i class="fa fa-info-circle"></i></a>
                    {{/if}}
                </li>
            </script>
            <div class="loadingZone"></div>
        </ul>

    </div>
</section>
