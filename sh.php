
<HTML>
 <HEAD>
  <TITLE>ShangHai</TITLE>
	<meta http-equiv=Content-Type content="text/html;charset=utf-8">
 </HEAD>

 <BODY>
	<table width="1300" height="56" border="1" bordercolor="#999999">
	  <tr>
		<td width="350" height="25">母基金信息</td>
		<td width="450"><div align="center">当前价格</div></td>
		<td width="450"><div align="center">净值预估</div></td>
		<td width="300"><div align="center">A类信息</div></td>
		<td width="450"><div align="center">A当前价格</div></td>
		<td width="300"><div align="center">B类信息</div></td>
		<td width="450"><div align="center">B当前价格</div></td>
		<td width="200"><div align="center"><font color=#FF0000>A+B->母(盈利%，负为亏)</font></div></td>
		<td width="250"><div align="center">母->A+B(盈利%)</div></td>
	  </tr>
<?PHP
$fund_array = array(
	array('0502000','0502001','0502002',' '),
	array('0502003','0502004','0502005',' '),
	array('0502006','0502007','0502008',' '),
	array('0502010','0502011','0502012',' '),
	array('0502013','0502014','0502015',' '),
//	array('0502016','0502017','0502018',' '),
	array('0502020','0502021','0502022',' '),
//	array('0502023','0502024','0502025',' '),
//	array('0502026','0502027','0502028',' '),
	array('0502036','0502037','0502038',' '),
//	array('0502040','0502041','0502042',' '),
	array('0502048','0502049','0502050',' '),
	array('0502056','0502057','0502058',' '),
//*/
		);


function  GetStockInfo($s) 
{ 
	//exam:$json_mu1 = GetStockInfo("0000001,0601766");
	// 初始化一个 cURL 对象
	$curl = curl_init();

	// 设置你需要抓取的URL
	curl_setopt($curl, CURLOPT_URL, 'http://api.money.126.net/data/feed/'.$s.',money.api?callback=NULL');

	// 设置header,curl_exec返回的data内容不包括header
	curl_setopt($curl, CURLOPT_HEADER, 0);

	// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	// 运行cURL，请求网页
	$data = curl_exec($curl);

	if ($data === FALSE) {
		echo "cURL Error: " . curl_error($curl);
	}

	// 关闭URL请求
	curl_close($curl);
	$data =  substr($data,5,-2);  //截取第5字符到倒数第2个字符间的内容

	//echo ' '. $data . ' <BR>';
	
	return json_decode($data,true);
} 

function  GetFundInfo($s) 
{ 

	// 初始化一个 cURL 对象
	$curl = curl_init();

	// 设置你需要抓取的URL
	curl_setopt($curl, CURLOPT_URL, 'http://img1.money.126.net/data/fn/nav/'.$s.'.json?callback=NULL');

	// 设置header,curl_exec返回的data内容不包括header
	curl_setopt($curl, CURLOPT_HEADER, 0);

	// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	// 运行cURL，请求网页
	$data = curl_exec($curl);

	if ($data === FALSE) {
		echo "cURL Error: " . curl_error($curl);
	}

	// 关闭URL请求
	curl_close($curl);
	$data =  substr($data,5,-2);  //截取第5字符到倒数第2个字符间的内容

	//echo ' '. $data . ' <BR>';
	
	return json_decode($data,true);
} 

function  GetFundInfo2($s) 
{ 

	// 初始化一个 cURL 对象
	$curl = curl_init();
	//GET http://fundgz.1234567.com.cn/js/160808.js?rt=1436506523988 HTTP/1.1
	// 设置你需要抓取的URL
	curl_setopt($curl, CURLOPT_URL, 'http://fundgz.1234567.com.cn/js/'.$s.'.js?rt=1436506523988');

	// 设置header,curl_exec返回的data内容不包括header
	curl_setopt($curl, CURLOPT_HEADER, 0);

	// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	// 运行cURL，请求网页
	$data = curl_exec($curl);

	if ($data === FALSE) {
		echo "cURL Error: " . curl_error($curl);
	}

	// 关闭URL请求
	curl_close($curl);
	$data =  substr($data,8,-4);  //截取第8字符到倒数第2个字符间的内容

	//echo ' '. $data . ' <BR>';
	
	return json_decode($data,true);
} 

