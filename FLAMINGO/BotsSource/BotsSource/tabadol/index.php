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
function robot($method,$datas=[]){
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
function SendMessage($chat_id, $text){
robot('sendMessage',[
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
function Forward($kojashe, $azkoja, $kodommsg){
	robot('forwardmessage',[
	'chat_id'=>$kojashe,
	'from_chat_id'=>$azkoja,
	'message_id'=>$kodommsg
	]);
}
function sendphoto($chat_id, $photo, $caption){
 robot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
function sendAction($chat_id, $action){
robot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action
]);
}
function senddocument($chat_id, $document, $caption){
 robot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption,
 ]);
 }
function LeaveChat($chat_id){
robot('LeaveChat',[
'chat_id'=>$chat_id
]);
}
function GetChat($chat_id){
	robot('GetChat',[
	'chat_id'=>$chat_id
	]);
	}
function EditMessageCaption($chat_id,$message_id,$caption){
	 robot('editMessageCaption',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'caption'=>$caption,
]);
}
function sendsticker($chat_id, $sticker){
 robot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$sticker,
 ]);
 }
function RandomString(){
        $length=8;
        $characters='0123456789QWERTYUIOPASDFGHJKLZXCVBNMabcdefghijklmnopqrstuvwxyz';
        $string='';
            for($p=0;$p<$length;$p++){
            $string.=$characters[mt_rand(0,strlen($characters))];
            }
            return $string;
        } 
//--------ch_robotsazi---------//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
mkdir("data/$from_id");
mkdir("data/$chat_id");
$from_id = $message->from->id;
$first_name = $message->from->first_name;
$username = $message->from->username;
$textmassage = $message->text;
$message_id = $update->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$rpto = $update->message->reply_to_message->forward_from->id;
$forward_chat_username = $update->message->forward_from_chat->username;
$fromid = $update->callback_query->from->id;
$chatid = $update->callback_query->message->chat->id;
$inline_query = $update->inline_query;
$query_id = $inline_query->id;
$message_id22 = $update->callback_query->message->message_id;
$photo = $update->message->photo;
$ali = file_get_contents("data/$from_id/ali.txt");
$name = file_get_contents("data/$from_id/name.txt");
$idad = file_get_contents("data/$from_id/idad.txt");
$num = file_get_contents("data/$from_id/num.txt");
$idse = file_get_contents("data/$from_id/sendch.txt");
$emt = file_get_contents("data/$from_id/em.txt");
$blocklist = file_get_contents("data/blocklist.txt");
$list = file_get_contents("users.txt");
$charge = file_get_contents("data/$from_id/charge.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
$left = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$channel1&user_id=$from_id"))->result->status;
$forchannelq = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$channel1&user_id=$fromid"));
$tchq = $forchannelq->result->status;
//---------------newrobots------------//
$ADMIN = [*[ADMIN]*];//id admin
$channel = "@[*[CHENNEL]*]";//id channel ba @
$token = "[*[TOKEN]*]";//add token
$channel1 = "@[*[CHENNEL]*]";
$channel2 = "[*[CHENNEL]*]";//id channel tabligh bedon @
$idbot = "[*[BOT]*]";//id bot bedon @
$mention = "[$first_name](tg://user?id=$from_id)";
//--------------mac_team-------------//
if($left == "left"){
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ شما عضو کانال ما نیستید ⛔

💠 برای ادامه کار با ربات باید عضو کانال 
نیو ربات بشوید .

$channel
$channel

🚫 جهت عضویت روی دکمه بررسی عضویت کلیک کنید
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"بررسی عضویت 🔍",'callback_data'=>'lockch']
],
]
])
]);
}
elseif($textmassage == "/start"){
   $user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($from_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $from_id."\n";
file_put_contents("data/$chat_id/membrs.txt", "0");
file_put_contents("data/$chat_id/charge.txt", "1");
     file_put_contents('Member.txt',$add_user);
    }
file_put_contents("data/$from_id/ali.txt", "no");
if($bot_type != 'gold'){
robot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$adstext,
]);
}
	robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
