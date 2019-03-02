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
//-------------------------------function-bot----------------
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
//----------------------------Variable------------------------------------------------
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
mkdir("data/$from_id");
$message_id = $message->message_id;
$messageid = $update->callback_query->message->message_id;
$text1 = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$chatid = $update->callback_query->message->chat->id;
$admin = '[*[ADMIN]*]';
$tc = $update->message->chat->type;
$data = $update->callback_query->data;
$stats = file_get_contents("data/$from_id/stats.txt");
$stats2 = file_get_contents("data/$chatid/stats.txt");
$javab = file_get_contents("data/$chatid/javab.txt");
$score1 = file_get_contents("data/$from_id/score.txt");
$score2 = file_get_contents("data/$chatid/score.txt");
$addso1 = file_get_contents("data/$chat_id/addso1.txt");
$addso2 = file_get_contents("data/$chat_id/addso2.txt");
$onscore = file_get_contents("data/$chat_id/onscore.txt");
$onplayer = file_get_contents("data/$chatid/onplayer.txt");
$ontedad = file_get_contents("data/$chatid/ontedad.txt");
$onend = file_get_contents("data/$chatid/onend.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//----------------------------------------------------------------------------
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
	function EditMessageText($chat_id,$message_id,$text,$parse_mode,$disable_web_page_preview,$keyboard){
  bot('editMessagetext',[
    'chat_id'=>$chat_id,
 'message_id'=>$message_id,
    'text'=>$text,
    'parse_mode'=>$parse_mode,
 'disable_web_page_preview'=>$disable_web_page_preview,
    'reply_markup'=>$keyboard
 ]);
 }
 function SendPhoto($chat_id, $photo, $caption = null){
	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>$caption
	]);
	}
 function sendAction($chat_id, $action){
bot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function ForwardMessage($chatid,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
	}
function bestscore($number){ 
 $saveusers = array(); 
  $usersscan = scandir("data"); 
  unset($usersscan[0]); 
  unset($usersscan[1]); 
  foreach($usersscan as $savetojs){ 
$savedis = file_get_contents("data/$savetojs/score.txt"); 
$saveusers[$savetojs] = $savedis; 
  } 
  $rating = $saveusers; 
    arsort($rating,SORT_NUMERIC);  
    $rate = array();  
    foreach($rating as $key=>$value){  
      $rate[] = $key;  
    }  
    return $rate[$number];  
}
function getrank($fadmin){  
     
  $saveusers = array(); 
  $usersscan = scandir("data"); 
  unset($usersscan[0]); 
  unset($usersscan[1]); 
  foreach($usersscan as $savetojs){ 
$savedis = file_get_contents("data/$savetojs/score.txt"); 
$saveusers[$savetojs] = $savedis; 
  } 
  $rating = $saveusers; 
  if(isset($rating[$fadmin])){  
    arsort($rating,SORT_NUMERIC);  
    $rate = array();  
    foreach($rating as $key=>$value){  
      $rate[] = $key;  
    }  
    $flipped = array_flip($rate);  
    return $flipped[$fadmin]+1;  
  }else{  
    return false;  
  }  
}
//--------------------------------------------
if($text1=="/start"){
    if (file_exists("data/$from_id/stats.txt")) {
        			if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"سلام دوست خوبم😊
<a href='tg://user?id=$from_id'>$first_name</a>
از شما دعوت کردیم تا به بازی با کلمات بپیوندید👥
هم اطلاعات عمومی خودتون رو محک بزنید😇📚
هم کل کل کنید🗣
شرط ببندید🤝
و تا 50هزارتومن💰 جایزه نقدی برنده شوید 😍",
 'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   
   [['text'=>"🔮سوال و جواب🔮"],['text'=>"👥بازی دو نفره👥"]],
  [['text'=>"👤پنل کاربری👤"],['text'=>"🏆کاربران برتر🏆"]],
  [['text'=>"🎯قوانین🎯"],['text'=>"🎲راهنما🎲"]]
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}else{
    mkdir("data/$from_id");
        file_put_contents("data/$from_id/stats.txt","none");
        file_put_contents("data/$from_id/score.txt","0");
        $myfile2 = fopen("Member.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
        			if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"سلام دوست خوبم😊
<a href='tg://user?id=$from_id'>$first_name</a>
از شما دعوت کردیم تا به بازی با کلمات بپیوندید👥
هم اطلاعات عمومی خودتون رو محک بزنید😇📚
هم کل کل کنید🗣
شرط ببندید🤝
و تا 50هزارتومن💰 جایزه نقدی برنده شوید 😍",
 'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   
   [['text'=>"🔮سوال و جواب🔮"],['text'=>"👥بازی دو نفره👥"]],
  [['text'=>"👤پنل کاربری👤"],['text'=>"🏆کاربران برتر🏆"]],
  [['text'=>"🎯قوانین🎯"],['text'=>"🎲راهنما🎲"]]
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}
} 
		elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text1)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
    elseif(strpos($text1=="/start ") !== false  && $text1 !="/start" && $stats == "amadeon"){
	$id = str_replace("/start ","",$text1);
        file_put_contents("data/$from_id/stats.txt","onlinestats");
        file_put_contents("data/$id/stats.txt","onlinestats");
        file_put_contents("data/$from_id/onplayer.txt",$id);
        file_put_contents("data/$id/onplayer.txt",$from_id);
        file_put_contents("data/$from_id/onscore.txt","0");
        file_put_contents("data/$id/onscore.txt","0");
        file_put_contents("data/$id/ontedad.txt","0");
        file_put_contents("data/$from_id/ontedad.txt","0");
        $random = rand(1,6);
        $noea = file_get_contents("database/soal-javab/donafare/$random.txt");
         $tedad = file_get_contents("database/soal-javab/$noea/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/$noea/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/$noea/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/$noea/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/$noea/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/$noea/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/$noea/$random/t5.txt");
    file_put_contents("data/$chat_id/javab.txt",$t5);
    file_put_contents("data/$id/javab.txt",$t5);
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"به کاربر متصل شدید و فرد آنلاین هست!
آماده برای شروع بازی دو نفره👥
10 سوال به هر دوی شما داده میشود و اگر به سوالی درست جواب بدهید 10 سکه به امتیازات شما اضافه میشود در غیر اینصورت 5 سکه از شما کسر میشود⚠️
سکه هایی که در بازی دوستانه کسب میکنید ربطی به امتیاز شما در ربات ندارد‼️
اگر شما به سوالات جواب دادید باید صبر کنید تا دوستتان نیز بازی را تمام کند تا امتیاز بندی کنیم😼
بازی رو شروع کن 👇",
       'parse_mode' => "MarkDown",
       ]);
        bot('sendMessage',[
'chat_id'=>$id,
'text'=>"به کاربر متصل شدید و فرد آنلاین هست!
آماده برای شروع بازی دو نفره👥
10 سوال به هر دوی شما داده میشود و اگر به سوالی درست جواب بدهید 10 سکه به امتیازات شما اضافه میشود در غیر اینصورت 5 سکه از شما کسر میشود⚠️
سکه هایی که در بازی دوستانه کسب میکنید ربطی به امتیاز شما در ربات ندارد‼️
اگر شما به سوالات جواب دادید باید صبر کنید تا دوستتان نیز بازی را تمام کند تا امتیاز بندی کنیم😼
بازی رو شروع کن 👇",
       'parse_mode' => "MarkDown",
       ]);
         bot('sendMessage',[
'chat_id'=>$id,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
            
        
    
if($data == $javab && $stats2 == "onlinestats"){          
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    if($ontedad < "10"){          
    $coin = file_get_contents("data/$chatid/onscore.txt");
            settype($coin,"integer");
          $newcoin = $coin + 10;
          save("data/$chatid/onscore.txt",$newcoin);
          $coig = file_get_contents("data/$chatid/ontedad.txt");
            settype($coig,"integer");
          $newcoi = $coig + 1;
          save("data/$chatid/ontedad.txt",$newcoi);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "درست بود +10 امتیاز",
                'show_alert' => false
            ]); 
            
             $random = rand(1,6);
        $noea = file_get_contents("database/soal-javab/donafare/$random.txt");
         $tedad = file_get_contents("database/soal-javab/$noea/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/$noea/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/$noea/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/$noea/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/$noea/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/$noea/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/$noea/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
    file_put_contents("data/$chatid/javab.txt",$t5);
         bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);} else{
        if($ontedad == "10"){
            file_put_contents("data/$chatid/onend.txt","end");
           $end = file_get_contents("data/$onplayer/onend.txt");
            if($end == "end"){
                 $scoreon1 = file_get_contents("data/$onplayer/onscore.txt");
                 $scoreon2 = file_get_contents("data/$chatid/onscore.txt");
             bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"دوست شما هم بازی رو تموم کرد🙀
این هم نتایج بازی🍃

مجموع امتیازات شما : $scoreon2
مجموع امتیازات حریف : $scoreon1",
       'parse_mode' => "MarkDown",
       ]);
       bot('sendMessage',[
'chat_id'=>$onplayer,
'text'=>"دوست شما هم بازی رو تموم کرد🙀
این هم نتایج بازی🍃

مجموع امتیازات شما : $scoreon1
مجموع امتیازات حریف : $scoreon2",
       'parse_mode' => "MarkDown",
       ]);
       unlink("data/$chatid/onscore.txt");
       unlink("data/$onplayer/onscore.txt");
       unlink("data/$chatid/onplayer.txt");
       unlink("data/$onplayer/onplayer.txt");
       unlink("data/$chatid/ontedad.txt");
       unlink("data/$onplayer/ontedad.txt");
       unlink("data/$chatid/onend.txt");
       unlink("data/$onplayer/onend.txt");
       file_put_contents("data/$chatid/stats.txt","none");
       file_put_contents("data/$onplayer/stats.txt","none");
        }
    }}
}
if($data !== $javab && $stats2 == "onlinestats"){           
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
     if($ontedad < "10"){ 
       $coin = file_get_contents("data/$chatid/onscore.txt");
            settype($coin,"integer");
          $newcoin = $coin - 5;
          save("data/$chatid/onscore.txt",$newcoin);
          $coig = file_get_contents("data/$chatid/ontedad.txt");
            settype($coig,"integer");
          $newcoi = $coig + 1;
          save("data/$chatid/ontedad.txt",$newcoi);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "غلط بود -5 امتیاز",
                'show_alert' => false
            ]); 
             $random = rand(1,6);
        $noea = file_get_contents("database/soal-javab/donafare/$random.txt");
         $tedad = file_get_contents("database/soal-javab/$noea/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/$noea/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/$noea/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/$noea/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/$noea/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/$noea/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/$noea/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
    file_put_contents("data/$chatid/javab.txt",$t5);
         bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
    else{
 if($ontedad == "10"){
            file_put_contents("data/$chatid/onend.txt","end");
           $end = file_get_contents("data/$onplayer/onend.txt");
            if($end == "end"){
                 $scoreon1 = file_get_contents("data/$onplayer/onscore.txt");
                 $scoreon2 = file_get_contents("data/$chatid/onscore.txt");
             bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"دوست شما هم بازی رو تموم کرد🙀
این هم نتایج بازی🍃

مجموع امتیازات شما : $scoreon2
مجموع امتیازات حریف : $scoreon1",
       'parse_mode' => "MarkDown",
       ]);
       bot('sendMessage',[
'chat_id'=>$onplayer,
'text'=>"دوست شما هم بازی رو تموم کرد🙀
این هم نتایج بازی🍃

مجموع امتیازات شما : $scoreon1
مجموع امتیازات حریف : $scoreon2",
       'parse_mode' => "MarkDown",
       ]);
       unlink("data/$chatid/onscore.txt");
       unlink("data/$onplayer/onscore.txt");
       unlink("data/$chatid/onplayer.txt");
       unlink("data/$onplayer/onplayer.txt");
       unlink("data/$chatid/ontedad.txt");
       unlink("data/$onplayer/ontedad.txt");
       unlink("data/$chatid/onend.txt");
       unlink("data/$onplayer/onend.txt");
       file_put_contents("data/$chatid/stats.txt","none");
       file_put_contents("data/$onplayer/stats.txt","none");
        }
    }}
}

    if($data == "back"){
        file_put_contents("data/$chatid/stats.txt","none");
         unlink("data/$chatid/onscore.txt");
       unlink("data/$chatid/onplayer.txt");
       unlink("data/$chatid/ontedad.txt");
       unlink("data/$chatid/onend.txt");
    bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>"به منوی اصلی برگشتیم✨",
 'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   
  [['text'=>"🔮سوال و جواب🔮"],['text'=>"👥بازی دو نفره👥"]],
  [['text'=>"👤پنل کاربری👤"],['text'=>"🏆کاربران برتر🏆"]],
  [['text'=>"🎯قوانین🎯"],['text'=>"🎲راهنما🎲"]]
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
	     bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid 
    ]);
}  
if($text1=="برگشت به منوی اصلی🔙"){
    file_put_contents("data/$from_id/stats.txt","none");
       unlink("data/$chat_id/onscore.txt");
       unlink("data/$chat_id/onplayer.txt");
       unlink("data/$chat_id/ontedad.txt");
       unlink("data/$chat_id/onend.txt");
      bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id - 1
    ]);
     bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id - 2
    ]);
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به منوی اصلی برگشتیم✨",
 'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   
   [['text'=>"🔮سوال و جواب🔮"],['text'=>"👥بازی دو نفره👥"]],
  [['text'=>"👤پنل کاربری👤"],['text'=>"🏆کاربران برتر🏆"]],
  [['text'=>"🎯قوانین🎯"],['text'=>"🎲راهنما🎲"]]
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}  
 elseif($text1=="🔮سوال و جواب🔮"){           
     file_put_contents("data/$from_id/stats.txt","soalvajavab");
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"به بخش سوال و جواب (4 گزینه ای) خوش آمدید🍂
اینجا شامل چند دسته متفاوت از سوالات هست که شما متناسب با دانش و تخصصتون میتونید یک گزینه رو انتخاب کنید و به سوالات پاسخ بدید و امتیاز کسب کنید🤠
برای شروع یکی از گزینه های زیر رو انتخاب کنید👇",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
 [['text'=>"📚اطلاعات عمومی📚"],['text'=>"🌍جغرافیا🌏"]],
  [['text'=>"📿مذهبی📿"],['text'=>"📱تکنولوژی📱"]],
  [['text'=>"⚽️ورزشی⚽️"],['text'=>"🕯تاریخی🕯"]],
    [['text'=>"برگشت به منوی اصلی🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}  
//---------------------------------------------
elseif($text1=="🌍جغرافیا🌏" && $stats == "soalvajavab"){           
    file_put_contents("data/$from_id/stats.txt","soalvajavab-joghraphy");
    $tedad = file_get_contents("database/soal-javab/joghraphy/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/joghraphy/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/joghraphy/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/joghraphy/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/joghraphy/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/joghraphy/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/joghraphy/$random/t5.txt");
    file_put_contents("data/$chat_id/javab.txt",$t5);
        bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id - 1
    ]);
      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"به بخش سوالات جغرافیایی خوش آمدید🍃
به سوالات زیر پاسخ بدید و یکی از گزینه های زیر رو انتخاب کنید
با هر جواب صحیح 10 امتیاز به شما افزوده میشه و با هر جواب غلط 5 امتیاز کم میشه🍁",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"برگشت به منوی اصلی🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data == $javab && $stats2 == "soalvajavab-joghraphy"){          
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin + 10;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب درست بود +10 امتیاز",
                'show_alert' => false
            ]); 
             $tedad = file_get_contents("database/soal-javab/joghraphy/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/joghraphy/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/joghraphy/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/joghraphy/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/joghraphy/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/joghraphy/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/joghraphy/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data !== $javab && $stats2 == "soalvajavab-joghraphy"){           
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin - 5;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب غلط بود -5 امتیاز",
                'show_alert' => false
            ]); 
  $tedad = file_get_contents("database/soal-javab/joghraphy/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/joghraphy/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/joghraphy/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/joghraphy/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/joghraphy/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/joghraphy/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/joghraphy/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
//-------------------------------------------------------------
elseif($text1=="🕯تاریخی🕯" && $stats == "soalvajavab"){
    file_put_contents("data/$from_id/stats.txt","soalvajavab-tarikhi");
    $tedad = file_get_contents("database/soal-javab/tarikhi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/tarikhi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/tarikhi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/tarikhi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/tarikhi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/tarikhi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/tarikhi/$random/t5.txt");
    file_put_contents("data/$chat_id/javab.txt",$t5);
        bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id - 1
    ]);
      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"به بخش سوالات تاریخی خوش آمدید🍃
