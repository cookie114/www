
<HTML>
 <HEAD>
  <TITLE> Test Page</TITLE>
	<meta http-equiv=Content-Type content="text/html;charset=UTF-8">
 </HEAD>

 <BODY>
<?PHP
//echo "来源：tencent视频手机APP";
// 初始化一个 cURL 对象
$curl = curl_init();

// 设置你需要抓取的URL
curl_setopt($curl, CURLOPT_URL, 'http://data.v.qq.com/live/api/category/2/channel/query?client=aphone&with_current_program=1&with_next_programs=0&otype=json&qqlog=&appver=3.7.0.6061&market_id=51&install_time=1414290076&sysver=4.4.2&device=Coolpad+8675&lang=zh&platform=8&guid=16b571ae0c352a1c&selfguid=fa528bf8ae021032bbcf80fbe202bb0a&version=20500');

// 设置header,curl_exec返回的data内容不包括header
curl_setopt($curl, CURLOPT_HEADER, 0);

// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// 运行cURL，请求网页
$data = curl_exec($curl);

if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl);
}

$info = curl_getinfo($curl);
//echo 'Get '. $info['url'] . ' Cost '. $info['total_time'] . ' Second<BR>';
//var_dump($info);

// 关闭URL请求
curl_close($curl);

// 显示获得的数据
//var_dump($data);
//echo '<BR>';

//处理json数据
$json_data = json_decode($data,true);
foreach ($json_data['data']['channels'] as $info)
{
//	echo ' '. $info['id'] . '<BR>';
	echo ' '. $info['name'] . ' <BR>';
	echo ' "'. $info['stream_url'] . '",<BR>';
//	echo '<BR>';
}
//for ($i = 0; $i <= 29; $i++) 
{
//	echo ' '. $json_data['data']['channels'][$i]['id'] . '<BR>';
//	echo ' '. $json_data['data']['channels'][$i]['name'] . ' <BR>';
//	echo ' '. $json_data['data']['channels'][$i]['description'] . ' <BR>';
//	echo ' '. $json_data['data']['channels'][$i]['stream_url'] . ' <BR>';
//	echo '<BR>';
}
//var_dump($json_data);
?>
 </BODY>
</HTML>