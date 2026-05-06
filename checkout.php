<?php

header("Content-Type: application/json");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$body = file_get_contents("php://input");

$ch = curl_init("https://api.payclip.com/v2/checkout");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Basic TU_TOKEN_AQUI",
    "Content-Type: application/json",
    "Accept: application/json"
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

$response = curl_exec($ch);

if (curl_errno($ch)) {

    echo json_encode([
        "error" => true,
        "message" => curl_error($ch)
    ]);

    curl_close($ch);
    exit();
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

http_response_code($httpCode);

echo $response;

?>
