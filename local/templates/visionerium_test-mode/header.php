<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat:700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />
    <?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.css');
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.theme.default.min.css');
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/dist/css/main.css');

    // JS
    //CJSCore::Init(array("jquery"));
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.3.1.slim.min.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/popper.min.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-ias.min.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.js');



    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    //Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
    Asset::getInstance()->addString("<link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\" rel=\"stylesheet\">");
    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"WebSite","@id":"#website","url":"http://SITE.ru/","name":"Название - Описание","potentialAction":{"@type":"SearchAction","target":"http://SITE.ru/search/index.php","query-input":"required name=search_term_string"}}
    </script>
    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"Organization","url":"http://SITE.ru/","sameAs":[],"@id":"#organization","name":"Домен - Описание","logo":"http://SITE.ru/полный_путь_к_логотипу.png"}
    </script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

</head>

<body>
<?$APPLICATION->ShowPanel();?>
<img style="width: 1px; display: none" src="<?= SITE_TEMPLATE_PATH ?>/img/up-hover.png" alt="">

<div class="row mx-0" style="z-index: 20000">
    <div class="col px-0">
        <div class="banner">

            <div class="row header align-items-center mx-0">
                <img class="logo-header" style="height: 50px; opacity: 0; margin-left: 80px;" src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="">
                <div class="col menu font-weight-bold">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top-menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "top-menu"
                        ),
                        false
                    );?>
                </div>
                <div class="col-md-auto contacts">
                    <div class="social-icons text-left">
                        <a class="phone" href="#">+7 (495) 208-11-11</a>
                        <a href="#"><img class="mx-1 ml-2 header-fb header-soc" src="<?=SITE_TEMPLATE_PATH?>/img/fb.png"></a>
                        <a href="#"><img class="mx-1 header-in header-soc" src="<?=SITE_TEMPLATE_PATH?>/img/in.png"></a>
                        <a href="#"><img class="mx-1 header-vk header-soc" src="<?=SITE_TEMPLATE_PATH?>/img/vk.png"></a>
                        <a href="#"><img class="mx-1 header-yt header-soc" src="<?=SITE_TEMPLATE_PATH?>/img/yt.png"></a>
                    </div>
                </div>
                <div class="col-md-auto"><div style="width: 24px;"></div></div>
            </div>


        </div>

    </div>
</div>
<div id="main">


