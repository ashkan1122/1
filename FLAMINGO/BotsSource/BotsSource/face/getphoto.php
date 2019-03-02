<?php
/*
بسم الله الرحمن الرحیم 
--------------------
برای دریافت کلی سورس و قالب و افزونه حتما داخل کانال عضو شوید 

حمایت کنید تا بیشتر افزونه و سورس و قالب درکانال قرار بدیم

کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 

@source_home

https://t.me/source_home
*/
error_reporting(0);
$did = $_GET["did"];
$code = $_GET["code"];
$emoji = $_GET["emoji"];
$cropped = $_GET["cropped"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: FaceApp/1.0.229 (Linux; Android 4.4)',
    'X-FaceApp-DeviceID: '.$did
    ));
curl_setopt($ch, CURLOPT_URL,"https://node-01.faceapp.io/api/v2.9/photos/".$code."/filters/".$emoji."?cropped=".$cropped);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$jresult=curl_exec ($ch);
curl_close($ch);
header('Content-type: image/jpeg');
echo($jresult);
?>