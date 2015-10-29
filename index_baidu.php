
<?PHP
/*
POST http://api.app1.snail.com/store/platform/activity/user/prize/draw?_source=1 HTTP/1.1
Host: api.app1.snail.com
Connection: keep-alive
Content-Length: 16
Origin: http://api.app1.snail.com
User-Agent: Mozilla/5.0 (Linux; Android 4.4.4; MI 4LTE Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/33.0.0.0 Mobile Safari/537.36FreeStoreAndroid 3.5.5 FreeStoreClient:Android 4.4.4|Xiaomi MI 4LTE|867323023969890|-|169637291|17092522572|1|460027520131772|0
Content-Type: application/x-www-form-urlencoded
Accept: *
Referer: http://api.app1.snail.com/cms/web/center/integral.html?nUserId=169637291&cIdentity=96FB53232782331C26A4335FB0623C47&nAppId=36
Accept-Encoding: gzip,deflate
Accept-Language: zh-CN,en-US;q=0.8
Cookie: nsh_user_id=20660; nsh_phone=17092522572; nsh_identity=11095C189B328E401B8A0C4E3D7B381D; nsh_card_type=4; nsh_source=3; PHPSESSID=cpil1mg4q9vn56f1gqqmu9ks47; loginaccount=17092522572; sso.login.account=17092522572; mr_97112105469711211249_1TJ_key=3_1437653577198; mr_97112105469711211249_1TJ_value=; 1TJ_S=1437653577198; mr_97112105469711211249_1TJ_enter=1438239150004; nUserId=169637291; cIdentity=96FB53232782331C26A4335FB0623C47; nAppId=36; Hm_lvt_d977828f083079e345977a5f3525c71e=1437653577; Hm_lpvt_d977828f083079e345977a5f3525c71e=1438239243
X-Requested-With: com.snailgame.cjg

iActivityId=3023
*/

$head8[0] = 'Host: api.app1.snail.com';
$head8[]  = 'Connection: keep-alive'; 
$head8[]  = 'Content-Length: 16'; 
$head8[]  = 'Origin: http://api.app1.snail.com'; 
$head8[]  = 'User-Agent: Mozilla/5.0 (Linux; Android 4.4.4; MI 4LTE Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/33.0.0.0 Mobile Safari/537.36FreeStoreAndroid 3.5.5 FreeStoreClient:Android 4.4.4|Xiaomi MI 4LTE|867323023969890|-|169637291|17092522572|1|460027520131772|0'; 
$head8[]  = 'Content-Type: application/x-www-form-urlencoded'; 
$head8[]  = 'Accept: */*'; 
$head8[]  = 'Referer: http://api.app1.snail.com/cms/web/center/integral.html?nUserId=169637291&cIdentity=96FB53232782331C26A4335FB0623C47&nAppId=36'; 
$head8[]  = 'Accept-Encoding: gzip,deflate'; 
$head8[]  = 'Accept-Language: zh-CN,en-US;q=0.8'; 
$head8[]  = 'Cookie: nsh_user_id=20660; nsh_phone=17092522572; nsh_identity=11095C189B328E401B8A0C4E3D7B381D; nsh_card_type=4; nsh_source=3; PHPSESSID=cpil1mg4q9vn56f1gqqmu9ks47; loginaccount=17092522572; sso.login.account=17092522572; mr_97112105469711211249_1TJ_key=3_1437653577198; mr_97112105469711211249_1TJ_value=; 1TJ_S=1437653577198; mr_97112105469711211249_1TJ_enter=1438239150004; nUserId=169637291; cIdentity=96FB53232782331C26A4335FB0623C47; nAppId=36; Hm_lvt_d977828f083079e345977a5f3525c71e=1437653577; Hm_lpvt_d977828f083079e345977a5f3525c71e=1438239243'; 
$head8[]  = 'X-Requested-With: com.snailgame.cjg'; 

$curl8 = curl_init();
curl_setopt($curl8, CURLOPT_URL, 'http://api.app1.snail.com/store/platform/activity/user/prize/draw?_source=1');
curl_setopt($curl8, CURLOPT_HEADER, 0);
curl_setopt($curl8, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl8, CURLOPT_HTTPHEADER, $head8);
curl_setopt($curl8, CURLOPT_TIMEOUT,6); 


