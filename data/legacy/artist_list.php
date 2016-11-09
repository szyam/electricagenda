<?php
//
//	Page for artist template
// add "showcase"      =>  "", after the last key-value, for an inserted showcase inside the UL
?>

<?php asort($artists); ?>
<?php if (isset($artist["showcase"]) && !(empty( $artist["showcase"])) ) {
    echo '<li><h6>' . $artist["showcase"] . '</h6></li>';
} else {
    echo "";
} ?>
<li <?php if ( isset($artist["music-link"])&& !(empty( $artist["music-link"])) ) {  echo 'data-url="'.$artist["music-link"].'"'; } ?>>
    <h4 data-desc='<?php if ( isset($artist["desc"]) ) { echo $artist["desc"]; } ?>'><?php echo $artist["first_name"]; ?><?php if ( isset($artist["last_name"]) ) { echo ' ' . $artist["last_name"]; } ?></h4>

    <?php if ( isset($artist["set_type"]) && $artist["set_type"] == "live" ) {
        echo '<span class="live"></span>';
    } elseif ( isset($artist["set_type"]) && $artist["set_type"] == "dj" ) {
        echo '<span class="dj"></span>';
    } else {
        echo '';
    } ?>

    <?php if ( $artist["popup"] == 'true' ) { ?>
        <a class="artistBtn animated slideInRight" href="#"><i class="fa fa-music"></i></a>
    <?php } ?>
    <?php if ( isset($artist["feat"]) && !(empty( $artist["feat"])) ) { echo '<small>feat '.$artist["feat"].'</small>'; } ?>
    <em><?php echo $artist["time"]; ?></em>
</li>
