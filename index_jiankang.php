
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
// ��ʼ��һ�� cURL ����
$curl = curl_init();

// ָ�������ַ
//curl_setopt($curl, CURLOPT_PROXY, '192.168.2.121:8888');
// �����Ҫ�Ļ����ṩ�û���������
//curl_setopt($curl, CURLOPT_PROXYUSERPWD,'user:pass');

// ��������Ҫץȡ��URL
curl_setopt($curl, CURLOPT_URL, 'http://hzhailiao.jiankang.cn/member.php');

// ����header,curl_exec���ص�data���ݲ�����header
curl_setopt($curl, CURLOPT_HEADER, 0);

$head[7]  = 'Cookie: PHPSESSID=jtc7jpbrn3nu37608kaqpomlp7; uid='.$uid.'; login=480554; passwd=a60b1414b147d4db1b2bd7827e3fc153; regdate=2014-09-15'; 


// ����cURL ������Ҫ�������浽�ַ����л����������Ļ�ϡ�
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $head);

curl_setopt($curl, CURLOPT_POST, 0);

// ����cURL��������ҳ
$data = curl_exec($curl);

if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl);
}

//$info = curl_getinfo($curl);
//echo 'Get '. $info['url'] . ' Cost '. $info['total_time'] . ' Second<BR><BR><BR>';
//echo strstr($data, 'id="id_number" value="');

//echo $data;
$data2 = str_replace('<p style="color:red">����д���ĳ����ֻ��ţ��Ա�ҽʦ�ܵ�һʱ����ϵ�������ˡ�</p>','',$data);
//echo explode('<td align="right" class="m">��ַ��</td>',strstr($data2, '<table align="center" width="100%" cellpadding="5" class="sz_tab">'))[0];
$output1 = explode('<td align="right" class="m">��ַ��</td>',strstr($data2, '<table align="center" width="100%" cellpadding="5" class="sz_tab">'))[0].'</tr></tbody></table><HR>';
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


// �ر�URL����
curl_close($curl);
}
?>
 </BODY>
</HTML>