$post8= 'iActivityId=3023';
curl_setopt($curl8, CURLOPT_POST, 1);
curl_setopt($curl8, CURLOPT_POSTFIELDS, $post8);

$data = curl_exec($curl8);
if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl8);
}

echo $data;
curl_close($curl8);

echo '<HR>\r\n';

/*
GET http://www.zshiw.com/index.php?mod=ajax&act=sign&time=1415934662&callback=jQuery171020038073463365436_1415934681446&_=1415934700877 HTTP/1.1
Host: www.zshiw.com
Connection: keep-alive
Accept: text/javascript, application/javascript, application/ecmascript, application/x-ecmascript; q=0.01
X-Requested-With: XMLHttpRequest
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36
Referer: http://www.zshiw.com/index.php?mod=user&act=index
Accept-Encoding: gzip,deflate,sdch
Accept-Language: zh-CN,zh;q=0.8
Cookie: NLRAF=1; PHPSESSID=qf0337h1f431frhq3r4navhch5; guide_user=1; userlogininfo=8cafXhxU5xA2PuaBKf88XtCdHsmHyeqdGayhqpoasllwtNEoOqONdx2uMrkh1q9c99JuWKG5d8%2BjsmJtSnmKGZPwaxoYBBAjVEJdVHrjVmicXjCPLLCe1ERfefMS%2BHpA3Danpf72EEisBZwzCLm69qcrTmZ65RZJZgyeSxVN1bA3MC9gkkQ5ArJY

*/

$head2[0] = 'Host: www.zshiw.com';
$head2[]  = 'Connection: keep-alive'; 
$head2[]  = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'; 
$head2[]  = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36'; 
$head2[]  = 'Referer: http://www.zshiw.com/index.php?mod=user&act=index'; 
$head2[]  = 'Accept-Encoding: deflate,sdch'; 
$head2[]  = 'Accept-Language: zh-CN,zh;q=0.8'; 
$head2[]  = 'Cookie: NLRAF=1; PHPSESSID=qf0337h1f431frhq3r4navhch5; guide_user=1; userlogininfo=8cafXhxU5xA2PuaBKf88XtCdHsmHyeqdGayhqpoasllwtNEoOqONdx2uMrkh1q9c99JuWKG5d8%2BjsmJtSnmKGZPwaxoYBBAjVEJdVHrjVmicXjCPLLCe1ERfefMS%2BHpA3Danpf72EEisBZwzCLm69qcrTmZ65RZJZgyeSxVN1bA3MC9gkkQ5ArJY'; 

$curl2 = curl_init();
curl_setopt($curl2, CURLOPT_URL, 'http://www.zshiw.com/index.php?mod=ajax&act=sign&time=1415934662&callback=jQuery171020038073463365436_1415934681446&_=1415934700877');
curl_setopt($curl2, CURLOPT_HEADER, 0);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl2, CURLOPT_HTTPHEADER, $head2);
curl_setopt($curl2, CURLOPT_TIMEOUT,6); 

curl_setopt($curl2, CURLOPT_POST, 0);
$data = curl_exec($curl2);
if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl2);
}

echo $data;
curl_close($curl2);

