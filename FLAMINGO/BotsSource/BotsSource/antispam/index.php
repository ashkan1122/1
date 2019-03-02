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
function bot($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
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
//////////////////////function/////////////
function SendMessage($chat_id, $text, $mode, $reply, $keyboard = null){
 bot('SendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode,
 'reply_to_message_id'=>$reply,
 'reply_markup'=>$keyboard
 ]);
 }
 function RandomString()
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 9; $i++) {
        $randstring .= $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}
function clock($time){
       $tehran = new DateTimeZone("Asia/Tehran");
    $london = new DateTimeZone("Europe/London");
    $dateDiff = new DateTime("now", $london);
    $timeOffset = $tehran->getOffset($dateDiff);
    $newtime = time() + $timeOffset;
return Date("$time",$newtime);
}
function Forward($KojaShe,$AzKoja,$KodomMSG){
bot('ForwardMessage',[
'chat_id'=>$KojaShe,
'from_chat_id'=>$AzKoja,
'message_id'=>$KodomMSG
]);
}
function SendSticker($chatid,$sticker,$keyboard,$reply){
bot('SendSticker',[
'chat_id'=>$chatid,
'sticker'=>$sticker,
'reply_to_message_id'=>$reply,
'reply_markup'=>$keyboard
]);
}
function save($filename, $data)
{
    $file = fopen($filename, 'w');
    fwrite($file, $data);
    fclose($file);
}
function sendAction($chat_id, $action)
{
    bot('sendChataction', [
        'chat_id' => $chat_id,
        'action' => $action]);
}
function sendphoto($chat_id, $photo, $caption){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }

