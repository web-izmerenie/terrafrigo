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
?>
<?if($arResult['ITEMS']){?>
<style>
	/*.section_wrap {padding: 125px 70px}*/
	.section_wrap {padding: 0px 37px}
	.section_left{width:60%; float:left; padding-right: 70px; box-sizing:border-box;}
	.section_right{width:40%; float:right; padding-right: 70px; box-sizing:border-box;}
	.faq_list {list-style: none; margin-top:40px}
	.faq_list li{margin: 10px 0;}
	.faq_list a{border-bottom: 1px solid #0c75d7;}
	.faq_list a:hover{text-decoration: none; border-bottom: none;}
	.sections {display: table;}
	.sec {display: table-cell; vertical-align:top; padding-right: 25px; position:relative;}
	.sec img{background: #57a9d7; height: 100px; border-radius: 56px;}
	.sec img.main{background: none; height: 200px;}
	.inside-title h1 {font-size: 30px;color: #000;font-weight: bold;font-style: normal;letter-spacing: -0.1px;text-transform: uppercase;margin-bottom: 32px;line-height: 33px;margin: 35px 0;}
	.theme_wrap {margin-top: 50px;}
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
		<?
		$themes = array();
		$sections = array();
		$i = 0;
		$j = 0;
		$k = 0;
		if(CModule::IncludeModule('iblock')){
		   $arSelect = Array('ID', 'NAME', 'SECTION_PAGE_URL', 'IBLOCK_SECTION_ID', 'UF_*');
		   $arFilter = Array('IBLOCK_ID'=>$arResult['IBLOCK_ID'], 'ACTIVE'=>'Y', 'GLOBAL_ACTIVE'=>'Y');
		   $res = CIBlockSection::GetList(Array('SORT'=>'ASC'), $arFilter, true, $arSelect);   
		   while($ob = $res->GetNext())
		   {
				if(!$ob['IBLOCK_SECTION_ID']){
					$themes[$j]['NAME'] = $ob['NAME'];
					$themes[$j]['URL'] = $ob['SECTION_PAGE_URL'];
					$themes[$j]['IMG'] = CFile::GetPath($ob['UF_IMG_THEME']);
					$j++;
				}
				else if($ob['IBLOCK_SECTION_ID'] == $arResult['IBLOCK_SECTION_ID']){
				   $k = 1;
				   if($ob['ID'] == $arResult['ID']){
					   $img_active = CFile::GetPath($ob['UF_IMG_ACTIVE']);
				   }
				   else{
					   $sections[$i]['ID'] = $ob['ID'];
					   $sections[$i]['NAME'] = $ob['NAME'];
					   $sections[$i]['URL'] = $ob['SECTION_PAGE_URL'];
					   $sections[$i]['IMG'] = CFile::GetPath($ob['UF_IMG']);
					   $sections[$i]['IMG_HOVER'] = CFile::GetPath($ob['UF_IMG_ACTIVE']);
					   $i++;		   
				   }		
				}	
			}
		}
		?>
		<div class="sections">
			<?if($k == 1){?>
				<div class="sec"><img src="<?=$img_active?>" class="main" alt="<?=$arResult['NAME']?>" title="<?=$arResult['NAME']?>"/></div>
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
		<!--<h1><?$APPLICATION->ShowTitle(false)?></h1>-->
		<?if($arResult['ITEMS']){?>
			<ul class="faq_list">
				<?foreach ($arResult['ITEMS'] as $key => $arItem){?>
				<li><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></li>
				<?}?>
			</ul>
		<?}?>	
	</div>
	<div class="section_right">
		<a href="#popup-form2" class="header-line__right-link popup-open" style="text-decoration: none;background: #57a9d7;">Задать вопрос</a>
		<!--<h4>Обратно к выбору темы</h4>
		<?foreach($themes as $theme){?>
			<div class="theme_wrap">
				<a href="<?=$theme['URL']?>">
					<img src="<?=$theme['IMG']?>" alt="<?=$theme['NAME']?>" title="<?=$theme['NAME']?>" />
				</a>
			</div>
		<?}?>-->
		
	</div>
	<div class="clearfix"></div>
</div>		
<?}?>
