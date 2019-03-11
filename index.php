<?php
include "base.php";

//--------------------------//
if($textmassage=="/start" && $tc == "private"){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام😉

به ربات مدیریت گروه خوش امدید🌹

از طریق این ربات راحت میتونی گروه خودت رو به صورت خودکار و بیست چهارساعته مدیریت کنی😍[کاملا رایگان]

✨این ربات دارای قابلیت حذف پیام بدون اخراج کاربره
➖➖➖➖➖
کانال ما : 
🆔 : @Botsorce
➖➖➖

از دکمه های زیر استفاده کن🔻",
  'parse_mode'=>'MarkDown',
     'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
				['text'=>"🛍 خرید ربات"]
				],
				[
				['text'=>"💥 امکانات"],['text'=>"🚀 دریافت ربات رایگان"]
				],
                 [
                   ['text'=>"🔖 راهنما"],['text'=>"🚦 پشتیبانی"]
                ],
				[
			['text'=>"🤦🏻‍♂ سازنده"]
				]
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}
 elseif($textmassage=="🛍 خرید ربات" && $tc == "private"){
	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به بخش خرید ربات خوش امدید❤️
➖➖➖➖➖
💭نرخ خرید ربات به شکل زیر است

دائم > 10000 هزار تومان
➖➖➖
➕سرور پر قدرت

➕صد در صد انلاین بدون خاموشی

➕پشتیبانی 24 ساعته

➕امکانات فوق العاده
➖➖➖
کانال ما : 
🆔 : @Ashkan41322
",
  'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	              [
              ['text'=>"🔹 خرید",'url'=>"telegram.me/AmIRAdminPvBot"]
              ]
              ],
        ])
            ]);
        }
elseif($textmassage=="💥 امکانات" && $tc == "private"){
	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به بخش امکانات خوش اومدی✨
➖➖➖➖➖
🔸با استفاده از این بخش میتونی امکانات ربات رو به صورت 🎆 گیف ببنید😍

🔹برای دریافت امکانات ربات کافیه از دکمه زیر استفاده کنید
➖➖➖
کانال ما : 
🆔 : @Ashkan41322",
  'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
    'keyboard'=>[
	              [
              ['text'=>"🚦 دریافت گیف امکانات"]
              ],
			  [
			  ['text'=>"برگشت 🔙"]
			  ]
              ],
			  'resize_keyboard'=>true
        ])
            ]);
        }	
elseif($textmassage=="برگشت 🔙" && $tc == "private"){
	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به منوی اصلی بازگشتید✔️
➖➖➖➖
از دکمه های زیر استفاده کنید🔻",
  'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"🛍 خرید ربات"]
				],
				[
				['text'=>"💥 امکانات"],['text'=>"🚀 دریافت ربات رایگان"]
				],
                 [
                   ['text'=>"🔖 راهنما"],['text'=>"🚦 پشتیبانی"]
                ],
				[
			['text'=>"🤦🏻‍♂ سازنده"]
				]
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}
elseif($textmassage=="/creator" or $textmassage== "🤦🏻‍♂ سازنده" && $tc == "private"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🎉برنامه نویسی شده به زبان php
➖➖➖➖➖
💁‍♂توسط :
@Ashkan41322",
  'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	              [
              ['text'=>"🔸 کانال ما",'url'=>"https://telegram.me/Botsorce"]
              ],
			  [
			  ['text'=>"🔹 سفارش طراحی ربات",'url'=>"https://telegram.me/Botsorce"]
			  ]
              ],
        ])
    		]);
}	
 //groupmanager
 // settings inline
 elseif($data=="media" && $fm == $owners2){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
✔️ = حذف پیام
✖️ = حذف نشدن پیام",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
	]
	])
	]);
	}
	 elseif($data=="other" && $fm == $owners2){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
✔️ = حذف پیام
✖️ = حذف نشدن پیام",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
	]
	])
	]);
	}
elseif($data=="settings" && $fm == $owners2){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
🔖لطفا بخش مورد نظر خود را انتخاب کنید",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"🔗 تنظیمات رسانه",'callback_data'=>'media'],['text'=>"⚒ تنظیمات مدیریت",'callback_data'=>'other']
 ],
  [
 ['text'=>"📌 قفل همه",'callback_data'=>'text'],['text'=>"$mute_all2",'callback_data'=>'lockall']
 ],
[
['text'=>"🔙 برگشت",'callback_data'=>'back'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
	]
	])
	]);
	}
  elseif($data=="back"){
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"به تنظیمات گروه بازگشتید✔️
➖➖➖➖➖➖➖
از منوی زیر استفاده کنید🔻",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"⚙ تنظیمات",'callback_data'=>'settings']
   ],
    [
   ['text'=>"🚦 اطلاعات گروه",'callback_data'=>'groupe'],['text'=>"🔖 راهنما",'callback_data'=>'help']
   ],
   [
   ['text'=>"🗓 شارژ گروه",'callback_data'=>'charge']
   ],
   [
['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"▶️ صحفه بعد",'callback_data'=>'panel2']
  ],
     [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
  	]
  	])
  	]);
  	}

  elseif($textmassage=="/panel" or $textmassage=="panel"){
	if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev){
  if ($tc == 'group' | $tc == 'supergroup'){
	save("data/$chat_id/owner.txt","$from_id");
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"به پنل مدیریت گروه خوش امدید❤️
➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
    'parse_mode'=>'MarkDown',
  	'reply_markup'=>json_encode([
  	'resize_keyboard'=>true,
  	'inline_keyboard'=>[
   [
   ['text'=>"⚙ تنظیمات",'callback_data'=>'settings']
   ],
    [
   ['text'=>"🚦 اطلاعات گروه",'callback_data'=>'groupe'],['text'=>"🔖 راهنما",'callback_data'=>'help']
   ],
   [
   ['text'=>"🗓 شارژ گروه",'callback_data'=>'charge']
   ],
   [
['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"▶️ صحفه بعد",'callback_data'=>'panel2']
  ],
     [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
  	]
  	])
  	]);
  	}
    }	
  }
  elseif($data=="charge" && $fm == $owners2){
$timeadd= file_get_contents("data/$chatid/timeadd.txt");
$dataadd = file_get_contents("data/$chatid/dataadd.txt");
$charge = file_get_contents("data/$chatid/charge.txt");
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش میزان شارژ گروه خوش امدید💎
➖➖➖➖➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chatid]

🔹نام گروه : [$gpname]
➖➖➖➖
اطلاعات تاریخ انقضای گروه🔻",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"🔻تاریخ اضافه شدن🔻",'callback_data'=>"text"]
				   ],
				   [
				   ['text'=>"⏰ $timeadd",'callback_data'=>'text']
				   ],
				   [
				   ['text'=>"🔻زمان اضافه شدن🔻",'callback_data'=>"text"]
				   ],
				   [
				   ['text'=>"📆 $dataadd",'callback_data'=>'text']
				   ],
				    [
				   ['text'=>"🔻شارژ گروه🔻",'callback_data'=>"text"]
				   ],
				   				   [
				   ['text'=>"🔅 $charge",'callback_data'=>'text']
				   ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
                     ]
               ])
       ]);
  }
	elseif($data=="exit" && $fm == $owners2){
            bot('deletemessage',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
           ]);
    }
