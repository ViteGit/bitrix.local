<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="cn_hp_lastnews">
    <h3><a href="/news/"><?=GetMessage('NEWS')?></a></h3>
    <ul>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <li>
                <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                    <h4><a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></a>
                    </h4>
                <? endif ?>

                <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                    <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                        <p><? echo $arItem["NAME"] ?></p>
                    <? else: ?>
                        <b><? echo $arItem["NAME"] ?></b>
                    <? endif; ?>
                <? endif; ?>
            </li>
        <? endforeach; ?>

    </ul>
    <br>
    <a href="/news/" class="cn_hp_lastnews_more"><?=GetMessage('ALL_NEWS')?> →</a>
</div>
