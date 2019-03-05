<?php

session_start();
if (empty($_SESSION[ "user" ]) ) {
  header('Location: index.php');
  exit;  
}

require_once dirname(__FILE__).'/functions.php';


$_POST   = checkInput($_POST);

$name    = isset($_POST['name'])    ? $_POST['name']    : NULL;
$score   = isset($_POST['score'])   ? $_POST['score']   : NULL;
$title   = isset($_POST['title'])   ? $_POST['title']   : NULL;
$comment = isset($_POST['comment']) ? $_POST['comment'] : NULL;
$c_id    = isset($_POST['c_id'])    ? $_POST['c_id']    : NULL;
$t_id    = isset($_POST['t_id'])    ? $_POST['t_id']    : NULL;


$name    = trim($name);
$score   = trim($score);
$title   = trim($title);
$comment = trim($comment);
$c_id    = trim($c_id);
$t_id    = trim($t_id);

$sql = '';
$message = '';
$btn = '';

if (isset($_POST["review"])){
  $error_message = array();
  if ($name == '') {
    $error_message[] = "名前を入力してください<br>";
  }
  if ($title == '') {
    $error_message[] = "タイトルを入力してください<br>";
  }
  if ($score == '0') {
    $error_message[] = "点数を選択してください<br>";
  }
  if ($comment == '') {
    $error_message[] = "レビューを入力してください<br>";
  }
  if ($name == '' OR $title == '' OR $score == '0' OR $comment == '') {
    $btn = '<a href="camp_details.php" onclick="history.back(); return false;">商品ページに戻る</a>';
  }
  if (!count($error_message)) {
    $dbobj = connectPractice();
    $name = mysqli_real_escape_string($dbobj, $name);
    $score = mysqli_real_escape_string($dbobj, mb_convert_kana($score, 'n'));
    $title = mysqli_real_escape_string($dbobj, $title);
    $comment = mysqli_real_escape_string($dbobj, $comment);
    $sql = sprintf('INSERT INTO comment SET
                    name="%s",
                    score=%d,
                    title="%s",
                    comment="%s",
                    c_id=%d,
                    t_id=%d',
                   $name, $score, $title, $comment, $c_id, $t_id);
    mysqli_query($dbobj, $sql) or die(mysqli_error($dbobj));
    $ok_message = 'レビューが書き込まれました。ありがとうございました！';
    $btn = '
    <form action="camp_details.php" method="get" name="insertForm">
    <a href="javascript:insertForm.submit()">商品ページに戻る</a>
    <input type="hidden" name="c_id" value="' . $_POST['c_id'] . '">
    <input type="hidden" name="t_id" value="' . $_POST['t_id'] . '">
    </form>';
  }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="style.css" type="text/css" rel="stylesheet">
<title>商品管理システム</title>
</head>
<body>
<p>
<?php if (count($error_message)): ?>
  <?php foreach ($error_message as $message): ?>
       <div class="e_message"><?php echo $message; ?></div>
   <?php endforeach; ?>
   <div class="back_btn"><?php echo $btn; ?></div>
  <?php else: ?>
   <div class="ok_message"><?php echo $ok_message; ?></div>
   <div class="back_btn"><?php echo $btn; ?></div>
<?php endif; ?>
</p>
</body>
</html>
