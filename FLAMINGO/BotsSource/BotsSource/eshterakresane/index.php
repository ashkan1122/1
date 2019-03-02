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
ob_start();
define('API_KEY','[*[TOKEN]*]');
//-------
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
include("jdf.php");
$saat =  jdate('G:i:s');
$tarikh = jdate('Y/n/j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
mkdir("data/$from_id");
$message_id = $message->message_id;
$from_id = $message->from->id;
$textmessage = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$file = $message->document;
$file_id = $message->document->file_id;
$file_name = $message->document->file_name;
$file_size = $message->document->file_size;
$music = $message->audio;
$music_id = $message->audio->file_id;
$music_title = $message->audio->title;
$music_artist = $message->audio->performer;
$music_time = $message->audio->duration;
$music_size = $message->audio->file_size;
$voice = $message->voice;
$voice_id = $message->voice->file_id;
$voice_size = $message->voice->file_size;
$video = $message->video;
$video_id = $message->video->file_id;
$video_size = $message->video->file_size;
$video_time = $message->video->duration;
$contact = $message->contact;
$contactid = $contact->user_id;
$contactnum = $contact->phone_number;
$inline = $update->inline_query->query;
$chatsid= $update->inline_query->from->id;
$step = file_get_contents("data/$from_id/step.txt");
$whois = file_get_contents("data/$from_id/whois.txt");
$activecode = file_get_contents("data/$from_id/activecode.txt");
$email = file_get_contents("data/$from_id/email.txt");
$show = file_get_contents("data/$chatid/show.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//-------
function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function SendPhoto($chat_id, $photo, $caption = null){
	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>$caption
	]);
	}
	function sendvideo($chat_id,$video_id,$caption){
    bot('sendvideo',[
        'chat_id'=>$chat_id,
        'video'=>$video_id,
        'caption'=>$caption
    ]);
}
function sendaudio($chat_id,$audio_id,$caption){
    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$audio_id,
        'caption'=>$caption
    ]);
}
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption
 ]);
 }
	function SendDocument($chat_id, $document, $caption = null){
	bot('SendDocument',[
	'chat_id'=>$chat_id,
	'document'=>$document,
	'caption'=>$caption
	]);
	}
	function EditMessageText($chat_id,$message_id,$text){
  bot('editMessagetext',[
    'chat_id'=>$chat_id,
 'message_id'=>$message_id,
    'text'=>$text,
    'parse_mode'=>"html",
 ]);
 }
