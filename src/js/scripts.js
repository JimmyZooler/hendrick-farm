/*************************************
*
*  A file for my custom scripts
*
*************************************/

(function($) {
    var $navbar = $('#wrapper-navbar'),
        $document = $(document),
        $window = $(window),
        $body = $("body");
    $document.scroll(function() {
        if ($window.width() >= 991 ) {
            if ($document.scrollTop() >= 4 ) {
                $navbar.addClass("white-bg-navbar");
            } else {
                $navbar.removeClass("white-bg-navbar");
            }
        } else {
            if ($document.scrollTop() >= 1) {
                $navbar.addClass("white-bg-navbar");
            } else {
                $navbar.removeClass("white-bg-navbar");
            }
        }
      
    });
    $document.ready( function() {
        var menuOpen = function () {
            $navbar.toggleClass('menu-open');
            $body.toggleClass('noscroll');
        }
        $(".navbar-toggler").on('click', function() {
            menuOpen();
        } );
    });
    
    $document.ready( function() {
        var $indicatorOne = $('#indicator-1'),
            $indicatorTwo = $('#indicator-2'),
            $indicatorThree = $('#indicator-3'),
            $indicatorFour = $('#indicator-4'),
            $heroPager = $('.hero--pager');
        
        var waypoint = new Waypoint({
          element: $('#hero-section-4'),
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $navbar.addClass("zero-opacity");
              } else {
                  $navbar.removeClass("zero-opacity");
              }
          },
          offset: 'bottom-in-view'
        });
        
        var homeFiveWaypoint = new Waypoint({
          element: $('#home-section-5'),
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $heroPager.addClass("zero-opacity");
              } else {
                  $heroPager.removeClass("zero-opacity");
              }
          },
          offset: 'bottom-in-view'
        });
        
        var pagerOne = new Waypoint({
          element: $('#hero-section-2'),
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $indicatorOne.removeClass("active");
                  $indicatorTwo.addClass("active");
              } else {
                  $indicatorTwo.removeClass("active");
                  $indicatorOne.addClass("active");
              }
          },
            offset: 68
        });
        
        var pagerTwo = new Waypoint({
          element: $('#hero-section-3'),
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $indicatorTwo.removeClass("active");
                  $indicatorThree.addClass("active");
              } else {
                  $indicatorThree.removeClass("active");
                  $indicatorTwo.addClass("active");
              }
          },
            offset: 68
        });
        
        var pagerThree = new Waypoint({
          element: $('#hero-section-4'),
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $indicatorThree.removeClass("active");
                  $indicatorFour.addClass("active");
              } else {
                  $indicatorFour.removeClass("active");
                  $indicatorThree.addClass("active");
              }
          },
            offset: 68
        });
        
        //Linking the dots to each section
        
        $(".pager--indicator-link").click( function() {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 1200);
        });
        
    });
    
    // scripts for home animations 
    
    $(document).ready(function(){
            var $heroContent2 = $('#hero-section-2 .hero-content'),
                $heroContent3 = $('#hero-section-3 .hero-content'),
                $heroContent4 = $('#hero-section-4 .hero-content');
        
          // hide our element on page load
          $heroContent2.css('opacity', 0);
          $heroContent3.css('opacity', 0);
          $heroContent4.css('opacity', 0);

          $heroContent2.waypoint(function() {
              $heroContent2.addClass('fadeInUp');
          }, { offset: '50%' });
          $heroContent3.waypoint(function() {
              $heroContent3.addClass('fadeInUp');
          }, { offset: '50%' });
        $heroContent4.waypoint(function() {
              $heroContent4.addClass('fadeInUp'); 
          }, { offset: '50%' });

    });
  
})( jQuery );