<script type="text/javascript">
	$(document).on('ready', function(){

	<?php if( $qa ): ?>
	var quote 	= $('span.quote').each( function(index){
		var $this = $(this),
			cite = '<cite><?php echo $qa[0]; ?></cite>';

			$('<blockquote>' + $this.text() + cite + '</blockquote>').insertAfter('.main-content p:eq('+ (index*2) +')');
	});

	// $('<blockquote>' + quote + cite + '</blockquote>').insertAfter('.main-content p:eq(1)');
	<?php endif; ?>

	var artistName = $('.interview').data('name');
	$('.interview').prepend('<h6 class="introduction"><em>Interview with '+ artistName +'</em></h6>');


	$('.interview li').each( function() {
		var cite = $(this).data('name');
		$('<span>'+ cite +'</span>').prependTo($(this));
	});

	<?php if( isset($featureTitle) && ( $featureTitle !== null ) ): ?>
	if ($(window).width() >= 800){  // ADD conditional for page
		var wavesurfer = WaveSurfer.create({
		    container: '#waveform',
		    progressColor: '<?php echo $titleColor; ?>',
		    cursorColor: '#ccc'
		});

		wavesurfer.load('<?php echo $root; ?>audio/<?php echo linky($featureSong); ?>.mp3');

		wavesurfer.on('ready', function () {
		    $('.scheduledSpinner').remove();
		});

		$('#playToggle').on('click', function(){
			$(this).toggleClass('playing');
			wavesurfer.playPause();
		});

	} else {
		<?php if( isset($soundcloudID) && ( $soundcloudID !== null ) ): ?>
		var $soundcloudID = '<?php echo $soundcloudID; ?>';
		$('<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'+$soundcloudID+'&amp;color=7e5ae2&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>').prependTo('.entry-content');
		<?php endif; ?>

	} //end if

	<?php endif; ?>

	}); //ready
</script>