با سلام $mention به ربات تبادل کانال خوش آمدید❤
برای اطلاعات بیشتر به قسمت ثبت اطلاعات کانال مراجعه کن👑
برای دیدن قوانین دستور /rules رو ارسال کُنید
",
'parse_mode'=>'Markdown',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"ثبت اطلاعات کانال📌"]
],
[
['text'=>"دریافت شارژ رایگان💸"],['text'=>"پشتیبانی☎"]
],
[
['text'=>"راهنما📑"],['text'=>"اطلاعات من📄"]
],
[
['text'=>"بنر بازار تبادل📌"],['text'=>"امکانات دیگر🔧"]
],
]
])
]);
}
elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmassage)){
	robot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
elseif(strpos($blocklist, "$from_id") !== false  ) {
robot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🛑شما به خاطر رعایت نکردن قوانین از ربات مسدود شدید 

❇️لطفا پیام دوباره ارسال نکنید",
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
])
]);
}
elseif($textmassage == "/rules"){
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"قوانین این ربات اعم از:
💢ربات بازار تبادل یک رباتی است که بین ادمین ها واسطه است و تبادل رو انجام میدهد
💥ما در قبال محتوای کانال های دیگه هیچ مسئولیتی نداریم
💫اگر کاربرای دیگر برای ایجاد مزاحمت و... باشد لطفا در قسمت پشتیبانی اطلاع بدهید.
👈بخش زیرمجموعه گیری:
بخشی است که شما میتوانی با تعداد معینی افراد که ما مشخص کردیم آورده و شارژ رایگان دریافت کنید😊

و تبادل رو به آسانی انجام بدید

در صورت هر گونه مشکلی دستور /sup رو ارسال کنید✌",
'parse_mode'=>'Markdown',
]);
}
elseif($textmassage =="برگشت ↩"){
file_put_contents("data/$from_id/ali.txt","no");
file_put_contents("data/$from_id/idch.txt","no");
file_put_contents("data/$from_id/name.txt","no");
file_put_contents("data/$from_id/idad.txt","no");
file_put_contents("data/$from_id/num.txt","no");
file_put_contents("data/$from_id/etel.txt","no");
	robot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"با موفقیت به منوی اصلی برگشتیم ↪
	لطفا انتخاب کنید⤵",	'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"ثبت اطلاعات کانال📌"]
],
[
['text'=>"دریافت شارژ رایگان💸"],['text'=>"پشتیبانی☎"]
],
[
['text'=>"راهنما📑"],['text'=>"اطلاعات من📄"]
],
[
['text'=>"بنر بازار تبادل📌"],['text'=>"امکانات دیگر🔧"]
],
]
])
]);
}
elseif($textmassage == "اطلاعات من📄"){
$profile = json_decode(file_get_contents("https://api.telegram.org/bot$token/getUserProfilePhotos?user_id=$from_id"));
$photo1 = $profile->result->photos[0][0]->file_id;
$sea = file_get_contents("data/$chat_id/membrs.txt");
$charge = file_get_contents("data/$chat_id/charge.txt");
robot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$photo1",
'caption'=>"
• نام شما: $first_name
• یوزرنیم شما: @$username
• ایدی عددی شما: $from_id
• تعداد زیرمجموعه های شما: $sea
• تعداد شارژها: $charge",
]);
}
elseif($data == "numm" or $data == "me"){
robot('answercallbackquery',[
            'callback_query_id' => $update->callback_query->id,
            'text' => "چیزی واسه نمایش دادن نیست😊",
            'show_alert' => false
        ]);
}
elseif($textmassage == "راهنما📑"){
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📌هدف از تشکیل این ربات تبادل آسان تر بین ادمین ها کانال است💢

❌زبان برنامه نویسی شده: *php*

جهت دیدن قوانین این ربات دستور /rules رو ارسال کنید✅

موفق باشید💫🌟",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'Markdown',
]);
}
elseif($data == "lockch"){
$name = $update->callback_query->from->first_name;
if($tchq == 'member' or $tchq == 'creator' or $tchq == 'administrator'){
robot('Sendmessage',[
'chat_id'=>$chatid,
'text'=>"
با سلام $name به ربات تبادل خوش آمدید ❤
برای اطلاعات بیشتر به قسمت ثبت اطلاعات کانال مراجعه کن👑
برای دیدن قوانین دستور /rules رو ارسال کُنید
",
'parse_mode'=>'Markdown',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"ثبت اطلاعات کانال📌"]
],
[
['text'=>"دریافت شارژ رایگان💸"],['text'=>"پشتیبانی☎"]
],
[
['text'=>"راهنما📑"],['text'=>"اطلاعات من📄"]
],
[
['text'=>"بنر بازار تبادل📌"],['text'=>"امکانات دیگر🔧"]
],
]
])
]);
}else{
        robot('answercallbackquery',[
            'callback_query_id' => $update->callback_query->id,
            'text' => "❌ هنوز داخل کانال عضو نیستید",
            'show_alert' =>true
        ]);
}
}
elseif($textmassage == "دریافت شارژ رایگان💸"){
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✳ خب به بخش دریافت شارژ خوش آمدید💟

❎ برای دریافت شارژ رایگان روی دکمه زیر کلیک کنید

1- زیرمجموعه گیریⓂ

لطفا انتخاب کنید👇",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"زیر مجموعه گیریⓂ",'callback_data'=>'zirm']
],
]
])
]);
}
elseif($data == "zirm"){
$id3 = $update->callback_query->from->id;
file_put_contents("data/$from_id/code.txt","$rnd");
robot('Sendphoto',[
'chat_id'=>$chatid,
'photo'=>"https://img.tglab.uz/244939302/15180909465a7c3ac2b82cd.jpg",
'caption'=>"
🥇بازار تبادل
🎯دیگه نمیخواد دنبال ادمین و کانال هم تعداد خودت بگردی🤔
⏰در کمترین زمان تعداد اعضای کانالت رو ببر بالا📍
🎖فقط در چند ثانیه
http://telegram.me/$idbot?start=$id3",
]);
robot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "بنر با موفقیت ارسال شد...!",
                'show_alert' => false
            ]);
        } 
