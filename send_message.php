<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];

$firstName = htmlspecialchars($firstName);
$lastName = htmlspecialchars($lastName);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$firstName = urldecode($firstName);
$lastName = urldecode($lastName);
$email = urldecode($email);
$message = urldecode($message);


$firstName = trim($firstName);
$lastName = trim($lastName);
$email = trim($email);
$message = trim($message);


if (mail("njkita007@yandex.ru",
    "Новое письмо с сайта",
    "Имя: ".$firstName."\n".
    "Фамилия: ".$lastName."\n".
    "email: ".$email."\n".
    "Сообщение: ".$message."\n",
    "From: no-replay@mydomain.ru \r\n")
) {
    echo ('Письмо успешно отправлено!');
}
else {
    echo ('Ошибка отправки письма..');
}
?>
