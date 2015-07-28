<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>University Movie Database</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstraphome.min.css" rel="stylesheet">
     <link href="css/movie.css" rel="stylesheet">
      <link href="css/reform.css" rel="stylesheet">


      <style>


   img {width: 291px; height:251px; padding-top: 0px; margin-top: 0px; }
    div.genreWrapper { border-bottom: 1px solid #ccc; font-size: 100%; background-color:#ddd; }
  div.poster {height: 150px; width: 251px; }
  div.castWrapper {width: 150px; float: left; height: 100px; }
  div.plotWrapper {clear: both;  height: 100px; font-size: 85%;}
  div.specWrapper {clear: both;  height: 20px; font-size: 110%; background-color:darkgray; }
  </style>

   
   

  
</head>

<body style="background-color:lightgray">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="umd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University Database</a></li>
      <li class="active"><a href="home.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li  ><a href="Intheatre.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IN Library</a></li>
        <li><a href="coming.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Video Tutorials</a></li>
         <li><a href="trailer.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trailers</a></li>
        <li><a href="about.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
       
        
       
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search for movies...">
        </div>
        <button type="submit" class="btn btn-info">Go!</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['Firstname'] 
              
                ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings</a></li>
            <li><a href="index.php">Logout</a></li>
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

   
    <div class="container">

        <div class="row">
 <!-- User Profile -->

         <div class="col-md-3">
                <p class="lead"><?php echo $_SESSION['Firstname'] 
              
                ?></p>
                <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 200px; height: 228px;">
    <img src="profilepic/i.jpg"  alt="...">
  </div>
  <form action="saveimage.php" enctype="multipart/form-data" method="post">
  
  <input class="btn btn-primary btn-sm" style="width:200px;" name="uploadedimage" type="file">
  <button class="btn btn-success" style="width:200px;" name="Upload Now" type="submit">Change ur dp</button>
  </form>
  
    </div>
    <div>
         <button class="btn btn-warning" style="width:200px;" data-target="#add"
      data-toggle="modal" data-backdrop="false">Add Muvi</button>
    </div>

     <div>
         <button class="btn btn-danger" style="width:200px;" data-target="#req"
      data-toggle="modal" data-backdrop="false">Req a Muvi</button>
    </div>

      <div>
         <button class="btn btn-primary" style="width:200px;" data-target="#addbook"
      data-toggle="modal" data-backdrop="false">Add a Book</button>
    </div>

     
</div>


      <div class="modal fade" id="add" tabindex="-1">
         <div class="modal-dialog">
         
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button">×</button>

              <h4 class="modal-title" id="myModalLabel">Add Ur Movie</h4>
            </div>
                <form action="add.php" method="post">
            <div class="modal-body">

               <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="muviname" placeholder="Movie Name" type="text">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="muviquality" placeholder="Movie Quality" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            <button class="btn btn-success" type="submit">Update</button> 
          </div>
          </form>
          </div>
          
      </div>
      </div>

      <!--Req movie modal-->  

      <div class="modal fade" id="req" tabindex="-1">
         <div class="modal-dialog">
         
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button"></button>

              <h4 class="modal-title" id="myModalLabel">Request a Movie</h4>
            </div>
                <form action="req.php" method="post">
            <div class="modal-body">

               <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="muviname" placeholder="Movie Name" type="text">
                        </div>
                      </div>
                    </div>
                  </div>

                 
              </div>

          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
            <button class="btn btn-success" type="submit">Update</button> 
          </div>
          </form>
          </div>
          
      </div>
      </div>

          <div class="modal fade" id="addbook" tabindex="-1">
         <div class="modal-dialog">
         
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button">×</button>

              <h4 class="modal-title" id="myModalLabel">Add Ur Book</h4>
            </div>
                <form action="addbook.php" method="post">
            <div class="modal-body">

               <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="bookname" placeholder="Title" type="text">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="bookauthor" placeholder="Author" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            <button class="btn btn-success" type="submit">Update</button> 
          </div>
          </form>
          </div>
          
      </div>
      </div>

      <!--content part-->



            <div class="col-md-9">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>

                <div class="row">
                 <div class="col-sm-4 col-lg-4 col-md-4">

<div id="display">
              
    <?php
    $db_conn = new mysqli('localhost', 'root', '', 'vit_movies');
    $subtitle = '';
    
    if($_GET) {
      $col = $_GET['c']; 
      $filter = strtolower($_GET['q']); 
      $q = "SELECT * FROM movie_collection where id={$_SESSION['id']} order by id";
      $subtitle = '<br><small> for /'.$col.'/ = %'.$filter.'%  -- <a style="color: #ccc; " href="home.php">view all</a> --</small>';
    } else {
      $q = "SELECT * FROM movie_collection where id={$_SESSION['id']} order by movie_id Desc";     
    }
    $r = $db_conn->query($q);
    $numMovies = mysqli_num_rows($r);
   
    
    if(mysqli_num_rows($r)) { 
      echo '<div class="container">
        <div class="row">';

        
      
      while($row = $r ->fetch_object()){

        
        echo '<div class="col-md-4">';
        echo '<div class="genreWrapper">';
        echo '<h2 style="font-size: 1.25em; height: 30px; background-color: darkgray;  margin-bottom:2px">&nbsp;
        '.$row->title.'<small>&nbsp;&nbsp;('.$row->year.')</small></h2>';

        echo '<div class="poster">';
        if($row->poster == "N/A"){
          echo '<img src="http://entertainment.ie/movie_trailers/trailers/flash/posterPlaceholder.jpg" />'; 
        } else {
          echo '<img src="'.$row->poster.'" />';
        }
        echo '</div>';

        echo '<div class="castWrapper">';
        echo '<h3 style="font-size: 1em;"></h3>';             
        echo '</div>';

        echo '<div class="plotWrapper">';
        echo '<p>.</p>';
        echo '<p>'.$row->plot.'</p>';
        echo '</div>';

        echo '<div class="specWrapper">';
        echo '<p>' . $row->runtime . 'min&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->imdbrating. '&nbsp;IMDB' .'</p> </div>'  ;


        echo '</div></div>';       
        
      }

      echo '</div>
        </div>';


    } else {
      echo "No Movie to Display";
      echo 'Add your movies';
    }
    ?>
</div>



</div>


                   </div>

       <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                <center>
                    <p class="page-footer">Copyright &copy; MY Website 2014</p></center>
                </div>
            </div>
        </footer>

    </div>
   

    <script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

