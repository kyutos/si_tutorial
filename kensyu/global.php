<?php
// グローバル変数を定義 
global $message;
$message = "Hello World!"; 
function foo() {
// グローバル変数を参照
global $message; 
echo $message . "<br/>"; 
// brで改行
} 
foo(); 
// グローバル変数を変更 
$message = "Good morning world!"; 
foo(); 
?>