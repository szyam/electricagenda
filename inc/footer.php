<footer class="main-footer">
    <div class="row text-center">
        <span class="logo">
            <a href="#main-header">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 185.5 118.3" enable-background="new 0 0 185.528 118.313" xml:space="preserve"><path d="M0 1.3h65.2v117H0v-12.1h51.6V68.5H3.1V56.5h48.5V13.4H0V1.3z"/><polygon fill-rule="evenodd" clip-rule="evenodd" points="85.6 118.3 128 25.6 171.5 118.3 185.5 118.3 128 0 72.2 118.3 "/><polygon fill-rule="evenodd" clip-rule="evenodd" points="113.6 118.3 128.7 84.2 142.6 118.3 154.8 118.3 128.7 52.2 100.7 118.3 "/></svg>
            </a>
        </span>

        <!-- <p><a href="#" data-reveal-id="contactModal">Connect</a></p> -->

        <div class="footer-info">
            <ul class="footer-nav">
                <li><a href="<?php echo $root; ?>">Home</a></li>
                <li><a href="<?php echo $root; ?>articles">Articles</a></li>
                <li><a href="<?php echo $root; ?>festivals">Festivals</a></li>
                <li><a href="#" data-reveal-id="contactModal">Contact</a></li>
                <!-- <li><a href="<?php echo $root; ?>about">About Us</a></li> -->
                <li><a href="<?php echo $root; ?>advertising">Advertising</a></li>
                <!-- <li><a href="<?php echo $root; ?>festivals-connect">Festival Connect</a></li> -->
            </ul>

            <div class="legal">
                <p>Electric Agenda &copy; <small>All Rights Reserved</small></p>
                <?php if($current_page === "festival") : ?>
                    <p><small><?php echo $page_title; ?> | Times, events and artists are subject to change at any time.</small></p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</footer>

<?php if( $current_page === "article" || $current_page === "festival") : ?>
<section id="share" class="sharing-container">
    <h6 class="hide-for-small">share</h6>
    <div class="sharing-module">
        <a href="http://twitter.com/share?url=http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>&text=<?php echo $page_title; ?>&hashtags=electricagenda" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="http://www.facebook.com/sharer.php?u=http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
        <a rel="nofollow" href="https://plus.google.com/share?url=http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>

        <a id="mobileShare" class="mobile-share show-for-small"><i class="fa fa-share"></i></a>
        
    </div>
</section>
<?php endif; ?>

<div id="contactModal" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">Connect with us.</h2>

    <div class="row">

        <div id="contact" class="small-12 columns">
          <form name="contactform" method="post" action="<?php echo $root; ?>send_form_email.php">

            <div class="row">
                <div class="medium-6 columns">
                    <label for="first_name">First Name</label>
                    <input  type="text" name="first_name" placeholder="First Name">
                </div>

                <div class="medium-6 columns">
                    <label for="last_name">Last Name</label>
                    <input  type="text" name="last_name" placeholder="Last Name">
                </div>
            </div>

            <label for="email">Email Address</label>
            <input  type="text" name="email" placeholder="Email">

            <label>Department:
                <select name="inquiry">
                  <option value="general">General Info</option>
                  <option value="contribute">Contributing</option>
                  <option value="advert">Sponsorship</option>
                  <option value="festival">Festival</option>
                  <option value="artist">Artist</option>
                </select>
              </label>

            <label for="comments" id="comments">Message</label>
            <textarea name="comments" placeholder="" rows="5"></textarea>
            <div id="submit-button">
                <input type="submit" value="Send" id="submit" class="button">
            </div>
        </form>

            </div> <!-- end #contact -->

    </div> <!-- row -->

    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<script type="text/javascript" src="<?php echo $root; ?>build/js/foundation.js"></script>

<?php if ( $current_page === 'festivals' || $current_page === 'festival' ) : ?>

    <script src="<?php echo $root; ?>build/js/festival.js"></script>

<?php elseif (  $current_page === 'article' ) : ?>

   <script src="http://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.0.52/wavesurfer.min.js"></script>

<?php endif; ?>


<script type="text/javascript" src="<?php echo $root; ?>build/js/app.js"></script>
