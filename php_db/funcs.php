<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)  {
    return htmlspecialchars($str, ENT_QUOTES);
  }

// PHPの閉じタグの後にもし空白やスペースを入れてしまった場合、プログラミング自体が動かなくなったりします。
// そうしたトラブルを避けるためにも、閉じタグは使わずにする

//DB接続関数：db_conn() 
//※関数を作成し、内容をreturnさせる。
//※ DBname等、今回の授業に合わせる。


//SQLエラー関数：sql_error($stmt)

function db_connect() {
    
  try {
      $db_name = 'si_db'; //データベース名
      $db_id   = 'root'; //アカウント名
      $db_pw   = ''; //パスワード：MAMPは'root'
      $db_host = 'localhost'; //DBホスト
      // $pdoは関数の外でも使うのでreturnで結果が出るようにする
      return $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
  } catch (PDOException $e) {
      exit('DB Connection Error:' . $e->getMessage());
  }

}

//*** function化する！*****************
//リダイレクト関数: redirect($file_name) redirect(引数)
function redirect($file_name) {
  header('Location: $file_name');
  // index.phpのところは任意で変更したい
  exit();
}
