  <!-- その他の講師派遣ー -->
  <div class="kouen_else">

  <h3>その他の主な講師派遣</h3>

  <?php
  // 正規表現パターン
  $kana2 = array(
    'あ行' => '^(あ|い|う|え|お)+',
    'か行' => '^(か|き|く|け|こ|が|ぎ|ぐ|げ|ご)+',
    'さ行' => '^(さ|し|す|せ|そ|ざ|じ|ず|ぜ|ぞ)+',
    'た行' => '^(た|ち|つ|て|と|だ|ぢ|づ|で|ど)+',
    'な行' => '^(な|に|ぬ|ね|の)+',
    'は行' => '^(は|ひ|ふ|へ|ほ|ば|び|ぶ|べ|ぼ|ぱ|ぴ|ぷ|ぺ|ぽ)+',
    'ま行' => '^(ま|み|む|め|も)+',
    'や行' => '^(や|ゆ|よ)+',
    'ら行' => '^(ら|り|る|れ|ろ)+',
    'わ行' => '^(わ|を|ん)+'
  );
?>

<?php
    foreach ($kana2 as $index2 => $pattern2) {
    $args = array(
      'post_type' => 'kouen_else',/*投稿タイプ*/
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'orderby' => 'meta_value',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' => 'kouen_else',//カスタムフィールド
          'value' => $pattern2,
          'compare' => 'REGEXP',
        ),
      ),
  ); ?>


<?php $custom_query2 = new WP_Query( $args ); ?>


    <?php if ( $custom_query2->have_posts() ):?>
      <ul class="kana_else_tit">
        <li>
            <?php echo '<span>'. $index2 .'</span>'; ?>
        </li>
      </ul>
      <?php endif ; ?>

      <ul class="else_list">
        <?php if ( $custom_query2->have_posts() ):
        while ($custom_query2->have_posts()) : $custom_query2->the_post(); ?>
        <li>

            <div class="else_text">
              <h4 class="item_tit poppins"><?php the_title(); ?></h4>
            </div>
        </li>
        <?php endwhile; endif; ?>
      </ul>

  <?php  wp_reset_query();  } ?>

    </div>

  </div>