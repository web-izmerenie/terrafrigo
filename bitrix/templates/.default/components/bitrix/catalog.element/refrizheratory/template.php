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
$GLOBALS['SEO_TEXT'] = $arResult['PROPERTIES']['ATT_SEO']['~VALUE']['TEXT'];?>
<div class="main-slider-wrapper no-controls">
    <ul class="js-main-slider about-page-top heaters-page-top">
        <?foreach($arResult['SLIDE'] as $arSlide){
        $slide = CFile::ResizeImageGet($arSlide, array('width'=>1850, 'height'=>845), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <li class="js-imgLiquidFill">
                <div class="about-page-top heaters-page-top">
                    <div class="main-slider__item js-imgLiquidFill">
                        <img class="main-slider__image" src="<?=$slide['src'];?>" alt=""/>
                        <div class="inside-title wrapper">
                            <?require($_SERVER['DOCUMENT_ROOT'].'/inc/module_path.php');?>
                            <h1><?=$arResult['NAME'];?></h1>
                        </div>
                        <div class="main-slider__overlay">
                            <div class="wrapper">
                                <div class="main-slider__slider-description"><?=$arResult['DETAIL_TEXT'];?></div>
                                <div class="btn-find-dealer">
                                    <a href="#popup-form2" class="popup-open find-dealer_link2 btn-price"><span>Узнать стоимость</span></a>
                                    <a href="/transportnyj-holod/dilery/" class = "find-dealer_link1">Найти дилера</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?}?>
    </ul>
</div>

<div class="table-characteristics">
    <div class="title wrapper">
        <h3>Характеристики</h3>
        <a href="<?=$arResult['DOWNLOAD_CHARSET']['SRC'];?>" target="_blank" class="btn-down-white">Скачать</a>
        <div class="button">
            <a href="#table1" class="active">Основные узлы и агрегаты</a>
            <a href="#table2">Рефрижератор</a>
        </div>
    </div>
    <ul id="table1" class="table table-model">
        <li class="table-head">
            <div class="wrapper">
                <span class="td1"></span>
                <span class="td2">Модель</span>
                <span class="td3">Габаритные размеры, <br />не более, мм</span>
                <span class="td4">Масса <br />не более, кг</span>
                <span class="td5">Дополнительные <br />характеристики</span>
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
                <span class="td5"><?=$arResult['PROPERTIES']['MAIN_DOP']['~VALUE'][$i]['TEXT'];?></span>
            </div>
        </li>
        <?}?>
    </ul>
    <ul id="table2" class="table table-model">
        <li>
            <div class="wrapper">
                <span>Хладаген HFC R-404а</span>
                <span><?=$arResult['PROPERTIES']['TRANPARENT_HLADO']['~VALUE']['TEXT'];?></span>
            </div>
        </li>
        <li>
            <div class="wrapper">
                <span>Холодопроизводительность</span>
                <span><?=$arResult['PROPERTIES']['TRANPARENT_HOLODDEVELOP']['~VALUE']['TEXT'];?></span>
            </div>
        </li>
        <li>
            <div class="wrapper">
                <span>Воздухопроизводительность</span>
                <span><?=$arResult['PROPERTIES']['TRANPARENT_AIRDEVELOP']['~VALUE']['TEXT'];?></span>
            </div>
        </li>
        <li>
            <div class="wrapper">
                <span>Электропитание от бортовой сети автомобиля</span>
                <span><?=$arResult['PROPERTIES']['TRANPARENT_ELECTRO']['~VALUE']['TEXT'];?></span>
            </div>
        </li>
        <li>
            <div class="wrapper">
                <span>Оттаивание горячим газом </span>
                <span><?=$arResult['PROPERTIES']['TRANPARENT_GAZ']['~VALUE'];?></span>
            </div>
        </li>
        <li>
            <div class="wrapper">
                <span>Рекомендации по подбору установок</span>
                <span><?=$arResult['PROPERTIES']['TRANPARENT_RECOMEND']['~VALUE']['TEXT'];?></span>
            </div>
        </li>

    </ul>
</div>

<div class="guarantee-block">
    <div class="title wrapper clearfix">
        <h3>Гарантия</h3>
        <a href="<?=$arResult['DOWNLOAD_GARANT']['SRC'];?>" target="_blank" class="btn-down-white">Скачать</a>
    </div>
    <div class="text-1 wrapper">Гарантия на холодильные установки TerraFrigo — 2 года с момента монтажа. </div>
    <div class="text-2 wrapper">
        <p>Гарантия на оборудование действительна только в случае, если монтаж был произведен организацией, уполномоченной на это заводом-изготовителем.</p>
        <p>Производитель оставляет за собой право менять технические характеристики без уведомления.</p>
    </div>
</div>
