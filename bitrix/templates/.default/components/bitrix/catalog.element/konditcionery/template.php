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
 <div class="main-slider-wrapper">
        <div class="about-page-top heaters-page-top">
            <div class="main-slider__item js-imgLiquidFill">
                <?foreach($arResult['SLIDE'] as $arSlide){
                $slide = CFile::ResizeImageGet($arSlide, array('width'=>1850, 'height'=>845), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                    <img class="main-slider__image" src="<?=$slide['src'];?>" alt=""/>
                <?}?>
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
    	<div class="table-characteristics">
    		<div class="title wrapper">
    			<h3>Характеристики</h3>
    			<a href="<?=$arResult['CHARSET_FILE']['SRC'];?>" class="btn-down-white">Скачать</a>
    		</div>

    		<ul class="table table-colum">
    			<li class="table-head">
    				<div class="wrapper">
    					<span class="td1">Типоразмер</span>
    					<span class="td2">Диаметр <br />трубки, мм</span>
    					<span class="td3">Толщина <br />ламели, мм</span>
    					<span class="td4">H min, <br />мм</span>
    					<span class="td5">H max, <br />мм</span>
    					<span class="td6">B max, <br />мм</span>
    					<span class="td7">L max, <br />мм</span>
    				</div>
    			</li>
                <?$array_count = count($arResult['PROPERTIES']['CHARSET_TIP']['VALUE']);
                for($i = 0; $i < $array_count; $i++){?>
    			<li>
    				<div class="wrapper">
    					<span class="td1"><?=$arResult['PROPERTIES']['CHARSET_TIP']['VALUE'][$i];?></span>
    					<span class="td2"><?=$arResult['PROPERTIES']['CHARSET_DIM']['VALUE'][$i];?></span>
    					<span class="td3"><?=$arResult['PROPERTIES']['CHARSET_LAM']['VALUE'][$i];?></span>
    					<span class="td4"><?=$arResult['PROPERTIES']['CHARSET_H_MIN']['VALUE'][$i];?></span>
    					<span class="td5"><?=$arResult['PROPERTIES']['CHARSET_H_MAX']['VALUE'][$i];?></span>
    					<span class="td6"><?=$arResult['PROPERTIES']['CHARSET_B_MAX']['VALUE'][$i];?></span>
    					<span class="td7"><?=$arResult['PROPERTIES']['CHARSET_L_MAX']['VALUE'][$i];?></span>
    				</div>
    			</li>
                <?}?>
    		</ul>
    	</div>
    </div>
