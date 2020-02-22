<?php

  $username = $_POST['uname'];
  $success = array('msg'=>'OK','info'=>$_POST);
  echo json_encode($success);

  // // 假设判断完成..
  // setcookie('uname',$username,time()+60*60);

  // 读取cookie
  // echo json_encode($_COOKIE);

  //删除cookie
  // setcookie('uname','',time()-1);


  /*
    1.cookie的后端操作
    说明：哪个html页面访问本php文件。就给哪个html页面添加cookie
    语法：
      (1)写入cookie：setcookie('key','value','expires','path');
      (2)获取ookie：$_COOKIE
      (3)删除cookie：setcookie('key','value','expires-1','path');
    说明：
      (1)在php中获取时间戳的方式为time(),单位是秒s
      (2)前三个参数为必要参数，后面参数为可选参数
  */
 ?>
