'use strict';

module.exports = function () {
    $('.quiz-container').slick({
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        accessibility: false,
        touchMove: false,
        infinite: true,
        draggable: false,
        autoplay: true,
        speed: 400,
        autoplaySpeed: 30000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        swipe: false
      })

      $('.slick-jump').on('click', function(){
        $(".quiz-container").slick('slickNext')
      })

      $('.slick-next').on('click', function(){
        $(".quiz-container").slick('slickNext')
      })
      
      
      setInterval(function() {
        if($('.question').hasClass('slick-active')) {
          $('.slick-active').find('.timer-bar').addClass('actived')
        }
      }, 500)

}