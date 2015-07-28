<?php
session_start();
include('classes/init.php') ;
$db=new_conn();
if(isset($_POST["muviname"]) && !empty($_POST["muviname"])) {


try {
     
   
	$sql = "INSERT INTO request (firstname,moviename) 
    VALUES ('{$_SESSION['Firstname']}','{$_POST['muviname']}') ";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "Updated !";
   +header('Location:umd.php');
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