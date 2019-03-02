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
define('token','[*[TOKEN]*]');
function Naweed($method,$datas=[]){
    $url = "https://api.telegram.org/bot".token."/".$method;
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
$json = file_get_contents('php://input');
$telegram = urldecode ($json);
$results = json_decode($telegram);
include_once('jdf.php');
date_default_timezone_set("Asia/Tehran");

$timestamp = $results->callback_query->message->edit_date;
$jalali_date = jdate("تاریخ: Y/m/d 
زمان: H:i:s", $timestamp);

$update_id = $results->update_id;
$username = $results->message->from->username;
$from_id = $results->message->from->id;
$chat_id = $results->message->chat->id;
$is_bot = $results->message->from->is_bot;
$message_id = $results->message->message_id;
$textmessage = $results->message->text;
$admin = '[*[ADMIN]*]';
$chat_type = $results->message->chat->type;
$admin2 = array ([*[ADMIN]*],[*[ADMIN]*]);
$channel_user = '[*[CHANNEL]*]';
$forward_from_message_id = $results->message->forward_from_message_id;
$data = $results->callback_query->data;
$channel_post = $results->channel_post;
$ch_txt = $results->channel_post->text;
$ch_msg_id = $results->channel_post->message_id;
$first_name = $results->message->from->first_name;
$last_name = $results->message->from->last_name;
$from_id2 = $results->callback_query->from->id;
$chat_id2 = $results->callback_query->message->chat->id;
$message_id2 = $results->callback_query->message->message_id;
$username2 = $results->callback_query->from->username;
$callback_query_id = $results->callback_query->id;
$first_name2 = $results->callback_query->from->first_name;
$from_reply_id = $results->message->reply_to_message->from->id;
$from_reply_firstname = $results->message->reply_to_message->from->first_name;
$from_reply_lastname = $results->message->reply_to_message->from->last_name;
$sticker = $results->message->sticker;
$sticker_id = $results->message->sticker->file_id;
$photo = $results->message->photo;
$phone_number = $results->message->contact->phone_number;
$audio = $results->message->audio;
$document = $results->message->document;
$video = $results->message->video;
$voice = $results->message->voice;
$video_note = $results->message->video_note;
$location = $results->message->location;
$gif_id = $results->message->document->file_id;
$caption = $results->message->caption;
$forward_from_id = $results->message->forward_from->id;
$first_name_fwd = $results->message->forward_from->first_name;
$last_name_fwd = $results->message->forward_from->last_name;
$from_chat_id = $results->message->forward_from_chat->id;
$is_bot_fwd = $results->message->forward_from->is_bot;
$chat_type_fwd = $results->message->forward_from_chat->type;
$fwd_date = $results->message->forward_date;
$is_bot_add = $results->message->new_chat_participant->is_bot;
$user_id_add = $results->message->new_chat_participant->id;
// inline,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
$inline_query_id = $results->inline_query->id;
$query = $results->inline_query->query;
$query_from_id = $results->inline_query->from->id;
function SendMessage($chat_id,$text){
Naweed('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function sendAction($chat_id, $action){
Naweed('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
};
function sendPhoto ($chat_id,$photo){
	Naweed('sendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>"hi"]);
}
function forwardMessage ($chat_id,$from_chat_id,$message_id){
	Naweed('forwardMessage',[
'chat_id'=>$chat_id,
'from_chat_id'=>$from_chat_id,
'message_id'=>$message_id]);
}
function setChatTitle ($title){
	Naweed('setChatTitle',[
'chat_id'=>'-1001125570799',
'title'=>$title]);
}
function save($filename,$TXTdata){
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
function getUserProfilePhotos ($user_id,$offset) {
	$url = 'https://api.telegram.org/bot'.token.'/getUserProfilePhotos?user_id='.$user_id.'&offset='.$offset.'&limit=5';
	$update = file_get_contents($url);
	return $update;
}	
function getUserProfilePhotos2 ($user_id) {
	$url = 'https://api.telegram.org/bot'.token.'/getUserProfilePhotos?user_id='.$user_id;
	$update = file_get_contents($url);
	return $update;
}
function download_file_toserver ($fileurl,$name) {
	file_put_contents($name, fopen($fileurl, 'r'));
}	
function getfile ($file_id) {
	$url = 'https://api.telegram.org/bot'.token.'/getFile?file_id='.$file_id;
	$updates = file_get_contents($url);
	$update = urldecode ($updates);
	$update = json_decode ($update);
	$result = $update->result;
	$filepath = $result->file_path;
	return $filepath;
}
function Delfile ($fName){
	$filehh = fopen($fName, "w")or die("Unable to open file!");
	fclose ($filehh);
	unlink ($fName);
}
function deletefolder($path) { 
     if ($handle=opendir($path)) { 
       while (false!==($file=readdir($handle))) { 
         if ($file<>"." AND $file<>"..") { 
           if (is_file($path.'/'.$file))  { 
             @unlink($path.'/'.$file); 
             } 
           if (is_dir($path.'/'.$file)) { 
             deletefolder($path.'/'.$file); 
             @rmdir($path.'/'.$file); 
            } 
          } 
        } 
      } 
 }
function kickChatMember ($chat_id,$user_id){
Naweed ('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$user_id
]);
}
function deleteMessage ($chat_id,$message_id){
Naweed ('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
function unbanChatMember ($chat_id,$user_id){
Naweed ('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$user_id
]);
}
function pinChatMessage ($chat_id,$message_id){
Naweed ('pinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
function unpinChatMessage ($chat_id){
Naweed ('unbanChatMember',[
'chat_id'=>$chat_id
]);
}
function getChatAdministrators ($chat_id){
Naweed ('getChatAdministrators',[
'chat_id'=>$chat_id
]);
}
function sendMediaGroup ($chat_id,$media){
Naweed ('sendMediaGroup',[
'chat_id'=>$chat_id,
'media'=>$media
]);
}
function answerCallbackQuery($callback_query_id,$text){
	Naweed('answerCallbackQuery',[
        'callback_query_id'=>$callback_query_id,
        'text'=>$text,
		'show_alert'=>true
    ]);
	}
$url = 'https://api.telegram.org/bot'.token.'/getChatMember?chat_id=@'.$channel_user.'&user_id='.$from_id;
$t=json_decode(file_get_contents($url));
$tchannel = $t->result->status;
$channelbanner = file_get_contents('channelbanner.txt');
$gpbanner = file_get_contents('gpbanner.txt');
$botbanner = file_get_contents('botbanner.txt');
$chaleshbanner = file_get_contents('chaleshbanner.txt');
$start = file_get_contents('start.txt');
$support = file_get_contents('support.txt');
$help = file_get_contents('help.txt');
$channelid = file_get_contents('channelid.txt');
$stats = file_get_contents("data/$from_id/stats.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
if ($textmessage == '/start' or $textmessage == 'برگشت به منو اصلی'){
	if(in_array($from_id, $admin2)){
		sendAction($chat_id,'typing');
		Naweed('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'به پنل مدیریت خوش آمدید',
		'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'تنظیم متن بنر کانال 📢'],['text'=>'تنظیم متن بنر گروه 💬']],
		[['text'=>'تنظیم متن  بنر ربات 🤖'],['text'=>'تنظیم متن بنر چالش 🏅']],
		[['text'=>'آمار ربات 📊'],['text'=>'تنظیم متن استارت 📩']],
		[['text'=>'تنظیم متن راهنما 🔹'],['text'=>'تنظیم متن پشتیبانی ✅']],
		[['text'=>'پیام همگانی 🔉'],['text'=>'فوروارد همگانی 🔉'],['text'=>'تنظیم چنل فوروارد']]
		
		]
		])
		]);
	}elseif ( $tchannel != 'creator' and $tchannel != 'administrator' and $tchannel != 'member'){
	
		Naweed('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"❤️سلام دوست عزیز ❤️
شما باید اول در کانال  زیر عضو شین 👇🏻
@$channel_user
بعد دوباره استارت کنین 
/start
❤️❤️❤️❤️❤️❤️❤️",
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'عضویت در کانال','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);

}else{
	if($bot_type != 'gold'){
		Naweed('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
		Naweed('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$start,
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'دریافت بنر','callback_data'=>'getbanner'],['text'=>'تحویل بنر','callback_data'=>'givebanner']],
		[['text'=>'راهنما','callback_data'=>'help'],['text'=>'پشتیبانی','callback_data'=>'support']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
}
}
$command = file_get_contents ('command.txt');
if ($textmessage == 'تنظیم متن بنر کانال 📢' and $from_id == $admin){
	file_put_contents ('command.txt','setchannelbanner');
	
	sendMessage ($chat_id,'متن بنر کانال را ارسال کنید');
}elseif ($textmessage == 'تنظیم متن بنر گروه 💬' and $from_id == $admin){
	file_put_contents ('command.txt','setgpbanner');
	
	sendMessage ($chat_id,'متن بنر گروه را ارسال کنید');
}elseif ($textmessage == 'تنظیم متن  بنر ربات 🤖' and $from_id == $admin){
	file_put_contents ('command.txt','setbotbanner');
	
	sendMessage ($chat_id,'متن بنر ربات را ارسال کنید');
}elseif ($textmessage == 'تنظیم متن بنر چالش 🏅' and $from_id == $admin){
	file_put_contents ('command.txt','setchaleshbanner');
	
	sendMessage ($chat_id,'متن بنر چالش را ارسال کنید');
}elseif ($textmessage == 'تنظیم متن استارت 📩' and $from_id == $admin){
	file_put_contents ('command.txt','setstart');
	
	sendMessage ($chat_id,'متن استارت را ارسال کنید');
}elseif ($textmessage == 'تنظیم متن پشتیبانی ✅' and $from_id == $admin){
	file_put_contents ('command.txt','setsupport');
	
	sendMessage ($chat_id,'متن پشتیبانی را ارسال کنید.');
}elseif ($textmessage == 'تنظیم متن راهنما 🔹' and $from_id == $admin){
	file_put_contents ('command.txt','sethelp');
	
	sendMessage ($chat_id,'متن راهنما را ارسال کنید.');
}elseif ($textmessage == 'تنظیم چنل فوروارد' and $from_id == $admin){
	file_put_contents ('command.txt','setchannelid');
	
	sendMessage ($chat_id,'ایدی عددی چنل خود برای فوروارد را بفرستید
	می توانید ایدی را از ربات @ChannelIdBot به دست آورید');
}elseif ($textmessage == 'پیام همگانی 🔉' and $from_id == $admin){
	file_put_contents ('command.txt','pmall');
	
	sendMessage ($chat_id,'پیام مورد نظررا بفرستید.');
}elseif ($textmessage == 'فوروارد همگانی 🔉' and $from_id == $admin){
	file_put_contents ('command.txt','s2a');
	
	sendMessage ($chat_id,'پیام مورد نظر را فوروارد کنید.');
}
if ($command == 'setchannelbanner' and $from_id == $admin){
  file_put_contents('channelbanner.txt',$textmessage);
  file_put_contents('command.txt',"none");
  
  Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن بنر کانال ثبت شد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}elseif ($command == 'setgpbanner' and $from_id == $admin){
  file_put_contents('gpbanner.txt',$textmessage);
  file_put_contents('command.txt',"none");
  
  Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن بنر گروه ثبت شد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}elseif ($command == 'setbotbanner' and $from_id == $admin){
  file_put_contents('botbanner.txt',$textmessage);
  file_put_contents('command.txt',"none");
  
  Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن بنر ربات ثبت شد",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}elseif ($command == 'setchaleshbanner' and $from_id == $admin){
  file_put_contents('chaleshbanner.txt',$textmessage);
  file_put_contents('command.txt',"none");
  
  Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن بنر چالش ثبت شد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}elseif ($command == 'setstart' and $from_id == $admin){
  file_put_contents('start.txt',$textmessage);
  file_put_contents('command.txt',"none");
  
 Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن استارت ثبت شد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}elseif ($command == 'setsupport' and $from_id == $admin){
  file_put_contents('support.txt',$textmessage);
  file_put_contents('command.txt',"none");
  
Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن پشتیبانی ثبت شد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}
	elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmessage)){
	Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}elseif ($command == 'sethelp' and $from_id == $admin){
  file_put_contents('help.txt',$textmessage);
  file_put_contents('command.txt',"none");
  
 Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن راهنما ثبت شد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}elseif ($command == 'setchannelid' and $from_id == $admin){
  file_put_contents('channelid.txt',$textmessage);
  file_put_contents('command.txt',"none");
  
  Naweed ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"ایدی کانال فوروارد ثبت شد",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);

}elseif ($command == 's2a' and $from_id == $admin and isset($forward_from_id)){
  file_put_contents('command.txt',"none");
  file_put_contents ('ab.txt',$message_id);
  
  Naweed('sendMessage',[
	'chat_id'=>$chat_id,
	'reply_to_message_id'=>$message_id,
	'text'=>'این پیام را به همه فوروارد کنم؟',
	'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'اره بفرست','callback_data'=>'are'],['text'=>'نه نفرست','callback_data'=>'na']]
		]
		])
	]);
}
$msg_ida = file_get_contents ('ab.txt');
$chat_ids = scandir('data');
if ($data == 'are'){
	foreach ($chat_ids as $chats){
	    forwardMessage ($chats,$chat_id2,$msg_ida);	
}
sendAction($chat_id2,'typing');
 Naweed ('sendMessage',[
	'chat_id'=>$chat_id2,
	'text'=>"به همه فوروارد شد",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}elseif ($data == 'na'){
Delfile ('ab.txt');
sendAction($chat_id2,'typing');
 Naweed ('sendMessage',[
	'chat_id'=>$chat_id2,
	'text'=>"چیزی ارسال نشد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}
elseif ($command == 'pmall' and $from_id == $admin){
  file_put_contents('command.txt',"none");
  file_put_contents ('ab1.txt',$textmessage);
  
  Naweed('sendMessage',[
	'chat_id'=>$chat_id,
	'reply_to_message_id'=>$message_id,
	'text'=>'این پیام را به همه ارسال کنم؟',
	'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'اره بفرست','callback_data'=>'are1'],['text'=>'نه نفرست','callback_data'=>'na1']]
		]
		])
	]);

}
$ttttttt = file_get_contents ('ab1.txt');
$chat_ids = scandir('data');
if ($data == 'are1'){
	foreach ($chat_ids as $chats){
	    sendMessage ($chats,$ttttttt);
}
sendAction($chat_id2,'typing');
Naweed ('sendMessage',[
	'chat_id'=>$chat_id2,
	'text'=>"به همه ارسال شد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}elseif ($data == 'na1'){
Delfile ('ab.txt');
sendAction($chat_id2,'typing');
 Naweed ('sendMessage',[
	'chat_id'=>$chat_id2,
	'text'=>"چیزی ارسال نشد.",
	'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
}

if ($data == 'getbanner'){
	Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>'نوع بنر خود را انتخاب کنید',
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'بنر گروه','callback_data'=>'bannergp'],['text'=>'بنر کانال','callback_data'=>'bannerchannel']],
		[['text'=>'بنر چالش','callback_data'=>'bannerchalesh'],['text'=>'بنر ربات','callback_data'=>'bannerrobot']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]],
		[['text'=>'برگشت','callback_data'=>'back']]
		]
		])
		]);
}
if ($data == 'back'){
	file_put_contents ("data/$from_id2/stats.txt",'none');
	Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>$start,
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'دریافت بنر','callback_data'=>'getbanner'],['text'=>'تحویل بنر','callback_data'=>'givebanner']],
		[['text'=>'راهنما','callback_data'=>'help'],['text'=>'پشتیبانی','callback_data'=>'support']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
}
if ($data == 'bannergp'){
	sendAction ($chat_id2,'typing');
	mkdir ('data');
	mkdir ("data/$from_id2");
	file_put_contents ("data/$from_id2/from.txt",$from_id2);
	file_put_contents ("data/$from_id2/stats.txt",'getbanner');
	Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>"بنر شما آماده است 24 ساعت مهلت سین زدن دارید.",
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'برگشت','callback_data'=>'back']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
	$pmm = "$gpbanner
	
	🆔 $from_id2
	اسم : $first_name2
	$jalali_date
	";
	 $msgid = json_decode(file_get_contents('https://api.telegram.org/bot'.token.'/sendMessage?&chat_id='.$channelid.'&text='.urlencode($pmm)));
	 $msg_id = $msgid->result->message_id;
   ForwardMessage($chat_id2,$channelid,$msg_id);
   AnswerCallbackQuery($callback_query_id,"بنر برای شما با موفقیت ارسال شد");
}elseif ($data == 'bannerchannel'){
	sendAction ($chat_id2,'typing');
	mkdir ('data');
	mkdir ("data/$from_id2");
	file_put_contents ("data/$from_id2/from.txt",$from_id2);
	file_put_contents ("data/$from_id2/stats.txt",'getbanner');
	Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>"بنر شما آماده است 24 ساعت مهلت سین زدن دارید.",
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'برگشت','callback_data'=>'back']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
	$pmm = "$channelbanner
	
	🆔 $from_id2
	اسم : $first_name2
	$jalali_date
	";
	 $msgid = json_decode(file_get_contents('https://api.telegram.org/bot'.token.'/sendMessage?&chat_id='.$channelid.'&text='.urlencode($pmm)));
	 $msg_id = $msgid->result->message_id;
   ForwardMessage($chat_id2,$channelid,$msg_id);
   AnswerCallbackQuery($callback_query_id,"بنر برای شما با موفقیت ارسال شد");
}elseif ($data == 'bannerchalesh'){
	sendAction ($chat_id2,'typing');
	mkdir ('data');
	mkdir ("data/$from_id2");
	file_put_contents ("data/$from_id2/from.txt",$from_id2);
	file_put_contents ("data/$from_id2/stats.txt",'getbanner');
	Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>"بنر شما آماده است 24 ساعت مهلت سین زدن دارید.",
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'برگشت','callback_data'=>'back']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
	$pmm = "$chaleshbanner
	
	🆔 $from_id2
	اسم : $first_name2
	$jalali_date
	";
	 $msgid = json_decode(file_get_contents('https://api.telegram.org/bot'.token.'/sendMessage?&chat_id='.$channelid.'&text='.urlencode($pmm)));
	 $msg_id = $msgid->result->message_id;
   ForwardMessage($chat_id2,$channelid,$msg_id);
   AnswerCallbackQuery($callback_query_id,"بنر برای شما با موفقیت ارسال شد");
}elseif ($data == 'bannerrobot'){
	sendAction ($chat_id2,'typing');
	mkdir ('data');
	mkdir ("data/$from_id2");
	file_put_contents ("data/$from_id2/from.txt",$from_id2);
	file_put_contents ("data/$from_id2/stats.txt",'getbanner');
	Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>"بنر شما آماده است 24 ساعت مهلت سین زدن دارید.",
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'برگشت','callback_data'=>'back']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
	$pmm = "$botbanner
	
	🆔 $from_id2
	اسم : $first_name2
	$jalali_date
	";
	 $msgid = json_decode(file_get_contents('https://api.telegram.org/bot'.token.'/sendMessage?&chat_id='.$channelid.'&text='.urlencode($pmm)));
	 $msg_id = $msgid->result->message_id;
   ForwardMessage($chat_id2,$channelid,$msg_id);
   AnswerCallbackQuery($callback_query_id,"بنر برای شما با موفقیت ارسال شد");
}

