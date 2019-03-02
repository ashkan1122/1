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
error_reporting(0);
define('API_KEY','[*[TOKEN]*]');
//-----------------------------------------------------------------------------------------
//فانکشن jijibot :
function jijibot($method,$datas=[]){
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
//-----------------------------------------------------------------------------------------
//متغیر ها :
// msg
$Dev = array("[*[ADMIN]*]","[*[ADMIN]*]","[*[ADMIN]*]"); // put id of admins
$usernamebot = "[*[BOT]*]";
$channel = "[*[CHANNEL]*]";
$web = "[*[WEB]*]";
$token = "[*[TOKEN]*]";
//-----------------------------------------------------------------------------------------------
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$textmassage = $message->text;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$data = $update->callback_query->data;
$membercall = $update->callback_query->id;
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
// ========================================================================
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $forchannel->result->status;
//=================================================================================================
@$juser = json_decode(file_get_contents("data/$from_id.json"),true);
@$cuser = json_decode(file_get_contents("data/$fromid.json"),true);
//==================================================================
if($textmassage=="/start"){	
if(file_exists("data/$from_id.json")){
if($bot_type != 'gold'){
jijibot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$adstext,
]);
}
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام $first_name 🌹

به پیشرفته ترین ربات تغییر چهره خوش آمدید. 😎

🤖 این ربات با استفاده از فیتلر های مختلف میتونه چهره شمارو  پیر , خندان, باریش و هزاران افکت دیگه بزاره

🌟به صورت رایگان چهره خود را به صد ها چهره دیگر تغییر دهید 

📸 برای تغییر چهره عکس خود را ارسال کنید",
	  	]);
}
else
{
if($bot_type != 'gold'){
jijibot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$adstext,
]);
}
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام $first_name 🌹

به پیشرفته ترین ربات تغییر چهره خوش آمدید. 😎

🤖 این ربات با استفاده از فیتلر های مختلف میتونه چهره شمارو  پیر , خندان, باریش و هزاران افکت دیگه بزاره

🌟به صورت رایگان چهره خود را به صد ها چهره دیگر تغییر دهید 

📸 برای تغییر چهره عکس خود را ارسال کنید",
	  	]);
$juser = json_decode(file_get_contents("data/$from_id.json"),true);	
$juser["userfild"]["opportunity"]="4";
$juser["userfild"]["member"]="0";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif(strpos($textmassage , '/start ') !== false  ) {
$start = str_replace("/start ","",$textmassage);
if(file_exists("data/$from_id.json")){
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام $first_name 🌹

به پیشرفته ترین ربات تغییر چهره خوش آمدید. 😎

🤖 این ربات با استفاده از فیتلر های مختلف میتونه چهره شمارو  پیر , خندان, باریش و هزاران افکت دیگه بزاره

🌟به صورت رایگان چهره خود را به صد ها چهره دیگر تغییر دهید 

📸 برای تغییر چهره عکس خود را ارسال کنید",
	  	]);
}
else 
{
$inuser = json_decode(file_get_contents("data/$start.json"),true);
$member = $inuser["userfild"]["member"];
$plusmember = $member + 1;
$how = 5 - $plusmember ;
if($how <= 0){
$how = "ویژه شده !";
}
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام $first_name 🌹

به پیشرفته ترین ربات تغییر چهره خوش آمدید. 😎

🤖 این ربات با استفاده از فیتلر های مختلف میتونه چهره شمارو  پیر , خندان, باریش و هزاران افکت دیگه بزاره

🌟به صورت رایگان چهره خود را به صد ها چهره دیگر تغییر دهید 

📸 برای تغییر چهره عکس خود را ارسال کنید",
	  	]);
jijibot('sendmessage',[
	'chat_id'=>$start,
	'text'=>"🔔 اطلاعیه : یک کاربر جدید از لینک دعوت شما وارد ربات شد .
📍 نفرات باقی مانده : $how

🌟 برای تغییر چهره عکس خود را ارسال کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   			   [
['text'=>"🔗 لینک اختصاصی من",'callback_data'=>'member']
				   ],
  	],
	  	'resize_keyboard'=>true,
  	])
	  	]);
