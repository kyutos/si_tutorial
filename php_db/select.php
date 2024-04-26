<?php
//1.  DB接続します

//htmlspecialcharsの関数を作って、簡単に管理できるようにする
// function h($str)  {
//   return htmlspecialchars($str, ENT_QUOTES);
// }
require_once('/funcs.php');


try {
  //ID:'root', Password: xamppは 空白 ''  "xampp"
  $pdo = new PDO('mysql:dbname=si_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM si_first_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  //  while文　〜の間、⚪︎⚪︎する
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .= h($result['indate'], ENT_QUOTES) . h($result['name'], ENT_QUOTES) . h($result['content'], ENT_QUOTES);
    // dbの中身のxxs対策に、htmlspecialcharsを使う
    $view .= "</p>";
  }
  // $viewの後の　= の前に .を書くと、後に追加されるようになる　.=
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
    <!-- 省略記法　本当は echo $view -->
</div>
<!-- Main[End] -->

</body>
</html>
