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
<div class="owl-carousel owl-theme slider-main">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

<?
//    echo "<pre>";
//        print_r($arItem);
//    echo "</pre>"
    ?>
    <div class="item hover">
        <div class="couch-img">
            <img class="w-100" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
        </div>
        <div class="social-link gradient">
            <div class="row couch-height" >
                <div class="col-12 soc soc-fb align-self-center py-0">
                    <div class="my-3 couch-soc couch-soc-fb"><a href="<?=$arItem["PROPERTIES"]["ATT_FB_LINK"]["VALUE"]?>"><i class="fab fa-facebook-f"></i></a></div>
                    <div class="my-3 couch-soc couch-soc-in"><a href="<?=$arItem["PROPERTIES"]["ATT_IN_LINK"]["VALUE"]?>"><i class="fab fa-instagram"></i></a></div>
                    <div class="my-3 couch-soc couch-soc-vk"><a href="<?=$arItem["PROPERTIES"]["ATT_VK_LINK"]["VALUE"]?>"><i class="fab fa-vk"></i></a></div>
                    <div class="my-3 couch-soc couch-soc-yt"><a href="<?=$arItem["PROPERTIES"]["ATT_YT_LINK"]["VALUE"]?>"><i class="fab fa-youtube"></i></a></div>
                </div>
            </div>
        </div>
        <div class="couch-desc border-wear">
            <p class="couch-name p-4 font-weight-bold"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a><br><span class="couch-prof grey font-weight-light"><?=$arItem["PROPERTIES"]["ATT_PROFESSION"]["VALUE"]?></span></p>
        </div>
    </div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
