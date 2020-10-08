$(function(){
    	// NOVO

    /*Botão Lista/Mapa*/
    $('.btn-change-list-or-map').click(function(e){
        $('.resultado').toggle();
        $('.mapColapse').toggle();
        if(String($('.mapColapse').attr('style')).length == 14)
            return $(this).html('VER NO MAPA');
        return $(this).html('VER EM LISTA');
    });

    /*Abre/Fecha Filter*/

    $('.btn-filter-mobile').click(function(e) {
        e.preventDefault();
        $('.input-search-filter').hide();
        $('.mapColapse').hide();
        $('.resultado').hide();
        $('.box-filter-close').addClass('active');
        $('.wrap-filter').show();
    });
    $('.btn-filter-close').click(function(e) {
        $('.input-search-filter').show();
        $('.mapColapse').show();
        $('.box-filter-close').removeClass('active');
        $('.wrap-filter').hide();
    });

    /* Inicializa lib swiper */
    var swiper = new Swiper('.swiper-container', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

    /* Troca display conforme clica no botões */
    $('.btn.btn-primary.btn-sm[id]').click(function(e) {
        e.preventDefault();
        let id =  $(this).attr('id');
        $('.click-box').hide();
        $('.show-360').removeClass('d-flex');
        $(`.show-${id}`).fadeIn();
    });

    // renderMap();/* Atualiza o mapa na tela na parte superior */

    $('#btnExpandMap').click(function(e) {
        $('.wrap').toggleClass('map-expanded');
    });

    $('#btn-load-more').click(function(){
        /* RETIRAR SOMENTE ESTE APPEND, ESTÁ SÓ PRA TESTE. */
        /* ..ATÉ AQUI. */

        $('html, body').animate({
            scrollTop: $(document).height()
        }, 500);
    });

    $('a.btnNode').click(function(e) {
        $(this).toggleClass('active');
    });

    $('.btn-close').click(function(e) {
        $('#map-of-interest').fadeOut();
    });

    $("#btnExpandMap").click(function() {

        if($(".mapColapse").hasClass('activeMap')){
            $('.fas.fa-expand-arrows-alt').show();
            $('.fas.fa-compress-arrows-alt').hide();
            $('.wrap-btn-node').fadeOut();
            $('#map-of-interest').fadeOut();

        } else {
            $('.fas.fa-expand-arrows-alt').hide();
            $('.fas.fa-compress-arrows-alt').show();
            $('.wrap-btn-node').fadeIn();
            $('#map-of-interest').fadeIn();
        }

        // refreshMap();

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
        /* Box azul da tela perfil-imóvel */
        if (window.pageYOffset > 300) {
            $('.property-details:not(.not-onscroll)').css({
                'position':'relative',
                'top':(window.pageYOffset - 180) +'px',
                'z-index':'100'
            });
        } else {
            $('.property-details:not(.not-onscroll)').css({
                'position':'inherit',
                'top':'0'
            });
        }
    }

    $('.btn-close-details').click(function(e) {
        $('#agendar-visita').removeClass('show');
        $('.property-details table,[data-target="#ver-todas-as-taxas"]').show();
        $('a[data-target="#agendar-visita"]').show();
        $(this).hide();
    });

    /* Botao "AGENDAR VISITA", retira o efeito de fixed da box azul */
    $('a[data-target="#agendar-visita"]').click(function(){
        $('.btn-close-details').show();
        $(this).hide();

       /* $('.property-details').css({
            'position':'inherit',
            'top':'0'
        }).addClass('not-onscroll');*/

        $('.property-details table,[data-target="#ver-todas-as-taxas"]').hide();

        /*	$('html, body').animate({
            scrollTop: 200
        }, 500);*/
    });

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

// function refreshMap(){
//     setTimeout(function(){
//         $('#map').remove();
//         $('.mapColapse').append('<div id="map" class="map"></div>');
//         renderMap();
//         $('#btnExpandMap').css('z-index','999');
//         $('.wrap-btn-node').css('z-index','998');
//     },500);
// }

// function renderMap(){
//     var map = new ol.Map({
//         target: 'map',
//         layers: [
//         new ol.layer.Tile({
//             source: new ol.source.OSM()
//         })
//         ],
//         view: new ol.View({
//             center: ol.proj.fromLonLat([37.41, 8.82]),
//             zoom: 4
//         })
//     });
// }
