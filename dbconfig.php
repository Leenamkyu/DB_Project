<?php
$mysql_hostname = "localhost";//접속주소 
$mysql_username = "root";//접속계정
$mysql_password = "root";//비밀번호
$mysql_database = "test";//데이터베이스 명

$conn = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);



if($conn){
    //echo "connect: 성공<br>";
}else{
    echo "disconnect: 실패<br>";
  
}
?>