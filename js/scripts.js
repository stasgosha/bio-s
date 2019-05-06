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

	// Clutch
	$('.clutch-comparsion').diffWidget({
		'top': 'img/clutch-before.png',
		'bottom': 'img/clutch-after.png',
		'width': '313px',
		'height': '323px'
	});

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
		infinite: true
	});

	$('.patents-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: false
	});

	$('.projects-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true
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
		if( !isSticky && $(window).scrollTop() > 120 ){
			$('.header').addClass('sticky');
			isSticky = true;
		} else if(isSticky && $(window).scrollTop() <= 120){
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