<?php

class Product {
    private $name;
    private $price;
    private $stock;

    public function __construct($name, $price, $stock) {
      $this->name = $name;
      $this->price = $price;
      $this->stock = $stock;
    }

    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getStock() {
      return $this->stock;
    }

    public function setStock($stock) {
      $this->stock = $stock;
    }

    public function showInfo() {
      echo "商品名: " . $this->name . "<br/>";
      echo "価格: " . $this->price . "<br/>";
      echo "在庫数: " . $this->stock . "<br/>";
    }
}
  
// 商品情報を設定
$name = "Tシャツ";
$price = 1000;
$stock = 10;
  
// Productクラスのインスタンスを作成
$product = new Product($name, $price, $stock);

// 商品情報を表示
$product->showInfo();

// 商品の在庫数を更新
$product->setStock($stock - 3);

// 更新後の商品情報を表示
$product->showInfo();

?>