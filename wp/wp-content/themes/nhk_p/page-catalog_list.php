<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='展覧会ほか各種イベント、エンターテイメント、文化事業などの企画、制作、実施、運営および放送番組、各種映像ソフトなどの企画、制作、販売を実施。NHKプロモーションのホームページです。'>
<meta name="keywords" content="NHK,NHKグループ,NHK関連団体,プロモーション,アート,四大文明,美術展,N響,NHK交響楽団,Promotions,展覧会,コンサート,イベント,おかあさんといっしょ,ファミリーコンサート,講演会,講師派遣,プレゼント,図録販売">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/catalog.css">

<!-- for Page -->
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main">
  <section class="post_wrap">

    <h1>展覧会図録</h1>

    <div class="catalog_inner">
      <div class="catalog_inner_links">
        <dl>
          <dt>ＮＨＫプロモーション発行の展覧会図録のうち、在庫があるものについてお求めいただけます。
          <span>※赤字で表記されている図録は、在庫が残り少なくなっています。<br />ご注文いただく前に電話で在庫の有無をご確認ください。</span>
          </dt>
          <dd><a href="<?php echo home_url(); ?>/purchase/">ご購入はこちら（お申込みフォーム ）</a></dd>
        </dl>
      </div>
    </div>

    <div class="catalog_age">
      <dl>
        <dt>発行年</dt>
        <dd>
          <ul class="tab_catalog">
          <?php
                $terms = get_terms('catalog_cate');
                foreach ( $terms as $term ) {
                  echo '<li><a href="#'.$term->slug.'">'.$term->name.'</a></li>';
                }
            ?>
          </ul>
        </dd>
      </dl>
    </div>

    <!-- カテゴリー毎に表示 -->

    <?php
    $terms = get_terms( 'catalog_cate' );
    foreach ( $terms as $term ) :
        $args = array(
            'post_type' => 'catalog',
            'taxonomy' => 'catalog_cate',
            'term' => $term->slug,
      );
    $query = new WP_Query($args); ?>

    <div class="catalog_area category_wrap" id="<?php echo $term->slug ; ?>">
      <ul>
        <?php
          echo '<li><span>'.$term->name.'</span></li>';
        ?>
      </ul>
      <div class="table_wrap">

        <table>
          <tr>
            <th class="table_tit">図録タイトル</th>
            <th class="table_price">価格 @（税込）</th>
          </tr>

          <?php while ( $query->have_posts() ) : $query->the_post();?>
            <?php if ( get_field( 'catalog_price' ) ): ?>
              <?php if ( get_field( 'catalog_sold' ) ): ?>
              <tr class="sold">
                <td class="td_tit"><span><h3><?php the_title(' '); ?></h3></span></td>
                <td>
                  <p class="catalog_price">
                    <span>
                      <?php the_field('catalog_price'); ?> / １冊
                    </span>
                  </p>
                </td>
              </tr>
                <?php else: ?>
              <tr>
                <td class="td_tit"><h3 <?php if ( get_field( 'catalog_stock' ) ): ?>class="stock_few"<?php endif; ?>><?php the_title(' '); ?></h3></td>
                <td>
                  <p class="catalog_price">
                    <?php the_field('catalog_price'); ?> / １冊
                  </p>
                </td>
              </tr>
              <?php endif; ?>
            <?php endif; ?>
          <?php endwhile;?>

          <?php while ( $query->have_posts() ) : $query->the_post();?>
          <?php if ( get_field( 'catalog_name' ) ): ?>
              <tr>
                <td colspan="2" class="td_tit">
                  <h3 <?php if ( get_field( 'catalog_stock' ) ): ?>class="stock_few"<?php endif; ?>><?php the_title(' '); ?><span>をお求めのお客様</span></h3>
                  <p>図録は下記、「<?php the_field('catalog_name'); ?>」にて販売いたします。</p>
                    <p class="catalog_link">
                    <a href="<?php the_field('catalog_link'); ?>">
                    <?php the_field('catalog_name'); ?></a>
                    </p>
                </td>
              </tr>
          <?php endif; ?>
          <?php endwhile;?>

          <?php wp_reset_postdata(); ?>

        </table>
      </div>
    </div>

      <?php endforeach; ?>

    <div class="footer_link">
      <div class="catalog_inner_links">
      <a href="<?php echo home_url(); ?>/purchase/">ご購入はこちら（お申込みフォーム ）</a>
      </div>
    </div>


    <div class="payment">
      <h2><span>発送・お支払い方法</span></h2>
      <p class="payment_text">ヤマト運輸の「宅急便コレクトサービス」にて発送いたします。発送はお申込み受付後、10日間程度でお届けとなります。</p>

      <ol class="howto_order">
        <li>①お申込みフォームよりご注文ください。時間指定のご希望は、フォーム内「その他ご質問など」欄で承ります。</li>
        <li>②内容確認後、ヤマト運輸の「宅急便コレクトサービス」で、代金引換にて発送いたします。（お申込み受付後、10 日前後でお届け予定です。）</li>
        <li>③商品お届け時に、配送ドライバーに代金を「現金」でお支払いください。<br />※現金のみのお取り扱いとなっております。</li>
      </ol>

      <div class="payment_icon">
        <ul>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/catalog/icon_cash.png" alt="代金引換">
            <div>
              <h3>代金引換</h3>
              <p>合計金額＝「図録代+送料（梱包料、コレクト手数料含む）」</p>
            </div>
          </li>

        </ul>
      </div>
    </div>

    <div class="payment">
      <h2><span>送料（梱包料、コレクト手数料を含みます。）</span></h2>
      <div class="postage">
        <dl>
          <dt>＊１冊ご購入の場合</dt>
          <dd>
            <ul>
              <li><span>本州・四国</span><p>1,100円（税込）</p></li>
              <li><span>北海道・九州・沖縄・離島</span><p>1,500円（税込）</p></li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>＊２冊以上のご購入の場合</dt>
          <dd>商品によって重量等が異なるため、上記の送料と異なる場合はお客様にご案内させていただきます。</dd>
        </dl>
      </div>
      <div class="postage_foot">
        <p>お問い合わせ</p>
        <p>ご不明な点がありましたら、下記へご連絡ください。</p>
        <p>電話　03-5790-6424　月～金曜日　午前11時～午後5時（祝祭日・12/29～1/3をのぞく）</p>
      </div>

    </div>

  </div>
</div>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>