/*
GET http://ffa.trip.taobao.com/json/checkin.htm?subActId=709&ua=AAAAxgAOAT8AAAAAAG19ABQBAAYmZCuRwskBAQAIJmx1ZmfyfUwCAQAFK2x1LkcMAQAhBl1AHURVSl1CQR5SQBVWRAJBWkBdRU0WUUMSXkYUSlVEEwEAESVtqyx%2FU0NYQkEAUk0PRQ9FCAEAASYSAQABJgsBAGkmCXQsGxcGGUpbCQ9BCAFaWBIMEAgfWkUIGQkYBkUDTB8MHRZDFVtPAhBJC00aHR0YGRQES1EVHkJXQ0dHQBZVQR9cWh1KWkpZSE0RXkMICEAVQlpFX0VSUhMdQlFFHh4XEFlARBZWRBADAQAgJmx0LHNjcmlwdCcPdCZuQyxzYaJpcHEmZ3QkvHQsdmMPAQAKJix0O4yRcmlleA8BAAomKHQ3jIdyaVjVDgEAESZtUSxEY3JpcHQmZ3QmbF%2F9BQEADCZtUSxEY3JpcFilZwcBAAYmbXQsX8A%3D&callback=jsonp2 HTTP/1.1
Host: ffa.trip.taobao.com
Connection: keep-alive
Accept: 
x-wap-profile: http://218.249.47.94/Xianghe/MTK_LTE_Phone_KK_UAprofile.xml
User-Agent: Mozilla/5.0 (Linux; Android 4.4.2; Coolpad 8675 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36 AliApp(TB/5.1.3) WindVane/5.6.6 TBANDROID/219200@taobao_android_5.1.3 720X1280
Referer: http://h5.m.taobao.com/trip/member/index.html?spm=a2141.7402590.1998089797.d4919765&ttid=12mtb0000106
Accept-Encoding: gzip,deflate
Accept-Language: zh-CN,en-US;q=0.8
Cookie: cna=ZW/SDKznHBwCAd9BjARd7I36; lzstat_uv=3222599931984031456|3527523; lzstat_ss=951224816_3_1414427722_3527523; wud=wud; linezing_session=kZI20fcG8TEtk1Y0D9GaBOr3_1415714432291QV86_2; mt=ci=0_0; ck1=; v=0; ALIPAYJSESSIONID=1cfd856a2446643d79ca0d6153c600a9; utsid=VDdKTdVfEVADAHjVaSXX2Cm+_12278902_1417684039795; uc3=nk2=AHDCwCu0&id2=Vvz0JM2xUVM%3D&vt3=F8dATkaznXZ3%2BQVk4W8%3D&lg2=W5iHLLyFOGW7aA%3D%3D; skt=45fb445c91840ee6; lgc=cjcj14; _cc_=URm48syIZQ%3D%3D; t=055a44116be675fcc079d6c891c01b66; unb=52761258; _nk_=cjcj14; _l_g_=Ug%3D%3D; tracknick=cjcj14; sg=48f; cookie2=1cfd856a2446643d79ca0d6153c600a9; _tb_token_=9e3a35d1b104; _m_h5_tk=cbc7b6c64dff41513091376fe1421622_1417689244988; _m_h5_tk_enc=7cb4026d6f55fb3eb4f6d82d698628c4; cookie17=Vvz0JM2xUVM%3D; cookie1=WqUPjdBCeXdhGnpV1ARF2g3xVT%2FO%2FgoErD0pAcjbwn4%3D; isg=EA133DC5D9EC43C48ADA89BA2484EEB5; uc1=cookie14=UoW29D54E9iX%2BQ%3D%3D&cookie21=V32FPkk%2FgPzW&cookie15=UIHiLt3xD8xYTw%3D%3D
X-Requested-With: com.taobao.taobao
*/

$head7[0] = 'Host: ffa.trip.taobao.com';
$head7[]  = 'Connection: keep-alive'; 
$head7[]  = 'Accept: */*'; 
$head7[]  = 'x-wap-profile: http://218.249.47.94/Xianghe/MTK_LTE_Phone_KK_UAprofile.xml'; 
$head7[]  = 'User-Agent: Mozilla/5.0 (Linux; Android 4.4.2; Coolpad 8675 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36 AliApp(TB/5.1.3) WindVane/5.6.6 TBANDROID/219200@taobao_android_5.1.3 720X1280'; 
$head7[]  = 'Referer: http://h5.m.taobao.com/trip/member/index.html?spm=a2141.7402590.1998089797.d4919765&ttid=12mtb0000106'; 
$head7[]  = 'Accept-Encoding: gzip,deflate'; 
$head7[]  = 'Accept-Language: zh-CN,en-US;q=0.8'; 
$head7[]  = 'Cookie: cna=ZW/SDKznHBwCAd9BjARd7I36; lzstat_uv=3222599931984031456|3527523; lzstat_ss=951224816_3_1414427722_3527523; wud=wud; linezing_session=kZI20fcG8TEtk1Y0D9GaBOr3_1415714432291QV86_2; mt=ci=0_0; ck1=; v=0; ALIPAYJSESSIONID=1cfd856a2446643d79ca0d6153c600a9; utsid=VDdKTdVfEVADAHjVaSXX2Cm+_12278902_1417684039795; uc3=nk2=AHDCwCu0&id2=Vvz0JM2xUVM%3D&vt3=F8dATkaznXZ3%2BQVk4W8%3D&lg2=W5iHLLyFOGW7aA%3D%3D; skt=45fb445c91840ee6; lgc=cjcj14; _cc_=URm48syIZQ%3D%3D; t=055a44116be675fcc079d6c891c01b66; unb=52761258; _nk_=cjcj14; _l_g_=Ug%3D%3D; tracknick=cjcj14; sg=48f; cookie2=1cfd856a2446643d79ca0d6153c600a9; _tb_token_=9e3a35d1b104; _m_h5_tk=cbc7b6c64dff41513091376fe1421622_1417689244988; _m_h5_tk_enc=7cb4026d6f55fb3eb4f6d82d698628c4; cookie17=Vvz0JM2xUVM%3D; cookie1=WqUPjdBCeXdhGnpV1ARF2g3xVT%2FO%2FgoErD0pAcjbwn4%3D; isg=EA133DC5D9EC43C48ADA89BA2484EEB5; uc1=cookie14=UoW29D54E9iX%2BQ%3D%3D&cookie21=V32FPkk%2FgPzW&cookie15=UIHiLt3xD8xYTw%3D%3D'; 
$head7[]  = 'X-Requested-With: com.taobao.taobao'; 