$inuser["userfild"]["member"]="$plusmember";
$inuser = json_encode($inuser,true);
file_put_contents("data/$start.json",$inuser);
$juser = json_decode(file_get_contents("data/$from_id.json"),true);	
$juser["userfild"]["opportunity"]="4";
$juser["userfild"]["member"]="0";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
		elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmassage)){
	jijibot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
elseif(in_array($data, array("old","male","female","young","hot","smile_2","smile","hollywood","glasses","hitman","pan","heisenberg","female_2","wave","hipster","makeup","bangs"))){
$opportunity = $cuser["userfild"]["opportunity"]; 
$member = $cuser["userfild"]["member"];
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$fromid));
$tch = $forchannel->result->status;
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){	
if($member < 5){
if($opportunity > 0){
jijibot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"⌛️ در حال اجرای افکت روی عکس شما منتظر بمانید ...",
  	]);
$array = array("old","male","female","young","hot","smile_2","smile","hollywood","glasses","hitman","pan","heisenberg","female_2","wave","hipster","makeup","bangs");
$getarray = array("پیر","مردانه","دخترانه","جوان","جنتلمن","خنده","خنده دو","زیبایی چهره","عینکی","کچل","باریش","کچل عینکی باریش","دخترانه دو","روشنایی چهره","ریش بلند","ارایش چهره","موی چتری");
$array2 = array("male","female","young","hollywood","glasses","hitman","pan","heisenberg","female_2","wave","hipster","makeup","bangs");
if(in_array($data, $array2) == true) {
$cut = "1";
}
else
{
$cut = "0";
}
$key = array_search($data,$array);
$emoji = $array[$key];
$name = $getarray[$key];
$code = $cuser["userfild"]["code"];
$did = $cuser["userfild"]["did"];
jijibot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"⌛️ در حال اجرای افکت روی عکس شما منتظر بمانید ...
	",
  	]);
	jijibot('sendphoto',[
	'chat_id'=>$chatid,
	'photo'=>"$web/getphoto.php?emoji=$emoji&did=$did&code=$code&cropped=$cut",
	'caption'=>"🤠 عکس فیلتر شده شما
🌟 نام افکت : $name
🤖 ربات سازنده : @$usernamebot",
    		]);	
$plusopportunity = $opportunity - 1;
$cuser["userfild"]["opportunity"]="$plusopportunity";
$cuser = json_encode($cuser,true);
file_put_contents("data/$fromid.json",$cuser);
}
else
{
$member = $cuser["userfild"]["member"];
jijibot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"🔴 کاربر گرامی ، شما از 4 افکت رایگان خود استفاده کردید.

برای مشاهده تصاویر بیشتر و دریافت لیست کامل افکت ها، باید اکانت خود را به ویژه تبدیل کنید.

✅ با اینکار تمامی امکانات ربات برای شما فعال خواهد شد و می توانید از افکت های زیر استفاده نمایید :
▫️ عینکی ▫️ زیبایی چهره
▫️ دخترانه ▫️ مردانه
▫️ پیر ▫️ جوان
▫️ جنتلمن ▫️ باریش
▫️ ریش بلند ▫️ کچل
▫️ کچل عینکی باریش ▫️ دخترانه دو
▫️ خنده ▫️ شادی
▫️ روشنایی چهره ▫️ آرایش چهره
▫️ موی چتری و پنجاه افکت دیگر

✅ برای ویژه کردن اکانت، کافیست 5 نفر با استفاده از لینک اختصاصی خود  به ربات دعوت نمایید.
👤 شما تاکنون $member نفر را به ربات دعوت کرده اید",
    'reply_markup'=>json_encode([
              'inline_keyboard'=>[
				   			   [
['text'=>"🔗 لینک اختصاصی من",'callback_data'=>'member']
				   ],
  	],
	  	'resize_keyboard'=>true,
  	])
  	]);
}
}
else
{
jijibot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"⌛️ در حال اجرای افکت روی عکس شما منتظر بمانید ...",
  	]);
