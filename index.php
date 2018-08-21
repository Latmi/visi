<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 
<div class="preloader">
<!--    <div class="cssload-loader">-->
<!--        <div class="cssload-inner cssload-one"></div>-->
<!--        <div class="cssload-inner cssload-two"></div>-->
<!--        <div class="cssload-inner cssload-three"></div>-->
<!--    </div>-->
</div>
<section class="announcements pb-5">
    <div class="row mx-0">
        <div class="col-md-12 ann-title pl-5">
            <h2 class="pl-3"><img class="pr-4" src="<?=SITE_TEMPLATE_PATH?>/img/line-title.jpg"> Анонсы</h2>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-md-4 px-0 ann-item ">
            <img class="w-100 ann-item-img" src="<?=SITE_TEMPLATE_PATH?>/img/seksualnaya-magiya.jpg">
            <div class="row mx-0 ann-item-desc">
                <div class="col-12 align-self-start ann-item-title"></div>
                <div class="col-12 align-self-end pb-3 pl-5">
                    <a href="#"><p class="ann-item-who">Велеслав и Витослава Черкасовы</p></a>
                    <p class="font-lato">
                        <i class="far fa-calendar-alt pr-3 grey"></i><span class="pr-4">16 августа</span>
                        <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/price.png"><span class="pr-4">Бесплатно</span>
                        <i class="far fa-clock pr-3 grey"></i><span>2 часа</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 px-0 ann-item ">
            <img class="w-100 ann-item-img" src="<?=SITE_TEMPLATE_PATH?>/img/kak-nayti-dostoynogo-muzha.jpg">
            <div class="row mx-0 ann-item-desc">
                <div class="col-4 align-self-start ann-item-title"></div>
                <div class="col-12 align-self-end pb-3 pl-5">
                    <a href="#"><p class="ann-item-who">Александр Кичаев</p></a>
                    <p class="font-lato">
                        <i class="far fa-calendar-alt pr-3 grey"></i><span class="pr-4">16 сентября</span>
                        <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/price.png"><span class="pr-4">900 <i class="fas fa-ruble-sign"></i></span>
                        <i class="far fa-clock pr-3 grey"></i><span>2 часа</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 px-0 ann-item ">
            <img class="w-100 ann-item-img" src="<?=SITE_TEMPLATE_PATH?>/img/putevoditel-po-stihiyam.jpg">
            <div class="row mx-0 ann-item-desc">
                <div class="col-4 align-self-start ann-item-title"></div>
                <div class="col-12 align-self-end pb-3 pl-5">
                    <a href="#"><p class="ann-item-who">Татьяна Дорожкина</p></a>
                    <p class="font-lato">
                        <i class="far fa-calendar-alt pr-3 grey"></i><span class="pr-4">21 августа</span>
                        <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/price.png"><span class="pr-4">900 <i class="fas fa-ruble-sign"></i></span>
                        <i class="far fa-clock pr-3 grey"></i><span>2 часа</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-0 ann-link" id="counts">
        <div class="col-md-12 pl-5 align-self-center">
            <a href=""><span class="ann-link-item w-auto text-uppercase font-weight-bold">Все анонсы</span></a>
        </div>
    </div>
</section>
<section class="about">
    <div class="row mx-0">
        <div class="col-md-12 about-title pl-5">
            <h2 class="pl-3"><img class="pr-4" src="<?=SITE_TEMPLATE_PATH?>/img/line-title.jpg"> О центре</h2>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3 text-justify">
            <p>
                «Визионериум» — это центр личностного роста и площадка уникальных знаний, используя которые вы научитесь управлять своей жизнью и реализовывать самые смелые желания.
            </p>
            <p>    Вы сможете правильно определять свои цели и возможности и решать любые вопросы во всех сферах жизни – любовь, семья, работа, учеба, бизнес, путешествия.
            </p>
            <p><br>
                Наша миссия одновременно проста и сложна — помочь людям разобраться в самих себе.
            </p>
        </div>
        <div class="col-md-7 two-photo">
            <img class="first" src="<?=SITE_TEMPLATE_PATH?>/img/about-img1.jpg">
            <img class="second" src="<?=SITE_TEMPLATE_PATH?>/img/about-img2.jpg">
        </div>

    </div>
