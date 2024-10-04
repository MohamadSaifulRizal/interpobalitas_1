<?php
$url = 'https://jsonplaceholder.typicode.com/posts';
$data = array(
    'title' => 'Belajar API dengan PHP',
    'body' => 'Ini adalah contoh penggunaan POST request',
    'userId' => 1
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