$array = array("old","male","female","young","hot","smile_2","smile","hollywood","glasses","hitman","pan","heisenberg","female_2","wave","hipster","makeup","bangs");
$getarray = array("پیر","مردانه","دخترانه","جوان","جنتلمن","خنده","خنده دو","زیبایی چهره","عینکی","کچل","باریش","کچل عینکی باریش","دخترانه دو","روشنایی چهره","ریش بلند","ارایش چهره","موی چتری");
$array2 = array("male","female","young","hollywood","glasses","hitman","pan","heisenberg","female_2","wave","hipster","makeup","bangs");
if(in_array($data, $array2) == true) {
$cut = "1";
}
else
{
$cut = "0";
}
$key = array_search($data,$array);
$emoji = $array[$key];
$name = $getarray[$key];
$code = $cuser["userfild"]["code"];
$did = $cuser["userfild"]["did"];
	jijibot('sendphoto',[
	'chat_id'=>$chatid,
	'photo'=>"$web/getphoto.php?emoji=$emoji&did=$did&code=$code&cropped=$cut",
	'caption'=>"🤠 عکس فیلتر شده شما
🌟 نام افکت : $name
🤖 ربات سازنده : @$usernamebot",
    		]);	
}
}
else
{
			jijibot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"برای استفاده از این ربات لازم است  در کانال رسمی ما عضو شوید.👇👇

@$channel @$channel  📣
@$channel @$channel  📣

🌟 بعد از عضویت در کانال روی دکمه زیر بزنید",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"❄️ عضویت در کانال",'url'=>"https://t.me/$channel"]
	],
				   [
['text'=>"📣 در کانال عضو شدم",'callback_data'=>'join']
				   ],
              ]
        ])
    		]);
}
}
elseif($data=="member"){
$member = $cuser["userfild"]["member"];
jijibot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"telegram.me/$usernamebot?start=$fromid
لینک دعوت شما با موفقیت ساخته شد 👆

اگر 5 نفر با استفاده از لینک بالا در ربات عضو شوند، تمامی امکانات ربات به صورت نامحدود برای شما فعال خواهد شد.

👤 شما تاکنون $member نفر را به ربات دعوت کرده اید",        
  	]);	
}
elseif($data=="getsticker"){
$file = $cuser["userfild"]["file"];
$get = jijibot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
file_put_contents("data/$from_id.webp",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendsticker',[
	'chat_id'=>$chatid,
	'sticker'=>new CURLFile("data/$from_id.webp"),
  	]);
