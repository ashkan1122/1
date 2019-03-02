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
}}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$chatid = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$messageid = $update->callback_query->message->message_id;
$textmessage = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$admin = [*[ADMIN]*];
$tc = $update->message->chat->type;
$reply = $update->message->reply_to_message;
$data = $update->callback_query->data;
$reply_id = $update->message->reply_to_message->from->id;
$token = "[*[TOKEN]*]";
$user = json_decode(file_get_contents("data/$from_id.json"),true);
$step = $user["step"];
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function ForwardMessage($chatid,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
	}
	//-------
	if (!file_exists("data/$from_id.json")) {
        $myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
		 $user["step"] = "none";
		 $user["Questions"]["1"] = "اگر بهت بگن ۱ میلیارد برنده شدی،چقدرش به دیگران کمک میکنی؟ چرا؟";
		 $user["Questions"]["2"] = "تاحالا عاشق شدی،اسمش چی بوده؟";
		 $user["Questions"]["3"] = "تو زندگیت چه فردی رو بیشتر از همه دوست داری؟چرا؟";
		 $user["Questions"]["4"] = "یکی از آرزو هات که هنوز برآورده نشده؟؟";
		 $user["Questions"]["5"] = "تا حالا رابطه نامشروع داشتی؟";
		 $user["Questions"]["6"] = "اگر بتونی به خاطره از گذشته زندگیت پاک کنی اون چیه؟چرا؟؟؟";
		 $user["Questions"]["7"] = "بزرگترین دروغی که گفتی چی بوده؟؟";
		 $user["Questions"]["8"] = "از کی بیشتر از همه نفرت داری ؟ چرا ؟؟؟";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
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
		if(strpos($textmessage,'/start') !== false && $textmessage != "/start") {
					$id=str_replace("/start ","",$textmessage);
					if($id != $from_id){
					   $user["soalha"] = "$id";
					   $user["step"] = "soalha";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
					 bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"سلام دوست من 
این ربات از 8 تا سوال میپرسه،اگر به این سوالات پاسخ درست بدی، اتفاقات  که در آینده قراره بیوفته واست رو شرح میده🤗اگر شگفت زده نشدی 😏 دیگه امتحان نکن☺️

💫اگر به فال و این موضوعات اعتقاد نداری ،من بهت پیشنهاد میکنم کمی وقت بذاری وبه سوالات پاسخ بدی ، مطمعن باش جوابی بهت میده که شگفت زده میشی 😲 و قدرت فال و ربات رو میبینی 


💥لطفا پس از دریافت جواب ،خونسردی خودتون رو حفظ کنید و اگر رضایت داشتین ربات به دوستان خودتون معرفی کنید ❤️",
                   'parse_mode'=>"HTML",
                   				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"شروع ☺️😊"]],
	],
		"resize_keyboard"=>true,
	 ])
	                      ]);
						   bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"روی دکمه شروع کلیک کن و فالتو بگیر💛",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"شروع ☺️😊"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	 		bot('sendMessage',[
             'chat_id'=>$id,
            'text'=>"یک نفر از طرف شما وارد ربات شد و اگر سوالات رو پر کرد من برات میفرستمشون 😄
📍 کاربر : <a href='tg://user?id=$from_id'>$first_name</a>",
         'parse_mode'=>"HTML",
	 ]);
	}}