به سوالات زیر پاسخ بدید و یکی از گزینه های زیر رو انتخاب کنید
با هر جواب صحیح 10 امتیاز به شما افزوده میشه و با هر جواب غلط 5 امتیاز کم میشه🍁",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"برگشت به منوی اصلی🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data == $javab && $stats2 == "soalvajavab-tarikhi"){           
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin + 10;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب درست بود +10 امتیاز",
                'show_alert' => false
            ]); 
             $tedad = file_get_contents("database/soal-javab/tarikhi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/tarikhi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/tarikhi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/tarikhi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/tarikhi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/tarikhi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/tarikhi/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data !== $javab && $stats2 == "soalvajavab-tarikhi"){          
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin - 5;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب غلط بود -5 امتیاز",
                'show_alert' => false
            ]); 
  $tedad = file_get_contents("database/soal-javab/tarikhi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/tarikhi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/tarikhi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/tarikhi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/tarikhi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/tarikhi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/tarikhi/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
//---------------------------------------------------------
elseif($text1=="📱تکنولوژی📱" && $stats == "soalvajavab"){
    file_put_contents("data/$from_id/stats.txt","soalvajavab-technology");
    $tedad = file_get_contents("database/soal-javab/technology/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/technology/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/technology/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/technology/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/technology/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/technology/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/technology/$random/t5.txt");
    file_put_contents("data/$chat_id/javab.txt",$t5);
        bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id - 1
    ]);
      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"به بخش سوالات تکنولوژی خوش آمدید🍃