elseif($data=="groupe" && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش اطلاعت گروه خوش امدید🎯
➖➖➖➖
🔸نام گروه : [$gpname]

🔹ایدی گروه : [$chatid]

💭تعداد پیام ها : [$messageid]

💥سازنده گروه : [$owners2]",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"🔗 لینک گروه",'callback_data'=>"link"],['text'=>"🚩 قوانین گروه",'callback_data'=>'rules']
				   ],
				   [
				   ['text'=>"🏵 لیست ساکت گروه",'callback_data'=>'silentlist']
				   ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
                     ]
               ])
           ]);
    }
	elseif($data=="link" && $fm == $owners2){
		$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"💭 لینک گروه شما :
🔸 $getlinkde ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
    }
		elseif($data=="rules" && $fm == $owners2){
$matn=file_get_contents("data/$chatid/rules.txt");
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"💭 قوانین گروه شما :
 $matn ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
    }
		elseif($data=="silentlist" && $fm == $owners2){
$matn=file_get_contents("data/$chatid/silent.txt");
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"💭 لیست افراد ساکت گروه :
➖➖➖➖➖➖➖➖
🔸 $matn ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
    }
	    elseif($data=="panel2" && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به پنل مدیریت گروه خوش امدید❤️[بخش دوم]
➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🕜 ساعت و تاریخ",'callback_data'=>'td'],['text'=>"💥 تنظیمات فلود",'callback_data'=>'floods']
					 ],
					 [
					 ['text'=>"💭 خوش امد گویی",'callback_data'=>'welcome']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					    [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
    }
			    elseif($data=="welcome" && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"✨به بخش خوش امد گویی خوش امدید
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🎗خوش امدگویی",'callback_data'=>'text'],['text'=>"$welcome2",'callback_data'=>'pwelcome']
					 ],
					 [
					 ['text'=>"📜 متن خوش امد",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
    }
				    elseif($data=="textwelcome" && $fm == $owners2){
			$textwelcome= file_get_contents("data/$chatid/textwelcome.txt");
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"متن خوش امد گویی گروه :
$textwelcome",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'welcome']
					 ],
                     ]
               ])
           ]);
    }
					    elseif($data=="pwelcome" && $welcome2=="✔️"  && $fm == $owners2){
			save("data/$chatid/welcome.txt","✖️");
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید
➖➖➖
خوش امد گویی خاموش شد ❌",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				     [
                     ['text'=>"🎗خوش امدگویی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'pwelcome']
					 ],
			    	 [
					 ['text'=>"📜 متن خوش امد",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
    }
						    elseif($data=="pwelcome" && $welcome2=="✖️"  && $fm == $owners2){
			save("data/$chatid/welcome.txt","✔️");
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید
➖➖➖
خوش امد گویی روشن شد ✅",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				     [
                     ['text'=>"🎗خوش امدگویی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'pwelcome']
					 ],
					 [
					 ['text'=>"📜 متن خوش امد",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
    }
		    elseif($data=="td" && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش دریافت ساعت و تاریخ خوش امدید😃
➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"⏰ ساعت",'callback_data'=>'time'],['text'=>"📅 تاریخ",'callback_data'=>'data']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
    }
			    elseif($data=="time" && $fm == $owners2){
				$time = file_get_contents("https://provps.ir/td?td=time");
            bot('editmessagetext',[
                'chat_id'=>$chatid,
		 'parse_mode'=>'html',
     'message_id'=>$messageid,
               'text'=>"⏱ ساعت :$matn
➖➖➖➖➖➖➖
$time",
		 'parse_mode'=>'html',
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"⏰ ساعت",'callback_data'=>'time'],['text'=>"📅 تاریخ",'callback_data'=>'data']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
    }
				    elseif($data=="data" && $fm == $owners2){
				$date = file_get_contents("https://provps.ir/td?td=date");
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📆 تاریخ :
➖➖➖➖➖➖➖
$date ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"⏰ ساعت",'callback_data'=>'time'],['text'=>"📅 تاریخ",'callback_data'=>'data']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
    }
    elseif($data=="floods"  && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش فلود خوش امدید❤️
➖➖➖➖➖➖➖➖
🔹در این بخش شما میتوانید حداکثر کارکتر های پیام را تایین کنید

🔸توجه داشته باشید عدد باید بین 1 تا 20 باشد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   [
				   ['text'=>"🔙 برگشت",'callback_data'=>'back'],['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
				   ],
                     ]
               ])
           ]);
    }
    elseif($data=="help" && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش راهنما خوش امدید❤️
➖➖➖➖➖➖➖➖
یک گزینه را انتخاب نمایید🔻",
'parse_mode'=>'MarkDown',
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔹عمومی",'callback_data'=>'helpall'],['text'=>"🔸مدیریتی",'callback_data'=>'helpmod']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
                     ]
               ])
           ]);
    }
	    elseif($data=="helpall" && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🚩دستورات عمومی\n➖➖➖➖➖\n\n/bachekojai [متن به فارسی]\n💭دریافت لوگو بچه کجایی\n\n/logo [متن به انگلیسی]\n💭دریافت لوگو با طرح کلاسیک\n\n/me\n💭دریافت اطلاعاتی درباره شما\n\n/ping\n💭اطمینان از انلاینی ربات\n\n/id\n💭دریافت اطلاعات شما به همراه عکس\n\n/id [رپیلای]\n💭دریافت اطلاعات فرد با ریپلای\n\n/info\n💭دریافت اطلاعات گروه و شما\n\n/voice [متن به انگلیسی]\n💭تبدیل متن به ویس\n\n/nerkh\n💭دریافت نرخ خرید ربات و ارتباط با پشتیبانی\n\n/photo\n💭تبدیل استیکر به عکس\n\n/sticker\n💭تبدیل عکس به استیکر\n➖➖➖\n🔸در جای که سیمبول های [] وجود دارد در دستورات از ان ها استفاده نکنید\n\n🔹روی دستورات کلیک نکنید ان هارو تایپ کنید\n---------\n🚀کانال ما : \n@Botsorce",
'parse_mode'=>'html',
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'help']
					 ],
                     ]
               ])
           ]);
    }
	    elseif($data=="helpmod" && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🚩دستورات مدیریتی
➖➖➖➖
/panel 
💭دریافت پنل مدیریت گروه

/automatic
💭فعال کردن قفل ها به صورت خودکار و مدیریت خود کار گروه

/rmsg [1-99]
💭پاک کردن پیام های اخیر گروه

/promote [ریپلای]
💭تنظیم فرد به عنوان معاون ربات

/demote [ریپلای]
💭تنزل فرد از مقام معاون گروه

/del [ریپلای]
💭پاک کردن پیام با ریپلای

/kick [ریپلای]
💭اخراج فرد از گروه

/welcome enable
💭روشن کردن خوش امد

/welcome disable
💭خاموش کردن خوش امد

/setwelcome [متن]
💭تنظیم پیام خوش امد

/setflood [عدد]
💭تنظیم حساسیت پیام مکرر

/setname [نام]
💭تنظیم نام گروه

/setdescription [متن]
💭تنظیم اطلاعات گروه

/pin [ریپلای]
💭سنجاق کردن پیام مورد نظر

/unpin [ریپلای] 
💭برداشتن پیام از حالت سنجاق

/delphoto 
💭حذف عکس گروه

/setphoto
💭تنظیم عکس گروه

/link
💭دریافت لینک گروه

/setrules [متن]
💭تنظیم قوانین گروه

/rules
💭دریافت قوانین گروه

/mute all
💭ساکت کردن گروه

/unmute all
💭غیر فعال کردن سکوت گروه

/silent
💭افزودن فرد به لیست سکوت گروه

/unsilent
💭خارج کردن فرد از لیست سکوت گروه

/silentlist
💭دریافت لیست سکوت گروه

/check
💭دریافت شارژ گروه

➖➖➖
🔸در جای که سیمبول های [] وجود دارد در دستورات از ان ها استفاده نکنید

🔹روی دستورات کلیک نکنید ان هارو تایپ کنید
—-------
🚀کانال ما : 
@Botsorce",
'parse_mode'=>'html',
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"🔙 برگشت",'callback_data'=>'help']
					 ],
                     ]
               ])
           ]);
    }
		  elseif($data=="lockall" && $mute_all2=="✔️" && $fm == $owners2){
    save("data/$chatid/mute_all.txt","✖️");
	save("data/$chatid/locktelegram.txt","✖️");
	save("data/$chatid/lockenglish.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
🔖لطفا بخش مورد نظر خود را انتخاب کنید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 تنظیمات رسانه",'callback_data'=>'media'],['text'=>"⚒ تنظیمات مدیریت",'callback_data'=>'other']
 ],
 [
 ['text'=>"📌 قفل همه",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockall']
 ],
[
['text'=>"🔙 برگشت",'callback_data'=>'back'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
	]
	])
	]);
	}
			  elseif($data=="lockall" && $mute_all2=="✖️" && $fm == $owners2){
    save("data/$chatid/mute_all.txt","✔️");
	save("data/$chatid/locktelegram.txt","✔️");
	save("data/$chatid/lockenglish.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
🔖لطفا بخش مورد نظر خود را انتخاب کنید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 تنظیمات رسانه",'callback_data'=>'media'],['text'=>"⚒ تنظیمات مدیریت",'callback_data'=>'other']
 ],
 [
 ['text'=>"📌 قفل همه",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockall']
 ],
[
['text'=>"🔙 برگشت",'callback_data'=>'back'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
	]
	])
	]);
	}
  elseif($data=="lockphoto" && $lockphoto2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockphoto.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل عکس غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockphoto" && $lockphoto2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockphoto.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل عکس فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvideo" && $lockvideo2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvideo.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ویدیو غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                    
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
				   ]
             ])
         ]);
  }
  elseif($data=="lockvideo" && $lockvideo2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvideo.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ویدیو فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgame" && $lockgame2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockgame.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل اینلاین غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgame" && $lockgame2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockgame.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل اینلاین فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
         ]
             ])
         ]);
  }
  elseif($data=="locksticker" && $locksticker2=="✔️" && $fm == $owners2){
    save("data/$chatid/locksticker.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل استیکر غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
             
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="locksticker" && $locksticker2=="✖️" && $fm == $owners2){
    save("data/$chatid/locksticker.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل استیکر فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvoice" && $lockvoice2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvoice.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ویس غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"?? برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvoice" && $lockvoice2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvoice.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ویس فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                  
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockaudio" && $lockaudio2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockaudio.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل اهنگ غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
              
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockaudio" && $lockaudio2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockaudio.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل اهنگ فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockforward" && $lockforward2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockforward.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل فوروارد غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockforward" && $lockforward2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockforward.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل فوروارد فعال شد✅
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockcontact.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال مخاطب غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockcontact.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال مخاطب فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                  
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockluction" && $locklocation2=="✔️" && $fm == $owners2){
    save("data/$chatid/locklocation.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال مکان غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockluction" && $locklocation2=="✖️" && $fm == $owners2){
    save("data/$chatid/locklocation.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال مکان فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockfosh" && $lockfosh2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockfosh.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
??ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال کلمات رکیک غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockfosh" && $lockfosh2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockfosh.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال کلمات رکیک فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockoperator" && $lockoperator2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockoperator.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال تبلیغات اوپراتورها غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockoperator" && $lockoperator2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockoperator.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال تبلیغات اوپراتورها فعال شد✅
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockedit" && $lockedit2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ویرایش متن غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockedit" && $lockedit2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ویرایش متن فعال شد✅
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockusername" && $lockusername2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockusername.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال هشتگ و یوزرنیم غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockusername" && $lockusername2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockusername.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال یوزرنیم و تگ فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="locklink" && $locklink2=="✔️" && $fm == $owners2){
    save("data/$chatid/locklink.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل لینک  غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                  	]
             ])
         ]);
  }
  elseif($data=="locklink" && $locklink2=="✖️" && $fm == $owners2){
    save("data/$chatid/locklink.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل لینک فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                  	]
             ])
         ]);
  }
  elseif($data=="lockbots2" && $lockbots2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockbots.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ورود ربات های دیگر غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockbots2" && $lockbots2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockbots.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ورود ربات های دیگر فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
    elseif($data=="locktelegram" && $locktelegram2=="✔️" && $fm == $owners2){
    save("data/$chatid/locktelegram.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل فارسی غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="locktelegram" && $locktelegram2=="✖️" && $fm == $owners2){
    save("data/$chatid/locktelegram.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل فارسی فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
      elseif($data=="lockdocument" && $lockdocument2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockdocument.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال فایل غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockdocument" && $lockdocument2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockdocument.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال فایل فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
        elseif($data=="lockgif" && $lockgif2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockgif.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال 🎆 گیف غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgif" && $lockgif2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockgif.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال 🎆 گیف فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note2",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
          elseif($data=="locktg" && $locktg2=="✔️" && $fm == $owners2){
    save("data/$chatid/locktg.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل پیام ورود و خروج غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="locktg" && $locktg2=="✖️" && $fm == $owners2){
    save("data/$chatid/locktg.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل پیام ورود خروج فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"$lockenglish2",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
            elseif($data=="lockenglish" && $lockenglish2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockenglish.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال کلمات انگلیسی غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockenglish" && $lockenglish2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockenglish.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال کلمات انگلیسی فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [@#]",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"💭تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'text'],['text'=>"$locktelegram2",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg2",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
              elseif($data=="lockvideo_note" && $lockvideo_note2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvideo_note.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال پیام ویدیویی غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvideo_note" && $lockvideo_note2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvideo_note.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
قفل ارسال پیام ویدیویی فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument2",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif2",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockvideo_note']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎉 کانال ما",'url'=>'t.me/Botsorce']
],
                    ]
             ])
         ]);
  }
  
//leave and rem
elseif($textmassage == '/leave' && $from_id = $Dev or $textmassage == 'leave' && $from_id = $Dev){
bot('LeaveChat',[
  'chat_id'=>$chat_id
  ]);
  }
  elseif($textmassage == '/rem' && $from_id = $Dev or $textmassage == 'rem' && $from_id = $Dev){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"گروه از لیست گروه هی پشتیبانی ربات حذف شد✅
➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]

🔖دیگر پیام های این گروه برسی نمیشود
➖➖➖➖➖
💥کانال ما :
🚀 @Botsorce
➖➖➖➖➖➖➖➖
🚩توسط :\n@$username",
		   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
unlink("data/$chat_id/chatadd.txt");
unlink("data/$chat_id/timeadd.txt");
unlink("data/$chat_id/dataadd.txt");
unlink("data/$chat_id/usernameadd.txt");
unlink("data/$chat_id/charge.txt");
unlink("data/$chat_id/owner.txt");
unlink("data/$chat_id/lockvideo.txt");
unlink("data/$chat_id/lockbots.txt");
unlink("data/$chat_id/locklink.txt");
unlink("data/$chat_id/lockphoto.txt");
unlink("data/$chat_id/lockedit.txt");
unlink("data/$chat_id/lockoperator.txt");
unlink("data/$chat_id/lockforward.txt");
unlink("data/$chat_id/lockaudio.txt");
unlink("data/$chat_id/locksticker.txt");
unlink("data/$chat_id/lockvoice.txt");
unlink("data/$chat_id/lockcontact.txt");
unlink("data/$chat_id/locklocation.txt");
unlink("data/$chat_id/lockfosh.txt");
unlink("data/$chat_id/lockjoin.txt");
unlink("data/$chat_id/lockgame.txt");
unlink("data/$chat_id/lockdecument.txt");
unlink("data/$chat_id/lockusername.txt");
unlink("data/$chat_id/lockflood.txt");
unlink("data/$chat_id/locktelegram.txt");
unlink("data/$chat_id/lockdocument.txt");
unlink("data/$chat_id/lockgif.txt");
unlink("data/$chat_id/locktg.txt");
unlink("data/$chat_id/lockenglish.txt");
unlink("data/$chat_id/lockvideo_note.txt");
unlink("data/$chat_id/mute_all.txt");
unlink("data/$chat_id/welcome.txt");
unlink("data/$chat_id/lockflood.txt");
unlink("data/$chat_id/numflood.txt");
unlink("data/$chat_id/textwelcome.txt");
unlink("data/$chat_id/rules.txt");
unlink("data/$chat_id/silent.txt");
unlink("data/$chat_id/photogp.png");
rmdir("data/$chat_id");
   }   

 // tools and cmd
elseif($textmassage=="/rules" or $textmassage=="/rules"){
if ($tc == 'group' | $tc == 'supergroup'){  
$matn=file_get_contents("data/$chat_id/rules.txt");

 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$matn",
		 'parse_mode'=>'html',
		   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }   
}
elseif ( strpos($textmassage , '/setrules') !== false) {
	if ($from_id == $Dev or $from_id == $owners){
  $te = explode(" ",$textmassage);
if ($te['1'] != "") {
    $code = str_replace("/setrules","","$textmassage");
file_put_contents("data/$chat_id/rules.txt",$code);

 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"قوانین جدید ثبت شد",
		   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }   
}
}
elseif($rt && $textmassage=="/pin" && $from_id == "$owners" or $rt && $textmassage=="pin" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

 bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
 elseif($rt && $textmassage=="/kick" && $from_id == $owners or $rt && $textmassage=="kick" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){

	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"کاربر اخراج شد✔️
➖➖➖
🔸ایدی : $re_id
🔹یوزرنیم : @$re_user",
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ],
	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }    
   }
elseif($rt && $textmassage == "/del" && $from_id == "$owners" or $rt && $textmassage == "del" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$update->message->reply_to_message->message_id
    ]);
 }
}
elseif ( strpos($textmassage , '/rmsg') !== false  ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($from_id == $owners){
$num = str_replace("/rmsg","",$textmassage);
if ($num <= 100 && $num >= 1){
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"تعداد $num پیام پاک شد",
              ]);
}else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"اخطار\nعدد باید بین 1 و 100 باشد.",
              ]);
}
}
}
}
elseif ( strpos($textmassage , '/setname') !== false  ) {
  $newname= str_replace("/setname","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){

 bot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/setdescription') !== false  ) {
  $newdec= str_replace("/setdescription","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){

 bot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="/unpin" && $from_id == "$owners" or $rt && $textmassage=="unpin" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

 bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/delphoto" && $from_id == $owners or $textmassage=="delphoto" && $from_id == $owners){
  save("data/$from_id/file.txt","setphoto");
if ($tc == 'group' | $tc == 'supergroup'){

bot('deleteChatPhoto',[
   'chat_id'=>$chat_id,
     ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/setphoto" && $from_id == $owners or $textmassage=="setphoto" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){

bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس خود را بفرستید :",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($step=="setphoto"){
  save("data/$from_id/file.txt","none");
if ($tc == 'group' | $tc == 'supergroup'){

$photo = $update->message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
    file_put_contents("data/$chat_id/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
bot('setChatPhoto',[
   'chat_id'=>$chat_id,
   'photo'=>new CURLFile("data/$chat_id/photogp.png")
     ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 unlink("data/$chat_id/photogp.png");
 }
}
 elseif($textmassage=="/link" && $from_id == $owners or $textmassage=="link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"لینک گروه :\n$getlinkde",
    'parse_mode'=>'html',
     ]);
 }
}
// charge
elseif($textmassage=="/check" or $textmassage=="check" && $from_id = $owners){
if ($tc == 'group' | $tc == 'supergroup'){  
$matn=file_get_contents("data/$chat_id/charge.txt");
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📆میزان شارژ گروه شما :
➖➖➖➖➖➖
$matn",
		 'parse_mode'=>'html',
		   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }   
}
elseif ( strpos($textmassage , '/charge') !== false) {
if ($from_id == $Dev){
  $te = explode(" ",$textmassage);
if ($te['1'] != "") {
    $code = str_replace("/charge","","$textmassage روز");
file_put_contents("data/$chat_id/charge.txt",$code);
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"شارژ گروه تنظیم شد
➖➖➖➖➖➖
شارژ گروه به $code روز دیگر تنظیم شد",
		   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }   
}
}
// help
  elseif($textmassage=="/help" or $textmassage=="راهنما" or $textmassage=="help"){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚩به راهنمای ربات مدیریت گروه خوش امدید🤖\n➖➖➖➖\n🔹دستورات عمومی : \n/helpall\n🔸دستورات مدیریتی \n/helpmod\n➖➖➖\n🔖تمامی دستورات ربات با علامت [/] اغاز میشود\n\n🔹روی دستورات کلیک نکنید ان هارو تایپ کنید\n---------\n🚀کانال ما : \n@Botsorce",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}
  elseif($textmassage=="/helpall" or $textmassage=="helpall"){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
     'text'=>"🚩دستورات عمومی\n➖➖➖➖➖\n\n/bachekojai [متن به فارسی]\n💭دریافت لوگو بچه کجایی\n\n/logo [متن به انگلیسی]\n💭دریافت لوگو با طرح کلاسیک\n\n/me\n💭دریافت اطلاعاتی درباره شما\n\n/ping\n💭اطمینان از انلاینی ربات\n\n/id\n💭دریافت اطلاعات شما به همراه عکس\n\n/id [رپیلای]\n💭دریافت اطلاعات فرد با ریپلای\n\n/info\n💭دریافت اطلاعات گروه و شما\n\n/voice [متن به انگلیسی]\n💭تبدیل متن به ویس\n\n/nerkh\n💭دریافت نرخ خرید ربات و ارتباط با پشتیبانی\n\n/photo\n💭تبدیل استیکر به عکس\n\n/sticker\n💭تبدیل عکس به استیکر\n➖➖➖\n🔸در جای که سیمبول های [] وجود دارد در دستورات از ان ها استفاده نکنید\n\n🔹روی دستورات کلیک نکنید ان هارو تایپ کنید\n---------\n🚀کانال ما : \n@Botsorce",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}
   elseif($textmassage=="/helpmod" && $from_id == $owners or $textmassage=="helpmod" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚩دستورات مدیریتی
➖➖➖➖
/panel 
💭دریافت پنل مدیریت گروه

/automatic
💭فعال کردن قفل ها به صورت خودکار و مدیریت خود کار گروه

/rmsg [1-99]
💭پاک کردن پیام های اخیر گروه

/promote [ریپلای]
💭تنظیم فرد به عنوان معان ربات

/demote [ریپلای]
💭تنزل فرد از مقام معاون گروه

/del [ریپلای]
💭پاک کردن پیام با ریپلای

/kick [ریپلای]
💭اخراج فرد از گروه

/welcome enable
💭روشن کردن خوش امد

/welcome disable
💭خاموش کردن خوش امد

/setwelcome [متن]
💭تنظیم پیام خوش امد

/setflood [عدد]
💭تنظیم حساسیت پیام مکرر

/setname [نام]
💭تنظیم نام گروه

/setdescription [متن]
💭تنظیم اطلاعات گروه

/pin [ریپلای]
💭سنجاق کردن پیام مورد نظر

/unpin [ریپلای] 
💭برداشتن پیام از حالت سنجاق

/delphoto 
💭حذف عکس گروه

/setphoto
💭تنظیم عکس گروه

/link
💭دریافت لینک گروه

/setrules [متن]
💭تنظیم قوانین گروه

/rules
💭دریافت قوانین گروه

/mute all
💭ساکت کردن گروه

/unmute all
💭غیر فعال کردن سکوت گروه

/silent
💭افزودن فرد به لیست سکوت گروه

/unsilent
💭خارج کردن فرد از لیست سکوت گروه

/silentlist
💭دریافت لیست سکوت گروه

/check
💭دریافت شارژ گروه

➖➖➖
🔸در جای که سیمبول های [] وجود دارد در دستورات از ان ها استفاده نکنید

🔹روی دستورات کلیک نکنید ان هارو تایپ کنید
—-------
🚀کانال ما : 
@Botsorce",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}

// fun and for all
elseif($textmassage=="/time" or $textmassage=="ساعت" or $textmassage=="time"){
$time = file_get_contents("https://provps.ir/td?td=time");
$date = file_get_contents("https://provps.ir/td?td=date");
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🗓 ساعت و تاریخ امروز :
	
⏰ ساعت : 
🔹 $time

➖➖➖➖➖
📆 تاریخ :

🔸 $date  ",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}
   elseif($rt && $textmassage =="/id" or $rt && $textmassage =="ایدی" or $rt && $textmassage =="id"){
if ($tc == 'group' | $tc == 'supergroup'){
$getuserprofile = getUserProfilePhotos($token,$re_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
  bot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"💭ایدی گروه : [$chat_id]
  
🚦نام  : [$re_name]

🔹ایدی : [$re_id]

🔸یوزرنیم : [@$re_user]",

     'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [
    ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
    ],
           [
         ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
     ],
   ]
   ])
   ]);
   }    
   }
elseif($textmassage=="/id" or $textmassage=="ایدی" or $textmassage=="id"){
if ($tc == 'group' | $tc == 'supergroup'){
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
  
  bot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"💭ایدی گروه : [$chat_id]
  
🚦نام شما : [$first_name]

🔹ایدی : [$from_id]

🔸یوزرنیم : [@$username]",

     'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [
    ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
    ],
           [
         ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
     ],
   ]
   ])
   ]);
   }    
   }
            elseif($textmassage=="/me" && $from_id == $Dev or $textmassage=="من" && $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات شما :
➖➖➖➖
🔹نام شما : [$first_name]
🔸ایدی شما: [$from_id]
🔅یوزرنیم : [@$username]
💥تعداد کل پیام ها : [$tedadmsg]
➖➖➖
🚩 مقام شما : عه بابایی منو اذیت نکن",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }    
   }
      elseif($textmassage=="/me" && $from_id == $owners or $textmassage=="من" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات شما :
➖➖➖➖
🔹نام شما : [$first_name]
🔸ایدی شما: [$from_id]
🔅یوزرنیم : [@$username]
💥تعداد کل پیام ها : [$tedadmsg]
➖➖➖
🚩 مقام شما : مدیر گروه",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }    
   }
         elseif($textmassage=="/me" or $textmassage=="من"){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات شما :
➖➖➖➖
🔹نام شما : [$first_name]
🔸ایدی شما: [$from_id]
🔅یوزرنیم : [@$username]
💥تعداد کل پیام ها : [$tedadmsg]
➖➖➖
🚩 مقام شما : عضو عادی",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }    
   }
