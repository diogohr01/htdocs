<?php 

$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}


/*$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "1245";

$stmt->execute();

$login = "root";
$pass = "oioioi";

$stmt->execute();

*/
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_array(MYSQLI_ASSOC)) {

array_push($data, $row);
};

echo json_encode($data);
?>