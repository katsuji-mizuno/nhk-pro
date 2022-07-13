
/*--------------------------------------
idやアンカーを作成


(function($) {
	$('.catalog_age a').each(function(i){
		$(this).attr('href','#catalog' + (i+1));
	});
  $('.catalog_area').each(function(i){
		$(this).attr('id','catalog' + (i+1));
	});
})(jQuery);

--------------------------------------*/

/****************************************
クリックした年度のみ表示させる

$(document).ready(function() {
  $('.catalog_area#catalog1').show();
  $('ul.tab_catalog li:first-of-type').addClass('active');
  $('ul.tab_catalog li').click(function() {
    if($(this).hasClass('active')){
      $(this).removeClass('active');
    }
    else{
      $(this).addClass('active');
    }
    $(jQuery(this).find('a').attr('href')).fadeToggle();
    return false;
  });
});



****************************************/

$('.category_wrap').each(function(index) {
  if($(this).find('.td_tit').length){
  }
  else {
    $(this).hide();
  }
});
