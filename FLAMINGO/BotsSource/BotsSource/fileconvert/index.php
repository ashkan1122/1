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

$API_KEY = '[*[TOKEN]*]';
##------------------------------##
define('API_KEY',$API_KEY);
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
 function sendmessage($chat_id, $text, $model){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode
 ]);
 }
 function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption, $title ,$performer){
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 'title'=>$title,
 'performer'=>$performer
 ]);
 }
 function senddocument($chat_id, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
 function sendsticker($chat_id, $sticker){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$sticker
 ]);
 }
 function sendvideo($chat_id, $video, $caption){
 bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>$video,
 'caption'=>$caption
 ]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption
 ]);
 }
 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
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
//======================================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->userame;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$fromid = $update->callback_query->message->from->id;
$reply = $update->message->reply_to_message;
$ali = file_get_contents("ali.txt");
$ADMIN = [*[ADMIN]*];
$bot_type = file_get_contents("data/bottype.txt");
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
//=======================================//
if(preg_match('/^\/([Ss]tart)/',$text)){
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }
if($bot_type != 'gold'){
		bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>$adstext,
		]);
	}
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" Hi My Friend

Welcome To Core Convertor",
                'parse_mode'=>$mode,
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Convertor📌",'callback_data'=>"a"],['text'=>"Help📎",'callback_data'=>"b"]
              ]
              ]
        ])
            ]);
        }

  
  
//====================================//

 elseif($text == "/panel" && $from_id == $ADMIN){

        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"ادمین عزیز به پنل مدیریتی ربات خودش امدید",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"آمار"],['text'=>"پیام همگانی"]
              ],
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "آمار" && $from_id == $ADMIN){
 sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
 sendmessage($chat_id , " آمار کاربران : $member_count" , "html");
}
elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$text1)){
	bot ('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$creator_cmd,
		]);
}
elseif($text == "پیام همگانی" && $from_id == $ADMIN){
    file_put_contents("ali.txt","bc");
 sendaction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام مورد نظر رو در قالب متن بفرستید:",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
   [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "bc" && $from_id == $ADMIN){
    file_put_contents("ali.txt","none");
 SendAction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام همگانی فرستاده شد.",
  ]);
 $all_member = fopen( "Member.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
   SendMessage($user,$text,"html");
  }
}

//====================telfire======================//
elseif($data == "b"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"telfire

Help

تبدیل عکس به استیکر و بر عکس

  تبدیل ویس به آهنگ و بر عکس 

 تبدیل فیلم به گیف 

 تبدیل فیلم به اهنگ

 تبدیل متن به ویس فقط انگلیسی ساپورت میشه

 تبدیل متن به عکس
 
 تبدیل متن به استیکر

ما رو به دوستاتون معرفی کنید",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"ab"]
              ]
              ]
        ])
 ]);
}
elseif($data == "ab"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"Hi New Member😊

Hi Welcome To Core Convertor",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
             [
              ['text'=>"Convertor📌",'callback_data'=>"a"],['text'=>"Help📎",'callback_data'=>"b"]
              ]
              ]
        ])
 ]);
}
elseif($data == "a"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🎊خوب به بخش تبدیل خوش اومدی🎊

 خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Convert To Photo",'callback_data'=>"c"],['text'=>"Convert To Vedio",'callback_data'=>"d"]
              ],
              [
              ['text'=>"Convert To Music",'callback_data'=>"e"],['text'=>"Convert To Text",'callback_data'=>"g"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🎊خوب به بخش تبدیل خوش اومدی🎊

 خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Convert To Photo",'callback_data'=>"c"],['text'=>"Convert To Vedio",'callback_data'=>"d"]
              ],
              [
              ['text'=>"Convert To Music",'callback_data'=>"e"],['text'=>"Convert Text",'callback_data'=>"g"]
              ]
              ]
        ])
 ]);
}

