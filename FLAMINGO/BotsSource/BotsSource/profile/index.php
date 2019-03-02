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
//-----------
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
//-----------
include('jdf.php');
$day = jdate('l');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
mkdir("data/$from_id");
$message_id = $message->message_id;
$from_id = $message->from->id;
$messageid = $update->callback_query->message->message_id;
$chatid = $update->callback_query->message->chat->id;
$text1 = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$admin = [*[ADMIN]*];
$first_name = $message->from->first_name;
$data = $update->callback_query->data;
$step = file_get_contents("data/$from_id/step.txt");
$tedad = file_get_contents("data/$from_id/tedad.txt");
$tedad1 = file_get_contents("data/$chatid/tedad.txt");
$nafar = file_get_contents("data/nafar.txt");
$zakhire = file_get_contents("data/zakhire.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//-----------
 function ForwardMessage($chat_id,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
	}
function objectToArrays( $object ) {
				if( !is_object( $object ) && !is_array( $object ) )
				{
				return $object;
				}
				if( is_object( $object ) )
				{
				$object = get_object_vars( $object );
				}
			return array_map( "objectToArrays", $object );
			}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
//--------------
if (!file_exists("data/$from_id/step.txt")) {
     mkdir("data/$from_id");
        file_put_contents("data/$from_id/step.txt","none");
		file_put_contents("data/$from_id/tedad.txt","0");
        $myfile2 = fopen("data/user.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
}
if(strpos($text1=="/start") !== false  && $text1 !="/start"){
					$id=str_replace("/start ","",$text1);
					$amar=file_get_contents("data/user.txt");
					$exp=explode("\n",$amar);
					if(!in_array($from_id,$exp) && $from_id !== $id){
					 $tedad = file_get_contents("data/$id/tedad.txt");
                    settype($tedad,"integer");
                      $newtedad = $tedad + 1;
                       file_put_contents("data/$id/tedad.txt",$newtedad);
					   $koll = file_get_contents("data/koll.txt");
					   settype($koll,"integer");
                      $newkoll = $koll + 1;
                       file_put_contents("data/koll.txt",$newkoll);
					 bot('sendMessage',[
                    'chat_id'=>$id,
                    'text'=>"دوست گلم یک نفر به زیر مجموعه هات اضافه شد😃
تا الان $tedad نفر رو به ربات دعوت کردی✔️",
                   'parse_mode'=>"HTML",
	                      ]);
						  bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"به ربات ما خوشامدی🙂
برای کار با ربات و ثبت اطلاعات شما در سیستم دستور زیر رو ارسال کن :
/start",
                   'parse_mode'=>"HTML",
	                      ]);
					}
					}
