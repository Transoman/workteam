'use strict';

global.jQuery = require('jquery');
var svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  Rellax = require('rellax'),
  Swiper = require('swiper'),
  Imask = require('imask'),
  mPageScroll2id = require('page-scroll-to-id');

jQuery(document).ready(function($) {
  // Toggle nav menu
  $('.nav-toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.header__nav').toggleClass('open');
  });

  // Modal
  $('.modal').popup({
    transition: 'all 0.3s',
    onclose: function() {
      $(this).find('label.error').remove();
      $(this).find('.wpcf7-response-output').hide();
    }
  });

  new Rellax('.parallax');

  new Swiper('.partners-slider', {
    slidesPerView: 4,
    spaceBetween: 30,
    speed: 1000,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.partners-slider-control .swiper-pagination',
      type: 'fraction',
      formatFractionCurrent: function(number) {
        if (number < 10) {
          return '0' + number;
        }
      }
    },
    navigation: {
      nextEl: '.partners-slider-control .swiper-button-next',
      prevEl: '.partners-slider-control .swiper-button-prev',
    },
    breakpoints: {
      992: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 30
      },
    }
  });

  var contactForm = function() {
    $('.contact-form').each(function() {
      var submit = $(this).find('[type="submit"]');
      var button = $(this).find('[data-contact-btn] button');

      if (submit.length) {
        button.find('.text').html(submit.val());
        submit.replaceWith(button);
        $(this).find('.ajax-loader').remove();
      }
    });

    // Loader
    $('.contact-form form').on('submit', function () {
      var btn = $(this).find('.btn');

      if (btn.hasClass('btn-link')) {
        btn.addClass("btn-loading");
        btn.find('.text').css('display', 'none');
      } else {
        btn.addClass("btn-loading");
      }
    });

    $('.wpcf7').on('wpcf7spam wpcf7invalid wpcf7mailsent wpcf7mailfailed', function (e) {
      var form = $('.contact-form');
      $(form).find('.btn').removeClass("btn-loading");
    });
  };

  $('.order-vacancy_open').click(function() {
    var title = $(this).parent().find('.vacancy-list__title').text();
    $('#order-vacancy form').find('input[name="vacancy-name"]').val(title);
  });

  $('.scroll-nav a').mPageScroll2id({
    highlightSelector: '.scroll-nav a',
    forceSingleHighlight: true
  });

  $(window).scroll(function() {
    if ($('.scroll-nav a[href="#hero"]').hasClass('mPS2id-highlight')) {
      $('.scroll-nav a[href="#hero"]').parent().parent().addClass('is-active');
    }
    else {
      $('.scroll-nav ul').removeClass('is-active');
    }
  });

  setTimeout(function() {
    if ($('.scroll-nav a[href="#hero"]').hasClass('mPS2id-highlight')) {
      $('.scroll-nav a[href="#hero"]').parent().parent().addClass('is-active');
    }
  }, 500);

  var inputMask = function() {
    var inputMask = $('input[type="tel"]');
    var maskOptions = {
      mask: '+{7} (000) 000-00-00'
    };

    if (inputMask.length) {
      inputMask.each(function(i, el) {
        IMask(el, maskOptions);
      });
    }

  };

  $('body').on('click', '.load-news', function(e) {
    e.preventDefault();
    $(this).text('Загружаю...');

    var data = {
      'action': 'load_more_post',
      'query': true_posts,
      'page' : current_page
    };
    $.ajax({
      url: window.wp_data.ajax_url, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      beforeSend: function() {
        $('#response').addClass('active');
      },
      success:function(data){
        if( data ) {
          $('.load-news').text('Смотреть еще'); // вставляем новые посты
          $('#response').append(data);
          $('#response').removeClass('active');
          current_page++; // увеличиваем номер страницы на единицу
          if (current_page == max_pages) $('.load-news').remove(); // если последняя страница, удаляем кнопку
          $('.modal').popup({
            transition: 'all 0.3s',
            onclose: function() {
              $(this).find('label.error').remove();
              $(this).find('.wpcf7-response-output').hide();
            }
          });
        } else {
          $('.load-news').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });

  contactForm();
  inputMask();

  // SVG
  svg4everybody({});
});