var swiper = new Swiper('.swiper-container', {
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev'
	},
	slidesPerView: 1,
	spaceBetween: 10,
	// init: false,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},


	breakpoints: {
	  620: {
		slidesPerView: 1,
		spaceBetween: 20,
	  },
	  680: {
		slidesPerView: 2,
		spaceBetween: 40,
	  },
	  920: {
		slidesPerView: 3,
		spaceBetween: 40,
	  },
	  1240: {
		slidesPerView: 4,
		spaceBetween: 50,
	  },
	}
    });
	
	// ***************************splider**************************
	
	new Splide( '.slider1',{
		perPage: 3,
		focus  : 0,
		omitEnd: true,
		type    : 'loop',
		arrows: true,
		autoplay: true,
		pagination: false,
		snap:  false,
		template :'default',
		height: '40rem',
		direction:"ttb",
		
		
	} ).mount();
	new Splide( '.slider2',{
		perPage: 1,
		focus  : 0,
		omitEnd: true,
		type    : 'loop',
		arrows: true,
		autoplay: true,
		pagination: false,
		snap:  false,
		
		
	} ).mount();
	new Splide( '.slider3' ).mount();
	
	
	
	
	