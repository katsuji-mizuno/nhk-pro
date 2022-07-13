<?php get_header(); ?>

<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/single.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/kouen.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/kouen_single.css">

</head>

<body id="company" class="com_kouen">
<?php get_template_part('parts_header'); ?>


<div id="main">

  <div class="breadcrumb">
    <ul>
      <li><a href="<?php echo home_url(); ?>/">トップページ</a></li>
      <li><a href="<?php echo home_url(); ?>/">法人向けトップ</a></li>
      <li><a href="<?php echo home_url(); ?>/kouen">講演会・講師派遣</a></li>
      <li><span><?php the_title(); ?></span></li>
    </ul>
  </div>

  <div class="post_single">
    <h1 class="post_tit"><?php the_title(); ?><span>（<?php the_field('kana'); ?>）</span></h1>
    <div class="outline_wrap pc">
      <div class="kouen_thum">
        <?php if (has_post_thumbnail()) : ?>                  <!-- アイキャッチあればそれを表示 -->
              <?php the_post_thumbnail('full'); ?>
        <?php else : ?>                                       <!-- アイキャッチなければデフォルト画像 -->
            <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
        <?php endif ; ?>
      </div>
      <div class="outline">
        <div class="job"><?php the_field('job'); ?></div>
        <?php if( get_field('outline_info')): ?>
        <div class="outline_tit"><?php the_field('outline_title'); ?></div>
        <div class="outline_info_single"><?php the_field('outline_info'); ?></div>
        <?php endif ; ?>
        <?php if( get_field('outline_info_2')): ?>
        <div class="outline_tit"><?php the_field('outline_title_2'); ?></div>
        <div class="outline_info_single"><?php the_field('outline_info_2'); ?></div>
        <?php endif ; ?>
        <div class="post_tags">
          <?php echo get_the_term_list($post->ID,'kouen_tag'); ?>
        </div>
      </div>
    </div>

    <div class="outline_wrap sp">
      <div class="kouen_thum">
        <?php if (has_post_thumbnail()) : ?>                  <!-- アイキャッチあればそれを表示 -->
              <?php the_post_thumbnail('full'); ?>
        <?php else : ?>                                       <!-- アイキャッチなければデフォルト画像 -->
            <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
        <?php endif ; ?>
      </div>
      <div class="outline">
        <div class="job"><?php the_field('job'); ?></div>
      </div>
    </div>

    <div class="outline_text sp">
      <?php if( get_field('outline_info')): ?>
      <div class="outline_tit"><?php the_field('outline_title'); ?></div>
      <div class="outline_info_single"><?php the_field('outline_info'); ?></div>
      <?php endif ; ?>
      <?php if( get_field('outline_info_2')): ?>
      <div class="outline_tit"><?php the_field('outline_title_2'); ?></div>
      <div class="outline_info_single"><?php the_field('outline_info_2'); ?></div>
      <?php endif ; ?>
      <div class="post_tags">
        <?php echo get_the_term_list($post->ID,'kouen_tag'); ?>
      </div>
    </div>



    <div id="post_content"><?php the_content(); ?></div>
    </div>



    <?php get_template_part('parts_kouen_foot'); ?>




    </div><!-- post_single -->

</div>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>