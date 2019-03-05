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


$_POST   = checkInput($_POST);

$username    = isset($_POST['username'])    ? $_POST['username']    : NULL;
$userid   = isset($_POST['userid'])   ? $_POST['userid']   : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;
$repassword    = isset($_POST['repassword'])    ? $_POST['repassword']    : NULL;


$username    = trim($username);
$userid   = trim($userid);
$password   = trim($password);
$repassword = trim($repassword);

$sql = '';
$message = '';
while($setData = mysqli_fetch_assoc($stSet)){
    if($userid == $setData['user_id'] ){
      $_SESSION["existenceid"] = "すでに存在するIDです。";
      header('Location: createuser.php');
      exit;
  }
}
if ($username == '') {
  $_SESSION["err_name"] = "名前を入力してください<br>";
}
if ($userid == '') {
  $_SESSION["err_id"] = "ユーザIDを入力してください<br>";
}
if ($password == '') {
  $_SESSION["err_pass"] = "パスワードを入力してください<br>";
}
if ($repassword == '') {
  $_SESSION["err_repass"] = "パスワードをもう一回を入力してください<br>";
}
if  ($password <> $repassword){
  $_SESSION["err_confirm"] = "パスワードが一致してません。<br>";
}
if ($username == '' OR $userid == '' OR $password == '' OR $repassword == '' OR ($password <> $repassword)) {
  header('Location: createuser.php');
  exit;
}

if (!count($error_message)) {

  $username = mysqli_real_escape_string($dbobj, $username);
  $userid = mysqli_real_escape_string($dbobj, $userid);
  $password = mysqli_real_escape_string($dbobj, $password);
  $visito_cnt = 1;
  $sql = sprintf('INSERT INTO user SET
                  name="%s",
                  user_id="%s",
                  password="%s",
                  visito_cnt=%d',
                 $username, $userid, $password, $visito_cnt);
  mysqli_query($dbobj, $sql) or die(mysqli_error($dbobj));
  $ok_message = '新規登録が完了しました。ログインして下さい。';
}
  
  $_SESSION["ok_message"] =$ok_message;
  
  header('Location: index.php');
  exit;