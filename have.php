
    <?php
session_start();
include('classes/init.php') ;
$db=new_conn();
 if(isset($_POST['id1'])){

 $a =$_POST['id1'];
 $quality="720p";
try {
     
   
  $sql ="INSERT INTO muvi_tbl (id,name,room,muviname,muviquality) 
    VALUES ('{$_SESSION['id']}','{$_SESSION['Firstname']}','{$_SESSION['roomno']}','$a','$quality') ";
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
  