//========================================//
elseif($data == "c"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب به بخش تبدیل عکس خوش اومدی

حالا بخش مورذ نظرتو انتخاب کن ",
 'parse_mode'=>"MarkDown",
     'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
            ['text'=>"Photo To File",'callback_data'=>"c1"],['text'=>"File To Photo",'callback_data'=>"c2"]
            ],
             [
            ['text'=>"Sticker To Photo",'callback_data'=>"c3"],['text'=>"Photo To Sticker",'callback_data'=>"c4"]
            ],
             [
            ['text'=>"Sticker To File",'callback_data'=>"c5"],['text'=>"File To Sticker",'callback_data'=>"c6"]
            ],
            [
              ['text'=>"Back◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back2"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🎊خوب به بخش تبدیل خوش اومدی🎊

خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
     'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
            ['text'=>"Photo To File",'callback_data'=>"c1"],['text'=>"File To Photo",'callback_data'=>"c2"]
            ],
             [
            ['text'=>"Sticker To Photo",'callback_data'=>"c3"],['text'=>"Photo To Sticker",'callback_data'=>"c4"]
            ],
             [
            ['text'=>"Sticker To File",'callback_data'=>"c5"],['text'=>"File To Sticker",'callback_data'=>"c6"]
            ],
            [
              ['text'=>"Back◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c1"){
file_put_contents("ali.txt","c1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز عکس خودتون را بفرستید تا تبدیل به فایلش کنم🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c2"){
file_put_contents("ali.txt","c2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز فایل خودتون را بفرستید تا تبدیل به عکسش کنم🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c3"){
file_put_contents("ali.txt","c3");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز استیکر خودتون را بفرستید تا تبدیل به عکسش کنم🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c4"){
file_put_contents("ali.txt","c4");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز عکس خودتون را بفرستید تا تبدیل به استیکر کنم🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c5"){
file_put_contents("ali.txt","c5");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز استیکر خودتون را بفرستید تا تبدیل به فایل png کنمش🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c6"){
file_put_contents("ali.txt","c6");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز فایل png خودتون را بفرستید تا تبدیل به  استیکر کنمش🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "c1"){
file_put_contents("ali.txt","none");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('telfire.png'),
 ]);
unlink('telfire.png');
}
elseif($ali == "c2"){
file_put_contents("ali.txt","none");
$document = $message->document;
$file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('telfire.png'),
 ]);
unlink('telfire.png');
 }
elseif($ali == "c3"){
file_put_contents("ali.txt","none");
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('telfire.png'),
 ]);
unlink('telfire.png');
 }
elseif($ali == "c4"){
file_put_contents("ali.txt","none");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('telfire.png'),
 ]);
unlink('telfire.png');
}
elseif($ali == "c5"){
file_put_contents("ali.txt","none");
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('telfire.png'),
 ]);
unlink('telfire.png');
 }
 elseif($ali == "c6"){
 file_put_contents("ali.txt","none");
$document = $message->document;
$file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('telfire.png'),
 ]);
unlink('telfire.png');
 }
//====================video======================//
elseif($data == "d"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوش اومدی به بخش تبدیل فیلم🎥

خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"Vedio To Music",'callback_data'=>"d1"],['text'=>"Vedio To Gif",'callback_data'=>"d2"]
            ],
              [
              ['text'=>"Back◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back3"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوش اومدی به بخش تبدیل فیلم🎥

خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"Vedio To Music",'callback_data'=>"d1"],['text'=>"Vedio To Gif",'callback_data'=>"d2"]
            ],
              [
              ['text'=>"Back◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "d1"){
file_put_contents("ali.txt","d1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز فیلم خودتون را بفرستید تا تبدیل به  اهنگ کنمش🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back3"]
              ]
              ]
        ])
 ]);
}
elseif($data == "d2"){
file_put_contents("ali.txt","d2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز فیلم خودتون را بفرستید تا تبدیل به  گیف کنمش🤓😉",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back3"]
              ]
              ]
        ])
 ]);
}
elseif($data == "d3"){
file_put_contents("ali.txt","d3");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز فایل خودتون را بفرستید تا تبدیل به  فیلم کنمش🤓😉",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back3"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "d1"){
 file_put_contents("ali.txt","none");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>new CURLFile('telfire.mp3'),
 ]);
 }
 elseif($ali == "d2"){
 file_put_contents("ali.txt","none");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.gif',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('telfire.gif'),
 ]);
unlink('telfire.gif');
 }