elseif (strpos($textmassage, '/start') !== false){
        $newid = str_replace("/start ", "", $textmassage);
        if ($from_id == $newid) {
            robot('sendMessage', [
                'chat_id' => $chat_id,
                'text'=>"
با عرض معذرت شما نمیتوانید معرف خود باشید😑",
            ]);
        } elseif (strpos($list, "$from_id") !== false) {
            SendMessage($chat_id, "شما قبلا عضو ربات شدید و مجددا نمیشه 😶");
        } else {
            $charge = file_get_contents("data/$newid/charge.txt");
            $getcharge = $charge + 0.5;
            file_put_contents("data/$newid/charge.txt", $getcharge);
$sea = file_get_contents("data/$newid/membrs.txt");
            $get = $sea + 1;
            file_put_contents("data/$newid/membrs.txt", $get);
             $user = file_get_contents('users.txt');
            $members = explode("\n", $user);
            if (!in_array($from_id, $members)) {
                $add_user = file_get_contents('users.txt');
                $add_user .= $from_id . "\n";
file_put_contents("data/$from_id
/membrs.txt", "0");
                file_put_contents("data/$from_id/charge.txt", "0.5");
                file_put_contents('users.txt', $add_user);
            }
            file_put_contents("data/$from_id/ali.txt", "No");
            sendmessage($chat_id, "تبریک شما با دعوت کاربر $newid عضو ربات ما شدید❤️");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
با سلام $mention به ربات تبادل کانال خوش آمدید❤
برای اطلاعات بیشتر به قسمت ثبت اطلاعات کانال مراجعه کن👑
",
'parse_mode'=>'Markdown',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"ثبت اطلاعات کانال📌"]
],
[
['text'=>"دریافت شارژ رایگان💸"],['text'=>"پشتیبانی☎"]
],
[
['text'=>"راهنما📑"],['text'=>"اطلاعات من📄"]
],
[
['text'=>"بنر بازار تبادل📌"],['text'=>"امکانات دیگر🔧"]
],
]
])
]);
robot('Sendmessage',[
'chat_id'=>$newid,
'text'=>"
کاربری با لینک شما عضو ربات شد😎
در بخش اطلاعات من میتونید ببینید اطلاعاتتون رو💫",
]);
}
}
elseif($textmassage == "پشتیبانی☎" or $textmassage == "/sup"){
file_put_contents("data/$from_id/ali.txt","pay");
file_put_contents("data/$from_id/Mjkr.txt","no");
	robot('sendMessage',[
	'chat_id'=>$chat_id,
'text'=>"ربات جهت ثبت اطلاعات کانال شما📢
اگر نظری واسه ربات یا کانال داری لطفا پیامت رو بفرس😎",
'parse_mode'=>'Markdown',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"برگشت ↩"]
],
]
])
]);
}elseif($ali == "pay"){            
if($textmassage != "برگشت ↩"){
                    file_put_contents("data/$from_id/ali.txt","none");
Forward($ADMIN,$chat_id,$message_id);
robot('sendmessage',[       
'chat_id'=>$chat_id,
			'text'=>"پیام شما دریافت شد✅
بزودی پاسخ داده میشود
",
      'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"برگشت ↩"]
],
]
])
	]);
}
}
elseif($rpto != "" && $chat_id == $ADMIN){
robot('sendmessage',[
'chat_id'=>$rpto,
'text'=>"📬<code>پاسخ پیام شما از طرف پشتیبانی</code>

$textmassage",
'parse_mode'=>'HTML',
]);
robot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما به کاربر مورد نظر ارسال شد📮",
'parse_mode'=>'HTML',
]);
}

