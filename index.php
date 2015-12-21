<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "anand";
$conn = new PDO("mysql:host=$servername;dbname=$db_name",$username,$password);
$result = $conn->prepare("SELECT * FROM student");
$result->execute();
$data = $result->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>
