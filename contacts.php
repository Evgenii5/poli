<?php
/*
Template Name: Шаблон страницы контактов
*/
?>
<?php get_header(); ?>
<section class="contacts">
<div class="contacts_container container">
        
        <h2 class="contacts_title">
            <a href="#" class="contacts_title-link"><?= carbon_get_theme_option('contact'); ?></a>
        </h2>
        
        <div class="contacts_body">
            <div class="contacts_text">
                <div>
                    <span class="bold dark_green"></span><?= $adress_title ?>:</span>
                    <span><?= $address_index ?></span>
                    <span><?= $address_city ?></span>
                    <span><?= $address_street ?></span>
                    <span><?= $address_build ?></span>
                </div>
                        

                <div class="contacts_line1">
                    <div class="adress_left"><?= carbon_get_theme_option('adress1'); ?></div>
                    <div class="adress_right"><?= carbon_get_theme_option('adress2'); ?></div>
                </div>

                <div class="contacts_line2">
                    <div class="adress_left"><?= carbon_get_theme_option('head_doctor'); ?></div>
                    <div class="adress_right"><?=carbon_get_theme_option('name_head_doctor'); ?></div>
                </div>
                <div class="contacts_line3">
                    <div class="adress_left">        
                        <!-- Рубрику справочные  -->
                        <a href="#" class="contacts_category-link"><?= get_category( 13, ARRAY_A)['name']; ?></a>
                    </div>
                </div>
                <div class="contacts_departs">
                    

                    <!-- записи -->
                    <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category' => 13,
                    'orderby' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ]);



                foreach ($posts as $post) {
                    setup_postdata ($post);
                    ?>
                    <ul class="contacts_posts_items">
                        <li><img class="plus_img" src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/06/photo_2023-06-06_02-54-56.png" alt="im" /><a href="#" class="contacts_posts_items-link"><?php the_title(); ?></a></li>
                    </ul>
                    <?php
                }
            wp_reset_postdata();
            ?>
                </div>

                
                <nav class="header_top_social social">
                <div class="social_item"><a href="#"><i class="fa-brands fa-odnoklassniki"></i></a></div>
                <div class="social_item"><a href="#"><i class="fa-brands fa-vk"></i></a></div> 
                <div class="social_item"><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                <div class="social_item"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                <div class="social_item"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                </nav>
                
            </div>
            <div class="contacts_form">
            
            <?= do_shortcode('[contact-form-7 id="67" title="Контактная форма 1"]'); ?>
            </div>

        </div>             
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A33a2a7bc07b169c86e649ae6c58e8143399888560efcdf4494892c443a5c2773&amp;width=1200&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>




</div>
</section>
<?php get_footer(); ?>

