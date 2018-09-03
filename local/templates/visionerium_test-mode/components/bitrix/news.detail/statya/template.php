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
    <div class="col-md-12 ann-title pl-5">
        <h2 class="pl-4"><img class="pr-4" src="<?=SITE_TEMPLATE_PATH?>/img/line-title.jpg"> <?=$arResult["NAME"]?></h2>
    </div>
</div>
<div class="col-md-12 article-img-detail">
    <img width="100%" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
    <p style="font-size: 1.28em;" class="font-weight-bold py-4">
        Отвечает
        <?
        $id_spec = $arResult["PROPERTIES"]["ATT_AUTHOR"]["VALUE"];
        $res = CIBlockElement::GetByID($id_spec);
        if($ar_res = $res->GetNext()):
            echo $ar_res['NAME'].":";
        endif;
        ?>
    </p>
    <?echo $arResult["~DETAIL_TEXT"];?>
</div>