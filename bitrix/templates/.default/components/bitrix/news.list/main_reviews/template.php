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

<script type="text/javascript">
    $(document).ready(function () {

        $("#foo").carouFredSel({
            items: 2,
            prev: '#rwprev',
            next: '#rwnext',
            scroll: {
                items: 1,
                duration: 2000
            }
        });
    });
</script>

<div class="rw_reviewed">
    <div class="rw_slider">
        <h4>Отзывы</h4>

        <ul id="foo">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>

            <li>
                <div class="rw_message">
                    <? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
                        <img width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                             height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                             src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                             class="rw_avatar"
                             alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                             title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"/>
                    <? endif ?>

                    <? if ($arItem["NAME"]): ?>
                        <span class="rw_name"><?= $arItem["NAME"] ?></span>
                    <? endif; ?>

                    <span class="rw_job"><?= $arItem['PROPERTIES']['post']['VALUE'] ?>
                        “<?= $arItem['PROPERTIES']['company_name']['VALUE'] ?>”</span>

                    <? if ($arItem["PREVIEW_TEXT"]): ?>
                        <p> <? echo $arItem["PREVIEW_TEXT"]; ?></p>
                    <? endif; ?>

                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
            <? endforeach; ?>
        </ul>
        <div id="rwprev"></div>
        <div id="rwnext"></div>

        <a href="" class="rw_allreviewed">Все отзывы</a>
    </div>
</div>