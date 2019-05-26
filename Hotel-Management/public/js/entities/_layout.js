$(window).resize(function(){
  resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');
});


$(function(){
  resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');

  $('#my-navbar-content').on('shown.bs.collapse', function(){
    resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');
  });
});