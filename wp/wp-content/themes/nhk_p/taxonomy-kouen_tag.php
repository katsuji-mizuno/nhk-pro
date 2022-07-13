<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='展覧会ほか各種イベント、エンターテイメント、文化事業などの企画、制作、実施、運営および放送番組、各種映像ソフトなどの企画、制作、販売を実施。NHKプロモーションのホームページです。展覧会のページ。'>
<meta name=”keywords” content="NHK,NHKグループ,NHK関連団体,プロモーション,アート,四大文明,美術展,N響,NHK交響楽団,Promotions,展覧会,コンサート,イベント,おかあさんといっしょ,ファミリーコンサート,講演会,講師派遣,プレゼント,図録販売,展覧会">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/kouen.css">
</head>


<body id="company" class="com_kouen">
<?php get_template_part('parts_header'); ?>

<div id="main">

<div class="breadcrumb">
  <ul>
    <li><a href="<?php echo home_url(); ?>/">トップページ</a></li>
    <li><a href="<?php echo home_url(); ?>/">法人向けトップ</a></li>
    <li><a href="<?php echo home_url(); ?>kouen">講演会・講師派遣</a></li>
    <li><span><?php single_term_title( ); ?></span></li>
  </ul>
</div>

  <h1>講師派遣<span><?php single_term_title( ); ?></span></h1>

<!--カテゴリーの取得-->
<?php
  $terms = get_the_terms($post->ID, 'kouen_tag');
  // 複数のカスタム分類を指定する場合は配列を使用する
  // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));

  if ( $terms ) {
    foreach ( $terms as $term ) {
    $term_link = get_term_link( $term );
    }
  }
?>

<?php
$args = array(
  'taxonomy'=>'kouen_tag',
  'orderby' => 'count',
  'order' => 'DESC',
);
$terms = get_tags( $args );
$list_src = "";

foreach ( $terms as $t ) {
  $list_src .= '<li><a href="'. get_term_link($t) .'">'. $t->name .'</a></li>';
}
echo '<ul class="tag_menu">'. $list_src .'</ul>';
?>

<?php
  // 正規表現パターン
  $kana = array(
    'あ行' => '^(あ|い|う|え|お)+',
    'か行' => '^(か|き|く|け|こ|が|ぎ|ぐ|げ|ご)+',
    'さ行' => '^(さ|し|す|せ|そ|ざ|じ|ず|ぜ|ぞ)+',
    'た行' => '^(た|ち|つ|て|と|だ|ぢ|づ|で|ど)+',
    'な行' => '^(な|に|ぬ|ね|の)+',
    'は行' => '^(は|ひ|ふ|へ|ほ|ば|び|ぶ|べ|ぼ|ぱ|ぴ|ぷ|ぺ|ぽ)+',
    'ま行' => '^(ま|み|む|め|も)+',
    'や行' => '^(や|ゆ|よ)+',
    'ら行' => '^(ら|り|る|れ|ろ)+',
    'わ行' => '^(わ|を|ん)+'
  );
?>

<div class="kana_menu">
  <ul>
    <li class="kana_menu_a"><a href="#あ行">あ行</a></li>
    <li class="kana_menu_k"><a href="#か行">か行</a></li>
    <li class="kana_menu_s"><a href="#さ行">さ行</a></li>
    <li class="kana_menu_t"><a href="#た行">た行</a></li>
    <li class="kana_menu_n"><a href="#な行">な行</a></li>
    <li class="kana_menu_h"><a href="#は行">は行</a></li>
    <li class="kana_menu_m"><a href="#ま行">ま行</a></li>
    <li class="kana_menu_y"><a href="#や行">や行</a></li>
    <li class="kana_menu_r"><a href="#ら行">ら行</a></li>
    <li class="kana_menu_w"><a href="#わ行">わ行</a></li>
</ul>
</div>

<section class="post_wrap">

  <?php
    $counter = 0;
    foreach ($kana as $index => $pattern) {
  ?>

  <?php $paged = get_query_var('paged'); ?>

  <div class="kana_wrap">
    <ul class="kana_tit">
      <li>
          <?php echo '<span id="'. $index .'">'. $index .'</span>'; ?>
      </li>
    </ul>

  <ul class="item_list">
  <?php if (have_posts()): ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <?php
        $pattern = '/(^.{1})(.+)/u';
        $subject = post_custom('kana');
        $matches = array();
        preg_match($pattern, $subject , $matches);
        if ($matches[2] != '') {
        $out = $matches[1];
        } else {
        $out = $subject;
        }
  ?>

  <?php
    if(strpos($kana[$index],$out) !== false){
  ?>

  <li class="tax_list">
    <a href="<?php the_permalink(); ?>">
      <div class="thumnail">
        <?php if (has_post_thumbnail()) : ?><!-- アイキャッチあればそれを表示 -->
              <?php the_post_thumbnail('full'); ?>
        <?php else : ?><!-- アイキャッチなければデフォルト画像 -->
            <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
        <?php endif ; ?>
      </div>
      <div class="item_text">
        <h2 class="item_tit poppins"><?php the_title(); ?></h2>
        <div class="job"><?php the_field('job'); ?></div>
        <div class="outline_tit"><?php the_field('outline_title'); ?></div>
        <div class="outline_info"><?php the_field('outline_info'); ?></div>
      </div>
    </a>
  </li>

  <?php } ; ?>

  <?php endwhile; endif; ?>
</ul>




</div>

<?php $counter++; } ?>

<?php get_template_part('parts_kouen_else'); ?>

<div class="kouen_foot_wrap">
  <?php get_template_part('parts_kouen_foot'); ?>
</div>
</section>


</div>

</div>
<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
