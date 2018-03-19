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



<div class="sb_reviewed">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
            <img
                    class="sb_rw_avatar"
                    src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                    title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
            />
        <? endif; ?>

        <? if ($arItem["NAME"]): ?>
            <span class="sb_rw_name"><?= $arItem["NAME"] ?></span>
        <? endif; ?>

        <span class="sb_rw_job"><?= $arItem["PROPERTIES"]["post"]["VALUE"] ?>
            “<?= $arItem["PROPERTIES"]["company_name"]["VALUE"] ?>”</span><br>

        <? if ($arItem["PREVIEW_TEXT"]): ?>
            <p>“<?= $arItem["PREVIEW_TEXT"] ?>”</p>
        <? endif ?>
    <? endforeach; ?>

    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>
