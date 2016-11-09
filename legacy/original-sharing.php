<?php if ( $current_page === 'home' ) : ?>
    
<li><a href="http://www.facebook.com/sharer.php?u=http://www.electricagenda.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="http://twitter.com/share?url=http://www.electricagenda.com&text=Mobile Friendly Electronic Music Festival Schedules and Artist info&hashtags=electricagenda" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="mailto:?Subject=Mobile Friendly Electronic Music Festival Schedules and Artist info&Body=http://www.electricagenda.com"><i class="fa fa-envelope"></i></a></li>
<li><a class="share"><i class="fa fa-arrow-left"> Share</i></a></li>

<?php elseif ( $current_page === 'single' || $current_page === 'article' ) : ?>

<li><a href="http://www.facebook.com/sharer.php?u=http://www.electricagenda.com/<?php if($current_page === 'single'){ echo $year . '/'; } ?><?php echo $str;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="http://twitter.com/share?url=http://www.electricagenda.com/<?php if($current_page === 'single'){ echo $year . '/'; } ?><?php echo $str;?>&text=<?php echo $page_title; ?>&hashtags=electricagenda" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="mailto:?Subject=<?php echo $page_title; ?>&Body=http://www.electricagenda.com/<?php if($current_page === 'single'){ echo $year . '/'; } ?><?php echo $str;?>"><i class="fa fa-envelope"></i></a></li>
<li><a class="share"><i class="fa fa-arrow-left"> Share</i></a></li>

<?php else : ?>

<li><a href="http://www.facebook.com/sharer.php?u=http://www.electricagenda.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="http://twitter.com/share?url=http://www.electricagenda.com&text=Mobile Friendly Electronic Music Festival Schedules and Artist info&hashtags=electricagenda" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="mailto:?Subject=Mobile Friendly Electronic Music Festival Schedules and Artist info&Body=http://www.electricagenda.com"><i class="fa fa-envelope"></i></a></li>
<li><a class="share"><i class="fa fa-arrow-left"> Share</i></a></li>

<?php endif; ?>