<?php
/*
Template Name: Шаблон страницы О больнице
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>


<section>
<?php if ($about_ambulances) :?>
  <?php foreach($about_ambulances as $about_ambulance):?>
   <div class="about_container container">
      <h2 class="about_title font_w700_s60">О больнице</h2>

      <img src="<?=$about_ambulance['about_page_image']?>" />

      <?php endforeach; ?>
    <?php endif; ?>
<?php if ($text_information) :?>
  <?php foreach($text_information as $text_information):?>
      <div class="text_top font_w400_s18">
          <p> <?=$text_information['text_paragraph'] ?> </p>
        </div>
        <br>
        <?php endforeach; ?>
      <?php endif; ?>
<?php if ($about_banners) :?>
  <div class="about_slider_top">
  <?php foreach($about_banners as $banner):?>
      <div class="slider__item">
          <div>
            <img class="about_banner_desk" src="<?=$banner['about_banner_desk']?>" alt="<?=$banner['about_banner_alt']?>" title="<?=$banner['about_banner_title']?>" width="290" height="430">
      </div>
    </div>

    <?php endforeach;?>
  </div>
<?php endif;?>



      <div class="text_bottom font_w400_s18">
        Адрес: <?= carbon_get_theme_option('adress2'); ?>
      <br>
      <br>
        Главный врач: <?= carbon_get_theme_option('name_head_doctor'); ?>
      <br>
      <br> 
        Справочные: 
      <br>
      
        Главного врача: <?= carbon_get_theme_option('wa'); ?>, факс: <?= carbon_get_theme_option('fax'); ?>, e-mail: <?= carbon_get_theme_option('email'); ?>
      <br>
      
        Приемное отделение: 263-50-64
      <br>
      
        Травмпункт: 263-40-23
      <br>
      <br>
        Общее количество коек: 230 (200 круглосуточных + 30 дневного стационара), в т.ч. 9 коек реанимации.
      <br>
      <br>
        Городская больница №4 является многопрофильным лечебно-профилактическим учреждением г. Ростов-на-Дону, включающим в себя стационар (круглосуточный и дневной): городской эндокринологический центр, терапевтическое отделение, кардиологическое отделение с центром кардиореабилитации, нефрологическое отделение с диализным залом. Неврологическое отделение с центром нейрореабилитации, взрослый и детский травмпункт,
      <br>
      <br>
        МБУЗ «ГБ №4 г. Ростова-на-Дону» является клинической базой для кафедры и кафедры внутренних болезней №3 Ростовского Государственного медицинского университета, организационно-методическим центром по постдипломному обучению врачей г. Ростов-на-Дону, Ростовской области и других регионов страны. Участвует в клинических испытаниях и внедрении новых технологий и лекарственных средств на Федеральном уровне.
      <br>
      <br>
        Больница осуществляет прием больных по следующим профилям: терапия, неврология, кардиология, нефрология, эндокринология. Ежегодно больница оказывает помощь более 6 тыс. пациентам.
      <br>
      <br>
        Горбольница №4 в рамках договоров на оказание медицинской помощи в системе обязательного медицинского страхования сотрудничает со следующими страховыми медицинскими организациями: ЗАО «Макс-М», ООО МСО «Панацея», СМО ООО «АльфаСтрахование — ОМС» филиал «АсСтра», Ростовский филиал ОАО «Страховая компания «СОГАЗ Мед», филиал ООО «Капитал-Мед».





</div>
      <h3 class="subtitle_top font_w700_s35">Лицензии на осуществление медицинской деятельности</h3>
      <div class="about_slider_bottom">
        <?php if ($licenses) :?>
          <?php foreach($licenses as $license) :?>
        <div class="slider__item">
            <a href="<?=$license['license_link']?>"> <img src="<?=$license['license_image']?>" alt="img"></a>
        </div>
          <?php endforeach ;?>
        <?php endif ;?>
       </div>

      <h3 class="subtitle_bottom font_w700_s35">Общественный совет больницы</h3>
      <style>
        .block_item {
          width: 290px; 
          height: 110px; 
          text-align: center; 
          display: flex;
          justify-content: center;
          align-items: center;
        }
      </style>
      <div class="block_row" style="width: 290px; height: 110px;">
           <?php if ($bottom_slider) :?>
            <?php foreach($bottom_slider as $slider) :?>
              <div class="block_item font_w600_s18"><a href="<?=$slider['url']?>"><?=$slider['title']?></a></div>
              <?php endforeach ;?>
        <?php endif ;?> 


      </div>


      







   </div>
</section>













<?php get_footer(); ?>