<?php
	require('../config.php');
	include($path.'data/article/article-array.php');
	$current_page   = "article";
	
	$current_id     = 1;
	$page_title     = $articles[$current_id]["title"];
	$artist_name 	= $articles[$current_id]["artist_name"];

    $titleColor		= "rgba(25, 93, 172, 0.9)";
    $title_align	= "left"; //positions header text

    $qa		 		= array("Monty Luke");
    $credits		= array( 
    	"Originally Posted" => "<a href='http://www.detroitsoundslikethis.com/electronic/monty-luke-and-black-catalogue/'>DetroitSoundsLikeThis.com</a>"
    	);

    // $featureTitle	= "For Todd";
    // $featureSong	= "Chopped Rhodes";
    // $songDetails	= "12\" mix | Topher Horn";
    // $releaseDate	= "2016";
    
    $ads 			= false;
?>

<?php include($path.'inc/header.php'); ?>
<?php include($path.'data/article/article-header.php'); ?>



			<p>Recently we got together with <strong>Monty Luke</strong>, owner and curator of Detroit-based electronic music label <em>Black Catalogue</em>. Originally from San Francisco, Monty moved here several years ago to work with Carl Craig and Planet E Communications.</p>

			<p>We talked weather for a minute, winter’s like this can easily make someone think about goin’ back to Cali’. As I asked Monty if this was the most eff’d up winter he’s seen out here, he laughingly asked me (Michigander my whole life) the same question.</p>

			<p>Yes. Yes it is.</p>

			<div id="sponsor"></div>

			<h3>Let’s get to the music.</h3>

			<hr>

			<ul class="interview" data-qa="<?php echo sizeof($qa); ?>" data-name="<?php echo $artist_name; ?>">
				
				<li data-name="EA">How do you try to get your sound and message to the people? Does the music curation and artistic duties take up most of your time, or is it the marketing and everyday responsibilities of a running business?</li>

				<li data-name="<?php echo initials($artist_name); ?>">It could be a general music industry thing, it’s tough man. The whole game of PR and trying to get that publicity and awareness. There are so many other labels, and so many people making music, you got to get above the fold. It can be really tough, especially when so much of your day is trying to run the label, doing day-to-day stuff and talking to artists, especially when you’re an artist yourself, it’s a grind…
				<br/>
				I have to set time aside for each aspect, otherwise it’ll never get done. If I have a remix that’s due, I have to focus on that. If I have a deadline for a release, I have to schedule studio time and finish that track. I have to set separate office hours aside to meet with designers, and production related stuff. If I don’t do that, something is going to fall by the wayside. It’s some of the hardest work I’ve ever done but also some of the most gratifying.</li>

				<li data-name="EA">What’s going to be happening for you and Black Catalogue in the next couple years?</li>

				<li data-name="<?php echo initials($artist_name); ?>"><span class="quote">As an artist myself, I want to push myself beyond my current boundaries. I want to help push the boundaries of Detroit electronic music.</span> I’m really happy with what I’m doing with the label right now, but I want to focus on finding underground artists, not only from Detroit, but from all over the place. Finding someone really dope that you’ve never heard of before and makes you say “Damn! Who the fuck is this?” is something I want to continue to do. But in general, I really want to push myself to get better at music production, push what is known as Detroit techno, and house, further. To me it’s all about progress. I think the history is amazing and great, and really rich, but it’s time to push this to the next level. I think the time to rely on the history of Detroit techno is over, it’s time to push this shit forward. That’s what I like to focus on. If you come to my house, I have all the Detroit classics, all the hot shit, and I love all that stuff to death. But, it’s time to make some new classics.</li>

				<li data-name="EA">You recently released some tracks vinyl only, and digital releases weren’t released for several months. Was that by design?</li>

				<li data-name="<?php echo initials($artist_name); ?>">Yes. I believe in that format really strongly. From a practical standpoint it’s more expensive, so I have to focus more on selling that more. The bottom line is I’m dedicated to that format, it’s a labor of love. They’re both beneficial; I’m not one of these people that don’t believe in the digital realm. Tangible art to me is real important.</li>

				<li data-name="EA">By the sound of your music, I can tell your heavily inspired by science-fiction. Just how deep does that run?</li>

				<li data-name="<?php echo initials($artist_name); ?>">This is gonna sound crazy. There is this Dutch organization called Mars 1. They want to send 4 people to Mars in 2022. Last year they had an open application process, you had to submit a 70 second video. I entered this, and out of 200,000 applicants I made it to the second cut of about 1,058 people. At the end of this year they select the next round, then it’s a seven-year training process. “I want to be the first brother to go to another planet” I actually put that in the video haha. It’s not a trip, it’s like a one way ticket, which is kinda wild. I haven’t told my mom yet, I don’t know how that conversation is going to go.</li>

			</ul>

			<p>Yea, Detroit was probably hard enough…</p>
		</div>

	</section>

</main>	<!-- main-content -->

<?php include($path.'data/article/article-subfooter.php'); ?>

<?php include($path.'inc/footer.php'); ?>

<?php include($path.'data/article/article-scripts.php'); ?>

</body>
</html>