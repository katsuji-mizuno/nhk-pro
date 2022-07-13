
/****************************************
記事がない場合はリンクを非表示
****************************************/

$(function(){
    if($('#あ行').text() === 'あ行'){
        $('.kana_menu_a').show();
    }
    if($('#か行').text() === 'か行'){
        $('.kana_menu_k').show();
    }
    if($('#さ行').text() === 'さ行'){
        $('.kana_menu_s').show();
    }
    if($('#た行').text() === 'た行'){
        $('.kana_menu_t').show();
    }
    if($('#な行').text() === 'な行'){
        $('.kana_menu_n').show();
    }
    if($('#は行').text() === 'は行'){
        $('.kana_menu_h').show();
    }
    if($('#ま行').text() === 'ま行'){
        $('.kana_menu_m').show();
    }
    if($('#や行').text() === 'や行'){
        $('.kana_menu_y').show();
    }
    if($('#ら行').text() === 'ら行'){
        $('.kana_menu_r').show();
    }
    if($('#わ行').text() === 'わ行'){
        $('.kana_menu_w').show();
    }
});
