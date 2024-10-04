<?php
$url = 'https://jsonplaceholder.typicode.com/posts';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);

// Tampilkan 5 data
echo '<pre>';
print_r(array_slice($data, 0, 5));
echo '</pre>';
?>

