<?php
include($path.'config.php');
$current_page   = 'search';
$page_title     = 'Mobile Friendly Electronic Music Festival Schedules and Artist Information';
include('inc/header.php'); ?>

<?php include('data/article/article-array.php'); ?>
<?php include('data/page/pages-array.php'); ?>
<?php include('data/festival/festival-array.php'); ?>



<header class="banner">
    <div class="row text-center">
        <h1>Search Electric Agenda</h1>
    </div>
</header>

<div class="row">
    <div class="small-12 columns">
        <ul class="inline-list filter-controls">
            <li><h5>Filter By:</h5></li>
            <li><h5 class="filter" data-filter="all">All</h5></li>
            <li><h5 class="filter" data-filter=".article">Articles</h5></li>
            <li><h5 class="filter" data-filter=".page">Pages</h5></li>
            <li><h5 class="filter" data-filter=".festival">Festival</h5></li>
        </ul> 

        <ul class="inline-list sort-controls">
            <li><h5>Sort By:</h5></li>
            <li><h5 class="sort" data-sort="name:asc">Name</h5></li>
        </ul>
    </div>
</div>

<!-- <section>
    <div class="row">
        <input type="search" placeholder="Or search here" id="searchInput">
    </div>
</section> -->

<section class="search-page">

    <div class="row">
        <div class="small-12 columns">

           <!--  <input type="text" placeholder="Or search here" id="searchInput"> -->


           <ul class="search-loop" id="searchLoop">

            <?php foreach ($articles as $article) { ?>

                <li class="mix article">
                    <h3 class="title"><?php echo $article['title']; ?></h3>
                    <p><?php echo $article['subtitle']; ?></p>
                    <a class="" href="articles/<?php echo linky($article['title']); ?>" >read post</a>
                </li>

            <?php } ?>

            <?php foreach ($pages as $key => $value) { ?>
                <li class="mix page">
                    <h3 class="title"><?php echo $key; ?></h3>
                    <a href="<?php echo $value; ?>">link</a>
                </li>
            <?php } ?>

            <?php foreach ($festivals as $festival) { ?>
                <?php if($festival["live"] === true) { ?>
                    <li class="mix festival">
                        <h3 class="title"><?php echo $festival['name']; ?>- <?php echo yearly($festival['start_date']); ?></h3>
                        <a href="festivals/<?php echo yearly($festival['start_date']); ?>/<?php echo stringy($festival['name']); ?>">
                            link
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>

            </ul>

        </div>
    </div>

</section>


<?php include('inc/footer.php'); ?>

    <script type="text/javascript">

        $(document).ready( function() {

            $(function(){
                $('#searchLoop').mixItUp();
            });
            $('#searchLoop').find('h3').each( function(){
                var $alpha = $(this).text().charAt(0);
                $(this).parent('li').attr('data-name', $alpha);
            });

            var $searching = $('#searchInput');

            // $searching.keydown( function(){
            //     $(this).siblings('#searchLoop').children('li').fadeOut();

            //     $(this).keyup( function(){
            //         var $item = $(this).val();
            //     });

            // });

            $searching.keyup(function() {
                var value = $(this).val();
                var exp = new RegExp('^' + value, 'i');

                $('#searchLoop li').each(function() {
                    var isMatch = exp.test($('h3', this).text());
                    $(this).toggle(isMatch);
                });
            });


        });


    </script>

</body>
</html>
