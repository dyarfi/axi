var cur_order = 0, order_buffer = new Array(), top_menu = new Array(), top_menu_w = 0, cur_menu_pos = 0, is_animated = false;

$(window).resize(function() {
	screenResponse();	
	function screenResponse () {
		var screen = $(window).width();	
			
		/** screen reach 800px **/
		if(screen <= 620) {
		} else {
			
		}
		/** screen < 785px **/
		if(screen < 785) {
			$('.dropdown-menu.mega-menu').css('left','-' + (screen / 5 + 10) + 'px').css('width','320%').find('ul').css('width','110px');
			$('.navbar-collapse').removeClass('in');
		} else {
			$('.dropdown-menu.mega-menu').css('left','0px').css('width','460px').find('ul').css('width','110px');			
			$('.navbar-collapse').removeClass('in');
		}
		/** screen reach 800px **/
		if(screen <= 800) {
		} else {
			
		}
	}	
});

$(window).scroll(function() {		
	menuFixTop();
	function menuFixTop () {
		var screen = $(window).scrollTop();
		if(screen > $('.header').height()) {
			$('.navigation').addClass('navbar-fixed-top');
		} else {
			$('.navigation').removeClass('navbar-fixed-top');
		}
	}
	/* this is supposed to be detecting dropdown menu to uncollapse 
	if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
	*/
});

