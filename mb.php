
<HTML>
 <HEAD>
  <TITLE> Test Page</TITLE>
	<meta http-equiv=Content-Type content="text/html;charset=GB2312">
 </HEAD>

 <BODY>


<?PHP
/*
�����˾��֯ȥ���ݺ�������Ժ����ȫԱ���,�����ɺ���һ��ֽ��,�����в�ѯ�ʺź�����.
�����ʺ���:480554 ������:37952283
���ǵ�½��ȥ,ϰ���ԵĿ�����Cookie,������ָ���վ��UID��PWDд��Cookie��.
���ǽ��Լ���UID+1,ˢ��ҳ������ܿ������˵���챨��...
*/
$head[0] = 'Host: mobile.changhong.com';
$head[]  = 'Connection: keep-alive'; 
$head[]  = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'; 
$head[]  = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36'; 
$head[]  = 'Referer: http://mobile.changhong.com/'; 
$head[]  = 'Accept-Encoding: gzip,deflate,sdch'; 
$head[]  = 'Accept-Language: zh-CN,zh;q=0.8'; 

// ��ʼ��һ�� cURL ����
$curl = curl_init();

// ָ�������ַ
//curl_setopt($curl, CURLOPT_PROXY, '192.168.2.121:8888');
// �����Ҫ�Ļ����ṩ�û���������
//curl_setopt($curl, CURLOPT_PROXYUSERPWD,'user:pass');

// ��������Ҫץȡ��URL
curl_setopt($curl, CURLOPT_URL, 'http://mobile.changhong.com/sale/pre/0/countPreNumber');


for($uid=0;$uid<5000;$uid++)
{

	// ����header,curl_exec���ص�data���ݲ�����header
	curl_setopt($curl, CURLOPT_HEADER, 0);

	//$head[7]  = 'Cookie: PHPSESSID=jtc7jpbrn3nu37608kaqpomlp7; uid='.$uid.'; login=480554; passwd=a60b1414b147d4db1b2bd7827e3fc153; regdate=2014-09-15'; 


	// ����cURL ������Ҫ�������浽�ַ����л����������Ļ�ϡ�
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $head);

	curl_setopt($curl, CURLOPT_POST, 0);

	// ����cURL��������ҳ
	$data = curl_exec($curl);

	if ($data === FALSE) {
		echo "cURL Error: " . curl_error($curl);
	}

	echo $data;
}
// �ر�URL����
curl_close($curl);

?>
 </BODY>
</HTML>