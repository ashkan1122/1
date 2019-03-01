<?php
/*
سلام دوستان این سورس ضدلینک ترکیبی رو بخاطر این که خیلیا دنبال سورس خوب بودن اوپن میکنم 
بیشتر نیتم اینه که جلو خرج الکیتونو بگیرم اون مقدار پولی که به سورس ضدلینک میدین رو جای 
واجب ازش استفاده کنید... خوش باشیدو خرم 
#التماس_دعا
#سیناالفام
@tel_fire
@telfire
*/
//===========  sina alfa ===========//
ob_start();
error_reporting(0);

set_time_limit(0);

flush();

define('API_KEY','726643395:AAH3Jii2EnnxfJQoXp9dE_S0Aq7Ve3vDtPw');
//============ sina alfa ===========//
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
function sendmessage($chat_id, $text)
{
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => "MarkDown"
    ]);
}
function SendMessage2($ChatId, $TextMsg)
{
 makereq('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
]);
}
function SendSticker($ChatId, $sticker_ID){
 makereq('sendSticker',[
'chat_id'=>$ChatId,
'sticker'=>$sticker_ID
]);
}
function sendaction($chat_id, $action){
    bot('sendchataction', [
        'chat_id' => $chat_id,
        'action' => $action
    ]);
}

function Forward($KojaShe, $AzKoja, $KodomMSG)
{
    bot('ForwardMessage', [
        'chat_id' => $KojaShe,
        'from_chat_id' => $AzKoja,
        'message_id' => $KodomMSG
    ]);
}
function  getUserProfilePhotos($token,$from_id) {
  @$url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  @$result = file_get_contents($url);
  @$result = json_decode ($result);
  @$result = $result->result;
  return $result;
}
function check_filter($str){
	global $filterget;
	foreach($filterget as $d){
		if (mb_strpos($str, $d) !== false) {
			return true;
		}
	}
}
function save($filename,$TXTdata)
	{
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
//============ سینا الفا ===========//
$update = json_decode(file_get_contents('php://input'));
$json = file_get_contents('php://input');
$telegram = urldecode ($json);
$results = json_decode($telegram);
$message = $update->message;
$is_bot = $results->message->from->is_bot;
$text = $update->message->text;
$textmessage = isset($update->message->text)?$update->message->text:'';
$from_id = $message->from->id;
$fromm_id = $update->inline_query->from->id;
$fromid = $update->callback_query->from->id;
$chat_id = $message->chat->id;
$chatid = $update->callback_query->message->chat->id;
$message_id = $message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$type = $update->message->chat->type;
////////////////////////////
$forward = $update->message->forward_from;
$photo = $update->message->photo;
$video = $update->message->video;
$location = $update->message->location;
$joinusername = $update->message->new_chat_member->from->username;
$joinmember = $update->message->new_chat_member;
$leftmember = $update->message->left_chat_member;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $update->message->contact;
$game = $update->message->game;
$music = $update->message->audio;
$gif = $update->message->gif;
$voice = $update->message->voice;
$edit = $update->edited_message;

$cllfor = $update->callback_query->from->id;
//
$username = $update->message->from->username;
$bcpv = file_get_contents("bcpv.txt");
$bcgap = file_get_contents("bcgap.txt");

$step = file_get_contents("step.txt");

$token = ''; // 726643395:AAH3Jii2EnnxfJQoXp9dE_S0Aq7Ve3vDtPw   //////          ««« /// 

$newchatmemberu = $update->message->new_chat_member->username;
$joinusername = $update->message->new_chat_member->from->username;
$joinmember = $update->message->new_chat_member;
$leftmember = $update->message->left_chat_member;
$newchatmemberu = $update->message->new_chat_member->username;
$messageid = $update->callback_query->message->message_id;

$username = $message->from->username;
$tedadmsg = $update->message->message_id;
$namegroup = $update->message->chat_title;
$gpname = $update->message->chat->title;
$gpname2 = $update->callback_query->message->chat->title;
$data = $update->callback_query->data;
$name = $message->from->first_name;
                     // تاریخ
$dt = json_decode(file_get_contents("http://virus23.mehrbot.ir/date-time/"));
$date = $dt->date_fa;
$time = $dt->time_fa;
$time_zone = '0/1/0';
$today = date("Y-m-d", time()+$time_zone);
$expire = file_get_contents("data/$chat_id/expire.txt");
//
$get = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$rank = $info['result']['status'];
$reply = $update->message->reply_to_message->message_id;
	//////////////////
$admin  = ; // @ashkan41322
$Dev = ; // @ashkan41322
mkdir("data");
mkdir("data/$from_id");
$tc = $update->message->chat->type;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;

$channel = tel_fire; // https://t.me/joinchat/G0seOhaZoRJKvZsawQ_ZuQ
$kanal = tel_fire; // https://t.me/joinchat/G0seOhaZoRJKvZsawQ_ZuQ
$zekr = file_get_contents("https://site.com/1/zekr.php");
$hadis = file_get_contents("https://site.com/1/hadis.php");
$danestani  = file_get_contents("https://site.com/1/danestani.php");

///////////----------------------------///////////
@$locklink = file_get_contents("data/$chat_id/locklink.txt");
@$locktag = file_get_contents("data/$chat_id/locktag.txt");
@$lockphoto = file_get_contents("data/$chat_id/lockphoto.txt");
@$lockforward = file_get_contents("data/$chat_id/lockforward.txt");
@$lockvideo = file_get_contents("data/$chat_id/lockvideo.txt");
@$locklocation = file_get_contents("data/$chat_id/locklocation.txt");
@$locksticker = file_get_contents("data/$chat_id/locksticker.txt");
@$lockdocument = file_get_contents("data/$chat_id/lockdocument.txt");
@$lockcontact = file_get_contents("data/$chat_id/lockcontact.txt");
@$lockgame = file_get_contents("data/$chat_id/lockgame.txt");
@$lockmusic = file_get_contents("data/$chat_id/lockmusic.txt");
@$lockgif = file_get_contents("data/$chat_id/lockgif.txt");
@$lockvoice = file_get_contents("data/$chat_id/lockvoice.txt");
@$lockbot = file_get_contents("data/$chat_id/lockbot.txt");
@$fosh= file_get_contents("data/$chat_id/lockfosh.txt");
@$opera= file_get_contents("data/$chat_id/lockopera.txt");
@$locktext = file_get_contents("data/$chat_id/locktext.txt");
@$lockall = file_get_contents("data/$chat_id/lockall.txt");
@$wel = file_get_contents("data/$chat_id/wel.txt");
@$add = file_get_contents("data/$chat_id/add.txt");

@$setlink = file_get_contents("data/$chat_id/setlink.txt");
@$settag = file_get_contents("data/$chat_id/settag.txt");
@$setedite = file_get_contents("data/$chat_id/setedite.txt");
@$setphoto = file_get_contents("data/$chat_id/setphoto.txt");
@$setforward = file_get_contents("data/$chat_id/setforward.txt");
@$setvideo = file_get_contents("data/$chat_id/setvideo.txt");
@$setlocation = file_get_contents("data/$chat_id/setlocation.txt");
@$setsticker = file_get_contents("data/$chat_id/setsticker.txt");
@$setdocument = file_get_contents("data/$chat_id/setdocument.txt");
@$setcontact = file_get_contents("data/$chat_id/setcontact.txt");
@$setgame = file_get_contents("data/$chat_id/setgame.txt");
@$setmusic = file_get_contents("data/$chat_id/setmusic.txt");
@$setgif = file_get_contents("data/$chat_id/setgif.txt");
@$setvoice = file_get_contents("data/$chat_id/setvoice.txt");
@$settext = file_get_contents("data/$chat_id/settext.txt");
@$sakht = file_get_contents("data/$chat_id/setsakht.txt");
@$mt = file_get_contents("data/$chat_id/mt.txt");
////////-------------------------------///////////
mkdir("data/$chat_id/$from_id");
$inch = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@tel_fire&user_id=".$from_id);
$start = json_encode([
                        'inline_keyboard' => [
                            [
                                ['text' => "🌹معرفی ربات🌹", 'callback_data' => "a"]
                            ],
							 [
                                ['text' => "🌹راهنما🌹", 'callback_data' => "b"]
                            ],
                            [['text'=>"🌹کانال🌹",'url'=>"http://telegram.me/tel_fire"]]
    ]
]);
$place = json_encode([
                        'inline_keyboard' => [
                            [
                                ['text' => "دستورات اصلی", 'callback_data' => "c"]
                            ],
							 [
                                ['text' => "دستورات فرعی", 'callback_data' => "d"]
                            ],
							 [
                                ['text' => "🌹برگشت🌹", 'callback_data' => "back"]
                            ],
    ]
]);
@$inlinebutton = json_encode([
    'inline_keyboard'=>[
           [
         ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/tel_fire"]
     ],
   ]
   ]);
//============ سینا الفا ===========//
if(strpos($inch , '"status":"left"') == true ) { 
      sendAction($chat_id, 'typing');
bot('sendMessage',[ 
            'message_id' => $message_id2,
        'chat_id'=>$update->message->chat->id, 
        'text'=>"🔒 ربات قفل است.

⚠️ برای فعالیت ربات لطفا در کانال ما عضو شید

♻️ پس از عضویت لطفا /start را بزنید.", 
 'parse_mode'=>'MarkDown', 
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[ 
                [ 
                    ['text'=>"ورود به کانال",'url'=>"https://telegram.me/tel_fire"] 
                ] 
            ] 
        ]) 
    ]); 
}

