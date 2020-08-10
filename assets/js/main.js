$(function(){

	/* Jquery UI - Range */

	$( "#slider-range" ).slider({
		range: true,
		min: 100,
		max: 250000,
		values: [ 10000, 55000 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			$('.wrap-values-range #v-left').html('<div>R$ '+ $( "#slider-range" ).slider( "values", 0 )  +'</div>');
			$('.wrap-values-range #v-right').html('<div>R$ '+ $( "#slider-range" ).slider( "values", 1 ) +'</div>');
		}
	});

	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		" - $" + $( "#slider-range" ).slider( "values", 1 ) );


	/* Validando ainda...  */
	window.onresize = ()=>{
		if (window.innerWidth <= 576) {
			// $('.wrap-result > ul').addClass(['slick-card-spotlight','slick-initialized','slick-slider','slick-dotted']);   
		} else {
			// $('.wrap-result > ul').removeClass('slick-card-spotlight');
		}
	}

	
	window.onscroll = () => {

		/* Fixed Topo */		
		if (window.pageYOffset > 100) {
			$('.navbar').addClass('fixed-top');
		} else {
			$('.navbar').removeClass('fixed-top');
		}

		/* Main Title Sales */
		if (window.pageYOffset > 272) {
			$('.main-title-sales').css('top',window.pageYOffset +'px');
		} else {
			$('.main-title-sales').css('top','absolute');
		}
	}

	/* Slick Card Spotlight */
	$('.slick-card-spotlight').slick({
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
	
	/* Slick Card Blog */

	$('.slick-card-blog').slick({
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

function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}
function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); 
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); 
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); 
    return v;
}