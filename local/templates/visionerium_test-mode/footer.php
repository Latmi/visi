<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


</div>

<footer>
    <div class="container-fluid pt-5">
        <div class="row w-100 mx-0 px-5 pt-5 pb-3">
            <div class="col-md-3 information font-weight-light">
                <h5 class="font-weight-bold">Информация</h5>
                <hr>
                <a href="#"><p class="footer-line">Договор-оферта (обучение)</p></a>
                <a href="#"><p class="footer-line">Договор-оферта (консультации)</p></a>
                <br>
                <p>Вся представленная информация, о стоимости товаров и услуг носит информационный характер и не
                    является публичной офертой, определяемой положениями Статьи 437(2) ГК РФ</p>
            </div>
            <div class="col-md-3 contacts font-weight-light">
                <h5 class="font-weight-bold">Контакты</h5>
                <hr>
                <div class="row">
                    <div class="col-auto"><i class="fas fa-phone"></i></div>
                    <div class="col">
                        <p>
                            +7 (495) 208-11-11<br>
                            +7 (926) 807-70-10
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto"><i class="far fa-envelope"></i></div>
                    <div class="col">
                        <a href="#"><p class="footer-line font-weight-bold">info@visionerium.ru</p></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="col">
                        <p>
                            Москва-Сити, Пресненская наб. 12,<br>
                            Башня «Федерация» (Запад), 44 этаж, офис 4402<br>
                            c 12:00 до 22:00 по Москве
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 social font-weight-light">
                <h5 class="font-weight-bold">Мы в соцсетях</h5>
                <hr>
                <div class="list-inline ">
                    <div class="f-fb f-soc list-inline-item text-center"><a href="#"><i class="fab fa-facebook-f soc-item"></i></a></div>
                    <div class="f-in f-soc list-inline-item text-center"><a href="#"><i class="fab fa-instagram soc-item"></i></a></div>
                    <div class="f-vk f-soc list-inline-item text-center"><a href="#"><i class="fab fa-vk soc-item"></i></a></div>
                    <div class="f-yt f-soc list-inline-item text-center"><a href="#"><i class="fab fa-youtube soc-item"></i></a></div>
                </div>

            </div>
            <div class="col-md-3">
                <form class="footer-form" method="post" action="#">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <h5 class="text-center text-uppercase pt-5">Подписаться на рассылку</h5>
                            <hr class="ml-4">
                            <p class="p-4 text-justify">
                                Подпишитесь на нашу рассылку и узнавайте первыми о последних новостях, новых событиях и специальных предложениях.
                            </p>

                            <div class="Input">
                                <input type="text" id="input" class="Input-text" placeholder="Введите ваш e-mail">
                                <label for="input" class="Input-label">E-mail</label>
                            </div>

                            <div class="text-left p-4 mt-3">
                                <input class="footer-btn" type="submit" value="отправить">
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>

                </form>
            </div>
            <div class="col-md-12 bottom-menu">
                <hr style="margin-top: 3.3em;">
                <div class="row">
                    <div class="col">
                        <img style="height: 50px" src="<?=SITE_TEMPLATE_PATH?>/img/logonpf.png" alt="">
                    </div>
                    <div class="col-auto align-self-center">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Главная<div class="line"></div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Расписание<div class="line"></div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">О центре<div class="line"></div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Специалисты<div class="line"></div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Статьи<div class="line"></div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты<div class="line"></div></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col copy align-self-center font-weight-light text-right footer-line" style="color: #fff;">
                        2018 &copy VISIONERIUM
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<div class="up">

</div>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/popper.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ias.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.spincrement.js"></script>

