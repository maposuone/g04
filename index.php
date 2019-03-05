<?php
session_start();
$_SESSION[ "user" ] = "g04";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログイン｜&nbsp;初心者向け&nbsp;オトナのキャンプ&#9829; グッズ&nbsp;</title>
    <link href="css/star.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link href="css/camp_ranking.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/login.css" media="all" />
</head>

<body>
    <header>
      <h1><img src="img/toplogo.png" alt="BE-PAL"></a></h1>
    </header>

<div id="form">
    <div class="form-title"> 
        <p><strong>行こう　やろう　今のままでは何にも変わらないから</strong><br></p>
    </div>

        <?php if ((empty($_SESSION['error'])) and (empty($_SESSION["ok_message"]))){
                echo("<p>ログインIDとパスワードを入力してください。</p>");
            } else if (isset($_SESSION['error'])) {
                echo ("<p>". $_SESSION["error"] . "</p>");
            } else if (isset($_SESSION["ok_message"])){
                echo ("<p>". $_SESSION["ok_message"]. "</p>");
            }
       ?>     
    
    <form action="login_check.php" method="post">
        <p>Userid</p>
        <p class="username"><input type="text" name="username" maxlength="32" value="" /></p>
        <p>Password</p>
        <p class="password"><input type="password" name="password" maxlength="32" value="" /></p>
        <p class="create_page" ><a href="createuser.php"><strong>始めての方はこちらへ</strong></a></p>
        <p class="submit"><strong><input type="submit" value="ログイン" /></strong></p>
    </form>
</div>
<?php 
unset($_SESSION["error"]);
unset($_SESSION["ok_message"]);
?>


</body>
</html>
