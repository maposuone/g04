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
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <!-- <title><?php echo h($_POST['name']); ?> / 初心者向け&nbsp;オトナのキャンプ&#9829;グッズ&nbsp;ランキング</title> -->
  <title>商品詳細｜初心者向け&nbsp;オトナのキャンプ&#9829;グッズ&nbsp;ランキング</title>
  <link href="css/common.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/item.css" rel="stylesheet" type="text/css">
  <link href="css/star.css" rel="stylesheet" type="text/css">
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

      <div class="contents">
        <div class="detail">
          <div class="d_img"><img src="<?php echo $stData['img']; ?>" alt="商品画像"><br></div>
          <div class="detail1">
            <div class="d_main">
              <div class="d_name"><?php echo $stData['name']; ?></div>
              <div class="scor_link">
              <div class="star-rating">
                <div class="star-rating-front" style="width: <?php echo h($stData['score_avg']/5 * 100); ?>%">★★★★★</div>
                <div class="star-rating-back">★★★★★</div>
                <div class="star-rating-scor"><?php echo number_format($stData['score_avg'], 1) . '点'; ?></div>
              </div>
              <div class="b_link">
                <a href="<?php echo $stData['b_link']; ?>" class="bepal" target="_blank"><img src="img/bepal_off.png" alt="リンクボタン"></a>
                <div class="b_text">この商品の特集はこちら！</div>
              </div>
              </div>
            </div>
            <div class="t_detail"><?php echo $stData['t_detail']; ?></div>
          </div>
          <div class="d_description"><?php echo $stData['description']; ?></div>
        </div>
      <div class="contribution_main">
            この商品をレビュー！<br>
            他のお客様にも意見を伝えましょう
      </div>
      <div class="review_contribution">
        <form action="details_check.php" method="post">
          <div class="contribution_btn">
            <input type="submit" class="c_btn"
                   name="review" value="レビューを投稿する" onclick="return confirm('レビューを投稿しますか？')">
          </div>
          <div class="review_name_title_score">
            <div class="review_name_title">
              <input type="text" class="contribution_name" name="name" maxlength="10" placeholder="お名前"><br>
              <input type="text" class="contribution_title" name="title"
                     maxlength="50" placeholder="タイトル">
            </div>
            <div class="star_star">
              <div id="evaluation">
                <input id="star1" type="radio" name="score" value="5" />
                <label for="star1"><span class="text">5</span>★</label>
                <input id="star2" type="radio" name="score" value="4" />
                <label for="star2"><span class="text">4</span>★</label>
                <input id="star3" type="radio" name="score" value="3" />
                <label for="star3"><span class="text">3</span>★</label>
                <input id="star4" type="radio" name="score" value="2" />
                <label for="star4"><span class="text">2</span>★</label>
                <input id="star5" type="radio" name="score" value="1" />
                <label for="star5"><span class="text">1</span>★</label>
              </div>
            </div>
          </div>
          <textarea name='comment' class="contribution_textarea" maxlength="200" placeholder='レビューを書き込もう！'></textarea>
          <input type="hidden" name="c_id" value="<?php echo $_GET['c_id']?>">
          <input type="hidden" name="t_id" value="<?php echo $_GET['t_id']?>">
        </form>
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
      <form action="camp_review.php" method="get" name="insertForm"  class="oll_review">
        <a href="javascript:insertForm.submit()">すべてのレビューを見る</a>
        <input type="hidden" name="c_id" value="<?php echo $_GET['c_id'] ?>">
        <input type="hidden" name="t_id" value="<?php echo $_GET['t_id'] ?>">
      </form>
    </div><!-- contents -->

    <div id="pageTop">
      <p class="pagetop"><a href="#">TOP&nbsp;<i class="fas fa-arrow-up"></i></a></p>
    </div>

    <div class="copy">
      <p>Copyright© BE-PAL. All rights Reserved</p>
    </div>

  </div><!-- wrapper -->
</body>
</html>