elseif($text == "/start") {
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }	
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "بسم الله الرحمن الرحیم
 سلام علیکم و رحمة الله و برکاته
 
 به ربات  ضد لینک ما خوش اومدید 
@$kanal",
        'parse_mode' => "html",
		'reply_markup' =>$start
    ]);
}
elseif($data == "back")
{
 bot('editMessagetext', [
     'message_id' => $message_id2,
        'chat_id' => $chatid,
        'text' => "بسم الله الرحمن الرحیم
 سلام علیکم و رحمة الله و برکاته
 
 به ربات  ضد لینک ما خوش اومدید 
@$kanal",
        'parse_mode' => "html",
		'reply_markup' =>$start
		]);
}
		if ($type2 == "supergroup") {
	 if (strpos($supergrouplist , "$chat_id") == false){
 $txxt = file_get_contents('supergroups.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('supergroups.txt');
      $aaddd .= $chat_id."\n";
  file_put_contents('supergroups.txt',$aaddd);
    }
	}
}
		if ($type2 == "supergroup" || $type2 == "group") {
			if (!file_exists("data/$chat_id/owner.txt")) {
	file_put_contents("data/$chat_id/owner.txt","".$creator['id']."");
			}
    }
elseif($data == "a"){
bot('editMessagetext', [
        'chat_id' => $chatid,
        'message_id' => $message_id2,
        'text' => "از دکمه های زیر استفاده کنید
		",
        'parse_mode' => "html",
		'reply_markup' =>json_encode([
                        'inline_keyboard' => [
                            [
							['text' => "creator & channel", 'url' => "https://telegram.me/tel_fire"]
                            ],
							[
							['text' => "راهنما", 'callback_data' => "b"]
							],
						    [
                            ['text' => "🌹برگشت🌹", 'callback_data' => "back"]
                            ]
    ]
])
    ]);
}
elseif($data == "b"){
bot('editMessagetext', [
    'message_id' => $message_id2,
        'chat_id' => $chatid,
        'text' => "سلام علیکم دوستان گران بها
        این ربات برای راحتی کارشما ساخته شده است 
        وگروه های شمارو مدیریت میکند 
        برای اینکه بتونید راحت از دستورات ربات
        استفاده کنید میتونید از دکمه های
        قفل اصلی و فرعی واقع در دکمه ی نظارت 
        استفاده کنید و راهنمایی لازم رو بگیرید
        تشکر از دوستان گران بها",
        'parse_mode' => "html",
        	'reply_markup' =>$place
    ]);
}
elseif($data == "c"){
bot('sendMessage', [
    'message_id' => $message_id2,
        'chat_id' => $chatid,
        'text' => "🔹سلام دوستان از دستورات زیر استفاده کنید

🔺اضافه کردن ربات به گروه

🔸 /add
➖➖➖➖➖➖➖➖
🔺حذف از لیست تمامی گروه های ربات

🔸 /rem
➖➖➖➖➖➖➖➖
🔹قفل رسانه ها

🔺قفل صدا

🔸 /Mute

🔺ازاد کردن صدا

🔸 /unmute
➖➖➖➖➖➖➖➖
🔺روشن کردن خوش آومدگویی

🔸 /welcome on | /welcomeon

🔺خاموش کردن خوش آمدگویی

🔸 /welcome off | /welcomeoff
➖➖➖➖➖➖➖➖
🔺نمایش شناسه گروه

🔸 !id
➖➖➖➖➖➖➖➖
🔺اطلاعات گروه

🔸 /info
➖➖➖➖➖➖➖➖
🔺 نمایش دستورات اصلی ربات

🔸 /help
🔸 !help
➖➖➖➖➖➖➖➖
🔺نمایش امار گروه

🔸 امار
➖➖➖➖➖➖➖➖
🔺دریافت ذکر روز

🔸 /zeker

🔺دریافت دانستنی

🔸 /danestani

🔺دریافت حدیث

🔸 /hadis

🔺دریافت ساعت و تاریخ

🔸 /time
                @tel_fire
",
        'parse_mode' => "html"
    ]);
}
if($text == '/time'){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"
ساعت:$time
تاریخ:$date",
        'parse_mode'=>"MarkDown",
            ]);
}