unlink("data/$from_id.webp");
}
elseif($data=="getfilter"){
$member = $cuser["userfild"]["member"];
jijibot('sendphoto',[
	'chat_id'=>$chatid,
	'photo'=>"$web/filter.jpg",
	'caption'=>"💎 فیلتر های قسمت ویژه ربات",
  	]);
jijibot('sendmessage',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
	'text'=>"کاربر گرامی ، برای مشاهده تصاویر بیشتر و دریافت لیست کامل افکت ها، باید اکانت خود را به ویژه تبدیل کنید.

✅ با اینکار تمامی امکانات ربات برای شما فعال خواهد شد و می توانید از افکت های زیر استفاده نمایید :
▫️ عینکی ▫️ زیبایی چهره
▫️ دخترانه ▫️ مردانه
▫️ پیر ▫️ جوان
▫️ جنتلمن ▫️ باریش
▫️ ریش بلند ▫️ کچل
▫️ کچل عینکی باریش ▫️ دخترانه دو
▫️ خنده ▫️ شادی
▫️ روشنایی چهره ▫️ آرایش چهره
▫️ موی چتری و پنجاه افکت دیگر

✅ برای ویژه کردن اکانت، کافیست 5 نفر با استفاده از لینک اختصاصی خود  به ربات دعوت نمایید.
👤 شما تاکنون $member نفر را به ربات دعوت کرده اید",   
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   			   [
['text'=>"🔗 لینک اختصاصی من",'callback_data'=>'member']
				   ],
  	],
	  	'resize_keyboard'=>true,
  	])
  	]);	
}
elseif($data=="join"){
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$fromid));
$tch = $forchannel->result->status;
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){	
$member = $cuser["userfild"]["member"];
if($member < 5){
$file = $cuser["userfild"]["file"];
$get = jijibot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
file_put_contents("data/$fromid.jpg",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"🎈 در حال پردازش چهره شما در عکس ...",
  	]);
$getscan = json_decode(file_get_contents("$web/sendphoto.php?url=$web/data/$fromid.jpg"));
$getphoto = $getscan->code;
$getdid = $getscan->did;
if($getphoto != "notfound"){
	jijibot('sendphoto',[
	'chat_id'=>$chatid,
	'photo'=>"$file",
	'caption'=>"🌠 عکس شما
	
🌟 فیلتر مورد نظر خود را انتخاب کنید",
			   	'reply_markup'=>json_encode([
  	'inline_keyboard'=>[
      [
   ['text'=>"پیر",'callback_data'=>'old'],['text'=>"دخترانه",'callback_data'=>'female']
   ],
               [
   ['text'=>"زیبایی چهره",'callback_data'=>'hollywood'],['text'=>"عینکی",'callback_data'=>'glasses']
   ],
            [
   ['text'=>"🎨 فیلتر های دیگر",'callback_data'=>'getfilter']
   ],
     	],
	  	'resize_keyboard'=>true,
  	])
    		]);
$cuser["userfild"]["code"]="$getphoto";
$cuser["userfild"]["did"]="$getdid";
$cuser["userfild"]["file"]="$file";
$cuser = json_encode($cuser,true);
file_put_contents("data/$fromid.json",$cuser);
unlink("data/$fromid.jpg");
}
else
{
			jijibot('sendphoto',[
	'chat_id'=>$chatid,
	'photo'=>"$web/goodphoto.jpg",
	'caption'=>"❎ چهره ای یافت نشد پیشنهاد می شود تصویر ارسالی از فاصله ی نزدیک به چهره گرفته شده باشد

⚙️ چنانچه در عکس ارسالی چهره وجود دارد اما شناسایی نشده است عکس را مجدد ارسال کنید",
	]);
unlink("data/$fromid.jpg");
}	
}
else
{
$file = $cuser["userfild"]["file"];
$get = jijibot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
file_put_contents("data/$fromid.jpg",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"🎈 در حال پردازش چهره شما در عکس ...",
  	]);
