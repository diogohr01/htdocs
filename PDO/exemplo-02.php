<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";

$password = "9999";

$stmt->bindParam(":LOGIN", $login);

$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();


echo "inserido OK";





?>