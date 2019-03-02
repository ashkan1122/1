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
include ("handler.php");
//------------------------------------------------------------------------------
	//Add Member
    $user = json_decode(file_get_contents("data/user.json"),true);
    if(!in_array($from_id, $user["userlist"])) {
    @mkdir("data/$from_id");
    $user["userlist"][]="$from_id";
    $user = json_encode($user,true);
    file_put_contents("data/user.json",$user);
	//Config Json
	$users[$from_id]['step'] = "none";
	$users[$from_id]['ban'] = "false";
	file_put_contents("data/data.json",json_encode($users));
	//Put Text File
	file_put_contents("data/$from_id/text.txt",'');
}
//------------------------------------------------------------------------------
 if($ban == 'true'){return;}
//--------[Start and Back]--------//
if($text == "/start"){
	unlink("data/$from_id/text.txt");
				if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
	SendMessage($chat_id,"
رباتی جالب انگیز با قابلیت تایپ با کلید های اینلاین
مناسب برای افرادی که مدام ریپورت چت می شوند و نمی توانند پیام ارسال کنند
با این ربات توسط دکمه ها پیغام خود را نوشته و برای دوستان فروارد کنید

➖➖➖➖➖➖
🔻 هم اکنون *^شروع^* را لمس کنید 🔻", 'MarkDown',null, $home);
}
//--------[Bot]--------//
if($data == "keyboard" or $data == "delall"){
	unlink("data/$fromid/text.txt");
	EditMsg($chatid, $messageid, "به صفحه کلید اینلاین وارد شدید:\nاکنون می توانید شروع به نوشتن کنید\n-------------------------------------------------------------------", $keyboard);
	return;
}
if($data == "فاصله"){
	save("$fromid/text.txt"," ");
	sleep(0.1);
	bot('AnswerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'text'=>"🙏 فاصله گذاشته شد",]);
	@$word = file_get_contents("data/$fromid/text.txt");
	EditMsg($chatid, $messageid, "به صفحه کلید اینلاین وارد شدید:\nاکنون می توانید شروع به نوشتن کنید\n-------------------------------------------------------------------
• $word", $keyboard);
    return;
}
if($data == "del"){
	@$word = file_get_contents("data/$fromid/text.txt");
	$string = substr($word, 0, -2);
	file_put_contents("data/$fromid/text.txt",$string);
	sleep(0.1);
	@$word = file_get_contents("data/$fromid/text.txt");
	EditMsg($chatid, $messageid, "به صفحه کلید اینلاین وارد شدید:\nاکنون می توانید شروع به نوشتن کنید\n-------------------------------------------------------------------
• $word", $keyboard);
    return;
}
if($data == "\n"){bot('AnswerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'text'=>"🙏 رفتیم خط بعد (ادامه دهید)",]);}
if($data == "end"){
	@$word = file_get_contents("data/$fromid/text.txt");
	EditMsg($chatid, $messageid, "$word", $end);
	sleep(1.5);
	SendMessage($chatid, "اکنون اگر ریپورت چت هستید می توانید پیام بالا را که خودتان آن را نوشته این برای گروه یا شخص مورد نظرتان بدون محدودیت فروارد کنید :)", 'MarkDown', null, $again);
	return;
}
if($data){
	save("$fromid/text.txt","$data");
	sleep(0.1);
	@$word = file_get_contents("data/$fromid/text.txt");
	EditMsg($chatid, $messageid, "به صفحه کلید اینلاین وارد شدید:\nاکنون می توانید شروع به نوشتن کنید\n-------------------------------------------------------------------
• $word", $keyboard);
}
		elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
//--------[Panel Dev]--------//
if($text == '/panel' or $text == 'بازگشت'){
	if($from_id == $Dev){
	$users[$from_id]['step'] = "none";
	file_put_contents("data/data.json",json_encode($users));
SendMessage($chat_id," به پنل مدیریت خوش آمدید
➖➖➖➖➖➖
🔻 انتخاب کنید 🔻", 'MarkDown' ,$message_id, $panel);
return;
	}
}
elseif($text == 'آمار' and $from_id == $Dev){
	$mmemcount = count($user['userlist'])-1;
SendMessage($chat_id,"■ تعداد کل اعضای ربات : *$mmemcount*", 'MarkDown', $message_id);
}
//------------------------------------------------------------------------------Send and For
elseif($text == 'ارسال همگانی' and $from_id == $Dev){
    $users[$from_id]['step'] = "s2all";
	file_put_contents("data/data.json",json_encode($users));
    SendMessage($chat_id,"■ پیام مورد نظر را ارسال کنید", 'MarkDown', $message_id, $back_panel);
}
elseif($step == "s2all"){
    $users[$from_id]['step'] = "none";
	file_put_contents("data/data.json",json_encode($users));
while($z <= count($All)){  
$z++;
SendMessage($All[$z-1], $text, null, null);
}
SendMessage($chat_id,"■ پیام به تمامی اعضا ارسال شد", 'MarkDown', $message_id, $panel);
}
elseif($text == 'فروارد همگانی' and $from_id == $Dev){
    $users[$from_id]['step'] = "f2all";
	file_put_contents("data/data.json",json_encode($users));
	SendMessage($chat_id,"■ پیام مورد نظر را فروارد کنید", 'MarkDown', $message_id, $back_panel);
}
elseif($step == "f2all"){
    $users[$from_id]['step'] = "none";
	file_put_contents("data/data.json",json_encode($users));
while($z <= count($All)){  
$z++;
Forward($All[$z-1],$chat_id,$message_id);
}
SendMessage($chat_id,"■ پیام به تمامی اعضا فروارد شد", 'MarkDown', $message_id, $panel);
}
//------------------------------------------------------------------------------Ban and UnBan
elseif($text == 'مسدود کاربر' and $from_id == $Dev){
    $users[$from_id]['step'] = "ban";
	file_put_contents("data/data.json",json_encode($users));
SendMessage($chat_id,"■ آیدی کاربر جهت محروم شدن از ربات را ارسال کنید", 'MarkDown', $message_id, $back_panel);
}
elseif($step == "ban"){
    $users[$from_id]['step'] = "none";
    $users[$text]['ban'] = "true";
	file_put_contents("data/data.json",json_encode($users));
SendMessage($chat_id,"■ کاربر `$text` از ربات مسدود شد!", 'MarkDown', $message_id, $panel);
}
elseif($text == 'حذف مسدود کاربر' and $from_id == $Dev){
    $users[$from_id]['step'] = "unban";
	file_put_contents("data/data.json",json_encode($users));
SendMessage($chat_id,"■ آیدی کاربر جهت خارج کردن از محرومیت ربات را ارسال کنید", 'MarkDown', $message_id, $back_panel);
}
elseif($step == "unban"){
    $users[$from_id]['step'] = "none";
    $users[$text]['ban'] = "false";
	file_put_contents("data/data.json",json_encode($users));
SendMessage($chat_id,"■ کاربر `$text` از مسدودیت خارج گردید", 'MarkDown', $message_id, $panel);
}
//------------------------------------------------------------------------------
unlink('error_log');
?>