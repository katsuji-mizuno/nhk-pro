/****************************************
記事がない場合は項目を非表示
****************************************/

$('.kana_wrap').each(function() {
    if($(this).find('.tax_list')[0]){

    }
    else{
        $(this).addClass('no_post');
    }
});


$(".no_post").empty();



$('.else_list').each(function() {
    if($(this).find('.else_text')[0]){

    }
    else{
        $(this).addClass('no_post');
    }
});
