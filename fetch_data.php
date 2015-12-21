<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "anand";
$idtoUpdate = $_POST['idtoUpdate'];
$conn = new PDO("mysql:host=$servername;dbname=$db_name",$username,$password);
$result = $conn->prepare("SELECT * FROM student WHERE id=".$idtoUpdate);
$result->execute();
$data = $result->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>
