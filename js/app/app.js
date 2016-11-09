// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation({
"magellan-expedition": {
  active_class: 'active', // specify the class used for active sections
  threshold: 0, // how many pixels until the magellan bar sticks, 0 = auto
  destination_threshold: 20, // pixels from the top of destination for it to be considered active
  throttle_delay: 50, // calculation throttling to increase framerate
  fixed_top: 0, // top distance in pixels assigend to the fixed element on scroll
  offset_by_height: true // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
}
});

$(document).ready( function() {

  // $(function() {
  //   // * Scroll Nav - https://jsfiddle.net/mariusc23/s6mLJ/31/
  //   var didScroll,
  //     lastScrollTop = 0,
  //     delta = 5,
  //     navbarHeight = $('.main-header').outerHeight();

  //   $(window).scroll(function(event){
  //       didScroll = true;
  //   });

  //   setInterval(function() {
  //       if (didScroll) {
  //           hasScrolled();
  //           didScroll = false;
  //       }
  //   }, 250);

  //   function hasScrolled() {
  //       var st = $(this).scrollTop();
  //       // * Make sure they scroll more than delta
  //       if(Math.abs(lastScrollTop - st) <= delta)
  //           return;
        
  //       // * If they scrolled down and are past the navbar, add class .nav-up.
  //       // * This is necessary so you never see what is "behind" the navbar.
  //       if (st > lastScrollTop && st > navbarHeight){
  //           // Scroll Down
  //           $('.main-header').removeClass('nav-down').addClass('nav-up');
  //       } else {
  //           // * Scroll Up
  //           if(st + $(window).height() < $(document).height()) {
  //               $('.main-header').removeClass('nav-up').addClass('nav-down');
  //           }
  //       }
  //       lastScrollTop = st;
  //   }
  //   // * End scroll nav
  // });

    if ( $('body').hasClass('home') || $('body').hasClass('festivals')) {
    	$(function(){
    	    $('#festival-container').mixItUp();
    	});
    }

	// Remove link from non-active festival thumbs
	var $home_li	=	$('#festival-container li');

	$home_li.find('a.false').parent('li').addClass('coming-soon');
	$home_li.on( 'click', 'a.false', function(e){
		e.preventDefault();
	});

  //add showcases to relevent stages



	//add sharing to stages
	var $stage 			= $('.stage'),
		$stageTitle		= $('.stage > h3'),
		$stageShare 	= $('.share-stage'),
		$stageName 		= $('.stage > h3').text(),
		$faShare  		= $('<i class="fa fa-heart share-icon"></i>'),
		$twtr			= '<a href="http://twitter.com/share?url=http://www.electricagenda.com&text=words to tweet&hashtags=electricagenda"><i class="fa fa-twitter"></i></a>',
		$fcbk 			= '<a href="#"><i class="fa fa-facebook"></i></a>',
		$gpls 			= '<a href="#"><i class="fa fa-google-plus"></i></a>';


	$stageTitle.append($faShare);
	$stageTitle.after('<div class="share-stage"><em>Tweet this stage:</em></div>');
	//$('.share-stage').append( $twtr + $fcbk + $gpls );

	// $stage.on('click', 'h3', function(){
	// 	console.log(this);
	// });


	$stageTitle.on( 'click', function(e){
		var $currStage	= $(this).text().replace(/ /g,'').toLowerCase(),
			$currDay	= $(this).parent('.stage').siblings('header').children('h2').text().toLowerCase();

		$stageTitle.not(this).next($stageShare).removeClass('active');
		$(this).next($stageShare).toggleClass('active');
		$(this).attr( 'id', $currDay + '-' + $currStage );
		e.stopPropagation();
	});


	$stageTitle.one( 'click', function(e){
		var $currStage	= $(this).text().replace(/ /g,'').toLowerCase(),
			    $currDay	= $(this).parent('.stage').siblings('header').children('h2').text().toLowerCase(),
			     $year		= $("#fest-year").text(),
			     $url 		= $('.festival').data('fest');

		$(this).next('.share-stage').append('<a href="http://twitter.com/share?url=http://www.electricagenda.com/festivals/' + $year + '/' + $url + '&text=' + $(this).text() + ' on ' + $(this).parent('.stage').siblings('header').children('h2').text() + '&hashtags=electricagenda" target="_blank"><i class="fa fa-twitter"></i></a>\
			<a href="http://www.facebook.com/sharer.php?u=http://www.electricagenda.com/festivals/' + $year + '/' + $url + '" target="_blank"><i class="fa fa-facebook"></i></a>\
		<a href="https://plus.google.com/share?url=http://www.electricagenda.com/festivals/' + $year + '/' + $url + '" target="_blank"><i class="fa fa-google-plus"></i></a>');
		e.preventDefault();
	});

  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 400);
          return false;
        }
      }
    });
  });


  if ( $('body').hasClass('home') || $('body').hasClass('article') || $('body').hasClass('articles') ) {

      if ($(window).width() >= 640){  // ADD conditional for page

          function loadBackground() {
              var $article_img_bg   = $('#imgFocus .bg-img'),
                  $article_img_url  = $article_img_bg.data('bg');

                  $article_img_bg.css('background','url(' + $article_img_url + '.jpg)' );
                // $('.article .article-header').find('.scroll-down').addClass('fadeIn');
          }
          setTimeout(loadBackground, 300);
        
      } else if ( $(window).width() < 640 && $('body').hasClass('article')) {  

          $('<figure class="mobile-feat-img"><img src="' + $('.article .article-header .bg-img').data('bg') + '-th.jpg"></figure>').insertAfter('#main-header');
        
      } else if ( $(window).width() < 640 && $('body').hasClass('home')) {  

          $('<figure class="mobile-feat-img"><img src="' + $('.bg-img').data('bg') + '-th.jpg"></figure>').prependTo('#imgFocus');
      }

      $('.articles-loop li').each(function(){
        $('img').error(function(){
            $this.attr('src', '../img/ea-f.jpg');
        });
      });


      // Detect objectFit support
      if('objectFit' in document.documentElement.style === false) {
        // assign HTMLCollection with parents of images with objectFit to variable
        var container = document.getElementsByClassName('feat-img');
        // Loop through HTMLCollection
        for(var i = 0; i < container.length; i++) {
          // Asign image source to variable
          var imageSource = container[i].querySelector('img').src;
          // Hide image
          container[i].querySelector('img').style.display = 'none';
          // Add background-size: cover
          container[i].style.backgroundSize = 'cover';
          // Add background-image: and put image source here
          container[i].style.backgroundImage = 'url(' + imageSource + ')';
          // Add background-position: center center
          container[i].style.backgroundPosition = 'center center';
        }
      }

  }//endif 



  function scrollDownIcon() {
    $('.article .article-header').find('.scroll-down').addClass('slideInUp');
  }
  setTimeout(scrollDownIcon, 800);

  $('.article-gallery').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery:{enabled:true}
  });

  $('.zoom').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
    });

