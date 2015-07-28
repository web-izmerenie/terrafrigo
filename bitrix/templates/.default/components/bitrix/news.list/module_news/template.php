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
    <ul class="main-news clearfix">
        <?foreach($arResult['ITEMS'] as $arItem){
        $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>400, 'height'=>400), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <li class="main-news__item">
                <a class="main-news__link js-imgLiquidFill" href="<?=$arItem['DETAIL_PAGE_URL'];?>">
                    <img class="main-news__image" src="<?=$photo['src'];?>" alt=""/>
                    <div class="main-news__overlay"><?=$arItem['NAME']?></div>
                </a>
            </li>
        <?}?>
    </ul>
<?}?>