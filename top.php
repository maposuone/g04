<?php
session_start();
if (empty($_SESSION[ "loginname" ]) and empty($_SESSION[ "password" ])) {
  header('Location: login.php');
  exit;  
}

require_once dirname(__FILE__).'/functions.php';
$dbobj = connectPractice();
$sql = 'SELECT * FROM category as c left join backnumber as b on c.b_id = b.b_id order by c.c_id';
$trSet = mysqli_query($dbobj, $sql) or die(mysqli_error($dbobj));
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>初心者向け&nbsp;オトナのキャンプ&#9829; グッズ&nbsp;ランキング</title>
<link href="css/common.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/script.js"></script>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC|Sawarabi+Gothic" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
      <header>
      <h1><a href="#"><img src="img/toplogo.png"
       alt="BE-PAL"></a></h1>
      </header>
    
    <div calss="logout">
      <a href="index.php">ログアウト</a>
    </div>
    
    <div class="under">
      <div class="gnav">
        <ul class="clearfix">
          <li><a href="#">ホーム</a></li>
          <li><a href="camp_ranking.php?c_id=1">テント</a></li>
          <li><a href="camp_ranking.php?c_id=2">寝袋</a></li>
          <li><a href="camp_ranking.php?c_id=3">テーブル&amp;チェアー</a></li>
          <li><a href="camp_ranking.php?c_id=4">ランプ</a></li>
          <li><a href="camp_ranking.php?c_id=5">キッチングッズセット</a></li>
        </ul>
      </div>
    </div>

    <div class="contents">
      <h2>【初心者向け】オトナのカップル<i class="far fa-heart"></i>キャンプグッズ&nbsp;ランキング</h2>



     <!--div class="keyvisual">
        <p>
        <img src="img/main_bg.jpg" alt="メイン画像">
        </p>
      </div-->


<div id="slide" class="keyvisual">
    <ul>
      <li><img src="img/main_bg01.jpg" width="700" height="450" alt="img1"></li>
      <li><img src="img/main_bg02.jpg" width="700" height="450" alt="img2"></li>
      <li><img src="img/main_bg03.jpg" width="700" height="450" alt="img3"></li>
      <li><img src="img/main_bg04.jpg" width="700" height="450" alt="img3"></li>
      <li><img src="img/main_bg05.jpg" width="700" height="450" alt="img3"></li>
      <li><img src="img/main_bg01.jpg" width="700" height="450" alt="img1"></li>
    </ul>
  </div>
  <div id="button">
    <ul>
      <li><a href="#" class="target">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
    </ul>
  </div>

      <div class="main">
        <p>
        2人だけで楽しむオトナのカップルキャンプ。キャンプの中では、自然の中で食事をしたり、
        星空を見ながらお酒を飲んだりと、普段の生活の中ではあまり経験しないような体験ができます。
        一緒にテントを設営したり、料理をしたりして相手の見たことのない一面にグッとくるなんてことも。
        初めてのキャンプデート。素敵な時間を過ごしたいけれど、何を準備すればいいんだろう…。
          そんなキャンプ初心者カップルにおススメの基本のグッズをご紹介。
          本格的なキャンプも、これだけあれば大丈夫！揃えるべき必須アイテム人気グッズランキング。
        </p>
      </div>


        <?php while($stData = mysqli_fetch_assoc($trSet)) : ?>
        <div class="camp_goods">
          <h3><?php echo h($stData['c_jp']); ?></h3>
          <div class="top_products clearfix">
            <div class="top_ranking">
            	<p class="ranking_img"><a href="camp_ranking.php?c_id=<?php echo h($stData['c_id']);?>"><img src="<?php echo h($stData['img']); ?>"width=250" height="250"></a></p>
              <p><a href="camp_ranking.php?c_id=<?php echo h($stData['c_id']);?>">ランキングへのリンク</a></p>
            </div>
            <div class="top_description">
              <p><?php echo h($stData['description_m']); ?></p>
            </div>
            <div class="top_backnumber">
            	<p><a href="<?php echo h($stData['b_link']); ?>" target=”_blank”><img src="<?php echo h($stData['b_img']); ?>" width=150"></a></p>
              <p><a href="<?php echo h($stData['b_link']); ?>" target=”_blank”><span>&#9829;</span>&nbsp;<?php echo h($stData['c_jp']); ?>特集の<br>バックナンバーはこちら</a></p>
            </div>
        </div>
      </div>
      <?php endwhile; ?>
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
