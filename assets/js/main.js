 $(function(){

 	$('a[data-target="#agendar-visita"]').click(function(e) {
 		$(this).hide();
 	});

 	$('a.btnNode').click(function(e) {
 		$(this).toggleClass('active');
 	});

 	$('.btn-close').click(function(e) {
 		$('#map-of-interest').fadeOut();
 	});

 	renderMap();/* Atualiza o mapa na tela. */

	updateHeightFilter(); /* Atualiza a altura do filtro ao lado. */

	const heightFilter = $('.filter').height(); /* Pega altura atual */

	$(window).resize(function() { /* Atualiza a altura do filtro quando redimensionada a janela. */
		updateHeightFilter(heightFilter);
	});

 	$("#btnExpandMap").click(function() {

 		/* Alterna os botões de expandir */
 		if($(".mapColapse").hasClass('activeMap')){

 			updateHeightFilter(heightFilter);
 			$('.result').css('height','100%')
 			$('.fas.fa-expand-arrows-alt').show();
 			$('.fas.fa-compress-arrows-alt').hide();
 			$('.wrap-btn-node').fadeOut();
 			$('#map-of-interest').fadeOut();
 			
 		} else {
 			updateHeightFilter();
 			$('.result').css('height',$('.filter').height()).css('top','auto');
 			$('.fas.fa-expand-arrows-alt').hide();
 			$('.fas.fa-compress-arrows-alt').show();
 			$('.wrap-btn-node').fadeIn();
 			$('#map-of-interest').fadeIn();
 		}

 		refreshMap();

 		$(".mapColapse").toggleClass("activeMap");
 		$(".result").toggleClass("activeResult");
 	});

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

 		/* Main Title Sales */

 		if (window.pageYOffset > 300) {
 			$('.property-details').css({
 				'position':'relative',
 				'top':(window.pageYOffset - 200) +'px'
 			});
 		} else {

 			$('.property-details').css({
 				'position':'inherit',
 				'top':'0'
 			});
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

 function updateHeightFilter(_height){

 	let diference = 400;
 	let height = _height || $(document).height();

 	if(_height) {
 		$('.filter').css('height', height+'px');
 	} else {
 		$('.filter').css('height', height - diference+'px');
 	}
 }

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

 function refreshMap(){
 	setTimeout(function(){
 		$('#map').remove();	
 		$('.mapColapse').append('<div id="map" class="map"></div>');
 		renderMap();
 		$('#btnExpandMap').css('z-index','999');
 		$('.wrap-btn-node').css('z-index','998');
 	},500);
 }

 function renderMap(){
 	var map = new ol.Map({
 		target: 'map',
 		layers: [
 		new ol.layer.Tile({
 			source: new ol.source.OSM()
 		})
 		],
 		view: new ol.View({
 			center: ol.proj.fromLonLat([37.41, 8.82]),
 			zoom: 4
 		})
 	});
 }