elseif($textmassage=="/nerkh" or $textmassage=="نرخ" or $textmassage=="nerkh"){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖نرخ ربات مدیریت گروه
➖➖➖➖
1⃣ ماهانه > 3000 هزار تومان

2⃣ دو ماه < 5000 هزار تومان

3⃣ دائم > 10000 هزار تومان
➖➖➖
💥ربات پرقدرت بدون خاموشی با سرور قوی و امکانات فوق العاده",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"],['text'=>"💥خرید",'url'=>"https://telegram.me/mohammadrezajiji"]
		 ],
   ]
   ])
   ]);
   }  
}
elseif($textmassage=="/info" or $textmassage=="اطلاعات" or $textmassage=="info"){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات :
➖➖➖➖➖➖➖➖
🔸ایدی گروه : [$chat_id]
🔹تعداد پیام ها : [$tedadmsg]
🔅نوع گروه : [$tc]
➖➖➖➖➖
🚀نام شما : [$first_name]
🚦ایدی شما : [$from_id]
💫یوزرنیم  شما : [@$username]
➖➖➖
💭لینک شما : [http://t.me/$username]",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}
elseif($textmassage=="/ping" or $textmassage=="انلاینی" or $textmassage=="ping"){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo=>"https://telegra.ph/file/dbeded4538caeabe66cb2.jpg",
	'caption'=>"@Botsorce",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}

elseif ( strpos($textmassage , '/logo') !== false  ) {
$te = explode(" ",$textmassage);
if ($te['1'] != "") {
if ($tc == 'group' | $tc == 'supergroup'){

 bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=". $te['1'] ."&y=15&font=Steamy&fsize=90&bg=logo8",
	'caption'=>"@Botsorce",
	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}
}
elseif ( strpos($textmassage , '/bachekojai') !== false  ) {
$te = explode(" ",$textmassage);
if ($te['1'] != "") {
if ($tc == 'group' | $tc == 'supergroup'){

 bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=". $te['1'] ."&y=-10&x=20&color=black&font=fa&fsize=100&bg=esm4",
	'caption'=>"@Botsorce",
	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}
}
elseif ( strpos($textmassage , '/voice') !== false  ) {
$te = explode(" ",$textmassage);
if ($te['1'] != "") {
if ($tc == 'group' | $tc == 'supergroup'){

 bot('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=". $te['1'] ."",
	'caption'=>"@Botsorce",
	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}
}
elseif($textmassage=="/sticker" or $textmassage=="sticker"){
  save("data/$from_id/file.txt","sticker");
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس مورد نظر را ارسال کنید تا تبدیل به استیکر کنم",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($step == "sticker"){
save("data/$from_id/file.txt","none");
if ($tc == 'group' | $tc == 'supergroup'){
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
    file_put_contents("data/$chat_id/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile("data/$chat_id/photogp.png"),
   'caption'=>"@Botsorce",
   	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
 ]);
 }
}
elseif($textmassage=="/photo" or $textmassage=="photo"){
  save("data/$from_id/file.txt","photo");
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"استیکر مورد نظرت رو بفرست تا تبدیل به عکس کنم",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($step == "photo"){
save("data/$from_id/file.txt","none");
if ($tc == 'group' | $tc == 'supergroup'){
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
    file_put_contents("data/$chat_id/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile("data/$chat_id/photogp.png"),
  'caption'=>"@Botsorce",
  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
 ]);
 }
}
// setup and setowner
if (strpos($chatadd, "$chat_id") && $from_id == $Dev) {
if ($textmassage == "/add" && $from_id == $Dev or $textmassage == "add" && $from_id == $Dev) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"گروه قبلا در لیست گروه های پشتیبانی ربات بوده است✔️
➖➖➖➖➖➖➖
🚩اطلاعات گروه :

🔅ایدی گروه : $chat_id

💭نام گروه : $namegroup

🔸زمان اضافه شدن گروه : $timeadd

🔹تاریخ اضافه شدن گروه : $dataadd

✨یوزرنیم اضافه کننده ربات : $usernameadd
",
		'parse_mode'=>'MarkDown',
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=>"🔸$timeadd",'callback_data'=>"text"],['text'=>"🔹$dataadd",'callback_data'=>"text"]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
 ]);
 }
}
elseif ($textmassage == "/add" && $from_id == $Dev or $textmassage == "add" && $from_id == $Dev) {
$data=file_get_contents("https://provps.ir/td?td=date");
if ($tc == 'group' | $tc == 'supergroup'){
mkdir("data/$chat_id");
save("data/$chat_id/chatadd.txt", "\n$chat_id");
save("data/$chat_id/timeadd.txt","$time");
save("data/$chat_id/dataadd.txt","$data");
save("data/$chat_id/usernameadd.txt","@$username");
save("data/$chat_id/charge.txt","تنظیم نشد!");
save("data/$chat_id/owner.txt","$from_id");
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✖️");
save("data/$chat_id/locklink.txt","✖️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✖️");
save("data/$chat_id/lockoperator.txt","✖️");
save("data/$chat_id/lockforward.txt","✖️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✖️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✖️");
save("data/$chat_id/lockflood.txt","✖️");
save("data/$chat_id/locktelegram.txt","✖️");
save("data/$chat_id/lockdocument.txt","✖️");
save("data/$chat_id/lockgif.txt","✖️");
save("data/$chat_id/locktg.txt","✖️");
save("data/$chat_id/lockenglish.txt","✖️");
save("data/$chat_id/lockvideo_note.txt","✖️");
save("data/$chat_id/mute_all.txt","✖️");
save("data/$chat_id/welcome.txt","✖️");
save("data/$chat_id/lockflood.txt","✖️");
save("data/$chat_id/numflood.txt","5");
save("data/$chat_id/textwelcome.txt","به گروه خوش امدید");
save("data/$chat_id/rules.txt","قوانین پیش فرض :
1⃣گذاشتن لینک و تبلیغ کردن ممنوع

2⃣اسپم کردن مجاز نیست :)

3⃣فوروارد کردن از کانال ممنوع

4⃣چت کردن ازاده اما نه زیاد از حد

5⃣اوردن هرگونه ربات = اخراج

6⃣فحاشی ممنوع،در صورت فحاشی کردن بن گلوبال خواهید شد

7⃣صحبت نژاد پرستانه و مسخره کردن دیگران ممنوع

8⃣موضوعات پورنوگرافی ممنوع

9⃣بی احترامی به ادمین ها و اعضای گروه = اخراج


❗️در صورت رعایت نکردن قوانین فوق از گروه محروم خواهید شد❗️
🌹با تشکر🌹
@Botsorce");
SendMessage($chat_id,"گروه با موفقیت به لیست پشتیبانی ربات اضافه شد✅
➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]

➖➖➖

🔸از این پس تمام پیام های گروه برسی میشود

🔹برای دریافت پنل تنظیمات و راهنما دستور :

/panel

را ارسال کیند✔️
➖➖➖➖➖
💥کانال ما :
🚀 @Botsorce

➖➖➖➖➖➖➖➖
🚩توسط :\n@$username");
}
}
if ($textmassage == "/automatic" && $from_id == $owners or $textmassage == "automatic" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✔️");
save("data/$chat_id/locklink.txt","✔️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✔️");
save("data/$chat_id/lockoperator.txt","✔️");
save("data/$chat_id/lockforward.txt","✔️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✔️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✔️");
save("data/$chat_id/lockflood.txt","✔️");
save("data/$chat_id/numflood.txt","3");
save("data/$chat_id/locktelegram.txt","✖️");
save("data/$chat_id/lockdocument.txt","✖️");
save("data/$chat_id/lockgif.txt","✖️");
save("data/$chat_id/locktg.txt","✔️");
save("data/$chat_id/lockenglish.txt","✖️");
save("data/$chat_id/lockvideo_note.txt","✖️");
save("data/$chat_id/mute_all.txt","✖️");
save("data/$chat_id/welcome.txt","✖️");
save("data/$chat_id/lockflood.txt","✖️");
save("data/$chat_id/numflood.txt","5");
save("data/$chat_id/textwelcome.txt","Welcome NewMember To Group");
SendMessage($chat_id,"قفل ها برای مدیریت خودکار گروه فعال شدند");
}
}
elseif($rt && $textmassage=="/promote" && $from_id == "$owners" or $rt && $textmassage=="promote" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

 bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>true,
    'can_post_messages'=>true,
	'can_edit_messages'=>true,
	'can_delete_messages'=>true,
	'can_invite_users'=>true,
	'can_restrict_members'=>true,
	'can_pin_messages'=>true,
	'can_promote_members'=>true
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="/demote" && $from_id == "$owners" or $rt && $textmassage=="demote" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

 bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>false,
    'can_post_messages'=>false,
	'can_edit_messages'=>false,
	'can_delete_messages'=>false,
	'can_invite_users'=>false,
	'can_restrict_members'=>false,
	'can_pin_messages'=>false,
	'can_promote_members'=>false
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif (strpos($textmassage, "/setowner") !== false && $from_id == $Dev) {
$owner = str_replace("/setowner ","",$textmassage);
save("data/$from_id/file.txt","none");
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"این فرد  _".$owner."_ مدیر گروه شد. ",
		'parse_mode'=>'MarkDown'
    		]);
