$(function(){

	/* Fixed Topo */
	window.onscroll = () => {
		if (window.pageYOffset > 100) {
			$('.navbar').addClass('fixed-top');
		} else {
			$('.navbar').removeClass('fixed-top');
		}
	}
	
	/* Partners-slick */

	$('.partners-slick').slick({
		infinite: true,
		slidesToShow: 5,
		responsive: [
		{
			breakpoint: 800,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				arrows:false,
				dots:true
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: true,
				dots: true,
				arrows: false,
			}
		}
		]
	});

});