if($text == '/zekr'){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$zekr,
        'parse_mode'=>"MarkDown",        
            ]);
}

if($text == '/hadis'){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$hadis,
        'parse_mode'=>"MarkDown",
            ]);
}

if($text == '/danestani'){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$danestani,
        'parse_mode'=>"MarkDown",
            ]);
}
elseif($data == "d"){
bot('editMessagetext', [
        'chat_id' => $chatid,
        'message_id' => $message_id2,
               'text'=>"از دستورات استفاده کنید
              =============
             -- برای قفل لینک --
                 قفل لینک
                 /locklink
                /lock link 
                 lock link
                  locklink
            --  برای ازاد کردنش --
              آزاد کردن لینک
                unlock link
               unlocklink
               /unlocklink
               /unlock link
              ==========
              -- برای قفل عکس  --
                 /lock photo 
	             lock photo
        	     /lockphoto
	             lockphoto    
            	قفل عکس
             	--  برای ازاد کردنش --
                /unlock photo
            	/unlockphoto
            	unlockphoto 
	            unlock photo
	            آزاد کردن عکس
             	===========
             --	قفل کردن ادیت --
               /lock edit
               /lockedit
               lock edit
               lockedit
               قفل ادیت
               -- برای ازاد کردنش --
               آزاد کردن ادیت
               /unlockedit
               /unlock edit
               unlockedit
               unlock edit
               ===========
               -- قفل ربات  --
               قف ربات     
               /lock bot
              --  ازاد کردن ربات -- 
              /unlock bot 
              آزاد کردن ربات
              ====================
              --برای قفل کردن  متن  --
              /mute text     /mutetext
                      قفل متن
              --  ازاد کردن متن  --
                 /unmute text   /unmutetext
             آزاد کردن متن
              ==================
              --  برای قفل کردن کل قفل ها -- 
              /mute all     /muteall
              قفل همه 
              --   ازاد کردن قفل ها --
              /unmute all     /unmute all
                    آزاد کردن همه 
              ====================
              برای فعال سازی جوین اجباری گروه
                /join on
                و برای غیر فعال سازی از
                /join off
                استفاده کنید
               =================
               ",
            'parse_mode' => "html",
		'reply_markup' =>json_encode([
                        'inline_keyboard' => [
						    [
                            ['text' => "🌹برگشت🌹", 'callback_data' => "back"]
                            ]
    ]
])
    ]);
    }
elseif ($text == "/add" or $text == "ادد" or $text == "اضافه کردن" ) {
if ($tc == 'group' | $tc == 'supergroup'){
  $userr = file_get_contents('gaps.txt');
  $memberrs = explode("\n",$userr);
  if (!in_array($chat_id,$memberrs)){
  $add_userr = file_get_contents('gaps.txt');
  $add_userr .= $chat_id."\n";
  file_put_contents('gaps.txt',$add_userr);
}    
  mkdir("data/$chat_id");   
  file_put_contents("data/$chat_id/locklink.txt","✖️");    
  file_put_contents("data/$chat_id/locktag.txt","✖️"); 
  file_put_contents("data/$chat_id/lockphoto.txt","✖️");
  file_put_contents("data/$chat_id/lockforward.txt","✖️");
  file_put_contents("data/$chat_id/lockvideo.txt","✖️");
  file_put_contents("data/$chat_id/locklocation.txt","✖️");
  file_put_contents("data/$chat_id/locksticker.txt","✖️");
  file_put_contents("data/$chat_id/lockdocument.txt","✖️");
  file_put_contents("data/$chat_id/lockcontact.txt","✖️");
  file_put_contents("data/$chat_id/lockgame.txt","✖️");
  file_put_contents("data/$chat_id/lockmusic.txt","✖️");
  file_put_contents("data/$chat_id/lockgif.txt","✖️");
  file_put_contents("data/$chat_id/lockvoice.txt","✖️");
  file_put_contents("data/$chat_id/lockbot.txt","✖️");
  file_put_contents("data/$chat_id/lockedite.txt","✖️");
  file_put_contents("data/$chat_id/locktext.txt","✖️"); 
  file_put_contents("data/$chat_id/lockall.txt","✖️");
  file_put_contents("data/$chat_id/wel.txt","✖️");   
  file_put_contents("data/$chat_id/setlink.txt","del");
  file_put_contents("data/$chat_id/settag.txt","del");
  file_put_contents("data/$chat_id/setforward.txt","del");  
  file_put_contents("data/$chat_id/setvideo.txt","del");
  file_put_contents("data/$chat_id/setphoto.txt","del");
  file_put_contents("data/$chat_id/setlocation.txt","del");
  file_put_contents("data/$chat_id/setsticker.txt","del");
  file_put_contents("data/$chat_id/setdocument.txt","del");
  file_put_contents("data/$chat_id/setcontact.txt","del");
  file_put_contents("data/$chat_id/setgame.txt","del"); 
  file_put_contents("data/$chat_id/setmusic.txt","del");
  file_put_contents("data/$chat_id/setgif.txt","del");
  file_put_contents("data/$chat_id/setvoice.txt","del");
  file_put_contents("data/$chat_id/settext.txt","del");
  file_put_contents("data/$chat_id/setsakht.txt","off");   
  file_put_contents("data/$chat_id/add.txt","✔️");		
  sendaction($chat_id,'typing');
  $sss = json_decode(file_get_contents("http://api.telegram.org/bot$token/sendmessage?chat_id=$chat_id&text=◻&parse_mode=html"));
$shetmsg = $sss->result->message_id;
$hh = $shetmsg;
  bot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id' => $hh,
 'text'=>'◼️️◻️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id' => $hh,
 'text'=>'◼️◼️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id' => $hh,
 'text'=>'◼️◼️◼️️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id' => $hh,
 'text'=>'◼️◼️◼️️◼️️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id' => $hh,
 'text'=>'◼️◼️◼️️◼️️️◼️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id' => $hh,
 'text'=>"این گروه به لیست گروه های مدیریتی  ربات پیوست وشما میتونید با ربات انصارالمهدی مدیریت کنید

  نکته : بازدن دوباره  دستور 
 add  باعث میشوید تنظیمات گروه ریست شود  
  
=============
برای مدیریت گروه خود ازدستور 
!help 
استفاده کنید
==============
مدیریت ربات توسط دوستان بزرگوار انصار و کارگروه ربات و برنامه نویسی
با بهترین برنامه نویس های امنیتی مجازی 
@tel_fire" ]);
  bot('sendMessage',[
      'chat_id'=>$Dev,
      'text'=>"نام گروه   : 
      $gpname 
                
با ایدی $chat_id                
در زمان و تاریخ 
$time
$date
به لیست گروه های ربات پیوست.",
      'parse_mode'=>'html',
    ]);
}
}
if($text == '/rem' && $from_id == $Dev && $type == "supergroup"  ){
  save("data/$chat_id/add.txt","✖️");    
  sendaction($chat_id,'typing');
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
       گروه از لیست گروه های مدیریتی ربات خارج شد
      ===============================================
      @tel_fire
      ",
      'parse_mode'=>'html',
    ]);
}  
if($text == '/rem' && $from_id == $Dev && $type == "supergroup"  ){    
  bot('sendMessage',[
      'chat_id'=>$Dev,
      'text'=>"نام گروه   : 
      $gpname 
                
با ایدی $chat_id                
در زمان و تاریخ 
$time          $date
از لیست گروه های ربات خارج شد.
===============================================
      @tel_fire
      ",
      'parse_mode'=>'html',
    ]);
} 
elseif($text =="/help" or $text == "help" or $text == "!help" && $add == "✔️" ){
bot('sendMessage', [
        'chat_id' => $chat_id,
        'text'=>"به راهنمای اصلی خوش اومدی 
               تو میتونی با ربات ما بهترین کیفیت 
               و بهترین سرعت رو تجربه کنی",
        'parse_mode' => "html",
		'reply_markup' =>json_encode([
                        'inline_keyboard' => [
                     [
                    	['text' => "تنطیمات", 'callback_data' => "d"]
                     ],
                      [
                            ['text' => "🌹برگشت🌹", 'callback_data' => "back"]
                            ]
                      ]
               ])
           ]);
    }
