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
$ads = $_GET['ads'];
$account = $_GET['account'];
$creator_cmd = $_GET['creator_cmd'];
$channel = $_GET['channel'];
$WEBADRESS = "https://site.com/file"; /// ادرس
function objectToArrays( $object ) {
				if( !is_object( $object ) && !is_array( $object ) )
				{
				return $object;
				}
				if(is_object( $object ) )
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
 if($token !== null && $id !== null && $type !== null && $account !== null){
//---
	 	if($type == "delete"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
	if($ok == "1" && (file_exists("Bots/Bot/$un/index.php"))){
deletefolder("Bots/Bot/$un");
rmdir("Bots/Bot/$un");
	}}
//-------------------------

 if($type == "payamresan"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/other");
  mkdir("Bots/Bot/$un/data");
  mkdir("Bots/Bot/$un/other/$id");
  mkdir("Bots/Bot/$un/other/access");
  mkdir("Bots/Bot/$un/other/button");
  mkdir("Bots/Bot/$un/other/profile");
  mkdir("Bots/Bot/$un/other/setting");
  mkdir("Bots/Bot/$un/other/wordlist");
  mkdir("Bots/Bot/$un/other/button/caption");
  mkdir("Bots/Bot/$un/other/button/file");
  mkdir("Bots/Bot/$un/other/button/forward");
  mkdir("Bots/Bot/$un/other/button/music");
  mkdir("Bots/Bot/$un/other/button/photo");
  mkdir("Bots/Bot/$un/other/button/feed");
  mkdir("Bots/Bot/$un/other/button/sticker");
  mkdir("Bots/Bot/$un/other/button/text");
  mkdir("Bots/Bot/$un/other/button/video");
  mkdir("Bots/Bot/$un/other/button/voice");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  save("Bots/Bot/$un/other/setting/start.txt","Hi!✋ 
  <b>Welcome To My Bot</b>");
  save("Bots/Bot/$un/other/setting/send.txt","<b>Sent To My Admin!</b>");
  save("Bots/Bot/$un/other/setting/sticker.txt","✅");
  save("Bots/Bot/$un/other/setting/file.txt","✅");
  save("Bots/Bot/$un/other/setting/aks.txt","✅");
  save("Bots/Bot/$un/other/setting/music.txt","✅");
  save("Bots/Bot/$un/other/setting/film.txt","✅");
  save("Bots/Bot/$un/other/setting/voice.txt","✅");
  save("Bots/Bot/$un/other/setting/join.txt","✅");
  save("Bots/Bot/$un/other/setting/link.txt","✅");
  save("Bots/Bot/$un/other/setting/forward.txt","✅");
  save("Bots/Bot/$un/other/setting/pm_forward.txt","⛔️");
  save("Bots/Bot/$un/other/setting/pm_resani.txt","✅");
  save("Bots/Bot/$un/other/setting/on-off.txt","true");
  save("Bots/Bot/$un/other/setting/profile.txt","✅");
  save("Bots/Bot/$un/other/setting/contact.txt","⛔️");
  save("Bots/Bot/$un/other/setting/location.txt","⛔️");
  $class = file_get_contents("BotsSource/BotsSource/payamresan/Class.php");
  $class = str_replace("[*[TOKEN]*]",$token,$class);
  $class = str_replace("[*[ADMIN]*]",$id,$class);
  save("Bots/Bot/$un/Class.php",$class);
  $index = file_get_contents("BotsSource/BotsSource/payamresan/index.php");
  save("Bots/Bot/$un/index.php",$index);	
  $butt = file_get_contents("BotsSource/BotsSource/payamresan/Button.php");
  save("Bots/Bot/$un/other/Button.php",$butt);	
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
   //---
  if($type == "antispam"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
$index = file_get_contents("BotsSource/BotsSource/antispam/index.php");
$index = str_replace("[*[TOKEN]*]",$token,$index);
$index = str_replace("[*[ADMIN]*]",$id,$index);
$index = str_replace("[*[CHENNEL]*]",$channel,$index);
$index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 //---
 if($type == "banner"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/banner/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[CHANNEL]*]",$channel,$index);
  save("Bots/Bot/$un/index.php",$index);
  $jdf = file_get_contents("BotsSource/BotsSource/banner/jdf.php");
  save("Bots/Bot/$un/jdf.php",$jdf);	
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  //---
 if($type == "chatrandom"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  mkdir("Bots/Bot/$un/user");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/chatrandom/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);	
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  //---
 if($type == "editmusic"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/editmusic/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  if($type == "fileconvert"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/fileconvert/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "motarjem"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/motarjem/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "shortlink"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/shortlink/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "webhook"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/webhook/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  if($type == "fallgir"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/fallgir/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "profile"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/profile/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $jdf = file_get_contents("BotsSource/BotsSource/profile/jdf.php");
  save("Bots/Bot/$un/jdf.php",$jdf);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "eshterakresane"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  mkdir("Bots/Bot/$un/mailes");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/eshterakresane/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $jdf = file_get_contents("BotsSource/BotsSource/eshterakresane/jdf.php");
  save("Bots/Bot/$un/jdf.php",$jdf);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "mailsent"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/mailsent/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "music"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/music/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $img = file_get_contents("BotsSource/BotsSource/music/data/img.png");
  save("Bots/Bot/$un/data/img.png",$img);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "viewbtn"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/admin");
  mkdir("Bots/Bot/$un/ads");
  mkdir("Bots/Bot/$un/cod");
  mkdir("Bots/Bot/$un/code");
  mkdir("Bots/Bot/$un/data");
  mkdir("Bots/Bot/$un/user");
  //--
  mkdir("Bots/Bot/$un/admin/ads");
  mkdir("Bots/Bot/$un/admin/code");
  mkdir("Bots/Bot/$un/admin/user");
  //--
  mkdir("Bots/Bot/$un/ads/admin");
  mkdir("Bots/Bot/$un/ads/ads admin");
  mkdir("Bots/Bot/$un/ads/ads end");
  mkdir("Bots/Bot/$un/ads/ads etmam");
  mkdir("Bots/Bot/$un/ads/ads log");
  mkdir("Bots/Bot/$un/ads/ads msg id");
  mkdir("Bots/Bot/$un/ads/ads ok");
  mkdir("Bots/Bot/$un/ads/ads rad");
  mkdir("Bots/Bot/$un/ads/ads start");
  mkdir("Bots/Bot/$un/ads/ads tally");
  mkdir("Bots/Bot/$un/ads/ads tedad");
  mkdir("Bots/Bot/$un/ads/ads username");
  mkdir("Bots/Bot/$un/ads/cont");
  mkdir("Bots/Bot/$un/ads/date");
  mkdir("Bots/Bot/$un/ads/seen");
  mkdir("Bots/Bot/$un/ads/time");
  mkdir("Bots/Bot/$un/ads/user");
  //-------
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $sup = $_GET['sup'];
  $Class = file_get_contents("BotsSource/BotsSource/viewbtn/Class.php");
  $Class = str_replace("[*[TOKEN]*]",$token,$Class);
  $Class = str_replace("[*[ADMIN]*]",$id,$Class);
  $Class = str_replace("[*[CHENNEL]*]",$channel,$Class);
  save("Bots/Bot/$un/Class.php",$Class);
  $index = file_get_contents("BotsSource/BotsSource/viewbtn/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[CHENNEL]*]",$channel,$index);
  $index = str_replace("[*[SUP]*]",$sup,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "tabchi"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/tabchi/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  save("Bots/Bot/$un/index.php",$index);
  $jdf = file_get_contents("BotsSource/BotsSource/banner/jdf.php");
  save("Bots/Bot/$un/jdf.php",$jdf);	
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  if($type == "addkon"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/addkon/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);	
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
 if($type == "kasb"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  mkdir("Bots/Bot/$un/admin");
  mkdir("Bots/Bot/$un/user");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $Class = file_get_contents("BotsSource/BotsSource/kasb/Class.php");
  $Class = str_replace("[*[TOKEN]*]",$token,$Class);
  $Class = str_replace("[*[ADMIN]*]",$id,$Class);
  save("Bots/Bot/$un/Class.php",$Class);
    $index = file_get_contents("BotsSource/BotsSource/kasb/index.php");
  save("Bots/Bot/$un/index.php",$index);	
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
   if($type == "esmfamil"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/esmfamil/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  $index = str_replace("[*[CHANNEL]*]",$channel,$index);
  save("Bots/Bot/$un/index.php",$index);
  $wordlist = file_get_contents("BotsSource/BotsSource/esmfamil/wordlist.json");
  save("Bots/Bot/$un/data/wordlist.json",$wordlist);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  if($type == "kalamat"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  mkdir("Bots/Bot/$un/database");
  mkdir("Bots/Bot/$un/database/soal-javab");
  mkdir("Bots/Bot/$un/database/soal-javab/donafare");
  mkdir("Bots/Bot/$un/database/soal-javab/joghraphy");
  mkdir("Bots/Bot/$un/database/soal-javab/mazhabi");
  mkdir("Bots/Bot/$un/database/soal-javab/omomi");
  mkdir("Bots/Bot/$un/database/soal-javab/tarikhi");
  mkdir("Bots/Bot/$un/database/soal-javab/varzeshi");
  mkdir("Bots/Bot/$un/database/soal-javab/technology");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
   $c6 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/technology/count.txt");
  save("Bots/Bot/$un/database/soal-javab/technology/count.txt",$c6);
 $c5 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/varzeshi/count.txt");
  save("Bots/Bot/$un/database/soal-javab/varzeshi/count.txt",$c5);
$c4 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/tarikhi/count.txt");
  save("Bots/Bot/$un/database/soal-javab/tarikhi/count.txt",$c4);
$c3 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/omomi/count.txt");
  save("Bots/Bot/$un/database/soal-javab/omomi/count.txt",$c3);
$c2 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/mazhabi/count.txt");
  save("Bots/Bot/$un/database/soal-javab/mazhabi/count.txt",$c2);
  $c1 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/joghraphy/count.txt");
  save("Bots/Bot/$un/database/soal-javab/joghraphy/count.txt",$c1);
  //---
  $num1 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/donafare/1.txt");
  save("Bots/Bot/$un/database/soal-javab/donafare/1.txt",$num1);
    $num2 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/donafare/2.txt");
  save("Bots/Bot/$un/database/soal-javab/donafare/2.txt",$num2);
      $num3 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/donafare/3.txt");
  save("Bots/Bot/$un/database/soal-javab/donafare/3.txt",$num3);
      $num4 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/donafare/4.txt");
  save("Bots/Bot/$un/database/soal-javab/donafare/4.txt",$num4);
      $num5 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/donafare/5.txt");
  save("Bots/Bot/$un/database/soal-javab/donafare/5.txt",$num5);
      $num6 = file_get_contents("BotsSource/BotsSource/kalamat/database/soal-javab/donafare/6.txt");
  save("Bots/Bot/$un/database/soal-javab/donafare/6.txt",$num6);
  
  $index = file_get_contents("BotsSource/BotsSource/kalamat/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  if($type == "limit"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $handler = file_get_contents("BotsSource/BotsSource/limit/handler.php");
  $handler = str_replace("[*[TOKEN]*]",$token,$handler);
  $handler = str_replace("[*[ADMIN]*]",$id,$handler);
  save("Bots/Bot/$un/handler.php",$handler);
  $index = file_get_contents("BotsSource/BotsSource/limit/index.php");
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  if($type == "face"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/face/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  $index = str_replace("[*[CHANNEL]*]",$channel,$index);
  $index = str_replace("[*[WEB]*]","$WEBADRESS/Bots/Bot/$un",$index);
  save("Bots/Bot/$un/index.php",$index);
 $getphoto = file_get_contents("BotsSource/BotsSource/face/getphoto.php");
  save("Bots/Bot/$un/getphoto.php",$getphoto);	
   $send = file_get_contents("BotsSource/BotsSource/face/send.php");
  save("Bots/Bot/$un/send.php",$send);
   $sendphoto = file_get_contents("BotsSource/BotsSource/face/sendphoto.php");
  save("Bots/Bot/$un/sendphoto.php",$sendphoto);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
    if($type == "sandali"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
  $index = file_get_contents("BotsSource/BotsSource/sandali/index.php");
  $index = str_replace("[*[TOKEN]*]",$token,$index);
  $index = str_replace("[*[ADMIN]*]",$id,$index);
  $index = str_replace("[*[BOT]*]",$un,$index);
  $index = str_replace("[*[CHANNEL]*]",$channel,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
if($type == "tabadol"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
$index = file_get_contents("BotsSource/BotsSource/tabadol/index.php");
$index = str_replace("[*[TOKEN]*]",$token,$index);
$index = str_replace("[*[ADMIN]*]",$id,$index);
$index = str_replace("[*[CHENNEL]*]",$channel,$index);
$index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  if($type == "tools"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
$index = file_get_contents("BotsSource/BotsSource/tools/index.php");
$index = str_replace("[*[TOKEN]*]",$token,$index);
$index = str_replace("[*[ADMIN]*]",$id,$index);
$index = str_replace("[*[CHENNEL]*]",$channel,$index);
$index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
   if($type == "rezhim"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
   mkdir("Bots/Bot/$un/user");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
$index = file_get_contents("BotsSource/BotsSource/rezhim/index.php");
$index = str_replace("[*[TOKEN]*]",$token,$index);
$index = str_replace("[*[ADMIN]*]",$id,$index);
$index = str_replace("[*[CHENNEL]*]",$channel,$index);
$index = str_replace("[*[BOT]*]",$un,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
  if($type == "note"){
	 $userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/Bot/$un/index.php"))){
  mkdir("Bots/Bot/$un");
  mkdir("Bots/Bot/$un/data");
   mkdir("Bots/Bot/$un/user");
  if($account == "vip"){
	  save("Bots/Bot/$un/data/bottype.txt","gold");
  }
$index = file_get_contents("BotsSource/BotsSource/note/index.php");
$index = str_replace("[*[TOKEN]*]",$token,$index);
  save("Bots/Bot/$un/index.php",$index);
  $adstext = file_get_contents("$ads");
  save("Bots/Bot/$un/data/adstext.txt",$adstext);
  $creator_cmd = file_get_contents("$creator_cmd");
  save("Bots/Bot/$un/data/creator-cmd.txt",$creator_cmd);
  file_get_contents("https://api.telegram.org/bot$token/setwebhook?url=$WEBADRESS/Bots/Bot/$un/index.php");
  }}
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

 }
 unlink('error_log');
 ?>