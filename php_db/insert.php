<?php

/**
 * 操作内容
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得
$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

//2. DB接続します
try {
  // ID:'root', Password: xamppは 空白 '' "xampp"
  $pdo = new PDO('mysql:dbname=si_db;chartset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


// 動作確認
// echo '<pre>';
// var_dump($pdo);
// echo '</pre>';
// exit;

//３．データ登録SQL作成

// 1. SQL文を用意
// $nameを直接ここに書くとセキュリティ上中身見えてしまうので、:nameでセキュリティ上ワンクッション置くようにする
$stmt = $pdo->prepare("
    INSERT INTO
        si_first_table(id, name, email,content, indate)
    VALUES (
        NULL, :name, :email, :content, sysdate()
        )");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
// セキュリティ上の処理

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT); //PARAM_INTなので注意
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//  3. 実行
// 失敗するとfaulse、成功するとtrueが出てくる
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．index.phpへリダイレクト(再度表示する)
  // 成功した場合
  // echo 'test';で動作確認
  header('Location: /index.php');

}
?>
