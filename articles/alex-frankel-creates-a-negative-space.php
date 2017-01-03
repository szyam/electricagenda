<?php // Includes
	require('../config.php');
	include($path.'data/article/article-array.php');
	$current_page   = "article";
	
	// Artist Info From Array
	$current_id     = 6;
	$page_title     = $articles[$current_id]["title"];
	$artist_name 	= $articles[$current_id]["artist_name"];

	// Colors
    $title_align	= "left"; //positions header text
    $titleColor		= "rgba(126, 90, 226, 0.9)";

    // Credits
    $qa		 		= array("Alex Frankel");
    $credits		= array("Photo Credit" => "Harry Mcnally / Michael Vadino");

    // Featured Track
    $featureTitle	= null;
    $featureSong	= "Negative Space";
    $releaseDate	= "2016";
    $soundcloudID	= "285131976";

    // ADS
    $ads 			= true;
    $image 		= 'flywheel.png';
	$link 		= 'https://share.getf.ly/q56r4c';
	$name 		= 'Flywheel Web Hosting';
	$tagline  	= 'If your looking for preofessional hosting for your WordPress site, look no further than FlyWheel. Simply one of our favorites for our websites, as well as our clients. Try it for free!';
	//echo ad($name,$link,$image,$tagline);

	// End Front Matter
?>

