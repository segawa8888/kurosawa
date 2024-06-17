jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pageTop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  $(function(){
    $(".js-hamburger").click(function(){
      $(this).toggleClass('active');
      $(".g-nav").slideToggle(200);
    });
    $("#menu-header-menu .menu-item a").click(function(){
      $('.js-hamburger').removeClass('active');
      $(".g-nav").css({display:"none"});
    });
  });


  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 100;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  //swiper

  let swipeOption = {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
    speed: 2000,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    }
  }
  new Swiper('.swiper-container', swipeOption);

  //scroll_effect
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll('.scroll_up');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100;
      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('on');
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});

//フッター手前で止まる
$(document).ready(function () {
  $(window).on("scroll", function () {
    scrollHeight = $(document).height(); //ドキュメントの高さ
    scrollPosition = $(window).height() + $(window).scrollTop(); //現在の位置
    footHeight = $("footer").innerHeight(); //フッターの高さ
    if (scrollHeight - scrollPosition <= footHeight) { //ドキュメントの高さと現在の位置の差がフッターの高さ以下のとき
      $("#side").addClass('initial');
      $("#side").css({ position: "absolute", bottom: footHeight + 50 }); 
    } else { //それ以外の場合は
      $("#side").removeClass('initial');
      $("#side").css({ position: "fixed"}); //固定で表示
    }
  });
});

var swiper = new Swiper('.page-about__image .swiper', {
  slidesPerView: 1,
	loop: true,
    autoplay: { 
        delay: 3000, 
    }, 
  breakpoints: {
  768: {
    slidesPerView: 1.4, 
    spaceBetween: 4.6,
  },
},
});

$(function(){
  // 変数に要素を入れる
  var open = $('.modal-open'),
    close = $('.modal-close'),
    container = $('.modal-container');

  //開くボタンをクリックしたらモーダルを表示する
  open.on('click',function(){ 
    container.addClass('active');
    return false;
  });

  //閉じるボタンをクリックしたらモーダルを閉じる
  close.on('click',function(){  
    container.removeClass('active');
  });

  //モーダルの外側をクリックしたらモーダルを閉じる
  $(document).on('click',function(e) {
    if(!$(e.target).closest('.modal-body').length) {
      container.removeClass('active');
    }
  });
});

function load_effect() {
  var element = document.getElementsByClassName('load-fade');
  if(!element) return; // 要素がない場合は終了
  
  for(var i = 0; i < element.length; i++) { 
    element[i].classList.add('is-show');
  }
}
setTimeout(load_effect, 200); // 600ミリ秒経過後に実行

});