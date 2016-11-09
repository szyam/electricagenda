<header class="article-header" id="imgFocus">
	<section class="header-container">

		<div class="header-content clearfix <?php if( $title_align === "left" ) { echo 'title-left'; } ?> animated <?php if( $title_align === "left" ) { echo 'slideInLeft'; } else { echo 'slideInRight' ; } ?>" <?php if ( isset($titleColor) && $titleColor ) { echo 'style="background-color:' . $titleColor . '"' ; } ?>>
	        <div class="">
	            <h1 class="article-title"><?php echo $page_title; ?></h1>
	            <p><?php echo $articles[$current_id]["subtitle"]; ?></p>
	         </div>
	    </div>
	    <div class="bg-img" data-bg="<?php echo $root; ?>img/articles/<?php echo stringy($artist_name); ?>" style="background:url('<?php echo $root; ?>img/articles/<?php echo stringy($artist_name); ?>-blur.jpg')"></div>
	    <span class="scroll-down animated"><a href="#mainContent">▽</a></span>
	</section>
</header>

<main id="mainContent" class="main-content">
	<section class="row">
		<div class="medium-10 medium-offset-1 columns entry-content">

		<?php if( isset($featureTitle) && ( $featureTitle !== null ) ): ?>
			<div class="featured-track row">
				<aside class="ft-art">
					<a href="<?php echo $root.'img/articles/'.linky($artist_name).'/'.linky($featureTitle); ?>.jpg" class="zoom">
						<img src="<?php echo $root.'img/articles/'.linky($artist_name).'/'.linky($featureTitle); ?>.jpg">
					</a>
				</aside>

				<div class="ft-info">
					<h5><?php echo $artist_name . ' <i class="fa fa-angle-right"></i> ' .$featureTitle; ?> <span><?php echo $releaseDate; ?></span></h5>
					<h3><?php echo $featureSong; ?><?php if( isset($songDetails) && ( $songDetails !== null ) ) { echo ' <small>('.$songDetails.' )</small>'; } ?></h3>
					<div id="waveform">
						<div class="scheduledSpinner">
                            <div class="loadingZone"></div>
                        </div>
					</div>
					<footer>
						<span id="playToggle">
					    	<i class="fa"></i>
					  	</span>
					</footer>
				</div>
			</div>
		<?php endif; ?>