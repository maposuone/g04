<?php
session_start();
if (empty($_SESSION[ "user" ]) ) {
  header('Location: index.php');
  exit;  
}


require_once dirname(__FILE__).'/functions.php';
$_GET   = checkInput($_GET);

$c_id = isset($_GET['c_id'])    ? $_GET['c_id']    : NULL;

$dbobj = connectPractice();
$sql = 'SELECT * FROM item as i left join ranking as r on i.c_id = r.c_id and i.t_id = r.t_id left join backnumber as b on i.b_id = b.b_id where i.c_id ='. $c_id . ' group by i.t_id order by r.score_avg desc , r.t_id desc';
$stSet = mysqli_query($dbobj, $sql) or die(mysqli_error($dbobj));
// $bl = mysqli_affected_rows($dbobj);
// $stData = mysqli_fetch_assoc($stSet);
$sql1 = 'SELECT * FROM category where c_id =' . $c_id;
$stcSet = mysqli_query($dbobj, $sql1) or die(mysqli_error($dbobj));
$stcData = mysqli_fetch_assoc($stcSet);
$i=1;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="css/star.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link href="css/camp_ranking.css" type="text/css" rel="stylesheet">
  <title>ランキングページ | 初心者向け&nbsp;オトナのキャンプ&#9829; グッズ&nbsp;ランキング</title>
  <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/script.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC|Sawarabi+Gothic" rel="stylesheet">
</head>

<body>
    <header>
      <h1><a href="top.php"><img src="img/toplogo.png" alt="BE-PAL"></a></h1>
    </header>
    <div calss="logout">
      <a href="index.php">ログアウト</a>
    </div>
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
  <div class="rankig_img"><p><img src="img/ranking.png"></p></div>
  <h2>
    <?php echo h($stcData['c_jp']); ?> のランキング<!--Category_name.c_jp-->
  </h2>
  <div class="rinking_description">
      <?php echo h($stcData['description_r']); ?><!--Category.description_r-->
  </div>

<?php while($stData = mysqli_fetch_assoc($stSet)) : ?>
<div class=content>
<!-- <div class="rank"><img src="#" alt="1位"></div> -->
<div class="rank"><?php echo $i++ ?>位</div>
  <div class="container">
    <div class=left>
      <a href="camp_details.php?c_id=<?php echo h($stData['c_id']);?>&t_id=<?php echo h($stData['t_id']);?>"><img src="<?php echo h($stData['img']); ?>"></a>
    </div><!--left-->
    <div class=right>
      <div class=score>
        <div class="star-rating">
            <div class="star-rating-front" style="width: <?php echo h($stData['score_avg']/5 * 100); ?>%">★★★★★</div>
            <div class="star-rating-back">★★★★★  </div>
        </div>
        <div class="score_point">
          <p><?php echo h($stData['score_avg']); ?></p>
        </div>
      </div><!--score-->

        <div class=item_name>
          <p><?php echo h($stData['name']); ?></p>
        </div>
        <div class=item_description>
          <p><?php echo h($stData['description']); ?></p>
        </div>
      </div><!--right-->
  </div><!--/container-->
</div>
<?php endwhile; ?>

<div id="pageTop">
  <p class="pagetop"><a href="#">TOP&nbsp;<i class="fas fa-arrow-up"></i></a></p>
</div>
    <div class="copy">
    <p>Copyright© BE-PAL. All rights Reserved</p>
    </div>
</body>
</html>