if ($data == 'givebanner'){
	if (file_exists ("data/$from_id2/from.txt")){
	file_put_contents ("data/$from_id2/stats.txt",'give');
	Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>"بنر خود را ارسال کنید.",
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'برگشت','callback_data'=>'back']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
}

}
if ($stats == 'give' and $textmessage != '/Tahvil' and $from_id != $admin){
	forwardMessage ($admin,$chat_id,$message_id);
	sendMessage ($chat_id,'تبلیغ خود را ارسال کنید سپس 
	/Tahvil
	را بفرستید.
	در صورت تایید داخل چنل تبلیغ خواهد شد.');
}
if ($textmessage == '/Tahvil'){
	file_put_contents ("data/$from_id/stats.txt",'none');
	Naweed('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'تبلیغ شما ثبت شد پس از بازبینی و تایید در چنل اصلی تبلیغ خواهد شد.',
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'برگشت','callback_data'=>'back']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
		}

if ($data == 'help'){
	sendAction ($chat_id2,'typing');
		Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>$help,
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'برگشت','callback_data'=>'back']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
}elseif ($data == 'support'){
	sendAction ($chat_id2,'typing');
		Naweed('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$message_id2,
		'text'=>$support,
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'برگشت','callback_data'=>'back']],
		[['text'=>'کانال ما','url'=>'https://t.me/'.$channel_user]]
		]
		])
		]);
}
if ($textmessage == 'آمار ربات 📊' and $from_id == $admin){
	$chat_ids = scandir('data');
	sendAction ($admin,'typing');
	Naweed('sendMessage',[
		'chat_id'=>$admin,
		'text'=>count($chat_ids)-2,
		'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت به منو اصلی']],
		]
		])
		]);
		}
file_put_contents ('a.txt',$json);
Delfile(error_log);
?>