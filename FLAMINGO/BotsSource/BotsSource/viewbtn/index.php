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
[['text'=>'↩️منوی اصلی']],
[['text'=>'📪پیام همگانی'],['text'=>'📮فوروارد همگانی'],['text'=>'📊آمار']],
[['text'=>'🆚سکه به کاربر'],['text'=>'💰سکه همگانی'],['text'=>'🆓تعیین کد رایگان']],
[['text'=>'ثبت نفرات برتر هفته🎗'],['text'=>'ثبت  متن بنر چالش👘'],['text'=>'نفرات برتر🔆']],
[['text'=>'☣️تنظیم متن قوانین'],['text'=>'🔖پیگیری سفارش']],
[['text'=>'❌بلاک کردن کاربر'],['text'=>'✅آنبلاک کردن کاربر']],
],'resize_keyboard'=>true]);
$button_official = json_encode(['keyboard'=>[
[['text'=>'🗨دریافت بازدید رایگان📢']],
[['text'=>'🔕قوانین و مقررات'],['text'=>'🗺فروشگاه'],['text'=>'📡انتقال سکه']],
[['text'=>'👥حساب کاربری'],['text'=>'✅ثبت تبلیغ'],['text'=>'💶کد رایگان']],
[['text'=>'💳پیگیری سفارشات'],['text'=>'⭕️زیرمجموعه گیری'],['text'=>'🗳ارتباط با ما']],
[['text'=>'افزایش بازدید فوری⏰'],['text'=>'نفرات برتر هفته🎓'],['text'=>'👑چالش']],
],'resize_keyboard'=>true]);
$button_back = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
],'resize_keyboard'=>true]);
$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->message->from->id;
$frmid = $update->callback_query->from->id;
$ffirst = $update->callback_query->from->first_name;
$userrr = $update->callback_query->from->username;
$messageid = $update->callback_query->message->message_id;
$data_id = $update->callback_query->id;
$txt = $update->callback_query->message->text;
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$from_username = $update->message->from->username;
$from_first = $update->message->from->first_name;
$forward_id = $update->message->forward_from->id;
$forward = $update->message->forward_from;
$forward_chat = $update->message->forward_from_chat;
$forward_chat_username = $update->message->forward_from_chat->username;
$forward_chat_msg_id = $update->message->forward_from_message_id;
$text = $update->message->text;
$message_id = $update->message->message_id;
$stickerid = $update->message->sticker->file_id;
$videoid = $update->message->video->file_id;
$voiceid = $update->message->voice->file_id;
$fileid = $update->message->document->file_id;
$photo = $update->message->photo;
$photoid = $photo[count($photo)-1]->file_id;
$musicid = $update->message->audio->file_id;
$caption = $update->message->caption;
$reply = $update->message->reply_to_message->forward_from->id;
$reply_username = $update->message->reply_to_message->forward_from->username;
$reply_first = $update->message->reply_to_message->forward_from->first_name;
$cde = time();
$code = "$from_id$cde";
$txthelp = file_get_contents("admin/help.txt");
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$command = file_get_contents('user/'.$from_id."/command.txt");
$gold = file_get_contents('user/'.$from_id."/gold.txt");
$coin = file_get_contents('user/'.$from_id."/coin.txt");
$wait = file_get_contents('user/'.$from_id."/wait.txt");
$coin_wait = file_get_contents('user/'.$wait."/coin.txt");
$pay = file_get_contents('user/'.$from_id."/pay.txt");
$tr = file_get_contents('user/'.$from_id."/tr.txt");
$nmber = file_get_contents('user/'.$from_id."/nmber.txt");
$tarikh = file_get_contents('user/'.$from_id."/tarikh.txt");
$spam = file_get_contents('user/'.$from_id."/spam.txt");
$bartar = file_get_contents("admin/bartar.txt");
$zirseke = file_get_contents('user/'.$from_id."/zirseke.txt");
if($zirseke == null){$zirseke = "0";}
$bazco = file_get_contents('user/'.$from_id."/bazco.txt");
if($bazco == null){$bazco = "0";}
$porseke = file_get_contents('user/'.$from_id."/porseke.txt");
if($porseke == null){$porseke = "0";}
$tabno = file_get_contents('user/'.$from_id."/tabno.txt");
if($tabno == null){$tabno = "0";}
$tabok = file_get_contents('user/'.$from_id."/tabok.txt");
if($tabok == null){$tabok = "0";}
$karbarpor = file_get_contents('user/'.$from_id."/karbarpor.txt");
if($karbarpor == null){$karbarpor = "0";}
$gozaresh = file_get_contents('user/'.$from_id."/gozaresh.txt");
if($gozaresh == null){$gozaresh = "0";}
$Member = file_get_contents('admin/Member.txt');
$NZR = file_get_contents('admin/NZR.txt');
$Tedad_Nazar = file_get_contents('admin/Tedad Nazar.txt');
$ads = file_get_contents('ads/Ads.txt');
$ads_end = file_get_contents('ads/Ads End.txt');
$ads_all = file_get_contents('ads/Ads All.txt');
$datestart=file_get_contents('user/'.$from_id.'/datestart.txt',"$date");
$timestart=file_get_contents('user/'.$from_id.'/timestart.txt',"$time");
$dt = json_decode(file_get_contents("http://api.mostafa-am.ir/date-time/"));
$banner = file_get_contents("admin/matnbanner.txt");
$date = $dt->date_fa;
$time = $dt->time_fa;
$block = file_get_contents('admin/block.txt');
$blacklist = file_get_contents("admin/blacklist.txt");
$channel= "[*[CHENNEL]*]";
$token= "[*[TOKEN]*]";
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $truechannel->result->status;