به سوالات زیر پاسخ بدید و یکی از گزینه های زیر رو انتخاب کنید
با هر جواب صحیح 10 امتیاز به شما افزوده میشه و با هر جواب غلط 5 امتیاز کم میشه🍁",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"برگشت به منوی اصلی🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data == $javab && $stats2 == "soalvajavab-technology"){           
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin + 10;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب درست بود +10 امتیاز",
                'show_alert' => false
            ]); 
             $tedad = file_get_contents("database/soal-javab/technology/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/technology/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/technology/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/technology/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/technology/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/technology/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/technology/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data !== $javab && $stats2 == "soalvajavab-technology"){           
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin - 5;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب غلط بود -5 امتیاز",
                'show_alert' => false
            ]); 
  $tedad = file_get_contents("database/soal-javab/technology/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/technology/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/technology/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/technology/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/technology/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/technology/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/technology/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
//-------------------------------------------------------------
elseif($text1=="📿مذهبی📿" && $stats == "soalvajavab"){
    file_put_contents("data/$from_id/stats.txt","soalvajavab-mazhabi");
    $tedad = file_get_contents("database/soal-javab/mazhabi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/mazhabi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/mazhabi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/mazhabi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/mazhabi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/mazhabi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/mazhabi/$random/t5.txt");
    file_put_contents("data/$chat_id/javab.txt",$t5);
        bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id - 1
    ]);
      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"به بخش سوالات مذهبی خوش آمدید🍃