elseif($textmassage == "برگشت↪"){
file_put_contents("data/$from_id/sendch.txt","no");
file_put_contents("data/$from_id/idse.txt","no");
file_put_contents("data/$from_id/ali.txt","no");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"به منوی ابزار های ربات برگشتیم 🔁 لطفا انتخاب کن",
'parse_mode'=>'Markdown',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"تبدیل متن به HTML⌛"]
],
[
['text'=>"منشن کردن متن🎫"]
],
[
['text'=>"برگشت↩"]
],
]
])
]);
}
elseif($textmassage == "ثبت اطلاعات کانال📌"){
	robot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"ایا مطمئن هستید؟
لطفا انتخاب کنید",
'reply_to_message_id'=>$message->message_id,
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
['text'=>"مطمئن هستم👌"]
],
[
['text'=>"برگشت ↩"]
	],
	]
	])
	]);
}
elseif($textmassage == "مطمئن هستم👌"){
$charge1 = file_get_contents("data/$from_id/charge.txt");
if($charge1 >= 1){
 robot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
لطفا انتخاب کنید

• توجه: شما با استفاده از این بخش یک عدد شارژ از حساب کم شده که در بخش اطلاعات من میتوانید ملاحظه کنید 🚫",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"کانال📢"],['text'=>"برگشت ↩"]
],
]
])
 ]);
}else{
robot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"شارژ شما کافی نیست 🚸",
]);
}
}
elseif($textmassage == "کانال📢"){
$charge1 = file_get_contents("data/$from_id/charge.txt");
$charge2 = $charge1 - 1;
file_put_contents("data/$from_id/charge.txt",$charge2);
     file_put_contents("data/$from_id/ali.txt","idch");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"خب ایدی کانال خود را ارسال کنید.

⚠توجه:لطفا با @ ارسال کنید",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
])
 ]);
}
elseif($ali == "idch"){
file_put_contents("data/$from_id/idch.txt","$textmassage");
$getch = json_decode(file_get_contents("https://api.telegram.org/bot$token/getchat?chat_id=$textmassage"));
$title = $getch->result->title;
$user1 = $getch->result->username;
$ok = $getch->ok;
file_put_contents("data/$from_id/id2.txt","$from_id");
file_put_contents("data/$from_id/addtext.txt","$title");
file_put_contents("data/$from_id/id9.txt","$username");
file_put_contents("data/$from_id/id45.txt","$user1");
file_put_contents("data/$from_id/ali.txt","addpic");
$rnd = RandomString();
file_put_contents("data/$from_id/code.txt","$rnd");
if($ok != false){
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
خب دوست عزیز اطلاعات کانال شما

نام: $title
یوزرنیم: @$user1
یوزرنیم ادمین: @$username

⚠ خب لطفا عکس کانال خود را ارسال کنید
",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"برگشت ↩"]
],
]
])
]);
}else{
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠ اخطار 
کانالی با این ایدی یافت نشد 🚫",
]);
}
}
elseif($ali == "addpic"){
if (is_array($photo)){
        $count = count ($photo) - 1;
        $photo_id = $photo[$count]->file_id;
        file_put_contents("data/$from_id/pics.txt","$photo_id");
$code = file_get_contents("data/$from_id/code.txt");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ثبت شد.
بعد از تایید به کانال فرستاده میشود
کدپیگیری: $code",
]);
$user1 = file_get_contents("data/$from_id/id45.txt");
$id89 = file_get_contents("data/$from_id/id2.txt");
$title = file_get_contents("data/$from_id/addtext.txt");
robot('Sendphoto',[
'chat_id'=>$ADMIN,
'photo'=>"$photo_id",
'caption'=>"
نام کانال: $title
یوزرنیم کانال: @$user1
یوزرنیم ادمین: @$username
ایدی عددی ادمین: $id89",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"تایید تبلیغ ✅",'callback_data'=>"yes|$from_id"],['text'=>"رد تبلیغ 🚫",'callback_data'=>"no|$from_id"]
],
]
])
]);
}
}
elseif(strpos($data,"yes|" ) !== false ) {
$ex = explode("|",$data);
$key = $ex[1];
$pm = file_get_contents("data/$key/addtext.txt");
$id = file_get_contents("data/$key/id2.txt");
$idcha = file_get_contents("data/$key/id45.txt");
$username2 = file_get_contents("data/$key/id9.txt");
$photo1 = file_get_contents("data/$key/pics.txt");
file_put_contents("data/$from_id/peyg.txt","$data");
robot('editMessageCaption',[
'chat_id'=>$chatid,
'message_id'=>$message_id2,
'caption'=>"• name: $pm
• username channel: @$idcha
• username admin: @$username2
#channel
#tabadol
تایید شد ✅",
]);
$send = robot('SendPhoto',['chat_id'=>$channel, 'photo'=>"$photo1",'caption'=>"• name: $pm
• username channel: @$idcha
• username admin: @$username2
#channel
#tabadol
@[*[BOT]*]
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"ارسال گزارش 🚫",'callback_data'=>"goza"]
],
]
])
]);
$msgid = $send->result->message_id;
robot('Sendmessage',[
'chat_id'=>$id,
'text'=>"تبریک کانال شما ثبت شد و درکانال
@[*[CHENNEL]*] 
قرار گرفت
<a href='https://t.me/$channel2/$msgid'>لینک پست</a>
",
'parse_mode'=>'HTML',
]);
robot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "پیام تایید رو به کاربر فرستادم",
                'show_alert' => false
            ]);
        } 