$curl7 = curl_init();
curl_setopt($curl7, CURLOPT_URL, 'http://ffa.trip.taobao.com/json/checkin.htm?subActId=709&ua=AAAAxgAOAT8AAAAAAG19ABQBAAYmZCuRwskBAQAIJmx1ZmfyfUwCAQAFK2x1LkcMAQAhBl1AHURVSl1CQR5SQBVWRAJBWkBdRU0WUUMSXkYUSlVEEwEAESVtqyx%2FU0NYQkEAUk0PRQ9FCAEAASYSAQABJgsBAGkmCXQsGxcGGUpbCQ9BCAFaWBIMEAgfWkUIGQkYBkUDTB8MHRZDFVtPAhBJC00aHR0YGRQES1EVHkJXQ0dHQBZVQR9cWh1KWkpZSE0RXkMICEAVQlpFX0VSUhMdQlFFHh4XEFlARBZWRBADAQAgJmx0LHNjcmlwdCcPdCZuQyxzYaJpcHEmZ3QkvHQsdmMPAQAKJix0O4yRcmlleA8BAAomKHQ3jIdyaVjVDgEAESZtUSxEY3JpcHQmZ3QmbF%2F9BQEADCZtUSxEY3JpcFilZwcBAAYmbXQsX8A%3D&callback=jsonp2');
curl_setopt($curl7, CURLOPT_HEADER, 0);
curl_setopt($curl7, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl7, CURLOPT_HTTPHEADER, $head7);
curl_setopt($curl7, CURLOPT_TIMEOUT,6); 

curl_setopt($curl7, CURLOPT_POST, 0);
$data7 = curl_exec($curl7);
if ($data7 === FALSE) {
    echo "cURL Error: " . curl_error($curl7);
}

echo $data7;
curl_close($curl7);