// function getArtists(){
//   console.log('connection');
// }

//ajax artist info  
  // $.ajax({
  //     url: '/3lectricAgenda/data/artist/artists.json',
  //     dataType: 'json',
  //     data: 'artist_name',
  //     async: true,
  //     success: getArtists
  // });

  // (function(){
  //   var showData = $('#show-data');

  //   $.getJSON('/3lectricAgenda/data/artist/artists.json', function (data) {
  //     console.log(data);

  //     var items = data.artists.map(function (item) {

  //       // parse:function(response) {
  //       //   return response.stephcopeland;
  //       // }

  //       // return item.key + ': ' + item.value;
  //       return item.artist_name + ' - ' + item.country;
  //     });

  //     showData.empty();

  //     if (items.length) {
  //       var content = '<li>' + items.join('</li><li>') + '</li>';
  //       var list = $('<ul />').html(content);
  //       showData.append(list);
  //     }
  //   });

  //   showData.text('Loading the JSON file.');
  // })();

}); // ready


// artist launch
  function artistLaunch(response) {
    var $artistLi   = $('.stage > ul > li'),
      $artistInfo   = $('#artistInfo');

    $artistLi.on( 'click', '.artistBtn', function(e) {
      e.preventDefault();
      var $currentArtist  = $(this).siblings('h4').text(),
        $currentDesc  = $(this).siblings('h4').data('desc'),
        $currentImg   = $currentArtist.toLowerCase().replace(/ /g,''),
        //$imageTrimmed = $currentImg.replace(/ /g,''),
        $currentUrl   = $(this).parent('li').data('url');

      //console.log($currentArtist);
      $('#artistName').text($currentArtist);
      $('#artistDesc').text($currentDesc);
      $('#artistLink').attr('href', $currentUrl);
      $('#artistImg').attr('src', '../../img/artists/' + $currentImg + '.jpg' ).attr('alt', $currentArtist );
      $artistInfo.addClass('active');

          $('img').error(function(){
              $(this).attr('src', '../../img/artists/user.jpg');
          });
    });


    $('#artistClose').on('click', function() {
      $artistInfo.removeClass('active');
    });
  } // End function
  // setTimeout(artistLaunch, 2000);

var myCallback = function (response) {
  $("#spinLoad").hide();
   if (!response) {

     $(".loadingZone").fadeOut();
      artistLaunch();
      
      $('.the-time').children('span').each( function() {
          var theTime = $(this),
              fDate = $(this).text();

          fDate = fDate.replace(/[0-9]{1,2}(:[0-9]{2}){2}/, function (time) {
              time = time.replace(/.{3}$/, '');
              var hms = time.split(':'),
                  h = +hms[0],
                  suffix = (h < 12) ? 'am' : 'pm';
              hms[0] = h % 12 || 12;

              theTime.html(hms.join(':') + suffix);

              return hms.join(':') + suffix
          });

          $(this).addClass('animated fadeIn').removeClass('hide');
      });
      // adding the showcase to the stage
      $('.stage').each(function() {
        var parentLi = $(this).children('ul').children('li');
        if ( parentLi.data('showcase') ) {
          var showcase = parentLi.data('showcase');
          $(this).children('ul').prepend('<h5>'+ showcase +'</h5>');
        }
      });

   } //if
 };

var hideLoader = function (response) {
   if (!response) {
      $(".loadingZone").fadeOut();
      artistLaunch();
   }
};

var loader = '<div class="spinner" id="spinLoad"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>';
$(loader).appendTo('.loadingZone');

// $(document).ready(function(){
//   //check to see if stage is empty for a particular day, if so remove it
//   $('.stage ul').each( function(){
//     if ( ! ($(this).children('li').length) ) {
//       // $(this).parent('.stage').remove();
//       console.log($(this).children('li'));
//     }
//   })
// });