function  GetFundRealTime($s) 
{ 

	// 初始化一个 cURL 对象
	$curl = curl_init();

	// 设置你需要抓取的URL
	curl_setopt($curl, CURLOPT_URL, 'http://img1.money.126.net/data/hs/time/today/1'.$s.'.json?callback=NULL');

	// 设置header,curl_exec返回的data内容不包括header
	curl_setopt($curl, CURLOPT_HEADER, 0);

	// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	// 运行cURL，请求网页
	$data = curl_exec($curl);

	if ($data === FALSE) {
		echo "cURL Error: " . curl_error($curl);
	}

	// 关闭URL请求
	curl_close($curl);
	$data =  substr($data,5,-2);  //截取第5字符到倒数第2个字符间的内容

	//echo ' '. $data . ' <BR>';
	
	return json_decode($data,true);
} 

	foreach ($fund_array as $fund_info)
	{
		$str = $str.','.$fund_info[0].','.$fund_info[1].','.$fund_info[2];
	}
	//echo substr($str,1);

	$cnt=0;
	
//	$json_all = GetStockInfo("0502010");
//	var_dump($json_all);
//	$json_all = GetStockInfo("0502010,0502011,0502012");
	$json_all = GetStockInfo(substr($str,1));
	foreach ($json_all as $fund)
	{
		//var_dump($fund);
		if($cnt==0)
		{
			echo '<tr  bgColor=#FFFFFF>';
			echo '<td><A target="_blank" HREF="http://quotes.money.163.com/fund/'.substr($fund['code'],1,7).'.html">('.$fund['code'].')'.$fund['name'].'</A></td>';		//母基金信息
			$mu_value = $fund['ask1'];		//买一
			echo '<td>'.$fund['ask1'].'-<font color=#FF0000>'.$fund['bid1'].'</font>('.substr(100*$fund['percent'],0,5).'%)</td>';								//当前价格

			$mu_value2 = $fund['bid1'];		//卖一 操作：母->A+B

			$json_jinzi = GetFundInfo2(substr($fund['code'],1,7));
			echo '<td>'.$json_jinzi["gsz"].'</td>';								//净值预估
			
		}

		if($cnt==1)
		{
			echo '<td><A target="_blank" HREF="http://quotes.money.163.com/fund/'.substr($fund['code'],1,7).'.html">('.$fund['code'].')'.$fund['name'].'</A></td>';		//A类信息
			
			$a_value = $fund['bid1'];
			echo '<td><font color=#FF0000>'.$fund['ask1'].'</font>-'.$fund['bid1'].'('.substr(100*$fund['percent'],0,5).'%)</td>';						//A当前价格

			$a_value2 = $fund['ask1'];		//操作：母->A+B
		}

		if($cnt==2)
		{
			echo '<td><A target="_blank" HREF="http://quotes.money.163.com/fund/'.substr($fund['code'],1,7).'.html">('.$fund['code'].')'.$fund['name'].'</A></td>';		//B类信息
			$b_value = $fund['bid1'];
			echo '<td><font color=#FF0000>'.$fund['ask1'].'</font>-'.$fund['bid1'].'('.substr(100*$fund['percent'],0,5).'%)</td>';								//B当前价格

			$b_value2 = $fund['ask1'];		//操作：母->A+B

			if(($a_value2+$b_value2) ==0 ) $red2 = 0;
			else $red2 = 100*(($mu_value2*2)/($a_value2+$b_value2)-1);
			echo '<td>';
				echo '<font color=#EEEEEE>(('.$mu_value2.'*2)/('.$a_value2.'+'.$b_value2.')-1)</font><BR>';
			if($red2 > 0)
			{
				echo '<FONT SIZE="" COLOR="#3300FF">'.substr($red2,0,6).'%</FONT></td>';		//溢(折)价
			}
			else
			{
				echo ' '.substr($red2,0,6).'%</td>';		//溢(折)价			
			}

			if(($a_value+$b_value) ==0 ) $red = 0;
			else $red = 100*(($a_value+$b_value)/($mu_value*2)-1);
			echo '<td>';
				echo '<font color=#EEEEEE>(('.$a_value.'+'.$b_value.')/('.$mu_value.'*2)-1)</font><BR>';
			if($red > 0)
			{
				echo '<FONT SIZE="" COLOR="#3300FF">'.substr($red,0,6).'%</FONT></td>';		//溢(折)价
			}
			else
			{
				echo ' '.substr($red,0,6).'%</td>';		//溢(折)价			
			}

			echo '</tr>';
			$cnt = -1;
		}

		$cnt ++;
	}

?>
	</table>
 </BODY>
</HTML>