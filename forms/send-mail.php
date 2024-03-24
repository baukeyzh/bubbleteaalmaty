<?php
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Создаем экземпляр объекта PHPMailer
$mail = new PHPMailer(true);

try {
    // Настройки SMTP сервера
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Замените на адрес вашего SMTP сервера
    $mail->SMTPAuth   = true;
    $mail->Username   = 'bubbleteaalamty@gmail.com'; // Замените на ваше имя пользователя SMTP
    $mail->Password   = 'lpzw kqms rpat qgwk'; // Замените на ваш пароль SMTP
    $mail->SMTPSecure = 'tls'; // Используйте 'tls' или 'ssl' в зависимости от настроек вашего сервера
    $mail->Port       = 587; // Порт SMTP сервера (обычно 587 для TLS)

    // Устанавливаем отправителя и получателя
    $mail->setFrom('bubbleteaalamty@gmail.com', 'Bubble Tea Almaty');
    $mail->addAddress('bubbleteaalamty@gmail.com', 'Bubble Tea Almaty');

    $mail->CharSet = 'UTF-8';

    // Устанавливаем тему письма
    $mail->Subject = "Новая заявка с сайта";

    // Собираем данные из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    // Создаем тело письма
    $mailContent = "Имя: $name\n";
    $mailContent .= "Телефон: $phone\n";
    $mailContent .= "Страна: $country\n";
    $mailContent .= "Сообщение: $message\n";

    // Устанавливаем тело письма
    $mail->Body = $mailContent;

    // Отправляем письмо
    $mail->send();
    echo 'Письмо успешно отправлено';
} catch (Exception $e) {
    echo "Произошла ошибка при отправке письма: {$mail->ErrorInfo}";
}
