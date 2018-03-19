<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><p>
	 Обратитесь к нашим специалистам и получите профессиональную консультацию по вопросам создания и покупки мебели (от дизайна, разработки технического задания до доставки мебели к Вам домой).
</p>
<p>
	 Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы.
</p>
<h2>Телефоны</h2>
<ul>
	<li>Телефон/факс:
	<ul>
		<li><b>(495) 212-85-06</b></li>
	</ul>
 </li>
	<li>Телефоны:
	<ul>
		<li><b>(495) 212-85-07</b></li>
		<li><b>(495) 212-85-08</b></li>
	</ul>
 </li>
</ul>
<h2>Email</h2>
<ul>
	<li><a href="mailto:info@example.ru">info@example.ru</a> — общие вопросы</li>
	<li><a href="mailto:sales@example.ru">sales@example.ru</a> — приобретение продукции</li>
	<li><a href="mailto:marketing@example.ru">marketing@example.ru</a> — маркетинг/мероприятия/PR</li>
</ul>
<h2>Офис в Воронеже</h2>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("SCALELINE"),
		"INIT_MAP_TYPE" => "ROADMAP",
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:51.65171442035236;s:10:\"google_lon\";d:39.16000959595192;s:12:\"google_scale\";i:11;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:8:\"Офис\";s:3:\"LON\";d:39.168392663599;s:3:\"LAT\";d:51.650667570519;}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
	)
);?>
</p>
<p>
 <br>
</p>
<h2>Форма Обратной Связи</h2>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"EMAIL_TO" => "brain22@inbox.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"USE_CAPTCHA" => "Y"
	)
);?><br>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>