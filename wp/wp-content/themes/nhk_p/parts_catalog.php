  <!-- 展覧会図録 -->
  <section class="catalog_wrap">
    <div class="catalog">
      <div class="category_tit">
        <h2>展覧会図録</h2>
      </div>
      <div class="catalog_inner">

        <div class="catalog_inner_links">
          <dl>
            <dt>ＮＨＫプロモーション発行の展覧会図録のうち、在庫があるものについてお求めいただけます。</dt>
            <dd>
              <ul>

              <?php
                $terms = get_terms('catalog_cate');
                foreach ( $terms as $term ) {
                  echo '<li><a href="'.'site_url'.'/catalog_list/">'.$term->name.'</a></li>';
                }
              ?>

              </ul>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>