/*---------------------------------------------------------
 * jQuery noConflict
---------------------------------------------------------*/
var $ = jQuery.noConflict();
(function( $ ) {
  'use strict';

  var output = $('.anyipsum-output'),
      target = $('.target'),
      table  = $('.anyipsum-table'),
      clone  = $('.anyipsum-type').clone();
  $(output).appendTo(target);
  if($('.anyipsum-type').length === 1) {
    $(clone).insertAfter('.anyipsum-type');
  }
  $('.anyipsum-type').last().addClass('last').find('label:first-child').css({'display':'none'});
  $('.anyipsum-type').first().addClass('first').find('label:last-child').css({'display':'none'});

})( jQuery );
/*---------------------------------------------------------
 * Skip navigation
---------------------------------------------------------*/
(function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
        is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
        is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

    if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
        window.addEventListener( 'hashchange', function() {
            var id = location.hash.substring( 1 ),
                element;

            if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
                return;
            }

            element = document.getElementById( id );

            if ( element ) {
                if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
                    element.tabIndex = -1;
                }

                element.focus();
            }
        }, false );
    }
})();