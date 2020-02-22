<?php
  //登录请求的php文件
  // 获取用户从前端发来的信息
  $username = $_POST['uname'];
  $password = $_POST['upass'];
  $success = array('msg'=>'OK');

  //连接数据库并获取数据库中信息
  $con = mysqli_connect('localhost','root','','learn');
  if($con){
    mysqli_query($con,'set names utf8');
    mysqli_query($con,'set character_set_client=utf8');
    mysqli_query($con,'set character_set_results=utf8');
    //
    $sql = "select * from loginuserinfolist where username = '$username' and password = $password;";
    $result = $con->query($sql);
    //
    if($result->num_rows == 1){
      $success['infoCode'] = 0;
      $success['showUserName'] = $username;
    }else{
      $success['infoCode'] = 1;
    }
  }else{
    $success['infoCode'] = 2;//0是成功，1是失败，2是数据库连接失败,3是数据库为空
  }





  echo json_encode($success);


 ?>
