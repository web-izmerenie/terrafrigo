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
    <ul class="year-list wrapper">
        <li <?if($_SERVER['REQUEST_URI'] === '/o-zavode/otzyvy/'){?>class="active"<?}?>><a href="/otzyvy">Транспортный холод</a></li>
        <li <?if($_SERVER['REQUEST_URI'] === '/o-zavode/otzyvy/otzyvy2.php'){?>class="active"<?}?>><a href="/otzyvy2">Теплообменное оборудование</a></li>
    </ul>

    <div class="reviews-innr">
        <?foreach($arResult['ITEMS'] as $arItem){
        $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>150, 'height'=>60), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <div class="block">
                <div class="wrapper">
                    <div class="image"><img src="<?=$photo['src']?>" alt="" /></div>
                    <div class="title"><?=$arItem['NAME'];?></div>
                    <div class="text"><?=$arItem['PREVIEW_TEXT'];?></div>
                </div>
            </div>
        <?}?>
    </div>
<?}?>
