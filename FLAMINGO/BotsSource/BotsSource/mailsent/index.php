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
define('API_KEY','[*[TOKEN]*]');
$admin = [*[ADMIN]*];

function makereq($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

function apiRequest($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }
  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }
  foreach ($parameters as $key => &$val) {
    // encoding to JSON array parameters, for example reply_markup
    if (!is_numeric($val) && !is_string($val)) {
      $val = json_encode($val);
    }
  }
  $url = "https://api.telegram.org/bot".API_KEY."/".$method.'?'.http_build_query($parameters);
  $handle = curl_init($url);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);
  return exec_curl_request($handle);
}
//----######------
//---------
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
//=========
$chat_id = $update->message->chat->id;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$fromid = $update->callback_query->from->id;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$fname = $update->message->from->last_name;
$username = $update->message->from->username;
$textmessage = isset($update->message->text)?$update->message->text:'';
$txtmsg = $update->message->text;
$reply = $update->message->reply_to_message->forward_from->id;
$stickerid = $update->message->reply_to_message->sticker->file_id;
$ac = file_get_contents("data/$from_id/active.txt");
$step = file_get_contents("data/".$from_id."/step.txt");
$ok = file_get_contents("data/$from_id/mail.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
function SendMessage($ChatId, $TextMsg)
{
 makereq('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"MarkDown"
]);
}
function SendSticker($ChatId, $sticker_ID)
{
 makereq('sendSticker',[
'chat_id'=>$ChatId,
'sticker'=>$sticker_ID
]);
}
function Forward($KojaShe,$AzKoja,$KodomMSG)
{
makereq('ForwardMessage',[
'chat_id'=>$KojaShe,
'from_chat_id'=>$AzKoja,
'message_id'=>$KodomMSG
]);
}
function save($filename,$TXTdata)
 {
 $myfile = fopen($filename, "w") or die("Unable to open file!");
 fwrite($myfile, "$TXTdata");
 fclose($myfile);
 }
 
