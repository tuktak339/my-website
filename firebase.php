<?php
define("FIREBASE_URL", "https://my-website-47da1-default-rtdb.firebaseio.com/products.json"); // Thay URL của bạn

function getProducts() {
    $data = file_get_contents(FIREBASE_URL);
    return json_decode($data, true);
}

function addProduct($name, $price) {
    $data = json_encode(["name" => $name, "price" => $price]);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, FIREBASE_URL);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

function deleteProduct($id) {
    $url = "https://my-website-47da1-default-rtdb.firebaseio.com/products/$id.json";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
?>
