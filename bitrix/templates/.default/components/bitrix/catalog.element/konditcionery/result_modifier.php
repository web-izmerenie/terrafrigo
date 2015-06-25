<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

foreach($arResult['PROPERTIES']['ATT_SLIDE']['VALUE'] as $arVal){
    $arFile = CFile::GetFileArray($arVal);
    
    $arResult['SLIDE'][] = $arFile;
}

$arResult['CHARSET_FILE'] =  CFile::GetFileArray($arResult['PROPERTIES']['ATT_CHARSET_FILE']['VALUE']);

$arSelect = Array("ID", "NAME", "ACTIVE", "PREVIEW_PICTURE");
foreach($arResult["PROPERTIES"]["ATT_MODEL"]["VALUE"] as $elements){
	
	$res = CIBlockElement::GetList(array("SORT"=>"ASC"), array("ID"=>$elements, "IBLOCK_ID" => 20), $arSelect);
	if($ar_res = $res->GetNext()){
		$arResult['MODELS'][] = $ar_res;
	}
	
}

$arrCount = count($arResult['MODELS']);
for($i=0; $i < $arrCount; $i++){
    $arResult['MODELS'][$i]['ICON'] = CFile::GetFileArray($arResult['MODELS'][$i]['PREVIEW_PICTURE']);
}

unset($arResult['PROPERTIES']['ATT_SLIDE']);
unset($arResult['PROPERTIES']['ATT_CHARSET_FILE']);
unset($arResult["PROPERTIES"]["ATT_MODEL"]);