$getscan = json_decode(file_get_contents("$web/sendphoto.php?url=$web/data/$fromid.jpg"));
$getphoto = $getscan->code;
$getdid = $getscan->did;
if($getphoto != "notfound"){
	jijibot('sendphoto',[
	'chat_id'=>$chatid,
	'photo'=>"$file",
	'caption'=>"🌠 عکس شما
	
🌟 فیلتر مورد نظر خود را انتخاب کنید",
			   	'reply_markup'=>json_encode([
  	'inline_keyboard'=>[
      [
   ['text'=>"پیر",'callback_data'=>'old']
   ],
      [
   ['text'=>"مردانه",'callback_data'=>'male'],['text'=>"دخترانه",'callback_data'=>'female'],['text'=>"دخترانه دو",'callback_data'=>'female_2']
   ],
         [
   ['text'=>"جوان",'callback_data'=>'young'],['text'=>"جنتلمن",'callback_data'=>'hot'],['text'=>"روشنایی چهره",'callback_data'=>'wave']
   ],
            [
   ['text'=>"زیبایی چهره",'callback_data'=>'hollywood'],['text'=>"عینکی",'callback_data'=>'glasses']
   ],
            [
   ['text'=>"ریش بلند",'callback_data'=>'hipster'],['text'=>"باریش",'callback_data'=>'pan']
   ],
               [
   ['text'=>"کچل عینکی باریش",'callback_data'=>'heisenberg'],['text'=>"کچل",'callback_data'=>'hitman']
   ],
                  [
   ['text'=>"آرایش چهره",'callback_data'=>'makeup'],['text'=>"موی چتری",'callback_data'=>'bangs']
   ],
               [
   ['text'=>"خنده دو",'callback_data'=>'smile'],['text'=>"خنده یک",'callback_data'=>'smile_2']
   ],
            [
   ['text'=>"🌟 تبدیل به استیکر",'callback_data'=>'getsticker']
   ],
  	],
	  	'resize_keyboard'=>true,
  	])
    		]);
$cuser["userfild"]["code"]="$getphoto";
$cuser["userfild"]["did"]="$getdid";
$cuser["userfild"]["file"]="$file";
$cuser = json_encode($cuser,true);
file_put_contents("data/$fromid.json",$cuser);
unlink("data/$fromid.jpg");
}
else
{
			jijibot('sendphoto',[
	'chat_id'=>$chatid,
	'photo'=>"$web/goodphoto.jpg",
	'caption'=>"❎ چهره ای یافت نشد پیشنهاد می شود تصویر ارسالی از فاصله ی نزدیک به چهره گرفته شده باشد

⚙️ چنانچه در عکس ارسالی چهره وجود دارد اما شناسایی نشده است عکس را مجدد ارسال کنید",
	]);
unlink("data/$fromid.jpg");
}	
}
}
else
{
      jijibot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "❌ هنوز داخل کانال @$channel عضو نیستید",
            'show_alert' =>true
        ]);
}
}
elseif($update->message->photo == true){ 
$opportunity = $juser["userfild"]["opportunity"]; 
$member = $juser["userfild"]["member"]; 
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){	
if($member < 5){
if($opportunity > 0){
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
$get = jijibot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
file_put_contents("data/$from_id.jpg",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🎈 در حال پردازش چهره شما در عکس ...",
  	]);
$getscan = json_decode(file_get_contents("$web/sendphoto.php?url=$web/data/$from_id.jpg"));
$getphoto = $getscan->code;
$getdid = $getscan->did;
if($getphoto != "notfound"){
	jijibot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>"$file",
	'caption'=>"🌠 عکس شما
	
🌟 فیلتر مورد نظر خود را انتخاب کنید",
			   	'reply_markup'=>json_encode([
  	'inline_keyboard'=>[
      [
   ['text'=>"پیر",'callback_data'=>'old'],['text'=>"دخترانه",'callback_data'=>'female']
   ],
               [
   ['text'=>"زیبایی چهره",'callback_data'=>'hollywood'],['text'=>"عینکی",'callback_data'=>'glasses']
   ],
            [
   ['text'=>"🎨 فیلتر های دیگر",'callback_data'=>'getfilter']
   ],
     	],
	  	'resize_keyboard'=>true,
  	])
    		]);
$juser["userfild"]["code"]="$getphoto";
$juser["userfild"]["did"]="$getdid";
$juser["userfild"]["file"]="$file";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
unlink("data/$from_id.jpg");
}
else
{
			jijibot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>"$web/goodphoto.jpg",
	'caption'=>"❎ چهره ای یافت نشد پیشنهاد می شود تصویر ارسالی از فاصله ی نزدیک به چهره گرفته شده باشد

⚙️ چنانچه در عکس ارسالی چهره وجود دارد اما شناسایی نشده است عکس را مجدد ارسال کنید",
	]);
