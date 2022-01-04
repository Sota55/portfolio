
$(function() {

    // トップタイトルアニメーション
    const $target = $(".top-title");
    setInterval(() => {
    $target.addClass('-visible');
    setTimeout(() => {
        $target.removeClass('-visible');
    }, 2000);
    }, 2000 * 2);

    //spメニュー
      $('.js-toggle-sp-menu').on('click', function() {
        $(this).toggleClass('active');
        $('.js-toggle-sp-menu-target').toggleClass('active');
      });

      // フロートヘッダーメニュー
        var targetHeight = $('.js-float-menu-target').height();
        $(window).on('scroll', function() {
            $('.js-float-menu').toggleClass('float-active', $(this).scrollTop() > targetHeight);
        });
    
    //   $('.slick01').slick({
    //         accessibility: false,
    //         fade: true,
    //         autoplay: true,
    //         infinite: true,
    //         dots: true,
    //         arrows: false,
    //         autoplaySpeed: 4000,
    //         speed: 4000,
    //   });
      
      function fadeAnime(){
      //fadein-trigger
      $('.fadeInUpTrigger').each(function(){
        var elemPos = $(this).offset().top-50;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if(scroll >= elemPos - windowHeight) {
          $(this).addClass('fadeUp');
        }else{
          $(this).removeClass('fadeUp');
        }
      });
      }
    
      // 画面をスクロールをしたら動かしたい場合の記述
      $(window).scroll(function (){
        fadeAnime();/* アニメーション用の関数を呼ぶ*/
      });// ここまで画面をスクロールをしたら動かしたい場合の記述


      var $ftr = $('#footer');
      if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
        $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) +'px;' });
      }
    
    });
    