//===========
if ($textmessage == '/start'){
if(!file_exists("data/$from_id/step.txt")){
mkdir("data/$from_id");
save("data/$from_id/active.txt","false");
 $myfile = fopen("data/users.txt", "a") or die("Unable to open file!");
 fwrite($myfile, "$from_id\n");
 fclose($myfile);
	}
    	if($ac != "true"){
if($bot_type != 'gold'){
		makereq('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
    	save("data/$from_id/step.txt","mail");
sendmessage($chat_id,"برای 📝ثبت نام
ایمیل خود را وارد کنید :");    
}else{
if($bot_type != 'gold'){
		makereq('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
makereq("sendmessage",[
'chat_id'=>$chat_id,
'text'=>'یکی از گزینه هارا انتخاب کنید',
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>'ارسال ایمیل']
],
[
['text'=>'درباره ما'],['text'=>'راهنما']
],
[
['text'=>'تغییر ایمیل']
],
],
'resize_keyboard'=>true,
])
]);
}
}
if ($step == 'mail') {
$Smail = rand(11111111,99999999);
save("data/$from_id/rand.txt","$Smail");
save("data/$from_id/step.txt","code");
save("data/$from_id/textsh.txt","$textmessage");
$Wmail = file_get_contents("data/$from_id/textsh.txt");

    $to = "$Wmail"; 
    $subject = "کد تایید";    
    $message = "کد تایید اکانت شما:$Smail"; 
    $from = "info@mailsender.com";       
    $headers = "From:" . $from;
    mail ( $to , $subject , $message , $headers ) ;        
    sendmessage($chat_id,"کد فعال سازی برای ایمیل شما ارسال شد لطفا آن را وارد کنید");

}
$code = file_get_contents("data/$from_id/rand.txt");
if ($step == 'code') {
if ($textmessage == "$code"){
$mails = file_get_contents("data/$from_id/textsh.txt");
save("data/$from_id/mail.txt","$mails");
save("data/$from_id/active.txt","true");
sendmessage($chat_id,"اکانت شما فعال شد یکبار دیگر /start را بفرستید");
}else{
unlink("data/$from_id/mail.txt");
save("data/$from_id/step.txt","none");
sendmessage($chat_id,"کد اشتباه است لطفا مجددا /start را بفرستید");
}
}
if ($textmessage == 'راهنما') {
sendmessage($chat_id,"شما توسط این سرویس میتوانید ایمیل برای دوستان خود بفرستید کافی است روی ارسال ایمیل کلیک کنید");
}
if ($textmessage == 'درباره ما') {
sendmessage($chat_id,"ربات ارسال ایمیل نسخه 1.4");
}
if ($textmessage == 'ارسال ایمیل') {
save("data/$from_id/step.txt","send");
sendmessage($chat_id,"ایمیل مقصد را وارد کنید");
}
if ($step == 'send') {
save("data/$from_id/step.txt","moz");
save("data/$from_id/send.txt","$textmessage");
sendmessage($chat_id,"موضوع را وارد کنید");
}
if ($step == 'moz') {
save("data/$from_id/step.txt","matn");
save("data/$from_id/moz.txt","$textmessage");
sendmessage($chat_id,"لطفا متن پیام را وارد کنید");
}
if ($step == "matn") {
save("data/$from_id/mat.txt","$textmessage");
save("data/$from_id/step.txt","mat");
sendmessage($chat_id,"از چه ایمیلی ارسال بشه؟");
}
if ($step == 'mat') {
save("data/$from_id/step.txt","none");
$be = file_get_contents("data/$from_id/send.txt");
$az = "$textmessage";
$moz = file_get_contents("data/$from_id/moz.txt");
$tex = file_get_contents("data/$from_id/mat.txt");
    $to = "$be"; 
    $subject = "$moz";    
    $message = "$tex"; 
    $from = "$az";       
    $headers = "From:" . $from;
    mail ( $to , $subject , $message , $headers ) ;         
    sendmessage($chat_id,"ایمیل ارسال شد");

}
if ($textmessage == 'تغییر ایمیل') {
save("data/$from_id/step.txt","tagh");
sendmessage($chat_id,"ایمیل جدید را بفرستید");
}
if ($step == 'tagh') {
$Smail = rand(11111111,99999999);
save("data/$from_id/rand.txt","$Smail");
save("data/$from_id/step.txt","code");
$to = "$textmessage";
$subject = "کد فعال سازی";
$body = "با سلام خدمت شما کاربر عزیز و گرامی\nکد فعال سازی اکانت شما:$Smail\nاگر شما این کد را درخواست نکرده اید بیخیال شوید";
$headers = "From: $textmessage";
save("data/$from_id/mail.txt","$textmessage");

mail($to, $subject, $body, $headers);
sendmessage($chat_id,"کد فعال سازی برای ایمیل شما ارسال شد لطفا آن را وارد کنید");
}
$code = file_get_contents("data/$from_id/rand.txt");
if ($step == 'code') {
if ($textmessage == "$code"){
sendmessage($chat_id,"اکانت شما فعال شد یکبار دیگر /start را بفرستید");
}else{
unlink("data/$from_id/mail.txt");
save("data/$from_id/step.txt","none");
sendmessage($chat_id,"کد اشتباه است لطفا مجددا /start را بفرستید");
}
}
//#####پنل مدیریت#####
if ($textmessage == '/panel' && $from_id == $admin) {
makereq('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"انتخاب کنید",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'آمار','callback_data'=>'am']
],
[
['text'=>'ارسال همگانی','callback_data'=>'send'],['text'=>'فروارد همگانی','callback_data'=>'for']
],
],
'resize_keyboard'=>true,
])
]);
}
		if(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmessage)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
 if ($data == 'send' && $fromid == $admin) {
         save("data/$fromid/step.txt","sendd");
  sendmessage($chatid,"پیامتون رو وارد کنید.");
  }
  if($step == 'sendd' and $from_id == $admin){
  save("data/$from_id/step.txt","none");
  SendMessage($chat_id,"پیام شما در صف ارسال قرار گرفت.");
  $all = fopen( "data/users.txt", 'r');
    while( !feof( $all)) {
       $users = fgets( $all);
         sendmessage($users,"$textmessage");
      }
    }
    if ($data == 'for' && $fromid == $admin) {
    save("data/$fromid/step.txt","for");
    sendmessage($chatid,"پیامتون رو فروارد کنید");
    }
    if ($step == 'for') {
    save("data/$from_id/step.txt","none");
    SendMessage($chat_id,"پیام شما در صف ارسال قرار گرفت.");
  $all = fopen( "data/users.txt", 'r');
    while( !feof( $all)) {
       $users = fgets( $all);
         forward($users,$from_id,$message_id);
              }
    }
    if ($data == 'am') {
    $s = scandir("data");
    $c = count($s)-1;
    sendmessage($chatid,"آمار کاربران:$c");
    }
	unlink('error_log');
?>