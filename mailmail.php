<?php

$recepient = "essekeranna1@gmail.com";
$siteName = "BTG - Buisness Trans Group";

$name = trim($_POST["name"]);
$surname = trim($_POST["surname"]);
$comment = trim($_POST["comment"]);
$message = "Ваше имя: $name \nВаша фамилия: $surname \nОтзыв: $comment";

$pagetitle = "Отзыв для сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>