// start source
   if (strpos($blacklist, "$from_id")) {
        SendMessage($chat_id, "هی کاربر عزیز شما از سرور ما بلاک شدید  دیگه پیام ندید با تشکر");
   }
   elseif($text == '↩️منوی اصلی' || preg_match('/^\/([Cc]ancel)/',$text)){
  file_put_contents('user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"↩️ شما به منوی اصلی برگشتید","html","true",$button_official);
  }
   elseif(preg_match('/^\/([Ss]tart)(.*)/',$text)){
    preg_match('/^\/([Ss]tart)(.*)/',$text,$match);
    $match[2] = str_replace(" ","",$match[2]);
    $match[2] = str_replace("\n","",$match[2]);
    if($match[2] != null){
    if (strpos($Member , "$from_id") == false){
    if($match[2] != $from_id){
    if (strpos($gold , "$from_id") == false){
    $txxt = file_get_contents('user/'.$match[2]."/gold.txt");
    $pmembersid= explode("\n",$txxt);
    if (!in_array($from_id,$pmembersid)){
      $aaddd = file_get_contents('user/'.$match[2]."/gold.txt");
      $aaddd .= $from_id."\n";
        file_put_contents('user/'.$match[2]."/gold.txt",$aaddd);
    }
    $mtch2 = file_get_contents('user/'.file_get_contents("user/".$match[2]."/zir.txt")."/coin.txt");
    file_put_contents("user/".file_get_contents("user/".$match[2]."/zir.txt")."/coin.txt",($mtch2+2) );
    $mtch = file_get_contents('user/'.$match[2]."/coin.txt");
    file_put_contents("user/".$match[2]."/coin.txt",($mtch+10) );
    file_put_contents("user/".$from_id."/zir.txt",$match[2]);
    file_put_contents('user/'.$match[2]."/zirseke.txt",(file_get_contents('user/'.$match[2]."/zirseke.txt")+10));
    $mtch3 = file_get_contents('user/'.file_get_contents("user/".$match[2]."/zir.txt")."/porseke.txt");
    file_put_contents("user/".file_get_contents("user/".$match[2]."/zir.txt")."/porseke.txt",($mtch3+2) );
    $mtch4 = file_get_contents('user/'.file_get_contents("user/".$match[2]."/zir.txt")."/karbarpor.txt");
    file_put_contents("user/".file_get_contents("user/".$match[2]."/zir.txt")."/karbarpor.txt",($mtch4+1) );
    SendMessage($match[2],"🆕 یک نفر با لینک اختصاصی شما وارد ربات شد.","html","true");
    }
    }
    }
    }
    SendMessage($chat_id,"📍 سلام به ربات افزایش بازدید پست های تلگرامی با کاربران واقعی خوش اومدی

👈 نحوه کار:
▪️ پست های تلگرامی به شما نمایش داده میشن، شما با بازدید از اونا سکه دریافت میکنید و با همون سکه ها میتونید پستتون رو به معرض نمایش بزارین.

🔸 با این ربات در چالشهای تلگرامی میتونید بازدید پست اختصاصی خود را بالا ببرید و از رقبا پیشی بگیرید.

🆔 $Channel","html","true",$button_official);
    } 
      elseif($tarikh != date("YMDm")){
      file_put_contents('user/'.$from_id."/coin.txt",($coin+10));
      file_put_contents('user/'.$from_id."/tarikh.txt",date("YMDm") );
      SendMessage($chat_id,"$name  عزیز برای فعالیت امروزت در ربات بازدیدگیر 10 سکه هدیه گرفتی 😍🌿","html","true");
  }
    elseif($text == '🗨دریافت بازدید رایگان📢'){
   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "به بخش دریافت سکه رایگان خوش آمدید
در این جا به ازای هر تبلیغی که مشاهده میکنید 1 سکه دریافت میکنید، سپس میتونید با استفاده از سکه هایی که دارید از بخش ثبت تبلیغ در ربات تبلیغ خودتون که میتونه شامل پست کانال یا چالش باشه رو اضافه کنید.

👈 دو روش برای جمع آوری سکه وجود دارد:

1️⃣ مشاهده تبلیغ درون ربات: با استفاده از بخش میتوانید در ربات با زدن یک دکمه یک تبلیغ ببینید و در نتیجه یک سکه جمع کنید؛ گاهی این روش به دلیل محدودیت های تلگرام بین 10 تا 40 دقیقه غیرفعال و سپس به طور خودکار فعال میشود.

2️⃣ مشاهده تبلیغ درون کانال: در این روش شما در یک کانال تبلیغ ها را مشاهده میکنید و سپس با زدن دکمه ثبت بازدید زیر هر پست، یک سکه دریافت میکنید؛ این روش محدودیت روش اول را ندارد و همواره در دسترس است.

یک روش را برای ورود و جمع آوری سکه انتخاب کنید: ",
            'reply_markup' => json_encode([
                'keyboard' => [
                   
                    [
                        ['text' => '☢️جمع آوری سکه رایگان در ربات' ],['text' => '📣جمع آوری سکه رایگان در کانال']
                    ],
                    [
                        ['text' => "↩️منوی اصلی"]
                    ]
                ],
                'resize_keyboard'=>true
            ])
            
        ]); 
  }
  elseif($text == '☢جمع آوری سکه رایگان در ربات'){
  file_put_contents('user/'.$from_id."/rand.txt",null);
  $all_member = fopen( "ads/Ads.txt", 'r');
        while( !feof( $all_member)) {
             $user = fgets( $all_member);
            $user = str_replace(" ",'',$user);
            $user = str_replace("\n",'',$user);
            $adn = file_get_contents("ads/ads admin/$user.txt");
            $tl = file_get_contents("ads/ads tally/$user.txt");
            $ex = explode("\n",$tl);
            if(!in_array($from_id,$ex) && $user != null && $user != '' && $user != "\n" && $from_id != $adn){
            file_put_contents('user/'.$from_id."/rand.txt",$user);
            break;
            }else{
            file_put_contents('user/'.$from_id."/rand.txt",null);
            }
        }
        $rand = file_get_contents("user/".$from_id."/rand.txt");
  if($rand == null){
  SendMessage($chat_id,"☢ دوست عزیز تبلیغی پیدا نشد. لطفا دوباره امتحان کنید:","html","true");
  file_put_contents("user/$from_id/tr.txt","$tr\ntrue" );
  }else{
  file_put_contents('user/'.$from_id."/bazco.txt",($bazco+1));
  $msg_id = file_get_contents("ads/ads msg id/$rand.txt");
  $msg_user = file_get_contents("ads/ads username/$rand.txt");
  ForwardMessage($chat_id,$msg_user,$msg_id);
  file_put_contents("user/$from_id/coin.txt",($coin + 1) );
   $usr = file_get_contents("ads/ads tally/$rand.txt");
    $pmembersid = explode("\n",$usr);
    if (!in_array($from_id,$pmembersid)){
        $aaddd = file_get_contents("ads/ads tally/$rand.txt");
        $aaddd .= $from_id."\n";
        file_put_contents("ads/ads tally/$rand.txt",$aaddd);
    }
    $member_id = explode("\n",$usr);
    $mmemcount = count($member_id);
    $tdd = file_get_contents("ads/ads tedad/$rand.txt");
    if($mmemcount >= $tdd){
       bot('deleteMessage',[
'chat_id'=>$Channel,
'message_id'=>$messageid
]);
    bot('deleteMessage',[
'chat_id'=>$Channel,
'message_id'=>$messageid -1
]);
    SendMessage($adn,"☢ سفارش تبلیغ با کد پیگیری $rand در $date | $time تموم شد.","html","true");
    file_put_contents("ads/ads ok/$rand.txt",'اتمام');
    file_put_contents("ads/Ads End.txt","$ads_end\n$rand");
    file_put_contents("ads/ads end/$rand.txt","$date | $time");
    file_put_contents("ads/ads etmam/$rand.txt","true");
    $str = str_replace("$rand\n",'',$ads);
    $str = str_replace("\n\n","\n",$ads);
    $str = str_replace("\n$rand",'',$ads);
    $str = str_replace("$rand",'',$ads);
    file_put_contents("ads/Ads.txt",$str);
    }
    }
  }
      elseif($text == '📣جمع آوری سکه رایگان در کانال'){
  SendMessage($chat_id,"✅ شما با رفتن به کانال ما و زدن روی دکمه (ثبت بازدید) میتونید بازدید رو ثبت کنید و سکه مورد نظر رو همون موقع دریافت کنید.","html","true",json_encode(['inline_keyboard'=>[
[['text'=>'📣 رفتن به کانال مورد نظر','url'=>"http://t.me/".str_replace("@",'',$Channel)]],
],
'resize_keyboard'=>true
]
));
  }
  elseif($text == '🔕قوانین و مقررات'){
  SendMessage($chat_id,"$txthelp","html","true",$button_official);
  }
  elseif($text == '🗺فروشگاه'){
   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "فروشگاه ربات بازدید گیر تیاک
برای خرید هر یک ار گزینه های زیر به ادمین زیر مراجعه کرده و سفارش خود را انجام دهید به ازای هر ۵۰۰۰ تومان خرید ۲۰۰۰ سکه جایزه بگیرید \n
 @[*[SUP]*]
⚪️ایدی عددی شما : $chat_id",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "1000 سکه | 1000تومان", 'url' => "telegram.me/[*[SUP]*]"]
                    ],
                    [
                        ['text' => "2000 سکه | 2000تومان", 'url' => "telegram.me/[*[SUP]*]"]
                    ],
                    [
                        ['text' => "3000 سکه | 3000تومان", 'url' => "telegram.me/[*[SUP]*]"]
                    ],
                        [
                        ['text' => "4000 سکه | 4000تومان", 'url' => "telegram.me/[*[SUP]*]"]
                    ],
                ]
            ])
            
        ]); 
  }
  elseif($text == '📡انتقال سکه'){
        if($coin < 40){
  SendMessage($chat_id,"🌱حداقل سکه برای انتقال 40 سکه میباشد.","html","true");
  }else{
  file_put_contents('user/'.$from_id."/command.txt","send coin");
  SendMessage($chat_id,"↕️ شماره کاربری مقصد رو وارد کنید:","html","true",$button_back);
  }
  }
  elseif($command == 'send coin'){
  $explode = explode("\n",$Member);
  if($text != $from_id && in_array($text,$explode)){
  file_put_contents('user/'.$from_id."/command.txt","send coin2");
  file_put_contents('user/'.$from_id."/wait.txt",$text);
  SendMessage($chat_id,"↕️ مقدار سکه شما: $coin
  ↕️ میخواهید چه تعداد سکه انتقال بدید:","html","true",$button_back);
  }else{
  SendMessage($chat_id,"↕️ شناسه کاربری نا معتبره یا شناسه کاربری خودتون رو وارد کردید","html","true",$button_back);
  }
  }
  elseif($command == 'send coin2'){
  if(preg_match('/^([0-9])/',$text)){
  if($text > $coin){
  SendMessage($chat_id,"↕️ مقدار سکه شما $coin میباشد.
  ↕️ به اندازه سکه خودتون میتونید انتقال بدید","html","true",$button_back);
  }else{
  file_put_contents("user/$wait/coin.txt",($coin_wait+$text) );
  file_put_contents("user/$from_id/coin.txt",($coin-$text) );
  file_put_contents('user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"↕️ مقدار $text به $wait انتقال داده شد.","html","true",$button_official);
  }
  }else{
  SendMessage($chat_id,"↕️ لطفا عددی وارد کنید","html","true",$button_back);
  }
  }
  elseif($text == '👥حساب کاربری'){
  $member_id = explode("\n",$gold);
  $mmemcount = count($member_id) -1;
  $member_id2 = explode("\n",$pay);
  $mmemcount2 = count($member_id2) -1;
  SendMessage($chat_id,"👥حساب کاربری
  📅 تاریخ عضویت:  <b>$datestart</b>
  🕧 ساعت عضویت:  <b>$timestart</b>
  💰 موجودی شما تا این لحظه: <b>$coin</b> سکه
  💌تعداد سکه از زیر مجموعه اضافه شده: <code>$zirseke</code>
  ‼️تعداد سکه بازدید از پست ها: <code>$bazco</code>
  👑تعداد سکه بدست اومده از پورسانت: <code>$porseke</code>
  ⛄️تعداد تبلیغات رد شده: <code>$tabno</code>
  ❄️تعداد تبلیغات تایید شده: <code>$tabok</code>
  🏙تعداد کاربران عضو شده توسط پورسانت: <code>$karbarpor</code>
  📍تعداد گزارش شده پست های شما: <code>$gozaresh</code>
  🔢 شماره کاربری شما: <code>$from_id</code>
  🔖 تعداد زیر مجموعه های شما: <code>$mmemcount</code> نفر
  🗳 کل تبلیغات ثبت شده توسط شما: <code>$mmemcount2</code> عدد\n \n","html","true",$button_official);
  }
  elseif($text == '✅ثبت تبلیغ'){
  if($coin < 20){
  SendMessage($chat_id,"✅ حداقل سکه برای سفارش تبلیغ 20 سکه میباشد.","html","true");
  }else{
  file_put_contents('user/'.$from_id."/command.txt","set ads");
  if( ($coin%2) == 0){
  $coin = $coin;
  }else{
  $coin = $coin-1;
  }
  $cn = $coin ;
  $btn = [];
  $btn[] = [['text'=>"↩️منوی اصلی"]];
  if($cn >= 10){ $btn[] = [['text'=>'10 بازدید / 10 سکه']]; }
  if($cn >= 20){ $btn[] = [['text'=>'20 بازدید / 20 سکه']]; }
  if($cn >= 50){ $btn[] = [['text'=>'50 بازدید / 50 سکه']]; }
  if($cn >= 100){ $btn[] = [['text'=>'100 بازدید / 100 سکه']]; }
  if($cn >= 200){ $btn[] = [['text'=>'200 بازدید / 200 سکه']]; }
  if($cn >= 300){ $btn[] = [['text'=>'300 بازدید / 300 سکه']]; }
  if($cn >= 400){ $btn[] = [['text'=>'400 بازدید / 400 سکه']]; }
  if($cn >= 500){ $btn[] = [['text'=>'500 بازدید / 500 سکه']]; }
  
  SendMessage($chat_id,"✅ یکی از بسته های زیر رو انتخاب کنید","html","true",json_encode(['keyboard'=>$btn,'resize_keyboard'=>true]));
  }
  }
  //===============
  elseif($command == 'set ads'){
  if( ($coin%2) == 0){
  $coin = $coin;
  }else{
  $coin = $coin-1;
  }
  $cn = $coin; 
  if($text == "10 بازدید / 10 سکه" and $cn >= 10){
  file_put_contents('user/'.$from_id."/wait.txt",10);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 10 بازدید رو انتخاب کردید
  ✅ با توجه به قوانین پیام مورد نظر رو از یک کانال  فوروارد کنید","html","true",$button_back);
  }
  elseif($text == "20 بازدید / 20 سکه" and $cn >= 20){
  file_put_contents('user/'.$from_id."/wait.txt",20);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 20 بازدید رو انتخاب کردید
  ✅ با توجه به قوانین پیام مورد نظر رو از یک کانال  فوروارد کنید","html","true",$button_back);
  }
  elseif($text == "50 بازدید / 50 سکه" and $cn >= 50){
  file_put_contents('user/'.$from_id."/wait.txt",50);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 50 بازدید رو انتخاب کردید
  ✅ با توجه به قوانین پیام مورد نظر رو از یک کانال  فوروارد کنید","html","true",$button_back);
  }
  elseif($text == "100 بازدید / 100 سکه" and $cn >= 100){
  file_put_contents('user/'.$from_id."/wait.txt",100);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 100 بازدید رو انتخاب کردید
  ✅ با توجه به قوانین پیام مورد نظر رو از یک کانال  فوروارد کنید","html","true",$button_back);
  }
  elseif($text == "200 بازدید / 200 سکه" and $cn >= 200){
  file_put_contents('user/'.$from_id."/wait.txt",200);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 200 بازدید رو انتخاب کردید
  ✅ با توجه به قوانین پیام مورد نظر رو از یک کانال  فوروارد کنید","html","true",$button_back);
  }
  elseif($text == "300 بازدید / 300 سکه" and $cn >= 300){
  file_put_contents('user/'.$from_id."/wait.txt",300);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 300 بازدید رو انتخاب کردید
  ✅ با توجه به قوانین پیام مورد نظر رو از یک کانال  فوروارد کنید","html","true",$button_back);
  }
  elseif($text == "400 بازدید / 400 سکه" and $cn >= 400){
  file_put_contents('user/'.$from_id."/wait.txt",400);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 400 بازدید رو انتخاب کردید
  ✅ با توجه به قوانین پیام مورد نظر رو از یک کانال  فوروارد کنید","html","true",$button_back);
  }
  elseif($text == "500 بازدید / 500 سکه" and $cn >= 500){
  file_put_contents('user/'.$from_id."/wait.txt",500);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 500 بازدید رو انتخاب کردید
  ✅ با توجه به قوانین پیام مورد نظر رو از یک کانال  فوروارد کنید","html","true",$button_back);
  }
  else{
  SendMessage($chat_id,"✅ لطفا یکی از بسته های باز شده رو انتخاب کنید","html","true");
  }
  }
  //===============
  elseif($command == 'set ads2'){
  $cd = $code;
  if($forward_chat != null || $forward != null){
      $cdo = file_get_contents("ads/ads log/@$forward_chat_username|$forward_chat_msg_id.txt");
  file_put_contents('user/'.$from_id."/command.txt","none");
  file_put_contents('user/'.$from_id."/pay.txt","$pay\n🔖 $cd");
  file_put_contents("ads/ads msg id/$cd.txt",$message_id);
  file_put_contents("ads/ads tedad/$cd.txt",$wait);
  file_put_contents("ads/ads username/$cd.txt",$from_id);
  file_put_contents("ads/ads log/@$forward_chat_username|$forward_chat_msg_id.txt",$cd);
  file_put_contents("ads/ads tally/$cd.txt",'');
  file_put_contents("ads/ads ok/$cd.txt",'در انتظار تایید مدیران...');
  file_put_contents("ads/Ads All.txt","$cd\n$ads_all");
  file_put_contents("ads/ads admin/$cd.txt",$from_id);
  file_put_contents("ads/ads start/$cd.txt","$date | $time");
  file_put_contents("user/$from_id/coin.txt",($coin - ($wait)) );
  $coin2=file_get_contents('user/'.$from_id."/wait.txt");
  bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "⁉️ آیا مایل به ثبت تبلیغ فوق به میزان $coin2 بازدید هستید؟" ,
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
            'inline_keyboard'=> [
                    [
                         ['text' => "✅ بله", 'callback_data'=>"taiid|$from_id|$cd"] 
                         ]
                    ],
                    
            ])
        ]);                     
  }else{
  SendMessage($chat_id,"بنر به درستی ارسال نشده است!!","html","true");
  }
  }
  elseif($text == '💶کد رایگان'){
 file_put_contents('user/'.$from_id."/command.txt","free code");
  SendMessage($chat_id,"▪️ کد مورد نظر رو وارد کنید:","html","true",$button_back);
  }
  elseif($command == 'free code'){
  if(file_exists("admin/code/$text.txt")){
  $cde = file_get_contents("admin/code/$text.txt");
  if($cde == 'true'){
  SendMessage($chat_id,"▪️ این کد قبلا استفاده شده است.","html","true",$button_official);
  }else{
  SendMessage("@Samyar2016","➖➖➖➖➖➖➖➖➖
کد با موفقیت استفاده شد✅
⏰ ساعت ↙️
⏰ <d> $time </d>
📆تاریخ↙️
📆$date
🔶🔷🔶🔷🔶🔷🔶🔷🔶

👤 توسط 
👤Name: 
$name
💠
🆔Username: 
@$username
💠

🌐UserID: 
$from_id
💠
💰سکه های دریافت شده↙️
🔆$cde
➖➖➖➖➖➖➖➖➖
  🤖 @mfbazdid_bot
  🆔 @Rebazdid_info","html","true");
  file_put_contents('user/'.$from_id."/coin.txt",($coin+$cde));
  file_put_contents("admin/code/$text.txt",'true');
  SendMessage($chat_id,"▪️ مقدار $cde سکه به شما اضافه شد.","html","true",$button_official);
  }
  }else{
  SendMessage($chat_id,"▪️ کد مورد نظر وجود ندارد","html","true",$button_official);
  }
  file_put_contents('user/'.$from_id."/command.txt","none");
  }
   elseif($text == '💳پیگیری سفارشات'){
  if($pay == null){
  SendMessage($chat_id,"📇 شما تا به حال هیچ سفارشی نداشتید","html","true");
  }else{
  file_put_contents('user/'.$from_id."/command.txt","pay");
  $exp = explode("\n",$pay);
  $bttn = [];
  $bttn[] = [['text'=>"↩️منوی اصلی"]];
  foreach($exp as $explode){
  $bttn[] = [['text'=>$explode]];
  }
  SendMessage($chat_id,"📇 یکی از سفارش هاتون رو انتخاب کنید","html","true",json_encode(['keyboard'=>$bttn,'resize_keyboard'=>true]));
  }
  }
  elseif($command == 'pay'){
  $text = str_replace("🔖",'',$text);
  $text = str_replace(" ",'',$text);
  if(file_exists("ads/ads admin/$text.txt")){
  $fl = file_get_contents("ads/ads admin/$text.txt");
  if($from_id == $fl){
  $ed = file_get_contents("ads/ads end/$text.txt");
  $sta = file_get_contents("ads/ads start/$text.txt");
  $tdad = file_get_contents("ads/ads tedad/$text.txt");
  $tlly = file_get_contents("ads/ads tally/$text.txt");
  $msg_id = file_get_contents("ads/ads msg id/$text.txt");
  $msg_user = file_get_contents("ads/ads username/$text.txt");
  ForwardMessage($chat_id,$msg_user,$msg_id);
  $ej = file_get_contents("ads/ads ok/$text.txt");
  if($ej == 'تایید نشده'){
  $ej2 = file_get_contents("ads/ads rad/$text.txt");
  $ej3 = file_get_contents("ads/ads ok/$text.txt");
  $ej = "توسط مدیران تایید نشده\n💢بدلیل: $ej2";
  }
  $member_id = explode("\n",$tlly);
  $mmemcount = count($member_id)-1;
  if($ed == null or $ed == " | "){
  $ed = "---";
  }
  if($sta == null){
  $sta = "---";
  }
  SendMessage($chat_id,"⭕️کد پیگیری:
$text

📈 وضعیت: $ej
📜زمان شروع: $sta
📆زمان اتمام: $ed
🔢 مقدار سفارش: <b>$tdad</b>
⤵️ مقدار دریافتی: <b>$mmemcount</b>","html","true");
  }else{
  SendMessage($chat_id,"📇 شما این پست رو سفارش ندادین","html","true");
  }
  }else{
  SendMessage($chat_id,"📇 کد نا معتبر است","html","true");
  }
  }
  elseif($text == '⭕️زیرمجموعه گیری'){
  $member_id = explode("\n",$gold);
  $mmemcount = count($member_id) -1;
  SendMessage($chat_id,"خیلی آسون چالش هارو برنده بشید، یازدید پست هاتون رو بالا ببرین و ممبر های کانالتون رو زیاد کنید😎
  حتما ربات بازدید بگیر رو تست کنید !
  http://telegram.me/$UserNameBot?start=$from_id","html","true",$button_official);
  SendMessage($chat_id,"⭕️ با انتشار پست بالا ، به ازای هر فردی که با لینک شما به ربات دعوت شود، 10 سکه به حساب شما اضافه خواهد شد.
  
  🎗 لینک اختصاصی شما:
  🌐 http://telegram.me/$UserNameBot?start=$from_id
  
  🔖 تعداد زیرمجموعه های شما: <b>$mmemcount</b>","html","true",$button_official);
  }
  elseif($text == '🗳ارتباط با ما'){ 
  file_put_contents('user/'.$from_id."/command.txt","contact");
  SendMessage($chat_id,"پیامتون رو درقالب یک متن ارسال کنید تا جواب شما داده شود ✅","html","true",$button_back);
  }
  elseif($command == 'contact'){
  if($text){
  file_put_contents('user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"🌱برای ادمین ارسال شد بزودی جواب میدن🌱","html","true",$button_official);
  if($from_username == null){
  $from_username = '---';
  }else{
  $from_username = "@$from_username";
  }
  SendMessage($admin,"
🎋ادمین گرامی شخصی با این مشخصات  پیامی ارسال کرد 🎋:
📪یوزر ایدی  : <code>$from_id</code>

🌹 نام کاربر : <code>$from_first</code>

🗜 یوزر نیم کاربر : <code>$from_username</code>

🌱متن درخاست : <code>$text</code>","html","true",$button_nza);
  file_put_contents("admin/Tedad Nazar.txt","$Tedad_Nazar\n$from_id");
  }else{
  SendMessage($chat_id,"فقط متن","html","true",$button_back);
  }
  }
   elseif($text == 'افزایش بازدید فوری⏰'){
   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "در اینجا میتوانید  با سرعت عالی بازدید پست های خود را افزایش دهید
⚪️ایدی عددی شما : $chat_id",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                      [
                        ['text' => "1000 بازدید | 2000تومان", 'url' => "telegram.me/[*[SUP]*]"]
                    ],
                    [
                        ['text' => "2000 بازدید | 4000تومان", 'url' => "telegram.me/[*[SUP]*]"]
                    ],
                    [
                        ['text' => "3000 بازدید | 6000تومان", 'url' => "telegram.me/[*[SUP]*]"]
                    ],
                        [
                        ['text' => "4000 بازدید | 8000تومان", 'url' => "telegram.me/[*[SUP]*]"]
                    ],
                ]
            ])
            
        ]); 
  }
  elseif($text == 'نفرات برتر هفته🎓'){
if($bartar!=""){
$bartar = file_get_contents("admin/bartar.txt");
   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "$bartar",
            
        ]); 
  }
  else

   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "نفرات برتری بیدا نشدند",
            
        ]); 
}

