<?php
  //处理cookie
  // $nickName = $_POST['nickName'];
  // $userId = $_POST['userId'];
  // setcookie('nickName',$nickName,time()+3600*24);
  // setcookie('userId',$userId,time()+3600*24);

  $info = array('peoName' => 'Len','peoAge' => 22,'peoGender' => 'male');

  // 给出反馈
  $success = array('msg'=>'OK');
  echo json_encode($success);


 ?>
