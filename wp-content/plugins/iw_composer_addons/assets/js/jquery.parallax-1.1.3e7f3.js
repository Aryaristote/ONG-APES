(function($){var $window=$(window);var windowHeight=$window.height();$.fn.parallax=function(xpos,speedFactor,outerHeight){var $this=$(this);var getHeight;var firstTop;var paddingTop=0;$this.each(function(){firstTop=$this.offset().top;});if(outerHeight){getHeight=function(jqo){return jqo.outerHeight(true);};}else{getHeight=function(jqo){return jqo.height();};}
if(arguments.length<1||xpos===null)xpos="50%";if(arguments.length<2||speedFactor===null)speedFactor=0.1;if(arguments.length<3||outerHeight===null)outerHeight=true;function update(){var pos=$window.scrollTop();$this.each(function(){var $element=$(this);var top=$element.offset().top;var height=getHeight($element);if(top+height<pos||top>pos+windowHeight){return;}
$this.css('backgroundPosition',xpos+" "+Math.round((firstTop-pos)*speedFactor)+"px");});}
$window.bind('scroll',update).resize(update);update();$window.resize(function(){windowHeight=$window.height();update();});};$.fn.parallaxVideo=function(xpos,speedFactor,outerHeight){var $this=$(this);var getHeight;var firstTop;firstTop=$this.offset().top;if(outerHeight){getHeight=function(jqo){return jqo.outerHeight(true);};}else{getHeight=function(jqo){return jqo.height();};}
if(arguments.length<1||xpos===null)
xpos="50%";if(arguments.length<2||speedFactor===null)
speedFactor=0.1;if(arguments.length<3||outerHeight===null)
outerHeight=true;function update(){var pos=$window.scrollTop();firstTop=$this.offset().top;if($this.is(":hidden"))
return;var top=$this.offset().top;var height=getHeight($this);if(top+height<pos||top>pos+windowHeight){return;}
$this.css('top',Math.round(-1*(firstTop-pos)*speedFactor)+"px");}
$window.bind('scroll',update).resize(update);$window.resize(function(){windowHeight=$window.height();update();});};})(jQuery);