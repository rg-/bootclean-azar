+function(t){

	$('[data-inview-me="click"]').on('bc.inview.on',function(){
		
		if(!$(this).hasClass('clicked')){
			$(this).addClass('clicked');
			$(this).trigger('click');
		}
 		
 	}); 

 	$('[data-inview-me="fixed-background"]').on('bc.inview.on',function(){ 
 		var target = $(this).attr('data-fixed-target'); 
 		$(target).removeClass('is_hidden'); 
 	});
 	$('[data-inview-me="fixed-background"]').on('bc.inview.off',function(){ 
 		var target = $(this).attr('data-fixed-target'); 
 		$(target).addClass('is_hidden'); 
 	});

 	$('[data-inview-me="ajax-load"]:not(.ajax-inited)').on('bc.inview.on',function(){

		var me = $(this);
 		var url = me.attr('data-ajax-load');
 		var target = me.attr('data-ajax-target');

		if(!$(this).hasClass('ajax-inited')){
			$(this).addClass('ajax-inited');
			AjaxLoad_start(me); 
	 		$.ajax({ type: "GET",   
			     url: url,   
			     success : function(text)
			     { 
			         AjaxLoad_success(me, text);
			     }
			}); 
			
		}
 		
 	}); 

 
 	$(document).on('click', '[data-ajax-load-click]', function(ev){ 
 		var me = $(this);
 		var url = me.attr('data-ajax-load');
 		var target = me.attr('data-ajax-target');
 		var holder = me.parent(); 
 		AjaxLoad_start(me); 
 		$.ajax({ type: "GET",   
		     url: url,   
		     success : function(text)
		     { 
		         AjaxLoad_success(me, text);
		     }
		}); 
 	});

 	function AjaxLoad_error(me){
 		var msg = "Sorry but there was an error: ";
		$( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
 	}
 	function AjaxLoad_start(me){
 		var target = me.attr('data-ajax-target');
 		$( target ).removeClass('ajax-loaded');
 		$( target ).addClass('ajax-loading');  
 	}
 	function AjaxLoad_success(me, text){ 

 		var target = me.attr('data-ajax-target'); 
 		var icon = me.attr('data-ajax-load-icon');
  	$( target ).removeClass('ajax-loading');
  	$( target ).addClass('ajax-loaded'); 

  	var section = $( target ).closest('.landing-section');
  	section.addClass('section-ajax-loaded'); 

  	if( me.attr('data-ajax-load-remove') == 'me' ){
	  	me.remove();
	  }
	  $( icon ).remove();
	  $( target ).html(text);

	  $( target ).find('[data-slick]').make_slick();

	  $( target ).find('[data-slick]').on('init', function(slick){  
			slick_lazybackground($(this)); 
		});
		$( target ).find('[data-slick]').on('afterChange', function(e, slick, currentSlide){  
			slick_lazybackground($(this)); 
		}); 

 	}  

 	$('[data-slick]').on('init', function(slick){  
		slick_lazybackground($(this)); 
	});
	$('[data-slick]').on('afterChange', function(e, slick, currentSlide){  
		slick_lazybackground($(this)); 
	});

	function slick_lazybackground(el){ 
		var count = 0;

		el.find('.slick-custom-prev').on('click',function(){
			var slider = $(this).closest('.slick-slider');
			if(slider.hasClass('slick-initialized')){
				slider.slick('slickPrev'); 
			}
		});
		el.find('.slick-custom-next').on('click',function(){
			var slider = $(this).closest('.slick-slider');
			if(slider.hasClass('slick-initialized')){
				slider.slick('slickNext'); 
			}
		});

		el.find('[data-lazybackground-src]').each(function(){
			var target = $(this); 
			var slide = target.closest('.slick-slide');
			var section = target.closest('[data-inview-me="detect"]');
			var current_img_url = target.css('background-image');
			var lazy_img_url = 'url('+target.data('lazybackground-src')+')'; 

			if( slide.hasClass('slick-cloned') ){
				target.removeClass('lazybackground-loading'); 
				target.addClass('lazybackground-loaded');
				target.css('background-image', lazy_img_url);
			}

			if( !slide.hasClass('slick-cloned') && slide.hasClass('slick-active') && !target.hasClass('lazybackground-loaded')){ 
				target.addClass('lazybackground-loading'); 
				target.parent().prepend('<span class="lazybackground-loader"/>'); 
				var loading = target.parent().find('.lazybackground-loader'); 
				loading.fadeIn(0);
				var background_src = target.data('lazybackground-src');  
				var temp = $("<img>");
				temp.load(background_src, function(){
					target.removeClass('lazybackground-loading'); 
					var new_src = $(this).attr('src'); 
					target.css('background-image','url('+new_src+')'); 
					loading.delay(300+(count*380)).fadeOut(600, function(){  
						target.addClass('lazybackground-loaded');
						loading.remove(); 
					});
				});
				temp.attr('src', background_src); 

				count++;
			}
			
		}); 
		
	}

}(jQuery); 