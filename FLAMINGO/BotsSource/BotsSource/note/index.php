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
define('API_KEY', '[*[TOKEN]*]');
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
//+++++++++++++++++++++++++++++++++++++++++++++++فانکشن
function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 }
function save($filename, $data)
{
    $file = fopen($filename, 'w');
    fwrite($file, $data);
    fclose($file);
}

//===========================================----متغیر ها
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$from_id = $message->from->id;
$firstname = $message->from->first_name;
$lastname = $message->from->last_name;
$username = $message->from->username;
$textmessage = $message->text;
$step = file_get_contents("data/$from_id/step.txt");
$btn = file_get_contents("data/$from_id/btnlist.txt");
$dex = file_get_contents("data/$from_id/dex.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//==================================
if($text == "📲 درباره ربات 📲"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات دفترچه یادداشت!",
 ]); 
}
if($text == "🗃 داشبورد 🗃"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
وضعیت شما : (✅)",
 'parse_mode'=>"html",
'disable_web_page_preview'=>true,
 ]); 
}
if($text == "حذف دکمه 🗄"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"⚠️ توجه برای حذف دکمه از روش زیر استفاده کنید با تشکر ⚠️
/delbtn نام دکمه
برای مثال 
/delbtn test",
 'parse_mode'=>"html",
'disable_web_page_preview'=>true,
 ]); 
}
if($text == "🗑 حذف 🗑"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به بخش حذف خوش اومدید : ",
 'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
 'resize_keyboard'=>true,
 'keyboard'=>[
 [['text'=>"حذف دکمه 🗄"],['text'=>"📜 حذف پاسخ دکمه 📜"]],
[['text'=>"برگشت 🔙"]]
 ]
 ])
 ]); 
}
if ($textmessage == '🖌 افزودن 🖌') {
    save("data/$from_id/step.txt","set txtbt");
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"موضوع یادداشت خود را وارد کنید»",
   'parse_mode'=>'MarkDown',
         'reply_markup'=>json_encode([
             'keyboard'=>[
    
                 [
                   ['text'=>'برگشت 🔙']
                ]
             ],
             'resize_keyboard'=>true
         ])
      ]));
 }
 
 
 if ($step == 'set txtbt') {
if($text!="برگشت 🔙"){
  save("data/$from_id/step.txt","set txtans");
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"یادداشت خود را ارسال کنید »",
   'parse_mode'=>'MarkDown',
         'reply_markup'=>json_encode([
             'keyboard'=>[
    
                 [
                   ['text'=>'برگشت 🔙']
                ]
             ],
             'resize_keybord'=>true
         ])
      ]));
   save("data/$from_id/$textmessaage.txt","Tarif Nashode !");
   save("data/$from_id/last_btn.txt",$textmessage);
 }}
 if ($step == 'set txtans') {
if($text!="برگشت 🔙"){
  save("data/$from_id/step.txt","none");
  
  $last = file_get_contents("data/$from_id/last_btn.txt");
   $myfile2 = fopen("data/$from_id/btnlist.txt", "a") or die("Unable to open file!"); 
   fwrite($myfile2, "$last\n");
   fclose($myfile2);
   save("data/$from_id/$last.txt","$textmessage");
  
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"یادداشت شما ساخته شد »",
   'parse_mode'=>'MarkDown',
         'reply_markup'=>json_encode([
             'keyboard'=>[
                 [
                   ['text'=>'برگشت 🔙']
                ]
             ],
             'resize_keyboard'=>true
         ])
      ]));
 }}

 if (file_exists("data/$from_id/$textmessage.txt")) {
  SendMessage($chat_id,file_get_contents("data/$from_id/$textmessage.txt"));
  
 }

if ($textmessage == '/start' or $textmessage == 'برگشت 🔙')
{    
if (!file_exists("data/$from_id/dex.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/dex.txt","none");
        $myfile2 = fopen("Member.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }
 $rt=[[['text'=>"📑 یادداشت های من 📑"],['text'=>"🖌 افزودن 🖌"]],
[['text'=>"🗑 حذف 🗑"],['text'=>"🗃 داشبورد 🗃"]],
[['text'=>"📲 درباره ربات 📲"]]];
if($bot_type != 'gold'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$adstext,
]);
}
var_dump(bot('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'text'=>"سلام به ربات {مخ کلاس} خوش اومدید 😊
در این ربات میتونید برنامه های خود را به ترتیب یادداشت کنید ، و کلی امکانات جالب دیگه ☺️ ",
        'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
          'reply_markup'=>json_encode([
        'keyboard'=>$rt
,'resize_keyboard'=>true
])
    ]));
}
if ($textmessage == '📑 یادداشت های من 📑')
{    
$bbt = file_get_contents("data/$from_id/btnlist.txt");
    $ok = explode("\n",$bbt);
    $book = count($ok) -1;
 $bory = file_get_contents("data/$from_id/btnlist.txt");
$ttx = explode("\n",$bory);
 $rt=[[['text'=>"برگشت 🔙"]]];
 for ($po=0;$po<=count($ttx);$po++){
    $name = $ttx["$po"];
    $rt[] = [['text'=>"$name"]]; }


var_dump(bot('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'text'=>"اینم لیست چیز هایی که شما درست کرده بودید به شرح زیر میباشد 🔔
تعداد یادداشت ها : $book",
        'parse_mode'=>'html',
'disable_web_page_preview'=>true,
          'reply_markup'=>json_encode([
        'keyboard'=>$rt
,'resize_keyboard'=>true
])
    ]));
}
		elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
elseif($text == "📜 حذف پاسخ دکمه 📜"){
  file_put_contents("data/$from_id/step.txt","del");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"برای حذف مطلب دکمه خود نام دکمه مورد نظر را ارسال نمایید : 
مثال : مخ کلاس",
        'reply_markup'=>json_encode([
              'keyboard'=>[
      [
        ['text'=>"برگشت 🔙"]
                ]
           ],
              'resize_keyboard'=>true
           ])
  ]);   
}
elseif($step == "del"){
if($text!="برگشت 🔙"){
file_put_contents("data/$from_id/step.txt","none");
  bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"پاسخ بالا با موفقیت حذف گردید ☝️",
 ]);
unlink("data/$from_id/$text.txt");
}}
if (strpos($textmessage , "/delbtn" ) !== false ) {
$text = str_replace("/delbtn ","",$textmessage);
			$newlist = str_replace("$text\n","",$btn);
			save("data/$from_id/btnlist.txt",$newlist);
SendMessage($chat_id,"دکمه با نام زیر با موفقیت حذف گردید !
$text");
}
elseif($text == "آمار"){
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	sendmessage($chat_id , " آمار کاربران : $member_count" , "html");
}
unlink("error_log");
?>
