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

  var $catMenu = $('.header--search-form');

  if ($(this).hasClass('super-button-close')) {
    $(this).removeClass('super-button-close')
    $catMenu.removeClass('mobile-search-form')
  } else {
    $(this).addClass('super-button-close');
    $catMenu.addClass('mobile-search-form');
  }
})

$('.super-menu').on('click', function(event) {
  var $navMenu = $('.headnav');

  if ($(this).hasClass('super-menu-opened')) {
    $navMenu.removeClass('headnav-opened');
    $(this).removeClass('super-menu-opened')
    $('.close-mobile-menu').removeClass('close-mobile-menu--show')
  } else {
    $navMenu.addClass('headnav-opened');
    $(this).addClass('super-menu-opened')
    $('.close-mobile-menu').addClass('close-mobile-menu--show')
  }
})
$('.close-mobile-menu').on('click', function(event) {
  $('.headnav').removeClass('headnav-opened');
  $('.super-menu').removeClass('super-menu-opened')
  $(this).removeClass('close-mobile-menu--show')

})
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 0) {
      $('.arrow-up').fadeIn();
    } else {
      $('.arrow-up').fadeOut();
    }
  });
  $('.arrow-up').click(function() {
    $('body,html').animate({
      scrollTop: 0
    }, 400);
    return false;
  });

  if ($('.category-list-wrapper .categories li').hasClass('cat-item-none')) {
    $('.category-list-wrapper').hide('fast');
  }

  $('.tag-show').on('click', function() {
    $('.tag-cloud a').css('display', 'inline-block');
    $(this).hide('fast');
  })

  $('.headnav a').each(function(index, el) {
    var currentUrl = window.location.href;
    var currentUrl2 = document.URL;

    console.log(currentUrl)
    console.log(currentUrl2)

    var thisHref = $(this).attr('href');

    if ((thisHref == currentUrl) || (thisHref == currentUrl2)) {
      var content = $(this).html();
      $(this).parent().html('<span>' + content + '</span>');
    }
  });

  $('#menu-sidebar a').each(function(index, el) {
    var currentUrl = window.location.href;
    var currentUrl2 = document.URL;

    console.log(currentUrl)
    console.log(currentUrl2)

    var thisHref = $(this).attr('href');

    if ((thisHref == currentUrl) || (thisHref == currentUrl2)) {
      var content = $(this).html();
      $(this).parent().html('<span>' + content + '</span>');
    }
  });
});

(function() {
  var $elements = $('.category-block');
  var maxheight = 0;
  $elements.each(function() {
    if ($(this).height() > maxheight) {
      maxheight = $(this).height();
    }
  });
  $elements.height(maxheight);
}());

// $(document).scroll(function() {
//   var y = $(this).scrollTop();
//   if (y > 800) {
//     $('.arrow-up').show();
//   } else {
//     $('.arrow-up').hide();
//   }
// });


myID = document.getElementById("arrow-up");

var myScrollFunc = function() {
  var y = window.scrollY;
  if (y >= 800) {
    myID.className = "arrow-up arrow-up-show"
  } else {
    myID.className = "arrow-up arrow-up-hide"
  }
};

window.addEventListener("scroll", myScrollFunc);
