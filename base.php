<?php
ob_start();

define('API_KEY','726643395:AAH3Jii2EnnxfJQoXp9dE_S0Aq7Ve3vDtPw');
//---------------------------//

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
//-------------------------//

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
mkdir("data/username.txt/$username");
$textmassage = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fm = $update->callback_query->from->id;
$step= file_get_contents("data/$from_id/file.txt");
$owners= file_get_contents("data/$chat_id/owner.txt");
$owners2= file_get_contents("data/$chatid/owner.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$welcome= file_get_contents("data/$chat_id/welcome.txt");
$welcome2= file_get_contents("data/$chatid/welcome.txt");
$textwelcome= file_get_contents("data/$chat_id/textwelcome.txt");
$Dev = 00000000;//یوزرآیدی ادمین
$time = file_get_contents("https://provps.ir/td?td=time");
$data = file_get_contents("https://provps.ir/td?td=date");
$chatadd = file_get_contents("data/$chat_id/chatadd.txt");
$timeadd= file_get_contents("data/$chat_id/timeadd.txt");
$dataadd = file_get_contents("data/$chat_id/dataadd.txt");
$usernameadd = file_get_contents("data/$chat_id/usernameadd.txt");
$txtt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$tedadmsg = $update->message->message_id;
$fwd = $update->message->forward_from;
$edit = $update->edited_message->text;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->message->from->id;
$mute_all=file_get_contents("data/$chat_id/mute_all.txt");
$lockvideo_note=file_get_contents("data/$chat_id/lockvideo_note.txt");
$lockenglish=file_get_contents("data/$chat_id/lockenglish.txt");
$locktg= file_get_contents("data/$chat_id/locktg.txt");
$lockdocument= file_get_contents("data/$chat_id/lockdocument.txt");
$locktelegram= file_get_contents("data/$chat_id/locktelegram.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$lockphoto= file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit= file_get_contents("data/$chat_id/lockedit.txt");
$lockgame= file_get_contents("data/$chat_id/lockgame.txt");
$locklocation= file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact= file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$muteall= file_get_contents("data/$chat_id/muteall.txt");
$lockaudio= file_get_contents("data/$chat_id/lockaudio.txt");
$namegroup = $update->message->chat->title;
$lockvoice= file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker= file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin= file_get_contents("data/$chat_id/lockjoin.txt");
$lockdecument= file_get_contents("data/$chat_id/lockdecument.txt");
$lockvideo= file_get_contents("data/$chat_id/lockvideo.txt");
$lockgif= file_get_contents("data/$chat_id/lockgif.txt");
$lockforward= file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator= file_get_contents("data/$chat_id/lockoperator.txt");
$lockfosh= file_get_contents("data/$chat_id/lockfosh.txt");
$mute_all2=file_get_contents("data/$chatid/mute_all.txt");
$lockvideo_note2=file_get_contents("data/$chatid/lockvideo_note.txt");
$lockenglish2=file_get_contents("data/$chatid/lockenglish.txt");
$locktg2=file_get_contents("data/$chatid/locktg.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockdocument2= file_get_contents("data/$chatid/lockdocument.txt");
$locktelegram2= file_get_contents("data/$chatid/locktelegram.txt");
$locklink2= file_get_contents("data/$chatid/locklink.txt");
$lockphoto2= file_get_contents("data/$chatid/lockphoto.txt");
$lockedit2= file_get_contents("data/$chatid/lockedit.txt");
$lockgame2= file_get_contents("data/$chatid/lockgame.txt");
$locklocation2= file_get_contents("data/$chatid/locklocation.txt");
$lockcontact2= file_get_contents("data/$chatid/lockcontact.txt");
$lockusername2= file_get_contents("data/$chatid/lockusername.txt");
$lockaudio2= file_get_contents("data/$chatid/lockaudio.txt");
$lockvoice2= file_get_contents("data/$chatid/lockvoice.txt");
$locksticker2= file_get_contents("data/$chatid/locksticker.txt");
$lockjoin2= file_get_contents("data/$chatid/lockjoin.txt");
$lockdecument2= file_get_contents("data/$chatid/lockdecument.txt");
$lockvideo2= file_get_contents("data/$chatid/lockvideo.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockforward2= file_get_contents("data/$chatid/lockforward.txt");
$lockoperator2= file_get_contents("data/$chatid/lockoperator.txt");
$lockbots2= file_get_contents("data/$chatid/lockbots.txt");
$lockfosh2= file_get_contents("data/$chatid/lockfosh.txt");
$lockbots= file_get_contents("data/$chat_id/lockbots.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$floods2= file_get_contents("data/$chatid/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$flood2= file_get_contents("data/$chatid/numflood.txt");
$text = $update->inline_qurey->qurey;
$token = API_KEY;
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$statjson = json_decode($stat, true);
$status = $statjson['result']['status'];
$lockedit3 = file_get_contents("data/$chat_edit_id/lockedit.txt");
$get = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$super_silent = explode("\n", $silent);
//<Bot-Sorce>//
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
 function senddocument($chat_id, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
function sendAction($chat_id, $action){
bot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function sendphoto($chat_id, $photo, $captionl){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>$caption,
 ]);
 }
function sendsticker($chat_id, $sticker){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$sticker
 ]);
 }
function LeaveChat($chat_id){
bot('LeaveChat',[
'chat_id'=>$chat_id
]);
}
function sendvoice($chat_id, $voice, $caption){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>$voice,
'caption'=>$caption
]);
}
function  getUserProfilePhotos($token,$from_id) {
  $url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->result;
  return $result;
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
bot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
?>