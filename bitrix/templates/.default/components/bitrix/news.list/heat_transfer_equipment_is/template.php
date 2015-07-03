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
<?if($arResult['ITEMS']){?>
    <div class="about-terra-block wrapper clearfix">
        <div class="title"><?=$arResult['SECTION']['PATH']['0']['NAME'];?></div>
        <ul>
            <?foreach($arResult['ITEMS'] as $arItem){
            $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>250, 'height'=>250), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <li>
                    <div class="image"><img src="<?=$photo['src'];?>" alt="" /></div>
                    <div class="text"><?=$arItem['PREVIEW_TEXT'];?></div>
                </li>
            <?}?>
        </ul>
    </div>    	
<?}?>