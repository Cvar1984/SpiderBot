#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}

date_default_timezone_set('Asia/Jakarta');
$date   = date('d-M-Y H:i:s');
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
pilih:
system($bersih);
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
input("Comentar");
$msgx=trim(fgets(STDIN));
echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
input("Count");
$jumlah=trim(fgets(STDIN));
echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
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
    echo "$red(!)$yellow Invalid$red (!)$green\n";
    goto pilih;
}
$ambil = "https://graph.facebook.com/me/home?fields=id,from,type&limit=".$jumlah."&access_token=".$token;
$ambil = file_get_contents($ambil);
$ambil = json_decode($ambil, true);
foreach($ambil['data'] as $data) {
	$stat_id = $data['id'];
	$post_id = explode("_", $stat_id);
	$msg=$msgx . "\n"."-=[ ".$date." ]=-";
	$url = "https://graph.facebook.com/".$post_id[1]."/comments";
$var="method=POST&message=".$msg."&access_token=".$token;	
	
	   $ch=curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $var);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
echo "Comment => $msg\n";
if(preg_match('/error/', $result)) {
     die("$red(!)$yellow Token Invalid$red (!)\n");
		} else {
	echo "Post ID =>".$post_id[1]."\n";
	echo "Send Comment Success!\n";
	$sleep = array(
        "5",
        "6",
        "7",
        "8"
    ); // Detik
    $slp   = array_rand($sleep);
    $slp2  = $sleep[$slp];
    echo "Sleeping For $slp2 Second\n";
    echo "$red=========================== Cvar1984 ))=====(@)>$green\n";
    sleep($slp2);
		}
	}
	unset($data);
?>