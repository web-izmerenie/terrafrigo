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
<div class="table-characteristics">
    <div class="title wrapper">
        <h3>Типоразмеры</h3>
        <a href="<?=$arResult['DOWNLOAD_FILE'];?>" target="_blank" class="btn-down-white">Скачать</a>
    </div>

    <ul class="table table-colum">
        <li class="table-head">
            <div class="wrapper">
                <span class="td1">Типоразмер</span>
                <span class="td2">Диаметр <br />трубки, мм</span>
                <span class="td3">Геометрия</span>
                <span class="td4">Толщина <br /> ламели, мм</span>
                <span class="td5">Шаг ламели <br /> min/max, мм</span>
                <span class="td6">Глубина max, <br /> мм</span>
                <span class="td7">Длина max, <br /> мм</span>
                <span class="td7">Расположение<br />трубок</span>
            </div>
        </li>
        <?$count_array = count($arResult['PROPERTIES']['ATT_SIZE']['VALUE']);
        for($i = 0; $i < $count_array; $i++){?>
        <li>
            <div class="wrapper">
                <span class="td1"><?=$arResult['PROPERTIES']['ATT_SIZE']['VALUE'][$i]?></span>
                <span class="td2"><?=$arResult['PROPERTIES']['ATT_DIAMETR']['VALUE'][$i]?></span>
                <span class="td3"><?=$arResult['PROPERTIES']['ATT_WEIGHT']['VALUE'][$i]?></span>
                <span class="td4"><?=$arResult['PROPERTIES']['ATT_H_MIN']['VALUE'][$i]?></span>
                <span class="td5"><?=$arResult['PROPERTIES']['ATT_H_MAX']['VALUE'][$i]?></span>
                <span class="td6"><?=$arResult['PROPERTIES']['ATT_B_MAX']['VALUE'][$i]?></span>
                <span class="td7"><?=$arResult['PROPERTIES']['ATT_L_MAX']['VALUE'][$i]?></span>
                <span class="td7"><?=$arResult['PROPERTIES']['ATT_LOCATION']['VALUE'][$i]?></span>
            </div>
        </li>
        <?}?>
    </ul>
</div>
