<?php 
if(isset($_POST['ig'])) {
    $ig = $_POST['ig'];

    $apiUrl = "https://videfikri.com/api/igdl/?url=".$ig;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    $amfcode = json_decode($data, true);
    echo $amfcode['result']['video'];
}

?>