function pinChatMessage($chat_id){
bot('pinChatMessage',[
'chat_id'=>$chat_id,
]);
}
function Editmessagetext($chat_id, $message_id, $text, $key){
	bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
		'text' => $text,
		'reply_markup' => $key
    ]);
}
$panel = json_encode(['keyboard'=>[
[['text'=>"⚡️آمار کاربران"],['text'=>"⚡️آمار گروه ها"]],
[['text'=>"⚡️پیام همگانی"],['text'=>"⚡️فروارد به گروه ها"]],
[['text'=>"⚡️پیام به گروه ها"],['text'=>"⚡️فروارد همگانی"]],
[['text'=>"برگشت"]]
],'resize_keyboard'=>true]);
$back = json_encode(['keyboard'=>[
[['text'=>"برگشت"]]
],'resize_keyboard'=>true]);
$start = json_encode(['keyboard'=>[
[['text'=>" ✞   آموزش نصب  ✞ "]],
[['text'=>"• پشتیبانی •"],['text'=>"• دستورات •"]],
],'resize_keyboard'=>true]);
$robot = json_encode(['inline_keyboard'=>[
[
['text'=>"بردن ربات به گروه",'url'=>"https://t.me/[*[BOT]*]?startgroup=new"]
],
]
]);
$tviran = json_encode(['inline_keyboard'=>[
[
['text'=>"● Tv①",'url'=>"http://www.aparat.com/live/tv1"],['text'=>"● Tv②",'url'=>"http://www.aparat.com/live/tv2"],
],
[
['text'=>"● Tv③",'url'=>"http://www.aparat.com/live/tv3"],['text'=>"● Namayesh",'url'=>"https://www.aparat.com/live/namayesh"],
],
[
['text'=>"● Tmasha",'url'=>"https://www.aparat.com/live/hd"],['text'=>"● Ifilm",'url'=>"https://www.aparat.com/live/ifilm"],
],
[
['text'=>"● Nasim",'url'=>"https://www.aparat.com/live/nasim"],['text'=>"● Varzsh",'url'=>"https://www.aparat.com/live/ifilm"],
],
[
['text'=>"● Pouya",'url'=>"https://www.aparat.com/live/pouya"]
],
]
]);
//////////////////////////////////////////////////////////
$tvkh = json_encode(['inline_keyboard'=>[
[
['text'=>"● GemTv",'url'=>"http://tvmanoto.com/gem-tv"],['text'=>"● GemSeries",'url'=>"http://tvmanoto.com/gem-series"],
],
[
['text'=>"● GemBollywood",'url'=>"http://tvmanoto.com/gem-bollywood/"],['text'=>"● GemRiver",'url'=>"http://tvmanoto.com/gem-river"],
],
[
['text'=>"● GemRubix",'url'=>"http://tvmanoto.com/gem-rubix/"]
],
[
['text'=>"● GemLife",'url'=>"http://tvmanoto.com/gem-life"]
],
[
['text'=>"● Tvpersia",'url'=>"http://tvmanoto.com/tv-persia"]
],
[
['text'=>"● Pmc",'url'=>"http://tvmanoto.com/pmc/"]
],
[
['text'=>"● Manoto",'url'=>"http://tvmanoto.com/manototv/comment-page-2/"]
],
[
['text'=>"● Bbc",'url'=>"http://tvmanoto.com/bbc-persian/"]
],
[
['text'=>"Channel",'url'=>"http://t.me/[*[CHENNEL]*]"]
],
]
]);
////['text'=>"شماره موبایل پشتیبانی ⇲",'callback_data'=>'text']
$devlop = json_encode(['inline_keyboard'=>[
[
['text'=>"channel",'url'=>"http://t.me/[*[CHENNEL]*]"]
],
]
]);
////////////////////////////////////////////////fire//////
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$chat_idg = $update->callback_query->message->chat->id;
@$reply_id = $update->message->reply_to_message->from->id;
@$replyy = $update->message->reply_to_message;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$textmassage = $message->text;
@$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
//------------------------------------------------------------------------
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
$Dev = "[*[ADMIN]*]";
@$textt = $update->inline_qurey->qurey;
@$token = '[*[TOKEN]*]';
//------------------------------------------------------------------------/
$new_chat_member = $message->new_chat_member;
$new_chat_member_id = $new_chat_member->id;
$new_chat_member_first_name = $new_chat_member->first_name;
$new_chat_member_last_name = $new_chat_member->last_name;
$new_chat_member_username = $new_chat_member->username;
//////////////////////////////////////////////////////////
@$newchatmemberid = $update->message->new_chat_member->id;
$memberjoin = $update->message->new_chat_member;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$tedadmsgg = $update->callback_query->message->message_id;
@$edit = $update->edited_message->text;
@$fm = $update->callback_query->from->id;
$r_pic = "https://t.me/$re_user";
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$hoseinfd = "<a href='tg://user?id=$from_id'>$name</a>";
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
$namegapg = $settings["gap"]["name"];
$idgapg = $settings["gap"]["id"];
$added = $settings["added"];
$firepic = "https://t.me/$username";
$name = $update->message->from->first_name;
$date = clock("Y/m/d");
$time = clock("h:i:s");
$random = array('$start','$startt');
$ra = array_rand($random, 1);
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//------------------------------------------------------------------------
$detebase = json_decode(file_get_contents('bass.json'),true);
$add = json_decode(file_get_contents('add.json'),true);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
//////database////
$stat = file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getChatMember?chat_id=$chat_id&user_id=" .$from_id);
$statjson = json_decode($stat, true);
$status = $statjson['result']['status'];
//------------------------------------------------------------------------
$user = $detebase['users'];
$users = explode("%",$detebase['users']);
$base = $detebase['base'];
if($text == "/start"){
if($tc=="private"){
if(!in_array($from_id,$users)){
$detebase['users'] .= "$from_id%" ;
$detebase['base'] = "none";
file_put_contents("bass.json",json_encode($detebase));
}
if($bot_type != 'gold'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$adstext,
]);
}
SendMessage($chat_id,"سلام $name به ربات ضد لینک رایگان خوش آمدید\nجهت استفاده، ربات را به گروه خود برده و دستور \n  #install را بزنید✔️

مدیریت گروه  24 ساعته✔️👑
","markdown","true",$start);
}	
}
elseif($text == "/panel" && $from_id == $Dev){
Sendmessage($chat_id,"panel :","HTML","true",$panel);
}
elseif($text == "برگشت" && $from_id == $Dev){
Sendmessage($chat_id,"به منوی ادمین اومدیم","HTML","true",$panel);
$detebase['base']="none";
file_put_contents("bass.json",json_encode($detebase));
}
////////////////////add gps//////////////////////////////
$gpi = $add['gpid'];
$gpid = explode("%",$add['gpid']);
$gp = $add['gp'];
if ($text == "#install") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
if($tc!="private"){
if(!in_array($chat_id,$gpid)){
$add['gpid'] .= "$chat_id%" ;
$add['gp'] = "none";
$settings["lock"]["link"]="✅";
$settings["lock"]["fwd"]="☑️";
$settings["lock"]["mus"]="☑️";
$settings["lock"]["cont"]="☑️";
$settings["lock"]["stik"]="✅";
$settings["lock"]["file"]="☑️";
$settings["lock"]["vois"]="☑️";
$settings["lock"]["photo"]="✅";
$settings["lock"]["tag"]="☑️";
$settings["lock"]["user"]="✅";
$settings["lock"]["bot"]="☑️";
$settings["lock"]["tgservic"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
file_put_contents("add.json",json_encode($add));
SendMessage($chat_id,"ربات به با موفقیت در گروه [$chat_id] نصب شد ▫️✔️
ROBO irani  🚀","MarkDown","true");
}else{
SendMessage($chat_id,"ربات قبلا در گروه [$chat_id] عضو بوده  
لطفا درستور   #install  را بزنید▫️✔️");
}
}
}
}
}
if($text == "• دستورات •"){
if($tc=="private"){
SendMessage($chat_id,"⚫️ دستورات ربات ضد لینک ⚪️[دوزبانه]

قفل ها { `قفل لینک` | `قفل عکس` | `قفل یوزرنیم` | `قفل فروارد` | `قفل ویس` | `قفل موزیک` | `قفل مخاطب` | `قفل تگ` | `قفل ربات` | `قفل استیکر` | `قفل فایل`  | `قفل خدمات`}
انگلیسی 
 `lock link` | `lock photo` | `lock username` | `lock forward` | `lock voice` | `lock music` | `lock contact` | `lock tag` | `lock bot` | `lock sticker` | `lock file`  | `lock tgservic`}
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
دستورات بازکردن قفل ها 

بازکردن { `بازکردن لینک` | `بازکردن عکس` | `بازکردن یوزرنیم` | `بازکردن فروارد` | `بازکردن ویس` | `بازکردن موزیک` | `بازکردن مخاطب` | `بازکردن تگ` | `بازکردن ربات` | `بازکردن استیکر` | `بازکردن فایل` | `بازکردن خدمات`}
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
انگلیسی 
 `unlock link` | `unlock photo` | `unlock username` | `unlock forward` | `unlock voice` | `unlock music` | `unlock contact` | `unlock tag` | `unlock bot` | `unlock sticker` | `unlock file`  | `unlock tgservic`}
🔧 راهنمای مدیریتی

✔️ تنظیمات ▫️  settings
🔩دریافت تنظیمات گروه
➕ سنجاق  ▫️ pin
➖سنجاق کردن یک پیام گروه
➖➖➖
➕ حذف سنجاق ▫️ unpin
➖ برداشتن پیام سنجاق شده گروه روی پیام ریپلی کنید
 🗑 /rmsg 20 ▫️ پاک کردن 20

🗑حذف پیام های گروه تا 300 پیام به جای 20 عددی بین 1 تا 300 را قرار دهید
---------------------------------------------------
/dev
سازنده و ارتباط با سازنده ی ربات👑
---------------------------------------------------

😜راهنمای فان 😜
🔺زمان ▫️time
🔻دریافت تاریخ و ساعت 
➖➖➖
🔺ایدی ▫️id 
🔻مشخصات فردی شما همراه با عکس
➖➖➖
🔺لینک گروه ▫️gp link
🔻دریافت لینک گروه
➖➖➖
🔺تلویزیون▫️tv
🔻تماشای  تلویزون به صورت  آنلاین
➖➖➖
🔺ماهواره
🔻تماشای  ماهواره به صورت  آنلاین
➖➖➖
 ▪️/del➖حذف
▫️حذف پیام + ریپلی
➖➖➖

▪️/setname *TEXT*
▫️تغییر نام گروه
➖➖➖
▪️/Little *NAME*
▫️ کوچک کردن اسم انگلیسی
➖➖➖
▪️/Blue *NAME*
▫️حروف آبی انگلیسی
➖➖➖
▪️/setdescription *TEXT*
▫️تنظیم اطلاعات گروه
➖➖➖
▪️/photo *TEXT*
▫️ساخت لوگو با متن دلخواه شما
➖➖➖
▪️/telfont *TEXT*
▫️ساخت متن با فونت های تلگرام 
➖➖➖
▪️/date
▫️دریافت تاریخ و ساعت به صورت استیکر
➖➖➖
▪️/sticker *TEXT*
▫️ساخت استیکر با متن دلخواه شما [بیش از 20 نوع استیکر]
🔹🔹🔹🔹🔹🔹🔹🔹🔹🔹🔹🔹
انلاینی : اطلاع از انلاینی ربات✔️
📣 *راهنمای جوین اجباری 
بزودی* .....","MarkDown","true",$start);
}}
if($text == "✞   آموزش نصب  ✞"){
if($tc=="private"){
SendMessage($chat_id,"#آموزش نصب ربات ضدلینک  روبوایرانی در گروه شما :
• ابتدا با استفاده از دکمه ی زیر ربات رو به گروه خود ببرید و دستور [ #install ]  را بزنید !","html","true",$robot);
}}

if($text == "تلویزیون" or $text == "tv"){
SendMessage($chat_id,"به بخش تلویزیون ربات  ﴿ربوایرانی﴾  خوش امدیدヅ","html","true",$tviran);
}
if($text == "ماهواره"){
SendMessage($chat_id,"به بخش ماهواره ربات  ﴿ربوایرانی﴾  خوش امدیدヅ","html","true",$tvkh);
}
if($text == "• پشتیبانی •"){
if($tc=="private"){
SendMessage($chat_id,"☜ لینک گروه پشتیبانی ربات ما : https://t.me/joinchat/IuYzcU2XT-8698lhI-K5JQ","html","true",$start);
}}
//////////////////////////////////
///////////////panel admin////////devlop
if( strpos( $text , '⚡️پیام همگانی' ) !== false && $from_id==$Dev){
sendmessage($chat_id,"`متن خود را ارسال کنید`","MarkDown","true",$back);
$detebase['base']="send";
file_put_contents("bass.json",json_encode($detebase));
}
if($base=="send" && $from_id==$Dev){
if($text != "برگشت"){
sendmessage($chat_id,"`منتظر بمانید...`","MarkDown","true");
for($fire=0; $fire<=count($users)-1; $fire++){
sendmessage($users[$fire],$text);
}
}
sendmessage($chat_id,"`با موفقیت ارسال شد`","MarkDown","true");
$detebase['base']="none";
file_put_contents("bass.json",json_encode($detebase));
}
if( strpos( $text , '⚡️پیام به گروه ها' ) !== false && $from_id==$Dev){
sendmessage($chat_id,"`متن خود را ارسال کنید`","MarkDown","true",$back);
$detebase['base']="sengp";
file_put_contents("bass.json",json_encode($detebase));
}
if($base=="sengp" && $from_id==$Dev){
if($text != "برگشت"){
sendmessage($chat_id,"`منتظر بمانید...`","MarkDown","true");
for($fire=0; $fire<=count($gpid)-1; $fire++){
sendmessage($gpid[$fire],$text);
}
}
sendmessage($chat_id,"`با موفقیت ارسال شد`","MarkDown","true");
$detebase['base']="none";
file_put_contents("bass.json",json_encode($detebase));
}
if($text=="⚡️آمار کاربران" and $from_id==$Dev){
$members = count($users)-1;
sendmessage($chat_id,"`Members : $members`","MarkDown","true");
}
if($text=="⚡️آمار گروه ها" and $from_id==$Dev){
$members = count($gpid)-1;
sendmessage($chat_id,"`GROUP : $members`","MarkDown","true");
}
if( strpos( $text , '⚡️فروارد همگانی' ) !== false && $from_id==$Dev){
sendmessage($chat_id,"`پست خود را فوروارد کنید`","MarkDown","true",$back);
$detebase['base']="forw";
file_put_contents("bass.json",json_encode($detebase));
}
if($base=="forw" && $from_id==$Dev){
if($text != "برگشت"){
sendmessage($chat_id,"`منتظر بمانید . . .`","MarkDown","true",$back);
for($fire=0; $fire<=count($users)-1; $fire++){
Forward($users[$fire],$chat_id,$message_id);
}
}
sendmessage($chat_id,"`با موفقیت فوروارد شد`","MarkDown","true");
$detebase['base']="none";
file_put_contents("bass.json",json_encode($detebase));
}
if( strpos( $text , '⚡️فروارد به گروه ها' ) !== false && $from_id==$Dev){
sendmessage($chat_id,"`پست خود را فوروارد کنید`","MarkDown","true",$back);
$detebase['base']="forgp";
file_put_contents("bass.json",json_encode($detebase));
}
if($base=="forgp" && $from_id==$Dev){
if($text != "برگشت"){
sendmessage($chat_id,"`منتظر بمانید . . .`","MarkDown","true",$back);
for($fire=0; $fire<=count($gpid)-1; $fire++){
Forward($gpid[$fire],$chat_id,$message_id);
}
}
sendmessage($chat_id,"`با موفقیت فوروارد شد`","MarkDown","true");
$detebase['base']="none";
file_put_contents("bass.json",json_encode($detebase));
}
////////////settings/////////////////
if($text == 'تنظیمات' or $text == "settings"){
if ($tc == 'group' | $tc == 'supergroup') {
if($tc!="private"){
if(!in_array($chat_id,$settings)){
$lockphoto = $settings["lock"]["photo"];
$lockfwd = $settings["lock"]["fwd"];
$locklink = $settings["lock"]["link"];
$lockuser = $settings["lock"]["user"];
$lockaudio = $settings["lock"]["mus"];
$lockvoice = $settings["lock"]["vois"];
$lockcontact = $settings["lock"]["cont"];
$locksticker = $settings["lock"]["stik"];
$lockdecument = $settings["lock"]["file"];
$locktag = $settings["lock"]["tag"];
$lockbot = $settings["lock"]["bot"];
$servi = $settings["lock"]["tgservic"];
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تنظیمات گروه [ $chat_id] بدین شرح است✔️

▫️قفل لینک : $locklink

▫️قفل عکس : $lockphoto

▫️قفل  خدمات : $servi

▫️قفل استیکر : $locksticker

▫️قفل ویس : $lockvoice

▫️قفل موزیک : $lockaudio

▫️قفل فایل : $lockdecument

▫️قفل تگ : $locktag

▫️قفل یوزرنیم : $lockuser

▫️قفل مخاطب : $lockcontact

▫️قفل فروارد : $lockfwd

▫️قفل ربات : $lockbot

CH: @[*[CHENNEL]*] 👑",
 'parse_mode'=>'html',
 ]);
 }
}
}
}
  elseif($textmassage=="menu" or $textmassage=="منو"){
	if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev){
  if ($tc == 'group' | $tc == 'supergroup'){
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"⇜ به فهرست مدیریتی گروه خوشآمدید",
    'parse_mode'=>'MarkDown',
  	'reply_markup'=>json_encode([
  	'resize_keyboard'=>true,
  	'inline_keyboard'=>[
   [
   ['text'=>"⇜ تنظیمات ومدیریت گروه",'callback_data'=>'settings']
   ],
     [
   ['text'=>"⇜ بستن فهرست مدیریتی",'callback_data'=>'exit']
   ],
   [
	['text'=>"⇜ کانال تیم ما",'url'=>"https://telegram.me/[*[CHENNEL]*]"]
	],
  	]
  	])
  	]);
  	}
    }	
  }
   elseif($data=="settings"){
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"⇜ به بخش تنظیمات و مدیریت خوشآمدید :
   $name",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"⇜ تنظیمات گروه",'callback_data'=>'settingsgap']
   ],
   [
   ['text'=>"⇜ اطلاعات گروه",'callback_data'=>'fromgap']
   ],
   [
   ['text'=>"⇜ بستن فهرست مدیریتی",'callback_data'=>'exit']
   ],
  	]
  	])
  	]);
  	}
	elseif($data=="fromgap"){
     bot('editmessagetext',[
       'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"⇜ اطلاعات گروه",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"⇜ تاریخ انقضا : نامحدود",'callback_data'=>'mmmmmmm']
   ],
   [
   ['text'=>"⇜ نام گروه",'callback_data'=>'mmmmmm'],['text'=>"⇜ $gpname ⇜",'callback_data'=>'mmmmmm']
   ],
   [
   ['text'=>"⇜ ایدی گروه",'callback_data'=>'mmmmm'],['text'=>"⇜ $chat_idg ⇜",'callback_data'=>'mmmmmm']
   ],
   [
   ['text'=>"⇜ تعداد پیام های ارسالی گروه",'callback_data'=>'mmmmm'],['text'=>"⇜ $tedadmsgg ⇜",'callback_data'=>'mmmmmm']
   ],
   [
   ['text'=>"<<بازگشت",'callback_data'=>'settings']
   ],
  	]
  	])
  	]);
  	}
	elseif($data=="settingsgap"){
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"⇜ به بخش تنظیمات خوشآمدید :
   $name",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"⇜ تنظیمات",'callback_data'=>'settingsgaps'],['text'=>"⇜ تنظیمات بیشتر",'callback_data'=>'settingsnext']
   ],
   [
   ['text'=>"⇜ تنظیمات سکوت",'callback_data'=>'settingsmout']
   ],
   [
   ['text'=>"<<بازگشت",'callback_data'=>'settings']
   ],
  	]
  	])
  	]);
  	}
elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text)){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$creator_cmd,
]);
}
	elseif($data=="settingsgaps"){
	$lockphoto = $settings2["lock"]["photo"];
$lockfwd = $settings2["lock"]["fwd"];
$lock = $settings2["lock"]["link"];
$lockuser = $settings2["lock"]["user"];
$lockaudio = $settings2["lock"]["mus"];
$lockvoice = $settings2["lock"]["vois"];
$lockcontact = $settings2["lock"]["cont"];
$locksticker = $settings2["lock"]["stik"];
$lockdecument = $settings2["lock"]["file"];
$locktag = $settings2["lock"]["tag"];
$lockbot = $settings2["lock"]["bot"];
$servi = $settings2["lock"]["tgservic"];
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"⇜ تنظیمات گروه  صفحه : 1",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"لینک : $lock",'callback_data'=>'lockk'],['text'=>"$locklink",'callback_data'=>'h']
   ],
   [
   ['text'=>"عکس ⇜",'callback_data'=>'mmm'],['text'=>"$lockphoto",'callback_data'=>'lockphoto']
   ],
   [
   ['text'=>"یوزرنیم ⇜",'callback_data'=>'mmm'],['text'=>"$lockuser",'callback_data'=>'lock user']
   ],
   [
   ['text'=>"فوروارد ⇜",'callback_data'=>'mmm'],['text'=>"$lockfwd",'callback_data'=>'lock fwd']
   ],
   [
   ['text'=>"ویس ⇜",'callback_data'=>'mmm'],['text'=>"$lockvoice",'callback_data'=>'lock voice']
   ],
   [
   ['text'=>"موزیک ⇜",'callback_data'=>'mmm'],['text'=>"$lockaudio",'callback_data'=>'lock audio']
   ],
   [
   ['text'=>"مخاطب ⇜",'callback_data'=>'mmm'],['text'=>"$lockcontact",'callback_data'=>'lock contact']
   ],
   [
   ['text'=>"<<صفحه بعد",'callback_data'=>'settingsnext']
   ],
   [
   ['text'=>"<<بازگشت",'callback_data'=>'settingsgap']
   ],
  	]
  	])
  	]);
  	}
