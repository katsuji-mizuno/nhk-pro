<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='展覧会ほか各種イベント、エンターテイメント、文化事業などの企画、制作、実施、運営および放送番組、各種映像ソフトなどの企画、制作、販売を実施。NHKプロモーションのホームページです。'>
<meta name="keywords" content="NHK,NHKグループ,NHK関連団体,プロモーション,アート,四大文明,美術展,N響,NHK交響楽団,Promotions,展覧会,コンサート,イベント,おかあさんといっしょ,ファミリーコンサート,講演会,講師派遣,プレゼント,図録販売">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/contact.css">

<!-- for Page -->
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main">
  <section class="post_wrap">

    <h1>お問い合わせ</h1>
    <div class="tit_sub">下記ボタンから、<br class="sp">お問い合わせ内容をお選びください。</div>
    <div class="contact_menu">
      <ul>
        <li class="event">
          <a href="<?php echo home_url(); ?>/contacts/event/"><span>①</span><h2>展覧会・イベント企画や映像コンテンツ制作に関するお問い合わせはこちら</h2></a>
          <p>展覧会、イベント、映像コンテンツなどの企画についてのご相談をお受けしています。お気軽にお問い合わせください。</p>
        </li>
        <li class="lecture">
          <a href="<?php echo home_url(); ?>/contacts/lecture/"><span>②</span><h2>講師派遣に関するお問い合わせはこちら</h2></a>
          <p>講演会、セミナー等の講師派遣についてのご相談をお受けしております。お気軽にお問い合わせください。</p>
        </li>
        <li class="nhkp">
          <a href="<?php echo home_url(); ?>/contacts/nhkp/"><span>③</span><h2>上記以外のNHKプロモーションに<br />関するお問い合わせはこちら</h2></a>
          <p>上記[1]・[2]以外のご相談、お問い合わせをお受けしております。</p>
        </li>
      </ul>
    </div>

    <div class="contact_tel">
      <div class="contact_tel_tit">お電話もしくはFAXでのお問い合わせは<br class="sp">こちらからお願いします。</div>
      <div class="contact_tel_txt">
        <div class="txt_tel">
          <h3><div class="txt_icon">TEL</div>03-5790-6420<span>（代表）</span></h3>
          <p>※月～金<span class="red">午前11時～午後5時</span><br class="sp">（祝祭日・年末年始等を除く）</p>
        </div>
        <div class="txt_fax">
          <h3><div class="txt_icon">FAX</div>03-5790-0308</h3>
        </div>
      </div>
      <div class="contact_message">
        ※弊社では、新型コロナウイルス感染予防の対策として、お電話でのお問い合わせは、４月６日（月）より、当面の間、平日の午前11時から午後5時までとさせていただきますのでご了承ください。
      </div>
    </div>

    <div class="for_wrap">
      <div class="for_evnet">
        <h3><span>イベントご来場のみなさまへ</span></h3>
        <p>開催展覧会・イベント情報については、それぞれのご案内ページに掲載されているお問い合わせ先のお電話番号にご連絡ください。</p>
        <div><a href="<?php echo home_url(); ?>/">開催展覧会・イベント情報一覧</a></div>
      </div>
      <div class="for_catalog">
        <h3><span>展示会の図録購入希望の方へ</span></h3>
        <p>在庫のある図録は販売することができます。下記ボタンをクリックしてご確認ください。</p>
        <div><a href="<?php echo home_url(); ?>/catalog/">図録販売</a></div>
      </div>
    </div>

    <div class="about_program">
        <h3><span>NHKの番組に関するお問い合わせ</span></h3>
        <p class="about_program_txt">下記のホームページまたはナビダイヤルからお問い合わせください。</p>

        <div class="program_icon">
          <div class="program_hp">
            <div>
              <img src="<?php bloginfo('template_url'); ?>/assets/images/contact/icon_hp.png" alt="ホームページからのお問い合わせ" />
            </div>
            <h4>
              <p>ホームページからのお問い合わせ</p>
              <span><a href="http://www.nhk.or.jp/css/" target="_blank" rel="noopener noreferrer">http://www.nhk.or.jp/css/</a></span>
            </h4>

          </div>

          <div class="program_tel_wrap">
            <div class="program_tel">
              <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/contact/icon_tel.png" alt="お電話でのお問い合わせ" />
              </div>
              <h4>
                <p>お電話でのお問い合わせ</p>
                <span>NHKふれあいセンター（ナビダイヤル）</span>
                <span><b>TEL</b>0570-066-066</span>
              </h4>
            </div>
            <div class="program_tel_message">IP電話等のお客さまで上記のナビダイヤルがご利用になれない場合には050-3786-5000 へおかけください。</div>
          </div>
        </div>

    </div>





  </div>
</div>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>

