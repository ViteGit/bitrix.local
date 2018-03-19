<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>

    <div class="sb_nav">
        <ul>

            <? $previousLevel = 0;
            foreach ($arResult as $arItem): ?>

            <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
            <? endif ?>

            <? if ($arItem["IS_PARENT"]): ?>

            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>


            <li <? if (!empty($arItem["SELECTED"])): ?>class="current open" <? else: ?>class="current close"<? endif ?>>
                <span class="sb_showchild"></span><a
                        href="<?= $arItem["LINK"] ?>"><span><?= $arItem["TEXT"] ?></span></a>
                <ul>
                    <? else: ?>
                        <!--    <div><a href="--><? //= $arItem["LINK"] ?><!--" class="parent--><? // if ($arItem["SELECTED"]): ?><!-- item-selected--><? // endif ?><!--">--><? //= $arItem["TEXT"] ?><!--</a>-->
                    <? endif ?>

                    <? else: ?>
                        <? if ($arItem["PERMISSION"] > "D"): ?>
                            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                <li <? if ($arItem["SELECTED"]): ?>class="current open"<? else: ?>class="close"<? endif ?>>
                                    <a href="<?= $arItem["LINK"] ?>"><span><?= $arItem["TEXT"] ?></span></a></li>
                            <? else: ?>
                                <li>
                                    <a href="<?= $arItem["LINK"] ?>" <? if ($arItem["SELECTED"]): ?> class="item-selected"<? endif ?>><?= $arItem["TEXT"] ?></a>
                                </li>
                            <? endif ?>



                        <? endif ?>

                    <? endif ?>

                    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                    <? endforeach ?>

                    <? if ($previousLevel > 1)://close last item tags?>
                        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                    <? endif ?>

                </ul>
    </div>
<? endif ?>