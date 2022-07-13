<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='展覧会ほか各種イベント、エンターテイメント、文化事業などの企画、制作、実施、運営および放送番組、各種映像ソフトなどの企画、制作、販売を実施。NHKプロモーションのホームページです。'>
<meta name="keywords" content="NHK,NHKグループ,NHK関連団体,プロモーション,アート,四大文明,美術展,N響,NHK交響楽団,Promotions,展覧会,コンサート,イベント,おかあさんといっしょ,ファミリーコンサート,講演会,講師派遣,プレゼント,図録販売">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/form.css">

<!-- for Page -->
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="contact_nhkp">
  <section class="post_wrap">

  <div class="contact_tit">
    <h1>お問い合わせ</h1>
    <span>NHKプロモーションに関するお問い合わせ</span>
  </div>

  <div class="contact_txt">
    <p>下記欄に必要事項をご入力の上「確認画面へ」ボタンをクリックしてください。<br />
    ※<span>必須</span>と記載された項目は必ずご入力ください。</p>
  </div>


  <?php the_content(); ?>

  </section>
</div>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>

