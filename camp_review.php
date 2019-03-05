<?php
session_start();
if (empty($_SESSION[ "user" ]) ) {
  header('Location: index.php');
  exit;  
}

require_once dirname(__FILE__).'/functions.php';
$dbobj = connectPractice();

$c_id = $_GET['c_id'];
$t_id = $_GET['t_id'];
$sql1 = "SELECT item.c_id, item.t_id, item.name, item.description, item.img, item.t_detail, comment.name as c_name,
                comment.score, comment.comment, comment.input_time, comment.title, b.b_id, b.b_img, b.b_link,
                r.score_avg FROM
                (item left join comment on item.c_id=comment.c_id and item.t_id=comment.t_id)
                left join ranking as r on item.c_id=r.c_id and item.t_id=r.t_id
                left join backnumber as b on item.b_id=b.b_id
                WHERE item.c_id=$c_id and item.t_id=$t_id";
$trSet = mysqli_query($dbobj, $sql1) or die(mysqli_error($dbobj));
$stData = mysqli_fetch_assoc($trSet);
$sql3 = "SELECT * FROM comment WHERE c_id=$c_id and t_id=$t_id ORDER BY input_time DESC LIMIT 3";
$trSet3 = mysqli_query($dbobj, $sql3) or die(mysqli_error($dbobj));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="css/item.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<link href="css/star.css" type="text/css" rel="stylesheet">
<title>すべてのレビュー｜商品詳細｜初心者向け&nbsp;オトナのキャンプ&#9829;グッズ&nbsp;ランキング</title>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/script.js"></script>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC|Sawarabi+Gothic" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
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

      <div class="detail oll_detail">
        <div class="d_img oll_img"><img src="<?php echo $stData['img']; ?>"><br></div>
        <div class="d_main oll_main">
          <div class="d_name oll_name"><?php echo $stData['name']; ?></div>
            <div class="star-rating oll_star">
              <div class="star-rating-front oll_star" style="width: <?php echo h($stData['score_avg']/5 * 100); ?>%">★★★★★</div>
              <div class="star-rating-back oll_star">★★★★★</div>
              <div class="star-rating-scor oll_star1"><?php echo number_format($stData['score_avg'], 1) . '点'; ?></div>
            </div>
        </div>
      </div>

      <?php while($stData3 = mysqli_fetch_assoc($trSet3)) : ?>
        <div class="review">
          <div class="r_set">
            <div class="r_name_title">
              <div class="r_name"><?php echo $stData3['name']; ?></div>
              <div class="r_title"><?php echo $stData3['title']; ?></div>
            </div>
            <div class="star-rating review_star">
              <div class="star-rating-front review_star_main" style="width: <?php echo h($stData3['score']/5 * 100); ?>%">★★★★★</div>
              <div class="star-rating-back review_star_main">★★★★★</div>
              <div class="star-rating-scor review_star_main1"><?php echo h($stData3['score'], 1) . '点'; ?></div>
            </div>
          </div>
          <div class="r_comment"><?php echo $stData3['comment']; ?></div>
          <div class="r_time"><?php echo $stData3['input_time']; ?></div>
        </div>
      <?php endwhile; ?>

      <form action="camp_details.php" method="get" name="insertForm"  class="oll_review">
        <a href="javascript:insertForm.submit()">商品ページに戻る</a>
        <input type="hidden" name="c_id" value="<?php echo $_GET['c_id'] ?>">
        <input type="hidden" name="t_id" value="<?php echo $_GET['t_id'] ?>">
      </form>

    </div><!-- under -->
    <div id="pageTop">
      <p class="pagetop"><a href="#">TOP&nbsp;<i class="fas fa-arrow-up"></i></a></p>
    </div>
    <div class="copy">
        <p>Copyright© BE-PAL. All rights Reserved</p>
    </div>

  </div><!-- wrapper -->
</body>
</html>

