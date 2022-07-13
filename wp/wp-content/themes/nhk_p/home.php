<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='展覧会ほか各種イベント、エンターテイメント、文化事業などの企画、制作、実施、運営および放送番組、各種映像ソフトなどの企画、制作、販売を実施。NHKプロモーションのホームページです。'>
<meta name="keywords" content="NHK,NHKグループ,NHK関連団体,プロモーション,アート,四大文明,美術展,N響,NHK交響楽団,Promotions,展覧会,コンサート,イベント,おかあさんといっしょ,ファミリーコンサート,講演会,講師派遣,プレゼント,図録販売">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/home.css">
</head>

<body>
<?php get_template_part('parts_header'); ?>

  <!-- コンテンツエリア -->
  <section class="top_contents">
    <!-- スライドショー -->
    <div class="slider_wrap">
      <ul class="slider">
        <?php
          $args = array(
            'posts_per_page' => 4,
            'paged' => $paged,
          );
          query_posts( $args );
          if ( have_posts() ) :
          while ( have_posts() ) :
          the_post();
        ?>

        <?php if( get_field('display_off') === "常に表示"): ?>
        <li>
          <div class="post_title">
            <a href="<?php the_permalink(); ?>">
              <div class="slider_thum">
                <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thum_event'); ?>
                <?php else : ?>
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png" alt="デフォルト画像" />
                <?php endif ; ?>
              </div>
            </a>
          </div>
        </li>

        <?php elseif( get_field('display_off') === "常に非表示"): ?>
        <?php elseif( get_field('display_off') === "表示終了日になったら非表示"): ?>

            <?php
                date_default_timezone_set('Asia/Tokyo');
                $today = date("Ymd");
                $date_end = get_field('end_day');
            ?>
            <?php if(strtotime($today) <= strtotime($date_end)) : ?>
              <li>
                <div class="post_title">
                  <a href="<?php the_permalink(); ?>">
                    <div class="slider_thum">
                      <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thum_event'); ?>
                      <?php else : ?>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png" alt="デフォルト画像" />
                      <?php endif ; ?>
                    </div>
                  </a>
                </div>
              </li>
              <?php else : ?>
            <?php endif; ?>
          <?php endif; ?>
        <?php endwhile; endif; ?>
      </ul>
    </div>

    <!-- 「展覧会図録・講師」リンク/-->
    <div class="catalog_links sp">
      <ul>
        <li><a href="<?php echo home_url(); ?>/catalog/">展覧会図録は<br class="PC">こちら</a></li>
        <li><a href="https://www.nhk-p.co.jp/kikaku/kouen/">講師をお探し<br class="PC">の方へ </a></li>
      </ul>
    </div>

    <div class="category_wrap">

        <?php
            $categories = get_categories();
            foreach ($categories as $category):
        ?>
        <div id="<?php echo  $category->slug; ?>" class="category_tit">
          <h2><?php echo $category->name; ?></h2>
          <div class="list_link pc"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?>の一覧を見る</a></div>
        </div>
        <?php
            $my_query = new WP_Query(
                array(
                    'cat' => $category->term_id,
                    'posts_per_page' => 4,
                ));
            if ($my_query->have_posts()):
        ?>
            <ul>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

              <?php if( get_field('display_off') === "常に表示"): ?>
                <li class="post_wrap">
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
                    <div class="post_set">
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
                  <li class="post_wrap">
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
                    <div class="post_set">
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
            <?php endwhile; ?>
            <div class="list_link sp"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?>の一覧を見る</a></div>

            </ul>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <p>投稿はありません。</p>
        <?php endif; ?>
        <?php endforeach; ?>


    </div>

  </section>


  <?php get_template_part('parts_catalog'); ?>

  <!-- Twtitter -->

  <section class="twitter_wrap">
    <div class="category_tit">
      <h2>公式Twitter</h2>
    </div>


    <div class="twitter_inner">


      <a class="twitter-timeline" href="https://twitter.com/NPStenpaku?ref_src=twsrc%5Etfw">Tweets by NPStenpaku</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


    </div>

  </section>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>

