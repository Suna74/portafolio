$(document).ready(function () {


    var sliderList = $('#carousel-principal .carousel-inner .item');
    sliderList.each(function (index) {
        var video = $(this).find('#bgndVideo_' + index);
        if (video.length > 0) {
            video.mb_YTPlayer();
        }
    });
    var $carousel = $('#carousel-principal');
    var timerSlider;
    $carousel.carousel({ interval: false });
    $carousel.bind('slide.bs.carousel', function (e) {

        console.log($(e.relatedTarget).data('interval') * 1000);
        clearTimeout(timerSlider);
        timerSlider = setTimeout(
            function () {
                $carousel.carousel('next');
            },
            $(e.relatedTarget).data('interval') * 1000
        );


    });

    timerSlider = setTimeout(
        function () {
            $carousel.carousel('next');
        },
        $carousel.find('.item.active').data('interval') * 1000
    );

    var sliderVideoInterval = setInterval(function () { sliderVideoTimer() }, 500);

    function sliderVideoTimer() {
        var sliderVideo = $carousel.find('.item.active').find('.slider-conteudo-video');
        if (sliderVideo.length > 0) {
            jQuery(window).resize();
        }
    }
    $carousel.mouseenter(function () {
        clearTimeout(timerSlider);
        console.log("sliderMouseEnter");
    }).mouseleave(function () {
        console.log("sliderMouseLeave");
        clearTimeout(timerSlider);
        timerSlider = setTimeout(
            function () {
                $carousel.carousel('next');
            },
            $carousel.find('.item.active').data('interval') * 1000
        );
    });

});
