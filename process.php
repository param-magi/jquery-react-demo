<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "anand";
$id='';
try {
      $conn = new PDO("mysql:host=$servername;dbname=$db_name",$username,$password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    if(isset($_POST['name']) && isset($_POST['email'])){
	    	$uname =  $_POST['name'];
			$email =  $_POST['email'];
			$phone =  $_POST['phone_no'];
			$marks =  $_POST['marks'];
		    $sql = "INSERT INTO student values('','$uname','$email','$phone','$marks')";
		   	$conn->exec($sql);
		    echo "inserted successfully";
		}
		if(isset($_POST['idtoDelete'])){
			$idtoDelete = $_POST['idtoDelete'];
			$sql = "DELETE FROM student WHERE id='".$idtoDelete."'";
			$conn->exec($sql);

		}

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
