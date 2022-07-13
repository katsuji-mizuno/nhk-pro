  <!-- 講師派遣フッター -->
  <div class="kouen_footer">



  <?php if(is_single()):?>
    <p class="kouen_footer_note">講演会の決定時に詳細プロフィールをお送りいたします。</p>
  <?php endif;?>

    <div class="kouen_link">
    <?php if(is_single()):?>
      <a href="<?php echo home_url(); ?>/kouen/">講演会講師一覧</a>
    <?php endif;?>
      <a href="<?php echo home_url(); ?>/kikaku/kouen/flow.html">講演会講師派遣～ご相談から開催までの流れ</a>
    </div>
    <div class="kouen_contact">
      <p class="kouen_contact_tit">講演会・講師派遣に関するお問い合わせ</p>
      <div class="kouen_contact_info">
        <div class="kouen_tel">
          <p>TEL.03-5790-6425</p>
          <span>※月～金　午前11時～午後5時（祝祭日・年末年始等を除く）</span>
          <p>FAX.03-5790-0308</p>
        </div>
        <div class="kouen_form">
          <a href="<?php echo home_url(); ?>/contacts/lecture/">WEBサイトからのお問い合わせは<br />こちらをクリックしてください。</a>
        </div>
      </div>
    </div>
  </div>