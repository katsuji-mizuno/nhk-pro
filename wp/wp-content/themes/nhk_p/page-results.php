<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='展覧会ほか各種イベント、エンターテイメント、文化事業などの企画、制作、実施、運営および放送番組、各種映像ソフトなどの企画、制作、販売を実施。NHKプロモーションのホームページです。'>
<meta name="keywords" content="NHK,NHKグループ,NHK関連団体,プロモーション,アート,四大文明,美術展,N響,NHK交響楽団,Promotions,展覧会,コンサート,イベント,おかあさんといっしょ,ファミリーコンサート,講演会,講師派遣,プレゼント,図録販売">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/results.css">
</head>

<body class="result">
<?php get_template_part('parts_header'); ?>

  <!-- コンテンツエリア -->
  <section class="top_contents">



    <!-- 「展覧会図録・講師」リンク/-->
    <div class="catalog_links sp">
      <ul>
        <li><a href="<?php echo home_url(); ?>/catalog/">展覧会図録は<br class="PC">こちら</a></li>
        <li><a href="https://www.nhk-p.co.jp/kikaku/kouen/">講師をお探し<br class="PC">の方へ </a></li>
      </ul>
    </div>


    <h1>主な実績・過去の一覧</h1>


    <div class="anchor_link">
    <?php
        $categories = get_categories();
        foreach ($categories as $category):
    ?>
        <a href="#<?php echo $category->slug; ?>">
      <?php echo $category->name; ?>
        </a>
    <?php endforeach; ?>
    </div>


    <div class="category_wrap">

      <?php
        $categories = get_categories();
        foreach ($categories as $category):
      ?>
      <div id="<?php echo $category->slug; ?>" class="category_tit">
        <h2>
          <?php echo $category->name; ?>
        </h2>
      </div>

      <div class="caution <?php echo $category->slug; ?>">
          <span>展覧会公式サイトを模倣したウェブサイトにご注意ください！</span>
          <p>弊社主催の過去の展覧会の公式サイトを模倣したウェブサイトの存在が報告されております。<br />
          こうしたウェブサイトについては、過去に公開されていた弊社主催の展覧会公式サイトと同様のドメインが表示されることもあるようですが、会期が終了した展覧会公式サイトはすでに閉鎖されており、上記ウェブサイトが使用するドメインは当社が管理するものではありません。<br />
          また、掲載内容についても、弊社主催の展覧会とは一切関係ございませんのでご注意ください。
        </p>
      </div>


      <div class="matrix_wrap" id="<?php echo $category->slug; ?>">

        <div class="matrix_tit">
          <div class="matrix_l">開催年月</div>
          <div class="matrix_c">事業名</div>
          <div class="matrix_r">開催会場</div>
        </div>

        <?php
          $old_year = '';
          $my_query = new WP_Query(
          array(
          'cat' => $category->term_id,
          'posts_per_page' => -1,
          'order' => 'DESC',
          'orderby' => 'meta_value',
          'meta_key' => 'result_year',
          ));
          if ($my_query->have_posts()):
        ?>

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <?php
          $tags = get_the_tags();
          foreach((array)$tags as $tag):

        ?>




        <div class="result_list">

          <?php
          $my_year =  get_field('result_year');
          if($my_year !=$old_year){
            echo '<div class="result_year">'.get_field('result_year'). '年度</div>';
          }
          else{
            echo '<div class="no_year"></div>';
          }

          $old_year = $my_year
          ?>

          <div class="matrix_info">
            <div class="matrix_l">
            <?php if( get_field('day_display') ) { ?>
              <span><?php the_field('day_display'); ?></span>
            <?php } ?>
            </div>
            <div class="matrix_c"><span><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></span></div>
            <div class="matrix_r">
            <?php if( get_field('place_display') ) { ?>
              <span><?php the_field('place_display'); ?></span>
            <?php } ?>
            </div>
          </div>

        </div>

      <?php endforeach; ?>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      </div>

      <?php endforeach; ?>

    </div>

  </section>





<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>

