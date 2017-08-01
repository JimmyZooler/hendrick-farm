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
            if ($document.scrollTop() >= 66 ) {
                $body.addClass("stickied");
            } else if ($document.scrollTop() <= 1) {
                $body.removeClass("stickied");
            }
        } else {
            if ($document.scrollTop() >= 64) {
                $body.addClass("stickied");
            } else if ($document.scrollTop() <= 1) {
                $body.removeClass("stickied");
            }
        }
      
    });
    $document.ready( function() {
        var menuOpen = function () {
            $navbar.toggleClass('menu-open');
            $body.toggleClass('noscroll');
            $('.overlay--for-menu').toggleClass('hide');
            $('.overlay--for-menu').toggleClass('zero-opacity');
        }
        $(".navbar-toggler").on('click', function() {
            menuOpen();
        } );
    });
    
    // Script for adding border to dropdown menu item 
    
    $document.ready(function() {
        if ($window.width() < 992 ) {
            $('.active .nav-link').first().addClass('active-border');
        }
      
    });
    
    // Detecting iPad script
    
    $document.ready(function() {
        function isiPad(){
            return (navigator.platform.indexOf("iPad") != -1);
        }
        
        if ( Modernizr.touch ) {
            alert('Touch Screen');
        } else { 
          alert('No Touch Screen');
        }
    });
    
    $document.ready( function() {
        var $indicatorOne = $('#indicator-1'),
            $indicatorTwo = $('#indicator-2'),
            $indicatorThree = $('#indicator-3'),
            $indicatorFour = $('#indicator-4'),
            $indicatorFive = $('#indicator-5'),
            $heroPager = $('.hero--pager');
        
        $('#hero-section-4').waypoint({
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $navbar.addClass("zero-opacity");
              } else {
                  $navbar.removeClass("zero-opacity");
              }
          },
          offset: 'bottom-in-view'
        });
        
        $('#home-section-5').waypoint({
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $heroPager.addClass("zero-opacity");
              } else {
                  $heroPager.removeClass("zero-opacity");
              }
          },
          offset: 'bottom-in-view'
        });
        
        $('#hero-section-2').waypoint({
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
        
        $('#hero-section-3').waypoint({
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
        
        $('#hero-section-4').waypoint({
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
        
        //
        // Waypoints for Lifestyle Page
        //
        
        $('#life-section-2').waypoint({
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
        $('#life-section-3').waypoint({
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
        $('#life-section-4').waypoint({
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
        $('#life-section-5').waypoint({
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $indicatorFour.removeClass("active");
                  $indicatorFive.addClass("active");
              } else {
                  $indicatorFive.removeClass("active");
                  $indicatorFour.addClass("active");
              }
          },
            offset: 68
        });
        
        $('#list-section-2').waypoint({
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
        
        $('#list-section-3').waypoint({
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
        
        $('#list-section-4').waypoint({
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
        
        $('#wrapper-footer').waypoint({
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $heroPager.addClass("zero-opacity");
              } else {
                  $heroPager.removeClass("zero-opacity");
              }
          },
            offset: '70%'
        });
        
    });
    
    // scripts for hero-section animations 
    
    $(document).ready(function(){
            var $heroContent2 = $('#hero-section-2 .hero-content'),
                $heroContent3 = $('#hero-section-3 .hero-content'),
                $heroContent4 = $('#hero-section-4 .hero-content'),
                $heroContent5 = $('#life-section-1 .hero-content'),
                $heroContent6 = $('#life-section-2 .hero-content'),
                $heroContent7 = $('#life-section-3 .hero-content'),
                $heroContent8 = $('#life-section-4 .hero-content'),
                $heroContent9 = $('#life-section-5 .hero-content'),
                $heroContent10 = $('#list-section-1 .hero-content'),
                $heroContent11 = $('#list-section-2 .hero-content'),
                $heroContent12 = $('#list-section-3 .hero-content'),
                $heroContent13 = $('#list-section-4 .hero-content');
        
          // hide our element on page load
          $heroContent2.css('opacity', 0);
          $heroContent3.css('opacity', 0);
          $heroContent4.css('opacity', 0);
          $heroContent6.css('opacity', 0);
          $heroContent7.css('opacity', 0);
          $heroContent8.css('opacity', 0);
          $heroContent9.css('opacity', 0);
          $heroContent10.css('opacity', 0);
        $heroContent11.css('opacity', 0);
        $heroContent12.css('opacity', 0);
        $heroContent13.css('opacity', 0);

          $heroContent2.waypoint(function() {
              $heroContent2.addClass('fadeInUp');
          }, { offset: '50%' });
          $heroContent3.waypoint(function() {
              $heroContent3.addClass('fadeInUp');
          }, { offset: '50%' });
        $heroContent4.waypoint(function() {
              $heroContent4.addClass('fadeInUp'); 
          }, { offset: '70%' });
        $heroContent6.waypoint(function() {
              $heroContent6.addClass('fadeInUp'); 
          }, { offset: '70%' });
        $heroContent7.waypoint(function() {
              $heroContent7.addClass('fadeInUp'); 
          }, { offset: '70%' });
        $heroContent8.waypoint(function() {
              $heroContent8.addClass('fadeInUp'); 
          }, { offset: '70%' });
        $heroContent9.waypoint(function() {
              $heroContent9.addClass('fadeInUp'); 
          }, { offset: '70%' });
        $heroContent10.waypoint(function() {
              $heroContent10.addClass('fadeInUp'); 
          }, { offset: '70%' });
        $heroContent11.waypoint(function() {
              $heroContent11.addClass('fadeInUp'); 
          }, { offset: '70%' });
        $heroContent12.waypoint(function() {
              $heroContent12.addClass('fadeInUp'); 
          }, { offset: '70%' });
        $heroContent13.waypoint(function() {
              $heroContent13.addClass('fadeInUp'); 
          }, { offset: '70%' });

    });
    
    $(document).ready(function(){
        
        //Linking the dots to each section
        
        $(".pager--indicator-link").click( function() {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top - 68
            }, 1200);
        });
         
        $('.dropdown').addClass('disabled');
        $('.dropdown-toggle').removeAttr('data-toggle');
        
        // Scripts for hover background zoom
        $('.life-link').mouseover( function() {
            $(this).closest('.life-section').addClass('hover');
        });
        $('.life-link').mouseleave( function() {
            $(this).closest('.life-section').removeClass('hover');
        });
        $('.life-link').mouseover( function() {
            $(this).closest('.list-section').addClass('hover');
        });
        $('.life-link').mouseleave( function() {
            $(this).closest('.list-section').removeClass('hover');
        });

    });
    
    
  
})( jQuery );