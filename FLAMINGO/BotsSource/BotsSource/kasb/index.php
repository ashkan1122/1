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
include 'Class.php';

$button_manage = json_encode(['keyboard'=>[
    [['text'=>'🔙']],
    [['text'=>'پیام ▪️'],['text'=>'▫️ فروارد']],
    [['text'=>'▫️ امار ربات ▪️'],['text'=>'تنظیم کانال']],
    [['text'=>'تنظیم پشتیبانی']],
],'resize_keyboard'=>true]);
$button_admin = json_encode(['keyboard'=>[
    [['text'=>'♻️ دریافت لینک'],['text'=>'💶 وضعیت حساب']],
    [['text'=>'💰درآمد کاربران'],['text'=>'📍کانال تیم ما']],
    [['text'=>"واریز کردن پول 📎"],['text'=>'📃 کانال واریزات']],
    [['text'=>'راهنما❕']],
],'resize_keyboard'=>true]);
$button_official = json_encode(['keyboard'=>[
    [['text'=>'♻️ دریافت لینک'],['text'=>'💶 وضعیت حساب']],
    [['text'=>'💰درآمد کاربران'],['text'=>'📍کانال تیم ما']],
	    [['text'=>"واریز کردن پول 📎"],['text'=>'📃 کانال واریزات']],
            [['text'=>'راهنما❕']],
],'resize_keyboard'=>true]);
$button_officiall = json_encode(['keyboard'=>[
    [['text'=>'10 تومن'],['text'=>'20 تومن']],
	[['text'=>'🔙']],
],'resize_keyboard'=>true]);
$button_back = json_encode(['keyboard'=>[
    [['text'=>'🔙']],
],'resize_keyboard'=>true]);
$update         = json_decode(file_get_contents('php://input'));
$chatid         = $update->callback_query->message->chat->id;
$fromid         = $update->callback_query->message->from->id;
$messageid      = $update->callback_query->message->message_id;
$data_id        = $update->callback_query->id;
$txt            = $update->callback_query->message->text;
$chat_id        = $update->message->chat->id;
$from_id        = $update->message->from->id;
$from_username  = $update->message->from->username;
$from_first     = $update->message->from->first_name;
$forward_id     = $update->message->forward_from->id;
$forward_chat   = $update->message->forward_from_chat;
$forward_chat_username = $update->message->forward_from_chat->username;
$forward_chat_msg_id = $update->message->forward_from_message_id;
$text           = $update->message->text;
$message_id     = $update->message->message_id;
$stickerid      = $update->message->sticker->file_id;
$videoid        = $update->message->video->file_id;
$voiceid        = $update->message->voice->file_id;
$fileid         = $update->message->document->file_id;
$photo          = $update->message->photo;
$photoid        = $photo[count($photo)-1]->file_id;
$musicid        = $update->message->audio->file_id;
$caption        = $update->message->caption;
$cde            = time();
$code           = md5("$cde$from_id");
$command        = file_get_contents('user/'.$from_id."/command.txt");
$coin           = file_get_contents('user/'.$from_id."/coin.txt");
$username       = $update->message->from->username;
$name           = $update->message->from->first_name;
$coin_wait      = file_get_contents('user/'.$wait."/coin.txt");
$Member         = file_get_contents('admin/Member.txt');
$data           = $update->callback_query->data;
$textchannel = file_get_contents("textchannel.txt");
$textchannel = file_get_contents("data/channel.txt");
$amir = file_get_contents("data/amir.txt");
$user = file_get_contents("data/user.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");

