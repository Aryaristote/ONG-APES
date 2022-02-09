(function($){"use strict";function iw_infunding_donate(){$(window).on("load resize",function(){$(".iw-our-missions").click(function(){$('html, body').animate({scrollTop:$(".iw-scroll-to-top").offset().top},500);});});}
function tooltip(){$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});}
$(document).ready(function(){iw_infunding_donate();tooltip();});})(jQuery);