<!-- /page_wrapper -->
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/colorbox/1.6.4/jquery.colorbox-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.min.js"></script>
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/4-12/js/4-12.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<?php if(is_home()) : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>
<?php elseif(is_page('results')):?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/results.js"></script>
<?php elseif(is_page('catalog_list')):?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/catalog.js"></script>
<?php elseif(is_page('purchase')):?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/purchase.js"></script>

<?php elseif(is_page('kouen')):?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/kouen.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/kouen_single.js"></script>

<?php elseif(is_tax()):?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/kouen.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/kouen_single.js"></script>

<?php elseif(is_page(array('event','lecture','nhkp')) ):?>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact.js"></script>
<?php endif;?>

</body>
</html>
