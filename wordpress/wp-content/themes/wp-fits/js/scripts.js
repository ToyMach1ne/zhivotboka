!function(){for(var e,o=function(){},n=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],s=n.length,i=window.console=window.console||{};s--;)e=n[s],i[e]||(i[e]=o)}(),"undefined"==typeof jQuery?console.warn("jQuery hasn't loaded"):console.log("jQuery has loaded"),$(function(){if($("body").hasClass("error-body")){var e=window.home,o=$(".time span");window.setTimeout(function(){o.html(8)},1e3),window.setTimeout(function(){o.html(7)},2e3),window.setTimeout(function(){o.html(6)},3e3),window.setTimeout(function(){o.html(5)},4e3),window.setTimeout(function(){o.html(4)},5e3),window.setTimeout(function(){o.html(3)},6e3),window.setTimeout(function(){o.html(2)},7e3),window.setTimeout(function(){o.html(1)},8e3),window.setTimeout(function(){window.location.href=e},9e3)}}),$(".super-button").on("click",function(e){var o=$(".header--search-form");$(this).hasClass("super-button-close")?($(this).removeClass("super-button-close"),o.removeClass("mobile-search-form")):($(this).addClass("super-button-close"),o.addClass("mobile-search-form"))}),$(".super-menu").on("click",function(e){var o=$(".headnav");$(this).hasClass("super-menu-opened")?(o.removeClass("headnav-opened"),$(this).removeClass("super-menu-opened"),$(".close-mobile-menu").removeClass("close-mobile-menu--show")):(o.addClass("headnav-opened"),$(this).addClass("super-menu-opened"),$(".close-mobile-menu").addClass("close-mobile-menu--show"))}),$(".close-mobile-menu").on("click",function(e){$(".headnav").removeClass("headnav-opened"),$(".super-menu").removeClass("super-menu-opened"),$(this).removeClass("close-mobile-menu--show")}),$(document).ready(function(){$(window).scroll(function(){$(this).scrollTop()>0?$(".arrow-up").fadeIn():$(".arrow-up").fadeOut()}),$(".arrow-up").click(function(){return $("body,html").animate({scrollTop:0},400),!1})});
//# sourceMappingURL=maps/scripts.js.map
