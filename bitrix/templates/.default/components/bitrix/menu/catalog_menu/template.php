<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
 <div class="sub-menu">
    <ul>
        <?foreach($arResult as $arItem){?>
            <li><a href="<?=$arItem['LINK'];?>"><span><?=$arItem['TEXT'];?></span></a></li>
        <?}?>
    </ul>
</div>
<?endif?>