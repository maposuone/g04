<?php
session_start();
if (empty($_SESSION[ "user" ]) ) {
  header('Location: index.php');
  exit;  
}


require_once dirname(__FILE__).'/functions.php';
$dbobj = connectPractice();

$sql = "select * from user ";
$stSet = mysqli_query($dbobj, $sql) or die(mysqli_error($dbobj));



$username    = isset($_POST['username'])    ? $_POST['username']    : NULL;
$password    = isset($_POST['password'])    ? $_POST['password']    : NULL;

$_SESSION["loginname"] = $username;
// $_SESSION["password"] = password_hash("password",PASSWORD_DEFAULT);
$_SESSION["password"] = $password;
// echo $_SESSION["password"];

while($setData = mysqli_fetch_assoc($stSet)){
		if($_SESSION["loginname"] == $setData['user_id'] and $_SESSION["password"] == $setData['password']){
			header('Location: top.php');
			exit;
	}
}
$_SESSION["error"] ="ログインIDまたはパスワードが間違っています。";
header('Location: index.php');
exit;
