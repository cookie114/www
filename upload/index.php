<form action="" enctype="multipart/form-data" method="post" name="uploadfile">
�ϴ��ļ���<input type="file" name="upfile" /><br> 
<input type="submit" value="�ϴ�" /></form> 
<?php 
/**
POST http://192.168.2.143/upload/ HTTP/1.1
Host: 192.168.2.143
Connection: keep-alive
Content-Length: 360819
Cache-Control: max-age=0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,;q=0.8
Origin: http://192.168.2.143
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1918.0 Safari/537.36
Content-Type: multipart/form-data; boundary=----WebKitFormBoundaryvuJpKYvf4AAPOvkd
Referer: http://192.168.2.143/upload/
Accept-Encoding: gzip,deflate,sdch
Accept-Language: zh-CN,zh;q=0.8

------WebKitFormBoundaryvuJpKYvf4AAPOvkd
Content-Disposition: form-data; name="upfile"; filename="15.jpg"
Content-Type: image/jpeg

bindata....
*/

//print_r($_FILES["upfile"]); 
if(is_uploaded_file($_FILES['upfile']['tmp_name'])){ 
	$upfile=$_FILES["upfile"]; 
	//��ȡ���������ֵ 
	$name=$upfile["name"];//�ϴ��ļ����ļ��� 
	$type=$upfile["type"];//�ϴ��ļ������� 
	$size=$upfile["size"];//�ϴ��ļ��Ĵ�С 
	$tmp_name=$upfile["tmp_name"];//�ϴ��ļ�����ʱ���·�� 
	//�ж��Ƿ�ΪͼƬ 
	switch ($type){ 
		case 'image/pjpeg':$okType=true; 
			break; 
		case 'image/jpeg':$okType=true; 
			break; 
		case 'image/gif':$okType=true; 
			break; 
		case 'image/png':$okType=true; 
			break; 
	} 

	if($okType){ 
		/** 
		* 0:�ļ��ϴ��ɹ�<br/> 
		* 1���������ļ���С����php.ini�ļ�������<br/> 
		* 2���������ļ��Ĵ�СMAX_FILE_SIZEѡ��ָ����ֵ<br/> 
		* 3���ļ�ֻ�в��ֱ��ϴ�<br/> 
		* 4��û���ļ����ϴ�<br/> 
		* 5���ϴ��ļ���СΪ0 
		*/ 
		$error=$upfile["error"];//�ϴ���ϵͳ���ص�ֵ 
		echo "================<br/>"; 
		echo "�ϴ��ļ������ǣ�".$name."<br/>"; 
		echo "�ϴ��ļ������ǣ�".$type."<br/>"; 
		echo "�ϴ��ļ���С�ǣ�".$size."<br/>"; 
		echo "�ϴ���ϵͳ���ص�ֵ�ǣ�".$error."<br/>"; 
		echo "�ϴ��ļ�����ʱ���·���ǣ�".$tmp_name."<br/>"; 

		echo "��ʼ�ƶ��ϴ��ļ�<br/>"; 
		//���ϴ�����ʱ�ļ��ƶ���uploadĿ¼���� ,��û���ϴ���������upload��Ȩ�ޣ��Ƿ�apache�û���д��Ȩ��
		$retult = move_uploaded_file($tmp_name,'upload/'.$name); 
		$destination="upload/".$name; 
		echo "================<br/>"; 
		echo "�ϴ���Ϣ��".$retult."<br/>"; 

		if($error==0){ 
			echo "�ļ��ϴ��ɹ�����"; 
			echo "<br>ͼƬԤ��:<br>"; 
			echo "<img src=".$destination.">"; 
			//echo " alt=\"ͼƬԤ��:\r�ļ���:".$destination."\r�ϴ�ʱ��:\">"; 
		}elseif ($error==1){ 
			echo "�������ļ���С����php.ini�ļ�������"; 
		}elseif ($error==2){ 
			echo "�������ļ��Ĵ�СMAX_FILE_SIZEѡ��ָ����ֵ"; 
		}elseif ($error==3){ 
			echo "�ļ�ֻ�в��ֱ��ϴ�"; 
		}elseif ($error==4){ 
			echo "û���ļ����ϴ�"; 
		}else{ 
			echo "�ϴ��ļ���СΪ0"; 
		}
	}else{ 
		echo "���ϴ�jpg,gif,png�ȸ�ʽ��ͼƬ��"; 
	} 
} 
?> 
