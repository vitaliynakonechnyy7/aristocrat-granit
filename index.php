<!DOCTYPE html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv='content-language' content='uk-ua'>
        <!-- google fonts -->     
		<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet" type='text/css'>
        <link rel="canonical" href='https://aristocrat-granit.com.ua/' hreflang="uk-ua" />
        <link rel="alternate" href='http://aristocrat-granit.com.ua/' hreflang="uk-ua" />
        <link rel="alternate" href='https://aristocrat-granit.com.ua/ru' hreflang="ru-ua" />
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="сходи для будинку, пам'ятники з граніту, підвіконня, підвіконня з граніту, огорожі, барні стійки з граніту " />
        <!--<meta content="На цій сторінці можна знайти вироби з граніту:Сходи для будинку, пам'ятники, підвіконня, огорожі, барні стойки" name="description">-->
        <title>Вироби з граніту в Житомирі і в Україні.</title>
        <meta name="description" content="Aristocrat-Granit - інтернет-магазин гранитніх виробів. Продукція від виробника ✓ Якісно. ✓ Гарантія. ✓ Доставка по всій Україні. ☎ +38 (096) 806 11 28. " />
        <meta name='viewport' content='width=device-width,initial-scale=1'/>
        <meta content='true' name='HandheldFriendly'/>
        <meta content='width' name='MobileOptimized'/>
        <meta content='yes' name='apple-mobile-web-app-capable'/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
  include 'parts/header-links.php';
  include 'config/db.php';
//   $sql = "SELECT * FROM categories WHERE id=" . $_GET['id'];
//   $category = mysqli_fetch_assoc ($conn->query($sql));
  include 'parts/header_menu-ukr.php';
