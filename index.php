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
    <?php
    $APPLICATION->IncludeComponent("bitrix:news.list", "anonsy", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "/#SECTION_CODE#/#ELEMENT_CODE#",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "2",	// Код информационного блока
		"IBLOCK_TYPE" => "webinars",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "3",	// Количество новостей на странице
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Вебинары",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "ATT_DATE",
			1 => "ATT_PRICE",
			2 => "ATT_DURABILITY",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
    <div class="row mx-0 ann-link">
        <div class="col-md-12 pl-5 align-self-center">
            <a href=""><span class="ann-link-item w-auto text-uppercase font-weight-bold">Все анонсы</span></a>
        </div>
    </div>
</section>
<section class="about"  id="counts">
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


                <?$APPLICATION->IncludeComponent("bitrix:news.list", "specialists",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",	// Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                        "DISPLAY_NAME" => "Y",	// Выводить название элемента
                        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                        "FIELD_CODE" => array(	// Поля
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",	// Фильтр
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => "1",	// Код информационного блока
                        "IBLOCK_TYPE" => "specialists",	// Тип информационного блока (используется только для проверки)
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                        "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        "NEWS_COUNT" => "20",	// Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",	// Название категорий
                        "PARENT_SECTION" => "",	// ID раздела
                        "PARENT_SECTION_CODE" => "",	// Код раздела
                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                        "PROPERTY_CODE" => array(	// Свойства
                            0 => "ATT_FB_LINK",
                            1 => "ATT_IN_LINK",
                            2 => "ATT_YT_LINK",
                            3 => "ATT_VK_LINK",
                            4 => "ATT_PROFESSION",
                            5 => "",
                        ),
                        "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                        "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                        "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                        "SET_STATUS_404" => "N",	// Устанавливать статус 404
                        "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                        "SHOW_404" => "N",	// Показ специальной страницы
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                    ),
                    false
                );?>
        </div>
    </div>
</section>

<section class="articles">
    <div class="container-fluid">
        <div class="row w-100 mx-0 px-5">
            <div class="col-md-12 couch-title">
                <h2 class=""><img class="pr-4" src="<?=SITE_TEMPLATE_PATH?>/img/line-title.jpg"> Статьи</h2>
            </div>

            <?$APPLICATION->IncludeComponent("bitrix:news.list", "stati",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
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
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "articles",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "3",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "ATT_AUTHOR",
                        2 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "stati"
                ),
                false
            );?>

        </div>
        <div class="row mx-0 articles-link">
            <div class="col-md-12 pl-6 align-self-center mt-5">
                <a href="/stati/"><span class="ann-link-item w-auto text-uppercase font-weight-bold pl-2">Все статьи</span></a>
            </div>
        </div>
    </div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>