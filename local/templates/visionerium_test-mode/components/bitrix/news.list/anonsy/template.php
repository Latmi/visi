<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="row mx-0">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<?if($arItem["PROPERTIES"]["ATT_SHOW"]["VALUE"]):?>
    <div class="col-md-4 px-0 ann-item ">
        <img class="w-100 ann-item-img"
             src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
             title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
        >
        <div class="row mx-0 ann-item-desc">
            <div class="col-12 align-self-start ann-item-title"></div>
            <div class="col-12 align-self-end pb-3 pl-5">
                <a href="#">
                    <p class="ann-item-who">
                        <?
                        $id_spec = $arItem["PROPERTIES"]["ATT_SPECIALIST"]["VALUE"];
                        $res = CIBlockElement::GetByID($id_spec);
                        if($ar_res = $res->GetNext())
                            echo $ar_res['NAME'];
                        ?>
                    </p>
                </a>
                <p class="font-lato">
                    <i class="far fa-calendar-alt pr-3"></i>
                    <span class="pr-4">
                        <?
                        //setlocale(LC_ALL, 'ru_RU.UTF-8');
                        $months = array( 1 => 'января' , 'февраля' , 'марта' , 'апреля' , 'мая' , 'июня' , 'июля' , 'августа' , 'сентября' , 'октября' , 'ноября' , 'декабря' );
                        $date = $arItem["PROPERTIES"]["ATT_DATE"]["VALUE"];
                        $d1 = strtotime($date); // переводит из строки в дату
                        $m1 = date("n", $d1);
                        //echo strftime("%e %B",$d1); // locale
                        echo date( 'd ' . $months[$m1], $d1 );
                        ?>
                    </span>
                    <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/price.png"/>
                    <span class="pr-4">
                        <?=$arItem["PROPERTIES"]["ATT_PRICE"]["VALUE"];
                        if (!preg_match('/[a-zА-Я]/', $arItem["PROPERTIES"]["ATT_PRICE"]["VALUE"])){
                            echo ' <i class="fas fa-ruble-sign"></i>';
                        }

                        ?></span>
                    <i class="far fa-clock pr-3"></i>
                    <span><?=$arItem["PROPERTIES"]["ATT_DURABILITY"]["VALUE"]?></span>
                </p>
            </div>
        </div>
    </div>
    <?endif;?>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
