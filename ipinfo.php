<?php
 // ����ȡ�ÿͻ��˵�ip��������Ϣ�������http://blog.qita.in
 class get_gust_info { 
   
  ////��÷ÿ����������
  function GetBrowser(){
   if(!empty($_SERVER['HTTP_USER_AGENT'])){
    $br = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/MSIE/i',$br)) {    
               $br = 'MSIE';
             }elseif (preg_match('/Firefox/i',$br)) {
     $br = 'Firefox';
    }elseif (preg_match('/Chrome/i',$br)) {
     $br = 'Chrome';
       }elseif (preg_match('/Safari/i',$br)) {
     $br = 'Safari';
    }elseif (preg_match('/Opera/i',$br)) {
        $br = 'Opera';
    }else {
        $br = 'Other';
    }
    return $br;
   }else{return "��ȡ�������Ϣʧ�ܣ�";} 
  }
   
  ////��÷ÿ����������
  function GetLang(){
   if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $lang = substr($lang,0,5);
    if(preg_match("/zh-cn/i",$lang)){
     $lang = "��������";
    }elseif(preg_match("/zh/i",$lang)){
     $lang = "��������";
    }else{
        $lang = "English";
    }
    return $lang;
     
   }else{return "��ȡ���������ʧ�ܣ�";}
  }
   
   ////��ȡ�ÿͲ���ϵͳ
  function GetOs(){
   if(!empty($_SERVER['HTTP_USER_AGENT'])){
    $OS = $_SERVER['HTTP_USER_AGENT'];
      if (preg_match('/win/i',$OS)) {
     $OS = 'Windows';
    }elseif (preg_match('/mac/i',$OS)) {
     $OS = 'MAC';
    }elseif (preg_match('/linux/i',$OS)) {
     $OS = 'Linux';
    }elseif (preg_match('/unix/i',$OS)) {
     $OS = 'Unix';
    }elseif (preg_match('/bsd/i',$OS)) {
     $OS = 'BSD';
    }else {
     $OS = 'Other';
    }
          return $OS;  
   }else{return "��ȡ�ÿͲ���ϵͳ��Ϣʧ�ܣ�";}   
  }
   
  ////��÷ÿ���ʵip
  function Getip(){
   if(!empty($_SERVER["HTTP_CLIENT_IP"])){   
      $ip = $_SERVER["HTTP_CLIENT_IP"];
   }
   if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //��ȡ����ip
    $ips = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
   }
   if($ip){
      $ips = array_unshift($ips,$ip); 
   }
    
   $count = count($ips);
   for($i=0;$i<$count;$i++){   
     if(!preg_match("/^(10|172\.16|192\.168)\./i",$ips[$i])){//�ų�������ip
      $ip = $ips[$i];
      break;    
      }  
   }  
   $tip = empty($_SERVER['REMOTE_ADDR']) ? $ip : $_SERVER['REMOTE_ADDR']; 
   if($tip=="127.0.0.1"){ //��ñ�����ʵIP
      return $this->get_onlineip();   
   }else{
      return $tip; 
   }
  }
   
  ////��ñ�����ʵIP
  function get_onlineip() {
      $mip = file_get_contents("http://city.ip138.com/city0.asp");
       if($mip){
           preg_match("/\[.*\]/",$mip,$sip);
           $p = array("/\[/","/\]/");
           return preg_replace($p,"",$sip[0]);
       }else{return "��ȡ����IPʧ�ܣ�";}
   }
   
  ////����ip��÷ÿ����ڵص���
  function Getaddress($ip=''){
   if(empty($ip)){
       $ip = $this->Getip();    
   }
   $ipadd = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?ip=".$ip);//��������api�ӿڻ�ȡ
   if($ipadd){
    $charset = iconv("gbk","utf-8",$ipadd);   
    preg_match_all("/[\x{4e00}-\x{9fa5}]+/u",$charset,$ipadds);
     
    return $ipadds;   //����һ����ά����
   }else{return "addree is none";}  
  } 
 }
 $gifo = new get_gust_info();
 echo "���ip:".$gifo->Getip();
 echo "<br/>���ڵأ�";
 $ipadds = $gifo->Getaddress();
 foreach($ipadds[0] as $value){
     echo "\r\n    ".iconv("utf-8","gbk",$value);    
 }
  
 echo "<br/>��������ͣ�".$gifo->GetBrowser();
 echo "<br/>��������ԣ�".$gifo->GetLang();
 echo "<br/>����ϵͳ��".$gifo->GetOs();
   
  
 ?>