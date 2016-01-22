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