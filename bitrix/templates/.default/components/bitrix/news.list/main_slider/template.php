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
	<div class="main-slider-wrapper">
		<ul class="main-slider js-main-slider">
			<?foreach($arResult['ITEMS'] as $arItem){
			$photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>1903, 'height'=>841), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
				<li class="main-slider__item js-imgLiquidFill">
					<img class="main-slider__image" src="<?=$photo['src'];?>" alt=""/>
					<div class="main-slider__overlay">
						<div class="wrapper">
							<div class="main-slider__slider-description"><?=$arItem['PREVIEW_TEXT'];?></div>
						</div>
					</div>
				</li>
			<?}?>
		</ul>
	</div>
<?}?>