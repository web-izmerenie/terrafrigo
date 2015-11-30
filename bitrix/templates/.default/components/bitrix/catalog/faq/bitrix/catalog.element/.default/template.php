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
//print_r($arResult);
?>
<?
$sections = array();
$i = 0;
$k = 0;
if(CModule::IncludeModule('iblock')){
	$arSelect = Array('ID', 'NAME', 'SECTION_PAGE_URL', 'UF_*');
	$arFilter = Array('IBLOCK_ID'=>$arResult['IBLOCK_ID'], 'SECTION_ID' => 235, 'ACTIVE'=>'Y', 'GLOBAL_ACTIVE'=>'Y');
	$res = CIBlockSection::GetList(Array('SORT'=>'ASC'), $arFilter, true, $arSelect);   
	while($ob = $res->GetNext()){
		if($ob['ID'] != $arResult['IBLOCK_SECTION_ID']){
			$sections[$i]['ID'] = $ob['ID'];
			$sections[$i]['NAME'] = $ob['NAME'];
			$sections[$i]['URL'] = $ob['SECTION_PAGE_URL'];
			$sections[$i]['IMG'] = CFile::GetPath($ob['UF_IMG']);
			$sections[$i]['IMG_HOVER'] = CFile::GetPath($ob['UF_IMG_ACTIVE']);
			$i++;	
		}	
	}
}
?>
<style>
	/*.section_wrap {padding: 125px 70px}*/
	.section_wrap {padding: 0px 37px}
	.section_left{width:50%; float:left; padding-right: 70px; box-sizing:border-box;}
	.section_right{width:40%; float:right; padding-right: 70px; box-sizing:border-box;}
	.faq_list {list-style: none; margin-bottom: 30px;}
	.faq_list li{margin: 10px 0;}
	.faq_list a{border-bottom: 1px solid #0c75d7;}
	.faq_list a:hover{text-decoration: none; border-bottom: none;}
	.inside-title h1 {font-size: 30px;color: #000;font-weight: bold;font-style: normal;letter-spacing: -0.1px;text-transform: uppercase;margin-bottom: 32px;line-height: 33px;margin: 35px 0;}	
	.theme_wrap {margin-top: 50px;}
	.btn-type-2 {width: auto;height:auto;line-height: 66px;padding: 0 28px;font-size: 14px;}
	.sections {display: table;margin-top:40px;}
	.sec {display: table-cell; vertical-align:top; padding-right: 25px; position:relative;}
	.sec img{background: #57a9d7; height: 100px; border-radius: 56px;}
	.sec img.main{background: none; height: 200px;}	
	.sec:hover .img {opacity: 0;}
	.sec:hover .img-hover {opacity: 1;}
	.sec .img,.sec .img-hover {transition: .5s;}
	.sec .img-hover {position: absolute;top: 0;left: 0;opacity: 0;}	
</style>
<div class="inside-title wrapper">
    <?require($_SERVER['DOCUMENT_ROOT'].'/inc/module_path.php');?>
    <h1><?$APPLICATION->ShowTitle(false)?></h1>
</div>
<div class="section_wrap">
	<div class="section_left">
		<?//require($_SERVER['DOCUMENT_ROOT'].'/inc/module_path.php');?>
		<!--<h1><?$APPLICATION->ShowTitle(false)?></h1>-->
		<div>
			<?echo $arResult['DETAIL_TEXT'];?>
		</div>
	</div>
	<div class="section_right">
		<ul class="faq_list">
			<?
			$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
			$arFilter = Array("IBLOCK_ID"=>$arResult['IBLOCK_ID'], "SECTION_ID"=>$arResult['IBLOCK_SECTION_ID'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement())
			{
				$arFields = $ob->GetFields();
				if ($arFields['ID'] == $arResult['ID']){
					echo '<li>'.$arFields["NAME"].'</li>';
				}
				else {
					echo '<li><a href="'.$arFields["DETAIL_PAGE_URL"].'">'.$arFields["NAME"].'</a></li>';
				}
			}
			?>
		</ul>
		<?if ($arResult['IBLOCK_SECTION_ID'] != 236){?>	
			<a href="/transportnyj-holod/dilery/" class="btn-type-2">Найти дилера</a>
		<?}?>
		<?if($arResult["PROPERTIES"]["FILE"]["VALUE"]){
			$file = CFile::GetPath($arResult["PROPERTIES"]["FILE"]["VALUE"]);	
		?>
			<a href="<?=$file?>" class="btn-type-2" style="margin-left:10px">Скачать ответ</a>
		<?}?>
		<div class="sections">
			<?if($arResult['IBLOCK_SECTION_ID'] != 236){?>
				<?foreach($sections as $sec){?>
					 <div class="sec">
						<a href="<?=$sec['URL']?>">
							<img src="<?=$sec['IMG']?>" class="img" alt="<?=$sec['NAME']?>" title="<?=$sec['NAME']?>" />
							<img src="<?=$sec['IMG_HOVER']?>" class="img-hover" alt="<?=$sec['NAME']?>" title="<?=$sec['NAME']?>" />
						</a>
					</div>
				<?}?>	
			<?}?>
		</div>		
	</div>
	<div class="clearfix"></div>
</div>