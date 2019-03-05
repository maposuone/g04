<?php
session_start();
if (empty($_SESSION[ "user" ]) ) {
  header('Location: index.php');
  exit;  
}

require_once dirname(__FILE__).'/functions.php';
$dbobj = connectPractice();

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
  if ($score == '') {
    $error_message[] = "点数を選択してください<br>";
  }
  if ($comment == '') {
    $error_message[] = "レビューを入力してください<br>";
  }
  if ($name == '' OR $title == '' OR $score == '0' OR $comment == '') {
    $btn = '<a href="camp_details.php" onclick="history.back(); return false;">商品ページに戻る</a>';
  }
  if (!count($error_message)) {
    $name = mysqli_real_escape_string($dbobj, $name);
    $score = mysqli_real_escape_string($dbobj, mb_convert_kana($score, 'n'));
    $title = mysqli_real_escape_string($dbobj, $title);
    $comment = mysqli_real_escape_string($dbobj, $comment);
    $c_id = mysqli_real_escape_string($dbobj, mb_convert_kana($c_id, 'n'));
    $t_id = mysqli_real_escape_string($dbobj, mb_convert_kana($t_id, 'n'));

    $name = htmlspecialchars($name);
    $title = htmlspecialchars($title);
    $comment = htmlspecialchars($comment);

    $sqlScor = 'SELECT * FROM ranking where c_id =' . $c_id . ' and t_id =' . $t_id;
    $trSet = mysqli_query($dbobj, $sqlScor) or die(mysqli_error($dbobj));
    $ustData = mysqli_fetch_assoc($trSet);
    $scoreavg = round(($ustData['score_avg'] + $score)/2,1);

    $sql = sprintf('INSERT INTO comment SET
                    name="%s",
                    score=%d,
                    title="%s",
                    comment="%s",
                    c_id=%d,
                    t_id=%d',
                   $name, $score, $title, $comment, $c_id, $t_id);
    mysqli_query($dbobj, $sql) or die(mysqli_error($dbobj));
    $usql = sprintf('UPDATE ranking SET score_avg = %.2f where c_id=%d and t_id=%d', $scoreavg, $c_id, $t_id);
    mysqli_query($dbobj, $usql) or die(mysqli_error($dbobj));


    $ok_message = '以下の内容でレビューが書き込まれました。<br>ありがとうございました！';
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
  <link href="css/common.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/item.css" rel="stylesheet" type="text/css">
  <link href="css/star.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/script.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC|Sawarabi+Gothic" rel="stylesheet">

<title>レビューの投稿｜商品詳細｜初心者向け&nbsp;オトナのキャンプ&#9829;グッズ&nbsp;ランキング</title>
</head>
<body>
  <div class="wrapper">
    <header>
      <h1><a href="top.php"><img src="img/toplogo.png" alt="BE-PAL"></a></h1>
    </header>
    <div class="under">
      <div class="gnav">
        <ul class="clearfix">
          <li><a href="top.php">ホーム</a></li>
          <li><a href="camp_ranking.php?c_id=1">テント</a></li>
          <li><a href="camp_ranking.php?c_id=2">寝袋</a></li>
          <li><a href="camp_ranking.php?c_id=3">テーブル&amp;チェアー</a></li>
          <li><a href="camp_ranking.php?c_id=4">ランプ</a></li>
          <li><a href="camp_ranking.php?c_id=5">キッチングッズセット</a></li>
        </ul>
      </div>

      <?php if (count($error_message)): ?>
      <div class="e_message">
      <div class="e_action">レビューの投稿についてエラーが発生しました</div>
      <div class="e_confirmation">以下の項目を確認してください</div>
      <?php foreach ($error_message as $message): ?>
           <div class="e_content">・　<?php echo $message; ?></div>
      <?php endforeach; ?>
       </div>
       <div class="back_btn"><?php echo $btn; ?></div>
      <?php else: ?>
        <div class="ok_message">
          <div class="ok_action"><?php echo $ok_message; ?></div>
          <div class="ok_content">
          <div class="ok_content1">名　　前：</div><div class="ok_content2"><?php echo $name; ?></div>
          <div class="ok_content1">点　　数：</div><div class="ok_content2"><?php echo $score; ?></div>
          <div class="ok_content1">タイトル：</div><div class="ok_content2"><?php echo $title; ?></div>
          <div class="ok_content1">本　　文：</div><div class="ok_content2"><?php echo $comment; ?></div>
          </div>
        </div>
       <div class="back_btn "><?php echo $btn; ?></div>
    <?php endif; ?>
    </div><!-- under -->
      <div id="pageTop">
        <p class="pagetop"><a href="#">TOP&nbsp;<i class="fas fa-arrow-up"></i></a></p>
      </div>

      <div class="copy">
        <p>Copyright© BE-PAL. All rights Reserved</p>
    </div>

  </div>
</body>
</html>
