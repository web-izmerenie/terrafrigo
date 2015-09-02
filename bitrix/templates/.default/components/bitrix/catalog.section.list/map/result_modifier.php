<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$count = count($arResult['SECTIONS']) % 5;
$arResult['COUNTRY_LIST'] = array_chunk($arResult['SECTIONS'], $count);

$items = array();

foreach($arResult['SECTIONS'] as $k => $arSections){

    $arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID");
    $arFilter = Array("IBLOCK_ID"=>$arSections['IBLOCK_ID'], 'SECTION_ID'=>$arSections['ID']);

    $res = CIBlockElement::GetList(Array('SORT' => 'ASC'), $arFilter, $arSelect, Array ("nTopCount" => 5));
        while($ob = $res->GetNextElement())
        {
            $items[] = $ob->GetFields();
            $arResult['ITEMS'] = $items;
        }
    foreach($arResult['ITEMS'] as $arItem){
        if($arSections['ID'] == $arItem['IBLOCK_SECTION_ID']){
            $arResult['SECTIONS'][$k]['ITEMS'][] = $arItem;
        }
    }
}
