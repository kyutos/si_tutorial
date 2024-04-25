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
            <li>組み込み関数を知る</li>
            <li>if文と文と関数を組み合わせておみくじを作る</li>
            <li>(演習)自由におみくじをアレンジする</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ここから -->
    <?php
    date_default_timezone_set('Asia/Tokyo');

    $today = date('Y/m/d H:i:s');
    echo $today;
    $today1 = date('Y-m-d H-i-s');
    echo $today1 . "<br/>";
    // 時刻がドイツの時間になっている 設定を変えると日本時間にできる 慣れないうちに触るとphpが起動しなくなるので、
    // 設定ファイル超大事だから、とりあえずまだ触らなくてOK
    
    // if文を書いてみる
    // おみくじ
    // rand()はランダム関数
    echo rand(1, 10). "<br/>";

    $random = rand(1, 10);
    // 1から10の整数からランダムに数字を1つ選んだものを出力数る
    echo $random;
    // もし1だったら大吉、それ以外だったら大凶
    if ($random === 1) {
        echo '大吉';
    } else {
        echo '大凶';
    }

    ?>

    <!-- ここまで -->
</body>

</html>
