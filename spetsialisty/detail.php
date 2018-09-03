<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Специалист - Visionerium");
$APPLICATION->SetPageProperty("keywords", "Специалист - Visionerium");
$APPLICATION->SetPageProperty("description", "Специалист - Visionerium");
$APPLICATION->SetTitle("Специалист");
?>

<div class="container-fluid bg-white py-5">
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "specialist",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_ELEMENT_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BROWSER_TITLE" => "-",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
                "ELEMENT_ID" => "",
                "FIELD_CODE" => array(
                    0 => "PREVIEW_PICTURE",
                    1 => "",
                ),
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "specialists",
                "IBLOCK_URL" => "",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Страница",
                "PROPERTY_CODE" => array(
                    0 => "ATT_FB_LINK",
                    1 => "ATT_IN_LINK",
                    2 => "ATT_YT_LINK",
                    3 => "ATT_VK_LINK",
                    4 => "ATT_PROFESSION",
                    5 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",
                "SET_CANONICAL_URL" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "Y",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "STRICT_SECTION_CHECK" => "N",
                "USE_PERMISSIONS" => "N",
                "USE_SHARE" => "N",
                "COMPONENT_TEMPLATE" => "specialist"
            ),
            false
    );?>
</div>
    <section class="announcements pb-10 background-grey-light">
        <div class="row mx-0">
            <div class="col-md-12 ann-title pl-5">
                <h2 class="pl-4"><img class="pr-4" src="<?=SITE_TEMPLATE_PATH?>/img/line-title.jpg"> Семинары и вебинары</h2>
            </div>
        </div>
        <div class="owl-carousel owl-theme slider-schedule-bottom px-5 mx-4">
            <div class="item ann-item ">
                <img class="w-100 ann-item-img" src="<?=SITE_TEMPLATE_PATH?>/img/web-photo-3.jpg">
                <div class="row mx-0">
                    <div class="col-4 align-self-start ann-item-title"></div>
                    <div class="col-12 align-self-end py-3 px-0">
                        <a href="#"><p class="web-ann-item-who">Татьяна Дорожкина</p></a>
                        <p class="font-lato">
                            <i class="far fa-calendar-alt pr-3"></i><span class="pr-4 grey">16.09.2018</span>
                            <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/price.png"><span class="pr-4 grey">900 <i class="fas fa-ruble-sign"></i></span>
                            <i class="far fa-clock pr-3"></i><span class="grey">2 часа</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item ann-item ">
                <img class="w-100 ann-item-img" src="<?=SITE_TEMPLATE_PATH?>/img/web-photo-1.jpg">
                <div class="row mx-0">
                    <div class="col-12 align-self-start ann-item-title"></div>
                    <div class="col-12 align-self-end py-3 px-0">
                        <a href="#"><p class="web-ann-item-who">Велеслав и Витослава Черкасовы</p></a>
                        <p class="font-lato">
                            <i class="far fa-calendar-alt pr-3"></i><span class="pr-4 grey">16.09.2018</span>
                            <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/price.png"><span class="pr-4 grey">Бесплатно</span>
                            <i class="far fa-clock pr-3"></i><span class="grey">2 часа</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item ann-item ">
                <img class="w-100 ann-item-img" src="<?=SITE_TEMPLATE_PATH?>/img/web-photo-2.jpg">
                <div class="row mx-0">
                    <div class="col-4 align-self-start ann-item-title"></div>
                    <div class="col-12 align-self-end py-3 px-0">
                        <a href="#"><p class="web-ann-item-who">Александр Кичаев</p></a>
                        <p class="font-lato">
                            <i class="far fa-calendar-alt pr-3"></i><span class="pr-4 grey">16.09.2018</span>
                            <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/price.png"><span class="pr-4 grey">900 <i class="fas fa-ruble-sign"></i></span>
                            <i class="far fa-clock pr-3"></i><span class="grey">2 часа</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item ann-item ">
                <img class="w-100 ann-item-img" src="<?=SITE_TEMPLATE_PATH?>/img/web-photo-2.jpg">
                <div class="row mx-0">
                    <div class="col-4 align-self-start ann-item-title"></div>
                    <div class="col-12 align-self-end py-3 px-0">
                        <a href="#"><p class="web-ann-item-who">Александр Кичаев</p></a>
                        <p class="font-lato">
                            <i class="far fa-calendar-alt pr-3"></i><span class="pr-4 grey">16.09.2018</span>
                            <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/price.png"><span class="pr-4 grey">900 <i class="fas fa-ruble-sign"></i></span>
                            <i class="far fa-clock pr-3"></i><span class="grey">2 часа</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>