<?php get_header(); ?>

<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/single.css">
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main">
  <div class="post_thum">
    <?php if (has_post_thumbnail()) : ?>                  <!-- アイキャッチあればそれを表示 -->
          <?php the_post_thumbnail('full'); ?>
    <?php else : ?>                                       <!-- アイキャッチなければデフォルト画像 -->
        <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
    <?php endif ; ?>
  </div>
  <div class="post_single">
      <h2 class="post_tit"><?php the_title(); ?></h2>
        <div id="post_content"><?php the_content(); ?></div>
    </div>
  </div><!-- post_single -->

  <div class="category_wrap">

    <?php
      $category = get_the_category();
      $cat_id   = $category[0]->cat_ID;
      $cat_name = $category[0]->cat_name;
      $cat_slug = $category[0]->category_nicename;
    ?>
    <?php
    $post_id = get_the_ID();
    foreach((get_the_category()) as $cat) {
    $cat_id = $cat->cat_ID ;
    break ;
    }
    query_posts(
    array(
    'cat' => $cat_id,
    'showposts' => 4,
    'post__not_in' => array($post_id)
    )
    );
    if(have_posts()) :
    ?>
    <h2><span>その他の<?php echo $cat_name; ?>情報</span></h2>


    <ul>
    <?php while (have_posts()) : the_post(); ?>

    <?php if( get_field('display_off') === "常に表示"): ?>

      <li class="post_wrap">
        <a href="<?php the_permalink(); ?>">
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
    </ul>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

  </div>


  <div class="result_link_wrap">
    <div class="result_link">
    <a href="<?php echo home_url(); ?>/results/">主な実績・過去の一覧</a>
    </div>
  </div>



  <div class="cate_link">
    <dl>
      <dt>各イベントの一覧を見る</dt>
      <dd>
        <ul>
          <li><a href="<?php echo home_url(); ?>/category/exhibition/">展覧会</a></li>
          <li><a href="<?php echo home_url(); ?>/category/stage/">ステージイベント</a></li>
          <li><a href="<?php echo home_url(); ?>/category/family/">ファミリー向け</a></li>
          <li><a href="<?php echo home_url(); ?>/category/event/">各種イベント</a></li>
        </ul>
      </dd>
    </dl>
  </div>
  <?php get_template_part('parts_catalog'); ?>

</div>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>