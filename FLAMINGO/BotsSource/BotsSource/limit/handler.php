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
flush();
ob_start();
error_reporting(0);
date_default_timezone_set('Asia/Tehran');
//--------[Your Config]--------//
$Dev = [*[ADMIN]*];
$Token = '[*[TOKEN]*]'; //--Input Token in ' '
//-----------------------------//
define('API_KEY',$Token);
//------------------------------------------------------------------------------
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
    }
//------------------------------------------------------------------------------
function SendMessage($chat_id, $text, $mode, $reply, $keyboard = null){
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode,
	'reply_to_message_id'=>$reply,
	'reply_markup'=>$keyboard
	]);
}
function EditMsg($chatid, $msgid, $text, $keyboard = null){
    bot('EditMessageText', [
    'chat_id'=>$chatid,
    'message_id'=>$msgid,
    'text'=>$text,
    'reply_markup'=>$keyboard
    ]);
}
function Forward($chat_id,$from_id,$massege_id){
    bot('ForwardMessage',[
    'chat_id'=>$chat_id,
    'from_chat_id'=>$from_id,
    'message_id'=>$massege_id
    ]);
}
function save($filename,$TXTdata){
  $myfile = fopen("data/".$filename, "a") or die("Unable to open file!");
  fwrite($myfile, "$TXTdata");
  fclose($myfile);
  }
//------------------------------------------------------------------------------
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$name = $message->from->first_name;
$lastname = $message->from->last_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$messageid = $update->callback_query->message->message_id;
$mention = "<a href='tg://user?id=$from_id'>$name</a>";
$now = date('h:i:s');
//--------[Auto Cnfiger]--------//
if(!is_dir("data")){mkdir("data");}
//--------[Json]--------//
$user = json_decode(file_get_contents("data/user.json"),true);
$All = $user['userlist'];
$users = json_decode(file_get_contents("data/data.json"),true);
$ban = $users[$from_id]['ban'];
$step = $users[$from_id]['step'];
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//--------[Buttons]--------//
$home = json_encode(['resize_keyboard' => true,
'inline_keyboard'=>[
[['text' => "🎈 شروع", 'callback_data' => "keyboard"]],
]]);
$again = json_encode(['resize_keyboard' => true,
'inline_keyboard'=>[
[['text' => "🎈 شروع مجدد", 'callback_data' => "keyboard"]],
]]);
$keyboard = json_encode([
'inline_keyboard'=>[
[['text'=> "ض",'callback_data'=>"ض"],['text'=> "ص",'callback_data'=>"ص"],['text'=> "ث",'callback_data'=>"ث"],['text'=> "ق",'callback_data'=>"ق"],['text'=> "ف",'callback_data'=>"ف"],['text'=> "غ",'callback_data'=>"غ"],['text'=> "ع",'callback_data'=>"ع"],['text'=> "ه",'callback_data'=>"ه"]],
[['text'=> "ش",'callback_data'=>"ش"],['text'=> "س",'callback_data'=>"س"],['text'=> "ی",'callback_data'=>"ی"],['text'=> "ب",'callback_data'=>"ب"],['text'=> "ل",'callback_data'=>"ل"],['text'=> "ا",'callback_data'=>"ا"],['text'=> "ت",'callback_data'=>"ت"],['text'=> "ن",'callback_data'=>"ن"]],
[['text'=> "ظ",'callback_data'=>"ظ"],['text'=> "ط",'callback_data'=>"ط"],['text'=> "ژ",'callback_data'=>"ژ"],['text'=> "ز",'callback_data'=>"ز"],['text'=> "ر",'callback_data'=>"ر"],['text'=> "ذ",'callback_data'=>"ذ"],['text'=> "د",'callback_data'=>"د"],['text'=> "و",'callback_data'=>"و"]],
[['text'=> "خ",'callback_data'=>"خ"],['text'=> "ح",'callback_data'=>"ح"],['text'=> "ج",'callback_data'=>"ج"],['text'=> "چ",'callback_data'=>"چ"],['text'=> "م",'callback_data'=>"م"],['text'=> "ک",'callback_data'=>"ک"],['text'=> "گ",'callback_data'=>"گ"],['text'=> "پ",'callback_data'=>"پ"]],
[['text'=> "‌                           ‌",'callback_data'=>"فاصله"]],
[['text'=> "رفتن به خط بعد",'callback_data'=>"\n"],['text'=> "حذف",'callback_data'=>"del"]],
[['text'=> "حذف کامل نوشته من",'callback_data'=>"delall"]],
[['text'=> "پایان",'callback_data'=>"end"]]
]]);
$panel = json_encode(['keyboard'=>[
[['text'=>"آمار"]],
[['text'=>"فروارد همگانی"],['text'=>"ارسال همگانی"]],
[['text'=>"حذف مسدود کاربر"],['text'=>"مسدود کاربر"]],
[['text'=>"▫️ برگشت ▫️"]]
],'resize_keyboard'=>true]);
$back_panel = json_encode(['keyboard'=>[
[['text'=>"بازگشت"]]
],'resize_keyboard'=>true]);
//----------------//
?>