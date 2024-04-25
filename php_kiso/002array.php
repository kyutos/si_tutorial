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
            <li>配列の書き方を確認(出力の仕方も確認)</li>
            <li>var_dumpを使う</li>
            <li>(演習)配列名'loveFoods'で、自分の好きな食べ物3つの配列を作成。echoで、一番好きなものを出力</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ↓ここから -->
    <?php

    $ary = ['Tokyo', 'Paris', 'New York'];
    var_dump($ary);
    // 1つだけみたい場合 parisが表示される
    var_dump($ary[1]);

    echo $ary[1];
    // 配列そのものはエラーになるが、中身を指定するとechoで表示できる

    $ary[] = 'Fukuoka';
    var_dump($ary);

    $loveFoods = ['とんかつ', '寿司', 'ヤンニョムチキン'];
    var_dump($loveFoods);
    echo $loveFoods[2];

    
    $fruits = ["apple", "banana", "orange"];
    echo $fruits[0]. "<br/>"; // "apple" と出力 
    echo $fruits[1]; // "banana" と出力 
    echo $fruits[2]; // "orange" と出力


    // 連想配列、多次元配列などにもチャレンジしてみよう
    $user = [ 
        "name" => "田中", 
        "age" => 30, 
        "email" => "tanaka@example.com", 
      ]; 
      
    echo $user["name"]; 
    echo $user["age"]; 
    echo $user["email"];

    ?>


    <!-- ↑ここまで -->
</body>

</html>
