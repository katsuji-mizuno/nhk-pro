
/*--------------------------------------
セレクトボックスで選んだ商品を、テキストボックスに記入
--------------------------------------*/
$(function() {

    // セレクトボックスで選択したvalue値を変数に格納
    var zurokuSelect1 = '';
    $('select[name=cat-dropdown1]').change(function(){
      zurokuSelect1 = $('select[name=cat-dropdown1]').val();
      if(zurokuSelect1 == ''){
        $('input[name="zuroku1"]').val('');
      }else{
        $('input[name="zuroku1"]').val(zurokuSelect1);
      }
    });

    var zurokuSelect2 = '';
    $('select[name=cat-dropdown2]').change(function(){
      zurokuSelect2 = $('select[name=cat-dropdown2]').val();
      $('input[name="zuroku2"]').val(zurokuSelect2);
    });

    var zurokuSelect3 = '';
    $('select[name=cat-dropdown3]').change(function(){
      zurokuSelect3 = $('select[name=cat-dropdown3]').val();
      $('input[name="zuroku3"]').val(zurokuSelect3);
    });


    // セレクトボックスで選択したvalue値を変数に格納
    var zurokuNum1 = '';
    $('select[name=num-dropdown1]').change(function(){
      zurokuNum1 = $('select[name=num-dropdown1]').val();
      if(zurokuNum1 == ''){
        $('input[name="zuroku_num1"]').val('');
      }else{
        $('input[name="zuroku_num1"]').val(zurokuNum1);
      }
    });

    var zurokuNum2 = '';
    $('select[name=num-dropdown2]').change(function(){
      zurokuNum2 = $('select[name=num-dropdown2]').val();
      $('input[name="zuroku_num2"]').val(zurokuNum2);
    });
    var zurokuNum3 = '';
    $('select[name=num-dropdown3]').change(function(){
      zurokuNum3 = $('select[name=num-dropdown3]').val();
      $('input[name="zuroku_num3"]').val(zurokuNum3);
    });

    if($('#required .error').length){
      console.log('test');
      $(".required").show();
    }

    if($('#required_num .error').length){
      console.log('test2');
      $(".required_num").show();
    }

    // セレクトボックスの選択が解除されるので、下のテキストフォームからバリューを取ってくる。
    var zurokuBack1 =  $('input[name="zuroku1"]').val();
    if( zurokuBack1 == ''){
    }
    else{
      $('select[name=cat-dropdown1]').val(zurokuBack1);
    }

    var zurokuBack2 =  $('input[name="zuroku2"]').val();
    if( zurokuBack2 == ''){
    }
    else{
      $('select[name=cat-dropdown2]').val(zurokuBack2);
    }

    var zurokuBack3 =  $('input[name="zuroku3"]').val();
    if( zurokuBack3 == ''){
    }
    else{
      $('select[name=cat-dropdown3]').val(zurokuBack3);
    }

    var zurokuNumBack1 =  $('input[name="zuroku_num1"]').val();
    if( zurokuNumBack1 == ''){
    }
    else{
      $('select[name=num-dropdown1]').val(zurokuNumBack1);
    }


    // リセットボタンを押したら、自前のセレクトボックスも空にする。
    $('input[type="reset"]').click(function() {
      $('select[name=cat-dropdown1]').val('');
      $('select[name=cat-dropdown2]').val('');
      $('select[name=cat-dropdown3]').val('');
      $('select[name=num-dropdown1]').val('');
      $('select[name=num-dropdown2]').val('');
      $('select[name=num-dropdown3]').val('');
    });

});




$('.more_list').on('click', function() {
  if(jQuery(this).hasClass('clicked')){
    $(this).removeClass('clicked');
    $('.accord_list').slideUp();
  }
  else{
    $(this).addClass('clicked');
    $('.accord_list').slideDown();
  }
});