elseif($textmessage == "شروع ☺️😊" and $step == "soalha"){
		$id = $user["soalha"];
		$user1 = json_decode(file_get_contents("data/$id.json"),true);
$soal = $user1["Questions"]["1"];
$user["step"] = "soal-1";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"1- $soal",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"دلم نمیخواد بگم😒"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage != "/start" and $step == "soal-1"){
		$id = $user["soalha"];
		$user1 = json_decode(file_get_contents("data/$id.json"),true);
$soal = $user1["Questions"]["2"];
$user["javabha"]["1"] = "$textmessage";
$user["step"] = "soal-2";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"2- $soal",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"دلم نمیخواد بگم😒"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage != "/start" and $step == "soal-2"){
		$id = $user["soalha"];
		$user1 = json_decode(file_get_contents("data/$id.json"),true);
$soal = $user1["Questions"]["3"];
$user["javabha"]["2"] = "$textmessage";
$user["step"] = "soal-3";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"3- $soal",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"دلم نمیخواد بگم😒"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
		elseif($textmessage!= "/start" and $step == "soal-3"){
		$id = $user["soalha"];
		$user1 = json_decode(file_get_contents("data/$id.json"),true);
$soal = $user1["Questions"]["4"];
$user["javabha"]["3"] = "$textmessage";
$user["step"] = "soal-4";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"4- $soal",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"دلم نمیخواد بگم😒"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage != "/start"and $step == "soal-4"){
		$id = $user["soalha"];
		$user1 = json_decode(file_get_contents("data/$id.json"),true);
$soal = $user1["Questions"]["5"];
$user["javabha"]["4"] = "$textmessage";
$user["step"] = "soal-5";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"5- $soal",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"دلم نمیخواد بگم😒"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage != "/start"and $step == "soal-5"){
		$id = $user["soalha"];
		$user1 = json_decode(file_get_contents("data/$id.json"),true);
$soal = $user1["Questions"]["6"];
$user["javabha"]["5"] = "$textmessage";
$user["step"] = "soal-6";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"6- $soal",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"دلم نمیخواد بگم😒"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage != "/start"and $step == "soal-6"){
		$id = $user["soalha"];
		$user1 = json_decode(file_get_contents("data/$id.json"),true);
$soal = $user1["Questions"]["7"];
$user["step"] = "soal-7";
$user["javabha"]["6"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"7- $soal",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"دلم نمیخواد بگم😒"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	elseif($textmessage != "/start"and $step == "soal-7"){
		$id = $user["soalha"];
		$user1 = json_decode(file_get_contents("data/$id.json"),true);
$soal = $user1["Questions"]["8"];
$user["javabha"]["7"] = "$textmessage";
$user["step"] = "soal-8";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"8- $soal",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"دلم نمیخواد بگم😒"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);}
	 elseif($textmessage != "/start"and $step == "soal-8"){
		$id = $user["soalha"];
$user["step"] = "none";
$user["javabha"]["8"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
        $num1 = $user["javabha"]["1"];
		$num2 = $user["javabha"]["2"];
		$num3 = $user["javabha"]["3"];
		$num4 = $user["javabha"]["4"];
		$num5 = $user["javabha"]["5"];
		$num6 = $user["javabha"]["6"];
		$num7 = $user["javabha"]["7"];
		$num8 = $user["javabha"]["8"];
	  bot('sendMessage',[
                    'chat_id'=>$id,
                    'text'=>"🎉 یک نفر به سوالات پاسخ داد 😍
 
📍جواب 1 : $num1
📍جواب 2 : $num2
📍جواب 3 : $num3
📍جواب 4 : $num4
📍جواب 5 : $num5
📍جواب 6 : $num6
📍جواب 7 : $num7
📍جواب 8 : $num8

➖➖ 
🌟 پروفایلش : 

<a href='tg://user?id=$from_id'>$first_name</a>",
                   'parse_mode'=>"HTML",
	 ]);
				bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"نتیجه فال شما به این صورت میباشد👇👇👇",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	 bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"به ربات اعتراف گیر خوش اومدی😂😂
این ربات یه نوع ربات اعتراف گیری هستش و هر سوالی که جواب دادین مستقیم به کسی که این ربات و بهتون معرفی کرد ارسال شده و ایشون سوالاتی که نمیتونست مستقیم ازتون بپرسه رو اینجا پرسیده جوابشو گرفت😂
حالا دیگه اتفاقیه که افتاده و نمیشه کاریش کرد😜
اگه تو هم سوالی داری که میخوایی از کسی بپرسی با این ربات میتونی سوالاتتو تو ربات ذخیره کنی و بعد لینک مخصوص خودتو بگیری و به دوستات بفرستی تا سوالاتتو جواب بدن و جوابشون مستقیم به تو ارسال بشه😍",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	  bot('sendMessage',[
                    'chat_id'=>$from_id,
                    'text'=>"سوالاتتو تو ربات ذخیره کن و لینک مخصوص خودتو بگیر و برای دوستات بفرست تا جواب سوالاتتو بگیری😜



🚫دوست من مسولیت استفاده این ربات برعهده خود شماست 
این ربات جنبه فان داره هر گونه مشکلی به وجود بیاد بر عهده خود شماست 🌹
امیدوارم لذت ببرید",
                   'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}

	//-----------
	if($textmessage == "/start" or $textmessage == "🔙 برگشت"){
		 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
			if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به ربات اعتراف گیر خوش اومدی😂😂
          این ربات یه نوع ربات اعتراف گیری هستش
سوالاتتو تو ربات ذخیره کن و لینک مخصوص خودتو بگیر و برای دوستات بفرست تا جواب سوالاتتو بگیری😜

لینک اختصاصیتو بگیر و برای دوستات فوروارد کن و ازشون بخواه تا فالشونو بگیرن و از آیندشون باخبر بشن..یکمی هم از ربات تعریف کن و بگو همه چیو درست جواب میده و خیلی عالیه و حتما امتحان کنن، تا به سوالاتون جواب بدن😜
بعضی دوستان میان میگن چرا جواب سوالا بهم ارسال نمیشه.. دقت کنین لینک مخصوص خودتونو برای دوستاتون ارسال کنید نه لینکی که از دوستتون گرفتین
فقط حواست باشه اگه میخوایی پیام ها بهت ارسال بشن حتما باید تو کانال ما عضو باشی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔗 دریافت لینک من"],['text'=>"⁉️ تنظیم سوال"]],
    [['text'=>"📍 درباره ربات"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);	
	}
	if(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmessage)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
	//--------
	if($textmessage == "⁉️ تنظیم سوال"){
		 $user["step"] = "set-Questions";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"🎫 قصد تغییر سوال چندم را دارید؟
توجه : اگر سوالی را خوتان تنظیم نکنید سوالات پیش فرض ربات از آنها پرسیده خواهد شد پس جای نگرانی نیست 🤒",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);	
	}
	if($textmessage == "❓ سوال 1" && $step == "set-Questions"){
		 $user["step"] = "set-1";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 1 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-1"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["1"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 1 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "❓ سوال 2" && $step == "set-Questions"){
		 $user["step"] = "set-2";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 2 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-2"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["2"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 2 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "❓ سوال 3" && $step == "set-Questions"){
		 $user["step"] = "set-3";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 3 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-3"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["3"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 3 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "❓ سوال 3" && $step == "set-Questions"){
		 $user["step"] = "set-3";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 3 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-3"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["3"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 3 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "❓ سوال 4" && $step == "set-Questions"){
		 $user["step"] = "set-4";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 4 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-4"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["4"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 4 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "❓ سوال 5" && $step == "set-Questions"){
		 $user["step"] = "set-5";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 5 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-5"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["5"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 5 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "❓ سوال 6" && $step == "set-Questions"){
		 $user["step"] = "set-6";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 6 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-6"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["6"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 6 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "❓ سوال 7" && $step == "set-Questions"){
		 $user["step"] = "set-7";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 7 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-7"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["7"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 7 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "❓ سوال 8" && $step == "set-Questions"){
		 $user["step"] = "set-8";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"📍 شما در حال تنظیم متن سوال 8 هستید
 
📌 متن سوال رو ارسال کن دوست من",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🔙 برگشت"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage && $step == "set-8"){
		 $user["step"] = "set-Questions";
		 $user["Questions"]["8"] = "$textmessage";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن سوال 8 تنظیم شد  ✅
 
🎈 میتونی متن سوالات رو تو قسمت سوالات من ببینی",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	}
	if($textmessage == "🗣 سوالات من" && $step == "set-Questions"){
		$num1 = $user["Questions"]["1"];
		$num2 = $user["Questions"]["2"];
		$num3 = $user["Questions"]["3"];
		$num4 = $user["Questions"]["4"];
		$num5 = $user["Questions"]["5"];
		$num6 = $user["Questions"]["6"];
		$num7 = $user["Questions"]["7"];
		$num8 = $user["Questions"]["8"];
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"🌟 لیست سوالاتت اینه :
 
➖➖➖

1- <i>$num1</i>
2- <i>$num2</i>
3- <i>$num3</i>
4- <i>$num4</i>
5- <i>$num5</i>
6- <i>$num6</i>
7- <i>$num7</i>
8- <i>$num8</i>

➖➖➖
📍 با لینک دعوتت میتونی دوستات رو به ربات دعوت کنی و سوالای دلخواهت رو ازش بپرس اونم نامحسوس 😅",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"❓ سوال 1"],['text'=>"❓ سوال 2"]],
	[['text'=>"❓ سوال 3"],['text'=>"❓ سوال 4"]],
	[['text'=>"❓ سوال 5"],['text'=>"❓ سوال 6"]],
	[['text'=>"❓ سوال 7"],['text'=>"❓ سوال 8"]],
    [['text'=>"🔙 برگشت"],['text'=>"🗣 سوالات من"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);	
	}
	//---------
	if($textmessage == "🔗 دریافت لینک من"){
		 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این ربات از 8 تا سوال میپرسه،اگر به این سوالات پاسخ درست بدی، اتفاقات  که در آینده قراره بیوفته واست رو شرح میده🤗اگر شگفت زده نشدی 😏 دیگه امتحان نکن☺️

💫اگر به فال و این موضوعات اعتقاد نداری ،من بهت پیشنهاد میکنم کمی وقت بذاری وبه سوالات پاسخ بدی ، مطمعن باش جوابی بهت میده که شگفت زده میشی 😲 و قدرت فال و ربات رو میبینی 


💥لطفا پس از دریافت جواب ،خونسردی خودتون رو حفظ کنید و اگر رضایت داشتین ربات به دوستان خودتون معرفی کنید ❤️👇👇👇
http://telegram.me/[*[BOT]*]?start=$from_id",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔗 دریافت لینک من"],['text'=>"⁉️ تنظیم سوال"]],
    [['text'=>"📍 درباره ربات"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);	
	  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام بالا رو به دوستات فوروارد کن و ازشون بخواه تا فالشونو بگیرن و از آیندشون باخبر بشن..یکمی هم از ربات تعریف کن و بگو همه چیو درست جواب میده و خیلی عالیه و حتما امتحان کنن، تا به سوالاتون جواب بدن😜
بعضی دوستان میان میگن چرا جواب سوالا بهم ارسال نمیشه.. دقت کنین لینک مخصوص خودتونو برای دوستاتون ارسال کنید نه لینکی که از دوستتون گرفتین
فقط حواست باشه اگه میخوایی پیام ها بهت ارسال بشن حتما باید تو کانال ما عضو باشی",
 'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔗 دریافت لینک من"],['text'=>"⁉️ تنظیم سوال"]],
    [['text'=>"📍 درباره ربات"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);	
	}
	if($textmessage == "📍 درباره ربات"){
		 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این ربات یه نوع ربات اعتراف گیری هستش و هر سوالی که جواب دادین مستقیم به کسی که این ربات و بهتون معرفی کرد ارسال شده و ایشون سوالاتی که نمیتونست مستقیم ازتون بپرسه رو اینجا پرسیده جوابشو گرفت😂
    حالا دیگه اتفاقیه که افتاده و نمیشه کاریش کرد😜
    اگه تو هم سوالی داری که میخوایی از کسی بپرسی با این ربات میتونی سوالاتتو تو ربات ذخیره کنی و بعد لینک مخصوص خودتو بگیری و به دوستات بفرستی تا سوالاتتو جواب بدن و جوابشون مستقیم به تو ارسال بشه😍
    اگه از ربات خوشت اومد و میخوایی با ربات های دیگه ما اشنا بشی و یا اگه یه زمانی ربات دیگه ای مثل این ساخته شد، تو تله نیفتی میتونی تو کانال ما عضو بشی تا زود تر از بقیه با کاربرد ربات اشنا بشی❤️",
 'parse_mode'=>"HTML",
   'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔗 دریافت لینک من"],['text'=>"⁉️ تنظیم سوال"]],
    [['text'=>"📍 درباره ربات"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);	
	  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"سوالاتتو تو ربات ذخیره کن و لینک مخصوص خودتو بگیر و برای دوستات بفرست تا جواب سوالاتتو بگیری😜",
 'parse_mode'=>"HTML",
    'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔗 دریافت لینک من"],['text'=>"⁉️ تنظیم سوال"]],
    [['text'=>"📍 درباره ربات"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);	
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