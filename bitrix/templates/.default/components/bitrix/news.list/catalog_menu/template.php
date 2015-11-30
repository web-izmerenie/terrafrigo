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
$this->setFrameMode(true);?>
<?if(!empty($arResult['ITEMS'])){?>
	<div id="main-category" class="main-category">
			<div class="main-category__wrapper wrapper clearfix">
				<?foreach($arResult['ITEMS'] as $arItem){?>
					<a href="<?=$arItem['PROPERTIES']['ATT_LINK']['VALUE'];?>" class="main-category__item">
						<div class="main-category__image-wrapper">
							<img class="main-category__image" src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt=""/>
							<img class="main-category__image-hover" src="<?=$arItem['DETAIL_PICTURE']['SRC'];?>" alt=""/>
						</div>
						<h2 class="main-category__heading"><?=$arItem['NAME'];?></h2>
					</a>
				<?}?>
			</div>
	</div>
<?}?>
