<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='展覧会ほか各種イベント、エンターテイメント、文化事業などの企画、制作、実施、運営および放送番組、各種映像ソフトなどの企画、制作、販売を実施。NHKプロモーションのホームページです。展覧会のページ。'>
<meta name=”keywords” content="NHK,NHKグループ,NHK関連団体,プロモーション,アート,四大文明,美術展,N響,NHK交響楽団,Promotions,展覧会,コンサート,イベント,おかあさんといっしょ,ファミリーコンサート,講演会,講師派遣,プレゼント,図録販売,展覧会">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/information.css">
</head>

<!--カテゴリーの取得-->
<?php
  $terms = get_the_terms($post->ID, 'category');
  // 複数のカスタム分類を指定する場合は配列を使用する
  // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));
  if ( $terms ) {
  foreach ( $terms as $term ) {
    $term_link = get_term_link( $term );
    }
  }
?>

<body class="<?php echo ''.$term->slug.''; ?>">
<?php get_template_part('parts_header'); ?>

<div id="main">
  <section class="post_wrap">
    <h1 class="<?php echo ''.$term->slug.''; ?>"><?php echo ''.$term->name.''; ?></h1>
    <div class="tit_sub">開催中、またはこれから開催する展覧会をご案内しています。</div>
    <div id="postList">
      <ul>
        <?php $paged = get_query_var('paged'); ?>
        <?php if(have_posts()): ?>
        <?php while ( have_posts() ) : the_post(); ?>


        <?php if( get_field('display_off') === "常に表示"): ?>

        <li class="single_unit">
          <a href="<?php the_permalink(); ?>">

          <div class="open_icon">
          <?php
          $today = date("Y/m/d"); //今日の日付
          $open_start = get_field('open_start');
          $open_end = get_field('open_end');
          if(strtotime($today) < strtotime($open_start)){
          }else if(strtotime($today) >= strtotime($open_start) && strtotime($open_end) >= strtotime($today)){
          echo '<div class="btn bgleft "><span>';
          the_field('open_text');
          echo '</span></div>';
          }else if(strtotime($today) > strtotime($open_end)){
          }
          ?>
          </div>


            <h3><?php the_title(); ?></h3>
            <div class="flex">
              <div class="post_thum">
                <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thum_event'); ?>
                <?php else : ?>
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
                <?php endif ; ?>
              </div>
              <div class="field">
                <ul>
                  <li>
                    <div><?php the_field('day_title'); ?></div>
                    <p><?php the_field('day_display'); ?></p>
                  </li>
                  <li>
                    <div><?php the_field('place_title'); ?></div>
                    <p><?php the_field('place_display'); ?></p>
                  </li>
                </ul>
              </div>
            </div>
          </a>
        </li>

        <?php elseif( get_field('display_off') === "常に非表示"): ?>
        <?php elseif( get_field('display_off') === "表示終了日になったら非表示"): ?>

            <?php
                date_default_timezone_set('Asia/Tokyo');
                $today = date("Ymd");
                $date_end = get_field('end_day');
            ?>
            <?php if(strtotime($today) <= strtotime($date_end)) : ?>
              <li class="single_unit">
          <a href="<?php the_permalink(); ?>">

          <div class="open_icon">
          <?php
          $today = date("Y/m/d"); //今日の日付
          $open_start = get_field('open_start');
          $open_end = get_field('open_end');
          if(strtotime($today) < strtotime($open_start)){
          }else if(strtotime($today) >= strtotime($open_start) && strtotime($open_end) >= strtotime($today)){
          echo '<div class="btn bgleft "><span>';
          the_field('open_text');
          echo '</span></div>';
          }else if(strtotime($today) > strtotime($open_end)){
          }
          ?>
          </div>


            <h3><?php the_title(); ?></h3>
            <div class="flex">
              <div class="post_thum">
                <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thum_event'); ?>
                <?php else : ?>
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
                <?php endif ; ?>
              </div>
              <div class="field">
                <ul>
                  <li>
                    <div><?php the_field('day_title'); ?></div>
                    <p><?php the_field('day_display'); ?></p>
                  </li>
                  <li>
                    <div><?php the_field('place_title'); ?></div>
                    <p><?php the_field('place_display'); ?></p>
                  </li>
                </ul>
              </div>
            </div>
          </a>
        </li>
              <?php else : ?>
            <?php endif; ?>
          <?php endif; ?>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </section>


<?php wp_reset_postdata(); ?>


<?php get_template_part('parts_catalog'); ?>

</div>

<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