///========================///
if($text == '/mute all' or $text == '/muteall' or $text == 'قفل همه' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockall == "✖️"){    
file_put_contents("data/$chat_id/lockall.txt","✔️");    
SendMessage($chat_id,"قفل همه فعال شد ✔️
========================
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل همه فعال شد ✔️
========================
#channel = @$kanal 
========================
");
}
}
}

if($text == '/unmute all' or $text == '/unmuteall' or $text == 'آزاد کردن همه' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockall == "✔️" ){    
file_put_contents("data/$chat_id/lockall.txt","✖️");  
SendMessage($chat_id,"قفل همه ازاد شد ️
========================
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل همه ازاد شد
========================
#channel = @$kanal 
========================
");
}
}
}
//.......................
//sakht//
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/unlock strict" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setsakht.txt","off");    
SendMessage($chat_id," #strict disabled
");
}
if($text == "/lock strict" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setsakht.txt","on");    
SendMessage($chat_id," #strict activated
");
}
}
///////////////////////////////
if($mt == "on️"){ 
if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
  SendMessage($chat_id,"سلام🌹
$name 
برا اینکه تو گروه بخوای چت کنی باید تو کانال ما جوین بشی وگرنه پیام هات پاک میشه
بعد از ورود به کانال برگرد تو گروه و با خیال راحت از چت کردن لذت ببر
ایدی کانال ما:
🆔: @$kanal 
========================");

}
}
}
//=================////////////////
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/join on"){
SendMessage($chat_id,"وضعیت جوین روشن شد");    
file_put_contents("data/$chat_id/mt.txt","on️"); 
}


if($text == "/join off"){
SendMessage($chat_id,"وضعیت جوین خاموش شد");   
file_put_contents("data/$chat_id/mt.txt","off");
}
}
//============= قفل ها  ============//
if($text == '/locklink' or $text == "قفل لینک" or $text == "/lock link" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklink == "✖️"){    
  file_put_contents("data/$chat_id/locklink.txt","✔️");    
SendMessage($chat_id,"قفل لینک  فعال شد
========================
#channel = @$kanal 
========================");
}else{
    SendMessage($chat_id,"قفل لینک  فعال شد
========================
#channel = @$kanal 
========================");
}
}
}  

if($text == '/unlock link' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklink == "✔️" ){    
file_put_contents("data/$chat_id/locklink.txt","✖️");  
SendMessage($chat_id,"قفل لینک  غیر فعال شد
========================
#channel = @$kanal 
========================
");
}else{
sendMessage($chat_id,"قفل لینک  غیر فعال شد
========================
#channel = @$kanal
========================
");
}
}
}
///////////////////==================================
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){    
preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locklink == "✔️" || $lockall == "✔️" ){     
if($setlink == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlink == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به علت ارسال لینک  حذف شد  🔰
=========================================
#Channel  :  @$kanal");
}
}
}
}
if($rank == "creator" or $rank == "administrator" ){   
if($text == "/link del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setlink.txt","del");    
SendMessage($chat_id,"پیام حاوی لینک حذف میشود
");
}
if(preg_match('/^(.*)([@]@|[@]@|@)(.*)|([#]#|[#]#|#)(.*)|(.*)([@]@|[@]@|@)|(.*)[@]@(.*)|[@]@(.*)|(.*)[@]@|(.*)[@]@(.*)|[@]@(.*)|(.*)[@]@/',$text) ){
preg_match('/^(.*)([@]@|[@]@|@)(.*)|([#]#|[#]#|#)(.*)|(.*)([@]@|[@]@|@)|(.*)[@]@(.*)|[@]@(.*)|(.*)[@]@|(.*)[@]@(.*)|[@]@(.*)|(.*)[@]@/',$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" || $lockall == "✔️" ){     
if($settag == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settag == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن تگ و ایدی حذف شد 🔰

=========================================
#Channel  :  @$kanal");
}
}
}
}
///////////////==============////
if($text == '/lock tag' or $text == 'قفل تگ' or $text == '/locktag'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktag == "✖️"){    
file_put_contents("data/$chat_id/locktag.txt","✔️");    
SendMessage($chat_id,"قفل تگ فعال شد ✔️
========================
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل تگ فعال شد ✔️
	========================
#channel = @$kanal 
========================
");
}
}
}
if($text == '/unlock tag' or $text == '/unlocktag'  or $text == 'آزاد کردن تگ' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktag == "✔️" ){    
file_put_contents("data/$chat_id/locktag.txt","✖️");  
SendMessage($chat_id,"قفل تگ ازاد شد  ✔️
	========================
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل تگ ازاد شد  ✔️
	========================
#channel = @$kanal 
========================
");
}
}
}
if($text == "/tag del" && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
file_put_contents("data/$chat_id/settag.txt","del");    
SendMessage($chat_id,"از این پس هرکسی تگ بفرستد پیام حاوی تگ دار او حذف میشود
	========================
#channel = @$kanal 
========================
");
}
}

