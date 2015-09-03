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
<div class="heart_transport">
 <div class="main-slider-wrapper no-controls">
    <ul class="js-main-slider">
        <?foreach($arResult['BANER'] as $baner){
        $slide = CFile::ResizeImageGet($baner, array('width'=>1850, 'height'=>845), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <li class="js-imgLiquidFill">
                <div class="about-page-top heaters-page-top">
                    <div class="main-slider__item js-imgLiquidFill">
                        <img class="main-slider__image" src="<?=$slide['src'];?>" alt="<?=$baner['ALT'];?>"/>
                        <div class="title-fix">
                            <div class="inside-title"><?require($_SERVER['DOCUMENT_ROOT'].'/inc/module_path.php');?></div>
                            <h1><?=$arResult['NAME'];?></h1>
                        </div>
                        <div class="btn-down">
                            <a href="<?=$arResult['DOWNLOAD_PRESENT'];?>" target="_blank" class="btn-down-white">Скачать презентацию</a>
                            <a href="<?=$arResult['DOWNLOAD_CHARSET'];?>" target="_blank" class="btn-down-black">Тех. характеристики</a>
                        </div>
                        <div class="main-slider__overlay">
                            <div class="wrapper">
                                <div class="main-slider__slider-description"><?=$arResult['DETAIL_TEXT'];?></div>

                            </div>
                        </div>

                    </div>
                </div>
            </li>
        <?}?>
    </ul>
</div>
<?if($arResult['PROPERTIES']['ATT_QUSTIONARIE']['VALUE']){?>
    <a href="<?=$APPLICATION->GetCurPage();?>oprosnyy-list.php" class="btn-blue">Опросный лист</a>
<?}?>
<div class="inside-conent heaters-page">
    <?if($arResult['PROPERTIES']['ATT_DESCRIPTION']['VALUE']){?>
        <div class="about-text">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "other_content",
                Array(
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "13",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array("","undefined",""),
                    "PROPERTY_CODE" => array("","undefined",""),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => $arResult['PROPERTIES']['ATT_DESCRIPTION']['VALUE'],
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N"
                )
            );?>
        </div>
    <?}?>
    <?if($arResult['PROPERTIES']['TABLE_CHARSET']['~VALUE']){?>
        <div class="table-characteristics">
            <div class="title wrapper">
                <h3>Характеристики</h3>
                <!-- <a href="<?=$arResult['DOWNLOAD_CHARSET'];?>" target="_blank" class="btn-down-white">Скачать</a> -->
            </div>

            <ul class="table">
                <?foreach($arResult['PROPERTIES']['TABLE_CHARSET']['~VALUE'] as $k=>$tableCharset){?>
                    <li>
                        <div class="wrapper">
                            <span><?=$arResult['PROPERTIES']['TABLE_CHARSET']['DESCRIPTION'][$k]?></span>
                            <span><?=$tableCharset['TEXT'];?></span>
                        </div>
                    </li>
                <?}?>
            </ul>
        </div>
    <?}?>
    <div class="contact-block">
        За информацией о приобретении <?=$arResult['PROPERTIES']['ATT_SKLON']['VALUE']?> обратитесь<br />
        к менеджерам «Завода ТерраФриго» по телефону:<br />
        +7 (928) 158-04-34
    </div>

    <?if($arResult['PROPERTIES']['ATT_ADVENT']['VALUE']){?>
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "adventurage", Array(
            "COMPONENT_TEMPLATE" => ".default",
                "IBLOCK_TYPE" => "service",	// Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "29",	// Код информационного блока
                "NEWS_COUNT" => "4",	// Количество новостей на странице
                "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                "SORT_BY2" => "ID",	// Поле для второй сортировки новостей
                "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                "FILTER_NAME" => "",	// Фильтр
                "FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "ATT_COLOR",
                    1 => "",
                ),
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "PARENT_SECTION" => $arResult['PROPERTIES']['ATT_ADVENT']['VALUE'],	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            ),
            false
        );?>
    <?}?>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/inc/ht_reviews.php');?>
