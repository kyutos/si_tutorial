<?php
$user = [ 
    "name" => "田中", 
    "age" => 30, 
    "email" => "tanaka@example.com", 
  ]; 
  
  echo $user["name"]; 
  echo $user["age"]; 
  echo $user["email"];

$users = [
    "田中" => 30,
    "佐藤" => 20,
    "斎藤" => 40,
];

ksort($users);
print_r($users);
?>