/////////
    elseif($data=="settingsnext"){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"⇜ تنظیمات گروه  صفحه : 2",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"ربات ⇜",'callback_data'=>'mmm'],['text'=>"$lockbot",'callback_data'=>'lock bot']
   ],
   [
   ['text'=>">>صفحه قبل",'callback_data'=>'settingsgaps']
   ],
   [
   ['text'=>"<<بازگشت",'callback_data'=>'settingsgap']
   ],
  	]
  	])
  	]);
  	}
/////////lock lin////////

elseif($data=="lockphoto" && $settings2["lock"]["photo"] =="☑️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
	$lockphoto = $settings2["lock"]["photo"];
$lockfwd = $settings2["lock"]["fwd"];
$locklink = $settings2["lock"]["link"];
$lockuser = $settings2["lock"]["user"];
$lockaudio = $settings2["lock"]["mus"];
$lockvoice = $settings2["lock"]["vois"];
$lockcontact = $settings2["lock"]["cont"];
$locksticker = $settings2["lock"]["stik"];
$lockdecument = $settings2["lock"]["file"];
$locktag = $settings2["lock"]["tag"];
$lockbot = $settings2["lock"]["bot"];
$servi = $settings2["lock"]["tgservic"];
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"⇜ قفل عکس با موفقیت فعال شد",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"لینک ⇜",'callback_data'=>'mmm'],['text'=>"$locklink",'callback_data'=>'lock link']
   ],
   [
   ['text'=>"⇜ عکس",'callback_data'=>'mmm'],['text'=>"$lockphoto",'callback_data'=>'lockphoto']
   ],
   [
   ['text'=>"یوزرنیم ⇜",'callback_data'=>'mmm'],['text'=>"$lockuser",'callback_data'=>'lock user']
   ],
   [
   ['text'=>"فوروارد ⇜",'callback_data'=>'mmm'],['text'=>"$lockfwd",'callback_data'=>'lock fwd']
   ],
   [
   ['text'=>"ویس ⇜",'callback_data'=>'mmm'],['text'=>"$lockvoice",'callback_data'=>'lock voice']
   ],
   [
   ['text'=>"موزیک ⇜",'callback_data'=>'mmm'],['text'=>"$lockaudio",'callback_data'=>'lock audio']
   ],
   [
   ['text'=>"مخاطب ⇜",'callback_data'=>'mmm'],['text'=>"$lockcontact",'callback_data'=>'lock contact']
   ],
   [
   ['text'=>"<<صفحه بعد",'callback_data'=>'settingsnext']
   ],
   [
   ['text'=>"<<بازگشت",'callback_data'=>'settingsgap']
   ],
  	]
  	])
  	]);
$settings2["lock"]["photo"] = "✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
}
elseif($data=="lockphoto" && $settings2["lock"]["photo"] =="️✅"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
	$lockphoto = $settings2["lock"]["photo"];
$lockfwd = $settings2["lock"]["fwd"];
$locklink = $settings2["lock"]["link"];
$lockuser = $settings2["lock"]["user"];
$lockaudio = $settings2["lock"]["mus"];
$lockvoice = $settings2["lock"]["vois"];
$lockcontact = $settings2["lock"]["cont"];
$locksticker = $settings2["lock"]["stik"];
$lockdecument = $settings2["lock"]["file"];
$locktag = $settings2["lock"]["tag"];
$lockbot = $settings2["lock"]["bot"];
$servi = $settings2["lock"]["tgservic"];
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"⇜ قفل عکس با موفقیت فعال شد",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"لینک ⇜",'callback_data'=>'mmm'],['text'=>"$locklink",'callback_data'=>'lock link']
   ],
   [
   ['text'=>"⇜ عکس",'callback_data'=>'mmm'],['text'=>"$lockphoto",'callback_data'=>'lockphoto']
   ],
   [
   ['text'=>"یوزرنیم ⇜",'callback_data'=>'mmm'],['text'=>"$lockuser",'callback_data'=>'lock user']
   ],
   [
   ['text'=>"فوروارد ⇜",'callback_data'=>'mmm'],['text'=>"$lockfwd",'callback_data'=>'lock fwd']
   ],
   [
   ['text'=>"ویس ⇜",'callback_data'=>'mmm'],['text'=>"$lockvoice",'callback_data'=>'lock voice']
   ],
   [
   ['text'=>"موزیک ⇜",'callback_data'=>'mmm'],['text'=>"$lockaudio",'callback_data'=>'lock audio']
   ],
   [
   ['text'=>"مخاطب ⇜",'callback_data'=>'mmm'],['text'=>"$lockcontact",'callback_data'=>'lock contact']
   ],
   [
   ['text'=>"<<صفحه بعد",'callback_data'=>'settingsnext']
   ],
   [
   ['text'=>"<<بازگشت",'callback_data'=>'settingsgap']
   ],
  	]
  	])
  	]);