</section>

<section>
    <div class="row w-100 mx-0 count font-lato font-weight-bold align-items-center text-center">
        <div class="col-md-1 px-0"></div>
        <div style="border-left: 1px #f5ca99 solid;" class="col-md-2 px-0 count-item font-HelveticaNeueCyr"><b class="spincrement-low ">5</b> лет<br><span class="count-title font-lato">опыта</span></div>
        <div class="col-md-2 px-0 count-item font-HelveticaNeueCyr"><b class="spincrement-int">20</b><br><span class="count-title font-lato">специалистов</span></div>
        <div class="col-md-2 px-0 count-item font-HelveticaNeueCyr"><b class="spincrement-int">30</b><br><span class="count-title font-lato">семинаров</span></div>
        <div class="col-md-2 px-0 count-item font-HelveticaNeueCyr"><b class="spincrement-int">55</b><br><span class="count-title font-lato">вебинаров</span></div>
        <div class="col-md-2 px-0 count-item font-HelveticaNeueCyr"><b class="spincrement-low">50</b>K<br><span class="count-title font-lato">подписчиков</span></div>
        <div class="col-md-1 px-0"></div>
    </div>
</section>

<section class="couch pb-5">
    <div class="container-fluid">
        <div class="row w-100 mx-0 px-5">
            <div class="col-md-12 couch-title">
                <h2 class=""><img class="pr-4" src="<?=SITE_TEMPLATE_PATH?>/img/line-title.jpg"> Специалисты</h2>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item hover">
                    <div class="couch-img">
                        <img class="w-100" src="<?=SITE_TEMPLATE_PATH?>/img/petler.jpg" alt="">
                    </div>
                    <div class="social-link gradient">
                        <div class="row couch-height" >
                            <div class="col-12 soc soc-fb align-self-center py-0">
                                <div class="my-3 couch-soc couch-soc-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-in"><a href="#"><i class="fab fa-instagram"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-vk"><a href="#"><i class="fab fa-vk"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-yt"><a href="#"><i class="fab fa-youtube"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="couch-desc border-wear">
                        <p class="couch-name p-4 font-weight-bold"><a href="#">Владислава Петлер</a><br><span class="couch-prof grey font-weight-light">Таролог</span></p>
                    </div>
                </div>
                <div class="item hover ">
                    <div class="couch-img">
                        <img class="w-100" src="<?=SITE_TEMPLATE_PATH?>/img/platov.jpg" alt="">
                    </div>
                    <div class="social-link gradient">
                        <div class="row">
                            <div class="col-12 soc soc-fb align-self-center py-0">
                                <div class="my-3 couch-soc couch-soc-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-in"><a href="#"><i class="fab fa-instagram"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-vk"><a href="#"><i class="fab fa-vk"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-yt"><a href="#"><i class="fab fa-youtube"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="couch-desc border-wear">
                        <p class="couch-name p-4 font-weight-bold"><a href="#">Антон Платов</a><br><span class="couch-prof grey font-weight-light">Рунолог</span></p>
                    </div>
                </div>
                <div class="item hover">
                    <div class="couch-img">
                        <img class="w-100" src="<?=SITE_TEMPLATE_PATH?>/img/kichaev.jpg" alt="">
                    </div>
                    <div class="social-link gradient">
                        <div class="row">
                            <div class="col-12 soc soc-fb align-self-center py-0">
                                <div class="my-3 couch-soc couch-soc-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-in"><a href="#"><i class="fab fa-instagram"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-vk"><a href="#"><i class="fab fa-vk"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-yt"><a href="#"><i class="fab fa-youtube"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="couch-desc border-wear">
                        <p class="couch-name p-4 font-weight-bold"><a href="#">Александр Кичаев</a><br><span class="couch-prof grey font-weight-light">Психолог</span></p>
                    </div>
                </div>
                <div class="item hover">
                    <div class="couch-img">
                        <img class="w-100" src="<?=SITE_TEMPLATE_PATH?>/img/dorozhkina.jpg" alt="">
                    </div>
                    <div class="social-link gradient">
                        <div class="row">
                            <div class="col-12 soc soc-fb align-self-center py-0">
                                <div class="my-3 couch-soc couch-soc-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-in"><a href="#"><i class="fab fa-instagram"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-vk"><a href="#"><i class="fab fa-vk"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-yt"><a href="#"><i class="fab fa-youtube"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="couch-desc border-wear">
                        <p class="couch-name p-4 font-weight-bold"><a href="#">Татьяна Дорожкина</a><br><span class="couch-prof grey font-weight-light">Астролог</span></p>
                    </div>
                </div>
                <div class="item hover">
                    <div class="couch-img">
                        <img class="w-100" src="<?=SITE_TEMPLATE_PATH?>/img/dorozhkina.jpg" alt="">
                    </div>
                    <div class="social-link gradient">
                        <div class="row">
                            <div class="col-12 soc soc-fb align-self-center py-0">
                                <div class="my-3 couch-soc couch-soc-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-in"><a href="#"><i class="fab fa-instagram"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-vk"><a href="#"><i class="fab fa-vk"></i></a></div>
                                <div class="my-3 couch-soc couch-soc-yt"><a href="#"><i class="fab fa-youtube"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="couch-desc border-wear">
                        <p class="couch-name p-4 font-weight-bold"><a href="#">Татьяна Дорожкина</a><br><span class="couch-prof grey font-weight-light">Астролог</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="articles">
    <div class="container-fluid">
        <div class="row w-100 mx-0 px-5">
            <div class="col-md-12 couch-title">
                <h2 class=""><img class="pr-4" src="<?=SITE_TEMPLATE_PATH?>/img/line-title.jpg"> Статьи</h2>
            </div>
            <div class="col-md-4">
                <img class="w-100" src="<?= SITE_TEMPLATE_PATH ?>/img/article1.jpg" alt="">
                <p class="font-lato color-grey mt-4">
                    <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/time-black.png"><span class="pr-5">08.08.2018</span>
                    <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/who.png"><a href="#"><span class="hover-wear">Велеслав Черкасов</span></a>
                </p>
                <a href="#"><p class="mt-4 font-weight-bold text-uppercase color-black hover-wear articles-title">Можно ли разводиться согласно славянской традиции</p></a>
            </div>
            <div class="col-md-4">
                <img class="w-100" src="<?= SITE_TEMPLATE_PATH ?>/img/article2.jpg" alt="">
                <p class="font-lato color-grey mt-4">
                    <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/time-black.png"><span class="pr-5">30.07.2018</span>
                    <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/who.png"><a href="#"><span class="hover-wear">Бецалэль Ариэли</span></a>
                </p>
                <a href="#"><p class="mt-4 font-weight-bold text-uppercase color-black hover-wear articles-title">Можно ли изменить результат прогноза таро</p></a>
            </div>
            <div class="col-md-4">
                <img class="w-100" src="<?= SITE_TEMPLATE_PATH ?>/img/article3.jpg" alt="">
                <p class="font-lato color-grey mt-4">
                    <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/time-black.png"><span class="pr-5">03.08.2018</span>
                    <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/who.png"><a href="#"><span class="hover-wear">Александр Кичаев</span></a>
                </p>
                <a href="#"><p class="mt-4 font-weight-bold text-uppercase color-black hover-wear articles-title">Как сделать мужчину рабом своих желаний</p></a>
            </div>
        </div>
        <div class="row mx-0 articles-link">
            <div class="col-md-12 pl-6 align-self-center mt-5">
                <a href="#"><span class="ann-link-item w-auto text-uppercase font-weight-bold pl-2">Все анонсы</span></a>
            </div>
        </div>
    </div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>