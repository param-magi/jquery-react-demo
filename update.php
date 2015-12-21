<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "anand";
$id='';
try {
      $conn = new PDO("mysql:host=$servername;dbname=$db_name",$username,$password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    	$id =  $_POST['id'];
	    	$uname =  $_POST['name'];
			$email =  $_POST['email'];
			$phone =  $_POST['phone'];
			$marks =  $_POST['marks'];
		    $sql = "UPDATE student SET name='$uname',email='$email',phone='$phone', marks='$marks' WHERE id ='".$id."'";
			$stmt = $conn->prepare($sql);
		   	$stmt->execute();
		  echo $stmt->rowCount()."Update successfully";
		
	     			
   		}
   catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
