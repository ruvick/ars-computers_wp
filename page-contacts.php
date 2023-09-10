<?php 

/*
Template Name: Страница Контакты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>  

<main class="page">
  <section class="page-text section">
  <div class="_container">

  <?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
		}
	?> 

<h1 class="page-text__title title"><? the_title();?></h1>

<? $org = carbon_get_theme_option("as_company"); if (!empty($org)){?><h4 class="page-text__contacts-name">Организация: <span><? echo $org; ?></span></h4><?}?> 
<ul class="page-text__list list-contacts">
	<? $inn = carbon_get_theme_option("as_inn"); if (!empty($inn)){?><li class="list-contacts__item">ИНН: <span><? echo $inn; ?></span></li><?}?>
	<? $kpp = carbon_get_theme_option("as_kpp"); if (!empty($kpp)){?><li class="list-contacts__item">КПП: <span><? echo $kpp; ?></span></li><?}?>
	<? $bik = carbon_get_theme_option("as_bik"); if (!empty($bik)){?><li class="list-contacts__item">БИК: <span><? echo $bik; ?></span></li><?}?>
	<li class="list-contacts__item">Время работы: <span>Пн-Пт, с 10 - 18.00</span></li>
	<? $adr = carbon_get_theme_option("as_address"); if (!empty($adr)){?><li class="list-contacts__item">Адрес: <span><? echo $adr; ?></span></li><?}?>
	<? $mail = carbon_get_theme_option("as_email"); if (!empty($mail)){?><li class="list-contacts__item">Email: <span><a href="mailto:<? echo $mail; ?>"><? echo $mail; ?></span></a></li><?}?>
	<? $tel = carbon_get_theme_option("as_phones_1"); 
		 $tel2 = carbon_get_theme_option("as_phone_2"); 
		 if (!empty($tel)){?><li class="list-contacts__item">Тел: <span><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="list-contacts__link"><? echo $tel; ?></span></a>
		<span><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel2); ?>" class="list-contacts__link"><? echo $tel2; ?></span></a></li><?}?> 
	<? $vk= carbon_get_theme_option("as_vk"); if (!empty($vk)){?>
		<li class="list-contacts__item">Социальные сети:
			<a href="<? echo $vk; ?>" class="contacts-social-link contacts-social-link--vk"></a>
		</li> 
	<?}?>
</ul>

</div>
</section>

<section class="map-section">
	<div id="map" class="map-section map"></div>

		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> 

		<script>
			ymaps.ready(init); 

			function init () {
				var myMap = new ymaps.Map("map", {
        // Координаты центра карты
        center:[<?php echo carbon_get_theme_option('map_point') ?>],
        // Масштаб карты
        zoom: 17,
        // Выключаем все управление картой
        controls: []
      }); 

				var myGeoObjects = [];

    // Указываем координаты метки
    myGeoObjects = new ymaps.Placemark([<?php echo carbon_get_theme_option('map_point') ?>],{
    								// hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
    								balloonContent: '<div class="map-hint"><?php echo carbon_get_theme_option('text_map') ?>', },{
    								iconLayout: 'default#image',
                    // Путь до нашей картинки
                    iconImageHref:  '<?php bloginfo("template_url"); ?>/img/icons/map-marker.svg',  
                    // Размеры иконки
                    iconImageSize: [65, 65],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [-25, -100]
                  });

    var clusterer = new ymaps.Clusterer({
    	clusterDisableClickZoom: false,
    	clusterOpenBalloonOnClick: false,
    });
    
    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    // Отключим zoom
    myMap.behaviors.disable('scrollZoom');

  }
</script>

</section>

</main>

<?php get_footer(); 
