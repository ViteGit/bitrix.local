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

<div class="sb_action">
    <?foreach($arResult["ITEMS"] as $arItem):?>

        <?if (is_array($arItem["PREVIEW_PICTURE"])):?>
            <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>"><img
                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                        width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                        height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        >
            </a>
        <?endif;?>
    <h4><?=GetMessage('OFFER')?></h4>
    <h5><a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>"><?=$arItem["PREVIEW_TEXT"];?> <?=$arItem['PROPERTIES']['PRICE']['VALUE']?></a></h5>
    <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" class="sb_action_more"><?=GetMessage('MORE')?> →</a>
    <?endforeach;?>
</div>


