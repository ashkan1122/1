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
$API_KEY = '[*[TOKEN]*]'; //توکن ربات بدون @ بزارید
$admin = '[*[ADMIN]*]'; // ایدی عددی ادمین ربات
$bot_id = '[*[BOT]*]'; // ایدی ربات بدون @ بزارید
$channel = '[*[CHANNEL]*]'; // ایدی کانال قفل بدون @ بزارید
define('API_KEY', $API_KEY);
function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}
function SendMessage($chat_id, $text, $key){
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
		'parse_mode' => 'Html',
		'disable_web_page_preview' => true,
        'reply_markup' => $key
    ]);
}
function SendPhoto($chat_id, $photo, $action){
    bot('sendphoto', [
        'chat_id' => $chat_id,
        'photo' => $photo,
        'caption' => $action,
    ]);
}
function Forward($chat_id,$from_id,$massege_id){
    bot('ForwardMessage',[
    'chat_id'=>$chat_id,
    'from_chat_id'=>$from_id,
    'message_id'=>$massege_id
    ]);
}
function deletemessage($chat_id, $message_id){
    bot('deletemessage', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
    ]);
}
function SendAction($chat_id,$message){
	bot('answercallbackquery', [
        'callback_query_id' => $chat_id,
        'text' => $message,
        'show_alert' => true,
    ]);
}
function editmessagetext($chatid,$message_id,$text,$key){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$message_id,
    'text'=>$text,
    'reply_markup'=>$key,
	]);
}
##########################
$button_official = json_encode(['keyboard' => [
[['text' => '♻️ دریافت بنر مخصوص من 😎']],
[['text' => '〽️ تنظیم سوالات'],['text' => '🗣 درباره ربات']]
],'resize_keyboard' =>true]);
$button_ozv = json_encode(['inline_keyboard' => [
[['text' => 'بررسی عضویت و فعال سازی','callback_data' => 'ozv']]]]);
$button_back = json_encode(['inline_keyboard' => [
[['text' => '🚫 ولش، منصرف شدم','callback_data' => 'cancel']]]]);
$button_edit = json_encode(['inline_keyboard' => [
[['text' => 'ویرایش سوال 1','callback_data' => 'e1'],['text' => 'ویرایش سوال 2','callback_data' => 'e2']],
[['text' => 'ویرایش سوال 3','callback_data' => 'e3'],['text' => 'ویرایش سوال 4','callback_data' => 'e4']],
[['text' => 'ویرایش سوال 5','callback_data' => 'e5'],['text' => 'ویرایش سوال 6','callback_data' => 'e6']],
[['text' => 'ویرایش سوال 7','callback_data' => 'e7'],['text' => 'ویرایش سوال 8','callback_data' => 'e8']],
[['text' => '♻️ بازگشت به تنظیمات اولیه ♻️','callback_data' => 'reset']]
]]);
$button_notype = json_encode(['keyboard' =>[
[['text' => 'تایپ نمیکنم، برو سوال بعدی 👈']]
],'resize_keyboard'=>true,'one_time_keyboard'=>true]);
$button_soal = json_encode(['keyboard' =>[
[['text' => '🔮 آغاز صندلی داغ']]
],'resize_keyboard'=>true,'one_time_keyboard'=>true]);
$button_admin = json_encode(['keyboard' =>[
[['text' => 'امار ربات']],
[['text' => 'پیام همگانی'],['text' => 'فروارد همگانی']]
],'resize_keyboard'=>true]);
$button_back_admin = json_encode(['keyboard' =>[
[['text' => 'برگشت']]
],'resize_keyboard'=>true]);
##########################
$update = json_decode(file_get_contents('php://input'));
$text = $update->message->text;
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$chid = $update->callback_query->id;
$data = $update->callback_query->data;
$first_name = $update->message->from->first_name;
$chatid = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$truechannel = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY."/getChatMember?chat_id=@$channel&user_id=".$chat_id));
$tch = $truechannel->result->status;
$truechannel2 = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY."/getChatMember?chat_id=@$channel&user_id=".$chatid));
$tch2 = $truechannel2->result->status;
$members = file_get_contents('members.txt');
$memlist = explode("\n",$members);
$inviter = file_get_contents("data/$from_id/inviter.txt");
$command = file_get_contents("data/$from_id/command.txt");
$list = file_get_contents('data/'.$from_id.'/list.txt');
$soal1 = file_get_contents("data/$inviter/soal1.txt");
$soal2 = file_get_contents("data/$inviter/soal2.txt");
$soal3 = file_get_contents("data/$inviter/soal3.txt");
$soal4 = file_get_contents("data/$inviter/soal4.txt");
$soal5 = file_get_contents("data/$inviter/soal5.txt");
$soal6 = file_get_contents("data/$inviter/soal6.txt");
$soal7 = file_get_contents("data/$inviter/soal7.txt");
$soal8 = file_get_contents("data/$inviter/soal8.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
##########################
if($text == '/start' or $text == '/Start') {
	if($tch == 'left'){
		SendMessage($chat_id,"سلام ‌ $first_name عزیز 🌹 به خانواده میلیونی ما خوش اومدی

برای استفاده از ربات هیجان انگیز ما ابتدا باید در کانال زیر  عضو بشی👇

👉 @$channel   @$channel 
👉 @$channel   @$channel 

بعد از عضویت《بررسی عضویت و فعال سازی》 را لمس کنید تا ربات شما فعال شود 👇",$button_ozv);
	}else{
		if($bot_type != 'gold'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$adstext,
]);
}
		SendMessage($chat_id,"سلام $first_name عزیز 🌹

به ربات صندلی داغ خوش اومدی !😀
این ربات یک سری سوال داره که حتما دوست داری از بقیه تو سال جدید بپرسی!

سوالای پیش فرض رو نگاه کن جوابای جالبی قطعا میگیری :))

هروقت جواب دادن ما جوابارو برات میفرستیم😉

پس‌ سریع لینکتو بگیر 👇",$button_official);
	}
	if(!in_array($from_id,$memlist)){
		mkdir('data/'.$from_id);
		$members .= $from_id . "\n";
		file_put_contents('members.txt',$members);
		file_put_contents('data/'.$from_id.'/soal1.txt','1.اسممو تو گوشیت چی سیو کردی؟');
		file_put_contents('data/'.$from_id.'/soal2.txt','2.بدترین خصوصیت من؟');
		file_put_contents('data/'.$from_id.'/soal3.txt','3.بهترین خصوصیتم');
		file_put_contents('data/'.$from_id.'/soal4.txt','4.بزرگترین آرزوت');
		file_put_contents('data/'.$from_id.'/soal5.txt','5.از ۱ تا ۱۰ بم چند میدی؟');
		file_put_contents('data/'.$from_id.'/soal6.txt','6.اگه امسال کاری کردم از دستم ناراحت شدی یگو همین الان..!');
		file_put_contents('data/'.$from_id.'/soal7.txt','7.کاری کرده باشی خبر نداشته باشم؟ اعتراف کن 😐');
		file_put_contents('data/'.$from_id.'/soal8.txt','8.آخرین حرفت؟');
	}
	file_put_contents("data/$from_id/command.txt",'none');
}
elseif (strpos($text, '/start') !== false ) {
	$newid = str_replace("/start ", "", $text);
	if ($from_id == $newid) {
           	file_put_contents("data/$from_id/command.txt",'none');
			SendMessage($chat_id,"چجوری میخوای خودت به خودت جواب بدی؟ 🤔",$button_official);
	}
	else{
			SendMessage($chat_id,"سلام ‌ $first_name عزیز  🌹
شما در حال جواب دادن به سوالات صندلی داغِ  <a href='tg://user?id=$newid'>$newid</a>  هستید! 😉

بعد از پاسخ دادن به سوالات میتونید لینک شخصی خودتون رو بگیرید تا بقیه هم به سوالات صندلی داغ شما پاسخ بدن☺️",$button_soal);
			SendMessage($chat_id,"روی دکمه آغاز کلیک کن 💜 👇",$button_soal);
			file_put_contents("data/$from_id/command.txt",'soal');
			file_put_contents("data/$from_id/inviter.txt",$newid);
			if(!in_array($from_id,$memlist)){
		mkdir('data/'.$from_id);
		$members .= $from_id . "\n";
		file_put_contents('members.txt',$members);
		file_put_contents('data/'.$from_id.'/soal1.txt','1.اسممو تو گوشیت چی سیو کردی؟');
		file_put_contents('data/'.$from_id.'/soal2.txt','2.بدترین خصوصیت من؟');
		file_put_contents('data/'.$from_id.'/soal3.txt','3.بهترین خصوصیتم');
		file_put_contents('data/'.$from_id.'/soal4.txt','4.بزرگترین آرزوت');
		file_put_contents('data/'.$from_id.'/soal5.txt','5.از ۱ تا ۱۰ بم چند میدی؟');
		file_put_contents('data/'.$from_id.'/soal6.txt','6.اگه امسال کاری کردم از دستم ناراحت شدی یگو همین الان..!');
		file_put_contents('data/'.$from_id.'/soal7.txt','7.کاری کرده باشی خبر نداشته باشم؟ اعتراف کن 😐');
		file_put_contents('data/'.$from_id.'/soal8.txt','8.آخرین حرفت؟');
			}
			SendMessage($newid,"
👥 کاربر ‌<a href='tg://user?id=$from_id'>$from_id</a> با لینکت وارد ربات شد!

🗣 اگه به سوالات پاسخ بده جوابا برات ارسال میشه! پس منتظر باش!

⚠️ حواست باشه برای دریافت سوالا حتما باید توی کانال
Join:  @$channel 
عضو باشی! اگر عضو کانال نباشی جوابی برات ارسال نمیشه.");
	}
}

elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
elseif($data == 'ozv'){
	if($tch2 == 'left'){
		SendAction($chid,"⚠️ متاسفانه عضویت شما در کانال @$channel تایید نشد!");
	}else{
		deletemessage($chatid,$message_id2);
		SendAction($chid,"✅ عضویت شما در کانال @$channel تایید شد. هم اکنون میتوانید از ربات استفاده کنید.");
	}
}
elseif($data == 'e1' or $data == 'e2' or $data == 'e3' or $data == 'e4' or $data == 'e5' or $data == 'e6' or $data == 'e7' or $data == 'e8'){
	editmessagetext($chatid,$message_id2,"سوال جدید را در قالب یک کتن ارسال کنید",$button_back);
	file_put_contents('data/'.$chatid.'/command.txt',$data);
}
elseif($data == 'cancel'){
$soal1 = file_get_contents("data/$chatid/soal1.txt");
$soal2 = file_get_contents("data/$chatid/soal2.txt");
$soal3 = file_get_contents("data/$chatid/soal3.txt");
$soal4 = file_get_contents("data/$chatid/soal4.txt");
$soal5 = file_get_contents("data/$chatid/soal5.txt");
$soal6 = file_get_contents("data/$chatid/soal6.txt");
$soal7 = file_get_contents("data/$chatid/soal7.txt");
$soal8 = file_get_contents("data/$chatid/soal8.txt");
	file_put_contents('data/'.$chatid.'/command.txt','none');
	editmessagetext($chatid,$message_id2,"🎫 قصد تغییر سوال چندم را دارید ؟
❓ سوالات فعلی:

$soal1\n$soal2\n$soal3\n$soal4\n$soal5\n$soal6\n$soal7\n$soal8\n\nتوجه : اگر سوالی را خودتان تنظیم نکنید سوالات پیش فرض ربات از آنها پرسیده خواهد شد پس جای نگرانی نیست 😉",$button_edit);
}
elseif($data == 'reset'){
	file_put_contents('members.txt',$members);
		file_put_contents('data/'.$chatid.'/soal1.txt','1.اسممو تو گوشیت چی سیو کردی؟');
		file_put_contents('data/'.$chatid.'/soal2.txt','2.بدترین خصوصیت من؟');
		file_put_contents('data/'.$chatid.'/soal3.txt','3.بهترین خصوصیتم');
		file_put_contents('data/'.$chatid.'/soal4.txt','4.بزرگترین آرزوت');
		file_put_contents('data/'.$chatid.'/soal5.txt','5.از ۱ تا ۱۰ بم چند میدی؟');
		file_put_contents('data/'.$chatid.'/soal6.txt','6.اگه امسال کاری کردم از دستم ناراحت شدی یگو همین الان..!');
		file_put_contents('data/'.$chatid.'/soal7.txt','7.کاری کرده باشی خبر نداشته باشم؟ اعتراف کن 😐');
		file_put_contents('data/'.$chatid.'/soal8.txt','8.آخرین حرفت؟');
$soal1 = file_get_contents("data/$chatid/soal1.txt");
$soal2 = file_get_contents("data/$chatid/soal2.txt");
$soal3 = file_get_contents("data/$chatid/soal3.txt");
$soal4 = file_get_contents("data/$chatid/soal4.txt");
$soal5 = file_get_contents("data/$chatid/soal5.txt");
$soal6 = file_get_contents("data/$chatid/soal6.txt");
$soal7 = file_get_contents("data/$chatid/soal7.txt");
$soal8 = file_get_contents("data/$chatid/soal8.txt");
	file_put_contents('data/'.$chatid.'/command.txt','none');
	editmessagetext($chatid,$message_id2,"🎫 قصد تغییر سوال چندم را دارید ؟
❓ سوالات فعلی:

$soal1\n$soal2\n$soal3\n$soal4\n$soal5\n$soal6\n$soal7\n$soal8\nتوجه : اگر سوالی را خودتان تنظیم نکنید سوالات پیش فرض ربات از آنها پرسیده خواهد شد پس جای نگرانی نیست 😉",$button_edit);
SendAction($chid,"♻️ سوال ها به تنظیمات اولیه تغییر کرد");
}
elseif($tch == 'left'){
	SendMessage($chat_id,"سلام ‌ $first_name عزیز 🌹 به خانواده میلیونی ما خوش اومدی

برای استفاده از ربات هیجان انگیز ما ابتدا باید در کانال زیر  عضو بشی👇

👉 @$channel   @$channel 
👉 @$channel   @$channel 

بعد از عضویت《بررسی عضویت و فعال سازی》 را لمس کنید تا ربات شما فعال شود 👇",$button_ozv);	
}
elseif($text == '🔮 آغاز صندلی داغ' && $command == 'soal'){
	SendMessage($chat_id,$soal1,$button_notype);
	file_put_contents("data/$from_id/command.txt",'10');
}
elseif($command == '10' or $command == '20' or $command == '30' or $command == '40' or $command == '50' or $command == '60' or $command == '70'){
	$soal_az = array('10','20','30','40','50','60','70');
	$soal_be = array($soal2,$soal3,$soal4,$soal5,$soal6,$soal7,$soal8);
	$soal = str_replace($soal_az,$soal_be,$command);
	SendMessage($chat_id,$soal,$button_notype);
	$b = array('10','20','30','40','50','60','70');
	$c = array('1','2','3','4','5','6','7');
	$a = str_replace($b,$c,$command);
	$j = file_get_contents('data/'.$inviter.'/soal'.$a.'.txt');
	file_put_contents('data/'.$from_id.'/list.txt',"$list\n🔍سوال: $j
✍️ پاسخ: $text\n〰〰〰〰〰〰〰〰〰");
	file_put_contents("data/$from_id/command.txt",$command + 10);
}
elseif($command == '80'){
	$j = file_get_contents('data/'.$inviter.'/soal8.txt');
	$list = "$list\n🔍سوال: $j
✍️ پاسخ: $text\n";
    $pasokh = "✍️ کاربر  <a href='tg://user?id=$from_id'>$first_name</a>  با موفقیت به سوالات شما پاسخ داد:
$list";
SendMessage($inviter,$pasokh);
unlink('data/'.$from_id.'/inviter.txt');
unlink('data/'.$from_id.'/list.txt');
file_put_contents("data/$from_id/command.txt",'none');
SendMessage($chat_id,"جواب ها ارسال شد ✅

تو هم اگه میخای صندلی داغ داشته باشی و بقیه به سوالات جواب بدن لینک شخصیتو بگیر و واسه دوستات بفرست!☺️

هر وقت جواب دادن ما جوابارو واست میفرستیم 😉",$button_official);
}
elseif($command == 'e1' or $command == 'e2' or $command == 'e3' or $command == 'e4' or $command == 'e5' or $command == 'e6' or $command == 'e7' or $command == 'e8'){
	$az = array('e1','e2','e3','e4','e5','e6','e7','e8');
	$be = array('soal1','soal2','soal3','soal4','soal5','soal6','soal7','soal8');
	$to = str_replace($az,$be,$command);
	file_put_contents('data/'.$from_id.'/'.$to.'.txt',$text);
$soal1 = file_get_contents("data/$from_id/soal1.txt");
$soal2 = file_get_contents("data/$from_id/soal2.txt");
$soal3 = file_get_contents("data/$from_id/soal3.txt");
$soal4 = file_get_contents("data/$from_id/soal4.txt");
$soal5 = file_get_contents("data/$from_id/soal5.txt");
$soal6 = file_get_contents("data/$from_id/soal6.txt");
$soal7 = file_get_contents("data/$from_id/soal7.txt");
$soal8 = file_get_contents("data/$from_id/soal8.txt");
	file_put_contents('data/'.$from_id.'/command.txt','none');
	SendMessage($chat_id,"🎫 قصد تغییر سوال چندم را دارید ؟
❓ سوالات فعلی:

$soal1\n$soal2\n$soal3\n$soal4\n$soal5\n$soal6\n$soal7\n$soal8\n\nتوجه : اگر سوالی را خودتان تنظیم نکنید سوالات پیش فرض ربات از آنها پرسیده خواهد شد پس جای نگرانی نیست 😉",$button_edit);
}
elseif($text == '〽️ تنظیم سوالات'){
$soal1 = file_get_contents("data/$from_id/soal1.txt");
$soal2 = file_get_contents("data/$from_id/soal2.txt");
$soal3 = file_get_contents("data/$from_id/soal3.txt");
$soal4 = file_get_contents("data/$from_id/soal4.txt");
$soal5 = file_get_contents("data/$from_id/soal5.txt");
$soal6 = file_get_contents("data/$from_id/soal6.txt");
$soal7 = file_get_contents("data/$from_id/soal7.txt");
$soal8 = file_get_contents("data/$from_id/soal8.txt");
	file_put_contents('data/'.$from_id.'/command.txt','none');
	SendMessage($chat_id,"🎫 قصد تغییر سوال چندم را دارید ؟
❓ سوالات فعلی:

$soal1\n$soal2\n$soal3\n$soal4\n$soal5\n$soal6\n$soal7\n$soal8\n\nتوجه : اگر سوالی را خودتان تنظیم نکنید سوالات پیش فرض ربات از آنها پرسیده خواهد شد پس جای نگرانی نیست 😉",$button_edit);
}
elseif($text == '🗣 درباره ربات'){
SendMessage($chat_id,"این ربات یه نوع ربات صندلی داغه که یه سری سوال داغ توش گذاشتیم 😜
شما میتونید  با گرفتن لینک شخصیتون این سوالارو از دوستاتون بپرسید☺️
هر وقت جواب بده ما جواب هارو برات سریع میفرستیم😉
سریع لینکتو بگیر و شروع کن!",$button_official);	
SendMessage($chat_id,"سوالاتتو تو ربات ذخیره کن و لینک مخصوص خودتو بگیر و برای دوستات بفرست تا جواب سوالاتتو بگیری😜",$button_official);	
}
elseif($text == '♻️ دریافت بنر مخصوص من 😎'){
SendMessage($chat_id,"
t.me/$bot_id?start=$chat_id
👆 لینک اختصاصی شما ساخته شد 😎

بنر بالا ☝️ رو که حاوی لینک مخصوص خود شماست و سوال‌هایی که خودتون طراحی کردین داخلش هست رو برای دوستات یا گروه ها ارسال کن و یکمم از ربات تعریف کن تا بیان به سوالا پاسخ بدن ... هر کس سوالاتو جواب بده فورا برات میفرستمشون 😬",$button_official);
}
if($chat_id == $admin){
	if($text == '/panel'){
		SendMessage($chat_id,"به پنل مدیریت خوش امدید",$button_admin);
		file_put_contents("data/$from_id/command.txt",'none');
	}
	elseif($text == 'برگشت'){
		SendMessage($chat_id,"به منوی اصلی برگشتید",$button_admin);
		file_put_contents("data/$from_id/command.txt",'none');
	}
	elseif($text == 'امار ربات'){
$member_id = explode("\n", $members);
 $member = count($member_id) - 1;
SendMessage($chat_id,"تعداد اعضا ربات: $member",$button_admin);		
	}
	elseif($text == 'پیام همگانی'){
	SendMessage($chat_id,"پیام خود را بفرستید",$button_back_admin);
	file_put_contents("data/$from_id/command.txt",'send');	
	}
	elseif($command == 'send'){
		SendMessage($chat_id,"در حال ارسال . . .",$button_admin);
	file_put_contents("data/$from_id/command.txt",'none');
$forp = fopen("members.txt", 'r'); 
while( !feof( $forp)) { 
$All = fgets( $forp); 
SendMessage($All,$text);
	}
SendMessage($chat_id,"ارسال شد",$button_admin);
	}
	elseif($text == 'فروارد همگانی'){
	SendMessage($chat_id,"پیام خود را بفرستید",$button_back_admin);
	file_put_contents("data/$from_id/command.txt",'fwd');	
	}
	//---------
	elseif($command == 'fwd'){
		SendMessage($chat_id,"در حال ارسال . . .",$button_admin);
	file_put_contents("data/$from_id/command.txt",'none');
	$forp = fopen("members.txt", 'r'); 
while( !feof( $forp)) { 
$fakar = fgets( $forp); 
	Forward($fakar,$chat_id,$message_id);
}
SendMessage($chat_id,"ارسال شد",$button_admin);	
}
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
?>
