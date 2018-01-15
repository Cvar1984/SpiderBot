<?
system('clear');
echo "\n\e[93m
 ____        _     _           ____        _
/ ___| _ __ (_) __| | ___ _ __| __ )  ___ | |_
\___ \| '_ \| |/ _` |/ _ \ '__|  _ \ / _ \| __|
 ___) | |_) | | (_| |  __/ |  | |_) | (_) | |_
|____/| .__/|_|\__,_|\___|_|  |____/ \___/ \__|
      |_|";
echo "\n\e[36m
Author  : Cvar1984
Code    : PHP
Github  : http://github.com/Cvar1984
Team    : Blackhole Security
Version : 1.1 ( Beta )
Date    : 15-01-2018\n\n";
@header('Content-Type: text/html; charset=UTF-8');
echo 'URL : ';
$url=trim(fgets(STDIN, 1024));
echo 'Count : ';
$vist=trim(fgets(STDIN, 1024));

$agents=array(
'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1',
'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.9) Gecko/20100508 SeaMonkey/2.0.4',
'Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)',
'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1');
include('proxy.php');
$ch=curl_init();
for($x=0; $x < $vist; $x++) {
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, $agents[array_rand($agents)]);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)]);
$data=curl_exec($ch);
print_r($data);
sleep(1);
}
curl_close($ch);
?>