$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'right',
		easyClose: true,
		menuWidth: '260px'
	});

	// Select Field
	jcf.setOptions('Select', {
		wrapNative: false,
		wrapNativeOnMobile: true,
		fakeDropInBody: false
	});

	jcf.replace( $('.select-field select') );

	jcf.setOptions('Range', {
		range: 'min'
	});

	jcf.replace( $('.range-field input') );

	// First Screen Form
	$('#to-step-2').click(function(e){
		e.preventDefault();

		$(this).closest('.step-1').slideUp(300).siblings('.step-2').slideDown(600);
	});

	// Construction
	$('.structure-markers .marker').hover(function(){
		$('[data-marker="#' + $(this).attr('id') + '"]').addClass('hover');
	}, function(){
		$('[data-marker="#' + $(this).attr('id') + '"]').removeClass('hover');
	});

	$('[data-marker]').hover(function(){
		$( $(this).data('marker') ).addClass('visible');
	}, function(){
		$( $(this).data('marker') ).removeClass('visible');
	});

	$('#depth-range').on('change', function(){
		var val = $(this).val();

		$('.range-legend .item[data-val]').removeClass('selected');
		$('.range-legend .item[data-val*=' + val + ']').addClass('selected');
	})

	// Product Images
	$('[data-big-image]').click(function(){
		$('.big-image img').attr('src', $(this).data('big-image'));
		$(this).addClass('selected').siblings().removeClass('selected');
	});

	$('[data-big-image]:first-child').click();

	// Kit Products
	$('[data-kit-value]').click(function(){
		$(this).siblings('input').click();
	});

	// Clutch
	// $(document).ready(function($){
	// 	//function to check if the .cd-image-container is in the viewport here
	// 	// 
		
	// 	//make the .cd-handle element draggable and modify .cd-resize-img width according to its position
	// 	$('.cd-image-container').each(function(){
	// 		var actual = $(this);
	// 		drags(actual.find('.cd-handle'), actual.find('.cd-resize-img'), actual);
	// 	});

	// 	//function to upadate images label visibility here
	// 	// 
	// });

	// //draggable funtionality - credits to http://css-tricks.com/snippets/jquery/draggable-without-jquery-ui/
	// function drags(dragElement, resizeElement, container) {
	// 	dragElement.on("mousedown vmousedown", function(e) {
	// 		dragElement.addClass('draggable');
	// 		resizeElement.addClass('resizable');

	// 		var dragWidth = dragElement.outerWidth(),
	// 			 xPosition = dragElement.offset().left + dragWidth - e.pageX,
	// 			 containerOffset = container.offset().left,
	// 			 containerWidth = container.outerWidth(),
	// 			 minLeft = containerOffset + 10,
	// 			 maxLeft = containerOffset + containerWidth - dragWidth - 10;
			  
	// 		dragElement.parents().on("mousemove vmousemove", function(e) {
	// 			leftValue = e.pageX + xPosition - dragWidth;
					
	// 			//constrain the draggable element to move inside its container
	// 			if(leftValue < minLeft ) {
	// 				leftValue = minLeft;
	// 			} else if ( leftValue > maxLeft) {
	// 				leftValue = maxLeft;
	// 			}

	// 			widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';

	// 			$('.draggable').css('left', widthValue).on("mouseup vmouseup", function() {
	// 				$(this).removeClass('draggable');
	// 				resizeElement.removeClass('resizable');
	// 			});

	// 			$('.resizable').css('width', widthValue); 

	// 			//function to upadate images label visibility here
	// 			// ...

	// 		}).on("mouseup vmouseup", function(e){
	// 			dragElement.removeClass('draggable');
	// 			resizeElement.removeClass('resizable');
	// 		});
	// 		e.preventDefault();
	// 	}).on("mouseup vmouseup", function(e) {
	// 		dragElement.removeClass('draggable');
	// 		resizeElement.removeClass('resizable');
	// 	});
	// }

	$('.clutch-component .cmp-card').click(function(){
		if ( $(window).width() <= 575 ) {
			$(this).find('p:not(.card-name)').stop().slideToggle(300);
		}
	});

	// Calc
	$('[data-step]').click(function(e){
		e.preventDefault();

		var step = $(this).data('step') * 1;

		$('.calc-component .info-line span').text(step);

		$('.calc-component .progress-line li').removeClass('current active');

		var i = 1;
		$('.calc-component .progress-line li').each(function(){
			if (i < step) {
				$(this).addClass('active');
			} else if(i == step){
				$(this).addClass('current');
			}

			i++;
		});

		$('.steps-track').height( $('.calc-step-' + step).height() );

		$('.calc-component .cmp-steps').removeClass('active-step-1 active-step-2 active-step-3');
		$('.calc-component .cmp-steps').addClass('active-step-'+step);
	});

	$('.steps-track').height( $('.calc-step-1').height() );

	// About Slider
	$('.about-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true
	});

	$('.products-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 6,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	$('.recommendations-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	$('.patents-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	$('.projects-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	$('.projects-slider').on('setPosition', function () {
		$(this).find('.slick-slide').height('auto');
		var slickTrack = $(this).find('.slick-track');
		var slickTrackHeight = $(slickTrack).height();
		$(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
	});

	// Lightbox
	lightbox.option({
		'resizeDuration': 500,
		'wrapAround': true,
		'disableScrolling': true,
		'albumLabel': "Изображение %1 of %2"
	})

	// Sticky Header
	var isSticky = false;

	$(window).scroll(function(){
		if( !isSticky && $(window).scrollTop() > 20 ){
			$('.header').addClass('sticky');
			isSticky = true;
		} else if(isSticky && $(window).scrollTop() <= 20){
			$('.header').removeClass('sticky');
			isSticky = false;
		}
	});

	// Parallax
	$('[id*="parallax-viewport"]').each(function(){
		var scene = document.getElementById( $(this).attr('id') );
		var parallaxInstance = new Parallax(scene);
	});

	// Tabs
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(500).siblings('.tab').hide(0);
		// dest.addClass('visible').siblings('.tab').removeClass('visible');
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab]:first-child").trigger('click');

	// Form Fields


	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});