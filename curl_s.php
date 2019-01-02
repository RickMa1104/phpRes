<?php 
$url = "http://apis.juhe.cn/mobile/get?phone=17876483057&key=5f1ff154b8ed34e219bedc806dfbfa3e";
//$url = "http://api.apishop.net/common/postcode/queryAddrByAreaCode?apiKey=CFpTSYs5909994584d01f4f6d87a9a8d7db0215c16642cd&areaCode=020";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
$result = curl_exec($curl);
curl_close($curl);

print_r($result);

