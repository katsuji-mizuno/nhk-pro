
/*--------------------------------------
住所の自動入力
--------------------------------------*/

jQuery( '#zip' ).keyup( function() {
  AjaxZip3.zip2addr( this, '', 'pref', 'address' );
});



