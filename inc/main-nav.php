
<li <?php if($current_page === 'article' || $current_page === 'articles') { echo "class='active'"; } ?>><a href="<?php echo $root; ?>articles">Articles</a></li>


<?php include($path.'data/festival/festival-array.php'); ?>
<?php if( array_key_exists('end_date', $festivals)): ?>

<?php if ( strtotime($festival['end_date']) >= time() ) { ?>
<li <?php if($current_page === 'festivals' || $current_page === 'festival') { echo "class='active'"; } ?>><a href="<?php echo $root; ?>festivals">Festivals</a></li>
<?php } ?>

<?php endif; ?>

<li <?php if($current_page === 'contact') { echo "class='active'"; } ?>><a href="#" data-reveal-id="contactModal">Contact</a></li>