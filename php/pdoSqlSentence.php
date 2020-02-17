<?php
  echo "<pre>";
  require_once 'PDOsingleton.php';
  $pdo = PDOsingleton::getPdo();
  // print_r($pdo);
  $pdo -> exec('set names utf8');

  //pdo增删改sql语句（无预处理）
  // $sql = "insert into loginUserInfoList values ('xiaoming','666')";
  // $sql = "delete from loginUserInfoList where username = 'xiaoming'";
  // $sql = "update loginUserInfoList set username = 'Rock',password = '111111' where username = 'frank'";
  // if($pdo -> exec($sql)){
  //   echo '操作成功';
  // }else{
  //   echo '操作失败';
  // }
  // pdo查询sql语句
  // $sql = "select * from loginUserInfoList";
  // $result = $pdo -> exec($sql);

  // 预处理pdo
  // 半成品sql语句
  //只能由prepare预处理语句执行
  // $sql = "insert into loginUserInfoList values (?,?)";
  // $halfPro = $pdo -> prepare($sql);
  // // 将半成品通过execute方法传入参数，变成成品
  // $result = $halfPro -> execute(['zhangliang','777777']);
  // 或者用
  // $halfPro ->bindValue(1,'Huahua');
  // $halfPro ->bindValue(2,'666666');
  // $result = $halfPro -> execute();


  // bindColum
  $sql = "select * from loginuserinfolist";
  $halfPro = $pdo -> prepare($sql);
  $halfPro -> execute();
  //将结果中的内容绑定在指定变量上
  $halfPro -> bindColumn(1,$uname);
  $halfPro -> bindColumn(2,$upass);
  //读取检索结果
  // 1.直接循环
  // while($row = $halfPro -> fetch(PDO::FETCH_COLUMN)){
  //   echo "$uname --- $upass"."<br>";
  // }
  // 2.录入数组
  $info = [];
  for($i=0;$row=$halfPro->fetch(PDO::FETCH_COLUMN);$i++){
    $info[$i] = array('userName'=>$uname,'password'=>$upass);
  }
  print_r($info);


  // var_dump($halfPro);


 ?>
