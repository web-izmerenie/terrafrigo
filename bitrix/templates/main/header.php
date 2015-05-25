<?php
$html_classes = array();
$main_classes = array();

$html_classes = implode(" ", $html_classes);
$main_classes = implode(" ", $main_classes);
$tplPath = "/bitrix/templates/main/";?>

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
        <div class="header-main">
            <div class="header-main__wrapper wrapper">
                <a href="/" class="header-logo"><h1 class="hide-text">Terra Frigo</h1></a>
                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__list-item">
                            <a class="main-nav__list-link" href="#">Завод</a>
                        </li>
                        <li class="main-nav__list-item">
                            <a class="main-nav__list-link" href="#">Продукция</a>
                        </li>
                        <li class="main-nav__list-item">
                            <a class="main-nav__list-link" href="#">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header> 