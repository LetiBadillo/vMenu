$(document).ready(function($) {

	"use strict";

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	var carousel = function() {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			stagePadding: 5,
			nav: false,
			navText: ['<span class="icon-chevron-left">', '<span class="icon-chevron-right">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});
	};
	carousel();

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');	
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

	var counter = function() {
		
		$('#section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.ftco-number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();
	
	

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();

	// navigation
	var OnePageNav = function() {
		$(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
		 	e.preventDefault();

		 	var hash = this.hash,
		 			navToggler = $('.navbar-toggler');
		 	$('html, body').animate({
		    scrollTop: $(hash).offset().top
		  }, 700, 'easeInOutExpo', function(){
		    window.location.hash = hash;
		  });


		  if ( navToggler.is(':visible') ) {
		  	navToggler.click();
		  }
		});
		$('body').on('activate.bs.scrollspy', function () {
		  console.log('nice');
		})
	};
	OnePageNav();


	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

	$('#m_time').timepicker({ 'step': 15 });



});
function fillSelect(select, url, selected){
	$.get(url, function(data){
	var options = '';
	console.log(url);
	$(data).each(function(key, value){
		var attr = '';
		if(value.permission || value.allowed){
		  attr = "selected";
		}
		options += '<option style="background-color:rgba(84, 210, 1, 1)"; '+attr+' value="'+value.id+'">'+value.label+'</option>';
	});
	$(select).append(options);
	if($(select)[0].hasAttribute('option')){
	  $(select).val($(select).attr('option'));
	}
  });
  }
  
  function saveForm(form, url, action){
	  console.log('hola');
	$(form).on('submit', function(e){
	  e.preventDefault();	  
	  hide($('.feedback'));
	  $.post(url, $(form).serialize())
	  .done(function(data){
		responses(data, action);
	  }).fail(function(data){
		getErrors(data);  
	  });
	});
  
  }

  function saveAjax(form, url, action){
	$(form).on('submit', function(e){
		e.preventDefault();
		hide($('.feedback'));
		console.log(new FormData(this));
		$.ajax({
			url: url,
			type: 'POST',
			dataType: "JSON",
			data: new FormData(this),
			processData: false,
			contentType: false,
			success: function (data){
				responses(data, action);
			},
			error: function (data){
				getErrors(data);  
			}
		});
	});
  }

function getErrors(data){
	if(data.responseJSON.error){
	  responses(data.responseJSON.error, 1);
	}else{
	  $.each(data.responseJSON.errors, function(key,value){
		$('.'+key+'_error').text(value).removeClass('d-none');
	  });
	}
  }
  
  function hide(data){
	$(data).each(function(k, v){
	  $(v).html("").addClass('d-none');
	});
  }

  
function responses(data, action){
	switch (action) {
	  case 1: /*Alert*/ 
	  	$('.modal-main-title').html('');
	  	$('.modal_content').html(data.response);
	  	$('#myModal').modal('show');
	  break;
	  case 2: /*Alert with redirect*/ 
	  	$('.modal-main-title').html(data.title);
	  	$('.modal_content').html(data.response);
		$('.modal_footer_buttons').html('<a type="button" class="btn btn-secondary" href="'+data.location+'" class="button pink">Continuar</a>');
		$('#myModal').modal('show');
	  break;
	  case 3: /*un modal ya abierto*/ 
	  	$('.modal-main-title').html(data.title);
	  	$('.modal_content').html(data.response);
		$('.modal_footer_buttons').html('<a type="button" class="btn btn-secondary" href="'+data.location+'" class="button pink">Continuar</a>');
	  break;
	  default:
	  window.location.href = ''+action; //only Redirect
	  break;
	}
  }