<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="footer-middle">
        <div class="footer-middle__wrapper wrapper clearfix">
            <?foreach($arResult as $arItem){?>
                <div class="footer-middle__col footer-middle__col_col1">
                    <h4 class="footer-middle__heading"><a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a></h4>
                </div>
            <?}?>
        </div>
    </div>
<?endif?>