elseif($text == '👑چالش'){
   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "در اینجا میتونید چالش خود را ثبت کنید ابتدا از دکمه ی دریافت بنر بنر خود را تحویل گرفته  و ویرایش کنید سبس در قسمت فرستادن بنر واسه ی ما بفرستید",
            'reply_markup' => json_encode([
                'keyboard' => [
                   
                    [
                        ['text' => '✅دریافت بنر' ],['text' => '🌀ارسال بنر']
                    ],
                    [
                        ['text' => "↩️منوی اصلی"]
                    ]
                   
                ],
              'resize_keyboard'=>true
            ])
            
        ]); 
  }


elseif($text == '✅دریافت بنر'){
if($banner!=""){
$banner = file_get_contents("admin/matnbanner.txt");
   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "$banner",
            
        ]);

}else   
bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "هنوز بنری توسط ادمین گذاشته نشده است",
            
        ]);

  }

elseif($text == '🌀ارسال بنر'){
   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "لطفا بنر خود را ارسال کنید",
            
        ]);
file_put_contents('user/'.$from_id."/command.txt","sendbanner");
}
elseif($command=="sendbanner"){
file_put_contents('user/'.$from_id."/command.txt","none");
                bot('ForwardMessage', [
                'chat_id' => $chat_id,
                'text' => "بنر شما با موفقیت دریافت شد لطفا منتظر تایید از سمت مدیران باشید",
               
            ]);
   
  ForwardMessage($admin,$chat_id,$message_id);
                bot('SendMessage', [
                'chat_id' => $admin,
                'text' => "یک بنر چالش تبلیغاتی دریافت شد لطفا آن را در کانال بذارید"
            ]);
  }

    elseif (strpos($block , "$from_id") !== false) {
    return false;
    }
    elseif ($from_id != $chat_id and $chat_id != $feed) {
    LeaveChat($chat_id);
    }
    //---------------
    elseif (strpos($data , "gogo-") !== false) {
    $data = str_replace("gogo-",'',$data);
    $adn = file_get_contents("ads/ads admin/$ex[2].txt");
    if($adn == $frmid){
    AnswerCallbackQuery($data_id,'شما ادمین پست هستید نمیتوانید برای پست خود گزارش بزنید.');
    }else{
    file_put_contents('user/'.$adn."/gozaresh.txt",(file_get_contents('user/'.$adn."/gozaresh.txt")+1));
    SendMessage($admin,"❌ شخصی با این مشخصات گزارش کرده است :
💌ایدی  :  <code>$frmid</code> 
🔰نام کاربر :  <code>$ffirst</code> 
📍یوزرنیم کاربر :  <code>@$userrr</code> 
👾ساعت ارسال شده پست:  <code>$time</code>
🐞تاریخ ارسال شده پست : <code>$date</code>
🐳کد پیگیری پست : <code>$data</code>
‼️این پست را گزارش کرده است👇👇

👁پست : http://telegram.me/dev_pixel/".($messageid-1)."
👣خواهشا رسیدگی کنید ","html","true");
    AnswerCallbackQuery($data_id,'گزارش در حال پیگیری میباشد. الکی گزارش کنید بلاک خواهید شد');
    }
    }
    //-----------------
      elseif (strpos($data , "sabtbazdid-") !== false) {
    $data = str_replace("sabtbazdid-",'',$data);
    $adn = file_get_contents("ads/ads admin/$data.txt");
    $usr = file_get_contents("ads/ads tally/$data.txt");
    $pmembersid = explode("\n",$usr);
    $member_id = explode("\n",$usr);
    $mmemcount = count($member_id);
    $tdd = file_get_contents("ads/ads tedad/$data.txt");
    if($adn == $frmid){
    AnswerCallbackQuery($data_id,'شما ادمین این پست هستید.');
    }
    elseif(in_array($frmid,$pmembersid)){
    AnswerCallbackQuery($data_id,'شما قبلا از این پست دیدن کرده اید.');
    }
    else{
    if (!in_array($frmid,$pmembersid)){
    $aaddd = file_get_contents("ads/ads tally/$data.txt");
    $aaddd .= $frmid."\n";
    file_put_contents("ads/ads tally/$data.txt",$aaddd);
    }
    $coin=file_get_contents("user/$frmid/coin.txt");
    bot('AnswerCallbackQuery', [
    'callback_query_id' => $update->callback_query->id,
    'text' => "بازدید شما ثبت شد | موجودی جدید :$coin",
    'show_alert' => false
            ]);

file_put_contents('user/'.$frmid."/bazco.txt",($bazco+1));
file_put_contents("user/$frmid/coin.txt",(file_get_contents("user/$frmid/coin.txt") + 1) );
    if($mmemcount >= $tdd){
    bot('deleteMessage',[
'chat_id'=>$Channel,
'message_id'=>$messageid
]);
    bot('deleteMessage',[
'chat_id'=>$Channel,
'message_id'=>$messageid -1
]);
    SendMessage($adn,"☢ سفارش تبلیغ با کد پیگیری $data در $date | $time تموم شد.","html","true");
    file_put_contents("ads/ads ok/$data.txt",'اتمام');
    file_put_contents("ads/Ads End.txt","$ads_end\n$data");
    file_put_contents("ads/ads end/$data.txt","$date | $time");
    file_put_contents("ads/ads etmam/$data.txt","true");
    $str = str_replace("$data\n",'',$ads);
    $str = str_replace("\n\n","\n",$ads);
    $str = str_replace("\n$data",'',$ads);
    $str = str_replace("$data",'',$ads);
    file_put_contents("ads/Ads.txt",$str);
     unlink('data/'.$chat_id."/$msgids.txt");
    }
    }
    }
    elseif($data){
    $ex = explode("|",$data);
    if($ex[0] == 'taiid'){  
    $txxt = file_get_contents('ads/Ads.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($ex[2],$pmembersid)){
      $aaddd = file_get_contents('ads/Ads.txt');
      $aaddd .= $ex[2]."\n";
        file_put_contents('ads/Ads.txt',$aaddd);
    }
      $cd = $code;
     $coco = file_get_contents("ads/ads tedad/$ex[2].txt");
    unlink("ads/ads etmam/$ex[2].txt");
    $msg_id = file_get_contents("ads/ads msg id/$ex[2].txt");
    $msg_user = file_get_contents("ads/ads username/$ex[2].txt");
    $for = bot('ForwardMessage',['chat_id'=>$Channel,'from_chat_id'=>$msg_user,'message_id'=>$msg_id]);
    bot('sendMessage',[
    'chat_id'=>$Channel,
    'text'=>"🔘👆👇👆👇👆👇  $coco  👆👇👆👇👆👇. \n  🦂ساعت : <code> $time </code>\n🌴تاریخ : <code> $date </code>\n \n",
    'parse_mode'=>"html",
    'reply_to_message_id'=>$for->result->message_id,
    'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'✅ ثبت بازدید','callback_data'=>"sabtbazdid-$ex[2]"],['text'=>'‼️گزارش','callback_data'=>"gogo-$ex[2]"],['text'=>'🎗ورود به ربات🎗','url'=>"http://t.me/mfbazdid_bot"]] 
    ],'resize_keyboard'=>true])
    ]);
     $ap12=$for->result->message_id;
     @$al = file_get_contents("data/$chat_id/ted.txt");
     file_put_contents("ads/ads MsgId/$ex[2].txt",$for->result->message_id);
                                         
 
    AnswerCallbackQuery($data_id,'✅ پست مورد نظر تایید شد');
    file_put_contents("ads/ads ok/$ex[2].txt",'در حال اجرا...');
    file_put_contents('user/'.$ex[1]."/tabok.txt",(file_get_contents('user/'.$ex[1]."/tabok.txt")+1));
        bot('EditMessageText',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
       'text'=>"خوب کاربر گرامی تبلیغ ‌شما با موفقیت در کانال ما ثبت شد😊 
    ✔️مشخصات تبلیغ شما:
    🗓کد پیگیری : $ex[2]
    👁‍🗨تعداد بازدید : $coco
    ساعت درخواست بازدید :$time 
    📅تاریخ  : $date
    ✂️تعداد سکه های کم شده : $coco
    📎پست شما در کانال ما :
    http://telegram.me/rebazdid_info/$msg_id" ,
    
    'parse_mode'=>"html",
    ]);
    }

   }
    
  //===============

