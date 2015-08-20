<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(CModule::IncludeModule("iblock"))
{
	$arFilter = Array("IBLOCK_ID"=>17, "ID"=>$arResult['ID']);
	$rsSections = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, false, $arSelect = array("UF_*"));
	while($arSection = $rsSections->GetNext())
	{
		$arResult['SECTION'] = $arSection;
	}

}
$GLOBALS['SEO_TEXT'] = $arResult['SECTION']['~UF_SEO_TEXT'];?>
