<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $message = $_POST["message"];
    $to = "baukey.zh@gmail.com"; // Замените на ваш реальный адрес электронной почты
    $subject = "Сообщение от $phone.$country";
    $headers = "From: $name";

    mail($to, $subject, $message, $headers);
    echo "Ваше сообщение успешно отправлено!";
} else {
    echo "Что-то пошло не так, попробуйте еще раз.";
}
?>