?>
       <!-- slider-section-start -->
       <section class="slider-main-area">
        <div class="main-slider an-si">
            <div class="bend niceties preview-2 hm-ver-1">
                <div id="ensign-nivoslider-2" class="slides">	
                    <img src="img\slider\1.jpg" alt="Аристократ банер" title="Банер компанії"  />
                    <img src="img\slider\stup.webp" alt="Сходи для будинку" loading="lazy" title="Сходи"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-3" class="t-cn slider-direction Builder">
                    <div class="slide-all">
                        <!-- layer 1 -->
                        <div class="layer-1">
                            <h1 class="title5"> </h1>
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-2">
                            <h2 class="title6">Вироби з граніту від виробника і без посредника</h2>
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-2">
                            <p class="title0" style="color:brown">Про знижки домовимось</p>
                        </div>
                        <!-- layer 3 -->
                        <div class="layer-3">
                            <a class="min1" href="#">Замовте прорахунок</a>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction Builder">
                    <div class="slide-all slide2">
                        <!-- layer 1 -->
                        <div class="layer-1">
                            <h2 class="title5">Нове на сайті</h2>
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-2">
                            <h2 class="title6">Отож з чого почати ?</h2>
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-2">
                            <p class="title0" style="color:brown">Подивіться нижче що ми можемо запропунувати </p>
                        </div>
                        <!-- layer 3 -->
                        <div class="layer-3">
                            <a class="min1" href="#">Замовити прорахунок</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider section end -->
    <!-- collection section start -->
    <div class="banner-area">
        <div class="container">
            <div class="section-padding1">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="banner-box banner-box-re">
                            <a href="#">
                                <img alt="сходи" src="img\slider\stup.webp" loading="lazy" style='height: 300px; line-height: 130px; width: 100%;'>
                                <div>
                                    <h2>
                                    Сходи
                                        <span>для будинку</span>
                                    </h2>
                                    <p>ідеї робимо реальними</p>
                                </div>
                            </a>
                        </div>
                        <div class="banner-box res-btm">
                            <a href="#">
                                <img alt="камін з граніту" src="img\banner\kamin_iz_granita_pod_zakaz_5.webp"
                                 loading="lazy" style='height: 300px; line-height: 130px; width: 100%;'>
                                <div>
                                    <h2>
                                    Каміни печі барбекю
                                        <span>для дому</span>
                                    </h2>
                                    <p>виготовлення і монтаж </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="banner-container banner-box res-btm">
                            <a href="#">
                                <img alt="замовити дизайнерський красивий пам'ятник з граніту або каменю Житомир Україна"
                                 src="img\banner\pamyatniki_iz_granita_i_kamnya_pod_zakaz_zhitomir_ukraina.webp" loading="lazy">
                                <div>
                                    <h2>
                                    Дизайнерський
                                        <span>пам'ятник</span>
                                    </h2>
                                    <p>пам'ятник з граніту за індивідуальним замовленням</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="banner-box banner-box-re">
                            <a href="#">
                                <img alt="огорожа з граніту Житомир Україна" src="img\banner\zabor_iz_kamnya_i_granita_pod_individualnyj_zakaz_zhitomir.webp"
                                 loading="lazy" style='height: 300px; line-height: 130px; width: 100%;'>
                                <div>
                                    <h2>
                                    Огорожі
                                        <span>для дому і саду</span>
                                    </h2>
                                    <p>+ кришки для стовпів  накривки - парапети </p>
                                </div>
                            </a>
                        </div>
                        <div class="banner-box">
                            <a href="#">
                                <img alt="ступени для крыльца с балясинами из гранита Житомир Украина" src="img\banner\stupeni_krilco_balyasini_iz_granita_pod_individualnyj_zakaz_zhitomir.webp" 
                                 loading="lazy" style='height: 300px; line-height: 130px; width: 100%;'>
                                <div>
                                    <h2>
                                       Сходи
                                        <span>різної складності</span>
                                    </h2>
                                    <p>маємо великий досвід в виготовленні і монтажі різних конструкцій сходів біля дому і в приміщенні</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collection section end -->
        <!-- нове-products section start -->
		<section class="featured-products single-products section-padding-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h3>КАТЕГОРії</h3>
							<div class="section-icon">
                                <i class="fa fa-dot-circle-o"></i>
                            </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="product-tab nav nav-tabs">
							<ul>                                        
								<li class="active"><a data-toggle="tab" href="#kamin">КАМІНИ</a></li>
								<li><a data-toggle="tab" href="#barnie_stoyki">БАРНІ СТІЙКИ</a></li>
								<li><a data-toggle="tab" href="#vannie_umivalniki">КУХНЯ І ВАННА КІМНАТА</a></li>
                                <li>
                                       <!-- <//?php
                                            // $sql = "SELECT * FROM categories";
                                            // $result = $conn->query($sql);

                                            // while ($row = mysqli_fetch_assoc($result)) {
                                            //     echo " <a data-toggle='tab' href='#'>" . $row['title'] ."</a>";
                                            // }
                                        ?> -->
                                </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row tab-content">
					<div class="tab-pane  fade in active" id="kamin">
						<div id="tab-carousel-1" class="re-owl-carousel owl-carousel product-slider owl-theme" >
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_14_2.jpg" loading="lazy" alt="камін" />
                                            <img class="secondary-image" alt="Камін для вітальні" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_14.jpg" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Камін для вітальні</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img" >
                                        <div class="pro-type"  >
                                            <span>нове</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_6.jpg" loading="lazy" alt="Камін або портал для будинку"/>
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_6_2.jpg" loading="lazy" alt="Камін або портал для будинку">
                                            <!-- style="height: 480px; width: 606px; !important" -->
                                        </a>  
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Камін або портал</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_20.jpg" loading="lazy" alt="Камін або портал для  квартири або кімнати" />
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_20_2.jpg" loading="lazy" alt="Камін або портал для квартири або кімнати">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Камін або портал для кімнати</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_1.jpg" loading="lazy" alt="Різьбленний камін з граніту" />
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_1_2.jpg" loading="lazy" alt="Різьбленний камін з граніту" >
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Камін з граніту для кімнати</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_8_2.jpg" loading="lazy" alt="Облицювання каміну річним каменем" />
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_8.jpg" loading="lazy" alt="Облицювання каміну річним каменем">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Облицювання каміну</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_3_2.jpg" loading="lazy" alt="Камін з лабродариту і граніту" />
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_3.jpg" loading="lazy" alt="Камін з лабродариту і граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Лабродарит і граніт</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>нове</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_17_2.jpg" loading="lazy" alt="Камін для квартири з граніту чи мрамору" />
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_17.jpg" loading="lazy" alt="Камін для квартири з граніту чи мрамору">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Камін для будинку</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_2_2.jpg" loading="lazy" alt="Компактний камін для будинку чи дачі" />
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_2.jpg" loading="lazy" alt="Компактний камін для будинку чи дачі">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Компактний</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_7_2.jpg" loading="lazy" alt="Піч і барбекю" />
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_7.jpg" loading="lazy" alt="Піч і барбекю">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Піч і барбекю</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_5_2.jpg" loading="lazy" alt="Гранітний камін з різними колонами" />
                                            <img class="secondary-image" src="img\kamin\kamin_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_portal_oblicovka_pod_zakaz_5.jpg" loading="lazy" alt="Гранітний камін з різними колонами">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">З різними колонами</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
						</div>
					</div>
					<!-- all shop product end -->
					<div class="tab-pane  fade in" id="barnie_stoyki">
						<div id="tab-carousel-2" class="owl-carousel product-slider owl-theme">
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_7_2.jpg" loading="lazy" alt="Піч і барбекю" />
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_7.jpg" loading="lazy" alt="Піч і камін">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Піч і камін</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_25_2.jpg" loading="lazy" alt="Стільниця для кухні зі столом" />
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_25.jpg" loading="lazy" alt="Стільниця для кухні зі столом та бар стійкою">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Стільниця для кухні</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_6_2.jpg" loading="lazy" alt="Стільниця для кухні з робочою частиною" />
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_6.jpg" loading="lazy" alt="Робоча частина для кухні зі столом та бар стійкою">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Робоча частина</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_3_2.jpg" loading="lazy" alt="Стільниця для кухні з робочою частиною з граніту з рваними краями" />
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_3.jpg" loading="lazy" alt="Стільниця для кухні з робочою частиною з граніту під мийку">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">З рваними краями</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_17_2.jpg" loading="lazy" alt="Стільниця для столу вітальні з граніту" />
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_17.jpg" loading="lazy" alt="Стільниця для столу кабінету з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Вітальня чи кабінет</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_9_2.jpg" loading="lazy" alt="Стільниця для кухонного столу з граніту" />
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_9.jpg" loading="lazy" alt="Стільниця для кухонного столу з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Кухонний стіл</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_14_2.jpg" loading="lazy" alt="Стільниця для кухонного столу бар стійка з граніту" />
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_14.jpg" loading="lazy" alt=" бар стійка для кухні чи бару з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Бар стійка</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>нове</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_13_2.jpg" loading="lazy" alt="бар стійка для кухні з граніту"/>
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_13.jpg" loading="lazy" alt="бар стійка для кухні з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Бар</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>нове</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_16_2.jpg" loading="lazy" alt="бар стійка для кухні з граніту"/>
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_16.jpg" loading="lazy" alt="бар стійка для кухні з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Бар стійка</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_12_2.jpg" loading="lazy" alt="стільниця для кухні під мийку з граніту"/>
                                            <img class="secondary-image" src="img\bar-stoyka\bar_stoyka_stoleshnica_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_kuhni_bara_oblicovka_pod_zakaz_12.jpg" loading="lazy" alt="стільниця для кухні і ванної під мийку з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Під мийку</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
						</div>
					</div>
					<!-- clothings product end -->
					<div class="tab-pane  fade in" id="vannie_umivalniki">
						<div id="tab-carousel-3" class="owl-carousel product-slider owl-theme">
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size'  src="img\vannie-umivalniki\vannaya_umyvalnik_stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_oblicovka_pod_zakaz_1_2.jpg" loading="lazy" alt="стільниця для ванної під умивальник з граніту"/>
                                            <img class="secondary-image" src="img\vannie-umivalniki\vannaya_umyvalnik_stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_oblicovka_pod_zakaz_1.jpg" loading="lazy" alt="стільниця для ванної під накладний умивальник з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Для ванної</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_9.jpg" loading="lazy" alt="стільниця для ванної на врізний умивальник з граніту"/>
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_9_2.jpg" loading="lazy" alt="стільниця для ванної на врізний умивальник">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Врізний умивальник</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_2_2.jpg" loading="lazy" alt="стільниця накладна для ванної на врізний умивальник з граніту"/>
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_2.jpg" loading="lazy" alt="стільниця накладна для ванної на врізний умивальник з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Врізний умивальник</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>нове</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_6.jpg" loading="lazy" alt="стільниця для кухні під індукційну, електричну або газову плиту" />
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_6_2.jpg" loading="lazy" alt="стільниця для кухні під індукційну, електричну або газову плиту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Стільниця під плиту</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_3_2.jpg" loading="lazy" alt="стільниця для кухні під плиту і раковини для посуду" />
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_3.jpg" loading="lazy" alt="стільниця для кухні під раковини для посуду">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Під плиту і раковину</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_5.jpg" loading="lazy" alt="стільниця для ванної під подвійні раковини"/>
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_5_2.jpg" loading="lazy" alt="стільниця для ванної з граниту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Подвійні раковина</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>РОЗПРОДАЖ</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_4_2.jpg" loading="lazy" alt="стільниця для кухні під раковину з граниту"/>
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_4.jpg" loading="lazy" alt="стільниця для кухні студію під раковину з граниту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Стільниця для кухні</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>нове</span>
                                        </div>
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_7_2.jpg" loading="lazy" alt="стільниця в ванну під раковину і пральну машину з граніту" />
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_7.jpg" loading="lazy" alt="стільниця в ванну під раковину і пральну машину з граніту" >
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">На пральну машиу</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_12_2.jpg" loading="lazy" alt="стільниця в ванну під раковину і пральну машину з граніту"/>
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_12.jpg" loading="lazy" alt="стільниця в ванну під раковину і пральну машину з граніту">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Ванна кімната</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
								<div class="single-product margin-top">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class='fixed-size' src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_8_2.jpg" loading="lazy" alt="стільниця для кухні під раковини для посуду" />
                                            <img class="secondary-image" src="img\vannie-umivalniki\stoleshnici_iz_granita_ili_mramora_kamnya_dlya_vannoy_doma_kuhni_bara_oblicovka_pod_zakaz_8.jpg" loading="lazy" alt="стільниця для кухні під раковини для посуду" >
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Під раковину</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$ ціну краще уточнити</span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <!-- <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a> -->
                                        <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
							</div>
							<!-- single product end -->
						</div>
					</div>
					<!-- accessories product end -->
				</div>
			</div>
		</section>
		<!-- products section end -->
        <!-- ВІДГУКИ section start -->
		<section class="testimonials stripe-parallax-bg" data-parallax-speed="0.5">
			<div class="re-testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title re-section-title">
                                <h3>ВІДГУКИ</h3>
                                <div class="section-icon re-section1">
                                    <i class="fa fa-dot-circle-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-text-center text-center">
                            <div id="testimonials" loading="lazy" class="re-owl-carousel2 owl-carousel product-slider owl-theme">
                                <div class="single-testimonial">
                                    <div class="testimonal-dsc">
                                        <p> ТУТ МОЖЕ БУТИ ВАШ ВІДГУК </p>
                                    </div>
                                    <div class="testimonial-img">
                                        <a href="#"><img src="img\testimonial\2.webp" loading="lazy" alt="фото клієнта" /></a>
                                        <h4><a href="#">ВАШЕ ІМ'Я</a></h4>
                                        <span>ТА ПОСАДА</span>
                                    </div>
                                </div>
                                <!-- single testimonial item end -->
                                <div class="single-testimonial">
                                    <div class="testimonial-dsc">
                                        <p>Опис вашого досвіду співпраці з фірмою Aristocrat</p>
                                    </div>
                                    <div class="testimonial-img">
                                        <a href="#"><img src="img\testimonial\2.webp" loading="lazy" alt="фото клієнта" /></a>
                                        <h4><a href="#">ВАШЕ ІМ'Я</a></h4>
                                        <span>ТА ПОСАДА</span>
                                    </div>
                                </div>
                                <!-- single testimonial item end -->
                                <div class="single-testimonial">
                                    <div class="testimonial-dsc">
                                        <p>Опис вашого досвіду співпраці з фірмою Aristocrat</p>
                                    </div>
                                    <div class="testimonial-img">
                                        <a href="#"><img src="img\testimonial\2.webp" loading="lazy" alt="фото клієнта" /></a>
                                        <h4><a href="#">ВАШЕ ІМ'Я</a></h4>
                                        <span>ТА ПОСАДА</span>
                                    </div>
                                </div>
                                <!-- ВІДГУКИ testimonial item end -->
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
       <!-- ВІДГУКИ  section end -->
       <!-- new-products section start -->
		<section class="new-products single-products section-padding-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h3>НОВЕ НА САЙТ</h3>
							<div class="section-icon">
							    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="new-products" class="owl-carousel product-slider owl-theme">
						<div class="col-xs-12">
							<div class="single-product">
								<div class="product-img">
									<div class="pro-type">
										<span>НОВЕ</span>
									</div>
									<a href="#">
                                    <img class='fixed-size'src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_4_2.jpg" loading="lazy" alt="Сходи для будинку"/>                                    
                                    
                                    <img class="secondary-image" src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_4.jpg" loading="lazy" alt="Сходи для будинку"/>
								    </a>
								</div>
								<div class="product-dsc">
									<h3><a href="#">Сходи для будинку</a></h3>
									<div class="star-price">
									    <span class="price-left">$ ціну уточніть будь ласка</span>
									</div>
								</div>
								<div class="actions-btn">
									<a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a>
									<!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
									<a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
								</div>
							</div>
						</div>
						<!-- single product end -->
						<div class="col-xs-12">
							<div class="single-product">
								<div class="product-img">
									<div class="pro-type">
										<span>НОВЕ</span>
									</div>
									<a href="#">
                                    <img class='fixed-size' src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_7.jpg" loading="lazy" alt="Напівкруглі сходи" />
                                    <img class="secondary-image" alt="Напівкруглі сходи" src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_7_2.jpg" loading="lazy">
								    </a>
								</div>
								<div class="product-dsc">
									<h3><a href="#">Напівкруглі сходи</a></h3>
									<div class="star-price">
									    <span class="price-left">$ ціну уточніть будь ласка</span>
									</div>
								</div>
								<div class="actions-btn">
									<a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a>
									<!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
									<a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
								</div>
							</div>
						</div>
						<!-- single product end -->
						<!-- single product end -->
                        <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img class='fixed-size' src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_1.jpg" loading="lazy" alt="Сходи з перилами" />
                                    <img class="secondary-image" alt="Сходи з перилами" src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_1_2.jpg" loading="lazy">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">Сходи з перилами</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$ ціну уточніть будь ласка</span>
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a>
                                <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>НОВЕ</span>
                                </div>
                                <a href="#">
                                    <img class='fixed-size' src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_2.jpg" loading="lazy" />
                                    <img class="secondary-image" alt="Сходи для терасси чи саду" src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_2_2.jpg" loading="lazy">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">Сходи для терасси чи саду</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$ ціну уточніть будь ласка</span>
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a>
                                <!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
                            </div>
                        </div>
                    </div>
						<!-- single product end -->
						<div class="col-xs-12">
							<div class="single-product">
								<div class="product-img">
									<div class="pro-type">
										<span>НОВЕ</span>
									</div>
									<a href="#">
                                    <img class='fixed-size' src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_5.jpg" loading="lazy" alt="Сходи в середені дому" />
                                    <img class="secondary-image" alt="Сходи в середені дому" src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_5_2.jpg" loading="lazy">
								    </a>
								</div>
								<div class="product-dsc">
									<h3><a href="#">В середені дому</a></h3>
									<div class="star-price">
									    <span class="price-left">$ ціну уточніть будь ласка</span>
									</div>
								</div>
								<div class="actions-btn">
									<a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="ПЕРЕГЛЯНУТИ"><i class="fa fa-eye"></i></a>
									<!-- <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
									<a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a> -->
								</div>
							</div>
						</div>
						<!-- single product end -->
					</div>
				</div>
			</div>
		</section>
		<!-- new-products section end -->
            <!-- Переглянути start -->
		<div class="quick-view modal fade in" id="quick-view">
			<div class="container">
				<div class="row">
					<div id="view-gallery" class="owl-carousel product-slider owl-theme">
						<div class="col-xs-12">
							<div class="d-table">
								<div class="d-tablecell">
									<div class="modal-dialog">
										<div class="main-view modal-content">
											<div class="modal-footer" data-dismiss="modal">
												<span>x</span>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-8">
													<div class="quick-image">
														<div class="single-quick-image tab-content text-center">
															<div class="tab-pane  fade in active" id="sin-pro-1">
                                                            <img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_4.jpg" 
                                                                 loading="lazy" alt="Сходи під дерев'яні перила" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-2">
                                                            <img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_4_2.jpg" 
                                                                 loading="lazy" alt="Сходи під дерев'яні перила" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-3">
																<img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_1.jpg" loading="lazy" alt="Сходи з перилами" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-4">
																<img src="img/quick-view/10.jpg" alt="швидкий перегляд" />
															</div>
														</div>
														<div class="quick-thumb">
															<div class="nav nav-tabs">
																<ul>
                                                                    <li><a data-toggle="tab" href="#sin-pro-1"> <img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_4.jpg" 
                                                                         loading="lazy" alt="Сходи під дерев'яні перила" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-2"> <img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_4_2.jpg" loading="lazy" alt="Сходи під дерев'яні перила" /> </a></li>
																	<!-- <li><a data-toggle="tab" href="#sin-pro-3"> <img src="img/quick-view/10.jpg" alt="Переглянути" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-4"> <img src="img/quick-view/10.jpg" alt="Переглянути" /> </a></li> -->
																</ul>
															</div>
														</div>
													</div>							
												</div>
												<div class="col-xs-12 col-sm-4">
													<div class="quick-right">
														<div class="quick-right-text">
															<h3><strong>Сходи під дерев'яні перила</strong></h3>
															<div class="amount">
																<h4>$1</h4>
															</div>
															<p>Дерево і камінь між собою здаються дуже різними. В той же час використовуються в будівництві обидва найчастіше. В цьому варіанті декілька рівнів сходів з невеликою центральною колонною і завкругленними сходами. </p>
															<div class="row m-p-b">
                                                                <div class="col-sm-6">
																	<div class="por-dse responsive-strok clearfix">
																		<ul>
																			<li><span>Категорія</span><strong>:</strong> сходи</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="dse-btn">
																<div class="row">
                                                                   <div class="col-sm-8">
																		<div class="por-dse clearfix">
																			<ul>
																				<li class="share-btn qty clearfix"><span>кількість</span>
																					<form action="#" method="POST">
																						<div class="plus-minus">
                                                                                            <a class="dec qtybutton">-</a>
                                                                                            <label>
                                                                                                <input type="checkbox" value="1" name="qtybutton" class="plus-minus-box">
                                                                                            </label>
																							<a class="inc qtybutton">+</a>
																						</div>
																					</form>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-sm-10">
																		<div class="por-dse add-to">
																			<a href="#">Купити</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
                                                </div>
                                                
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="d-table">
								<div class="d-tablecell">
									<div class="modal-dialog">
										<div class="main-view modal-content">
											<div class="modal-footer" data-dismiss="modal">
												<span>x</span>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-8">
													<div class="quick-image">
														<div class="single-quick-image tab-content text-center">
															<div class="tab-pane  fade in active" id="sin-pro-14">
                                                            <img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_1.jpg" loading="lazy" alt="Сходи з перилами" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-15">
                                                            <img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_1_2.jpg" loading="lazy" alt="Сходи з перилами" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-7">
																<img src="img/quick-view/10.jpg" alt="швидкий перегляд" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-8">
																<img src="img/quick-view/10.jpg" alt="швидкий перегляд" />
															</div>
														</div>
														<div class="quick-thumb">
															<div class="nav nav-tabs">
																<ul>
																	<li><a data-toggle="tab" href="#sin-pro-14"> <img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_1.jpg" loading="lazy" alt="Сходи з перилами" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-15"> <img src="img\stupeni\stupeni_perila_iz_granita_ili_mramora_kamnya_dlya_gostinnoy_doma_oblicovka_pod_zakaz_1_2.jpg" loading="lazy" alt="Сходи з перилами" /> </a></li>
																	<!-- <li><a data-toggle="tab" href="#sin-pro-7"> <img src="img/quick-view/10.jpg" alt="Переглянути" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-8"> <img src="img/quick-view/10.jpg" alt="Переглянути" /> </a></li> -->
																</ul>
															</div>
														</div>
													</div>							
												</div>
												<div class="col-xs-12 col-sm-4">
													<div class="quick-right">
														<div class="quick-right-text">
															<h3><strong>Напівкруглі сходи</strong></h3>
															<div class="amount">
																<h4>$3</h4>
															</div>
															<p>Гарний варіант якщо є інтенсивний рух коло входу. Достатньо просто і без зайвого.</p>
															<div class="row m-p-b">
																<div class="col-sm-6">
																	<div class="por-dse">
																		<ul>
																			<li><span>Категорія</span><strong>:</strong>сходи </li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="dse-btn">
																<div class="row">
																	<div class="col-sm-8">
																		<div class="por-dse">
																			<ul>
																				<li class="share-btn qty clearfix"><span>кількість</span>
																					<form action="#" method="POST">
																						<div class="plus-minus">
                                                                                            <a class="dec qtybutton">-</a>
                                                                                            <label>
                                                                                               <input type="text" value="01" name="qtybutton" class="plus-minus-box"> 
                                                                                            </label>
																							<a class="inc qtybutton">+</a>
																						</div>
																					</form>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-sm-10">
																		<div class="por-dse add-to">
																			<a href="#" class="por-dse-add-to">Купити</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- single-product item end -->
					</div>
				</div>
			</div>
		</div>
		<!-- Переглянути end -->
        <?php
          include 'parts/footer_info-ukr.php';
          include 'parts/footer.php';
       ?>