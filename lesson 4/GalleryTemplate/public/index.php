<?php
require_once('../config/config.php');
$vars=	[
			"title"=>SITE_TITLE." Главная страница - страница обо мне",
			"footer"=>date("Y"),
            "galleryName"=>"Фоточки моих путешействий (в будущем)",
            "findGallery"=>buildGallery(IMG_DIR),
            "buildModalWindow"=>buildModalWindow(),

		];

//echo renderPage("gallery",$vars);       // шаблон для 1 части ДЗ
//echo renderPage("gallery_2",$vars);     // шаблон для 2 части ДЗ
echo renderPage("gallery_3",$vars);     // шаблон для 3 части ДЗ



_log("Страница загружена",'messages');
_log($vars,'vars');

?>