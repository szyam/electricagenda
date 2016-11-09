<?php // Includes
	require('../config.php');
	include($path.'data/article/article-array.php');
	$current_page   = "article";
	
	// Artist Info From Array
	$current_id     = 4;
	$page_title     = $articles[$current_id]["title"];
	$artist_name 	= $articles[$current_id]["artist_name"];

	// Colors
    $title_align	= "left"; //positions header text
    $titleColor		= "rgba(126, 90, 226, 0.9)";

    // Credits
    $qa		 		= array("Steph Copeland");
    $credits		= array();

    // Featured Track
    $featureTitle	= "Public Panic";
    $featureSong	= "Secret";
    $releaseDate	= "2015";
    $soundcloudID	= "230679620";

    // ADS
    // $adImage 	= '<img src="http://placehold.it/500x250">',
	// $adLink 		= '#',
	// $adName 		= 'Emusic',
	// $adTagline  	= 'Leaders in audio interfaces lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
	//echo ad($name,$link,$image,$tagline);

	// End Front Matter
?>

<?php include($path.'inc/header.php'); ?>
<?php include($path.'data/article/article-header.php'); ?>

			<!-- <h2>My content header</h2> -->

			<p>
				The very lovely Toronto based musician/composer Steph Copeland, is often surrounded by frightening and scary soundscapes. Compositions she is creating while scoring films titled things like "Antisocial", "Bite", "Save Yourself", "The Drownsmen", and, the list continues. But in the meantime, the classically trained vocalist has created and released a beautiful debut album, titled "Public Panic". Steph wrote the entire album, it was produced and engineered by Matthew Rideout, formerly of Yellow Wood, and mastered by Joao Carvalho.
			</p>
			<?php echo ai($artist_name, 'booklet-cover', 'is-medium is-right'); ?>
			<p>
				While, this album certainly has moments of deep-dark, hollow edginess, found in songs "The Man In The Black" and "Secret", they’re offset by the delicate, emotional journey that tracks like the dreamy synth-ballad "Highways" and the powerful, anthemic song "I'll Never Let You Go", bring you along on. Besides an album of lush audio and silky vocals, a common theme throughout is a very faint haunting persistence buried in the background. Droning synths climbing and diving in “Machines”, ghostly moans backing Steph's lyrics in "Secret":
				<br>
				<em>"I've got a secret... And I'll do it again... You know I'll keep it".</em>
			</p>

			<ul class="interview" data-qa="<?php echo sizeof($qa); ?>" data-name="<?php echo $artist_name; ?>">
				
				<li data-name="EA">You're a composer, specializing in scoring horror and sci-fi films. You’ve recently released your debut album “Public Panic”, which is quite beautiful. How did you disconnect from the scary soundscapes you normally dwell in and focus on this project?</li>

				<li data-name="<?php echo initials($artist_name); ?>">It was difficult to be honest. I tend to lean into the dark when it comes to arrangement but Matt Rideout who produced Pubic Panic with me doesn't have the same tendencies. I think the union created a nice balance of dark and light. When at first I heard the guitar line written and played by Rideout for 'Nadia' my first instinct was "No!! Its supposed to be miserable!" Thankfully, I slept on it and listening back it was amazing. That was one of the first tracks we worked on for the album and I think it set the tone.</li>

				<li data-name="EA">You’ve been writing music for quite a while right? What’s the story with some these songs, are they all newer compositions that were written for the album? Or does this LP really represent music spanning quite some time?</li>

				<li data-name="<?php echo initials($artist_name); ?>">Some of these songs are older but most were written in the year or two leading up to production. <span class="quote">I wanted to debut with some of the tracks I've been performing for the last decade that meant a lot to me</span>. Nadia, Machines and Editor were all written about 10 years ago and have finally found their home on the album. They've transformed many times over the years but never properly recorded. "Secret" was written for the film Antisocial 2 which I scored during the time we were making the record and "Man In The Back" was also developed during production. We had 6 other songs we were experimenting with but they didn't make the cut.</li>

				<li data-name="EA">So, obviously an electronic music release. There is quite a bit of live, organic sounding instrumentation here. Did you have some other musicians on here or is it all you?</li>

				<li data-name="<?php echo initials($artist_name); ?>">Matt Rideout is a wicked drummer and all around musician. He contributed guitar, bass, live drums and glockenspiel. The ending of "I'll Never Let You Go" is a testament to his abilities to rock. We rented out a church for a 3 day drum session in Windsor, Ontario to get the big sound for Matt's kit. 12 microphones and no air conditioning in August.  Darren Snowden also an amazingly talented bassist plays on "Nadia". Matt and I took turns on an upright piano. For the most part the rest of the album is electronic with a sprinkling of live instruments.</li>

				<li data-name="EA">You also have thrown around the genre title of “pop” quite a bit. Which is definitely evident in the music with its singer/songwriter vibe and dynamic and climatic edginess. Was the idea of calling “pop” there from the beginning or was it a marketing or artistic direction you chose after you finished it?</li>

				<li data-name="<?php echo initials($artist_name); ?>">I've recorded six unreleased albums under the name Perilelle which were all very experimental and felt that I was ready to try something different this time around, something a little more organized and aimed at a slightly broader audience.  Ultimately my goal with Public Panic was to create songs that combined electronic, 80's new wave and rock with a standard pop structure, but that maintained some of the experimental elements of my previous work. I knew this was pop territory going in so when the album was finished it was easy labelling it Electro/Pop or Alt/Pop.</li>
			</ul>

		</div> <!-- columnn -->
	</section> <!-- row -->

</main>	<!-- main-content -->

<?php include($path.'data/article/article-subfooter.php'); ?>

<?php include($path.'inc/footer.php'); ?>

<?php include($path.'data/article/article-scripts.php'); ?>

</body>
</html>