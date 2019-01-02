<?php 

$url = "http://apis.juhe.cn/mobile/get";
$params = array(
    "phone" => "17876483057",//需要查询的手机号码
    "key" => "5f1ff154b8ed34e219bedc806dfbfa3e",//应用APPKEY
);
$paramstring = http_build_query($params);

$httpInfo = array();
$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_USERAGENT, 'JuheData');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url.'?'.$paramstring );

$response = curl_exec($ch);

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$httpInfo = array_merge($httpInfo, curl_getinfo($ch));
curl_close($ch);

$result = json_decode($response, true);
if ($result) {
	print_r($result);
	print($paramstring);
	
} else {
    //请求异常
}



?>