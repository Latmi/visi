<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-md-6 couch-title">
            <h2 class=" pl-6"><img class="pr-4" src="<?=SITE_TEMPLATE_PATH?>/img/line-title.jpg"> Контакты</h2>
            <div class="row">

                <div class="col-md-12">

                    <form action="#" class="form-contact">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Имя</label><br>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label for="surname">Фамилия</label><br>
                                <input type="text" name="surname" id="surname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email">E-mail</label><br>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Телефон</label><br>
                                <input type="tel" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="message">Message</label><br>
                                <textarea cols="20" rows="20" name="message" id="message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 align-self-center mt-5 ">
                                <input type="submit" class="ann-link-item w-auto text-uppercase font-weight-bold pl-2" value="Отправить">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 social  soc-contact font-weight-light pl-5">

            <div class="list-inline" style="padding-bottom: 5.3rem;">
                <div class="f-fb f-soc list-inline-item text-center"><a href="#"><i class="fab fa-facebook-f soc-item"></i></a></div>
                <div class="f-in f-soc list-inline-item text-center"><a href="#"><i class="fab fa-instagram soc-item"></i></a></div>
                <div class="f-vk f-soc list-inline-item text-center"><a href="#"><i class="fab fa-vk soc-item"></i></a></div>
                <div class="f-yt f-soc list-inline-item text-center"><a href="#"><i class="fab fa-youtube soc-item"></i></a></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="font-weight-bold">Телефон</h5>
                    <hr>
                </div>
                <div class="col-auto"><i class="fas fa-phone"></i></div>
                <div class="col">
                    <p>
                        +7 (495) 208-11-11,
                        +7 (926) 807-70-10
                    </p>
                </div>
                <div class="col-md-12 pt-5">
                    <h5 class="font-weight-bold">Адрес</h5>
                    <hr>
                </div>
                <div class="col-auto"><i class="fas fa-map-marker-alt"></i></div>
                <div class="col">
                    <p>
                        Москва-Сити, Пресненская наб. 12,<br>
                        Башня «Федерация» (Запад), 44 этаж, офис 4402<br>
                        c 12:00 до 22:00 по Москве
                    </p>
                </div>
                <div class="col-md-12 pt-5">
                    <h5 class="font-weight-bold">E-mail</h5>
                    <hr>
                </div>
                <div class="col-auto"><i class="far fa-envelope"></i></div>
                <div class="col">
                    <a href="#"><p>info@visionerium.ru</p></a>
                </div>
            </div>


        </div>
        <div class="col-md-3 px-0" style="padding-bottom: 5.4rem!important;">
            <div id="map" style="width: 100%; height: 780px"></div>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>