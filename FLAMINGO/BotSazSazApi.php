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
$WEBADRESS = "https://site.com/file";  //// ادرس وب هوک 
$j = date('j');
$maintime = $j+1;
function objectToArrays( $object ) {
				if( !is_object( $object ) && !is_array( $object ) )
				{
				return $object;
				}
				if( is_object( $object ) )
				{
				$object = get_object_vars( $object );
				}
			return array_map( "objectToArrays", $object );
			}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function deletefolder($path) { 
     if ($handle=opendir($path)) { 
       while (false!==($file=readdir($handle))) { 
         if ($file<>"." AND $file<>"..") { 
           if (is_file($path.'/'.$file))  { 
             @unlink($path.'/'.$file); 
             } 
           if (is_dir($path.'/'.$file)) { 
             deletefolder($path.'/'.$file); 
             @rmdir($path.'/'.$file); 
            } 
          } 
        } 
      } 
 }
if($token !== null && $id !== null && $type !== null){
	if($type == "create"){
	$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/BotSaz/$un/index.php"))){
mkdir("Sites/$un");
mkdir("Sites/$un/index_files");
$site = file_get_contents("BotsSource/WebSite/index.html");
$site = str_replace("[(*ID*)]",$un,$site);
 save("Sites/$un/index.html",$site);
 $api = file_get_contents("BotsSource/WebSite/api.php");
 $api = str_replace("[(*ID*)]",$un,$api);
 save("Sites/$un/api.php",$api);
 //-
 $test1 = file_get_contents("BotsSource/WebSite/index_files/all.js.download");
 save("Sites/$un/index_files/all.js.download",$test1);
 $test2 = file_get_contents("BotsSource/WebSite/index_files/beacon.js.download");
 save("Sites/$un/index_files/beacon.js.download",$test2);
  $test3 = file_get_contents("BotsSource/WebSite/index_files/cb=gapi(1).loaded_0");
 save("Sites/$un/index_files/cb=gapi(1).loaded_0",$test3);
 $test4 = file_get_contents("BotsSource/WebSite/index_files/core.css");
 save("Sites/$un/index_files/core.css",$test4);
 $test5 = file_get_contents("BotsSource/WebSite/index_files/core.js.download");
 save("Sites/$un/index_files/core.js.download",$test5);
 $test6 = file_get_contents("BotsSource/WebSite/index_files/css");
 save("Sites/$un/index_files/css",$test6);
 $test7 = file_get_contents("BotsSource/WebSite/index_files/dc.js.download");
 save("Sites/$un/index_files/dc.js.download",$test7);
 $test8 = file_get_contents("BotsSource/WebSite/index_files/detector.js.download");
 save("Sites/$un/index_files/detector.js.download",$test8);
 $test9 = file_get_contents("BotsSource/WebSite/index_files/geekaphone.com.js.download");
 save("Sites/$un/index_files/geekaphone.com.js.download",$test9);
 $test10 = file_get_contents("BotsSource/WebSite/index_files/geekaphone-core.css");
 save("Sites/$un/index_files/geekaphone-core.css",$test10);
 $test11 = file_get_contents("BotsSource/WebSite/index_files/geekaphone-core.js.download");
 save("Sites/$un/index_files/geekaphone-core.js.download",$test11);
 $test12 = file_get_contents("BotsSource/WebSite/index_files/geekaphone-index.css");
 save("Sites/$un/index_files/geekaphone-index.css",$test12);
 $test13 = file_get_contents("BotsSource/WebSite/index_files/geekaphone-index.js.download");
 save("Sites/$un/index_files/geekaphone-index.js.download",$test13);
 $test14 = file_get_contents("BotsSource/WebSite/index_files/getuid");
 save("Sites/$un/index_files/getuid",$test14);
 $test15 = file_get_contents("BotsSource/WebSite/index_files/getuid(1)");
 save("Sites/$un/index_files/getuid(1)",$test15);
 $test16 = file_get_contents("BotsSource/WebSite/index_files/gpt.js.download");
 save("Sites/$un/index_files/gpt.js.download",$test16);
 $test17 = file_get_contents("BotsSource/WebSite/index_files/jquery.min.js.download");
 save("Sites/$un/index_files/jquery.min.js.download",$test17);
 $test18 = file_get_contents("BotsSource/WebSite/index_files/lib.js.download");
 save("Sites/$un/index_files/lib.js.download",$test18);
 $test19 = file_get_contents("BotsSource/WebSite/index_files/pixelSync");
 save("Sites/$un/index_files/pixelSync",$test19);
 $test20 = file_get_contents("BotsSource/WebSite/index_files/plusone.js.download");
 save("Sites/$un/index_files/plusone.js.download",$test20);
 $test21 = file_get_contents("BotsSource/WebSite/index_files/quant.js.download");
 save("Sites/$un/index_files/quant.js.download",$test21);
 $test22 = file_get_contents("BotsSource/WebSite/index_files/rpc-shindig_random.js.download");
 save("Sites/$un/index_files/rpc-shindig_random.js.download",$test22);
 $test23 = file_get_contents("BotsSource/WebSite/index_files/rs=AGLTcCN-9gVorbD2Az76744xqpQBLERe4Q");
 save("Sites/$un/index_files/rs=AGLTcCN-9gVorbD2Az76744xqpQBLERe4Q",$test23);
 $test24 = file_get_contents("BotsSource/WebSite/index_files/rtset");
 save("Sites/$un/index_files/rtset",$test24);
 $test25 = file_get_contents("BotsSource/WebSite/index_files/rules-p-N04C2m09Yy8f8.js.download");
 save("Sites/$un/index_files/rules-p-N04C2m09Yy8f8.js.download",$test25);
 $test26 = file_get_contents("BotsSource/WebSite/index_files/sovrn_standalone_beacon.js.download");
 save("Sites/$un/index_files/sovrn_standalone_beacon.js.download",$test26);
 $test27 = file_get_contents("BotsSource/WebSite/index_files/widgets.js.download");
 save("Sites/$un/index_files/widgets.js.download",$test27);
//---
mkdir("Bots/BotSaz/$un");
mkdir("Bots/BotSaz/$un/data");
mkdir("Bots/BotSaz/$un/cmd");
$index = file_get_contents("BotsSource/BotSazSazSource/index.php");
  $index = str_replace("[(*TOKEN*)]",$token,$index);
  $index = str_replace("[(*BOTSAZWEB*)]","$WEBADRESS/Sites/$un",$index);
  $index = str_replace("[(*ADMIN*)]",$id,$index);
  $index = str_replace("[(*TIME*)]","99999",$index);
  $index = str_replace("[(*BOT*)]",$un,$index);
  save("Bots/BotSaz/$un/index.php",$index);	
  $settings = json_decode(file_get_contents("Bots/BotSaz/$un/data/settings.json"),true);
  $settings["mode"] = "on";
  $settings["selledbotsaz"] = "0";
  $settings["maxcreate"] = "2";
  $settings["freeallbots"] = "0";
  $settings["vipaccs"] = "0";
  $settings["cinvite"] = "15";
  $settings["starttext"] = "متن استارت بصورت پیشفرض ثبت شده است 🥀

فقط ادمین ربات قادر به تغییر نام دکمه های ربات و عملکرد آن میباشد 🍂

درصورت اینکه ادمین یا دارای مقام در ربات هستید از دستور زیر برای اعمال تنظیمات خود استفاده کنید :

/panel

کانال ما :

@CrFlamingo";
  $settings["buttons"]["btn1"] = "🤖 ساخت ربات 🤖";
  $settings["buttons"]["btn2"] = "🤖 ساخت رباتساز 🤖";
  $settings["buttons"]["btn3"] = "🐣 ویژه شدن 🐣";
  $settings["buttons"]["btn4"] = "🌿 پروفایل 🌿";
  $settings["buttons"]["btn5"] = "🎙 وبسایت ما 📡";
  $settings["buttons"]["btn6"] = "🗑 حذف رباتساز 🗑";
  $settings["buttons"]["btn7"] = "📝 کد رایگان 📝";
  $settings["buttons"]["btn8"] = "👥 زیرمجموعه گیری 👥";
  $settings["buttons"]["btn9"] = "🗂 قوانین 🗂";
  $settings["buttons"]["btn10"] = "🎙 کانال حامی 🎙";
  $settings["buttons"]["btn11"] = "💰 رزرو تبلیغات 💳";
  $settings["buttons"]["btn12"] = "💡 راهنما 💡";
  $settings["buttons"]["btn13"] = "📞 پشتیبانی ☎️";
  $settings["text"]["text1"] = "متن پیش فرض برای ساخت ربات";
  $settings["text"]["text2"] = "متن پیش فرض برای ساخت ربات ساز";
  $settings["text"]["text3"] = "متن پیش فرض برای ویژه کردن حساب";
  $settings["text"]["text4"] = "متن پیش فرض پروفایل کاربر";
  $settings["text"]["text5"] = "متن پیش فرض سایت ربات ساز ما";
  $settings["text"]["text6"] = "متن پیش فرض برای حذف ربات";
  $settings["text"]["text7"] = "متن پیش فرض برای وارد کردن کد رایگان";
  $settings["text"]["text8"] = "متن پیش فرض برای زیر مجموعه گیری";
  $settings["text"]["text9"] = "متن پیش فرض برای قوانین";
  $settings["text"]["text10"] = "متن پیش فرض برای کانال ما";
  $settings["text"]["text11"] = "متن پیش فرض برای تبلیغات";
  $settings["text"]["text12"] = "متن پیش فرض برای راهنمای ربات";
  $settings["text"]["text13"] = "متن پیش فرض برای پشتیبانی آنلاین";
$outjson = json_encode($settings,true);
file_put_contents("Bots/BotSaz/$un/data/settings.json",$outjson);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/BotSaz/$un/index.php");
	}}
	if($type == "delete"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
	if($ok == "1" && (file_exists("Bots/BotSaz/$un/index.php"))){
deletefolder("Bots/BotSaz/$un");
rmdir("Bots/BotSaz/$un");
deletefolder("Sites/$un");
rmdir("Sites/$un");
	}}
	if($type == "update"){
	$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
	if($ok == "1" && (file_exists("Bots/BotSaz/$un/index.php"))){
if(!is_dir("Bots/BotSaz/$un/cmd")){
mkdir("Bots/BotSaz/$un/cmd");
}
unlink("Bots/BotSaz/$un/index.php");
unlink("Sites/$un/api.php");
unlink("Sites/$un/index.html");
$index = file_get_contents("BotsSource/BotSazSazSource/index.php");
  $index = str_replace("[(*TOKEN*)]",$token,$index);
  $index = str_replace("[(*BOTSAZWEB*)]","$WEBADRESS/Sites/$un",$index);
  $index = str_replace("[(*ADMIN*)]",$id,$index);
  $index = str_replace("[(*TIME*)]","99999",$index);
  $index = str_replace("[(*BOT*)]",$un,$index);
  save("Bots/BotSaz/$un/index.php",$index);	
  $site = file_get_contents("BotsSource/WebSite/index.html");
$site = str_replace("[(*ID*)]",$un,$site);
 save("Sites/$un/index.html",$site);
 $api = file_get_contents("BotsSource/WebSite/api.php");
 $api = str_replace("[(*ID*)]",$un,$api);
 save("Sites/$un/api.php",$api);
	}}
    if($type == "free"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
	if($ok == "1" && (!file_exists("Bots/BotSaz/$un/index.php"))){
mkdir("Sites/$un");
mkdir("Sites/$un/index_files");
$site = file_get_contents("BotsSource/WebSite/index.html");
$site = str_replace("[(*ID*)]",$un,$site);
 save("Sites/$un/index.html",$site);
 $api = file_get_contents("BotsSource/WebSite/api.php");
 save("Sites/$un/api.php",$api);
 //-
 $test1 = file_get_contents("BotsSource/WebSite/index_files/all.js.download");
 save("Sites/$un/index_files/all.js.download",$test1);
 $test2 = file_get_contents("BotsSource/WebSite/index_files/beacon.js.download");
 save("Sites/$un/index_files/beacon.js.download",$test2);
  $test3 = file_get_contents("BotsSource/WebSite/index_files/cb=gapi(1).loaded_0");
 save("Sites/$un/index_files/cb=gapi(1).loaded_0",$test3);
 $test4 = file_get_contents("BotsSource/WebSite/index_files/core.css");
 save("Sites/$un/index_files/core.css",$test4);
 $test5 = file_get_contents("BotsSource/WebSite/index_files/core.js.download");
 save("Sites/$un/index_files/core.js.download",$test5);
 $test6 = file_get_contents("BotsSource/WebSite/index_files/css");
 save("Sites/$un/index_files/css",$test6);
 $test7 = file_get_contents("BotsSource/WebSite/index_files/dc.js.download");
 save("Sites/$un/index_files/dc.js.download",$test7);
 $test8 = file_get_contents("BotsSource/WebSite/index_files/detector.js.download");
 save("Sites/$un/index_files/detector.js.download",$test8);
 $test9 = file_get_contents("BotsSource/WebSite/index_files/geekaphone.com.js.download");
 save("Sites/$un/index_files/geekaphone.com.js.download",$test9);
 $test10 = file_get_contents("BotsSource/WebSite/index_files/geekaphone-core.css");
 save("Sites/$un/index_files/geekaphone-core.css",$test10);
 $test11 = file_get_contents("BotsSource/WebSite/index_files/geekaphone-core.js.download");
 save("Sites/$un/index_files/geekaphone-core.js.download",$test11);
 $test12 = file_get_contents("BotsSource/WebSite/index_files/geekaphone-index.css");
 save("Sites/$un/index_files/geekaphone-index.css",$test12);
 $test13 = file_get_contents("BotsSource/WebSite/index_files/geekaphone-index.js.download");
 save("Sites/$un/index_files/geekaphone-index.js.download",$test13);
 $test14 = file_get_contents("BotsSource/WebSite/index_files/getuid");
 save("Sites/$un/index_files/getuid",$test14);
 $test15 = file_get_contents("BotsSource/WebSite/index_files/getuid(1)");
 save("Sites/$un/index_files/getuid(1)",$test15);
 $test16 = file_get_contents("BotsSource/WebSite/index_files/gpt.js.download");
 save("Sites/$un/index_files/gpt.js.download",$test16);
 $test17 = file_get_contents("BotsSource/WebSite/index_files/jquery.min.js.download");
 save("Sites/$un/index_files/jquery.min.js.download",$test17);
 $test18 = file_get_contents("BotsSource/WebSite/index_files/lib.js.download");
 save("Sites/$un/index_files/lib.js.download",$test18);
 $test19 = file_get_contents("BotsSource/WebSite/index_files/pixelSync");
 save("Sites/$un/index_files/pixelSync",$test19);
 $test20 = file_get_contents("BotsSource/WebSite/index_files/plusone.js.download");
 save("Sites/$un/index_files/plusone.js.download",$test20);
 $test21 = file_get_contents("BotsSource/WebSite/index_files/quant.js.download");
 save("Sites/$un/index_files/quant.js.download",$test21);
 $test22 = file_get_contents("BotsSource/WebSite/index_files/rpc-shindig_random.js.download");
 save("Sites/$un/index_files/rpc-shindig_random.js.download",$test22);
 $test23 = file_get_contents("BotsSource/WebSite/index_files/rs=AGLTcCN-9gVorbD2Az76744xqpQBLERe4Q");
 save("Sites/$un/index_files/rs=AGLTcCN-9gVorbD2Az76744xqpQBLERe4Q",$test23);
 $test24 = file_get_contents("BotsSource/WebSite/index_files/rtset");
 save("Sites/$un/index_files/rtset",$test24);
 $test25 = file_get_contents("BotsSource/WebSite/index_files/rules-p-N04C2m09Yy8f8.js.download");
 save("Sites/$un/index_files/rules-p-N04C2m09Yy8f8.js.download",$test25);
 $test26 = file_get_contents("BotsSource/WebSite/index_files/sovrn_standalone_beacon.js.download");
 save("Sites/$un/index_files/sovrn_standalone_beacon.js.download",$test26);
 $test27 = file_get_contents("BotsSource/WebSite/index_files/widgets.js.download");
 save("Sites/$un/index_files/widgets.js.download",$test27);
//---
mkdir("Bots/BotSaz/$un");
mkdir("Bots/BotSaz/$un/data");
$index = file_get_contents("BotsSource/BotSazSazSource/index.php");
  $index = str_replace("[(*TOKEN*)]",$token,$index);
  $index = str_replace("[(*BOTSAZWEB*)]","$WEBADRESS/Sites/$un",$index);
  $index = str_replace("[(*ADMIN*)]",$id,$index);
  $index = str_replace("[(*TIME*)]",$maintime,$index);
  $index = str_replace("[(*BOT*)]",$un,$index);
  save("Bots/BotSaz/$un/index.php",$index);	
  $settings = json_decode(file_get_contents("Bots/BotSaz/$un/data/settings.json"),true);
  $settings["mode"] = "on";
   $settings["maxcreate"] = "2";
   $settings["selledbotsaz"] = "0";
   $settings["cinvite"] = "15";
     $settings["freeallbots"] = "0";
  $settings["vipaccs"] = "0";
  $settings["starttext"] = "متن استارت بصورت پیشفرض ثبت شده است 🥀

فقط ادمین ربات قادر به تغییر نام دکمه های ربات و عملکرد آن میباشد 🍂

درصورت اینکه ادمین یا دارای مقام در ربات هستید از دستور زیر برای اعمال تنظیمات خود استفاده کنید :

/panel

کانال ما :

@CrFlamingo";
  $settings["buttons"]["btn1"] = "🤖 ساخت ربات 🤖";
  $settings["buttons"]["btn2"] = "🤖 ساخت رباتساز 🤖";
  $settings["buttons"]["btn3"] = "🐣 ویژه شدن 🐣";
  $settings["buttons"]["btn4"] = "🌿 پروفایل 🌿";
  $settings["buttons"]["btn5"] = "🎙 وبسایت ما 📡";
  $settings["buttons"]["btn6"] = "🗑 حذف رباتساز 🗑";
  $settings["buttons"]["btn7"] = "📝 کد رایگان 📝";
  $settings["buttons"]["btn8"] = "👥 زیرمجموعه گیری 👥";
  $settings["buttons"]["btn9"] = "🗂 قوانین 🗂";
  $settings["buttons"]["btn10"] = "🎙 کانال حامی 🎙";
  $settings["buttons"]["btn11"] = "💰 رزرو تبلیغات 💳";
  $settings["buttons"]["btn12"] = "💡 راهنما 💡";
  $settings["buttons"]["btn13"] = "📞 پشتیبانی ☎️";
  $settings["text"]["text1"] = "متن پیش فرض برای ساخت ربات";
  $settings["text"]["text2"] = "متن پیش فرض برای ساخت ربات ساز";
  $settings["text"]["text3"] = "متن پیش فرض برای ویژه کردن حساب";
  $settings["text"]["text4"] = "متن پیش فرض پروفایل کاربر";
  $settings["text"]["text5"] = "متن پیش فرض سایت ربات ساز ما";
  $settings["text"]["text6"] = "متن پیش فرض برای حذف ربات";
  $settings["text"]["text7"] = "متن پیش فرض برای وارد کردن کد رایگان";
  $settings["text"]["text8"] = "متن پیش فرض برای زیر مجموعه گیری";
  $settings["text"]["text9"] = "متن پیش فرض برای قوانین";
  $settings["text"]["text10"] = "متن پیش فرض برای کانال ما";
  $settings["text"]["text11"] = "متن پیش فرض برای تبلیغات";
  $settings["text"]["text12"] = "متن پیش فرض برای راهنمای ربات";
  $settings["text"]["text13"] = "متن پیش فرض برای پشتیبانی آنلاین";
$outjson = json_encode($settings,true);
file_put_contents("Bots/BotSaz/$un/data/settings.json",$outjson);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/BotSaz/$un/index.php");
  
	}}
	
}
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
unlink('error_log');
 ?>