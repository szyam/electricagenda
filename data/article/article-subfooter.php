<div class="row">
	<div class="small-10 columns medium-offset-1">
		<hr>
		<h6 class="subheader"><small>Article by <?php echo $articles[$current_id]["author"]; ?> | Published on <?php echo datey($articles[$current_id]["post_date"]); ?></small></h6>
	</div>
</div>

<div class="article-subfooter" style="background-image: url('<?php echo $root; ?>img/articles/<?php echo stringy($artist_name); ?>-th.jpg')">
	<div class="sf-wrapper">
		<div class="row">

			<section class="medium-5 columns medium-offset-1">

			<?php include($path.'data/artist/artists-array.php'); ?>

			<?php if( array_key_exists($artist_name, $artists)): ?>

				<h3><?php echo $articles[$current_id]["artist_name"]; ?></h3>
				<ul class="artist-info" id="artistInfo">
					<?php 
						foreach ($artists[$artist_name] as $key => $value) {
							echo '<li><a href="'. $value .'" target="_new">'. $key .'</a></li>';
						}
					?>
				</ul>
			<?php endif; ?>

				<?php if($credits) : ?>
					<div class="credits">
						<p><em>Credits:</em></p>
						<ul>
						<?php foreach ($credits as $key => $value) {
							echo '<li>'. $key.': '. $value.'</li>';
						} ?>
						</ul>
					</div>
				<?php endif; ?>

			</section>

			<aside class="medium-5 columns end text-right article-nav">
			<?php
				$next = ($current_id + 1);
				$prev = ($current_id - 1);

				if( $prev >= 1 ) {
					echo '<h5>Previous Article</h5><h4><a href="'. linky($articles[$prev]["title"]) .'">'. $articles[$prev]["title"] .'</a></h4>';
				}

				if ( array_key_exists($next, $articles) ) {
					echo '<h5>Next Article</h5> <h4><a href="'. linky($articles[$next]["title"]) .'">'. $articles[$next]["title"] .'</a></h4>';
				}
			?>
			</aside>

		</div>
	</div>
</div>