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
input("Username");
$iduser=trim(fgets(STDIN));
input("Password");
$pass=trim(fgets(STDIN));
echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
$konten=file_get_contents('https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email='.$iduser.'&locale=en_US&password='.$pass.'&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6');
$json= json_decode($konten, true);
$userid = $json['session_cookies'][0]['value'];
$token = $json['access_token'];
if(preg_match('/session_key/', $konten)) {
	echo "Token  ->\t".$token."\n";
	echo "UserID ->\t".$userid."\n";
	$tulis=fopen("token.txt","w+");
	fwrite($tulis,$token);
	fclose($tulis);
	if(file_exists("token.txt")) {
		echo "Writed -> token.txt\n";
	}
 } else {	
   die("Check Your Username / Password");
   }
?>