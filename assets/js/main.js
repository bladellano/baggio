$(function(){
	

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