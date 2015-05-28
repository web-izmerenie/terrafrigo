<?php
$html_classes = array();
$main_classes = array();

if(defined('ABOUT'))
    $main_classes = array('about-page');

if(defined('PRODUCTION'))
    $main_classes = array('production-page');

if(defined('CERTIFICATE'))
    $main_classes = array('certificares-page');

if(defined('CAREER'))
    $main_classes = array('career-page');

if(defined('COLD-TRANSPORT'))
    $main_classes = array('cold-transport-page');

$html_classes = implode(" ", $html_classes);
$main_classes = implode(" ", $main_classes);
$tplPath = "/bitrix/templates/main/";
global $tplPath;?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10 ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?$APPLICATION->ShowTitle();?></title>
	<?$APPLICATION->ShowMeta("keywords");?>
	<?$APPLICATION->ShowMeta("description");?>
	<?$APPLICATION->ShowHead();?>
    <meta name="format-detection" content="telephone=no">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=$tplPath;?>css/main.css">
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
    <header class="header">
        <div class="header-line">
            <div class="wrapper clearfix">
                <ul class="header-line__phones">
                    <li class="header-line__phone-item">
                        <div class="header-line__phone-label">бесплатно по россии</div>
                        <div class="header-line__phone-number">8 800 2345-188</div>
                    </li>
                    <li class="header-line__phone-item">
                        <div class="header-line__phone-label">Ростов-на-Дону</div>
                        <div class="header-line__phone-number">8 (863) 200-81-88</div>
                    </li>
                    <li class="header-line__phone-item">
                        <div class="header-line__phone-label">Москва</div>
                        <div class="header-line__phone-number">8 (926) 914-76-57</div>
                    </li>
                    <li class="header-line__phone-item">
                        <div class="header-line__phone-label">Нижний новгород</div>
                        <div class="header-line__phone-number">8 (831) 241-10-61</div>
                    </li>
                </ul>
                <div class="header-line__right-block clearfix">
                    <a href="#" class="header-line__right-link header-line__right-link_blue1">Заказать звонок</a>
                    <a href="#" class="header-line__right-link header-line__right-link_blue2">Написать нам</a>
                </div>
            </div>
        </div>
        <?if($APPLICATION->GetCurPage(false) == '/'){?>
            <div class="header-main">
                <div class="header-main__wrapper wrapper">
                    <a href="/" class="header-logo"><h1 class="hide-text">Terra Frigo</h1></a>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "main_menu",
                        array(
                            "ROOT_MENU_TYPE" => "main",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "DELAY" => "Y",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                        false
                    );?>
                </div>
            </div>
        <?}?>
    </header>
    <?if($APPLICATION->GetCurPage(false) !== '/'){?>
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left_inside_menu", 
	array(
		"ROOT_MENU_TYPE" => "main",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "inner",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
        <?if(defined('BANER')){?>
           <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "banner_inc",
                    "EDIT_TEMPLATE" => ""
                )
            );?>
            <div class="inside-conent <?=$main_classes;?>">
        <?}else{?>
            <div class="inside-conent <?=$main_classes;?>">
                <div class="inside-title wrapper"><h1><?$APPLICATION->ShowTitle()?></h1></div>
        <?}?>
    <?}?>
