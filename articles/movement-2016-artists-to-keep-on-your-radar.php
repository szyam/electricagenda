<?php // Includes
	require('../config.php');
	include($path.'data/article/article-array.php');
	$current_page   = "article";
	
	// Artist Info From Array
	$current_id     = 5;
	$page_title     = $articles[$current_id]["title"];
	$artist_name 	= $articles[$current_id]["artist_name"];

	// Colors
    $title_align	= "left"; //positions header text
    $titleColor		= "rgba(126, 90, 226, 0.9)";

    // Credits
    $qa		 		= array("");
    $credits		= array();

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

			
			<h5>Full line-up and schedule for the 2016 Movement festival <?php festLink('festivals','2016','movement','here'); ?>.</h5>

			<hr>

			<p><strong>The line-up is deep and the headliners are great, but we want to highlight a few artists that are definitely worth checking out this year.</strong></p>

			<h3>Brian Gillespie</h3>
			<?php echo ai($artist_name, 'gillespie', 'is-medium is-left'); ?>
			<p>From personally attending the <em>Family Funktion</em> nights at Alvin's in the late 90's, I can personally attest to the impact that Gillespie has had on the scene, and music community. You may know him best for his work with The Detroit Grand Pubahs and the Detroit classic “Sandwiches” (Throw). At one point you’ve probably danced to a Starski and Clutch anthem (“East to West”or ”Belle Isle Players”). But those that really know Detroit music, remember him for the infamous Poor Boy parties he threw at the historic Packard Plant, his over 6 year residence at the legendary Motor Lounge, a force behind Family Funktion, and the multiple record labels he has formed through the years including: Twilight 76, Databass, Throw, Juke Trax, D.E.T. Only, and most recently YoSucka!. He is respected as a collector of music with an eclectic taste ranging from Detroit funk, jazz, boogie and hip hop to ghetto tech, electro, techno and bass. His passion and knowledge for all aspects of music is what has set him apart through the decades. Gillespie is truly the definition of Detroit hustle.</p>

			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/10459015&amp;color=7e5ae2&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

			<hr>

			<h3 class="text-right">Dam-Funk</h3>
			<?php echo ai($artist_name, 'dam-funk', 'is-medium is-right'); ?>
			<p>Damon “Dam-Funk” Riddick is the epitome of funk. Ever since debuting with Stones Throw in 2008, Dam-Funk has become one of the genres most passionate proselytizers, out to save it from devilish depictions of cartoonish caricature. To Dam, funk is a way of living, “a feeling of struggle and staying cool through it all.” In 2013, he released his celebrated partnership with hip-hop’s Snoop Dogg titled 7 Days of Funk. Fresh for ’15, Dam returns with a solo project nearly six years in the making: Invite the Light.</p>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/248270248&amp;color=7e5ae2&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			<hr>

			<h3>Fit Siegel</h3>
			<?php echo ai($artist_name, 'siegel', 'is-medium is-left'); ?>
			<p>Fit Siegel, otherwise known simply as FIT, has quietly risen to become a pillar of the Detroit underground. Siegel studied production under the tutelage of “Mad” Mike Banks within the hallowed halls of Underground Resistance’s Submerge building. His years of hard work paid off with his debut record “Tonite,” a bona fide underground hit released on Omar S’ FXHE label in 2012. FIT has worked closely with Alex O. Smith, remixing his anthemic track S.E.X. and issuing “Enter The Fog” 12,” a focused collaboration with Gunnar Wendel (Kassem Mosse) also on FXHE. More importantly, FIT has internalized the fierce DIY ethos of both UR and FXHE through his own label, FIT SOUND, and his crucial midwest distribution center, widely considered to be the finest source of new vinyl from the lionized city.</p>

			<p>As a DJ, FIT follows in the genre free footsteps of Motor City legends Ken Collier and The Wizard. Rather than cordoning off a specific sound, he pulls freely from disco and post punk, to the most alien forms of techno and house music breeding in Detroit today. His unique take on the Motor City sound has taken him to South America, across Europe, Asia and Australi.</p>
			<iframe width="100%" height="198" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/73717437&amp;color=7e5ae2&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			<hr>

			<h3 class="text-right">Job Jobse</h3>
			<?php echo ai($artist_name, 'jobse', 'is-medium is-right'); ?>
			<p>Some people have no doubt about it: being a DJ is all they want to do. After learning the ropes at Amsterdam’s legendary club 11, Job began his adventure into electronic music with an internship at the renowned Innervisions label in Berlin. After moving back to Amsterdam to work as the booker of Trouw, things went uphill very fast. Job currently holds his own successful residency at the famous club – Drukpers, the first party ever held at the venue – and is also active as the label manager for the popular Life and Death label. With all Job has achieved so far and a current heavy touring schedule, including appearances spanning from Burning Man to Panorama Bar, one can only wonder where he will go next.</p>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/219057730&amp;color=7e5ae2&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			<hr>

			<!-- <h3>Magda</h3>
			<?php //echo ai($artist_name, 'magda', 'is-medium is-left'); ?>
			<p>Though no new comer at all to techno, we simply wanted to spotlight her for the diverse range of music incorporated in her sets. Magda’s realm as an artist spans far beyond the typical role played by DJs and producers. With an open mind, Magda will try her hand at whatever feels right; from producing high-quality Tequila to tech collaborations, fashion and art, Magda has created a truly unique, multifaceted expression of herself.</p>

			<p>Born in Poland, raised in Detroit and now based in Berlin, Magda has soaked up the various characteristics of her surroundings, resulting in a widely-cultured perspective, tuned to see beauty and potential in the most derelict and depressed of places. As a teenager partying in Detroit, it wasn’t long until Magda was fully immersed in the city’s underground scene. In 1998, she was dropped straight into the deep end; she joined Minus and began touring the world as Richie Hawtin’s opening DJ. Whilst this was a perfect platform for Magda to show off her talents and develop a fan-base, it brought with it the constraints of an established reputation. Magda was defined as a DJ under the Minus umbrella, but since has forged her own path.</p>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/207505545&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			<hr> -->

			<h3 class="text-right">Pontchartrain</h3>
			<?php echo ai($artist_name, 'pontchartrain', 'is-medium is-left'); ?>
			<p>In 2014 after nearly a decade of collecting records, and playing various roles in the dance music scene of Detroit and West Michigan, the Pontchartrain moniker was born. What began as tools for his own personal dancefloor use turned into head-turning release after release of his vision for edits of forgotten classics and sample-heavy house cuts. In a short couple of years, his release catalog has gained support from various well respected artists, garnered him international bookings and acclaim, and earned him the A&R position for Sleazy McQueen’s highly sought after Whiskey Disco imprint. The sounds he chooses, reflect the obvious influences from Detroit’s past, with a new face and ideology that continues to entertain and surprise.</p>

			<p>In his own words “A lot of people have forgotten what it means to be a DJ and what the greatest part of that job is. I want to feel like I’m stepping into a house party every time I screw in my needles. I want people in the room to feel the same. I want them to be happy, to feel relaxed, to feel at home. I want them to feel like everything is ok in that moment. A DJ essentially should make you feel high with your friends. A DJ is basically a drug.”</p>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/252276001&amp;color=7e5ae2&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			<hr>

			<h3>Rebecca Goldberg</h3>
			<?php echo ai($artist_name, 'RebeccaGoldberg', 'is-medium is-right'); ?>
			<p>Back when radio ruled and the boombox gave us mixtapes, live broadcasts were the very essence of the Detroit club-music scene. Technology was turning cassettes into CDs and Rebecca’s frequent trips to Harmony House fueled her music collection. She poured over the cherished tunes that were spun on Saturday nights at the State Theatre’s legendary “Club X”. Inspired by Stacey “Hotwaxx” Hale, the Godmother of House Music, who was reigning over the airwaves, it was only a matter of time before Rebecca would satiate her musical appetite as a disc jockey.</p>

			<p>Rebecca is now a seasoned radio DJ, having mixed on WDET 101.9’s Sunday Sessions show, 89.3 WHFR out of Dearborn, as well as various internet radio stations hosted in Detroit and worldwide. She is a resident DJ of Nevermore Tuesdays at the Grasshopper Underground, Monday Night Lights at Northern Lights Lounge and a regular player in the house music party scene.</p>
			<hr>

			<h3>Scott Zacharias</h3>
			<?php echo ai($artist_name, 'zacharias', 'is-medium is-left'); ?>
			<p>Scott Zacharias is musically ambidextrous, the co-founder of both Detroit’s Macho City and Disco/Secret with Mike Trombley, and the original resident of Oslo. He started in thrash bands as a teenager then moved on to space rock project Monaural before his interests in Jazz ultimately led him to the traditions of Detroit’s deep house DJs, and then beyond into a truly expansive almost psychedelic take on Disco and all its weird friends. He has blossomed into Detroit’s best kept secret, a true student of freeform dance music.</p>
<!-- 			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/172018387&amp;color=7e5ae2&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
 -->			<hr>

			<h3 class="text-right">Stone Owl</h3>
			<?php echo ai($artist_name, 'stone-owl', 'is-medium is-right'); ?>
			<p>Implanting the hard, driven soul, of the city of Detroit, into their rolling bass lines, dark harmonies, and ancient rhythms, Stone   Owl claims a timeless sound all their own. They produce art that tells a story… subsonic, melodic, and provocative.</p>
			<iframe width="100%" height="198" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/40047924&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

			

		</div> <!-- columnn -->
	</section> <!-- row -->

</main>	<!-- main-content -->

<?php include($path.'data/article/article-subfooter.php'); ?>

<?php include($path.'inc/footer.php'); ?>

<?php include($path.'data/article/article-scripts.php'); ?>

</body>
</html>