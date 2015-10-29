<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全能解析演示播放页</title>
<style type="text/css"><!--
html,body{height:100%; margin:0; padding:0;text-align:left;background:#FFF;}
-->
</style>
</head>
<body>
<!-- <input id="u" type="text" size="110" value="http://v.youku.com/v_show/id_XODA3NjQ1Mjgw.html"/><input type="button" value="测试播放" onClick="player('http://v.youku.com/v_show/id_XODA3NjQ1Mjgw.html')"/> -->
<!-- <BR><A href="javascript:player('http://v.youku.com/v_show/id_XODExMjUzMTg0.html')">一碗热干面</A>
 -->
<TABLE height="600">
<TR>
	<TD width = "300">
		<?PHP
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'http://ykrec.youku.com/personal/packed/list.json?apptype=1&pg=8&module=3&pl=15&guid=141093609879090c&picSize=1&pz=30&req_id=141507856773396p&timestamp=1415078567733o140tgoye8');
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($curl);
		if ($data === FALSE) {
			echo "cURL Error: " . curl_error($curl);
		}
		curl_close($curl);

		$json_data = json_decode($data,true);
		foreach ($json_data['data'] as $info)
		{
			echo '<BR><A href="javascript:player(\''.$info['playLink'].'\')">'.$info['title'].'</A>';
		}
		?>
	</TD>
	<TD>
		<div id="a1"></div>
	</TD>
</TR>
</TABLE>

<script type="text/javascript" src="player/player.js" charset="utf-8"></script>
<script type="text/javascript">
function player(media_url){
	var str = media_url;
	if(str!=''){var flashvars={f:'api/deng.php?v='+str,s:2,c:0,p:1,b:1};
		var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
		CKobject.embedSWF('player/player.swf','a1','ckplayer_a1','800','530',flashvars,params);	
	}else{alert("请填写播放地址");}
}
</script>
</body>
</html>