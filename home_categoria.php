<?php
require_once 'auth_session.php';
header('Content-Type: application/json');

unsplash();

function unsplash() {
    $access_key = '4kLjrpFqF6XIrBmwZY4pB3bbFrGv3qjbXi5L_KAkSAw';
    
    $curl = curl_init();
    $query = $_GET["q"];
    $page = $_GET["page"];
    $url = 'https://api.unsplash.com/search/photos?page=1&query='.urlencode($query).'&page='.urlencode($page).'&per_page=15&client_id='.$access_key;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    curl_close($curl);

    echo $result;

}

?>