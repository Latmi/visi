<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="nav justify-content-end text-uppercase">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="nav-item"><a class="nav-link" href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?><div class="line"></div></a></li>
	<?else:?>
		<li class="nav-item"><a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?><div class="line"></div></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>