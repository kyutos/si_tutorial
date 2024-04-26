<!-- select.phpのデータの右に[削除]というボタンを押せば、削除できるようにする -->
<?php

//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//2. $id = $_POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更

require_once('funcs.php');

// funcsで定義した関数を呼び出す　importに似ている. returnされている$pdoが関数の出力結果
$pdo = db_connect();

//1. GETデータ取得
$id   = $_GET['id'];

//2. DB接続します
//*** function化する！  *****************

// try {
//     $db_name = 'si_db'; //データベース名
//     $db_id   = 'root'; //アカウント名
//     $db_pw   = ''; //パスワード：MAMPは'root'
//     $db_host = 'localhost'; //DBホスト
//     $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
// } catch (PDOException $e) {
//     exit('DB Connection Error:' . $e->getMessage());
// }

//３．データ登録SQL作成
// DELETE FROM テーブル名 WHERE(絶対書くように) WHERE id = 対象id(バインド処理)
$stmt = $pdo->prepare(
    'DELETE FROM si_first_table WHERE id = :id; '
);

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: select.php');
    exit();
}
