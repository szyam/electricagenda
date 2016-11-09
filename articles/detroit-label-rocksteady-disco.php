<?php
	require('../config.php');
	include($path.'data/article/article-array.php');
	$current_page   = "article";
	
	$current_id     = 3;
	$page_title     = $articles[$current_id]["title"];
	$artist_name 	= $articles[$current_id]["artist_name"];

    $title_align	= "left"; //positions header text
    $qa		 		= array("Peter Croce");
    $credits		= array();

    $titleColor		= "rgba(126, 90, 226, 0.9)";

    $featureTitle	= "For Todd";
    $featureSong	= "Chopped Rhodes";
    $songDetails	= "12\" mix | Topher Horn";
    $releaseDate	= "2016";
    $soundcloudID	= "244933986";

    $ads 			= false;
?>

<?php include($path.'inc/header.php'); ?>
<?php include($path.'data/article/article-header.php'); ?>

			<!-- <h2>My content header</h2> -->

			<?php echo ai($artist_name,'crew','is-left is-medium','Rocksteady Crew'); ?>

			<p>
				<strong>Rocksteady Disco</strong> was founded by Peter Croce in the spring of 2014 as a vehicle for the next generation of DJs and producers to carry Detroit's reverent Deep House & Disco soundsystem culture forward. Along with DJ Dandois, Rocksteady Disco operates as 1 part independent vinyl-focused record label, and 1 part dance parties and happy hours around Detroit and beyond. </p>
				
				<h3>Artists</h3>
				<p>
				<strong>Dandois</strong>: Matt Dandois (DJ Dandois) was born and raised in Kalamazoo MI. Growing up he played the saxophone, piano, and guitar; developing his musical tastes through a mix of traditional theory and a love for alternative/hardcore rock. Primarily motivated by the dream of being a doctor, he attended Michigan State University for his undergraduate and medical degrees. </p>

				<p>There at MSU he was exposed to the wonders of electronic music, cutting his teeth on the experimental sounds of Aphex Twin, Daedelus, Clark, and Bibio. Around 2010 he caught the dubstep bug and moved into the dancier realm of EDM - quickly moving past its hedonism into the deeper roots of early UK dubstep, house, disco, and techno. He started DJing parties in med school for his and his friends sanity, releasing the stress in finely crafted digital mixes. He quickly befriended the soon to be Rocksteady Disco Label founder Peter Croce, who shared his same tastes of thoughtful, insightful music. After its formation in 2014, Matt has been working behind the scenes with the RSD label on the west side of the state. </p>

				<p><?php echo ai($artist_name,'club','is-right is-medium'); ?>Around that time, Matt picked up his first 1200's and has since been vigorously collecting vinyl and DJing parties consistently. He does this all while working as a resident psychiatrist; helping some of the most vulnerable people there are. Now, catching Matt live you'll hear him spinning deep house, disco, balearic, and sometimes moodier techno or drum and bass. His musical selections reflect the fun, interesting, eclectic, and sometimes sad and dark work that he enjoys so much as a psychiatrist. You'll find him playing in Grand Rapids through the Scintillate and Vinyl Fetish parties, or in Detroit with Peter Croce. Also we hear he's getting into the production game recently... keep an eye out!</p>

				<p><strong>G2S</strong>: G2S is a 22 years old electronic music producer and DJ based in Lyon, France. Since 2013, he's building up his record collection, reflection of his eclectic tastes starting from the old-shcool Soul, Funk, Jazz and 
				Disco to more electronic styles such as Deep House, Broken Beat or Hip-Hop. Vinyl sampling and vintage gear devotee, he's trying to serve out his own dusty take on House (and sometimes Hip-Hop) through his productions.</p>

				<p>He joined Lyon's local crew SONORAMA in 2015 and he's just starting to appear on wax. You can find him on the last Rennes based label Dance Around 88 various that came out mid-march 2016. He's currently working on launching the imprint In Any Case, and on a project for Chineurs de House so stay posted.</p>

				<p><strong>Lafleur</strong>: Ever-elusive and always on-point, Lafleur is known for editing the rare and the beloved on both Rocksteady Disco and his own imprint, Hot Pot Records. </p>

				<p><strong>Peter Croce</strong>: Peter Croce is part of the next generation that carries forth the melting pot of sounds that make up Detroit’s diverse DJ and soundsystem culture. He combines Disco, Deep House, Afrobeat, and Broken Beat dubplates and classics to thoughtfully make all of those in earshot shake to their hips and let themselves go. While he stands firmly rooted in the old school, he has dustier fingers than your standard reissue DJs. Armed with bags of wax and USBs full of unreleased tracks, he's sure to bring moods and sounds the discotheque has not previously felt. He has forthcoming releases on Rocksteady Disco, In Any Case, & Mr. PC Versions.</p>

				<p></a><?php echo ai($artist_name,'booth','is-left is-medium'); ?>
				<strong>Pontchartrain</strong>: Detroit native and resident, Pontchartrain has been scouring record stores and DJing since 2005. During that time, in addition to crate-digging alongside some of Detroit's finest collectors, he has played many roles in the industry including promotion, remixing, producing and DJing under various monikers. The last decade of work, with the help of some notable Detroit mentors, have helped him cultivate a sound that represents the core of Detroit and Chicago house music, in equal parts with their disco and funk roots.</p>

				<p>In his first year alone, his work has hit the top of the vinyl best-seller lists and been charted by some of the biggest names in the disco and house realm. His signing with one of the most established edits labels, Whiskey Disco, as well as helping to create a brand new label, Lovedancing, with his flagship EP selling out in record time, has marked him as one of the strongest introductions to the increasingly popular disco and funk revival.</p>

				<p>Pontchartrain has releases planned for late 2015 and early 2106 on various labels including Rocksteady Disco, Whiskey Disco, Lovedancing, Kolour LTD, Editorial, Masterworks, and more. He has recently started internationally touring and is open for bookings worldwide.</p>

				<div id="sponsor"></div>

				<p><strong>Topher Horn</strong>: Topher Horn is a New York based composer, producer, DJ, and multi-instrumentalist from Detroit, Michigan. He (begrudgingly) began piano lessons at age 10 and drums at age 12. He spent is adolescence playing in various rock bands and recording drums with whatever could be found--cassette machines, four tracks, extremely underpowered PCs, discarded speakers and microphones. He began studying music technology and music theory in high school and built his first home-midi rig at age 15 and hasn't looked back. His interests quickly grew into composition, conducting, and keyboards.</p>

				<p><?php echo ai($artist_name,'topher','is-right is-medium'); ?>
				Topher has performed and conducted in Detroit, Chicago, New York, Los Angeles, London, and a tour of Spain. Topher completed his Bachelors of Music in Music Theory and Composition from Wayne State University in 2013, where he also studied piano, percussion, and electronic music. His first full-length Universe of Beings was released by Dado Records in 2014. He has multiple 12” out on Rocksteady Disco.</p>

				<p>His productions embody a raw, open, and live sound, often including tape machines. Credits include engineering and co-producing the 2013 Detroit Music Award nominated The Pathetic Sounds of Detroit compilation, engineering and/or performance work on 2 tracks internationally released Detroit After Dark compilation on Still Music/K7, The Boy Wonders, Alex Webb, Dado Records, Soundhitectures (Slovenia).</p>

				<p>He especially likes dogs, making odd sounds with synthesizers, and woodworking.</p>

				<ul class="interview" data-qa="<?php echo sizeof($qa); ?>" data-name="<?php echo $qa[0]; ?>">
				
					<li data-name="EA">Peter, what was the catalytic moment for you to start Rocksteady Disco?</li>

					<li data-name="<?php echo initials($qa[0]); ?>">It was a pretty organic and not so catalytic moment really. I started DJ'ing around town a lot, and people kept sending me dubplates to play out. At a certain point I realized that I was sitting on quite a bit of tracks, and figured it was time to birth a label. <br><br>The first release I had in mind was Topher Horn's The Detroit Jazz Sessions Vol. 1. I was over at his studio and he was playing some of the tracks, and I was blown away by it. I asked him who produced it, and when he said it was him I knew it was time to make moves. He ended up polishing up the EP while RSD001 was making waves.</li>

					<li data-name="EA">It often seems like the music community in Detroit has 1 degree of separation. How do you look for talent, and music to release? Or does it find you?</li>

					<li data-name="<?php echo initials($qa[0]); ?>">That's definitely true. So far all of our releases have found me, which is quite a blessing really. All of Lafleur's stuff he sent to me, same with Pontchartrain, and G2S shot me an email out of the blue from across the Atlantic. I get sent demos a lot, and they're always quality stuff. But with Rocksteady Disco I'm interested in putting out high quality tracks for DJ use, that are also great to listen to outside of the discotheque.</li>

					<li data-name="EA">Has there been any surprises, or serendipitous moments, in running the label since you began?</li>

					<li data-name="<?php echo initials($qa[0]); ?>">We've been really growing organically, trying to avoid the politics and just let our work and passion speak for itself. That being said, we've had some really beautiful serendipitous moments. The one that stands out the most is when Dandois and I accidentally opened for Kai Alcé and Derrick May at MotorCity Wine. It was the night that Derrick May was playing at Chene Park at the DSO, which was a Friday. I play every Friday on MotorCity Wine's patio from 6-9, but if it's nice outside I'll play til 11 PM. So that night, Dandois was in town from Grand Rapids and we decided to keep running until 11 PM. At 10:59 PM I get a text from Lafleur (MCW's owner) saying, "Derrick's on his way, keep playing." By this point I'm digging deep into my B-Sides. Dandois and I are tagging, and more and more people are showing up. Lafleur comes up to me at midnight saying, "Kai Alcé is on his way with a bag of records, keep playing!" By this time it's a full-blown patio rager. Everyone was dancing. I'm seeing all these people I've never met before, and they're all coming up to me saying, "Who the hell are you?!?!?!" Then Derrick comes up behind me and starts messing with my EQ while has like a 10" cigar in his mouth. I finally handed my monophone over to Kai at 1 AM, at which he proceeded to melt everyone's face off until 3 AM. I had to be at work in Eastern Market at 8 AM the next day. Shout out to The Metropolitan for taking the only <a href="https://twitter.com/TheMetDet/status/640354648612843520" target="_new">photo</a> I've seen from that night.</li>

					<li data-name="EA">Rocksteady Disco is young. Where do you want to take it?</li>

					<li data-name="<?php echo initials($qa[0]); ?>"><span class="quote">The biggest thing for us to keep operating with integrity</span>. We have an absolutely killer release schedule for the rest of 2016 complete with some artists that even I'm surprised that we're releasing. But at this point, we want to keep putting out good music, paying our artists well, and putting out releases that do what art is supposed to do; which is make us feel more human. <br><br>The next step is to take Rocksteady Disco beyond the mitten. Our entire label and the way we DJ is thoroughly steeped in all of what makes Detroit great. But I'm moving to Chicago in late 2016, and the time seems ripe to take Rocksteady Disco on the road or across the Atlantic. </li>

				</ul>


		</div>

	</section>

</main>	<!-- main-content -->

<?php include($path.'data/article/article-subfooter.php'); ?>

<?php include($path.'inc/footer.php'); ?>

<?php include($path.'data/article/article-scripts.php'); ?>

</body>
</html>