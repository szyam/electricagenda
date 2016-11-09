<?php
	require('../config.php');
	include($path.'data/article/article-array.php');
	$current_page   = "article";
	
	$current_id     = 2;
	$page_title     = $articles[$current_id]["title"];
	$artist_name 	= $articles[$current_id]["artist_name"];

    $title_align	= "left"; //positions header text
    $qa		 		= array();
    $credits		= array("Photography" => "Carlos Padilla");

    $titleColor		= "rgba(126, 90, 226, 0.9)";

    $ads 			= false;
?>

<?php include($path.'inc/header.php'); ?>
<?php include($path.'data/article/article-header.php'); ?>

			<p>Kyle Hall + Jay Daniel / 1217 Griswold.  Please scroll to bottom for live recording of set! One of the last parties to happen at this location. 1217 Detroit will never forget you.</p>

			
			<?php echo gallery($page_title);?>


			<div>
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/135907647&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			</div>

		
		</div>
	</section>

</main>	<!-- main-content -->

<?php include($path.'data/article/article-subfooter.php'); ?>

<?php include($path.'inc/footer.php'); ?>

<?php include($path.'data/article/article-scripts.php'); ?>

</body>
</html>