//====================audio======================//
elseif($data == "e"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوش اومدی به بخش تبدیل اهنگ🎷

خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"Voice To Music",'callback_data'=>"e1"],['text'=>"Music To Voice",'callback_data'=>"e2"]
            ],
              [
              ['text'=>"Back◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back4"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوش اومدی به بخش تبدیل اهنگ🎷

خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"Voice To Music",'callback_data'=>"e1"],['text'=>"Music To Voice",'callback_data'=>"e2"]
            ],
              [
              ['text'=>"Back◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "e1"){
file_put_contents("ali.txt","e1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز ویس خودتون را بفرستید تا تبدیل به  آهنگ کنمش🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back4"]
              ]
              ]
        ])
 ]);
}
elseif($data == "e2"){
file_put_contents("ali.txt","e2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز اهنگ خودتون را بفرستید تا تبدیل به  ویس کنمش🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back4"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "e1"){
 file_put_contents("ali.txt","none");
$voice = $message->voice;
$file = $voice->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>new CURLFile('telfire.mp3'),
 ]);
unlink('telfire.mp3');
 }
elseif($ali == "e2"){
 file_put_contents("ali.txt","none");
$audio = $message->audio;
$file = $audio->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('telfire.ogg',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>new CURLFile('telfire.ogg'),
 ]);
unlink('telfire.ogg');
 }
//====================text======================//
elseif($data == "g"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوش اومدی به بخش تبدیل متن✒️

خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                        [
            ['text'=>"Text To Sticker",'callback_data'=>"g1"],['text'=>"Text To Photo",'callback_data'=>"g2"]
            ],            
            [
            ['text'=>"Text To Voice",'callback_data'=>"g3"]
            ],
              [
              ['text'=>"Back◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back5"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوش اومدی به بخش تبدیل متن✒️

خوب بخش مورد نظرتو انتخاب کن و لذت ببر📍",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                        [
            ['text'=>"Text To Sticker",'callback_data'=>"g1"],['text'=>"Text To Photo",'callback_data'=>"g2"]
            ],            
            [
            ['text'=>"Text To Voice",'callback_data'=>"g3"]
            ],
              [
              ['text'=>"Back◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "g1"){
file_put_contents("ali.txt","g1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز متن خودتون را بفرستید تا به استیکر تبدیلش کنم🙃",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back5"]
              ]
              ]
        ])
 ]);
}
elseif($data == "g2"){
file_put_contents("ali.txt","g2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز متن خودتون را بفرستید تا تبدیل عکسش کنم🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back5"]
              ]
              ]
        ])
 ]);
}
elseif($data == "g3"){
file_put_contents("ali.txt","g3");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز متن خودتون را بفرستید تا تبدیل به ویسش کنم 🙃
 فقط کلمه های انگلیسی 
 میتونید بصورت پینگلیش بفرستید 
 مثلا : salam",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"Back◀️",'callback_data'=>"back5"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "g1"){
 file_put_contents("ali.txt","none");
$photo = file_get_contents('http://www.iloveheartstudio.com/-/p.php?t='.urlencode($text).'&bc=FFCBDB&tc=000000&hc=ff0000&f=c&uc=true&ts=true&ff=PNG&w=500&ps=sq');
file_put_contents('logo.png',$photo);
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('logo.png'),
 ]);
unlink('logo.png');
 }
elseif($ali == "g2"){
 file_put_contents("ali.txt","none");
	$photo = file_get_contents('http://www.iloveheartstudio.com/-/p.php?t='.urlencode($text).'&bc=FFCBDB&tc=000000&hc=ff0000&f=c&uc=true&ts=true&ff=PNG&w=500&ps=sq');
	file_put_contents('logo.png',$photo);
bot('sendphoto',[
 'chat_id'=>$chat_id,
'photo'=>"http://api.monsterbot.ir/pic/?text=".$text."&bc=blue"
 ]);
unlink('logo.png');
 }
elseif($ali == "g3"){
 file_put_contents("ali.txt","none");
	$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($text));
 file_put_contents('vo.ogg',$vo);
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>new CURLFile('vo.ogg'),
 ]);
unlink('vo.ogg');
 }
//====================telfire======================//
unlink('error_log');
   ?>
