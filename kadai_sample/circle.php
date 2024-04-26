<?php

class Circle {
    private $radius;
  
    public function __construct(float $radius) {
      $this->radius = $radius;
    }
  
    // 面積を計算するメソッド
    public function calcArea(): float {
      // 円周率π
      $pi = M_PI;
  
      // 面積を計算
      $area = $pi * $this->radius * $this->radius;
  
      return $area;
    }
  
    // 周長を計算するメソッド
    public function calcCircumference(): float {
      // 円周率π
      $pi = M_PI;
  
      // 周長を計算
      $circumference = 2 * $pi * $this->radius;
  
      return $circumference;
    }
}
  
// 例
$circle = new Circle(5);

echo "面積: {$circle->calcArea()}" . "<br/>";
echo "周長: {$circle->calcCircumference()}" . "<br/>";

?>