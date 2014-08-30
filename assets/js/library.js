
$(window).resize(function() {
	screenResponse();	
	function screenResponse () {
		var screen = $(window).width();		
		/** screen < 785px **/
		if(screen < 768) {
			//$('.dropdown-menu.mega-menu').css('left','-' + (screen / 5 + 10) + 'px').css('width','310%').find('ul').css('width','140px');
			//$('.navbar-collapse').removeClass('in');
		} else {
			//$('.dropdown-menu.mega-menu').css('left','0px').css('width','460px').find('ul').css('width','140px');			
			//$('.navbar-collapse').removeClass('in');
		}
		/** screen reach 800px **/
		if(screen <= 800) {
		} else {
			
		}		
	}	
});

$(document).ready(function(){	
	$('.btn_1, .btn_2, .btn_3, .more_a').click(function(){ window.location = $(this).attr('href'); location.target = "_blank"; });
	$('.read_news').fancybox();
	$('.read_vcncy').fancybox();	
	$('.nav li a').click(function() {
		//alert('foobar');
		$('.btn.btn-navbar').click();
	});
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