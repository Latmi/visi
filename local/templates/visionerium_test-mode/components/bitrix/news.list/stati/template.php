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

<?
    //echo "<pre>";
        //print_r($arResult["ITEMS"]);
    //echo $arResult["ITEMS"][0]["PROPERTIES"]["ATT_AUTHOR"]["VALUE"];
    //echo "</pre>"
?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <?$date = explode(" ",$arItem["ACTIVE_FROM"]);?>

    <div class="col-md-4">
        <img class="w-100" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
        <p class="font-lato color-grey mt-4">
            <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/time-black.png"><span class="pr-5"><?echo $date[0];?></span>
            <img class="pr-3" src="<?=SITE_TEMPLATE_PATH?>/img/who.png">
            <?
            $id_spec = $arItem["PROPERTIES"]["ATT_AUTHOR"]["VALUE"];
            $res = CIBlockElement::GetByID($id_spec);
            if($ar_res = $res->GetNext()):?>
                <a href="<?echo $ar_res["DETAIL_PAGE_URL"]?>">
                    <span class="hover-wear">
                            <?echo $ar_res['NAME'];?>
                    </span>
                </a>
            <?endif;?>
        </p>
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><p class="mt-4 font-weight-bold text-uppercase color-black hover-wear articles-title"><?=$arItem["NAME"]?></p></a>
    </div>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