save("data/$chat_id/owner.txt","$owner");
}
// lock
elseif(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$update->message->caption)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match,$update->message->caption);
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklink == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklink == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال لینک فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال لینک باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->photo){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockphoto == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock photo" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال عکس فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock photo" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال عکس باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->document){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgif == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($update->message->document){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockdocument == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock document" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdocument.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حل",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock document" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdocument.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حل",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->video){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvideo == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock video" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فیلم فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock video" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل فیلم بازشد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}

if(preg_match("/^(.*)|(.*)/",$edit)){
  preg_match("/^(.*)|(.*)/",$textmassage,$match);
if ($lockedit3== "✔️"){
if ($you != "creator" && $you != "administrator"){
	bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
	}
}
}
elseif($textmassage=="/lock edit" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ویرایش پیام فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock edit" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ویرایش پیام باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgame== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock game" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل انجام بازی در گروه فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock game" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل انجام بازی در گروه باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklocation== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock location" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری مکان فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock location" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری مکان باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockcontact== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock contact" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری شماره فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock contact" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری شماره باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$textmassage)){
preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$update->message->caption)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage,$match,$update->message->caption);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$update->message->caption)){
preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$textmassage,$match,$update->message->caption);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock username" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال یوزرنیم فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock username" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال یوزرنیم باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockaudio== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock audio" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال موسیقی فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock audio" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال موسیقی باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvoice == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock voice" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال صدا فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock voice" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال صدا باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locksticker== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock sticker" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال استیکر فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock sticker" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال استیکر باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->decument){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockdecument== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock decument" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فایل فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock decument" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فایل باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockforward== "✔️"){
if ($status != "creator" && $status != "administrator"){

 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
elseif($textmassage=="/lock forward" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل فوروارد پیام فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock forward" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل فوروارد پیام باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Operator
if(preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/",$textmassage)){
preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockoperator == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

elseif($textmassage=="/lock operator" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال تبلیغات اوپراتور ها فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock operator" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال تبلیغات اوپراتور ها باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Fosh
elseif(preg_match("'^(کس)(.*)'",$textmassage)){
preg_match("'^(کس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(کس ننت)(.*)'",$textmassage)){
preg_match("'^(کس ننت)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(بی ناموس)(.*)'",$textmassage)){
preg_match("'^(بی ناموس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(دیوث)(.*)'",$textmassage)){
preg_match("'^(دیوث)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(کیر)(.*)'",$textmassage)){
preg_match("'^(کیر)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

elseif($textmassage=="/lock fosh" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فحش فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock fosh" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فحش باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message | $update->message->forward_from | $update->message->forward_from_chat |  $update->message->decument | $update->message->audio | $update->message->photo | $update->message->sticker | $update->message->video | $update->message->voice | $update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($mute_all== "✔️"){
if ($status != "creator" && $status != "administrator"){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
elseif($textmassage=="/mute all" && $from_id == $owners or $textmassage=="mute all" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
	 save("data/$chat_id/mute_all.txt","✔️");
	 save("data/$chat_id/locktelegram.txt","✔️");
	 save("data/$chat_id/lockenglish.txt","✔️");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"گروه به حالت سکوت رفت",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unmute all" && $from_id == $owners or $textmassage=="unmute all" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
	save("data/$chat_id/mute_all.txt","✖️");
    save("data/$chat_id/locktelegram.txt","✖️");
	save("data/$chat_id/lockenglish.txt","✖️");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"گروه از حالت سکوت خارج شد",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if(preg_match("/^(.*)س|س(.*)|(.*)ح|ح(.*)|(.*)ا|ا(.*)|(.*)س|(.*)س|س(.*)|(.*)ب|ب(.*)|(.*)ت|ت(.*)|(.*)ج|ج(.*)|(.*)چ|چ(.*)|(.*)خ|خ(.*)|(.*)د|د(.*)|(.*)ر|ر(.*)|(.*)ش|ش(.*)|(.*)ع|ع(.*)|(.*)ف|ف(.*)|(.*)ک|ک(.*)|(.*)ل|ل(.*)|(.*)م|م(.*)|(.*)ن|ن(.*)|(.*)و|و(.*)|(.*)ه|ه(.*)|(.*)ی|ی(.*)|(.*)ز|ز(.*)/",$textmassage)){
preg_match("/^(.*)س|س(.*)|(.*)ح|ح(.*)|(.*)ا|ا(.*)|(.*)س|(.*)س|س(.*)|(.*)ب|ب(.*)|(.*)ت|ت(.*)|(.*)ج|ج(.*)|(.*)چ|چ(.*)|(.*)خ|خ(.*)|(.*)د|د(.*)|(.*)ر|ر(.*)|(.*)ش|ش(.*)|(.*)ع|ع(.*)|(.*)ف|ف(.*)|(.*)ک|ک(.*)|(.*)ل|ل(.*)|(.*)م|م(.*)|(.*)ن|ن(.*)|(.*)و|و(.*)|(.*)ه|ه(.*)|(.*)ی|ی(.*)|(.*)ز|ز(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($locktelegram == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock farsi" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locktelegram.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حله",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock farsi" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locktelegram.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حل",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/lock english" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockenglish.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حله",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock english" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockenglish.txt","✖️");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حل",
  'parse_mode'=>'MarkDown',
	]);
	}
}

if(preg_match("/^(.*)a|a(.*)|(.*)b|b(.*)|(.*)c|c(.*)|(.*)d|d(.*)e|e(.*)|(.*)f|f(.*)|(.*)g|g(.*)|(.*)h|h(.*)|(.*)i|i(.*)|(.*)j|j(.*)|(.*)k|k(.*)|(.*)l|l(.*)|(.*)m|m(.*)|(.*)n|n(.*)|(.*)o|o(.*)|(.*)p|p(.*)|(.*)q|q(.*)|(.*)r|r(.*)|(.*)s|s(.*)|(.*)t|t(.*)|(.*)w|w(.*)|(.*)v|v(.*)|(.*)w|w(.*)|(.*)x|x(.*)|(.*)y|y(.*)|(.*)z|z(.*)(.*)A|A(.*)|(.*)B|B(.*)|(.*)C|C(.*)|(.*)D|D(.*)E|E(.*)|(.*)F|F(.*)|(.*)G|G(.*)|(.*)H|H(.*)|(.*)I|I(.*)|(.*)J|J(.*)|(.*)K|K(.*)|(.*)I|I(.*)|(.*)M|M(.*)|(.*)N|N(.*)|(.*)O|O(.*)|(.*)P|P(.*)|(.*)Q|Q(.*)|(.*)R|R(.*)|(.*)S|S(.*)|(.*)T|T(.*)|(.*)W|W(.*)|(.*)V|V(.*)|(.*)w|w(.*)|(.*)X|X(.*)|(.*)Y|Y(.*)|(.*)Z|Z(.*)/",$textmassage)){
preg_match("/^(.*)a|a(.*)|(.*)b|b(.*)|(.*)c|c(.*)|(.*)d|d(.*)e|e(.*)|(.*)f|f(.*)|(.*)g|g(.*)|(.*)h|h(.*)|(.*)i|i(.*)|(.*)j|j(.*)|(.*)k|k(.*)|(.*)l|l(.*)|(.*)m|m(.*)|(.*)n|n(.*)|(.*)o|o(.*)|(.*)p|p(.*)|(.*)q|q(.*)|(.*)r|r(.*)|(.*)s|s(.*)|(.*)t|t(.*)|(.*)w|w(.*)|(.*)v|v(.*)|(.*)w|w(.*)|(.*)x|x(.*)|(.*)y|y(.*)|(.*)z|z(.*)(.*)A|A(.*)|(.*)B|B(.*)|(.*)C|C(.*)|(.*)D|D(.*)E|E(.*)|(.*)F|F(.*)|(.*)G|G(.*)|(.*)H|H(.*)|(.*)I|I(.*)|(.*)J|J(.*)|(.*)K|K(.*)|(.*)I|I(.*)|(.*)M|M(.*)|(.*)N|N(.*)|(.*)O|O(.*)|(.*)P|P(.*)|(.*)Q|Q(.*)|(.*)R|R(.*)|(.*)S|S(.*)|(.*)T|T(.*)|(.*)W|W(.*)|(.*)V|V(.*)|(.*)w|w(.*)|(.*)X|X(.*)|(.*)Y|Y(.*)|(.*)Z|Z(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockenglish == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locktg== "✔️"){
if ($status != "creator" && $status != "administrator"){

 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
elseif($textmassage=="/lock tg" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locktg.txt","✔️");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حله",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock tg" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locktg.txt","✖️");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حل",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvideo_note == "✔️"){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}

elseif($textmassage=="/lock videonote" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo_note.txt","✔️");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حله",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock videonote" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo_note.txt","✖️");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"حل",
  'parse_mode'=>'MarkDown',
	]);
	}
}
// welcome
elseif($update->message->new_chat_title){
if ($tc == 'group' | $tc == 'supergroup'){
$newname = $update->message->new_chat_title;

bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"نام گروه تغییر یافت به : $newname",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
if ($welcome == "✔️"){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$textwelcome",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif (strpos($textmassage , "/setwelcome") !== false && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$we = str_replace("/setwelcome","",$textmassage);
save("data/$chat_id/textwelcome.txt","$we");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/welcome enable" && $from_id == $owners or $textmassage == "welcome enable" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/welcome disable" && $from_id == $owners or $textmassage == "welcome disable" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✖️");
SendMessage($chat_id,"#انجام شد");
}
}
// silent

if($textmassage == "/silent" && $from_id == $owners && $rt){
  if ($tc == 'group' | $tc == 'supergroup'){
   bot('restrictChatMember',[
   'user_id'=>$rtid,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>false,
   'can_send_media_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"کاربر به لیست سکوت گروه اضافه شد",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
	]
    ]
    ])
]);
file_put_contents("data/$chat_id/silent.txt",$rtid);
}
}

if($textmassage == "/unsilent" && $from_id == $owners && $rt){
if ($tc == 'group' | $tc == 'supergroup'){
 bot('restrictChatMember',[
   'user_id'=>$rtid,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>true,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"کاربر از لیست سکوت گروه پاک شد",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
	]
    ]
    ])
]);
unlink("data/$chat_id/silent.txt");
}
}
elseif ($textmassage == "/silent list" && $from_id == $owners or $textmassage == "silent list" && $from_id == $owners) {
$silent_list=file_get_contents("data/$chat_id/silent.txt");	
if ($tc == 'group' | $tc == 'supergroup'){
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لیست کابران ساکت گروه : 
➖➖➖➖➖
$silent_list",
'reply_to_message_id'=>$re_msgid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
		 ],
   ]
   ])
   ]);
   }  
}
//ban all

