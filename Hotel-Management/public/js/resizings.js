$(window).resize(function(){
  resizeIconsAndLabels();
});


function resizeIconsAndLabels(){

  $('.my-entity-icon').css('width', 'auto');
  $('.my-entity-label').css('width', 'auto');

  var widthIcon, widthLabel = 0;

  $('.my-entity-icon').each(function(){
    if (parseFloat($(this).css('width')) > widthIcon) {
      widthIcon = parseFloat($(this).css('width'));
    }
  });

  $('.my-entity-label').each(function(){
    if (parseFloat($(this).css('width')) > widthLabel) {
      widthLabel = parseFloat($(this).css('width'));
    }
  });

  $('.my-entity-icon').css('width', widthIcon);
  $('.my-entity-label').css('width', widthLabel);
}


$(function(){
  resizeIconsAndLabels();
});