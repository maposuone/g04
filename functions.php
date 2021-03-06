<?php
// HTMLでのエスケープ処理をする関数
function h($var) {
  if (is_array($var)) {
    return array_map('h', $var);
  } else {
    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
  }
}

// 不正なデータをチェックする関数
function checkInput($var) {
  if (is_array($var)) {
    return array_map('checkInput', $var);
  } else {
    if (get_magic_quotes_gpc()) { // magic_quotes_gpc対策
      $var = stripslashes($var);
    }
    if (preg_match('/\0/', $var)) { // NULLバイト攻撃対策
      die('不正な入力です。');
    }
    if (!mb_check_encoding($var, 'UTF-8')) {  // 文字エンコードの確認
      die('不正な入力です。');
    }
    return $var;
  }
}

// MySQL(MariaDB)に接続する関数
function connectPractice() {
  $dbobj = mysqli_connect('localhost', 'root', 'admin') or die(mysqli_error($dbobj));
  mysqli_select_db($dbobj, 'g04');
  mysqli_set_charset($dbobj, 'utf8');
  return $dbobj;
}
