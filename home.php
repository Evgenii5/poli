<?php
/*
Template Name: Main page
*/
?>
<?php get_header(); ?>

<?php include 'template-parts/variables.php' ?>

<?php if ($main_banners) :?>
    <section>
        <div class="">
            <div class="slider_wrapper">
            <div class="main_banner">
                <?php foreach( $main_banners as $banner ) : ?>
                    <?php if ($banner['main_banner_url']) : ?>
                        <a href="<?=$banner['main_banner_url']?>" class="banner">
                            <img class="main_banner_desk" src="<?=$banner['main_banner_desk']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['main_banner_mob']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                        </a>
                    <?php else : ?>
                        <div class="banner">
                            <img class="main_banner_desk" src="<?=$banner['main_banner_desk']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['main_banner_mob']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<!-- --------------------Отделения -->

<section class="departments">
    <div class="departmens_container container">
        <h2 class="departmens_title">
            <a href="#" class="departmens_title-link"><?php echo carbon_get_theme_option('departments'); ?></a>
        </h2>
        
        
        
        
        <div class="departmens_body">
            <div class="hospital_left_column">
                <h3 class="hospital_subtitle">
                    <img class="fanendoscope_img" src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/fanendoscope.png" alt="im" /> 
                    <a href="#" class="hospital_subtitle-link"><?= get_category( 1, ARRAY_A)['name']; ?></a>
                </h3>



                <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ]);



                foreach ($posts as $post) {
                    setup_postdata ($post);
                    ?>
                    <div class="hospital_items">
                        <ul class="hospital_items_nav">
                        <li><a href="#" class="hospital_items-link"><?php the_title(); ?></a></li>
                        </ul>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
                
            </div>


            <div class="other_right_column">
            <h3 class="other_office_subtitle">
                <img class="fanendoscope_img" src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/fanendoscope.png" alt="im" />
                <a href="#" class="other_office_subtitle-link"><?= get_category( 5, ARRAY_A)['name']; ?></a></h3>

            <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category' => 5,
                    'orderby' => 'DESC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ]);



                foreach ($posts as $post) {
                    setup_postdata ($post);
                    ?>
                    <div class="other_office_items">
                        <ul class="other_office_items_nav">
                        <li><a href="#" class="other_office_items-link"><?php the_title(); ?></a></li>
                        </ul>
                    </div>
                    <?php
                }
            wp_reset_postdata();
            ?>


            </div>
        </div>
    </div>
</section>




<!-- -----------------------------------Важная информация -->

<section class="important_information">
        <div class="important_information_container container">
                <h3 class="important_information_title"><a href="#" class="important_information_title-link"><?= get_category( 10, ARRAY_A)['name']; ?></a></h3>
        </div>

        <?php if ($inf_important_banners) :?>
    <div>
        <div class="slider_background">
            <div class="slider_wrapper">
            <div class="main_banner">
                <?php foreach( $inf_important_banners as $banner ) : ?>
                    <?php if ($banner['main_banner_url']) : ?>
                        <a href="<?=$banner['inf_important_banner_url']?>" class="banner">
                            <img class="main_banner_desk" src="<?=$banner['inf_important_banner_desk']?>" alt="<?=$banner['inf_important_banner_alt']?>" title="<?=$banner['inf_important_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['inf_important_banner_mob']?>" alt="<?=$banner['inf_important_banner_alt']?>" title="<?=$banner['inf_important_banner_title']?>">
                        </a>
                    <?php else : ?>
                        <div class="banner">
                            <img class="main_banner_desk" src="<?=$banner['inf_important_banner_desk']?>" alt="<?=$banner['inf_important_banner_alt']?>" title="<?=$banner['inf_important_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['inf_important_banner_mob']?>" alt="<?=$banner['inf_important_banner_alt']?>" title="<?=$banner['inf_important_banner_title']?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
            </div>
        </div>
    </div>
<?php endif; ?>



</section>


<!-- -----------------------------------------Новости -->


<section class="news">
   <div class="news_container container">
       <h3 class="news_title"><a href="#" class="news_title-link"><?= get_category( 9, ARRAY_A)['name']; ?></a>
       </h3>
       
       <div class="news_body">
           <div class="news_posts">
           <ul class="news_posts_items1">
                <li></li>
                    </ul>
           <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category' => 9,
                    'orderby' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ]);



                foreach ($posts as $post) {
                    setup_postdata ($post);
                    ?>
                    <ul class="news_posts_items">
                        <li><a href="#" class="news_posts_items-link"><?php the_title(); ?></a></li>
                    </ul>
                    <?php
                }
            wp_reset_postdata();
            ?>
           </div>
           <div class="news_img">
           
           <?php
                // Получение значения кастомного поля из Theme Options
                $image_news = carbon_get_theme_option('custom_image');                
            ?>                      
            <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/unsplash_2zDw14yCYqk.png" alt="Изображение">
            </div>
       </div>
       <div class="news_buttom">
       <a href="#" class="news_buttom-link">Все новости</a>
       </div>




   </div> 

</section>


<!-- -------------------------------------Галерея -->


<section class="gallery">
<div class="gallery_container container">
       <h3 class="gallery_title font_w700_s35"><a href="#" class="gallery_title-link"><?= get_category( 12, ARRAY_A)['name']; ?></a></h3>
</div>

<section>
    <?php if ($gallery_banners) :?>
    <div class="slider_background_gallery">
        <div class="slider_wrapper">
            <div class="main_banner">
                <?php foreach( $gallery_banners as $banner) : ?>
                    <?php if ($banner['gallery_banner_url']) :?>
                        <a href="<?=$banner['gallery_banner_url']?>" class="banner">
                            <img class="main_banner_desk" src="<?=$banner['gallery_banner_desk']?>" alt="<?=$banner['gallery_banner_alt']?>" title="<?=$banner['gallery_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['gallery_banner_mob']?>" alt="<?=$banner['gallery_banner_alt']?>" title="<?=$banner['gallery_banner_title']?>">
                    
                         </a>
                    <?php else : ?>
                        <div class='banner'>
                            <img class="main_banner_desk" src="<?=$banner['gallery_banner_desk']?>" alt="<?=$banner['gallery_banner_alt']?>" title="<?=$banner['gallery_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['gallery_banner_mob']?>" alt="<?=$banner['gallery_banner_alt']?>" title="<?=$banner['gallery_banner_title']?>">
                        </div>

                    <?php endif; ?>
                <?php endforeach; ?>
    <?php endif; ?>

                
                <!-- Добавьте другие ссылки с изображениями по аналогии -->
            </div>
        </div>
    </div>
</section>





</section>

<!-- -------------------------------------Контакты -->

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