به سوالات زیر پاسخ بدید و یکی از گزینه های زیر رو انتخاب کنید
با هر جواب صحیح 10 امتیاز به شما افزوده میشه و با هر جواب غلط 5 امتیاز کم میشه🍁",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"برگشت به منوی اصلی🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data == $javab && $stats2 == "soalvajavab-mazhabi"){           
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin + 10;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب درست بود +10 امتیاز",
                'show_alert' => false
            ]); 
             $tedad = file_get_contents("database/soal-javab/mazhabi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/mazhabi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/mazhabi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/mazhabi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/mazhabi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/mazhabi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/mazhabi/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data !== $javab && $stats2 == "soalvajavab-mazhabi"){           
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin - 5;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب غلط بود -5 امتیاز",
                'show_alert' => false
            ]); 
  $tedad = file_get_contents("database/soal-javab/mazhabi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/mazhabi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/mazhabi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/mazhabi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/mazhabi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/mazhabi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/mazhabi/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
            //-----------------------------------------------------------
elseif($text1=="📚اطلاعات عمومی📚" && $stats == "soalvajavab"){
    file_put_contents("data/$from_id/stats.txt","soalvajavab-omomi");
    $tedad = file_get_contents("database/soal-javab/omomi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/omomi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/omomi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/omomi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/omomi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/omomi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/omomi/$random/t5.txt");
    file_put_contents("data/$chat_id/javab.txt",$t5);
        bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id - 1
    ]);
      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"به بخش سوالات اطلاعات عمومی خوش آمدید🍃
