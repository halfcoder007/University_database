<?php
include('classes/init.php') ;
$db=new_conn();
if(isset($_POST["emailr"]) && !empty($_POST["emailr"]) && isset($_POST["passwordr"]) && !empty($_POST["passwordr"])){
$email=$_POST["emailr"];
$pass=$_POST["passwordr"];


try {
      // sql to create table
   
	$sql = "INSERT INTO users (Firstname,Lastname,email,password,roomno) 
    VALUES ('{$_POST['fname']}','{$_POST['lname']}','$email', '$pass','{$_POST['room']}') ";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "Registration Done !";
    header('Location:index.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
else
{
	echo "Data Not Entered";
}
?>