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
    <h1>図録ご購入</h1>
      <span>お申込みフォーム</span>
    </div>
    <div class="contact_txt">
      <p>図録をご購入される方は、下記フォームに必要事項をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
    </div>

    <div class="form_wrap">
      <div class="form_tit">
        ご購入図録<span>【必須】</span>
      </div>
      <div class="form_input">
          <div class="form_input_inner">
            <div class="form_inner_tit">
              図録タイトル
            </div>
            <div class="form_input pulldown">
              <select name="cat-dropdown1">
              <option value="">図録タイトルをお選びください</option>
                  <?php
                  $terms = get_terms( 'catalog_cate' );
                  foreach ( $terms as $term ) :
                    $args = array(
                        'post_type' => 'catalog',
                        'taxonomy' => 'catalog_cate',
                        'term' => $term->slug,
                  );
                  $query = new WP_Query($args); ?>
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                      <?php if ( get_field( 'catalog_price' ) ): ?>
                        <?php if ( get_field( 'catalog_sold' ) ): ?>
                        <?php else: ?>
                          <option value=" <?php echo $term->name; ?>　<?php the_title(' '); ?>（＠<?php the_field('catalog_price'); ?>）">
                         <?php echo $term->name; ?>　<?php the_title(' '); ?>（＠<?php the_field('catalog_price'); ?>）
                          </option>
                        <?php endif; ?>
                      <?php endif; ?>
                    <?php endwhile;?>
                  <?php endforeach; ?>
                <?php wp_reset_query(); ?>
              </select>
              <div class="required">必須項目です。</div>
            </div>
          </div>
          <div class="form_input_inner">
            <div class="form_inner_tit">
              冊数
            </div>
            <div class="form_input pulldown mini">
              <select name="num-dropdown1">
                <option value="">冊数を選択してください。</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
              <div class="required_num">必須項目です。</div>

            </div>
          </div>

          <div class="form_input_inner">
          <div class="form_inner_tit full more_list">
          複数の展覧会図録をご購入の場合は、こちらをクリックしてご入力ください。
          </div>
          </div>

          <div class="accord_list">
            <div class="form_input_inner">
              <div class="form_inner_tit">
                図録タイトル
              </div>
              <div class="form_input pulldown">
                <select name="cat-dropdown2">
                <option>図録タイトルをお選びください</option>
                    <?php
                    $terms = get_terms( 'catalog_cate' );
                    foreach ( $terms as $term ) :
                      $args = array(
                          'post_type' => 'catalog',
                          'taxonomy' => 'catalog_cate',
                          'term' => $term->slug,
                    );
                    $query = new WP_Query($args); ?>
                      <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <?php if ( get_field( 'catalog_price' ) ): ?>
                          <?php if ( get_field( 'catalog_sold' ) ): ?>
                          <?php else: ?>
                            <option value=" <?php echo $term->name; ?>　<?php the_title(' '); ?>（＠<?php the_field('catalog_price'); ?>）">
                         <?php echo $term->name; ?>　<?php the_title(' '); ?>（＠<?php the_field('catalog_price'); ?>）
                          </option>
                          <?php endif; ?>
                        <?php endif; ?>
                      <?php endwhile;?>
                    <?php endforeach; ?>
                  <?php wp_reset_query(); ?>
                </select>
              </div>
            </div>
            <div class="form_input_inner">
              <div class="form_inner_tit">
                冊数
              </div>
              <div class="form_input pulldown mini">
                <select name="num-dropdown2">
                  <option >冊数を選択してください。</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
              </div>
            </div>
          </div>

          <div class="accord_list">
            <div class="form_input_inner">
              <div class="form_inner_tit">
                図録タイトル
              </div>
              <div class="form_input pulldown">
                <select name="cat-dropdown3">
                <option>図録タイトルをお選びください</option>
                    <?php
                    $terms = get_terms( 'catalog_cate' );
                    foreach ( $terms as $term ) :
                      $args = array(
                          'post_type' => 'catalog',
                          'taxonomy' => 'catalog_cate',
                          'term' => $term->slug,
                    );
                    $query = new WP_Query($args); ?>
                      <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <?php if ( get_field( 'catalog_price' ) ): ?>
                          <?php if ( get_field( 'catalog_sold' ) ): ?>
                          <?php else: ?>
                            <option value=" <?php echo $term->name; ?>　<?php the_title(' '); ?>（＠<?php the_field('catalog_price'); ?>）">
                         <?php echo $term->name; ?>　<?php the_title(' '); ?>（＠<?php the_field('catalog_price'); ?>）
                          </option>
                          <?php endif; ?>
                        <?php endif; ?>
                      <?php endwhile;?>
                    <?php endforeach; ?>
                  <?php wp_reset_query(); ?>
                </select>
              </div>
            </div>
            <div class="form_input_inner">
              <div class="form_inner_tit">
                冊数
              </div>
              <div class="form_input pulldown mini">
                <select name="num-dropdown3">
                  <option>冊数を選択してください。</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
              </div>
            </div>
          </div>

      </div>




  </div>





    <?php the_content(); ?>

  </section>
</div>





<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>

