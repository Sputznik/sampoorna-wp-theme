jQuery(document).ready(function(){

  // FADE IN SLIDER
  jQuery('[data-behaviour~=smpn-fadein-slider]').each( function(){
    var $this = jQuery( this ), slides = 1;
    $this.slick({
      rows          : 0,
      draggable     : false,
      slidesToShow  : slides,
      slidesToScroll: slides,
      dots          : true,
      arrows        : false,
      cssEase       : 'linear',
      fade          : true,
      speed         : 500,
    });	// slick

    $this.addClass( 'loaded' );
  });

  // USER SLIDER
  jQuery('[data-behaviour~=smpn-user-slider]').each( function(){
    var $this = jQuery( this ), slides = 3;

    $this.slick({
      rows          : 2,
      slidesToShow  : slides,
      slidesToScroll: slides,
      speed         : 300,
      arrows        : false,
      dots          : true,
      responsive    : [
        {
          breakpoint: 769,
          settings  : {
            rows: 1,
            slidesToShow  : 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings  : {
            rows: 1,
            slidesToShow  : 1,
            slidesToScroll: 1
          }
        }
      ]
    });	// slick

    $this.addClass( 'loaded' );
  });

  // MOBILE ONLY SLICK SLIDER
  jQuery('[data-behaviour~=smpn-post-slider], [data-behaviour~=smpn-testimonials]').each( function(){
    var $this = jQuery( this ), slides = 3;

    // LOADS ON PAGE LOAD AND ALSO WHEN THE WINDOW IS RESIZED
    jQuery(window).on('load resize', function() {
      if( jQuery(window).width() <= 768 ){

        // INITIALIZE SLICK IF NOT ACTIVE
        if( !$this.hasClass('slick-initialized') ){

          $this.slick({
            rows          : 0,
            slidesToShow  : slides,
            slidesToScroll: slides,
            speed         : 300,
            arrows        : false,
            dots          : true,
            responsive    : [
              { // DISABLES SLICK ON SCREEN_SIZE > 768px
                breakpoint: 99999999999,
                settings: "unslick"
              },
              {
                breakpoint: 769,
                settings  : {
                  slidesToShow  : 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings  : {
                  slidesToShow  : 1,
                  slidesToScroll: 1
                }
              }
            ]
          });	// slick

        } //end if

      } // end if


    }); // end load resize

    $this.addClass( 'loaded' );

  });

});
