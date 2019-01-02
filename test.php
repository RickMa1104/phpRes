<?php 
define("APPAPI_ALLOW_REQUEST_LOGIN", 'Y'); 

Header('Access-Control-Allow-Origin: *');
Header('Access-Control-Allow-Headers: origin, content-type, accept');
Header('X-Content-Type-Options: nosniff');
//require("remote_auth.php");

if(!empty($_REQUEST['org_sessid'])){
    $org_session_id=$_REQUEST['org_sessid'];
    session_id($org_session_id);
    session_start();
    //echo session_id();
    //echo "<pre>";print_r($_SESSION);exit;
}

//require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");   //无需模板页面
//$APPLICATION->IncludeComponent("vdg:mobile.data", "", Array());

exit;



header('Content-Type:text/json; charset=utf-8');
//$arr = array('a'=>1,'b'=>2);
$json_str = '{
    "alipay_trade_create_response": {
        "code": "10000",
        "msg": "Success",
        "out_trade_no": "20150423001001",
        "trade_no": "2015042321001004720200028594"
    },
    "sign": "ERITJKEIJKJHKKKKKKKHJEREEEEEEEEEEE"
}' ;

exit(json_encode($json_str));

?>

