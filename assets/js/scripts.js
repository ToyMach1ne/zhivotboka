// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.



$(function() {
  if ($('body').hasClass('error-body')) {

    var count = 9;
    var redirect = window.home;

    var $timer = $('.time span');

    window.setTimeout(function() {
      $timer.html(8);
    }, 1000);
    window.setTimeout(function() {
      $timer.html(7);
    }, 2000);
    window.setTimeout(function() {
      $timer.html(6);
    }, 3000);
    window.setTimeout(function() {
      $timer.html(5);
    }, 4000);
    window.setTimeout(function() {
      $timer.html(4);
    }, 5000);
    window.setTimeout(function() {
      $timer.html(3);
    }, 6000);
    window.setTimeout(function() {
      $timer.html(2);
    }, 7000);
    window.setTimeout(function() {
      $timer.html(1);
    }, 8000);
    window.setTimeout(function() {
      window.location.href = redirect;
    }, 9000);

  }
});
$('.super-button').on('click', function(event) {
    $('.super-button').addClass('super-button-close');
  var $navMenu = $('.header--search-form').addClass('opened-menu-top');

  if ($(this).hasClass('super-button-opened-top')) {
    $navMenu.fadeOut('fast');
    $('.super-button-top').removeClass('super-button-opened-top')
    $('.super-button-top').removeClass('clicked');
  }
  else {
    $navMenu.css('display', 'flex');
    $('.super-button-top').addClass('super-button-opened-top')
    $('.super-button-top').addClass('clicked')
  }
})

