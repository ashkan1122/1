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
define('API_KEY', '[*[TOKEN]*]');
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

function SendMessage($chatid, $text, $parsmde, $disable_web_page_preview, $keyboard)
{
    bot('sendMessage', [
        'chat_id' => $chatid,
        'text' => $text,
        'parse_mode' => $parsmde,
        'disable_web_page_preview' => $disable_web_page_preview,
        'reply_markup' => $keyboard
    ]);
}

function SendMessage2($chatid, $text, $message_id, $parsmde, $disable_web_page_preview, $keyboard)
{
    bot('sendMessage', [
        'chat_id' => $chatid,
        'text' => $text,
        'reply_to_message_id' => $message_id,
        'parse_mode' => $parsmde,
        'disable_web_page_preview' => $disable_web_page_preview,
        'reply_markup' => $keyboard
    ]);
}

function SendPhoto($chatid, $photo, $keyboard, $caption)
{
    bot('SendPhoto', [
        'chat_id' => $chatid,
        'photo' => $photo,
        'caption' => $caption,
        'reply_markup' => $keyboard
    ]);
}



function save($filename, $TXTdata)
{
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    fwrite($myfile, "$TXTdata");
    fclose($myfile);
}
function SendChatAction($chatid, $action)
{
    bot('sendChatAction', [
        'chat_id' => $chatid,
        'action' => $action
    ]);
}

function KickChatMember($chatid, $user_id)
{
    bot('kickChatMember', [
        'chat_id' => $chatid,
        'user_id' => $user_id
    ]);
}

function LeaveChat($chatid)
{
    bot('LeaveChat', [
        'chat_id' => $chatid
    ]);
}

function GetChat($chatid)
{
    bot('GetChat', [
        'chat_id' => $chatid
    ]);
}

function GetChatMembersCount($chatid)
{
    bot('getChatMembersCount', [
        'chat_id' => $chatid
    ]);
}

function GetChatMember($chatid, $userid)
{
    $truechannel = json_decode(file_get_contents('https://api.telegram.org/bot' . API_KEY . "/getChatMember?chat_id=" . $chatid . "&user_id=" . $userid));
    $tch = $truechannel->result->status;
    return $tch;
}


function rwchatcount($id, $count)
{
    file_put_contents("user/$id/chatcount.txt", $count);
}
//=============
$update = json_decode(file_get_contents('php://input'));

$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$from_username = $update->message->from->username;
$from_first = $update->message->from->first_name;
$forward_id = $update->message->forward_from->id;
$forward_chat = $update->message->forward_from_chat;
$forward_chat_username = $update->message->forward_from_chat->username;
$forward_chat_msg_id = $update->message->forward_from_message_id;
$textmessage = $update->message->text;
$message_id = $update->message->message_id;
$datetime = json_decode(file_get_contents("https://api.feelthecode.xyz/date/?timezone=Asia/tehran"));
$channel="[*[CHENNEL]*]";
$token="[*[TOKEN]*]";
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $truechannel->result->status;
$allmember = file_get_contents('data/allmember.txt');
$username = $update->message->from->username;
$name = $update->message->from->first_name;
$signup = file_get_contents("user/" . $from_id . "/signup.txt");
$step = file_get_contents("user/" . $from_id . "/step.txt");
$command = file_get_contents("user/$from_id/command.txt");
$change = file_get_contents("user/" . $from_id . "/change.txt");
$randtrue = file_get_contents("user/" . $from_id . "/rand.txt");
@mkdir('user/' . $from_id);
$chatadd = file_get_contents("data/chat.txt");
$chatadd2 = file_get_contents("data/chat2.txt");
$supportadd = file_get_contents("data/support.txt");
$vips = file_get_contents("data/vips.txt");
$ban = file_get_contents("data/banlist.txt");
$admin = "[*[ADMIN]*]";
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//-----------------------------------------------------------------
$button_signup = json_encode(['keyboard' => [
    [['text' => 'شروع💪']],
], 'resize_keyboard' => true]);
$button_admin = json_encode(['keyboard' => [
    [['text' => '🔙 بازگشت']],
    [['text' => 'پیام همگانی📩'], ['text' => 'فروارد همگانی📬']],
    [['text' => '🗣پیام به کاربر'], ['text' => '📜مشخصات کاربر']],
    [['text' => 'آمار👥']],
    [['text' => '❎بلاک کردن کاربر'], ['text' => '✅آنبلاک کردن کاربر']],
], 'resize_keyboard' => true]);
$button_official = json_encode(['keyboard' => [
    [['text' => '📈 دریافت برنامه']],
    [['text' => '🌟 تغییر مشخصات'], ['text' => '📊 شاخصه من']],
], 'resize_keyboard' => true]);
$button_zir = json_encode(['keyboard' => [
    [['text' => '💯لینک دعوت']],
    [['text' => '⁉️چقدر کاربر آوردم']],
    [['text' => '🔙 بازگشت']],
], 'resize_keyboard' => true]);

