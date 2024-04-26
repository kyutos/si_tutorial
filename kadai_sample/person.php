<?php

class Person {
    private $name;
    private $age;
    private $birthplace;
    public function __construct($name, $age, $birthplace) {
        $this->name = $name;
        $this->age = $age;
        $this->birthplace = $birthplace;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getBirthplace() {
        return $this->birthplace;
    }
    public function setAge($age) {
        $this->age = $age;
    }
}
  
// 氏名、年齢、出身地を設定
$name = "アーニャ";
$age = 6;
$birthplace = "まだ謎";

// Personクラスのインスタンスを作成
$person = new Person($name, $age, $birthplace);

// 氏名、年齢、出身地を表示
echo "氏名: " . $person->getName() . "<br/>";
echo "年齢: " . $person->getAge() . "歳、盛っている" . "<br/>";
echo "出身地: " . $person->getBirthplace() . "<br/>";

// 年齢を更新
$person->setAge($age + 1);

// 更新後の年齢を表示
echo "年齢を更新しました: " . $person->getAge() . "歳、さらに盛っている" . "<br/>";

?>