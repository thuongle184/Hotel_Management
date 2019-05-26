function resizeIconsAndLabels(elementLeft, elementRight){

  $elementLeft = $(document.getElementsByClassName(elementLeft));
  $elementRight = $(document.getElementsByClassName(elementRight));

  $elementLeft.css('width', 'auto');
  $elementRight.css('width', 'auto');

  var widthElementLeft, widthElementRight = 0;

  $elementLeft.each(function(){
    if (parseFloat($(this).css('width')) > widthElementLeft) {
      widthElementLeft = parseFloat($(this).css('width'));
    }
  });

  $elementRight.each(function(){
    if (parseFloat($(this).css('width')) > widthElementRight) {
      widthElementRight = parseFloat($(this).css('width'));
    }
  });

  $elementLeft.css('width', widthElementLeft);
  $elementRight.css('width', widthElementRight);
}


function resizeLayout(){

  console.log('toto');

  $('body > header').css('height', 'auto');
  $('aside').css('height', 'auto');
  $('main').css('height', 'auto');

  var headerHeight = parseFloat($('body > header').css('height'));

  $('aside, main')
    .css('top', headerHeight)
    .css('height', '100vh')
    .css('height', "-=" + headerHeight + "px");

}