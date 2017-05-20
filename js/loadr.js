jQuery(document).ready(function($){
  if(window.location.pathname == "/BPKRB/wordpress/"){
  var support = { animations: Modernizr.cssanimations},
    container =  $('.bp-container'),
    header = $('header.bp-header'),
    animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
    animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];


    function init(){
      var onEndInitialAnimation = function() {
  			if( support.animations ) {
  				this.removeEventListener( animEndEventName, onEndInitialAnimation );
  			}

  			startLoading();
  		};

      window.addEventListener( 'scroll', noscroll );
      header.addClass('loading');
      if( support.animations ) {
        for (var i = 0 ; i < container.length; i++) {
          container[i].addEventListener( animEndEventName, onEndInitialAnimation );
        };
  			//$('.bp-container').addEventListener( animEndEventName, onEndInitialAnimation );
  		}
  		else {
  			onEndInitialAnimation();
  		}
    };

    function startLoading() {
      var readyStateCheckInterval = setInterval(function() {

        if (document.readyState === "complete") {
          clearInterval(readyStateCheckInterval);
          header.removeClass('loading');
          container.addClass('loaded');
          var onEndHeaderAnimation = function(ev) {

            if( support.animations ) {

              if( $(ev.target).attr("class") !== header.attr("class") )return;
              this.removeEventListener( animEndEventName, onEndHeaderAnimation );
            }

            $(document.body).addClass('layout-switch')

            $('#content').addClass('loaded');
            $('.site-footer').addClass('loaded');

            window.removeEventListener( 'scroll', noscroll );
          };

          if( support.animations ) {
            for (var i = 0 ; i < header.length; i++) {
              header[i].addEventListener( animEndEventName, onEndHeaderAnimation );
            }
          }
          else {
            onEndHeaderAnimation();
          }
        }
      }, 240);
    }
    init();
  }else{
    $('.site-footer').addClass('loaded');
  }
});

function noscroll() {
  window.scrollTo( 0, 0 );
}
