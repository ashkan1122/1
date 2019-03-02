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
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$chatid = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
mkdir("data/$from_id");
$message_id = $message->message_id;
$text1 = $message->text;
$admin = [*[ADMIN]*];
$data = $update->callback_query->data;
$matn = file_get_contents("data/$from_id/matn.txt");
$step = file_get_contents("data/$from_id/step.txt");
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
 //------------
 if($text1=="/start"){
    if(file_exists("data/$from_id/step.txt")) {
		file_put_contents("data/$from_id/step.txt","none");
			 if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"سلام به ربات مترجم طلائی خوشامدی✨
متن یا کلمه مورد نظرتون رو بفرستید تا ترجمه کنم :🌐",
 'parse_mode'=>"HTML",
	 ]);}  
  else{
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/step.txt","none");
        $myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!");
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
 'text'=>"سلام به ربات مترجم طلائی خوشامدی✨
متن یا کلمه مورد نظرتون رو بفرستید تا ترجمه کنم :🌐",
 'parse_mode'=>"HTML",
	 ]);
 }}
 //--------
		if(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text1)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
 //--------
 elseif($text1 !== "/start" && $step == "none"){
     $edited = str_replace(" ","+",$text1);
	 file_put_contents("data/$from_id/matn.txt",$edited);
	 if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
	  bot('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'reply_to_message_id'=>$message_id,
        'text'=>"خب متن شما به کدام زبان ترجمه شود؟",
        'parse_mode'=>'MarkDown',
     'reply_markup' => json_encode([
                         'inline_keyboard' => [
                        [['text' => "🇮🇷فارسی", 'callback_data' => "farsi"], ['text' => "🇬🇧انگلیسی", 'callback_data' => "english"]],
                        [['text' => "🇦🇪عربی", 'callback_data' => "arabic"], ['text' => "🇷🇺روسی", 'callback_data' => "russi"]],
						[['text' => "🇫🇷فرانسوی", 'callback_data' => "farance"], ['text' => "🇩🇪آلمانی", 'callback_data' => "germany"]],
						[['text' => "🇨🇳چینی", 'callback_data' => "chini"], ['text' => "🇯🇵ژاپنی", 'callback_data' => "japoni"]],
						[['text' => "🇪🇸اسپانیایی", 'callback_data' => "espani"]],
                    ]
                ])
 ]);}
 //--------
 elseif($data == "espani"){
	 $txt=file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=es&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 //--------
 elseif($data == "germany"){
	 $txt=file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=de&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 //--------
 elseif($data == "japoni"){
	 $txt=file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ja&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 //--------
 elseif($data == "chini"){
	 $txt=file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=zh&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 //--------
 elseif($data == "arabic"){
	 $txt=file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ar&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 //--------
 elseif($data == "russi"){
	 $txt=file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ru&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 //--------
 elseif($data == "farance"){
	 $txt=file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fr&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 //--------
  elseif($data == "english"){
	  $txt=file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 //--------
 elseif($data == "farsi"){
$txt = file_get_contents("data/$chatid/matn.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
 bot('sendMessage',[
 'chat_id'=>$chatid,
 'text'=>$text,
 'parse_mode'=>"HTML",
 ]);}
 unlink("error_log");
 ?>
