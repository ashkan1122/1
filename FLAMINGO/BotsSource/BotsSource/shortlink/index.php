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
function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 } 
 function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
//-//////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//---------------//
if($text == '/start'){
	 if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"سلام
لینک خودتون رو بفرستید تا کوتاه کنم",
 'parse_mode'=>"MarkDown"
 ]);
}
elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
	}
elseif($text != "/creator"){
$danial = json_decode(file_get_contents("http://api.beyond-dev.ir/shortLink?url=$text"));
    $public = objectToArrays($danial);
    $link1 = $public['results']['google'];
    $link2 = $public["results"]["opizo"];
    $link3 = $public["results"]["yon"];
    $link4 = $public["results"]["llink"];
    $link5 = $public["results"]["bitly"];
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"

لینک یک:$link1
لینک دو:$link2
لینک سه:$link3
لینک چهار:$link4
لینک پنج:$link5",
 'parse_mode'=>"MarkDown"
  ]);
}
unlink('error_log');
?>