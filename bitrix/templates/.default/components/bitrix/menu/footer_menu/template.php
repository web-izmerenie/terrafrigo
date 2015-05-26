<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="footer-middle">
        <div class="footer-middle__wrapper wrapper clearfix">
            <?foreach($arResult as $arItem){?>
                <div class="footer-middle__col footer-middle__col_col1">
                    <h4 class="footer-middle__heading"><a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a></h4>
                    <?if(isset($arItem['CHILDREN'])){?>
                        <ul class="footer-middle__list">
                            <?foreach($arItem['CHILDREN'] as $arChildren){?>
                                <li class="footer-middle__list-item">
                                    <a class="footer-middle__list-link" href="<?=$arChildren['LINK'];?>"><?=$arChildren['TEXT'];?></a>
                                </li>
                            <?}?>
                        </ul>
                    <?}?>
                </div>
            <?}?>
        </div>
    </div>
<?endif?>