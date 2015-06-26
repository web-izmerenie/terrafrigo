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
                                <div class="main-slider__slider-description"><?=$arResult['PREVIEW_TEXT'];?></div>
                            </div>
                            <div class="double-button">
                                <a href="#popup-form3" class="btn-1 popup-open">Узнать стоимость</a>
                                <a href="/transportnyj-holod/dilery/" class="btn-2">Найти дилера</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?}?>
    </ul>
</div>
<div class="inside-conent">
    <div class="model-car wrapper">
        <h2>Модель автомобиля</h2>
        <div class="model-car_list">
            <?foreach($arResult['MODELS'] as $arModels){
            $icon = CFile::ResizeImageGet($arModels['ICON'], array('width'=>150, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <div class="model-car_list-element">
                    <div class="model-car_img">
                        <span>
                            <img src="<?=$icon['src'];?>" alt=""/>
                        </span>
                    </div>
                    <span class="model-car_info"><?=$arModels['NAME'];?></span>
                </div>
            <?}?>
        </div>
    </div>
</div>
<div class="inside-conent heaters-page">
    <div class="benefit-block">
        <ul>
            <li class="model-icon-2"><span>Отечественное оборудование по ценам ниже европейских аналогов</span></li>
            <li class="model-icon-3"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
            <li class="model-icon-4"><span>Фреон, заправляемый в установки, не содержит хлора и безопасен для окружающей среды и перевозимой продукции</span></li>
        </ul>
    </div>
    <div class="table-options">
        <div class="title wrapper">
            <h3>Характеристики</h3>
            <a href="<?=$arResult['CHARSET_FILE']['SRC'];?>" class="btn-down-white">Скачать</a>
        </div>

        <ul class="table-colum_options">
            <li class="table-head">
                <div class="wrapper">
                    <span class="td1"></span>
                    <span class="td2">Модель</span>
                    <span class="td3">Мощность</span>
                    <span class="td4">Напряжение</span>
                    <span class="td2">Воздушный поток</span>
                    <span class="td5">Габаритные размеры</span>
                </div>
            </li>
            <?$array_count = count($arResult['PROPERTIES']['CHARSET_NAME']['VALUE']);
            for($i = 0; $i < $array_count; $i++){?>
                <li>
                    <div class="wrapper">
                        <span class="td1"><?=$arResult['PROPERTIES']['CHARSET_NAME']['VALUE'][$i]?></span>
                        <span class="td2"><?=$arResult['PROPERTIES']['CHARSET_MODEL']['~VALUE'][$i]['TEXT']?></span>
                        <span class="td3"><?=$arResult['PROPERTIES']['CHARSET_POWER']['VALUE'][$i]?></span>
                        <span class="td4"><?=$arResult['PROPERTIES']['CHARSET_VOLT']['VALUE'][$i]?></span>
                        <span class="td2"><?=$arResult['PROPERTIES']['CHARSET_AIR']['VALUE'][$i]?></span>
                        <span class="td5"><?=$arResult['PROPERTIES']['CHARSET_WH']['VALUE'][$i]?></span>
                    </div>
                </li>
            <?}?>
        </ul>
    </div>
</div>