<li <?php if($current_page === 'article' || $current_page === 'articles') { echo "class='active'"; } ?>><a href="<?php echo $root; ?>articles">Articles</a></li>
<li <?php if($current_page === 'festivals' || $current_page === 'festival') { echo "class='active'"; } ?>><a href="<?php echo $root; ?>festivals">Festivals</a></li>
<!-- <li><a href="<?php //echo $root; ?>store">Store</a></li> -->
<li <?php if($current_page === 'contact') { echo "class='active'"; } ?>><a href="#" data-reveal-id="contactModal">Contact</a></li>