if($text == "/tag kick" && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
save("data/$chat_id/settag.txt","kick");    
SendMessage($chat_id," ازاین پس هرکسی  تگ بفرستد از گروه حذف میشود ✔️
	========================
#channel = @$kanal 
========================
");
}
}
////////=======////
if($rank == "creator" or $rank == "administrator" ){   
if($text == "/link del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setlink.txt","del");    
SendMessage($chat_id," 🔰 از این پس هرکسی لینک بفرستد از گروه خارج خواهد شد
=========================================
#Channel  :  @$kanal
");
}
if($text == "/link kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setlink.txt","kick");    
SendMessage($chat_id,"🔰 از این پس هرکسی لینک بفرستد از گروه خارج خواهد شد
=========================================
#Channel  :  @$kanal
");
}
}
//////======================/////////
if($text == '/lock bot' or $text == '/lockbot' or $text == 'قفل ربات' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockbot == "✖️"){    
file_put_contents("data/$chat_id/lockbot.txt","✔️");    
 SendMessage($chat_id,"قفل ربات فعال شد	✔️
	هر رباتی دعوت شود بلافاصله حذف خواهد شد
	========================
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل ربات فعال شد	✔️
	هر رباتی دعوت شود بلافاصله حذف خواهد شد
	========================
#channel = @$kanal 
========================
");
}
}
}

if($lockbot == "✔️" ){ 
if (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbot == "✔️"  && $newchatmemberu != "social_test_bot") {
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'ban bot.',
  'parse_mode'=>'html'
 ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
}

if($text == '/unlock bot' or $text == '/unlockbot' or $text == 'آزاد کردن ربات' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockbot == "✔️" ){    
file_put_contents("data/$chat_id/lockbot.txt","✖️");  
SendMessage($chat_id," قفل ربات غیر فعال شد ✔️
========================
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id," قفل ربات غیر فعال شد ✔️
========================
#channel = @$kanal 
========================
");
}
}
}
/////////======//////
if($joinmember){
if($wel == "✔️"){    
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>" بسم الله الرحمن الرحیم
 سلام علیکم و رحمة الله و برکاته
 $name  به گروه خوش اومدی ",
        ]);
  }   
}

if($text == "/welcome on" or $text == "/welcomeon" or $text == "خوش آمد گویی فعال"&& $add == "✔️"){
if($add == "✔️"){   
if($rank == "creator" or $rank == "administrator"){
save("data/$chat_id/wel.txt","✔️");    
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"خوش آمد گویی فعال شد",
        ]);
  }   
}
}
if($text == "/welcome off" or $text == "/welcomeoff" or $text == "خوش آمد گویی غیر فعال" && $add == "✔️"){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){     
save("data/$chat_id/wel.txt","✖️");   
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"خوش آمد گویی غیر فعال شد",
        ]);
  }    
}
}

//////////////////////..............................///////////////////////
if($text == "/id" or $text == "/Id" or $text == "!id" or $text == "id" or $text == "ایدی"){
if ($tc == 'group' | $tc == 'supergroup'){
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
bot('sendphoto',[
    'photo'=>$getuserphoto,
     'chat_id'=>$chat_id,
    'caption'=>"
🔹 عکس شما  🔹 
    ⚜️نام شما = $name 
🔰ایدی شما =  $from_id
〰〰〰〰〰〰〰〰〰〰
🔗ایدی گپ = $chat_id
🖋نام گپ = $gpname 
$time         $date
",
'parse_mode'=>'html'
    ]); 
}}
if($text == "/id" or $text == "/Id" or $text == "!id" or $text == "id" or $text == "ایدی"){
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
bot('sendphoto',[
    'photo'=>$getuserphoto,
     'chat_id'=>$from_id,
    'caption'=>"
🔹 عکس شما  🔹 
    ⚜️نام شما = $name 
🔰ایدی شما =  $from_id
〰〰〰〰〰〰〰〰〰〰
$time
$date
",
    'parse_mode'=>'html'
    ]); 
}
if($reply && $text =="/pin" && $add == "✔️"){
if($add == "✔️"){     
if($rank == "creator" or $rank == "administrator"){
 bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=> $update->message->reply_to_message->message_id
      ]);
   }
}
}

