<?php
session_start();
if (empty($_SESSION[ "user" ]) ) {
  header('Location: index.php');
  exit;  
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>新規登録｜&nbsp;初心者向け&nbsp;オトナのキャンプ&#9829; グッズ&nbsp;</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="all" />
</head>

<body>
<div id="create_user">
    <div class="create_title"> 
        <p></p>
        <p></p>
    </div>
    <form action="inseruser.php" method="post">
        <p>名前</p>
        <?php if (empty($_SESSION["err_name"])){
        }else{
            echo $_SESSION["err_name"];     

        } 
        ?>
        <p class="username"><input type="text" name="username" maxlength="32" autocomplete="OFF" /></p>

        <p>Userid</p>
        <?php if (empty($_SESSION["err_id"])){

        }else{
            echo $_SESSION["err_id"];     
        } 
        if (empty($_SESSION["existenceid"])){

        }else{
            echo $_SESSION["existenceid"];     
            
        } 
        ?>
        <p class="username"><input type="text" name="userid" maxlength="32" autocomplete="OFF" /></p>
       
        <p>Password</p>
        <?php if (empty($_SESSION["err_pass"])){
        }else{
            echo $_SESSION["err_pass"];   
            
        } 
        ?>
        <p class="password"><input type="password" name="password" maxlength="32" autocomplete="OFF" /></p>

        <p>Confirm password</p>
        <?php if (empty($_SESSION["err_confirm"])){
                
        }else{
            echo $_SESSION["err_confirm"];    
        } 
        ?>
        <p class="password"><input type="password" name="repassword" maxlength="32" autocomplete="OFF" /></p>

        <p class="submit"><strong><input type="submit" value="新規登録" /></strong></p>
    </form>
</div>
<?php 
unset($_SESSION["existenceid"]);
unset($_SESSION["err_name"]);
unset($_SESSION["err_id"]);
unset($_SESSION["err_pass"]);
unset($_SESSION["err_repass"]);
unset($_SESSION["err_confirm"]);
?>
</body>
</html>