$settings2["lock"]["photo"] = "☑️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
}  	
elseif($data=="lockk" && $settings2["lock"]["link"] =="✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lock = $settings2["lock"]["link"];
$lockgif = $settings2["lock"]["gif"];
$lockvideo_note = $settings2["lock"]["video_msg"];
$locklocation = $settings2["lock"]["location"];
$lockphoto = $settings2["lock"]["photo"];
$lockcontact = $settings2["lock"]["contact"];
$lockaudio = $settings2["lock"]["audio"];
$lockvoice = $settings2["lock"]["voice"];
$locksticker = $settings2["lock"]["sticker"];
$lockgame = $settings2["lock"]["game"];
$lockvideo = $settings2["lock"]["video"];
$locktext = $settings2["lock"]["text"];
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"• تنظیمات رسانه :

» نام گروه : [$gpname]
» ایدی گروه : [$chatid]

> قفل اینلاین با موفقیت غیر فعال شد !",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"فایل : $lock",'callback_data'=>'lockdocument']
],
[
['text'=>"گیف : $lockgif",'callback_data'=>'lockgif']
],
[
['text'=>"پیام ویدیویی : $lockvideo_note",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"ارسال مکان : $locklocation",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"تصویر : $lockphoto",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"ارسال شماره : $lockcontact",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"موسیقی : $lockaudio",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا : $lockvoice",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"استیکر : $locksticker",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی : غیر فعال",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم : $lockvideo",'callback_data'=>'lockvideo']
],
 [
['text'=>"متن : $locktext",'callback_data'=>'locktext']
],
[
['text'=>"« برگشت",'callback_data'=>'settings']
],
                    ]
             ])
         ]);
$settings2["lock"]["link"]="☑️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		 		 }else{
			bot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
  }
  }
  elseif($data=="lockk" && $settings2["lock"]["link"] =="☑️"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lock = $settings2["lock"]["link"];
$lockgif = $settings2["lock"]["gif"];
$lockvideo_note = $settings2["lock"]["video_msg"];
$locklocation = $settings2["lock"]["location"];
$lockphoto = $settings2["lock"]["photo"];
$lockcontact = $settings2["lock"]["contact"];
$lockaudio = $settings2["lock"]["audio"];
$lockvoice = $settings2["lock"]["voice"];
$locksticker = $settings2["lock"]["sticker"];
$lockgame = $settings2["lock"]["game"];
$lockvideo = $settings2["lock"]["video"];
$locktext = $settings2["lock"]["text"];
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"• تنظیمات رسانه :

» نام گروه : [$gpname]
» ایدی گروه : [$chatid]

> قفل اینلاین با موفقیت فعال شد !",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"فایل : $lock",'callback_data'=>'lockk']
],
[
['text'=>"گیف : $lockgif",'callback_data'=>'lockgif']
],
[
['text'=>"پیام ویدیویی : $lockvideo_note",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"ارسال مکان : $locklocation",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"تصویر : $lockphoto",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"ارسال شماره : $lockcontact",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"موسیقی : $lockaudio",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا : $lockvoice",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"استیکر : $locksticker",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی : فعال",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم : $lockvideo",'callback_data'=>'lockvideo']
],
 [
['text'=>"متن : $locktext",'callback_data'=>'locktext']
],
[
['text'=>"« برگشت",'callback_data'=>'settings']
],
                    ]
             ])
         ]);
$settings2["lock"]["link"] = "✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		 		 }else{
			bot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
  }
  }
////////
  elseif($data=="exit" ){
   if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            bot('deletemessage',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
           ]);
     }else{
   bot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"این اسباب بازی نیست برا مدیراست",
]);
    }
 }
  /*
  	elseif($data=="exit" or $status == 'creator' or $status == 'administrator' or $from_id == $Dev){
            bot('deletemessage',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
           ]);
	bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"⇜ فهرست شیشه ای با موفقیت بسته شد ヅ",
'reply_to_message_id'=>$update->message->message_id,
'parse_mode'=>"HTML"
]);	   
    }*/
/////////////////////
  $ename = str_replace("/setname ", "$ename", $text);
  if($status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners ); if($textmassage == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"نام جدید گروه با موفقیت تغییر یافت▪️

نام جدید گروه :[$ename]",
'reply_to_message_id'=>$update->message->message_id,
'parse_mode'=>"HTML"
]);
}
  
  /////////
    $escription = str_replace("/setdescription ", "$escription", $text);
  if($status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners ); if($textmassage == "/setdescription $ename"){
  bot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$escription
      ]);
bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"اطلاعات جدید گروه با موفقیت تغییر یافت▪️

اطلاعات گروه :[$escription]",
'reply_to_message_id'=>$update->message->message_id,
'parse_mode'=>"HTML"
]);
}
 $re_user = $update->message->reply_to_message->from->username;
  if($textmassage == "/del" or $textmassage == "حذف"){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
    ]);
  }
  
