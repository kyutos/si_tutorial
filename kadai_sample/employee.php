<?php 

class Employee {
    private $name;
    private $age;
    private $department;
  
    public function __construct(string $name, int $age, string $department) {
      $this->name = $name;
      $this->age = $age;
      $this->department = $department;
    }
  
    // 名前を取得するメソッド
    public function getName(): string {
      return $this->name;
    }
  
    // 年齢を取得するメソッド
    public function getAge(): int {
      return $this->age;
    }
  
    // 部署を取得するメソッド
    public function getDepartment(): string {
      return $this->department;
    }
  
    // 従業員情報を文字列として返すメソッド
    public function __toString(): string {
      return "名前: {$this->name} 年齢: {$this->age} 部署: {$this->department}";
    }
}

$employee1 = new Employee("田中", 30, "営業");
$employee2 = new Employee("佐藤", 25, "開発");

echo $employee1 . "<br/>";
echo $employee2 . "<br/>";

?>