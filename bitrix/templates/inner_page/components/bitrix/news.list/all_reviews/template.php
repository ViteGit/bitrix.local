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

<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="review-block">
        <div class="review-text">
            <div class="review-block-title"><span class="review-block-name"><a
                            href="#"><? echo $arItem["NAME"] ?></a></span><span
                        class="review-block-description"><? echo $arItem["PROPERTIES"]["post"]["VALUE"] ?>
                    "<? echo $arItem["PROPERTIES"]["company_name"]["VALUE"] ?>"</span></div>

            <div class="review-text-cont">
                <? if ($arItem["DETAIL_TEXT"]): ?>
                    <?= $arItem["DETAIL_TEXT"] ?>
                <? endif; ?>
            </div>
        </div>
        <div class="review-img-wrap"><a href="#"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="img"></a>
        </div>
    </div>
<? endforeach; ?>

<div class="review-feedback-form-wrap">
    <div class="review-feedback-form-title">Оставьте свой отзыв</div>
    <form class="review-feedback-form">
        <div class="review-feedback-field-wrap">
									<span class="review-feedback-field">
										<span class="review-feedback-field-title">Имя и фамилия</span>
										<input class="review-feedback-inp" type="text"></span><span
                    class="review-feedback-field">
											<span class="review-feedback-field-title">Должность/компания</span>
											<input class="review-feedback-inp" type="text">
									</span>
        </div>

        <div class="review-feedback-text">
            <div class="review-feedback-text-title">Текст отзыва</div>
            <textarea class="review-feedback-text-field"></textarea>
        </div>
        <div class="review-feedback-btn-block">
            <input class="review-feedback-btn" value="Оставить свой отзыв" type="submit">
        </div>
    </form>
</div>