if(isset($update->callback_query)){
}elseif(isset($update->inline_query)){
    echo 'QUERY ...';
    var_dump(bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,
        'results'=>json_encode([[
            'type'=>'article',
            'id'=>base64_encode(1),
            'title'=>'اشتراک گزاری',
            'input_message_content'=>['parse_mode'=>'MarkDown','message_text'=>"
           سلام •°RoboIRani•° به ربات ضد لینک رایگان خوش آمدید
جهت استفاده، ربات را به گروه خود برده و دستور 
  #install را بزنید✔️

مدیریت گروه  24 ساعته✔️👑
 [*[CHENNEL]*]
            "],
            'reply_markup'=>[
                'inline_keyboard'=>[
                    [
                        ['text'=>"ورود به ربات",'url'=>"https://telegram.me/[*[BOT]*]"]
                    ],
					[
                        ['text'=>"$date",'callback_data'=>'zama'],['text'=>"$time",'callback_data'=>'zaman'],
                    ],
                ]
            ]
        ]])
    ]));
}
elseif($replyy && $text=="اخراج"){
if($status == "creator" or $status == "administrator"){   
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$reply_id
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"کاربر مورد نظر با موفیقت اخراج شد.",
'parse_mode'=>'MarkDown',
]);
}
}
elseif($replyy && $text=="ایدی فرد"){ 
bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"مشخصات فرد ✔️👑
نام:  $re_name
یوزرنیم: $re_user
ایدی عددی: $re_id",
'reply_to_message_id'=>$update->message->message_id,
'parse_mode'=>"HTML"
]);
}
//////////////////////////////////////////////
if(preg_match('/^\/([Ll]ittle) (.*)/s',$text) and $tc == 'group' | $tc == 'supergroup') {
preg_match('/^\/([Ll]ittle) (.*)/s',$text,$match);
$ev1 = $match[2];
$a1 = str_replace('a',"ᵃ",$ev1);
$a1 = str_replace('A',"ᵃ",$a1);
$b1 = str_replace("b","ᵇ",$a1);
$b1 = str_replace("B","ᵇ",$b1);
$c1 = str_replace("c","ᶜ",$b1);
$c1 = str_replace("C","ᶜ",$c1);
$d1 = str_replace("d","ᵈ",$c1);
$d1 = str_replace("D","ᵈ",$d1);
$e1 = str_replace("e","ᵉ",$d1);
$e1 = str_replace("E","ᵉ",$e1);
$f1 = str_replace("f","ᶠ",$e1);
$f1 = str_replace("F","ᶠ",$f1);
$g1 = str_replace("g","ᵍ",$f1);
$g1 = str_replace("G","ᵍ",$g1);
$h1 = str_replace("h","ʰ",$g1);
$h1 = str_replace("H","ʰ",$h1);
$i1 = str_replace("i","ᶤ",$h1);
$i1 = str_replace("I","ᶤ",$i1);
$j1 = str_replace("j","ʲ",$i1);
$j1 = str_replace("J","ʲ",$j1);
$k1 = str_replace("k","ᵏ",$j1);
$k1 = str_replace("K","ᵏ",$k1);
$l1 = str_replace("l","ˡ",$k1);
$l1 = str_replace("L","ˡ",$l1);
$m1 = str_replace("m","ᵐ",$l1);
$m1 = str_replace("M","ᵐ",$m1);
$n1 = str_replace("n","ᶰ",$m1);
$n1 = str_replace("N","ᶰ",$n1);
$o1 = str_replace("o","ᵒ",$n1);
$o1 = str_replace("O","ᵒ",$o1);
$p1 = str_replace("p","ᵖ",$o1);
$p1 = str_replace("P","ᵖ",$p1);
$q1 = str_replace("q","ᵠ",$p1);
$q1 = str_replace("Q","ᵠ",$q1);
$r1 = str_replace("r","ʳ",$q1);
$r1 = str_replace("R","ʳ",$r1);
$s1 = str_replace("s","ˢ",$r1);
$s1 = str_replace("S","ˢ",$s1);
$t1 = str_replace("t","ᵗ",$s1);
$t1 = str_replace("T","ᵗ",$t1);
$u1 = str_replace("u","ᵘ",$t1);
$u1 = str_replace("U","ᵘ",$u1);
$v1 = str_replace("v","ᵛ",$u1);
$v1 = str_replace("V","ᵛ",$v1);
$w1 = str_replace("w","ʷ",$v1);
$w1 = str_replace("W","ʷ",$w1);
$x1 = str_replace("x","ˣ",$w1);
$x1 = str_replace("X","ˣ",$x1);
$y1 = str_replace("y","ʸ",$x1);
$y1 = str_replace("Y","ʸ",$y1);
$z1 = str_replace("z","ᶻ",$y1);
$z1 = str_replace("Z","ᶻ",$z1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}
if(preg_match('/^\/([Bb]lue) (.*)/s',$text) and $tc == 'group' | $tc == 'supergroup') {
preg_match('/^\/([Bb]lue) (.*)/s',$text,$match);
$ev1 = $match[2];
$a1 = str_replace('a','•🇦',$ev1);
$a1 = str_replace('A','•🇦',$a1);
$b1 = str_replace("b","•🇧",$a1);
$b1 = str_replace("B","•🇧",$b1);
$c1 = str_replace("c","•🇨",$b1);
$c1 = str_replace("C","•🇨",$c1);
$d1 = str_replace("d","•🇩",$c1);
$d1 = str_replace("D","•🇩",$d1);
$e1 = str_replace("e","•🇪",$d1);
$e1 = str_replace("E","•🇪",$e1);
$f1 = str_replace("f","•🇫",$e1);
$f1 = str_replace("F","•🇫",$f1);
$g1 = str_replace("g","•🇬",$f1);
$g1 = str_replace("G","•🇬",$g1);
$h1 = str_replace("h","•🇭",$g1);
$h1 = str_replace("H","•🇭",$h1);
$i1 = str_replace("i","•🇮",$h1);
$i1 = str_replace("I","•🇮",$i1);
$j1 = str_replace("j","•🇯",$i1);
$j1 = str_replace("J","•🇯",$j1);
$k1 = str_replace("k","•🇰",$j1);
$k1 = str_replace("K","•🇰",$k1);
$l1 = str_replace("l","•🇱",$k1);
$l1 = str_replace("L","•🇱",$l1);
$m1 = str_replace("m","•🇲",$l1);
$m1 = str_replace("M","•🇲",$m1);
$n1 = str_replace("n","•🇳",$m1);
$n1 = str_replace("N","•🇳",$n1);
$o1 = str_replace("o","•🇴",$n1);
$o1 = str_replace("O","•🇴",$o1);
$p1 = str_replace("p","•🇵",$o1);
$p1 = str_replace("P","•🇵",$p1);
$q1 = str_replace("q","•🇶",$p1);
$q1 = str_replace("Q","•🇶",$q1);
$r1 = str_replace("r","•🇷",$q1);
$r1 = str_replace("R","•🇷",$r1);
$s1 = str_replace("s","•🇸",$r1);
$s1 = str_replace("S","•🇸",$s1);
$t1 = str_replace("t","•🇹",$s1);
$t1 = str_replace("T","•🇹",$t1);
$u1 = str_replace("u","•🇻",$t1);
$u1 = str_replace("U","•🇻",$u1);
$v1 = str_replace("v","•🇺",$u1);
$v1 = str_replace("V","•🇺",$v1);
$w1 = str_replace("w","•🇼",$v1);
$w1 = str_replace("W","•🇼",$w1);
$x1 = str_replace("x","•🇽",$w1);
$x1 = str_replace("X","•🇽",$x1);
$y1 = str_replace("y","•🇾",$x1);
$y1 = str_replace("Y","•🇾",$y1);
$z1 = str_replace("z","•🇿",$y1);
$z1 = str_replace("Z","•🇿",$z1);
$z1 = str_replace("1","•🇿",$z1); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}
////////////
elseif($textmassage=="تنظیم ادمین" or $textmassage=="add admin" or $textmassage=="افزودن ادمین"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"کاربر $re_name با موفقیت به لیست ادمین های گروه پیوست✔️
@$re_user",
'reply_to_message_id'=>$update->message->message_id,
'parse_mode'=>"HTML"
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
	}
}
elseif($textmassage=="حذف ادمین" or $textmassage=="del admin" or $textmassage=="پاک ادمین"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"کاربر $re_name با موفقیت از لیست ادمین های گروه پاک شد✔️
@$re_user",
'reply_to_message_id'=>$update->message->message_id,
'parse_mode'=>"HTML"
]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	}
}
///////////
elseif (strpos($text,"/gif") !== false){
 $text = explode(" ",$text);
 $nemeea = $text['1'];
 $rand = array('comics-logo','water-logo','3d-logo','blackbird-logo','runner-logo','graffiti-burn-logo','electric','standing3d-logo','style-logo','steel-logo','fluffy-logo','surfboard-logo','orlando-logo','fire-logo','clan-logo','chrominium-logo','harry-potter-logo','amped-logo','inferno-logo','uprise-logo','winner-logo','star-wars-logo','silver-logo','Design-Dance');
$ra = array_rand($rand, 1);
$neman = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=$rand[$ra]&text=$nemeea&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141"));
$neman2 = $neman->src;
bot('senddocument',[
'chat_id'=>$update->message->chat->id,
'document'=>$neman2,
]);
bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"بیا",
'reply_to_message_id'=>$update->message->message_id+1,
'parse_mode'=>"HTML"
]);
}
if ($text == "انلاینی" or $text == "ping" or $text == "آنلاینی" ){
$randd = array('My Channel➕','Channel My➖','کانال من🎖');
$ra = array_rand($randd, 1);
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text' =>"*Robot is online*🎲",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
    [['text'=>"$randd[$ra]", 'url'=>"https://t.me/[*[CHENNEL]*]"]],
      ]
      ])
    ]);
    }
