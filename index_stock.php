
<?PHP
/*
GET http://api.money.126.net/data/feed/MONEY_PLATE_IN_RANK,MONEY_PLATE_OUT_RANK,LEAD_PLATE_PERCENT_UP_RANK,LEAD_PLATE_PERCENT_DOWN_RANK,PERCENT_UP_RANK,PERCENT_DOWN_RANK,FIVE_MINUTE_UP_RANK,FIVE_MINUTE_DOWN_RANK,LB_UP_RANK,LB_DOWN_RANK,ZF_RANK,HS_UP_RANK,RZ_RANK,RQ_RANK,FUND_NAV_RANK,TURNOVER_DZ_RANK,TURNOVER_NB_RANK,LASTEST_NEWSTOCKS,HKSTOCK_LC_PERCENT_UP,HKSTOCK_LC_PERCENT_DOWN,HKSTOCK_LC_VOLUME,HKSTOCK_LC_TURNOVER,HKSTOCK_GQ_PERCENT_UP,HKSTOCK_GQ_PERCENT_DOWN,HKSTOCK_GQ_VOLUME,HKSTOCK_GQ_TURNOVER,HKSTOCK_HC_PERCENT_UP,HKSTOCK_HC_PERCENT_DOWN,HKSTOCK_HC_VOLUME,HKSTOCK_HC_TURNOVER,HKSTOCK_MAIN_PERCENT_UP,HKSTOCK_MAIN_PERCENT_DOWN,HKSTOCK_MAIN_VOLUME,HKSTOCK_MAIN_TURNOVER,FU_zj_mainlist,FU_sh_mainlist,FU_dl_mainlist,FU_zz_mainlist,MONEY_GG_IN_RANK,MONEY_GG_OUT_RANK?callback=ne294b82084 HTTP/1.1
Host: api.money.126.net
Connection: keep-alive
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36
Referer: http://money.163.com/stock/
Accept-Encoding: gzip,deflate,sdch
Accept-Language: zh-CN,zh;q=0.8
*/

$head[0] = 'www.zshiw.com';
$head[]  = 'Connection: keep-alive'; 
$head[]  = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'; 
$head[]  = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36'; 
$head[]  = 'Referer: http://www.zshiw.com/index.php?mod=user&act=index'; 
$head[]  = 'Accept-Encoding: deflate,sdch'; 
$head[]  = 'Accept-Language: zh-CN,zh;q=0.8'; 
$head[]  = 'Cookie: NLRAF=1; PHPSESSID=qf0337h1f431frhq3r4navhch5; guide_user=1; userlogininfo=8cafXhxU5xA2PuaBKf88XtCdHsmHyeqdGayhqpoasllwtNEoOqONdx2uMrkh1q9c99JuWKG5d8%2BjsmJtSnmKGZPwaxoYBBAjVEJdVHrjVmicXjCPLLCe1ERfefMS%2BHpA3Danpf72EEisBZwzCLm69qcrTmZ65RZJZgyeSxVN1bA3MC9gkkQ5ArJY'; 

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://www.zshiw.com/index.php?mod=ajax&act=sign&time=1415934662&callback=jQuery171020038073463365436_1415934681446&_=1415934700877');
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $head);

curl_setopt($curl, CURLOPT_POST, 0);
$data = curl_exec($curl);
if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl);
}

echo $data;
curl_close($curl);