به سوالات زیر پاسخ بدید و یکی از گزینه های زیر رو انتخاب کنید
با هر جواب صحیح 10 امتیاز به شما افزوده میشه و با هر جواب غلط 5 امتیاز کم میشه🍁",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"برگشت به منوی اصلی🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data == $javab && $stats2 == "soalvajavab-omomi"){           
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin + 10;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب درست بود +10 امتیاز",
                'show_alert' => false
            ]); 
             $tedad = file_get_contents("database/soal-javab/omomi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/omomi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/omomi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/omomi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/omomi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/omomi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/omomi/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data !== $javab && $stats2 == "soalvajavab-omomi"){         
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin - 5;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب غلط بود -5 امتیاز",
                'show_alert' => false
            ]); 
  $tedad = file_get_contents("database/soal-javab/omomi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/omomi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/omomi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/omomi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/omomi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/omomi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/omomi/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
//---------------------------------------------------------------------
elseif($text1=="⚽️ورزشی⚽️" && $stats == "soalvajavab"){           
    file_put_contents("data/$from_id/stats.txt","soalvajavab-varzeshi");
    $tedad = file_get_contents("database/soal-javab/varzeshi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/varzeshi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/varzeshi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/varzeshi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/varzeshi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/varzeshi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/varzeshi/$random/t5.txt");
    file_put_contents("data/$chat_id/javab.txt",$t5);
        bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id - 1
    ]);
      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"به بخش سوالات ورزشی خوش آمدید🍃
