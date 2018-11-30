<?php
require_once('../config/config.php');

$gallery = get_gallery("gallery_img");

$vars = [
    "title" => SITE_TITLE . "Lesson 4",
    "footer" => date("Y"),
    "gallery" => $gallery
];

echo renderPage("index", $vars);

_log("Страница загружена", 'messages');
_log($vars, 'vars');

