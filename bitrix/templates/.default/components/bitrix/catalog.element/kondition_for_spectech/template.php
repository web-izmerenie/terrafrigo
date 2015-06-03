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
                            <span>Кондиционеры для коммерческого транспорта</span><br/>
                            <h1><?=$arResult['NAME'];?></h1>
                        </div>
                        <div class="main-slider__overlay">
                            <div class="wrapper">
                                <div class="main-slider__slider-description"><?=$arResult['PREVIEW_TEXT'];?></div>
                                <div class="btn-find-dealer">
                                    <a href="#popup-form3" class = "find-dealer_link2 btn-price popup-open"><span>Узнать стоимость</span></a>
                                    <a href="#" class = "find-dealer_link1">Найти дилера</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?}?>
    </ul>
</div>
<div class="inside-conent heaters-page">
    <div class="benefit-block">
        <ul>
            <li class="model-icon-2"><span>Отечественное оборудование по ценам ниже европейских аналогов</span></li>
            <li class="model-icon-3"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
            <li class="model-icon-4"><span>Фреон, заправляемый в установки, не содержит хлора и безопасен для окружающей среды и перевозимой продукции</span></li>
        </ul>
    </div>
    <div class="table-characteristics">
        <div class="title wrapper">
            <h3>Характеристики</h3>
            <a href="<?=$arResult['CHARSET_FILE']['SRC'];?>" class="btn-down-white">Скачать</a>
        </div>

        <ul class="table table-model">
            <li class="table-head">
                <div class="wrapper">
                    <span class="td1">Название блока</span>
                    <span class="td2">Модель, тип</span>
                    <span class="td3">Габариты</span>
                    <span class="td4">Масса</span>
                    <span class="td5">Дополнительные характеристики</span>
                </div>
            </li>
            <?$array_count = count($arResult['PROPERTIES']['CHARSET_NAME']['VALUE']);
            for($i = 0; $i < $array_count; $i++){?>
            <li>
                <div class="wrapper">
                    <span class="td1"><?=$arResult['PROPERTIES']['CHARSET_NAME']['VALUE'][$i];?></span>
                    <span class="td2"><?=$arResult['PROPERTIES']['CHARSET_MODEL']['VALUE'][$i];?></span>
                    <span class="td3"><?=$arResult['PROPERTIES']['CHARSET_WIDTH']['VALUE'][$i];?></span>
                    <span class="td4"><?=$arResult['PROPERTIES']['CHARSET_WEIGHT']['VALUE'][$i];?></span>
                    <span class="td5"><?=$arResult['PROPERTIES']['CHARSET_DOP']['VALUE'][$i]['TEXT'];?></span>
                </div>
            </li>
            <?}?>
        </ul>
    </div>
</div>