unlink("data/$from_id.jpg");
}
}
else
{
$member = $juser["userfild"]["member"];
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔴 کاربر گرامی ، شما از 4 افکت رایگان خود استفاده کردید.

برای مشاهده تصاویر بیشتر و دریافت لیست کامل افکت ها، باید اکانت خود را به ویژه تبدیل کنید.

✅ با اینکار تمامی امکانات ربات برای شما فعال خواهد شد و می توانید از افکت های زیر استفاده نمایید :
▫️ عینکی ▫️ زیبایی چهره
▫️ دخترانه ▫️ مردانه
▫️ پیر ▫️ جوان
▫️ جنتلمن ▫️ باریش
▫️ ریش بلند ▫️ کچل
▫️ کچل عینکی باریش ▫️ دخترانه دو
▫️ خنده ▫️ شادی
▫️ روشنایی چهره ▫️ آرایش چهره
▫️ موی چتری و پنجاه افکت دیگر

✅ برای ویژه کردن اکانت، کافیست 5 نفر با استفاده از لینک اختصاصی خود  به ربات دعوت نمایید.
👤 شما تاکنون $member نفر را به ربات دعوت کرده اید",
    'reply_markup'=>json_encode([
              'inline_keyboard'=>[
				   			   [
['text'=>"🔗 لینک اختصاصی من",'callback_data'=>'member']
				   ],
  	],
	  	'resize_keyboard'=>true,
  	])
  	]);	
}
}
else
{
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
$get = jijibot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
file_put_contents("data/$from_id.jpg",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🎈 در حال پردازش چهره شما در عکس ...",
  	]);
$getscan = json_decode(file_get_contents("$web/sendphoto.php?url=$web/data/$from_id.jpg"));
$getphoto = $getscan->code;
$getdid = $getscan->did;
if($getphoto != "notfound"){
	jijibot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>"$file",
	'caption'=>"🌠 عکس شما
	
🌟 فیلتر مورد نظر خود را انتخاب کنید",
			   	'reply_markup'=>json_encode([
  	'inline_keyboard'=>[
      [
   ['text'=>"پیر",'callback_data'=>'old']
   ],
      [
   ['text'=>"مردانه",'callback_data'=>'male'],['text'=>"دخترانه",'callback_data'=>'female'],['text'=>"دخترانه دو",'callback_data'=>'female_2']
   ],
         [
   ['text'=>"جوان",'callback_data'=>'young'],['text'=>"جنتلمن",'callback_data'=>'hot'],['text'=>"روشنایی چهره",'callback_data'=>'wave']
   ],
            [
   ['text'=>"زیبایی چهره",'callback_data'=>'hollywood'],['text'=>"عینکی",'callback_data'=>'glasses']
   ],
            [
   ['text'=>"ریش بلند",'callback_data'=>'hipster'],['text'=>"باریش",'callback_data'=>'pan']
   ],
               [
   ['text'=>"کچل عینکی باریش",'callback_data'=>'heisenberg'],['text'=>"کچل",'callback_data'=>'hitman']
   ],
                  [
   ['text'=>"آرایش چهره",'callback_data'=>'makeup'],['text'=>"موی چتری",'callback_data'=>'bangs']
   ],
               [
   ['text'=>"خنده دو",'callback_data'=>'smile'],['text'=>"خنده یک",'callback_data'=>'smile_2']
   ],
            [
   ['text'=>"🌟 تبدیل به استیکر",'callback_data'=>'getsticker']
   ],
  	],
	  	'resize_keyboard'=>true,
  	])
    		]);
$juser["userfild"]["code"]="$getphoto";
$juser["userfild"]["did"]="$getdid";
$juser["userfild"]["file"]="$file";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
unlink("data/$from_id.jpg");
}
else
{
			jijibot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>"$web/goodphoto.jpg",
	'caption'=>"❎ چهره ای یافت نشد پیشنهاد می شود تصویر ارسالی از فاصله ی نزدیک به چهره گرفته شده باشد

⚙️ چنانچه در عکس ارسالی چهره وجود دارد اما شناسایی نشده است عکس را مجدد ارسال کنید",
	]);