/*
GET http://wenku.baidu.com/user/index HTTP/1.1
Host: wenku.baidu.com
Connection: keep-alive
Cache-Control: max-age=0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp;q=0.8
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36
Referer: http://wenku.baidu.com/user/task?tab=0&fr=grow
Accept-Encoding: gzip,deflate,sdch
Accept-Language: zh-CN,zh;q=0.8
Cookie: bdshare_firstime=1409645937203; grownupTaskFinish=cookie114%7C0; wk_search_tips=1; BAIDUPSID=D67D6E3D273233538FB3BD09029D5900; cashier2State=enter; WK_UC_RD_TP_V2=1; wk_dsp=1; viewedPg=e997f0fbfab069dc502201ff%3D3%7C0%2680532e8da0116c175f0e488c%3D4%7C0%26f7a26aed81c758f5f61f677b%3D2%7C0%26bef81f89d0d233d4b14e696b%3D1%7C0%26da57eb45336c1eb91a375d2e%3D1%7C0%26df2b63124431b90d6c85c730%3D5%7C-184%2619a853b6941ea76e58fa04a5%3D5%7C0%2629920702cc17552707220871%3D16%7C0%26ec18a937b90d6c85ec3ac615%3D4%7C0%26bc01f915f18583d04964593f%3D4%7C0; __zpspc=188.5.1415852444.1415855489.5%234%7C%7C%7C%7C%7C%23; BDUSS=DU3bWFZYU9tNVBrdXNHcGdFMTJLUUdTYWRyTXRFY0dSdWN4YVRUcDVXTVpCSXhVQVFBQUFBJCQAAAAAAAAAAAEAAADy4h0LY29va2llMTE0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABl3ZFQZd2RUT; WK_daily_signIn=636f6f6b6965313134%2C; BAIDUID=D67D6E3D273233538FB3BD09029D5900:FG=1; BDRCVFR[feWj1Vr5u3D]=I67x6TjHwwYf0; H_PS_PSSID=7744_9971_1466_9592_7802_9753_9498_6504_9509_9770_9757_9478_7799_9453_9655_9979_9023; Hm_lvt_f4165db5a1ac36eadcfa02a10a6bd243=1415933040; Hm_lpvt_f4165db5a1ac36eadcfa02a10a6bd243=1415933701; Hm_lvt_d8bfb560f8d03bbefc9bdecafc4a4bf6=1415933128,1415933511,1415933554,1415933702; Hm_lpvt_d8bfb560f8d03bbefc9bdecafc4a4bf6=1415933786


*/
$head[0] = 'Host: wenku.baidu.com';
$head[]  = 'Connection: keep-alive'; 
$head[]  = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'; 
$head[]  = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36'; 
$head[]  = 'Referer: http://wenku.baidu.com/'; 
$head[]  = 'Accept-Encoding: deflate,sdch'; 
$head[]  = 'Accept-Language: zh-CN,zh;q=0.8'; 

{
// 初始化一个 cURL 对象
$curl = curl_init();

// 指定代理地址
//curl_setopt($curl, CURLOPT_PROXY, '192.168.2.121:8888');
// 如果需要的话，提供用户名和密码
//curl_setopt($curl, CURLOPT_PROXYUSERPWD,'user:pass');

// 设置你需要抓取的URL
curl_setopt($curl, CURLOPT_URL, 'http://wenku.baidu.com/user/index');

// 设置header,curl_exec返回的data内容不包括header
curl_setopt($curl, CURLOPT_HEADER, 0);

$head[7]  = 'Cookie: bdshare_firstime=1409645937203; grownupTaskFinish=cookie114%7C0; wk_search_tips=1; BAIDUPSID=D67D6E3D273233538FB3BD09029D5900; cashier2State=enter; WK_UC_RD_TP_V2=1; wk_dsp=1; viewedPg=e997f0fbfab069dc502201ff%3D3%7C0%2680532e8da0116c175f0e488c%3D4%7C0%26f7a26aed81c758f5f61f677b%3D2%7C0%26bef81f89d0d233d4b14e696b%3D1%7C0%26da57eb45336c1eb91a375d2e%3D1%7C0%26df2b63124431b90d6c85c730%3D5%7C-184%2619a853b6941ea76e58fa04a5%3D5%7C0%2629920702cc17552707220871%3D16%7C0%26ec18a937b90d6c85ec3ac615%3D4%7C0%26bc01f915f18583d04964593f%3D4%7C0; __zpspc=188.5.1415852444.1415855489.5%234%7C%7C%7C%7C%7C%23; BDUSS=DU3bWFZYU9tNVBrdXNHcGdFMTJLUUdTYWRyTXRFY0dSdWN4YVRUcDVXTVpCSXhVQVFBQUFBJCQAAAAAAAAAAAEAAADy4h0LY29va2llMTE0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABl3ZFQZd2RUT; WK_daily_signIn=636f6f6b6965313134%2C; BAIDUID=D67D6E3D273233538FB3BD09029D5900:FG=1; BDRCVFR[feWj1Vr5u3D]=I67x6TjHwwYf0; H_PS_PSSID=7744_9971_1466_9592_7802_9753_9498_6504_9509_9770_9757_9478_7799_9453_9655_9979_9023; Hm_lvt_f4165db5a1ac36eadcfa02a10a6bd243=1415933040; Hm_lpvt_f4165db5a1ac36eadcfa02a10a6bd243=1415933701; Hm_lvt_d8bfb560f8d03bbefc9bdecafc4a4bf6=1415933128,1415933511,1415933554,1415933702; Hm_lpvt_d8bfb560f8d03bbefc9bdecafc4a4bf6=1415933786'; 


// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $head);

curl_setopt($curl, CURLOPT_POST, 0);

// 运行cURL，请求网页
$data = curl_exec($curl);

if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl);
}

echo $data;

// 关闭URL请求
curl_close($curl);
}
?>
