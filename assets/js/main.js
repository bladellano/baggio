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

function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}
function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}