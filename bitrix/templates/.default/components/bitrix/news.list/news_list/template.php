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
<?if(!empty($arResult['ITEMS'])){
$FilterElement = CIBlockElement::GetList(array('PROPERTY_ATT_YEAR'=>'ASC'), array('IBLOCK_ID'=>$arResult['ID'], 'ACTIVE'=>'Y'), false, false, array('ID', 'PROPERTY_ATT_YEAR'));

 while($filter = $FilterElement->Fetch()){
     $filter_value[] = $filter['PROPERTY_ATT_YEAR_VALUE'];
}
$filter_value = array_unique($filter_value);?>
    <ul class="year-list wrapper">
        <?foreach ($filter_value as $filter){?>
            <?if (!empty($filter)){?>
                <li <?if($_GET['year'] === $filter){?>class="active"<?}?>>
                    <a href="<?$_SERVER['REQUEST_URI']?>?year=<?=$filter?>">
                        <?=$filter?>
                    </a>
                </li>
            <?}?>
        <?}?>
    </ul>
    <ul class="main-new clearfix">
        <?foreach($arResult['ITEMS'] as $arItem){
        $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>370, 'height'=>444), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <li class="main-news__item">
                <a class="main-news__link js-imgLiquidFill" href="<?=$arItem['DETAIL_PAGE_URL'];?>">
                    <img class="main-news__image" src="<?=$photo['src'];?>" alt=""/>
                    <div class="main-news__overlay"><?=$arItem['NAME'];?></div>
                </a>
            </li>
        <?}?>
    </ul>

    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>
<?}?>