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
    <ul class="js-main-slider">
        <li class="js-imgLiquidFill">
            <div class="about-page-top heaters-page-top">
                <div class="main-slider__item js-imgLiquidFill">
                    <img class="main-slider__image" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt=""/>
                    <div class="title-fix">
                        <small><?require($_SERVER['DOCUMENT_ROOT'].'/inc/module_path.php');?></small>
                        <h1><?=$arResult['NAME'];?></h1>
                    </div>
                    <div class="btn-down">
                        <a href="<?=$arResult['DOWNLOAD_PRESENT'];?>" class="btn-down-white">Скачать презентацию</a>
                        <a href="<?=$arResult['DOWNLOAD_CHARSET'];?>" class="btn-down-black">Тех. характеристики</a>
                    </div>
                    <div class="main-slider__overlay">
                        <div class="wrapper">
                            <div class="main-slider__slider-description"><?=$arResult['DETAIL_TEXT'];?></div>

                        </div>
                    </div>

                </div>
            </div>
        </li>
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
                <a href="<?=$arResult['DOWNLOAD_CHARSET'];?>" class="btn-down-white">Скачать</a>
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
        За информацией о приобретении калориферов обратитесь<br />
        к менеджерам «Завода ТерраФриго» по телефону:<br />
        +7 (928) 158-04-34
    </div>    	

    <div class="benefit-block">
        <ul>
            <li class="transport-icon-1" style="background-color: #4ea4e4;"><span>Отечественное оборудование по ценам ниже европейских аналогов</span></li>
            <li class="benefit-icon-6" style="background-color: #edcf85;"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
            <li class="benefit-icon-5" style="background-color: #21c097;"><span>Фреон, заправляемый в установки, не содержит хлора и безопасен для окружающей среды и перевозимой продукции</span></li>
        </ul>
    </div>
    <?require($_SERVER['DOCUMENT_ROOT'].'/inc/ht_reviews.php');?>