function setcount($type,$email){
    $countfile = file_get_contents("mailes/$email/$type/count.txt");
 settype($countfile,"integer");
          $filecount = $countfile + 1;
          file_put_contents("mailes/$email/$type/count.txt",$filecount);
}
//-------
if (!file_exists("data/$from_id/step.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/step.txt","none");
		file_put_contents("data/$from_id/whois.txt","none");
        $myfile2 = fopen("users.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }
    //-------
   
    if($contact && $step == "contact"){
        if($contactid == $from_id){
            file_put_contents("data/$from_id/number.txt","$contactnum");
            file_put_contents("data/$from_id/step.txt","none");
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"شماره شما با موفقیت ذخیره شد
شما به حساب خود لاگین شدید
با تشکر از شما جهت ثبت نام🌺",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"رسانه های من🗂"]],
	[['text'=>"اشتراک رسانه🗃"],['text'=>"تنظیمات⚙️"]],
	    [['text'=>"خط فرمان📡"]],
	[['text'=>"حساب کاربری من👤"],['text'=>"راهنما✔️"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
    }else{
       bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خطا ❌
لطفا با استفاده از دکمه زیر شماره خود را ارسال نمایید",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);    
    }
    }
    //--------
      if($data == "back2list"){
           bot('editMessagetext',[
    'chat_id'=>$chatid,
 'message_id'=>$messageid,
   'text'=>"نوع رسانه را انتخاب کنید :️️",
    'parse_mode'=>"html",
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"فایل ها🗃",'callback_data'=>"documents"], ['text'=>"فیلم ها🎞",'callback_data'=>"videos"]],
               [['text'=>"ترانه ها🎧",'callback_data'=>"musics"], ['text'=>"صدا ها🎼",'callback_data'=>"voices"]]
              ]
        ])
 ]);
}
//--------
 if($data == "voices"){
    $email = file_get_contents("data/$chatid/email.txt");
	if (file_exists("mailes/$email/voice/1.txt")) {
    $count = file_get_contents("mailes/$email/voice/count.txt");
    for ($i=1; $i <= $count; $i++){
    $list = json_decode(file_get_contents("mailes/$email/voice/$i.txt"));
     $id = $list->id;
	 $name = $list->name;
	 $size = $list->size;
	 $date = $list->date;
     $myfile2 = fopen("data/$chatid/show.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "◀️نام : $name
🔹حجم : $size مگابایت
🔸زمان اشتراک : $date
📥دانلود :
/Voice_$id
-------------------\n");
        fclose($myfile2);
  }
   $show = file_get_contents("data/$chatid/show.txt");
   bot('editMessagetext',[
    'chat_id'=>$chatid,
 'message_id'=>$messageid,
   'text'=>"➰لیست صدا های شما :

$show",
    'parse_mode'=>"html",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔙",'callback_data'=>"back2list"]]
              ]
        ])
 ]);
	 unlink("data/$chatid/show.txt");
}else{
	            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "شما هیچ صدایی در ربات به اشتراک نگذاشته اید",
                'show_alert' => true
            ]);
}
}
  if($data == "musics"){
    $email = file_get_contents("data/$chatid/email.txt");
	if (file_exists("mailes/$email/music/1.txt")) {
    $count = file_get_contents("mailes/$email/music/count.txt");
    for ($i=1; $i <= $count; $i++){
    $list = json_decode(file_get_contents("mailes/$email/music/$i.txt"));
     $id = $list->id;
	 $name = $list->name;
	 $size = $list->size;
	 $date = $list->date;
	 $time = $list->time;
     $myfile2 = fopen("data/$chatid/show.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "◀️نام : $name
🔹حجم : $size مگابایت
🔹زمان ترانه: $timeدقیقه
🔸زمان اشتراک : $date
📥دانلود :
/Music_$id
-------------------\n");
        fclose($myfile2);
  }
   $show = file_get_contents("data/$chatid/show.txt");
   bot('editMessagetext',[
    'chat_id'=>$chatid,
 'message_id'=>$messageid,
   'text'=>"➰لیست ترانه های شما :

$show",
    'parse_mode'=>"html",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔙",'callback_data'=>"back2list"]]
              ]
        ])
 ]);
	 unlink("data/$chatid/show.txt");
}else{
		            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "شما هیچ ترانه ای در ربات به اشتراک نگذاشته اید",
                'show_alert' => true
            ]);
}
}
  if($data == "videos"){
    $email = file_get_contents("data/$chatid/email.txt");
	if (file_exists("mailes/$email/video/1.txt")) {
    $count = file_get_contents("mailes/$email/video/count.txt");
    for ($i=1; $i <= $count; $i++){
    $list = json_decode(file_get_contents("mailes/$email/video/$i.txt"));
     $id = $list->id;
	 $name = $list->name;
	 $size = $list->size;
	 $date = $list->date;
	 $time = $list->time;
     $myfile2 = fopen("data/$chatid/show.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "◀️نام : $name
🔹حجم : $size مگابایت
🔹زمان فیلم : $timeدقیقه
🔸زمان اشتراک : $date
📥دانلود :
/Video_$id
-------------------\n");
        fclose($myfile2);
  }
   $show = file_get_contents("data/$chatid/show.txt");
   bot('editMessagetext',[
    'chat_id'=>$chatid,
 'message_id'=>$messageid,
   'text'=>"➰لیست فیلم های شما :

$show",
    'parse_mode'=>"html",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔙",'callback_data'=>"back2list"]]
              ]
        ])
 ]);
	 unlink("data/$chatid/show.txt");
}else{
	   bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "شما هیچ فیلمی در ربات به اشتراک نگذاشته اید",
                'show_alert' => true
            ]);
}
  }
   
  if($data == "documents"){
    $email = file_get_contents("data/$chatid/email.txt");
	if (file_exists("mailes/$email/file/1.txt")) {
    $count = file_get_contents("mailes/$email/file/count.txt");
    for ($i=1; $i <= $count; $i++){
    $list = json_decode(file_get_contents("mailes/$email/file/$i.txt"));
     $id = $list->id;
	 $name = $list->name;
	 $size = $list->size;
	 $date = $list->date;
     $myfile2 = fopen("data/$chatid/show.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "◀️نام : $name
🔹حجم : $size مگابایت
🔸زمان اشتراک : $date
📥دانلود :
/File_$id
-------------------\n");
        fclose($myfile2);
  }
   $show = file_get_contents("data/$chatid/show.txt");
   bot('editMessagetext',[
    'chat_id'=>$chatid,
 'message_id'=>$messageid,
   'text'=>"➰لیست فایل های شما :

$show",
    'parse_mode'=>"html",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔙",'callback_data'=>"back2list"]]
              ]
        ])
 ]);
	 unlink("data/$chatid/show.txt");
}else{
	  bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "شما هیچ فایلی در ربات به اشتراک نگذاشته اید",
                'show_alert' => true
            ]);
}
  }
       //-------------
	   if(strpos($textmessage,'/start') !== false) {
  $id = str_replace("/start ","",$textmessage);
  $FileId = str_replace("File-","",$id);
bot('SendDocument',[
	'chat_id'=>$chat_id,
	'document'=>$FileId,
     'caption'=>"🔸لینک اشتراک و دانلود مستقیم توسط ربات :

t.me/[*[BOT]*]?start=File-$FileId"
    ]);
	   }
	   if(strpos($textmessage,'/start') !== false) {
  $id = str_replace("/start ","",$textmessage);
  $FileId = str_replace("Music-","",$id);
	    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$FileId,
     'caption'=>"🔸لینک اشتراک و دانلود مستقیم توسط ربات :

t.me/[*[BOT]*]?start=Music-$FileId"
    ]);
	   }
	   	   if(strpos($textmessage,'/start') !== false) {
  $id = str_replace("/start ","",$textmessage);
  $FileId = str_replace("Video-","",$id);
	 bot('sendvideo',[
        'chat_id'=>$chat_id,
        'video'=>$FileId,
     'caption'=>"🔸لینک اشتراک و دانلود مستقیم توسط ربات :

t.me/[*[BOT]*]?start=Video-$FileId"
    ]);
	   }
	   	   if(strpos($textmessage,'/start') !== false) {
  $id = str_replace("/start ","",$textmessage);
  $FileId = str_replace("Voice-","",$id);
	 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$FileId,
     'caption'=>"🔸لینک اشتراک و دانلود مستقیم توسط ربات :

t.me/[*[BOT]*]?start=Voice-$FileId"
    ]);
	   }
       //-------------
   if(strpos($textmessage,'/File_') !== false) {
  $id = str_replace("/File_","",$textmessage);
  	bot('SendDocument',[
	'chat_id'=>$chat_id,
	'document'=>$id,
	'caption'=>"🔸لینک اشتراک و دانلود مستقیم توسط ربات :

t.me/[*[BOT]*]?start=File-$id"
	]);
      }
	   if(strpos($textmessage,'/Video_') !== false) {
  $id = str_replace("/Video_","",$textmessage);
 bot('sendvideo',[
        'chat_id'=>$chat_id,
        'video'=>$id,
        'caption'=>"🔸لینک اشتراک و دانلود مستقیم توسط ربات :

t.me/[*[BOT]*]?start=Video-$id"
    ]);
      }
	    if(strpos($textmessage,'/Music_') !== false) {
  $id = str_replace("/Music_","",$textmessage);
    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$id,
 'caption'=>"🔸لینک اشتراک و دانلود مستقیم توسط ربات :

t.me/[*[BOT]*]?start=Music-$id"
    ]);
      }
	   if(strpos($textmessage,'/Voice_') !== false) {
  $id = str_replace("/Voice_","",$textmessage);
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$id,
 'caption'=>"🔸لینک اشتراک و دانلود مستقیم توسط ربات :

t.me/[*[BOT]*]?start=Voice-$id"
    ]);
      }
       //-------------
           if($textmessage == "راهنما✔️"){
              
           bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"زسی بات یک ربات اشتراک فایل است که به وسیله آن میتوانید فایل های خود را در فضایی امن نگه داری و به فایل هایتان دسترسی آسان و سریع داشته باشد💎
توجه کنید که هیچ محدودیتی در نگه داری فایل های شما نیست و همچنین ربات کاملا رایگان است💫
تنها دلیل تایید شماره و ایمیل شما این است که بعدا بتوانید با حساب تلگرامی دیگری در ربات لاگین شده و به فایل هایتان دسترسی پیدا کنید
ربات فاقد پشتیبانی است ❌
با تشکر🌟️",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);    
          }
          if($textmessage == "خط فرمان📡"){
              
           bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالت خط فرمان یا همان <b>Inline</b> بزودی ساخته میشود💁🏻‍♂️",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);    
          }
            if($textmessage == "تنظیمات⚙️"){
              
           bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به تنظیمات خوش آمدید🌹
این بخش هنوز تکمیل نشده😊️",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"خروج از حساب"]],
		[['text'=>"🔙"]]
	],
		"resize_keyboard"=>true,
	 ])
	 ]);    
          }
           if($textmessage == "خروج از حساب️"){
          unlink("data/$from_id/email.txt");    
           file_put_contents("data/$from_id/step.txt","none");
           file_put_contents("data/$from_id/whois.txt","none");
           bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"با موفقیت از حساب کاربری خود خارج شدید.️",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);    
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خوشامدی 🌟 <a href='tg://user?id=$from_id'>$first_name</a> 
زسی بات هستم ربات اشتراک فایل💁🏻‍♂️
یکی از گزینه های زیر رو برای شروع انتخاب کن👇
-----------------