unlink("data/$from_id.jpg");
}
}
}
else
{
			jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"برای استفاده از این ربات لازم است  در کانال رسمی ما عضو شوید.👇👇

@$channel @$channel  📣
@$channel @$channel  📣

🌟 بعد از عضویت در کانال روی دکمه زیر بزنید",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
				   [
['text'=>"🌟 عضو شدم تبدیل کن",'callback_data'=>'join']
				   ],
              ]
        ])
    		]);
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
$juser["userfild"]["file"]="$file";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
//==============================================================
//panel admin
elseif($textmassage=="/panel" or $textmassage=="panel" or $textmassage=="مدیریت"){
if ($tc == "private") {
if (in_array($from_id,$Dev)){
jijibot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦 ادمین عزیز به پنل مدریت ربات خوش امدید",
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	  	  	 [
		['text'=>"📍 امار ربات"],['text'=>"📍 ویژه کردن"]             
	  ]
   ],
      'resize_keyboard'=>true
   ])
 ]);
}
}
}
elseif($textmassage=="برگشت 🔙"){
if ($tc == "private") {
if (in_array($from_id,$Dev)){
jijibot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦 به منوی مدیریت بازگشتید",
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	  	  	 [
		['text'=>"📍 امار ربات"],['text'=>"📍 ویژه کردن"]             
	  ]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$juser["userfild"]["fileget"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
}
elseif($textmassage=="📍 امار ربات"){
if (in_array($from_id,$Dev)){
$files1 = scandir("data/");
$all = count($files1);
				jijibot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"🤖 امار ربات شما : 
		
📌 تعداد عضو ها : $all",
                'hide_keyboard'=>true,
		]);
		}
}
elseif ($textmassage == '📍 ویژه کردن' ) {
if (in_array($from_id,$Dev)){
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا ایدی کاربر را ارسال کنید 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"برگشت 🔙"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$juser["userfild"]["fileget"]="senduse";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
elseif ($juser["userfild"]["fileget"] == 'senduse') {
if ($textmassage != "برگشت 🔙") {
$id = $juser["userfild"]["idsend"];
$inuser = json_decode(file_get_contents("data/$textmassage.json"),true);
$member = $inuser["userfild"]["member"];
$memberplus = $member + 5;
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"فرد با موفقیت ویژه شد ✅

📍 ایدی فرد : $textmassage",
 ]);
$inuser["userfild"]["member"]="$memberplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$textmassage.json",$inuser);
}
}
elseif ($textmassage == '📍 ارسال به همه' ) {
if (in_array($from_id,$Dev)){
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا متن خود را ارسال کنید 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"برگشت 🔙"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$juser["userfild"]["file"]="sendtoall";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
elseif ($juser["userfild"]["file"] == 'sendtoall') {
if ($textmassage != "برگشت 🔙") {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"پیام شما با موفقیت برای ارسال همگانی تنظیم شد  ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
$inuser = json_decode(file_get_contents("user.json"),true);
$inuser["text"]="$textmassage";
$inuser["sendtoall"]="true";
$inuser = json_encode($inuser,true);
file_put_contents("user.json",$inuser);	
$juser["userfild"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);	
}
}
elseif ($textmassage == '📍 فروارد همگانی' ) {
if (in_array($from_id,$Dev)){
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا متن خود را فوروارد کنید  🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"برگشت 🔙"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$juser["userfild"]["file"]="fortoall";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
elseif ($juser["userfild"]["file"] == 'fortoall') {
if ($textmassage != "برگشت 🔙") {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"پیام شما با موفقیت به عنوان فوروارد همگانی تنظیم شد ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
$inuser = json_decode(file_get_contents("user.json"),true);
$inuser["msg"]="$message_id";
$inuser["chat"]="$chat_id";
$inuser["fortoall"]="true";
$inuser = json_encode($inuser,true);
file_put_contents("user.json",$inuser);	
$juser["userfild"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
elseif($update->message->photo != true){ 
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما فقط مجاز به ارسال عکس هستید",
	  	]);
}
?>