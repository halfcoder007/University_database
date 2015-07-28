<?php
session_start();
include('classes/init.php') ;
$db=new_conn();
if(isset($_POST["bookname"]) && !empty($_POST["bookname"]) && isset($_POST["bookauthor"]) && !empty($_POST["bookauthor"])){


try {
     
   
	$sql = "INSERT INTO book_tbl (id,bookname,bookauthor) 
    VALUES ('{$_SESSION['id']}','{$_POST['bookname']}','{$_POST['bookauthor']}') ";
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