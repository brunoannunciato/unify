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

     var rightAnswer = $('.ask-radio[data-correct=1]'),
      points = 0,
      score = $('#points');

      rightAnswer.each(function() {
          if($(this).is(':checked')) {
            points++;
          }
      });

      score.val(points);
  })


  setInterval(function() {
    if($('.question').hasClass('slick-active')) {
      $('.slick-active').find('.timer-bar').addClass('actived')
    }
  }, 500)

  $('.quiz-container').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    console.log("estamos no", nextSlide);

    if (nextSlide == 9) {
      $('.slick-jump, .slick-next').addClass('hide');
      $('.send-button').addClass('show');

      setTimeout(function() {
        $('.send-button').click();
      }, 30000)

    }
  });
}
