<?php

$recepient = "solkin2006@mail.ru";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$subject = trim($_POST["subject"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$phone = trim($_POST["phone"]);

$message = "Имя: $name \nПочта: $email \nТекст: $text \nТелефон: $phone \nТема: $subject";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