////////////////////
elseif (strpos($text,"/photo") !== false){
 $text = explode(" ",$text);
 $textt = $text['1'];
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://assets.imgix.net/examples/clouds.jpg?blur=150&w=500&h=500&fit=crop&txt=$textt&txtsize=100&txtclr=ff2e4357&txtalign=middle,center&txtfont=Futura%20Condensed%20Medium&mono=ff6598cc",
 'caption'=>"عکس شما با موفقیت ساخته شد با نام  [$textt]",
 ]);
 }
 ////////////////////
 ////////////////////
  elseif (strpos($text,"/telfont") !== false){
 $text = explode(" ",$text);
 $textt = $text['1'];
 bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"*$textt*
`$textt`
_'$textt'_",
'reply_to_message_id'=>$update->message->message_id,
'parse_mode'=>"MarkDown"
]);
}
///////////////////
	elseif($text == "/date"){
  
  file_put_contents('data/Photo-S.png',file_get_contents('http://api.feelthecode.xyz/sticker/date/'));
SendSticker($chat_id , new CURLFile('data/Photo-S.png'));
	}
///////////////////
 elseif (strpos($text,"/sticker") !== false){
 $text = explode(" ",$text);
 $nemeea = $text['1'];
 $rand = array('comics-logo','water-logo','3d-logo','blackbird-logo','runner-logo','graffiti-burn-logo','electric','standing3d-logo','style-logo','steel-logo','fluffy-logo','surfboard-logo','orlando-logo','fire-logo','clan-logo','chrominium-logo','harry-potter-logo','amped-logo','inferno-logo','uprise-logo','winner-logo','star-wars-logo','silver-logo','Design-Dance');
$ra = array_rand($rand, 1);
 $neman = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=$rand[$ra]&text=$nemeea&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141"));
$neman2 = $neman->src;
 file_put_contents('data/Photo-D.png',file_get_contents("$neman2"));
SendSticker($chat_id , new CURLFile('data/Photo-D.png'));
	}