/*elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
 bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"با سلام😊👋

💠برای استفاده از  ربات باید در کانال ما عضو شوید تا از اخبار ها مطلع شوید.

💠پس از عضو شدن دوباره به ربات مراجعه و دستور زیر را ارسال کنید.

🎗 /start 🎗",
 'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    ['text'=>"ورود به کانال",'url'=>"https://telegram.me/Retiak_info"]
                ]
            ]
        ])
    ]);
}
*/     

  //===============


  

  //===============
  elseif($text == '/panel' and $from_id == $admin){
  SendMessage($chat_id,"به پنل مدیریت خوش اومدی:","html","true",$button_manage);
  }


elseif($text == 'ثبت  متن بنر چالش👘' and $from_id == $admin){
  file_put_contents("user/".$from_id."/command.txt","matnbanner");
  SendMessage($chat_id,"لطفا بنر را ارسال کنید","html","true",$button_back);
  }


  elseif($text == 'نفرات برتر🔆' and $from_id == $admin){
$members = file_get_contents('Member.txt');
    $members_arr = explode("\n",$members);
     for($y=0;$y<count($members_arr);$y++){
          $coin = file_get_contents("user/$members_arr[$y]/coin.txt");
         $bartarinfo = bot('GetChat',[
            'chat_id'=>$members_arr[$y]
         ])->result;
         $bartar_fname = $bartarinfo->first_name;
         $bartar_lname = $bartarinfo->last_name;
         $bartar_user = $bartarinfo->username;
         $bartar_id = $bartarinfo->id;

         if($coin>500){
             file_put_contents("admin/bartarfirst.txt",$bartar_fname);
             file_put_contents("admin/bartarlast.txt",$bartar_lname);
             file_put_contents("admin/bartarusername.txt",$bartar_user);
             file_put_contents("admin/bartarid.txt",$bartar_id);
         }
       }
  }

 