elseif(strpos($data,"no|" ) !== false ) {
$ex = explode("|",$data);
$key = $ex[1];
$id = file_get_contents("data/$key/id2.txt");
$idcha = file_get_contents("data/$key/id45.txt");
$username2 = file_get_contents("data/$key/id9.txt");
$photo1 = file_get_contents("data/$key/pics.txt");
$pm = file_get_contents("data/$key/addtext.txt");
robot('editMessageCaption',[
'chat_id'=>$chatid,
'message_id'=>$message_id2,
'caption'=>"• name: $pm
• username channel: @$idcha
• username admin: @$username2
#channel
#tabadol
رد شد ❌",
]);
robot('Sendmessage',[
'chat_id'=>$id,
'text'=>"با عرض معذرت تبلیغ شما رد شد

⚠ توجه: اگر میبینید مشکلی در بنر نیست و در صورت اشتباه تبلیغ شما رد شد لطفا در قسمت پشتیبانی اقدام کنید",
]);
robot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "پیام رد فرستادم رفت",
                'show_alert' => false
            ]);
        } 
elseif($textmassage == "امکانات دیگر🔧"){
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"به بخش ابزارها دیگر ربات خوش آمدید😎
این بخش برای کمک به سریع انجام شدن کارهای شما 
به عنوان همراه یار شما هست😀

لطفا انتخاب کنید🔅",
'parse_mode'=>'Markdown',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"تبدیل متن به HTML⌛"]
],
[
['text'=>"منشن کردن متن🎫"]
],
[
['text'=>"برگشت ↩"]
],
]
])
]);
}
elseif($textmassage == "منشن کردن متن🎫"){
file_put_contents("data/$from_id/ali.txt","sendch");
robot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚡ لطفا متن خود را ارسال کنید
",
'parse_mode'=>'HTML',
'hide_keyboard'=>true,
]);
}
elseif($ali == "sendch"){
file_put_contents("data/$from_id/ali.txt","idse");
file_put_contents("data/$from_id/sendch.txt","$textmassage");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• ایدی عددی فرد مورد نظر رو ارسال کنید ✏
",
'parse_mode'=>'HTML',
]);
}
elseif($ali == "idse"){
file_put_contents("data/$from_id/ali.txt","okjhg");
file_put_contents("data/$from_id/idse.txt","$textmassage");
$sendch = file_get_contents("data/$from_id/sendch.txt");
$idse = file_get_contents("data/$from_id/idse.txt");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[$sendch](tg://user?id=$idse)
",
'parse_mode'=>'markdown',
]);
sleep(2);
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>" یه پیشنهاد 💡 شما میتونی از ایدی عددی خودت استفاده کنی برای انجامش روی دکمه زیر کلیک کن 🚕",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"از ایدی خودم استفاده میکنم📃"]
],
]
])
]);
}
elseif($textmassage == "از ایدی خودم استفاده میکنم📃"){
$sendch = file_get_contents("data/$from_id/sendch.txt");
robot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[$sendch](tg://user?id=$from_id)
",
'parse_mode'=>'markdown',
]);
sleep(2);
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"به منوی اصلی برگشتیم 😇 لطفا انتخاب کنید 😬",
'parse_mode'=>'HTML',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"ثبت اطلاعات کانال📌"]
],
[
['text'=>"دریافت شارژ رایگان💸"],['text'=>"پشتیبانی☎"]
],
[
['text'=>"راهنما📑"],['text'=>"اطلاعات من📄"]
],
[
['text'=>"بنر بازار تبادل📌"],['text'=>"امکانات دیگر🔧"]
],
]
])
]);
}
elseif($textmassage == "تبدیل متن به HTML⌛"){
file_put_contents("data/$from_id/ali.txt","htmll");
robot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا پیام خود را ارسال یا فوروارد کنید",
'parse_mode'=>'HTML',
]);
}
elseif($ali == "htmll"){
file_put_contents("data/$from_id/ali.txt","okf");
file_put_contents("data/$from_id/htmll.txt","$textmassage");
file_put_contents("data/$from_id/ali.txt","no");
$htmll = file_get_contents("data/$from_id/htmll.txt");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$htmll
",
'parse_mode'=>'HTML',
]);
}
elseif($data == "goza"){
$id = $update->callback_query->from->id;
$name = $update->callback_query->from->first_name;
$username1 = $update->callback_query->from->username;
$message_id22 = $update->callback_query->message->message_id;
robot('answercallbackquery',[
            'callback_query_id' => $update->callback_query->id,
            'text'=>"• گزارش شما ثبت شد✅",
            'show_alert'=>true
        ]);
        robot('sendmessage',[
            'chat_id'=>"$ADMIN",
            'text'=>"
⚠ گزارش جدیدی ثبت شده:
اطلاعات🔰:
• فرد درخواست کننده: $name
• ایدی عددی فرد: $id
• یوزرنیم فرد: @$username1",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"پست مورد نظر✳",'url'=>"https://t.me/$channel2/$message_id22"]
],
]
])
]);
robot('Sendmessage',[
'chat_id'=>$id,
'text'=>"⚠ گزارشی که شما ارسال کرده اید 🔰
• نام شما: $name
• ایدی عددی شما: $id
• یوزرنیم شما: @$username1
در صورت اشتباه 🚫 گزارش دادن از شما دو عدد شارژ خواهد شد
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"پست گزارش شده 🚧",'url'=>"https://t.me/$channel2/$message_id22"]
],
]
])
]);
}
elseif($textmassage == "پیام به کاربر📭" or $textmassage == "/gh"){
file_put_contents("data/$from_id/ali.txt","info");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا شناسه کاربر را وارد کنید💉",
]);
}
elseif($ali == "info"){
file_put_contents("data/$from_id/ali.txt","sendpm");
file_put_contents("data/$from_id/info.txt","$textmassage");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا پیام خود را وارد کنید✏",
]);
}
elseif($ali == "sendpm"){
file_put_contents("data/$from_id/ali.txt","none");
file_put_contents("data/$from_id/sendpm.txt","$textmassage");
$sendpm = file_get_contents("data/$from_id/sendpm.txt");
$info = file_get_contents("data/$from_id/info.txt");
robot('Sendmessage',[
'chat_id'=>$info,
'text'=>"📬<code>پیامی از طرف پشتیبانی</code>

$sendpm",
'parse_mode'=>'HTML',
]);
robot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما به کاربر مورد نظر ارسال شد📮",
'parse_mode'=>'HTML',
]);
}
elseif($textmassage == "اضافه کردن شارژ 🔋"){
file_put_contents("data/$from_id/ali.txt","addshar");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی عددی کاربر رو ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"/panel"]
],
]
])
]);
}
elseif($ali == "addshar"){
file_put_contents("data/$from_id/addshar.txt",$textmassage);
file_put_contents("data/$from_id/ali.txt","numofshar");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا تعداد شارژ رو ارسال کنید",
]);
}
elseif($ali == "numofshar"){
$shar = file_get_contents("data/$from_id/addshar.txt");
$tshar = file_get_contents("data/$shar/charge.txt");
$getshar = $tshar + $textmassage;
file_put_contents("data/$shar/charge.txt", $getshar);
        file_put_contents("data/$chat_id/ali.txt", "");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"شارژ موردنظر به کاربر $shar به تعداد $textmassage اضافه شد",
]);
}
//---------------mac_team-------------//
elseif($textmassage == "/panel" && $from_id == $ADMIN){
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"مدیر گرامی به پنل مدیریتی خوش آمدی⬇",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"فروارد همگانی📫"],['text'=>"بلاک کردن 🚫"]
],
[
['text'=>"آمار📊"],['text'=>"پیام به کاربر📭"]
],
[
['text'=>"آنبلاک کردن ✅"],['text'=>"اضافه کردن شارژ 🔋"]
],
]
])
]);
}
elseif($textmassage == "بلاک کردن 🚫"){
file_put_contents("data/$from_id/ali.txt","shar");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی فرد مورد نظر را ارسال کنید",
]);
}
elseif($ali == "shar"){
file_put_contents("data/$from_id/shar.txt","$textmassage");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
ایدی $textmassage بلاک شد از ربات",
]);
$adduser = file_get_contents("data/blocklist.txt");
$adduser .= $textmassage . "\n";
file_put_contents("data/blocklist.txt", $adduser);
file_put_contents("data/$from_id/ali.txt","no");
$id11 = file_get_contents("data/$from_id/shar.txt");
robot('Sendmessage',[
'chat_id'=>$id11,
'text'=>"ارتباط شما با سرور ما قطع شد و نمیتوانید از بات استفاده کنید 😪",
]);
}
elseif($textmassage == "آنبلاک کردن ✅"){
file_put_contents("data/$from_id/ali.txt","sharr");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی عددی کاربر مورد نظر رو ارسال کنید",
]);
}
elseif($ali == "sharr"){
$newlist = str_replace($textmassage, "", $blocklist);
        file_put_contents("data/blocklist.txt", $newlist);
        file_put_contents("data/$chat_id/ali.txt", "No");
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
خب ایدی $textmassage از بلاکی درآمد 😎",
]);
}
elseif($textmassage == "آمار📊" && $from_id = $ADMIN){
$user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تعداد کاربران 📋: $member_count",
]);
}
elseif($textmassage == "فروارد همگانی📫" && $from_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","fwr");
 robot('Sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام مورد نظر رو در قالب متن بفرستید📑",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"/panel"]
],
]
])
]);
}
elseif($ali == "fwr" && $from_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","none");
robot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام همگانی فرستاده شد.",
  ]);
 $all_member = fopen( "Member.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
Forward($user, $chat_id,$message_id);
    }
}
elseif($textmassage == "بنر بازار تبادل📌" or $textmassage == "/bt"){
robot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🥇با بازار تبادل راحت و سریع تبلیغ و تبادل کن😎
🎯دیگه نمیخواد دنبال ادمین و کانال هم تعداد خودت بگردی🤔

⏰در کمترین زمان تعداد اعضای کانالت رو ببر بالا📍
🎖فقط در چند ثانیه🎗

*Tabadol Channel*",
'parse_mode'=>'Markdown',
            'reply_markup' =>json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "عضویت در بات🔖", 'url' => "https://telegram.me/$idbot"]
                    ],
[
                         ['text' =>"اشتراک گذاری📌", 'switch_inline_query' => 'Send']
                    ],
               
                ]
           
        ])
    ]);
}
elseif($textmassage == "Send"){
}
{
robot('answerInlineQuery', [
        'inline_query_id' => $update->inline_query->id,
        'results' => json_encode([[
            'type' => 'article',
             'thumb_url'=>"https://img.tglab.uz/244939302/15141047345a3f679ed2c51.jpg",
            'id' => base64_encode(rand(5, 555)),
            'title' =>"Share Banner",
            'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' =>"🥇با بازار تبادل راحت و سریع تبلیغ و تبادل کن😎
🎯دیگه نمیخواد دنبال ادمین و کانال هم تعداد خودت بگردی🤔

⏰در کمترین زمان تعداد اعضای کانالت رو ببر بالا📍
🎖فقط در چند ثانیه🎗

*Tabadol Channel*"],
'parse_mode'=>'Markdown',
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        ['text' => "عضویت در بات🔖", 'url'=>"https://t.me/$idbot"]
                    ],
[
                         ['text' =>"اشتراک گذاری📌", 'switch_inline_query' => 'Send']
                    ]
                ]
            ]
        ]])
    ]);
}
unlink("error_log");
?>