<?php include($path.'inc/header.php'); ?>
<?php include($path.'data/article/article-header.php'); ?>

			<!-- <h2>My content header</h2> -->

			<p>
				Alex Frankel, frontman for <em>Holy Ghost!</em> is taking a break from his new Jewish deli in Brooklyn and recently slid through Detroit while on tour for his solo release, <em>Negative Space EP</em>. The Detroit performance was held at The Magic Stick (formerly Populux, a short lived spot dedicated to techno, that was formerly... The Magic Stick) with Classixx as the headliner. 
			</p>
			<?php echo ai($artist_name, 'negative-space', 'is-medium is-right'); ?>
			<p>
				While to some, the <em>Negative Space EP</em> is maybe a little too similar to the Holy Ghost! sound to consider it a complete departure, the release is definitely full of all the right ingredients that led to the formers success. Lush synth-pop with a distinct 80's cinematic sheen and vocals, drenched in funk/soul sunshine, that just don't stop.
			</p>

			<p>While in Detroit, we were able to catch up with Alex and ask a few questions.</p>

			<ul class="interview" data-qa="<?php echo sizeof($qa); ?>" data-name="<?php echo $artist_name; ?>">
				
				<li data-name="EA">Seems to some listeners out there, there’s little difference between Holy Ghost! and your solo project. I guess, I feel there’s a lot more singer/songwriter kind of feel happening here, with a bit more of a “pop” ( the good kind ) aesthetic and maybe more complex vocals and lyrics. Is there any conscious effort from you to do something “different”? Or just kind of doing your thing?</li>

				<li data-name="<?php echo initials($artist_name); ?>">I pretty much just did my thing and didn't worry too much about similarity or dissimilarity to Holy Ghost !  I did try to stay clear of the Holy Ghost live drum sound on the solo record - just because that's really more Nicks expertise and I don't think I could do it properly without him.</li>

				<li data-name="EA">As i touched on a bit, the songs on your Negative Space EP have some pretty elaborate lyrics. You seem to incorporate a lot of funky, soulful, 80’s soundtrack kind of vibe. It almost seem’s like the lyrics and “song” is coming before the music, which I think is kind of backwards for a lot of electronic music. What’s your song writing method/approach or inspiration?</li>

				<li data-name="<?php echo initials($artist_name); ?>">Hmm , totally depends on the song, or day really.  Sometimes I'll make all the music and then work on vocals or in other cases they'll both happen simultaneously or sometimes a song could start with a lyrical phrase and I'll work backwards from there . When I'm lucky - like in the case of Okay by Holy Ghost or Negative Space here - I'll just sit down at the piano and kind of write the basic chord structure and words and melody in one sitting. </li>

				<li data-name="EA">When I first heard Negative Space, it was on my older 27” iMac in my dining room, the white bezel ones from like 10 years ago. Honestly, it was one of the only tracks I’ve heard in a while that actually sounded good on those speakers. Great drums and super punchy. My 1 year old and 2 1/2 year old started shaking it, and my wife and I were totally into it. And she’s a tough critic. So, it’s a crowd pleaser haha. Tell me about your production process in terms of recording and mixing, is it a combination of home studio and a studio studio? More software, or more hardware? Any pieces that are dear to your heart?</li>

				<li data-name="<?php echo initials($artist_name); ?>">Haha I know those speakers well !!  And I'm glad the kids approve ! Someone should rip those speakers out and sell them as stand alones for studio monitoring, they have something ......my process is different on every song. But yeah I worked a lot at home in my little studio here and also In Los Angeles at my friend Vaughn Oliver and Ryland Blackinton's studio. But I recorded the vocals all at a totally different studio in brooklyn. And then I mixed at the XL studios with alex Epton in Manhattan. So I kind of Frankensteined it - meaning recorded it all over and then glued it together. I'm more of a hardware guy traditionally and vintage synth nerd but I guess I'm letting go of that recently and I just try to use whatever is available at the exact moment I want to make music. <span class="quote">I actually have started to love soft synths just because I don't know them as well as I do say a Juno or something. There are a lot more happy accidents for me to find there right now.</span></li>

				<li data-name="EA">The show for when Holy Ghost! plays live looks pretty large and elaborate. Was putting together something slightly more stripped down, in terms of equipment and personnel, a product of some of that touring? What’s your process as far as recreating live with other musicians what your producing for the your solo stuff, or are the musicians parts of the writing and recording process from the start?</li>

				<li data-name="<?php echo initials($artist_name); ?>">This sounds really premeditated and corporate but I wanted to build the solo band in a scaleable model. Meaning I want the set up to be able to fit the situation.i designed it so that I can play as a two piece or a six piece. For example last week we played the solo ep in brooklyn as 6 people with tons of gear and live drums and it was awesome - but next month I'm going to Cuba as part of this cultural exchange program and there's no budget for a full band so I'll perform as a two piece with just me and Morgan. Holy Ghost is this very rigid live thing where we replicate the recordings perfectly with all this crazy equipment but here I wanted to be a little more free and allow the songs to take different shapes live as well as be able to perform in all sorts of situations. This band can play in a tiny art galary as a two piece or in a big venue as a six piece.</li>

				<li data-name="EA">It sounds like your a pretty busy guy these days. How has opening a deli in Brooklyn affected your time and and music making lifestyle? I mean obviously your still touring and writing some pretty killer music, has everything kind of worked out as planned or are you struggling with any unexpected hurdles of having a full on business?</li>

				<li data-name="<?php echo initials($artist_name); ?>">I'm lucky to be in business with my brother. He over sees the day to day of our Jewish delicatessen and has years of experience in that field. So I don't HAVE to be there exactly. But I want to and try to be there as much as possible. In terms of hurdles - every day there's a hurdle or 10 when you are running a restaurant , but that's what makes it fun.</li>

				<li data-name="EA">I this world of exhaustive genre names we live in, I noticed you keep it pretty cut an dry on some of your social media pages. #Electronic for Holy Ghost!, and tagging you solo ep as just #Indie. I’m curious why you chose that and what it means to you?</li>

				<li data-name="<?php echo initials($artist_name); ?>">Haha I don't think I did that - pretty sure I let someone at my management company decide what tags to use. I don't even know what that stuff means.</li>
			</ul>

			<p>Haha, yup. Makes perfect sense...</p>

		</div> <!-- columnn -->
	</section> <!-- row -->


	<?php echo ad($name,$link,$image,$tagline); ?>


</main>	<!-- main-content -->

<?php include($path.'data/article/article-subfooter.php'); ?>

<?php include($path.'inc/footer.php'); ?>

<?php include($path.'data/article/article-scripts.php'); ?>

</body>
</html>