//------------------------------------------------------------
if (strpos($ban, "$from_id") !== false) {
    SendMessage($chat_id, "شما از ربات به دلیل رعایت نکردن قوانین بلاک شده اید❗️
لطفا دیگر پیام ندهید❗️");
    return false;
}

$inch = file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getChatMember?chat_id=[*[CHENNEL]*]&user_id=" . $from_id);
if (strpos($inch, '"status":"left"') == true) {
    SendMessage($chat_id, "با سلام😊👋 
 
😅برای استفاده از امکانات دیگر ربات باید در کانال ما عضو شوید تا از اخبار ها مطلع شوید. 
 
😍پس از  اینکه عضو شدید دوباره به ربات مراجعه کرده و دستور زیر را ارسال کنید. 
 
👇 /start 👇", 'html', 'true', json_encode(['inline_keyboard' => [
        [['text' => "ورود به کانال", 'url' => "https://telegram.me/[*[CHENNEL]*]"]]
    ], 'resize_keyboard' => true]));
    return false;
}

if ($warn == '3') {
    $banwarn = fopen("data/banlist.txt", "a") or die("Unable to open file!");
    fwrite($banwarn, "$from_id\n");
    fclose($banwarn);
    SendMessage($chat_id, "اطلاعیه...📛

تعداد اخطار های شما به تعداد 3 رسیده...❗️

شما به دلیل رعایت نکردن قوانین ربات و تکرار آن از ربات بلاک شدید...🚫

لطفا دیگر پیام ندهید...🚫", "html", "true", $button_official);
    return false;
} //=========start
elseif (preg_match('/^\/([Ss]tart)(.*)/', $textmessage)) {
    preg_match('/^\/([Ss]tart)(.*)/', $textmessage, $match);
    $match[2] = str_replace(" ", "", $match[2]);
    $match[2] = str_replace("\n", "", $match[2]);
    if ($match[2] != null) {
        if (strpos($allmember, "$from_id") == false) {
            if ($match[2] != $from_id) {
                if (strpos($gold, "$from_id") == false) {
                    $txxt = file_get_contents('user/' . $match[2] . "/gold.txt");
                    $pmembersid = explode("\n", $txxt);
                    if (!in_array($from_id, $pmembersid)) {
                        $aaddd = file_get_contents('user/' . $match[2] . "/gold.txt");
                        $aaddd .= $from_id . "\n";
                        file_put_contents('user/' . $match[2] . "/gold.txt", $aaddd);
                    }
                    SendMessage($match[2], "🆕 یک نفر با لینک اختصاصی شما وارد ربات شد", "html", "true");
                }
            }
        }
    }
    if (!file_exists("user/$from_id/step.txt")) {
        save("user/$from_id/command.txt", "none");
        save("user/$from_id/change.txt", "none");
        save("user/$from_id/step.txt", "none");
        save("user/$from_id/signup.txt", "none");
        save("user/$from_id/rand.txt", "none");
        save("user/$from_id/mlife.txt", "نامعلوم");
        save("user/$from_id/nam.txt", "نامعلوم");
        save("user/$from_id/senn.txt", "نامعلوم");
        save("user/$from_id/jens.txt", "نامعلوم");
        SendMessage($chat_id, "سلام $first_name 👋🏻

به ربات محاسبه اضافه وزن خوش امدید 🌹

📍 برای محاسبه وزن متعادلت یک سری سوال میپرسم ازت

🌟 خوب شروع میکنیم ...", "html", "true", $button_signup);
    } else {
        save("user/$from_id/step.txt", "none");
		if($bot_type != 'gold'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$adstext,
]);
}
        SendMessage($chat_id, "سلام $first_name 👋🏻

به ربات محاسبه اضافه وزن خوش امدید 🌹

📍 برای محاسبه وزن متعادلت یک سری سوال میپرسم ازت

🌟 خوب شروع میکنیم ...", "html", "true", $button_official);
    }
}
elseif ($textmessage == '🔙 بازگشت' or $textmessage == '/cancel') {
    save("user/$from_id/step.txt", "none");
    save("user/$from_id/command.txt", "none");
    SendMessage($chat_id, "لطفا گزینه مورد نظر را انتخاب کنید...🖲", "html", "true", $button_official);
}
if($textmessage == 'شروع💪' or $textmessage == '🌟 تغییر مشخصات'){
file_put_contents("user/$from_id/command.txt","s1");
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"📍 جنسیت خود را انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
[['text' =>"دختر"],['text' =>"پسر"]],
]])
]);
}
elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmessage)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
elseif($command == 's1'){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
   'text'=>"📍 جنسیت شما $textmessage انتخاب شد
 
🌟 سن خود را به عدد وارد کنید
📌 مثال : 19",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
      [['text'=>'🔙 بازگشت']],
]])
]);
    file_put_contents("user/$from_id/command.txt","s2");    
}
elseif($command == 's2'){
    if($textmessage > 18 && $textmessage < 35){
        $x ="جوانی";
    }
    elseif($textmessage > 35){
        $x = "میان سالی";
    }else{
        $x ="نوجوانی";
    }    
    sendmessage($chat_id,"شما در سن $x هستید 🙂

سن شما با موفقیت $textmessage سال ثبت شد
 
🌟 قد خود را به سانتی متر وارد کنید
📌 مثال :180 ",$botom);
    file_put_contents("user/$from_id/form2.txt","$textmessage");
    file_put_contents("user/$from_id/command.txt","s3");     
}
elseif($command == 's3'){
    if($textmessage > 175){
        $y ="قد بلند";
    }
    elseif($textmessage <160 ){
        $y ="قد کوتاه";
    }else{
        $y ="متناسب";
    }
    sendmessage($chat_id,"شما جزوه افراد $y هستید 😛

📍 قد شما با موفقیت $textmessage سانتی متر ثبت شد
 
🌟 وزن خود را به کیلوگرم وارد کنید
📌 مثال : 75 ",$botom);
    file_put_contents("user/$from_id/form3.txt","$textmessage"); 
    file_put_contents("user/$from_id/command.txt","s4");      
}
elseif($command == 's4'){
    file_put_contents("user/$from_id/form4.txt","$textmessage"); 
    file_put_contents("user/$from_id/command.txt","none");      
    $gad =file_get_contents("user/$from_id/form3.txt");
    $vazn =file_get_contents("user/$from_id/form4.txt");
    $sen =file_get_contents("user/$from_id/form2.txt");
	$shakhesa = $vazn * 10000 / $gad / $gad ;
	$shakhes = round($shakhesa);
		if($shakhes > 25 && $shakhes < 30){
		$vaz ="شما دچار کمی اضافه وزن هستید";
	}
	elseif($shakhes > 30){
		$vaz ="شما دچار چاقی بیش از اندازه هستید";
	}
	elseif($shakhes > 18 && $shakhes < 25){
		$vaz ="شما در وضعیت مناسب قرار دارید و رژیم خاصی نیاز ندارید";
	}
    elseif($shakhes >14  && $shakhes <18 ){
	$vaz ="شما کمی کمبود وزن دارید";
}
	elseif($shakhes <14 ){
		$vaz ="شما دچار کمبود وزن و لاغر هستید";
	}
	$vaznd = $gad - 105 ;
	$ezafe = $vazn - $vaznd ;
	$javabasli = "📍 شاخصه توده بدنی شما :
  
🔆 وضعیت وزن : $vaz
🔘شاخصه توده بدنی شما : $shakhes
🌈 شاخصه توده بدنی ایده ال برای سن شما : 22
⭐️ وزن ایده ال : وزن ایده ال برای شما $vaznd است شما نسب به وزن ایده ال $ezafe کیلوگرم اضافه وزن دارد

ما نگران نباش با برنامه رژیمی که بهت میدم میتونی تو کوتاه ترین زمان وزنتو به $vaznd کیلوگرم برسونی 😍 

مطمئن باش اگه الان به هر بهونه‌ای نخوای رژیم رو شروع کنی ، عید یاد الان میفتی و میگی کاش رژیم رو میگرفتم 😊 ولی اگه یکم به خودت بیای میتونی توی مهمونی های عید همه رو شگفت زده کنی !!

فقط کافیه روی دکمه دریافت برنامه کلیک کنی 👇
";
file_put_contents("user/$from_id/dshakes.txt","$javabasli");
$we = file_get_contents("user/$from_id/dshakes.txt");
    SendMessage($chat_id, "🌟 منتظر باشید ربات در حال پردازش شاخصه توده بدنی و وزن شماست ...", "html", "true", $button_official);
	SendMessage($chat_id, "$we", "html", "true", $button_official);
}//-----------------------------------------------------------------------
elseif ($textmessage == '📊 شاخصه من') {
$we = file_get_contents("user/$from_id/dshakes.txt");
    SendMessage($chat_id, "🌟 منتظر باشید ربات در حال پردازش شاخصه توده بدنی و وزن شماست ...", "html", "true", $button_official);
	SendMessage($chat_id, "$we", "html", "true", $button_official);
}
elseif ($textmessage == '📈 دریافت برنامه' or $textmessage == '/zirmajmooe') {
    $gold = file_get_contents("user/" . $from_id . "/gold.txt");
    $oldertega = file_get_contents("user/" . $from_id . "/oldertega.txt");
    $member_id = explode("\n", $gold);
    $mmemcount = count($member_id) - 1;
    if ($mmemcount > 5) {
        if ($oldertega != 'false') {
            $ertega = fopen("data/vips.txt", "a") or die("Unable to open file!");
            fwrite($ertega, "$from_id\n");
            fclose($ertega);
			$barname = file_get_contents("data/$from_id/ch.txt");
            SendMessage($chat_id, "$barname", "html", "true", $button_official);
            save("user/$from_id/karbara.txt", "0");
            save("user/$from_id/oldertega.txt", "false");
        } else {
            save("user/$from_id/step.txt", "none");
            SendMessage($chat_id, "شما قبلا از این امکان استفاده کردید❗️", "html", "true", $button_zir);
        }
    } else {
        SendMessage($chat_id, "کاربر عزیز...
برای ذریافت برنامه ی رژیم خود باید 5 نفر از طریق لینک شما وارد ربات شوند✅
ولی تعداد افرادی که با لینک شما به ربات پیوسته اند = ($mmemcount) میباشد✅", "html", "true", $button_zir);
    }
}
 elseif ($textmessage == '💯لینک دعوت') {
     $caption = "[ Photo ]
تو کوتاه ترین زمان به وزن ایده آل خودت برس !😍

ربات محاسبه وزن ایده ال و دریافت برنامه برای وزن ایده ال !😎

🔗 کافیه همین الان شروع کنی :

telegram.me/[*[BOT]*]/?start=$chat_id";
 $photo ="";//آدرس عکس رو ستکنید
 bot ("Sendphoto", [
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 'reply_markup'=>$button_official,
 ]);
SendMessage($chat_id, "کاربر عزیز با اشتراک گذاری پیام بالا 🔻 میتوانید زیر مجموعه های خود را افزایش دهید❗️", "html", "true", $button_zir);
}
elseif ($textmessage == '⁉️چقدر کاربر آوردم') {
    $gold = file_get_contents("user/" . $from_id . "/gold.txt");
    $member_id = explode("\n", $gold);
    $mmemcount = count($member_id) - 1;
    SendMessage($chat_id, "☢کاربر عزیز
🆔تعداد افرادی که با لینک شما به ربات پیوسته اند : ($mmemcount)", "html", "true", $button_zir);
}







elseif ($textmessage == '/panel' and $from_id == $admin) {
    SendMessage($chat_id, "به پنل مدیریت خوش اومدید", "html", "true", $button_admin);
} elseif ($textmessage == 'آمار👥' and $from_id == $admin) {
    $txtt = file_get_contents('data/allmember.txt');
    $member_id = explode("\n", $txtt);
    $mmemcount = count($member_id) - 1;
    SendMessage($chat_id, "کل کاربران: $mmemcount نفر", "html", "true");
} elseif ($textmessage == 'فروارد همگانی📬' and $from_id == $admin) {
    file_put_contents("user/" . $from_id . "/command.txt", "s2a fwd");
    SendMessage($chat_id, "پیام مورد نظر را فوروارد کنید", "html", "true", $button_back);
} elseif ($command == 's2a fwd' and $from_id == $admin) {
    file_put_contents("user/" . $from_id . "/command.txt", "none");
    SendMessage($chat_id, "پیام شما در صف ارسال قرار گرفت.", "html", "true", $button_admin);
    $all_member = fopen("data/allmember.txt", 'r');
    while (!feof($all_member)) {
        $user = fgets($all_member);
        ForwardMessage($user, $admin, $message_id);
    }
} elseif ($textmessage == 'پیام همگانی📩' and $from_id == $admin) {
    file_put_contents("user/" . $from_id . "/command.txt", "s2a");
    SendMessage($chat_id, "پیامتون رو وارد کنید", "html", "true", $button_back);
} elseif ($command == 's2a' and $from_id == $admin) {
    file_put_contents("user/" . $from_id . "/command.txt", "none");
    SendMessage($chat_id, "پیام شما در صف ارسال قرار گرفت.", "html", "true", $button_admin);
    $all_member = fopen("data/allmember.txt", 'r');
    while (!feof($all_member)) {
        $user = fgets($all_member);
        if ($sticker_id != null) {
            SendSticker($user, $stickerid);
        } elseif ($videoid != null) {
            SendVideo($user, $videoid, $caption);
        } elseif ($voiceid != null) {
            SendVoice($user, $voiceid, '', $caption);
        } elseif ($fileid != null) {
            SendDocument($user, $fileid, '', $caption);
        } elseif ($musicid != null) {
            SendAudio($user, $musicid, '', $caption);
        } elseif ($photoid != null) {
            SendPhoto($user, $photoid, '', $caption);
        } elseif ($textmessage != null) {
            SendMessage($user, $textmessage, "html", "true");
        }
    }
} elseif ($textmessage == '❗️اخطار به کاربر' && $from_id == $admin) {
    save("user/$from_id/command.txt", "warn");
    SendMessage($chat_id, "شناسه کاربر را وارد کنید :", "html", "true", $button_back);
} elseif ($command == 'warn') {
    if (file_exists("user/$textmessage/step.txt")) {
        $warnk = file_get_contents("user/" . $textmessage . "/warn.txt");
        $newwarn = $warnk + 1;
        save("user/$textmessage/warn.txt", $newwarn);
        save("user/$from_id/command.txt", "none");
        $warnuser = file_get_contents("user/" . $textmessage . "/warn.txt");
        SendMessage($chat_id, "به کاربر مورد نظر اخطار داده شد.
تعداد اخطار های کاربر : $warnuser", "html", "true", $button_admin);
        SendMessage($textmessage, "شما اخطار جدید دریافت کردید❗️

تعداد اخطار های شما : $warnuser");
        save("user/$from_id/sendwarn.txt", "none");
    } else {
        save("user/$from_id/command.txt", "none");
        SendMessage($chat_id, "کاربر مورد نظر یافت نشد❗️");
    }
} elseif ($textmessage == '✅آنبلاک کردن کاربر' && $from_id == $admin) {
    SendMessage($chat_id, "جهت آنبلاک کردن کاربر از دستور زیر استفاده کنید 
/unban Userid");
} elseif ($textmessage == '❎بلاک کردن کاربر' && $from_id == $admin) {
    SendMessage($chat_id, "جهت بلاک کردن کاربر از دستور زیر استفاده کنید 
/ban Userid");
} elseif (strpos($textmessage, "/ban") !== false && $from_id == $admin) {
    $bban = str_replace('/ban', '', $textmessage);
    if ($bban != '') {
        $myfile2 = fopen("data/banlist.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$bban\n");
        fclose($myfile2);
        SendMessage($chat_id, "کاربر $bban با موفقیت مسدود شد🍃");
    }
} elseif (strpos($textmessage, "/unban") !== false && $from_id == $admin) {
    $unbban = str_replace('/unban', '', $textmessage);
    if ($unbban != '') {
        $newlist = str_replace($unbban, "", "data/banlist.txt");
        save("data/banlist.txt", $newlist);
        SendMessage($chat_id, "کاربر $unbban با موفقیت از مسدودیت خارج شد🍃");
    }
} elseif ($textmessage == '🗣پیام به کاربر' && $from_id == $admin) {
    save("user/$from_id/command.txt", "sendpm");
    SendMessage($chat_id, "شناسه کاربر را وارد کنید", "html", "true", $button_back);
} elseif ($command == 'sendpm') {
    $senduser = $textmessage;
    if (file_exists('user/' . $senduser . "/step.txt")) {
        save("user/$from_id/command.txt", "sendpm2");
        SendMessage($chat_id, "پیام خود را وارد کنید :");
    }
} elseif ($command == 'sendpm2') {
    $sendtext = $textmessage;
    SendMessage($senduser, "🗳پیام جدید از طرف پشتیبانی :

$sendtext");
    SendMessage($chat_id, "ارسال شد.", "html", "true", $button_back);
} elseif ($textmessage == '📜مشخصات کاربر' && $from_id == $admin) {
    save("user/$from_id/command.txt", "info");
    SendMessage($chat_id, "شناسه کاربر را وارد کنید :", "html", "true", $button_back);
} 
elseif ($command == 'info') {
    if (file_exists("user/$textmessage/step.txt")) {
        save("user/$from_id/command.txt", "none");
        $namu = file_get_contents("user/" . $textmessage . "/nam.txt");
        $mlifeu = file_get_contents("user/" . $textmessage . "/mlife.txt");
        $sennu = file_get_contents("user/" . $textmessage . "/senn.txt");
        $jensu = file_get_contents("user/" . $textmessage . "/jens.txt");
        SendMessage($chat_id, "مشخصات کاربر :

نام : $namu
جنسیت : $jensu 
سن : $sennu 
محل زندگی = $mlifeu", "html", "true", $button_admin);
    } else {
        SendMessage($chat_id, "کاربر مورد نظر یافت نشد❗️", "html", "true", $button_back);
    }
} elseif ($textmessage == '☢vip کردن' && $from_id == $admin) {
    save("user/$from_id/command.txt", "addvip");
    SendMessage($chat_id, "شناسه کاربر را وارد کنید :", "html", "true", $button_back);
} elseif ($command == 'addvip') {
    if (file_exists("user/$textmessage/step.txt")) {
        save("user/$from_id/command.txt", "none");
        $myfile2 = fopen("data/vips.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$textmessage\n");
        fclose($myfile2);
        SendMessage($chat_id, "کاربر مورد نظر ویژه شد✅", "html", "true", $button_admin);
        SendMessage($textmessage, "حساب شما توسط پشتیبانی ویژه شد❗️", "html", "true");
    } else {
        SendMessage($chat_id, "کاربر مورد نظر یافت نشد❗️");
    }
} elseif ($textmessage == '❌حذف vip' && $from_id == $admin) {
    save("user/$from_id/command.txt", "delvip");
    SendMessage($chat_id, "شناسه کاربر را وارد کنید :", "html", "true", $button_back);
} elseif ($command == 'delvip') {
    if (file_exists("user/$textmessage/step.txt")) {
        $newlist = str_replace($textmessage, "", $vips);
        save("data/vips.txt", $newlist);
        SendMessage($chat_id, "کاربر مورد نظر از لیست اعضای ویژه حذف شد✅", "html", "true", $button_admin);
        SendMessage($chat_id, "حساب شما توسط پشتیبانی از لیست اعضای ویژه حذف شد❗️", "html", "true");
    } else {
        SendMessage($chat_id, "کاربر مورد نظر یافت نشد❗️");
    }
} 
if (!file_exists('user/' . $from_id)) {
    mkdir('user/' . $from_id);
}
if (!file_exists('user/' . $from_id . "/warn.txt")) {
    file_put_contents('user/' . $from_id . "/warn.txt", "0");
}
$txxt = file_get_contents('data/allmember.txt');
$pmembersid = explode("\n", $txxt);
if (!in_array($chat_id, $pmembersid)) {
    $aaddd = file_get_contents('data/allmember.txt');
    $aaddd .= $chat_id . "\n";
    file_put_contents('data/allmember.txt', $aaddd);
}
unlink("error_log");

?>