if( $text =="/unpin" && $add == "✔️"){
if($add == "✔️"){ 
if($rank == "creator" or $rank == "administrator"){
 bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
      ]);
   }
}
}
////=====================////
if($text == '/mute photo' or $text == '/mutephoto' or $text == 'قفل عکس' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockphoto == "✖️"){    
file_put_contents("data/$chat_id/lockphoto.txt","✔️");    
SendMessage($chat_id,"قفل عکس فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل عکس فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}}}
if($text == '/unmute photo' or $text == '/unmutephoto' or $text == 'آزاد کردن قفل عکس' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockphoto == "✔️" ){    
file_put_contents("data/$chat_id/lockphoto.txt","✖️");  
SendMessage($chat_id,"قفل عکس غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل عکس غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}}}
if($rank == "creator" or $rank == "administrator" ){
if($text == "/photo del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setphoto.txt","del");    
SendMessage($chat_id,"هر پیام حاوی عکس حذف میشود
");
}}
if($text == "/photo kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setphoto.txt","kick");    
SendMessage($chat_id," فرد ارسال کننده عکس از گروه حذف میشود
");}}
if($photo){
if($rank != "creator" && $rank != "administrator"){
if($lockphoto == "✔️" || $lockall == "✔️" ){      
if($setphoto == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setphoto == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن عکس از گروه اخراج شد");
}}}}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute forward' or $text == '/muteforward' or $text == "قفل فروارد" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockforward == "✖️"){    
file_put_contents("data/$chat_id/lockforward.txt","✔️");    
SendMessage($chat_id,"قفل فروارد فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل فروارد فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}}}
if($text == '/unmute forward' or $text == '/unmuteforward' or $text == "آزاد کردن قفل فروارد" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockforward == "✔️" ){    
file_put_contents("data/$chat_id/lockforward.txt","✖️");  
SendMessage($chat_id,"قفل فروارد غیرفعال شد
========================             
#channel = @$kanal 
========================");
}else{
SendMessage($chat_id,"قفل فروارد غیرفعال شد
========================             
#channel = @$kanal 
========================");
}}}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/forward del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setforward.txt","del");    
SendMessage($chat_id,"پیام فروارد شده از گروه حذف میشود
");
}
if($text == "/forward kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setforward.txt","kick");    
SendMessage($chat_id," هرکسی متن فروارد بفرستد از گروه اخراج میشود
");
}
}
if($forward){
if($rank != "creator" && $rank != "administrator"){
if($lockforward == "✔️" || $lockall == "✔️" ){     
if($setforward == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setforward == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فروارد کردن پی ام  اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute video' or $text == '/mutevideo' or $text == "قفل فیلم" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvideo == "✖️"){    
file_put_contents("data/$chat_id/lockvideo.txt","✔️");    
SendMessage($chat_id,"قفل فیلم فعال شد ✔️
========================             
#channel = @$kanal 
========================");
}else{
SendMessage($chat_id,"قفل فیلم فعال شد ✔️
========================             
#channel = @$kanal 
========================");
}
}
}
if($text == '/unmute video' or $text == '/unmutevideo' or $text == "آزاد کردن فیلم" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvideo == "✔️" ){    
file_put_contents("data/$chat_id/lockvideo.txt","✖️");  
SendMessage($chat_id,"قفل فیلم غیرفعال شد
========================             
#channel = @$kanal 
========================");
}else{
SendMessage($chat_id,"قفل فیلم غیرفعال شد
========================             
#channel = @$kanal 
========================");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/video del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setvideo.txt","del");    
SendMessage($chat_id,"پیام حاوی فیلم حذف میشود
");
}
if($text == "/video kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setvideo.txt","kick");    
SendMessage($chat_id,"هرکسی فیلم بفرستد از گروه حذف میشود
");
}
}
if($video){
if($rank != "creator" && $rank != "administrator"){
if($lockvideo == "✔️" || $lockall == "✔️" ){     
if($setvideo == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setvideo == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن فیلم از گروه اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute location' or $text == '/mutelocation' or $text == "قفل لوکشین" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklocation == "✖️"){    
file_put_contents("data/$chat_id/locklocation.txt","✔️");    
SendMessage($chat_id,"قفل لوکشین فعال شد ✔️
========================             
#channel = @$kanal 
========================");
}else{
SendMessage($chat_id,"قفل لوکشین فعال شد ✔️
========================             
#channel = @$kanal 
========================");
}
}
}
if($text == '/unmute location' or $text == '/unmutelocation' or $text == "آزاد کردن لوکشین" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklocation == "✔️" ){    
file_put_contents("data/$chat_id/locklocation.txt","✖️");  
SendMessage($chat_id,"قفل لوکشین غیرفعال شد
========================             
#channel = @$kanal 
========================");
}else{
    SendMessage($chat_id,"قفل لوکشین غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/location del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setlocation.txt","del");    
SendMessage($chat_id,"پیام حاوی لوکشین حذف میشود
");
}
if($text == "/location kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setlocation.txt","kick");    
SendMessage($chat_id," هرکسی لوکشین بفرستد از گروه حذف میشود
");
}
}
if($location){
if($rank != "creator" && $rank != "administrator"){
if($locklocation == "✔️" || $lockall == "✔️" ){    
if($setlocation == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlocation == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id
به دلیل فرستادن مکان یا لوکیشن از گروه اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute sticker' or $text == '/mutesticker' or $text == "قفل استیکر" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locksticker == "✖️"){    
file_put_contents("data/$chat_id/locksticker.txt","✔️");    
SendMessage($chat_id,"قفل استیکر فعال شد✔️
========================             
#channel = @$kanal 
========================");
}else{
    SendMessage($chat_id,"قفل استیکر فعال شد✔️
========================             
#channel = @$kanal 
========================");
}
}
}
if($text == '/unmute sticker' or $text == '/unmutesticker' or $text == "آزاد کردن استیکر" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locksticker == "✔️" ){    
file_put_contents("data/$chat_id/locksticker.txt","✖️");  
SendMessage($chat_id,"قفل استیکر غیرفعال شد
========================             
#channel = @$kanal 
========================");
}else{
SendMessage($chat_id,"قفل استیکر غیرفعال شد
========================             
#channel = @$kanal 
========================");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/sticker del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setsticker.txt","del");    
SendMessage($chat_id,"پیام حاوی استیکر حذف میشود
");
}
if($text == "/sticker kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setsticker.txt","kick");    
SendMessage($chat_id,"هرکس استیکر بفرستد از گروه حذف میشود
");
}
}
if($sticker){
if($rank != "creator" && $rank != "administrator"){
if($locksticker == "✔️" || $lockall == "✔️" ){   
if($setsticker == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setsticker == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن  استیکر از گروه اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute document' or $text == '/mutedocument' or $text == "قفل سند" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockdocument == "✖️"){    
file_put_contents("data/$chat_id/lockdocument.txt","✔️");    
SendMessage($chat_id,"قفل سند فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل سند فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}
}
}
if($text == '/unmute document' or $text == '/unmutedocument' or $text == "آزاد کردن سند" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockdocument == "✔️" ){    
file_put_contents("data/$chat_id/lockdocument.txt","✖️");  
SendMessage($chat_id,"قفل سند غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل سند غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/document del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setdocument.txt","del");    
SendMessage($chat_id," پیام حاوی سند حذف میشود
");
}
}
if($text == "/document kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setdocument.txt","kick");    
SendMessage($chat_id,"هرکس سند بفرستد از گروه حذف میشود
");
}
if($document){
if($rank != "creator" && $rank != "administrator"){
if($lockdocument == "✔️" || $lockall == "✔️" ){      
if($setdocument == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setdocument == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن سند از گروه اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute contact' or $text == '/mutecontact' or $text == "قفل مخاطب" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockcontact == "✖️"){    
file_put_contents("data/$chat_id/lockcontact.txt","✔️");    
SendMessage($chat_id,"قفل مخاطب فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل مخاطب فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}
}
}
if($text == '/unmute contact' or $text == '/unmutecontact' or $text == "آزاد کردن مخاطب" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockcontact == "✔️" ){    
file_put_contents("data/$chat_id/lockcontact.txt","✖️");  
SendMessage($chat_id,"قفل مخاطب غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل مخاطب غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/contact del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setcontact.txt","del");    
SendMessage($chat_id,"پیام حاوی مخاطب حذف میشود
");
}
if($text == "/contact kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setcontact.txt","kick");    
SendMessage($chat_id,"هرکس مخاطب بفرستد از گروه کیک میشود
");
}
}
if($contact){
if($rank != "creator" && $rank != "administrator"){
if($lockcontact == "✔️" || $lockall == "✔️" ){    
if($setcontact == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setcontact == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن شماره مخاطب از گروه اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute game' or $text == '/mutegame' or $text == "قفل بازی" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgame == "✖️"){    
file_put_contents("data/$chat_id/lockgame.txt","✔️");    
SendMessage($chat_id,"قفل بازی فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل بازی فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}
}
}
if($text == '/unmute game' or $text == '/unmutegame' or $text == "آزاد کردن بازی" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgame == "✔️" ){    
file_put_contents("data/$chat_id/lockgame.txt","✖️");  
SendMessage($chat_id,"قفل بازی غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل بازی غیرفعال شد
========================             
#channel = @$kanal 
========================
");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/game del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setgame.txt","del");    
SendMessage($chat_id,"پیام حاوی بازی حذف میشود
");
}
if($text == "/game kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setgame.txt","kick");    
SendMessage($chat_id,"هرکسی بازی بفرستد از گروه کیک میشود
");
}
}
if($game){
if($rank != "creator" && $rank != "administrator"){
if($lockgame == "✔️" || $lockall == "✔️" ){    
if($setgame == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setgame == "kick" || $sakht == "on" ){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن بازی از گروه اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute music'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockmusic == "✖️"){    
file_put_contents("data/$chat_id/lockmusic.txt","✔️");    
SendMessage($chat_id,"قفل موزیک فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل موزیک فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}
}
}
if($text == '/unmute music' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockmusic == "✔️" ){    
file_put_contents("data/$chat_id/lockmusic.txt","✖️");  
SendMessage($chat_id,"قفل موزیک غیر فعال شد
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل موزیک غیر فعال شد
========================             
#channel = @$kanal 
========================
");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/music del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setmusic.txt","del");    
SendMessage($chat_id,"پیام حاوی موزیک حذف میشود
");
}
if($text == "/music kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setmusic.txt","kick");    
SendMessage($chat_id,"هرکسی موزیک بفرستد  از گروه حذف میشود
");
}
}
if($music){
if($rank != "creator" && $rank != "administrator"){
if($lockmusic == "✔️" || $lockall == "✔️" ){    
if($setmusic == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setmusic == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن موزیک از گروه اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute gif' or $text == '/mutegif' or $text == "قفل گیف" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgif == "✖️"){    
file_put_contents("data/$chat_id/lockgif.txt","✔️");    
SendMessage($chat_id,"قفل گیف فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل گیف فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}
}
}
if($text == '/unmute gif' or $text == '/unmutegif' or $text == "آزاد کردن گیف" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgif == "✔️" ){    
file_put_contents("data/$chat_id/lockgif.txt","✖️");  
SendMessage($chat_id,"قفل گیف غیر فعال شد
========================             
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل گیف غیر فعال شد
========================             
#channel = @$kanal 
========================
");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/gif del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setgif.txt","del");    
SendMessage($chat_id," پیام حاوی گیف حذف میشود
");
}
if($text == "/gif kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setgif.txt","kick");    
SendMessage($chat_id," هرکس گیف بفرستد با گروه خدافظی میکند
");
}
}
if($gif){
if($rank != "creator" && $rank != "administrator"){
if($lockgif == "✔️" || $lockall == "✔️" ){    
if($setgif == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setgif == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id 
به دلیل فرستادن گیف از گروه اخراج شد");
}
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/mute voice' or $text == '/mutevoice' or $text == 'قفل ویس' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvoice == "✖️"){    
file_put_contents("data/$chat_id/lockvoice.txt","✔️");    
SendMessage($chat_id,"قفل ویس فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل ویس فعال شد ✔️
========================             
#channel = @$kanal 
========================
");
}
}
}
if($text == '/unmute voice' or $text == '/unmutevoice' or $text == 'آزاد کردن ویس'&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvoice == "✔️" ){    
file_put_contents("data/$chat_id/lockvoice.txt","✖️");  
SendMessage($chat_id,"قفل ویس غیر فعال شد 
========================             
#channel = @$kanal 
========================
");
}else{
    SendMessage($chat_id,"قفل ویس غیر فعال شد 
========================             
#channel = @$kanal 
========================
");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/voice del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setvoice.txt","del");    
SendMessage($chat_id,"پیام حاوی ویس حذف میشود
");
}
if($text == "/voice kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setvoice.txt","kick");    
SendMessage($chat_id," هرکسی ویس بفرستد از گروه اخراج میشود
");
}
}
if($voice){
if($rank != "creator" && $rank != "administrator"){
if($lockvoice == "✔️" || $lockall == "✔️" ){      
if($setvoice == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setvoice == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر  $from_id 
به دلیل فرستادن  ویس از گروه اخراج شد");
}
}
}
}
////////////////
if($text == '/mute text' or $text == '/mutetext' or $text =="قفل متن" && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktext == "✖️"){    
file_put_contents("data/$chat_id/locktext.txt","✔️");    
SendMessage($chat_id,"قفل متن فعال شد ✔️
========================
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل متن فعال شد ✔️
========================
#channel = @$kanal 
========================
");
}
}
}
if($text == '/unmute text'  or $text == '/unmutetext' or $text == 'آزاد کردن متن'&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktext == "✔️" ){    
file_put_contents("data/$chat_id/locktext.txt","✖️");  
SendMessage($chat_id,"قفل متن غیر فعال شد
========================
#channel = @$kanal 
========================
");
}else{
SendMessage($chat_id,"قفل متن غیر فعال شد
	========================
#channel = @$kanal 
========================
");
}
}
}
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/text del" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/settext.txt","del");    
SendMessage($chat_id,"پیام ها حذف میشوند
");
}
if($text == "/text kick" && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/settext.txt","kick");    
SendMessage($chat_id," هرکسی متنی بفرستد حذف میشود
");
}
}
if($text){
if($rank != "creator" && $rank != "administrator"){
if($locktext == "✔️" || $lockall == "✔️" ){  
if($settext == "del" || $sakht == "off"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settext == "kick" || $sakht == "on"){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"کاربر $from_id
به دلیل فرستادن متن  در زمان قفل بودن متن  « از گروه اخراج شد");
}
}
}
}

//////////////////////
if($rt && $text=="/kick" && $add == "✔️"){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){   
sendAction($chat_id, 'typing');
	bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"کاربر از  گروه اخراج شد 😅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
////========================///
elseif($text == '/ping' && $from_id == $Dev && $tc == "supergroup"){
    bot('sendMessage', [
        'chat_id' => $chat_id,
    'text'=>"ادمین جان عزیز
آنلاینم و همیشه در حال خدمت به انصارالله 
*_________________________________*
*🎭channel:* @tel_fire
* Dev :* @viperstar1",
    'parse_mode'=>'html'
    ]);
}
elseif($text == '/ping' && $from_id == $from_id && $tc == "supergroup"){
    bot('sendMessage', [
        'chat_id' => $chat_id,
    'text'=>"
آنلاینم و همیشه در حال خدمت به انصارالله 
*_________________________________*
*🎭channel:* @tel_fire
* Dev :* @viperstar1",
    'parse_mode'=>'html'
    ]);
}

if ($text && $type == "supergroup" ){
$newmessg = $allmsg + 1;
file_put_contents("data/allmsg.txt","$newmessg");
}
if ($text && $type == "private" ){
$newmessg = $allmsgpv + 1;
file_put_contents("data/allmsgpv.txt","$newmessg");
}
if ($text == "آمار"){
$allgp_get = file_get_contents('data/allgp.txt');
		$get_gp= explode("\n",$allgp_get);
		$geted = count($get_gp) - 1;
		$allmem_ = file_get_contents('Member.txt');
		$get_all= explode("\n",$allmem_);
		$getall = count($get_all) - 1;
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🎋 اعضا ~» $getall
🎋 همه گروه های ادد شده ~» $geted",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"tel_fire", 'url'=>"https://telegram.me/tel_fire"]
    ]
    ]
    ])
    ]);
}
elseif($text=="/info" ){
if( $from_id == "$owners" or  $from_id == $Dev or  $from_id == $admin){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شناسه کاربری گروه : *$chat_id*\nنام گروه : *$gpname*\nتعداد پیام ها : *$tedadmsg*\nنوع گروه : *$tc*",
  'parse_mode'=>'MarkDown',
	]);
	}
 }}
//============== panel ==============//
elseif($text == "/panel" or $text == "/admin" or $text == "مدیریت"  && $from_id == $dev or $from_id == $admin){
    sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"به به ادمین عزیز 
    به پنل مدیریت خوش اومدید",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	                            [
                    	['text' => "ارسال به همه گروه ها", 'callback_data' => "sendall"]
                     ],
                   [
                    	['text' => "ارسال به همه ممبرا", 'callback_data' => "sendpv"]
                     ],
                     [
                         ['text' => "برگشت", 'callback_data' => "back"]
                         ]
                      ]
               ])
           ]);
}
elseif($data == "sendpv"){
file_put_contents("step.txt","sendtoall");
bot('sendMessage', [
        'chat_id' => $chatid,
        'message_id' => $message_id2,
               'text'=>"لطفا پی ام خود را برای ارسال به کار بران بفرستید
               در غیر این صورت دکمه بازگشت رو بزنید",
        'parse_mode' => "html",
		'reply_markup' =>json_encode([
                        'inline_keyboard' => [
                     [
                     ['text' => "برگشت", 'callback_data' => "back"]
                     ],
                      ]
               ])
           ]);
    }
elseif ($step == 'sendtoall')
{
SendMessage($chat_id,"`📢 در حال ارسال . . .`");
file_put_contents("step.txt","none");
$fp = fopen( "users.txt", 'r');
while( !feof( $fp)) {
$ckar = fgets( $fp);
SendMessage($ckar,$textmessage);
}
SendMessage($chat_id,"✅ پیام شما به همه ی کاربران ربات ارسال گردید.");
}
elseif($data == "sendall"){
file_put_contents("step.txt","sendto");
bot('sendMessage', [
        'chat_id' => $chatid,
        'message_id' => $message_id2,
               'text'=>"لطفا پی ام خود را بفرستید تابرای گروه ها  بفرستم
               در غیر این صورت دکمه بازگشت رو بزنید",
        'parse_mode' => "html",
		'reply_markup' =>json_encode([
                        'inline_keyboard' => [
                     [
                     ['text' => "برگشت", 'callback_data' => "back"]
                     ],
                      ]
               ])
           ]);
    }
elseif ($step == 'sendto')
{
SendMessage($chat_id,"`📢 در حال ارسال . . .`");
file_put_contents("step.txt","none");
$fp = fopen( "data/allgp.txt", 'r');
while( !feof( $fp)) {
$ckar = fgets( $fp);
SendMessage($ckar,$textmessage);
}
SendMessage($chat_id,"✅ پیام شما به همه ی کاربران ربات ارسال گردید.");}
/*
سلام دوستان این سورس ضدلینک ترکیبی رو بخاطر این که خیلیا دنبال سورس خوب بودن اوپن میکنم 
بیشتر نیتم اینه که جلو خرج الکیتونو بگیرم اون مقدار پولی که به سورس ضدلینک میدین رو جای 
واجب ازش استفاده کنید... خوش باشیدو خرم 
#التماس_دعا
#سیناالفام
@tel_fire
@telfire
*/
?>