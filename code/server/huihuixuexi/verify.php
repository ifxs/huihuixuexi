<?php
//1 将timestamp、token、nonce按字典顺序排序
$timestamp = $_GET['timestamp'];
$token = "huihuixuexi";
$nonce = $_GET['nonce'];

$verArr = array($timestamp,$token,$nonce);
sort($verArr);

//2 将排序后的三个参数拼接之后进行sha1加密
$verStr = implode('',$verArr);
$verStr = sha1($verStr);

//3 将加密后的字符串与signature进行比较，以判断该请求是否是来自微信服务器
$signature = $_GET['signature'];
if($verStr == $signature){
	echo $_GET['echostr'];
}