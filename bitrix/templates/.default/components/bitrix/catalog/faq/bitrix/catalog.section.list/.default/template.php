<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

$depth_level = $arResult['SECTION']['DEPTH_LEVEL'];
?>
<?if($arResult['SECTIONS']){?>
<style>
	#main-category{padding: 66px 0;}
	.main-category.level0 .main-category__item{padding: 5px 0 30px;}
	.main-category.level1 .main-category__item{padding: 20px 0 20px;}
	.main-category.level1{background: #57a9d7 !important;}
	.main-category.level1 .main-category__image-wrapper{margin: 0 auto 20px;height: 190px;width:190px;}
	.main-category.level1 .main-category__image-wrapper img{width: 100%;}
	
.main-category.level1 .main-category__item:nth-child(1) .main-category__heading {left:inherit}	
.main-category.level1 .main-category__item:nth-child(1) .main-category__image-wrapper {left:inherit}
.main-category.level1 .main-category__item:nth-child(2) .main-category__heading {right:inherit}	
.main-category.level1 .main-category__item:nth-child(2) .main-category__image-wrapper {right:inherit}

	h1{margin:30px 0;color:#fff;text-align:center;font-size: 31px;}
	.additional-text{display:none;}
</style>
<?//if ($arResult['SECTION']['DEPTH_LEVEL'] == 0){?>
<div id="main-category" class="main-category level<?=$depth_level?>">
	<div class="main-category__wrapper wrapper clearfix">
	<?if($depth_level == 0){?>	
		<h1><?$APPLICATION->ShowTitle(false)?></h1>
	<?}?>	
	<?foreach ($arResult['SECTIONS'] as &$arSection){?>
	<?$hover_img = CFile::GetPath($arSection['DETAIL_PICTURE']);?>
		<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="main-category__item">
			<div class="main-category__image-wrapper">
				<img class="main-category__image" src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['NAME']?>" />
				<img class="main-category__image-hover" src="<?=$hover_img?>" alt="<?=$arSection['NAME']?>" />
			</div>
			<h2 class="main-category__heading"><span><?=$arSection['NAME']?></span></h2>
		</a>
	<?}?>				
	</div>
</div>
<?//}?>
<?}?>