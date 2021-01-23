<?php

$recepient = "essekeranna1@gmail.com";
$siteName = "BTG - Buisness Trans Group";

$from = trim($_POST["from"]);
$where = trim($_POST["where"]);
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Откуда: $from \nКуда: $where \nИмя: $name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>