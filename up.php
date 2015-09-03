<?php
//echo "success";
define("HOST","127.0.0.1");	//主机名
define("USER","ddtyuri");		//账号
define("PASS","yurixx");		//密码
define("DBNAME","ddtyuri");	//数据库名
$link = @mysql_connect(HOST,USER,PASS) or die("failed connect mysql！");
mysql_select_db(DBNAME,$link);


$name = $_POST['name'];
$name = htmlspecialchars($name, ENT_QUOTES);
$email = $_POST['email'];
$email = htmlspecialchars($email, ENT_QUOTES);
$message = $_POST['message'];
$message = htmlspecialchars($message, ENT_QUOTES);
$time = time();
$ip = $_SERVER["REMOTE_ADDR"];

$sql = "insert into paper values(null,'{$name}','{$email}','{$message}','{$time}','{$ip}')";
//echo $sql;
mysql_query($sql,$link);
//echo "success";
header('Location:index.php');
?>