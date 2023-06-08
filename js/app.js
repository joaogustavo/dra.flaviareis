//navegacao link onepage
! function(a) {
    "use strict";
    a("a.pagina-rolagem").bind("click", function(e) {
        var l = a(this);
        a("html, body").stop().animate({
            scrollTop: a(l.attr("href")).offset().top - 100 //resevar a altura do topo quando chamar a secao
        }, 1250, "easeInOutExpo"), e.preventDefault()
    })
}(jQuery);

$(function() {
//ocultar btn subir ao carregar a pagina
	$('.subir').fadeOut();
//inicio funcao scroll
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
//navegacao principal adicionando/removendo classe para fixar menu
//        if (scroll >= 200) { //altura na tela px
//            $(".navegacao").addClass('navegacao-fixa');
//        } else {
//            $(".navegacao").removeClass("navegacao-fixa");
//        }
//btn subir transicoes
        if ($(this).scrollTop() > 220) { //altura na tela px
            $('.subir').fadeIn();
        } else {
            $('.subir').fadeOut();
        }
    });
//btn subir acao subir
    $('.subir').click(function () {
        $("html, body").animate({
            scrollTop: 0 //altura na tela px
        }, 1000); //velocidade
        return false;
    });
});
// ativando funcao modaal fullscreen usando no menu mobile(<768px) agora
$('.fullscreen').modaal({
		fullscreen: true
});

//video home
/** Document Ready Functions **/
/********************************************************************/

$( document ).ready(function() {

    // Resive video
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');
        
    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

/** Reusable Functions **/
/********************************************************************/

function scaleVideoContainer() {

    var height = $(window).height();
    var unitHeight = parseInt(height) + 'px';
    $('.km-video').css('height',unitHeight);

}

function initBannerVideoSize(element){
    
    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
        windowHeight = $(window).height(),
        videoWidth,
        videoHeight;
    
    console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width'),
            windowAspectRatio = windowHeight/windowWidth;

        if (videoAspectRatio > windowAspectRatio) {
            videoWidth = windowWidth;
            videoHeight = videoWidth * videoAspectRatio;
            $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
        } else {
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
        }

        $(this).width(videoWidth).height(videoHeight);

        $('.km-video .video-container video').addClass('fadeIn animated');
        

    });
}