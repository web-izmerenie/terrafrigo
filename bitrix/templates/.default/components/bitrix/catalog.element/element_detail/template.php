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
 <div class="main-slider-wrapper model-image-big">
    <div class="about-page-top heaters-page-top">
        <div class="main-slider__item js-imgLiquidFill">
            <?foreach($arResult['SLIDE'] as $arSlide){
            $slide = CFile::ResizeImageGet($arSlide, array('width'=>1850, 'height'=>845), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <img class="main-slider__image" src="<?=$slide['src'];?>" alt=""/>
            <?}?>
            <div class="title-fix"><h1><?=$arResult['NAME'];?></h1></div>
            <div class="main-slider__overlay">
                <div class="wrapper">
                    <div class="main-slider__slider-description"><?=$arResult['DETAIL_TEXT'];?></div>
                    <div class="double-button">
                        <a href="#" class="btn-1">Узнать стоимость</a>
                        <a href="#" class="btn-2">Найти дилера</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="table-characteristics">
    <div class="title wrapper">
        <h3>Характеристики</h3>
        <a href="<?=$arResult['DOWNLOAD_CHARSET']['SRC'];?>" class="btn-down-white">Скачать</a>
        <div class="button">
            <a href="#" class="active">Основные узлы и агрегаты</a>
            <a href="#">Рефрижератор</a>
        </div>
    </div>
            <ul class="table table-model">
    			<li class="table-head">
    				<div class="wrapper">
    					<span class="td1"><?=$arResult['PROPERTIES']['MAIN_NAME']['NAME'];?></span>
    					<span class="td2"><?=$arResult['PROPERTIES']['MAIN_MODEL']['NAME'];?></span>
    					<span class="td3"><?=$arResult['PROPERTIES']['MAIN_WIDTH']['NAME'];?></span>
    					<span class="td4"><?=$arResult['PROPERTIES']['MAIN_WEIGHT']['NAME'];?></span>
    					<span class="td5"><?=$arResult['PROPERTIES']['MAIN_DOP']['NAME'];?></span>
    				</div>
    			</li>
                <?$countCharset = count($arResult['PROPERTIES']['MAIN_NAME']['VALUE']) - 1;
                for($i=0; $i <= $countCharset; $i++){?>
                <li>
    				<div class="wrapper">
                        <span class="td1"><?=$arResult['PROPERTIES']['MAIN_NAME']['VALUE'][$i];?></span>
                        <span class="td2"><?=$arResult['PROPERTIES']['MAIN_MODEL']['VALUE'][$i];?></span>
                        <span class="td3"><?=$arResult['PROPERTIES']['MAIN_WIDTH']['VALUE'][$i];?></span>
                        <span class="td4"><?=$arResult['PROPERTIES']['MAIN_WEIGHT']['VALUE'][$i];?></span>
                        <span class="td5"><?=$arResult['PROPERTIES']['MAIN_DOP']['VALUE'][$i]['TEXT'];?></span>
                    </div>
                </li>
                <?}?>
    		</ul>
</div>

<div class="guarantee-block">
    <div class="title wrapper clearfix">
        <h3>Гарантия</h3>
        <a href="<?=$arResult['DOWNLOAD_GARANT']['SRC'];?>" class="btn-down-white">Скачать</a>
    </div>
    <div class="text-1 wrapper">Гарантия на холодильные установки TerraFrigo — 2 года с момента монтажа. </div>
    <div class="text-2 wrapper">
        <p>Гарантия действительно только в случае, если установка была произведена организацией, уполномоченной на это заводом-изготовителем.</p>
        <p>Производитель оставляет за собой право менять технические характеристики без уведомления.</p>
    </div>
</div>
