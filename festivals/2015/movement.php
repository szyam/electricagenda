<?php // template 3 day
include('../../config.php');
$current_page   = 'single';
$page_title     = '2015 Movement Festival Shedule and Line-Up';
$festival       = "movement";
$str            = "movement";
?>


<?php include($path.'inc/header.php'); ?>

<section class="festival">
    <div class="fest-background">
        <div class="row">
            <div class="small-12 columns">
                <h1 class="text-center"><?php echo $page_title; ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="row show-for-medium-down">
    <div data-magellan-expedition="fixed">
        <dl class="sub-nav">
            <dd data-magellan-arrival="saturday"><a href="#saturday">Saturday</a></dd>
            <dd data-magellan-arrival="sunday"><a href="#sunday">Sunday</a></dd>
            <dd data-magellan-arrival="monday"><a href="#monday">Monday</a></dd>
        </dl>
    </div>
</section>

<?php include($path.'data/legacy/artist-array.php'); ?>

<div class="row">

    <div class="large-4 columns day saturday">
        <header>
            <a name="saturday"></a>
            <h2 data-magellan-destination="saturday">Saturday</h2>
        </header>

        <div class="stage">
        <h3>Movement</h3>

        <ul>
            <?php foreach ( $artists as $artist ) {
                if ( $artist["stage"] == 'movement' && $artist["day"] == 'saturday') { ?>

                <?php include($path.'data/legacy/artist_list.php'); ?>

                <?php } ?>
            <?php } ?>
        </ul>




        </div> <!-- end stage -->

        <div class="stage">
            <h3>Red Bull Music Academy</h3>
            <h5>Discloser Presents Wild Life</h5>
            <ul>
                <li>
                    <h4>Ben Christensen</h4>
                    <em>2pm - 3pm</em>
                </li>
                <li>Rick Wilhite <em>3pm - 4:30pm</em></li>
                <li>Keny Larkin <span class="live"></span> <em>4:30pm - 5:30pm</em></li>
                <li>Kerri Chandler <em>5:30pm - 7pm</em></li>
                <li>Octave One <span class="live"></span> <em>7pm - 8pm</em></li>
                <li>Method Man <em>8pm - 9pm</em></li>
                <li>Eats Everything <em>9pm - 10:30pm</em></li>
                <li>Disclosure <span class="dj"></span> <em>10:30pm - 12am</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Beatport</h3>
            <ul>
                <li>Midland <em>2pm - 4pm</em></li>
                <li>KiNK <span class="live"></span> <em>4pm - 5pm</em></li>
                <li>Catz 'N Dogz' <em>5pm - 6:30pm</em></li>
                <li>Soul Clap <em>6:30pm - 8pm</em></li>
                <li>Atom&#8482; & Tobias <span class="live"></span> <em>8pm - 9pm</em></li>
                <li>Henrik Schwarz <em>9pm - 10:30pm</em></li>
                <li>Tuskegee <em>10:30pm - 12am</em><br><small>( Seth Troxler B2B The Martinez Brothers )</small></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Thump</h3>
            <h5>Detroit Love Showcase</h5>
            <ul>
                <li>Urban Tribe <em>12pm - 2pm</em></li>
                <li>
                    <h4 data-desc="Coming from Detroit, this artist is turning heads.">Jay Daniel</h4>

                    <em>2pm - 3pm</em>
                </li>
                <li>Terrence Parker <em>3pm - 4pm</em></li>
                <li>Korrupt Data <em>4pm - 5pm</em></li>
                <li>Gaiser <span class="live"></span> <em>5pm - 6pm</em></li>
                <li>Recloose <em>6pm - 7pm</em></li>
                <li>Paul Woolford <em>7pm - 8pm</em></li>
                <li>Stacey Pullen <em>8pm - 9pm</em></li>
                <li>Floorplan <em>9pm - 10pm</em></li>
                <li>Carl Craig <small>Feat</small> Mad Mike Banks <em>10pm - 11:30pm</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Underground</h3>
            <ul>
                <li>Anthony Jimenez <em>5pm - 6pm</em></li>
                <li>Kanding Ray <span class="live"></span> <em>5pm - 6pm</em></li>
                <li>Paula Temple <em>5pm - 6pm</em></li>
                <li>Developer <em>5pm - 6pm</em></li>
                <li>Cell Injection <small>( Drumcell + Audio Injection )</small> <em>5pm - 6pm</em></li>
                <li>Regis <em>5pm - 6pm</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sixth Stage</h3>
            <h5>Konkrete Jungle Detroit Showcase</h5>
            <ul>
                <li>MC's Bombscare & Flow <em>All Day</em></li>
                <li>Thread <em>2pm - 3pm</em></li>
                <li>Steve Dronez <em>3pm - 4pm</em></li>
                <li>Calico <em>4pm - 5pm</em></li>
                <li>Galaktis <em>5pm - 6pm</em></li>
                <li>Dilemma <em>6pm - 7pm</em></li>
                <li>Mark 8En Moss <em>7pm - 8pm</em></li>
                <li>Sinistarr <em>8pm - 10pm</em></li>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end saturday -->




    <div class="large-4 columns day sunday">
        <header>
            <a name="sunday"></a>
            <h2 data-magellan-destination="sunday">Sunday</h2>
        </header>

        <div class="stage">
        <h3>Movement</h3>
        <ul>
            <li>Gabi <em>2pm - 3:30pm</em></li>
            <li>Bob Moses <span class="live"></span> <em>3:30pm - 4:30pm</em></li>
            <li>Oliver Dollar <em>4:30pm - 6pm</em></li>
            <li>Josh Wink <em>6pm - 7:30pm</em></li>
            <li>Art Department <em>7:30pm - 9pm</em></li>
            <li>Loco Dice <em>9pm - 10:30pm</em></li>
            <li>Dog Blood <small>( AKA Skrillex + Boys Noise )</small> <em>10:30pm - 12am</em></li>
        </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Red Bull Music Academy</h3>
            <ul>
                <li>The Valley And The Mountain <em>2pm - 3:30pm</em></li>
                <li>Rone <em>3:30pm - 5pm</em></li>
                <li>Wajeed <em>5pm - 6pm</em></li>
                <li>People Under The Stairs <em>6pm - 7pm</em></li>
                <li>Hudson Mohawke <em>7pm - 8pm</em></li>
                <li>Danny Brown <em>8pm - 9pm</em></li>
                <li><h6>Metroplex 30-Year Anniversary Showcase</h6></li>
                <li>Eddie Folkes <em>9pm - 10pm</em></li>
                <li>Kimyon <em>10pm - 10:40pm</em></li>
                <li>Milan Ariel <em>10:40pm - 10:50pm</em></li>
                <li>Model 500 <span>Live</span> <em>11pm - 12am</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Beatport</h3>
            <ul>
                <li>Ataxia <em>2pm - 4pm</em></li>
                <li>Robert Dietz <em>4pm - 5:30pm</em></li>
                <li>Dubfire <em>5:30pm - 7pm</em></li>
                <li>Maya Jane Coles <em>7pm - 8:30pm</em></li>
                <li>Hot Since 82 <em>8:30pm - 10pm</em></li>
                <li>Joseph Capriati <em>10pm - 12am</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Thump</h3>
            <h5>Ghostly International Showcase</h5>
            <ul>
                <li>Heathered Pearls <em>12pm - 1pm</em></li>
                <li>Miguel Senquiz <em>1pm - 2pm</em></li>
                <li>Matrixxman <em>2pm - 3pm</em></li>
                <li>Fort Romeau <em>3pm - 4pm</em></li>
                <li>Shigeto <span class="live"></span> <em>4pm - 5pm</em></li>
                <li>Osborne <span class="live"></span> <em>5pm - 6pm</em></li>
                <li>JTC <em>6pm - 7pm</em></li>
                <li>Derek Plaslaiko <em>7pm - 8pm</em></li>
                <li>Mike Servito <em>8pm - 9pm</em></li>
                <li>Ryan Elliott <em>9pm - 10pm</em></li>
                <li>Matthew Dear <em>10pm - 11:30pm</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Underground</h3>
            <ul>
                <li>Joel Morgan <em>2pm - 3pm</em></li>
                <li>Corbin Davis <em>3pm - 4:30pm</em></li>
                <li>Anthony Parasole <em>4:30pm - 6pm</em></li>
                <li>Steffi <em>6pm - 7:30pm</em></li>
                <li>Rødhåd <em>7:30pm - 9pm</em></li>
                <li>Marcel Dettmann <em>9pm - 10:30pm</em></li>
                <li>Ben Klock <em>10:30pm -12am</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sixth Stage</h3>
            <ul>
                <li>Marissa Guzman <span class="live"></span> <em>2pm - 3:30pm</em></li>
                <li>DJ Head <em>3:30pm - 5pm</em></li>
                <li>Raybone Jones <em>5pm - 6:30pm</em></li>
                <li>Bruce Bailey <em>6:30pm - 8pm</em></li>
                <li>Earl 'Mixxin' McKinney <em>8pm - 10pm</em></li>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end sunday -->


    <div class="large-4 columns day monday">
        <header>
            <a name="monday"></a>
            <h2 data-magellan-destination="monday">Monday</h2>
        </header>

        <div class="stage">
        <h3>Movement</h3>
        <ul>
            <li>Keith Kemp <em>2pm - 4pm</em></li>
            <li>Patrick Topping <em>4pm - 6pm</em></li>
            <li>Classixx <em>6pm - 7:30pm</em></li>
            <li>Ten Walls <span class="live"></span> <em>7:30pm - 8:30pm</em></li>
            <li>Maceo Plex <em>8:30pm - 10pm</em></li>
            <li>GRiZ <em>10pm - 11pm</em></li>
            <li>DJ Snoopadelic <small>( AKA Snoop Dogg )</small> <em>11pm - 12am</em></li>
        </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Red Bull Music Academy</h3>
            <ul>
                <li>Charles Trees <em>2pm - 2:30pm</em></li>
                <li>Nick Speed <em>2:30pm - 3:30pm</em></li>
                <li>DJ Godfather <small>Feat</small> Good Money <em>3:30pm - 4:30pm</em></li>
                <li>Jets <small>( Jimmy Edgar + Machinedrum )</small> <em>4:30pm - 5:30pm</em></li>
                <li>Ben Ufo <em>5:30pm - 7pm</em></li>
                <li>Joy Orbison <em>7pm - 8:30pm</em></li>
                <li>Brodinski <em>8:30pm - 9:30pm</em></li>
                <li>!!! <em>9:45pm - 10:40pm</em></li>
                <li>Squarepusher <span class="live"></span> <em>10:55pm - 12am</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Beatport</h3>
            <ul>
                <li>Sian <em>2pm - 3pm</em></li>
                <li>Audiofly <em>3pm - 4:30pm</em></li>
                <li>Route 94 <em>4:30pm - 6pm</em></li>
                <li>Kolsch <em>6pm - 7:30pm</em></li>
                <li>Paco Osuna <em>7:30pm - 9pm</em></li>
                <li>Nicole Moudaber <em>9pm - 10:30pm</em></li>
                <li>Joris Voorn <em>10:30pm - 12am</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Thump</h3>
            <h5>Kevin Saunderson Presents Origins</h5>
            <ul>
                <li>Dink & TK <em>12pm - 2pm</em></li>
                <li>Greg Gow <em>2pm - 3pm</em></li>
                <li>DJ Minx <em>3pm - 4pm</em></li>
                <li>D.Wynn <em>4pm - 5pm</em></li>
                <li>The Saunderson Brothers <em>5pm - 6pm</em></li>
                <li>Phuture <span class="live"></span> <em>6pm - 7pm</em></li>
                <li>Al Ester <em>7pm - 8pm</em></li>
                <li>Lee Foss <em>8pm - 9pm</em></li>
                <li>MK <small>(Marc Kinchen)</small> <em>9pm - 10:30pm</em></li>
                <li>Kevin Saunderson & Derrick Map <em>10:30pm - 12am</em> <small>Present 'Hi-Tech Soul'</small></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Underground</h3>
            <ul>
                <li>Annie Hall <em>2pm - 3:15pm</em></li>
                <li>Jeff Deringer <em>3:15pm - 4:30pm</em></li>
                <li>Clark <span class="live"></span> <em>4:30pm - 5:30pm</em></li>
                <li>Nina Kraviz <em>5:30pm - 7pm</em></li>
                <li>Matador <span class="live"></span> <em>7pm - 8:30pm</em></li>
                <li>Sterac <small>AKA Steve Rachmad</small>  <em>8:30pm - 10pm</em></li>
                <li>Ben Sims <em>10pm - 12pm</em></li>
            </ul>
        </div> <!-- end stage -->

        <div class="stage">
            <h3>Sixth Stage</h3>
            <ul>
                <li>ADMN <em>2pm - 4pm</em></li>
                <li>Andy Garcia <em>4pm - 5:30pm</em></li>
                <li>Marshall Applewhite <em>5:30pm - 7pm</em></li>
                <li><h6>Detroit Techno Militia Showcase</h6></li>
                <li>Darkcube <span class="live"></span> <em>7pm - 7:30pm</em></li>
                <li>Annix <em>7:30pm - 8pm</em></li>
                <li>Loner.9 <span class="live"></span> <em>8pm - 8:30pm</em></li>
                <li>Neil V. <em>8:30pm - 9pm</em></li>
                <li>Shawn Rudiman <span class="live"></span> <em>9pm - 9:30pm</em></li>
                <li>313 The Hard Way <em>9:30pm - 10pm</em> <br><small>( DJ Seoul B2B DJ Psycho B2B T. Linder )</small></li>
            </ul>
        </div> <!-- end stage -->

    </div> <!-- end monday -->

</div> <!-- end row -->

<section id="artistInfo" class="popupBlock artistInfo">

    <i id="artistClose" class="fa fa-close"></i>

    <img id="artistImg" src="http://placehold.it/150x150">

    <h1 id="artistName">Artist Name</h1>

    <p id="artistDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud.</p>

    <footer>
        <a id="artistLink" href="" target="new">
            <h6>Hear Music</h6>
            <i class="fa fa-music"></i>
        </a>
    </footer>

</section>

<?php include($path.'inc/footer.php'); ?>
</body>
</html>
