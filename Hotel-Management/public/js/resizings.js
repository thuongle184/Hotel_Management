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