
<?PHP
echo "Begin---------------\n\n";

$head8[0] = 'Host: kyfw.12306.cn';
$head8[]  = 'Connection: keep-alive'; 
$head8[]  = 'Content-Length: 10'; 
$head8[]  = 'Cache-Control: no-cache'; 
$head8[]  = 'Origin: https://kyfw.12306.cn'; 
$head8[]  = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36'; 
$head8[]  = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8'; 
$head8[]  = 'Accept: */*'; 
$head8[]  = 'X-Requested-With: XMLHttpRequest'; 
$head8[]  = 'If-Modified-Since: 0'; 
$head8[]  = 'Referer: https://kyfw.12306.cn/otn/leftTicket/init'; 
$head8[]  = 'Accept-Encoding: identity'; 
$head8[]  = 'Accept-Language: zh-CN,zh;q=0.8'; 
$head8[]  = 'Cookie: JSESSIONID=C7DE079EE6797832802768EDEA41EB10; _jc_save_showZtkyts=true; BIGipServerotn=1658388746.24610.0000; current_captcha_type=C; _jc_save_fromStation=%u5B81%u6CE2%2CNGH; _jc_save_toStation=%u6B66%u6C49%2CWHN; _jc_save_fromDate=2014-12-28; _jc_save_toDate=2014-12-19; _jc_save_wfdc_flag=dc'; 


$curl8 = curl_init();
curl_setopt($curl8, CURLOPT_VERBOSE, '0');
curl_setopt($curl8, CURLOPT_SSL_VERIFYHOST, '1');
curl_setopt($curl8, CURLOPT_SSL_VERIFYPEER, '0');
curl_setopt($curl8, CURLOPT_CAINFO,  getcwd().'/12306.cer');
//curl_setopt($curl8, CURLOPT_SSLCERT, getcwd().'/cert/mycert.pem');
//curl_setopt($curl8, CURLOPT_SSLCERTPASSWD, 'password');
curl_setopt($curl8, CURLOPT_HEADER, 0);
curl_setopt($curl8, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl8, CURLOPT_TIMEOUT,6); 

/*
1. check login
	post kyfw.12306.cn/otn/login/checkUser
*/
echo "Step 1:check Login===================\n";
curl_setopt($curl8, CURLOPT_URL, 'https://kyfw.12306.cn/otn/login/checkUser');
curl_setopt($curl8, CURLOPT_HTTPHEADER, $head8);

$post8= '_json_att=';
curl_setopt($curl8, CURLOPT_POST, 1);
curl_setopt($curl8, CURLOPT_POSTFIELDS, $post8);

$data = curl_exec($curl8);
if ($data === FALSE) {
    echo "cURL Error: " . curl_error($curl8);
}

$json_data = json_decode($data,true);
if($json_data['httpstatus']==200)
{
	echo "Login Status:".$json_data['httpstatus']." user login ok!\n";
}
else
{
	echo "user no login!\n";
}

/*
2. get tick list
	post kyfw.12306.cn/otn/login/checkUser
*/
echo "Step 2:Get tick list===================leftTicket/log\n";
$head8[2]  = 'Connection: keep-alive'; 
$head8[10] = 'https://kyfw.12306.cn/otn/leftTicket/init'; 
$head8[10] = 'Cookie: JSESSIONID=C7DE079EE6797832802768EDEA41EB10; _jc_save_showZtkyts=true; BIGipServerotn=1658388746.24610.0000; current_captcha_type=C; _jc_save_fromStation=%u5B81%u6CE2%2CNGH; _jc_save_toStation=%u6B66%u6C49%2CWHN; _jc_save_fromDate=2014-12-28; _jc_save_toDate=2014-12-19; _jc_save_wfdc_flag=dc';

$url='https://kyfw.12306.cn/otn/leftTicket/log?leftTicketDTO.train_date=2014-12-28&leftTicketDTO.from_station=NGH&leftTicketDTO.to_station=WHN&purpose_codes=ADULT';

curl_setopt($curl8, CURLOPT_URL, $url);
curl_setopt($curl8, CURLOPT_HTTPHEADER, $head8);

curl_setopt($curl8, CURLOPT_POSTFIELDS, NULL);
curl_setopt($curl8, CURLOPT_POST, 0);

$data = curl_exec($curl8);

$json_data = json_decode($data,true);
//var_dump($json_data);

echo "Step 2:Get tick list===================leftTicket/queryT\n";

$url='https://kyfw.12306.cn/otn/leftTicket/queryT?leftTicketDTO.train_date=2014-12-28&leftTicketDTO.from_station=NGH&leftTicketDTO.to_station=WHN&purpose_codes=ADULT';
curl_setopt($curl8, CURLOPT_URL, $url);
curl_setopt($curl8, CURLOPT_HTTPHEADER, $head8);

curl_setopt($curl8, CURLOPT_POSTFIELDS, NULL);
curl_setopt($curl8, CURLOPT_POST, 0);

$data = curl_exec($curl8);

$json_data = json_decode($data,true);
//var_dump($json_data);

echo "Get list result ".$json_data['status']."\n";

$secretstr = NULL;
if($json_data['status']=="true")
{
	foreach ($json_data['data'] as $info)
	{
		echo ' '. $info['queryLeftNewDTO']['station_train_code'] . "\n";
		echo ' '. $info['secretStr'] . "\n";
	//	echo ' "'. $info['stream_url'] . '",<BR>';
	//	echo '<BR>';
		$secretstr=$info['secretStr'];
	}
}
else
{
		echo "Get list Fail\n";
}

