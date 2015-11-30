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

<!--Добавляем страницу в хлебные крошки-->
<?if(!empty($_POST)){?>
    <?=$APPLICATION->AddChainItem('Результаты поиска', “”);?>
<?}else{?>
    <?=$APPLICATION->AddChainItem('Все модели', “”);?>
<?}?>
<?if(!empty($arResult['ITEMS'])){?>

<!--Получаем данные с фильтра и составляем список товаров-->
<?$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_PICTURE", "DETAIL_PAGE_URL");
$arFilter = Array(
    "IBLOCK_ID"=>$arResult['IBLOCK_ID'],
    "ACTIVE"=>"Y",
    "PROPERTY_ATT_MODEL.ID" => $_POST['gr1'],
    "PROPERTY_FILTER_AIR_VALUE" => $_POST['gr2'],
    "PROPERTY_FILTER_COUNT_VALUE" => $_POST['gr3'],
);
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields[] = $ob->GetFields();
}

/*Добавляем массив с инфо об изображении по ID*/
foreach($arFields as $k => $arFiledsItem){
    $arFields[$k]['PREVIEW_PICTURE'] = CFile::GetFileArray($arFiledsItem["PREVIEW_PICTURE"]);
}
?>
    <div class="filter_selection search result_filter">
        <?if(!empty($_POST)){?>
            <div class="wrapper">
                <div class="title">
                    <?if(!empty($arFields)){?>
                        Вам подойдут модели:
                    <?}else{?>
                    по заданным параметрам</br> нет подходящего оборудования
                    <?}?>
                </div>
            </div>
        <?}?>

        <div class="wrapper">
            <div class="search_result clearfix">
                <ul>
                     <?foreach($arFields as $arItem){
                     $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>241, 'height'=>156), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());?>
                        <li class="element">
                            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                <div class="element-img"><img src="<?=$photo['src']?>" alt=""></div>
                                <div class="element-name"><?=$arItem['NAME']?></div>
                            </a>
                        </li>
                    <?}?>
                </ul>
                <div class="new-search">
                    <a href="/transportnyj-holod/konditcionery/" class="btn-type-1">Новый поиск</a>
                </div>
            </div>
        </div>

        <div class="search-notific">
            <div class="text-1">Не нашли подходящий кондиционер? </div>
            <div class="text-2">Закажите оборудование по индивидуальному проекту <br />с необходимыми вам функциями.</div>
            <div class="text-3">Подробнее об услуге можно узнать по телефону: 8 800 2345-188</div>
        </div>
    </div>
<?}?>
