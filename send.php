<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "test72test172@gmail.com"; // <-- ЗАМЕНИТЕ НА СВОЮ ПОЧТУ
    $subject = "Новая заявка с сайта Lindstrom";
    
    $region = htmlspecialchars($_POST['region'] ?? 'Не указан');
    $city = htmlspecialchars($_POST['city'] ?? 'Не указан');
    $street = htmlspecialchars($_POST['street'] ?? 'Не указана');
    $house = htmlspecialchars($_POST['house'] ?? 'Не указан');
    $name = htmlspecialchars($_POST['name'] ?? 'Не указано');
    $phone = htmlspecialchars($_POST['phone'] ?? 'Не указан');
    $message = htmlspecialchars($_POST['message'] ?? 'Нет сообщения');

    $body = "Регион: $region\nГород: $city\nАдрес: $street, д. $house\nИмя: $name\nТелефон: $phone\nСообщение: $message\n";
    $headers = "From: no-reply@ваш-сайт.ru\r\nReply-To: no-reply@ваш-сайт.ru\r\nContent-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo json_encode(["status" => "success"]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Ошибка отправки"]);
    }
} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Доступ запрещен"]);
}
?>