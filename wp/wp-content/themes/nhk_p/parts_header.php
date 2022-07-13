<div id="pageWrapper">

<div id="loader">
  <div id="loaderBg" class="loader-slide">
    <div class="load_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Now Loading"></div>
  </div>
</div>

<header id="siteHead" class="delayScroll">


  <!-- ヘッダーロゴと右上のリンク -->
  <section class="header_logo_wrap">
    <div class="header_logo">
      <?php if ( is_front_page() ): ?>
        <h1 class="logo box">
          <a href="<?php echo home_url(); ?>/">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="NHKプロモーション">
          </a>
        </h1>
        <?php else : ?>
        <div class="logo box">
          <a href="<?php echo home_url(); ?>/">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="NHKプロモーション">
          </a>
        </div>
      <?php endif; ?>
      <!-- 「お問い合わせ・サイトマップ・English」-->
      <div class="topright_links">
          <ul>
            <li><a href="<?php echo home_url(); ?>/contacts/">お問い合わせ</a></li>
            <li><a href="<?php echo home_url(); ?>/utility/sitemap.html">サイトマップ</a></li>
            <li><a href="<?php echo home_url(); ?>/english/">ENGLISH</a></li>
          </ul>
      </div>

      <!-- ハンバーガーメニュー-->

      <div class="menu box">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- gNav -->
      <nav id="gNav">
        <div class="gNav_inner">
          <dl>
            <dt class="event">イベント情報</dt>
            <dd>
              <ul>
                <li><a href="<?php echo home_url(); ?>/category/exhibition/">展覧会</a></li>
                <li><a href="<?php echo home_url(); ?>/category/stage/">ステージイベント</a></li>
                <li><a href="<?php echo home_url(); ?>/category/family/">ファミリー向け</a></li>
                <li><a href="<?php echo home_url(); ?>/category/event/">各種イベント</a></li>
                <li><a href="<?php echo home_url(); ?>/results/">主な実績・過去の一覧</a></li>
              </ul>
            </dd>
            <dt class="company">法人のお客様</dt>
            <dd>
              <ul>
                <li><a href="<?php echo home_url(); ?>/kikaku/tenran/">展覧会</a></li>
                <li><a href="<?php echo home_url(); ?>/kikaku/stage/">ステージイベント</a></li>
                <li><a href="<?php echo home_url(); ?>/kikaku/kids/">ファミリー向け</a></li>
                <li><a href="<?php echo home_url(); ?>/kikaku/various_events/">各種イベント</a></li>
                <li><a href="<?php echo home_url(); ?>/kouen/">講師派遣</a></li>
                <li><a href="<?php echo home_url(); ?>/kikaku/image/">映像・コンテンツ制作</a></li>
                <li><a href="<?php echo home_url(); ?>/kikaku/achievement.html">過去のイベント一覧</a></li>
              </ul>
            </dd>
            <dd class="sub">
              <ul>
                <li><a href="<?php echo home_url(); ?>/catalog/">展覧会図録</a></li>
                <li><a href="<?php echo home_url(); ?>/contacts/">お問い合わせ</a></li>
                <li><a href="<?php echo home_url(); ?>/company/profile.html">会社紹介</a></li>
              </ul>
            </dd>
            <dd class="twitter">
              <a href="https://twitter.com/NPStenpaku" target="_blank" rel="noopener">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/header/icon_twitter.png" alt="twitter">
              </a>
            </dd>
          </dl>
        </div>
      </nav>
    </div>
  </section>

  <!-- カテゴリー切り替えのタブ -->

  <section>
    <ul class="tab">
      <li class="events active">
        <span>イベント情報</span>
      </li>
      <li class="company">
        <span>法人のお客様</span>
      </li>
    </ul>
    <!-- 「展覧会図録・講師」リンク/-->
    <div class="catalog_links pc">
      <ul>
        <li><a href="<?php echo home_url(); ?>/catalog/">展覧会図録はこちら</a></li>
        <li><a href="<?php echo home_url(); ?>/kouen/">講師をお探しの方へ </a></li>
      </ul>
    </div>

    <div class="tab_content">
      <div class="tab_area active" id="tab1">
        <ul>
          <li class="exhibition"><a href="<?php echo home_url(); ?>/category/exhibition/">展覧会</a></li>
          <li class="stage"><a href="<?php echo home_url(); ?>/category/stage/">ステージイベント</a></li>
          <li class="family"><a href="<?php echo home_url(); ?>/category/family/">ファミリー向け</a></li>
          <li class="event"><a href="<?php echo home_url(); ?>/category/event/">各種イベント</a></li>
          <li class="result"><a href="<?php echo home_url(); ?>/results/">主な実績・過去の一覧</a></li>
        </ul>
      </div>
      <div class="tab_area" id="tab2">
        <ul>
          <li class="com_exhibition"><a href="<?php echo home_url(); ?>/kikaku/tenran/">展覧会</a></li>
          <li class="com_stage"><a href="<?php echo home_url(); ?>/kikaku/stage/">ステージイベント</a></li>
          <li class="com_family"><a href="<?php echo home_url(); ?>/kikaku/kids/">ファミリー向け</a></li>
          <li class="com_event"><a href="<?php echo home_url(); ?>/kikaku/various_events/">各種イベント</a></li>
          <li class="com_kouen"><a href="<?php echo home_url(); ?>/kouen/">講師派遣</a></li>
          <li class="com_movie"><a href="<?php echo home_url(); ?>/kikaku/image/">映像・コンテンツ制作</a></li>
          <li class="com_result"><a href="<?php echo home_url(); ?>/kikaku/achievement.html">過去のイベント一覧</a></li>
        </ul>
      </div>
    </div>
  </section>
</header>