$(document).ready(function() {
	
	// ----- LOGIN FORM HANDLER ----- //
	$('input#login_email').focus(function(){
		var email = $(this); var password = $('input#login_password'); 
		var label_email	   = email.parents().find('label[for="login_email"]').text();
		var label_password = password.parents().find('label[for="login_password"]').text();		
		if (email.val() === label_email) { email.val('').removeClass('disactive'); } 
		if (password.val() === label_password){ password.val('').removeClass('disactive'); } 
	});
	$('input#login_email').blur(function(){
		var email = $(this); var password = $('input#login_password');
		var label_email	   = email.parent().find('.label-holder').text();
		var label_password = password.parent().find('.label-holder').text();		
		if (email.val() === '') { email.val(label_email); email.addClass('disactive');} 
		if (password.val() ===''){ password.val(label_password); password.addClass('disactive'); }     
	});
	$('input#login_password').focus(function(){
		var email = $('input#login_email'); var password = $(this);		
		var label_email	   = email.parent().find('.label-holder').text();
		var label_password = password.parent().find('.label-holder').text();		
		if (email.val() === label_email) { email.val('').removeClass('disactive'); } 
		if (password.val() === label_password){ password.val('').removeClass('disactive'); } 
	});
	$('input#login_password').blur(function(){
		var password = $(this); var email = $('input#login_email');
		var label_email	   = email.parent().find('.label-holder').text();
		var label_password = password.parent().find('.label-holder').text();		
		if (email.val() === '') { email.val(label_email); email.addClass('disactive');} 
		if (password.val() ===''){ password.val(label_password); password.addClass('disactive'); }  
	});
		
		
	if ($.cookie('toggle') === '') {
		$.cookie('toggle','close');
	}
	
	var menu_toggle = $.cookie('toggle');
	
	/*
	if (menu_toggle === 'close') {
		menu_open($('.main_menu'));
	} else {
		menu_close($('.main_menu'));
	}
	console.log(menu_toggle);
	*/
   
	function menu_close(obj) {
		menu_toggle = 'open';		
		obj.text('MENU').find('div').hide('fast');
		$('#admin_content').animate({width:'100%'},200);
		$('#side_menu').animate({width:'2.8%'},200).find('#accordion').hide();	
	}
	
	function menu_open(obj) {
		menu_toggle = 'close';
		obj.text('MAIN MENU').find('div').show('fast');		
		$('#admin_content').animate({width:'82%'},200);
		$('#side_menu').animate({width:'18%'},200).find('#accordion').show();
	}
		
	$('.main_menu').toggle(function() {	
		//menu_close($(this));
	},function(){
		//menu_open($(this));
	});
	
	CKEDITOR.on('instanceReady', function(){
		$.each( CKEDITOR.instances, function(instance) {
		 CKEDITOR.instances[instance].on("change", function(e) {
			 for ( instance in CKEDITOR.instances )
			 CKEDITOR.instances[instance].updateElement();
		 });
		});
	});

	$('#forgot_password').submit(function(e){
		e.preventDefault();
		var url		= $(this).attr('action');
		var email	= $(this).find('input[name="email"]').val();
		var loader  = $(this).find('#result');
		var button  = $(this).find('button[name="submit"]');
		button.attr('disabled','disabled');
		loader.removeClass('hide');
		$.ajax({
			url:url,
			type:'POST',
			data: 'email='+email,
            datatype: "JSON",
			success:function(data) {
				var content = jQuery.parseJSON(data);
				button.removeAttr('disabled');
				if(content.result.errors.email !== '') {
					loader.html(content.result.errors.email);
				} else
				if(content.result.values !== '') {
					button.attr('disabled','disabled');
					loader.html('<h4><small>Your new password : </small><span class="text-warning">'+content.result.values+'<span></h4>');
				}
			}			
		});		
		return false;
	});
	
	$('.iframe-btn').colorbox({	
	'transition':'fade',
	'width'		: 900,
	'height'	: 600,	
	'initialWidth':900,
	'initialHeight':600,
	'iframe'	: 'true'
    });
	$('.iframe-btn-small').colorbox({	
	'transition':'fade',
	'width'		:500,
	'height'	:300,
	'innerWidth':500,
	'innerHeight':300,
	'initialWidth':500,
	'initialHeight':300,
	'iframe'	: 'true'
    });
	//$(".colorbox").colorbox({rel:"groupbox", transition:"fade",width:"65%", height:"75%"});		
	
	$('.colorbox').live('click',function(e){
		// prevent default behaviour
		e.preventDefault();		
		$.colorbox({href:$(this).attr('href'), rel:"groupbox", transition:"fade" ,width:"65%", height:"75%",'innerWidth':400,'innerHeight':300,'initialWidth':200,'initialHeight':200});		
		return false;
	});
	
/*
	$(".img-thumbnail").live(
        'hover',
        function (ev) {
            if (ev.type == 'mouseover') {
                $(this).find('.label-function').fadeIn();
            }

            if (ev.type == 'mouseout') {
                $(this).find('.label-function').fadeOut();
            }
        });
*/	
	/*
	$('.img-thumbnail').hover(function(){
		$(this).find('.label-function').fadeIn();
	},function(){
		$(this).find('.label-function').fadeOut();
	});
	*/
   $('td.td_show').hover(function(){
		$(this).find('.show_order').show();
   },function(){
		$(this).find('.show_order').hide();   
   });
   
	var tabContainers = $('div#library_tab > div');
	tabContainers.hide().filter(':first').show();
	
	$('div#library_tab ul.add_media li a').click(function () {
		tabContainers.hide();
		//alert(tabContainers.parent().find('input[type="hidden"]').attr('value'));
		//if (tabContainers.find('input') !== '') {
			//tabContainers.find('input').attr("disabled", true);	
		//}
		//if (tabContainers.parent().find('input[type="hidden"]').attr('value') !=='') {
			//tabContainers.parent().find('input[type="hidden"]')
					//.attr('value',tabContainers.filter(this.hash).find('input').attr('value'));
		//};
		
		tabContainers.find('input').attr("disabled", true).attr("value", '');	
		tabContainers.filter(this.hash).find('input').attr("disabled", false);
		
		tabContainers.filter(this.hash).show();
		//tabContainers.filter(this.hash).find('input').attr('disable','');
		$('div#library_tab ul.add_media li a').removeClass('active');
		$(this).addClass('active');
		return false;
	}).filter(':first').click();
	
	//$('div#library_tab > div > input.input_media').live('each',function(){
		//if ($(this).val() > 0) {
		//var inputs = $(this);
		//$(this).change(function() {
			//alert(inputs.val());
			//$('.hidden_input input').val(inputs.val());
		//});
		//}
	//});
	//
	//alert($('div#library_tab input'));
	
	//$('.add_media_library').click(function() {
		//alert('asdf');
		//return false;
	//});
	
	$(".img-thumbnail").live({
        mouseenter: function(e) { e.preventDefault(); $(this).find('.label-function').fadeIn(); },
        mouseleave: function(e) { e.preventDefault(); $(this).find('.label-function').fadeOut(); }
       }
    );
   
	$('#fileupload').fileupload({
		url: $(this).attr('data-url'),
		dataType: 'json',
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
		sequentialUploads: true,
        done: function (e, data) {
			e.preventDefault();
			$.each(data.result.files, function (index, file) {	
				//alert(file.error);
				$('.clear .topBotDiv10').html('<h2>Success</h2>').show();
				$('<div class="pull-left img-thumbnail"/>')				
				.html('<a class="colorbox" rel="groupbox" href="'+base_URL + file.url+'">'
					 +'<img src="'+base_URL + file.thumbnailUrl+'"//></a>'
					 +'<div class="label-function hidden">'
					 +'<a href="'+file.deleteUrl+'" title="Delete" class="label label-default delete_function" onclick="javascript:void(0);">DELETE</a>'
					//+'<a href="'+base_ADM+'news/filechange/'+file.file_id+'" title="Change" class="label label-default change_function ajax" onclick="javascript:void(0);">CHANGE</a>'
					 +'</div>')
				.appendTo('.img_holder_xhr');
            });			
			$('.clear .topBotDiv10').html('<h2>Success</h2>').hide();
			$('#progress').hide();			
        },
        progressall: function (e, data) {
			e.preventDefault();			
            var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress').show();
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            ).html(progress+'% Uploading, please be patient..');
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
	
	
	
	$('.listing_data tr').hover(
		function() {$(this).css('background','#a1dbff');},
		function() {$(this).css('background','');}
	);
		
	$('.listing_data tr').click( function() {	
		 //$(this).css('background','#a1dbff');
	});
	
	$(".listing_data tr").mouseup(function(){
      $(this).css('background','#d5ffd5');
    }).mousedown(function(){
      $(this).css('background','#a1dbff');
    });
	
	//************************************** Text Editor *******************************************//
	//************************************** Ajax Requests *****************************************//
		$('.general').submit(function() {
		//---- Language content detection with jQuery -- start --
		$('.lang_content').find('.required').each(function (){
			if ( $(this).parents().find('input[type="hidden"]').val() !== '') {
				if($(this).val() === '') {			
					var hid = $(this).parent().find('input[type="hidden"]').val();
					$.ajax({
						type: "GET",
						url: base_ADM + "language/language/" + hid
						}).done(function( msg ) { 
							var data = jQuery.parseJSON(msg);
							//alert(base_URL + base_ADM);
							if (typeof data.name !== 'undefined') {
								jAlert('Data input is incomplete for ' + data.name, 'Language');
							}
							if (typeof data.subject !== 'undefined') {
								jAlert('Data input is incomplete for ' + data.subject, 'Language');
							}
					});							
					return false;
				}
			}
		});
		//---- Language content detection with jQuery -- end --
		
		
    });
	$('input[type="radio"].default_listing_one_click').change(function(){
        var val  = $(this).attr('checked') ? 1 : 0;
        var link = $(this).attr('urlto');
		//alert(window.location);
        if (link){
                var pid = $(this).attr('pid');
                var hash = $(this).attr('hash');
                $.ajax({
                    type: 'GET',
                    url:base_ADM+link+'/',
                    data: 'ajax=true&field=default&pid='+pid+'&value='+val,
                    datatype: "JSON",
                    async: false,
                    success: function(msg){
                        if (msg) {
                            alert('Please wait while updating data');    
                        }                        
                    },
                    error: function (request,setting){
                    }
                });
		  window.location = window.location;
        }
    });
	$('input[type="radio"].default_testimonial_one_click').change(function(){
        var val  = $(this).attr('checked') ? 1 : 0;
        var link = $(this).attr('urlto');
		//alert(window.location);
        if (link){
                var pid = $(this).attr('pid');
                var hash = $(this).attr('hash');
                $.ajax({
                    type: 'GET',
                    url:base_ADM+link+'/',
                    data: 'ajax=true&field=default&pid='+pid+'&value='+val,
                    datatype: "JSON",
                    async: false,
                    success: function(msg){
                        if (msg) {
                            alert('Please wait while updating data');    
                        }                        
                    },
                    error: function (request,setting){
                    }
                });
		 window.location = window.location;
          //window.location.reload();
        }
    });
	
	// =========== Input Type Lookup Function =============	
	$('.title').blur(function() { 
		var title = $(this).val();
		var link = $(this).attr('rel');
		$.ajax({
			type: 'GET',
			url: base_ADM+link+'/check_title/'+title,
			data: 'ajax=true&field=title&hash='+title,
			datatype: "JSON",
			async: false,
			success: function(msg){
				//alert(msg);
				if (msg == 1) {
					$('.title').next('span.alert').remove();
					$('<span class="red alert">Title Not Available!</span>').insertAfter('.title');
					$('.title').parent().parent().find('input:image, input:submit').attr("disabled", true);
					//return false;
				} 
				if (msg == 0) {
					$('.title').next('span.alert').remove();
					$('.title').parent().parent().find('input:image, input:submit').removeAttr("disabled");
					//return false;
				} 
			},
			error: function (request,setting){
			}
		});
	});		
	$('.odr_up, .odr_down').click(function(){
		rel = $(this).attr('rel');
		url = $(this).attr('href');		
		$.ajax({
			//url: base_URL+'admin-cp/'+link+'/'+pid+'/'+val,
			type: 'GET',
			url:url,
			datatype: "JSON",
			async: false,
			success: function(msg){
				if (msg !== '') {
					//jAlert("Please wait while updating data " + msg);
					url = base_ADM + rel + '?current=' + msg;
					window.location = url;
				}                        
			},
			error: function (request,setting){
				jAlert('Failed to update..');    
			}
		});
		return false;
	});


	// Object File statistical hover
	$('.object_title').hover(function() {
		ttl = $(this).attr('alt');
		obj = $(this).attr('class');
		rel = $(this).attr('rel');
		$(this).stop().show('slow').append('<div class="floating_box"><img src="'+base_URL+'assets/images/system/ajax-loader.gif" /><div>');
		$.ajax({
			type: 'GET',
			url:rel,
			datatype: "JSON",
			async: false,
			cache: true,
			beforeSend: function() {
				// $('.object_title').closest("td a").find('.floating_box').stop().hide('fast'); 
				$('.floating_box').css('margin','-132px -200px 0 0 !important').empty();
			},
			success: function(result){
				if (result !== '') {
					file = jQuery.parseJSON(result); 
					//alert(file.file_name);
					i = 1;
					$.each(file, function(i,file) {
						var div_data =
						"<div>"+file.file_name+ " | Hits : "+file.count+"</div>";
						$(div_data).appendTo(".floating_box");
						//$(div_data).appendTo.closest(".draggable");
					});
				}                        
			},
			error: function (request,setting){
				//alert('Failed to update..');    
			}
		});
		//$(this).append('<div class="floating_box"> File Name : '+file.file_name+'</div>');
	},function(){
		$(this).closest("td").find('.floating_box').stop().hide('fast');
		$(this).find('.floating_box').stop().hide('fast');
	});
	
	$('.ckeditor').ckeditor({ 
		// apply_source_formatting : true, //verify_html : true
		
	});
	
	$('.ckeditor400').ckeditor({
		width:800
		// apply_source_formatting : true,
		// verify_html : true
	});
	
	$('.ckeditorsmall').ckeditor({
		toolbar : 'Basic', 
		toolbar_Basic : [['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-','Source']]
//		apply_source_formatting : true,
//		verify_html : true
	});

    var currentYear = (parseInt)((new Date).getFullYear());
	
	//Shadowbox.init({handleOversize: "drag", modal: true});
	
	// Function Listings
	/********* Tipsy Hover - start ********/
	$('.view, .edit, .delete, .list, .functions').tipsy({
		title: 'title', 
		gravity: 's',
		fade: true,
		offset: 2,
		opacity: 1
		//trigger: 'hover'
	});
	$('.odr_up, .odr_down').tipsy({
		title: 'title', 
		gravity: 'e',
		fade: true,
		offset: 2,
		opacity: 1
		//trigger: 'hover'
	});	
	$('.download').tipsy({
		title: 'title', 
		gravity: 'w',
		fade: true,
		offset: 2,
		opacity: 1
		//trigger: 'hover'
	});	
	/********* Tipsy Hover - end ********/
   
	$('.autovalid').validate(/*{
		invalidHandler: function(form, validator) {
		  //var errors = validator.numberOfInvalids();
		  //if (errors) {
		  //if (validator.numberOfInvalids()) {
			//$(".lang_field_err").show();
		  //} else {
			//$(".lang_field_err").hide();
		  //}
		}
	 }*/);
	
	// --------------------- start --- Used in Module Listing
	$('.mod_func').each(function() {
		if ($(this).find('input[type="checkbox"]:checked').length == 0) {
			$(this).parent('.select_holder').find('.module_menu').prop('checked','');
		} 
	});	

	$('.module_menu').change( function () {		
		var selected = $(this).parent().find('table tr td input[class="check_hidden_mplr"]');
		if ($(this).attr('checked') === 'checked') { selected.prop('checked','checked'); } 
		if ($(this).attr('checked') !== 'checked') { selected.prop('checked',''); }	
	});
	
	$('input[class^="check_hidden_mplr"]').change( function () {
		if ($(this).prop('checked') == true) {
			$(this).closest("table").parent("td").find('input[name^="module_menu[level_id]"]').prop('checked','checked');	
		} else {
			$(this).closest("table").parent("td").find('input[name^="module_menu[level_id]"]').prop('checked','');
		}
	});	
	$('.fadeOut').fadeOut(3000);
	// --------------------- end --- Used in Module Listing
   
    //$('form.auto_valid').validate(); 
	// Validate Your Form;
	//getErrorMessages
	//if ($('.error') == 'object') { alert($('.error')); }
	
    $('input.disactive').focus(function(){$(this).removeClass('disactive');});    
    /* Drop Down Helper */ /* */
	
    $('ul.main_navi li.dd').click(function(e){
        var id = $(this).attr('id');
        var options = {};
        if (id === 'nexthide'){
            $('ul.main_navi li#nexthide ul').hide();
            $(this).removeAttr('id');
        }else{
            $('ul.main_navi li#nexthide ul').hide();
            $('ul.main_navi li#nexthide').removeAttr('id');
            $('ul.main_navi li:hover ul').slideDown('normal');
            $(this).attr('id','nexthide');
        }
    });
	
    $('ul.main_navi li.dl').mouseover(function(){$(this).css('color','#fff') ;});
	
    $('ul.main_navi li.dl').mouseout(function(){$(this).css('color','#000') ;});
	
    $('img.close_flying').click(function(){
        var target = $(this).attr('target');
        $('.'+target).fadeOut(300);
    });
	
	// Emptied history data 
	$('.trash').click(function () {
		var uri		= $(this).attr('href');
		var ttl		= $(this).attr('rel');
		//var ttl		= $(this).attr('title');
		
		//return confirm('Are you sure want to delete this item?');
		
		jConfirm('Are you sure want to '+ttl+'?', 'Confirmation', function(r) {
			if(r) {
				$.ajax({
					type:'POST',
					url: uri,
					datatype: "JSON",
					async: false,
					error: function() {
						jAlert('Error while '+ttl+' data', 'Error');
					},
					success: function(result){
						//alert(result);
						if(result == 1) {
							jAlert('Data Emptied', 'Result');
							//jAlert("Please wait while updating data " + msg);
							url = uri.replace(/empty/gi, "");
							window.location = url;
						} else if(result == 0) {

							jAlert('Error while '+ttl+' data', 'Error');
							
						} else {
							jAlert(result, 'Error');

						}
					}
				});				
			} else {
				//if($(id).hasClass('red_row')) {
					//$(id).removeClass('red_row').fadeTo('fast', 1);
				//}
			}
			//jAlert('Confirmed: ' + r, 'Confirmation Results');
		});
		return false;
	});
	
    $('input[type="checkbox"]#ipt_checkall').click(function(){
        var value = $(this).attr('checked');
        if (value===true){
            $('input[type="checkbox"].ipt_tocheck').each(function(){
               $(this).attr('checked','true').addClass('activecheck'); 
            });
        }else{
            $('input[type="checkbox"].ipt_tocheck').each(function(){
               $(this).removeAttr('checked').removeClass('activecheck');
            });
        }
    });
	
    $('input[type="checkbox"].ipt_tocheck').click(function(){
        var value = $(this).attr('checked');
        if (value===true){
            $(this).attr('checked','true').addClass('activecheck');     
        }else{
            $(this).removeAttr('checked').removeClass('activecheck');
        }
    });
	
    $('select[name="status_listing_one_click"]').change(function(){
        var val  = $(this).val();
        var link = $(this).attr('url');
        var lastpid = $(this).attr('lastpid');
        if (val !== 'select'){
            var starter = 0;
            var lengthtoupdate = parseInt($('input[type="checkbox"].ipt_tocheck.activecheck').length);
            $('input[type="checkbox"].ipt_tocheck.activecheck').each(function(){
                var pid = $(this).attr('pid');
                var hash = $(this).attr('hash');
                $.ajax({
                    type: 'GET',
                    url:base_URL+'admin-cp/'+link+'/'+pid+'/'+val,
                    data: 'ajax=true&field=status&hash='+hash,
                    datatype: "JSON",
                    async: false,
                    success: function(msg){
                        if (starter === 0) {
                            alert('Please wait while updating data');    
                        }                        
                    },
                    error: function (request,setting){
                    }
                });
                starter++; 
            });        
            if(starter===lengthtoupdate){
                //window.location.reload();
				window.location = window.location;
            };                      
        }
    });
	

	
	$('select[class="default_status_one_click"]').change(function(){
		   var pid = $(this).attr('pid');
           var val = $(this).val();
           var hash = $(this).attr('hash');
		   var link = $(this).attr('url');
           $.ajax({
                type: 'GET',
                url:base_ADM+'admin-cp/'+link+'/'+pid+'/'+val,
                data: 'ajax=true&field=status&hash='+hash+'&id='+val,
                datatype: "html",
                success: function(msg){
					window.location = window.location;
                },
                error: function (request,setting){
                    alert(request+ ' ' + setting);
                }
            });
    });
	
	$('select[class="default_status_one_click_activated"]').change(function(){
		   var pid = $(this).attr('pid');
           var val = $(this).val();
           var hash = $(this).attr('hash');
		   var link = $(this).attr('url');
           $.ajax({
                type: 'GET',
                url:base_URL+'admin-cp/'+link+'/'+pid+'/'+val,
                data: 'ajax=true&field=activated&hash='+hash+'&id='+val,
                datatype: "html",
                success: function(msg){
					window.location = window.location;
                },
                error: function (request,setting){
                    alert(request+ ' ' + setting);
                }
            });
    });
	
	$('select[class="default_delete_one_click"]').change(function(){
		   var pid = $(this).attr('pid');
           var val = $(this).val();
           var hash = $(this).attr('hash');
		   var link = $(this).attr('url');
           $.ajax({
                type: 'GET',
                url:base_URL+'admin-cp/'+link+'/'+pid+'/'+val,
                data: 'ajax=true&field=is_deleted&hash='+hash+'&id='+val,
                datatype: "html",
                success: function(msg){
					window.location = window.location;
                },
                error: function (request,setting){
                    alert(request+ ' ' + setting);
                }
            });
    });
	
    $('.title').alphanumeric({allow:'-.,! '});
	
	if(typeof $('#title') === 'object' && $('#title').length !== 0) {
		 if(typeof $('#subject') === 'object' && $('#subject').length !== 0) {
			 $('#name').parent('div').hide();
			 $('#subject').blur(function() {
				 var value = $(this).val();
				 $('#name').val($.replace_permalink(value));
			 });
		 }
		 if(typeof $('#title') === 'object' && $('#title').length !== 0) {
			 //$('#name').parent('div').hide();
			 //$('#title').blur(function() {
				 //var value = $(this).val();
				 //$('#name').val($.replace_permalink(value));
			 //});
		 }
		 $('#title').blur(function() {
			 var value = $('#title').val();
			 $('#name').val($.replace_permalink(value));
		 });
	 }	
	
	if(typeof $('#title_edit') === 'object' && $('#title_edit').length !== 0) {
		 $('#title_edit').blur(function() {
			 var value = $(this).val();
			 $('#title_edit').val($.replace_permalink(value));
		 });
	 }	
	 
	 if(typeof $('#title_url') === 'object' && $('#title_url').length !== 0) {
		 $('#title_url').blur(function() {
			 var value = $(this).val();
			 $('#title_url').val($.replace_permalink_url(value));
		 });
	 }
			 
    $('textarea[name="description_model"]').counter({
            type: 'char',
            goal: 250,
            count: 'down'   
        }); 
	// if(typeof $('#title') == 'object' && $('#title').length != 0) {
		// if(typeof $('#subject') == 'object' && $('#subject').length != 0) {
			// //$('#name').parent('div').hide();
			// $('#subject').blur(function() {
				// var value = $(this).val();
				// //$('#name').val(replace_permalink(value));
			// });
		// }
		// if(typeof $('#title') == 'object' && $('#title').length != 0) {
			// //$('#name').parent('div').hide();
			// $('#title').blur(function() {
				// var value = $(this).val();
				// //$('#name').val(replace_permalink(value));
			// });
		// }			
		// $('#title').blur(function() {
			// var value = $('#title').val();
			// $('#title').val(replace_permalink_dash(value));
		// });
	// }	
	// --------------------- imported from kohana 2
	$('.simpledate').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: '1900:+15'});
	
	$('#validAfterDatepicker,#validBeforeDatepicker').datepicker({
		duration: '',
		showTime: false,
		constrainInput: true,
		stepMinutes: 1,
		stepHours: 1,
		dateFormat: 'yy-mm-dd',
		altTimeField: '',
		time24h: false
	});

	$('#validateFormDate').validate({ 
		errorPlacement: $.datepicker.errorPlacement, 
		rules: { 
				start_date: { 
					required: true,
					dpCompareDate: ['before', '#validAfterDatepicker'] 
				}, 
				end_date: { 
					required: true,
					dpCompareDate: {after: '#validBeforeDatepicker'} 
				}
			}, 
			messages: { 
				validFormatDatepicker: 'Please enter a valid date (yyyy-mm-dd)', 
				validRangeDatepicker: 'Please enter a valid date range', 
				validAfterDatepicker: 'Please enter a date after the previous value' 
			}
		}	
	);

	$('.parent_menu a.parent').each(function() {
		$(this).click(function() {
			if(!$(this).hasClass('active')) {
				$(this).addClass('active');
				$(this).parent().children('ul').slideDown('normal');
			} else {
				$(this).removeClass('active');
				$(this).parent().children('ul').slideUp('normal');
			}
			return false;
		});
		if($(this).hasClass('active')) {
			$(this).parent().children('ul').css('display', 'block');
		}
	});
   
	/** EOF **/
	if(typeof $('#name') === 'object' && $('#name').length != 0) {
		if(typeof $('#subject') === 'object' && $('#subject').length !== 0) {
			//$('#name').parent('div').hide();
			$('#subject').blur(function() {
				var value = $(this).val();
				$('#name').val($.replace_permalink(value));
			});
		}
		if(typeof $('#title') === 'object' && $('#title').length !== 0) {
			//$('#name').parent('div').hide();
			$('#title').blur(function() {
				var value = $(this).val();
				$('#name').val($.replace_permalink(value));
			});
		}
	}
	
	//================== Checking names lookup in server 
   
		//====== Maintenance mode in setting listing
	$('form#maintenance_form').submit(function(){
		//$(":checked").val()
		var val  = $(this).find('input:checked').val();
        var link = $(this).attr('action');
		//alert(window.location);
		//alert(val);
        if (link){
                var pid = $(this).attr('pid');
                var hash = $(this).attr('hash');
                $.ajax({
                    type: 'POST',
                    url: link,
					data: 'ajax=true&field=default&mode='+val,
                    datatype: "JSON",
                    async: false,
                    success: function(msg){
                        if (msg == 1) {
                            alert('Please wait while updating data');    
                        }                        
                    },
                    error: function (request,setting){
                    }
                });
		  window.location = window.location;
          //window.location.reload();
        }	
		return false;
	});
	
	
	if ($.getUrlVar('current')) {
		current_tr = $.getUrlVar('current');
		if (typeof($('.listing_data').find('#'+'row_' + current_tr)) === 'object') {
			$('.listing_data')
			.find('#'+'row_' + current_tr)
			.removeClass("listing_odd listing_even")
			.hide('fast')
			.show('fast')
			.addClass("green_row");
		}
	}
	
	$('.maintenance_mode').change(function(){
		if ($(this).val() === 1) 
			jAlert("The site will be temporary off in maintenance mode. Click Save to continue ", "Alert!");
	});
	
	$('#check_all').click(function () {
		var $checkboxes = $(this).parents('table').find('tbody').find(':checkbox');
		$checkboxes.attr('checked', this.checked);
	});
	
	$('#select_action').change(
		function () {
			$(this).parents('form').submit();
		}
	);
		
	$('.open_table').toggle(
		function () {
			//alert('foobar');
			$(this).closest('fieldset').find('table').fadeIn('fast');
		},
		function () {
			$(this).closest('fieldset').find('table').fadeOut('fast');
		}
	);
	if (typeof $('.form_details') == 'object' && $('.form_details').length != 0) {
		if (typeof $('.required') == 'object') {
			$('.required').each(function() {
				$(this).prev('label').append(' <span style="color:#f00">*</span>');
			});
		}
		
		var validate = $('.form_details').validate({
			rules: {
				confirm_password: {
					equalTo: "#password"
				}
			},
			messages: {
				confirm_password: {
					equalTo: "Please enter the same password as above"
				}
			}
		});
		
		if( typeof(accepted_type) != 'undefined' ) {
			accepted_type = accepted_type.replace(/,/gi, "|");
			$('#' + file_fields).rules("add", {
				accept: accepted_type,
				messages: {
					accept: jQuery.format("Please enter a value with {0} extension. ")
				}
 			});
		}
		if( typeof(audio_accepted_type) != 'undefined' ) {
			audio_accepted_type = audio_accepted_type.replace(/,/gi, "|");
			$('#' + audio_file_fields).rules("add", {
				accept: audio_file_fields,
				messages: {
					accept: jQuery.format("Please enter a value with {0} extension. ")
				}
 			});
		}
	}
	
	$('.delete, .delete_function').live('click',function () {
		var id		= jQuery($(this).parent().parent());
		var ttl		= $(this).attr('title') ? $(this).attr('title') : $(this).text();
		var uri		= $(this).attr('href');
		$(id).addClass('red_row').fadeTo('fast', 0.5);
//		return confirm('Are you sure want to delete this item?');
		jConfirm('Are you sure want to '+ttl+' this item?', 'Confirmation', function(r) {
			if(r) {
				$.ajax({
					type:'POST',
					url: uri,
					datatype: "JSON",
					async: false,
					error: function() {
						jAlert('Error while '+ttl+' data', 'Error');
						if($(id).hasClass('red_row')) {
							$(id).removeClass('red_row').fadeTo('fast', 1);
						}
					},
					success: function(result){
						//alert(result);
						if(result == 1) {
							$(id).remove();
							window.location.reload();
						} else if(result == 0) {
							//jAlert('Error while deleting data', 'Error');
							jAlert('Error while '+ttl+' data', 'Error');
							if($(id).hasClass('red_row')) {
								$(id).removeClass('red_row').fadeTo('fast', 1);
							}
						} else {
							jAlert(result, 'Error');
							if($(id).hasClass('red_row')) {
								$(id).removeClass('red_row').fadeTo('fast', 1);
							}
							//return false;
						}
					}
				});				
			} else {
				if($(id).hasClass('red_row')) {
					$(id).removeClass('red_row').fadeTo('fast', 1);
				}
			}
			//jAlert('Confirmed: ' + r, 'Confirmation Results');
		});
		return false;
	});
	
	$('.change_function').live('click',function (e) {
		// prevent default behaviour
		e.preventDefault();
		
		$.colorbox({
				//iframe:true,
				//ajax:false,
				href:$(this).attr('href'),
				width:"75%",height:"75%"
            });
		return false;			
	});
	
	$('#cboxLoadedContent a[class="change_function"]').on('click', function(e){
		// prevent default behaviour
		e.preventDefault();

		var url = $(this).attr('href'); 

		$.ajax({
			type: 'GET',
			url: url,
			dataType: 'html',
			//cache: false,
			//async: false,
			beforeSend: function() {
				$('#cboxLoadedContent').empty();
				$('#cboxLoadingGraphic').show();
			},
			complete: function() {
				$('#cboxLoadingGraphic').hide();
			},
			success: function(data) {                  
				$('#cboxLoadedContent').append(data);
			}
		});

	});
	
	$('#filechange').live('submit',function(e){
		// Prevent form from submitting normally
		e.preventDefault();
		
		// Set preloader image
		$('#loader').html('<img width="28" height="28" src="'+base_URL+'assets/images/themes/loader.gif"/>Submitting...');

		// Empty result callback 
		$('#result_callback').removeClass('result_text').stop().html('').fadeIn('fast');
		
		// Set ajax post handler
		$.ajax({
			type: "POST",
			url: $(this).attr('action'),
			data: 			{ 
				name		: $('#name').val(),
				description	: $('#description').val(),			
				status		: $('#status').val()
			},
			//cache: true,
			//async: true,
			timeout: 8000,
			dataType: "HTML",
			success: function(message) {
				// Parse JSON result
				var data   = jQuery.parseJSON(message);
				//alert(message);
				if (data.errors !== '') {
					$('.div_row').empty();
					$.each(data.errors, function (index, error) {	
						if (data.errors[index] !=='') {							
							$('<span class="error"/><br/><br/>')				
							.html(error)
							.appendTo('.div_row');
						} else if (data.result !=='') {
							self.setInterval(parent.location.reload(),1000);
							parent.$.fn.colorbox.close();
						};
					});
					
					
				}
				
				// Empty loader
				$('#result_callback').empty();
				 
				// Empty loader image
				$('#loader').html('');
				
			},
			complete: function(message) { 
			
				
			},
			error: function(x,message,t) { 
				if(message==="timeout") {
					//alert("got timeout");
				} else {
					//alert(message);
				}	
			}
		});
		
		// Return false 
		return false;
	});
	
	if (typeof $('.datepicker') == 'object' && $('.datepicker').attr('class') != null && $('.datepicker').length != 0) {
//		$('.datepicker').attr('readonly', true);
		$('.datepicker').datepicker({
			refresh: true,
			showTime: false,
			constrainInput: true,
			dateFormat: 'yy-mm-dd'
		 });
		 //$('.datepicker').datepicker();
	}
	
	if (typeof $('.timepicker') === 'object' && $('.timepicker').attr('class') !== null && $('.timepicker').length !== 0) {
		$('.timepicker').attr('readonly', true);
		$('.timepicker').datepicker({
			duration: '',
			showTime: true,
			constrainInput: false,
			stepMinutes: 1,
			stepHours: 1,
			dateFormat: 'yy-mm-dd',
			altTimeField: '',
			time24h: true
		 });
	}
		
	$('.zoom, a.zoom').each(function () {
		$(this).fancyZoom({directory: base_URL + 'assets/images/fancy_zoom/'});
	});
	
	
	$('a.expand_fields_link').toggle(function () {
		var warper	= $(this).parent().parent().parent().find('.expand_fields');
		warper.slideDown('slow');
		$(this).html('Less');
	}, function () {
		var warper	= $(this).parent().parent().parent().find('.expand_fields');
		warper.slideUp('slow');
		$(this).html('More');
	});
	
	// print
	$('#print').click(function(e) {e.preventDefault();$("div#printArea").printArea();});
	
	if (typeof $('#order') === 'object' && $('#order').attr('id') !== null) {
		cur_order = $('#order').val();
	}
	
	if (typeof $('#order') === 'object' && $('#order').attr('id') !== null) {
		var categories = $('#order').find('option');
		var id = '';
		var item_parent = '';
		var i = 0; 
		var idx = 0;
		var classes = new Array(); 
		var order_buffer = new Array();
			
		jQuery.each(categories, function (idx, val) {
			if (classes[idx] !== undefined) {
			classes	= (categories.attr('class') !== undefined) ? $(this).attr('class').split("\\s+") : '';
			item_parent = classes[idx].replace('category_', '');
			if ($(this).attr('selected')) {
				cur_order = $(this).val();
			}	
			if (item_parent.length < 2 && classes.length < 2) { return; }
			if ($(this).parent().find('option[value=' + item_parent + ']').attr('disabled')) {
				$(this).attr('disabled', 'disabled');
			}	
			
			order_buffer[idx]	= {id : classes[idx].replace('product_', ''),
								category_id : item_parent,
								subject : $(this).html(),
								order : $(this).val(),
								disabled : $(this).attr('disabled')
							  };
			};
			i++;
			
		});
		if (typeof $('#order') === 'object' && $('#order').attr('id') !== null) {
			$('#order').html('<option value="">&nbsp;</option>');
		}
		$.populate_order();
	}
	
	$('#category_pid').change( function () {		
			// Set ajax post handler
			var data = $(this).val();
			var url = $(this).attr('data-url');
			$.ajax({
				type: "POST",
				url: url,
				data: { 
					id : data
				},
				//cache: true,
				//async: true,
				timeout: 8000,
				dataType: "JSON",
				success: function(message) {
					// Parse JSON result
					////var data   = jQuery.parseJSON(message);
					//alert(message.products);
					if (message.products !== '') {
						$('#product_id').empty();
						$('<option value="0" name="product_id"/>').html('--- Product ---').appendTo('#product_id');
						if (message.products !== undefined) {
							$.each(message.products, function (index, product) {	
								if (product !=='') {							
									$('<option value="'+product.id+'" name="product_id"/>')
									.html(product.subject)
									.appendTo('#product_id');
								} 
							});
						} else {
								$('<option value="" name="product_id"/>')
								.html('Add Product First')
								.appendTo('#product_id');
						};


					}

					// Empty loader
					//$('#result_callback').empty();

					// Empty loader image
					//$('#loader').html('');

				},
				complete: function(message) { 


				},
				error: function(x,message,t) { 
					if(message==="timeout") {
						//alert("got timeout");
					} else {
						//alert(message);
					}	
				}
			});
		}
	);
		
	$('#category_id').change(
		function () {
			var options = $('#order').find('option');
			jQuery.each(options, function (idx, val) {
				item_parent = $(this).attr('class').replace('category_', '');
				if (item_parent === '') return;
				if ($(this).parent().find('option[value=' + item_parent + ']').attr('disabled'))
					$(this).attr('disabled', 'disabled');
			});
			$.populate_order();
		}
	);
		
	if (typeof $('#parent_id') === 'object' && $('#parent_id').attr('id') !== null) {
		var parent_id = $('#parent_id').find('option'), id = '', item_parent = '';
		jQuery.each(parent_id, function (idx, val) {
			item_parent = $(this).attr('class') ? $(this).attr('class').replace('parent_', '') : ''; 
			if (item_parent === '') return;
			if ($(this).parent().find('option[value=' + item_parent + ']').attr('disabled'))
				$(this).attr('disabled', 'disabled');
		});
		$.populate_order();
	}
	
	$('#parent_id').change(
		function () {
			$.populate_order();
		}
	);
	// --------------------- end imported from kohana 2
}) ;

