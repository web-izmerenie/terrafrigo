<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="main-nav">
	<ul class="main-nav__list">
		<?foreach($arResult as $arItem){?>
			<li class="main-nav__list-item">
				<a class="main-nav__list-link" href="<?=$arItem['LINK']?>"
                   <?if($arItem['PARAMS']){
                        foreach($arItem['PARAMS'] as $k=>$arParam){?>
                            <?=$k;?>="<?=$arParam;?>"
                        <?}
                    }?>>
                    <?=$arItem['TEXT']?>
                </a>
			</li>
		<?}?>
	</ul>
</nav>
<?endif?>