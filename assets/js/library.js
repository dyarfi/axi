
$(window).resize(function() {
	screenResponse();	
	function screenResponse () {
		var screen = $(window).width();		
		/** screen < 785px **/
		if(screen < 768) { } else { }
		/** screen reach 800px **/
		if(screen <= 800) {
		} else { }		
	}	
});
/*
$('.read_news').on('click',function(e){
	e.preventDefault();
	//alert('asdf');
	$(this).fancybox({
		type : 'iframe',
		transitionIn: 'fade',
		transitionOut: 'fade',
		scrolling: 'no',
		afterShow: function() {
		   $('.scroll-pane').jScrollPane();//SCROLL CUSTOM
		}
	 });
	 return false;
});
*/
$('.read_news').fancybox({
		type : 'iframe',
		transitionIn: 'fade',
		transitionOut: 'fade',
		scrolling: 'no',
		afterShow: function() {
		   //$('.scroll-pane').jScrollPane();//SCROLL CUSTOM
		}
	 });
	 
$(document).ready(function(){	
	$('.btn_1, .btn_2, .btn_3, .more_a').click(function(){ window.location = $(this).attr('href'); location.target = "_blank"; });
	
	$('.read_vcncy').fancybox({
		transitionIn: 'fade',
		transitionOut: 'fade',
		scrolling: 'no',
		afterShow: function() {
		   $('.scroll-pane').jScrollPane();//SCROLL CUSTOM
		}
	 });
	
	if ($('.news_content .owl-wrapper').children().size() <= 3) {
		$('.news_content').find('.owl-buttons').hide();
	} else {
		$('.news_content').find('.owl-buttons').show();
	}

	$('.nav li a').click(function() {
		//alert('foobar');
		$('.btn.btn-navbar').click();
	});
	$("img.lazy").lazyload({
		effect : "fadeIn"
	});
	/* http://www.minimit.com/demos/fullscreen-backgrounds-with-centered-content */
	/* fix vertical when not overflow
	call fullscreenFix() if .fullscreen content changes */
	function fullscreenFix(){
		var h = $('body').height();
		// set .fullscreen height
		
		$(".content").each(function(i){
			if($(this).innerHeight() <= h){
				$(this).closest(".fullscreen").addClass("not-overflow");
			}
		});
	}
	$(window).resize(fullscreenFix);
	fullscreenFix();

	/* resize background images */
	function backgroundResize(){
		var windowH = $(window).height();
		$(".background").each(function(i){
			var path = $(this);
			// variables
			var contW = path.width();
			var contH = path.height();
			var imgW = path.attr("data-img-width");
			var imgH = path.attr("data-img-height");
			var ratio = imgW / imgH;
			// overflowing difference
			var diff = parseFloat(path.attr("data-diff"));
			diff = diff ? diff : 0;
			// remaining height to have fullscreen image only on parallax
			var remainingH = 0;
			if(path.hasClass("parallax")){
				var maxH = contH > windowH ? contH : windowH;
				remainingH = windowH - contH;
			}
			// set img values depending on cont
			imgH = contH + remainingH + diff;
			imgW = imgH * ratio;
			// fix when too large
			if(contW > imgW){
				imgW = contW;
				imgH = imgW / ratio;
			}
			//
			path.data("resized-imgW", imgW);
			path.data("resized-imgH", imgH);
			path.css("background-size", imgW + "px " + imgH + "px");
		});
	}
	$(window).resize(backgroundResize);
	$(window).focus(backgroundResize);
	backgroundResize();
			  
});

// Getting with javascript url from
$.extend({
  getUrlVars: function(){
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  },
  getUrlVar: function(name){
    return $.getUrlVars()[name];
  }
});