$.extend({
	// Populate categories
	populate_order: function (object) {
		var categories = '', parent_id = '', order = new Array(), item_parent = '', num = 1, html = '';
		if (typeof $('#parent_id') === 'object' && $('#parent_id').attr('id') !== null) {
			categories = $('#parent_id').find('option');
			parent_id = $('#parent_id').val();
			html = '<option value="">&nbsp;</option>';
			if (parent_id === '' || parent_id === 0) {
				$('#order').html(html);
				return;
			}
			order[0] = 'At the beginning';
			jQuery.each(categories, function (idx, val) {
				if ($(this).attr('class') !== undefined) {
					item_parent = $(this).attr('class').replace('parent_', '');
					if ($(this).val() !== parent_id && item_parent !== '' && item_parent === parent_id) {
						order[num] = {id : $(this).val(),
									title : $(this).html().replace(/&nbsp;/g, ''),
									disabled : $(this).attr('disabled')
									};
						num++;
					};
				};	
			});
		} else {
			categories = order_buffer;
			parent_id = $('#category_id').val();
			html = '<option value="">&nbsp;</option>';
			if (parent_id === '') {
				$('#order').html(html);
				return;
			}
			order[0] = 'At the beginning';
			jQuery.each(categories, function (idx, val) {
				if (val.category_id === parent_id) {
					order[num] = {id : val.id,
								title : val.subject,
								disabled : val.disabled
								};
					num++;
				}
			});
		}
		if (order.length == 1) {
			html += '<option value="1" ' + ((cur_order == 1) ? 'selected="selected"' : '') + '>At the beginning</option>';
		} else if (order.length > 1) {
			num = 1;
			jQuery.each(order, function (idx, val) {
				if (num == 2)
					html += '<optgroup label="After ...">';
				if (num == 1)
					html += '<option value="' + num + '" ' + ((num == cur_order) ? 'selected="selected"' : '') + '>' + val + '</option>';
				else
					html += '<option value="' + num + '" ' + ((num == cur_order) ? 'selected="selected"' : '') + ((val.disabled) ? ' disabled="disabled"' : '') + '>' + val.title + '</option>';
				num++;
			});
			html += '</optgroup>';
		}
		if (typeof $('#order') == 'object' && $('#order').attr('id') != null)
			$('#order').html(html);
	},
	// Replace unwanted character 1	
	replace_permalink: function(value) {
		var re 	= /[^a-z0-9]+/gi;
		var re2 = /^-*|-*$/g;
		value	= value.replace(re2, '').toLowerCase();
		value 	= value.replace(re, '-');
		return value;
	},
	// Replace unwanted character 2
	replace_permalink_dash: function (value) {
		var re 	= /[^a-z0-9]+/gi;
		var re2 = /^-*|-*$/g;
		value	= value.replace(re2, '').toLowerCase();
		value 	= value.replace(re, '_');
		return value;
	},
	// Replace unwanted character 2
	replace_permalink_url: function (value) {
		var re 	= /[^a-z0-9\:\/\.]+/gi;
		var re2 = /^-*|-*$/g;
		value	= value.replace(re2, '').toLowerCase();
		value 	= value.replace(re, '-');
		return value;
	},
	// Getting with javascript url
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
	// Getting with javascript url
	getUrlVar: function(name){
		return $.getUrlVars()[name];
	}
});