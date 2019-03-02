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
function RandomString()
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 9; $i++) {
        $randstring .= $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}
$url = $_GET["url"];
$did = RandomString();
$file_name_with_full_path = $_SERVER['DOCUMENT_ROOT']."/".$did.".jpg";

if (copy($url, $file_name_with_full_path) ) {
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file_name_with_full_path);
} else { // 
  $cFile = '@' . realpath($file_name_with_full_path);
}
$post = array('file'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: FaceApp/1.0.229 (Linux; Android 4.4)',
    'X-FaceApp-DeviceID: '.$did
    ));
curl_setopt($ch, CURLOPT_URL,"https://node-01.faceapp.io/api/v2.9/photos");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$jresult=curl_exec ($ch);
curl_close($ch);
unlink($file_name_with_full_path);
$result = json_decode($jresult, true);
if (isset($result["code"])) {
    echo(json_encode(array("code" => $result["code"], "did" => $did)));
}
else {
$get["code"]="notfound";
$get = json_encode($get,true);
    die("$get");
unlink($file_name_with_full_path);
}
}
else{
$get["code"]="notfound";
$get = json_encode($get,true);
    echo("$get");
unlink($file_name_with_full_path);
}
?>