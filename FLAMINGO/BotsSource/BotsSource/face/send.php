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
include "bot.php";
//===================================================================
$send = json_decode(file_get_contents("user.json"),true);
if($send["sendtoall"] == "true"){
$text = $send["text"];
$get = $send["array"];
$files = scandir('data/');
for($z = $get;$z <= count($files)-1;$z++){
$file = pathinfo($files[$z]);
$mmd = $file['filename'];
     jijibot('sendmessage',[
          'chat_id'=>$mmd,        
		  'text'=>"$text",
        ]);
$inuser = json_decode(file_get_contents("sendall.json"),true);
$get = $inuser["send"];
$getplus = $get + 1 ;
$inuser["send"]="$getplus";
$inuser = json_encode($inuser,true);
file_put_contents("sendall.json",$inuser);
if($getplus >= 500){
$inuser = json_decode(file_get_contents("sendall.json"),true);
$inuser["send"]="0";
$inuser = json_encode($inuser,true);
file_put_contents("sendall.json",$inuser);	
$send = json_decode(file_get_contents("user.json"),true);
$array = $send["array"];
$plusarray = $array + $getplus;
$send["array"]="$plusarray";
$send = json_encode($send,true);
file_put_contents("user.json",$send);	
break;
}
}
jijibot('sendmessage',[
      'chat_id'=>$Dev[0],
      'text'=>"📍 تا الان برای $plusarray نفر ارسال شده",
 ]);
if($plusarray >= count($files)){
$inuser = json_decode(file_get_contents("sendall.json"),true);
$inuser["send"]="0";
$inuser = json_encode($inuser,true);
file_put_contents("sendall.json",$inuser);	
$send = json_decode(file_get_contents("user.json"),true);
$send["sendtoall"]="false";
$send["array"]="0";
$send = json_encode($send,true);
file_put_contents("user.json",$send);	
  jijibot('sendmessage',[
      'chat_id'=>$Dev[0],
      'text'=>"📍 پیام برای همه کابران ارسال شد !",
 ]);
}
}
//==============================================================================
$send = json_decode(file_get_contents("user.json"),true);
if($send["fortoall"] == "true"){
$chat = $send["chat"];
$msg = $send["msg"];
$get = $send["array"];
$files = scandir('data/');
for($z = $get;$z <= count($files)-1;$z++){
$file = pathinfo($files[$z]);
$mmd = $file['filename'];
jijibot('ForwardMessage',[
'chat_id'=>$mmd,
'from_chat_id'=>$chat,
'message_id'=>$msg
]);
$inuser = json_decode(file_get_contents("sendall.json"),true);
$get = $inuser["send"];
$getplus = $get + 1 ;
$inuser["send"]="$getplus";
$inuser = json_encode($inuser,true);
file_put_contents("sendall.json",$inuser);
if($getplus >= 500){
$inuser = json_decode(file_get_contents("sendall.json"),true);
$inuser["send"]="0";
$inuser = json_encode($inuser,true);
file_put_contents("sendall.json",$inuser);	
$send = json_decode(file_get_contents("user.json"),true);
$array = $send["array"];
$plusarray = $array + $getplus;
$send["array"]="$plusarray";
$send = json_encode($send,true);
file_put_contents("user.json",$send);
break;
}
}
  jijibot('sendmessage',[
      'chat_id'=>$Dev[0],
      'text'=>"📍 تا الان برای $plusarray نفر فوروارد شده",
 ]);
if($plusarray >= count($files)){
$inuser = json_decode(file_get_contents("sendall.json"),true);
$inuser["send"]="0";
$inuser = json_encode($inuser,true);
file_put_contents("sendall.json",$inuser);	
$send = json_decode(file_get_contents("user.json"),true);
$send["fortoall"]="false";
$send["array"]="0";
$send = json_encode($send,true);
file_put_contents("user.json",$send);	
  jijibot('sendmessage',[
      'chat_id'=>$Dev[0],
      'text'=>"📍 پیام برای همه کابران  فوروارد شد !",
 ]);
}
}
?> 