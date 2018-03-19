#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
echo "\n$yellow
 ____        _     _           ____        _
/ ___| _ __ (_) __| | ___ _ __| __ )  ___ | |_
\___ \| '_ \| |/ _` |/ _ \ '__|  _ \ / _ \| __|
 ___) | |_) | | (_| |  __/ |  | |_) | (_) | |_
|____/| .__/|_|\__,_|\___|_|  |____/ \___/ \__|
      |_|";
echo "\n$blue
Author  : Cvar1984
Code    : PHP
Github  : http://github.com/Cvar1984
Team    : BlackHole Security
Version : 3.1 ( Alpha )
Date    : 15-03-2018\n";
echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
function input($echo) {
    echo "$echo --> ";
}
input("Chat Id");
$cid=trim(fgets(STDIN));
hell:
input("Quote / Text [q/t]");
$tipe=trim(fgets(STDIN));
echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
if($tipe == "q") {
input("Count");
$count = trim(fgets(STDIN));
include("files/images.php");
include("files/status.php");
$n=count($jpg);
$c=count($status);
$back="false";
$url="https://api.telegram.org/bot553163661:AAH2nNAfyM_G8tKUKgvyRPb0Kzg4eEloY2A/sendPhoto";
}
elseif($tipe == "t") {
pesan:
input("Text");
$status=trim(fgets(STDIN));
$url="https://api.telegram.org/bot553163661:AAH2nNAfyM_G8tKUKgvyRPb0Kzg4eEloY2A/sendMessage";
$postdata="chat_id={$cid}&text={$status}";
$count="1";
$back="true";
} else {
die($yellow."Input Failed".$green);
}
for($x = 0; $x < $count; $x++) {
	if($back == "false") {
$postdata="chat_id={$cid}&photo={$jpg[$x%$n]}&caption={$status[$x%$c]}";
}
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$postdata);    
    curl_setopt($ch, CURLOPT_POST, 1);
    $tampil=curl_exec($ch);
    curl_close($ch);
    if($status == "/back") {
    	goto hell; // Use "/back" for back to menu
    }
    if($back == "true") {
    echo "Send Text -> ".$status."\n";
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    } else {
    echo "Send Quote -> ".$status[$x]."\n";
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    }
    if(preg_match("/true/", $tampil)) {
    	date_default_timezone_set('Asia/Jakarta');
    	$date = date("H:i:s");
    	echo "[ ".$date." ] Status Updated\n";
    	} else {
    	die($yellow . "(!) Check Your Post Data (!)\n");
    	}
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    if($back == "true") {
    	goto pesan;
    } else {
    $sleep = array(
        "120",
        "200",
        "300"
    ); // Detik
    $slp   = array_rand($sleep);
    $slp2  = $sleep[$slp];
    echo "Sleeping For $slp2 Second\n";
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    sleep($slp2); // Random Interval
}
}
?>