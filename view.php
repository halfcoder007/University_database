<table class="table table-bordered table-hover" style="text-align: center">

<tr>
<th style="text-align:center">Name</th>
<th style="text-align:center">Room No.</th>
<th style="text-align:center">Quality.</th>
</tr>

  <?php  
   if(isset($_POST['id1']))
   {
     $a =$_POST['id1'];
   // echo $a ;
    $con=mysqli_connect("localhost","root","","vit_movies");
    $query="SELECT name,room,muviquality from muvi_tbl where muviname='$a'";
    $res=mysqli_query($con,$query) or die("Cant Fetch");
    echo "<tr>$a</tr>";
    foreach($res as $row){
      echo "<tr><td>".$row['name']."</td><td>".$row['room']."</td><td>".$row['muviquality']."</td></tr>";
    }
   }
   


    
    ?>
    </table>
  