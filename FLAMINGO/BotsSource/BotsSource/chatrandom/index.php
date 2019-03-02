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

function ForwardMessage($chatid, $from_chat, $message_id)
{
    bot('ForwardMessage', [
        'chat_id' => $chatid,
        'from_chat_id' => $from_chat,
        'message_id' => $message_id
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

function SendAudio($chatid, $audio, $keyboard, $caption, $sazande, $title)
{
    bot('SendAudio', [
        'chat_id' => $chatid,
        'audio' => $audio,
        'caption' => $caption,
        'performer' => $sazande,
        'title' => $title,
        'reply_markup' => $keyboard
    ]);
}

function save($filename, $TXTdata)
{
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    fwrite($myfile, "$TXTdata");
    fclose($myfile);
}

function SendDocument($chatid, $document, $keyboard, $caption)
{
    bot('SendDocument', [
        'chat_id' => $chatid,
        'document' => $document,
        'caption' => $caption,
        'reply_markup' => $keyboard
    ]);
}

function SendSticker($chatid, $sticker, $keyboard)
{
    bot('SendSticker', [
        'chat_id' => $chatid,
        'sticker' => $sticker,
        'reply_markup' => $keyboard
    ]);
}

function SendVideo($chatid, $video, $keyboard, $duration)
{
    bot('SendVideo', [
        'chat_id' => $chatid,
        'video' => $video,
        'duration' => $duration,
        'reply_markup' => $keyboard
    ]);
}

function SendVoice($chatid, $voice, $keyboard, $caption)
{
    bot('SendVoice', [
        'chat_id' => $chatid,
        'voice' => $voice,
        'caption' => $caption,
        'reply_markup' => $keyboard
    ]);
}

function SendContact($chatid, $first_name, $phone_number, $keyboard)
{
    bot('SendContact', [
        'chat_id' => $chatid,
        'first_name' => $first_name,
        'phone_number' => $phone_number,
        'reply_markup' => $keyboard
    ]);
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

function AnswerCallbackQuery($callback_query_id, $text, $show_alert)
{
    bot('answerCallbackQuery', [
        'callback_query_id' => $callback_query_id,
        'text' => $text,
        'show_alert' => $show_alert
    ]);
}

function EditMessageText($chat_id, $message_id, $text, $parse_mode, $disable_web_page_preview, $keyboard)
{
    bot('editMessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $text,
        'parse_mode' => $parse_mode,
        'disable_web_page_preview' => $disable_web_page_preview,
        'reply_markup' => $keyboard
    ]);
}

function EditMessageCaption($chat_id, $message_id, $caption, $keyboard, $inline_message_id)
{
    bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'caption' => $caption,
        'reply_markup' => $keyboard,
        'inline_message_id' => $inline_message_id
    ]);
}

function rwchatcount($id, $count)
{
    file_put_contents("user/$id/chatcount.txt", $count);
}

//=============
$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->message->from->id;
$usrn = $update->callback_query->message->chat->username;
$usrn1 = $update->callback_query->message->from->username;
$messageid = $update->callback_query->message->message_id;
$data_id = $update->callback_query->id;
$txt = $update->callback_query->message->text;
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
$stickerid = $update->message->sticker->file_id;
$videoid = $update->message->video->file_id;
$voiceid = $update->message->voice->file_id;
$fileid = $update->message->document->file_id;
$photo = $update->message->photo;
$photoid = $photo[count($photo) - 1]->file_id;
$musicid = $update->message->audio->file_id;
$caption = $update->message->caption;
$basetime = file_get_contents("http://irapi.ir/time/");
$getchat = json_decode($basetime, true);
$time = $getchat["FAtime"];
$date = $getchat["FAdate"];
$allmember = file_get_contents('data/allmember.txt');
$username = $update->message->from->username;
$name = $update->message->from->first_name;
$signup = file_get_contents("user/" . $from_id . "/signup.txt");
$step = file_get_contents("user/" . $from_id . "/step.txt");
$command = file_get_contents("user/" . $from_id . "/command.txt");
$change = file_get_contents("user/" . $from_id . "/change.txt");
$randtrue = file_get_contents("user/" . $from_id . "/rand.txt");
@mkdir('user/' . $from_id);
$chatadd = file_get_contents("data/chat.txt");
$chatadd2 = file_get_contents("data/chat2.txt");
$supportadd = file_get_contents("data/support.txt");
$vips = file_get_contents("data/vips.txt");
$ban = file_get_contents("data/banlist.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
$admin = "[*[ADMIN]*]";

//===============
$button_admin = json_encode(['keyboard' => [
    [['text' => '🔙 بازگشت']],
    [['text' => 'پیام همگانی📩'], ['text' => 'فروارد همگانی📬']],
    [['text' => '🗣پیام به کاربر'], ['text' => '📜مشخصات کاربر']],
    [['text' => '❌حذف vip'], ['text' => '☢vip کردن']],
    [['text' => 'آمار👥'], ['text' => '❗️اخطار به کاربر']],
    [['text' => '❎بلاک کردن کاربر'], ['text' => '✅آنبلاک کردن کاربر']],
], 'resize_keyboard' => true]);
$button_signup = json_encode(['keyboard' => [
    [['text' => '🀄️ ثبت نام']],
], 'resize_keyboard' => true]);
$button_official = json_encode(['keyboard' => [
    [['text' => '💬شروع چت']],
    [['text' => '⚜حساب ویژه'], ['text' => '👤مشخصات']],
    [['text' => '🗳پشتیبانی'], ['text' => '🔗زیرمجموعه گیری']],
], 'resize_keyboard' => true]);
$button_zir = json_encode(['keyboard' => [
    [['text' => '💯لینک دعوت']],
    [['text' => '⁉️چقدر کاربر آوردم'], ['text' => '🔰ارتقا حساب']],
    [['text' => '🔙 بازگشت']],
], 'resize_keyboard' => true]);
$button_back_support = json_encode(['keyboard' => [
    [['text' => '♨️اتمام گفتگو']],
], 'resize_keyboard' => true]);
$button_back_chat = json_encode(['keyboard' => [
    [['text' => '🔖مشخصات کاربر']],
    [['text' => '❌ اتمام گفتگو']],
], 'resize_keyboard' => true]);
$button_chat = json_encode(['keyboard' => [
    [['text' => '💥چت تصادفی']],
    [['text' => '👱‍♀چت با دختر'], ['text' => '👱چت با پسر']],
    [['text' => '🔙 بازگشت']],
], 'resize_keyboard' => true]);
$button_chat2 = json_encode(['keyboard' => [
    [['text' => 'اتمام گفتگو⭕️'], ['text' => 'ادامه گفتگو✅']],
    [['text' => 'بلاک کردن و اتمام گفتگو🚫']],
], 'resize_keyboard' => true]);
$button_chat3 = json_encode(['keyboard' => [
    [['text' => 'نه بیخیالش'], ['text' => 'بلاکش کن']],
], 'resize_keyboard' => true]);
$button_back_search = json_encode(['keyboard' => [
    [['text' => '🔍لغو جستجو']],
], 'resize_keyboard' => true]);
$button_jens = json_encode(['keyboard' => [
    [['text' => '👱‍♀ دختر'], ['text' => '👱 پسر']],
], 'resize_keyboard' => true]);
$button_einfo = json_encode(['keyboard' => [
    [['text' => '✍ ویرایش']],
    [['text' => '🔙 بازگشت']],
], 'resize_keyboard' => true]);
$button_pfriend = json_encode(['inline_keyboard' => [
    [['text' => '🗣پاسخ', 'callback_data' => 'pfriend']],
    [['text' => '⛔️گزارش', 'callback_data' => 'reportpf']],
], 'resize_keyboard' => true]);
$button_vip = json_encode(['keyboard' => [
    [['text' => '☢عضویت در کانال'], ['text' => '💳پرداخت']],
    [['text' => '🔙 بازگشت']],
], 'resize_keyboard' => true]);
$button_senn = json_encode(['keyboard' => [
    [['text' => '12'], ['text' => '13'], ['text' => '14'], ['text' => '15'], ['text' => '16']],
    [['text' => '17'], ['text' => '18'], ['text' => '19'], ['text' => '20'], ['text' => '21']],
    [['text' => '22'], ['text' => '23'], ['text' => '24'], ['text' => '25'], ['text' => '26']],
    [['text' => '27'], ['text' => '28'], ['text' => '29'], ['text' => '30'], ['text' => '31']],
    [['text' => '32'], ['text' => '33'], ['text' => '34'], ['text' => '35'], ['text' => '36']],
    [['text' => '37'], ['text' => '38'], ['text' => '39'], ['text' => '+40'], ['text' => '-50']],
], 'resize_keyboard' => true]);
$button_mlife = json_encode(['keyboard' => [
    [['text' => 'تهران'], ['text' => 'البرز'], ['text' => 'اردبیل'], ['text' => 'کیش']],
    [['text' => 'آذربایجان شرقی'], ['text' => 'آذربایجان غربی'], ['text' => 'خوزستان']],
    [['text' => 'خراسان شمالی'], ['text' => 'خراسان جنوبی'], ['text' => 'خراسان رضوی']],
    [['text' => 'چهارمحال'], ['text' => 'کرمان'], ['text' => 'کردستان'], ['text' => 'کرمانشاه']],
    [['text' => 'لرستان'], ['text' => 'مازندران'], ['text' => 'هرمزگان']],
    [['text' => 'سیستان و بلوچستان'], ['text' => 'همدان'], ['text' => 'اصفهان'], ['text' => 'سمنان']],
    [['text' => 'زنجان'], ['text' => 'ایلام'], ['text' => 'قزوین'], ['text' => 'یزد']],
    [['text' => 'گیلان'], ['text' => 'بوشهر'], ['text' => 'فارس'], ['text' => 'قم']],
], 'resize_keyboard' => true]);
$button_back = json_encode(['keyboard' => [
    [['text' => '🔙 بازگشت']],
], 'resize_keyboard' => true]);
$button_lagv = json_encode(['keyboard' => [
    [['text' => '❌لغو']],
], 'resize_keyboard' => true]);
//==========ban
if (strpos($ban, "$from_id") !== false) {
    SendMessage($chat_id, "شما از ربات به دلیل رعایت نکردن قوانین بلاک شده اید❗️
لطفا دیگر پیام ندهید❗️");
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
					if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
        SendMessage($chat_id, "سلام 😃👋
کاربر عزیز ✌️

به ربات چت ناشناس خوش آمدید...🌹
با این ربات میتوانید با کاربران دیگری که از ربات استفاده میکنند گفتگو کنید...✔️

📅تاریخ = $date 
⏰ساعت = $time

جهت شروع دکمه ثبت نام را لمس و اطلاعات را کامل کنید💡", "html", "true", $button_signup);
    } else {
					if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
        save("user/$from_id/step.txt", "none");
        SendMessage($chat_id, "سلام 😃👋
کاربر عزیز ✌️

به ربات چت ناشناس خوش آمدید...🌹
با این ربات میتوانید با کاربران دیگری که از ربات استفاده میکنند گفتگو کنید...✔️

📅تاریخ = $date 
⏰ساعت = $time

🖲دکمه مورد نظر را انتخاب کنید", "html", "true", $button_official);
    }
}		elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmessage)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
]);}
 elseif ($textmessage == '🗳پشتیبانی') {
    if ($supportadd == null) {
        save("data/support.txt", $from_id);
        SendMessage($chat_id, "درخواست گفتگو شما به پشتیبانی ارسال شد...

لطفا منتظر بمانید...", "html", "true");
        SendMessage($admin, "👤درخواست گفتگو توسط کاربر با مشخصات :

$name
@$username
$from_id
", 'html', 'true', json_encode(['keyboard' => [
            [['text' => 'قبول کردن'], ['text' => 'رد کردن']],
        ], 'resize_keyboard' => true]));
    } else {
        SendMessage($chat_id, "صف پشتیبانی پر است❗️

لطفا دقایقی دیگر امتحان کنید...", "html", "true", $button_official);
    }
} elseif ($textmessage == 'قبول کردن' && $from_id == $admin) {
    $supportadd = file_get_contents("data/support.txt");
    SendMessage($chat_id, "گفتگو شما با کاربر آغاز شد :", "html", "true", $button_back_support);
    save("user/$from_id/rand.txt", $supportadd);
    save("user/$supportadd/rand.txt", $admin);
    save("user/$from_id/command.txt", "chat start");
    save("user/$supportadd/command.txt", "chat start");
    SendMessage($supportadd, "درخواست پشتیبانی شما پذیرفته شد...❗️

میتوانید گفتگو کنید :", "html", "true", $button_back_support);
} elseif ($textmessage == 'رد کردن' && $from_id == $admin) {
    $usersupport = $supportadd;
    SendMessage($chat_id, "درخواست پشتیبانی کاربر رد شد.", "html", "true", $button_admin);
    SendMessage($supportadd, "درخواست پشتیبانی شما رد شد❗️", "html", "true");
    $newlist = str_replace($usersupport, "", $supportadd);
    save("data/support.txt", $newlist);
} elseif ($textmessage == '♨️اتمام گفتگو') {
    $usersupport = $supportadd;
    if ($from_id != $admin) {
        SendMessage($chat_id, "گفتگو شما با پشتیبانی به اتمام رسید❗️", "html", "true", $button_official);
        save("user/$supportadd/command.txt", "none");
        save("user/$from_id/command.txt", "none");
        $newlist = str_replace($usersupport, "", $supportadd);
        save("data/support.txt", $newlist);
        SendMessage($admin, "گفتگو شما توسط کاربر مقابل به اتمام رسید❗️", "html", "true", $button_admin);
    } else {
        SendMessage($chat_id, "گفتگو شما با کاربر به اتمام رسید❗️", "html", "true", $button_admin);
        save("user/$supportadd/command.txt", "none");
        save("user/$from_id/command.txt", "none");
        SendMessage($supportadd, "گفتگو شما توسط پشتیبانی به اتمام رسید❗️", "html", "true", $button_official);
        $newlist = str_replace($usersupport, "", $supportadd);
        save("data/support.txt", $newlist);
    }
} elseif ($textmessage == '🔗زیرمجموعه گیری') {
    SendMessage($chat_id, "به بخش زیرمجموعه گیری خوش آمدید🌹
لطفا دکمه مورد نظر را انتخاب کنید :", "html", "true", $button_zir);
} elseif ($textmessage == '💯لینک دعوت') {
    SendMessage($chat_id, "کاربر عزیز با اشتراک گذاری پیام پایین 🔻 میتوانید زیر مجموعه های خود را افزایش دهید❗️", "html", "true", $button_zir);
    SendMessage($chat_id, "سلام 😎👋
من $nam دعوتت میکنم که عضو ربات چت ناشناس بشی♥️
با این ربات میتونی به صورت تصادفی به یه نفر وصل بشی و باهاش چت کنی💬
البته امکاناتش فقط این نیست❗️
زود با لینک زیر عضو شو🔻
https://telegram.me/[*[BOT]*]?start=$from_id 🌀", "html", "true", $button_zir);
} elseif ($textmessage == '⁉️چقدر کاربر آوردم') {
    $gold = file_get_contents("user/" . $from_id . "/gold.txt");
    $member_id = explode("\n", $gold);
    $mmemcount = count($member_id) - 1;
    SendMessage($chat_id, "☢کاربر عزیز
🆔تعداد افرادی که با لینک شما به ربات پیوسته اند : ($mmemcount)", "html", "true", $button_zir);
} elseif ($textmessage == '🔰ارتقا حساب') {
    $gold = file_get_contents("user/" . $from_id . "/gold.txt");
    $oldertega = file_get_contents("user/" . $from_id . "/oldertega.txt");
    $member_id = explode("\n", $gold);
    $mmemcount = count($member_id) - 1;
    if ($mmemcount > 20) {
        if ($oldertega != 'false') {
            $ertega = fopen("data/vips.txt", "a") or die("Unable to open file!");
            fwrite($ertega, "$from_id\n");
            fclose($ertega);
            SendMessage($chat_id, "تبریک😍✌️
کاربر عزیز حساب شما با موفقیت ویژه شد✅", "html", "true", $button_zir);
            save("user/$from_id/karbara.txt", "0");
            save("user/$from_id/oldertega.txt", "false");
        } else {
            save("user/$from_id/step.txt", "none");
            SendMessage($chat_id, "شما قبلا از این امکان استفاده کردید❗️", "html", "true", $button_zir);
        }
    } else {
        SendMessage($chat_id, "کاربر عزیز...
برای ارتقا حساب خود باید 20 نفر از طریق لینک شما وارد ربات شوند✅
ولی تعداد افرادی که با لینک شما به ربات پیوسته اند = ($mmemcount) میباشد✅", "html", "true", $button_zir);
    }
} elseif ($textmessage == '⚜حساب ویژه' or $textmessage == '/vip') {
    SendMessage($chat_id, "تنها با پرداخت مبلغ ۳۰۰۰ تومان بدون صرف وقت و خیلی راحت حسابت رو به عضویت طلایی ارتقا بده؛

⚜️این ربات ازرانترین قیمت عضویت vip در تلگرام را دارد⚜️
\n
از ویژگی های عضویت ویژه(vip):
\n
✅قبل از شروع گپ جدید، انتخاب ‌می‌کنی که مخاطبت دختر باشه یا پسر (مثلا شاید دختر باشی و دلت گرفته و نیاز داری با یه دختر ناشناس صحبت کنی...)
✅مشاهده مشخصات کاربرها (مشاهده اسم، سن ، جنسیت کاربر و محل سکونت)
✅ارسال پیام آفلاین به کاربرها
✅توانایی شرکت در چت عمومی(به زودی)
✅امکان شروع چت با کاربرهایی که قبلا آشنا شدی (به زودی)
✅اولویت در زمان اتصال به کاربران
✅ و کلی امکانات بی نظیر دیگه ...
✅پاسخ سریع در پشتیبانی
و‌.‌..
(این مبلغ صرفا جهت کمک به اسپانسر ربات می‌باشد)
\n
مبلغ:(3000 هزار تومان)
\n
شناسه شما: $chat_id
\n
", "html", "true");
    SendMessage($chat_id, "$chat_id", "html", "true");
}

 elseif ($textmessage == '👤مشخصات') {
    $signup = file_get_contents("user/" . $from_id . "/signup.txt");
    $nam = file_get_contents("user/" . $from_id . "/nam.txt");
    $senn = file_get_contents("user/" . $from_id . "/senn.txt");
    $jens = file_get_contents("user/" . $from_id . "/jens.txt");
    $mlife = file_get_contents("user/" . $from_id . "/mlife.txt");
    SendMessage($chat_id, "👤مشخصات شما کاربر عزیز :
➖➖➖➖➖➖➖➖
👤 نام = $nam 
☯ سن = $senn 
🏯محل زندگی = $mlife
💑 جنسیت = $jens 
➖➖➖➖➖➖➖➖️", "html", "true", $button_einfo);
} elseif ($textmessage == '💬شروع چت') {
    SendMessage($chat_id, "به بخش چت خوش آمدید...🌹
دکمه مورد نظر را انتخاب کنید :", "html", "true", $button_chat);
} elseif ($textmessage == '🔍لغو جستجو') {
    $newlist = str_replace($from_id, "", $chatadd);
    save("data/chat.txt", $newlist);
    $newlist2 = str_replace($from_id, "", $chatadd2);
    save("data/chat2.txt", $newlist2);
    SendMessage($chat_id, "جستجو لغو شد❗️", "html", "true", $button_chat);
} elseif ($textmessage == '🔖مشخصات کاربر') {
    $vipsbot = file_get_contents('data/vips.txt');
    $vipsbot2 = explode("\n", $vipsbot);
    if (in_array($from_id, $vipsbot2)) {
        $namu = file_get_contents("user/" . $randtrue . "/nam.txt");
        $mlifeu = file_get_contents("user/" . $randtrue . "/mlife.txt");
        $sennu = file_get_contents("user/" . $randtrue . "/senn.txt");
        $jensu = file_get_contents("user/" . $randtrue . "/jens.txt");
        SendMessage($chat_id, "👤مشخصات کاربر :
▫️نام : $namu 
▪️سن : $sennu 
▫️محل زندگی : $mlifeu
▪️جنسیت : $jensu", "html", "true");
    } else {
        SendMessage($chat_id, "متاسفانه حساب شما ویژه نمیباشد❗️
جهت مشاهده مشخصات کاربر مقابل باید حساب خود را ویژه کنید❗️️
جهت ویژه شدن : /vip", "html", "true");
    }
} elseif ($textmessage == "💥چت تصادفی") {
    $chatcount = @file_get_contents("user/$chat_id/chatcount.txt");
    if ($chatcount > 5) {
        sendMessage($chat_id, "شما از 5 چت رایگان خود استفاده کردید \n برای ادامه ی کار دستور : \n /vip \nرا ارسال کنید❤️\n \n یا از دکمه (زیر مجموعه گیری) استفاده کنید❤️");
        exit();
    }
    $txtt = file_get_contents('data/chat.txt');
    $member_id = explode("\n", $txtt);
    $mmemcount = count($member_id) - 1;
    SendMessage($chat_id, "کمی صبر کنید تا به کاربر ناشناس وصل شوید...⏳

شما در لیست انتظار قرار گرفتید...", "html", "true", $button_back_search);
    file_put_contents("data/chat.txt", "$chatadd\n$from_id");
    file_put_contents("user/" . $from_id . "/rand.txt", null);
    $all_member = fopen("data/chat.txt", "r");
    while (!feof($all_member)) {
        $user = fgets($all_member);
        $user = str_replace(" ", "", $user);
        $user = str_replace("\n", "", $user);
        $blck = file_get_contents("user/" . $from_id . "/block.txt");
        $blck2 = file_get_contents("user/" . $user . "/block.txt");
        $ex = explode("\n", $blck);
        $ex2 = explode("\n", $blck2);
        if ($user != null && $user != "" && $user != "\n" && $from_id != $user && !in_array($from_id, $ex2) && !in_array($user, $ex && $jns != "نامعلوم" && $jns != null && $jns != "" && $jns != "\n" && $jns != "نامعلوم" && $jns != null && $jns != "" && $jns != "\n")) {
            file_put_contents("user/" . $from_id . "/rand.txt", $user);
            break;
        } else {
            file_put_contents("user/" . $from_id . "/rand.txt", null);
        }
    }
    $rand = file_get_contents("user/" . $from_id . "/rand.txt");
    if ($rand != null) {
        file_put_contents("user/" . $from_id . "/command.txt", "chat start");
        file_put_contents("user/" . $rand . "/command.txt", "chat start");
        file_put_contents("user/" . $rand . "/rand.txt", $from_id);
        $str = str_replace($from_id . "\n", "", $chatadd);
        $str = str_replace($rand . "\n", "", $chatadd);
        file_put_contents("data/chat.txt", $str);
        SendMessage($chat_id, "🔎 کاربر یافت شد و با موفقیت وصل شدید

📲میتوانید گفتگو را آغاز کنید :", "html", "true", $button_back_chat);
        SendMessage($rand, "🔎 کاربر یافت شد و با موفقیت وصل شدید

📲میتوانید گفتگو را آغاز کنید :
", "html", "true", $button_back_chat);
    }
} elseif ($textmessage == '❌ اتمام گفتگو') {
    SendMessage($chat_id, "❓آیا از انجام این کار مطمئن هستید؟

قبل از بستن گفتگو میتوانید این کاربر را بلاک کنید تا دیگر به شما وصل نشود❗️

برای بستن گفتگو دکمه : اتمام گفتگو⭕️
برای ادامه گفتگو دکمه : ادامه گفتگو✅
برای بلاک کردن کاربر و بستن گفتگو دکمه : بلاک کردن و اتمام گفتگو🚫

جهت ادامه یکی از دکمه های زیر را لمس کنید :", "html", "true", $button_chat2);
} elseif ($textmessage == '🔙 بازگشت' or $textmessage == '/cancel') {
    save("user/$from_id/step.txt", "none");
    save("user/$from_id/command.txt", "none");
    SendMessage($chat_id, "لطفا گزینه مورد نظر را انتخاب کنید...🖲", "html", "true", $button_official);
} elseif ($textmessage == 'اتمام گفتگو⭕️') {
    $chatcount = @file_get_contents("user/$chat_id/chatcount.txt");
    rwchatcount($chat_id, $chatcount + 1);
    SendMessage($randtrue, "گفتگو شما توسط کاربر مقابل به پایان رسید❗

آیا میخواهید کاربر را بلاک کنید?", "html", "true", $button_chat3);
    save("user/$from_id/command.txt", "none");
    file_put_contents("user/" . $from_id . "/rand.txt", '');
    file_put_contents("user/" . $randtrue . "/rand.txt", '');
    SendMessage($chat_id, "گفتگو شما با کاربر به پایان رسید❗️", "html", "true", $button_chat);
} elseif ($textmessage == 'بلاکش کن') {
    $myfile2 = fopen("user/$from_id/block.txt", "a") or die("Unable to open file!");
    fwrite($myfile2, "$randtrue\n");
    fclose($myfile2);
    save("user/$from_id/command.txt", "none");
    SendMessage($chat_id, "گفتگو شما با کاربر به پایان رسید❗️

و کاربر بلاک شد❗️", "html", "true", $button_chat);
} elseif ($textmessage == 'نه بیخیالش') {
    save("user/$from_id/command.txt", "none");
    SendMessage($chat_id, "گفتگو شما با کاربر به پایان رسید❗", "html", "true", $button_chat);
} elseif ($textmessage == 'ادامه گفتگو✅') {
    SendMessage($chat_id, "💬میتوانید گفتگو خود را ادامه دهید :", "html", "true", $button_back_chat);
} elseif ($textmessage == 'بلاک کردن و اتمام گفتگو🚫') {
    $chatcount = @file_get_contents("user/$chat_id/chatcount.txt");
    rwchatcount($chat_id, $chatcount + 1);
    SendMessage($randtrue, "گفتگو شما توسط کاربر مقابل به پایان رسید❗

آیا میخواهید کاربر را بلاک کنید?", "html", "true", $button_chat3);
    save("user/$from_id/command.txt", "none");
    $myfile2 = fopen("user/$from_id/block.txt", "a") or die("Unable to open file!");
    fwrite($myfile2, "$randtrue\n");
    fclose($myfile2);
    SendMessage($chat_id, "گفتگو شما با کاربر به پایان رسید❗️

و کاربر بلاک شد❗️", "html", "true", $button_chat);
} elseif ($textmessage == "👱چت با پسر") {
    $vipsbot = file_get_contents('data/vips.txt');
    $vipsbot2 = explode("\n", $vipsbot);
    if (in_array($from_id, $vipsbot2)) {
        $txtt = file_get_contents('data/chat2.txt');
        $member_id = explode("\n", $txtt);
        $mmemcount = count($member_id) - 1;
        SendMessage($chat_id, "کمی صبر کنید تا به کاربر ناشناس وصل شوید...⏳

شما در لیست انتظار قرار گرفتید...", "html", "true", $button_back_search);
        file_put_contents("data/chat2.txt", "$chatadd2\n$from_id");
        file_put_contents("user/" . $from_id . "/rand.txt", null);
        $all_member = fopen("data/chat2.txt", "r");
        while (!feof($all_member)) {
            $user = fgets($all_member);
            $user = str_replace(" ", "", $user);
            $user = str_replace("\n", "", $user);
            $blck = file_get_contents("user/" . $from_id . "/block.txt");
            $blck2 = file_get_contents("user/" . $user . "/block.txt");
            $jns = file_get_contents("user/" . $user . "/jens.txt");
            $jns2 = file_get_contents("user/" . $from_id . "/jens.txt");
            $ex = explode("\n", $blck);
            $ex2 = explode("\n", $blck2);
            if ($user != null && $user != "" && $user != "\n" && $from_id != $user && !in_array($from_id, $ex2) && !in_array($user, $ex && $jns == "پسر" && $jns == "👱‍ پسر" && $jns != "نامعلوم" && $jns != null && $jns != "" && $jns != "\n")) {
                file_put_contents("user/" . $from_id . "/rand.txt", $user);
                break;
            } else {
                file_put_contents("user/" . $from_id . "/rand.txt", null);
            }
        }
        $rand = file_get_contents("user/" . $from_id . "/rand.txt");
        if ($rand != null) {
            file_put_contents("user/" . $from_id . "/command.txt", "chat start");
            file_put_contents("user/" . $rand . "/command.txt", "chat start");
            file_put_contents("user/" . $rand . "/rand.txt", $from_id);
            $str = str_replace($from_id, '', $chatadd2);
            $str = str_replace($rand, '', $chatadd2);
            file_put_contents("data/chat2.txt", $str);
            SendMessage($chat_id, "🔎 کاربر یافت شد و با موفقیت وصل شدید

📲میتوانید گفتگو را آغاز کنید :", "html", "true", $button_back_chat);
            SendMessage($rand, "🔎 کاربر یافت شد و با موفقیت وصل شدید

📲میتوانید گفتگو را آغاز کنید :", "html", "true", $button_back_chat);
        }
    } else {
        SendMessage($chat_id, "متاسفانه حساب شما ویژه نمیباشد❗️️
جهت ویژه شدن : /vip", "html", "true", $button_chat);
    }
} elseif ($textmessage == "👱‍♀چت با دختر") {
    $vipsbot = file_get_contents('data/vips.txt');
    $vipsbot2 = explode("\n", $vipsbot);
    if (in_array($from_id, $vipsbot2)) {
        $txtt = file_get_contents('data/chat2.txt');
        $member_id = explode("\n", $txtt);
        $mmemcount = count($member_id) - 1;
        SendMessage($chat_id, "کمی صبر کنید تا به کاربر ناشناس وصل شوید...⏳

شما در لیست انتظار قرار گرفتید...", "html", "true", $button_back_search);
        file_put_contents("data/chat2.txt", "$chatadd2\n$from_id");
        file_put_contents("user/" . $from_id . "/rand.txt", null);
        $all_member = fopen("data/chat2.txt", "r");
        while (!feof($all_member)) {
            $user = fgets($all_member);
            $user = str_replace(" ", "", $user);
            $user = str_replace("\n", "", $user);
            $blck = file_get_contents("user/" . $from_id . "/block.txt");
            $blck2 = file_get_contents("user/" . $user . "/block.txt");
            $jns = file_get_contents("user/" . $user . "/jens.txt");
            $jns2 = file_get_contents("user/" . $from_id . "/jens.txt");
            $ex = explode("\n", $blck);
            $ex2 = explode("\n", $blck2);
            if ($user != null && $user != "" && $user != "\n" && $from_id != $user && !in_array($from_id, $ex2) && !in_array($user, $ex && $jns == "دختر" && $jns == "👱‍♀ دختر" && $jns != "نامعلوم" && $jns != null && $jns != "" && $jns != "\n")) {
                file_put_contents("user/" . $from_id . "/rand.txt", $user);
                break;
            } else {
                file_put_contents("user/" . $from_id . "/rand.txt", null);
            }
        }
        $rand = file_get_contents("user/" . $from_id . "/rand.txt");
        if ($rand != null) {
            file_put_contents("user/" . $from_id . "/command.txt", "chat start");
            file_put_contents("user/" . $rand . "/command.txt", "chat start");
            file_put_contents("user/" . $rand . "/rand.txt", $from_id);
            $str = str_replace($from_id, '', $chatadd2);
            $str = str_replace($rand, '', $chatadd2);
            file_put_contents("data/chat2.txt", $str);
            SendMessage($chat_id, "🔎 کاربر یافت شد و با موفقیت وصل شدید

📲میتوانید گفتگو را آغاز کنید :", "html", "true", $button_back_chat);
            SendMessage($rand, "🔎 کاربر یافت شد و با موفقیت وصل شدید

📲میتوانید گفتگو را آغاز کنید :", "html", "true", $button_back_chat);
        }
    } else {
        SendMessage($chat_id, "متاسفانه حساب شما ویژه نمیباشد❗️️
جهت ویژه شدن : /vip", "html", "true", $button_chat);
    }
} elseif ($command == "chat start") {
    if ($stickerid != null) {
        SendSticker($randtrue, $stickerid);
    } elseif ($videoid != null) {
        SendVideo($randtrue, $videoid, $caption);
    } elseif ($voiceid != null) {
        SendVoice($randtrue, $voiceid, "", $caption);
    } elseif ($fileid != null) {
        SendDocument($randtrue, $fileid, "", $caption);
    } elseif ($musicid != null) {
        SendAudio($randtrue, $musicid, "", $caption);
    } elseif ($photoid != null) {
        SendPhoto($randtrue, $photoid, "", $caption);
    } elseif ($textmessage != null) {
        SendMessage($randtrue, $textmessage, "html", "true");
    }
} elseif ($textmessage == '🀄️ ثبت نام') {
    save("user/$from_id/signup.txt", "nam");
    SendMessage($chat_id, "✍ کاربر عزیز لطفا نام خود را وارد کنید :", "html", "true", $button_lagv);
} elseif ($textmessage == '❌لغو') {
    save("user/$from_id/step.txt", "none");
    SendMessage($chat_id, "عملیات مورد نظر لغو شد❌
لطفا گزینه مورد نظر خود را انتخاب کنید...🖲", "html", "true", $button_signup);
} elseif ($signup == 'nam') {
    save("user/$from_id/signup.txt", "senn");
    save("user/$from_id/nam.txt", "$textmessage");
    SendMessage($chat_id, "💬 حال سن خود را انتخاب کنید", "html", "true", $button_senn);
} elseif ($signup == 'senn') {
    if ($textmessage == '12' or $textmessage == '13' or $textmessage == '14' or $textmessage == '15' or $textmessage == '16' or $textmessage == '17' or $textmessage == '18' or $textmessage == '19' or $textmessage == '20' or $textmessage == '21' or $textmessage == '22' or $textmessage == '23' or $textmessage == '24' or $textmessage == '25' or $textmessage == '26' or $textmessage == '27' or $textmessage == '28' or $textmessage == '29' or $textmessage == '30' or $textmessage == '31' or $textmessage == '32' or $textmessage == '33' or $textmessage == '34' or $textmessage == '35' or $textmessage == '36' or $textmessage == '37' or $textmessage == '38' or $textmessage == '39' or $textmessage == '+40' or $textmessage == '-50') {
        save("user/$from_id/signup.txt", "mlife");
        save("user/$from_id/senn.txt", "$textmessage");
        SendMessage($chat_id, "🏯 حال محل زندگی خود را انتخاب کنید", "html", "true", $button_mlife);
    } else {
        SendMessage($chat_id, "لطفا فقط از دکمه ها استفاده کنید :", "html", "true", $button_senn);
    }
} elseif ($signup == 'mlife') {
    if ($textmessage == 'تهران' or $textmessage == 'البرز' or $textmessage == 'اردبیل' or $textmessage == 'کیش' or $textmessage == 'آذربایجان شرقی' or $textmessage == 'آذربایجان غربی' or $textmessage == 'خوزستان' or $textmessage == 'خراسان شمالی' or $textmessage == 'خراسان جنوبی' or $textmessage == 'خراسان رضوی' or $textmessage == 'چهارمحال' or $textmessage == 'کرمان' or $textmessage == 'کردستان' or $textmessage == 'کرمانشاه' or $textmessage == 'لرستان' or $textmessage == 'مازندران' or $textmessage == 'هرمزگان' or $textmessage == 'سیستان و بلوچستان' or $textmessage == 'همدان' or $textmessage == 'اصفهان' or $textmessage == 'سمنان' or $textmessage == 'زنجان' or $textmessage == 'ایلام' or $textmessage == 'قزوین' or $textmessage == 'یزد' or $textmessage == 'گیلان' or $textmessage == 'بوشهر' or $textmessage == 'فارس' or $textmessage == 'قم') {
        save("user/$from_id/signup.txt", "jens");
        save("user/$from_id/mlife.txt", "$textmessage");
        SendMessage($chat_id, "💑حال جنسیت خود را انتخاب کنید

توجه کنید بعدا نمیتوانید جنسیت خود را در ربات تغییر دهید.", "html", "true", $button_jens);
    } else {
        SendMessage($chat_id, "لطفا فقط از دکمه ها استفاده کنید :", "html", "true", $button_mlife);
    }
} elseif ($signup == 'jens') {
    if ($textmessage == '👱 پسر' or $textmessage == '👱‍♀ دختر') {
        save("user/$from_id/signup.txt", "ok");
        if ($textmessage == '👱 پسر') {
            save("user/$from_id/jens.txt", "پسر");
        }
        if ($textmessage == '👱‍♀ دختر') {
            save("user/$from_id/jens.txt", "دختر");
        }
        SendMessage($chat_id, "مشخصات شما با موفقیت در سیستم ما ثبت شد...✔️", "html", "true", $button_official);
    } else {
        SendMessage($chat_id, "لطفا فقط از دکمه ها استفاده کنید :", "html", "true", $button_jens);
    }
} elseif ($textmessage == '✍ ویرایش') {
    save("user/$from_id/step.txt", "nam");
    SendMessage($chat_id, "✍ کاربر عزیز لطفا نام خود را وارد کنید :", "html", "true", $button_back);
} elseif ($step == 'nam') {
    save("user/$from_id/step.txt", "senn");
    save("user/$from_id/nam.txt", "$textmessage");
    SendMessage($chat_id, "💬 حال سن خود را انتخاب کنید", "html", "true", $button_senn);
} elseif ($step == 'senn') {
    if ($textmessage == '12' or $textmessage == '13' or $textmessage == '14' or $textmessage == '15' or $textmessage == '16' or $textmessage == '17' or $textmessage == '18' or $textmessage == '19' or $textmessage == '20' or $textmessage == '21' or $textmessage == '22' or $textmessage == '23' or $textmessage == '24' or $textmessage == '25' or $textmessage == '26' or $textmessage == '27' or $textmessage == '28' or $textmessage == '29' or $textmessage == '30' or $textmessage == '31' or $textmessage == '32' or $textmessage == '33' or $textmessage == '34' or $textmessage == '35' or $textmessage == '36' or $textmessage == '37' or $textmessage == '38' or $textmessage == '39' or $textmessage == '+40' or $textmessage == '-50') {
        save("user/$from_id/step.txt", "mlife");
        save("user/$from_id/senn.txt", "$textmessage");
        SendMessage($chat_id, "🏯 حال محل زندگی خود را انتخاب کنید", "html", "true", $button_mlife);
    } else {
        SendMessage($chat_id, "لطفا فقط از دکمه ها استفاده کنید :", "html", "true", $button_senn);
    }
} elseif ($step == 'mlife') {
    if ($textmessage == 'تهران' or $textmessage == 'البرز' or $textmessage == 'اردبیل' or $textmessage == 'کیش' or $textmessage == 'آذربایجان شرقی' or $textmessage == 'آذربایجان غربی' or $textmessage == 'خوزستان' or $textmessage == 'خراسان شمالی' or $textmessage == 'خراسان جنوبی' or $textmessage == 'خراسان رضوی' or $textmessage == 'چهارمحال' or $textmessage == 'کرمان' or $textmessage == 'کردستان' or $textmessage == 'کرمانشاه' or $textmessage == 'لرستان' or $textmessage == 'مازندران' or $textmessage == 'هرمزگان' or $textmessage == 'سیستان و بلوچستان' or $textmessage == 'همدان' or $textmessage == 'اصفهان' or $textmessage == 'سمنان' or $textmessage == 'زنجان' or $textmessage == 'ایلام' or $textmessage == 'قزوین' or $textmessage == 'یزد' or $textmessage == 'گیلان' or $textmessage == 'بوشهر' or $textmessage == 'فارس' or $textmessage == 'قم') {
        save("user/$from_id/mlife.txt", "$textmessage");
        save("user/$from_id/step.txt", "none");
        save("user/$from_id/change.txt", "true");
        SendMessage($chat_id, "مشخصات شما با موفقیت در سیستم ما ثبت شد...✔️", "html", "true", $button_official);
    } else {
        SendMessage($chat_id, "لطفا فقط از دکمه ها استفاده کنید :", "html", "true", $button_mlife);
    }
} elseif ($textmessage == '/panel' and $from_id == $admin) {
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
} //=============
else {
    SendMessage($chat_id, "دستور اشتباه است❗️");
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