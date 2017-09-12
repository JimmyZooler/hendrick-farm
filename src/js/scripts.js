/*************************************
*
*  A file for my custom scripts
*
*************************************/

(function($) {
    var $navbar = $('#wrapper-navbar'),
        $document = $(document),
        $window = $(window),
        $body = $("body"),
        $overlay = $('.overlay--for-menu');
    
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
            $('.navbar-brand').toggleClass('logo-slide-up');
            $navbar.toggleClass('menu-open');
            $body.toggleClass('noscroll');
            $overlay.toggleClass('hide');
            $overlay.toggleClass('zero-opacity');
        }
        var closeMenu = function() {
            $('.navbar-brand').removeClass('logo-slide-up');
            $navbar.removeClass('menu-open');
            $body.removeClass('noscroll');
            $overlay.addClass('zero-opacity');
            $overlay.delay(500).addClass('hide');
        }
        $(".navbar-toggler").on('click', function() {
            menuOpen();
        } );
        $overlay.on('click', function(){
            closeMenu();
        });
        $window.resize(function() {
            if ($navbar.hasClass('menu-open') && $window.width() > 1199) {
                closeMenu();
            }
        });
    });
    
    // Script for adding border to dropdown menu item 
    
    $document.ready(function() {
        if ($window.width() < 1200 ) {
            $('.active .nav-link').first().addClass('active-border');
        }
      
    });
    
    //********************************************/
    //   Maginific popup initialization
    //********************************************/
    
    $('#footer-subscribe-button').magnificPopup({
      type:'inline',
      midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
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
        
        $('#who-section-2').waypoint({
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
        
        if ($window.width() >= 760 ) {
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
                $heroContent13 = $('#list-section-4 .hero-content'),
                $heroContent14 = $('#who-section-2 .hero-content');
        
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
            $heroContent14.css('opacity', 0);
        

          $heroContent2.waypoint(function() {
              $heroContent2.addClass('fadeInUp');
          }, { offset: '80%' });
          $heroContent3.waypoint(function() {
              $heroContent3.addClass('fadeInUp');
          }, { offset: '80%' });
            $heroContent4.waypoint(function() {
                  $heroContent4.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent6.waypoint(function() {
                  $heroContent6.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent7.waypoint(function() {
                  $heroContent7.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent8.waypoint(function() {
                  $heroContent8.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent9.waypoint(function() {
                  $heroContent9.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent10.waypoint(function() {
                  $heroContent10.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent11.waypoint(function() {
                  $heroContent11.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent12.waypoint(function() {
                  $heroContent12.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent13.waypoint(function() {
                  $heroContent13.addClass('fadeInUp'); 
              }, { offset: '80%' });
            $heroContent14.waypoint(function() {
                  $heroContent14.addClass('fadeInUp'); 
              }, { offset: '80%' });
            
        };

            // gallery image scripts
        
            $galleryImage0 = $('#gallery-image-0'),
            $galleryImage1 = $('#gallery-image-1'),
            $galleryImage2 = $('#gallery-image-2'),
            $galleryImage3 = $('#gallery-image-3'),
            $galleryImage4 = $('#gallery-image-4'),
            $galleryImage5 = $('#gallery-image-5'),
            $galleryImage6 = $('#gallery-image-6'),
            $galleryImage7 = $('#gallery-image-7'),
            $galleryImage8 = $('#gallery-image-8'),
            $galleryImage9 = $('#gallery-image-9'),
            $galleryImage10 = $('#gallery-image-10'),
            $galleryImage11 = $('#gallery-image-11'),
            $galleryImage12 = $('#gallery-image-12'),
            $galleryImage13 = $('#gallery-image-13'),
            $galleryImage14 = $('#gallery-image-14'),
            $galleryImage15 = $('#gallery-image-15'),
            $galleryImage16 = $('#gallery-image-16'),
            $galleryImage17 = $('#gallery-image-17'),
            $galleryImage18 = $('#gallery-image-18'),
            $galleryImage19 = $('#gallery-image-19'),
            $galleryImage20 = $('#gallery-image-20'),
            $galleryImage21 = $('#gallery-image-21'),
            $galleryImage22 = $('#gallery-image-22'),
            $galleryImage23 = $('#gallery-image-23'),
            $galleryImage24 = $('#gallery-image-24'),
            $galleryImage25 = $('#gallery-image-25'),
            $galleryImage26 = $('#gallery-image-26'),
            $galleryImage27 = $('#gallery-image-27'),
            $galleryImage28 = $('#gallery-image-28'),
            $galleryImage29 = $('#gallery-image-29'),
            $galleryImage30 = $('#gallery-image-30'),
            $galleryImage31 = $('#gallery-image-31'),
            $galleryImage32 = $('#gallery-image-32'),
            $galleryImage33 = $('#gallery-image-33'),
            $galleryImage34 = $('#gallery-image-34'),
            $galleryImage35 = $('#gallery-image-35'),
            $galleryImage36 = $('#gallery-image-36'),
            $galleryImage37 = $('#gallery-image-37'),
            $galleryImage38 = $('#gallery-image-38');
        
        
            $galleryImage3.css('opacity', 0);
            $galleryImage4.css('opacity', 0);
            $galleryImage5.css('opacity', 0);
            $galleryImage6.css('opacity', 0);
            $galleryImage7.css('opacity', 0);
            $galleryImage8.css('opacity', 0);
            $galleryImage9.css('opacity', 0);
            $galleryImage10.css('opacity', 0);
            $galleryImage11.css('opacity', 0);
            $galleryImage12.css('opacity', 0);
            $galleryImage13.css('opacity', 0);
            $galleryImage14.css('opacity', 0);
            $galleryImage15.css('opacity', 0);
            $galleryImage16.css('opacity', 0);
            $galleryImage17.css('opacity', 0);
            $galleryImage18.css('opacity', 0);
            $galleryImage19.css('opacity', 0);
            $galleryImage20.css('opacity', 0);
            $galleryImage21.css('opacity', 0);
            $galleryImage22.css('opacity', 0);
            $galleryImage23.css('opacity', 0);
            $galleryImage24.css('opacity', 0);
            $galleryImage25.css('opacity', 0);
            $galleryImage26.css('opacity', 0);
            $galleryImage27.css('opacity', 0);
            $galleryImage28.css('opacity', 0);
            $galleryImage29.css('opacity', 0);
            $galleryImage30.css('opacity', 0);
            $galleryImage31.css('opacity', 0);
            $galleryImage32.css('opacity', 0);
            $galleryImage33.css('opacity', 0);
            $galleryImage34.css('opacity', 0);
            $galleryImage35.css('opacity', 0);
            $galleryImage36.css('opacity', 0);
            $galleryImage37.css('opacity', 0);
            $galleryImage38.css('opacity', 0);
        
            $galleryImage0.addClass('zoomIn');
            $galleryImage1.addClass('zoomIn');
            $galleryImage2.addClass('zoomIn');

            $galleryImage3.waypoint(function() {
                  $galleryImage3.addClass('zoomIn');
                  $galleryImage3.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage4.waypoint(function() {
                  $galleryImage4.addClass('zoomIn');
                  $galleryImage4.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage5.waypoint(function() {
                  $galleryImage5.addClass('zoomIn');
                  $galleryImage5.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage6.waypoint(function() {
                  $galleryImage6.addClass('zoomIn');
                  $galleryImage6.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage7.waypoint(function() {
                  $galleryImage7.addClass('zoomIn');
                  $galleryImage7.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage8.waypoint(function() {
                  $galleryImage8.addClass('zoomIn');
                  $galleryImage8.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage9.waypoint(function() {
                  $galleryImage9.addClass('zoomIn');
                  $galleryImage9.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage10.waypoint(function() {
                  $galleryImage10.addClass('zoomIn');
                  $galleryImage10.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage11.waypoint(function() {
                  $galleryImage11.addClass('zoomIn');
                  $galleryImage11.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage12.waypoint(function() {
                  $galleryImage12.addClass('zoomIn');
                  $galleryImage12.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage13.waypoint(function() {
                  $galleryImage13.addClass('zoomIn');
                  $galleryImage13.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage14.waypoint(function() {
                  $galleryImage14.addClass('zoomIn');
                  $galleryImage14.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage15.waypoint(function() {
                  $galleryImage15.addClass('zoomIn');
                  $galleryImage15.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage16.waypoint(function() {
                  $galleryImage16.addClass('zoomIn');
                  $galleryImage16.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage17.waypoint(function() {
                  $galleryImage17.addClass('zoomIn');
                  $galleryImage17.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage18.waypoint(function() {
                  $galleryImage18.addClass('zoomIn');
                  $galleryImage18.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage19.waypoint(function() {
                  $galleryImage19.addClass('zoomIn');
                  $galleryImage19.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage20.waypoint(function() {
                  $galleryImage20.addClass('zoomIn');
                  $galleryImage20.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage21.waypoint(function() {
                  $galleryImage21.addClass('zoomIn');
                  $galleryImage21.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage22.waypoint(function() {
                  $galleryImage22.addClass('zoomIn');
                  $galleryImage22.css('opacity', 1);
              }, { offset: '90%' });
            $galleryImage23.waypoint(function() {
                  $galleryImage23.addClass('zoomIn');
                  $galleryImage23.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage24.waypoint(function() {
                  $galleryImage24.addClass('zoomIn');
                  $galleryImage24.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage25.waypoint(function() {
                  $galleryImage25.addClass('zoomIn');
                  $galleryImage25.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage26.waypoint(function() {
                  $galleryImage26.addClass('zoomIn');
                  $galleryImage26.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage27.waypoint(function() {
                  $galleryImage27.addClass('zoomIn');
                  $galleryImage27.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage28.waypoint(function() {
                  $galleryImage28.addClass('zoomIn');
                  $galleryImage28.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage29.waypoint(function() {
                  $galleryImage29.addClass('zoomIn');
                  $galleryImage29.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage30.waypoint(function() {
                  $galleryImage30.addClass('zoomIn');
                  $galleryImage30.css('opacity', 1);
              }, { offset: '95%' });
            $galleryImage31.waypoint(function() {
                  $galleryImage31.addClass('zoomIn');
                  $galleryImage31.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage32.waypoint(function() {
                  $galleryImage32.addClass('zoomIn');
                  $galleryImage32.css('opacity', 1);
              }, { offset: '85%' }); 
            $galleryImage33.waypoint(function() {
                  $galleryImage33.addClass('zoomIn');
                  $galleryImage33.css('opacity', 1);
              }, { offset: '95%' }); 
            $galleryImage34.waypoint(function() {
                  $galleryImage34.addClass('zoomIn');
                  $galleryImage34.css('opacity', 1);
              }, { offset: '90%' }); 
            $galleryImage35.waypoint(function() {
                  $galleryImage35.addClass('zoomIn');
                  $galleryImage35.css('opacity', 1);
              }, { offset: '85%' });
            $galleryImage36.waypoint(function() {
                  $galleryImage36.addClass('zoomIn');
                  $galleryImage36.css('opacity', 1);
              }, { offset: '95%' });
            $galleryImage37.waypoint(function() {
                  $galleryImage37.addClass('zoomIn');
                  $galleryImage37.css('opacity', 1);
              }, { offset: '90%' });
            $galleryImage38.waypoint(function() {
                  $galleryImage38.addClass('zoomIn');
                  $galleryImage38.css('opacity', 1);
              }, { offset: '85%' });
        
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
        $('.available-link').mouseover( function() {
            $(this).closest('.link-block').addClass('hover');
        });
        $('.available-link').mouseleave( function() {
            $(this).closest('.link-block').removeClass('hover');
        });
        $('.life-link').mouseover( function() {
            $(this).closest('.who-section').addClass('hover');
        });
        $('.life-link').mouseleave( function() {
            $(this).closest('.who-section').removeClass('hover');
        });

    });
    
    $document.ready(function() {
        $('.gallery-image').magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image',
          gallery:{enabled:true}
          // other options
        });
    
    });
    
//    $document.ready(function() {
//        $('.who-we-are .dropdown-toggle').addClass('inactiveLink');
//    });
  
})( jQuery );