// start source
if (strpos($block , "$from_id") !== false) {
 return false;
}
elseif ($from_id != $chat_id and $chat_id != $feed) {
 LeaveChat($chat_id);
}
//=============================\\
if(preg_match('/^\/([Ss]tart)/',$text)){
  mkdir("user/$from_id");
  if (!file_exists("user/$from_id/coin.txt")) {
    save("user/$from_id/coin.txt","0");
    save("user/$from_id/command.txt","none");
    SendMessage($chat_id,"","markdown","true");

    if ($id != "") {
      if ($id != $from_id) {
          SendMessage($id,"💶 یک نفر به حساب شما وارد شد و شما یک زیرمجموعه گرفتید");
          $coin = file_get_contents("user/$id/coin.txt");
          settype($coin,"integer");
          $newcoin = $coin + 1;
          save("user/$id/coin.txt",$newcoin);
      }
      else {
        SendMessage($chat_id,"شما قبلا در ربات عضو بودید !");
      }
    }
  }
   if($from_id == $admin){
	   			if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
          SendMessage($chat_id,"سلام دوست عزیز 🌹

💸 به ربات کسب درآمد از تلگرام خوش آمدید.

📚 امروزه شبکه های اجتماعی از جمله تلگرام محبوبیت زیادی در بین کاربران خود دارند.

🕹 ما تصمیم گرفتیم رباتی را در اختیار شما کاربران عزیز قرار دهیم که بتوانید بدون انجام کار خاصی بین 40 تا 80 هزارتومان در روز درآمد داشته باشید.

🔎 برای دریافت اطلاعات بیشتر از طریق دکمه های موجود اقدام کنید.","html","true",$button_admin);
   }else{
	      SendMessage($chat_id,"سلام دوست عزیز 🌹

💸 به ربات کسب درآمد از تلگرام خوش آمدید.

📚 امروزه شبکه های اجتماعی از جمله تلگرام محبوبیت زیادی در بین کاربران خود دارند.

🕹 ما تصمیم گرفتیم رباتی را در اختیار شما کاربران عزیز قرار دهیم که بتوانید بدون انجام کار خاصی بین 40 تا 80 هزارتومان در روز درآمد داشته باشید.

🔎 برای دریافت اطلاعات بیشتر از طریق دکمه های موجود اقدام کنید.","html","true",$button_official);
   }
}
//========================\\
		elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
elseif($text == '🔙'){
 if($from_id == $admin){
  file_put_contents('user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"🔻سپاس از همراهی شما

👇لیست دکمه ها👇","html","true",$button_admin);
 }else{
  file_put_contents('user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"🔻سپاس از همراهی شما

👇لیست دکمه ها👇","html","true",$button_official);
 }
}
//============================\\
elseif($text == 'واریز کردن پول 📎'){
   SendMessage($chat_id,"یکی از دسته های زیر را انتخاب کنید ","html","true",$button_officiall);
}
//========================================//
elseif($text == '💰درآمد کاربران'){
   SendMessage($chat_id,"➖➖➖➖➖➖➖➖➖➖
🔰 کاربر گرامی با عضویت درکانال زیر شما میتوانید درآمد کارآموزان مارا ببینید.
$amir
➖➖➖➖➖➖➖➖➖➖","html","true",$button_official);
}
//=================
elseif($text == '📍کانال تیم ما'){
   SendMessage($chat_id,"➖➖➖➖➖➖➖➖➖➖
🔰 کاربر گرامی با عضویت درکانال زیر شما میتوانید درجریان آموزش ها و دوره های تیم ما قرار بگیرید.
$amir
➖➖➖➖➖➖➖➖➖➖","html","true",$button_official);
}
//=============
elseif($text == '📃 کانال واریزات'){
   SendMessage($chat_id,"➖➖➖➖➖➖➖➖➖➖
دوستانی ک باور ندارن و میگن رباته ما فیک هستن در کانال میتواند واریزات را ببینند
$amir
➖➖➖➖➖➖➖➖➖➖","html","true",$button_official);
}
//=============
elseif($text == '10 تومن'){
    if($coin >= 60){
    $rand = rand(00000,99999);
	$ce = $rand;
  SendMessage($chat_id,"▪️ خب دوست عزیز شماره حساب خود را به ایدی زیر بفرسید 
$user","html","true",$button_official);
    }else{
     SendMessage($chat_id,"دوست عزیز شما باید 60 زیرمجموعه داشته باشید تا بتوانم ماهم برای شما پول بدهیم","html","true",$button_official);
    }
}
//=============
elseif($text == '20 تومن'){
    if($coin >= 120){
    $rand = rand(00000,99999);
	$ce = $rand;
  SendMessage($chat_id,"▪️ خب دوست عزیز شماره حساب خود را به ایدی زیر بفرسید 
$user","html","true",$button_official);
    }else{
     SendMessage($chat_id,"دوست عزیز شما باید 120 زیرمجموعه داشته باشید تا بتوانم ماهم برای شما پول بدهیم","html","true",$button_official);
    }
}
//=============
elseif($text == '💶 وضعیت حساب'){
   SendMessage($chat_id,"نام شما : $name
   ایدی شما : $username
زیرمجموعه شما : $coin","html","true",$button_official);
}
//=============
elseif($text == 'سازنده👮'){
   SendMessage($chat_id,"سازنده این ربات sanpay👮میباشد:
$user","html","true",$button_official);
}
//=============
elseif($text == 'راهنما❕'){
   SendMessage($chat_id,"🔖 میخوای کسب درامد کنی ولی نمی تونی

📒 شما با این ربات به راحتی میتونید کسب درامد کنید با هر نفری ک با لینک شما وارد ربات میشود شما یک زیرمجموعه اگر زیرمجموعهات شما به بالای 60 برسد شما در حساب خود 10 تومن دارید اگر به 120 برسد در حساب خود 20 تومن دارید 

📋 به این راحتی شما میتونید با این ربات کسب درامد کنید 

✏️ موفق باشید","html","true",$button_official);
}
//===========================\\
elseif($text == '♻️ دریافت لینک'){
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"🎁 یک اتفاق جدید

💸 کسب درآمد از تلگرام روزانه بین 40 تا 80 هزارتومان کاملا تضمینی

✅ اولین ربات کسب درآمد در تلگرام

‼️ عضو شوید و درآمد کسب کنید 👇

t.me/$UserNameBot?start=$from_id",
 ]);
  SendMessage($chat_id,"بنر شما را در بالا فرستادم موفق و پایدار باشید 💳","html","true",$button_official);
}
//===========//
elseif($text == 'تنظیم کانال' && $from_id == $admin){
file_put_contents("data/amir.txt", "channel");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"آیدی کانال را با @ وارد کنید",
 ]);
}
elseif($amir == 'channel' && $from_id == $admin){
file_put_contents("data/amir.txt", $text);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تنظیم شد",
 ]);
}

elseif($text == 'تنظیم پشتیبانی' && $from_id == $admin){
file_put_contents("data/user.txt", "user");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"آیدی پشتیبانی را با @ وارد کنید",
 ]);
}
elseif($user == 'user' && $from_id == $admin){
file_put_contents("data/user.txt", $text);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تنظیم شد",
 ]);
}
//========================\\

//=============================// 
elseif($text == '/panel' and $from_id == $admin){
 SendMessage($chat_id,"به پنل مدیریت خوش اومدید","html","true",$button_manage);
}
elseif($text == '▫️ امار ربات ▪️' and $from_id == $admin){
 $txtt = file_get_contents('admin/Member.txt');
 $member_id = explode("\n",$txtt);
 $mmemcount = count($member_id) -1;
 SendMessage($chat_id,"▪️ امار فعلی : $mmemcount ","html","true");
}
elseif($text == '▫️ فروارد' and $from_id == $admin){
 file_put_contents("user/".$from_id."/command.txt","s2a fwd");
 SendMessage($chat_id,"پیام مورد نظر را فوروارد کنید","html","true",$button_back);
}
elseif($command == 's2a fwd' and $from_id == $admin){
 file_put_contents("user/".$from_id."/command.txt","none");
 SendMessage($chat_id,"▪️ پیام خود فوروارد کنید","html","true",$button_manage);
 $all_member = fopen( "admin/Member.txt", 'r');
 while( !feof( $all_member)) {
  $user = fgets( $all_member);
  ForwardMessage($user,$admin,$message_id);
 }
}
elseif($text == 'پیام ▪️' and $from_id == $admin){
 file_put_contents("user/".$from_id."/command.txt","s2a");
 SendMessage($chat_id,"▪️ پیام خود را بفرسید","html","true",$button_back);
}
elseif($command == 's2a' and $from_id == $admin){
 file_put_contents("user/".$from_id."/command.txt","none");
 SendMessage($chat_id,"پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
 $all_member = fopen( "admin/Member.txt", 'r');
 while( !feof( $all_member)) {
  $user = fgets( $all_member);
  if($sticker_id != null){
   SendSticker($user,$stickerid);
  }
  elseif($videoid != null){
   SendVideo($user,$videoid,$caption);
  }
  elseif($voiceid != null){
   SendVoice($user,$voiceid,'',$caption);
  }
  elseif($fileid != null){
   SendDocument($user,$fileid,'',$caption);
  }
  elseif($musicid != null){
   SendAudio($user,$musicid,'',$caption);
  }
  elseif($photoid != null){
   SendPhoto($user,$photoid,'',$caption);
  }
  elseif($text != null){
   SendMessage($user,$text,"html","true");
  }
 }
}

$txxt = file_get_contents('admin/Member.txt');
$pmembersid= explode("\n",$txxt);
if (!in_array($chat_id,$pmembersid)){
 $aaddd = file_get_contents('admin/Member.txt');
 $aaddd .= $chat_id."\n";
 file_put_contents('admin/Member.txt',$aaddd);
}unlink('error_log');
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