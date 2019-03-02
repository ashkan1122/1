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
$token = $_GET['token'];
$id = $_GET['id'];
$type = $_GET['type'];
$WEBADRESS = "https://sina.000webhost/Malak"; /// ادرس
$user = json_decode(file_get_contents("../../Bots/BotSaz/[(*ID*)]/data/$id.json"),true);
$createfree = $user["create"];
$account = $user["type"];
$creator_cmd = "$WEBADRESS/Bots/BotSaz/[(*ID*)]/data/creator-cmd.txt";
$ads = "$WEBADRESS/Bots/BotSaz/[(*ID*)]/data/ads.txt";
$settings = json_decode(file_get_contents("../../Bots/BotSaz/[(*ID*)]/data/settings.json"),true);
$maxcreate = $settings["maxcreate"];
$freeallbots = $settings["freeallbots"];
//---
if($account == null){
    	echo 'ابتدا ربات ساز ما را استارت کنید!';
}
if($createfree >= $maxcreate and $account == "free"){
  
echo " حداکثر تعداد مجاز برای ساخت ربات $maxcreate میباشد
شما تا کنون $createfree ربات ساخته اید
برای ادامه باید حساب خود را در ربات ساز ویژه کنید";

	}
elseif($token != null and $id != null and $type != null and $maxcreate != null and $createfree != null){
 if($account == "vip" or $maxcreate > $createfree and $account == "free"){
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
                       $outjson = json_encode($user,true);
file_put_contents("../../Bots/BotSaz/[(*ID*)]/data/$id.json",$outjson);
file_get_contents("$WEBADRESS/BotSazApi.php?token=$token&id=$id&type=$type&account=$account&creator_cmd=$creator_cmd&ads=$ads");
echo 'Succsee !';
}
}
?>