/*
POST http://interface.m.yhd.com/myyhdmobile/point/doPointSign.do? HTTP/1.1
Content-Type: application/x-www-form-urlencoded; charset=UTF-8
Accept-Encoding: gzip, deflate
clientInfo: {"clientAppVersion":"3.2.3","clientSystem":"android","clientVersion":"Coolpad 8675,19,4.4.2","deviceCode":"00000000-784b-55cc-78d5-69252349b4b2","interfaceVersion":"1.3.7","latitude":32.039577,"longitude":118.874625,"nettype":"wifi","traderName":"androidSystem","unionKey":"8149203"}
userToken: S17SFCV8TAB23M3YE3RSMWRM4AG199TNII3L03
provinceId: 5
Content-Length: 597
Host: interface.m.yhd.com
Connection: Keep-Alive
User-Agent: Apache-HttpClient/UNAVAILABLE (java 1.4)

methodName=doPointSign&methodBody=%7B%22provinceId%22%3A5%2C%22clientSystem%22%3A%22android%22%2C%22interfaceVersion%22%3A%221.3.7%22%2C%22userToken%22%3A%22S17SFCV8TAB23M3YE3RSMWRM4AG199TNII3L03%22%2C%22mobileSiteType%22%3A%223%22%2C%22sessionId%22%3A%225T2UXK2BBPB231VWEDNF3Q83ZC6QH69M%22%2C%22deviceCode%22%3A%2200000000-784b-55cc-78d5-69252349b4b2%22%2C%22clientAppVersion%22%3A%223.2.3%22%2C%22tradeName%22%3A%22androidSystem%22%2C%22longitude%22%3A%22118.874625%22%2C%22latitude%22%3A%2232.039577%22%2C%22clientVersion%22%3A%22Coolpad+8675%2C19%2C4.4.2%22%2C%22unionKey%22%3A%228149203%22%7D
*/
$head0[0] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$head0[]  = 'Accept-Encoding: gzip, deflate'; 
$head0[]  = 'clientInfo: {"clientAppVersion":"3.2.3","clientSystem":"android","clientVersion":"Coolpad 8675,19,4.4.2","deviceCode":"00000000-784b-55cc-78d5-69252349b4b2","interfaceVersion":"1.3.7","latitude":32.039577,"longitude":118.874625,"nettype":"wifi","traderName":"androidSystem","unionKey":"8149203"}'; 
$head0[]  = 'userToken: S17SFCV8TAB23M3YE3RSMWRM4AG199TNII3L03'; 
$head0[]  = 'provinceId: 5'; 
$head0[]  = 'Content-Length: 597'; 
$head0[]  = 'Host: interface.m.yhd.com'; 
$head0[]  = 'Connection: Keep-Alive'; 
$head0[]  = 'User-Agent: Apache-HttpClient/UNAVAILABLE (java 1.4)'; 

$curl0 = curl_init();
curl_setopt($curl0, CURLOPT_URL, 'http://interface.m.yhd.com/myyhdmobile/point/doPointSign.do?');
curl_setopt($curl0, CURLOPT_HEADER, 0);
curl_setopt($curl0, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl0, CURLOPT_HTTPHEADER, $head0);
curl_setopt($curl0, CURLOPT_TIMEOUT,6); 


$post2= 'methodName=doPointSign&methodBody=%7B%22provinceId%22%3A5%2C%22clientSystem%22%3A%22android%22%2C%22interfaceVersion%22%3A%221.3.7%22%2C%22userToken%22%3A%22S17SFCV8TAB23M3YE3RSMWRM4AG199TNII3L03%22%2C%22mobileSiteType%22%3A%223%22%2C%22sessionId%22%3A%225T2UXK2BBPB231VWEDNF3Q83ZC6QH69M%22%2C%22deviceCode%22%3A%2200000000-784b-55cc-78d5-69252349b4b2%22%2C%22clientAppVersion%22%3A%223.2.3%22%2C%22tradeName%22%3A%22androidSystem%22%2C%22longitude%22%3A%22118.874625%22%2C%22latitude%22%3A%2232.039577%22%2C%22clientVersion%22%3A%22Coolpad+8675%2C19%2C4.4.2%22%2C%22unionKey%22%3A%228149203%22%7D';
curl_setopt($curl0, CURLOPT_POST, 1);
curl_setopt($curl0, CURLOPT_POSTFIELDS, $post2);

$data = curl_exec($curl0);
if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl0);
}

//echo $data;
curl_close($curl0);


echo '<BR><BR><BR><BR><BR><BR>';

/*
POST http://m.ctrip.com/restapi/soa2/10743/json/Accept HTTP/1.1
Host: m.ctrip.com
Connection: keep-alive
Content-Length: 223
Accept: application/json
Origin: http://market.ctrip.com
User-Agent: Mozilla/5.0 (Linux; Android 4.4.4; MI 4LTE Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/33.0.0.0 Mobile Safari/537.36_Ctrip_CtripWireless_6.6.2
Content-Type: application/json
Referer: http://market.ctrip.com/dailycheckinwebapp/?ad02&popup=close?backurl=http%3A%2F%2Fcontents.ctrip.com%2Fwirelesscollect%2Findex
Accept-Encoding: gzip,deflate
Accept-Language: zh-CN,en-US;q=0.8
X-Requested-With: ctrip.android.view

{"ActCode":2,"Prize":2,"head":{"cid":"32001143610010073695","ctok":"","cver":"606.002","lang":"01","sid":"9097","syscode":"32","auth":"38DA2E01471BC73B900E6D2FA891C43DFE901B2C2B10B6C1EF2F404B9B52FAE8"},"contentType":"json"}
*/

