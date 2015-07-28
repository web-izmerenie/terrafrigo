<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
$arResult['DOWNLOAD_PRESENT'] = CFile::GetPath($arResult['PROPERTIES']['DOWNLOAD_PRESENT']['VALUE']);
$arResult['DOWNLOAD_CHARSET'] = CFile::GetPath($arResult['PROPERTIES']['DOWNLOAD_CHARSET']['VALUE']);

foreach($arResult['PROPERTIES']['ATT_BANER']['VALUE'] as $baner){
    $arResult['BANER'][] = CFile::GetFileArray($baner);
}