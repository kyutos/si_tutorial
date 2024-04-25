<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>PHP開始タグ、終了タグを知る</li>
            <li>echoを使う(str,int)</li>
            <li>htmlタグを出力しみる</li>
            <li>変数を使う($hoge)</li>
            <li>. を使う(結合演算子)</li>
            <li>(演習)自分の好きな文字列を表示する</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ↓ここから -->
    <?php
    echo 'Hello World';
    echo 999;
    echo '<h1>タイトル</h1>';
    // echoの中にhtmlを書いてもOK

    $famname = 'Son';
    // 変数名は$で書き始める
    $givenname = 'Kyuto';

    echo $famname . $givenname;

    var_dump($famname);
    // 何かを調査する場合はvar_dumpを使う、変数の中身の詳細がわかる
    ?>




    <!-- ↑ここまで -->
</body>

</html>
