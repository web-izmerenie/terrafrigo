<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['PROPERTIES']['ATT_SLIDE']['VALUE'] as $arVal){
    $arFile = CFile::GetFileArray($arVal);
    
    $arResult['SLIDE'][] = $arFile;
}

$arResult['DOWNLOAD_CHARSET'] = CFile::GetFileArray($arResult['PROPERTIES']['DOWNLOAD_CHARSET']['VALUE']);
$arResult['DOWNLOAD_GARANT'] = CFile::GetFileArray($arResult['PROPERTIES']['DOWNLOAD_GARANT']['VALUE']);

unset($arResult['PROPERTIES']['ATT_SLIDE']);
unset($arResult['PROPERTIES']['DOWNLOAD_CHARSET']['VALUE']);
unset($arResult['PROPERTIES']['DOWNLOAD_GARANT']['VALUE']);