<script>


    $(window).on('load', function () {
        $preloader = $('.preloader'),
            $loader = $preloader.find('.cssload-loader');
        $loader.fadeOut();
        $preloader.delay(350).fadeOut('slow');
    });


    $(document).ready(function () {


        $(window).scroll (function () {
            if ($ (this).scrollTop () > 0) {
                $('.header').addClass('header-slick');
                $('.logo-header').css({opacity: 1});
            }
            if ($ (this).scrollTop () === 0) {
                $('.header').removeClass('header-slick');
                $('.logo-header').css({opacity: 0});
            }
        });


        if ($('#counts').length) {
            var show = true;
            var countbox = "#counts";
            $(window).on("scroll load resize", function(){
                if(!show) return false;                   // Отменяем показ анимации, если она уже была выполнена
                var w_top = $(window).scrollTop();        // Количество пикселей на которое была прокручена страница
                var e_top = $(countbox).offset().top;     // Расстояние от блока со счетчиками до верха всего документа
                var w_height = $(window).height();        // Высота окна браузера
                var d_height = $(document).height();      // Высота всего документа
                var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
                if(w_top + 200 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height){
                    $(".spincrement").spincrement({
                        decimalPoint: ",",
                        decimalPlaces: 1,
                        duration: 1200
                    });
                    $(".spincrement-low").spincrement({
                        thousandSeparator: "",
                        duration: 5000
                    });
                    $(".spincrement-int").spincrement({
                        thousandSeparator: "",
                        duration: 2000
                    });
                    show = false;
                }
            });
        }
        // from: 0,                // Стартовое число
        //     to: false,              // Итоговое число. Если false, то число будет браться из элемента с классом spincrement, также сюда можно напрямую прописать число. При этом оно может быть, как целым, так и с плавающей запятой
        //     decimalPlaces: 0,       // Сколько знаков оставлять после запятой
        //     decimalPoint: ".",      // Разделитель десятичной части числа
        //     thousandSeparator: ",", // Разделитель тыcячных
        //     duration: 1000          // Продолжительность анимации в миллисекундах

        var owl = $('.slider-main');
        owl.owlCarousel({
            nav:true,
            items:4,
            loop:true,
            margin:40,
            autoplay:false,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        var owl2 = $('.slider-schedule');
        owl2.owlCarousel({
            nav:true,
            items:1,
            loop:true,
            margin:0,
            autoplay:false,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        var owl3 = $('.slider-schedule-bottom');
        owl3.owlCarousel({
            nav:true,
            items:3,
            loop:true,
            margin:30,
            autoplay:false,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        var owl4 = $('.slider-teacher');
        owl4.owlCarousel({
            nav:true,
            items:1,
            loop:true,
            margin:0,
            autoplay:false,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        var owl5 = $('.slider-articles');
        owl5.owlCarousel({
            nav:true,
            items:1,
            loop:true,
            margin:0,
            autoplay:false,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });

        $('.ann-item-desc').width($('.ann-item-img').width());
        $('.ann-item-desc').height($('.ann-item-img').width() * 0.5767);
        $('.ann-item-desc').hover(
            function () {$(this).addClass('gradient-half').animate({opacity: 0.6}, 300);},
            function () {$(this).removeClass('gradient-half').animate({opacity: 1}, 300)}
        );

        $('.hover').hover(
            function(){ $(this).children(".border-wear").addClass('hover-show'); $(this).find(".social-link").animate({width: $('.couch-img').width() * 0.20}, 300); $(this).find(".soc").animate({opacity: 1}, 300) },
            function(){ $(this).children(".border-wear").removeClass('hover-show'); $(this).find(".social-link").animate({width: 0}, 300); $(this).find(".soc").animate({opacity: 0}, 300)  }
        );

        $('.social-link .row').height($('.couch-img').width());

        $('.nav-item a').hover(
            function () {
                $(this).find('.line').animate({opacity: 1, marginLeft: 0, width: $(this).parent().width()}, 300)
            },
            function () {
                $(this).find('.line').animate({opacity: 0, marginLeft: '-40px', width: 0}, 100)
            }
        );

        $('.owl-nav').css({display: 'none',});


        $(window).scroll (function () {
            if ($ (this).scrollTop () > 1000) {
                //console.log($ (this).scrollTop ());
                $('.up').css({opacity: 1})
                .click(function(){
                    $('html, body').stop().animate({scrollTop : 0}, 600);
                });
            } else {
                $('.up').css({opacity: 0});
            }

        });

        if($('#map').length) {
            ymaps.ready(init);

            function init(){
                var myMap = new ymaps.Map("map", {
                    center: [55.7495, 37.5371],
                    zoom: 17
                });

                var myPlacemark = new ymaps.Placemark([55.7495, 37.5371], {
                        hintContent: 'Центр личностного развития - Visionerium',
                        balloonContent: ''
                    },
                    {
                        // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#image',
                        // Своё изображение иконки метки.
                        iconImageHref: '<?=SITE_TEMPLATE_PATH?>/img/logo-map.png',
                        // Размеры метки.
                        iconImageSize: [131, 78],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [0, -170]
                    }
                );

                myMap.geoObjects.add(myPlacemark);
            }
        }



    })
</script>


</body>
</html>