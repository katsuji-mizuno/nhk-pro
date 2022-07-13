//ブラウザの判定
var wWidth = 0;
var wHeight = 0;
var headHeight = 0;
var headHeightSp = 0;
var headHeightPc = 0;
var bPoint = 750;
var bPoint2 = 1240;

/* getWidth */
function getWidth() {
  wWidth = window.innerWidth;
  return wWidth;
}

/* getHeight */
function getHeight() {
  wHeight = window.innerHeight;
  return wHeight;
}

/* ReLayout */
function ReLayout() {

  wWidth = getWidth();
  wHeight = getHeight();

  // body padding top
  if(wWidth <= bPoint) {
    headHeight = headHeightSp;
  } else {
    headHeight = headHeightPc;
  }

}
//ReLayout();

$(function () {
  getWidth();
  getHeight();
  /* for IE */
  var agent = navigator.userAgent;
  var userAgent = window.navigator.userAgent.toLowerCase();
  if (userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/)) {
    var isIE = true;
    $("html").addClass('ie');
    var ieVersion = userAgent.match(/((msie|MSIE)\s|rv:)([\d\.]+)/)[3];
    ieVersion = parseInt(ieVersion);
  } else {
    var isIE = false;
    $("html").removeClass('ie');
  }

  /* IEでの fixed カクつき防止 */
  if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge\/12\./)) {
    $('body').on("mousewheel", function () {
      event.preventDefault();
      var wd = event.wheelDelta;
      var csp = window.pageYOffset;
      window.scrollTo(0, csp - wd);
    });
  }

  var timer = false;
  $(window).resize(function () {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function () {
      var ww = $(window).width();
      if (wWidth != ww) {
        ReLayout();
        changeImage();
        changeImage2();
      }
    }, 200);
  });
});


//ブラウザの判定
$(function() {
   /* ユーザーエージェントの文字列を取得 */
      var useragent = window.navigator.userAgent.toLowerCase();

    /* ブラウザごとの条件分岐 */
    if (useragent.indexOf('msie') != -1 ||
          useragent.indexOf('trident') != -1) {
          //Internet Explorerに適応させたい内容
      } else if(useragent.indexOf('edge') != -1) {
          //Edgeに適応させたい内容
  } else if (useragent.indexOf('chrome') != -1) {
          //Chromeに適応させたい内容
  } else if (useragent.indexOf('safari') != -1) {
          //Safariに適応させたい内容
  } else if (useragent.indexOf('firefox') != -1) {
          //FireFoxに適応させたい内容
  } else if (useragent.indexOf('opera') != -1) {
          //Operaに適応させたい内容
  } else {
          //上記以外のブラウザに適応させたい内容
  };
});

// ブラウザバック
window.onpageshow = function(){
  setTimeout(function () {
    ReLayout();
  }, 200);
}

// loaded
$.event.add(window, 'load', function () {
  setTimeout(function () {
    ReLayout();
    changeImage();
    changeImage2();
  }, 200);
});

// changeImage
function changeImage() {
  if (wWidth <= bPoint) {
    if($('.change')[0]){
      $('.change').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
      });
    }
  } else {
    if($('.change')[0]){
      $('.change').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
      });
    }
  }
}
function changeImage2() {
  if (wWidth <= bPoint2) {
    if($('.change2')[0]){
      $('.change2').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
      });
    }
  } else {
    if($('.change2')[0]){
      $('.change2').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
      });
    }
  }
}


/****************************************
スクロールしたらクラス追加して、トップへ戻るボタンを下から出す。
****************************************/
$(function(){
  var wWidth = $(window).width();
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    var scrollHeight = 900;
    if (scrollTop > scrollHeight) {
      $('#toPageTop').addClass('scrollfixed');
      } else {
      $('#toPageTop').removeClass('scrollfixed');
    }
  });
});

/*--------------------------------------
  smooth scroll
--------------------------------------*/

jQuery(function($){
  $('a[href^="#"]').on('click', function(){
    var offset = 70;

    var href= $(this).attr("href");
    if (href.match('modal') == null) {

      if (window.innerWidth < 1025) {
        //スマホの場合の調整
        if ($('body').hasClass('open')) {
          $('body').removeClass("open");
        }
      }
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - offset;
      $('body,html').animate({scrollTop:position}, 800, 'swing');
      return false;
    }
  });

  $('#oPageTop').click(function () {
    $("html,body").animate({scrollTop:0},'300');
  });
});


/****************************************
　loading
****************************************/


$(window).on('load', function(){
  $('.loader-slide').addClass('open');
});

$(function () {
  var h = $(window).height();
  $('#loader').delay(500).queue(function(){
  	$('#loader').addClass('view');
  });

  //10秒たったら強制的にロード画面を非表示
  setTimeout(function () {
    stopload();
  }, 10000);
});
$.event.add(window, 'load', function () {
  $('#pageWrapper').addClass('view');
  $('#loader').delay(100).fadeOut(300);
});
function stopload(){
  $('#pageWrapper').addClass('view');
  $('#loader').delay(600).fadeOut(300);
}

/****************************************
menu open
****************************************/

$(function () {
  $('#siteHead .menu').on('click',function(){
    $(this).toggleClass('open');
    if($(this).hasClass('open')){
      $('#gNav').addClass('open');
    } else {
      $('#gNav').removeClass('open');
    }
  });
  $('#gNav li a').on('click',function(){
    $('#siteHead .menu').removeClass('open');
    $('#gNav').removeClass('open');
  });
  $('#gNav li a').on('click',function(){
    $('#siteHead .menu').removeClass('open');
    $('#gNav').removeClass('open');
  });
});


$(function () {
  if($('body#company').length){
    $('#tab1').removeClass('active');
    $('#tab2').addClass('active');
    $('.events').removeClass('active');
    $('.company').addClass('active');
  }
});





/****************************************
イベント情報　　法人のメニュー切り替え
****************************************/

$(function () {
  $('.events').on('click',function(){
    $(this).addClass('active');
    $('.company').removeClass('active');

    $('#tab1').slideDown(100);
    $('#tab2').slideUp(100);
  });
  $('.company').on('click',function(){
    $(this).addClass('active');
    $('.events').removeClass('active');

    $('#tab1').slideUp(100);
    $('#tab2').slideDown(100);
  });
});



/****************************************
<h2>の中に<span>を追加
****************************************/

$('#post_content h2').wrapInner('<span />');