elseif($text1 == "/start" or $text1 == "▫️کی پروفایلم رو چک کرده؟◾️"){
	 if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
	 bot('sendMessage',[
          'chat_id'=>$chat_id,
         'text'=>"در حال دریافت اطلاعات",
	   ]);
	 bot('editMessageText',[ 
 'chat_id'=>$chat_id, 
 'message_id'=>$message_id, 
 'text'=>'در حال دریافت اطلاعات .' 
 ]); 
 bot('editMessageText',[ 
 'chat_id'=>$chat_id, 
 'message_id'=>$message_id + 1, 
 'text'=>'در حال دریافت اطلاعات ..' 
 ]); 
 bot('editMessageText',[ 
 'chat_id'=>$chat_id, 
 'message_id'=>$message_id + 1, 
 'text'=>'در حال دریافت اطلاعات ...'
 ]); 
  bot('editMessageText',[ 
 'chat_id'=>$chat_id, 
 'message_id'=>$message_id + 1, 
 'text'=>'اطلاعات دریافت شد' ,
          
 ]); 
  $a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$chat_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
	 bot('sendMessage',[
          'chat_id'=>$chat_id,
         'text'=>"❎ شما تصویر پروفایلی ندارید !

برای استفاده از این ربات باید حداقل یک تصویر پروفایل داشته باشید ( سپس مجددا /start کنید )",
 'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"▫️کی پروفایلم رو چک کرده؟◾️"]],
	],
		"resize_keyboard"=>true,
	 ])
	         ]);
}else{
	bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
 'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"▫️کی پروفایلم رو چک کرده؟◾️"]],
	],
		"resize_keyboard"=>true,
	 ])
]);
 bot('sendMessage',[
          'chat_id'=>$chat_id,
         'text'=>"آمار تصویر بالا 👆 ، در روز جاری : $day
(اطلاعات هر 24 ساعت به روز می شود)

👁‍🗨 $nafar نفر از تصویر بالا دیدن کردند
💾 $zakhire نفر آن را ذخیره کردند

👇 مشاهده این افراد 👇",
 'reply_to_message_id'=>$message_id + 2,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"مشاهده این افراد",'callback_data'=>"moshahede"]],
              ]
        ])
	         ]);
}}
	if($data == "moshahede"){
	 bot('sendMessage',[
          'chat_id'=>$chatid,
         'text'=>"کاربر گرامی

به دلیل هزینه ی سنگین سرور این ربات و پیاده سازی دشوار سرویس apriori ، فقط افرادی که دارای اکانت VIP باشند امکان مشاهده افراد را دارند

برای فعال سازی اکانت VIP ، شما باید 5 نفر را با استفاده از لینک دعوت اختصاصی خود به ربات دعوت نمایید
با اینکار تمامی امکانات این ربات به صورت دائم برای شما فعال می گردد

  ساخت لینک دعوت اختصاصی من 👇",
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"ساخت لینک اختصاصی من",'callback_data'=>"createlink"]],
              ]
        ])
	]);}
	if($data == "createlink"){
		 bot('sendphoto',[
 'chat_id'=>$chatid,
 'photo'=>"http://uupload.ir/files/z34a_photo_%DB%B2%DB%B0%DB%B1%DB%B7-%DB%B0%DB%B9-%DB%B2%DB%B7_%DB%B2%DB%B0-%DB%B3%DB%B6-%DB%B3%DB%B7.jpg",
 'caption'=>"دوست داری بدونی کیا در طول روز تصویر پروفایلتو چک یا ذخیره می کنن ؟ 😉

پیشرفته ترین ربات توی این زمینه با بیش از 8 میلیون کاربر 👇
telegram.me/[*[BOT]*]?start=$chatid",
 ]);
	 bot('sendMessage',[
          'chat_id'=>$chatid,
         'text'=>"🔗 لینک دعوت شما با موفقیت ساخته شد ☝️

اگر 5 نفر با استفاده از لینک بالا در ربات عضو شوند ، ربات به صورت دائم برای شما فعال می گردد

👈 شما تاکنون $tedad1 نفر را عضو کرده اید",
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"ساخت لینک اختصاصی من",'callback_data'=>"createlink"]],
              ]
        ])
	]);}
	if($data == "chandnafar"){
		$newtedad = 5 - $tedad1;
	 bot('sendMessage',[
          'chat_id'=>$chatid,
         'text'=>"شما تاکنون $tedad1 نفر را عضو کردید
برای فعال شدن $newtedad نفر دیگر را عضو کنید",
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"ساخت لینک اختصاصی من",'callback_data'=>"createlink"]],
              ]
        ])
	]);}
	if(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text1)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
	//-----------Admin----------------
	if($text1 == "/panel" && $from_id == $admin){
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ادمین گرامی به پنل مدیریت خوشامدید",
 'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
          'keyboard'=>[
    [['text'=>"آمار ربات"]],
    [['text'=>"ارسال همگانی"],['text'=>"فروارد همگانی"]],
	[['text'=>"تنظیم تعداد بازدید از پروفایل شخص"]],
	[['text'=>"تنظیم تعداد عکس ذخیره شده از پروفایل شخص"]],
	[['text'=>"/start"]]
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
if($text1 == "تنظیم تعداد عکس ذخیره شده از پروفایل شخص" && $from_id == $admin){
file_put_contents("data/$from_id/step.txt","setsave");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تعداد ذخیره پروفایلی که میخواهید در پیام به کاربران نشان داده شود را ارسال کنید
پیشنهاد میشود این بخش را هر چند روزی یک مرتبه عوض کنید
یک عدد برای تعداد پیش فرض ذخیره پروفایل ارسال کنید :",
 'parse_mode'=>"HTML",
	 ]);
}
if($text1 && $from_id == $admin && $step == "setsave"){
file_put_contents("data/$from_id/step.txt","none");
file_put_contents("data/zakhire.txt",$text1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ثبت شد",
 'parse_mode'=>"HTML",
	 ]);
}
if($text1 == "تنظیم تعداد بازدید از پروفایل شخص" && $from_id == $admin){
file_put_contents("data/$from_id/step.txt","setbazdid");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تعداد بازدیدی که میخواهید در پیام به کاربران نشان داده شود را ارسال کنید
پیشنهاد میشود این بخش را هر چند روزی یک مرتبه عوض کنید
یک عدد برای تعداد پیش فرض بازدید از پروفایل ارسال کنید :",
 'parse_mode'=>"HTML",
	 ]);
}
if($text1 && $from_id == $admin && $step == "setbazdid"){
file_put_contents("data/$from_id/step.txt","none");
file_put_contents("data/nafar.txt",$text1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ثبت شد",
 'parse_mode'=>"HTML",
	 ]);
}
if($text1 == "فروارد همگانی" && $from_id == $admin){
file_put_contents("data/$from_id/step.txt","f2all");
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای فروارد همگانی پیام خود را فروارد کنید",
 'parse_mode'=>"HTML",
	 ]);
}
if($text1 && $from_id == $admin && $step == "f2all"){
	 file_put_contents("data/$chat_id/step.txt","none");
    $all_member = fopen( "data/user.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
ForwardMessage($user,$admin,$message_id);
		}    
		}
if($text1 == "ارسال همگانی" && $from_id == $admin){
file_put_contents("data/$from_id/step.txt","send2all");
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ارسال همگانی پیام خود را ارسال کنید",
 'parse_mode'=>"HTML",
	 ]);
}
if($text1 && $from_id == $admin && $step == "send2all"){
	 file_put_contents("data/$chat_id/step.txt","none");
    $all_member = fopen( "data/user.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
 			 bot('sendMessage',[
 'chat_id'=>$user,
 'text'=>$text1,
 'parse_mode'=>"MarkDown",
  ]);
}
	 bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"یام مورد نظر به همه اعضای ربات ارسال شد",
 'parse_mode'=>"MarkDown",
  ]); 
}
	if($text1 == "آمار ربات" && $from_id == $admin){
	$alluser = file_get_contents("data/user.txt");
	$alaki = explode("\n",$alluser);
    $allusers = count($alaki)-1;
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"State :",
 'parse_mode'=>"HTML",
 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
[['text'=>"تعداد کل اعضا",'callback_data'=>"1"],['text'=>"$allusers",'callback_data'=>"1"]],]
	])
	 ]);
}
unlink("error_log");
 ?>