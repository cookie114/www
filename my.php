
<HTML>
 <HEAD>
  <TITLE>ShenZheng</TITLE>
	<meta http-equiv=Content-Type content="text/html;charset=utf-8">
    <script type="text/javascript" src="jquery-1.4.3.js"></script>  
    <script type="text/javascript" src="code.js"></script> 
<style type="text/css">  


	a:visited {color: #b00000}	/* 已访问的链接 */
      
    .highlight {  
        background-color:#FFF3EE;  
}  
  
</style>  
</HEAD>

 <BODY>
	<table width="1100" height="56" border="1" bordercolor="#999999" id="tableSort">
        <thead> 
		<tr>
		<th width="200" height="25"  onclick="$.sortTable.sort('tableSort',0)">母基金信息</th>
		<th width="450"   onclick="$.sortTable.sort('tableSort',1)"><div align="center">昨日净值</div></th>
		<th width="200"   onclick="$.sortTable.sort('tableSort',2)"><div align="center">今日估值</div></th>
		<th width="300"   onclick="$.sortTable.sort('tableSort',3)"><div align="center" >A类信息</div></th>
		<th width="180"   onclick="$.sortTable.sort('tableSort',4)"><div align="center">A当前价格</div></th>
		<th width="300"   onclick="$.sortTable.sort('tableSort',5)"><div align="center">B类信息</div></th>
		<th width="150"   onclick="$.sortTable.sort('tableSort',6)"><div align="center">B净值</div></th>
		<th width="180"   onclick="$.sortTable.sort('tableSort',7)"><div align="center">B当前价格</div></th>
		<th width="200"   onclick="$.sortTable.sort('tableSort',8)"><div align="center">溢(折)价</div></th>
		<th width="250"   ><div align="center"> 操作</div></th>
	  </tr>
        </thead> 
<?PHP
$fund_array = array(
//	array('121099','121007','150001',' '),
	array('161207','150008','150009','1A+1B'),
//	array('162509','150012','150013','4A+6B'),
	array('161812','150018','150019','1A+1B'),
	array('163109','150022','150023',' '),
//	array('165511','150028','150029','4A+6B'),
	array('161816','150030','150031',' '),
/**/
	array('165515','150051','150052',' '),
//	array('162216','150053','150054','4A+6B'),
//	array('164809','150055','150056','4A+6B'),
//	array('162010','150057','150058','4A+6B'),
//	array('161819','150059','150060','2A+3B'),
//	array('160808','150064','150065','2A+3B'),
//	array('163209','150073','150075','4A+6B'),
	array('166802','150076','150077',' '),
	array('162714','150083','150084',' '),
	array('163111','150085','150086',' '),
	array('162107','150088','150089',' '),
//	array('161910','150090','150091',' '),
	array('165707','150092','150093',' '),
	array('162907','150094','150095',' '),
	array('161715','150096','150097',' '),
	array('160620','150100','150101',' '),
	array('160417','150104','150105',' '),
	array('161118','150106','150107',' '),
	array('160809','150108','150109',' '),
	array('164811','150112','150113',' '),
	array('160218','150117','150118',' '),
	array('161507','150121','150122',' '),
	array('165312','150123','150124',' '),
	array('160219','150130','150131',' '),
//	array('167701','150133','150134','7A+3B'),
	array('164508','150135','150136',' '),
	array('161825','150138','150139',' '),
	array('167601','150140','150141',' '),
//	array('161826','150143','150144','7A+3B'),
	array('161718','150145','150146',' '),
	array('165519','150148','150149',' '),
	array('165520','150150','150151',' '),
	array('161022','150152','150153',' '),
	array('165521','150157','150158',' '),
	array('161811','150167','150168',' '),
	array('164705','150169','150170',' '),
	array('163113','150171','150172',' '),
	array('165522','150173','150174',' '),
	array('161831','150175','150176',' '),
	array('160625','150177','150178',' '),
	array('160626','150179','150180',' '),
	array('161024','150181','150182',' '),
	array('163114','150184','150185',' '),
	array('163115','150186','150187',' '),
	array('164304','150190','150191',' '),
	array('160628','150192','150193',' '),
	array('161025','150194','150195',' '),
	array('160221','150196','150197',' '),
	array('160222','150198','150199',' '),
	array('161720','150200','150201',' '),
	array('160629','150203','150204',' '),
	array('160630','150205','150206',' '),
	array('161721','150207','150208',' '),
	array('161026','150209','150210',' '),
	array('161028','150211','150212',' '),
	array('161223','150213','150214',' '),
	array('160224','150215','150216',' '),
	array('164905','150217','150218',' '),
	array('164401','150219','150220',' '),
	array('164402','150221','150222',' '),
	array('161027','150223','150224',' '),
	array('160516','150225','150226',' '),
	array('160631','150227','150228',' '),
	array('160632','150229','150230',' '),
	array('163116','150231','150232',' '),
	array('163117','150233','150234',' '),
	array('160633','150235','150236',' '),
	array('160634','150237','150238',' '),
	array('161029','150241','150242',' '),
	array('160637','150243','150244',' '),
	array('160636','150245','150246',' '),
//	array('164818','150247','150248','1A+4B'),
	array('161723','150249','150250',' '),
	array('161724','150251','150252',' '),
	array('164403','150253','150254',' '),
	array('161121','150255','150256',' '),
	array('161122','150257','150258',' '),
	array('161123','150259','150260',' '),
	array('162412','150261','150262',' '),
	array('162413','150263','150264',' '),
	array('168201','150265','150266',' '),
	array('160517','150267','150268',' '),
	array('161725','150269','150270',' '),
	array('161726','150271','150272',' '),
	array('160638','150273','150274',' '),
	array('167503','150275','150276',' '),
	array('160639','150277','150278',' '),
	array('160640','150279','150280',' '),
	array('160814','150281','150282',' '),
	array('163118','150283','150284',' '),
	array('168203','150287','150288',' '),
	array('168204','150289','150290',' '),
	array('168205','150291','150292',' '),
	array('160135','150293','150294',' '),
	array('160136','150295','150296',' '),
	array('160137','150297','150298',' '),
	array('160418','150299','150300',' '),
	array('160419','150301','150302',' '),
	array('160420','150303','150304',' '),
	array('168001','150305','150306',' '),
	array('161030','150307','150308',' '),
	array('165523','150309','150310',' '),
	array('165524','150311','150312',' '),
	array('161031','150315','150316',' '),
	array('164907','150317','150318',' '),
	array('161032','150321','150322',' '),
/*
	array('161628','150335','150336',' '),
	array('502000','502001','502002',' '),
	array('502003','502004','502005',' '),
	array('502006','502007','502008',' '),
	array('502010','502011','502012',' '),
	array('502013','502014','502015',' '),
	array('502020','502021','502022',' '),
	array('502036','502037','502038',' '),
	array('502048','502049','502050',' '),
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

	echo ' '. $data . ' <BR>';
	
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
$cnt = 0;

foreach ($fund_array as $fund_info)
{
	//$json_mu = GetFundInfo($fund_info[0]);
	//$json_A  = GetFundInfo($fund_info[1]);
	//$json_B  = GetFundInfo($fund_info[2]);
	$json_mu = GetFundInfo2($fund_info[0]);
	//var_dump($json_mu);
	$json_A  = GetFundRealTime($fund_info[1]);
	$json_B  = GetFundRealTime($fund_info[2]);

	$cnt++;
	if(($cnt%2) == 0)
	{
		echo '<tr  bgColor=#DDDDDD>';
	}
	else
	{
		echo '<tr  bgColor=#FFFFFF>';
	}
	echo '<td><A target="_blank" HREF="http://fund.eastmoney.com/'.$fund_info[0].'.html">('.$json_mu["fundcode"].')'.$fund_info[3].'</A></td>';		//母基金信息
//	echo '<td><A target="_blank" HREF="http://quotes.money.163.com/fund/'.$fund_info[0].'.html">('.$json_mu["fundcode"].')</A></td>';		//母基金信息
	echo '<td>('.$json_mu["jzrq"].')'.$json_mu["dwjz"].'</td>';							//昨日净值
	echo '<td>'.$json_mu["gsz"].'</td>';							//今日估值

/*
	echo '<tr>';
	echo '<td><A HREF="http://quotes.money.163.com/fund/'.$fund_info[0].'.html">'.$json_mu["sname"].'('.$json_mu["code"].')</A></td>';		//母基金信息
	$a = count($json_mu["data"]);
	echo '<td>('.$json_mu["data"][$a-1][0].')'.$json_mu["data"][$a-1][2].'</td>';							//昨日净值
	echo '<td>&nbsp;</td>';							//今日估值

	echo '<td>'.$json_A["sname"].'('.$json_A["code"].')</td>';		//A类信息
	$i = count($json_A["data"]);
	echo '<td>'.$json_A["data"][$i-1][2].'</td>';						//A当前价格

	echo '<td>'.$json_B["sname"].'('.$json_B["code"].')</td>';		//B类信息
	$i = count($json_B["data"]);
	echo '<td>'.$json_B["data"][$i-1][2].'</td>';								//B当前价格
*/
	echo '<td><A target="_blank" HREF="http://quotes.money.163.com/fund/'.$fund_info[1].'.html">('.$json_A["symbol"].')'.$json_A["name"].'</A></td>';		//A类信息
	$b = count($json_A["data"]);
	$pecent_a = ($json_A["data"][$b-1][1]-$json_A["yestclose"])/$json_A["yestclose"];
	$pecent_a = $pecent_a * 100;
	echo '<td>'.$json_A["data"][$b-1][1].'('.substr($pecent_a,0,4).'%)</td>';						//A当前价格

	echo '<td><A target="_blank" HREF="http://quotes.money.163.com/fund/'.$fund_info[2].'.html">('.$json_B["symbol"].')'.$json_B["name"].'</A></td>';		//B类信息

	$b_jinzhi = GetFundInfo2($fund_info[2]);
	echo '<td>'.$b_jinzhi["dwjz"].'</td>';								//B净值
	$c = count($json_B["data"]);
	$pecent_b = ($json_B["data"][$c-1][1]-$json_B["yestclose"])/$json_B["yestclose"];
	$pecent_b = $pecent_b * 100;
	echo '<td>'.$json_B["data"][$c-1][1].'('.substr($pecent_b,0,4).'%)</td>';								//B当前价格

	$red = (2*$json_mu["gsz"])/($json_A["data"][$b-1][1]+$json_B["data"][$c-1][1]);
	if($red < 1 ) 
	{
		$red = 1 - $red ;
		$red = $red * 100;
		if($red > 99) $red = 0;
		if($red > 15)
			echo '<td><B><FONT SIZE="" COLOR="#FF0000">'.substr($red,0,4).'%</FONT></B></td>';		//溢(折)价
		else
			echo '<td><FONT SIZE="" COLOR="#FF0000">'.substr($red,0,4).'%</FONT></td>';		//溢(折)价
		echo '<td>&nbsp;</td>';		//
	}
	else 
	{	
		$red = $red - 1;
		$red = $red * 100;
		if($red > 15)
			echo '<td><B><FONT SIZE="" COLOR="#009900">-'.substr($red,0,4).'%</FONT></B></td>';		//溢(折)价
		else
			echo '<td><FONT SIZE="" COLOR="#009900">-'.substr($red,0,4).'%</FONT></td>';		//溢(折)价
		echo '<td>&nbsp;</td>';		//
//		echo '<td>A+B=>母基</td>';		//
	}

	echo '</tr>';
	$i++;
//	echo ' '. $info['code'] . '<BR>';

}

?>
	</table>
 </BODY>
</HTML>