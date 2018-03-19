<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? IncludeTemplateLangFile(__FILE__); ?>
<!DOCTYPE HTML>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="windows-1251">
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" href="/bitrix/templates/.default/favicon.ico" type="image/x-icon">
    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/template_style.css"); ?>
    <script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>
    <!--[if gte IE 9]>
    <style type="text/css">.gradient {
        filter: none;
    }</style><![endif]-->
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<div class="wrap">
    <div class="hd_header_area">
        <div class="hd_header">
            <table>
                <tr>
                    <td rowspan="2" class="hd_companyname">
                        <h1><a href="">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "include_areas",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/title.php"
                                    )
                                );?>
                            </a></h1>
                    </td>
                    <td rowspan="2" class="hd_txarea">
                        <span class="tel">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "include_areas",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/phone.php"
                                )
                            ); ?>
                        </span> <br/>
                        время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>
                    </td>
                    <td style="width:232px">
                        <form action="">
                            <div class="hd_search_form" style="float:right;">
                                <input placeholder="Поиск" type="text"/>
                                <input type="submit" value=""/>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 11px;">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:system.auth.form",
                            "auth_form",
                            Array(
                                "FORGOT_PASSWORD_URL" => "/user/",
                                "PROFILE_URL" => "/user/profile.php",
                                "REGISTER_URL" => "/user/registration.php",
                                "SHOW_ERRORS" => "Y"
                            )
                        );?>
                    </td>
                </tr>
            </table>
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "top_multi",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>
        </div>
    </div>