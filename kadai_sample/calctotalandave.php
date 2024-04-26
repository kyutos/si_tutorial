<?php

function calcTotalAndAverage(int $num1, int $num2, int $num3): array {
    // 合計値を計算
    $total = $num1 + $num2 + $num3;
  
    // 平均値を計算
    $average = $total / 3;
  
    // 合計値と平均値を配列で返す
    return [
      'total' => $total,
      'average' => $average,
    ];
  }
  
  // 例
  $result = calcTotalAndAverage(1, 2, 3);
  
  echo "合計値: {$result['total']}" . "<br/>";
  echo "平均値: {$result['average']}" . "<br/>";

?>