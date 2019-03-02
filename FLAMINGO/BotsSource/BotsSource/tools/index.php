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
//---------------------------
//فانکشن bot :
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
//---------------------------
//متغیر ها :
$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$from_id=$message->from->id;
mkdir("data/$from_id");
$chat_id=$message->chat->id;
$message_id=$message->message_id;
$first_name=$message->from->first_name;
$last_name=$message->from->last_name;
$username=$message->from->username;
mkdir("data/username.txt/$username");
$textmassage=$message->text;
$step=file_get_contents("data/$from_id/file.txt");
$Dev= [*[ADMIN]*];//آیدی عددی ادمین ۱
$Dev2= [*[ADMIN]*];//آیدی عددی ادمین ۲
$txtt=file_get_contents('data/users.txt');
$jok=file_get_contents("https://api.bot-dev.org/jock/");
$messageid=$update->callback_query->message->message_id;
$ban=file_get_contents('data/banlist.txt');
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//---------------------------
//فانکشن ها : 
function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
bot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
//---------------------------
if($textmassage=="/start"){
	if($bot_type != 'gold'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$adstext,
]);
}
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"` 🎗سلام به ربات خوش آمدید
لطفا زبان خود را انتخاب کنید : 
—-------------------------------
Languages : 🇮🇷 🇬🇧
--------------------------------
🎗Welcome To bot
Please Select Your Language :`",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"English 🇬🇧"],['text'=>"فارسی 🇮🇷"]
	],
	]
	])
	
	]);
	
	
	}
elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmassage)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}elseif($textmassage=="🔄تغییر زبان🔄️"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا زبان خود را انتخاب کنید :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"English 🇬🇧"],['text'=>"فارسی 🇮🇷"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="🔄Change language🔄️"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Please choose Your language :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"English 🇬🇧"],['text'=>"فارسی 🇮🇷"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="🔙
"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"منوی اصلی :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"بخش ابزارها 🛠"],['text'=>"بخش مارک داون 📝"]
	],
	[
	['text'=>"🆑کانال ما🆑"],['text'=>"درباره ما ❓"]
	],
 	[
	['text'=>"بروزرسانی 🔃"],['text'=>"ارسال نظر 📩"]
	],
        [
	['text'=>"اخبار ربات 🎗"],['text'=>"🔄تغییر زبان🔄️"]
	],
        [
	['text'=>"آمار ربات 📊"],['text'=>"تبلیغات 💢"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="فارسی 🇮🇷"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا یکی از گزینه ها را انتخاب کنید :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"بخش ابزارها 🛠"],['text'=>"بخش مارک داون 📝"]
	],
	[
	['text'=>"🆑کانال ما🆑"],['text'=>"درباره ما ❓"]
	],
 	[
	['text'=>"بروزرسانی 🔃"],['text'=>"ارسال نظر 📩"]
	],
        [
	['text'=>"اخبار ربات 🎗"],['text'=>"🔄تغییر زبان🔄️"]
	],
        [
	['text'=>"آمار ربات 📊"],['text'=>"تبلیغات 💢"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="
🔙"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Main Menu :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"Tools Section 🛠"],['text'=>"MarkDown Section 📝"]
	],
	[
	['text'=>"🆑Our Channel🆑"],['text'=>"About us ❓"]
	],
 	[
	['text'=>"Update 🔃"],['text'=>"Post a Comment 📩"]
	],
        [
	['text'=>"Robot News 🎗"],['text'=>"🔄Change language🔄️"]
	],
        [
	['text'=>"The number of users 📊"],['text'=>"Advertising 💢"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="English 🇬🇧"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Please choose one of these options :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"Tools Section 🛠"],['text'=>"MarkDown Section 📝"]
	],
	[
	['text'=>"🆑Our Channel🆑"],['text'=>"About us ❓"]
	],
 	[
	['text'=>"Update 🔃"],['text'=>"Post a Comment 📩"]
	],
        [
	['text'=>"Robot News 🎗"],['text'=>"🔄Change language🔄️"]
	],
        [
	['text'=>"The number of users 📊"],['text'=>"Advertising 💢"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="Tools Section 🛠"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Please choose one of these options :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"Random Joke 📝"],['text'=>"Your Link 🔗"]
	],
	[
	['text'=>"Your information 🆔"],['text'=>"
🔙"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="بخش ابزارها 🛠"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا یکی از گزینه ها را انتخاب کنید :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"جوک رندوم 📝"],['text'=>"لینک شما 🔗"]
	],
	[
	['text'=>"اطلاعات شما 🆔"],['text'=>"🔙
"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="MarkDown Section 📝"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Please choose one of these options :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"Bold Text ✏️"],['text'=>"Italice Text ✏️"]
	],
	[
	['text'=>"Code Text ✏️"],['text'=>"
🔙"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="بخش مارک داون 📝"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا یکی از گزینه ها را انتخاب کنید :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"درشت کردن نوشته ✏️"],['text'=>"کج کردن نوشته ✏️"]
	],
	[
	['text'=>"کد کردن نوشته ✏️"],['text'=>"🔙
"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="درشت کردن نوشته ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","bold");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را بفرستید :",
		]);
		}elseif($step=="bold"){
                       save("data/$from_id/file.txt","none");
			bot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"*$textmassage*",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="Bold Text ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","bold1");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Send Your text :",
		]);
		}elseif($step=="bold1"){
                       save("data/$from_id/file.txt","none");
			bot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"*$textmassage*",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="کج کردن نوشته ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","italic");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را بفرستید :",
		]);
		}elseif($step=="italic"){
                       save("data/$from_id/file.txt","none");
			bot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"_ $textmassage _",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="Italice Text ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","italic1");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Send Your text :",
		]);
		}elseif($step=="italic1"){
                       save("data/$from_id/file.txt","none");
			bot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"_ $textmassage _",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="Code Text ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","code1");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Send Your text :",
		]);
		}elseif($step=="code1"){
                       save("data/$from_id/file.txt","none");
			bot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"`$textmassage`",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="کد کردن نوشته ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","code");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را بفرستید :",
		]);
		}elseif($step=="code"){
                       save("data/$from_id/file.txt","none");
			bot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"`$textmassage`",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="Post a Comment 📩"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","nazar1");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Please submit Your opinion :",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"
🔙"]
	],
	]
	])
	
	]);
	
	
	}elseif($step=="nazar1"){            
                       save("data/$from_id/file.txt","none");
                          Forward($Dev,$chat_id,$message_id);
			bot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"Send.",
      'parse_mode'=>'MarkDown',
	
	]);
	
	
	}elseif($textmassage=="ارسال نظر 📩"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","nazar");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را ارسال کنید :",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"🔙
"]
	],
	]
	])
	
	]);
	
	
	}elseif($step=="nazar"){            
                       save("data/$from_id/file.txt","none");
                          Forward($Dev,$chat_id,$message_id);
			bot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"نظر شما با موفقیت ارسال شد",
      'parse_mode'=>'MarkDown',
	
	]);
	
	
	}elseif($textmassage=="About us ❓"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"_
The robot programming language is written in PHP
V1.0
The robot capabilities:

1. Send it to channel
2. Design name
3. Logo Design
4. Ability to MarkDown
5. Send random jokes
6. Send news
7. Post time history
8. Ability to reverse the written
9. beautiful menu
10 has quite smart admin panel
And many other features.",
'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="درباره ما ❓"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"_
این ربات با زبان برنامه نویسی پی اچ پی نوشته شده است
V1.0
قابلیت های این ربات :

1- ارسال مطلب به کانال
2- طراحی اسم
3- طراحی لوگو
4- قابلیت مارک داون
5- ارسال جوک به صورت رندوم
6- ارسال اخبار
7- ارسال زمان وتاریخ
8- قابلیت برعکس کردن نوشته
9- منویی زیبا
10- دارای پنل مدیریت کاملا هوشمند
وبسیاری از امکانات دیگر.",
'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="🆑Our Channel🆑"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Subscribe Us To Support Our Channel",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
	[
	['text'=>"💠 Subscribe to our channel",'url'=>"https://telegram.me/[*[CHENNEL]*]"]//کانال خود را جایگزین کنید
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="🆑کانال ما🆑"){
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"جهت حمایت از ما در کانال ما عضو شوید.",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
	[
	['text'=>"💠 عضویت در کانال ما",'url'=>"https://telegram.me/[*[CHENNEL]*]"]//کانال خود را جایگزین کنید
	],
	]
	])
	
	]);
	
	
	}elseif ($textmassage == "Update 🔃"){
 sendAction($chat_id, 'typing');
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'0%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'10%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'20%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'30%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'40%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'50%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'60%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'70%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'80%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'90%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'100%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'Updated.'
 ]);		
 }elseif ($textmassage == "بروزرسانی 🔃"){
 sendAction($chat_id, 'typing');
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'0%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'10%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'20%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'30%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'40%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'50%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'60%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'70%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'80%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'90%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'100%'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت شد.'
 ]);		
 }elseif($textmassage=="اطلاعات شما 🆔"){
        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"*Your Information* :\n------\n*FirstName* : `$first_name`\n------\n*LastName* : `$last_name`\n------\n*UserName* : `@$username`\n------\n*Telegram ID* : `$from_id`",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="Your information 🆔"){
        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"*Your Information* :\n------\n*FirstName* : `$first_name`\n------\n*LastName* : `$last_name`\n------\n*UserName* : `@$username`\n------\n*Telegram ID* : `$from_id`",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="لینک شما 🔗"){
        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"لینک اختصاصی شما :\nhttps://telegram.me/[*[BOT]*]?start=$from_id",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="YourLink 🔗"){
        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"YourLink :\nhttps://telegram.me/[*[BOT]*]?start=$from_id",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="جوک رندوم 📝"){
        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"$jok\n-------\n@[*[CHENNEL]*]",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="Random Joke 📝"){
        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"$jok\n-------\n@[*[CHENNEL]*]",
    'parse_mode'=>'MarkDown',
		]);
		}
 //end 
 $users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .= $username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="The number of users 📊"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        $id = file_get_contents('data/username.txt');
                        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"The number of users : $mmemcount\n-------\nMembers UserName :\n$id",
		]);
		}elseif($textmassage=="آمار ربات 📊"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        $id = file_get_contents('data/username.txt');
                        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount\n-------\nآیدی کاربران :\n$id",
		]);
		}elseif($textmassage=="تبلیغات 💢"){
                        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"جهت سفارش تبلیغات به آیدی زیر مراجعه کنید :\n@[*[CHENNEL]*]",
                'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="Advertising 💢"){
                        sendAction($chat_id, 'typing');
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"To order ads I'd see the following :\n@[*[CHENNEL]*]",
                'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="اخبار ربات 🎗"){
     sendAction($chat_id, 'typing');
     bot("forwardmessage", [
            'chat_id'=>$chat_id,
            'from_chat_id'=>"@[*[CHENNEL]*]",
            'message_id'=>"15"
        ]);
    }elseif($textmassage=="Robot News 🎗"){
     sendAction($chat_id, 'typing');
     bot("forwardmessage", [
            'chat_id'=>$chat_id,
            'from_chat_id'=>"@[*[CHENNEL]*]",
            'message_id'=>"15"
        ]);
    }
	unlink('error_log');
?> 