welcome 🌟 <a href='tg://user?id=$from_id'>$first_name</a> 
I'm zesi bot , file sharing bot💁🏻‍♂️
Choose one of the following buttons to get started👇",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"ورود - Login"],['text'=>"ثبت نام - Singin"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
          }
            if($textmessage == "حساب کاربری من👤"){
                $num = file_get_contents("data/$from_id/number.txt");
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اطلاعات حساب شما",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
[
['text'=>"شناسه شما",'callback_data'=>"1"],['text'=>"$from_id",'callback_data'=>"1"]
],
[
['text'=>"ایمیل شما",'callback_data'=>"1"],['text'=>"$email",'callback_data'=>"1"]
],
[
['text'=>"شماره شما",'callback_data'=>"1"],['text'=>"+$num",'callback_data'=>"1"]
],
	]
	])
	 ]);
          }
    if($textmessage == "/start" && $whois != 'true'){
        file_put_contents("data/$from_id/step.txt","none");
			 if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خوشامدی 🌟 <a href='tg://user?id=$from_id'>$first_name</a> 
زسی بات هستم ربات اشتراک فایل💁🏻‍♂️
یکی از گزینه های زیر رو برای شروع انتخاب کن👇
-----------------

welcome 🌟 <a href='tg://user?id=$from_id'>$first_name</a> 
I'm zesi bot , file sharing bot💁🏻‍♂️
Choose one of the following buttons to get started👇",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"ورود - Login"],['text'=>"ثبت نام - Singin"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}  
elseif($textmessage == "ریست جیمیل - Reset" && $whois != 'true'){
	file_put_contents("data/$from_id/step.txt","none"); 
    unlink("data/$from_id/activecode.txt");
    unlink("data/$from_id/email.txt");
	unlink("data/$from_id/meil.txt");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خوشامدی 🌟 <a href='tg://user?id=$from_id'>$first_name</a> 
زسی بات هستم ربات اشتراک فایل💁🏻‍♂️
یکی از گزینه های زیر رو برای شروع انتخاب کن👇
-----------------

welcome 🌟 <a href='tg://user?id=$from_id'>$first_name</a> 
I'm zesi bot , file sharing bot💁🏻‍♂️
Choose one of the following buttons to get started👇",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"ورود - Login"],['text'=>"ثبت نام - Singin"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($textmessage == "ثبت نام - Singin" && $whois != "true"){
file_put_contents("data/$from_id/step.txt","whois"); 
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ایمیل خود را برای ساخت حساب در ربات ارسال کنید :
📛توجه (از ایمیل واقعی خود برای ساخت حساب استفاده کنید)
-----------------
Send your own mail to singin :
📛Attention (only use your own mail to singin)",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"ریست جیمیل - Reset"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}  
elseif($textmessage != "ریست جیمیل - Reset" && $step == "whois" && $textmessage != "/start"){
$offset1 = strpos($textmessage,"@");
$offset2 = strpos($textmessage,".");
if($offset1 !== false && $offset2 !== false && $textmessage != "ریست جیمیل - Reset" && $step == "whois"){
    file_put_contents("data/$from_id/step.txt","activecode"); 
   $rand = rand(10000,9999999);
   file_put_contents("data/$from_id/activecode.txt",$rand); 
   file_put_contents("data/$from_id/email.txt",$textmessage); 
$subject = "Active code";
$message = "[*[BOT]*] active code : $rand";
$from = "[*[BOT]*]@Code.Org";
$headers = "From:" . $from ;
  mail($textmessage,$subject,$message,$headers);
   bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"یک کد فعال سازی به جیمیل $textmessage ارسال شد ✔️
کد را وارد کنید :

An activation code was sent to Gmail $textmessage ✔️
Enter code :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"ریست جیمیل - Reset"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}else{
     bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ایمیل وارد شده نادرست است🚫
This is not an email🚫",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"ریست جیمیل - Reset"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
}  
} 
elseif($textmessage != "ریست جیمیل - Reset" && $step == "activecode"){
if($textmessage == $activecode){
 file_put_contents("data/$from_id/step.txt","contact"); 
  file_put_contents("data/$from_id/whois.txt","true"); 
 unlink("data/$from_id/activecode.txt");
  mkdir("mailes/$email");
 mkdir("mailes/$email/file");
 file_put_contents("mailes/$email/file/count.txt","0"); 
 mkdir("mailes/$email/music");
 file_put_contents("mailes/$email/music/count.txt","0"); 
 mkdir("mailes/$email/voice");
 file_put_contents("mailes/$email/voice/count.txt","0"); 
 mkdir("mailes/$email/video");
 file_put_contents("mailes/$email/video/count.txt","0"); 
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تبریک میگم  🌹
حساب کاربری شما در ربات ایجاد شد
ایمیل شما : $email
حال فقط با دکمه زیر شماره خود را به اشتراک بگذارید😊
-----------------
congratulation 🌹
Your account was created on the robot
Your email: $email
New only whith this button share your number 😊",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
 	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'تنظیم شماره - NumberSet' , 'request_contact' => true]
                ]
            	],
            	'resize_keyboard'=>true
       		])
	 ]);  
         
}else{
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد وارد شده نادرست است
لطفا کدی که در ایمیل خود دریافت کرده اید را ارسال کنید
(بخش هرزنامه را چک کنید)
-----------------
The entered code is incorrect
Please send the code you received in your email
(Check spam section)",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"ریست جیمیل - Reset"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
}
}
//---Login----
elseif($textmessage == "ورود - Login" && $whois != "true"){
file_put_contents("data/$from_id/step.txt","login"); 
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ورود به حساب خود ایمیل خود را وارد کنید :
-----------------
Enter your email to enter your account:",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);
}  
elseif($textmessage != "ریست جیمیل - Reset" && $step == "login" && $textmessage != "/start"){
    if(is_dir("mailes/$textmessage")) {
   $rand = rand(10000,9999999);
   file_put_contents("data/$from_id/step.txt","activecodelogin"); 
   file_put_contents("data/$from_id/activecode.txt",$rand); 
   file_put_contents("data/$from_id/meil.txt",$textmessage); 
$subject = "Active code";
$message = "[*[BOT]*] active code : $rand";
$from = "[*[BOT]*]@Code.Org";
$headers = "From:" . $from ;
  mail($textmessage,$subject,$message,$headers);
   bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"یک کد فعال سازی به جیمیل $textmessage ارسال شد ✔️
کد را وارد کنید :

An activation code was sent to Gmail $textmessage ✔️
Enter code :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"ریست جیمیل - Reset"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
  }else{
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ایمیل مورد نظر در ربات ثبت نام نکرده است !",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);
  }
}
elseif($textmessage != "ریست جیمیل - Reset" && $step == "activecodelogin"){
if($textmessage == $activecode){
 file_put_contents("data/$from_id/step.txt","contact"); 
  file_put_contents("data/$from_id/whois.txt","true");
$meil =  file_get_contents("data/$from_id/meil.txt");
  file_put_contents("data/$from_id/email.txt",$meil); 
 unlink("data/$from_id/activecode.txt");
 unlink("data/$from_id/meil.txt");
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تبریک میگم  🌹
با موفقیت به حساب کاربری خود وارد شدید
ایمیل شما : $email
حال فقط با دکمه زیر شماره خود را به اشتراک بگذارید😊
-----------------
congratulation 🌹
You have successfully logged in
Your email: $email
New only whith this button share your number 😊",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
 	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'تنظیم شماره - NumberSet' , 'request_contact' => true]
                ]
            	],
            	'resize_keyboard'=>true
       		])
	 ]);  
}else{
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد وارد شده نادرست است
لطفا کدی که در ایمیل خود دریافت کرده اید را ارسال کنید
(بخش هرزنامه را چک کنید)
-----------------
The entered code is incorrect
Please send the code you received in your email
(Check spam section)",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);  
}
}
//------start--------
if($whois == "true"){
if($textmessage == "/start"){
		 if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
    file_put_contents("data/$from_id/step.txt","none"); 
          bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به زسی بات خوشامدید🌹
🔸رباتی برای اشتراک فایل ها در تلگرام
100 گیکابایت فضای رایگان برای هر کاربر📦
با سرعتی باور نکردنی🆙
با لاگین در حساب خود همیشه به فایل های خود دسترسی داشته باشید🔄
برای شروع یکی از گزینه های زیر را انتخاب کنید⬇️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"رسانه های من🗂"]],
	[['text'=>"اشتراک رسانه🗃"],['text'=>"تنظیمات⚙️"]],
	    [['text'=>"خط فرمان📡"]],
	[['text'=>"حساب کاربری من👤"],['text'=>"راهنما✔️"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmessage)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
elseif($textmessage == "رسانه های من🗂"){
     file_put_contents("data/$from_id/step.txt","media-list"); 
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"نوع رسانه را انتخاب کنید :️️️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"فایل ها🗃",'callback_data'=>"documents"], ['text'=>"فیلم ها🎞",'callback_data'=>"videos"]],
               [['text'=>"ترانه ها🎧",'callback_data'=>"musics"], ['text'=>"صدا ها🎼",'callback_data'=>"voices"]]
              ]
        ])
	 ]); 
}
//--------
elseif($textmessage == "اشتراک رسانه🗃"){
     file_put_contents("data/$from_id/step.txt","share-media"); 
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به بخش اشتراک فایل خوش آمدید💁🏻‍♂️
لطفا فایل , ترانه , صدا یا فیلم مورد نظر را ارسال کنید👇️️️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙"]]
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
if($textmessage == "🔙"){
     file_put_contents("data/$from_id/step.txt","none"); 
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به زسی بات خوشامدید🌹
🔸رباتی برای اشتراک فایل ها در تلگرام
100 گیکابایت فضای رایگان برای هر کاربر📦
با سرعتی باور نکردنی🆙
با لاگین در حساب خود همیشه به فایل های خود دسترسی داشته باشید🔄
برای شروع یکی از گزینه های زیر را انتخاب کنید⬇️",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"رسانه های من🗂"]],
	[['text'=>"اشتراک رسانه🗃"],['text'=>"تنظیمات⚙️"]],
	    [['text'=>"خط فرمان📡"]],
	[['text'=>"حساب کاربری من👤"],['text'=>"راهنما✔️"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
 if($voice && $step == "share-media"){
setcount("voice",$email);
         $filesiz = $voice_size/1024/1024;
		 $size = round($filesiz,2);
        $output = array("id"=>$voice_id,"name"=>"هنرمند ناشناخته","size"=>$size,"date"=>"$tarikh - $saat");
header('Content-Type: application/json');
$outjson = json_encode($output);
$count = file_get_contents("mailes/$email/voice/count.txt");
file_put_contents("mailes/$email/voice/$count.txt",$outjson);
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این صدا با موفقیت به آرشیو صدا های شما اضافه شد☑️
🔸حجم فایل : $size مگابایت
🔺زمان اشتراک فایل : $tarikh - $saat
🔻لینک دانلود مستقیم توسط ربات :

 t.me/[*[BOT]*]?start=Voice-$voice_id",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);
     }
 if($file && $step == "share-media"){
setcount("file",$email);
         $filesiz = $file_size/1024/1024;
		 $size = round($filesiz,2);
        $output = array("id"=>$file_id,"name"=>$file_name,"size"=>$size,"date"=>"$tarikh - $saat");
header('Content-Type: application/json');
$outjson = json_encode($output);
$count = file_get_contents("mailes/$email/file/count.txt");
file_put_contents("mailes/$email/file/$count.txt",$outjson);
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این فایل با موفقیت به آرشیو فایل های شما اضافه شد☑️
🔘نام فایل : $file_name
🔸حجم فایل : $size مگابایت
🔺زمان اشتراک فایل : $tarikh - $saat
🔻لینک دانلود مستقیم توسط ربات :

 t.me/[*[BOT]*]?start=File-$file_id",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);
     }
 if($music && $step == "share-media"){
setcount("music",$email);
        $filesiz = $music_size/1024/1024;
		$size = round($filesiz,2);
        $time1 = $music_time/60;
		$time = round($time1,2);
        $output = array("id"=>$music_id,"name"=>"$music_artist - $music_title","size"=>$size,"date"=>"$tarikh - $saat","time"=>"$time");
header('Content-Type: application/json');
$outjson = json_encode($output);
$count = file_get_contents("mailes/$email/music/count.txt");
file_put_contents("mailes/$email/music/$count.txt",$outjson);
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این ترانه با موفقیت به آرشیو ترانه های شما اضافه شد☑️
🔘نام ترانه : $music_artist - $music_title
🔸حجم ترانه : $size مگابایت
🔹زمان ترانه : $time دقیقه 
🔺زمان اشتراک فیلم : $tarikh - $saat
🔻لینک دانلود مستقیم توسط ربات :

 t.me/[*[BOT]*]?start=Music-$music_id",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);
     }
     if($video && $step == "share-media"){
setcount("video",$email);
        $filesiz = $video_size/1024/1024;
		$size = round($filesiz,2);
        $time1 = $video_time/60;
		$time = round($time1,2);
        $output = array("id"=>$video_id,"name"=>"بدون نام اثر","size"=>$size,"date"=>"$tarikh - $saat","time"=>"$time");
header('Content-Type: application/json');
$outjson = json_encode($output);
$count = file_get_contents("mailes/$email/video/count.txt");
file_put_contents("mailes/$email/video/$count.txt",$outjson);
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این فیلم با موفقیت به آرشیو فیلم های شما اضافه شد☑️
🔸حجم فیلم : $size مگابایت
🔹زمان فیلم : $time دقیقه 
🔺زمان اشتراک فیلم : $tarikh - $saat
🔻لینک دانلود مستقیم توسط ربات :

 t.me/[*[BOT]*]?start=File-$video_id",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]);
     }	 
}
unlink("error_log");
	?>