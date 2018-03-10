#!/data/data/com.termux/files/usr/bin/php
<?php
pilih:
system('clear');
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
Team    : Blackhole Security
Version : 1.4 ( Alpha )
Date    : 28-02-2018\n";
echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
@header('Content-Type: text/html; charset=UTF-8');
function input($echo) {
    echo "$echo --> ";
}
input("Input Token From File / Paste? [y/n]");
$pilih = trim(fgets(STDIN));
if($pilih == "y") {
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    input("Filenane");
    $Fname = trim(fgets(STDIN));
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    $token = file_get_contents($Fname);
} elseif($pilih == "n") {
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    input("Token");
    $token = trim(fgets(STDIN));
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
} else {
    echo "$red(!)$yellow Invalid$red (!)\n";
    goto pilih;
}
input("Count");
$count = trim(fgets(STDIN));
echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
include('files/status.php');
for($x = 0; $x < $count; $x++) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/me/feed');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "method=POST&message=$status[$x]&access_token=$token");
    curl_setopt($ch, CURLOPT_POST, 1);
    $tampil=curl_exec($ch);
    curl_close($ch);
    echo "Send Status -> $status[$x]\n";
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    if(preg_match('/true/', $tampil)) {
    	echo "Status Updated\n";
    	} else {
    	echo $yellow . "(!)Check Your Acces Token(!)\n";
    	}
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    $sleep = array(
        "700",
        "800",
        "600",
        "500"
    ); // Detik
    $slp   = array_rand($sleep);
    $slp2  = $sleep[$slp];
    echo "Sleeping For $slp2 Second\n";
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    sleep($slp2); // Random Delay
}
?>