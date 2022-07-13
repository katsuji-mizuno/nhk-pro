<footer>
  <div id="toPageTop">
    <a href="#siteHead">
      <div class="totop">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/footer/totop.png" alt="">
      </div>
    </a>
  </div>

  <!-- ナビゲーション -->
  <?php if(!is_page(array('contacts','event','lecture','nhkp')) ):?>

  <div class="footer_contact_wrap">
    <div class="footer_contact">
      <h2 class="footer_contact_tit">
        お問い合わせ
      </h2>
      <ul>
        <li><a href="<?php echo home_url(); ?>/contacts/event/">展覧会・イベント企画や<br />映像コンテンツ制作について</a></li>
        <li><a href="<?php echo home_url(); ?>/contacts/lecture/">講師派遣について</a></li>
        <li><a href="<?php echo home_url(); ?>/contacts/nhkp/">その他・ＮＨＫプロモーションに関して</a></li>
      </ul>
    </div>
  </div>
  <?php endif;?>

  <div class="footer_nav_wrap">

    <div class="footer_nav">
      <!-- バナーエリア -->
      <div class="footer_bnr">
        <ul>
          <li>
            <a href="<?php echo home_url(); ?>/kikaku/">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/footer/bnr_foot01.jpg" alt="NHKプロモーション">
            </a>
          </li>
          <li>
            <a href="https://www.nhk.or.jp/" target="_blank" rel="noopener">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/footer/bnr_nhk_online.png" alt="NHK ONLINE">
            </a>
          </li>
          <li>
            <a href="http://www.nhk-cs.jp/jushinryo/" target="_blank" rel="noopener">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/footer/b-price_279_62.jpg" alt="受信料のお手続きはこちらから">
            </a>
          </li>

        </ul>
      </div>

      <div class="footer_nav_list pc">
        <dl>
          <dt>＜このサイトについて＞</dt>
          <dd>
            <ul>
              <li><a href="<?php echo home_url(); ?>/company/profile.html">会社紹介</a></li>
              <li><a href="<?php echo home_url(); ?>/english/">English</a></li>
              <li><a href="<?php echo home_url(); ?>/contacts/">お問い合わせ</a></li>
              <li><a href="<?php echo home_url(); ?>/utility/sitemap.html">サイトマップ</a></li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>＜イベント情報＞</dt>
          <dd>
            <ul>
              <li><a href="<?php echo home_url(); ?>/category/exhibition/">展覧会</a></li>
              <li><a href="<?php echo home_url(); ?>/category/stage/">ステージイベント</a></li>
              <li><a href="<?php echo home_url(); ?>/category/family/">ファミリー向け</a></li>
              <li><a href="<?php echo home_url(); ?>/category/event/">各種イベント</a></li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>＜イベントをお考えの方へ＞</dt>
          <dd>
            <ul>
              <li><a href="<?php echo home_url(); ?>/kikaku/">法人のお客様TOPページ</a></li>
              <li><a href="<?php echo home_url(); ?>/kikaku/tenran/">展覧会</a></li>
              <li><a href="<?php echo home_url(); ?>/kikaku/stage/">ステージイベント</a></li>
              <li><a href="<?php echo home_url(); ?>/kikaku/kids/">子供向け・ファミリーイベント</a></li>
              <li><a href="<?php echo home_url(); ?>/kikaku/various_events/">その他　各種イベント</a></li>
              <li><a href="<?php echo home_url(); ?>/kikaku/kouen/">講演会・講師派遣</a></li>
              <li><a href="<?php echo home_url(); ?>/kikaku/image/">映像・コンテンツ制作</a></li>
              <li><a href="<?php echo home_url(); ?>/kikaku/achievement.html">主な実績</a></li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>＜NHKプロモーションの取り組み＞</dt>
          <dd>
            <ul>
              <li><a href="<?php echo home_url(); ?>/utility/privacy_policy.html">個人情報の取り扱いについて</a></li>
              <li><a href="<?php echo home_url(); ?>/utility/ethics.html">倫理・行動基準</a></li>
              <li><a href="<?php echo home_url(); ?>/utility/gang_exclusion.html">暴力団等の排除についての指針</a></li>
            </ul>
          </dd>
        </dl>
      </div>

      <div class="footer_nav_list sp">
        <ul class="foot_main">
          <li><a href="<?php echo home_url(); ?>/company/profile.html">会社紹介</a></li>
          <li><a href="<?php echo home_url(); ?>/english/">English</a></li>
          <li><a href="<?php echo home_url(); ?>/contacts/">お問い合わせ</a></li>
          <li><a href="<?php echo home_url(); ?>/utility/sitemap.html">サイトマップ</a></li>
        </ul>
        <dl>
          <dt>＜NHKプロモーションの取り組み＞</dt>
          <dd>
            <ul>
              <li><a href="<?php echo home_url(); ?>/utility/privacy_policy.html">個人情報の取り扱いについて</a></li>
              <li><a href="<?php echo home_url(); ?>/utility/ethics.html">倫理・行動基準</a></li>
              <li><a href="<?php echo home_url(); ?>/utility/gang_exclusion.html">暴力団等の排除についての指針</a></li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="copy">Copyright NHK PROMOTIONS ALL RIGHTS RESERVED.</div>

</footer>