elseif($command == 'matnbanner' and $from_id == $admin){
file_put_contents("admin/matnbanner.txt","$text");
  SendMessage($chat_id,"متن بنر با موفقیت ذخیره شد هم اکنون در دکمه ی دریافت بنر قرار گرفته است","html","true",$button_back);
  }
elseif($text == 'ثبت نفرات برتر هفته🎗' and $from_id == $admin){
  file_put_contents("user/".$from_id."/command.txt","bartar");
  SendMessage($chat_id,"لطفا نفرات برتر هفته را به صورت لیست وارد کنید","html","true",$button_back);
  }
elseif($command == 'bartar' and $from_id == $admin){
  file_put_contents("admin/bartar.txt","$text");
  SendMessage($chat_id,"لیست نفرات برتر با موفقیت ذخیره شد هم اکنون در دکمه ی لیست نفرات برتر قرار گرفته است","html","true",$button_back);
  }

  elseif($text == '📊آمار' and $from_id == $admin){  
    $txtt = file_get_contents('admin/Member.txt');
    $member_id = explode("\n",$txtt);
    $mmemcount = count($member_id) -1;

    $bots = file_get_contents("admin/UserName.txt");
    $exbot = explode("@",$bots);
    $c = count($exbot)-2;
    $botsss = '';
    if($exbot[$c-(-1)] != null){
    $botsss = $botsss."@".$exbot[$c-(-1)];
    }if($exbot[$c] != null){
    $botsss = $botsss."@".$exbot[$c];
    }if($exbot[$c-1] != null){
    $botsss = $botsss."@".$exbot[$c-1];
    }if($exbot[$c-2] != null){
    $botsss = $botsss."@".$exbot[$c-2];
    }if($exbot[$c-3] != null){
    $botsss = $botsss."@".$exbot[$c-3];
    }if($exbot[$c-4] != null){
    $botsss = $botsss."@".$exbot[$c-4];
    }if($exbot[$c-5] != null){
    $botsss = $botsss."@".$exbot[$c-5];
    }if($exbot[$c-6] != null){
    $botsss = $botsss."@".$exbot[$c-6];
    }if($exbot[$c-7] != null){
    $botsss = $botsss."@".$exbot[$c-7];
    }if($exbot[$c-8] != null){
    $botsss = $botsss."@".$exbot[$c-8];
    }
    $botsss = str_replace("\n",' | ',$botsss);
  SendMessage($chat_id,"👥 اعضا ربات: $mmemcount
  
  🅾 اعضا جدید:
  $botsss","html","true");
  }
elseif($text == '🔖پیگیری سفارش' and $from_id == $admin){
  file_put_contents("user/".$from_id."/command.txt","pay admn");
  SendMessage($chat_id,"🔖 کد سفارش و وارد کنید:","html","true",$button_back);
  }
  elseif($command == 'pay admn' and $from_id == $admin){
  file_put_contents("user/".$from_id."/command.txt","none");
  if(file_exists("ads/ads admin/$text.txt")){
  $ed = file_get_contents("ads/ads end/$text.txt");
  $sta = file_get_contents("ads/ads start/$text.txt");
  $tdad = file_get_contents("ads/ads tedad/$text.txt");
  $tlly = file_get_contents("ads/ads tally/$text.txt");
  $msg_id = file_get_contents("ads/ads msg id/$text.txt");
  $msg_user = file_get_contents("ads/ads username/$text.txt");
  ForwardMessage($chat_id,$msg_user,$msg_id);
  $ej = file_get_contents("ads/ads ok/$text.txt");
  if($ej == 'تایید نشده'){
  $ej2 = file_get_contents("ads/ads rad/$text.txt");
  $ej3 = file_get_contents("ads/ads ok/$text.txt");
  $ej = "توسط مدیران تایید نشده\n💢بدلیل: $ej2";
  }
  $member_id = explode("\n",$tlly);
  $mmemcount = count($member_id)-1;
 if($ed == null or $ed == " | "){
  $ed = "---";
  }
  if($sta == null){
  $sta = "---";
  }
  SendMessage($chat_id,"⭕️کد پیگیری:
$text

📈 وضعیت: $ej
📜زمان شروع: $sta
📆زمان اتمام: $ed
🔢 مقدار سفارش: <b>$tdad</b>
⤵️ مقدار دریافتی: <b>$mmemcount</b>","html","true");
  }else{
  SendMessage($chat_id,"🔖 کد نا معتبر است.","html","true");
  }
  }
    elseif($text == '💰سکه همگانی' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","s2a seke");
    SendMessage($chat_id,"💰 مقدار سکه مورد نظر رو وارد کنید:","html","true",$button_back);
    }
    elseif($command == 's2a seke' and $from_id == $admin){
    if(preg_match('/^([0-9])/',$text)){
    file_put_contents("user/".$from_id."/command.txt","none");
    SendMessage($chat_id,"💰 مقدار سکه به زودی به همه اضافه میشود.","html","true",$button_manage);
    $all_member = fopen( "admin/Member.txt", 'r');
        while( !feof( $all_member)) {
             $user = fgets( $all_member);
            $user = str_replace(" ",'',$user);
            $user = str_replace("\n",'',$user);
            
            $cn = file_get_contents('user/'.$user."/coin.txt");
            file_put_contents('user/'.$user."/coin.txt",($cn+$text) );
            
        }
        SendMessage($chat_id,"💰 تعداد $text سکه به همه اعضا اضافه شد.","html","true");
    }else{
    SendMessage($chat_id,"💰 لطفا به عدد وارد کنید در غیر اینصورت مشکل بزرگی پیش خواهد آمد.","html","true",$button_back);
    }
    }
    
  elseif($text == '📮فوروارد همگانی' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","s2a fwd");
    SendMessage($chat_id,"📮 پیام مورد نظر را فوروارد کنید:","html","true",$button_back);
    }
    elseif($command == 's2a fwd' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","none");
    SendMessage($chat_id,"📮 پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
    $all_member = fopen( "admin/Member.txt", 'r');
        while( !feof( $all_member)) {
             $user = fgets( $all_member);
            ForwardMessage($user,$admin,$message_id);
        }
    }
    ////================
  elseif($text == "☣️تنظیم متن قوانین" && $from_id == $admin){
 save("user/$from_id/command.txt","sethelptxt");
 sendMessage($chat_id,"لطفا متن قوانین رو ارسال کنید","html","true",$button_back);
}elseif($command == "sethelptxt"){
 save("user/$from_id/command.txt","none");
 save("admin/help.txt",$text);
 sendmessage($chat_id,"قوانین ثبت شد.","html","true",$button_manage);
}
  //=========
  
  elseif($text == '🆓تعیین کد رایگان' and $from_id == $admin){
  file_put_contents('user/'.$from_id."/command.txt","code free2");
  SendMessage($chat_id,"🆓 کد مورد نظر رو وارد کنید:","html","true",$button_back);
  }
  elseif($command == 'code free2' and $from_id == $admin){
  file_put_contents("user/".$from_id."/wait.txt",$text);
  file_put_contents("user/".$from_id."/command.txt","code free3");
  SendMessage($chat_id,"🆓 مقدار سکه رو وارد کنید:","html","true",$button_manage);
  }
  elseif($command == 'code free3' and $from_id == $admin){
  file_put_contents("user/".$from_id."/command.txt","none");
  file_put_contents("admin/code/$wait.txt",$text);
  SendMessage("@Rebazdid_info","➖➖➖➖➖➖➖➖➖➖➖➖
🔶کد جدید ساخته شد✔️


🏷کد⬅️: 
<code>$wait</code>

🎈تعداد سکه: 
💰 <code>$text</code>
➖➖➖➖➖➖➖➖➖➖➖➖
هرکی زود کد بالا رو داخل  ربات 

 @mfbazdid_bot
در بخش ▪️کد رایگان بزنه برندست🌀😍

🎈ساعت◀️ $time

🎈تاریخ◀️ $date","html","true");
  }
   elseif ($text == "🆚سکه به کاربر") {
        file_put_contents('user/'.$from_id."/command.txt","sendcoin");  
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "خوب ایدی عددی کاربر را بفرست️",
        ]);
    } elseif ($command == 'sendcoin') {
        file_put_contents("admin/idsendcoin.txt", $text);
        file_put_contents('user/'.$from_id."/command.txt","sendcoin2"); 
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "ادمین گرامی لطفا تعداد سکه ها را مشخص کنید",
            'parse_mode' => "html"
        ]);
    } elseif ($command == 'sendcoin2') {
    $idsendcoin = file_get_contents("admin/idsendcoin.txt");
          $fle = file_get_contents("user/$idsendcoin/coin.txt");
               $getshe = $fle + $text;
                file_put_contents("user/$idsendcoin/coin.txt", $getshe);
         file_put_contents('user/'.$from_id."/command.txt",""); 
        bot('sendMessage', [
            'chat_id' => $idsendcoin,
            'text' => "دوست گرامی
از طرف مدیریت ربات  تعداد $text سکه به حساب شما واریز شد😊",
        ]);
        bot('sendMessage', [
                    'chat_id' => $chat_id,
            'text' => "با موفقیت فرستاده شد",
        ]);
    }
     elseif ($text == "❌بلاک کردن کاربر") {
                 file_put_contents('user/'.$from_id."/command.txt","idblock");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "خب ایدی عددیشو بفرست تا از ربات بلاک شه",
        ]);
    } elseif ($command == 'idblock') {
        $myfile2 = fopen("admin/blacklist.txt", 'a') or die("Unable to open file!");
        fwrite($myfile2, "$text\n");
        fclose($myfile2);
        file_put_contents('user/'.$from_id."/command.txt","");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => " با موفقیت بلاکش کردم😤
 ایدیش هم 
 $text ",
            'parse_mode' => "html",
        ]);
    }
     elseif ($text == "✅آنبلاک کردن کاربر") {
        file_put_contents('user/'.$from_id."/command.txt","idunblock");
        bot('sendMessage', [
            'chat_id' => $chat_id,

            'text' => "خوب  بخشیدی حالا . ایدی عددیشو بده تا انبلاکش کنم😕",
        ]);
    } elseif ($command == 'idunblock') {
        $newlist = str_replace($text, "", $blacklist);
        file_put_contents("admin/blacklist.txt", $newlist);
        file_put_contents('user/'.$from_id."/command.txt","");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "حله انبلاک کردمش
 ایدیش هم 
 $text ",
        ]);
    } 
    elseif($text == '📪پیام همگانی' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","s2a");
    SendMessage($chat_id,"📪 پیامتون رو وارد کنید:","html","true",$button_back);
    }
    elseif($command == 's2a' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","none");
    SendMessage($chat_id,"📪 پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
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
            SendMessage($user,$text,"html","true",$button_official);
            }
        }
    }
  // End Source

  if(!file_exists('user/'.$from_id)){
  mkdir('user/'.$from_id);
  }
  if(!file_exists('user/'.$from_id."/coin.txt")){
  file_put_contents('user/'.$from_id."/coin.txt","20");
  }
  if(!file_exists('user/'.$from_id."/nmber.txt")){
  file_put_contents('user/'.$from_id."/nmber.txt","0");
  }
  $txxt = file_get_contents('admin/Member.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('admin/Member.txt');
      $aaddd .= $chat_id."\n";
        file_put_contents('admin/Member.txt',$aaddd);
    }
    $txxt = file_get_contents('admin/UserName.txt');
    $txxt = file_get_contents('admin/UserName.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array("@$from_username",$pmembersid)){
      $aaddd = file_get_contents('admin/UserName.txt');
      $aaddd .= "@$from_username"."\n";
      if($from_username != null){
        file_put_contents('admin/UserName.txt',$aaddd);
    }
    }
       unlink("error_log");
    ?>

