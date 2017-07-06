/*************************************
*
*  A file for my custom scripts
*
*************************************/

(function($) {
    var $navbar = $('#wrapper-navbar'),
        $document = $(document),
        $window = $(window);
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
        $(".navbar-toggler").on('click', function () {
            $navbar.toggleClass('menu-open');
        });
    });
    
    $document.ready( function() {
        var waypoint = new Waypoint({
          element: $('#hero-section-4'),
          handler: function(direction) {
              if ( direction == 'down' ) {
                  $navbar.addClass("zero-opacity");
                  console.log('direction is down');
              } else {
                  $navbar.removeClass("zero-opacity");
                  console.log('direction is up');
              }
          },
          offset: 'bottom-in-view'
        })
    });
  
})( jQuery );