///////////////////
if ($new_chat_member_id != '') {
  if ($me_username != $new_chat_member_username) {
   
    SendMessage($chat_id,"سلام  '.$new_chat_member_first_name.'  عزیز✔️
خوش اومدی
منو ببر به گروهات😘","html","true",$robot);
}}
///////

///////////locks///////////////////////////////
elseif (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $textmassage)) {
    preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
if(!in_array($chat_id,$settings)){
$locklink = $settings["lock"]["link"];
        if ($locklink == "✅") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                sendAction($chat_id, 'typing');
                bot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} 
}
elseif ($textmassage == "قفل لینک" or $textmassage == "lock link") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل لینک فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["link"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} elseif ($textmassage == "بازکردن لینک" or $textmassage == "unlock link") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل لینک غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["link"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif ($update->message->photo) {
if(!in_array($chat_id,$settings)){
$lockphoto = $settings["lock"]["photo"];
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockphoto == "✅️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                bot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} 
}
elseif ($textmassage == "قفل عکس" or $textmassage == "lock photo") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل عکس فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}

$settings["lock"]["photo"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}elseif ($textmassage == "بازکردن عکس" or $textmassage == "unlock photo") {
 if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل عکس غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["photo"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if(!in_array($chat_id,$settings)){
$lockfwd = $settings["lock"]["fwd"];
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
if ($lockfwd == "✅") {
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
}

elseif ($textmassage == "قفل فروارد" or $textmassage == "lock forward") {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل فروارد فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["fwd"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} elseif ($textmassage == "بازکردن فروارد" or $textmassage == "unlock forward") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل فروارد غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["fwd"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if ($update->message->contact) {
    if ($tc == 'group' | $tc == 'supergroup') {
if(!in_array($chat_id,$settings)){
$lockcontact = $settings["lock"]["cont"];
        if ($lockcontact == "✅") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                bot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
}}
elseif ($textmassage == "قفل ربات" or $textmassage == "lock bot") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        SendMessage($chat_id, "₪ قفل ورود ربات فعال شد");
    }
} 
$settings["lock"]["bot"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}elseif ($textmassage == "بازکردن ربات" or $textmassage == "unlock bot") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        SendMessage($chat_id, "₪ قفل ورود ربات غیرفعال شد");
    }
}
$settings["lock"]["bot"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} elseif (preg_match('/^(.*)([Bb][Oo][Tt])/s', $newchatmemberu) && $newchatmemberid != "418354515") {
if(!in_array($chat_id,$settings)){
$lockbot = $settings["lock"]["bot"];
        if ($lockbot == "✅") {
    bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $update->message->new_chat_member->id
    ]);
} 
}}
 elseif ($textmassage == "قفل مخاطب" or $textmassage == "lock contact") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل مخاطب فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["cont"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} elseif ($textmassage == "بازکردن مخاطب" or $textmassage == "unlock contact") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل مخاطب غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["cont"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
if (preg_match("/^(.*)#|#(.*)|(.*)#(.*)/", $textmassage)) {
    preg_match("/^(.*)#|#(.*)|(.*)#(.*)/", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
if(!in_array($chat_id,$settings)){
$locktag = $settings["lock"]["tag"];
        if ($locktag == "✅") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                bot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
}} elseif ($textmassage == "قفل تگ" or $textmassage == "lock tag") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل تگ فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["tag"]="✅️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} elseif ($textmassage == "بازکردن تگ" or $textmassage == "unlock tag") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل تگ غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["tag"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if ($update->message->audio) {
    if ($tc == 'group' | $tc == 'supergroup') {
if(!in_array($chat_id,$settings)){
$lockaudio = $settings["lock"]["mus"];
        if ($lockaudio == "✅") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                bot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
}} elseif ($textmassage == "قفل موزیک" or $textmassage == "lock music") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل موزیک فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["mus"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} elseif ($textmassage == "بازکردن موزیک" or $textmassage == "unlock music") {
 if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل موزیک غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["mus"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if ($update->message->voice) {
    if ($tc == 'group' | $tc == 'supergroup') {
if(!in_array($chat_id,$settings)){
$lockvoice = $settings["lock"]["vois"];
        if ($lockvoice == "✅") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                bot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
}}elseif ($textmassage == "قفل ویس" or $textmassage == "lock voice") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل ویس فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["vois"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}elseif ($textmassage == "بازکردن ویس" or $textmassage == "unlock voice") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل ویس غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
} 
$settings["lock"]["vois"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if ($update->message->sticker) {
    if ($tc == 'group' | $tc == 'supergroup') {
if(!in_array($chat_id,$settings)){
$locksticker = $settings["lock"]["stik"];
        if ($locksticker == "✅") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                bot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
}} elseif ($textmassage == "قفل استیکر" or $textmassage == "lock sticker") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل استیکر فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["stik"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} elseif ($textmassage == "بازکردن استیکر" or $textmassage == "unlock sticker") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل استیکر غیر فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["stik"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if ($update->message->decument) {
    if ($tc == 'group' | $tc == 'supergroup') {
if(!in_array($chat_id,$settings)){
$lockdecument = $settings["lock"]["file"];
        if ($lockdecument == "✅") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                bot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
}} elseif ($textmassage == "قفل فایل" or $textmassage == "lock file") {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل فایل فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["file"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} elseif ($textmassage == "بازکردن فایل" or $textmassage == "unlock file") {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "₪ قفل فایل غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
$settings["lock"]["file"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if (strstr($textmassage,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if(!in_array($chat_id,$settings)){
$lockuser = $settings["lock"]["user"];
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
if ($lockuser == "✅") {
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
}

elseif($textmassage=="قفل یوزرنیم" or $textmassage == "lock username") {
     if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"₪ قفل یوزرنیم فعال شد",
  'parse_mode'=>'MarkDown',
	]);
	}
}
$settings["lock"]["user"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($textmassage=="بازکردن یوزرنیم" or $textmassage == "unlock username") {
     if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"₪ قفل یوزرنیم غیرفعال شد",
  'parse_mode'=>'MarkDown',
	]);
	}
}
$settings["lock"]["user"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creato' && $status != 'administratr' && !in_array($from_id,$De) ){
if(!in_array($chat_id,$settings)){
$servi = $settings["lock"]["tgservic"];
if ($servi == "✅") {
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}}
elseif($textmassage=="lock tgservic" or $textmassage=="قفل خدمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"₪ قفل خدمات تلگرام فعال شد",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($textmassage=="unlock tgservic" or $textmassage=="بازکردن خدمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"₪ قفل خدمات تلگرام غیرفعال شد",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
/////////////////////////help////////////////
if ($textmassage == "راهنما") {
if ($tc == 'group' | $tc == 'supergroup') {
if($tc!="private"){
SendMessage($chat_id,"⚫️ دستورات ربات ضد لینک [*[CHENNEL]*] ⚪️[دوزبانه]

قفل ها { `قفل لینک` | `قفل عکس` | `قفل یوزرنیم` | `قفل فروارد` | `قفل ویس` | `قفل موزیک` | `قفل مخاطب` | `قفل تگ` | `قفل ربات` | `قفل استیکر` | `قفل فایل`  | `قفل خدمات`}
انگلیسی 
 `lock link` | `lock photo` | `lock username` | `lock forward` | `lock voice` | `lock music` | `lock contact` | `lock tag` | `lock bot` | `lock sticker` | `lock file`  | `lock tgservic`}
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
دستورات بازکردن قفل ها 

بازکردن { `بازکردن لینک` | `بازکردن عکس` | `بازکردن یوزرنیم` | `بازکردن فروارد` | `بازکردن ویس` | `بازکردن موزیک` | `بازکردن مخاطب` | `بازکردن تگ` | `بازکردن ربات` | `بازکردن استیکر` | `بازکردن فایل` | `بازکردن خدمات`}
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
انگلیسی 
 `unlock link` | `unlock photo` | `unlock username` | `unlock forward` | `unlock voice` | `unlock music` | `unlock contact` | `unlock tag` | `unlock bot` | `unlock sticker` | `unlock file`  | `unlock tgservic`}
🔧 راهنمای مدیریتی

✔️ تنظیمات ▫️  settings
🔩دریافت تنظیمات گروه
➕ سنجاق  ▫️ pin
➖سنجاق کردن یک پیام گروه
➖➖➖
➕ حذف سنجاق ▫️ unpin
➖ برداشتن پیام سنجاق شده گروه روی پیام ریپلی کنید
 🗑 /rmsg 20 ▫️ پاک کردن 20

🗑حذف پیام های گروه تا 300 پیام به جای 20 عددی بین 1 تا 300 را قرار دهید
---------------------------------------------------
/dev
سازنده و ارتباط با سازنده ی ربات👑
---------------------------------------------------

😜راهنمای فان 😜
🔺زمان ▫️time
🔻دریافت تاریخ و ساعت 
➖➖➖
🔺ایدی ▫️id 
🔻مشخصات فردی شما همراه با عکس
➖➖➖
🔺لینک گروه ▫️gp link
🔻دریافت لینک گروه
➖➖➖
🔺تلویزیون▫️tv
🔻تماشای  تلویزون به صورت  آنلاین
➖➖➖
🔺ماهواره
🔻تماشای  ماهواره به صورت  آنلاین
➖➖➖
 ▪️/del➖حذف
▫️حذف پیام + ریپلی
➖➖➖

▪️/setname *TEXT*
▫️تغییر نام گروه
➖➖➖
▪️/Little *NAME*
▫️ کوچک کردن اسم انگلیسی
➖➖➖
▪️/Blue *NAME*
▫️حروف آبی انگلیسی
➖➖➖
▪️/setdescription *TEXT*
▫️تنظیم اطلاعات گروه
➖➖➖
▪️/photo *TEXT*
▫️ساخت لوگو با متن دلخواه شما
➖➖➖
▪️/telfont *TEXT*
▫️ساخت متن با فونت های تلگرام 
➖➖➖
▪️/date
▫️دریافت تاریخ و ساعت به صورت استیکر
➖➖➖
▪️/sticker *TEXT*
▫️ساخت استیکر با متن دلخواه شما [بیش از 20 نوع استیکر]
","MarkDown","true");
}
}else{
SendMessage($chat_id,"این دستور در گروه کاربرد دارد");
}
}
if ($textmassage == "ایدی" or $textmassage == "id") {
    if ($tc == 'group' | $tc == 'supergroup') {
if($tc!="private"){
sendphoto($chat_id,"$firepic","نام گروه : $namegroup
⬛️شناسه گروه : $chat_id
▫️نام شما : $first_name
⬜️نام کاربری : @$username
▪️شناسه شما : $from_id
🔳تعداد پیام های ارسالی در گروه : $tedadmsg");
}
}else{
SendMessage($chat_id,"این دستور در گروه کاربرد دارد");
}
}
if ($textmassage == "زمان" or $textmassage == "time") {
    if ($tc == 'group' | $tc == 'supergroup') {
if($tc!="private"){
SendMessage($chat_id,"زمان در گروه | $chat_id

ساعت 👇
$time
تاریخ 👇
$date","MarkDown","true");
}
}}
//////////////////////motefareqe///////////////////
elseif ( strpos($textmassage , '/rmsg ') !== false or strpos($textmassage , 'پاک کردن ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$num = str_replace(['/rmsg ','پاک کردن '],'',$textmassage);
if ($num <= 300 && $num >= 1){
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"$num  پیام گروه با موفقیت پاک شد",
   ]);
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"عدد وارد شده باید بین 1 تا 300 باشد",
   ]);
}
}
}
elseif($textmassage=="/gplink" or $textmassage=="gp link" or $textmassage=="لینک گروه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlink = file_get_contents("https://api.telegram.org/bot573581376:AAE1oeMN9YN9APvs_3aNhdUCeb5JNo7iaeI/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"لینک جدید برای گروه ساخته شد ✔️
LINK : [ $getlinkde ]",
'reply_to_message_id'=>$message_id,
   ]);
 }
 }
 }
elseif($rt && $textmassage=="/set pin"  or $rt && $textmassage=="pin" or $rt && $textmassage=="سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام  با موفقیت سنجاق شد",
'reply_to_message_id'=>$message_id,
 ]);
 }
}
elseif($textmassage=="/unpin"  or  $textmassage=="unpin"  or  $textmassage=="حذف سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام  با موفقیت از حالت سنجاق برداشته شد",
'reply_to_message_id'=>$message_id,
 ]);
 }
 }
unlink("error_log");
?>