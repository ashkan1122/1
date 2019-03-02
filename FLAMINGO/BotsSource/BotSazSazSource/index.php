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
define('API_KEY','[(*TOKEN*)]');
ini_set("log_errors" , "off");
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
//----
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$textmessage = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$contact = $message->contact;
$contactid = $contact->user_id;
$contactnum = $contact->phone_number;
$photo = $message->photo;
$c_id1 = $message->forward_from_chat->username;
$c_id2 = $message->forward_from_chat->id;
$gif = $message->document;
$gif_id = $message->document->file_id;
$admin = '[(*ADMIN*)]';
$botusername = '[(*BOT*)]';
$token = '[(*TOKEN*)]';
$time1 = '[(*TIME*)]';
$time2 = date('j');
$URL = "https://ehsanjon.azinhost.info/FLAMINGO";
$BotSazWeb = "[(*BOTSAZWEB*)]";
$user = json_decode(file_get_contents("data/$chat_id.json"),true);
$step = $user["step"];
$createfree = $user["create"];
$type = $user["type"];
$invite = $user["invite"];
$createbotsaz = $user["createbotsaz"];
$settings = json_decode(file_get_contents("data/settings.json"),true);
$mode = $settings["mode"];
$golden_times = $settings["golden_times"];
$golden_pic = $settings["golden_pic"];
$golden_gif = $settings["golden_gif"];
$golden_txt = $settings["golden_txt"];
$number_state = $settings["number_state"];
$mode = $settings["mode"];
$maxcreate = $settings["maxcreate"];
$freeallbots = $settings["freeallbots"];
$vipaccs = $settings["vipaccs"];
$starttext = $settings["starttext"];
$channel = $settings["channel"];
$chcode = $settings["chcode"];
$chlog = $settings["chlog"];
$free_code = $settings["free_code"];
$cinvite = $settings["cinvite"];
$sellbotsaz = $settings["sellbotsaz"];
$selledbotsaz = $settings["selledbotsaz"];
$btn1 = $settings["buttons"]["btn1"];
$btn2 = $settings["buttons"]["btn2"];
$btn3 = $settings["buttons"]["btn3"];
$btn4 = $settings["buttons"]["btn4"];
$btn5 = $settings["buttons"]["btn5"];
$btn6 = $settings["buttons"]["btn6"];
$btn7 = $settings["buttons"]["btn7"];
$btn8 = $settings["buttons"]["btn8"];
$btn9 = $settings["buttons"]["btn9"];
$btn10 = $settings["buttons"]["btn10"];
$btn11 = $settings["buttons"]["btn11"];
$btn12 = $settings["buttons"]["btn12"];
$btn13 = $settings["buttons"]["btn13"];
$text1 = $settings["text"]["text1"];
$text2 = $settings["text"]["text2"];
$text3 = $settings["text"]["text3"];
$text4 = $settings["text"]["text4"];
$text5 = $settings["text"]["text5"];
$text6 = $settings["text"]["text6"];
$text7 = $settings["text"]["text7"];
$text8 = $settings["text"]["text8"];
$text9 = $settings["text"]["text9"];
$text10 = $settings["text"]["text10"];
$text11 = $settings["text"]["text11"];
$text12 = $settings["text"]["text12"];
$text13 = $settings["text"]["text13"];
$rpto = $update->message->reply_to_message->forward_from->id;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$channel&user_id=".$chat_id));
$tch = $forchaneel->result->status;
//----
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
 function ForwardMessage($chat_id,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
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
	function objectToArrays($object){
        if (!is_object($object) && !is_array($object)) {
            return $object; }
        if (is_object($object)) {
            $object = get_object_vars($object);}
        return array_map("objectToArrays", $object);}
//----
if ($time2 >= $time1){
	bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"ادمین گرامی زمان استفاده از ربات ساز رایگان شما به اتمام رسیده😅
ربات ساز شما با موفقیت از سرور ما حذف شد✔️
برای خرید اشتراک و ساخت ربات ساز خودتان میتوانید از @MrUnknown_BoT | @JusTiCe_BoY اقدام نمایید😄
با تشکر🌹",
'parse_mode'=>"HTML",
]);
file_get_contents("$URL/BotSazSazApi.php?token=$token&type=delete&id=123456789");
}
if($step == "ban"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"You Are Banned From Server",
'parse_mode'=>"HTML",
]);
}else{

if(strpos($textmessage=="/start") !== false  && $textmessage !=="/start"){
$id=str_replace("/start ","",$textmessage);
$amar=file_get_contents("data/members.txt");
$exp=explode("\n",$amar);
if(!in_array($from_id,$exp) && $from_id != $id){
$myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
$user["step"] = "none";
$user["type"] = "free";
$user["invite"] = "0";
$user["create"] = "0";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
if($golden_times == "on"){
        $user1 = json_decode(file_get_contents("data/$id.json"),true);
          $invite = $user1["invite"];
          settype($invite,"integer");
                      $newinvite = $invite + 2;
                      $user1["invite"] = $newinvite;
                       $outjson = json_encode($user1,true);
file_put_contents("data/$id.json",$outjson);
					 bot('sendMessage',[
                    'chat_id'=>$id,
                    'text'=>"یک نفر از طریق لینک شما به ربات اضافه شد✅
به دلیل روشن بودن ساعات طلایی دو برابر حساب شد : 2 نفر
شما تا الان $newinvite نفر به ربات آورده اید و برای ویژه شدن نیاز به $cinvite نفر دارید
اگر به تعداد مورد نظر رسیده است دستور /setvip را ارسال نمایید😊",
                   'parse_mode'=>"HTML",
	                      ]);
					}else{
						        $user1 = json_decode(file_get_contents("data/$id.json"),true);
          $invite = $user1["invite"];
          settype($invite,"integer");
                      $newinvite = $invite + 1;
                      $user1["invite"] = $newinvite;
                       $outjson = json_encode($user1,true);
file_put_contents("data/$id.json",$outjson);
					 bot('sendMessage',[
                    'chat_id'=>$id,
                    'text'=>"یک نفر از طریق لینک شما به ربات اضافه شد✅
شما تا الان $newinvite نفر به ربات آورده اید و برای ویژه شدن نیاز به $cinvite نفر دارید
اگر به تعداد مورد نظر رسیده است دستور /setvip را ارسال نمایید😊",
                   'parse_mode'=>"HTML",
	                      ]);
						
					}
					}
					}
if(!file_exists("data/$from_id.json")) {
$myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
$user["step"] = "none";
$user["type"] = "free";
$user["invite"] = "0";
$user["create"] = "0";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
}
if ($channel != null and $tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"برای استفاده از این ربات هیجان انگیز ابتدا در کانال ما عضو بشید و بعد دکمه تایید عضویت رو لمس کنید 👇

🔸 $channel   🔸 $channel
🔸 $channel   🔸 $channel

👇 بعد از « عضــویت » ربات را استارت کنید👇",
                   'parse_mode'=>"HTML",
]);
}else{
    

if ($mode == "off"){
   	bot('sendMessage',[
                    'chat_id'=>$admin,
                    'text'=>"ربات ساز توسط مدیر خاموش شده ✔️
لطفا بعدا تلاش نمایید😃",
'parse_mode'=>"HTML",
]); 
}
elseif($textmessage == "/start" or $textmessage == "🔙"){
	$num = $user["number"];
	if($num == null and $number_state == "on"){
		$user["step"] = "contact";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به ربات ساز ما خوشامدید😊🌹
با این ربات میتونی برای خودت یک ربات ساز بسازی🙂
برای شروع به وسیله دکمه زیر شمارت رو شیر کن👇🏻",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
 	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'➰تنظیم شماره من➰' , 'request_contact' => true]
                ]
            	],
            	'resize_keyboard'=>true
       		])
	 ]);  
	}else{
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
    $start1 = str_replace("FIRSTNAME","$first_name",$starttext);
	$start2 = str_replace("USERNAME","@$username",$start1);
	$start3 = str_replace("ID","$from_id",$start2);
	$start4 = str_replace("DATE","$date",$start3);
	$start5 = str_replace("TIME","$time",$start4);
	$start6 = str_replace("TYPE","$type",$start5);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$start6,
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"$btn1"],['text'=>"$btn2"]],
	[['text'=>"$btn3"],['text'=>"$btn4"]],
	[['text'=>"$btn5"]],
	[['text'=>"$btn6"],['text'=>"$btn7"]],
	[['text'=>"$btn8"]],
	[['text'=>"$btn9"],['text'=>"$btn10"]],
	[['text'=>"$btn11"],['text'=>"$btn12"]],
	[['text'=>"$btn13"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
if($textmessage and file_exists("cmd/$textmessage.txt")){
	$textcmd = file_get_contents("cmd/$textmessage.txt");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$textcmd,
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
	elseif($contact && $step == "contact"){
	 if($contactid == $from_id){
		  $offset = strpos($contactnum,"98");
 if ($offset !== false){
	 $user["number"] = $contactnum;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
 $start1 = str_replace("FIRSTNAME","$first_name",$starttext);
	$start2 = str_replace("USERNAME","@$username",$start1);
	$start3 = str_replace("ID","$from_id",$start2);
	$start4 = str_replace("DATE","$date",$start3);
	$start5 = str_replace("TIME","$time",$start4);
	$start6 = str_replace("TYPE","$type",$start5);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$start6,
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"$btn1"],['text'=>"$btn2"]],
	[['text'=>"$btn3"],['text'=>"$btn4"]],
	[['text'=>"$btn5"]],
	[['text'=>"$btn6"],['text'=>"$btn7"]],
	[['text'=>"$btn8"]],
	[['text'=>"$btn9"],['text'=>"$btn10"]],
	[['text'=>"$btn11"],['text'=>"$btn12"]],
	[['text'=>"$btn13"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
     }else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لطفا فقط از شماره ایران جهت ساخت ربات ساز استفاده کنید❌",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
 	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'➰تنظیم شماره من➰' , 'request_contact' => true]
                ]
            	],
            	'resize_keyboard'=>true
       		])
	 ]);  
	 }
	 }else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لطفا با استفاده از دکمه زیر اقدام به ثبت شماره خود نمایید👇🏻",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
 	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'➰تنظیم شماره من➰' , 'request_contact' => true]
                ]
            	],
            	'resize_keyboard'=>true
       		])
	 ]);
	 }
	 }
	 //-------------------------------------
	 elseif($textmessage == "$btn1"){
	     if($type == "vip"){
			 $user["step"] = "create-bot-access";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text1,
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🗣پیام رسان🗣"],['text'=>"⚡️ضد اسپم⚡️"]],
	[['text'=>"💰کسب درآمد💰"]],
	[['text'=>"🔗بنر دهی🔗"],['text'=>"👁‍🗨ویوگیر دکمه ای (هوشمند)👁‍🗨"]],
	[['text'=>"🔐لیمیت چت🔐"]],
	[['text'=>"📦جعبه ابزار📦"]],
	[['text'=>"🔍دوستیابی (چت ناشناس)🔍"],['text'=>"🎧ویرایش موسیقی🎧"]],
	[['text'=>"💬ارسال ایمیل جعلی💬"]],
	[['text'=>"✨بازی با کلمات✨"],['text'=>"😈صندلی داغ😈"]],
	[['text'=>"📝دفترچه یادداشت📝"]],
	[['text'=>"🕞تبچی پشرفته🕞"],['text'=>"🗂تبدیل فرمت فایل🗂"]],
	[['text'=>"👥ادد کن گروه👥"]],
	[['text'=>"✨بازی اسم و فامیل✨"]],
	[['text'=>"📚مترجم هوشمند📚"],['text'=>"📍تبادلات📍"]],
	[['text'=>"🔮فالگیر (اعتراف گیر)🔮"]],
	[['text'=>"📎کوتاه کننده لینک📎"],['text'=>"📍ابزار وب هوک📍"]],
	[['text'=>"🙆🏻‍♂️تغییر چهره🙆🏻‍♂️"]],
	[['text'=>"👤گزارش چک پروفایل👤"],['text'=>"🗂اشتراک رسانه هوشمند🗂"]],
	[['text'=>"🎸جستجو ترانه🎸"]],
	[['text'=>"🏋️‍♀️رژیم🏋️‍♀️"]],
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}

if($maxcreate > $createfree and $type == "free"){
$user["step"] = "create-bot-access";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text1,
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🗣پیام رسان🗣"],['text'=>"⚡️ضد اسپم⚡️"]],
	[['text'=>"💰کسب درآمد💰"]],
	[['text'=>"🔗بنر دهی🔗"],['text'=>"👁‍🗨ویوگیر دکمه ای (هوشمند)👁‍🗨"]],
	[['text'=>"🔐لیمیت چت🔐"]],
	[['text'=>"📦جعبه ابزار📦"]],
	[['text'=>"🔍دوستیابی (چت ناشناس)🔍"],['text'=>"🎧ویرایش موسیقی🎧"]],
	[['text'=>"💬ارسال ایمیل جعلی💬"]],
	[['text'=>"✨بازی با کلمات✨"],['text'=>"😈صندلی داغ😈"]],
	[['text'=>"📝دفترچه یادداشت📝"]],
	[['text'=>"🕞تبچی پشرفته🕞"],['text'=>"🗂تبدیل فرمت فایل🗂"]],
	[['text'=>"👥ادد کن گروه👥"]],
	[['text'=>"✨بازی اسم و فامیل✨"]],
	[['text'=>"📚مترجم هوشمند📚"],['text'=>"📍تبادلات📍"]],
	[['text'=>"🔮فالگیر (اعتراف گیر)🔮"]],
	[['text'=>"📎کوتاه کننده لینک📎"],['text'=>"📍ابزار وب هوک📍"]],
	[['text'=>"🙆🏻‍♂️تغییر چهره🙆🏻‍♂️"]],
	[['text'=>"👤گزارش چک پروفایل👤"],['text'=>"🗂اشتراک رسانه هوشمند🗂"]],
	[['text'=>"🎸جستجو ترانه🎸"]],
	[['text'=>"🏋️‍♀️رژیم🏋️‍♀️"]],
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	if($createfree >= $maxcreate and $type == "free"){
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حداکثر تعداد مجاز برای ساخت ربات $maxcreate میباشد📛
شما تا کنون $createfree ربات ساخته اید❗️
برای ادامه باید حساب خود را در ربات ساز ویژه کنید😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
	}
	//-------------------------------------
elseif($textmessage == "📝دفترچه یادداشت📝" && $step == "create-bot-access"){
$user["step"] = "create-note-pad";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات جعبه ابزار برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
elseif($textmessage == "🏋️‍♀️رژیم🏋️‍♀️" && $step == "create-bot-access"){
$user["step"] = "create-rezhim-bot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات جعبه ابزار برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage == "📦جعبه ابزار📦" && $step == "create-bot-access"){
$user["step"] = "create-tools-box";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات جعبه ابزار برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
elseif($textmessage == "📍تبادلات📍" && $step == "create-bot-access"){
$user["step"] = "create-tabadol-bot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات تبادلات برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
elseif($textmessage == "😈صندلی داغ😈" && $step == "create-bot-access"){
$user["step"] = "create-sandali-dagh";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات صندلی داغ برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage == "🙆🏻‍♂️تغییر چهره🙆🏻‍♂️" && $step == "create-bot-access"){
	     $user["step"] = "create-face-changer";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات تغییر چهره برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "🔐لیمیت چت🔐" && $step == "create-bot-access"){
	     $user["step"] = "create-limit-chat";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات لیمیت چت برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage == "✨بازی با کلمات✨" && $step == "create-bot-access"){
	     $user["step"] = "create-kalamat-game";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات بازی با کلمات برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage == "✨بازی اسم و فامیل✨" && $step == "create-bot-access"){
	     $user["step"] = "create-esm-famil";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات بازی اسم و فامیل برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
			elseif($textmessage == "💰کسب درآمد💰" && $step == "create-bot-access"){
	     $user["step"] = "create-kasb-daramad";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات کسب درآمد برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "👥ادد کن گروه👥" && $step == "create-bot-access"){
	     $user["step"] = "create-add-kon";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات ادد کن گروه برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage == "🗣پیام رسان🗣" && $step == "create-bot-access"){
	     $user["step"] = "create-pm-resan";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات پیام رسان هوشمند برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "⚡️ضد اسپم⚡️" && $step == "create-bot-access"){
	     $user["step"] = "create-gp-gram1";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات مدیریت گروه هوشمند برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage == "🔗بنر دهی🔗" && $step == "create-bot-access"){
	     $user["step"] = "create-banner-dehi1";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات بنر دهی هوشمند برای کانال لینک دونی برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "🔍دوستیابی (چت ناشناس)🔍" && $step == "create-bot-access"){
	     $user["step"] = "create-chat-random";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات دوست یابی (چت ناشناس) برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
			elseif($textmessage == "🎧ویرایش موسیقی🎧" && $step == "create-bot-access"){
	     $user["step"] = "create-music-edit";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ویرایش موسیقی برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "🗂تبدیل فرمت فایل🗂" && $step == "create-bot-access"){
	     $user["step"] = "create-file-convert";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت تبدیل فرمت فایل برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "📚مترجم هوشمند📚" && $step == "create-bot-access"){
	     $user["step"] = "create-motarjem-bot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت مترجم هوشمند برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "📎کوتاه کننده لینک📎" && $step == "create-bot-access"){
	     $user["step"] = "create-short-link";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات پیام رسان هوشمند برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "📍ابزار وب هوک📍" && $step == "create-bot-access"){
	     $user["step"] = "create-web-hook";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات ابزار وب هوک برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "🔮فالگیر (اعتراف گیر)🔮" && $step == "create-bot-access"){
	     $user["step"] = "create-fall-gir";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات فالگیر (اعتراف گیر) برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage == "👤گزارش چک پروفایل👤" && $step == "create-bot-access"){
	     $user["step"] = "create-profile-check";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات گزارش چک پروفایل برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage == "🗂اشتراک رسانه هوشمند🗂" && $step == "create-bot-access"){
	     $user["step"] = "create-eshterak-resane";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات اشتراک رسانه هوشمند برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "💬ارسال ایمیل جعلی💬" && $step == "create-bot-access"){
	     $user["step"] = "create-mail-send";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات ارسال ایمیل جعلی برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "🎸جستجو ترانه🎸" && $step == "create-bot-access"){
	     $user["step"] = "create-music-search";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات جستجو ترانه برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage == "👁‍🗨ویوگیر دکمه ای (هوشمند)👁‍🗨" && $step == "create-bot-access"){
	     $user["step"] = "create-view-btn1";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات پیام رسان هوشمند برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
			elseif($textmessage == "🕞تبچی پشرفته🕞" && $step == "create-bot-access"){
	     $user["step"] = "create-smart-tabchi";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت ساخت ربات تبچی پیشرفته برای خود , توکن دریافتی از @BotFather را ارسال کنید✅
اگر نمیدانید توکن چیست میتوانید راهنمای ربات ساز را مشاهده نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	//-------------------------------------
	elseif($textmessage != "🔙" and $step == "create-rezhim-bot"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-rezhim-bot1";
	 $user["esmtok"] = $textmessage;
	 $user["useresm"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
elseif($textmessage != "🔙" and $step == "create-rezhim-bot1"){
settype($createfree,"integer");
$newcreate = $createfree + 1;
$user["create"] = $newcreate;
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
$newbots = $freeallbots + 1;
$settings["freeallbots"] = $newbots;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$gpgramtok = $user["esmtok"];
$usergpgram = $user["useresm"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&type=rezhim&token=$gpgramtok&account=$type&channel=$textmessage&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : رژیم
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات رژیم شما با موفقیت به سرور های ما متصل شد⚡️
مدیر رژیم :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["esmtok"] = "";
	 $user["useresm"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}
	elseif($textmessage != "🔙" and $step == "create-tools-box"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-tools-box1";
	 $user["esmtok"] = $textmessage;
	 $user["useresm"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
elseif($textmessage != "🔙" and $step == "create-tools-box1"){
settype($createfree,"integer");
$newcreate = $createfree + 1;
$user["create"] = $newcreate;
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
$newbots = $freeallbots + 1;
$settings["freeallbots"] = $newbots;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$gpgramtok = $user["esmtok"];
$usergpgram = $user["useresm"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&type=tools&token=$gpgramtok&account=$type&channel=$textmessage&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : جعبه ابزار
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات جعبه ابزار شما با موفقیت به سرور های ما متصل شد⚡️
مدیر جعبه ابزار :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["esmtok"] = "";
	 $user["useresm"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}
	elseif($textmessage != "🔙" and $step == "create-tabadol-bot"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-tabadol-bot1";
	 $user["esmtok"] = $textmessage;
	 $user["useresm"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
elseif($textmessage != "🔙" and $step == "create-tabadol-bot1"){
settype($createfree,"integer");
$newcreate = $createfree + 1;
$user["create"] = $newcreate;
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
$newbots = $freeallbots + 1;
$settings["freeallbots"] = $newbots;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$gpgramtok = $user["esmtok"];
$usergpgram = $user["useresm"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&type=tabadol&token=$gpgramtok&account=$type&channel=$textmessage&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : تبادلات
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات تبادلات شما با موفقیت به سرور های ما متصل شد⚡️
مدیر تبادلات :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["esmtok"] = "";
	 $user["useresm"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}
	elseif($textmessage != "🔙" and $step == "create-sandali-dagh"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-sandali-dagh1";
	 $user["esmtok"] = $textmessage;
	 $user["useresm"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
elseif($textmessage != "🔙" and $step == "create-sandali-dagh1"){
settype($createfree,"integer");
$newcreate = $createfree + 1;
$user["create"] = $newcreate;
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
$newbots = $freeallbots + 1;
$settings["freeallbots"] = $newbots;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$gpgramtok = $user["esmtok"];
$usergpgram = $user["useresm"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&type=sandali&token=$gpgramtok&account=$type&channel=$textmessage&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : صندلی داغ
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات صندلی داغ شما با موفقیت به سرور های ما متصل شد⚡️
مدیر صندلی داغ :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["esmtok"] = "";
	 $user["useresm"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}
	elseif($textmessage != "🔙" and $step == "create-face-changer"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-face-changer1";
	 $user["esmtok"] = $textmessage;
	 $user["useresm"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
elseif($textmessage != "🔙" and $step == "create-face-changer1"){
settype($createfree,"integer");
$newcreate = $createfree + 1;
$user["create"] = $newcreate;
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
$newbots = $freeallbots + 1;
$settings["freeallbots"] = $newbots;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$gpgramtok = $user["esmtok"];
$usergpgram = $user["useresm"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&type=face&token=$gpgramtok&account=$type&channel=$textmessage&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : تغییر چهره
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات تغییر چهره شما با موفقیت به سرور های ما متصل شد⚡️
مدیر تغییر چهره :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["esmtok"] = "";
	 $user["useresm"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}

	elseif($textmessage != "🔙" and $step == "create-esm-famil"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-esm-famil1";
	 $user["esmtok"] = $textmessage;
	 $user["useresm"] = $un;
	 $myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
elseif($textmessage != "🔙" and $step == "create-esm-famil1"){
settype($createfree,"integer");
$newcreate = $createfree + 1;
$user["create"] = $newcreate;
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
$newbots = $freeallbots + 1;
$settings["freeallbots"] = $newbots;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$gpgramtok = $user["esmtok"];
$usergpgram = $user["useresm"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&type=esmfamil&token=$gpgramtok&account=$type&channel=$textmessage&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : بازی اسم و فامیل
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات بازی اسم و فامیل شما با موفقیت به سرور های ما متصل شد⚡️
مدیر بازی اسم و فامیل :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["esmtok"] = "";
	 $user["useresm"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}
	
	elseif($textmessage != "🔙" and $step == "create-limit-chat"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=limit&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : لیمیت چت
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات لیمیت چت شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات لیمیت چت :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-kalamat-game"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=kalamat&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : بازی با کلمات
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات بازی با کلمات شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات بازی با کلمات :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}

		elseif($textmessage != "🔙" and $step == "create-kasb-daramad"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=kasb&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : کسب درآمد
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات کسب درآمد شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات کسب درآمد :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-add-kon"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=addkon&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : ادد کن گروه
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ادد کن گروه شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات ادد کن گروه :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
elseif($textmessage != "🔙" and $step == "create-gp-gram1"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-gp-gram2";
	 $user["gpgramtok"] = $textmessage;
	 $user["usergpgram"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
	elseif($textmessage != "🔙" and $step == "create-gp-gram2"){
		settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$gpgramtok = $user["gpgramtok"];
$usergpgram = $user["usergpgram"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&type=antispam&token=$gpgramtok&account=$type&channel=$textmessage&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : ضد اسپم
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات  ضد اسپم هوشمند شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ضد اسپم :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["gpgramtok"] = "";
	 $user["usergpgram"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}
	elseif($textmessage != "🔙" and $step == "create-pm-resan"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=payamresan&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : پیام رسان
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات پیام رسان شما با موفقیت به سرور های ما متصل شد⚡️
مدیر پیام رسان :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-banner-dehi1"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-banner-dehi2";
	 $user["gpgramtok"] = $textmessage;
	 $user["usergpgram"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
	elseif($textmessage != "🔙" and $step == "create-banner-dehi2"){
		settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$gpgramtok = $user["gpgramtok"];
$usergpgram = $user["usergpgram"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&type=banner&token=$gpgramtok&account=$type&channel=$textmessage&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : بنر دهی هوشمند
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات بنر دهی هوشمند شما با موفقیت به سرور های ما متصل شد⚡️
مدیر بنر دهی :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["gpgramtok"] = "";
	 $user["usergpgram"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}
	elseif($textmessage != "🔙" and $step == "create-chat-random"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=chatrandom&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : دوست یابی (چت ناشناس)
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات دوست یابی (چت ناشناس) شما با موفقیت به سرور های ما متصل شد⚡️
مدیر پیام رسان :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-music-edit"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=editmusic&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : ویرایش موسیقی
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ویرایش موسیقی شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات ویرایش موسیقی :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
		elseif($textmessage != "🔙" and $step == "create-file-convert"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=fileconvert&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : تبدیل فرمت فایل
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات تبدیل فرمت فایل شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات تبدیل فرمت فایل :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-motarjem-bot"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=motarjem&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : مترجم هوشمند
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات مترجم هوشمند شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات مترجم :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
		elseif($textmessage != "🔙" and $step == "create-short-link"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=shortlink&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : کوتاه کننده لینک
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات کوتاه کننده لینک شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات کوتاه کننده لینک :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-note-pad"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=note&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : دفترچه یادداشت
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات دفترچه یادداشت شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات دفترچه یادداشت :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
		elseif($textmessage != "🔙" and $step == "create-web-hook"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=webhook&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : ابزار وب هوک
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ابزار وب هوک شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات ابزار وب هوک :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
		elseif($textmessage != "🔙" and $step == "create-fall-gir"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=fallgir&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : فالگیر (اعتراف گیر)
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات فالگیر (اعتراف گیر) شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات فالگیر (اعتراف گیر) :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
elseif($textmessage != "🔙" and $step == "create-profile-check"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=profile&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : گزارش چک پروفایل
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات گزارش چک پروفایل شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات گزارش چک پروفایل :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-eshterak-resane"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=eshterakresane&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : اشتراک رسانه هوشمند
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات اشتراک رسانه هوشمند شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات اشتراک رسانه هوشمند :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-mail-send"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=mailsent&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : ارسال ایمیل جعلی
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ارسال ایمیل جعلی شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات ارسال ایمیل جعلی :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
		elseif($textmessage != "🔙" and $step == "create-music-search"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=music&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : جستجو ترانه
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات جستجو ترانه شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات جستجو ترانه :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	elseif($textmessage != "🔙" and $step == "create-view-btn1"){
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 $user["step"] = "create-view-btn2";
	 $user["viewtok"] = $textmessage;
	 $user["viewidbot"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی کانال خود رو بدون @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
	elseif($textmessage != "🔙" and $step == "create-view-btn2"){
		$user["step"] = "create-view-btn3";
	 $user["viewch"] = $textmessage;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تایید شد!✅
حالا آیدی پشتیبانی ربات رو بدون @ ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	elseif($textmessage != "🔙" and $step == "create-view-btn3"){
		settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$viewtok = $user["viewtok"];
$viewidbot = $user["viewidbot"];
$viewch = $user["viewch"];
file_get_contents("$URL/BotSazApi.php?id=$from_id&sup=$textmessage&type=viewbtn&type=viewbtn&token=$viewtok&account=$type&channel=$viewch&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : ویوگیر دکمه ای (هوشمند)
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$usergpgram

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات  ویوگیر دکمه ای (هوشمند) شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ویوگیر دکمه ای (هوشمند) :
$from_id
آیدی کانال تنظیم شده روی ربات :
@$textmessage
آیدی ربات شما :
@$usergpgram",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 $user["gpgramtok"] = "";
	 $user["usergpgram"] = "";
     $outjson3 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson3);
	}
	elseif($textmessage != "🔙" and $step == "create-smart-tabchi"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../../Bot/$un/index.php"))){
	$myfile2 = fopen("data/ids.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$un\n");
fclose($myfile2);
	 settype($createfree,"integer");
                      $newcreate = $createfree + 1;
                      $user["create"] = $newcreate;
					  $user["step"] = "none";
                       $outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
	 settype($freeallbots,"integer");
                      $newbots = $freeallbots + 1;
                      $settings["freeallbots"] = $newbots;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);

	    file_get_contents("$URL/BotSazApi.php?id=$from_id&type=tabchi&token=$textmessage&account=$type&ads=$URL/Bots/BotSaz/$botusername/data/ads.txt&creator_cmd=$URL/Bots/BotSaz/$botusername/data/creator-cmd.txt");
		if($chlog != null){
			 bot('sendMessage',[
 'chat_id'=>$chlog,
 'text'=>"یک ربات ساخته شد🎉
🔺نوع ربات : تبچی پیشرفته
🔻مدیر ربات : $from_id
🔸آیدی ربات : @$un

همین حالا ربات خود را با بهترین سرعت بسازید➰
@$botusername
$channel",
 'parse_mode'=>"HTML",
	 ]); 
		}
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات تبچی پیشرفته شما با موفقیت به سرور های ما متصل شد⚡️
مدیر ربات تبچی پیشرفته :
$from_id
آیدی ربات شما :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}}
	
	//-------------------------------------
	elseif($textmessage == "/setvip"){
	    if($type !== "vip"){
	        if($invite >= $cinvite){
	            $user["type"] = "vip";
	            $user["invite"] = "0";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	 settype($vipaccs,"integer");
                      $newaccs = $vipaccs + 1;
                      $settings["vipaccs"] = $newaccs;
                       $outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ویژه شد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 

	    }else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تعداد زیرمجموعه های شما کافی نمیباشد❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 		
		}
	}else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ویژه است🌟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	    }}
	elseif($textmessage == "$btn2"){
		if($createbotsaz == "true"){
		if($sellbotsaz > 0){
			 $user["step"] = "sellbotsaz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
			bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"دوست عزیز برای ساخت ربات ساز شبیه ما لطفا توکن مورد نظر را از @BotFather ارسال نمایید :",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کاربرگرامی📛
متاسفانه امکان ساخت ربات ساز در حال حاضر در ربات ما وجود ندارد😊
برای ساخت ربات ساز با پشتیبانی تماس بگیرید👤",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 	
	}
	}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text2,
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 	
	}
	}
	elseif($textmessage != "🔙" && $step == "sellbotsaz"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("../$un/index.php"))){
	 $botsaz = file_get_contents("data/botsaz.txt");
            settype($botsaz,"integer");
         $newbots = $botsaz + 1;
        file_put_contents("data/botsaz.txt",$newbots);
		$user["step"] = "none";
		$user["createbotsaz"] = "false";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$new1 = $selledbotsaz + 1;
$new2 = $sellbotsaz - 1;
$settings["selledbotsaz"] = "$new1";
$settings["sellbotsaz"] = "$new2";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
$user2 = json_decode(file_get_contents("../../../data/$from_id.json"),true);
$user2["createbot"] = "true";
$user2["yourbotsaz"] = $un;
$user2["type"] = "vip";
$outjson2 = json_encode($user2,true);
file_put_contents("../../../data/$from_id.json",$outjson2);
$myfile2 = fopen("../../../data/members.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
	file_get_contents("$URL/BotSazSazApi.php?token=$textmessage&id=$from_id&type=create");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"دوست عزیز این پیام رو با دقت مطالعه کن📛

ربات ساز شما ساخته شد✔️
آیدی ربات ساز شما :
@$un
مدیر ربات ساز :
$from_id

---------------------

برای آپدیت ربات ساز و همچنین کار های مربوط به ربات ساز خود از سرور اصلی ما یعنی @MrUnknown_BoT | @JusTiCe_BoY اقدام نمایید🌹
با تشکر از خرید شما🌟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
}else{
	 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
}}
//---
elseif($textmessage == "$btn3"){
		if($type != "vip"){
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$text3",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}else{
		  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ما ویژه است🍂
با تشکر از خرید شما🌹",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
}
	elseif($textmessage == "$btn4"){	
	$start1 = str_replace("INVITE","$invite",$text4);
	$start2 = str_replace("ID","$from_id",$start1);
	$start3 = str_replace("BOTS","$createfree",$start2);
	$start4 = str_replace("TYPE","$type",$start3);
	$start5 = str_replace("free","رایگان",$start4);
	$start6 = str_replace("vip","ویژه",$start5);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$start6",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
	elseif($textmessage == "$btn5"){	
	$start1 = str_replace("SITE","$URL",$text5);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$start1",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🌐ورود به سایت ربات ساز ما🌐", 'url'=>"$BotSazWeb"]],
              ]
        ])
	 ]); 
	}
elseif($textmessage == "$btn6"){
	if($createfree > 0){
$user["step"] = "delete-bot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$text6",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}else{
		  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"شما هنوز در ربات ساز ما رباتی ثبت نکرده اید📛",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
	}
	elseif($step == "delete-bot" and $textmessage != "🔙"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (file_exists("../../Bot/$un/index.php"))){
		$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
settype($createfree,"integer");
                      $newcreate = $createfree - 1;
                      $user["create"] = $newcreate;
                       $outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات شما با موفقیت از سرور های ما حذف شد✅
آیدی ربات :
@$un",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 file_get_contents("$URL/BotSazApi.php?token=$textmessage&id=123&type=delete&account=123");
}else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"مشکلی پیش اومد📛
ممکن است توکن نادرست یا رباتدر سرور ما ثبت نشده باشد❗️
دوباره امتحان کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
	}
	elseif($textmessage == "$btn7"){	
	$user["step"] = "free-code";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$text7",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	elseif($textmessage != "🔙" and $step == "free-code"){	
	if($free_code != null){
	if($free_code == $textmessage){
	$user["step"] = "none";
	$user["type"] = "vip";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["free_code"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تبریک کد هدیه به شما تعلق گرفت😊
حساب شما با موفقیت در ربات ساز ویژه شد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 bot('sendMessage',[
 'chat_id'=>$chcode,
 'text'=>"کد هدیه توسط $from_id استفاده شد🎉
فرد مورد نظر در ربات ساز ویژه شد😊
منتظر کد های دیگر باشید😃
@$botusername
$channel",
 'parse_mode'=>"html",
	 ]); 
	  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کد هدیه توسط $from_id استفاده شد🎉
فرد مورد نظر در ربات ساز ویژه شد😊",
 'parse_mode'=>"html",
	 ]); 
	}else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد ارسال شده نادرست است❗️
دوباره تلاش کنید😃",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}else{
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"شرمنده دوست عزیز😁
یک نفر قبل از شما کد رو زده و کد منقضی شده📛",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}
	elseif($textmessage == "$btn8"){	
	$link = "https://telegram.me/$botusername?start=$from_id";
	$start1 = str_replace("LINK","$link",$text8);
        $start2 = str_replace("INVITE","$invite",$start1);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$start2",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
		elseif($textmessage == "$btn9"){	
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$text9",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
	elseif($textmessage == "$btn10"){	
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$text10",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
		elseif($textmessage == "$btn11"){	
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$text11",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
		elseif($textmessage == "$btn12"){	
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$text12",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	}
	elseif($textmessage == "$btn13"){	
	$user["step"] = "support";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$text13",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	elseif($step == "support" and $textmessage != "🔙"){
		    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام شما به پشتیبانی ارسال شد منتظر جواب بمانید😃
برای لغو گفتگو از دکمه زیر استفاده کنید👇🏻",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
		 bot('ForwardMessage',[
	'chat_id'=>$admin,
	'from_chat_id'=>$from_id,
	'message_id'=>$message_id
	]);
	   }
 elseif($rpto != "" && $chat_id == $admin){
     bot('sendMessage',[
 'chat_id'=>$rpto,
 'text'=>"دوست عزیز شما یک پیام از طرف پشتیبانی ربات دریافت کردید✔️
------------------------------
$textmessage",
 'parse_mode'=>"HTML",
	 ]);
	      bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام شما به فرد ارسال شد✔️",
 'parse_mode'=>"HTML",
	 ]);    
    }
	
	
	
	
	
	
	
}
}
//---panel---
if($textmessage == "مدیریت" or $textmessage == "پنل" or $textmessage == "/panel"){
    if($chat_id == $admin){
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"مدیر عزیز به بخش مدیریت ربات ساز خود خوش آمدید🌹
چه کاری از من ساخته است؟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"➰آمار کلی➰"]],
	[['text'=>"🔸ویژه کردن🔸"],['text'=>"🔹لغو حساب ویژه🔹"]],
	[['text'=>"🔸ویژه کردن برای ساخت ربات ساز🔸"]],
	[['text'=>"📛تنظیم تعداد مجاز ساخت ربات برای اعضای رایگان📛"]],
	[['text'=>"➰ارسال همگانی➰"],['text'=>"➰فروارد همگانی➰"]],
	[['text'=>"🎗دریافت شماره کاربر🎗"]],
	[['text'=>"🚫مسدود سازی کاربر🚫"],['text'=>"✅لغو مسدود سازی✅"]],
	[['text'=>"📞تنظیم تایید شماره📞"],['text'=>"🕞تنظیم ساعات طلایی🕞"]],
	[['text'=>"🎉ساخت کد هدیه🎉"]],
	[['text'=>"🚫حذف ربات🚫"]],
	[['text'=>"➰تنظیم متن های ربات➰"],['text'=>"▪️تنظیم متن دکمه ها▪️"]],
	[['text'=>"📝دستورات📝"]],
	[['text'=>"🔹بخش تنظیم کانال🔹"],['text'=>"🎗بخش شارژ فروش ربات ساز🎗"]],
	[['text'=>"🌟تنظیم تبلیغ در ربات های رایگان🌟"]],
	[['text'=>"🍂تنظیم متن کریتور در ربات های ساخته شده🍂"]],
	[['text'=>"✔️روشن کردن ربات ساز✔️"],['text'=>"❌خاموش کردن ربات ساز❌"]],
	[['text'=>"👤تنظیم تعداد زیرمجموعه برای حساب ویژه👤"]],
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}}
//-
elseif($chat_id == $admin and $textmessage == "📝دستورات📝"){	
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"در این بخش شما قادر به ساخت دستوراتی مانند /help یا /about هستید✔️
بطور مثال شما میتوانید دستور /help را از بخش افزودن دستور ایجاد کنید و برای آن جوابی تعیین کنید تا کاربر هنگامی که دستور /help را ارسال کرد جواب از قبل تعیین شده برای وی ارسال شود👌🏼",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
[['text'=>"افزودن دستور✔️"],['text'=>"حذف دستور➰"]],
[['text'=>"لیست دستورات▫️"]],
[['text'=>"🔙"]],
],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "حذف دستور➰"){
$user["step"] = "del-cmd-bot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای حذف دستور لطفا دستور مورد نظر را ارسال کنید😊
مثلا : /help",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "del-cmd-bot"){
if(file_exists("cmd/$textmessage.txt")){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$list = file_get_contents("cmd/list.txt");
$list = str_replace($textmessage,"",$list);
save("cmd/list.txt",$list);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"دستور $textmessage به همراه محتواتش از ربات شما حذف شد!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}else{
	  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"دستور مورد نظر یافت نشد!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 	
}
}
elseif($chat_id == $admin and $textmessage == "لیست دستورات▫️"){
$list = file_get_contents("cmd/list.txt");
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"$list",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
]); 	
}
elseif($chat_id == $admin and $textmessage == "افزودن دستور✔️"){
$user["step"] = "add-cmd-bot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای ایجاد دستور لطفا دستور مورد نظر را ارسال کنید😊
مثلا : /help",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}

elseif($chat_id == $admin and $textmessage != "🔙" and $step == "add-cmd-bot"){
	if(!file_exists("cmd/$textmessage.txt")){
$user["step"] = "set-cmd-text";
$user["gpgramtok"] = $textmessage;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"دستور $textmessage در ربات شما ثبت شد✔️
هنگامی که کاربر این دستور را ارسال کرد چه جوابی بدهم؟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}else{
	  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"این دستور از قبل در ربات شما ثبت شده است!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 	
}
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-cmd-text"){
$cmds = $user["gpgramtok"];
file_put_contents("cmd/$cmds.txt",$textmessage);
$myfile2 = fopen("cmd/list.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$cmds\n");
fclose($myfile2);
$user["step"] = "none";
$user["gpgramtok"] = "";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"دستور با موفقیت ایجاد شد.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
//-
elseif($chat_id == $admin and $textmessage == "🚫حذف ربات🚫"){	
$user["step"] = "del-bot-step";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای حذف ربات آیدی ربات رو بدون @ و با رعایت حروف بزرگ و کوچک ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}

elseif($chat_id == $admin and $textmessage != "🔙" and $step == "del-bot-step"){
if(file_exists("../../Bot/$textmessage/index.php")){
	$ids = file_get_contents("data/ids.txt");
	$offset = strpos($ids,$textmessage);
  if ($offset !== false){
	  deletefolder("../../Bot/$textmessage");
rmdir("../../Bot/$textmessage");
	  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ربات مورد نظر حذف شد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}else{
	  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ربات مورد نظر با ربات ساز شما ساخته نشده !
لطفا در ارسال آیدی دقت کنید و حروف بزرگ و کوچک را نیز رعایت کنید❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 	
}
}else{
		  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ربات مورد نظر در سیستم ربات ساز موجود نمیباشد",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
}
elseif($chat_id == $admin and $textmessage == "✅لغو مسدود سازی✅"){	
$user["step"] = "set-unban-user";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"آیدی عددی فرد رو برای لغو مسدود سازی ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-unban-user"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["step"] = "none";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت لغو مسدود شد",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"You are unbannen from server",
 'parse_mode'=>"HTML",
]); 
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
elseif($chat_id == $admin and $textmessage == "🚫مسدود سازی کاربر🚫"){	
$user["step"] = "set-ban-user";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"آیدی عددی فرد رو برای مسدود کردن ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-ban-user"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["step"] = "ban";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت مسدود شد",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"You are bannen from server",
 'parse_mode'=>"HTML",
]); 
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
elseif($chat_id == $admin and $textmessage == "🕞تنظیم ساعات طلایی🕞"){	
$user["step"] = "set-golden-times";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به بخش تنظیم ساعات طلایی خوش آمدید❕
در ساعات طلایی زیرمجموعه گیری در ربات ساز 2 برابر میشود!
وضعیت ساعات طلایی هم اکنون در ربات ساز شما : $golden_times
برای فعال سازی / غیرفعال سازی و ... این بخش از کیبورد زیر استفاده کنید:",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"✅روشن کردن ساعات طلایی✅"],['text'=>"📛خاموش کردن ساعات طلایی📛"]],
	[['text'=>"🗾تنظیم عکس بالای متن برای ارسال به کانال🗾"]],
	[['text'=>"🗾تنظیم گیف بالای متن برای ارسال به کانال🗾"]],
	[['text'=>"🔖تنظیم کپشن (متن زیر عکس یا گیف) ارسال به کانال🔖"]],
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage == "🔖تنظیم کپشن (متن زیر عکس یا گیف) ارسال به کانال🔖" and $step == "set-golden-times"){	
$user["step"] = "set-golden-txt";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لطفا متن ارسال به کانال را ارسال کنید:
این متن هم میتواندبصورت کپشن زیر عکس ارسال شود و هم تنهایی!
برای حذف متن عدد 0 را ارسال کنید",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); }
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-golden-txt"){
	if($textmessage == "0"){
		$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["golden_txt"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن ساعات طلایی با موفقیت حذف شد",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]);
	}else{
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["golden_txt"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن ساعات طلایی با موفقیت تنظیم شد",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]);
}
}	
elseif($chat_id == $admin and $textmessage == "🗾تنظیم گیف بالای متن برای ارسال به کانال🗾" and $step == "set-golden-times"){	
$user["step"] = "set-golden-gif";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این گیف هنگامی که ساعات طلایی فعال شود به کانال اطلاع رسانی ارسال میشود!
توجه کنید که تنظیم متن نیز اجباری است😊
برای حذف گیف عدد 0 را ارسال کنید!
لطفا گیف را ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); }
elseif($chat_id == $admin and $gif and $step == "set-golden-gif" and $textmessage != "🔙"){
	if($textmessage == "0"){
		$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["golden_gif"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"گیف ساعات طلایی با موفقیت حذف شد.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]);
	}else{
	    
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["golden_gif"] = "$gif_id";
$settings["golden_pic"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"گیف ساعات طلایی با موفقیت تنظیم شد!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]);
}
}	
elseif($chat_id == $admin and $textmessage == "🗾تنظیم عکس بالای متن برای ارسال به کانال🗾" and $step == "set-golden-times"){	
$user["step"] = "set-golden-pic";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این عکس هنگامی که ساعات طلایی فعال شود به کانال اطلاع رسانی ارسال میشود!
توجه کنید که تنظیم متن نیز اجباری است😊
برای حذف عکس عدد 0 را ارسال کنید!
لطفا عکس را ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); }
elseif($chat_id == $admin and $photo and $step == "set-golden-pic" and $textmessage != "🔙"){
	if($textmessage == "0"){
		$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["golden_pic"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
unlink("data/code.png");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس ساعات طلایی با موفقیت حذف شد.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]);
	}else{
	    $photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/code.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
$settings["golden_pic"] = "$URL/Bots/BotSaz/$botusername/data/code.png";
$settings["golden_gif"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس ساعات طلایی با موفقیت تنظیم شد!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]);
}
}	
elseif($chat_id == $admin and $textmessage == "📛خاموش کردن ساعات طلایی📛" and $step == "set-golden-times"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["golden_times"] = "off";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ساعات طلایی با موفقیت در ربات ساز شما خاموش شد!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "✅روشن کردن ساعات طلایی✅" and $step == "set-golden-times"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["golden_times"] = "on";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالت ساعات طلایی در ربات ساز شما فعال شد!
ازین پس کاربران ربات ساز شما به ازای هر زیر مجموعه 2 امتیاز دریافت میکنند❕
اگر متن و عکس برای این بخش را تنظیم نکرده اید لطفا تنظیم کنید تا به کانال اطلاع رسانی ارسال شود!
عکس الزامی نیست!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 	 if($golden_txt == null){
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ادمین گرامی❕
پست مخصوص ساعات طلایی به کانال ارسال نشد!
برای این کار شما باید ابتدا متن و عکس پست را تنظیم کنید
البته عکس اجباری نیست!",
 'parse_mode'=>"HTML",
	 ]); 
	 }
	 if($golden_pic == null and $golden_gif == null and $golden_txt != null){
		 bot('sendMessage',[
 'chat_id'=>$chcode,
 'text'=>$golden_txt,
 'parse_mode'=>"HTML",
   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"✨ورود به ربات✨", 'url'=>"https://telegram.me/[(*BOT*)]"]],
              ]
        ])
	 ]); 
	 }
	 if($golden_pic != null and $golden_txt != null){
	 	bot('SendPhoto',[
	'chat_id'=>$chcode,
	'photo'=>$golden_pic,
	'caption'=>$golden_txt,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"✨ورود به ربات✨", 'url'=>"https://telegram.me/[(*BOT*)]"]],
              ]
        ])
	]);
	 }
	 if($golden_gif != null and $golden_txt != null){
	 	bot('senddocument',[
	'chat_id'=>$chcode,
	'document'=>$golden_gif,
	'caption'=>$golden_txt,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"✨ورود به ربات✨", 'url'=>"https://telegram.me/[(*BOT*)]"]],
              ]
        ])
	]);
	 }

}
elseif($chat_id == $admin and $textmessage == "📞تنظیم تایید شماره📞"){	
$user["step"] = "set-number-settings";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"مدیر گرامی , با فعال سازی بخش تنظیم شماره هر کاربر که برای بار اول ربات ساز شما را استارت کند نیاز به ارسال شماره خود برای ادامه دارد!❕
شماره ارسال شده باید از خود شخص و همینطور شماره مجازی نباشد !📛
با استفاده از دکمه های زیر این بخش را روشن / خاموش کنید👇🏻",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"✅روشن کردن تایید شماره✅"],['text'=>"📛خاموش کردن تایید شماره📛"]],
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-number-settings"){	
if($textmessage == "✅روشن کردن تایید شماره✅"){
	$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["number_state"] = "on";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"بخش تایید شماره در ربات ساز شما فعال شد❕
ازین پس کاربران تازه وارد تا شماره خود را ارسال نکنند ربات ساز برایشان کار نمیکند!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 

}
if($textmessage == "📛خاموش کردن تایید شماره📛"){
		$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["number_state"] = "off";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"بخش تایید شماره در ربات ساز شما غیر فعال شد❕
ازین پس کاربران بدون تایید شماره میتوانند از ربات ساز استفاده کنند!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 

}
}

elseif($chat_id == $admin and $textmessage == "👤تنظیم تعداد زیرمجموعه برای حساب ویژه👤"){	
$user["step"] = "set-vip-invite";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"در این بخش میتوانید تنظیم کنید که کاربرانتان با آوردن چند زیرمجموعه میتوانند حساب خود را در ربات ساز شما ویژه کنند
تعداد زیرمجموعه فعلی $cinvite است , برای تغییر عدد جدید را ارسال کنید❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-vip-invite"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["cinvite"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"عدد $textmessage برای تعداد زیرمجموعه شما تنظیم شد!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
}
elseif($chat_id == $admin and $textmessage == "🎉ساخت کد هدیه🎉"){	
$user["step"] = "create-free-code";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ساخت کد هدیه لطفا کد را ارسال کنید :
در صورتی که از قبل در پنل ربات بخش تنظیمات کانال کانال ارسال کد هدیه را ثبت کرده باشید کد مستقیما به کانال ارسال میشود.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "create-free-code"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["free_code"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
if($chcode != null){
bot('sendMessage',[
 'chat_id'=>$chcode,
 'text'=>"کد هدیه جدید ساخته شد🎉
برا ی استفاده در ربات @$botusername از دکمه مخصوص کد حساب خود را ویژه کنید🌺

Code : <code>$textmessage</code>

$channel",
 'parse_mode'=>"HTML",
    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"✨ورود به ربات✨", 'url'=>"https://telegram.me/[(*BOT*)]"]],
              ]
        ])
	 ]); 
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد هدیه جدید ساخته شد🎉
برا ی استفاده در ربات @$botusername از دکمه مخصوص کد حساب خود را ویژه کنید🌺

Code : <code>$textmessage</code>

$channel",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد هدیه جدید ساخته شد🎉
برا ی استفاده در ربات @$botusername از دکمه مخصوص کد حساب خود را ویژه کنید🌺

Code : <code>$textmessage</code>

$channel",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به دلیل عدم وجود کانال برای ارسال کد هدیه❗️
کد به پیوی شما ارسال شد😊
همین حالا از تنظیمات ربات ساز بخش تنظیمات کانال
کانال ارسال کد هدیه را ثبت نمایید✅",
 'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}}
elseif($chat_id == $admin and $textmessage == "🔹بخش تنظیم کانال🔹"){	
$user["step"] = "set-channel-settings";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تنظیمات کانال شامل چند بخش است😊
1️⃣تنظیم قفل کانال و خاموش روشن کردن آن
2️⃣تنظیم کانال ارسال کد رایگان و خاموش روشن کردن آن
3️⃣تنظیم کانال اطلاع رسانی از ربات های ساخته شده و خاموش روشن کردن آن
لطفا یکی از گزینه های زیر را انتخاب کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"✅تنظیم قفل کانال✅"],['text'=>"📛حذف قفل کانال📛"]],
	[['text'=>"✅تنظیم کانال ارسال کد هدیه✅"],['text'=>"📛حذف کانال ارسال کد هدیه📛"]],
	[['text'=>"✅تنظیم کانال اطلاع رسانی از ربات های ساخته شده✅"],['text'=>"📛حذف کانال اطلاع رسانی از ربات های ساخته شده📛"]],
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}

elseif($step == "set-channel-settings" and $chat_id == $admin and $textmessage != "🔙" and $textmessage == "✅تنظیم کانال اطلاع رسانی از ربات های ساخته شده✅"){
	$user["step"] = "set-channel-log";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"در این بخش میتوانید کانالی تنظیم کنید که هر گاه رباتی در ربات ساز شما ثبت شد پیامی مبنی بر ساخت ربات به آن کانال ارسال گردد😊
برای تنظیم کانال ابتدا ربات را ادمین کانال کنید و یک پیام از کانال فروارد کنید😁
توجه داشته باشید که کانال باید عمومی (درای آیدی) باشد❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
if(isset($message->forward_from_chat) && $c_id1 != null ){
if($step == "set-channel-log" and $chat_id == $admin and $textmessage != "🔙"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
$settings["chlog"] = $c_id2;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کانال اطلاع رسانی از ربات های ساخته شده با موفقیت تنظیم شد✅
آیدی کانال :
@$c_id1
ازین پس هر رباتی که ساخته شود به این کانال ارسال میشود😄",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
}
elseif($step == "set-channel-settings" and $chat_id == $admin and $textmessage != "🔙" and $textmessage == "📛حذف کانال اطلاع رسانی از ربات های ساخته شده📛"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["chlog"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کانال اطلاع رسانی از ربات های ساخته شده با موفقیت حذف شد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
//---

elseif($step == "set-channel-settings" and $chat_id == $admin and $textmessage != "🔙" and $textmessage == "✅تنظیم کانال ارسال کد هدیه✅"){
	$user["step"] = "set-channel-code";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"در اینجا میتوانید تنظیم کنید که کد هدیه ای که میسازید به کدام چنل ارسال شود😊
ابتدا ربات را در کانال ادمین کرده و سپس یک پیام از کانال فروارد کنید
در ضمن کانال باید عمومی (دارای آیدی) باشد.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
if(isset($message->forward_from_chat) && $c_id1 != null ){
if($step == "set-channel-code" and $chat_id == $admin and $textmessage != "🔙"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
$settings["chcode"] = $c_id2;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کانال ارسال کد هدیه با موفقیت تنظیم شد✅
آیدی کانال :
@$c_id1
ازین پس هر کد هدیه ای که ساخته شود به این کانال ارسال میشود😄",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
}
elseif($step == "set-channel-settings" and $chat_id == $admin and $textmessage != "🔙" and $textmessage == "📛حذف کانال ارسال کد هدیه📛"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["chcode"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کانال ارسال کد هدیه با موفقیت حذف شد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
//---

elseif($step == "set-channel-settings" and $chat_id == $admin and $textmessage != "🔙" and $textmessage == "✅تنظیم قفل کانال✅"){
	$user["step"] = "set-channel-lock";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"در این بخش میتوانید کانالی تنظیم کنید که اگر کاربران ربات ساز شما در آن کانال عضو نشوند ربات برایشان کار نکند😊
لطفا ربات را در کانال ادمین کرده و سپس آیدی کانال را به همراه @ ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($step == "set-channel-lock" and $chat_id == $admin and $textmessage != "🔙"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["channel"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"قفل کانال بر روی $textmessage فعال شد✅
ربات باید در این کانال ادمین باشد تا کار کند❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($step == "set-channel-settings" and $chat_id == $admin and $textmessage != "🔙" and $textmessage == "📛حذف قفل کانال📛"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["channel"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"قفل کانال با موفقیت از روی ربات ساز برداشته شد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage == "📛تنظیم تعداد مجاز ساخت ربات برای اعضای رایگان📛"){	
$user["step"] = "set-max-create";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"در حال حاظر هر فرد که در ربات ساز شما حساب رایگان دارد قادر به ساخت $maxcreate ربات میباشد❗️
شما میتوانید این عدد را تغییر دهید😊
لطفا عدد جدید را به لاتین ارسال کنید :
توجه داشته باشید که هرچه این مقدار پایین تر باشد خرید حساب ویژه در ربات سازتان بیشتر خواهد بود😃",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($step == "set-max-create" and $chat_id == $admin and $textmessage != "🔙"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
settype($maxcreate,"integer");
$settings["maxcreate"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تعداد مجاز ساخت ربات برای اعضای رایگان به $textmessage عدد تغییر کرد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage == "🍂تنظیم متن کریتور در ربات های ساخته شده🍂"){	
$user["step"] = "set-creator-cmd";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متنی که میخواهید هنگام ارسال دستور /creator در ربات های ساخته شده ارسال شود را بفرستید✅
برای حذف دستور کریتور از ربات ها عدد 0 را ارسال نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($step == "set-creator-cmd" and $chat_id == $admin and $textmessage != "🔙"){	
    $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
if($textmessage == "0"){
    unlink("data/creator-cmd.txt");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"دستور کریتور از همه ربات ها حذف شد⚡️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}else{
file_put_contents("data/creator-cmd.txt",$textmessage);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن دستور کریتور در تمامی ربات ساز ها تعیین شد⚡️
متن :
$textmessage",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}}
elseif($chat_id == $admin and $textmessage == "🌟تنظیم تبلیغ در ربات های رایگان🌟"){	
$user["step"] = "set-ads-bot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تبلیغ خود را ارسال کنید تا در صورتی که حساب فرد در ربات ساز شما رایگان بود تبلیغ شما بصورت خودکار در هنگام استارت ربات کاربر ارسال شود😃
برای حذف تبلیغ عدد 0 را ارسال کنید🍂",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($step == "set-ads-bot" and $chat_id == $admin and $textmessage != "🔙"){	
if($textmessage != "0"){
file_put_contents("data/ads.txt",$textmessage);
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن تبلیغ شما با موفقیت تنظیم شد🍂
ازین پس هر کس ربات رایگان بسازد این متن در رباتش ثبت میشود😃",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}else{
	unlink("data/ads.txt");
	$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تبلیغات با موفقیت حذف شدند💥",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
}
elseif($chat_id == $admin and $textmessage == "➰تنظیم متن های ربات➰"){	
$user["step"] = "set-text-bot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به بخش تغییر متن های ربات سازتان خوش آمدید
قصد تغییر متن کدام بخش از ربات خود را دارید؟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"متن استارت"]],
	[['text'=>"متن ساخت ربات"],['text'=>"متن ساخت ربات ساز"]],
	[['text'=>"متن ویژه کردن حساب برای ساخت ربات"]],
	[['text'=>"متن پروفایل کاربر"],['text'=>"متن سایت ربات ساز ما"]],
	[['text'=>"متن حذف ربات"]],
	[['text'=>"متن کد رایگان"],['text'=>"متن زیرمجموعه گیری"]],
	[['text'=>"متن پشتیبانی آنلاین"]],
	[['text'=>"متن قوانین ربات ساز"],['text'=>"متن کانال ما"]],
	[['text'=>"متن راهنما"],['text'=>"متن رزرو تبلیغات"]],
	[['text'=>"🔙"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن رزرو تبلیغات"){
	$user["step"] = "set-text11-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن تبلیغاتی خود را برای رزرو تبلیغات در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn11) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text11-text" and $textmessage != "🔙"){
$settings["text"]["text11"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه رزرو تبلیغات ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن راهنما"){
	$user["step"] = "set-text12-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن  خود را برای راهنما در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn12) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text12-text" and $textmessage != "🔙"){
$settings["text"]["text12"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه راهنما تبلیغات ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن کانال ما"){
	$user["step"] = "set-text10-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن تبلیغاتی خود را برای نمایش تبلیغ کانال شما در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn10) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text10-text" and $textmessage != "🔙"){
$settings["text"]["text10"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه کانال ما ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن قوانین ربات ساز"){
	$user["step"] = "set-text9-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن  خود را برای قوانین ربات سازتان در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn9) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text9-text" and $textmessage != "🔙"){
$settings["text"]["text9"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه قوانین ربات ساز ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن زیرمجموعه گیری"){
	$user["step"] = "set-text8-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن  خود را برای زیرمجموعه گیری در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn8) کلیک کرد این متن ظاهر شود.
---------------------------------
همچنین از متغیر های زیر استفاده کنید :
برای نمایش لینک مخصوص کاربر عبارت LINK را در متن خود بنویسید
برای نمایش تعداد افرادی که دعوت کرده عبارت INVITE را در متن خود بنویسید",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text8-text" and $textmessage != "🔙"){
$settings["text"]["text8"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه زیر مجموعه گیری ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن کد رایگان"){
	$user["step"] = "set-text7-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن خود را برای کد رایگان در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn7) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text7-text" and $textmessage != "🔙"){
$settings["text"]["text7"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه کد رایگان ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن حذف ربات"){
	$user["step"] = "set-text6-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن خود را برای حذف ربات در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn6) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text6-text" and $textmessage != "🔙"){
$settings["text"]["text6"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه حذف ربات ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن سایت ربات ساز ما"){
	$user["step"] = "set-text5-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن خود را برای سایت ربات ساز در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn5) کلیک کرد این متن ظاهر شود.
---------------------------------
همچنین از متغیر های زیر استفاده کنید :

برای نمایش سایت ربات سازتون عبارت SITE را در متن خود بنویسید",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text5-text" and $textmessage != "🔙"){
$settings["text"]["text5"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه سایت ربات ساز ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن پروفایل کاربر"){
	$user["step"] = "set-text4-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن خود را برای پروفایل کاربر در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn4) کلیک کرد این متن ظاهر شود.
---------------------------------
همچنین از متغیر های زیر استفاده کنید :

برای نمایش تعداد افرادی که دعوت کرده عبارت INVITE را در متن خود بنویسید
برای نمایش آیدی عددی کاربر عبارت ID را در متن خود بنویسید
برای نمایش تعداد ربات هایی که ساخته عبارت BOTS را در عبارت خود بنویسید
برای نمایش نوع حساب کاربر عبارت TYPE را در متن خود بنویسید",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text4-text" and $textmessage != "🔙"){
$settings["text"]["text4"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه پروفایل کاربر ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن ویژه کردن حساب برای ساخت ربات"){
	$user["step"] = "set-text3-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن خود را برای ویژه کردن حساب (بصورت پولی) در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn3) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text3-text" and $textmessage != "🔙"){
$settings["text"]["text3"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه ویژه کردن حساب ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن ساخت ربات ساز"){
	$user["step"] = "set-text2-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن خود را برای ویژه کردن ربات ساز هنگامی که حساب کاربر ویژه نیست در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn2) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text2-text" and $textmessage != "🔙"){
$settings["text"]["text2"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه ساخت ربات ساز ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن ساخت ربات"){
	$user["step"] = "set-text1-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن خود را برای ساخت ربات معمولی در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn1) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text1-text" and $textmessage != "🔙"){
$settings["text"]["text1"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه ساخت ربات معمولی ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن استارت"){
	$user["step"] = "set-start-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن خود را برای استارت در ربات ساز خود ارسال کنید تا وقتی کاربر ربات را استارت کرد این متن ظاهر شود.
---------------------------------
همچنین از متغیر های زیر استفاده کنید :

برای نمایش نام کاربر عبارت FIRSTNAME را در متن خود بنویسید
برای نمایش یوزرنیم کاربر عبارت USERNAME را در متن خود بنویسید
برای نمایش آیدی عددی کاربر عبارت ID را در متن خود بنویسید
برای نمایش تاریخ عبارت DATE را در متن خود بنویسید
برای نمایش ساعت عبارت TIME را در متن خود بنویسید
برای نمایش نوع حساب کاربر عبارت TYPE را در متن خود بنویسید",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-start-text" and $textmessage != "🔙"){
$settings["starttext"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای استارت ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $step == "set-text-bot" and $textmessage != "🔙" and $textmessage == "متن پشتیبانی آنلاین"){
	$user["step"] = "set-text13-text";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن تبلیغاتی خود را برای پشتیبانی آنلاین در ربات ساز خود ارسال کنید تا وقتی کاربر بر روی دکمه ($btn13) کلیک کرد این متن ظاهر شود.",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $step == "set-text13-text" and $textmessage != "🔙"){
$settings["text"]["text13"] = "$textmessage";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
$user["step"] = "none";
$outjson1 = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"متن جدید برای دکمه پشتیبانی آنلاین ثبت شد✅
متن جدید :
$textmessage",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
elseif($chat_id == $admin and $textmessage == "✔️روشن کردن ربات ساز✔️"){	
$settings["mode"] = "on";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ربات ساز شما با موفقیت روشن شد✔️
ازین پس کاربران میتوانند از ربات ساز شما استفاده کنند😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
elseif($chat_id == $admin and $textmessage == "❌خاموش کردن ربات ساز❌"){	
$settings["mode"] = "off";
$outjson = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ربات ساز شما با موفقیت خاموش شد❌
کاربران شما نمیتوانند از ربات ساز استفاده کنند!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
	elseif($chat_id == $admin and $textmessage == "➰آمار کلی➰"){	
$alluser = file_get_contents("data/members.txt");
	$alaki = explode("\n",$alluser);
    $allusers = count($alaki)-1;
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"🔺تعداد کل اعضای ربات ساز : $allusers
🔸تعداد کل ربات های ساخته شده : $freeallbots
🔻تعداد کل اعضای ویژه : $vipaccs
🔹تعداد فروش ربات ساز : $selledbotsaz",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
//---
elseif($chat_id == $admin and $textmessage == "🔸ویژه کردن🔸"){	
$user["step"] = "set-vip-user";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"آیدی عددی فرد رو برای ویژه کردن ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-vip-user"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["type"] = "vip";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
settype($vipaccs,"integer");
                      $newaccs = $vipaccs + 1;
                      $settings["vipaccs"] = $newaccs;
                       $outjson2 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson2);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت ویژه شد✔️
پروفایل فرد :
$textmessage",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب شما با موفقیت توسط مدیران ربات ویژه شد🌹
ازین پس میتوانید ربات ساز شخصی خود را داشته باشید😃
با تشکر از خرید شما😊",
 'parse_mode'=>"HTML",
]); 
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
//---
elseif($chat_id == $admin and $textmessage == "🔹لغو حساب ویژه🔹"){	
$user["step"] = "off-vip-user";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای رایگان کردن حساب فرد آیدی عددی فرد مورد نظر را ارسال کنید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "off-vip-user"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["type"] = "free";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
settype($vipaccs,"integer");
                      $newaccs = $vipaccs - 1;
                      $settings["vipaccs"] = $newaccs;
                       $outjson2 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson2);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت رایگان شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب شما توسط مدیران ربات ساز رایگان شد😄",
 'parse_mode'=>"HTML",
]); 
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
elseif($chat_id == $admin and $textmessage == "🔸ویژه کردن برای ساخت ربات ساز🔸"){	
$user["step"] = "set-vip-botsaz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"مدیر گرامی در این بخش شما میتوانید به یکی از کاربران ربات ساز خود اجازه ساخت ربات ساز بدهید!
این ربات ساز دقیقا شبیه ربات ساز شما بوده و هیچ تفاوتی نمیکند😊
برای این کار شما ابتدا باید ربات ساز خود را شارژ کنید😄
برای ساخت هر ربات ساز با ربات ساز شما باید مبلغ 5 هزار تومان به @MrUnknown_BoT | @JusTiCe_BoY بدهید تا ربات سازتان شارژ شود😄
تعداد شارژ ربات ساز شما $sellbotsaz عدد است !
برای ویژه کردن فرد لطفا آیدی عددی فرد را ارسال کنید یا با دکمه زیر عملیات را لغو نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-vip-botsaz"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["createbotsaz"] = "true";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت ویژه شد و میتواند ربات ساز خود را بسازد!😃
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"شما یک پیغام از طرف مدیریت ربات ساز دارید:

دوست عزیز حساب شما در ربات ساز ویژه شد و میتوانید ربات ساز خود را بسازید✔️",
 'parse_mode'=>"HTML",
]); 
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
elseif($chat_id == $admin and $textmessage == "➰ارسال همگانی➰"){	
$user["step"] = "send2all";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام خود را برای ارسال همگانی ارسال نمایید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin && $step == "send2all" && $textmessage != "🔙"){ 
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
    $all_member = fopen( "data/members.txt", 'r');
	while( !feof( $all_member)) {
 	$user = fgets( $all_member);
  bot('sendMessage',[
 'chat_id'=>$user,
 'text'=>$textmessage,
 'parse_mode'=>"HTML",
  ]);
}
  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام همگانی با موفقیت به همه اعضا ارسال شد✔️",
 'parse_mode'=>"HTML",
  ]);
}
//----
elseif($chat_id == $admin and $textmessage == "➰فروارد همگانی➰"){
	$user["step"] = "f2all";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام خود را برای فروارد همگانی فروارد نمایید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($textmessage != "🔙" && $from_id == $admin && $step == "f2all"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
    $all_member = fopen( "data/members.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
		   bot('ForwardMessage',[
	'chat_id'=>$user,
	'from_chat_id'=>$admin,
	'message_id'=>$message_id
	]);
		}    
		bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"فروارد همگانی به همه اعضای ربات فروارد شد✔️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
//---
elseif($chat_id == $admin and $textmessage == "🎗دریافت شماره کاربر🎗"){	
$user["step"] = "getnumber";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"💥برای دریافت شما کاربر آیدی عددی فرد را ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); }
elseif($chat_id == $admin and $textmessage != "🔙" && $step == "getnumber"){
	if(file_exists("data/$textmessage.json")){
		$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$number1 = $user1["number"];
bot('sendContact',[
 'chat_id'=>$admin,
 'phone_number'=>$number1,
 'first_name'=>"شماره فرد",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"شماره فرد ارسال شد😄
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"HTML",
]);
}
}		
//---
elseif($chat_id == $admin and $textmessage == "▪️تنظیم متن دکمه ها▪️"){	
$user["step"] = "setnamebuttons";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$txt = 'در اضافه کردن متن دقت کنید که میتوانید از تگ های HTML نیز استفاده نمایید👌🏼
نمونه هایی از این کد ها رو ذکر میکنیم :

درشت کردن متن (انگلیسی) :
<b>TEST</b>
<strong>TEST</strong>
----------------
کج کردن متن (انگلیسی) :
<i>TEST</i>
----------------
کد کردن متن (انگلیسی) :
<code>TEST</code>
<pre>TEST</pre>
----------------
هایپر لینک کردن متن (هر زبانی) :
<a href = "www.google.com">TEXT</a>
و...';
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>$txt,
 'parse_mode'=>"MarkDown",
]); 
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"قصد دارید نام کدام دکمه را تغییر دهید؟",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"$btn1"],['text'=>"$btn2"]],
	[['text'=>"$btn3"],['text'=>"$btn4"]],
	[['text'=>"$btn5"]],
	[['text'=>"$btn6"],['text'=>"$btn7"]],
	[['text'=>"$btn8"]],
	[['text'=>"$btn9"],['text'=>"$btn10"]],
	[['text'=>"$btn11"],['text'=>"$btn12"]],
	[['text'=>"$btn13"]],
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn1" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn1";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn1 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn1"){
		$user["step"] = "none";
	$settings["buttons"]["btn1"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn2" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn2";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn2 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn2"){
		$user["step"] = "none";
	$settings["buttons"]["btn2"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn3" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn3";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn3 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn3"){
	$user["step"] = "none";
	$settings["buttons"]["btn3"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn4" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn4";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn4 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn4"){
		$user["step"] = "none";
	$settings["buttons"]["btn4"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn5" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn5";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn5 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn5"){
		$user["step"] = "none";
	$settings["buttons"]["btn5"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn6" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn6";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn6 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn6"){
		$user["step"] = "none";
	$settings["buttons"]["btn6"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn7" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn7";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn7 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn7"){
		$user["step"] = "none";
	$settings["buttons"]["btn7"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn8" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn8";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn8 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn8"){
	$user["step"] = "none";
	$settings["buttons"]["btn8"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn9" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn9";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn9 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn9"){
	$user["step"] = "none";
	$settings["buttons"]["btn9"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn10" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn10";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn10 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn10"){
	$user["step"] = "none";
	$settings["buttons"]["btn10"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn11" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn11";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn11 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn11"){
	$user["step"] = "none";
	$settings["buttons"]["btn11"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn12" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn12";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn12 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn12"){
	$user["step"] = "none";
	$settings["buttons"]["btn12"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "$btn13" and $textmessage != "🔙" and $step == "setnamebuttons"){
	$user["step"] = "setbtn13";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای تغییر نام دکمه $btn13 نام جدید را ارسال نمایید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "setbtn13"){
		$user["step"] = "none";
	$settings["buttons"]["btn13"] = "$textmessage";
	$outjson1 = json_encode($settings,true);
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_put_contents("data/settings.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"نام جدید به $textmessage تغییر یافت😄",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage == "🎗بخش شارژ فروش ربات ساز🎗"){	
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ادمین گرامی😄
ربات ساز شما امکان ساخت ربات سازی شبیه به همین ربات ساز را دارد😁
البته این کار رایگان انجام نمیشود!
برای ساخت هر ربات ساز با ربات ساز خودتان باید ربات سازتان را از @MrUnknown_BoT | @JusTiCe_BoY شارژ کنید😊
برای ساخت هر ربات ساز باید مبلغ 5 هزار تومان را در ربات @MrUnknown_BoT | @JusTiCe_BoY پرداخت نمایید (با پشتیبانی در تماس باشید)
شارژ فعلی ربات شما $sellbotsaz است و تعداد ربات ساز هایی که فروخته اید نیز $selledbotsaz عدد میباشد😊
با تشکر
@Batsaz_Gold",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
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