$head3[0] = 'm.ctrip.com';
$head3[]  = 'Connection: keep-alive'; 
$head3[]  = 'Content-Length: 223'; 
$head3[]  = 'Accept: application/json'; 
$head3[]  = 'Origin: http://market.ctrip.com'; 
$head3[]  = 'User-Agent: Mozilla/5.0 (Linux; Android 4.4.4; MI 4LTE Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/33.0.0.0 Mobile Safari/537.36_Ctrip_CtripWireless_6.6.2'; 
$head3[]  = 'Content-Type: application/json'; 
$head3[]  = 'Referer: http://market.ctrip.com/dailycheckinwebapp/?ad02&popup=close?backurl=http%3A%2F%2Fcontents.ctrip.com%2Fwirelesscollect%2Findex'; 
$head3[]  = 'Accept-Encoding: gzip,deflate'; 
$head3[]  = 'Accept-Language: zh-CN,en-US;q=0.8'; 
$head3[]  = 'X-Requested-With: ctrip.android.view'; 

$curl3 = curl_init();
curl_setopt($curl3, CURLOPT_URL, 'http://m.ctrip.com/restapi/soa2/10743/json/Accept');
curl_setopt($curl3, CURLOPT_HEADER, 0);
curl_setopt($curl3, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl3, CURLOPT_HTTPHEADER, $head3);
curl_setopt($curl3, CURLOPT_TIMEOUT,6); 


$post3= '{"ActCode":2,"Prize":2,"head":{"cid":"32001143610010073695","ctok":"","cver":"606.002","lang":"01","sid":"9097","syscode":"32","auth":"38DA2E01471BC73B900E6D2FA891C43DFE901B2C2B10B6C1EF2F404B9B52FAE8"},"contentType":"json"}';
curl_setopt($curl3, CURLOPT_POST, 1);
curl_setopt($curl3, CURLOPT_POSTFIELDS, $post3);

$data = curl_exec($curl3);
if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl3);
}

echo $data;

$head3[2]  = 'Content-Length: 224'; 

curl_setopt($curl3, CURLOPT_URL, 'http://m.ctrip.com/restapi/soa2/10743/json/Accept');
curl_setopt($curl3, CURLOPT_HTTPHEADER, $head3);
$post3= '{"ActCode":2,"Prize":52,"head":{"cid":"32001143610010073695","ctok":"","cver":"606.002","lang":"01","sid":"9097","syscode":"32","auth":"38DA2E01471BC73B900E6D2FA891C43DFE901B2C2B10B6C1EF2F404B9B52FAE8"},"contentType":"json"}';
curl_setopt($curl3, CURLOPT_POSTFIELDS, $post3);

$data = curl_exec($curl3);
if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl3);
}

echo $data;
curl_close($curl3);

/*
POST http://www.qbao.com/sign/doSignPrize.html HTTP/1.1
Host: www.qbao.com
Connection: keep-alive
Content-Length: 34
Accept: application/json, text/javascript, *
Origin: http://www.qbao.com
X-Requested-With: XMLHttpRequest
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36
Content-Type: application/x-www-form-urlencoded
Referer: http://www.qbao.com/sign/toPicStep.html
Accept-Encoding: gzip,deflate,sdch
Accept-Language: zh-CN,zh;q=0.8
Cookie: JSESSIONID=D055021AD549BD375D27A659138E2133.jvm18; route=20da5aeba04994044712a4b62edd0950; __jsluid=57673671d7d10d385a09224c47da58f1; sid=17864f9c74abb7fd0264d731213b305b; qianwangWebMonitor=d0337e86-ad8c-4e13-9fae-4de8208676f2; ttu=ae1e39dd-c4f6-4bdb-9bee-467c76ffe5d5; userName=18752011082; Hm_lvt_ee8aad65163c7b39bacd1042c85f1c31=1438244517; Hm_lpvt_ee8aad65163c7b39bacd1042c85f1c31=1438244835; CNZZDATA1255072395=500316921-1438242315-http%253A%252F%252Fwww.sogou.com%252F%7C1438242315

picIndex=452163&r=4.05441106762737
*/

}
?>
