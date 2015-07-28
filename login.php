<?php
include('classes/init.php') ;
$db=new_conn();
if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])){
$email=$_POST["email"];
$pass=$_POST["password"];


try {
     
   
	$matchuser= "SELECT id,Firstname,Lastname,email,password,roomno FROM users WHERE email='{$email}' AND password='{$pass}'" ;
   
    $db=$db->query($matchuser);
    $row = $db->fetch(PDO::FETCH_ASSOC);

    if(!$row)
    {   
        header('Location:index.php');
    }
    else{
        echo "Login Done";
        session_start();
        $_SESSION["id"]= $row['id'];
        $_SESSION["Firstname"]= $row['Firstname'];
         $_SESSION["Lastname"]= $row['Lastname'];
         $_SESSION["roomno"]= $row['roomno'];
        echo " ME".  $_SESSION["id"];
        header('Location:umd.php');
    }
    
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