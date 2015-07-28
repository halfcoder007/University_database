<?php
session_start();
include('classes/init.php') ;
$db=new_conn();
if(isset($_POST["muviname"]) && !empty($_POST["muviname"]) && isset($_POST["muviquality"]) && !empty($_POST["muviquality"])){


try {
     
   
	$sql = "INSERT INTO muvi_tbl (id,name,room,muviname,muviquality) 
    VALUES ('{$_SESSION['id']}','{$_SESSION['Firstname']}','{$_SESSION['roomno']}','{$_POST['muviname']}','{$_POST['muviquality']}') ";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "Updated !";
    header('Location:umd.php');
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