به سوالات زیر پاسخ بدید و یکی از گزینه های زیر رو انتخاب کنید
با هر جواب صحیح 10 امتیاز به شما افزوده میشه و با هر جواب غلط 5 امتیاز کم میشه🍁",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"برگشت به منوی اصلی🔙"]],

	],
		"resize_keyboard"=>true,
	 ])
	 ]);
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data == $javab && $stats2 == "soalvajavab-varzeshi"){          
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin + 10;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب درست بود +10 امتیاز",
                'show_alert' => false
            ]); 
             $tedad = file_get_contents("database/soal-javab/varzeshi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/varzeshi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/varzeshi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/varzeshi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/varzeshi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/varzeshi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/varzeshi/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
elseif($data !== $javab && $stats2 == "soalvajavab-varzeshi"){           
    file_put_contents("data/$chatid/javab.txt","none");
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid
    ]);
    $coin = file_get_contents("data/$chatid/score.txt");
            settype($coin,"integer");
          $newcoin = $coin - 5;
          save("data/$chatid/score.txt",$newcoin);
    bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "جواب غلط بود -5 امتیاز",
                'show_alert' => false
            ]); 
  $tedad = file_get_contents("database/soal-javab/varzeshi/count.txt");
    $random = rand(1,$tedad);
    $matn = file_get_contents("database/soal-javab/varzeshi/$random/text.txt");
    $t1 = file_get_contents("database/soal-javab/varzeshi/$random/t1.txt");
    $t2 = file_get_contents("database/soal-javab/varzeshi/$random/t2.txt");
    $t3 = file_get_contents("database/soal-javab/varzeshi/$random/t3.txt");
    $t4 = file_get_contents("database/soal-javab/varzeshi/$random/t4.txt");
    $t5 = file_get_contents("database/soal-javab/varzeshi/$random/t5.txt");
    file_put_contents("data/$chatid/javab.txt",$t5);
 bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>$matn,
       'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [
                            ['text' => "$t1", 'callback_data' => "t1"], ['text' => "$t2", 'callback_data' => "t2"]
                        ],
                        [
                            ['text' => "$t3", 'callback_data' => "t3"], ['text' => "$t4", 'callback_data' => "t4"]
                        ],
                    ]
                ])
            ]);}
 elseif($text1=="🏆کاربران برتر🏆"){
 $one = bestscore(0);
 $two = bestscore(1);
 $three = bestscore(2);
 $four = bestscore(3);
 $five = bestscore(4);
 $six = bestscore(5);
 $seven = bestscore(6);
 $eight = bestscore(7);
 $nine = bestscore(8);
 $ten = bestscore(9);
 $you = getrank($from_id,'score');
     bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لیست 10 کاربر برتر ربات در امتیاز🍁
 1️⃣ - [$one](tg://user?id=$one)
 2️⃣ - [$two](tg://user?id=$two)
3️⃣ - [$three](tg://user?id=$three)
 4️⃣ - [$four](tg://user?id=$four)
5️⃣ - [$five](tg://user?id=$five)
6️⃣- [$six](tg://user?id=$six)
 7️⃣ - [$seven](tg://user?id=$seven)
8️⃣ - [$eight](tg://user?id=$eight)
 9️⃣ - [$nine](tg://user?id=$nine)
1️⃣0️⃣ - [$ten](tg://user?id=$ten)

رتبه شما در ربات :
💎 $you",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text1=="👤پنل کاربری👤"){
    $scores = getrank($from_id,'score');
        bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"⌛️مشخصات اکانت شما⏳",
 'parse_mode'=>"MarkDown",
 	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
[
['text'=>"شناسه شما",'callback_data'=>"1"],['text'=>"$from_id",'callback_data'=>"1"]
],
[
['text'=>"امتیازات شما",'callback_data'=>"1"],['text'=>"$score1",'callback_data'=>"1"]
],
[
['text'=>"رتبه شما",'callback_data'=>"1"],['text'=>"$scores",'callback_data'=>"1"]
],
	]
	])
	]);
}
elseif($text1=="🎲راهنما🎲"){
       bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این یک بازی دوستانه 👬👭در محیط تلگرام هست که شما از طریق این ربات میتونید یک👤یا دو👥نفره  4جوابی بازی کنید و اطلاعات خودتون رو محک بزنید💫
در اخر هر روز هم به کسی که بیشترین سکه را دارد شماره مجازی روسیه و به طور رندوم یک نفر شارز 5تومنی  به عنوان جایزه🎁داده میشود .
و در اخر هر هفته 50تومن جایزه نفر اول میباشد.💰
❤️موفق باشید🌹",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text1=="🎯قوانین🎯"){
       bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"این یک بازی دوستانس پس  تقلب ممنوع🚫
هیچکدوم از سوال ها علیه هیچ نهاد و دین و مذهبی نیست❌
از ارسال پیام های بی ربط به ربات خود داری کنید.
هر گونه اسکی.پیام های توهین و تهدید آمیز پیگرد قانونی دارد👮
🇮🇷تحت قوانین جمهوری اسلامی🇮🇷",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text1=="👥بازی دو نفره👥"){
    file_put_contents("data/$chat_id/stats.txt","amadeon");
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"سلام دوست خوبم😊
از شما دعوت کردیم تا به بازی بیای و دونفره بازی کنید👥
هم اطلاعات عمومی خودتون رو محک بزنید😇📚
هم کل کل کنید🗣
شرط ببندید🤝
و تا 50هزارتومن💰 جایزه نقدی برنده شوید 😍
فورا با لینک زیر به بازی بیا و شانستو امتحان کن☺️
توجه ⚠️
حریف شما هم باید از قبل ربات رو استارت کنه و دکمه بازی دونفره رو انتخاب کنه
وقتی هر دوی شما در بازی روی بازی دو نفره کلیک کردید حالت شما آنلاین میشود و میتوانید با دادن لینک زیر به دوستتان بازی را شروع کنید❇️
راستی اگه نمیخوای با دوستت بازی کنی بزن رو دکمه برگشت🔚
https://telegram.me/[*[BOT]*]?start=$from_id",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"خروج از حالت آنلاین",'callback_data'=>"back"]
              ],
              ]
        ])
 ]);
}  
 elseif($text1=="/panel" && $chat_id == $admin){           
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ادمین عزیز به پنل مدیریت ربات خوش آمدید💎",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
[['text'=>"📝افزودن سوال📝"],['text'=>"⚠️اهدای سکه⚠️"]],
  [['text'=>"️💠فروارد همگانی💠"],['text'=>"💠ارسال همگانی💠"]],
  [['text'=>"👤آمار ربات👤"]],
  [['text'=>"برگشت به منوی اصلی🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}  
elseif($text1=="👤آمار ربات👤" && $chat_id == $admin ){ 
   $txtt = file_get_contents('Member.txt');
    $member_id = explode("\n",$txtt);
    $amar = count($member_id) -1;
     bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تعداد کل اعضای ربات $amar",
 'parse_mode'=>"MarkDown",
  ]);
}  
//-----------------------------------------
elseif($text1=="💠ارسال همگانی💠" && $chat_id == $admin ){           
     file_put_contents("data/$chat_id/stats.txt","send2all");
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ارسال به همه اعضا لطفا پیام خود را ارسال کنید💣",
 'parse_mode'=>"MarkDown",
  ]);
}  
elseif($chat_id == $admin && $stats == "send2all" ){  
    file_put_contents("data/$chat_id/stats.txt","none");
    $all_member = fopen( "Member.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
 			 bot('sendMessage',[
 'chat_id'=>$user,
 'text'=>$text1,
 'parse_mode'=>"MarkDown",
  ]);
}  }
elseif($text1=="️💠فروارد همگانی💠" && $chat_id == $admin ){           
     file_put_contents("data/$chat_id/stats.txt","f2all");
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای فروارد به همه اعضا لطفا پیام خود را فروارد کنید💣",
 'parse_mode'=>"MarkDown",
  ]);
}  
elseif($chat_id == $admin && $stats == "f2all" ){  
    file_put_contents("data/$chat_id/stats.txt","none");
    $all_member = fopen( "Member.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
ForwardMessage($user,$admin,$message_id);
		}    
		}
     //-------------------------------------------
 elseif($text1=="⚠️اهدای سکه⚠️" && $chat_id == $admin ){           
     file_put_contents("data/$chat_id/stats.txt","addcoin1");
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای اهدای سکه به یک کاربر لطفا آیدی عددی (شناسه) فرد را ارسال کنید💰",
 'parse_mode'=>"MarkDown",
  ]);
}  
elseif($chat_id == $admin && $stats == "addcoin1" ){  
    file_put_contents("data/$chat_id/stats.txt","addcoin2");
    file_put_contents("data/$chat_id/addso1.txt",$text1);
     bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"چه مقدار سکه به این فرد افزوده شود؟💸
لطفا مقدار را با اعداد لاتین ارسال کنید💎
مثلا
200",
 'parse_mode'=>"MarkDown",
  ]);
}  
elseif($chat_id == $admin && $stats == "addcoin2" ){  
    file_put_contents("data/$chat_id/stats.txt","addcoin3");
    $cont1 = file_get_contents("data/$addso1/score.txt");
            settype($cont1,"integer");
          $newcont = $cont1 + $text1;
     save("data/$addso1/score.txt",$newcont);
      bot('sendMessage',[
 'chat_id'=>$addso1,
 'text'=>"دوست عزیز تبریک💎
مقدار $text1 امتیاز از طرف مدیریت به شما اهدا شد⏳",
 'parse_mode'=>"MarkDown",
  ]);
   bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"مقدار $text1 امتیاز به $addso1 اهدا شد💎
تعداد امتیازات فرد تا کنون $newcont میباشد💸",
 'parse_mode'=>"MarkDown",
  'reply_markup'=>json_encode([
                    'keyboard'=>[
[['text'=>"📝افزودن سوال📝"],['text'=>"⚠️اهدای سکه⚠️"]],
  [['text'=>"️💠فروارد همگانی💠"],['text'=>"💠ارسال همگانی💠"]],
  [['text'=>"👤آمار ربات👤"]],
  [['text'=>"برگشت به منوی اصلی🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
  file_put_contents("data/$chat_id/stats.txt","none");
  file_put_contents("data/$chat_id/addso1.txt","none");
}  
//------------------------------------
 elseif($text1=="📝افزودن سوال📝" && $chat_id == $admin ){           
     file_put_contents("data/$chat_id/stats.txt","addsoal1");
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ادمین گرامی لطفا این متن را تا آخر بخوانید✨
در این بخش شما قادر به افزودن سوال به سوالات رباتتان هستید!🌤
بطوریکه شما ابتدا دسته بندی سوال را مشخص میکنید
بعد متن سوال🌟
سپس 4 گزینه برای سوال و در آخر جواب صحیح را مشخص میکنید تا به سوالات رباتتان افزوده شود💫
اگر قصد این کار را دارید روی دکمه تایید بزنید در غیر این صورت ما قادر به حذف سوال از دیتابیس نیستیم و شما میبایست از هاست اقدام به حذف سوالات اشتباه کنید🌈",
 'parse_mode'=>"MarkDown",
 'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"تایید"],['text'=>"برگشت به منوی اصلی🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}  
elseif($text1=="تایید" && $chat_id == $admin && $stats == "addsoal1" ){           file_put_contents("data/$chat_id/stats.txt","addsoal2");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"سوال شما در کدام دسته بندی سوالات قرار بگیرد؟❄️
از دکمه های زیر اقدام به تعیین آن کنید🌱
joghraphy : جغرافیا
mazhabi : مذهبی
omomi : عمومی
tarikhi : تاریخی
technology : تکنولوژی
varzeshi : ورزشی",
 'parse_mode'=>"MarkDown",
 'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"joghraphy"],['text'=>"mazhabi"]],
[['text'=>"omomi"],['text'=>"tarikhi"]],
[['text'=>"technology"],['text'=>"varzeshi"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}  
elseif($chat_id == $admin && $stats == "addsoal2" ){   
file_put_contents("data/$chat_id/stats.txt","addsoal3");
file_put_contents("data/$chat_id/addso1.txt",$text1);
 $cont1 = file_get_contents("database/soal-javab/$text1/count.txt");
            settype($cont1,"integer");
          $newcont = $cont1 + 1;
     save("data/$chat_id/addso2.txt",$newcont);
     save("database/soal-javab/$text1/count.txt",$newcont);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن اصلی پرسش را ارسال کنید💫
متن نباید خیلی بزرگ باشد❗️
میتواند شامل ایموجی باشد (✨)
نمونه :
زمین چند قاره دارد؟",
 'parse_mode'=>"MarkDown",
  ]);
}  
elseif($chat_id == $admin && $stats == "addsoal3" ){   
    file_put_contents("data/$chat_id/stats.txt","addsoal4");
mkdir("database/soal-javab/$addso1/$addso2");
file_put_contents("database/soal-javab/$addso1/$addso2/text.txt",$text1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خب حالا گزینه اول رو مشخص کنید🌟
سوال شما دارای 4 گزینه است که کاربر باید یکی را انتخاب کند!
متن نباید دارای ایموجی (✨) باشد🍃
متن باید یک الی دو کلمه باشد❄️
میتواند لاتین یا فارسی باشد🍁",
 'parse_mode'=>"MarkDown",
  ]);
}  
elseif($chat_id == $admin && $stats == "addsoal4" ){   
    file_put_contents("data/$chat_id/stats.txt","addsoal5");
    file_put_contents("database/soal-javab/$addso1/$addso2/t1.txt",$text1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خب حالا گزینه دوم رو مشخص کنید🌟
متن نباید دارای ایموجی (✨) باشد🍃
متن باید یک الی دو کلمه باشد❄️
میتواند لاتین یا فارسی باشد🍁",
 'parse_mode'=>"MarkDown",
  ]);
}  
    elseif($chat_id == $admin && $stats == "addsoal5" ){   
    file_put_contents("data/$chat_id/stats.txt","addsoal6");
    file_put_contents("database/soal-javab/$addso1/$addso2/t2.txt",$text1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خب حالا گزینه سوم رو مشخص کنید🌟
متن نباید دارای ایموجی (✨) باشد🍃
متن باید یک الی دو کلمه باشد❄️
میتواند لاتین یا فارسی باشد🍁",
 'parse_mode'=>"MarkDown",
  ]);
}  
elseif($chat_id == $admin && $stats == "addsoal6" ){   
    file_put_contents("data/$chat_id/stats.txt","addsoal7");
    file_put_contents("database/soal-javab/$addso1/$addso2/t3.txt",$text1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خب حالا گزینه چهارم رو مشخص کنید🌟
متن نباید دارای ایموجی (✨) باشد🍃
متن باید یک الی دو کلمه باشد❄️
میتواند لاتین یا فارسی باشد🍁",
 'parse_mode'=>"MarkDown",
  ]);
}  
   elseif($chat_id == $admin && $stats == "addsoal7" ){   
    file_put_contents("data/$chat_id/stats.txt","addsoal8");
    file_put_contents("database/soal-javab/$addso1/$addso2/t4.txt",$text1);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خب حالا مرحله آخر❗️❗️
کدام گزینه درست است؟
جواب را به این صورت ارسال کنید
t1
t2
t3
t4
بطور مثال اگر گزینه یک درست بود شما فقط باید عبارت t1 را ارسال کنید❗️
و اگر گزینه دو درست بود باید عبارت t2 را ارسال کنید❗️
به همین ترتیب تا گزینه چهارم😊",
 'parse_mode'=>"MarkDown",
  ]);
}   
    elseif($chat_id == $admin && $stats == "addsoal8" ){   
    file_put_contents("data/$chat_id/stats.txt","none");
    file_put_contents("database/soal-javab/$addso1/$addso2/t5.txt",$text1);
    file_put_contents("data/$chat_id/addso1.txt","none");
    file_put_contents("data/$chat_id/addso12.txt","none");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تبریک سوال شما به سوالات اضافه گردید🍁
اگر اشتباهی رخ داده و سوال اشتباهی اضافه شده میبایست به فایل منیجر هاست بروید و سوال را حذف کنید🌱",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
                    'keyboard'=>[
   [['text'=>"📝افزودن سوال📝"],['text'=>"⚠️اهدای سکه⚠️"]],
  [['text'=>"️💠فروارد همگانی💠"],['text'=>"💠ارسال همگانی💠"]],
  [['text'=>"👤آمار ربات👤"]],
  [['text'=>"برگشت به منوی اصلی🔙"]],
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