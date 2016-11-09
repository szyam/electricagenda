<?php
include('../config.php');

$current_page   = 'articles';
$page_title     = 'Archive';

include($path.'inc/header.php'); ?>

<main class="article-archive">

<section class="row">
    <div class="small-12 columns">



    	<?php include($path.'data/article/article-array.php'); ?>

        <ul class="articles-loop">

            <?php foreach ( array_reverse($articles) as $article ) { ?>

            <?php
                $titleUrl   = $article['title'];
                $name     = preg_replace("/[^a-zA-Z]/", "", $article['artist_name'] );
                $str      = strtolower($name);
            ?>

            <li class="post animated fadeIn">

               <aside class='feat-img'>
                    <a href="<?php echo linky($titleUrl); ?>">
                        <img class='animated fadeIn' src="<?php echo $root; ?>img/articles/<?php echo $str; ?>-th.jpg">
                        <div class="post-overlay"></div>
                    </a>
                </aside>

                <div class="excerpt">
                    <h2 class="title"><a href="<?php echo linky($titleUrl); ?>"><?php echo $article['title']; ?></a></h2>
                    <p class="date"><small><?php echo datey($article['post_date']); ?></small></p>
                    <p><?php echo limit_words( $article['subtitle'], 40 ); ?></p>
                    <a class="btn alt" href="<?php echo linky($titleUrl); ?>">Read More</a>
                </div>
            </li>

            <?php } ?>
        </ul>




    
    </div>
</section>
</main>
<?php include($path.'inc/footer.php'); ?>

</body>
</html>