if($secretstr == NULL)
{
	echo "Get secretstr Fail\n";
}

/*
3. submit tick
	post https://kyfw.12306.cn/otn/leftTicket/submitOrderRequest 

	need $secretstr;

POST https://kyfw.12306.cn/otn/leftTicket/submitOrderRequest HTTP/1.1
Host: kyfw.12306.cn
Connection: keep-alive
Content-Length: 478
Accept: 
Origin: https://kyfw.12306.cn
X-Requested-With: XMLHttpRequest
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36
Content-Type: application/x-www-form-urlencoded; charset=UTF-8
Referer: https://kyfw.12306.cn/otn/leftTicket/init
Accept-Encoding: gzip,deflate,sdch
Accept-Language: zh-CN,zh;q=0.8
Cookie: JSESSIONID=C7DE079EE6797832802768EDEA41EB10; _jc_save_showZtkyts=true; BIGipServerotn=1658388746.24610.0000; current_captcha_type=C; _jc_save_fromStation=%u5B81%u6CE2%2CNGH; _jc_save_toStation=%u6B66%u6C49%2CWHN; _jc_save_fromDate=2014-12-28; _jc_save_toDate=2014-12-19; _jc_save_wfdc_flag=dc

MjA3Nzc3=OTg1OWI2NmE5MTRhODgxMQ%3D%3D&myversion=undefined&secretStr=MjAxNC0xMi0yOCMwMCNLNDIyIzE1OjE4IzA3OjU0IzVlMDAwMEs0MjI1MCNOR0gjV0NOIzIzOjEyI%2BWugeazoiPmrabmmIwjMDEjMTUjMTAwMDAwMzE3OTQwMDAwMDAwMTQxMDAwMDAwMTQyMzAwMDAwMDAyNyNIMSMxNDE4OTczNzY0MTUyIzY1MDBFRTIzRUM5MDgxRTgyMDEzOUMyNjVENzE0NjE5QkE5NTEwNjI3N0YxQUU5REQyRUQ5QzFB&train_date=2014-12-28&back_train_date=2014-12-19&tour_flag=dc&purpose_codes=ADULT&query_from_station_name=Äþ²¨&query_to_station_name=Îäºº&undefined
*/
echo "Step 3:submit tick==========================================================\n";
$url='https://kyfw.12306.cn/otn/leftTicket/submitOrderRequest';
curl_setopt($curl8, CURLOPT_URL, $url);
curl_setopt($curl8, CURLOPT_HTTPHEADER, $head8);

$post88='MjA3Nzc3=OTg1OWI2NmE5MTRhODgxMQ%3D%3D&myversion=undefined&secretStr='.$secretstr.'&train_date=2014-12-28&back_train_date=2014-12-29&tour_flag=dc&purpose_codes=ADULT&query_from_station_name=Äþ²¨&query_to_station_name=Îäºº&undefined';
curl_setopt($curl8, CURLOPT_POST, 1);
curl_setopt($curl8, CURLOPT_POSTFIELDS, $post88);

$data = curl_exec($curl8);

$json_data = json_decode($data,true);

if($json_data['status']=="true")
{
	//go to step 4
}
else
{
	echo "submit tick Fail\n";
}


/*
4. initdc
	post https://kyfw.12306.cn/otn/leftTicket/submitOrderRequest 


POST https://kyfw.12306.cn/otn/confirmPassenger/initDc HTTP/1.1
Host: kyfw.12306.cn
Connection: keep-alive
Content-Length: 10
Cache-Control: max-age=0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp;q=0.8
Origin: https://kyfw.12306.cn
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36
Content-Type: application/x-www-form-urlencoded
Referer: https://kyfw.12306.cn/otn/leftTicket/init
Accept-Encoding: gzip,deflate,sdch
Accept-Language: zh-CN,zh;q=0.8
Cookie: JSESSIONID=C7DE079EE6797832802768EDEA41EB10; _jc_save_showZtkyts=true; BIGipServerotn=1658388746.24610.0000; current_captcha_type=C; _jc_save_fromStation=%u5B81%u6CE2%2CNGH; _jc_save_toStation=%u6B66%u6C49%2CWHN; _jc_save_fromDate=2014-12-28; _jc_save_toDate=2014-12-19; _jc_save_wfdc_flag=dc

_json_att=

*/
echo "Step 4:initdc=============================================================\n";

$url='https://kyfw.12306.cn/otn/confirmPassenger/initDc';
curl_setopt($curl8, CURLOPT_URL, $url);
curl_setopt($curl8, CURLOPT_HTTPHEADER, $head8);

$post88='_json_att=';
curl_setopt($curl8, CURLOPT_POST, 1);
curl_setopt($curl8, CURLOPT_POSTFIELDS, $post88);

$data = curl_exec($curl8);

//$json_data = json_decode($data,true);

//if($json_data['status']=="true")
{
	//go to step 5
	echo explode('\'',substr(strstr($data, 'globalRepeatSubmitToken = \''),19,40),2)[0];
	//$globalRepeatSubmitToken = 
}
//else
{
	echo "initdc Fail\n";
}

//echo $data;
curl_close($curl8);


?>