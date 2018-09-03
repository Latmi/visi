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
//    echo "<pre>";
//        print_r($arResult);
//    echo "</pre>"
?>

<div class="row py-5 px-5">
    <div class="col-md-3">
        <img width="100%" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>">
    </div>
    <div class="col-md-5">
        <p class="couch-name-detail py-1 px-5 font-weight-bold">
            <?=$arResult["NAME"]?>
            <br>
            <span class="couch-prof-detal grey font-weight-light"><?=$arResult["PROPERTIES"]["ATT_PROFESSION"]["VALUE"]?></span>
        </p>
        <br>
        <p style="font-size: 1.23em;" class="py-1 px-5 mb-1 ">About</p>
        <hr style="width: 85%; margin: 0 auto">
        <p class="py-4 px-5 mb-1 ">
            <?=$arResult["PREVIEW_TEXT"]?>
        </p>
    </div>
    <div class="col-md-4">
        <p style="font-size: 1.23em;  width: 85%; margin: 0 auto" class="pb-1 pt-3 mb-1 ">Skill Bars</p>
        <hr style="width: 85%; margin: 0 auto">
        <p class="pt-1 pb-0 skill-line-title mb-1">Business Coaching <span><?=$arResult["PROPERTIES"]["ATT_SKILL_1"]["VALUE"]?>%</span></p>
        <div class="skill-line">
            <div style="width: <?=$arResult["PROPERTIES"]["ATT_SKILL_1"]["VALUE"]?>%" class="skill-line-in"></div>
        </div>
        <p class="pt-1 pb-0 skill-line-title mb-1">Life Coaching <span><?=$arResult["PROPERTIES"]["ATT_SKILL_2"]["VALUE"]?>%</span></p>
        <div class="skill-line">
            <div style="width: <?=$arResult["PROPERTIES"]["ATT_SKILL_2"]["VALUE"]?>%" class="skill-line-in"></div>
        </div>
        <p class="pt-1 pb-0 skill-line-title mb-1">Motivational Training <span><?=$arResult["PROPERTIES"]["ATT_SKILL_3"]["VALUE"]?>%</span></p>
        <div class="skill-line">
            <div style="width: <?=$arResult["PROPERTIES"]["ATT_SKILL_3"]["VALUE"]?>%" class="skill-line-in"></div>
        </div>
        <p class="pt-1 pb-0 skill-line-title mb-1">Psychological Training <span><?=$arResult["PROPERTIES"]["ATT_SKILL_4"]["VALUE"]?>%</span></p>
        <div class="skill-line">
            <div style="width: <?=$arResult["PROPERTIES"]["ATT_SKILL_4"]["VALUE"]?>%" class="skill-line-in"></div>
        </div>

        <div style="width: 85%; margin: 20px auto; position: absolute; bottom: 0; left: 10%" class="col-md-12 social font-weight-light align-self-end pl-0">
            <div class="list-inline ">
                <div class="f-fb f-soc list-inline-item text-center"><a href="<?=$arResult["PROPERTIES"]["ATT_FB_LINK"]["VALUE"]?>"><i class="fab fa-facebook-f soc-item"></i></a></div>
                <div class="f-in f-soc list-inline-item text-center"><a href="<?=$arResult["PROPERTIES"]["ATT_IN_LINK"]["VALUE"]?>"><i class="fab fa-instagram soc-item"></i></a></div>
                <div class="f-vk f-soc list-inline-item text-center"><a href="<?=$arResult["PROPERTIES"]["ATT_VK_LINK"]["VALUE"]?>"><i class="fab fa-vk soc-item"></i></a></div>
                <div class="f-yt f-soc list-inline-item text-center"><a href="<?=$arResult["PROPERTIES"]["ATT_YT_LINK"]["VALUE"]?>"><i class="fab fa-youtube soc-item"></i></a></div>
            </div>

        </div>
    </div>
</div>