// other
$users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .=$username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="آمار ربات"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount",
                'hide_keyboard'=>true,
		]);
		}elseif ($textmassage == 'ارسال به همه' && $from_id == $Dev) {
save("data/$from_id/file.txt","sendtoall");
         bot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'sendtoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","to");
     bot('sendmessage',[
          'chat_id'=>$memuser,        'text'=>$textmassage,
    'parse_mode'=>'MarkDown'
        ]);
    }
} elseif ($textmassage == 'فروارد همگانی' && $from_id == $Dev) {
save("data/$from_id/file.txt","fortoall");
         bot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'fortoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","none");
Forward($memuser, $chat_id,$message_id);
    }
}

// lock bots
elseif ($textmassage == "/lock bots" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/unlock bots" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✖️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbots == "✔️" && $newchatmemberu != "SPDLBot") {
if ($from_id != 329619446){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
}
// flood
elseif (strpos($textmassage , "/setflood") !== false && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$we = str_replace("/setflood","",$textmassage);
if ($we <= 20 && $we >= 1){
save("data/$chat_id/numflood.txt","$we");
SendMessage($chat_id,"#انجام شد");
}
else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"اخطار\nعدد باید بین 1 و  20 باشد.",
              ]);
}
}
}
elseif ($textmassage == "/flood check" && $from_id == $Dev) {
rmdir("data/spam");
mkdir("data/spam");
SendMessage($chat_id,"#انجام شد");
}
elseif ($textmassage == "/lock flood" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/unlock flood" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✖️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif($textmassage=="/flood manage" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"به بخش فلود خوش امدید❤️
➖➖➖➖➖➖➖➖
🔹در این بخش شما میتوانید حداکثر کارکتر های پیام را تایین کنید

🔸توجه داشته باشید عدد باید بین 1 تا 20 باشد",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'inline_keyboard'=>[
 [
 ['text'=>"🔖 قفل فلود",'callback_data'=>'text'],['text'=>"$floods",'callback_data'=>'lockflood']
 ],
  [
 ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
 ],
 				   [
				   ['text'=>"🔙 برگشت",'callback_data'=>'panel2'],['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
				   ],
  ]
  ])
  ]);
  }}
  elseif($data=="f-"  && $fm == $owners2){
    $floodnew = $flood2 - 1;
    $floodnew1 = $flood2 - 1;
    save("data/$chatid/numflood.txt","$floodnew");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش فلود خوش امدید❤️
➖➖➖➖➖➖➖➖
🔹در این بخش شما میتوانید حداکثر کارکتر های پیام را تایین کنید

🔸توجه داشته باشید عدد باید بین 1 تا 20 باشد
➖➖➖➖
کاهش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodnew1",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🔙 برگشت",'callback_data'=>'panel2'],['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
				   ],
                    ]
             ])
         ]);
  }
  elseif($data=="f+"  && $fm == $owners2){
    $floodne = $flood2 + 1;
    $floodne2 = $flood2 + 1;
    save("data/$chatid/numflood.txt","$floodne");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش فلود خوش امدید❤️
➖➖➖➖➖➖➖➖
🔹در این بخش شما میتوانید حداکثر کارکتر های پیام را تایین کنید

🔸توجه داشته باشید عدد باید بین 1 تا 20 باشد
➖➖➖➖
افزایش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodne2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🔙 برگشت",'callback_data'=>'panel2'],['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
				   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockflood.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش فلود خوش امدید❤️
➖➖➖➖➖➖➖➖
🔹در این بخش شما میتوانید حداکثر کارکتر های پیام را تایین کنید

🔸توجه داشته باشید عدد باید بین 1 تا 20 باشد",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🔙 برگشت",'callback_data'=>'panel2'],['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
				   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockflood.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش فلود خوش امدید❤️
➖➖➖➖➖➖➖➖
🔹در این بخش شما میتوانید حداکثر کارکتر های پیام را تایین کنید

🔸توجه داشته باشید عدد باید بین 1 تا 20 باشد",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🔙 برگشت",'callback_data'=>'panel2'],['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/Botsorce"]
				   ],
                    ]
             ])
         ]);
  }
  elseif ($data == 'text')
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"ربات حرفه ای مدیریت گروه.",
]);
}
$timing = date("Y-m-d-h-i-sa");
$timing = str_replace("am","",$timing);
$metti_khan = file_get_contents("data/spam/$timing-$from_id.txt");
$timing_spam = $metti_khan+1;
file_put_contents("data/spam/$timing-$from_id.txt","$timing_spam");
$metti_khan2 = file_get_contents("data/spam/$timing-$from_id.txt");
if($metti_khan2 >= $flood){
if($floods == "✔️"){
bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
    bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"این فرد $first_name به دلیل تکرار پیام مکرر در گروه اخراج شد.",
      'parse_mode'=>'MarkDown',
    	]);

}
}
elseif ($text == "ads") {
}
{
   bot('answerInlineQuery', [
        'inline_query_id' => $update->inline_query->id,
        'results' => json_encode([[
            'type' => 'article',
             'thumb_url'=>"http://up.upinja.com/mpjd9.jpg",
            'id' => base64_encode(rand(5, 555)),
            'title' => 'بنر تبلیغاتی',
            'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "ربات جديد و حرفه اي مديريت گروه
باقابليت هاي فراوان
ازجمله :
داراي تمام قفل هاي مديريتي
قفل تکرار پيام مکرر
قفل وارد کردن ربات ها
قابليت شناسي ادمين ن عدم پاک کردن پيام هاي او
قابليت پاک کردن پيام
با سرعت بالا
بدون هيچ مشکلي
داراي پنل مديريت فوق حرفه اي اينلاين وساده
داراي عمليات پيغام خوش امدگويي
و...
➖➖➖
*Botsorce AntiSpam*"],
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        ['text' => "عضویت در ربات", 'url' => 'https://telegram.me/Your_Bot_ID']
                    ],
                    [
                        ['text' => "اشتراک با دیگران", 'switch_inline_query' => 'ads']
                    ]
                ]
            ]
        ]])
    ]);
}
unlink("error_log");
?>
